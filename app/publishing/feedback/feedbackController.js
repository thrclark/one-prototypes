/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('FeedbackController', ['$scope', 'feedbackService', 'alertService', function($scope, feedbackService, alertService) {
	$scope.alertService = alertService;
	
	feedbackService.findFeedbackList().then(function(data) {
		$scope.feedbackList = data;
	}, function(status) {
		alertService.addAlert('There was a problem retrieving feedback. (' + status + ')', 'danger');
	});
	
	feedbackService.pageData().then(function(data) {
		$scope.pageData = data;
	});
}]);