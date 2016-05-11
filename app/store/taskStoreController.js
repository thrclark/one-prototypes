/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
taskStoreModule.controller('TaskStoreController', ['$scope', '$timeout', 'taskStoreService', 'alertService', 'sessionService', 'searchService', 'cookieService', 'mobileService', function($scope, $timeout, taskStoreService, alertService, sessionService, searchService, cookieService, mobileService) {

	$scope.contextPath = contextPath;

	$scope.showCarousel = false;
	
	$scope.alertService = alertService;
	$scope.pageData = {};
	$scope.pageData.allMarketsUrlKey = $('body').attr('data-all-markets-key');
	
	$scope.marketMap = {};
	$scope.categoryMap = {};
	$scope.roleMap = {};
	$scope.roleIdMap = {};
	$scope.filter = null;
	
	var fullCategoriesList = null;
	
	$scope.filter = setupFilter();
	searchService.saveFilter($scope.filter);
	
	taskStoreService.getPageData().then(function(data) {
		$scope.pageData = data;

		if (data.isUserAuthenticated) {
			sessionService.setLogoutDelayMinutes(data.logoutDelayMinutes);
			
			if (getParameterByName('login') == 'true') {
				searchService.storeOfflineIds();
			}
		}
		
		taskStoreService.setUserPreferences($scope.pageData);
		
		var size = $scope.pageData.markets.length;
		for (var i=0; i<size; i++) {
			var market = $scope.pageData.markets[i];
			$scope.marketMap[market.marketId] = market.name;
		}
		
		size = $scope.pageData.categories.length;
		for (var i=0; i<size; i++) {
			var category = $scope.pageData.categories[i];
			$scope.categoryMap[category.uniqueKey] = category.name;
		}
		
		size = $scope.pageData.roles.length;
		for (var i=0; i<size; i++) {
			var role = $scope.pageData.roles[i];
			$scope.roleMap[role.uniqueKey] = role.name;
			$scope.roleIdMap[role.uniqueKey] = role.roleId;
		}
		
		//remove any deleted roles or categories from filter
		var rolesToRemove = [];
		for (var i=0; i<$scope.filter.roleUniqueKeys.length; i++) {
			var roleKey = $scope.filter.roleUniqueKeys[i];
			if (!(roleKey in $scope.roleMap)) {
				rolesToRemove.push(roleKey);
			}
		}
		for (var i=0; i<rolesToRemove.length; i++) {
			var roleKey = rolesToRemove[i];
			var index = $scope.filter.roleUniqueKeys.indexOf(roleKey);
			$scope.filter.roleUniqueKeys.splice(index, 1);
		}
		
		if ($scope.filter.categoryUniqueKey != null && !($scope.filter.categoryUniqueKey in $scope.categoryMap)) {
			$scope.filter.categoryUniqueKey = null;
		}
		
		
		fullCategoriesList = angular.copy(data.categories);
		filterCategories();
		
		searchTasks();
		
		$timeout(function() {
			startIntro();
		}, 1000);
		
		
		//perform any requested actions.  This is placed inside the pageData return because the actions may depend on that data
		sessionService.getRequestedAction($scope, ['showFeedbackDialog(', 'addSingleFavorite(', 'removeSingleFavorite(', 'showPreferencesDialog(', 'editFavorites(', 'editMostRecent(', 'tryAgain(']);
	});
	
	$scope.toggleMenu = function(open) {
		if (typeof open == 'undefined') {
			open = !$scope.menuOpen;
		}
		if (open) {
			$('#sidebar_menu').css({right: 0, visibility:'visible'});
			setTimeout(function() {
				$('#menuCloseButton').focus();
			}, 300);
		} else {
			$('#menu_button').focus();
			$('#sidebar_menu').css({right: -227});
			setTimeout(function() {
				$('#sidebar_menu').css({visibility:'hidden'});
			}, 400);
		}
		$scope.menuOpen = open;
	};
	
	$scope.searchSuggest = {
	    name: 'tasks',
	    remote: {
	    	url: contextPath + '/tasks/suggest',
		    replace: function(url, uriEncodedQuery) {
		    	url += '?q=' + uriEncodedQuery;
		    	if($scope.filter) {
			    	if ($scope.filter.tag) {
			    		url += '&tag=' + encodeURIComponent($scope.filter.tag);
			    	}
			    	if ($scope.filter.roleUniqueKeys) {
			    		for (var index in $scope.filter.roleUniqueKeys) {
			    			url += '&roleUniqueKeys=' + encodeURIComponent($scope.filter.roleUniqueKeys[index]);
			    		}
			    	}
			    	if ($scope.filter.marketUniqueKey) {
			    		url += '&marketUniqueKey=' + encodeURIComponent($scope.filter.marketUniqueKey);
			    	}
			    	if ($scope.filter.categoryUniqueKey) {
			    		url += '&categoryUniqueKey=' + encodeURIComponent($scope.filter.categoryUniqueKey);
			    	}
			    	if ($scope.filter.taskCollectionUniqueKey) {
			    		url += '&taskCollectionUniqueKey=' + encodeURIComponent($scope.filter.taskCollectionUniqueKey);
			    	}
		    	}
		    	return url;
		    }
	    },
	    header: taskStoreService.getCompiledTypeaheadHeader($scope)
	};
	
	$timeout(function() {
		$('input.tt-hint').attr('role', 'presentation').attr('aria-hidden', 'true');
	});
	
	$scope.store = {
		tasks : {}
	};
	
	$scope.isViewingHome = function() {
		if(!$scope.filter) {
			return true;
		} else {
			return !($scope.editingFavorites || $scope.editingMostRecent || $scope.filter.terms || $scope.filter.tag || $scope.filter.categoryUniqueKey || $scope.filter.taskCollectionUniqueKey);
		}
	};
	
	$scope.isEditing = function() {
		return $scope.editingFavorites || $scope.editingMostRecent;
	};
	
	$scope.clearFilters = function() {
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		$scope.filter.tag = null;
		$scope.filter.categoryUniqueKey = null;
		$scope.filter.taskCollectionUniqueKey = null;
		$scope.filter.pageNumber = 0;
		searchTasks();
	};
	
	$scope.clearSearch = function() {
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		
		if ($scope.filter.taskCollectionUniqueKey == '_favorite_' && typeof history.pushState == 'function') {
			history.pushState(null, null, contextPath + '/store');
		}
		
		$scope.filter.tag = null;
		$scope.filter.terms = null;
		$scope.filter.categoryUniqueKey = null;
		$scope.filter.taskCollectionUniqueKey = null;
		$scope.filter.pageNumber = 0;
		$scope.searchTerms = null;
		$('#search-field').typeahead('setQuery', '');
		searchTasks();
	};

	$scope.search = function() {
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		$scope.filter.terms = $scope.searchTerms;
		$scope.filter.taskCollectionUniqueKey = null;
		$scope.filter.tag = null;
		$scope.filter.pageNumber = 0;
		searchTasks();
	};
	
	$scope.removeCategory = function() {
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		$scope.filter.pageNumber = 0;
		$scope.filter.categoryUniqueKey = null;
		searchTasks();
	};

	$scope.selectCategory = function(uniqueKey) {
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		$scope.filter.categoryUniqueKey = uniqueKey;
		$scope.filter.taskCollectionUniqueKey = null;
		$scope.filter.tag = null;
		$scope.filter.pageNumber = 0;
		
		searchTasks();
	};
	
	$scope.selectTaskCollection = function(uniqueKey, edit) {
		if (uniqueKey == '_favorite_' && !edit && typeof history.pushState == 'function') {
			history.pushState(null, null, contextPath + '/favorites'); //change to favorites url if viewing favorites
			$scope.filter.terms = null;
		}
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		$scope.filter.categoryUniqueKey = null;
		$scope.filter.taskCollectionUniqueKey = uniqueKey;
		$scope.filter.tag = null;
		$scope.filter.pageNumber = 0;
		$scope.filter.edit = (typeof edit == 'undefined' ? false : edit);

		searchTasks(edit);
	};
	
	$scope.roleIsSelected = function(uniqueKey) {
		return $scope.filter.roleUniqueKeys.indexOf(uniqueKey) >= 0;
	};

	$scope.toggleRole = function(uniqueKey) {
		var index = $scope.filter.roleUniqueKeys.indexOf(uniqueKey);
		if (index >= 0) {
			$scope.filter.roleUniqueKeys.splice(index, 1);
		} else {
			$scope.filter.roleUniqueKeys.push(uniqueKey);
		}
		filterCategories();
		$scope.filter.pageNumber = 0;
		searchTasks();
	};

	$scope.selectMarket = function(market) {
		if (market) {
			cookieService.createCookie('marketUniqueKey', market.uniqueKey, 365, '/');
			$scope.filter.marketUniqueKey = market.uniqueKey;
		} else {
			cookieService.deleteCookie('marketUniqueKey', '/');
			$scope.filter.marketUniqueKey = null;
		}
		searchService.saveFilter($scope.filter);
		window.location = contextPath + '/store';
	};
	
	$scope.getTaskUrl = function(task, personalCategory) {
		var url;
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		if($scope.filter.terms){
			if (task.marketUniqueKey && $scope.filter.marketUniqueKey && !personalCategory) {
				url = contextPath + "/launch-task/" + $scope.filter.marketUniqueKey+ "/" + task.uniqueKey + "?searchTerms=" + encodeURIComponent($scope.filter.terms);
			} else if (task.marketUniqueKey && (!$scope.filter.marketUniqueKey || personalCategory)) {
				url = contextPath + "/launch-task/" + task.marketUniqueKey + "/" + task.uniqueKey + "?searchTerms=" + encodeURIComponent($scope.filter.terms);
			} else {
				url = contextPath + "/launch-task/" + $scope.pageData.allMarketsUrlKey + '/' + task.uniqueKey + "?searchTerms=" + encodeURIComponent($scope.filter.terms);
			};
		} else {
			if (task.marketUniqueKey && $scope.filter.marketUniqueKey && !personalCategory) {
				url = contextPath + "/launch-task/" + $scope.filter.marketUniqueKey+ "/" + task.uniqueKey;
			} else if (task.marketUniqueKey && (!$scope.filter.marketUniqueKey || personalCategory)) {
				url = contextPath + "/launch-task/" + task.marketUniqueKey + "/" + task.uniqueKey;
			} else {
				url = contextPath + "/launch-task/" + $scope.pageData.allMarketsUrlKey + '/' + task.uniqueKey;
			};
		}
		return url;
	};
	
	$scope.getTaskDetailsUrl = function(task, personalCategory) {
		var url;
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		
		if (task.marketUniqueKey && $scope.filter.marketUniqueKey && !personalCategory) {
			url = contextPath + "/task/" + $scope.filter.marketUniqueKey+ "/" + task.uniqueKey;
		} else if (task.marketUniqueKey && (!$scope.filter.marketUniqueKey || personalCategory)) {
			url = contextPath + "/task/" + task.marketUniqueKey + "/" + task.uniqueKey;
		} else {
			url = contextPath + "/task/" + $scope.pageData.allMarketsUrlKey + '/' + task.uniqueKey;
		};
		
		if ($scope.filter.terms) {
			url += '?searchTerms=' + encodeURIComponent($scope.filter.terms);
		}

		return url;
	};

	function searchTasks(dontClearEditModes) {
		if ($scope.menuOpen) $scope.toggleMenu(false);
		if (typeof dontClearEditModes == 'undefined' || dontClearEditModes == false) {
			clearEditModes();
		}
		searchService.saveFilter($scope.filter);
		$scope.showCarousel = false;
		$timeout(function() {
			resizeHeader();
			loadTasks(function(data) {
				$scope.store.tasks = data;
				if (data.featuredTasks && data.featuredTasks.length > 0) {
					$scope.showCarousel = true;
				}
				$timeout(function() {
					window.scrollTo(0, 0);
				}, 0);
			});
		}, 0);
	};
	
	var currentlyRemovingMostRecent = [];
	function clearEditModes() {
		$scope.editingFavorites = false;
		$scope.editingMostRecent = false;
		$scope.filter.edit = false;
		currentlyRemovingMostRecent.length = 0;
	};
	
	$scope.loadNextPage = function(taskCollection) {
		if(!$scope.filter) {
			$scope.filter = setupFilter();
		}
		
		$scope.filter.pageNumber++;
		
		loadTasks(function(data) {
			for (index in data.taskCollections) {
				var collection = data.taskCollections[index];
				if (collection.uniqueKey == taskCollection.uniqueKey) {
					taskCollection.tasks = taskCollection.tasks.concat(collection.tasks);
					taskCollection.hasMore = collection.hasMore;
					var firstId = collection.tasks[0].taskId;
					$timeout(function(){
						$('#task_' + taskCollection.uniqueKey + '_' + firstId).focus();
					});
					break;
				}
			}
		});
	};
	
	function loadTasks(callback) {
		
		var includeOffline = false;
		
		if (!$scope.pageData.isUserAuthenticated) {
			includeOffline = $scope.isViewingHome() || $scope.filter.taskCollectionUniqueKey == '_favorite_' || $scope.filter.taskCollectionUniqueKey == '_recentlyUsed_';
		}
		
		taskStoreService.findTasks($scope.filter, includeOffline).then(function(data) {
			callback(data);
		});
	}

	function setupFilter() {
		var filter = {
			tag : null,
			terms : null,
			marketUniqueKey : null,
			roleUniqueKeys : [],
			categoryUniqueKey : null,
			taskCollectionUniqueKey : null,
			pageNumber: 0,
			edit: false
		};
		
		var storedFilter = searchService.getStoredFilter();
		angular.extend(filter, storedFilter);
		
		if (filter.roleUniqueKeys == null) {
			filter.roleUniqueKeys = [];
		}
		
		//backward compatibility
		if (typeof filter.roleUniqueKey != 'undefined') {
			if (filter.roleUniqueKey) {
				filter.roleUniqueKeys.push(filter.roleUniqueKey);
			}
			delete filter.roleUniqueKey;
		}
		
		var terms = null;
		var marketUniqueKey = $('body').attr('data-market-key');
		filter.pageNumber = 0;

		var tag = getParameterByName('tag');
		var category = getParameterByName('category');
		var role = getParameterByName('role');
		var preserve = getParameterByName('preserve') != 'false'; /* SD-139 Desired behavior changed */
		var doSearch = getParameterByName('search') == 'true';
		
		var openingCollection = $('body').attr('data-task-collection');
		if (typeof openingCollection != 'undefined' && openingCollection != null && openingCollection.length > 0) {
			filter.taskCollectionUniqueKey = openingCollection;
			filter.categoryUniqueKey = null;
			filter.terms = null;
			filter.tag = null;
			category = null;
			tag = null;
		}
		
		if (doSearch) {
			preserve = true;
			filter.tag = null;
			tag = null;
		}
		if (!!tag) {
			filter.tag = tag;
			filter.terms = null;
			filter.categoryUniqueKey = null;
			filter.taskCollectionUniqueKey = null;
		}
		
		if (category != null) {
			filter.categoryUniqueKey = category;
			filter.taskCollectionUniqueKey = null;
			filter.tag = null;
		}
		
		if (!!role) {
			var index = filter.roleUniqueKeys.indexOf(role);
			if (index < 0) {
				filter.roleUniqueKeys.push(role);
			} else {
				filter.roleUniqueKeys.splice(index, 1);
			}
			filter.taskCollectionUniqueKey = null;
			if (!tag && !preserve) {
				filter.tag = null;
			}
			if (!category && !preserve) {
				filter.categoryUniqueKey = null;
			}
		}
		
		if (!preserve) {
			filter.terms = null;
		} else {
			angular.element(document).ready(function () {
				$('#search-field').typeahead('setQuery', filter.terms ? filter.terms : '');
		    });
			$scope.searchTerms = filter.terms;
		}
		
		if (typeof history.pushState == 'function') {
			var url = UpdateQueryString('category', null);
			url = UpdateQueryString('tag', null, url);
			url = UpdateQueryString('preserve', null, url);
			url = UpdateQueryString('search', null, url);
			url = UpdateQueryString('role', null, url);
			
			if (window.location != url) {
				history.pushState(null, null, url);
			}
		}

		if (!!marketUniqueKey) {
			filter.marketUniqueKey = marketUniqueKey;
		}

		return filter;
	};

	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
		var results = regex.exec(location.search);
		return results == null ? null : decodeURIComponent(results[1].replace(/\+/g, " "));
	};
	
	$scope.getTaskCountMessage = function(taskCollection) {
		var message = '';
		if (taskCollection.hasMore) {
			if (typeof $scope.pageData != 'undefined' &&  $scope.pageData != null) {
				var numberDisplayed = ($scope.filter.pageNumber + 1) * $scope.pageData.tasksPerPage;
				if (numberDisplayed > taskCollection.totalSize) {
					numberDisplayed = taskCollection.totalSize;
				} else {
					message += 'first ';
				}
				message += numberDisplayed;
			}
		} else {
			message += taskCollection.totalSize;
		}
		
		return message;
	};
	
	function addRoleToFilter(roleUniqueKey) {
		if (!$scope.filter.roleUniqueKeys) $scope.filter.roleUniqueKeys = [];
		if ($scope.filter.roleUniqueKeys.indexOf(roleUniqueKey) < 0) {
			$scope.filter.roleUniqueKeys.push(roleUniqueKey);
			filterCategories();
			return true;
		}
		return false;
	}
	
	function filterCategories() {
		$scope.pageData.categories = taskStoreService.filterCategories(fullCategoriesList, $scope.filter, $scope.roleIdMap);
		
		if ($scope.filter.categoryUniqueKey != null) {
			var validCategory = false;
			for (var index in $scope.pageData.categories) {
				var category = $scope.pageData.categories[index];
				if ($scope.filter.categoryUniqueKey == category.uniqueKey) {
					validCategory = true;
					break;
				}
			}
			if (!validCategory) {
				$scope.filter.categoryUniqueKey = null;
			}
		}
	}
	
	/********************
	 * Feedback Modal Dialog (remember to duplicate any code changes in taskDefinitionController.js)
	 *******************/
	$scope.feedbackValues = {
		concernType: '',
		comments: '',
		replyEmail: ''
	};
	$scope.showFeedbackDialog = function() {
		if (!$scope.pageData || ($scope.pageData.feedbackRequiresAuthentication && !$scope.pageData.isUserAuthenticated)) {
			sessionService.login('showFeedbackDialog()');
		} else {
			if ($scope.menuOpen) $scope.toggleMenu(false);
			$('#feedbackModal').modal('show');
			$('#feedbackComments').focus();
		}
	};
	
	$scope.disableFeedbackSubmit = false;
	$scope.submitFeedback = function() {
		if (!$scope.disableFeedbackSubmit) {
			$scope.disableFeedbackSubmit = true;
			var feedback = {
				type: $scope.feedbackValues.concernType,
				comment: $scope.feedbackValues.comments,
				replyEmail: $scope.feedbackValues.replyEmail
			};
			
			taskStoreService.submitFeedback(feedback).then(function() {
				$scope.feedbackValues.concernType = null;
				$scope.feedbackValues.comments = null;
				$scope.feedbackValues.replyEmail = null;
				alertService.addAlert('Feedback submitted successfully', 'success', true);
				$scope.disableFeedbackSubmit = false;
			}, function() {
				alertService.addAlert('Could not submit your feedback at this time. Please try again later.', 'danger');
				$scope.disableFeedbackSubmit = false;
			});
			$('#feedbackModal').modal('hide');
		}
	};
	// End feedback
	
	/********************
	 * Preferences Modal Dialog
	 *******************/
	$scope.showPreferencesDialog = function() {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('showPreferencesDialog()');
		} else {
			if ($scope.menuOpen) $scope.toggleMenu(false);
			
			taskStoreService.getDatabasePreferences().success(function(data, status, headers) {
				if (headers('content-type') != null && headers('content-type').indexOf('json') < 0) {
					sessionService.login('tryAgain()');
					return;
				}
				$scope.pageData.userPreferences = data;
				$('#preferencesModal').modal('show');
				$('#preferencesModal input:first').focus();
			}).error(function(data, status) {
				alertService.addAlert('Could not retrieve latest preference settings. ('+status+')', 'danger', true);
			});
		}
	};
	
	$scope.disablePreferencesSubmit = false;
	$scope.savePreferences = function() {
		if (!$scope.disablePreferencesSubmit) {
			$scope.disablePreferencesSubmit = true;
			
			taskStoreService.savePreferences($scope.pageData.userPreferences).then(function() {
				taskStoreService.getPageData().then(function(data) {
					$scope.pageData = data;
					taskStoreService.savePreferencesToLocalStorage($scope.pageData);
				});
				alertService.addAlert('Preferences saved successfully', 'success', true);
				$scope.disablePreferencesSubmit = false;
			}, function() {
				alertService.addAlert('Could not save your preferences at this time. Please try again later. ('+status+')', 'danger');
				$scope.disablePreferencesSubmit = false;
			});
			$('#preferencesModal').modal('hide');
		}
	};
	
	// End preferences
	
	
	$scope.widthStyle = function (percent) {
	    return { width: percent + '%' };
	};

	$scope.saveFavoritesPending = false;
	$scope.editingFavorites = false;
	$scope.editFavorites = function(taskCollectionUniqueKey) {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('editFavorites("'+taskCollectionUniqueKey+'")');
		} else {
			$scope.selectTaskCollection(taskCollectionUniqueKey, true);
			$scope.editingFavorites = true;
		}
	};
	
	$scope.saveFavorites = function(taskCollection) {
		if (!$scope.saveFavoritesPending) {
			var favoriteUids = [];
			if (taskCollection.tasks) {
				for (index in taskCollection.tasks) {
					favoriteUids.push(taskCollection.tasks[index].uid);
				}
			}
			
			$scope.saveFavoritesPending = true;
			taskStoreService.saveFavorites(favoriteUids).then(function() {
				$scope.editingFavorites = false;
				$scope.saveFavoritesPending = false;
				if (favoriteUids.length > 0) {
					$scope.selectTaskCollection(taskCollection.uniqueKey, false);
				} else {
					$scope.clearFilters();
				}
				searchService.storeOfflineIds();
			}, function(status) {
				if (status = 0 || status == 301 || status == 302) {
					//lost session
					
				} else {
					$scope.saveFavoritesPending = false;
					alertService.addAlert('Could not save your favorites at this time. Please try again later.', 'danger');
				}
			});
		}
	};
	
	$scope.saveMostRecentPending = false;
	$scope.editingMostRecent = false;
	$scope.editMostRecent = function(taskCollectionUniqueKey) {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('editMostRecent("'+taskCollectionUniqueKey+'")');
		} else {
			$scope.selectTaskCollection(taskCollectionUniqueKey, true);
			$scope.editingMostRecent = true;
		}
	};
	
	$scope.saveMostRecent = function(taskCollection) {
		if (!$scope.saveMostRecentPending) {
			$scope.saveMostRecentPending = true;
			taskStoreService.saveMostRecent(currentlyRemovingMostRecent).then(function() {
				$scope.editingMostRecent = false;
				$scope.saveMostRecentPending = false;
				if (taskCollection.tasks.length > 0) {
					$scope.selectTaskCollection(taskCollection.uniqueKey, false);
				} else {
					$scope.clearFilters();
				}
				searchService.storeOfflineIds();
				currentlyRemovingMostRecent.length = 0;
			}, function(status) {
				if (status = 0 || status == 301 || status == 302) {
					//lost session
					
				} else {
					$scope.saveMostRecentPending = false;
					alertService.addAlert('Could not save your most recent preferences at this time. Please try again later.', 'danger');
				}
			});
		}
	};
	
	$scope.removeTask = function(taskCollection, task) { //called from task directive
		if (taskCollection.tasks) {
			taskCollection.tasks.splice(taskCollection.tasks.indexOf(task), 1);
			if ($scope.editingMostRecent) {
				currentlyRemovingMostRecent.push(task.uid);
			}
		}
	}
	
	$scope.addSingleFavorite = function(taskUid, callback) {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('addSingleFavorite("'+taskUid+'")');
		} else {
			$scope.saveFavoritesPending = true;
			taskStoreService.setFavorite({taskUid:taskUid, status: true})
			.success(function(data, status, headers, config) {
				if (headers('content-type') != null && headers('content-type').indexOf('json') < 0) {
					sessionService.login('tryAgain()');
					return;
				}
				if ($scope.isViewingHome()) {
					searchTasks();
				} else if (typeof callback == 'function') {
					callback(true);
				}
				$scope.saveFavoritesPending = false;
				
			}).error(function(data, status, headers, config) {
				$scope.saveFavoritesPending = false;
				alertService.addAlert('Failed to add your favorite (' + status + ')', 'danger');
				$scope.saveFavoritesPending = false;
				if (typeof callback == 'function') {
					callback(false);
				}
			});
		}
	};
	
	$scope.removeSingleFavorite = function(taskUid, callback) {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('removeSingleFavorite("'+taskUid+'")');
		} else {
			$scope.saveFavoritesPending = true;
			taskStoreService.setFavorite({taskUid:taskUid, status: false})
			.success(function(data, status, headers, config) {
				if (headers('content-type') != null && headers('content-type').indexOf('json') < 0) {
					sessionService.login('tryAgain()');
					return;
				}
				if ($scope.isViewingHome() || $scope.filter.taskCollectionUniqueKey == '_favorite_') {
					searchTasks();
				} else if (typeof callback == 'function') {
					callback(true);
				}
				$scope.saveFavoritesPending = false;
				
			}).error(function(data, status, headers, config) {
				$scope.saveFavoritesPending = false;
				alertService.addAlert('Failed to remove your favorite (' + status + ')', 'danger');
				$scope.saveFavoritesPending = false;
				if (typeof callback == 'function') {
					callback(false);
				}
			});
		}
	};
	
	$scope.evaluateStringWithBindings = function(string) {
		return taskStoreService.evaluateStringBindings(string, $scope);
	};
	
	$scope.tryAgain = function() {
		alertService.addAlert('Your sesson was lost and has been restored. You will need to perform the desired action again.', 'warning');
	};
	
	function UpdateQueryString(key, value, url) {
	    if (!url) url = window.location.href;
	    var re = new RegExp("([?|&])" + key + "=.*?(&|#|$)(.*)", "gi");

	    if (re.test(url)) {
	        if (typeof value !== 'undefined' && value !== null)
	            return url.replace(re, '$1' + key + "=" + value + '$2$3');
	        else {
	            var hash = url.split('#');
	            url = hash[0].replace(re, '$1$3').replace(/(&|\?)$/, '');
	            if (typeof hash[1] !== 'undefined' && hash[1] !== null) 
	                url += '#' + hash[1];
	            return url;
	        }
	    }
	    else {
	        if (typeof value !== 'undefined' && value !== null) {
	            var separator = url.indexOf('?') !== -1 ? '&' : '?',
	                hash = url.split('#');
	            url = hash[0] + separator + key + '=' + value;
	            if (typeof hash[1] !== 'undefined' && hash[1] !== null) 
	                url += '#' + hash[1];
	            return url;
	        }
	        else
	            return url;
	    }
	};
	
	var helpText = null;
	function startIntro() {
		if (getParameterByName('expert') != null) {
			store.set('introTourFinished', true);
			store.set('TDPTourFinished', true);
		} else {
			helpText = setupIntro();
		}
	};
	
	$scope.restartIntro = function() {
		$scope.toggleMenu(false);
		if (helpText) helpText.show();
	};
	
	function setupIntro() {
		var labels = [{
			selector: '#search_box',
			label: 'Enter your search',
			position: 'bottomright',
			distance: 1
		},{
			selector: '#login_button',
			label: 'Personalize ' + $scope.pageData.applicationName,
			position: 'topleft',
			arrowPos: 'left',
			distance: 1
		},{
			selector: '#market_select',
			label: 'Select your ' + $scope.pageData.marketTitle,
			position: 'bottomleft',
			arrowPos: 'left',
			distance: 1
		},{
			selector: '#role_select',
			label: 'Select your role',
			position: 'bottom',
			arrowPos: 'bottom',
			distance: 0.5
		}, {
			selector: '#category_select',
			label: 'View a category',
			position: 'bottomright',
			arrowPos: 'right',
			distance: 1
		}, {
			selector: '#contact_button',
			label: 'Ask for help',
			position: 'top',
			arrowPos: 'top',
			distance: 0.5
		},{
			selector: '#carousel-featured',
			label: 'Featured tasks',
			position: 'bottom',
			arrowPos: 'center',
			distance: 1
		},{
			selector: '#menu_button',
			label: 'Toggle menu bar',
			position: 'left',
			arrowPos: 'left',
			distance: 2.25
		},{
			selector: '.task-collection:first .see-more-button-desktop',
			label: 'See all in this category',
			position: 'bottom',
			arrowPos: 'bottom',
			distance: 1.5
		},{
			selector: '.task-collection:first .see-more-button',
			label: 'See all in this category',
			position: 'bottom',
			arrowPos: 'bottom',
			distance: 0.5
		}];
		
		var launchText = 'Click';
		var detailsText = 'Hover';
		if (mobileService.isMobile) {
			launchText = 'Tap';
			detailsText = 'Swipe';
		}
		
		labels.push({
			selector: '.task-collection:first .task2:first',
			label: detailsText + ' for more details',
			position: 'bottom',
			arrowPos: 'bottom',
			distance: 1
		});
		labels.push({
			selector: '.task-collection:first .task2:first',
			label: launchText + ' to launch',
			position: 'top',
			arrowPos: 'top',
			distance: 0.5
		});
		
		return new HelpText({
			name: 'introTour',
			onStart: function() {
				$scope.menuOpen = false;
				//$('#sticky_box').css('position', 'relative');
				window.scrollTo(0, 0);
			},
			onExit: function() {
				//$('#sticky_box').css('position', 'fixed');
			},
			labels: labels
		});
	};

	$(window).resize(function () {
		resizeHeader();
	});
	
	function resizeHeader() {
		/*
		$('#sticky_box_container').css('min-height', $('#sticky_box').outerHeight());
		var position = $('#sticky_box').css('position');
		if (position != 'relative' && position != 'fixed') {
			$('#sticky_box').css('position', 'fixed');
		}
		*/
	}
	
	var pageOffset = null;
	var scrollTopVisible = false;
	var timeout = null;
	$(window).scroll(function(event) {
		if (pageOffset == null) {
			pageOffset = this.pageYOffset;
		}
		
		if (this.pageYOffset > 10 && this.pageYOffset < pageOffset) {
			if (!scrollTopVisible) {
				$('#scrollTop').addClass('in');
				setScrollTopTimeout();
				scrollTopVisible = true;
			} else if (timeout != null) {
				clearTimeout(timeout);
				setScrollTopTimeout();
			}
		} else {
			if (scrollTopVisible) {
				$('#scrollTop').removeClass('in');
				scrollTopVisible = false;
				if (timeout != null) {
					clearTimeout(timeout);
					timeout = null;
				}
			}
		}
		pageOffset = this.pageYOffset;
    });
	
	function setScrollTopTimeout() {
		timeout = setTimeout(function() {
			$('#scrollTop').removeClass('in');
			scrollTopVisible = false;
		}, 3000);
	}
}]);