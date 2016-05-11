/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('MetadataController', ['$scope', '$routeParams', '$location', 'tenantService', 'alertService', function($scope, $routeParams, $location, tenantService, alertService) {
	$scope.alertService = alertService;
	
	if ($routeParams.metadataId) {
		tenantService.findMetadata($routeParams.metadataId).then(function(data) {
			$scope.metadata = data;
		});
	} else {
		tenantService.newMetadata($routeParams.tenantId).then(function(data) {
			$scope.metadata = data;
		});
	}

	$scope.saveMetadata = function() {
		tenantService.saveMetadata($scope.metadata).then(function() {
			alertService.addAlert('Metadata saved successfully', 'success', true);
			$location.path('/metadataList/'+$scope.metadata.tenantId);
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save metadata (' + response.status + ')', 'danger');
			}
		});
	};
}]);