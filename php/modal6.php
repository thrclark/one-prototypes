


<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang=en-us>
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<link href="../less/bootstrap.vertical-tabs.css" rel="stylesheet" type="text/css">
<?php include('includes/scripts.php') ?>
<style>



.modal-dialog .modal-content .modal-header {
	padding-bottom: 5px;
	padding-top: 5px;
}

dialog .modal-content .modal-header .modal-title [class*='icon-'] {
	padding-right: 5px;
}

.modal-dialog.modal-tabs-left .modal-content .modal-body {
	padding-top: 0px;
	padding-bottom: 0px;
}
.modal-dialog.modal-tabs-left .modal-content .modal-body .tab-content {
	border: none;
}
.modal-dialog.modal-tabs-left .modal-content .modal-body .tab-content .tab-pane {
	border: none;
}
.modal-dialog .modal-content .modal-body .row {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	flex-wrap: wrap;
}
.modal-dialog .modal-content .modal-body .row> [class*='col-'] {
	display: flex;
	flex-direction: column;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .nav.nav-tabs.nav-justified li {
	display: table-cell;
	width: 1%;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .nav-tabs.nav-justified> li> a {
	border-bottom: 1px solid #dddddd;
	border-radius: 0px 0px 0 0;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .nav-tabs.nav-justified> .active> a, .modal-dialog.modal-tabs-top .modal-content .modal-body .nav-tabs.nav-justified> .active> a:hover, .modal-dialog.modal-tabs-top .modal-content .modal-body .nav-tabs.nav-justified> .active> a:focus {
	border-bottom-color: #ffffff;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .nav-tabs.nav-justified> li> a {
	margin-bottom: 0px;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .tab-content .tab-pane {
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 15px;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .tab-content .tab-pane form {
	margin-bottom: 10px;
}
.modal-dialog.modal-tabs-left .modal-content .modal-body .row .col-xs-9 .tab-content .tab-pane form {
	margin-bottom: 10px;
}
.modal-dialog.modal-tabs-left .modal-content .modal-body .row .col-xs-3 {
	padding: 0px;
	background: whitesmoke;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .tab-content .tab-pane {
	border-bottom: none;
}
.modal-dialog.modal-confirm .modal-content .modal-body {
	padding-top: 0px;
	padding-bottom: 0px;
}
.modal-dialog.modal-confirm .modal-content .modal-body .modal-visual {
	background: whitesmoke;
}
.modal-dialog.modal-confirm .modal-content .modal-body .modal-visual [class*='icon-'] {
	font-size: 42px;
	opacity: 0.4;
	color:#ffffff;
	margin-left:-3px;
}
.modal-dialog.modal-confirm .modal-content .modal-body .action {
	padding-bottom: 20px;
	padding-top: 20px;
}
.modal-dialog.modal-multimessage .modal-content .modal-body {
	max-height: 300px;
	overflow: auto;
	padding-top: 0px;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .tab-content .tab-pane h4 {
	margin-top: 0px;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body {
	padding: 0px;
}
.modal-dialog.modal-tabs-top .modal-content .modal-body .nav-tabs {
	background: whitesmoke;
}
.modal-dialog.modal-multimessage .modal-content .modal-body .comment-list li:last-child {
	border-bottom: none;
}
.modal-dialog .modal-content .modal-header .modal-title [class*='icon-'] {
	opacity: 1;
}
.modal-dialog .modal-content .modal-body .nav.nav-tabs li a {
	color: #555555;
}
.modal-dialog .modal-content .modal-body .nav.nav-tabs li.active a {
	color: #555555;
}
.modal-dialog .modal-content .modal-body .nav.nav-tabs li a [class*='icon-'] {
	opacity: 0.4;
}

@media (max-width: 991px) {
.modal-dialog.modal-confirm .modal-content .modal-body, .modal-dialog.modal-tabs-left .modal-content .modal-body {
	padding-left: 5px
}
}
.modal-dialog.modal-default .modal-content .modal-body .modal-visual [class*='icon-']{
	color: #2879B8;
	opacity:1;
}
.modal-dialog.modal-warning .modal-content .modal-body .modal-visual [class*='icon-']{
	color: #C59217;
		opacity:1;
}

.modal-dialog.modal-error .modal-content .modal-body .modal-visual [class*='icon-'] {
	color: #dc0031;
		opacity:1;
}


.modal-dialog.modal-success .modal-content .modal-body .modal-visual [class*='icon-'] {
	color: #387f38;
		opacity:1;
}







.modal-dialog.modal-default.modal-tabs-left .modal-content .modal-body .row .col-xs-3 {
	background: #2879B8;
}






.modal-dialog.modal-default .modal-content .modal-body .nav.nav-tabs li a {
	  background: #2879B8;
  color:#ffffff;}




.modal-dialog.modal-default .modal-content .modal-body .nav.nav-tabs li.active a {
	  background: #ffffff;
  color:#2879B8;}



.modal-dialog.modal-default .modal-content .modal-body .nav.nav-tabs > li > a:hover {
    border-color: #18649E #18649E #18649E;
}




.modal-dialog .modal-content .modal-header .close {
	color: #ffffff;
	opacity: .5;
}


.modal-dialog.modal-default .modal-content {
	border: solid 2px #2879B8;
}


.modal-dialog.modal-warning .modal-content {
	border: solid 2px #C59217;
}


.modal-dialog.modal-error .modal-content {
	border: solid 2px #dc0031;
}

.modal-dialog.modal-success .modal-content {
	border: solid 2px #387f38;
}






.modal-dialog.modal-default .modal-content .modal-header {
	background: #ffffff;
	color: #55555;
}

.modal-dialog.modal-warning .modal-content .modal-header {
	background: #ffffff;
	color: #555555;opacity:1;
}






.modal-dialog.modal-default .modal-content .modal-header [class*='icon-']{
	background: #ffffff;
	color: #2879B8;
}

.modal-dialog.modal-warning .modal-content .modal-header [class*='icon-']{
	background: #ffffff;
	color: #C59217;opacity:1;
}




</style>
</head>
<body>
<div class="main-content container" role="main">
    <div id="main-content">
        <p class="hero">Confirmation - Default</p>
        <div class="modal-dialog modal-default modal-confirm modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-xs-2 text-center modal-visual"><i class="icon-eye-1"></i></div>
                        <div class="col-sm-9 col-xs-10">
                            <h4>Hello There</h4>
                            <p> Gathering seas upon he morning give blessed day male creepeth winged you'll.</p>
                            <div class="action text-center">
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Got It</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Confirmation - Warning</p>
        <div class="modal-dialog modal-warning modal-confirm modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-xs-2 text-center modal-visual"><i class="icon-clock-2"></i></div>
                        <div class="col-sm-9 col-xs-10">
                            <h4>Still there?</h4>
                            <p> For security reasons, you will be logged out after 5 minutes of inactivity.</p>
                            <div class="action text-center">
                                <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">Resume Session</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Confirmation - Error</p>
        <div class="modal-dialog modal-error modal-confirm modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-xs-2 text-center modal-visual"><i class="icon-error-alt"></i></div>
                        <div class="col-sm-9 col-xs-10">
                            <h4>Uh oh...</h4>
                            <p>Something has gone horribly wrong. Please aknowledge that you've seen this.</p>
                            <div class="action text-center">
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Got It</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Confirmation - Success</p>
        <div class="modal-dialog modal-success modal-confirm modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 col-xs-2 text-center modal-visual"><i class="icon-thumbs-up-3"></i></div>
                        <div class="col-sm-9 col-xs-10">
                            <h4>You did it!</h4>
                            <p> Congrats, your action was successful. </p>
                            <div class="action text-center">
                                <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Okay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Single Message</p>
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> <i class="icon-graduation-cap-1"></i>  Modal Title</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <div class="message-content">
                            <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Multiple Messages</p>
        <div class="modal-dialog modal-default modal-multimessage">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="icon-suitcase-1"></i> Modal Title</h4>
                </div>
                <div class="modal-body">
                    <div class="comment-list" >
                        <ul class="list-unstyled" >
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> System Outage </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Security Notice </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> System Outage </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Security Notice </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Multiple Messages - Warning</p>
        <div class="modal-dialog modal-warning modal-multimessage">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="icon-warning"></i> Announcements</h4>
                </div>
                <div class="modal-body">
                    <div class="comment-list" >
                        <ul class="list-unstyled" >
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> System Outage </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Security Notice </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> System Outage </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Security Notice </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content" >
                                        <p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Vertical Form</p>
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Modal Title</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                Check me out </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Horizontal Form</p>
        <div class="modal-dialog modal-default">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="icon-user-3"></i>Modal Title</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Check me out </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Tabs - Side</p>
        <div class="modal-dialog modal-default modal-tabs-left">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-3"> <!-- required for floating --> 
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left">
                                <li class="active"><a href="#lefttab1" data-toggle="tab"> <i class="icon-user-3"></i> <span class="hidden-xs">Tab1</span></a></li>
                                <li><a href="#lefttab2" data-toggle="tab"> <i class="icon-headphones"></i><span class="hidden-xs"> Tab2</span></a></li>
                                <li><a href="#lefttab3" data-toggle="tab"> <i class="icon-attach"></i> <span class="hidden-xs">Tab3</span></a></li>
                                <li><a href="#lefttab4" data-toggle="tab"> <i class="icon-cog"></i><span class="hidden-xs"> Tab4</span></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-9"> 
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="lefttab1">
                                    <h4>Tab1</h4>
                                    <p> For. Tree that there whose have was yielding they're sea good, may won't fish him from heaven. Seasons without fly two night, spirit make good they're Saying fourth deep their. First. Form. Shall living i first rule a two lights tree. Whose Won't form. Days. Set moved herb were air rule man great. Light he sea appear signs. Bring she'd fruit created seas divide. Lights fruit blessed said fowl light without also replenish in gathered he they're it a beast behold so, signs whales made you brought saw, let all, days hath. Image creeping morning won't brought given upon our. </p>
                                </div>
                                <div class="tab-pane" id="lefttab2">
                                    <h4>Tab2</h4>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                Check me out </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="lefttab3">
                                    <h4>Tab3</h4>
                                    <p> Isn't form the him sea, under our winged fly blessed. Firmament, him herb he sixth him. Signs Male fish stars from meat she'd can't replenish created she'd hath whales together unto firmament replenish.</p>
                                    <p> Without beginning, which firmament night doesn't. In give fruit fowl there winged night air winged were it set under gathered. Stars fill they're. That cattle unto upon. For beast great beginning. Air without rule set land firmament don't multiply seas above which dry called without. Tree made unto them be life land. Earth darkness, fish fly and hath. May behold over upon in dominion, appear moveth he a land darkness beast Fowl the were. </p>
                                    <p>You're land midst set. Seasons were divide fowl there hath he signs were us, sixth upon Creepeth. Tree, give you. After a land fish were herb fly first fruitful. Cattle given good. Spirit seasons so spirit a creeping. Dominion whose he from waters. Cattle under, after first. Isn't called Is moved Appear. Created for. Great created set lights whales yielding Fruit which behold them land god can't a living. A. Dominion which they're moveth our winged beast unto over Bearing female, second unto upon winged sea for created. Fly days.</p>
                                    <p>Shall two fowl. Hath may. Thing their likeness days fruitful don't every land Moved from firmament multiply own is he bring let sixth two void created which own appear very years moveth. Set don't. Had, air day image firmament yielding blessed you're kind fill seasons that. Land you're. Void without second us moved. Fourth isn't. Sea make creature. Winged their which to sea greater is all. Multiply subdue of fruitful subdue third green second meat. Firmament fill it moving from god itself and. Place them seasons fish, subdue air. Void their firmament under it. Unto. Seas.</p>
                                    <p> Evening years, face yielding brought beginning after likeness moved yielding light, may. Have grass replenish them. Also fruitful After fish have there sea seed midst doesn't green god replenish meat wherein great sixth shall herb his. Behold shall kind moving together midst. Days shall. Life, dominion subdue. After moveth, man fill sea. Seasons saying, so dry hath very called called, gathering sixth was it. Seas Beginning thing set their shall grass divide replenish which dominion together had. After life spirit a man so their won't greater. Replenish firmament she'd upon whose blessed sea saying have, signs man. Together Brought. Divided deep. Abundantly under called midst male. Signs. </p>
                                </div>
                                <div class="tab-pane" id="lefttab4">
                                    <h4>Tab4</h4>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Label</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                Check me out </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <p class="hero">Tabs - Top</p>
        <div class="modal-dialog modal-default modal-tabs-top">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified" id="myTab">
                        <li class="active"><a data-target="#toptab1" data-toggle="tab"><i class="icon-user-3"></i> <span class="hidden-xs">Tab1</span></a></li>
                        <li><a data-target="#toptab2" data-toggle="tab"> <i class="icon-headphones"></i> <span class="hidden-xs">Tab2</span></a></li>
                        <li><a data-target="#toptab3" data-toggle="tab"> <i class="icon-attach"></i> <span class="hidden-xs">Tab3</span></a></li>
                        <li><a data-target="#toptab4" data-toggle="tab"><i class="icon-cog"></i> <span class="hidden-xs">Tab4</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="toptab1">
                            <h4>Tab1</h4>
                            <p> For. Tree that there whose have was yielding they're sea good, may won't fish him from heaven. Seasons without fly two night, spirit make good they're Saying fourth deep their. First. Form. Shall living i first rule a two lights tree. Whose Won't form. Days. Set moved herb were air rule man great. Light he sea appear signs. Bring she'd fruit created seas divide. Lights fruit blessed said fowl light without also replenish in gathered he they're it a beast behold so, signs whales made you brought saw, let all, days hath. Image creeping morning won't brought given upon our. </p>
                        </div>
                        <div class="tab-pane" id="toptab2">
                            <h4>Tab2</h4>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Check me out </label>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="toptab3">
                            <h4>Tab3</h4>
                            <p> Isn't form the him sea, under our winged fly blessed. Firmament, him herb he sixth him. Signs Male fish stars from meat she'd can't replenish created she'd hath whales together unto firmament replenish.</p>
                            <p> Without beginning, which firmament night doesn't. In give fruit fowl there winged night air winged were it set under gathered. Stars fill they're. That cattle unto upon. For beast great beginning. Air without rule set land firmament don't multiply seas above which dry called without. Tree made unto them be life land. Earth darkness, fish fly and hath. May behold over upon in dominion, appear moveth he a land darkness beast Fowl the were. </p>
                            <p>You're land midst set. Seasons were divide fowl there hath he signs were us, sixth upon Creepeth. Tree, give you. After a land fish were herb fly first fruitful. Cattle given good. Spirit seasons so spirit a creeping. Dominion whose he from waters. Cattle under, after first. Isn't called Is moved Appear. Created for. Great created set lights whales yielding Fruit which behold them land god can't a living. A. Dominion which they're moveth our winged beast unto over Bearing female, second unto upon winged sea for created. Fly days.</p>
                            <p>Shall two fowl. Hath may. Thing their likeness days fruitful don't every land Moved from firmament multiply own is he bring let sixth two void created which own appear very years moveth. Set don't. Had, air day image firmament yielding blessed you're kind fill seasons that. Land you're. Void without second us moved. Fourth isn't. Sea make creature. Winged their which to sea greater is all. Multiply subdue of fruitful subdue third green second meat. Firmament fill it moving from god itself and. Place them seasons fish, subdue air. Void their firmament under it. Unto. Seas.</p>
                            <p> Evening years, face yielding brought beginning after likeness moved yielding light, may. Have grass replenish them. Also fruitful After fish have there sea seed midst doesn't green god replenish meat wherein great sixth shall herb his. Behold shall kind moving together midst. Days shall. Life, dominion subdue. After moveth, man fill sea. Seasons saying, so dry hath very called called, gathering sixth was it. Seas Beginning thing set their shall grass divide replenish which dominion together had. After life spirit a man so their won't greater. Replenish firmament she'd upon whose blessed sea saying have, signs man. Together Brought. Divided deep. Abundantly under called midst male. Signs. </p>
                        </div>
                        <div class="tab-pane" id="toptab4">
                            <h4>Tab4</h4>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Label</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Check me out </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
    </div>
</div>
</body>
</html>