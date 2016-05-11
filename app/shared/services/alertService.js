/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var AlertService = function($timeout) {
	
	this.alerts = [];
	this.timeout = 5000;
	
	this.addAlert = function(message, type, autoclose) {
		var alert = {msg: message, type: type};
		var alertService = this;
		$timeout(function() { 
			alertService.alerts.push(alert);
		}, 0);
		if (autoclose) {
			$timeout(function() { 
				alertService.removeAlert(alert);
		    }, this.timeout);
		}
		return alert;
	};
	
	this.removeAlert = function(alert) {
		var index = this.alerts.indexOf(alert);
		var element = $('#alert_' + index);
		var alertService = this;
		if (element) {
			element.removeClass('in');
			$timeout(function() {
				alertService.alerts.splice(alertService.alerts.indexOf(alert), 1);
				$timeout(function() { 
					$('#alert_' + index).remove();
				}, 0);
			}, 500);
		} else {
			$timeout(function() { 
				alertService.alerts.splice(alertService.alerts.indexOf(alert), 1);
				$timeout(function() { 
					$('#alert_' + index).remove();
				}, 0);
			}, 0);
		}
	};
	
};
AlertService.$inject = ['$timeout'];