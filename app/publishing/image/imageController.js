/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('ImageController', ['$scope', 'imageService', 'alertService', function($scope, imageService, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;
	
	$scope.fetchImages = function() {
		imageService.findImages().then(function(data) {
			$scope.images = data;
		}, function(status) {
			//error
			alertService.addAlert('There was a problem retrieving images. (' + status + ')', 'danger');
		});
	};

	$scope.fetchImages();
	
	
	$scope.confirmDelete = function(image) {
		imageService.confirmDeleteImage(image).
			success(function(data, status, headers, config) {
				$scope.tasksWithImage = data;
				$scope.imageToDelete = image;
				$('#deleteImageDialog').modal('show');
			}).
			error(function(data, status, headers, config) {
				alertService.addAlert('There was a problem retrieving info for "'+image.name+'". (' + status + ')', 'danger');
			});
	};
	
	$scope.deleteImage = function() {
    	imageService.deleteImage($scope.imageToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.imageToDelete.name+'".', 'success', true);
			$scope.fetchImages();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.imageToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteImageDialog').modal('hide');
	};
}]);