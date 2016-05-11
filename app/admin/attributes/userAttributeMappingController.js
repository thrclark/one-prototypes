/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('UserAttributeMappingController', ['$scope', '$routeParams', '$location', 'userAttributeMappingService', 'alertService', function($scope, $routeParams, $location, userAttributeMappingService, alertService) {
	$scope.alertService = alertService;
	
	userAttributeMappingService.findUserAttributeMapping($routeParams.userAttributeMappingId).then(function(data) {
		$scope.userAttributeMapping = data;
	});
	
	$scope.saveUserAttributeMapping = function() {
		userAttributeMappingService.saveUserAttributeMapping($scope.userAttributeMapping).then(function() {
			alertService.addAlert('User Attribute Mapping saved successfully', 'success', true);
			$location.path('/userAttributeMappingList/'+$scope.userAttributeMapping.tenantId);
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save User Attribute Mapping (' + response.status + ')', 'danger');
			}
		});
	};
}]);