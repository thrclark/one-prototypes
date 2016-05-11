/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var loadingModule = angular.module('loading', []);

loadingModule.factory('loadingService', function() {
	var requestCount = 0;
	return {
		isLoading: function() {
			return requestCount > 0;
		},
		increment: function() {
			requestCount++;
		},
		decrement: function() {
			requestCount--;
			if (requestCount < 0) {
				requestCount = 0;
			}
		}
	};
});


loadingModule.factory('loadingInterceptor', function($q, loadingService) {
	return {
		'request': function(config) {
	    	loadingService.increment();
	    	return config;
	    },
		
	    'response': function(response) {
	    	loadingService.decrement();
	    	return response;
	    },

	   'responseError': function(rejection) {
		   loadingService.decrement();
		   return $q.reject(rejection);
	    }
	  };
});

loadingModule.config(function($httpProvider) {
  $httpProvider.interceptors.push('loadingInterceptor');
});

loadingModule.controller('LoadingCtrl', function($scope, loadingService) {
  $scope.$watch(loadingService.isLoading, function(value) { $scope.loading = value; });
});
