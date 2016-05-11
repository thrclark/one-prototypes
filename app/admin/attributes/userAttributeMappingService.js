/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function UserAttributeMappingService($http, $q) {

	this.findUserAttributeMappings = function(tenantId) {
		var deferred = $q.defer();
		if(tenantId){
			$http({
				method : 'GET',
				url : contextPath + '/admin/userAttributeMappingList/' + tenantId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.findUserAttributeMapping = function(userAttributeMappingId) {
		var deferred = $q.defer();
		if (userAttributeMappingId) {
			$http({
				method : 'GET',
				url : contextPath + '/admin/userAttributeMapping/' + userAttributeMappingId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.saveUserAttributeMapping = function(userAttributeMapping) {
		var deferred = $q.defer();
		$http({method : 'POST', url : contextPath + '/admin/userAttributeMapping', data : userAttributeMapping})
			.success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject({'status':status,'data':data});
			});
		return deferred.promise;
	};
	

}