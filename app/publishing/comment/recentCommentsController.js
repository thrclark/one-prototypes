/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('RecentCommentsController', ['$scope', '$routeParams', 'commentReviewService', 'alertService', function($scope, $routeParams, commentReviewService, alertService) {
	$scope.previousPage = $routeParams.previousPage;
	
	$scope.alertService = alertService;

	$scope.commentsMap = [];
	$scope.marketMap = {};
	$scope.hasMore = false;
	$scope.marketTitle = null;
	$scope.pageNumber = 1;
	
	$scope.loadRecentComments = function() {
		$scope.previousPage = "recentComments";
		commentReviewService.findRecentCommentsForPublisher($scope.pageNumber).then(function(data){
			$scope.hasMore = data.hasMore;
			for (i=0; i<data.marketDtos.length; i++) {
                var market = data.marketDtos[i];
                $scope.marketMap[market.marketId] = market.name;
			}
			$scope.marketTitle = data.marketTitle;
			$scope.pageNumber++;
			$scope.commentsMap = $scope.commentsMap.concat(data.dataList);
		}, function(status) {
			if(status == 401) {
				alertService.addAlert("You do not have access to this page.");
				window.scrollTo(0, 0);
			}
		}); 
	};
	
	$scope.loadRecentComments();	
}]);