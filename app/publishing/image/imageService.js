/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function ImageService($http, $q) {
	
	this.findImages = function() {
		var deferred = $q.defer();
		var url = contextPath + '/publish/images';
		$http({method: 'GET', url: url}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.newImage = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/image/new'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.findImage = function(imageId) {
		var deferred = $q.defer();
		if (imageId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/image/' + imageId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};
	
	this.saveImage = function(image) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/image', data:image}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject({'status':status,'data':data});
		  });
		return deferred.promise;
	};
	
	this.confirmDeleteImage = function(image) {
		return $http({method:'GET', url:contextPath + '/publish/image/delete/' + image.imageSetId});
	};
	
	this.deleteImage = function(image) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/image/delete', data:image}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	
	this.getPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/image/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}