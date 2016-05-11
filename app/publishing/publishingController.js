/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('PublishingController', ['$scope', '$routeParams', '$http', function($scope, $routeParams, $http) {
	$http({
		method : 'GET',
		url : contextPath + '/publish/pageData'
	}).success(function(data, status, headers, config) {
		$scope.pageData = data;
	}).error(function(data, status, headers, config) {
		$scope.admin = false;
	});
}]);