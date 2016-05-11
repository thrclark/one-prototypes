/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('EditSystemParameterController', ['$scope', '$routeParams', '$location', 'systemParameterService', 'alertService', function($scope, $routeParams, $location, systemParameterService, alertService) {

	$scope.alertService = alertService;
	
	systemParameterService.findSystemParameter($routeParams.systemParameterName).then(function(data) {
		$scope.systemParameter = data;
	});
	
	$scope.saveSystemParameter = function() {
		systemParameterService.saveSystemParameter($scope.systemParameter).then(function() {
			alertService.addAlert('System Parameter saved successfully', 'success', true);
			$location.path('/systemParameters');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save system parameter (' + response.status + ')', 'danger');
			}
		});
	};
}]);