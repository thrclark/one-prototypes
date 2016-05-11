/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('MarketListController', ['$scope', 'marketService', 'alertService', function($scope, marketService, alertService) {
	$scope.alertService = alertService;
	
	marketService.findMarketsForPublisher().then(function(data) {
		$scope.markets = data;
	});
	
	marketService.getMarketPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.confirmDelete = function(market) {
		$scope.marketToDelete = market;
		$('#deleteMarketDialog').modal('show');
	};
	
	$scope.deleteMarket = function() {
    	marketService.deleteMarket($scope.marketToDelete).then(function() {
			//success
			alertService.addAlert('Successfully deleted "'+$scope.marketToDelete.name+'".', 'success', true);
			$scope.markets.splice($scope.markets.indexOf($scope.marketToDelete), 1);
		}, function(status) {
			//error
			alertService.addAlert('There was a problem deleting "'+$scope.marketToDelete.name+'". (' + status + ')', 'danger');
		});
    	$('#deleteMarketDialog').modal('hide');
	};
}]);