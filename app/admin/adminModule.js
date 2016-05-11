/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var adminModule = angular.module('admin', [ 'ngTouch', 'ngRoute', 'ngAria', /*'ui.bootstrap',*/ 'sharedDirectives', 'loading'], function($routeProvider, $httpProvider) {
	$routeProvider.
		when('/', {templateUrl: contextPath + '/app/admin/admin.html?ver='+htmlTemplateVersion, controller:null}).
		when('/tenants', {templateUrl: contextPath + '/app/admin/tenant/tenantList.html?ver='+htmlTemplateVersion,   controller: 'TenantListController'}).
		when('/tenant', {templateUrl: contextPath + '/app/admin/tenant/tenant.html?ver='+htmlTemplateVersion,   controller: 'EditTenantController'}).
		when('/tenant/:tenantId', {templateUrl: contextPath + '/app/admin/tenant/tenant.html?ver='+htmlTemplateVersion,   controller: 'EditTenantController'}).
		when('/mainMetadata', {templateUrl: contextPath + '/app/admin/metadata/mainMetadata.html?ver='+htmlTemplateVersion,   controller: 'MainMetadataController'}).
		when('/systemParameters', {templateUrl: contextPath + '/app/admin/systemParameter/systemParameterList.html?ver='+htmlTemplateVersion,   controller: 'SystemParameterListController'}).
		when('/systemParameter', {templateUrl: contextPath + '/app/admin/systemParameter/systemParameter.html?ver='+htmlTemplateVersion,   controller: 'EditSystemParameterController'}).
		when('/systemParameter/:systemParameterName', {templateUrl: contextPath + '/app/admin/systemParameter/systemParameter.html?ver='+htmlTemplateVersion,   controller: 'EditSystemParameterController'}).
		when('/userAttributeMappingList/:tenantId', {templateUrl: contextPath + '/app/admin/attributes/userAttributeMappingList.html?ver='+htmlTemplateVersion,   controller: 'UserAttributeMappingListController'}).
		when('/userAttributeMapping', {templateUrl: contextPath + '/app/admin/attributes/userAttributeMapping.html?ver='+htmlTemplateVersion,   controller: 'UserAttributeMappingController'}).
		when('/userAttributeMapping/:userAttributeMappingId', {templateUrl: contextPath + '/app/admin/attributes/userAttributeMapping.html?ver='+htmlTemplateVersion,   controller: 'UserAttributeMappingController'}).
		when('/metadataList/:tenantId', {templateUrl: contextPath + '/app/admin/metadata/metadataList.html?ver='+htmlTemplateVersion,   controller: 'MetadataListController'}).
		when('/metadata', {templateUrl: contextPath + '/app/admin/metadata/metadata.html?ver='+htmlTemplateVersion,   controller: 'MetadataController'}).
		when('/metadata/:metadataId', {templateUrl: contextPath + '/app/admin/metadata/metadata.html?ver='+htmlTemplateVersion,   controller: 'MetadataController'}).
		when('/metadata/new/:tenantId', {templateUrl: contextPath + '/app/admin/metadata/metadata.html?ver='+htmlTemplateVersion,   controller: 'MetadataController'}).
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
		    	if (!isReloading && (response.status == 302 || response.status == 301)) {
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

.factory('tenantService', ['$http', '$q', function($http, $q) {
	  return new TenantService($http, $q);
}])

.factory('systemParameterService', ['$http', '$q', function($http, $q) {
	  return new SystemParameterService($http, $q);
}])

.factory('userAttributeMappingService', ['$http', '$q', function($http, $q) {
	  return new UserAttributeMappingService($http, $q);
}])

.factory('alertService', ['$timeout', function($timeout) {
	return new AlertService($timeout);
}])

.factory('permissionService', ['$http', '$q', function($http, $q) {
	  return new PermissionService($http, $q);
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

