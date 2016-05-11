/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('PendingTaskListController', ['$scope', 'taskService', 'alertService', function($scope, taskService, alertService) {
	$scope.alertService = alertService;
	$scope.pending = true;
	
	taskService.findPendingTasksForPublisher().then(function(data) {
		$scope.tasks = data;
	});
	
	taskService.getTaskPageData().then(function(data) {
		$scope.pageData = data;
		
		$scope.marketMap = {};
		for (var i=0; i<data.markets.length; i++) {
			$scope.marketMap[data.markets[i].marketId] = data.markets[i].name;
		}
	});
}]);