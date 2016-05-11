/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function MarketService($http, $q) {

	this.findMarketsForPublisher = function() {
		var deferred = $q.defer();
		$http({
			method : 'GET',
			url : contextPath + '/publish/markets'
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.findMarket = function(marketId) {
		var deferred = $q.defer();
		if (marketId) {
			$http({
				method : 'GET',
				url : contextPath + '/publish/market/' + marketId
			}).success(function(data, status, headers, config) {
				deferred.resolve(data);
			}).error(function(data, status, headers, config) {
				deferred.reject();
			});
		}
		return deferred.promise;
	};

	this.newMarket = function() {
		var deferred = $q.defer();
		$http({method: 'GET', url: contextPath + '/publish/market/new'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject();
		  });
		return deferred.promise;
	};
	
	this.saveMarket = function(market) {
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/publish/market',
			data : market
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject({'status':status,'data':data});
		});
		return deferred.promise;
	};
	
	this.deleteMarket = function(market) {
		var deferred = $q.defer();
		$http({method:'POST', url:contextPath + '/publish/market/delete', data:market}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
	this.getMarketPageData = function() {
		var deferred = $q.defer();
		$http({method:'GET', url:contextPath + '/publish/market/pageData'}).
		  success(function(data, status, headers, config) {
			  deferred.resolve(data);
		  }).
		  error(function(data, status, headers, config) {
			  deferred.reject(status);
		  });
		return deferred.promise;
	};
}