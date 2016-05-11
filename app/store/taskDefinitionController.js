/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
taskStoreModule.controller('TaskDefinitionController', ['$scope', '$timeout', 'taskStoreService', 'alertService', 'sessionService', 'searchService', 'cookieService', 'commentReplyService', function($scope, $timeout, taskStoreService, alertService, sessionService, searchService, cookieService, commentReplyService) {
	
	$scope.alertService = alertService;
	$scope.pageData = {};
	$scope.pageData.allMarketsUrlKey = $('body').attr('data-all-markets-key');
	
	$scope.currentMarket = null;
	$scope.filter = searchService.getStoredFilter();
	if ($scope.filter) {
		$scope.currentMarket = $scope.filter.marketUniqueKey;
		$scope.searchTerms = $scope.filter.terms;
		
		if ($scope.searchTerms) {
			$('#search-field').typeahead('setQuery', $scope.searchTerms);
		}
	} else {
		$scope.filter = {
			tag : null,
			terms : null,
			marketUniqueKey : null,
			roleUniqueKeys : [],
			categoryUniqueKey : null,
			taskCollectionUniqueKey : null,
			pageNumber: 0,
			edit: false
		};
		searchService.saveFilter($scope.filter);
	}
	
	
	var taskUid = $('body').attr('data-task-uid');
	var taskId =  Number($('body').attr('data-task-id'));
	
	//for embedded youtube videos in IE. Prevents them from appearing on top
	$('iframe').each(function() {
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
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
	
	$scope.clearFilters = function() {
		$scope.filter.tag = null;
		$scope.filter.roleUniqueKeys = null;
		$scope.filter.categoryUniqueKey = null;
		$scope.filter.taskCollectionUniqueKey = null;
		$scope.filter.pageNumber = 0;
		searchService.saveFilter($scope.filter);
	};
	
	$scope.search = function() {
		$scope.filter.terms = $scope.searchTerms;
		$scope.filter.taskCollectionUniqueKey = null;
		$scope.filter.pageNumber = 0;
		searchService.saveFilter($scope.filter);
		
		var url = contextPath + '/store';
		if ($scope.filter.marketUniqueKey) url += '/' + $scope.filter.marketUniqueKey;
		url += '?search=true';
		window.location = url;
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
	
	$scope.comments = [];
	$scope.hasMoreComments = null;
	$scope.ratingData = null;
	$scope.versionRatingData = null;
	$scope.ratingsClasses = ["progress-bar-success", "progress-bar-primary", "progress-bar-info", "progress-bar-warning", "progress-bar-danger"];
	$scope.ratingText = ['no rating', 'extremely dislike', 'don\'t like it', 'it\'s ok', 'it\'s good', 'it\'s great'];
	$scope.rating = 0;
	$scope.commentText = '';
	$scope.marketMap = {};
	$scope.marketUniqueKeyMap = {};
	$scope.categoryMap = {};
	$scope.roleMap = {};
	$scope.roleIdMap = {};
	$scope.currentCommentId = null;
	$scope.taskDisplayVersionId = taskId;
	
	var commentsPageNumber = 0;
	var commentsSortType = 0;

	taskStoreService.getPageData(taskUid).then(function(data) {
		$scope.pageData = data;
		if (data.isUserAuthenticated) {
			sessionService.setLogoutDelayMinutes(data.logoutDelayMinutes);
		}
		taskStoreService.setUserPreferences($scope.pageData);
		
		var size = $scope.pageData.markets.length;
		for (var i=0; i<size; i++) {
			var market = $scope.pageData.markets[i];
			$scope.marketMap[market.marketId] = market.name;
			$scope.marketUniqueKeyMap[market.uniqueKey] = market.name;
		}
		
		size = $scope.pageData.categories.length;
		for (i=0; i<size; i++) {
			var category = $scope.pageData.categories[i];
			$scope.categoryMap[category.uniqueKey] = category.name;
		}
		
		size = $scope.pageData.roles.length;
		for (i=0; i<size; i++) {
			var role = $scope.pageData.roles[i];
			$scope.roleMap[role.uniqueKey] = role.name;
			$scope.roleIdMap[role.uniqueKey] = role.roleId;
		}
		
		if (data.userComment != null) {
			$scope.rating = data.userComment.rating || 0;
			$scope.commentText = data.userComment.comment || '';
			$scope.commentUserAlias = data.userComment.userAlias || data.commentUserAlias;
			$scope.currentCommentId = data.userComment.commentId;
		} else {
			$scope.rating = 0;
			$scope.commentText = '';
			$scope.commentUserAlias = data.commentUserAlias;
		}

		fullCategoriesList = angular.copy(data.categories);
		filterCategories();
		
		//perform any requested actions.  This is placed inside the pageData return because the actions may depend on that data
		sessionService.getRequestedAction($scope, ['showPreferencesDialog(', 'showFeedbackDialog(', 'flagComment(', 'commentVote(', 'writeReview(', 'removeFavorite(', 'addFavorite(', 'addSingleFavorite(', 'removeSingleFavorite(', 'tryAgain(']);
		$timeout(function() {
			startIntro();
		}, 1000);
	});
	
	$scope.getComments = function(selectedTaskId, callback) {
		if (selectedTaskId != taskId && $('#commentArea').hasClass('in')) {
			$('#commentArea').collapse('hide');
		}
		taskStoreService.getComments(taskUid, selectedTaskId).then(function(data) {
			$scope.comments = data.comments;
			$scope.hasMoreComments = data.hasMore;
			$scope.totalComments = data.totalComments;
			if (selectedTaskId == taskId) {
				$scope.ratingData = data.ratingData;
			}
			$scope.versionRatingData = data.ratingData;
			if (typeof callback == 'function') {
				callback();
			}
		});
	};
	
	$scope.getReleaseNotes = function(taskId) {
		taskStoreService.getReleaseNotes(taskId, taskUid)
			.success(function(data, status, headers, config) {
				$scope.releaseNotes = data;
			}).error(function(data, status, headers, config) {
				
			});
	};
	
	$scope.loadNextPageComments = function(comments) {
		commentsPageNumber++;
		loadComments(function(data) {
			$scope.comments = $scope.comments.concat(data.comments);
			$scope.hasMoreComments = data.hasMore;
			if (data.comments.length > 0) {
				scrollToComment(data.comments[0].commentId);
			}
		});
	};
	
	function scrollToComment(commentId) {
		$timeout(function() {
			$('#comment_'+commentId).focus();
			$('#commentList').scrollTop($('#comment_'+commentId).position().top - $('#comment_'+commentId).parent().position().top);
		});
	}
	
	function loadComments(callback) {
		if ($scope.comments && $scope.comments.length > 0) {
			var lastCommentId = $scope.comments[$scope.comments.length-1].commentId;
			taskStoreService.getComments(taskUid, $scope.taskDisplayVersionId, commentsPageNumber, commentsSortType, lastCommentId).then(function(data) {
				callback(data);
			});
		} else {
			taskStoreService.getComments(taskUid, $scope.taskDisplayVersionId, commentsPageNumber, commentsSortType).then(function(data) {
				callback(data);
			});			
		}
	}
	
	$scope.loadVersionData = function() {
		commentsPageNumber = 0;
		$scope.getComments($scope.taskDisplayVersionId);
		$scope.getReleaseNotes($scope.taskDisplayVersionId);
	};
	
	$scope.loadVersionData();
	
	taskStoreService.loadRelatedTasks(taskUid, ($scope.filter != null ? $scope.filter.marketUniqueKey : '')).then(function(data) {
		$scope.relatedTasks = data;
	}, function(status) {
		alertService.addAlert('Failed to load related tasks (' + status + ')', 'danger');
	});
	
	$scope.addFavorite = function(task) {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('addFavorite()');
		} else if ((task && !task.favorite) || (!task && !$scope.pageData.isFavorite)) {
			$scope.favoritePending = true;
			taskStoreService.setFavorite({taskUid:(task?task.uid:taskUid), status: true})
			.success(function(data, status, headers, config) {
				if (headers('content-type') != null && headers('content-type').indexOf('json') < 0) {
					sessionService.login('tryAgain()');
					return;
				}
				if (task) {
					task.favorite = true;
				} else {
					$scope.pageData.isFavorite = true;
				}
				$scope.favoritePending = false;
			}).error(function(data, status, headers, config) {
				$scope.favoritePending = false;
				alertService.addAlert('Failed to add your favorite (' + status + ')', 'danger');
			});
		}
	};
	
	$scope.removeFavorite = function(task) {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('removeFavorite()');
		} else if ((task && task.favorite) || (!task && $scope.pageData.isFavorite)) {
			$scope.favoritePending = true;
			taskStoreService.setFavorite({taskUid:(task?task.uid:taskUid), status: false})
			.success(function(data, status, headers, config) {
				if (headers('content-type') != null && headers('content-type').indexOf('json') < 0) {
					sessionService.login('tryAgain()');
					return;
				}
				if (task) {
					task.favorite = false;
				} else {
					$scope.pageData.isFavorite = false;
				}
				$scope.favoritePending = false;
			}).error(function(data, status, headers, config) {
				$scope.favoritePending = false;
				alertService.addAlert('Failed to remove your favorite (' + status + ')', 'danger');
			});
		}
	};
	
	
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
				$scope.saveFavoritesPending = false;
				if (callback) {
					callback(true);
				}
			}).error(function(data, status, headers, config) {
				$scope.saveFavoritesPending = false;
				alertService.addAlert('Failed to add your favorite (' + status + ')', 'danger');
				if (callback) {
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
				if (callback) {
					callback(true);
				}
				$scope.saveFavoritesPending = false;
			}).error(function(data, status, headers, config) {
				$scope.saveFavoritesPending = false;
				if (callback) {
					callback(false);
				}
				alertService.addAlert('Failed to remove your favorite (' + status + ')', 'danger');
			});
		}
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
		
		if($scope.filter.terms) {
			url += '?searchTerms=' + encodeURIComponent($scope.filter.terms);
		}

		return url;
	};

	$scope.clearSearch = function() {
		searchService.clearFilter();
	};
	
	$scope.roleIsSelected = function(uniqueKey) {
		return $scope.filter.roleUniqueKeys.indexOf(uniqueKey) >= 0;
	};
	
	/********************
	 * Comments
	 *******************/
	$scope.writeReview = function() {
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('writeReview()');
		} else  {
			$('#commentArea').collapse('toggle');
			$('#userAlias').focus();
		}
	};
	
	$scope.rateTaskWithKeyboard = function($event) {
		var key = null;
		if ($event.keyCode != null && $event.keyCode > 0) {
			key = $event.keyCode;
		} else if ($event.charCode != null && $event.charCode > 0) {
			key = $event.charCode;
		}
		
		if (key != null && key >= 49 && key <= 53) {
			$scope.rating = key - 48;
			$event.preventDefault();
			return false;
		}
	}

	$scope.submitComment = function() {
		var maxCount = $('#commentArea textarea').attr('ng-maxlength');
		if ($scope.commentText != '' && $scope.commentText.length <= maxCount && $scope.commentUserAlias != '' && $scope.commentUserAlias.length <= 100) {
			var data = {taskId:taskId, comment:$scope.commentText, userAlias:$scope.commentUserAlias, rating:$scope.rating};
			taskStoreService.postComment(data).then(function(data) {
				var postedComment = data.commentData;
				$scope.versionRatingData = data.ratingData;
				
				$('#commentArea').collapse('hide');
				
				if (taskId != $scope.taskDisplayVersionId) {
					$scope.taskDisplayVersionId = taskId;
					$scope.getComments(taskId, function() { flashNewComment(postedComment.commentId); });
				} else {
					var removeIndex = null;
					for (var index in $scope.comments) {
						var comment = $scope.comments[index];
						if (comment.commentId == $scope.currentCommentId) {
							removeIndex = index;
							break;
						}
					}
					if (removeIndex != null) {
						$scope.comments.splice(removeIndex, 1);
					} else {
						$scope.totalComments++;
					}
					
					$scope.comments.unshift(postedComment);
					
					flashNewComment(postedComment.commentId);
				}
				$scope.currentCommentId = postedComment.commentId;
			}, function(status) {
				if (status == 403) {
					alertService.addAlert('You are not allowed to comment.', 'warning');
				} else {
					alertService.addAlert('Failed to post your comment (' + status + ')', 'danger');
				}
				window.scrollTo(0,0);
			});				
		}
	};
	
	function flashNewComment(commentId) {
		$timeout(function() {
			//flash the new comment
			var commentElement = $('#comment_' + commentId);
			commentElement.focus();
			commentElement.addClass('new');
			$timeout(function() {
				commentElement.addClass('active');
				$timeout(function() {
					commentElement.removeClass('new');
					commentElement.removeClass('active');
				}, 3000);
			}, 500);
		});
	}
	
	$scope.commentVotePending = false;
	$scope.commentVote = function(commentId, vote) {
		$scope.commentVotePending = true;
		if (!$scope.pageData || !$scope.pageData.isUserAuthenticated) {
			sessionService.login('commentVote('+commentId+','+vote+')');
		} else  {
			var data = {commentId:commentId, vote:vote};
			taskStoreService.postCommentVote(data).success(function(data, status, headers, config) {
				if (headers('content-type') != null && headers('content-type').indexOf('json') < 0) {
					sessionService.login('tryAgain()');
					return;
				}
				if ($scope.comments) {
					for (var i=0; i< $scope.comments.length; i++) {
						var comment = $scope.comments[i];
						if (comment.commentId == commentId) {
							comment.voteUps = data.voteUps;
							comment.voteDowns = data.voteDowns;
							comment.voted = data.voted;
							break;
						}
					}
				}
				$scope.commentVotePending = false;
			}).error(function(data, status, headers, config) {
				$scope.commentVotePending = false;
				if (status == 401) {
					alertService.addAlert('You cannot vote for your own comment.', 'warning');
					window.scrollTo(0,0);
				} else if (status == 403) {
					alertService.addAlert('You are not allowed to vote.', 'warning');
					window.scrollTo(0,0);
				} else {
					alertService.addAlert('Failed to vote on comment (' + status + ')', 'danger');
				}
			});
		}
	};
	
	$scope.confirmDeleteComment = function(commentId) {
		$scope.deleteCommentId = commentId;
		$('#confirmDeleteModal').modal('show');
	};
	
	$scope.deleteComment = function(commentId) {
    	taskStoreService.deleteComment(commentId).then(function(data) {
    		$scope.ratingData = data;
    		if ($scope.comments) {
	    		for (var i=0; i< $scope.comments.length; i++) {
					if ($scope.comments[i].commentId == commentId) {
						$scope.comments.splice(i, 1);
						$scope.totalComments--;
						break;
					}
				}
			}
		}, function(status) {
			alertService.addAlert('Failed to delete your comment (' + status + ')', 'danger');
		});
    	$('#confirmDeleteModal').modal('hide');
	};
	
	$scope.sortCommentsType = function(sortType) {
		commentsPageNumber = 0;
		commentsSortType = sortType;
		loadComments(function(data) {
			$scope.comments = data.comments;
			$scope.hasMoreComments = data.hasMore;
			//scrollToComment(data.comments[0].commentId);
			$('#commentList').scrollTop(0);
		});
	};
	
	/********************
	 * Flag Comment Modal Dialog
	 *******************/
	$scope.concernType = '';
	$scope.concernComments = '';
	$scope.modalOpts = {
		backdropFade: true,
		dialogFade:true
	};
	
	$scope.flagComment = function (commentId) {
		if (!$scope.pageData.isUserAuthenticated) {
			sessionService.login('flagComment('+commentId+')');
		} else  {
			$scope.concernType = '';
			$scope.concernComments = '';
			$scope.commentId = commentId;
			$('#flagCommentModal').modal('show');
		}
	};
	
	$scope.closeFlagModal = function () {
		$('#flagCommentModal').modal('hide');
	};
	
	$scope.submitConcern = function() {
		var data = {
			type: $scope.concernType,
			text: $scope.concernComments,
			commentId: $scope.commentId
		};
		
		taskStoreService.submitCommentReport(data).then(function(postedComment) {
			alertService.addAlert('Report submitted successfully.', 'success', true);
		}, function(status) {
			if (status == 401) {
				alertService.addAlert('You cannot report your own comment.', 'warning');
				window.scrollTo(0,0);
			} else {
				alertService.addAlert('Failed to submit your report (' + status + ')', 'danger');
			}
		});
		$('#flagCommentModal').modal('hide');
	};
	
	/********************
	 * Feedback Modal Dialog (remember to duplicate any code changes in taskStoreController.js)
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
					taskStoreService.setUserPreferences($scope.pageData);
				});
				alertService.addAlert('Preferences saved successfully', 'success', true);
				$scope.disablePreferencesSubmit = false;
			}, function() {
				alertService.addAlert('Could not save your preferences at this time. Please try again later.', 'danger');
				$scope.disablePreferencesSubmit = false;
			});
			$('#preferencesModal').modal('hide');
		}
	};
	
	$scope.evaluateStringWithBindings = function(string) {
		return taskStoreService.evaluateStringBindings(string, $scope);
	};
	
	/********************
	 * Reply To Comment
	 *******************/
	$scope.replyToComment = function(comment) {
		commentReplyService.getCommentReply(comment.commentId)
			.success(function(data, status, headers, config) {
				$scope.commentReplyingTo = comment;
				$scope.commentReply = data;
				$('#replyModal').modal('show');
			}).error(function(data, status, headers, config) {
				alertService.addAlert('Could not retrieve details for the comment response ('+status+').', 'danger');
			});
	};
	
	var replyPendingDeletion = null;
	$scope.confirmDeleteReply = function(comment) {
		replyPendingDeletion = comment;
		$('#confirmDeleteReplyModal').modal('show');
	};
	
	$scope.deleteReply = function() {
		if (!$scope.disableReplySubmit) {
			$scope.disableReplySubmit = true;
			
			commentReplyService.getCommentReply(replyPendingDeletion.commentId)
				.success(function(data, status, headers, config) {
					commentReplyService.deleteCommentReply(data)
						.success(function(data, status, headers, config) {
							replyPendingDeletion.commentReply = null;
							replyPendingDeletion = null;
							$scope.disableReplySubmit = false;
						}).error(function(data, status, headers, config) {
							alertService.addAlert('Could not delete this comment response ('+status+').', 'danger');
							replyPendingDeletion = null;
							$scope.disableReplySubmit = false;
						});
				}).error(function(data, status, headers, config) {
					alertService.addAlert('Could not retrieve details for the comment response ('+status+').', 'danger');
				});
		}
		$('#confirmDeleteReplyModal').modal('hide');
	}
	
	
	//End reply to comment
	
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
		return new HelpText({
			name: 'TDPTour',
			onStart: function() {
				$scope.menuOpen = false;
			},
			labels: [{
				selector: '#search_box',
				label: 'Enter new search',
				position: 'bottomleft',
				distance: 1
			}, {
				selector: '#login_button',
				label: 'Personalize ' + $scope.pageData.applicationName,
				position: 'topleft',
				arrowPos: 'left',
				distance: 1
			}, {
				selector: '#market_select',
				label: 'Select your ' + $scope.pageData.marketTitle,
				position: 'bottomleft',
				arrowPos: 'left',
				distance: 1
			}, {
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
				position: 'topright',
				arrowPos: 'right',
				distance: 0.5
			}, {
				selector: '#settings_button',
				label: 'Set your preferences',
				position: 'bottom',
				arrowPos: 'bottom',
				distance: 1
			}, {
				selector: '#launch_button',
				label: 'Launch task',
				position: 'bottomright',
				arrowPos: 'right',
				distance: 1
			}, {
		        selector: "#mobile_launch_button",
		        label: "Launch task",
		        position: "topright",
		        arrowPos: 'top'
		    }, {
		        selector: "#favorite_button",
		        label: "Add as a favorite",
		        position: "bottomleft",
		        arrowPos: "left",
		        distance: 1.5
		    }, {
		        selector: "#mobile_favorite_button",
		        label: "Add as a favorite",
		        position: "bottomright",
		        arrowPos: 'bottom',
		        distance: 0.5
		    }, {
		        selector: "#screenshot_block img:first",
		        label: "Click/tap for screenshot of task",
		        position: "top",
		        arrowPos: 'center',
		        distance: 1
		    }, {
		    	selector: '#feedback_block .user-rating',
		    	label: 'Click/tap a star to rate',
		    	position: 'bottom',
		    	distance: 1
		    }, {
		    	selector: '#contact_block',
		    	label: 'Get help with this task',
		    	position: 'top',
		    	arrowPos: 'center',
		    	distance: 1
		    },/* {
		    	selector: '#relatedTasks',
		    	label: 'See tasks related to this one',
		    	position: 'top',
		    	arrowPos: 'center',
		    	distance: 1
		    }*/,  {
		    	selector: '#tagList .tag:first',
		    	label: 'Click/tap to see other tasks',
		    	position: 'top',
		    	arrowPos: 'top',
		    	distance: 1
		    }, {
				selector: '#menu_button',
				label: 'Toggle menu bar',
				position: 'left',
				arrowPos: 'left',
				distance: 1.5
			}/*, {
				selector: '#review_button',
				label: 'Submit your review',
				position: 'bottom',
				arrowPos: 'bottom',
				distance: 0.5
			}*/, {
				selector: '#commentList i.glyphicon-flag:visible:first',
				label: 'Flag comment as inappropriate',
				position: 'bottomleft',
				arrowPos: 'left',
				distance: 1
			}, {
				selector: '#commentList i.glyphicon-trash:visible:first',
				label: 'Delete your comment',
				position: 'bottomleft',
				arrowPos: 'left',
				distance: 1
			},/* {
				selector: '#commentList .comment .btn-vote.btn-success:visible:first',
				label: 'Mark as helpful',
				position: 'top',
				arrowPos: 'top',
				distance: 1
			}, {
				selector: '#commentList .comment .btn-vote.btn-danger:visible:first',
				label: 'Mark as unhelpful',
				position: 'topright',
				arrowPos: 'right',
				distance: 0.5
			}*/, {
				selector: '#comment_sort_block',
				label: 'Change how comments are sorted',
				position: 'top',
				arrowPos: 'top',
				distance: 0.5
			}]
		});
	};
	
	/********************
	 * Other Stuff
	 *******************/
	$scope.widthStyle = function (percent) {
	    return { width: percent + '%' };
	};
	
	$scope.scrollToTop = function() {
		window.scrollTo(0,0);
	};
	
	$scope.executeUrl = function(url) {
		window.location = url;
	};
	
	$scope.displayTaskMobileMenu = function(task, show) {
		task.mobileMenuVisible = show;
	};
	
	$scope.tryAgain = function() {
		alertService.addAlert('Your sesson was lost and has been restored. You will need to perform the desired action again.', 'warning');
	}
	
	function filterCategories() {
		$scope.pageData.categories = taskStoreService.filterCategories(fullCategoriesList, $scope.filter, $scope.roleIdMap);
	}
	
	//Set up touch events for scrolling div on phones
	touchScroll('div.media-scroll');
	
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
		var results = regex.exec(location.search);
		return results == null ? null : decodeURIComponent(results[1].replace(/\+/g, " "));
	};
}]);