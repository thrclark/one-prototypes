/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('UserAttributeMappingListController', ['$scope', '$routeParams', 'userAttributeMappingService', 'alertService', function($scope, $routeParams, userAttributeMappingService, alertService) {
	$scope.alertService = alertService;

	userAttributeMappingService.findUserAttributeMappings($routeParams.tenantId).then(function(data) {
		$scope.userAttributeMappingList = data.userAttributeMappingList;
		$scope.tenantId = data.tenantId;
	});
}]);