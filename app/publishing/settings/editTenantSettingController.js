/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditTenantSettingController', ['$scope', '$routeParams', '$location', '$parse', 'tenantSettingService', 'alertService', function($scope, $routeParams, $location, $parse, tenantSettingService, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;

	tenantSettingService.findTenantSetting($routeParams.uniqueKey).then(
		function(data) {
			$scope.setting = data.setting;
			$scope.admin = data.isAdmin;
		}
	);

	$scope.saveTenantSetting = function() {
		if ($scope.tenantSettingForm.$valid) {
			tenantSettingService.saveTenantSetting($scope.setting).then(
				function(data) {
					alertService.addAlert('Settings saved successfully.', 'success', true);
					$location.path('/tenantSettings');
				},
				function(response) {
					if (response.status == 406) { // 406 == Not Acceptable
						$scope.errors = response.data;
					} else {
						alertService.addAlert('Failed to save the settings. (' + status + ')', 'danger');
					}
				}
			);
		}
	};
	var selectedValue = new Object();

	var tenantSettingValue = new Object();
	tenantSettingValue.tenantSettingValueId = null;
	tenantSettingValue.tenantSettingId = null;
	tenantSettingValue.status = 'A';
	tenantSettingValue.value = '';
	tenantSettingValue.lockingNumber = null;

	selectedValue.tenantSettingValue = tenantSettingValue;
	selectedValue.buttonName = 'Add';
	$scope.selectedValue = selectedValue;
	

	$scope.addTenantSettingValue = function() {
		if ($scope.selectedValue.tenantSettingValue.value) {
			var found = false;
			var foundTenantSettingValue = null;
			for ( var int = 0; int < $scope.setting.multiValuedTenantSettingValues.length; int++) {
				var tenantSettingValue = $scope.setting.multiValuedTenantSettingValues[int];
				if (tenantSettingValue.status != 'I' || !$scope.selectedValue.tenantSettingValue.tenantSettingValueId) {
					if (tenantSettingValue.value == $scope.selectedValue.tenantSettingValue.value) {
						found = true;
						foundTenantSettingValue = tenantSettingValue;
					}
				}
			}

			if (!$scope.selectedValue.editing) {
				if (found) {
					foundTenantSettingValue.status = 'A';
				} else {
					$scope.setting.multiValuedTenantSettingValues.push($scope.selectedValue.tenantSettingValue);
				}
			}

			$scope.selectedValue.editing = false;

			var tenantSettingValue = new Object();
			tenantSettingValue.tenantSettingValueId = null;
			tenantSettingValue.tenantSettingId = null;
			tenantSettingValue.status = 'A';
			tenantSettingValue.value = '';
			tenantSettingValue.lockingNumber = null;
			$scope.selectedValue.tenantSettingValue = tenantSettingValue;
			$scope.selectedValue.buttonName = 'Add';
		}
	};

	$scope.removeTenantSettingValue = function(tenantSettingValue) {
		if (tenantSettingValue && $scope.setting.multiValuedTenantSettingValues.indexOf(tenantSettingValue) >= 0) {
			if (tenantSettingValue.tenantSettingValueId) {
				tenantSettingValue.status = 'I';
			} else {
				$scope.setting.multiValuedTenantSettingValues.splice($scope.setting.multiValuedTenantSettingValues.indexOf(tenantSettingValue), 1);
			}
		}
	};
	$scope.editTenantSettingValue = function(tenantSettingValue) {
		if (tenantSettingValue && $scope.setting.multiValuedTenantSettingValues.indexOf(tenantSettingValue) >= 0) {
			var selectedValue = new Object();
			selectedValue.editing = true;
			selectedValue.buttonName = 'Done Editing';
			selectedValue.tenantSettingValue = tenantSettingValue;
			$scope.selectedValue = selectedValue;
		}
	};
	
	
	$scope.uploadUrl = contextPath + '/publish/image/media';
	
	$scope.uploadDone = function(e, data, uploadReturn, mediaName) {
		var file = data.result.files[0];

		$parse(uploadReturn).assign($scope, {
			error: false,
			message: 'Uploaded Succesfully.',
		});
    	
		var media = {name:file.name};
		var model = $parse(mediaName);
		model.assign($scope, media);
	};

    $scope.uploadProgress = function(e, data, uploadReturn) {
    	$parse(uploadReturn).assign($scope, {
    		error: false,
    		message: 'Uploading...'
    	});
    };

    $scope.uploadFail = function(e, data, uploadReturn) {
    	$parse(uploadReturn).assign($scope, {
    		error: true,
    		message: 'Upload Failed.',
    		errorMessage: data.errorThrown + (data.jqXHR.responseText ? " (" + data.jqXHR.responseText + ")" : "")
    	});
    };
}]);
