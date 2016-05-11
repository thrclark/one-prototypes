/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('CommentDetailsController', ['$scope', '$routeParams', '$timeout', 'commentReviewService', 'commentService', 'commentReplyService', 'alertService', function($scope, $routeParams, $timeout, commentReviewService, commentService, commentReplyService, alertService) {
	$scope.previousPage = $routeParams.previousPage;
	$scope.taskId = $routeParams.taskId;
	$scope.taskUid = $routeParams.taskUid;
	$scope.originPage = $routeParams.originPage;
	
	$scope.alertService = alertService;
	
	$scope.confirmActivate = function(comment) {
		$('#activateCommentDialog').modal('show');
	};
	
	$scope.activateComment = function() {
		commentReviewService.activateComment($scope.pageData.comment.commentId).then(function() {
			$scope.pageData.comment.status ="A";
			alertService.addAlert('Comment activated successfully', 'success', true);
		}, function(status) {
			alertService.addAlert('Failed to activate comment (' + status + ')', 'danger');
		});
    	$('#activateCommentDialog').modal('hide');
	};

	$scope.confirmDeactivate = function(comment) {
		$('#deactivateCommentDialog').modal('show');
	};
	
	$scope.deactivateComment = function() {
		commentReviewService.deactivateComment($scope.pageData.comment.commentId).then(function() {
			$scope.pageData.comment.status ="I";
			alertService.addAlert('Comment deactivated successfully', 'success', true);
		}, function(status) {
			alertService.addAlert('Failed to deactivate comment (' + status + ')', 'danger');
		});
    	$('#deactivateCommentDialog').modal('hide');
	};
	
	$scope.pageData = null;
	$scope.task = null;
	$scope.marketsTitle = null;
	
	function getPageData() {
		commentReviewService.findDetailsForComment($routeParams.commentId).then(function(data)  {
			$scope.pageData = data;
			$scope.task = data.task;
			$scope.comment = data.comment;
			$scope.marketsTitle = data.marketsTitle;
			
			$timeout(function() {
				$('[data-toggle="popover"]').popover({placement:'top'});
			}, 0);
		});
	}
	getPageData();
	
	$scope.replyToComment = function() {
		commentReplyService.getCommentReply($scope.comment.commentId)
			.success(function(data, status, headers, config) {
				$scope.commentReply = data;
				$('#replyModal').modal('show');
			}).error(function(data, status, headers, config) {
				alertService.addAlert('Could not retrieve details for the comment response ('+status+').', 'danger');
			});
	};
	
	$scope.replySuccessCallback = function() {
		getPageData();
	}
	
	$scope.deleteReply = function(reply) {
		if (!$scope.disableReplySubmit) {
			$scope.disableReplySubmit = true;
			
			commentReplyService.deleteCommentReply(reply)
				.success(function(data, status, headers, config) {
					reply.status = 'I';
					$scope.disableReplySubmit = false;
				}).error(function(data, status, headers, config) {
					alertService.addAlert('Could not delete this comment response ('+status+'). Please try again later.', 'danger');
					$scope.disableReplySubmit = false;
				});
		}
	}
}]);