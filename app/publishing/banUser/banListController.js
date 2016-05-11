/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('BanListController', ['$scope', '$routeParams', 'banUserService', 'alertService', function($scope, $routeParams, banUserService, alertService) {
	$scope.alertService = alertService;

	refreshBannedUserList();

	$scope.banUser = function(userId) {
		banUserService.banUser(userId).then(function() {
			alertService.addAlert('User restricted successfully', 'success', true);
			$scope.banUserId = '';
			refreshBannedUserList();
			$scope.errors = null;
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to restrict user (' + response.status + ')', 'danger');
			}
		});
	};
	
	$scope.restoreUser = function(userId) {
		banUserService.restoreUser(userId).then(function() {
			alertService.addAlert('User restored successfully', 'success', true);
			refreshBannedUserList();
		}, function(status) {
			alertService.addAlert('Failed to restore user (' + status + ')', 'danger');
		});
	};
	
	function refreshBannedUserList() {
		banUserService.findBannedUsers().then(function(data) {
			$scope.users = data;
		});
	};
}]);