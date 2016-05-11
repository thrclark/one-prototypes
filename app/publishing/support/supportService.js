/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function SupportService($http, $q, taskService) {
	
	this.viewTask = function(taskId, taskUniqueKey, marketUniqueKey) {
		var deferred = $q.defer();
		
		var url = contextPath + '/publish/support/task';
		if (taskId) {
			url += '?taskId=' + taskId;
		} else {
			url += '?taskUniqueKey=' + taskUniqueKey;
			if (marketUniqueKey) {
				url += '&marketUniqueKey=' + marketUniqueKey;
			}
		}
		
		$http({method: 'GET', url: url}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.findTasks = function(searchTerm) {
		var deferred = $q.defer();
		
		filter = {
			tag : null,
			terms : searchTerm,
			marketUniqueKey : null,
			roleUniqueKeys : null,
			categoryUniqueKey : null,
			pageNumber: 0
		};
		
		$http({
			method : 'POST',
			url : contextPath + '/publish/support/tasks',
			data : filter
		}).
		success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).
		error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};
	
	this.getPageData = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/support/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
}