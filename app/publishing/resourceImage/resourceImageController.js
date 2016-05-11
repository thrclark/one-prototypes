/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('ResourceImageController', ['$scope', '$location', '$timeout', '$http', 'alertService', function($scope, $location, $timeout, $http, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;
	
	$scope.queue = [];
	$scope.fileUploadOptions = {
        url: contextPath + '/publish/resourceImages',
        autoUpload: true,
        acceptFileTypes: /(\.|\/)(jpe?g|png)$/i,
		loadImageFileTypes: /^image\/(jpeg|jpg|png)$/,
        previewMaxWidth: null,
        previewMaxHeight: 100,
    };

	//load existing images
	$timeout(function() {
		$http({method: 'GET', url: $('#fileupload').fileupload('option', 'url')}).
		  success(function(data, status, headers, config) {
			  for (index in data.files) {
				  $scope.queue.push(data.files[index]);
			  }
		  });
	}, 0);
	
	$scope.saveHeaderFooter = function() {
		var data = {
			header: $scope.header,
			footer: $scope.footer,
			css: $scope.css
		};
		$http({method:'POST', url:contextPath + '/publish/resourceImage', data:data}).
			success(function(data, status, headers, config) {
				alertService.addAlert('Saved successfully', 'success', true);
				$location.path('/publish');
			}).
			error(function(data, status, headers, config) {
				alertService.addAlert('Failed to save task (' + status + ')', 'danger');
			});
	};
	
	$http({method:'GET', url:contextPath + '/publish/resourceImage/pageData'}).
		success(function(data, status, headers, config) {
			$scope.header = data.header;
			$scope.footer = data.footer;
			$scope.css = data.css;
		}).
		error(function(data, status, headers, config) {
			alertService.addAlert('Failed to retrieve data (' + status + ')', 'danger');
		});
}]);