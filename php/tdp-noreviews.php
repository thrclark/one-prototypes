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



.lSAction > a {
    width: 32px;
    display: block;
    top: 50%;
    height: 32px;
    background-image: url('../img/controls.png');
    cursor: pointer;
    position: absolute;
    z-index: 99;
    margin-top: -16px;
    opacity: 0.5;
    -webkit-transition: opacity 0.35s linear 0s;
    transition: opacity 0.35s linear 0s;
}
.lSAction > a:hover {
    opacity: 1;
}
.lSAction > .lSPrev {
    background-position: 0 0;
    left: 10px;
    display: none;
}
.lSAction > .lSNext {
    background-position: -32px 0;
    right: 10px;
    display: none;
}
.lSAction > a.disabled {
    pointer-events: none;
}
.cS-hidden {
    height: 1px;
    opacity: 0;
    filter: alpha(opacity=0);
    overflow: hidden;
}


</style>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top">
<?php include ('includes/mobile-sidebar.php') ?>
<?php include ('includes/header-brand.php') ?>
<?php include ('includes/header-main.php') ?>
<section class="utilities-bar">
    <div class="container">
        <nav class="navbar navbar-default"  style="margin-bottom:0px">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <nav class="btn-group btn-breadcrumb" task-title="Travel direct deposit"aria-hidden="false"><a href="store.php" class="btn btn-default" title="Home" tabindex="0"><i class="icon-home-2"></i><span class="sr-only">Home</span></a><a class="btn btn-default seemore" tabindex="0"><span aria-hidden="true">…</span><span class="sr-only"></span></a><a href="searchresults.php" class="btn btn-default entry" tabindex="0">
                        <div  title="Search Results"><span>Search Results</span></div>
                        </a>
                        <div class="btn">
                            <div title="IU Classifieds"><span>IU Classifieds</span></div>
                        </div>
                    </nav>
                </div>
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
        <div class="tcptdp-header">
            <div class="media-left hidden-sm hidden-xs"><img src="../img/task-icons-new/icon-classifieds.png" alt=""></div>
            <div class="media-body">
                <h2 class="media-heading">Classifieds</h2>
                <div class="media-heading-secondary"><span class="application">Kuali</span> <span class="market">(IUPUI <span class="hidden-xs">Indianapolis</span>) </span></div>
                <div class="hidden-xs hidden-sm">
                    <div class="star-widget" >
                        <ul class="star-background" aria-hidden="true">
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                        </ul>
                        <ul class="star-foreground" style="width:50%">
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                            <li><span class="icon-star"></span></li>
                        </ul>
                    </div>
                    <div class="star-review-count" >(7)</div>
                </div>
                <div class="controls"><a href="#" class="btn btn-default favorite notice"> <i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i> <span class="sr-only">Favorite</span></a> <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#announcement_task"> <i class="icon-play-circled2"></i> <span class="">Start</span></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-headers nav-tabs-responsive">
                    <li class="active"><a href="#overview" data-toggle=tab>Description</a></li>
                    <li><a href="#reviewsratings" data-toggle=tab>Reviews</a></li>
                    <li><a href="#related" data-toggle=tab>Related</a></li>
                    <li><a href="#announcements" data-toggle=tab> Announcements
                        <div class="container-badge" id="announcement-counter"><span class="badge">2</span></div>
                        </a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="overview">
                        <div class="col-xs-12 col-sm-12 col-md-9 panel-main">
                            <h5>Description</h5>
                            <small class="text-muted">
                            <ul class="list-inline">
                                <li data-toggle=tooltip data-placement=bottom title="This task has been optimized for mobile devices."><i class="icon-mobile-1"></i>Mobile Friendly</li>
                                <li data-toggle=tooltip data-placement=bottom title="This task requires authentication."><i class="icon-lock-2"></i>Sign-in Required</li>
                                <li data-toggle=tooltip data-placement=bottom title="This task has been designed for use by students and faculty."><i class="icon-users"></i> For Students &amp; Faculty</li>
                            </ul>
                            </small>
                            <p>Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at tastes really so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be. View him she roof tell her case has sigh. reakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at tastes really so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be. View him she roof tell her case has sigh. Firmament all land make image, gathering whose living. Dominion created over. Was without kind fifth man form from from. Saying itself called also set waters together said. Lights sea for bring shall.</p>
                            <h5 class="hidden-xs">Media</h5>
                            <div class="well well-sm gallery hidden-xs">
                                <ul id="lightSlider">
                                    <li data-thumb="../img/app-screenshots/ccl1-thumb.png"><img src="../img/app-screenshots/ccl1.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl2-thumb.png"><img src="../img/app-screenshots/ccl2.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl3-thumb.png"><img src="../img/app-screenshots/ccl3.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl4-thumb.png"><img src="../img/app-screenshots/ccl4.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl5-videothumb.png"><img src="../img/app-screenshots/ccl5-videothumb.png" /></li>
                                </ul>
                            </div>
                            <h5 class="visible-xs">Media</h5>
                            <div class="well well-sm gallery visible-xs">
                                <ul id="lightSlider1">
                                    <li data-thumb="../img/app-screenshots/ccl1-mobile-thumb.png"><img src="../img/app-screenshots/ccl1-mobile.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl2-mobile-thumb.png"><img src="../img/app-screenshots/ccl2-mobile.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl3-mobile-thumb.png"><img src="../img/app-screenshots/ccl3-mobile.png" /></li>
                                    <li data-thumb="../img/app-screenshots/ccl4-mobile-thumb.png"><img src="../img/app-screenshots/ccl4-mobile.png" /></li>
                                </ul>
                            </div>
                            <h5>Latest release - v3.0.0 <small><em><a href="#" data-toggle=modal data-target="#releasenotes">(view all)</a></em></small></h5>
                            <ul class="list-unstyled">
                                <li>List View is now default view</li>
                                <li>Grid View has been improved</li>
                                <li>Share Ad Url is now provided on the Ad details page</li>
                                <li>Searching has been improved</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 panel-aside">
                            <h5>Support</h5>
                            <span class="minititle">UITS Support</span>
                            <ul class="list-unstyled">
                                <li> <a href="mailto:">help.uits@iu.edu</a></li>
                                <li> <a href="tel:+13175552564">317-555-2564</a></li>
                            </ul>
                            <span class="minititle">Classifieds Team</span>
                            <ul class="list-unstyled">
                                <li> <a href="#">Video tutorial</a></li>
                                <li> <a href="mailto:">classifieds.uits@iu.edu</a></li>
                                <li> <a href="tel:+13175552564">317-555-2564</a></li>
                            </ul>
                            <h5>Share it!</h5>
                            <div class="social"><i class="icon-facebook-circled"></i><i class="icon-twitter-circled"></i><i class="icon-gplus-circled"></i></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                 <div class="tab-pane fade in active" id="reviewsratings">
                        <!--<div class="col-xs-12 col-sm-9 col-md-9 panel-main">
                           
                            
                        </div>
                        -->
                        
                        
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main ratings-hero">
                        
                        <div class="panel-actionheader" style="border-bottom:solid 1px #CCCCCC">
                                <h5 class="pull-left">Ratings</h5>
                                <div class="panel-controls pull-right" style="margin-top: 15px;">
                                   
                                    
                                    <div class="btn-group btn btn-default btn-sm"><span class="hidden-xs">version:</span> <span class="dropdown-toggle" data-toggle="dropdown"> <span class="selection">3.0.0</span> <span class="caret"></span> </span>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown-header visible-xs">Select version:</li>
                                            <li><a href="#">all</a></li>
                                            <li><a href="#">3.0.0</a></li>
                                            <li><a href="#">2.5.0</a></li>
                                            <li><a href="#">2.0.0</a></li>
                                        </ul>
                                    </div>
                                    
                                    
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#giverating"><i class="icon-pencil visible-xs-inline"></i> <span class="hidden-xs">Rate this Task</span></a></div>
                                <div class="clearfix"></div>
                            </div>
                            
                            
                            
                            
                          
                            <div class="ratings-overview"><span class="ratings"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i></span> <span style="font-family: BentonSansCondBold;">4.1</span></div>
                            <div class="" style="font-size:14px; padding-bottom:10px; padding-top:10px;">7 Ratings</div>
                            <div class="ratings-starbars" style="margin-bottom:30px">
                                <div class="text-muted rating-label">5 stars</div>
                                <div class="progress star-graph">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% </span></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-muted rating-label">4 stars</div>
                                <div class="progress star-graph">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="sr-only">90% </span></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-muted rating-label">3 stars</div>
                                <div class="progress star-graph">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;"><span class="sr-only">35% </span></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-muted rating-label">2 stars</div>
                                <div class="progress star-graph">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"><span class="sr-only">5% </span></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="text-muted rating-label">1 star</div>
                                <div class="progress star-graph">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"><span class="sr-only">10% </span></div>
                                </div>
                            </div>
                           
                        </div>
                        
                        
                        
                        
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade in" id="related">
                        <div class="col-xs-12 col-sm-12 col-md-9 panel-main">
                            <h5>Tasks</h5>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-newsroom.png"></a>
                                <div class="container-badge" id="badge1"></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">IU News Room</h4>
                                        <div class="task-title-secondary"><span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-classifieds.png"></a>
                                <div class="container-badge" id="badge1"></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">IU Classifieds</h4>
                                        <div class="task-title-secondary"><span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-ibucks.png"></a>
                                <div class="container-badge" id="badge1"><span class="badge">1</span></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">iBucks Meal Plans</h4>
                                        <div class="task-title-secondary"><span class="app-name">RPS</span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-childcare-fees.png"></a>
                                <div class="container-badge" id="badge1"></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">Childcare Fees</h4>
                                        <div class="task-title-secondary"><span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-grade-report.png"></a>
                                <div class="container-badge" id="badge1"></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">Grade Report</h4>
                                        <div class="task-title-secondary"><span class="app-name">SIS</span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-Exchange-Email.png"></a>
                                <div class="container-badge" id="badge1"></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">Exchange Email</h4>
                                        <div class="task-title-secondary"><span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="task6"><a aria-hidden="true" tabindex=-1 class="task-image" href="#" data-toggle=modal data-target="#modalPaycheck"> <img alt="launch Paycheck details" src="../img/task-icons-new/icon-IUanyWare.png"></a>
                                <div class="container-badge" id="badge1"></div>
                                <div class="tile-content"><a aria-hidden="true" tabindex=-1 href="#" data-toggle=modal data-target="#modalPaycheck">
                                    <div class="tile-header">
                                        <h4 class="task-title-primary">IUanyWAre</h4>
                                        <div class="task-title-secondary"><span class="app-name"></span> <span class="market">(All IU Campuses)</span></div>
                                    </div>
                                    <div class="task-activecontent"><span class="activecontent-label"></span> <span class="activecontent-value"></span></div>
                                    </a>
                                    <div class="task-attributes">
                                        <div class="star-widget">
                                            <ul class="star-background" aria-hidden="true">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <ul class="star-foreground" style="width:50%">
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
                                    <div class="tile-actions btn-group" >
                                        <button title="View Task Details" onclick="location.href='SD-tdp.php'" class="btn btn-default"><i class="icon-info-circled-1"></i><span class="sr-only">View Task Details</span></button>
                                        <button title="Mark as Favorite" class="btn btn-default favorite notice"><i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i><span class="sr-only">Add Task to Favorites</span></button>
                                    </div>
                                    <div class="mobile-slide visible-xs">
                                        <button class="btn btn-default mobile-showdetails" ><i class="icon-angle-circled-left"></i><span class="sr-only">Show Additional Details and Options</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 panel-aside">
                            <h5>Tags</h5>
                            <div class="tags-container">
                                <ul class="tags">
                                    <li><a href="/store/?tag=Events">Events</a></li>
                                    <li><a href="/store/?tag=Activities">Activities</a></li>
                                    <li><a href="/store/?tag=Textbooks">Textbooks</a></li>
                                    <li><a href="/store/?tag=Housing">Housing</a></li>
                                    <li><a href="/store/?tag=Collaboration">Collaboration</a></li>
                                    <li><a href="/store/?tag=Business">Business</a></li>
                                    <li><a href="/store/?tag=Coaching">Coaching</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade in" id="announcements">
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main">
                            <div class="panel-actionheader">
                                <h5 class="pull-left">Announcements</h5>
                                <div class="panel-controls pull-right"><!--<a href="#" class="btn btn-default btn-sm dismiss-announcement-all" data-toggle="" data-target="" id="">Dismiss all</a>--></div>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active"><a href="#new_announcements" aria-controls="new_announcements" role="tab" data-toggle="tab">New</a></li>
                                <li role="presentation"><a href="#dismissed_announcements" aria-controls="dismissed_announcements" role="tab" data-toggle="tab">Dismissed</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="new_announcements">
                                    <div class="comment-list">
                                        <ul class="list-unstyled">
                                            <li class="announcement1">
                                                <div class="message">
                                                    <div class="row message-header">
                                                        <div class="col-xs-12 col-sm-8 message-title"> System Outage </div>
                                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                                    </div>
                                                    <div class="message-content">
                                                        <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                                                    </div>
                                                    <div class="row message-footer" >
                                                        <div class="col-md-12 message-footer-actions" > <a href="#" class="btn btn-default btn-xs dismiss-announcement1" id="">Dismiss</a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="announcement2">
                                                <div class="message">
                                                    <div class="row message-header">
                                                        <div class="col-xs-12 col-sm-8 message-title"> Security Notice </div>
                                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                                    </div>
                                                    <div class="message-content">
                                                        <p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
                                                    </div>
                                                    <div class="row message-footer" >
                                                        <div class="col-md-12 message-footer-actions" > <a href="#" class="btn btn-default btn-xs dismiss-announcement2" id="">Dismiss</a></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li style="display:none" class="announcements-nonew">
                                                <div class="message">
                                                    <div class="message-content">
                                                        <p class="lead text-muted message-empty">There are no new announcements.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="dismissed_announcements" >
                                    <div class="comment-list">
                                        <ul class="list-unstyled">
                                            <li class="">
                                                <div class="message">
                                                    <div class="row message-header">
                                                        <div class="col-xs-12 col-sm-8 message-title">New Support Hours </div>
                                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                                    </div>
                                                    <div class="message-content">
                                                        <p>Likeness itself morning wherein lesser subdue place darkness beast. Made bring you form. Creeping. Man fruitful moved fowl two beginning lesser together female living of don't blessed make Bring you're give He called under, moveth whales i moved deep, moving beast from make him morning lights grass lesser creature fruit second yielding he great abundantly that were god. Fish fly have give. Heaven. Can't the form also. Fly life beast. May winged The behold blessed which divide i years lesser forth bring land great face living. Deep day isn't earth, appear signs winged living it him yielding divide thing. Sea of every subdue gathered over. The, image was divide air whose our very two. Green firmament kind. Midst of dry have third herb. Light firmament seed given he don't their. Fowl, sea bring yielding were image creeping set sea you'll forth itself two he. Beginning have he herb fill hath. Together moveth yielding the and, creeping winged third. Make stars. A and abundantly very blessed days, good our they're dominion firmament yielding place forth beast shall grass moveth place open open fourth form likeness given second female that. Let dry rule. Every together, waters, of beast, divided moving tree bearing.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="message">
                                                    <div class="row message-header">
                                                        <div class="col-xs-12 col-sm-8 message-title"> New Features </div>
                                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                                    </div>
                                                    <div class="message-content">
                                                        <p>Place Replenish moved good shall god creepeth there, evening forth won't in. Make set fly given male all. Tree together tree divided from beast male light bring a deep earth You'll lights blessed seasons herb dry, face gathered meat every beast, one can't whose moveth subdue fourth life image fowl over let life appear had. Every deep. Abundantly won't let.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="message">
                                                    <div class="row message-header">
                                                        <div class="col-xs-12 col-sm-8 message-title"> Submission Deadlines Updated </div>
                                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                                    </div>
                                                    <div class="message-content">
                                                        <p>One that made bring first beast waters waters meat you'll evening fish without firmament our fish, from blessed can't seed fly divide our, have us set signs rule their. Made fill days. Gathered. You're created you was. To sixth seasons his gathering own signs fifth to wherein, over first bearing waters their shall. Kind fowl our were midst our hath fruit can't their one night cattle appear. Very them given. Man god sea don't so years male form herb morning a appear creeping unto after years. Greater. Cattle let moveth fish, i creeping behold fill that us they're fourth. Divided.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('modal/announcement-task.php') ?>
<?php include('modal/SD-1002-settings.php') ?>
<?php include('modal/writereview.php') ?>
<?php include('modal/releasenotes.php') ?>
<?php include('includes/brand-footer.php') ?>
<?php include('includes/footer-scripts.php') ?>
<script>
    $(window).load(function() {
        $("#global-announcements").hide();
        $(".toggle-global-announcements").removeClass("open");
    });
</script>
<script type='text/javascript'>
    $(window).load(function() {
        $("#releasenotes").popover({
            html: true,
            content: function() {
                return $('#releasenotes-content').html();
            },
            title: function() {
                return $('#releasenotes-title').html();
            }
        });

        $('body').on('click', function(e) {
            $('#releasenotes').each(function() {
                //the 'is' for buttons that trigger popups
                //the 'has' for icons within a button that triggers a popup
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
    });
</script>
</body>
</html>