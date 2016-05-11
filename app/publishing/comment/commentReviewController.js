/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('CommentReviewController', ['$scope', '$routeParams', 'commentReviewService', 'alertService', function($scope, $routeParams, commentReviewService, alertService) {
	
	$scope.taskUid = $routeParams.taskUid;
	$scope.previousPage = $routeParams.previousPage;
	$scope.taskUid = $routeParams.taskUid;
	
	$scope.alertService = alertService;
	
	$scope.taskCurrent = false;
	$scope.marketsTitle = null;
	var currentTaskId = null;
	
	commentReviewService.findTasksWithComments($routeParams.taskUid).then(function(data) {
		$scope.pageData = data;
		var tasks = data.tasks;
		$scope.tasks = tasks;
		$scope.marketsTitle = data.marketsTitle;
		if(data.tasks.length > 0) {
			currentTaskId = tasks[0].taskId;
			$scope.taskCurrent = tasks[0].versionStatus === 'C';
		}
	});
}]);