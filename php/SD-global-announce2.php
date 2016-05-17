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
	min-height: 150px
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

.moreless {
	font-style:italic}
</style>
</head>
<body id="top" >
<div class="alert alert-application" role="alert" style="display:none">
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-sm-2 col-md-1 col-lg-1 text-center"> <i class="icon-attention-circled"></i></div>
            <div class="col-xs-12 col-sm-10 col-md-11 col-lg-11">
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
                <div class="col-md-6 col-xs-12"> </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="toggle-global-announcements open"><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>
                        <!--<li><a href="#" class="launch-notifications"><i class="icon-inbox-alt"></i>
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
<?php include ('includes/global-announce-panel-2.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <h2 class="sr-only">Tasks</h2>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
            <div class="category">
                <div class="row">
                    <div class="col-xs-10">
                        <h3>My Favorites</h3>
                    </div>
                    <div class="col-xs-2 text-right"> <a href="SD-edit-favs.php" class="btn btn-default btn-xs" tabindex="0" title="edit my favorites"><i class="icon-pencil"></i><span class="visible-md-inline visible-lg-inline">Edit</span><span class="sr-only"> Favorites</span></a> </div>
                </div>
            </div>
            <div id="_favorite_" class="collection">
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name="">
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-classifieds.png"></a>
                        <div class="container-badge" id="badge1"><span class="badge">2</span></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">IU Classifieds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            <div class="task-activecontent one"><span class="activecontent-label">Selling:</span> <span class="activecontent-value">2007 BMW 750i Low milage </span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp1.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-020.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">To Do List</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp1.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-001.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Enrollment Shopping Cart</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-002.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Course History </h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-003.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Student Center</h4>
                                <div class="task-title-secondary"> <span class="app-name">SIS</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-004.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Email</h4>
                                <div class="task-title-secondary"> <span class="app-name">Umail</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"><a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_tcp">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-to-do_list.png"> <img alt=""  src="../img/task-icons-new/icon-time.png"> <img alt=""  src="../img/task-icons-new/icon-paycheck.png"> <img alt=""  src="../img/task-icons-new/icon-grade-report.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> <img alt=""  src="../img/task-icons-new/icon-change-name.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"></div>
                        </a>
                        <div class="container-badge" id=""><span class="badge">1</span></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_tcp">
                            <div class="tile-header">
                                <h4 class="task-title-primary">New Student Orientation</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"><a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_tcp">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-paycheck.png"> <img alt=""  src="../img/task-icons-new/icon-grade-report.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> </div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_tcp">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Accounts Management</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="SD-favs-more.php"  class="btn btn-default btn-xs btn-more see-more-button" tabindex="0" aria-hidden="false"><strong>See More</strong><span class="sr-only"> My Favorites</span></a> </div>
        </div>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
            <div class="category">
                <div class="row">
                    <div class="col-xs-10">
                        <h3>Frequently Used</h3>
                    </div>
                    <div class="col-xs-2 text-right"> <a href="SD-edit-frequent.php" class="btn btn-default btn-xs" tabindex="0" title="edit frequently used"><i class="icon-pencil"></i><span class="visible-md-inline visible-lg-inline">Edit</span><span class="sr-only"> Frequently Used</span></a> </div>
                </div>
            </div>
            <div id="_recentlyUsed_" class="collection">
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name="">
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-005.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Drop or Add Classes</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-006.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Create My First IU Account</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-007.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">iGPS Plan</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-008.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Degree Map Search</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-009.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Textbook Orders</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-010.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Emergency Notification Settings</h4>
                                <div class="task-title-secondary"> <span class="app-name">IU Notify</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
            <div class="category">
                <h3>Most Popular</h3>
                <div class="clearfix"></div>
            </div>
            <div id="_popular_" class="collection">
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name="">
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-018.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary"> Immunization Compliance Form</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Software Downloads</h4>
                                <div class="task-title-secondary"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-005.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Drop or Add Classes</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-006.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Create My First IU Account</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-007.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">iGPS Plan</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
            <div class="category">
                <h3>Highest Rated</h3>
                <span class="pull-right"> 
                <!-- ngIf: ::!(isViewingHome() || isEditing() || isViewingSearchCollection()) && $index == 0 --> 
                <!-- ngIf: ::isViewingSearchCollection() --> 
                <!-- ngIf: ::(editingFavorites && taskCollection.uniqueKey == '_favorite_') || (editingMostRecent && taskCollection.uniqueKey == '_recentlyUsed_') --> 
                </span> 
                <!-- ngIf: ::!editingFavorites && taskCollection.tiles.length > 0 && taskCollection.uniqueKey == '_favorite_' --> 
                <!-- ngIf: ::!editingMostRecent && taskCollection.tiles.length > 0 && taskCollection.uniqueKey == '_recentlyUsed_' -->
                <div class="clearfix"></div>
            </div>
            <!-- ngIf: ::store.tasks.taskCollections.length != 1 || (!editingFavorites && !editingMostRecent) -->
            <div id="_highestRated_" class="collection"> 
                <!-- ngIf: ::taskCollection.tiles.length == 0 -->
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name=""> 
                    <!-- ngRepeat: tile in tiles -->
                    
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Software Downloads</h4>
                                <div class="task-title-secondary"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-018.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary"> Immunization Compliance Form</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-008.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Degree Map Search</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-009.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Textbook Orders</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-010.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Emergency Notification Settings</h4>
                                <div class="task-title-secondary"> <span class="app-name">IU Notify</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-widget">
                                    <ul class="star-background" aria-hidden="true">
                                        <!-- grey -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                    <ul class="star-foreground" style="width:50%">
                                        <!-- yellow -->
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                        <li><span class="icon-star"></span></li>
                                    </ul>
                                </div>
                                <div class="review-count" aria-hidden="true">(4)</div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- end ngRepeat: tile in tiles --></div>
            </div>
            <!-- end ngIf: ::store.tasks.taskCollections.length != 1 || (!editingFavorites && !editingMostRecent) --><!-- /taskList --> 
            <!-- ngIf: store.tasks.taskCollections.length == 1 && editingFavorites --><!-- /taskList --> 
            <!-- ngIf: store.tasks.taskCollections.length == 1 && editingMostRecent --><!-- /taskList --> 
        </div>
    </div>
</div>
<?php include ('modal/announcement-task.php') ?>
<?php include ('modal/announcement-taskcenter.php') ?>
<?php include ('modal/SD-1002-settings.php') ?>
<?php include('includes/brand-footer.php') ?>
<?php include('includes/footer-scripts.php') ?>
<script>

$(document).ready(function() {

$('.divider').on('hide.bs.dropdown', function () {
    return false;
});



});


</script>
</body>
</html>