/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('CommentRepliesController', ['$scope', '$timeout', 'commentReplyService', 'alertService', function($scope, $timeout, commentReplyService, alertService) {
	$scope.alertService = alertService;

	commentReplyService.getCommentRepliesNeedingReview().success(function(data, status, headers, config) {
		$scope.replies = data;
		$timeout(function() {
			$('[data-toggle="popover"]').popover({placement:'top'});
		}, 0);
	}).error(function(data, status, headers, config) {
		alertService.addAlert('Could not retrieve comment responses ('+status+').', 'danger');
	});
	
	$scope.replyToComment = function(reply) {
		commentReplyService.getCommentReply(reply.commentId)
			.success(function(data, status, headers, config) {
				$scope.commentReply = data;
				$scope.comment = reply.comment;
				$('#replyModal').modal('show');
			}).error(function(data, status, headers, config) {
				alertService.addAlert('Could not retrieve details for the comment response ('+status+').', 'danger');
			});
	};
	
	$scope.disableReplySubmit = false;
	$scope.deleteReply = function(reply) {
		if (!$scope.disableReplySubmit) {
			$scope.disableReplySubmit = true;
			
			commentReplyService.deleteCommentReply(reply)
				.success(function(data, status, headers, config) {
					$scope.replies.splice($scope.replies.indexOf(reply), 1);
					$scope.disableReplySubmit = false;
				}).error(function(data, status, headers, config) {
					alertService.addAlert('Could not remove this comment response ('+status+').', 'danger');
					$scope.disableReplySubmit = false;
				});
		}
	};
	
	$scope.submitSuccessCallback = function(commentId) {
		for (var index in $scope.replies) {
			if ($scope.replies[index].commentId == commentId) {
				$scope.replies.splice(index, 1);
				break;
			}
		}	
	};
}]);