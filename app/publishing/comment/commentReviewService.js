/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function CommentReviewService($http, $q) {
	
	this.findDetailsForComment = function(commentId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/commentDetails',
			data: commentId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.findRecentCommentsForPublisher = function(pageNumber) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/recentComments',
			data: pageNumber
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.findTasksWithComments = function(taskUid) {
		var deferred = $q.defer();
		if (taskUid) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/comments?taskUid=' + taskUid
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject(status);
			});
		}
		return deferred.promise;
	};
	
	this.findCommentsForTask = function(taskId) {
		var deferred = $q.defer();
		if (taskId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/comments/task?taskId=' + taskId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject(status);
			});
		}
		return deferred.promise;
	};
	
	this.getComments = function(taskId, pageNumber, sortType, commentId) {
		var deferred = $q.defer();
		var url = null;
		if (taskId) {
			url = '/publish/comments/task?taskId=' + taskId;
			if (pageNumber) {
				url = url + '&page=' + pageNumber;
			} else {
				url = url + '&page=0';
			}
			if (sortType) {
				url = url + '&sort=' + sortType;	
			} 
			if (commentId) {
				url = url + '&commentId=' + commentId;
			}
		} else {
			url = '/publish/comments/task';
		}
		$http({
			method : 'GET',
			url : contextPath + url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};
	
	this.activateComment = function(commentId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/comment/activate',
			data:commentId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.deactivateComment = function(commentId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/comment/deactivate',
			data:commentId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
}