/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('ViewCommentController', ['$scope', '$routeParams', '$location', 'commentService', 'alertService', function($scope, $routeParams, $location, commentService, alertService) {
	$scope.alertService = alertService;
	
	$scope.historical = $location.search()['historical'] == 'true';
	
	commentService.findComment($routeParams.commentId).then(function(data) {
		$scope.comment = data.comment;
		$scope.task = data.task;
		$scope.reportedCommentMap = data.reportedCommentTypes;
		$scope.isMostRecent = data.isMostRecent;
	});
	
	$scope.deleteComment = function(commentId) {
		commentService.deleteComment(commentId).then(function() {
			alertService.addAlert('Comment removed successfully', 'success', true);
			$location.path('/reports');
		},  function(status) {
			alertService.addAlert('Failed to remove comment (' + status + ')', 'danger');
		});
	};
	
	$scope.acceptComment = function(commentId) {
		commentService.acceptComment(commentId).then(function() {
			alertService.addAlert('Comment accepted successfully', 'success', true);
			$location.path('/reports');
		},  function(status) {
			alertService.addAlert('Failed to accept comment (' + status + ')', 'danger');
		});
	};
}]);