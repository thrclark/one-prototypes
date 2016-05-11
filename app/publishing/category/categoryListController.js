/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('CategoryListController', ['$scope', '$routeParams', 'categoryService', 'alertService', function($scope, $routeParams, categoryService, alertService) {
	$scope.alertService = alertService;

	function getCategories() {
		categoryService.findCategories().then(function(data) {
			$scope.categories = data;
		});
	}
	
	getCategories();
	
	$scope.confirmDelete = function(category) {
		$scope.categoryToDelete = category;
		$('#deleteCategoryDialog').modal('show');
	};
	
	$scope.deleteCategory = function() {
    	categoryService.deleteCategory($scope.categoryToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.categoryToDelete.name+'".', 'success', true);
			getCategories();
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.categoryToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteCategoryDialog').modal('hide');
	};
}]);