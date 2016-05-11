/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditImageController', ['$scope', '$routeParams', '$location', '$parse', 'imageService', 'alertService', function($scope, $routeParams, $location, $parse, imageService, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;
	
	if ($routeParams.imageId) {
		imageService.findImage($routeParams.imageId).then(function(data) {
			$scope.image = data;
		});
	} else {
		imageService.newImage().then(function(data) {
			$scope.image = data;
		});
	}
	
	imageService.getPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	
	$scope.saveImage = function() {
		imageService.saveImage($scope.image).then(function(data) {
			alertService.addAlert('Image saved successfully.', 'success', true);
			$location.path('/images');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save the image. (' + status + ')', 'danger');
			}
		});
	};
	
	
	$scope.uploadUrl = contextPath + '/publish/image/media';

    $scope.uploadDone = function(e, data, uploadReturn, mediaName) {
    	var file = data.result.files[0];

    	$parse(uploadReturn).assign($scope, {
    		error: false,
    		message: 'Uploaded Succesfully.',
    	});
    	
    	var media = {name:file.name};
    	var model = $parse(mediaName);
        model.assign($scope, media);
    };

    $scope.uploadProgress = function(e, data, uploadReturn) {
    	$parse(uploadReturn).assign($scope, {
    		error: false,
    		message: 'Uploading...'
    	});
    };

    $scope.uploadFail = function(e, data, uploadReturn) {
    	$parse(uploadReturn).assign($scope, {
    		error: true,
    		message: 'Upload Failed.',
    		errorMessage: data.errorThrown + (data.jqXHR.responseText ? " (" + data.jqXHR.responseText + ")" : "")
    	});
    };
}]);