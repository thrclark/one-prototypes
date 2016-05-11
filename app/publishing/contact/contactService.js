/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function ContactService($http, $q) {

	this.findContacts = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/contacts'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.newContact = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/contact/new'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.findContact = function(contactId) {
		var deferred = $q.defer();
		if (contactId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/contact/' + contactId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject(status);
			});
		}
		return deferred.promise;
	};

	this.saveContact = function(contact) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/contact',
			data : contact
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.deleteContact = function(contact) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/contact/delete',
			data : contact
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.getPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/contact/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}