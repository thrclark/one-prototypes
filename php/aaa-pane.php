


<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<?php include('includes/scripts.php') ?>
<style>



</style>
</head>
<body id="top">
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
                        <a href="#" class="btn btn-default">
                        <div>Level11111</div></a> <a href="#" class="btn btn-default">
                        <div>Level22222</div></a> <a href="#" class="btn btn-default">
                        <div>Level33333</div></a> <div class="btn">
                        <div>Level4444</div></div> </nav>
                  
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
        <div class="tcptdp-header">
            <div class="media-left hidden-sm hidden-xs"><img src="../img/task-icons-new/icon-classifieds.png" alt=""></div>
            <div class="media-body">
                <h2 class="media-heading">Classifieds</h2>
                <div class="media-heading-secondary"><span class="application">Kuali</span> <span class="market">(IUPUI <span class="hidden-xs">Indianapolis</span>) </span></div>
                <div class="ratings hidden-xs hidden-sm"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> (7)</div>
                <div class="controls"><a href="#" class="btn btn-default favorite notice"> <i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i> <span class="sr-only">Favorite</span></a> <a href="#" class="btn btn-primary" data-toggle=modal data-target="#modalClassifieds"> <i class="icon-play-circled2"></i> <span class="">Start</span></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-headers nav-tabs-responsive">
                    <li class="active"><a href="#tab1" data-toggle=tab>Tab 1</a></li>
                    <li><a href="#tab2" data-toggle=tab>Tab 2</a></li>
                    <li><a href="#tab3" data-toggle=tab>Tab 3</a></li>
                    <li><a href="#tab4" data-toggle=tab>Tab 4</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="col-xs-12 col-sm-12 col-md-9 panel-main">
                            <div class="panel-actionheader">
                                <h5 class="pull-left">Title</h5>
                                <div class="panel-controls pull-right"><a href="#" class="btn btn-default btn-sm" >Control</a></div>
                                <div class="clearfix"></div>
                            </div>
                            <p> Content</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 panel-aside">
                            <h5>Title</h5>
                            <p> Content</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade in" id="tab2">
                        <div class="col-xs-12 col-sm-12 col-md-9 panel-main">
                            <div class="panel-actionheader">
                                <h5 class="pull-left">Title</h5>
                                <div class="panel-controls pull-right"><a href="#" class="btn btn-default btn-sm" >Control</a></div>
                                <div class="clearfix"></div>
                            </div>
                            <p> Content</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 panel-aside">
                            <h5>Title</h5>
                            <p> Content</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade in " id="tab3">
                        <div class="col-xs-12 col-sm-12 col-md-9 panel-main">
                            <h5>Title</h5>
                            <p> Content</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 panel-aside">
                            <h5>Title</h5>
                            <p> Content</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane fade in " id="tab4">
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main">
                            <h5>Title</h5>
                            <p> Content</p>
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/brand-footer.php') ?><?php include('includes/footer-scripts.php') ?>


</body>
</html>