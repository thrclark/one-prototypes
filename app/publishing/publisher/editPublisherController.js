/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditPublisherController', ['$scope', '$routeParams', '$location', 'publisherService', 'alertService', function($scope, $routeParams, $location, publisherService, alertService) {
	$scope.alertService = alertService;
	
	if ($routeParams.publisherId) {
		publisherService.findPublisher($routeParams.publisherId).then(function(data) {
			$scope.publisher = data;
		});
	} else {
		publisherService.newPublisher().then(function(data) {
			$scope.publisher = data;
		});
	}
	
	publisherService.getPublisherPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.savePublisher = function() {
		publisherService.savePublisher($scope.publisher).then(function() {
			alertService.addAlert('Publisher saved successfully', 'success', true);
			$location.path('/publishers');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save publisher (' + response.status + ')', 'danger');
			}
		});
	};
}]);