/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function TagService($http, $q) {
	
	this.findTags = function(tenantId) {
		var deferred = $q.defer();
		var url = contextPath + '/publish/tags';
		if (tenantId) {
			url += '?tenantId=' + tenantId;
		}
		$http({method: 'GET', url: url}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.newTag = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/tag/new'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.findTag = function(tagId) {
		var deferred = $q.defer();
		if (tagId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/tag/' + tagId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};
	
	this.saveTag = function(tag) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/tag', data:tag}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject({'status':status,'data':data});
		  });
		return deferred.promise;
	};
	
	this.deleteTag = function(tag) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/tag/delete', data:tag}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.getTagPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/tag/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
}