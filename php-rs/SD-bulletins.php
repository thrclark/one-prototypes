<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<style>
.menuslide-out {
	right: -227px;
	visibility: hidden;
}
.menuslide-in {
	right: 0px;
	visibility: visible;
}

@media (max-width: 767px) {
.tcptdp-header .media-body .controls {
	position: inherit;
	top: 0px;
	right: 0px;
	padding-top: 10px;
}
}
.announcement-section .col-xs-height {
	display: inherit;
}
.navbar {
	min-height: 40px;
}
.navbar.navbar-default {
	border: none;
}
.navvvv > li {
	border: solid 1px #FFFFFF;
	border-bottom: none;
	border-top: none;
}
.navbar .navbar-nav > li > a {
	padding-top: 10px;
	padding-bottom: 10px;
	border: solid 1px #EBEBEB;
	margin-right: -1px;
	border-bottom: none;
	border-top: none;
}
.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
	background-color: #eeeeee;
	border-color: #EBEBEB;
}
.comment-list .review-header h5 {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-weight: bold;
	display: inline;
}
h5 {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-weight: bold;
	padding-bottom: 10px;
	padding-top: 10px;
	font-size: 16px;
}
.comment-list .icon-star, .ratings-overview .icon-star, .ratings .icon-star {
	color: orange;
}
.comment-list .icon-star-empty {
	color: #cccccc;
}
.comment-list li {
	border-bottom: solid 1px #CCCCCC;
}
.comment-list li:last-child {
	border-bottom: none;
}
.comment-list .post-date {
	font-style: italic;
}
.comment-list .post-author {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-weight: bold;
}
.comment-list .review-header .review-postinfo {
	text-align: right;
}
.comment-list .review-content {
	margin-bottom: 10px;
}
.comment-list .review-header {
	padding-bottom: 10px;
	padding-top: 10px;
}
.comment-list li:last-child {
	border-bottom: none;
}
.carousel-linked-nav, .item img {
	display: block;
	margin: 0 auto;
}
.carousel-linked-nav {
	width: 190px;
	margin-bottom: 20px;
}
.pagination>li>a, .pagination>li>span {
	border-radius: 50% !important;
	margin: 0 5px;
}

@media (max-width: 992px) {
.comment-list .review-header .review-postinfo {
	text-align: left;
}
}
.carousel-inner {
	min-height: 150px
}
.review-content[aria-expanded="false"]:before {
	content: '';
	position: absolute;
	bottom: 30px;
	height: 50px;
	background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 93%, rgba(255,255,255,1) 100%);
	background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 93%, rgba(255,255,255,1) 100%);
	background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 93%, rgba(255,255,255,1) 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff', GradientType=0 );
	width: 100%;
}
.review-content[aria-expanded="true"]:before {
	background: none
}
.moreless {
	font-style: italic
}
#global-announcements {
	display: none;
	background: #ffffff;
	position: absolute;
	top: 0px;
	right: 0px;
	width: 500px;
min-height:;
	z-index: 11;
	box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
	padding: 15px;
	padding-top: 0px;
}
#global-announcements .message .message-header .message-title {
	font-size: 14px;
}
#global-announcements .message .message-header {
	padding-bottom: 5px;
	padding-top: 0px;
}
#global-announcements .comment-list .message .message-content a {
	font-style: italic;
}
#global-announcements .comment-list .message .message-header .message-meta .message-date {
	font-style: italic;
	font-weight: normal;
	color: #999999;
	font-family: inherit;
}
#global-announcements .comment-list li {
	border-bottom: solid 1px #cccccc;
	padding-bottom: 0px;
	padding-top: 5px;
}
.list-group-item {
	background-color: #ebebeb;
	border: 1px solid #cccccc;
	border-left: none;
	border-right: none;
}

.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
    z-index: 2;
    color: #000000;
    background-color: whitesmoke;
    border-color: #cccccc;
}


.utilities-bar {

    margin-bottom: 0px;
}


