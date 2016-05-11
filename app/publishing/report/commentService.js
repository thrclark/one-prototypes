/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function CommentService($http, $q) {

	this.findReportedComments = function(historical, pageNumber) {
		
		var url = contextPath + '/publish/comments/reported';
		url += '?pageNumber=' + pageNumber;
		if(historical) {
			url += '&historical=true';
		}
		 
		var deferred = $q.defer();
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
	
	this.findComment = function(commentId) {
		var deferred = $q.defer();
		var url = contextPath + '/publish/comments/view/' + commentId;
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
	
	this.deleteComment = function(commentId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/comment/delete',
			data:commentId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.acceptComment = function(commentId) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/comment/accept',
			data:commentId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
}