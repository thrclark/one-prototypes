<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>






<style>
.lSPager.lSGallery li:last-child a:before {
	position: absolute;
	content: '\e810';
	background-color: rgba(0, 0, 0, 0.3);
	width: 90px;
	height: 60px;
	font-family: 'fontello';
	color: #ffffff;
	left: 0px;
	font-size: 36px;
	padding-left: 26px;
	padding-top: 4px;
}
</style>
<style type="text/css">
.carousel-inner {
	min-height: 145px;
	overflow: visible;
}
.carousel {
	z-index: 20;
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
	min-height: 125px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,0.1);
	margin-bottom: 10px;
	margin-top: 10px;
	border: solid 1px #EBEBEB;
	position: absolute;
	background: white;
	margin-right: 15px;
}
.global-announcements .global-announcement .ga-header {
	padding: 5px 10px 5px 10px;
	font-weight: bold;
	font-size: 16px;
	border-bottom: solid 1px #EBEBEB;
}
.global-announcements .global-announcement .ga-body {
	padding: 5px 10px 0px 10px;
}
.global-announcements .global-announcement .ga-header .icon-graphic i {
	font-size: 44px;
	line-height: 52px;
	text-shadow: none;
	opacity: .7;
}
.global-announcements .global-announcement .ga-header .close {
	position: absolute;
	right: 10px;
	font-size: 14px;
	color: black;
	top: 10px;
	opacity: .3;
	text-shadow: none;
}
.nav .toggle-global-announcements.open:before {
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
	font-style: italic
}






</style>






