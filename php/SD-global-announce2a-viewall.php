<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
<style type="text/css">
.carousel-inner {
	min-height: 182px
}
.carousel .carousel-control {
	background: transparent;
	width: inherit;
	color: black;
	font-size: 60px;
	text-shadow: 0 1px 2px #999;
	top: 25px;
}
.carousel .carousel-control.right {
	right: -35px;
}
.carousel .carousel-control.left {
	left: -35px;
}
.comment-list .message-header h5 {
	font-size: 18px;
}
.comment-list .message-header .hidden-xs.col-md-2.text-center i[class*='icon-'] {
	line-height: 0;
	font-size: 50px;
}
.comment-list .message-header .hidden-xs.col-md-2.text-center img {
	width: 50px;
}
.carousel-inner .well.well-sm {
	margin-bottom: 0px;
	padding-top: 0px;
	padding-bottom: 0px;
}
.global-announcements .global-announcement {
	min-height: 140px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,0.1);
	margin-bottom: 10px;
	margin-top: 10px;
}
.global-announcements .global-announcement .ga-header {
	background: grey;
	color: white;
	height: 45px;
	padding-left: 75px;
	text-shadow: 1px 1px 1px #000000;
	font-size: 18px;
	padding-top: 8px;
	border: solid 1px grey;
}
.global-announcements .global-announcement .ga-header img, .global-announcements .global-announcement .ga-header .icon-graphic {
	position: absolute;
	width: 55px;
	height: 55px;
	left: 25px;
	top: 6px;
	border: solid 1px grey;
	background: grey;
}
.global-announcements .global-announcement .ga-body {
	padding: 10px;
	padding-top: 15px;
	border: solid 1px #EBEBEB;
	min-height: 117px;
}
.global-announcements .global-announcement .ga-header .icon-graphic i {
	font-size: 44px;
	line-height: 52px;
	text-shadow: none;
	opacity: .7;
}
.global-announcements .global-announcement.color1 .ga-header {
	background: #4838A5;
	color: white;
	border-color: #4838A5;
}
.global-announcements .global-announcement.color1 .ga-header img {
	border-color: #A89AF9;
}
.global-announcements .global-announcement.color1 .ga-header .icon-graphic {
	background: #FF586A;
}
.global-announcements .global-announcement.color2 .ga-header {
	background: #E6263B;
	color: white;
	border-color: #E6263B;
}
.global-announcements .global-announcement.color2 .ga-header img {
	border-color: #E6263B;
}
.global-announcements .global-announcement.color2 .ga-header .icon-graphic {
	background: #FF586A;
	border-color: #FF8491;
}
.global-announcements .global-announcement.color3 .ga-header {
	background: #E8AB15;
	color: white;
	border-color: #E8AB15;
}
.global-announcements .global-announcement.color3 .ga-header img {
	border-color: #E8AB15;
}
.global-announcements .global-announcement.color3 .ga-header .icon-graphic {
	background: #E8AB15;
	border-color: #E8AB15;
}
.global-announcements .global-announcement.color4 .ga-header {
	background: #BD610B;
	color: white;
	border-color: #BD610B;
}
.global-announcements .global-announcement.color4 .ga-header img {
	border-color: #BD610B;
}
.global-announcements .global-announcement.color4 .ga-header .icon-graphic {
	background: #BD610B;
	border-color: #BD610B;
}
.global-announcements .global-announcement.color5 .ga-header {
	background: #2B9E41;
	color: white;
	border-color: #2B9E41;
}
.global-announcements .global-announcement.color5 .ga-header img {
	border-color: #2B9E41;
}
.global-announcements .global-announcement.color5 .ga-header .icon-graphic {
	background: #29B743;
	border-color: #2B9E41;
}
.global-announcements .global-announcement .ga-header .close {
	position: absolute;
	right: 20px;
	font-size: 14px;
	color: white;
	top: 15px;
	opacity: .5;
	text-shadow: none;
}
.toggle-global-announcements.open:before {
	content: '';
	background: #FFFFFF;
	position: absolute;
	width: 49px;
	left: 0px;
	top: 30px;
	display: block;
	height: 15px;
}



.sdfgsdfg:before {
	    content:'';
    background: #FFFFFF;
    position: absolute;
    width: 49px;
    left: 0px;
    top: 30px;
    display: block;
	height:15px;
	}

.moreless {
	font-style:italic}


</style>
</head>
<body id="top" style=" background-color:#FFFFFF" >
<div class="alert alert-application" role="alert" style="display:none">
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-sm-3 col-md-2 col-lg-1 text-center"> <i class="icon-attention-circled"></i></div>
            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
                <div class="row message-header">
                    <div class="col-xs-12 col-md-9 message-title">
                        <h5>Tornado Watch</h5>
                    </div>
                </div>
                <div class="message-content">
                    <p> The National Weather Service is reporting a tornado sighting in Monroe County. Please seek shelter immediately. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/mobile-sidebar.php') ?>
