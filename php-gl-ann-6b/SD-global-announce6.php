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
.task6 {
	width: 306px;
}
.comment-list>ul>li {
	border-bottom: solid 1px #cccccc;
	padding-bottom: 0px;
	padding-top: 0px;
}
.message .message-header .message-meta {
	text-align: left;
}
.announcement {
	border: none;
}
.comment-list .announcement .message {
	position: relative;
}
.comment-list .announcement .message .row.message-footer .message-footer-actions {
	position: absolute;
	top: 2px;
	right: -12px;
}
.comment-list .announcement .message .row.message-footer .message-footer-actions a {
	color: #cccccc;
}
.moreless {
	font-style: italic
}

@media (max-width: 1299px) {
.task6 {
	width: 301px;
	height: 90px;
}

.task6 .tile-content {
    height: 90px;
    width: 210px;
}
}
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
                        <!--  <li><a href="#" class="toggle-global-announcements open"><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>--> 
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
</section>
<div class="main-content container" role="main">
    <div class="row">
        
    
        
        <div class="col-md-8 col-lg-9">
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6 taskcenter"><a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce6-tcp.php" data-toggle="" data-target="#">
                                <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-to-do_list.png"> <img alt=""  src="../img/task-icons-new/icon-time.png"> <img alt=""  src="../img/task-icons-new/icon-paycheck.png"> <img alt=""  src="../img/task-icons-new/icon-grade-report.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> <img alt=""  src="../img/task-icons-new/icon-change-name.png"> <img alt=""  src="../img/task-icons-new/icon-academic-calendar.png"> <img alt=""  src="../img/task-icons-new/icon-emergency-contact.png"></div>
                                </a>
                                <div class="container-badge" id=""><span class="badge">1</span></div>
                                <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce6-tcp.php" data-toggle="" data-target="#">
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6 taskcenter"><a aria-hidden="true" tabindex="-1" class="task-image" href="SD-global-announce6-tcp.php" data-toggle="" data-target="#">
                                <div class="collage"> <img alt=""  src="../img/task-icons-new/icon-paycheck.png"> <img alt=""  src="../img/task-icons-new/icon-grade-report.png"> <img alt=""  src="../img/task-icons-new/icon-acadcal.png"> <img alt=""  src="../img/task-icons-new/icon-code-of_conduct.png"> </div>
                                </a>
                                <div class="container-badge" id=""></div>
                                <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="SD-global-announce6-tcp.php" data-toggle="" data-target="#">
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                        <button title="View Task Details" onclick="location.href='SD-global-announce6-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
        
            <div class="col-md-4 col-lg-3">
            <div class="category" style="margin-bottom:0px">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Announcements</h3>
                    </div>
                </div>
            </div>
            <div class="comment-list">
                <ul class="list-unstyled">
                    <li class="announcement">
                        <div class="message">
                            <div class="row message-header">
                                <div class="col-xs-12 message-title"> Class Registration Begins Today </div>
                                <div class="col-xs-12 message-meta"> <small class="message-date">10/21/15</small> </div>
                            </div>
                            <div class="message-content">
                                <p>Spring term 2016 is open. Check your email for information on your registration appointment. Register early and get the classes you need.</p>
                            </div>
                            <div class="row message-footer">
                                <div class="message-footer-actions"> <a href="#" class="btn btn-link dismiss-announcement" id=""> <i class="icon-cancel-circled"></i></a> </div>
                            </div>
                        </div>
                    </li>
                    <li class="announcement">
                        <div class="message">
                            <div class="row message-header">
                                <div class="col-xs-12 message-title"> Telephone Service Disruption </div>
                                <div class="col-xs-12 message-meta"> <small class="message-date">10/21/15</small> </div>
                            </div>
                            <div class="message-content">
                                <p>Campus telephone services are currently experiencing intermittent disruptions. IT Services is aware of the issue, and are working to resolve it.</p>
                            </div>
                            <div class="row message-footer">
                                <div class="message-footer-actions"> <a href="#" class="btn btn-link dismiss-announcement" id=""> <i class="icon-cancel-circled"></i></a> </div>
                            </div>
                        </div>
                    </li>
                    <li class="announcement">
                        <div class="message">
                            <div class="row message-header">
                                <div class="col-xs-12 message-title"> Textbook Order Deadline </div>
                                <div class="col-xs-12 message-meta"> <small class="message-date">10/21/15</small> </div>
                            </div>
                            <div class="message-content">
                                <p>If you are placing a textbook order for the Summer 2016 session, the last day to do so will be this Friday, May 13th. sdfg sdfg sdfg sdfg sdfg sdgf sdgfsdfg sdfg sdfg sdfg sdfg sdgf sdgfsdfg sdfg sdfg sdfg sdfg sdgf sdgfsdfg sdfg sdfg sdfg sdfg sdgf sdgfsdfg sdfg sdfg sdfg sdfg sdgf sdgfsdfg sdfg sdfg sdfg sdfg sdgf sdgf</p>
                            </div>
                            <div class="row message-footer">
                                <div class="message-footer-actions"> <a href="#" class="btn btn-link dismiss-announcement" id=""> <i class="icon-cancel-circled"></i></a> </div>
                            </div>
                        </div>
                    </li>
                    <li class="announcement">
                        <div class="message">
                            <div class="row message-header">
                                <div class="col-xs-12 message-title"> Buy it? Sell it? Classifieds! </div>
                                <div class="col-xs-12 message-meta"> <small class="message-date">10/21/15</small> </div>
                            </div>
                            <div class="message-content">
                                <p>IU Classifies is the place to find what you need, sell what you don't need. Easy browsing of ads, and quick posting of your own ads. Check it out!</p>
                            </div>
                            <div class="row message-footer">
                                <div class="message-footer-actions"> <a href="#" class="btn btn-link dismiss-announcement" id=""> <i class="icon-cancel-circled"></i></a> </div>
                            </div>
                        </div>
                    </li>
                    <li class="announcement">
                        <div class="message">
                            <div class="row message-header">
                                <div class="col-xs-12 message-title"> Spring Break Campus Hours </div>
                                <div class="col-xs-12 message-meta"> <small class="message-date">10/21/15</small> </div>
                            </div>
                            <div class="message-content">
                                <p>During the week of spring break, general offices of the campus will have restricted hours of operation. Please check your area offices.</p>
                            </div>
                            <div class="row message-footer">
                                <div class="message-footer-actions"> <a href="#" class="btn btn-link dismiss-announcement dismiss-announcement-all" id=""> <i class="icon-cancel-circled"></i></a> </div>
                            </div>
                        </div>
                    </li>
                    <li style="display:none" class="announcements-nonew">
                        <div class="message">
                            <div class="message-content">
                                <p class="text-muted message-empty" style="    padding-top: 10px;
    padding-bottom: 2px;">There are no new announcements.</p>
                            </div>
                        </div>
                    </li>
                    <li style="border:none; padding-top:10px"><a href="#" data-toggle="modal" data-target="#dismissed-ga" class="btn btn-xs btn-default">View Dismissed</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include ('modal/announcement-task.php') ?>
<?php include ('modal/dismissed-ga-announcements.php') ?>
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
