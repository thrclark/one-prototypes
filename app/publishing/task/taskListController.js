/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('TaskListController', ['$scope', '$routeParams', 'taskService', 'alertService', function($scope, $routeParams, taskService, alertService) {
	
	$scope.previousPage = "taskList";
	
	$scope.alertService = alertService;
	$scope.pending = false;
	$scope.isFeatured = $routeParams.featured == "true";
	
	$scope.confirmDelete = function(task) {
		$scope.taskToDelete = task;
		$('#deleteTaskDialog').modal('show');
	};
	
	$scope.deleteTask = function() {
    	taskService.deleteTask($scope.taskToDelete.taskId).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.taskToDelete.title+'".', 'success', true);
			$scope.search();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.taskToDelete.title+'". (' + status + ')', 'danger');
		});
    	$('#deleteTaskDialog').modal('hide');
	};
	
	$scope.confirmRemove = function(task) {
		$scope.taskToRemove = task;
		$('#removeTaskDialog').modal('show');
	};
	
	$scope.removeTask = function() {
    	taskService.removeTask($scope.taskToRemove.taskId).then(function() {
			//success
			alertService.addAlert('Successfully removed "'+$scope.taskToRemove.title+'".', 'success', true);
			$scope.search();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem removing "'+$scope.taskToRemove.title+'". (' + status + ')', 'danger');
		});
    	$('#removeTaskDialog').modal('hide');
	};
	
	$scope.searchTerm = "";
	$scope.categoryUniqueKey = null;
	$scope.pageNumber = 0;
	$scope.hasMore = false;
	$scope.tasks = null;
	$scope.tasksDisplayedEndingIndex = 0;
	$scope.taskListSize = 0;
	
	$scope.loadNextPage = function(taskCollection) {
		$scope.pageNumber++;
		taskService.findTasksForPublisher($scope.searchTerm, $scope.categoryUniqueKey, $scope.pageNumber).then(function(data) {
			if(data.tasks != null && data.tasks.length != 0) {
				$scope.tasks = $scope.tasks.concat(data.tasks);
			}
			$scope.hasMore = data.hasMore;
			$scope.tasksDisplayedEndingIndex = $scope.tasksDisplayedEndingIndex + data.tasks.length;
		});
	};
	
	$scope.search = function() {
		taskService.findTasksForPublisher($scope.searchTerm, $scope.categoryUniqueKey, $scope.pageNumber).then(function(data) {
			$scope.tasks = data.tasks;
			$scope.hasMore = data.hasMore;
			$scope.tasksDisplayedEndingIndex = data.tasks.length;
			$scope.taskListSize = data.taskListSize;
			$scope.pageNumber = 0;
		});
	};
	
	taskService.getTaskPageData().then(function(data) {
		$scope.pageData = data;
		
		$scope.marketMap = {};
		for (var i=0; i<data.markets.length; i++) {
			$scope.marketMap[data.markets[i].marketId] = data.markets[i].name;
		}
		
		$scope.categoryMap = {};
		for (var i=0; i<data.categories.length; i++) {
			$scope.categoryMap[data.categories[i].categoryId] = data.categories[i];
		}
		
		$scope.roleMap = {};
		for (var i=0; i<data.roles.length; i++) {
			$scope.roleMap[data.roles[i].roleId] = data.roles[i];
		}
		
		if ($routeParams.category != null) {
			var category = $scope.categoryMap[$routeParams.category];
			if (category != null) {
				$scope.categoryUniqueKey = category.uniqueKey;
			}
		}
		
		$scope.search();
		
		$scope.$watch('categoryUniqueKey', function(newVal, oldVal) {
			if (newVal != oldVal) {
				$scope.search();
			}
	    });
	});
}]);