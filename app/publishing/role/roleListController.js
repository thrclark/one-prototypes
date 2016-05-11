/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('RoleListController', ['$scope', '$routeParams', 'roleService', 'alertService', function($scope, $routeParams, roleService, alertService) {
	$scope.alertService = alertService;

	function getRoles() {
		roleService.findRoles().then(function(data) {
			$scope.roles = data;
		});
	};
	
	getRoles();
	
	$scope.confirmDelete = function(role) {
		$scope.roleToDelete = role;
		$('#deleteRoleDialog').modal('show');
	};
	
	$scope.deleteRole = function() {
    	roleService.deleteRole($scope.roleToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.roleToDelete.name+'".', 'success', true);
			getRoles();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.roleToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteRoleDialog').modal('hide');
	};
}]);