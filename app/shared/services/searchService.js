/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var SearchService = function($http) {
	
	var delay = 1000*60*60*8;
	
	this.getStoredFilter = function() {
		checkStorageExpiration();
		return store.get('searchFilter');
	};
	
	this.saveFilter = function(filter) {
		if (typeof store != 'undefined' && !store.disabled) {
			store.set('searchFilter', filter);
			setStorageExpirationDate();
		}
	};
	
	this.clearFilter = function() {
		if (typeof store != 'undefined' && !store.disabled) {
			var filter = store.get('searchFilter');
			if (filter) {
				filter.tag = null;
				filter.terms = null;
				filter.categoryUniqueKey = null;
				filter.taskCollectionUniqueKey = null;
				filter.pageNumber = 0;
				filter.edit = false;
				store.set('searchFilter', filter);
			}
		}
	};
	
	function setStorageExpirationDate() {
		if (typeof store != 'undefined' && !store.disabled) {
			var date = new Date(); 
			var expireTime = date.getTime() + delay;
			store.set('searchStorageExpiration', expireTime);
		}
	}
	
	function checkStorageExpiration() {
		var now = new Date().getTime(); 
		var expireDate = store.get('searchStorageExpiration');
		if (expireDate && now >= expireDate) {
			//store.remove('searchFilter');
			var filter = store.get('searchFilter');
			if (filter != null) {
				filter.tag = null;
				filter.terms = null;
				filter.categoryUniqueKey = null;
				filter.taskCollectionUniqueKey = null;
				filter.pageNumber = 0;
				filter.edit = false;
				if(!store.disabled){
					store.set('searchFilter', filter);
				}
			}
		}
	}
	
	$http({
		method : 'GET',
		url : contextPath + '/pageData/storageExpiration'
	}).success(function(data, status, headers, config) {
		delay = Number(data);
	});
	
	
	//offline favorites / recently used
	this.storeOfflineIds = function() {
		$http({
			method : 'GET',
			url : contextPath + '/offlineIds'
		}).success(function(data, status, headers, config) {
			if(!store.disabled) {
				if (data.favorites) {
					store.set('offlineFavorites', data.favorites);
				}
				if (data.recentlyUsed) {
					store.set('offlineRecentlyUsed', data.recentlyUsed);
				}
			}
		});
	};
	
	this.clearOfflineIds = function() {
		if(typeof store != 'undefined' && !store.disabled) {
			store.remove('offlineFavorites');
			store.remove('offlineRecentlyUsed');
		}
	};
	
	this.getOfflineFavorites = function() {
		if(!store.disabled) {
			return store.get('offlineFavorites');
		}
		return null;
	};
	
	this.getOfflineRecentlyUsed = function() {
		if(!store.disabled) {
			return store.get('offlineRecentlyUsed');
		}
		return null;
	};
};
SearchService.$inject = ['$http'];