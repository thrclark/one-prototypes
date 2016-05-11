/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function CommentReplyService($injector, $http) {

	this.saveCommentReply = function(reply) {
		resetLogoutTimer();
		return $http({
			method : 'POST',
			url : contextPath + '/comment/reply',
			data : reply
		});
	};
	
	this.getCommentReply = function(commentId) {
		resetLogoutTimer();
		return $http({
			method : 'GET',
			url : contextPath + '/comment/reply/'+commentId
		});
	};
	
	this.deleteCommentReply = function(reply) {
		resetLogoutTimer();
		return $http({
			method : 'POST',
			url : contextPath + '/comment/reply/delete',
			data : reply
		});
	};
	
	this.getCommentRepliesNeedingReview = function() {
		return $http({
			method : 'GET',
			url : contextPath + '/comment/replies/review'
		});
	};
	
	function resetLogoutTimer() {
		try{
			//sessionService will only be available if we are in the store and not publishing
	        var sessionService = $injector.get('sessionService');
	        if (sessionService != null) {
	        	sessionService.setLogoutTimer();
	        }
	    } catch(e) {}
	}
}