/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditRoleController', ['$scope', '$routeParams', '$location', 'roleService', 'alertService', function($scope, $routeParams, $location, roleService, alertService) {
	$scope.alertService = alertService;
	
	roleService.findRole($routeParams.roleId).then(function(data) {
		$scope.role = data;
	});

	$scope.saveRole = function() {
		roleService.saveRole($scope.role).then(function() {
			alertService.addAlert('Role saved successfully', 'success', true);
			$location.path('/roles');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save role (' + response.status + ')', 'danger');
			}
		});
	};
	
	roleService.getPageData().then(function(data) {
		$scope.pageData = data;
	});
}]);