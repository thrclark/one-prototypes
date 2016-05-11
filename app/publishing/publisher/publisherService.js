/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function PublisherService($http, $q) {

	this.findPublishers = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/publishers'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.findPublisher = function(publisherId) {
		var deferred = $q.defer();
		if (publisherId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/publisher/' + publisherId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};
	
	this.newPublisher = function(publisherId) {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/publisher/new'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	

	this.savePublisher = function(publisher) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/publisher',
			data : publisher
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.deletePublisher = function(publisher) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/publisher/delete', data:publisher}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	this.getPublisherPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/publisher/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}