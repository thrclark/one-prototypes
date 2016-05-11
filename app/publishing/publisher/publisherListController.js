/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('PublisherListController', ['$scope', 'publisherService', 'alertService', function($scope, publisherService, alertService) {
	$scope.alertService = alertService;
	
	function getPublishers() {
		publisherService.findPublishers().then(function(data) {
			$scope.publishers = data;
		});
	};
	
	getPublishers();
	
	$scope.confirmDelete = function(publisher) {
		$scope.publisherToDelete = publisher;
		$('#deletePublisherDialog').modal('show');
	};
	
	$scope.deletePublisher = function() {
    	publisherService.deletePublisher($scope.publisherToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.publisherToDelete.name+'".', 'success', true);
			getPublishers();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.publisherToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deletePublisherDialog').modal('hide');
	};
}]);