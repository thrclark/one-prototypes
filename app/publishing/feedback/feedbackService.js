/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function FeedbackService($http, $q) {

	this.findFeedbackList = function() {
		var deferred = $q.defer();
		var url = contextPath + '/publish/feedback';
		$http({
			method : 'GET',
			url : url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.pageData = function() {
		var deferred = $q.defer();
		var url = contextPath + '/publish/feedback/pageData';
		$http({
			method : 'GET',
			url : url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.findFeedback = function(feedbackId) {
		var deferred = $q.defer();
		if (feedbackId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/feedback/view/' + feedbackId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};
	
	this.deleteFeedback = function(feedback) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/feedback/delete', data:feedback.feedbackId}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};

	this.resolveFeedback = function(feedback) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/feedback/resolve', data:feedback.feedbackId}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}