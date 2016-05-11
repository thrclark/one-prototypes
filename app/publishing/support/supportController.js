/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('SupportController', ['$scope', '$routeParams', 'supportService', 'alertService', function($scope, $routeParams, supportService, alertService) {
	$scope.alertService = alertService;
	
	if ($routeParams.taskUniqueKey || ($routeParams.marketUniqueKey && $routeParams.taskUniqueKey)) {
		supportService.viewTask(null, $routeParams.taskUniqueKey, $routeParams.marketUniqueKey).then(function(data) {
			$scope.taskInfo = data;
			$('#taskDetailsDialog').modal('show');
		}, function(status) {
			
		});
	};
	
	supportService.getPageData().then(function(data) {
		$scope.pageData = data;
	}, function(status) {
		
	});
	
	$scope.search = function() {
		supportService.findTasks($scope.searchTerm).then(function(data) {
			$scope.tasks = data;
		}, function(status) {
			
		});
	};
	
	$scope.viewDetails = function(taskId) {
		supportService.viewTask(taskId).then(function(data) {
			$scope.taskInfo = data;
			$('#taskDetailsDialog').modal('show');
		}, function(status) {
			
		});
	};
}]);