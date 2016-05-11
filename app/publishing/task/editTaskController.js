/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditTaskController', ['$scope', '$routeParams', '$location', '$q', '$parse', '$sce', '$filter', 'taskService', 'alertService', function($scope, $routeParams, $location, $q, $parse, $sce, $filter, taskService, alertService) {
	$scope.alertService = alertService;
	$scope.contextPath = contextPath;
	window.scope = $scope;
	
	var taskPromise;
	
	var originalMedia = [];
	var newLinkedMedia = [];
	
	var fullCategoriesList = [];

	if ($routeParams.taskId) {
		taskPromise = taskService.findTask($routeParams.taskId).then(function(data) {
			$scope.task = data;
			originalMedia = angular.copy(data.media);
			$scope.fileUploadOptions.url += '?taskId=' + $scope.task.taskId;
		});
	} else if ($routeParams.pendingTaskId) {
		$scope.pending = true;
		taskPromise = taskService.findTask($routeParams.pendingTaskId).then(function(data) {
			$scope.task = data;
			originalMedia = angular.copy(data.media);
			$scope.fileUploadOptions.url += '?taskId=' + $scope.task.taskId;
		});
	} else {
		taskPromise = taskService.newTask().then(function(data) {
			$scope.task = data;
		});
	}
	
	$scope.saveTask = function(isDraft) {
		$scope.task.media = $scope.getMedia();
		
		taskService.saveTask($scope.task, isDraft).then(function() {
			alertService.addAlert('Task saved successfully', 'success', true);
			$location.path('/tasks');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save task (' + response.status + ')', 'danger');
			}
		});
	};
	
	$scope.submitTask = function() {
		$scope.task.media = $scope.getMedia();

		taskService.submitTask($scope.task).then(function() {
			alertService.addAlert('Task submitted successfully', 'success', true);
			$location.path('/tasks');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to submit task (' + response.status + ')', 'danger');
			}
		});
	};
	
	$scope.approveTask = function() {
		$scope.task.media = $scope.getMedia();
		
		taskService.approveTask($scope.task).then(function() {
			alertService.addAlert('Task approved successfully', 'success', true);
			$location.path('/pendingTasks');
		}, function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to approve task (' + response.status + ')', 'danger');
			}
		});
	};
	
	$scope.declineTask = function() {
		$scope.task.media = $scope.getMedia();
		
		taskService.declineTask($scope.task).then(function() {
			alertService.addAlert('Task declined successfully', 'success', true);
			$location.path('/pendingTasks');
		}, function(response) {
			alertService.addAlert('Failed to decline task (' + response.status + ')', 'danger');
		});
	};
	
	var dataPromise = taskService.getTaskPageData().then(function(data) {
		$scope.pageData = data;
		
		fullCategoriesList = angular.copy(data.categories);
	});
	
	$q.all([taskPromise, dataPromise]).then(function() {
		if ($scope.task.imageSetId) {
			for (var i=0; i< $scope.pageData.imageSets.length; i++) {
				var imageSet = $scope.pageData.imageSets[i];
				if (imageSet.imageSetId == $scope.task.imageSetId) {
					$scope.selectedImageSet = imageSet;
					break;
				}
			}
		}
		
		for (index in $scope.task.media) {
			markMediaAsTrusted($scope.task.media[index]);
		}
		
		filterCategories();
	});
	
	$scope.onPressEnter = function(event, func) {
		if (event.keyCode == 13) {
			func();
		}
		return false;
	};
	
	/**********************
	 * Tags
	 *********************/
	$scope.selectedTag = '';
	
	$scope.addTags = function() {
		if ($scope.selectedTags) {
			for (var x=0; x<$scope.selectedTags.length; x++) {
				var selectedTag = $scope.selectedTags[x];
				var tag = null;
				for (var i=0, n=$scope.pageData.tags.length; i<n; i++) {
					if ($scope.pageData.tags[i].name == selectedTag.name) {
						tag = $scope.pageData.tags[i];
					}
				}
				var found = false;
				for (index in $scope.task.tags) {
					if ($scope.task.tags[index].tag.name == tag.name) {
						found = true;
						break;
					};
				}
				if (!found) {
					$scope.task.tags.push({hidden:tag.hiddenDefault, tag:tag});
				};
			}
			$scope.selectedTags.length = 0;
		};
	};
	
	$scope.removeTag = function(tag) {
		if (tag && $scope.task.tags.indexOf(tag) >= 0) {
			$scope.task.tags.splice($scope.task.tags.indexOf(tag), 1);
		}
	};
	
	/**********************
	 * Roles
	 *********************/
	$scope.selectedRole = null;
	
	$scope.addRole = function() {
		if ($scope.selectedRole) {
			var found = false;
			for (index in $scope.task.roles) {
				var role = $scope.task.roles[index];
				if (role.roleId == $scope.selectedRole.roleId) {
					found = true;
					break;
				}
			}
			if (!found) {
				$scope.task.roles.push($scope.selectedRole);
				filterCategories();
			}
		} else if ($scope.selectedRole == null) {
			$scope.task.roles.length = 0;
			filterCategories();
		}
	};
	
	$scope.removeRole = function(role) {
		if (role && $scope.task.roles.indexOf(role) >= 0) {
			$scope.task.roles.splice($scope.task.roles.indexOf(role), 1);
			filterCategories();
		}
	};
	
	/**********************
	 * Categories
	 *********************/
	$scope.selectedCategory = null;
	
	$scope.addCategory = function() {
		if ($scope.selectedCategory) {
			var found = false;
			for (index in $scope.task.categories) {
				var category = $scope.task.categories[index];
				if (category.categoryId == $scope.selectedCategory.categoryId) {
					found = true;
					break;
				}
			}
			if (!found) {
				$scope.task.categories.push($scope.selectedCategory);
				validateRoles();
			}
			
		}
	};
	
	$scope.removeCategory = function(category) {
		if (category && $scope.task.categories.indexOf(category) >= 0) {
			$scope.task.categories.splice($scope.task.categories.indexOf(category), 1);
			validateRoles();
		}
	};
	
	function filterCategories() {
		//update the list of available categories
		scope.pageData.categories = $filter('filter')(fullCategoriesList, function(value) {
			if (value.roles == null || value.roles.length == 0) {
				return true;
			}
			for (var index in $scope.task.roles) {
				var role = $scope.task.roles[index];
				for (var index2 in value.roles) {
					var role2 = value.roles[index2];
					if (role2.roleId == role.roleId) {
						return true;
					}
				}
			}
			return false;
		}, true);
		
		//remove any categories that are no longer available
		var newTaskCategories = [];
		for (var i in $scope.task.categories) {
			var categoryId = $scope.task.categories[i].categoryId;
			for (var i2 in $scope.pageData.categories) {
				var category = $scope.pageData.categories[i2];
				if (categoryId == category.categoryId) {
					newTaskCategories.push(category);
					break;
				}
			}
		}
		$scope.task.categories = newTaskCategories;
		
		validateRoles();
	}
	
	function validateRoles() {
		$scope.invalidRoles = [];
		for (var i in $scope.task.roles) { //for each role on the task
			var role = $scope.task.roles[i];
			var foundCategory = false;
			for (var i2 in $scope.task.categories) {// try to find at least one category
				var category = $scope.task.categories[i2];
				if (category.roles != null && category.roles.length > 0) {
					for (var i3 in category.roles) { //that is mapped to the role on the task
						var roleId = category.roles[i3].roleId;
						if (role.roleId == roleId) {
							foundCategory = true;
							break;
						}
					}
					if (foundCategory) {
						break;
					}
				} else {
					foundCategory = true;
					break;
				}
			}
			if (!foundCategory) {
				$scope.invalidRoles.push(role.name); //add the role to the invalid list if it wasn't found on any categories
			}
		}
	}
	
	/**********************
	 * Markets
	 *********************/
	$scope.selectedMarket = null;
	
	$scope.addMarket = function() {
		if ($scope.selectedMarket && $scope.task.markets.indexOf($scope.selectedMarket) < 0) {
			$scope.task.markets.push($scope.selectedMarket);
		} else if ($scope.selectedMarket == null) {
			$scope.task.markets.length = 0;
		}
	};
	
	$scope.removeMarket = function(market) {
		if (market && $scope.task.markets.indexOf(market) >= 0) {
			$scope.task.markets.splice($scope.task.markets.indexOf(market), 1);
		}
	};
	
	/**********************
	 * Media
	 *********************/
    var updateMediaList = function() {
    	var newMediaList = []; //start with an empty list
    	if ($scope.task) {
	    	for (var i=0,n=$scope.task.media.length; i<n; i++) { //for every item in the current working media list
	    		var media = $scope.task.media[i];
	    		
	    		var isOriginal = false;
	    		for (var j=0,m=originalMedia.length; j<m; j++) { //see if we can find it in the original media list
	        		var media2 = originalMedia[j];
	        		if (media2 != null) {
		        		if (media2.name == media.name) {
		        			isOriginal = true;
		        			media2.caption = media.caption;
		        			newMediaList.push(media2);
		        		}
	        		}
	        	}
	    		
	    		if (!isOriginal) { //if not in our original list, check to see if it's in the queue or was linked, and if so, keep the one in the working list
		    		for (var j=0,m=$scope.queue.length; j<m; j++) {
		        		var file = $scope.queue[j];
		        		if (file.name == media.name) {
		        			newMediaList.push(media);
		        		}
		        	}
		    		for (var j=0,m=newLinkedMedia.length; j<m; j++) {
		        		var media2 = newLinkedMedia[j];
		        		if (media2.name == media.name) {
		        			newMediaList.push(media);
		        		}
		        	}
	    		}
	    	}
	    	
	    	for (var j=0,m=$scope.queue.length; j<m; j++) { //add every new item in the queue not already in the list
	    		var file = $scope.queue[j];
	    		if (!file.error) {
		    		var found = false;
		    		for (var i=0,n=$scope.task.media.length; i<n; i++) {
		        		var media = $scope.task.media[i];
			    		if (file.name == media.name) {
			    			found = true;
			    			break;
			    		}
		    		}
		    		if (!found) {
		    			newMediaList.push(file);
		    		}
	    		}
	    	}
	    	$scope.task.media = newMediaList;
	    	
	    	for (index in $scope.task.media) {
				markMediaAsTrusted($scope.task.media[index]);
			}
    	}
    };
    
    $scope.fileUploadOptions = {
        url: contextPath + '/publish/image/media',
        autoUpload: true,
        acceptFileTypes: /(\.|\/)(jpe?g|png)$/i,
		loadImageFileTypes: /^image\/(jpeg|jpg|png)$/,
        previewMaxWidth: null,
        previewMaxHeight: 100,
        stop: function(){$scope.$apply();updateMediaList();$scope.$apply();}
    };
    
    $scope.queue = [];
    
    $scope.$watch('queue.length', function(newVal, oldVal) {
    	if (newVal < oldVal) {
    		updateMediaList();
    	}
    });

    $scope.linkedImageUrl = '';
    $scope.linkImage = function() {
    	var media = {
    		name: $scope.linkedImageUrl,
    		mediaType: 'I',
    		contentUrl: $scope.linkedImageUrl
    	};
    	
    	markMediaAsTrusted(media);
    	
    	$scope.task.media.push(media);
    	newLinkedMedia.push(media);
    	$('#imageModal').modal('hide');
    };
    
    var newVideo = function() {return {name:'', mediaType:'V', contentUrl:'', oggUrl:'', webmUrl:'', mp4Url:''};};
    $scope.linkedVideo = newVideo();
    $scope.linkVideo = function() {
    	var name = $scope.linkedVideo.contentUrl || $scope.linkedVideo.oggUrl || $scope.linkedVideo.webmUrl || $scope.linkedVideo.mp4Url;
    	if (name) {
    		markMediaAsTrusted($scope.linkedVideo);
        	$scope.linkedVideo.name = name;
        	$scope.task.media.push($scope.linkedVideo);
        	newLinkedMedia.push($scope.linkedVideo);
        	$scope.linkedVideo = newVideo();
        	$('#videoModal').modal('hide');
    	} else {
    		alert('Enter at least one URL to a video');
    	}
    };
    
    $scope.getMedia = function() {
    	var mediaList = [];
    	for (i=0, n=$scope.task.media.length; i<n; i++) {
    		var file = $scope.task.media[i];
    		
    		if (!!file.mediaId || !file.thumbnail_url) {
    			mediaList.push(file);
    		} else {
    			mediaList.push({name:file.name, caption:file.caption});
    		}
    		
    	}
    	return mediaList;
    };
    
    $scope.deleteMedia = function(media) {
    	var index = $scope.task.media.indexOf(media);
    	$scope.task.media.splice(index, 1);
    	
    	index = newLinkedMedia.indexOf(media);
    	if (index >= 0) {
    		newLinkedMedia.splice(index, 1);
    	}
    };
    
    function markMediaAsTrusted(media) {
    	if (media.contentUrl) {
    		media.contentUrlTrusted = $sce.trustAsResourceUrl(media.contentUrl);
    	}
    	if (media.oggUrl) {
    		media.oggUrlTrusted = $sce.trustAsResourceUrl(media.oggUrl);
    	}
    	if (media.webmUrl) {
    		media.webmUrlTrusted = $sce.trustAsResourceUrl(media.webmUrl);
    	}
    	if (media.mp4Url) {
    		media.mp4UrlTrusted = $sce.trustAsResourceUrl(media.mp4Url);
    	}
    };
    
    /*  single uploads  */

    $scope.uploadUrl = contextPath + '/publish/image/media';

    $scope.uploadDone = function(e, data, uploadReturn, mediaName) {
    	var file = data.result.files[0];

    	$parse(uploadReturn).assign($scope, {
    		error: false,
    		message: 'Uploaded Succesfully.',
    	});
    	
    	var media = {name:file.name};
    	var model = $parse(mediaName);
        model.assign($scope, media);
    };

    $scope.uploadProgress = function(e, data, uploadReturn) {
    	$parse(uploadReturn).assign($scope, {
    		error: false,
    		message: 'Uploading...'
    	});
    };

    $scope.uploadFail = function(e, data, uploadReturn) {
    	$parse(uploadReturn).assign($scope, {
    		error: true,
    		message: 'Upload Failed.',
    		errorMessage: data.errorThrown + " (" + data.jqXHR.responseText + ")"
    	});
    };
    
    
    $scope.imageCaption = '';
    $scope.mediaForCaptionEdit = null
    $scope.editCaption = function(media) {
    	$scope.mediaForCaptionEdit = media;
    	$scope.imageCaption = media.caption;
    	$('#captionModal').modal();
    };
    
    $scope.saveCaption = function() {
    	if ($scope.mediaForCaptionEdit != null) {
    		$scope.mediaForCaptionEdit.caption = $scope.imageCaption;
    	}
    	$scope.imageCaption = '';
    	$('#captionModal').modal('hide');
    };

    /**************
    * Release Notes
    **************/
    
    $scope.addReleaseNote = function() {
    	$scope.task.releaseNotes.push({note:$scope.releaseNote});
    	$scope.releaseNote = '';
    };
    
    $scope.removeReleaseNote = function(note) {
    	$scope.task.releaseNotes.splice($scope.task.releaseNotes.indexOf(note), 1);
    };
}]);

publishingModule.controller('FileDestroyController', ['$scope', '$http', function($scope, $http) {
     var file = $scope.file,
         state;
     if (file.url) {
         file.$state = function () {
             return state;
         };
         file.$destroy = function () {
             state = 'pending';
             return $http({
                 url: file.delete_url,
                 method: file.delete_type
             }).then(
                 function () {
                     state = 'resolved';
                     $scope.clear(file);
                 },
                 function () {
                     state = 'rejected';
                 }
             );
         };
     } else if (!file.$cancel) {
         file.$cancel = function () {
             $scope.clear(file);
         };
     }
}]);