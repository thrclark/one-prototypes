/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function TaskStoreService($http, $q, $interpolate, $compile, $filter, sessionService, searchService) {

	this.findTasks = function(filter, includeOffline) {
		sessionService.setLogoutTimer();
		
		if (includeOffline) {
			var favorites = searchService.getOfflineFavorites();
			if (favorites != null && favorites.length > 0) {
				filter.offlineFavoriteUids = favorites;
			} else {
				filter.offlineFavoriteUids = null;
			}
			
			var used = searchService.getOfflineRecentlyUsed();
			if (used != null && used.length > 0) {
				filter.offlineRecentlyUsedUids = used;
			} else {
				filter.offlineRecentlyUsedUids = null;
			}
		} else {
			filter.offlineFavoriteUids = null;
			filter.offlineRecentlyUsedUids = null;
		}
		
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/tasks',
			data : filter
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.getPageData = function(taskUid) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		var url = null;
		var time = new Date().getTime();
		if (taskUid) {
			url = '/pageData?uid=' + taskUid + '&_=' + time;
		} else {
			url = '/pageData?_=' + time;
		}
		$http({
			method : 'GET',
			url : contextPath + url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};

	this.rateTask = function(rating) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/rating/post',
			data : rating
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.getComments = function(taskUid, taskId, pageNumber, sortType, commentId) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		var url = '/comment/list';
		if (taskUid) {
			url += '?uid=' + taskUid;
			
			var time = new Date().getTime();
			url += '&_=' + time;
			
			if (taskId) {
				url = url + '&taskId=' + taskId;
			}
			if (pageNumber) {
				url = url + '&page=' + pageNumber;
			} else {
				url = url + '&page=0';
			}
			if (sortType) {
				url = url + '&sort=' + sortType;	
			} 
			if (commentId) {
				url = url + '&commentId=' + commentId;
			}
		}
		$http({
			method : 'GET',
			url : contextPath + url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject();
		});
		return deferred.promise;
	};
	
	this.getReleaseNotes = function(taskId, taskUid) {
		return $http({
			method : 'GET',
			url : contextPath + '/releaseNotes?taskId=' + taskId + '&taskUid=' + taskUid
		});
	};
	
	this.postComment = function(comment) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/comment/post',
			data : comment
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.deleteComment = function(commentId) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/comment/delete',
			data : commentId
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.submitCommentReport = function(commentReport) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/comment/report',
			data : commentReport
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};

	this.loadRelatedTasks = function(taskUid, marketUniqueKey) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		var market = '';
		if (marketUniqueKey) {
			market = '&marketUniqueKey=' + marketUniqueKey;
		}
		var url = contextPath + '/task/related?uid=' + taskUid + market;
		var time = new Date().getTime();
		url += '&_=' + time;
		$http({
			method : 'GET',
			url : url
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.postCommentVote = function(commentVote) {
		sessionService.setLogoutTimer();
		return $http({
			method : 'POST',
			url : contextPath + '/comment/vote',
			data : commentVote
		});
	};
	
	this.setFavorite = function(data) {
		sessionService.setLogoutTimer();
		return $http({
			method : 'POST',
			url : contextPath + '/favorite',
			data : data
		});
	};
	
	this.submitFeedback = function(feedback) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/feedback/post',
			data : feedback
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.saveFavorites = function(favorites) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/favorite/sort',
			data : favorites
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.saveMostRecent = function(mostRecent) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/history/remove',
			data : mostRecent
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.getDatabasePreferences = function() {
		sessionService.setLogoutTimer();
		return $http({
			method : 'GET',
			url : contextPath + '/preferences?_=' + (new Date()).getTime()
		});
	};
	
	this.savePreferences = function(userPreferences) {
		sessionService.setLogoutTimer();
		var deferred = $q.defer();
		$http({
			method : 'POST',
			url : contextPath + '/preferences',
			data : userPreferences
		}).success(function(data, status, headers, config) {
			deferred.resolve(data);
		}).error(function(data, status, headers, config) {
			deferred.reject(status);
		});
		return deferred.promise;
	};
	
	this.savePreferencesToLocalStorage = function(pageData) {
		if (pageData.userPreferences) {
			var preferences = {};
			for (index in pageData.userPreferences) {
				var pref = pageData.userPreferences[index];
				preferences[pref.uniqueKey] = pref.userPreferenceValues[0].value;
			}
			
			if(!store.disabled){
				store.set('userPreferences', preferences);
				this.setUserPreferences(pageData);
			}
		}
	};
	
	this.getPreferencesFromLocalStorage = function() {
		if(!store.disabled) {
			return store.get('userPreferences');
		}
		return null;
	};
	
	this.setUserPreferences = function(pageData/*, filter*/) {
		var storedPrefs = this.getPreferencesFromLocalStorage();
		if (storedPrefs) {
			if (storedPrefs['TASK-NEW-WINDOW']) {
				pageData.shouldOpenInNewWindowPref = storedPrefs['TASK-NEW-WINDOW'] == 'yes';
			}
			if (storedPrefs['HIDE-FEATURED']) {
				pageData.hideFeaturedPref = storedPrefs['HIDE-FEATURED'] == 'yes';
			}
			/*if (storedPrefs['DEFAULT-MARKET']) {
				filter.marketUniqueKey = storedPrefs['DEFAULT-MARKET'];
			}*/
		} else {
			this.savePreferencesToLocalStorage(pageData);
		}
	};
	
	this.evaluateStringBindings = function(string, scope) {
		var interpolationFunction = $interpolate(string);
		var result = interpolationFunction(scope);
		return result;
	};
	
	this.getCompiledTypeaheadHeader = function(scope) {
		var html = '<p class="h5 dropdown-header">Filtered by: <span class="h4 text-danger">';
		
		html += $('body').attr('data-market-name');
		html += ' :&nbsp;<span ng-if="!filter.roleUniqueKeys || filter.roleUniqueKeys.length == 0">All Roles</span><span ng-if="filter.roleUniqueKeys.length == 1">{{roleMap[filter.roleUniqueKeys[0]]}}</span><span ng-if="filter.roleUniqueKeys.length > 1">{{filter.roleUniqueKeys.length}} Roles</span>';
		html += '<span ng-if="filter.categoryUniqueKey"> :&nbsp;{{categoryMap[filter.categoryUniqueKey]}}</span>';
		html += '<span ng-if="filter.tag"> :&nbsp;{{filter.tag}}</span>';
		
		/*
		html += '<span ng-if="filter.categoryUniqueKey"> :&nbsp;{{categoryMap[filter.categoryUniqueKey]}}<sup><a href="" ng-click="removeCategory()">[x]</a></sup></span>';
		html += '<span ng-if="filter.tag"> :&nbsp;{{filter.tag}}<sup><a href="" ng-click="removeTag()">[x]</a></sup></span>';
		 */
		
		html += '</span></p>';
		return $compile(html)(scope);
	};
	
	this.filterCategories = function(fullCategoriesList, storeFilter, roleIdMap) {
		return $filter('filter')(fullCategoriesList, function(value) {
			if (value.roleIds == null || value.roleIds.length == 0) {
				return true;
			}
			for (var index in storeFilter.roleUniqueKeys) {
				var roleId = roleIdMap[storeFilter.roleUniqueKeys[index]];
				if (value.roleIds.indexOf(roleId) >= 0 ) {
					return true;
				}
			}
			return false;
		}, true);
	};
}