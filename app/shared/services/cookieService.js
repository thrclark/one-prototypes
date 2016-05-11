/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function CookieService() {
	//http://www.sitepoint.com/how-to-deal-with-cookies-in-javascript/
	this.createCookie = function(name, value, expires, path, domain) {
		var cookie = name + "=" + escape(value) + ";";
		 
		if (expires) {
		    // If it's a date
		    if (expires instanceof Date) {
		      // If it isn't a valid date
		      if (isNaN(expires.getTime())) {
		    	  expires = new Date();
		      }
		    } else {
		    	expires = new Date(new Date().getTime() + parseInt(expires) * 1000 * 60 * 60 * 24);
		    }
		 
		    cookie += "expires=" + expires.toGMTString() + ";";
		}
		 
		if (path)
		    cookie += "path=" + path + ";";
		if (domain)
		    cookie += "domain=" + domain + ";";
		 
		document.cookie = cookie;
	};
	
	this.getCookie = function(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	};
	
	this.deleteCookie = function(name, path, domain) {
		if (this.getCookie(name))
			this.createCookie(name, "", -1, path, domain);
	};
};