<?php include ('includes/scripts.php') ?>
</head>
<body id="top">
<?php include ('includes/mobile-sidebar.php') ?>
<?php include ('includes/brand-header.php') ?>
<?php include ('includes/header-global-announcements5.php') ?>
<section class="utilities-bar">
    <div class="container">
        <nav class="navbar navbar-default"  style="margin-bottom:0px">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <nav class="btn-group btn-breadcrumb" task-title="Travel direct deposit"aria-hidden="false"><a href="SD-global-announce5.php" class="btn btn-default" title="Home" tabindex="0"><i class="icon-home-2"></i><span class="sr-only">Home</span></a><a class="btn btn-default seemore" tabindex="0"><span aria-hidden="true">…</span><span class="sr-only"></span></a>
                        <div class="btn">
                            <div title="Search Results"><span>Search Results</span></div>
                        </div>
                    </nav>
                </div>
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
<?php include ('includes/global-announce-panel-5.php') ?>
<div class="main-content container" role="main">
    <div id="main-content">
        <h2 class="sr-only">Tasks</h2>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
            <div class="category">
                <div class="row">
                    <div class="col-xs-10">
                        <h3>Tasks</h3>
                    </div>
                    <div class="col-xs-2 text-right"> </div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-paycheck.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Paycheck Details</h4>
                                <div class="task-title-secondary"> <span class="app-name">Kuali</span> <span class="market">(All IU Campuses)</span></div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-020.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">To Do List</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(IUPUI)</span></div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-001.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Enrollment Shopping Cart</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(IUPUI)</span></div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-002.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Course History </h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(IUPUI)</span></div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-emergency-contact.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Campus Alerts</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-newsroom.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">IU News Room</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            <div class="task-activecontent one"><span class="activecontent-label">News:</span> <span class="activecontent-value">IPFW Receives Study Abroad Grant, Creates Six Scholarships </span></div>
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
                                <div class="mobileview not-mobile visible-xs"><i class="icon-mobile-1"></i><span>Not Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-ibucks.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">iBucks Meal Plans</h4>
                                <div class="task-title-secondary"> <span class="app-name">RPS</span> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label">Your Balance:</span> <span class="activecontent-value">$54.78</span></div>
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
                                <div class="mobileview not-mobile visible-xs"><i class="icon-mobile-1"></i><span>Not Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-childcare-fees.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Childcare Fees</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
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
                                <div class="mobileview not-mobile visible-xs"><i class="icon-mobile-1"></i><span>Not Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-grade-report.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Grade Report</h4>
                                <div class="task-title-secondary"> <span class="app-name">SIS</span> <span class="market">(All IU Campuses)</span></div>
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
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-Exchange-Email.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Exchange Email</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
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
                                <div class="mobileview not-mobile visible-xs"><i class="icon-mobile-1"></i><span>Not Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_task"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-IUanyWare.png"></a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_task">
                            <div class="tile-header">
                                <h4 class="task-title-primary">IUanyWAre</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
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
                                <div class="mobileview not-mobile visible-xs"><i class="icon-mobile-1"></i><span>Not Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-global-announce5-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                <div class="row">
                    <div class="col-xs-10">
                        <h3>Task Centers</h3>
                    </div>
                    <div class="col-xs-2 text-right"> </div>
                </div>
            </div>
            <div id="_recentlyUsed_" class="collection">
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name="">
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#announcement_tcp">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-guest-accounts.png"> <img alt=""  src="../img/task-icons-new/icon-parking.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"> <img alt=""  src="../img/task-icons-new/icon-parking-citation.png"> <img alt=""  src="../img/task-icons-new/icon-resident.png"> <img alt=""  src="../img/task-icons-new/icon-bt.png"> </div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#announcement_tcp">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Access Management</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
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
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-kuali.png"> <img alt=""  src="../img/task-icons-new/icon-parking-citation.png"> <img alt=""  src="../img/task-icons-new/icon-parking.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> </div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Kuali Coeus IRB</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-box.png"> <img alt=""  src="../img/task-icons-new/icon-bt.png"> <img alt=""  src="../img/task-icons-new/icon-freshor.png"> <img alt=""  src="../img/task-icons-new/icon-guest-accounts.png"> <img alt=""  src="../img/task-icons-new/icon-campus-events.png"> <img alt=""  src="../img/task-icons-new/icon-IUIE-Reports.png"> <img alt=""  src="../img/task-icons-new/icon-email-managment.png"> <img alt=""  src="../img/task-icons-new/icon-kuali.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Faculty Annual Report (FAR)</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-guest-accounts.png"> <img alt=""  src="../img/task-icons-new/icon-email-managment.png"> <img alt=""  src="../img/task-icons-new/icon-freshor.png"> <img alt=""  src="../img/task-icons-new/icon-Exchange-Email.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> <img alt=""  src="../img/task-icons-new/icon-box.png"> <img alt=""  src="../img/task-icons-new/icon-address.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-mobile-security.jpg"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">iGPS Tasks</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-guest-accounts.png"> <img alt=""  src="../img/task-icons-new/icon-parking.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"> <img alt=""  src="../img/task-icons-new/icon-parking-citation.png"> <img alt=""  src="../img/task-icons-new/icon-resident.png"> <img alt=""  src="../img/task-icons-new/icon-bt.png"> <img alt=""  src="../img/task-icons-new/icon-talk-nerdy.png"> <img alt=""  src="../img/task-icons-new/icon-campus-events.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Research Services Expo</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-to-do_list.png"> <img alt=""  src="../img/task-icons-new/icon-time.png"> <img alt=""  src="../img/task-icons-new/icon-paycheck.png"> <img alt=""  src="../img/task-icons-new/icon-grade-report.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> <img alt=""  src="../img/task-icons-new/icon-change-name.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Travel</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-tcp5-empty.php">
                        <div class="collage"> </div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-tcp5-empty.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Tech Tips</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-kuali.png"> <img alt=""  src="../img/task-icons-new/icon-parking-citation.png"> <img alt=""  src="../img/task-icons-new/icon-parking.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-resident.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"> <img alt=""  src="../img/task-icons-new/icon-campus-events.png"> <img alt=""  src="../img/task-icons-new/icon-bt.png"> <img alt=""  src="../img/task-icons-new/icon-talk-nerdy.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">RPS Housing &amp; Dining</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-guest-accounts.png"> <img alt=""  src="../img/task-icons-new/icon-parking.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"> <img alt=""  src="../img/task-icons-new/icon-parking-citation.png"> <img alt=""  src="../img/task-icons-new/icon-resident.png"> <img alt=""  src="../img/task-icons-new/icon-bt.png"> <img alt=""  src="../img/task-icons-new/icon-talk-nerdy.png"> <img alt=""  src="../img/task-icons-new/icon-campus-events.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Access Management</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-to-do_list.png"> <img alt=""  src="../img/task-icons-new/icon-time.png"> <img alt=""  src="../img/task-icons-new/icon-paycheck.png"> <img alt=""  src="../img/task-icons-new/icon-grade-report.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> <img alt=""  src="../img/task-icons-new/icon-change-name.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
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
                    <div class="task6 taskcenter"> <a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce5-tcp.php">
                        <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-kuali.png"> <img alt=""  src="../img/task-icons-new/icon-parking-citation.png"> <img alt=""  src="../img/task-icons-new/icon-parking.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-resident.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"> <img alt=""  src="../img/task-icons-new/icon-campus-events.png"> <img alt=""  src="../img/task-icons-new/icon-bt.png"> <img alt=""  src="../img/task-icons-new/icon-talk-nerdy.png"></div>
                        </a>
                        <div class="container-badge" id=""></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce5-tcp.php">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Kuali Coeus IRB</h4>
                                <div class="task-title-secondary"> <span class="market">(All IU Campuses)</span></div>
                            </div>
                            </a>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('modal/announcement-task.php') ?>
<?php include ('modal/announcement-taskcenter.php') ?>
<?php include ('modal/SD-1002-settings.php') ?>
<?php include('includes/brand-footer.php') ?>
<?php include('includes/footer-scripts.php') ?>


 <script>
 
  $( document ).ready(function() {
    $( "#global-announcements" ).hide();
	$( ".toggle-global-announcements" ).removeClass( "open" );
  });
 
  </script>
  
</body>
</html>
