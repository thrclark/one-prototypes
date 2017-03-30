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
.removetile {
	display: block;
	cursor: pointer;
}
.removetile:before {
	position: absolute;
	font-family: 'fontello';
	content: '\e91d';
	left: 5px;
	font-size: 10px;
}
.task6 a {
	cursor: move;
}
.tile-actions, .task-attributes, .mobile-slide {
	display: none
}
.container-badge {
	top: -1px;
	right: -1px;
}
.container-badge .badge {
	padding: 5px 9px;
	border-radius: 0px;
}
.removetile:before {
	position: absolute;
	font-family: 'fontello';
	content: '\e91d';
	left: 8px;
	font-size: 12px;
	top: 4px;
}

@media (max-width: 767px) {
.menu-overlay {
	opacity: 0.0;
	background: #000;
	width: 60%;
	height: 100%;
	z-index: 10;
	top: 164px;
	position: absolute;
	margin-left: 81px;
}
.menu-overlay2 {
	opacity: 0.0;
	background: #000;
	width: 40%;
	height: 100%;
	z-index: 10;
	top: 164px;
	right: 30px;
	position: absolute;
}
footer {
	z-index: 11;
}
}
.utilities-bar .badge {
	border-radius: 10px;
	padding: 3px 5px;
}
</style>
<?php include ('includes/scripts.php') ?>
</head>
<body class="gray-bg" id="top" >
<div class="wrapper">
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
    <?php include ('includes/header-brand.php') ?>
    <?php include ('includes/header-main.php') ?>
    <section class="utilities-bar hidden-xs">
        <div class="container">
            <nav class="navbar navbar-default"  style="margin-bottom:0px">
                <div class="row">
                    <div class="col-md-6 col-xs-12"> </div>
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="toggle-global-announcements open"><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>
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
    <?php include ('includes/global-announcements.php') ?>
    <div class="main-content container" role="main">
        <div id="main-content">
            <h2 class="sr-only">Tasks</h2>
            <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection">
                <div class="category">
                    <div class="row">
                        <div class="col-xs-8">
                            <h3>My Favorites</h3>
                        </div>
                        <div class="col-xs-4 text-right"> <a href="store.php" class="btn btn-primary btn-xs" tabindex="0" title="save edits to my favorites"><span class="">Save</span><span class="sr-only"> Edits</span></a> <a href="store.php" class="btn btn-default btn-xs" tabindex="0" title="cancel edits to my favorites"><span class="">Cancel</span><span class="sr-only"> Edits</span></a> </div>
                    </div>
                </div>
                <div id="_favorite_" class="collection">
                    <div id="sortable" class="ui-sortable">
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-020.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">To Do List</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-001.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Enrollment Shopping Cart</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-002.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Course History </h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-003.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Student Center</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name">SIS</span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-004.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Email</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name">Umail</span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Record Holds</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Class Registration</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Set Up 3rd Party Users</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Software Downloads</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Passphrase Reset</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Citizenship Verification</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">My Class Schedule</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Title IV Financial Aid Authorizations</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Record Holds</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Class Registration</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Set Up 3rd Party Users</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-018.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;"> Immunization Compliance Form</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-008.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Degree Map Search</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-009.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Textbook Orders</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-010.png"></a>
                            <div class="container-badge" onclick="$(this).parent('div').remove();"><span class="badge removetile" style="">&nbsp;</span></div>
                            <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#">
                                <div class="tile-header">
                                    <h4 class="task-title-primary" style="word-wrap: break-word;">Emergency Notification Settings</h4>
                                    <div class="task-title-secondary" style="word-wrap: break-word; white-space: normal;"> <span class="app-name">IU Notify</span> <span class="market">(All Campuses)</span></div>
                                </div>
                                <div class="task-activecontent" style="word-wrap: break-word;"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
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
                                <div class="mobile-slide" style="display:none">
                                    <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
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
    $(document).ready(function() {
        if ($(window).width() < 767) {
            $("#sortable").sortable({
                handle: ".task-image"
            });
        } else {
            $("#sortable").sortable({
            });
        }
        $("#sortable").disableSelection();
        $(window).resize(function() {
            location.reload();
        });
    });
</script> 
    <script>
    $(window).load(function() {
        $("#global-announcements").hide();
        $(".toggle-global-announcements").removeClass("open");
    });
</script> 
    <script>
    $(document).ready(function() {
        $('.divider').on('hide.bs.dropdown', function() {
            return false;
        });
    });
</script> 
</div>
</body>
</html>
