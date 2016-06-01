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
	font-style: italic
}


</style>
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
                    <nav class="btn-group btn-breadcrumb" task-title="Travel direct deposit"aria-hidden="false"><a href="SD-global-announce5.php" class="btn btn-default" title="Home" tabindex="0"><i class="icon-home-2"></i><span class="sr-only">Home</span></a><a class="btn btn-default seemore" tabindex="0"><span aria-hidden="true">…</span><span class="sr-only"></span></a><a href="SD-global-announce5-sr.php" class="btn btn-default entry" tabindex="0">
                        <div  title="Search Results"><span>Search Results</span></div>
                        </a>
                        <div class="btn">
                            <div title="New Student Orientation"><span>New Student Orientation</span></div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="SD-global-announce5-viewall.php" class="toggle-global-announcements open"><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>
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
        <div class="tcptdp-header">
            <div class="media-left hidden-sm hidden-xs">
                <div class="collage"> <img alt="" src="../img/task-icons-new/icon-childcare-fees.png"> <img alt="" src="../img/task-icons-new/icon-code-of_conduct.png"> <img alt="" src="../img/task-icons-new/icon-address.png"> <img alt="" src="../img/task-icons-new/icon-email-managment.png"> <img alt="" src="../img/task-icons-new/icon-account-creation.png"> <img alt="" src="../img/task-icons-new/icon-iucat.png"> <img alt="" src="../img/task-icons-new/icon-resident.png"> <img alt="" src="../img/task-icons-new/icon-parking.png"> <img alt="" src="../img/task-icons-new/icon-time.png"> </div>
            </div>
            <div class="media-body">
                <h2 class="media-heading">New Student Orientation</h2>
                <div class="media-heading-secondary"> <span class="market">(IUPUI <span class="hidden-xs">Indianapolis</span>) </span> </div>
                <div class="controls"> <a href="#" class="btn btn-default favorite notice"> <i class="icon-heart-empty"></i><i class="icon-heart" style="display:none; color:#eba2a3"></i> <span class="sr-only">Favorite</span></a> </div>
            </div>
        </div>
        <div class="row tcp-tabs">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-headers nav-tabs-responsive">
                    <li class="active"><a href="#tab1" data-toggle=tab>Description</a></li>
                    <li><a href="#tab2" data-toggle=tab> Announcements
                        <div class="container-badge" id="announcement-counter"><span class="badge">1</span></div></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane in active" id="tab1">
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main">
                            <h5>Description</h5>
                            <p > <span id="tcp-desc" >Brought meat years them. Place. Saw light blessed also their blessed days were sea fill life, made gathering darkness appear sea two after there wherein the called made, wherein dry fly rule shall fill night herb saying firmament moving day So Every every Every years he fruit had green under evening was our god fill. Stars day seasons image behold creeping, face. Fruitful that cattle likeness. Together moving his fruitful from above heaven fly lights and replenish seasons, darkness isn't, have tree firmament signs Called had above. First sea herb gathered creeping our evening, us, divided. All said morning meat.</span> </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="col-xs-12 col-sm-12 col-md-12 panel-main">
                            <div class="panel-actionheader">
                                <h5 class="pull-left">Announcements</h5>
                                <div class="panel-controls pull-right"><!--<a href="#" class="btn btn-default btn-sm dismiss-announcement-all" data-toggle="" data-target="" id="">Dismiss all</a>--></div>
                                <div class="clearfix"></div>
                            </div>
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active"><a href="#new_announcements" aria-controls="new_announcements" role="tab" data-toggle="tab" >New</a></li>
                                <li role="presentation"><a href="#dismissed_announcements" aria-controls="dismissed_announcements" role="tab" data-toggle="tab" >Dismissed</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in active" id="new_announcements">
                                    <div class="comment-list">
                                        <ul class="list-unstyled">
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
                                <div role="tabpanel" class="tab-pane " id="dismissed_announcements">
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
                    <?php include('includes/tasks.php') ?>
                </div>
            </div>
        </div>
        <div data-ng-repeat="taskCollection in store.tasks.taskCollections" class="task-collection"> </div>
    </div>
</div>
<?php include('modal/announcement-classifieds.php') ?>
<?php include('modal/announcement-tcp-dismissed.php') ?>
<?php include('modal/announcement-tcp.php') ?>
<?php include('modal/SD-1002-settings.php') ?>
<?php include('modal/writereview.php') ?>
<?php include('includes/brand-footer.php') ?><?php include('includes/footer-scripts.php') ?>


  
<script>
$('#tcp-desc').readmore({
  speed: 200,
  collapsedHeight: 40,
  moreLink: '<a href="#"><em>view more...</em></a>',
  lessLink: '<a href="#"><em>view less</em></a>'
});
  </script> <script>
$( ".dismiss1" ).click(function() {
  $( "#badge1" ).hide( );
});
</script> 

</body>
</html>