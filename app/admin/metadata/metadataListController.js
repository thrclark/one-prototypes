/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('MetadataListController', ['$scope', '$routeParams', 'tenantService', 'alertService', function($scope, $routeParams, tenantService, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;
	
	tenantService.findMetadataList($routeParams.tenantId).then(function(data) {
		$scope.metadataList = data.metadataList;
		$scope.tenantId = data.tenantId;
	});
	
	$scope.confirmDelete = function(metadata) {
		$scope.metadataToDelete = metadata;
		$('#deleteMetadataDialog').modal('show');
	};
	
	$scope.deleteMetadata = function() {
    	tenantService.deleteMetadata($scope.metadataToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.metadataToDelete.metadataId+'".', 'success', true);
			$scope.metadataList.splice($scope.metadataList.indexOf($scope.metadataToDelete), 1);
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.metadataToDelete.metadataId+'". (' + status + ')', 'danger');
		});
    	$('#deleteMetadataDialog').modal('hide');
	};
}]);