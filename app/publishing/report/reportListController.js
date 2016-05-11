/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('ReportListController', ['$scope', '$location', 'commentService', 'alertService', function($scope, $location, commentService, alertService) {
	$scope.alertService = alertService;
	
	$scope.historical = $location.search()['historical'] == 'true';

	var pageNumber = 0;
	commentService.findReportedComments($scope.historical, pageNumber).then(function(data) {
		$scope.comments = data;
		pageNumber += 1;
	});
}]);