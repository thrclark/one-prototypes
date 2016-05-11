/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
adminModule.controller('MainMetadataController', ['$scope', 'systemParameterService', 'alertService', function($scope, systemParameterService, alertService) {
	$scope.alertService = alertService;

	systemParameterService.findMetadataSystemParameter().then(function(data) {
		$scope.metadataSystemParameter = data;
	});

	$scope.reloadMetadataSystemParameter = function() {
		systemParameterService.reloadMetadataSystemParameter().then(function() {
			alertService.addAlert('Main Metadata will be reloaded momentarily.', 'success', true);
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to reload main Metadata file (' + response.status + ')', 'danger');
			}
		});
	};
}]);