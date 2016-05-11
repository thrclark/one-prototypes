

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
</head>
<body id="top" >
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
                        <div>My Favorites</div></div> </nav>
                  
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right"> <li><a href="#" class=""><i class="icon-bell-3"></i>
                       
                            <span class="sr-only">Notifications</span></a> </li>

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
            <div id="_favorite_2" class="collection">
                <div data-sd-tiles="taskCollection.tiles" data-market-map="::marketMap" data-add-favorite-function="addSingleFavorite(taskUid, taskCenterId, callback)" data-remove-favorite-function="removeSingleFavorite(taskUid, taskCenterId, callback)" data-launch-url-function="getTileLaunchUrl(tile, taskCenterId)" data-details-url-function="getTileDetailsUrl(tile)" data-filter="filter" data-user-name="">
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-020.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">To Do List</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-001.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Enrollment Shopping Cart</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-002.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Course History </h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-003.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Student Center</h4>
                                <div class="task-title-secondary"> <span class="app-name">SIS</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/SD-004.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Email</h4>
                                <div class="task-title-secondary"> <span class="app-name">Umail</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-019.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Software Downloads</h4>
                                <div class="task-title-secondary"> <span class="app-name">IUWare</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-011.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Passphrase Reset</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-012.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Citizenship Verification</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-013.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">My Class Schedule</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-014.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Title IV Financial Aid Authorizations</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-015.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Record Holds</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-016.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Class Registration</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-017.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Set Up 3rd Party Users</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-018.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary"> Immunization Compliance Form</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-008.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Degree Map Search</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-009.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Textbook Orders</h4>
                                <div class="task-title-secondary"> <span class="app-name"></span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="task6"> <a aria-hidden="true" tabindex="-1" class="task-image" href="#" data-toggle="modal" data-target="#modalPaycheck"><img alt="launch Paycheck details" src="../img/task-icons-new/SD-010.png"></a>
                        <div class="container-badge" id="badge2"></div>
                        <div class="tile-content"> <a aria-hidden="true" tabindex="-1" href="#" data-toggle="modal" data-target="#modalPaycheck">
                            <div class="tile-header">
                                <h4 class="task-title-primary">Emergency Notification Settings</h4>
                                <div class="task-title-secondary"> <span class="app-name">IU Notify</span> <span class="market">(All Campuses)</span></div>
                            </div>
                            <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div></a>
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
                                <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button><button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart" style="display:; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                            </div>
                            <div class="mobile-slide visible-xs">
                                <button class="btn btn-default mobile-showdetails" style="  "><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('modal/announcement-paycheck-details.php') ?>

<?php include ('modal/SD-1002-settings.php') ?>

<?php include('includes/brand-footer.php') ?><?php include('includes/footer-scripts.php') ?>
</body>
</html>