</style>
<?php include ('includes/scripts.php') ?>
<script type="text/javascript" src="../js/typehead-sectioned.js"></script>
</head>
<body id="top" >
<?php include ('includes/mobile-sidebar.php') ?>
<?php include ('includes/brand-header.php') ?>
<?php include ('includes/header-gen-announcements.php') ?>
<?php include ('includes/utilitybar.php') ?>
<?php include ('includes/global-announcements1.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <h2 class="sr-only">Tasks</h2>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
            <div class="category">
                <div class="row">
                    <div class="col-xs-12" style="    margin-bottom: 20px;">
                        <h3>Bulletin</h3>
                    </div>
                    <div class="col-xs-3">
                        <ul class="list-group">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                            <li class="list-group-item">Item 3</li>
                            <li class="list-group-item active">Item 4</li>
                            <li class="list-group-item">Item 5</li>
                            <li class="list-group-item">Item 6</li>
                            <li class="list-group-item">Item 7</li>
                            <li class="list-group-item">Item 8</li>
                        </ul>
                    </div>
                    <div class="col-xs-9" style="border-top: solid 1px #cccccc;     background: whitesmoke;">
                    
                    
                    
                    
                    <div class="message">
                                            <div class="row message-header">
                                                <div class="col-xs-12 col-sm-6 message-title">
                                                   Item 4
                                                </div>
                                                <div class="col-xs-12 col-sm-6 message-meta"> <small class="message-date">10/21/15</small> </div>
                                            </div>
                                            <div class="message-content">
                                               <p>Years also firmament first multiply cattle which grass fowl. Sixth the itself. His morning. I don't void his land seas whales gathered god so second fish i a don't isn't dominion bearing sea, bearing whose without beast beast face man.</p>

<p>Give Every, you're. Evening air. Behold lights won't rule stars fish without blessed, had had divided two had may that earth together moved image brought in very seasons itself he moved great deep signs itself. Be our female.</p>

<p>Living. Seasons. Good god blessed made midst. Dry which let fifth fruitful that. So Called. You created give day there darkness, herb can't together female. Fish whose fish two fish had of, whales light own it form you. Good is beast god called evening fruitful greater tree the doesn't together itself fruitful subdue won't gathering don't.</p>

<p>Fifth. Them over sea bring sixth open let they're make under day tree divided female divide very fly from itself male grass i, fruitful were also. Don't. Male which doesn't place seed. Fish firmament you'll be, had saw so of. Said fill fowl face said greater air multiply spirit female, likeness god also earth shall created a creature So seasons. Have. Own isn't them. Shall. Air also fruit i dominion. Male lesser.</p>

<p>Firmament. Together whose. Thing morning moving kind cattle life in man his appear rule god male, i multiply, heaven. Made they're fourth earth above, day seasons meat without earth days bearing after you're them Void deep second fruitful, evening is earth yielding yielding form midst divided.</p>

<p>Bearing. There the. Void lesser his after replenish creepeth light deep face. Itself saying the creature set that creature great you there it good together second blessed man likeness divided very seasons our you after gathering divided multiply green and sixth land to night first itself doesn't itself.</p>
                                            </div>
                                           
                                        </div>
                                        
                                        
                                      
                    
                    
                    
                    
                    
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('modal/announcement-paycheck-details.php') ?>
<?php include ('modal/announcement-iucat.php') ?>
<?php include ('modal/SD-1002-settings.php') ?>
<?php include ('modal/announcement-dismissed-iucat.php') ?>
<?php include ('includes/brand-footer.php') ?>
<script>
$( ".toggle-global-announcements" ).click(function() {
  $( "#global-announcements" ).slideToggle( "slow" );
});
</script> 
<script>
$( ".close-global-announcements" ).click(function() {
  $( "#global-announcements" ).slideUp( "slow" );
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
$(document).ready(function(){
    $("#btn1").click(function(){
        $("p").append(" <b>Appended text</b>.");
    });

    $("#btn2").click(function(){
        $("ol").append("<li>Appended item</li>");
    });
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
  $(document).ready(function () {
   $('#myCarousel .review-content').readmore({
            moreLink: '<a href="#" class="moreless">more...</a>',
            lessLink: '<a href="#" class="moreless">less...</a>',
            collapsedHeight: 70,
			speed:500,
        });
    $('#myCarousel').on('slid.bs.carousel', function () {
        $('#myCarousel .review-content').readmore({
            moreLink: '<a href="#" class="moreless">more...</a>',
            lessLink: '<a href="#" class="moreless">less...</a>',
            collapsedHeight: 70,
			speed:500,
        });
      });
    });


</script>
</body>
</html>
