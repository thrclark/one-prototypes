/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function TimeService() {
	
	this.parseTime = function(timeString, format) {
		return moment(timeString, format).valueOf();
	};
	
	this.formatTime = function(millis, format) {
		return moment(Number(millis)).format(format);
	};
}