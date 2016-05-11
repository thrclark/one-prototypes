/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var publishingModule = angular.module('publishing', [ 'ngTouch', 'ngRoute', 'ngAria', 'ui.sortable', 'blueimp.fileupload', 'sharedDirectives', 'loading'], function($routeProvider, $httpProvider) {
	$routeProvider.
		when('/', {templateUrl: contextPath + '/app/publishing/publishing.html?ver='+htmlTemplateVersion, controller:'PublishingController'}).
		when('/tasks', {templateUrl: contextPath + '/app/publishing/task/taskList.html?ver='+htmlTemplateVersion,   controller: 'TaskListController'}).
		when('/task', {templateUrl: contextPath + '/app/publishing/task/task.html?ver='+htmlTemplateVersion,   controller: 'EditTaskController'}).
		when('/task/:taskId', {templateUrl: contextPath + '/app/publishing/task/task.html?ver='+htmlTemplateVersion,   controller: 'EditTaskController'}).
		when('/featuredTasks', {templateUrl: contextPath + '/app/publishing/featured/featuredTaskList.html?ver='+htmlTemplateVersion,   controller: 'FeaturedTaskListController'}).
		when('/featuredTask/:taskUid', {templateUrl: contextPath + '/app/publishing/featured/featuredTask.html?ver='+htmlTemplateVersion,   controller: 'EditFeaturedTaskController'}).
		when('/pendingTasks', {templateUrl: contextPath + '/app/publishing/task/taskList.html?ver='+htmlTemplateVersion,   controller: 'PendingTaskListController'}).
		when('/pendingTask/:pendingTaskId', {templateUrl: contextPath + '/app/publishing/task/task.html?ver='+htmlTemplateVersion,   controller: 'EditTaskController'}).
		when('/markets', {templateUrl: contextPath + '/app/publishing/market/marketList.html?ver='+htmlTemplateVersion,   controller: 'MarketListController'}).
		when('/market', {templateUrl: contextPath + '/app/publishing/market/market.html?ver='+htmlTemplateVersion,   controller: 'EditMarketController'}).
		when('/market/:marketId', {templateUrl: contextPath + '/app/publishing/market/market.html?ver='+htmlTemplateVersion,   controller: 'EditMarketController'}).
		when('/publishers', {templateUrl: contextPath + '/app/publishing/publisher/publisherList.html?ver='+htmlTemplateVersion,   controller: 'PublisherListController'}).
		when('/publisher', {templateUrl: contextPath + '/app/publishing/publisher/publisher.html?ver='+htmlTemplateVersion,   controller: 'EditPublisherController'}).
		when('/publisher/:publisherId', {templateUrl: contextPath + '/app/publishing/publisher/publisher.html?ver='+htmlTemplateVersion,   controller: 'EditPublisherController'}).
		when('/categories', {templateUrl: contextPath + '/app/publishing/category/categoryList.html?ver='+htmlTemplateVersion,   controller: 'CategoryListController'}).
		when('/category', {templateUrl: contextPath + '/app/publishing/category/category.html?ver='+htmlTemplateVersion,   controller: 'EditCategoryController'}).
		when('/category/:categoryId', {templateUrl: contextPath + '/app/publishing/category/category.html?ver='+htmlTemplateVersion,   controller: 'EditCategoryController'}).
		when('/reports', {templateUrl: contextPath + '/app/publishing/report/reportList.html?ver='+htmlTemplateVersion,   controller: 'ReportListController'}).
		when('/report/:commentId', {templateUrl: contextPath + '/app/publishing/report/comment.html?ver='+htmlTemplateVersion,   controller: 'ViewCommentController'}).
		when('/roles', {templateUrl: contextPath + '/app/publishing/role/roleList.html?ver='+htmlTemplateVersion,   controller: 'RoleListController'}).
		when('/role', {templateUrl: contextPath + '/app/publishing/role/role.html?ver='+htmlTemplateVersion,   controller: 'EditRoleController'}).
		when('/role/:roleId', {templateUrl: contextPath + '/app/publishing/role/role.html?ver='+htmlTemplateVersion,   controller: 'EditRoleController'}).
		when('/tags', {templateUrl: contextPath + '/app/publishing/tag/tagList.html?ver='+htmlTemplateVersion,   controller: 'TagController'}).
		when('/tag', {templateUrl: contextPath + '/app/publishing/tag/tag.html?ver='+htmlTemplateVersion,   controller: 'EditTagController'}).
		when('/tag/:tagId', {templateUrl: contextPath + '/app/publishing/tag/tag.html?ver='+htmlTemplateVersion,   controller: 'EditTagController'}).
		when('/support', {templateUrl: contextPath + '/app/publishing/support/support.html?ver='+htmlTemplateVersion,   controller: 'SupportController'}).
		when('/support/:taskUniqueKey', {templateUrl: contextPath + '/app/publishing/support/support.html?ver='+htmlTemplateVersion,   controller: 'SupportController'}).
		when('/support/:marketUniqueKey/:taskUniqueKey', {templateUrl: contextPath + '/app/publishing/support/support.html?ver='+htmlTemplateVersion,   controller: 'SupportController'}).
		when('/restrict', {templateUrl: contextPath + '/app/publishing/banUser/userList.html?ver='+htmlTemplateVersion,   controller: 'BanListController'}).
		when('/tenantSettings', {templateUrl: contextPath + '/app/publishing/settings/tenantSettingList.html?ver='+htmlTemplateVersion,   controller: 'TenantSettingController'}).
		when('/tenantSetting/:uniqueKey', {templateUrl: contextPath + '/app/publishing/settings/tenantSetting.html?ver='+htmlTemplateVersion,   controller: 'EditTenantSettingController'}).
		when('/contacts', {templateUrl: contextPath + '/app/publishing/contact/contactList.html?ver='+htmlTemplateVersion,   controller: 'ContactListController'}).
		when('/contact', {templateUrl: contextPath + '/app/publishing/contact/contact.html?ver='+htmlTemplateVersion,   controller: 'EditContactController'}).
		when('/contact/:contactId', {templateUrl: contextPath + '/app/publishing/contact/contact.html?ver='+htmlTemplateVersion,   controller: 'EditContactController'}).
		when('/images', {templateUrl: contextPath + '/app/publishing/image/imageList.html?ver='+htmlTemplateVersion,   controller: 'ImageController'}).
		when('/image', {templateUrl: contextPath + '/app/publishing/image/image.html?ver='+htmlTemplateVersion,   controller: 'EditImageController'}).
		when('/image/:imageId', {templateUrl: contextPath + '/app/publishing/image/image.html?ver='+htmlTemplateVersion,   controller: 'EditImageController'}).
		when('/resourceImages', {templateUrl: contextPath + '/app/publishing/resourceImage/resourceImages.html?ver='+htmlTemplateVersion,   controller: 'ResourceImageController'}).
		when('/feedback', {templateUrl: contextPath + '/app/publishing/feedback/feedbackList.html?ver='+htmlTemplateVersion,   controller: 'FeedbackController'}).
		when('/feedback/:feedbackId', {templateUrl: contextPath + '/app/publishing/feedback/feedback.html?ver='+htmlTemplateVersion,   controller: 'EditFeedbackController'}).
		when('/comment/:taskUid/:previousPage', {templateUrl: contextPath + '/app/publishing/comment/commentReview.html?ver='+htmlTemplateVersion,   controller: 'CommentReviewController'}).
		when('/recentComments/', {templateUrl: contextPath + '/app/publishing/comment/recentComments.html?ver='+htmlTemplateVersion,   controller: 'RecentCommentsController'}).
		when('/commentsForTaskVersion/:taskId/:previousPage/:taskUid', {templateUrl: contextPath + '/app/publishing/comment/commentsForTaskVersion.html?ver='+htmlTemplateVersion,   controller: 'CommentsForTaskVersionController'}).
		when('/commentDetails/:commentId/:previousPage/:taskId/:taskUid/:originPage', {templateUrl: contextPath + '/app/publishing/comment/commentDetails.html?ver='+htmlTemplateVersion,   controller: 'CommentDetailsController'}).
		when('/commentDetails/:commentId/:previousPage/:originPage', {templateUrl: contextPath + '/app/publishing/comment/commentDetails.html?ver='+htmlTemplateVersion,   controller: 'CommentDetailsController'}).
		when('/reviewCommentReplies', {templateUrl: contextPath + '/app/publishing/commentReplies/commentReplies.html?ver='+htmlTemplateVersion, controller: 'CommentRepliesController'}).
		otherwise({redirectTo: '/'});
	
	$httpProvider.interceptors.push(function($q) {
		var isReloading = false;  
		
		return {
		   'request': function(config) {
				return config || $q.when(config);
		    },
		    'requestError': function(rejection) {
		    	return $q.reject(rejection);
		    },
		    'response': function(response) {
		    	if (!isReloading && typeof response.data == 'string' && response.data.indexOf('name="SAMLRequest"') > 0) {
		    		alert('You have lost your session.  The page will be reloaded to restore your session.');
		    		isReloading = true;
		    		location.reload();
		    	}
		    	return response || $q.when(response);
		    },
		    'responseError': function(rejection) {
		    	if (!isReloading && rejection.status == 0) {
		    		alert('You have lost your session.  The page will be reloaded to restore your session.');
		    		isReloading = true;
		    		location.reload();
		    	}
		    	return $q.reject(rejection);
		    }
		};
	});
})

