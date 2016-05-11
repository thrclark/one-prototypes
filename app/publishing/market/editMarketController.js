/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditMarketController', ['$scope', '$routeParams', '$location', 'marketService', 'alertService', function($scope, $routeParams, $location, marketService, alertService) {
	$scope.alertService = alertService;

	if ($routeParams.marketId) {
		marketService.findMarket($routeParams.marketId).then(function(data) {
			$scope.market = data;
		});
	} else {
		marketService.newMarket().then(function(data) {
			$scope.market = data;
		});
	}

	marketService.getMarketPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.selectedUrl = '';

	$scope.addUrl = function() {
		if ($scope.selectedUrl && $scope.market.domainUrls.indexOf($scope.selectedUrl) < 0) {
			var url = new Object();
			url.url = $scope.selectedUrl;
			$scope.market.domainUrls.push(url);
		}
	};

	$scope.removeUrl = function(url) {
		if (url && $scope.market.domainUrls.indexOf(url) >= 0) {
			$scope.market.domainUrls.splice($scope.market.domainUrls.indexOf(url), 1);
		}
	};

	$scope.selectedAlias = '';

	$scope.addAlias = function() {
		if ($scope.selectedAlias && $scope.market.aliases.indexOf($scope.selectedAlias) < 0) {
			var alias = new Object();
			alias.name = $scope.selectedAlias;
			$scope.market.aliases.push(alias);
		}
	};

	$scope.removeAlias = function(alias) {
		if (alias && $scope.market.aliases.indexOf(alias) >= 0) {
			$scope.market.aliases.splice($scope.market.aliases.indexOf(alias), 1);
		}
	};

	$scope.saveMarket = function() {
		marketService.saveMarket($scope.market).then(
			function() {
				alertService.addAlert('Market saved successfully', 'success', true);
				$location.path('/markets');
			},
			function(response) {
				if (response.status == 406) { // 406 == Not Acceptable
					$scope.errors = response.data;
				} else {
					alertService.addAlert('Failed to save market (' + response.status + ')', 'danger');
				}
			});
	};
}]);