/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('TenantListController', ['$scope', 'tenantService', 'alertService', function($scope, tenantService, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;
	
	tenantService.findTenants().then(function(data) {
		$scope.tenants = data;
	});
	
	$scope.confirmDelete = function(tenant) {
		$scope.tenantToDelete = tenant;
		$('#deleteTenantDialog').modal('show');
	};
	
	$scope.deleteTenant = function() {
    	tenantService.deleteTenant($scope.tenantToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.tenantToDelete.name+'".', 'success', true);
			$scope.tenants.splice($scope.tenants.indexOf($scope.tenantToDelete), 1);
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.tenantToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteTenantDialog').modal('hide');
	};
}]);