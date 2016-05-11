/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('ContactListController', ['$scope', 'contactService', 'alertService', function($scope, contactService, alertService) {
	$scope.alertService = alertService;

	function getContacts() {
		contactService.findContacts().then(function(data) {
			$scope.contacts = data;
		});
	};
	
	getContacts();
	
	$scope.confirmDelete = function(contact) {
		$scope.contactToDelete = contact;
		$('#deleteContactDialog').modal('show');
	};
	
	$scope.deleteContact = function() {
    	contactService.deleteContact($scope.contactToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.contactToDelete.name+'".', 'success', true);
			getContacts();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.contactToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteContactDialog').modal('hide');
	};
}]);