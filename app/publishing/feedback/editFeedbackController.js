/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditFeedbackController', ['$scope', '$routeParams', '$location', '$timeout', 'feedbackService', 'alertService', 'timeService', function($scope, $routeParams, $location, $timeout, feedbackService, alertService, timeService) {

	$scope.alertService = alertService;
	$scope.feedback = null;
	
	feedbackService.pageData().then(function(data) {
		$scope.pageData = data;
		getFeedback();
	});
	
	function getFeedback() {
		feedbackService.findFeedback($routeParams.feedbackId).then(function(data) {
			$scope.feedback = data;
		});
	}
	
	$scope.getRespondLink = function(respondToEmail) {
		var body = '\n\n\n\nOn ' + timeService.formatTime($scope.feedback.postDate, 'ddd, MMM D, YYYY [at] h:mm A');
		body += ', ' + respondToEmail + ' wrote:\n\n' + $scope.feedback.comment;
		
		var url = 'mailto:' + respondToEmail;
		url += '?subject=' + encodeURIComponent('Re: ' + $scope.pageData.applicationName + ' Feedback');
		url += '&body=' + encodeURIComponent(body);

		return url;
	};
	
	$scope.confirmDeleteFeedback = function(feedbackId) {
		$('#deleteFeedbackDialog').modal('show');
	};
	
	$scope.deleteFeedback = function(feedbackId) {
		feedbackService.deleteFeedback($scope.feedback).then(function() {
			//success
			alertService.addAlert('Successfully deleted feedback.', 'success', true);
			$('#deleteFeedbackDialog').modal('hide');
			$timeout(function(){
				$location.path('/feedback');
			}, 500); //wait for dialog transition to finish before leaving page to prevent backdrop from sticking
			
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting the feedback. (' + status + ')', 'danger');
		});
    	$('#deleteImageDialog').modal('hide');
	};
	
	$scope.resolveFeedback = function(feedbackId) {
		feedbackService.resolveFeedback($scope.feedback).then(function() {
			//success
			alertService.addAlert('Successfully resolved feedback.', 'success', true);
			getFeedback();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem resolving the feedback. (' + status + ')', 'danger');
		});
	};
}]);