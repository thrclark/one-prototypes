/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function CategoryService($http, $q) {

	this.findCategories = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/categories'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.findCategory = function(categoryId) {
		var url = contextPath + '/publish/category';
		if (categoryId) {
			url += '?id=' + categoryId;
		}
		return $http({
			method : 'GET',
			url : url
		});
	};

	this.saveCategory = function(category) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/category',
			data : category
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.deleteCategory = function(category) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/category/delete',
			data : category
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.getCategoryPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/category/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}