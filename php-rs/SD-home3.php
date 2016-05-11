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
	display:none;
	background: #ffffff;
	position: absolute;
	top: 15px;
	right: 0px;
	width: 420px;
min-height:;
	z-index: 20;
	box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
	padding: 0px;
	padding-bottom: 10px;
}

#global-announcements:before {
	content:"";
	position:absolute;
	background:#FFFFFF;
	    height: 25px;
    width: 25px;
    top: -12px;
	    left: 257px;
	    -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
    transform: rotate(45deg);
	border-left: solid 1px #dedede;
	border-top: solid 1px #dedede;
	}






#global-announcements .message {
	padding-left: 15px;
	padding-right: 15px;
	font-size: 12px;
}
#global-announcements .message .message-header .message-title {
	font-size: 12px;
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


#global-announcements .comment-list li {
	background: #FFFFFF;
}



#global-announcements .comment-list li.new {
	background: #EEF7FB;
}

a[data-readmore-toggle] {
	margin-top:-10px;}

.breadcrumb {
	display: none
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
                    <div class="col-xs-10">
                        <h3>My Favorites</h3>
                    </div>
                    <div class="col-xs-2 text-right"> <a href="SD-edit-favs.php" class="btn btn-default btn-xs" tabindex="0" title="edit my favorites"><i class="icon-pencil"></i><span class="visible-md-inline visible-lg-inline">Edit</span><span class="sr-only"> Favorites</span></a> </div>
                </div>
            </div>
            <div id="_favorite_" class="collection">
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name="">
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-020.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">To Do List</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-001.png"></a>
                        <div class="container-badge" id="badge1"><span class="badge">2</span></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Enrollment Shopping Cart</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Software Downloads</h4>
                                <div class="task-title-secondary"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="text-center">  <a href="SD-favs-more.php"  class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-down-open-1"></i> More<span class="sr-only"> My Favorites</span></a></div> </div>
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
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-005.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Drop or Add Classes</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-006.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Create My First IU Account</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-007.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">iGPS Plan</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-008.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Degree Map Search</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-009.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Textbook Orders</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-010.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Emergency Notification Settings</h4>
                                <div class="task-title-secondary"> <span class="app-name">IU Notify</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-018.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary"> Immunization Compliance Form</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Software Downloads</h4>
                                <div class="task-title-secondary"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-005.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Drop or Add Classes</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-006.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Create My First IU Account</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-007.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">iGPS Plan</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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
                    
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Software Downloads</h4>
                                <div class="task-title-secondary"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-018.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary"> Immunization Compliance Form</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-008.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Degree Map Search</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-009.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Textbook Orders</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-010.png"></a>
                        <div class="container-badge" id="badge1"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Emergency Notification Settings</h4>
                                <div class="task-title-secondary"> <span class="app-name">IU Notify</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                            </a>
                            <div class="task-attributes">
                                <div class="star-bar">
                                    <div class="bar" role="presentation" style="width: 50%;"></div>
                                    <div class="mask" role="presentation"></div>
                                    <div class="review-count" aria-hidden="true">(4)</div>
                                </div>
                                <div class="mobileview visible-xs"><i class="icon-mobile-1"></i><span>Mobile Friendly</span></div>
                            </div>
                            <div class="tile-actions btn-group" style=" ">
                                <button title="View Task Details" onclick="location.href='SD-tdp2.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
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

<!--


<div style="opacity:    0.5; 
  background: #000; 
  width:      100%;
  height:     100%; 
  z-index:    10;
  top:        0; 
  left:       0; 
  position:   fixed; ">

</div>

-->

<?php include ('modal/announcement-paycheck-details.php') ?>
<?php include ('modal/announcement-iucat.php') ?>
<?php include ('modal/SD-1002-settings.php') ?>
<?php include ('modal/announcement-dismissed-iucat.php') ?>
<?php include ('includes/brand-footer.php') ?>
<script>
$( ".toggle-global-announcements" ).click(function() {
  $( "#global-announcements" ).toggle( );
  
  
  
  $('.message-content').readmore({
  speed: 200,
  collapsedHeight: 35,
  moreLink: '<a href="#"><em>view more...</em></a>',
  lessLink: '<a href="#"><em>view less</em></a>'
});



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
