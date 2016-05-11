/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditTagController', ['$scope', '$routeParams', '$location', 'tagService', 'alertService', function($scope, $routeParams, $location, tagService, alertService) {
	$scope.alertService = alertService;
	
	if ($routeParams.tagId) {
		tagService.findTag($routeParams.tagId).then(function(data) {
			$scope.tag = data;
		});
	} else {
		tagService.newTag().then(function(data) {
			$scope.tag = data;
		});
	}
	
	tagService.getTagPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.selectedAlias = '';

	$scope.addAlias = function() {
		if ($scope.selectedAlias && $scope.tag.aliases.indexOf($scope.selectedAlias) < 0) {
			var alias = new Object();
			alias.name = $scope.selectedAlias;
			$scope.tag.aliases.push(alias);
		}
	};

	$scope.removeAlias = function(alias) {
		if (alias && $scope.tag.aliases.indexOf(alias) >= 0) {
			$scope.tag.aliases.splice($scope.tag.aliases.indexOf(alias), 1);
		}
	};
	
	$scope.saveTag = function() {
		if ($scope.tagForm.$valid) {
			tagService.saveTag($scope.tag).then(function(data) {
				alertService.addAlert('Tag saved successfully.', 'success', true);
				$location.path('/tags');
			}, function(response) {
				if (response.status == 406) { // 406 == Not Acceptable
					$scope.errors = response.data;
				} else {
					alertService.addAlert('Failed to save the tag. (' + status + ')', 'danger');
				}
			});
		}
	};
}]);