/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function FeaturedTaskService($http, $q) {

	this.findFeaturedTasks = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/featuredTasks'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.updateFeaturedTaskOrder = function(featuredTasks) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/featuredTaskOrder',
			data : featuredTasks
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.findFeaturedTask = function(taskUid) {
		var deferred = $q.defer();
		if (taskUid) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/featuredTask?taskUid=' + taskUid
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject(status);
			});
		}
		return deferred.promise;
	};

	this.saveFeaturedTask = function(featuredTask) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/featuredTask',
			data : featuredTask
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.deleteFeaturedTask = function(featuredTask) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/featuredTask/delete',
			data : featuredTask
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.getFeaturedTaskPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/featuredTask/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};

}