.run(function ($rootScope) {
    $rootScope.$on('$locationChangeSuccess', function () {
        window.scrollTo(0, 0);
    });
})

.controller('HeaderController', ['$scope', HeaderController])
.controller('SessionController', ['$scope', '$timeout', 'sessionService', SessionController])
	
.factory('taskService', ['$http', '$q', function($http, $q) {
	return new TaskService($http, $q);
}])

.factory('marketService', ['$http', '$q', function($http, $q) {
	return new MarketService($http, $q);
}])

.factory('tenantService', ['$http', '$q', function($http, $q) {
	  return new TenantService($http, $q);
}])

.factory('publisherService', ['$http', '$q', function($http, $q) {
	return new PublisherService($http, $q);
}])

.factory('categoryService', ['$http', '$q', function($http, $q) {
	return new CategoryService($http, $q);
}])

.factory('roleService', ['$http', '$q', function($http, $q) {
	return new RoleService($http, $q);
}])

.factory('tagService', ['$http', '$q', function($http, $q) {
	return new TagService($http, $q);
}])

.factory('tenantSettingService', ['$http', '$q', function($http, $q) {
	return new TenantSettingService($http, $q);
}])

.factory('commentService', ['$http', '$q', function($http, $q) {
	return new CommentService($http, $q);
}])

