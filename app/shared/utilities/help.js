/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
var HelpText = function(options) {
	this.labels = options.labels;
	this.overlay = null;
	this.name = options.name;
	this.onExit = options.onExit;
	this.onStart = options.onStart;
	
	function shouldLaunchIntro(helpText) {
		if(!store.disabled) {
			var val =  store.get(helpText.name + 'Finished');
			return typeof val == 'undefined' || val == false;
		}
		return true;
	};
	
	if (shouldLaunchIntro(this)) {
		this.show();
	}
};

HelpText.prototype.show = function() {
	if (typeof this.onStart == 'function') {
		this.onStart();
	}
	this.addSVG();
	this.layoutLabels();
	this.overlay.click(this, function(event) {
		event.data.remove();
		store.set(event.data.name + 'Finished', true);
		if (typeof event.data.onExit == 'function') {
			event.data.onExit();
		}
	});
	this.overlay.keypress(this, function(event) {
		event.data.remove();
		store.set(event.data.name + 'Finished', true);
		if (typeof event.data.onExit == 'function') {
			event.data.onExit();
		}
	});
};


/**
 * Add the help overlay SVG panel.
 */
HelpText.prototype.addSVG = function () {
    var svg = $("<div id='helpsvg' tabindex='10000' style='width:100%;height:100%;background-color:rgba(0,0,0,0.6);position:absolute;top:0;left:0;z-index:2000'>" +
    		"<svg xmlns='http://www.w3.org/2000/svg' role='img' style='width:100%;height:100%'>" + 
    			"<title>Help Text</title>" +
    			"<desc>This is a visual page overlay with descriptive text for various parts of the page content. Click or press any key to dismiss.</desc>" +
    			"<defs>" +
    				"<marker id='head' orient='auto' markerWidth='4' markerHeight='4' refX='0.1' refY='2'>" +
    				 	"<desc>An arrowhead</desc>" +
    					"<path id='headpoly' d='M0,0 V4 L2,2 Z' stroke-linejoin='miter' fill='black'/>" +
    				"</marker>" +
    			"</defs>" +
    		"</svg></div>");
    this.overlay = svg;
    $(document.body).append(svg);
    svg.focus();
    
    var timeout = null;
    $(window).resize(this, updateLabelsEvent);
    //$(window).scroll(this, updateLabelsEvent);
    
    function updateLabelsEvent(event) {
    	if (!event.data.overlay) {
            return;
        }
        if (timeout != null) {
        	clearTimeout(timeout);
        }
        timeout = setTimeout(function() {
        	$('defs', event.data.overlay).siblings().remove();
            event.data.layoutLabels();
            timeout = null;
        }, 100);
    }
};

HelpText.prototype.remove = function () {
    if (!this.overlay) {
        return;
    }
    this.overlay.remove();
    this.overlay = null;
};

HelpText.prototype.layoutLabels = function() {
	for (index in this.labels) {
		var label = this.labels[index];
		
		var dom = $(label.selector);
		if (!dom || !dom.is(':visible')) {
	        continue;
	    }
		
	    var offset = dom.offset();
	    var width = dom.outerWidth();
	    var height = dom.outerHeight();
	    
	    var tox, toy;
	    var flipCurve = false;

	    if (typeof label.arrowPos != 'undefined' && label.arrowPos != 'center') {
	    	if (label.arrowPos == 'left') {
	    		tox = offset.left;
	    		toy = offset.top + height / 2;
	    	} else if (label.arrowPos == 'top') {
	    		tox = offset.left + width / 2;
	    		toy = offset.top;
	    		flipCurve = label.position.indexOf(label.arrowPos) > -1;
	    	} else if (label.arrowPos == 'right') {
	    		tox = offset.left + width;
	    		toy = offset.top + height / 2;
	    	} else if (label.arrowPos == 'bottom') {
	    		tox = offset.left + width / 2;
	    		toy = offset.top + height;
	    		flipCurve = label.position.indexOf(label.arrowPos) > -1;
	    	}
	    } else {
	    	tox = offset.left + width / 2;
		    toy = offset.top + height / 2;
	    }
	    
	    this.addLabel(tox, toy, label.label, label.position, label.arrowPos, label.distance, flipCurve);
	}
};

/**
 * Add a help label to the specified position.
 * @param {number} tox
 * @param {number} toy
 * @param {string} label
 * @param {string} pos
 * @param {number=} length
 */
HelpText.prototype.addLabel = function (tox, toy, label, pos, arrowPos, length, flipCurve) {
    if (!this.overlay) {
        return;
    }

    var awayx = 50;
    var awayy = 30;

    if (pos.indexOf("top") > -1) {
        awayy *= -1;
    }

    if (pos.indexOf("left") > -1) {
        awayx *= -1;
    }
    
    if (pos.indexOf("bottom") == -1 && pos.indexOf("top") == -1 && (pos.indexOf(arrowPos) > -1 || arrowPos == 'center')) {
        awayy *= 0;
    }

    if (pos.indexOf("right") == -1 && pos.indexOf("left") == -1 && (pos.indexOf(arrowPos) > -1 || arrowPos == 'center')) {
        awayx *= 0;
    }

    if (length) {
        awayx *= length;
        awayy *= length;
    }

    var fromx = tox + awayx;
    var fromy = toy + awayy;
    
    fromx = fromx < 0 ? 0 : fromx;
    fromy = fromy < 0 ? 0 : fromy;
    
    var labelawayx = -15;
    var labelawayy = awayy > 0 ? 15 : -5;
    var color = 'white';

    var midx, midy;
    if (flipCurve) {
    	midx = tox;
        midy = fromy;
    } else {
    	midx = fromx;
        midy = toy;
    }
    
    var ns = "http://www.w3.org/2000/svg";

    var path = document.createElementNS(ns, "path");
    path.setAttribute('marker-end', 'url(#head)');
    path.setAttribute('stroke-width', '2');
    path.setAttribute('fill', 'none');
    path.setAttribute('stroke', color);
    path.setAttribute('role', 'presentation');
    if (awayx == 0 || awayy == 0) {
    	path.setAttribute('d', 'M' + fromx + ',' + fromy + ' L' + tox + ',' + toy);
    } else {
    	path.setAttribute('d', 'M' + fromx + ',' + fromy + ' Q' + midx + ',' + midy + ' ' + tox + ',' + toy);
    }

    var text = document.createElementNS(ns, "text");
    text.setAttribute('x', (fromx + labelawayx) < 0 ? 0 : (fromx + labelawayx));
    text.setAttribute('y', (fromy + labelawayy) < 0 ? 0 : (fromy + labelawayy));
    text.setAttribute('fill', color);
    text.setAttribute('font-size', 15);
    var data = document.createTextNode(label);
    text.appendChild(data);

    document.getElementById('headpoly').setAttribute('fill', color);

    var svg = $('svg', this.overlay);
    svg.append(path);
    svg.append(text);
    
    var textLength = text.getComputedTextLength();
    if (awayx == 0) {
    	text.setAttribute('x', (fromx - textLength/2) < 0 ? 0 : (fromx - textLength/2));
    }
    
    var right = Number(text.getAttribute('x')) + textLength;
    if (right > $(window).width()) {
    	var newx = text.getAttribute('x') - (right - $(window).width());
    	text.setAttribute('x', newx);
    }
};