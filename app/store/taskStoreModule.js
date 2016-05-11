/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var taskStoreModule = angular.module('taskStore', ['ngTouch', 'ngAnimate', 'ngSanitize', 'ngAria', 'sharedDirectives', 'ui.sortable', 'ui.bootstrap.tpls', 'ui.bootstrap.rating', 'ngResponsiveImages'])

.config(['$httpProvider', function($httpProvider) {
	$httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
	$httpProvider.interceptors.push('taskStoreHttpInterceptor');
}])

.controller('HeaderController', ['$scope', HeaderController])
.controller('SessionController', ['$scope', '$timeout', 'sessionService', SessionController])

.factory('taskStoreHttpInterceptor', ['$q', function($q) {
	return {
		'request': function(config) {
			return config || $q.when(config);
		},
		'requestError': function(rejection) {
			return $q.reject(rejection);
		},
		'response': function(response) {
			return response || $q.when(response);
		},
		'responseError': function(rejection) {
			/*if (!isReloading && rejection.status == 0) {
				alert('You have lost your session.  The page will be reloaded to restore your session.');
				isReloading = true;
				location.reload();
			}*/
			return $q.reject(rejection);
		}
	};
}])

.factory('taskStoreService', ['$http', '$q', '$interpolate', '$compile', '$filter', 'sessionService', 'searchService', function($http, $q, $interpolate, $compile, $filter, sessionService, searchService) {
	return new TaskStoreService($http, $q, $interpolate, $compile, $filter, sessionService, searchService);
}])

.factory('alertService', ['$timeout', function($timeout) {
	return new AlertService($timeout);
}])

.factory('sessionService', ['cookieService', 'searchService', 'alertService', function(cookieService, searchService, alertService) {
	return new SessionService(cookieService, searchService, alertService);
}])

.factory('searchService', ['$http', function($http) {
	return new SearchService($http);
}])

.factory('cookieService', [function() {
	return new CookieService();
}])

.factory('commentReplyService', ['$injector', '$http', function($injector, $http) {
	return new CommentReplyService($injector, $http);
}])

.factory('mobileService', [function() {
	var MobileService = {};
	MobileService.isMobile = false;
	
	$(document).ready(function() {
	    var $body = $('body');
	    
	    if (navigator.userAgent.match(/IEMobile|Windows Phone/i)) {
	    	MobileService.isMobile = true;
	    	/*
	    	window.eventList = [];
	    	var captureEvents = function(e) {
	    		alert(e.type);
	    		window.eventList.push(e.type);
	    		if (window.eventList.length == 10) {
	    			var message = '';
	    			for (index in window.eventList) {
	    				message += window.eventList[Number(index)] + '\n';
	    			}
	    			//alert(message);
	    			window.eventList.length = 0;
	    		}
	    	}
	    	$body.on('mouseup touchend click pointerdown pointerup', captureEvents);
	    	*/
	    } else {
	    	//other browsers
	    	var isEventSupported = (function() {
	    	    var TAGNAMES = {
	    	      'select':'input','change':'input',
	    	      'submit':'form','reset':'form',
	    	      'error':'img','load':'img','abort':'img'
	    	    }
	    	    function isEventSupported(eventName) {
	    	      var el = document.createElement(TAGNAMES[eventName] || 'div');
	    	      eventName = 'on' + eventName;
	    	      var isSupported = (eventName in el);
	    	      if (!isSupported) {
	    	        el.setAttribute(eventName, 'return;');
	    	        isSupported = typeof el[eventName] == 'function';
	    	      }
	    	      el = null;
	    	      return isSupported;
	    	    }
	    	    return isEventSupported;
	    	  })();
	    	
	    	MobileService.isMobile = isEventSupported('touchstart');
	    	/*
	    	var detectMouse = function(e){
		        if (e.type === 'mousemove') { //because touch events are processed before mouse events, if the first event is a mouse, then it is not a mobile device
		        	MobileService.isMobile = false;
		        }
		        else if (e.type === 'touchstart') {
		            MobileService.isMobile = true;
		        }
		        // remove event bindings, so it only runs once
		        $body.off('mousemove touchstart', detectMouse);
		    }
		    // attach both events to body
		    $body.on('mousemove touchstart', detectMouse);
		    */
	    	
	    	//$body.on('mouseup touchend', function(e){alert(e.type);});
	    }
	});
	
	return MobileService;
}]);