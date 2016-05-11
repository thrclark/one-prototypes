/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function TenantService($http, $q) {

	this.findTenants = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/admin/tenants'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.findTenant = function(tenantId) {
		var deferred = $q.defer();
		if (tenantId) {
			$http({
				method : 'GET',
				url : contextPath + '/admin/tenant/' + tenantId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.newTenant = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/admin/tenant/new'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.saveTenant = function(tenant) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/admin/tenant',
			data : tenant
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

	this.deleteTenant = function(tenant) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/admin/tenant/delete',
			data : tenant
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.getTenantPageData = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/admin/tenant/pageData'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.findMetadataList = function(tenantId) {
		var deferred = $q.defer();
		if (tenantId) {
			$http({
				method : 'GET',
				url : contextPath + '/admin/metadataList/' + tenantId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.deleteMetadata = function(metadata) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/admin/metadata/delete',
			data : metadata
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.findMetadata = function(metadataId) {
		var deferred = $q.defer();
		if (metadataId) {
			$http({
				method : 'GET',
				url : contextPath + '/admin/metadata/' + metadataId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.newMetadata = function(tenantId) {
		var deferred = $q.defer();
		if (tenantId) {
			$http({
				method : 'GET',
				url : contextPath + '/admin/metadata/new/' + tenantId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.saveMetadata = function(metadata) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/admin/metadata',
			data : metadata
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