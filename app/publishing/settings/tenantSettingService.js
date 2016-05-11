/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function TenantSettingService($http, $q) {

	this.findTenantSettings = function() {
		var deferred = $q.defer();
		var url = contextPath + '/publish/settings';
		$http({
			method : 'GET',
			url : url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.findTenantSetting = function(uniqueKey) {
		var deferred = $q.defer();
		if (uniqueKey) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/tenantSetting/' + uniqueKey
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};
	
	this.saveTenantSetting = function(setting) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/tenantSetting',
			data : setting
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({
				'status' : status,
				'data' : data
			});
		});
		return deferred.promise;
	};

}