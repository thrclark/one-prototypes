/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function BanUserService($http, $q) {

	this.findBannedUsers = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/ban'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.banUser = function(userId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/ban/user',
			data: userId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.restoreUser = function(userId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/ban/restore',
			data: {'userId': userId}
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
}