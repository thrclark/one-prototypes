/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditCategoryController', ['$scope', '$routeParams', '$location', 'categoryService', 'alertService', function($scope, $routeParams, $location, categoryService, alertService) {
	$scope.alertService = alertService;
	
	categoryService.findCategory($routeParams.categoryId).success(function(data) {
		$scope.category = data;
	});

	$scope.saveCategory = function() {
		categoryService.saveCategory($scope.category).then(function() {
			alertService.addAlert('Category saved successfully', 'success', true);
			$location.path('/categories');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save category (' + response.status + ')', 'danger');
			}
		});
	};
	
	categoryService.getCategoryPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	/**********************
	 * Roles
	 *********************/
	$scope.selectedRole = '';
	
	$scope.addRole = function() {
		if ($scope.selectedRole) {
			var found = false;
			for (index in $scope.category.roles) {
				var role = $scope.category.roles[index];
				if (role.roleId == $scope.selectedRole.roleId) {
					found = true;
					break;
				}
			}
			if (!found) {
				$scope.category.roles.push($scope.selectedRole);
			}
		} else if ($scope.selectedRole == null || $scope.selectedRole == '') {
			$scope.category.roles.length = 0;
		}
	};
	
	$scope.removeRole = function(role) {
		if (role && $scope.category.roles.indexOf(role) >= 0) {
			$scope.category.roles.splice($scope.category.roles.indexOf(role), 1);
		}
	};
}]);