<?php include ('includes/brand-header.php') ?>
<?php include ('includes/header-gen-announcements5.php') ?>
<section class="utilities-bar">
    <div class="container">
        <nav class="navbar navbar-default"  style="margin-bottom:0px">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <nav class="btn-group btn-breadcrumb" > <a href="SD-global-announce2a.php" class="btn btn-default"><i class="icon-home-2"></i><span class="sr-only">Home</></a>
                        <div class="btn btn-default seemore" style="">...</div>
                        <div class="btn">
                            <div>Announcements</div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="sdfgsdfg" ><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>
                        <!-- <li><a href="#" class="launch-notifications"><i class="icon-inbox-alt"></i>
                            <div class="container-badge"><span class="badge">2</span></div>
                            <span class="sr-only">Inbox</span></a> </li>-->
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-user-3"></i> Hello, Tom</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" tabindex="0" class=""><i class="icon-heart"></i> My Favorites</a></li>
                                <li><a href="#"  data-toggle="modal" data-target="#settings"><i class="icon-cog"></i>Preferences</a></li>
                                <li class="divider"></li>
                                <li><a href="#" id="feedbackButton" tabindex="0"><i class="icon-comment-empty"></i> Send Feedback</a></li>
                                <li><a href="#" tabindex="0" class="ng-click-active"><i class="icon-info-circled-1"></i> Help</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-edit"></i> Publishing</a></li>
                                <li><a href="/#"><i class="icon-tools"></i> Admin</a></li>
                                <li class="divider"></li>
                                <li><a href="#" tabindex="0" aria-disabled="false"><i class="icon-logout"></i> Not Tom? <small class="text-muted">(sign out)</small></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="position:relative">
        <?php include ('modal/inbox.php') ?>
    </div>
</section>
<section id="global-announcements" class="global-announcements" style=" display:; background: #ffffff; min-height:;-webkit-box-shadow: inset 0 20px 15px -20px rgba(0,0,0,0.1);-moz-box-shadow: inset 0 20px 15px -20px rgba(0,0,0,0.1);box-shadow: inset 0 20px 15px -20px rgba(0,0,0,0.1);border-top: solid 1px #ebebeb;">
    <div class="container" style="padding-top: 20px;padding-bottom: 10px;">
        <div class="category" style="margin-bottom:-1px; border-bottom: none">
            <div class="row">
                <div class="col-xs-10">
                    <h3>Current Announcements</h3>
                </div>
                <div class="col-xs-2 text-right"> </div>
            </div>
            <div class="row" style="margin-top:20px">
               <p class="lead text-center" style="padding-bottom:30px; padding-top:30px">There are no new announcements.</p>
               
            </div>
        </div>
        <div class="category" style="margin-bottom:-1px; border-bottom: none">
            <div class="row">
                <div class="col-xs-10">
                    <h3>Dismissed Announcements</h3>
                </div>
                <div class="col-xs-2 text-right"> </div>
            </div>
            <div class="row" style="margin-top:20px">  <div class="col-md-4">
                    <div class="global-announcement color3">
                        <div class="ga-header"> <img class="" src="../img/task-icons-new/SD-009.png"> Textbook Order Deadline </div>
                        <div class="ga-body">
                            <p>If you are placing a textbook order for the Summer 2016 session, the last day to do so will be this Friday, May 13th.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="global-announcement color5">
                        <div class="ga-header">
                            <div class="icon-graphic"><i class="icon-clock-1"></i></div>
                            Spring Break Campus Hours </div>
                        <div class="ga-body">
                            <p>During the week of spring break, general offices of the campus will have restricted hours of operation. Please check your area offices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="global-announcement color1">
                        <div class="ga-header"><img class="img-circle" src="../img/task-icons-new/SD-016.png"> Class Registration Begins Today </div>
                        <div class="ga-body">
                            <p>Spring term 2016 is open. Check your email for information on your registration appointment. Register early and get the classes you need.</p>
                        </div>
                    </div>
                </div>
              
              
                <div class="col-md-4">
                    <div class="global-announcement color4">
                        <div class="ga-header"> <img class="img-circle" src="../img/task-icons-new/icon-classifieds.png"> Buy it? Sell it? Classifieds! </div>
                        <div class="ga-body">
                            <p>IU Classifies is the place to find what you need, sell what you don't need. Easy browsing of ads, and quick posting of your own ads. Check it out!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('modal/announcement-task.php') ?>
<?php include ('modal/announcement-taskcenter.php') ?>
<?php include ('modal/SD-1002-settings.php') ?>
<?php include('includes/brand-footer.php') ?>
<?php include('includes/footer-scripts.php') ?>
<script>
$( ".toggle-global-announcements" ).click(function() {
  $( "#global-announcements" ).slideToggle( "slow" );
});
</script> 
<script>

$(document).ready(function() {

$('.divider').on('hide.bs.dropdown', function () {
    return false;
});



});


</script>
</body>
</html>
