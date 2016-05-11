/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function SystemParameterService($http, $q) {

	this.findSystemParameters = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/admin/systemParameters'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};
	
	this.findMetadataSystemParameter = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/admin/metadataSystemParameter'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};
	
	this.reloadMetadataSystemParameter = function() {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/admin/reloadMetadataSystemParameter'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.findSystemParameter = function(systemParameterName) {
		var deferred = $q.defer();
		if (systemParameterName) {
			$http({
				method : 'GET',
				url : contextPath + '/admin/systemParameter/' + systemParameterName
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.saveSystemParameter = function(systemParameter) {
		var deferred = $q.defer();
		$http({method : 'POST', url : contextPath + '/admin/systemParameter', data : systemParameter})
			.success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject({'status':status,'data':data});
			});
		return deferred.promise;
	};
	

}