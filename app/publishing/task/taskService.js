/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function TaskService($http, $q) {
	
	this.findTasksForPublisher = function(searchTerm, categoryUniqueKey, currentPageNumber) {
		filter = {
				tag : null,
				terms : searchTerm,
				marketUniqueKey : null,
				roleUniqueKeys : null,
				categoryUniqueKey : categoryUniqueKey,
				pageNumber: currentPageNumber
			};
		var deferred = $q.defer();
		$http({method: 'POST', url: contextPath + '/publish/tasks', data : filter}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.findPendingTasksForPublisher = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/tasks/pending'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.findTask = function(taskId) {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/task/' + taskId}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.newTask = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/task/new'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.saveTask = function(task, isDraft) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/task?draft='+isDraft, data:task}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject({'status':status,'data':data});
		  });
		return deferred.promise;
	};
	
	this.submitTask = function(task) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/task/submit', data:task}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject({'status':status,'data':data});
		  });
		return deferred.promise;
	};
	
	this.approveTask = function(task) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/task/approve', data:task}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject({'status':status,'data':data});
		  });
		return deferred.promise;
	};
	
	this.declineTask = function(task) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/task/decline', data:task.taskId}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject({'status':status,'data':data});
		  });
		return deferred.promise;
	};
	
	this.deleteTask = function(task) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/task/delete', data:task}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.removeTask = function(task) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/task/remove', data:task}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.getTaskPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/task/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.loadTaskMedia = function(taskId) {
		var url = contextPath + '/publish/task/media?taskId=' + taskId;
		return $http.get(url);
	};
}