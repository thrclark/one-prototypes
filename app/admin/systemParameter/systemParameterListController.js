/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('SystemParameterListController', ['$scope', 'systemParameterService', 'alertService', function($scope, systemParameterService, alertService) {

	$scope.alertService = alertService;

	systemParameterService.findSystemParameters().then(function(data) {
		$scope.systemParameters = data;
	});
}]);