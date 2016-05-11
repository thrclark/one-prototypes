/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
publishingModule.controller('EditFeaturedTaskController', ['$scope', '$routeParams', '$location', '$parse', '$q', 'featuredTaskService', 'alertService', function($scope, $routeParams, $location, $parse, $q, featuredTaskService, alertService) {

	$scope.alertService = alertService;
	var taskPromise = featuredTaskService.findFeaturedTask($routeParams.taskUid || '').then(
		function(data) {
			$scope.featuredTask = data;
		},
		function(status) {
			if (status == 404) {
				alertService.addAlert('Task not found. It may have been deleted or is ineligible to be featured.', 'danger');
			} else {
				alertService.addAlert('Failed to retrieve featured task ('+ status + ')', 'danger');
			}
		}
	);
	
	$scope.contextPath = contextPath;

	var dataPromise = featuredTaskService.getFeaturedTaskPageData().then(function(data) {
		$scope.pageData = data;
	});
	
	$scope.addRecurDate = function() {
		if ($scope.recurDate) {
			var selectedDate = new Date($scope.recurDate);
			var found = false;
			for (var i=0, n=$scope.featuredTask.recurDates.length; i<n; i++) {
				var theRecurDate = $scope.featuredTask.recurDates[i];
				if (theRecurDate.month == selectedDate.getMonth() && theRecurDate.day ==  selectedDate.getDate()) {
					found = true;
					break;
				}
			}
			if (!found) {
				$scope.featuredTask.recurDates.push({month:selectedDate.getMonth(), day:selectedDate.getDate()});
			}
			$scope.recurDate = null;
		}
	};
	
	$scope.removeRecurrence = function(recurDate) {
		if (recurDate && $scope.featuredTask.recurDates.indexOf(recurDate) >= 0) {
			$scope.featuredTask.recurDates.splice($scope.featuredTask.recurDates.indexOf(recurDate), 1);
		}
	};
	
	$scope.saveFeaturedTask = function() {
		featuredTaskService.saveFeaturedTask($scope.featuredTask).then(function() {
			alertService.addAlert('Featured Task saved successfully', 'success', true);
			$location.path('/featuredTasks');
		},
		function(response) {
			if (response.status == 406) { // 406 == Not Acceptable
				$scope.errors = response.data;
			} else {
				alertService.addAlert('Failed to save featured task ('+ response.status + ')', 'danger');
			}
		});
	};
	
	$q.all([taskPromise, dataPromise]).then(function() {
		if ($scope.featuredTask.imageSetId) {
			for (var i=0; i< $scope.pageData.imageSets.length; i++) {
				var imageSet = $scope.pageData.imageSets[i];
				if (imageSet.imageSetId == $scope.featuredTask.imageSetId) {
					$scope.selectedImageSet = imageSet;
					break;
				}
			}
		}
	});
	
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
    		errorMessage: data.errorThrown + (data.jqXHR.responseText ? " (" + data.jqXHR.responseText + ")" : "")
    	});
    };
}]);