.factory('commentReplyService', ['$injector', '$http', function($injector, $http) {
	return new CommentReplyService($injector, $http);
}])

.factory('timeService', [function() {
	return new TimeService();
}])

.factory('alertService', ['$timeout', function($timeout) {
	return new AlertService($timeout);
}])

.factory('permissionService', ['$http', '$q', function($http, $q) {
	  return new PermissionService($http, $q);
}])

.factory('supportService', ['$http', '$q', function($http, $q) {
	  return new SupportService($http, $q);
}])

.factory('banUserService', ['$http', '$q', function($http, $q) {
	  return new BanUserService($http, $q);
}])

.factory('contactService', ['$http', '$q', function($http, $q) {
	  return new ContactService($http, $q);
}])

.factory('featuredTaskService', ['$http', '$q', function($http, $q) {
	  return new FeaturedTaskService($http, $q);
}])

.factory('imageService', ['$http', '$q', function($http, $q) {
	  return new ImageService($http, $q);
}])

.factory('feedbackService', ['$http', '$q', function($http, $q) {
	  return new FeedbackService($http, $q);
}])

.factory('commentReviewService', ['$http', '$q', function($http, $q) {
	  return new CommentReviewService($http, $q);
}])

.factory('cookieService', [function() {
	return new CookieService();
}])

.factory('searchService', ['$http', function($http) {
	return new SearchService($http);
}])

.factory('sessionService', ['cookieService', 'searchService', function(cookieService, searchService) {
	return new SessionService(cookieService, searchService);
}]);