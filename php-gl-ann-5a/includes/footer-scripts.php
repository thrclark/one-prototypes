<script>
    $(document).ready(function() {
        $(window).load(function() {
            ellipses2 = $(".btn-breadcrumb :nth-child(2)")
            if ($(".btn-breadcrumb a:hidden").length > 0) {
                ellipses2.show()
            } else {
                ellipses2.hide()
            }
        })
    });
</script>
<script>
$( ".toggle-global-announcements" ).click(function() {
  $( "#global-announcements" ).slideToggle( "slow" );
  		setTimeout(function(){
        $( ".toggle-global-announcements").toggleClass( "open" );
    }, 500); 
});
</script>
<script>
$( ".close" ).click(function() {
   $(this).closest('li').fadeOut( "fast" );
  
});
</script>
<script>
$( ".close-global-announcements" ).click(function() {
  $( "#global-announcements" ).slideUp( "slow" );
});
</script>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
// invoke the carousel
$('#myCarousel').carousel({
  interval: 0000
});

/* SLIDE ON CLICK */ 

$('.carousel-linked-nav > li > a').click(function() {

    // grab href, remove pound sign, convert to number
    var item = Number($(this).attr('href').substring(1));

    // slide to number -1 (account for zero indexing)
    $('#myCarousel').carousel(item - 1);

    // remove current active class
    $('.carousel-linked-nav .active').removeClass('active');

    // add active class to just clicked on item
    $(this).parent().addClass('active');

    // don't follow the link
    return false;
});

/* AUTOPLAY NAV HIGHLIGHT */

// bind 'slid' function
$('#myCarousel').bind('slid', function() {

    // remove active class
    $('.carousel-linked-nav .active').removeClass('active');

    // get index of currently active item
    var idx = $('#myCarousel .item.active').index();

    // select currently active item and add active class
    $('.carousel-linked-nav li:eq(' + idx + ')').addClass('active');

});
});//]]> 

</script>
<script>
    $(".launch-notifications").click(function() {
        $('#notifications').modal('toggle')
        if ($(window).width() > 975) {
            $('.modal-backdrop').css("display", "none");
        } else {
            $('.modal-backdrop').css("display", "block");
        }
        $('.message-content').readmore({
            speed: 200,
            collapsedHeight: 35,
            moreLink: '<a href="#"><em>view more...</em></a>',
            lessLink: '<a href="#"><em>view less</em></a>'
        });
    });
</script>
<script>
$(document).ready(function() {
    $(".mobile-showdetails").click(function() {
        $(this).parent().parent().parent().toggleClass("slideaway"),
		 $(this).children().toggleClass("icon-angle-circled-right")
    })	
});
</script>
<script>
  $(document).ready(function() {
	$(".task-title-primary, .task-title-secondary,.tile-description-mobile, .tile-description, .task-activecontent").dotdotdot({
		/*	The text to add as ellipsis. */
		ellipsis	: '... ',
 
		/*	How to cut off the text/html: 'word'/'letter'/'children' */
		wrap		: 'word',
 
		/*	Wrap-option fallback to 'letter' for long words */
		fallbackToLetter: true,
 
		/*	jQuery-selector for the element to keep and put after the ellipsis. */
		after: "a.readmore",
 
		/*	Whether to update the ellipsis: true/'window' */
		watch		: true,
	
		/*	Optionally set a max-height, if null, the height will be measured. */
		height		: null,
 
		/*	Deviation for the height-option. */
		tolerance	: 0,
 
		/*	Callback function that is fired after the ellipsis is added,
			receives two parameters: isTruncated(boolean), orgContent(string). */
		callback	: function( isTruncated, orgContent ) {},
 
		lastCharacter	: {
 
			/*	Remove these characters from the end of the truncated text. */
			remove		: [ ' ', ',', ';', '.', '!', '?' ],
 
			/*	Don't add an ellipsis if this array contains 
				the last character of the truncated text. */
			noEllipsis	: []
		}
	});
});
</script>
<script>
$('.description').readmore({
  speed: 200,
  collapsedHeight: 80,
  moreLink: '<a href="#"><em>view more...</em></a>',
  lessLink: '<a href="#"><em>view less</em></a>'
});
  </script>
<script>
    $("#dismissall1").click(function() {
        $(".announcement-section").hide();
		$("#trigger-dismissedannouncements").show();
    });
    $("#signinmanage1").click(function() {
        $("#dismiss-trigger1, #dismiss-trigger2, #dismissall1").show();
        $("#signinmanage1").hide();
    });
</script>
<script>
$(document).ready(function() {
$('.divider').on('hide.bs.dropdown', function () {
    return false;
});
});
</script>
<script>
    $(document).ready(function() {
         $('.ga-body div').readmore({
            moreLink: '<a href="#" class="moreless">more...</a>',
            lessLink: '<a href="#" class="moreless">less...</a>',
            collapsedHeight: 60,
            speed: 500,
            afterToggle: function(trigger, element, expanded) {
                if (!expanded) {
                    $('.lSSlideWrapper, .lSSlideOuter').css("overflow", "hidden");
                } else {
                    $('.lSSlideWrapper, .lSSlideOuter').css("overflow", "visible");
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.dismiss-announcement').click(function() {
            $(this).closest(".announcement").fadeOut( "fast" );
        });
        $('.dismiss-announcement-all').click(function() {
            $('.announcements-nonew').show('fast');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.dismiss-announcement1').click(function() {
            $('.announcement1').hide('fast');

        });
        $('.dismiss-announcement2,.dismiss-announcement-all').click(function() {
            $('.announcement1,.announcement2,#announcement-counter, .dismiss-announcement-all').hide('fast');
            $('.announcements-nonew').show('fast');

        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.nav-tabs-responsive').tabCollapse();
		$('.nav-tabs-responsive').on('shown-tabs.bs.tabcollapse', function(){
    		$('.nav-tabs-responsive a:first').tab('show')
});
    });
	
</script>
<script>
    $(document).ready(function() {
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });
</script>
<script type='text/javascript'>
    $(window).load(function() {
        $("#releasenotes").popover({
            html: true,
            content: function() {
                return $('#releasenotes-content').html();
            },
            title: function() {
                return $('#releasenotes-title').html();
            }
        });

        $('body').on('click', function(e) {
            $('#releasenotes').each(function() {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
    });
</script>
<script type='text/javascript'>
    //<![CDATA[
    $(document).ready(function() {
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            vertical: true,
            vThumbWidth: 90,
            thumbItem: 6,
            thumbMargin: 0,
            slideMargin: 20
        });
        $('#lightSlider1').lightSlider({
            gallery: true,
            item: 1,
            vertical: false,
            vThumbWidth: 90,
            thumbItem: 6,
            thumbMargin: 10,
            slideMargin: 20
        });
    }); //]]>
</script>
<script type="text/javascript">
$(document).ready(function() {
       $("#ga-slider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 0,
 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 400, //ms'
        auto: false,
        loop: false,
        slideEndAnimation: true,
        pause: 2000,
 
        keyPress: false,
        controls: true,
        prevHtml: '<i class="icon-left-open-big"></i>',
        nextHtml: '<i class="icon-right-open-big"></i>',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:10,
        pager: false,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 0,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
 
        responsive : [{
                breakpoint:1299,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:20,
                  }
            },
            {
                breakpoint:767,
                settings: {
                    item:1,
                    slideMove:1,
					 slideMargin:20,
                  }
            }],
 
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
	$( ".lSAction" ).insertAfter( ".lSSlideOuter" );
});
</script>




