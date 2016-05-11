/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('TagController', ['$scope', 'tagService', 'alertService', function($scope, tagService, alertService) {
	$scope.alertService = alertService;
	
	$scope.fetchTags = function() {
		tagService.findTags().then(function(data) {
			$scope.tags = data;
		}, function(status) {
			//error
			alertService.addAlert('There was a problem retrieving tags. (' + status + ')', 'danger');
		});
	};

	$scope.fetchTags();
	
	
	$scope.confirmDelete = function(tag) {
		$scope.tagToDelete = tag;
		$('#deleteTagDialog').modal('show');
	};
	
	$scope.deleteTag = function() {
    	tagService.deleteTag($scope.tagToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.tagToDelete.name+'".', 'success', true);
			$scope.fetchTags();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.tagToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteTagDialog').modal('hide');
	};
}]);