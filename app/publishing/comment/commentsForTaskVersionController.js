/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('CommentsForTaskVersionController', ['$scope', '$routeParams', 'commentReviewService', 'alertService', function($scope, $routeParams, commentReviewService, alertService) {
	
	$scope.previousPage = $routeParams.previousPage;
	$scope.taskId = $routeParams.taskId;
	$scope.taskUid = $routeParams.taskUid;

	$scope.alertService = alertService;
	$scope.currentTaskId = $routeParams.taskId;
	$scope.marketName = null;
	$scope.task = null;
	$scope.comments = [];
	$scope.commentsSortType = 0;
	$scope.marketsTitle = null;
	$scope.viewComments = function(taskId) {
		commentReviewService.findCommentsForTask(taskId).then(function(data) {
			$scope.task = data.task;
			$scope.comments = data.comments;
			$scope.hasMore = data.hasMore;
			$scope.marketsTitle = data.marketsTitle;
		});
	};
	
	$scope.pageNumber = 1;
	$scope.loadNextPageComments = function(comments) {
		$scope.commentsPageNumber++;
		loadComments($scope.currentTaskId, function(data) {
			$scope.pageNumber++;
			$scope.currentTaskId = data.currentTaskId;
			$scope.comments = $scope.comments.concat(data.comments);
			$scope.hasMore = data.hasMore;
		});
	};
	
	function loadComments(taskId, callback) {
		$scope.currentTaskId = taskId;
		if ($scope.comments && $scope.comments.length > 0) {
			var lastCommentId = $scope.comments[$scope.comments.length-1].commentId;
			commentReviewService.getComments(taskId, $scope.pageNumber, $scope.commentsSortType, lastCommentId).then(function(data) {
				callback(data);
			});
		} else {
			commentReviewService.getComments(taskId, $scope.commentsPageNumber, $scope.commentsSortType).then(function(data) {
				callback(data);
			});			
		}
	};
	
	$scope.viewComments($routeParams.taskId);
}]);