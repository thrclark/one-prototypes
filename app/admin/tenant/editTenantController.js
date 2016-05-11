/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('EditTenantController', ['$scope', '$routeParams', '$location', 'tenantService', 'alertService', function($scope, $routeParams, $location, tenantService, alertService) {
	$scope.alertService = alertService;
	
	if ($routeParams.tenantId) {
		tenantService.findTenant($routeParams.tenantId).then(function(data) {
			$scope.tenant = data;
		});
	} else {
		tenantService.newTenant().then(function(data) {
			$scope.tenant = data;
		});
	}
	
	tenantService.getTenantPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.selectedUrl = '';

	$scope.addUrl = function() {
		if ($scope.selectedUrl && $scope.tenant.domainUrls.indexOf($scope.selectedUrl) < 0) {
			var url = new Object();
			url.url = $scope.selectedUrl;
			$scope.tenant.domainUrls.push(url);
		}
	};

	$scope.removeUrl = function(url) {
		if (url && $scope.tenant.domainUrls.indexOf(url) >= 0) {
			$scope.tenant.domainUrls.splice($scope.tenant.domainUrls.indexOf(url), 1);
		}
	};
	
	$scope.saveTenant = function() {
		tenantService.saveTenant($scope.tenant).then(function() {
			alertService.addAlert('Tenant saved successfully', 'success', true);
			$location.path('/tenants');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save tenant (' + response.status + ')', 'danger');
			}
		});
	};
}]);