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
<style>
.message-header h5 {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-weightttt: bold;
	display: inline;
	font-size: 22px;
}
.icon-star, .ratings-overview .icon-star, .ratings .icon-star {
	color: orange;
}
.icon-star-empty {
	color: #cccccc;
}
li:last-child {
	border-bottom: none;
}
.post-date {
	font-style: italic;
}
.post-author {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-weight: bold;
}
.message-header .review-postinfo {
	text-align: right;
}
.review-content {
	margin-bottommm: 10px;
}
.message-header {
	padding-bottom: 10px;
	padding-top: 10px;
}
li:last-child {
	border-bottom: none;
}
.carousel-linked-nav, .item img {
	displayyyyy: block;
	margin: 0 auto;
}
.carousel-linked-nav {
	widthhhhhh: 190px;
	margin-bottom: 0px;
}
.pagination.announcemet>li>a, .pagination.announcemet>li>span {
	border-radius: 50%;
	margin: 0 5px;
}

@media (max-width: 992px) {
.message-header .review-postinfo {
	text-align: left;
}
}
.carousel-inner {
	min-heightttt: 150px
}
.pagination>li>a.last:last-child {
	border-radius: 0px;
	margin: 0 5px;
}
.global-announcements .well-sm {
	padding-top: 0px;
	padding-bottom: 0px;
	min-height: 130px;
}
.global-announcements .well.well-sm img {
	width: 92px;
}
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
                    <nav class="btn-group btn-breadcrumb" > <a href="SD-home.php" class="btn btn-default"><i class="icon-home-2"></i><span class="sr-only">Home</></a>
                        <div class="btn btn-default seemore" style="">...</div>
                       <div class="btn">
                        <div>Announcements</div>
                        </div> </nav>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="toggle-global-announcements" ><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>
                        <li><a href="#" class="launch-notifications"><i class="icon-inbox-alt"></i>
                            <div class="container-badge"><span class="badge">2</span></div>
                            <span class="sr-only">Inbox</span></a> </li>
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
    <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="category" style="margin-bottom:-1px; border-bottom: none">
            <div class="row">
                <div class="col-xs-10">
                    <h3> <i class="icon-bell" style="color:#44697d"></i> Announcements</h3>
                </div>
                <div class="col-xs-2 text-right"> </div>
            </div>
            <div class="row" style="margin-top:20px">
                <div class="col-md-6">
                    <div class="well well-sm announcement2">
                        <div class="row">
                            <div class="hidden-xs col-sm-2 text-center"> <i class="icon-phone-squared"></i></div>
                            <div class="col-xs-12 col-sm-10 ">
                                <div class="row message-header">
                                    <div class="col-xs-12 col-sm-9 review-title">
                                        <h5>Telephone Service Disruption</h5>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 review-postinfo text-right"><small class="post-author"></small> <small class="post-date">10/21/15</small></div>
                                </div>
                                <div class="review-content">
                                    <p> Campus telephone services are currently experiencing intermittent disruptions. IT Services is aware of the issue, and are working to resolve the problem. For more IT notices, please visit the IT Notices Gateway. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well well-sm announcement1">
                        <div class="row">
                            <div class="hidden-xs col-sm-2 text-center"><img src="../img/task-icons-new/SD-016.png"></div>
                            <div class="col-xs-12 col-sm-10 ">
                                <div class="row message-header">
                                    <div class="col-xs-12 col-md-9 review-title">
                                        <h5>Class Registration Begins Today</h5>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 review-postinfo"><small class="post-author">Registration</small> <small class="post-date">10/21/15</small></div>
                                </div>
                                <div class="review-content">
                                    <p> Spring term 2016 is open. Check your email for information on your registration appointment. Register early and get the classes you need. You may register online or call (555) 555-55555 for information and assistance. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well well-sm announcement3">
                        <div class="row">
                            <div class="hidden-xs col-sm-2 text-center"><img src="../img/task-icons-new/SD-009.png"></div>
                            <div class="col-xs-12 col-sm-10 ">
                                <div class="row message-header">
                                    <div class="col-xs-12 col-md-9 review-title">
                                        <h5>Textbook Order Deadline</h5>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 review-postinfo"><small class="post-author">Registration</small> <small class="post-date">10/21/15</small></div>
                                </div>
                                <div class="review-content">
                                    <p> If you are placing a textbook order for the Summer 2016 session, the last day to do so will be this Friday, May 13th. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well well-sm announcement4">
                        <div class="row">
                            <div class="hidden-xs col-sm-2 text-center"><img src="../img/task-icons-new/icon-classifieds.png"></div>
                            <div class="col-xs-12 col-sm-10 ">
                                <div class="row message-header">
                                    <div class="col-xs-12 col-md-9 review-title">
                                        <h5>Buy it? Sell it? Classifieds!</h5>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 review-postinfo"><small class="post-author"></small> <small class="post-date">10/21/15</small></div>
                                </div>
                                <div class="review-content">
                                    <p> IU Classifies is the place to find what you need, sell what you don't need. Easy browsing of ads, and quick posting of your own ads. Check it out!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well well-sm announcement5">
                        <div class="row">
                            <div class="hidden-xs col-sm-2 text-center"><i class="icon-clock-1"></i></div>
                            <div class="col-xs-12 col-sm-10 ">
                                <div class="row message-header">
                                    <div class="col-xs-12 col-md-9 review-title">
                                        <h5>Spring Break Campus Hours</h5>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 review-postinfo"><small class="post-author"></small> <small class="post-date">10/21/15</small></div>
                                </div>
                                <div class="review-content">
                                    <p> During the week of spring break, general offices of the campus will have restricted hours of operation. Please check your area offices for specific operational hours.</p>
                                </div>
                            </div>
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
<?php include('includes/brand-footer.php') ?><?php include('includes/footer-scripts.php') ?>
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


</script> </body>
</html>
