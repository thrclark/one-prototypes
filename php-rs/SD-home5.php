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


.navbar.navbar-default {
	border: none;
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


@media (max-width: 992px) {
.comment-list .review-header .review-postinfo {
	text-align: left;
}
}

.moreless {
	font-style: italic
}
a[data-readmore-toggle] {
	margin-top: 0px;
}

.utilities-bar {
	margin-bottom: 0px;
}



.nav.navbar-nav li i {
	font-size: 16px;
}



</style>
<?php include ('includes/scripts.php') ?>
<script type="text/javascript" src="../js/typehead-sectioned.js"></script>
</head>
<body id="top" >
<?php include ('includes/mobile-sidebar.php') ?>
<?php include ('includes/brand-header.php') ?>
<?php include ('includes/header-gen-announcements5.php') ?>
<?php include ('includes/utilitybar5.php') ?>
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
                <div class="text-center"> <a href="SD-favs-more.php"  class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-down-open-1"></i> More<span class="sr-only"> My Favorites</span></a></div>
            </div>
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

$( ".launch-notifications" ).click(function() {
  $('#notifications').modal('toggle')
  
  
  
  
  if ($(window).width() > 975) {
    $('.modal-backdrop').css( "display", "none" );
}
else {
 $('.modal-backdrop').css( "display", "block" );
}
  
  
  
  
 
  
  
  
  
  
  
  
  $('.message-content').readmore({
  speed: 200,
  collapsedHeight: 35,
  moreLink: '<a href="#"><em>view more...</em></a>',
  lessLink: '<a href="#"><em>view less</em></a>'
});


});

  


</script> 

<!--

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
</script> --> 
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

</body>
</html>
