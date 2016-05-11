/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function RoleService($http, $q) {

	this.findRoles = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/roles'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.findRole = function(roleId) {
		var deferred = $q.defer();
		if (roleId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/role/' + roleId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject(status);
			});
		}
		return deferred.promise;
	};

	this.saveRole = function(role) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/role',
			data : role
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.deleteRole = function(role) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/role/delete',
			data : role
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.getPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/role/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}