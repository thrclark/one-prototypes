/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditContactController', ['$scope', '$routeParams', '$location', 'contactService', 'alertService', function($scope, $routeParams, $location, contactService, alertService) {
	$scope.alertService = alertService;
	
	if ($routeParams.contactId) {
		contactService.findContact($routeParams.contactId).then(function(data) {
			$scope.contact = data;
		});
	} else {
		contactService.newContact().then(function(data) {
			$scope.contact = data;
		});
	}
	
	$scope.saveContact = function() {
		contactService.saveContact($scope.contact).then(function() {
			alertService.addAlert('Contact saved successfully', 'success', true);
			$location.path('/contacts');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save contact (' + response.status + ')', 'danger');
			}
		});
	};
	
	contactService.getPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.editingContctMethod = false;
	
	$scope.saveContactMethod = function() {
		if ($scope.contactMethod.name && $scope.contactMethod.value && $scope.contactMethod.type) {
			$scope.contact.contactMethods.push($scope.contactMethod);
			$scope.newContactMethod();
		}
	};
	
	$scope.editContactMethod = function(contactMethod) {
		$scope.contactMethod = contactMethod;
		$scope.editingContctMethod = true;
	};
	
	$scope.newContactMethod = function(contactMethod) {
		$scope.contactMethod = {
			name: '',
			value: '',
			type: ''
		};
		$scope.editingContctMethod = false;
	};
	
	$scope.removeContactMethod = function(method) {
		if (method && $scope.contact.contactMethods.indexOf(method) >= 0) {
			$scope.contact.contactMethods.splice($scope.contact.contactMethods.indexOf(method), 1);
		}
	};
	
	$scope.newContactMethod();
}]);