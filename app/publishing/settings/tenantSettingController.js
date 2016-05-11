/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('TenantSettingController', ['$scope', 'tenantSettingService', 'alertService', function($scope, tenantSettingService, alertService) {
	$scope.alertService = alertService;
	
	tenantSettingService.findTenantSettings().then(function(data) {
		var settingMap = {};
		
		//group like settings together
		for (index in data.settings) {
			var setting = data.settings[index];
			var settingGroup = settingMap[setting.tenantSetting.groupKey];
			if (settingGroup == null) {
				settingGroup = {
					title: setting.tenantSetting.groupKey,
					settings: []
				};
				settingMap[setting.tenantSetting.groupKey] = settingGroup;
			}
			settingGroup.settings.push(setting);
		}
		
		//convert to array and sort
		var settingGroupArray = [];
		for (key in settingMap) {
			settingMap[key].settings.sort(function(a,b) {return a.tenantSetting.uniqueKey.localeCompare(b.tenantSetting.uniqueKey);});
			settingGroupArray.push(settingMap[key]);
		}
		settingGroupArray.sort(function(a,b) {return a.title.localeCompare(b.title);});
		
		$scope.settings = settingGroupArray;
		$scope.admin = data.isAdmin;
	}, function(status) {
		alertService.addAlert('There was a problem retrieving tenant settings. (' + status + ')', 'danger');
	});
}]);