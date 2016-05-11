/*
 * Copyright 2014 Indiana University Research and Technology Corporation
 */
function isTouchDevice(){
	try{
		document.createEvent("TouchEvent");
		return true;
	}catch(e){
		return false;
	}
}

function touchScroll(selector){
	if(isTouchDevice()){ //if touch events exist...
		var el=$(selector);
		var scrollStartPosX=0;
		var scrollStartPosY=0;
 
		el.on("touchstart", function(event) {
			var $this = $(this);
			scrollStartPosX=$this.scrollLeft()+event.originalEvent.touches[0].pageX;
			scrollStartPosY=$this.scrollTop()+event.originalEvent.touches[0].pageY;
			//event.preventDefault();
		});
 
		el.on("touchmove", function(event) {
			var $this = $(this);
			$this.scrollTop(scrollStartPosY-event.originalEvent.touches[0].pageY);
			$this.scrollLeft(scrollStartPosX-event.originalEvent.touches[0].pageX);
			event.preventDefault();
		});
	}
}