/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function SessionService(cookieService, searchService, alertService) {
	
	var logoutDelayMinutes = null;
	var warningTimer = null;
	var logoutTimer = null;
	var warningAlert = null;
	
	this.setLogoutDelayMinutes = function(delay) {
		logoutDelayMinutes = delay;
		this.setLogoutTimer();
	};
	
	this.setLogoutTimer = function() {
		if (warningTimer != null) {
			clearTimeout(warningTimer);
			warningTimer = null;
		}
		if (logoutTimer != null) {
			clearTimeout(logoutTimer);
			logoutTimer = null;
		}
		if (warningAlert != null) {
			alertService.removeAlert(warningAlert);
			warningAlert = null;
		}
		if (logoutDelayMinutes != null && logoutDelayMinutes > 0) {
			var sessionService = this;
			warningTimer = setTimeout(function() {
				warningAlert = alertService.addAlert('You will be logged out in one minute due to inactivity.', 'warning');
				logoutTimer = setTimeout(function() {
					sessionService.logout();
				}, 60 * 1000);
			}, (logoutDelayMinutes - 1) * 60 * 1000);
		}
	};
	
	this.login = function(action) {
		var url = UpdateQueryString('logout', null);
		url = UpdateQueryString('login', 'true', url);
		if (typeof action != 'undefined' && action.length > 0) {
			url = UpdateQueryString('requestedAction', encodeURIComponent(action), url);
			var csrfToken = cookieService.getCookie('XSRF-TOKEN');
			if (csrfToken) {
				url = UpdateQueryString('X-XSRF-TOKEN', csrfToken, url);
			}
		}
		window.location = url;
	};
	
	this.logout = function() {
		searchService.clearFilter();
		searchService.clearOfflineIds();
		window.location = contextPath + '/logout';
	};
	
	this.getRequestedAction = function($scope, validFunctions) {
		var requestedAction = getQueryVariable('requestedAction');
		if (requestedAction) {
			requestedAction = decodeURIComponent(requestedAction);
			for (index in validFunctions) {
				if (requestedAction.startsWith(validFunctions[index])) {
					$scope.$eval(requestedAction);
					break;
				}
			}
			if (typeof history.pushState == 'function') {
				var url = UpdateQueryString('requestedAction', null);
				url = UpdateQueryString('X-XSRF-TOKEN', null, url);
				history.pushState(null, null, url);
			}
		}
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
	}
	
	function getQueryVariable(variable)
	{
	       var query = window.location.search.substring(1);
	       var vars = query.split("&");
	       for (var i=0;i<vars.length;i++) {
	               var pair = vars[i].split("=");
	               if(pair[0] == variable){return pair[1];}
	       }
	       return(false);
	}
	
	if (typeof String.prototype.startsWith != 'function') {
		// see below for better implementation!
		String.prototype.startsWith = function (str){
			return this.slice(0, str.length) == str;
		};
	}
};

var SessionController = function($scope, $timeout, sessionService) {
	$scope.disableLoginButton = false;
	
    $scope.login = function() {
    	$scope.disableLoginButton = true;
    	$timeout(function() {
    		sessionService.login();
    	}, 0);
    };
    
    $scope.logout = function() {
    	$scope.disableLoginButton = true;
    	$timeout(function() {
    		sessionService.logout();
    	}, 0);
    };
};
