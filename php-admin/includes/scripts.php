<script type="text/javascript" >
            var contextPath = '';
            var htmlTemplateVersion = '1';
        </script>
<script type="text/javascript" src="../app/vendor/js/jquery-2.1.1.min.js"></script>


<script type="text/javascript" src="../app/vendor/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../app/vendor/js/store.min.js"></script>
<!--<script type="text/javascript" src="../app/vendor/js/typeahead.min.js"></script>-->

<script type="text/javascript" src="../app/vendor/js/typeahead.bundle.js"></script>
<script type="text/javascript" src="../app/vendor/js/handlebars-v3.0.0.js"></script>
<script type="text/javascript" src="../app/vendor/js/jquery.touchSwipe.js"></script>
<script type="text/javascript" src="../app/vendor/js/ng-responsive-images.js"></script>
<script type="text/javascript" src="../app/vendor/js/less.min.js"></script>
<script type="text/javascript" src="../app/vendor/bootstrap2/ui-bootstrap-tpls-0.3.0.min.js"></script>
<script type="text/javascript" src="../app/vendor/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="../app/vendor/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="../app/vendor/js/sortable.js"></script>
<script type="text/javascript" src="../app/vendor/js/jquery.dotdotdot.min.js"></script>
<script type="text/javascript" src="../app/vendor/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="../app/shared/controllers/headerController.js"></script>
<script type="text/javascript" src="../app/shared/services/sessionService.js"></script>
<script type="text/javascript" src="../app/store/taskStoreModule.js"></script>
<script type="text/javascript" src="../app/shared/directives/directives.js"></script>
<script type="text/javascript" src="../app/shared/services/alertService.js"></script>
<script type="text/javascript" src="../app/shared/services/searchService.js"></script>
<script type="text/javascript" src="../app/shared/services/cookieService.js"></script>
<script type="text/javascript" src="../app/store/taskStoreService.js"></script>
<script type="text/javascript" src="../app/store/taskStoreController.js"></script>
<script type="text/javascript" src="../app/shared/utilities/help.js"></script>
<link rel="stylesheet" type="text/css" href="../app/vendor/css/ie10.responsive-fix.css" />
<script type="text/javascript" src="../app/vendor/js/ie10.responsive-fix.js"></script>
<script type="text/javascript" src="../app/vendor/js/ie8.responsive-fix.js"></script>
<script type="text/javascript" src="../vendor/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script type="text/javascript" src="../app/vendor/js/readmore.min.js"></script> 
<script type="text/javascript" src="../app/vendor/js/jRate.min.js"></script>


<script type="text/javascript" src="../app/vendor/js/bootstrap-tabcollapse.js"></script>


<!-- <script type="text/javascript" src="../app/vendor/js/slick/slick.min.js"></script>-->


<script type="text/javascript" src="../app/vendor/js/lightSlider/js/lightslider.min.js"></script>
<script type="text/javascript" src="../app/vendor/js/lightGallery/js/lightgallery.js"></script>

<script type="text/javascript" src="../app/vendor/js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="../app/vendor/js/jquery.growl/js/jquery.growl.js"></script>
<script type="text/javascript" src="../js/typehead-sectioned.js"></script>









<script>localStorage.clear(); </script>
<script>
$(document).ready(function(){
  $("#menu_button").click(function(){
    $("#main-content,header,footer").addClass("fade-blur");
	$("#sidebar_menu").addClass("menuslide-in");
	$("#sidebar_menu").removeClass("menuslide-out");
	 $("body").append("<div class='menu-overlay' style='opacity:0.0;background:#000;width:100%;height:100%; z-index:10;top:0;left:0; position:fixed;'></div>");
  });
  
  $("#menuCloseButton").click(function(){
    $("#main-content,header,footer").removeClass("fade-blur");
	$("#sidebar_menu").removeClass("menuslide-in");
	$("#sidebar_menu").addClass("menuslide-out");
	$( ".menu-overlay" ).remove();
  });
  
  

});
</script>

<script type='text/javascript'>
    //<![CDATA[ 
    $(window).load(function() {

        $("#hideactivecontent").click(function() {
            if ($(this).is(":checked")) {
                $(".task-activecontent").hide();
            } else {
                $(".task-activecontent").show();
            }
        });
		
		 $("#showcatfilter").click(function() {
            if ($(this).is(":checked")) {
                $("#categoryfilter").show();
				$('#thesearchbox').attr('placeholder','Search All Categories');
            } else {
                $("#categoryfilter").hide();
				$('#thesearchbox').attr('placeholder','What would you like to do?');
            }
        });
		
		$("#showalert").click(function() {
            if ($(this).is(":checked")) {
                $(".alert-application").show();
				
            } else {
                $(".alert-application").hide();
				
            }
        });
		
		
		
		
		
		
		
		
    }); //]]>
</script>



<script>
$(document).ready(function() {
   $(".favorite").click(function() {
        $(this).parent().find(".icon-heart-empty").toggle(), 
		$(this).parent().find(".icon-heart").toggle()
    })
	
});
  
  </script> 
  
          
<script type="text/javascript">
  // Generated by CoffeeScript 1.9.3
(function() {
  $(function() {
    
    $('.error').click(function(event) {
      event.preventDefault();
      event.stopPropagation();
      return $.growl.error({
        message: "The kitten is attacking!"
      });
    });
    $('.notice').click(function(event) {
      event.preventDefault();
      event.stopPropagation();
      return $.growl.notice({
        message: "Item has been added to your list of favorites.", location: "tr"
      });
    });
    return $('.warning').click(function(event) {
      event.preventDefault();
      event.stopPropagation();
      return $.growl.warning({
        message: "The kitten is ugly!"
      });
    });
  });

}).call(this);
</script>


  
  