/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('FeaturedTaskListController', ['$scope', 'featuredTaskService', 'alertService', function($scope, featuredTaskService, alertService) {
	$scope.alertService = alertService;

	function loadFeaturedTasks() {
		featuredTaskService.findFeaturedTasks().then(function(data) {
			$scope.featuredTasks = data.featuredTasks;
			$scope.expiredFeaturedTasks = data.expiredFeaturedTasks;
		});
	};
	loadFeaturedTasks();

	$scope.confirmDelete = function(featuredTask) {
		$scope.taskToDelete = featuredTask;
		$('#deleteTaskDialog').modal('show');
	};

	$scope.deleteFeaturedTask = function() {
		featuredTaskService.deleteFeaturedTask($scope.taskToDelete).then(
			function() {
				// success
				alertService.addAlert('Successfully deleted "' + $scope.taskToDelete.task.title + '".', 'success', true);
				loadFeaturedTasks();
			},
			function(status) {
				// error
				alertService.addAlert('There was a problem deleting "' + $scope.taskToDelete.task.title + '". (' + status + ')', 'danger');
			});
		$('#deleteTaskDialog').modal('hide');
	};

	$scope.featuredOrder = {
		axis: 'y',
		update : function(e, ui) {
			featuredTaskService.updateFeaturedTaskOrder($scope.featuredTasks).then(function() {
				//success
				alertService.addAlert('Successfully reordered featured tasks.', 'success', true);
			}, function(status) {
				//error
				alertService.addAlert('There was a problem reordering featured tasks. (' + status + ')', 'danger');
			});
		}
	};
}]);