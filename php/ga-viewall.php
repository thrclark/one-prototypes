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
.global-announcements .global-announcement {
	position: relative
}
</style>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" style=" background-color:#FFFFFF" >
<div class="wrapper">
    <div class="alert alert-application" role="alert" style="display:none">
        <div class="container">
            <div class="row">
                <div class="hidden-xs col-sm-3 col-md-2 col-lg-1 text-center"> <i class="icon-attention-circled"></i></div>
                <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
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
    <section class="utilities-bar">
        <div class="container">
            <nav class="navbar navbar-default"  style="margin-bottom:0px">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <nav class="btn-group btn-breadcrumb" > <a href="store.php" class="btn btn-default"><i class="icon-home-2"></i><span class="sr-only">Home</></a>
                            <div class="btn btn-default seemore" style="">...</div>
                            <div class="btn">
                                <div>Announcements</div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="sdfgsdfg"  style="color:#CCCCCC"><i class="icon-bell-3"></i> <span class="sr-only">Notifications</span></a> </li>
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
    <section id="global-announcements" class="global-announcements" style=" display:; background: #ffffff; min-height:;-webkit-box-shadow: inset 0 20px 15px -20px rgba(0,0,0,0.1);-moz-box-shadow: inset 0 20px 15px -20px rgba(0,0,0,0.1);box-shadow: inset 0 20px 15px -20px rgba(0,0,0,0.1);border-top: solid 1px #ebebeb;">
        <div class="container" style="padding-top: 20px;padding-bottom: 10px;">
            <div class="category" style="margin-bottom:-1px; border-bottom: none">
                <div class="row">
                    <div class="col-xs-10">
                        <h3>Announcements</h3>
                    </div>
                    <div class="col-xs-2 text-right"> </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-4">
                        <div class="global-announcement color1">
                            <div class="ga-header"> Class Registration Begins Today <a href="#" class="close"> <i class="icon-cancel-1"></i> <span class="sr-only">close</span></a></div>
                            <div class="ga-body">
                                <div>
                                    <p>Spring term 2016 is open. Check your email for information on your registration appointment. Register early and get the classes you need.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color2">
                            <div class="ga-header"> Telephone Service Disruption <a href="#" class="close"> <i class="icon-cancel-1"></i> <span class="sr-only">close</span></a></div>
                            <div class="ga-body">
                                <div>
                                    <p>Campus telephone services are currently experiencing intermittent disruptions. IT Services is aware of the issue, and are working to resolve it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color3">
                            <div class="ga-header"> Textbook Order Deadline <a href="#" class="close"> <i class="icon-cancel-1"></i> <span class="sr-only">close</span></a></div>
                            <div class="ga-body">
                                <div>
                                    <p>If you are placing a textbook order for the Summer 2016 session, the last day to do so will be this Friday, May 13th.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category" style="margin-bottom:-1px; border-bottom: none">
                <div class="row">
                    <div class="col-xs-10">
                        <h3>Dismissed Announcements </h3>
                    </div>
                    <div class="col-xs-2 text-right"> </div>
                </div>
                <div class="row" style="margin-top:20px">
                    <div class="col-md-4">
                        <div class="global-announcement color1">
                            <div class="ga-header"> Class Registration Begins Today</div>
                            <div class="ga-body">
                                <div>
                                    <p>Spring term 2016 is open. Check your email for information on your registration appointment. Register early and get the classes you need.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color2">
                            <div class="ga-header"> Textbook Order Deadline</div>
                            <div class="ga-body">
                                <div>
                                    <p>If you are placing a textbook order for the Summer 2016 session, the last day to do so will be this Friday, May 13th.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color3">
                            <div class="ga-header"> Textbook Order Deadline</div>
                            <div class="ga-body">
                                <div>
                                    <p>If you are placing a textbook order for the Summer 2016 session, the last day to do so will be this Friday, May 13th.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color4">
                            <div class="ga-header"> Buy it? Sell it? Classifieds!</div>
                            <div class="ga-body">
                                <div>
                                    <p>IU Classifies is the place to find what you need, sell what you don't need. Easy browsing of ads, and quick posting of your own ads. Check it out!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color5">
                            <div class="ga-header"> Spring Break Campus Hours </div>
                            <div class="ga-body">
                                <div>
                                    <p>During the week of spring break, general offices of the campus will have restricted hours of operation. Please check your area offices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="global-announcement color6">
                            <div class="ga-header"> Spring Break Campus Hours </div>
                            <div class="ga-body">
                                <div>
                                    <p>During the week of spring break, general offices of the campus will have restricted hours of operation. Please check your area offices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include ('modal/announcement-task.php') ?>
    <?php include ('modal/announcement-taskcenter.php') ?>
    <?php include ('modal/SD-1002-settings.php') ?>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <script>
$( ".toggle-global-announcements" ).click(function() {
  $( "#global-announcements" ).slideToggle( "slow" );
});
</script> 
    <script>

$(document).ready(function() {

$('.divider').on('hide.bs.dropdown', function () {
    return false;
});



});


</script> 
</div>
</body>
</html>
