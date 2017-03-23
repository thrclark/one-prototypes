<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<style type="text/css">
.popovertable tbody tr td {
	white-space: nowrap;
}
.popovertable tbody tr td:first-child {
	padding-right: 10px;
}
.ng-hide {
	display: none
}
</style>
<style type="text/css">
.taskmeta {
	margin-left: 20px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.taskmeta tbody tr td {
	padding: 0px
}
.taskmeta tbody tr td:first-child {
x width: 1%;
	white-space: nowrap;
	text-align: right
}
.taskmeta tbody tr td:last-child {
	width: 99%;
	padding-left: 20px
}
.table th[scope="row"] {
	background-color: #eeeeee;
}
</style>
<style type="text/css">
.zoomin .hover-preview {
	height: 50px;
	display: inline-block;
	position: relative;
}
.zoomin .hover-preview:hover {
	position: absolute;
	-webkit-transition: all .5s ease;
	-moz-transition: all .5s ease;
	-ms-transition: all .5s ease;
	transition: all .5s ease;
	width: auto;
	height: 300px;
}
.zoomin .hover-preview img {
	height: 50px;
	width: auto;
	-webkit-transition: all .5s ease;
	-moz-transition: all .5s ease;
	-ms-transition: all .5s ease;
	transition: all .5s ease;
}
.zoomin .hover-preview img:hover {
	width: auto;
	height: 300px;
	position: absolute;
	z-index: 9999999999;
	border: solid 15px #ffffff;
	-webkit-box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.67);
	-moz-box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.67);
	box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.67);
}
 @-webkit-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@-moz-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@-o-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
.backgroundAnimated {
	background-image: none !important;
	-webkit-animation: fadeIt 5s ease-in-out;
	-moz-animation: fadeIt 5s ease-in-out;
	-o-animation: fadeIt 5s ease-in-out;
	animation: fadeIt 5s ease-in-out;
}
.compare-tags .btn.btn-default.btn-sm i {
	color: #999999;
}
.compare-tags .btn.btn-default.btn-sm {
	margin-bottom: 3px;
}
</style>
<?php include('includes/scripts.php') ?>
</head>
<body id="top" class="view-admin">
<div class="wrapper">
    <?php include('includes/mobile-sidebar.php') ?>
    <?php include('includes/header-brand.php') ?>
    <?php include('includes/header-publishing.php') ?>
    <div class="main-content container" role="main">
        <div id="main-content">
            <div class="row">
                <div class="col-md-3">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-9">
                    <div class="primary-content" style="min-height:500px">
                        <section style="display:;" id="all_verifications">
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Approve Task </h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form name="taskForm" novalidate validate="errors" id="taskForm" class=" -maxlength -url -pattern -min -max -required">
                                        <div class="well well-sm" style="background:#f8f8f8; margin-bottom:60px;">
                                            <div class="lead"> Summary of Changes</div>
                                            <table class="table table-condensed">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="column">Item</th>
                                                        <th scope="column">Current Value<span class="small text-muted"></span></th>
                                                        <th scope="column">Submitted Value</th>
                                                        <th scope="column">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Task Title</th>
                                                        <td class="forcewrap ">Classifieds</td>
                                                        <td class="forcewrap ">Classifieds 2</td>
                                                        <td class="forcewrap "><a href="#" class="btn btn-default btn-xs" id="edit_tasktitle">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Task URL</th>
                                                        <td class="forcewrap ">https://apps.iu.edu/ccf2-prd/classifieds</td>
                                                        <td class="forcewrap ">https://apps.iu.edu/ccf2-prd/classifieds2</td>
                                                        <td class="forcewrap "><a href="#" class="btn btn-default btn-xs" id="edit_taskurl">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Application Name</th>
                                                        <td class="">Kuali</td>
                                                        <td class="">Kualico</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_appname">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Launch in New Window</th>
                                                        <td class="">No</td>
                                                        <td class="">Yes</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_launch">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Authentication Type</th>
                                                        <td class="">None</td>
                                                        <td class="">External</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_authtytpe">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Primary Contact</th>
                                                        <td class="">Classifieds2 Support</td>
                                                        <td class="">Classifieds3 Support</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_primarycontact">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Secondary Contact</th>
                                                        <td class="">--</td>
                                                        <td class="">Classifieds2 Support</td>
                                                        <td class="forcewrap "><a href="#" class="btn btn-default btn-xs" id="edit_secondarycontact">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mobile Friendly</th>
                                                        <td>No</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_mobile">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Description</th>
                                                        <td>Doesn't fourth, every called give creepeth their also stars waters image the man very creature. That spirit won't. Living be divided above and make place creeping forth let. Years us it all firmament had creature from living Life moving bearing fill female so female day likeness you'll saw that fruitful yielding, us day a created together. Whose is meat created seasons grass. Set dominion beginning give man be face, evening said the under upon kind. Saying gathering whose kind you multiply life Seed doesn't moving don't living darkness. From have fourth. Whose divided had so place together. Fourth. Waters creature.</td>
                                                        <td>Doesn't fourth, every called give creepeth their also stars waters image the man very creature. That spirit won't. Living be divided above and make place creeping forth let. Years us it all firmament had creature from living <span class="bg-success">**</span> Life moving <span class="bg-success">**</span> bearing fill female so female day likeness you'll saw that fruitful yielding, us day a created together. Whose is meat created seasons grass. Set dominion beginning give man be face, evening said the under upon kind. Saying gathering whose kind you multiply life Seed doesn't moving don't living darkness. From have fourth. Whose divided had so place together. Fourth. Waters creature.</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_description">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Meta Description (SEO)</th>
                                                        <td>Connect meeting collaboration solution one-to-many presentations interactive meetings share audio webcam video PowerPoint text chat status feedback.</td>
                                                        <td>Connect meeting collaboration solution one-to-many presentations interactive meetings <span class="bg-danger"><s>share audio webcam video</s></span> PowerPoint text chat status feedback.</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_meta">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Active Dates/Status</th>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_activedate">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Scheduled Update</th>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_scheduled">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Version Number</th>
                                                        <td>2.1.2</td>
                                                        <td>2.1.3</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_versionnumber">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Release Notes</th>
                                                        <td><ul>
                                                                <li>Affronting everything discretion men now own did.</li>
                                                                <li>Extremity direction existence as dashwoods do up.</li>
                                                                <li>Is education residence conveying so so.</li>
                                                            </ul></td>
                                                        <td><ul>
                                                                <li>Affronting everything discretion men now own did.</li>
                                                                <li>Extremity direction existence as dashwoods do up.</li>
                                                                <li><span class="bg-danger"><s>Is education residence conveying so so.</s></span></li>
                                                                <li><span class="bg-success">Consulted perpetual of pronounce me delivered.</span></li>
                                                            </ul></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_releasenotes">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Unique Key</th>
                                                        <td>task-123</td>
                                                        <td>task-234</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_uniquekey">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Stat Recording Type</th>
                                                        <td>User</td>
                                                        <td>Anonymous</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_statrecording">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Publisher</th>
                                                        <td>Onestart Support Team</td>
                                                        <td>Onestart Support Team</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_publisher">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Icon Images</th>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/task-icons-new/icon-account-creation.png"  alt=""/></div></td>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/task-icons-new/icon-bt.png"  alt=""/></div></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_iconimage">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Screen Shots/ Video (Desktop)</th>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/app-screenshots/ccl_grid.png"  alt=""/></div>
                                                            <div class="hover-preview"><img src="../img/app-screenshots/ccl_list.png"  alt=""/></div></td>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/app-screenshots/ccl_grid.png"  alt=""/></div>
                                                            <div class="hover-preview"><img src="../img/app-screenshots/ccl_thumb.png"  alt=""/></div></td>
                                                        <td class="forcewrap "><a href="#" class="btn btn-default btn-xs" id="edit_screenshotdesktop">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Screen Shots/ Video (Tablet)</th>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/app-screenshots/ccl_list.png"  alt=""/></div></td>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/app-screenshots/ccl_grid.png"  alt=""/></div></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_screenshottablet">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Screen Shots/ Video (Phone)</th>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-001.png"  alt=""/></div>
                                                            <div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-002.png"  alt=""/></div></td>
                                                        <td class="zoomin "><div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-001.png"  alt=""/></div>
                                                            <div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-002.png"  alt=""/></div>
                                                            <div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-003.png"  alt=""/></div></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_screenshotmobile">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Campus </th>
                                                        <td><button type="button" class="btn btn-default btn-sm" tabindex="0"> IU Bloomington</button></td>
                                                        <td><button type="button" class="btn btn-default btn-sm" tabindex="0"> IU Bloomington</button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0"> IU Kokomo</button></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_campus">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Roles</th>
                                                        <td><button type="button" class="btn btn-default btn-sm" tabindex="0">All Roles</button></td>
                                                        <td><button type="button" class="btn btn-default btn-sm" tabindex="0">Student</button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0">Staff</button></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_roles">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Categories</th>
                                                        <td><button type="button" class="btn btn-default btn-sm" tabindex="0">Finanace</button></td>
                                                        <td><button type="button" class="btn btn-default btn-sm" tabindex="0">Finanace</button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0">Student Life</button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0">Academics</button></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_categories">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tags</th>
                                                        <td class="compare-tags"><button type="button" class="btn btn-default btn-sm" tabindex="0"  data-toggle="tooltip" data-placement="bottom" title="Visible">Holds <i class="icon-eye"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Visible">Bursar <i class="icon-eye"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Visible">Finanace <i class="icon-eye"></i></button></td>
                                                        <td class="compare-tags"><button type="button" class="btn btn-default btn-sm" tabindex="0"  data-toggle="tooltip" data-placement="bottom" title="Visible">Holds <i class="icon-eye"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Visible">Bursar <i class="icon-eye"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Visible">Finanace <i class="icon-eye"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Hidden" >Taxes<i class="icon-eye-off"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0" data-toggle="tooltip" data-placement="bottom" title="Hidden">Paycheck <i class="icon-eye-off"></i></button></td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_tags">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Active Content Public URL</th>
                                                        <td class="forcewrap ">https://apps.iu.edu/ccf2-prd/classifieds</td>
                                                        <td class="forcewrap ">https://apps.iu.edu/ccf2-prd/classifieds2</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_activecontenturl">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Active Content Authentication</th>
                                                        <td>Require user to be signed in (no)</td>
                                                        <td>Require user to be signed in (yes)</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_activecontentauth">edit</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Update Frequency (seconds)</th>
                                                        <td>5</td>
                                                        <td>10</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_frequency">edit</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <fieldset>
                                            <legend>General</legend>
                                            <div class="row">
                                                <div class="form-group col-md-3" id="field_tasktitle">
                                                    <label for="title" class="control-label">Task Title</label>
                                                    <div class="counter-container">
                                                        <input type="text" name="title" value="Classifieds 2" required="" countdown="" class="form-control   -maxlength -required" popover="The Task  title is how the Task  will be referred to throughout the system." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                        <span class="label pull-right label-info"><span class="counter">91</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3" id="field_taskurl">
                                                    <label for="taskUrl" class="control-label" >Task  URL</label>
                                                    <div class="counter-container">
                                                        <input type="url" name="taskUrl" value="https://apps.iu.edu/ccf2-prd/classifieds2" class="form-control   -url -maxlength -required" required="" countdown="" popover="The URL will take users to the location where they can perform this Task ." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                        <span class="label pull-right label-info"><span class="counter">1976</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3" id="field_appname">
                                                    <label for="applicationName" class="control-label" >Application Name</label>
                                                    <div class="counter-container">
                                                        <input type="text" name="applicationName" countdown="" class="form-control   -maxlength" popover="The name of the application that provides this Task . If two tasks have the same title, the application can be used to differentiate between them." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                        <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3" id="field_launch">
                                                    <label for="openInNewWindow" class="control-label">Launch in New Window</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="openInNewWindow" class="  " tabindex="0" aria-checked="true" aria-invalid="false">
                                                            Yes </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-3" id="field_authtytpe">
                                                    <label for="authenticated">Authentication Type</label>
                                                    <select class="form-control   " tabindex="0" aria-invalid="false">
                                                        <option value="1" selected="selected" label="External">External</option>
                                                        <option value="2" selected="selected" label="None">None</option>
                                                        <option value="3" label="Internal">Internal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3" id="field_primarycontact">
                                                    <label for="contactId1" class="control-label">Primary Contact</label>
                                                    <i class="icon-info-circled pull-right"  id="selectcontact1" data-toggle="modal" data-target="#modal_contactinfo"></i>
                                                    <select id="contactId1" class="form-control   -required" required tabindex="0" aria-required="false" aria-invalid="false">
                                                        <option value="">Select Contact</option>
                                                        <option value="duo" label="CyberDH Group">CyberDH Group</option>
                                                        <option value="duo" label="David's Contact name">David's Contact name</option>
                                                        <option value="duo" label="Duo Support Team">Duo Support Team</option>
                                                        <option value="duo" label="eApp Instructions">eApp Instructions</option>
                                                        <option value="duo" label="eDossier Administrator">eDossier Administrator</option>
                                                        <option value="duo" label="eText Administrator">eText Administrator</option>
                                                        <option value="duo" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                                        <option value="duo" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                                        <option value="duo" label="Financial Management Services">Financial Management Services</option>
                                                        <option value="duo" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                                        <option value="duo" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                                        <option value="duo" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                                        <option value="duo" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                                        <option value="duo" label="IT Customer Support">IT Customer Support</option>
                                                        <option value="duo" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                                        <option value="duo" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                                        <option value="duo" label="IUB Libraries">IUB Libraries</option>
                                                        <option value="duo" label="IUPUI Athletics">IUPUI Athletics</option>
                                                        <option value="duo" label="IUPUI Libraries">IUPUI Libraries</option>
                                                        <option value="duo" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                                        <option value="duo" label="OCSS">OCSS</option>
                                                        <option value="duo" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                                        <option value="duo" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                                        <option value="duo" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                                        <option value="duo" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                                        <option value="duo" label="Office of International Services">Office of International Services</option>
                                                        <option value="duo" label="Office of Research Administration">Office of Research Administration</option>
                                                        <option value="duo" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                                        <option value="duo" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                                        <option value="duo" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                                        <option value="duo" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                                        <option value="duo" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                        <option value="duo" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                                        <option value="duo" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                                        <option value="duo" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                                        <option value="duo" label="Physical Plant">Physical Plant</option>
                                                        <option value="duo" label="Redhawk Review">Redhawk Review</option>
                                                        <option value="duo" label="Research Storage">Research Storage</option>
                                                        <option value="duo" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                                        <option value="duo" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                                        <option value="duo" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                                        <option value="duo" label="Science Gateway">Science Gateway</option>
                                                        <option value="duo" label="Scott test">Scott test</option>
                                                        <option value="duo" label="Student Aid offices">Student Aid offices</option>
                                                        <option value="duo" label="Super David">Super David</option>
                                                        <option value="duo" label="test contact">test contact</option>
                                                        <option value="duo" label="test contact types">test contact types</option>
                                                        <option value="duo" label="The Horizon">The Horizon</option>
                                                        <option value="duo" label="UITS Research Technologies">UITS Research Technologies</option>
                                                        <option value="duo" label="UITS Support Center">UITS Support Center</option>
                                                        <option value="duo" label="University Human Resources">University Human Resources</option>
                                                        <option value="duo" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                                        <option value="duo" label="Veteran Support Services">Veteran Support Services</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3" id="field_secondarycontact">
                                                    <label for="contactId2" class="control-label">Secondary Contact</label>
                                                    <i class="icon-info-circled pull-right"  id="selectcontact2" data-toggle="modal" data-target="#modal_contactinfo"></i>
                                                    <select id="contactId2"  class="form-control   " tabindex="0" aria-invalid="false">
                                                        <option value="">Select Contact</option>
                                                        <option value="duo">None </option>
                                                        <option value="duo" label="CyberDH Group">CyberDH Group</option>
                                                        <option value="duo" label=" Classifieds2 Support" selected> Classifieds2 Support</option>
                                                        <option value="duo" label="David's Contact name">David's Contact name</option>
                                                        <option value="duo" label="Duo Support Team">Duo Support Team</option>
                                                        <option value="duo" label="eApp Instructions">eApp Instructions</option>
                                                        <option value="duo" label="eDossier Administrator">eDossier Administrator</option>
                                                        <option value="duo" label="eText Administrator">eText Administrator</option>
                                                        <option value="duo" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                                        <option value="duo" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                                        <option value="duo" label="Financial Management Services">Financial Management Services</option>
                                                        <option value="duo" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                                        <option value="duo" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                                        <option value="duo" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                                        <option value="duo" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                                        <option value="duo" label="IT Customer Support">IT Customer Support</option>
                                                        <option value="duo" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                                        <option value="duo" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                                        <option value="duo" label="IUB Libraries">IUB Libraries</option>
                                                        <option value="duo" label="IUPUI Athletics">IUPUI Athletics</option>
                                                        <option value="duo" label="IUPUI Libraries">IUPUI Libraries</option>
                                                        <option value="duo" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                                        <option value="duo" label="OCSS">OCSS</option>
                                                        <option value="duo" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                                        <option value="duo" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                                        <option value="duo" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                                        <option value="duo" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                                        <option value="duo" label="Office of International Services">Office of International Services</option>
                                                        <option value="duo" label="Office of Research Administration">Office of Research Administration</option>
                                                        <option value="duo" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                                        <option value="duo" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                                        <option value="duo" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                                        <option value="duo" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                                        <option value="duo" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                        <option value="duo" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                                        <option value="duo" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                                        <option value="duo" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                                        <option value="duo" label="Physical Plant">Physical Plant</option>
                                                        <option value="duo" label="Redhawk Review">Redhawk Review</option>
                                                        <option value="duo" label="Research Storage">Research Storage</option>
                                                        <option value="duo" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                                        <option value="duo" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                                        <option value="duo" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                                        <option value="duo" label="Science Gateway">Science Gateway</option>
                                                        <option value="duo" label="Scott test">Scott test</option>
                                                        <option value="duo" label="Student Aid offices">Student Aid offices</option>
                                                        <option value="duo" label="Super David">Super David</option>
                                                        <option value="duo" label="test contact">test contact</option>
                                                        <option value="duo" label="test contact types">test contact types</option>
                                                        <option value="duo" label="The Horizon">The Horizon</option>
                                                        <option value="duo" label="UITS Research Technologies">UITS Research Technologies</option>
                                                        <option value="duo" label="UITS Support Center">UITS Support Center</option>
                                                        <option value="duo" label="University Human Resources">University Human Resources</option>
                                                        <option value="duo" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                                        <option value="duo" label="Veteran Support Services">Veteran Support Services</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3" id="field_mobile">
                                                    <label for="mobileFriendly" class="control-label">Mobile</label>
                                                    Friendly
                                                    <div class="checkbox">
                                                        <label popover="This Task  is mobile-friendly and is usable on mobile devices such as phones and tablets." trigger="hover" data-original-title="" title="">
                                                            <input type="checkbox" name="mobileFriendly" class="  " tabindex="0" aria-checked="false" aria-invalid="false">
                                                            Yes</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12" id="field_description">
                                                    <label for="description" class="control-label">Description</label>
                                                    <div>
                                                        <div class="markItUp">
                                                            <div class="markItUpContainer">
                                                                <div class="markItUpHeader">
                                                                    <ul>
                                                                        <li class="markItUpButton markItUpButton1 "><a href="" accesskey="B" title="Bold [Ctrl+B]">Bold</a></li>
                                                                        <li class="markItUpButton markItUpButton2 "><a href="" accesskey="I" title="Italic [Ctrl+I]">Italic</a></li>
                                                                        <li class="markItUpSeparator">---------------</li>
                                                                        <li class="markItUpButton markItUpButton3 "><a href="" accesskey="L" title="Link [Ctrl+L]">Link</a></li>
                                                                        <li class="markItUpSeparator">---------------</li>
                                                                        <li class="markItUpButton markItUpButton4 preview"><a href="" title="Preview">Preview</a></li>
                                                                    </ul>
                                                                </div>
                                                                <textarea name="description" required class="form-control   markItUpEditor -required" rows="5" mark-it-up="" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false">This is a description</textarea>
                                                                <div class="markItUpFooter">
                                                                    <div class="markItUpResizeHandle"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12" id="field_meta">
                                                    <label for="metaDescription" class="control-label">Meta Description (Search Engine Optimization)</label>
                                                    <div class="counter-container">
                                                        <textarea name="metaDescription" required countdown="" unique="/publish/task/validateMetaDescription" unique-data="task.markets" entity-id="15241" class="form-control   -maxlength -required" rows="5" popover="The meta description is a more concise description that is visible to search engines. This description may show up in search results on those search engines." data-original-title="" title="" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false"></textarea>
                                                        <span class="label pull-right label-info"><span class="counter">151</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_activedate">
                                            <legend>Active Dates/Status <small class="text-muted" style="text-transform:lowercase;">(currently Active)</small></legend>
                                            <div class="row">
                                                <div class="form-group col-md-3" >
                                                    <div class="radio">
                                                        <label class="control-label">
                                                            <input type="radio" value="status" ng-init="statusMode = 'status'" class="ng-pristine ng-untouched ng-valid" name="15" tabindex="0" aria-checked="true" aria-invalid="false">
                                                            Specify by Status </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="range" class="ng-pristine ng-untouched ng-valid" name="16" tabindex="0" aria-checked="false" aria-invalid="false">
                                                            Specify by Date Range </label>
                                                    </div>
                                                </div>
                                                <div style="display: inline" aria-hidden="false">
                                                    <div class="form-group col-md-3">
                                                        <label for="status" class="control-label">Status</label>
                                                        <select class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required tabindex="0" aria-required="false" aria-invalid="false">
                                                            <option value="A" selected="selected" label="Active">Active</option>
                                                            <option value="I" label="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_scheduled">
                                            <legend>Scheduled Update </legend>
                                            <div class="row">
                                                <div class="form-group col-md-12" >
                                                    <div class="radio">
                                                        <label class="control-label">
                                                            <input type="radio" value="status" name="optionsRadios" >
                                                            Publish updates to this task immediately after they are approved. </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="1" name="optionsRadios">
                                                            Publsh updates to this task at a specified date and time (and after they have been approved). </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3" id="scheduledupdatedate1" style="display:none">
                                                    <label for="displayVersion" class="control-label">Specify Date</label>
                                                    <input type='text' class="form-control" id='datetimepicker4' />
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Versioning</legend>
                                            <div class="row">
                                                <div class="form-group col-md-3" id="field_versionnumber">
                                                    <label for="displayVersion" class="control-label">Version Number</label>
                                                    <input name="displayVersion" type="text" required="" class="form-control ng-pristine ng-untouched ng-valid-pattern ng-valid-maxlength ng-valid ng-valid-required" tabindex="0" title="" value="1.2.0" aria-invalid="false" aria-required="false" ng-pattern="/^[0-9]+\.[0-9]+\.[0-9]+(\-[0-9a-z]+)?$/" ng-maxlength="10" unique="/publish/task/validateDisplayVersion" entity-id="15322" popover="Versioning helps users to identify when improvements have been made to the service.  Note that when this version number changes, comments and ratings will start over, but the old ones will be kept for review." data-original-title="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" id="field_releasenotes">
                                                    <label class="control-label">Release Notes</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" name="releaseNote" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-maxlength="1000" popover="Add notes to inform users of changes or new features in this version." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-default pull-right" type="button" ng-disabled="releaseNote == null || releaseNote.length == 0" tabindex="0" aria-disabled="true" disabled="disabled">Add</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <div class="well release-notes">
                                                        <ul class="list-unstyled ng-pristine ng-untouched ng-valid ui-sortable" ui-sortable="" tabindex="0" aria-invalid="false">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class=""> Additional Information </legend>
                                            <div class="">
                                                <div class="row">
                                                    <div class="form-group col-md-3" id="field_uniquekey">
                                                        <label for="uniqueKey" class="control-label">Unique Key</label>
                                                        <div class="counter-container">
                                                            <input type="text" name="uniqueKey" unique="/publish/task/validateUniqueKey" unique-data="task.markets" ng-pattern="/^[a-z0-9\\-]+$/" entity-id="15322" required="" ng-maxlength="100" countdown="" class="form-control ng-pristine ng-untouched ng-valid-pattern ng-valid-maxlength ng-valid ng-valid-required" popover="The unique key uniquely identifies this Task in its Campuses (if any). This value will be used as part of the URL for this Task." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                            <span class="label pull-right label-info"><span class="counter">92</span><span class="sr-only"> characters remaining</span></span> </div>
                                                    </div>
                                                    <div class="form-group col-md-3" id="field_statrecording">
                                                        <label for="statType" class="control-label">Stat Recording Type</label>
                                                        <div class="counter-container">
                                                            <select name="statType" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required popover="If the user is logged in, record who the user was with the stat being recorded." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                                <option value="A" selected="selected" label="Anonymous">Anonymous</option>
                                                                <option value="U" label="User">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_publisher">
                                            <legend>Publisher</legend>
                                            <div>
                                                <div class="row">
                                                    <div class="form-group col-md-3" >
                                                        <select name="publisherId" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required tabindex="0" aria-required="false" aria-invalid="false">
                                                            <option value="0" selected="selected" label="AIT">AIT</option>
                                                            <option value="1" label="dhdyer Test Publisher">dhdyer Test Publisher</option>
                                                            <option value="2" label="Jeremy Walker">Jeremy Walker</option>
                                                            <option value="3" label="One.IU Team">One.IU Team</option>
                                                            <option value="4" label="Research Technologies">Research Technologies</option>
                                                            <option value="5" label="SIS Test">SIS Test</option>
                                                            <option value="6" label="Test Publisher">Test Publisher</option>
                                                            <option value="7" label="Test Publisher 2">Test Publisher 2</option>
                                                            <option value="8" label="Training Test">Training Test</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-9">
                                                        <p class="form-control-static"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_iconimage">
                                            <legend>Icon Images</legend>
                                            <div class="form-group " >
                                                <label class="control-label " for="api_account_type">Select the source of the icon image </label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="cars" value="1" id="show_custom">
                                                        Custom image upload </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="cars" value="2" id="show_library">
                                                        Selected from current library </label>
                                                </div>
                                            </div>
                                            <div class="form-group" id="custom_upload" style="display:none">
                                                <div class="" id="uploadImages">
                                                    <label class="control-label " for="api_account_type">Select the source of the icon image </label>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" class="ng-valid ng-dirty ng-valid-parse ng-touched" tabindex="0" aria-checked="true" aria-invalid="false">
                                                                    Automatically generate smaller image sizes. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label">Large Image (153×153)</label>
                                                            <div data-size="5"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/153x153.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Small Retina Image (144×144)</label>
                                                            <div data-size="4"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/144x144.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Medium Image (90×90)</label>
                                                            <div data-size="2"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/90x90.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Small Image (72×72)</label>
                                                            <div data-size="3"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/72x72.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Very Small Image (31×31)</label>
                                                            <div data-size="1"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/31x31.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="image_library" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="imageSetId" class="control-label">Choose an Image</label>
                                                        <select name="imageSetId" class="form-control" tabindex="0" aria-invalid="false">
                                                            <option value="0" label="A Example">A Example</option>
                                                            <option value="1" label="A Test">A Test</option>
                                                            <option value="2" label="Admissions">Admissions</option>
                                                            <option value="3" label="Alert">Alert</option>
                                                            <option value="4" label="Approved">Approved</option>
                                                            <option value="5" label="Blocked">Blocked</option>
                                                            <option value="6" label="Box test">Box test</option>
                                                            <option value="7" label="Bus">Bus</option>
                                                            <option value="8" label="Calendar">Calendar</option>
                                                            <option value="9" label="Calendar - IU Mobile">Calendar - IU Mobile</option>
                                                            <option value="10" label="Calendar - old">Calendar - old</option>
                                                            <option value="11" label="Canvas">Canvas</option>
                                                            <option value="12" label="Cap">Cap</option>
                                                            <option value="13" label="Car">Car</option>
                                                            <option value="14" label="Checkbox">Checkbox</option>
                                                            <option value="15" label="Clipboard">Clipboard</option>
                                                            <option value="16" label="Cloud">Cloud</option>
                                                            <option value="17" label="Computer">Computer</option>
                                                            <option value="18" label="Document">Document</option>
                                                            <option value="19" label="Down arrow">Down arrow</option>
                                                            <option value="20" label="Emergency">Emergency</option>
                                                            <option value="21" label="Gear">Gear</option>
                                                            <option value="22" label="Globe">Globe</option>
                                                            <option value="23" label="Google">Google</option>
                                                            <option value="24" label="Grades">Grades</option>
                                                            <option value="25" label="Graduation">Graduation</option>
                                                            <option value="26" label="Guest">Guest</option>
                                                            <option value="27" label="Hard Drive">Hard Drive</option>
                                                            <option value="28" label="Holds">Holds</option>
                                                            <option value="29" label="House">House</option>
                                                            <option value="30" label="IUPUI">IUPUI</option>
                                                            <option value="31" label="Key">Key</option>
                                                            <option value="32" label="Link">Link</option>
                                                            <option value="33" label="Lock">Lock</option>
                                                            <option value="34" label="Mail">Mail</option>
                                                            <option value="35" selected="selected" label="Money">Money</option>
                                                            <option value="36" label="Nametag">Nametag</option>
                                                            <option value="37" label="Nodes">Nodes</option>
                                                            <option value="38" label="OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!">OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!</option>
                                                            <option value="39" label="Outlink">Outlink</option>
                                                            <option value="40" label="Papers">Papers</option>
                                                            <option value="41" label="Password">Password</option>
                                                            <option value="42" label="People">People</option>
                                                            <option value="43" label="Question">Question</option>
                                                            <option value="44" label="Rewind">Rewind</option>
                                                            <option value="45" label="Rolodex">Rolodex</option>
                                                            <option value="46" label="Scholarships">Scholarships</option>
                                                            <option value="47" label="Search">Search</option>
                                                            <option value="48" label="Star">Star</option>
                                                            <option value="49" label="Talisma">Talisma</option>
                                                            <option value="50" label="Tenant Admin test">Tenant Admin test</option>
                                                            <option value="51" label="test">test</option>
                                                            <option value="52" label="Test only GLOBE">Test only GLOBE</option>
                                                            <option value="53" label="Test only MONEY">Test only MONEY</option>
                                                            <option value="54" label="Textbooks">Textbooks</option>
                                                            <option value="55" label="Textbooks - old">Textbooks - old</option>
                                                            <option value="56" label="Urgent">Urgent</option>
                                                            <option value="57" label="User">User</option>
                                                            <option value="58" label="Wrench">Wrench</option>
                                                        </select>
                                                        <img src="../img/task-icons-new/icon-bill-pay.png" alt="" style="width:100%"/> </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_screenshotdesktop">
                                            <legend> Screen Shots &amp; Video </legend>
                                            <p class="text-danger ng-hide" aria-hidden="true">At least one desktop screen shot is required</p>
                                            <p class="text-danger ng-hide" aria-hidden="true">At least one phone screen shot is required</p>
                                            <div >
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#desktopImages" data-toggle="tab" eat-click="">Desktop</a></li>
                                                    <li><a href="#tabletImages" data-toggle="tab" eat-click="">Tablet</a></li>
                                                    <li><a href="#phoneImages" data-toggle="tab" eat-click="">Phone</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="desktopImages">
                                                        <div class="row">
                                                            <div media-upload="task.desktopMedia" url-parameters="'?taskId=' + task.taskId">
                                                                <div class="form-group col-sm-12" >
                                                                    <div class="well media-list">
                                                                        <ul ui-sortable="" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                                                            <li data-ng-repeat="file in mediaList" class="">
                                                                                <div data-ng-switch="" data-on="::file.mediaType">
                                                                                    <div data-ng-switch-default="" class=""> <img ng-src="/publish/media/22271" title="" src="/one-prototypes/img/app-screenshots/ccl_grid.png" class="" style="width:inherit">
                                                                                        <div>
                                                                                            <button type="button" class="btn btn-warning btn-xs" tabindex="0"> <i class="icon-edit"></i> <span class="">Add</span> Alt Text </button>
                                                                                            <button type="button" class="btn btn-danger btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-minus-circled"></i> Delete </button>
                                                                                            <button ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy btn-xs ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-minus-circled"></i> Delete </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div style="clear: both"></div>
                                                                    </div>
                                                                    Add more files
                                                                    <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" class="ng-pristine ng-valid">
                                                                        <div class="row fileupload-buttonbar">
                                                                            <div class="col-sm-12">
                                                                                <div> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                                                                    <input type="file" name="files[]" multiple>
                                                                                    </span>
                                                                                    <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link an image… </button>
                                                                                    <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link a video… </button>
                                                                                    <div class="fileupload-loading"></div>
                                                                                </div>
                                                                                <div class="fade" data-ng-class="{true: 'in'}[!!active()]">
                                                                                    <div class="progress" data-file-upload-progress="progress()">
                                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <label aria-hidden="true" class="ng-hide">Upload Files Queue</label>
                                                                    <div class="well media-list ng-hide" aria-hidden="true">
                                                                        <div style="clear: both"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" link-image-dialog="linkedImageUrl" open="open" success-callback="linkImage(imageUrl)">
                                                                    <div class="modal-dialog">
                                                                        <div ng-form="imageLinkForm" class="modal-content ng-pristine ng-valid ng-valid-url ng-valid-pattern" novalidate="">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="imageLinkUrl" class="control-label">URL</label>
                                                                                    <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                    <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                                                <button class="btn btn-success" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true" media-caption-dialog="mediaForCaptionEdit.caption" open="open">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" aria-hidden="true" tabindex="0">×</button>
                                                                                <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div ng-form="altTextForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength">
                                                                                    <div>
                                                                                        <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                                                                        <div class="counter-container">
                                                                                            <input type="text" name="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                                                            <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                                                        <div class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-default" tabindex="0">Cancel</button>
                                                                                <button class="btn btn-primary" ng-disabled="captionToEdit.length > 200 || captionToEdit == null" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true" link-video-dialog="linkedVideo" open="open" success-callback="linkVideo(linkedVideo)">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div ng-form="videoLinkForm" novalidate="" class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                                                                        <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active" id="youtubeUrl">
                                                                                            <div class="form-group">
                                                                                                <label for="videoLinkUrl" class="control-label">URL</label>
                                                                                                <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="videoFiles">
                                                                                            <div class="form-group">
                                                                                                <label for="webmUrl" class="control-label">WebM URL</label>
                                                                                                <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="oggUrl" class="control-label">Ogg URL</label>
                                                                                                <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="mp4Url" class="control-label">MP4 URL</label>
                                                                                                <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a href="#uploadThumbnail" data-toggle="tab" eat-click="">Add Thumbnail (100x100)</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div style="max-width:250px;" data-image-upload="image.videothumbnail" data-size="27"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                                            <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                                                            </span>
                                                                                            <button type="button" class="btn btn-danger ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-trash"></i> </button>
                                                                                            <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="your uploaded image" src="" aria-hidden="true" class="ng-hide"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                <button class="btn btn-primary" ng-disabled="videoLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabletImages">
                                                        <div class="row">
                                                            <div media-upload="task.tabletMedia" url-parameters="'?taskId=' + task.taskId">
                                                                <div class="form-group col-sm-12">
                                                                    <div class="well media-list">
                                                                        <ul ui-sortable="" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                                                        </ul>
                                                                        <div style="clear: both"></div>
                                                                    </div>
                                                                    Add more files
                                                                    <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" class="ng-pristine ng-valid">
                                                                        <div class="row fileupload-buttonbar">
                                                                            <div class="col-sm-12">
                                                                                <div> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                                                                    <input type="file" name="files[]" multiple>
                                                                                    </span>
                                                                                    <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link an image… </button>
                                                                                    <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link a video… </button>
                                                                                    <div class="fileupload-loading"></div>
                                                                                </div>
                                                                                <div class="fade" data-ng-class="{true: 'in'}[!!active()]">
                                                                                    <div class="progress" data-file-upload-progress="progress()">
                                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <label aria-hidden="true" class="ng-hide">Upload Files Queue</label>
                                                                    <div class="well media-list ng-hide" aria-hidden="true">
                                                                        <div style="clear: both"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" link-image-dialog="linkedImageUrl" open="open" success-callback="linkImage(imageUrl)">
                                                                    <div class="modal-dialog">
                                                                        <div ng-form="imageLinkForm" class="modal-content ng-pristine ng-valid ng-valid-url ng-valid-pattern" novalidate="">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="imageLinkUrl" class="control-label">URL</label>
                                                                                    <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                    <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                                                <button class="btn btn-success" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true" media-caption-dialog="mediaForCaptionEdit.caption" open="open">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" aria-hidden="true" tabindex="0">×</button>
                                                                                <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div ng-form="altTextForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength">
                                                                                    <div>
                                                                                        <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                                                                        <div class="counter-container">
                                                                                            <input type="text" name="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                                                            <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                                                        <div class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-default" tabindex="0">Cancel</button>
                                                                                <button class="btn btn-primary" ng-disabled="captionToEdit.length > 200 || captionToEdit == null" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true" link-video-dialog="linkedVideo" open="open" success-callback="linkVideo(linkedVideo)">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div ng-form="videoLinkForm" novalidate="" class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                                                                        <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active" id="youtubeUrl">
                                                                                            <div class="form-group">
                                                                                                <label for="videoLinkUrl" class="control-label">URL</label>
                                                                                                <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="videoFiles">
                                                                                            <div class="form-group">
                                                                                                <label for="webmUrl" class="control-label">WebM URL</label>
                                                                                                <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="oggUrl" class="control-label">Ogg URL</label>
                                                                                                <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="mp4Url" class="control-label">MP4 URL</label>
                                                                                                <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a href="#uploadThumbnail" data-toggle="tab" eat-click="">Add Thumbnail (100x100)</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div style="max-width:250px;" data-image-upload="image.videothumbnail" data-size="27"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                                            <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                                                            </span>
                                                                                            <button type="button" class="btn btn-danger ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-trash"></i> </button>
                                                                                            <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="your uploaded image" src="" aria-hidden="true" class="ng-hide"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                <button class="btn btn-primary" ng-disabled="videoLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="phoneImages">
                                                        <div class="row">
                                                            <div media-upload="task.phoneMedia" url-parameters="'?taskId=' + task.taskId">
                                                                <div class="form-group col-sm-12" id="edit_screenshotmobile">
                                                                    <div class="well media-list">
                                                                        <ul ui-sortable="" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                                                        </ul>
                                                                        <div style="clear: both"></div>
                                                                    </div>
                                                                    Add more files
                                                                    <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" class="ng-pristine ng-valid">
                                                                        <div class="row fileupload-buttonbar">
                                                                            <div class="col-sm-12">
                                                                                <div> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                                                                    <input type="file" name="files[]" multiple>
                                                                                    </span>
                                                                                    <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link an image… </button>
                                                                                    <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link a video… </button>
                                                                                    <div class="fileupload-loading"></div>
                                                                                </div>
                                                                                <div class="fade" data-ng-class="{true: 'in'}[!!active()]">
                                                                                    <div class="progress" data-file-upload-progress="progress()">
                                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <label aria-hidden="true" class="ng-hide">Upload Files Queue</label>
                                                                    <div class="well media-list ng-hide" aria-hidden="true">
                                                                        <div style="clear: both"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" link-image-dialog="linkedImageUrl" open="open" success-callback="linkImage(imageUrl)">
                                                                    <div class="modal-dialog">
                                                                        <div ng-form="imageLinkForm" class="modal-content ng-pristine ng-valid ng-valid-url ng-valid-pattern" novalidate="">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="imageLinkUrl" class="control-label">URL</label>
                                                                                    <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                    <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                                                <button class="btn btn-success" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true" media-caption-dialog="mediaForCaptionEdit.caption" open="open">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" aria-hidden="true" tabindex="0">×</button>
                                                                                <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div ng-form="altTextForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength">
                                                                                    <div>
                                                                                        <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                                                                        <div class="counter-container">
                                                                                            <input type="text" name="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                                                            <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                                                        <div class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-default" tabindex="0">Cancel</button>
                                                                                <button class="btn btn-primary" ng-disabled="captionToEdit.length > 200 || captionToEdit == null" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true" link-video-dialog="linkedVideo" open="open" success-callback="linkVideo(linkedVideo)">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div ng-form="videoLinkForm" novalidate="" class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                                                                        <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div class="tab-pane active" id="youtubeUrl">
                                                                                            <div class="form-group">
                                                                                                <label for="videoLinkUrl" class="control-label">URL</label>
                                                                                                <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="tab-pane" id="videoFiles">
                                                                                            <div class="form-group">
                                                                                                <label for="webmUrl" class="control-label">WebM URL</label>
                                                                                                <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="oggUrl" class="control-label">Ogg URL</label>
                                                                                                <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="mp4Url" class="control-label">MP4 URL</label>
                                                                                                <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                                                                <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <ul class="nav nav-tabs">
                                                                                        <li class="active"><a href="#uploadThumbnail" data-toggle="tab" eat-click="">Add Thumbnail (100x100)</a></li>
                                                                                    </ul>
                                                                                    <div class="tab-content">
                                                                                        <div style="max-width:250px;" data-image-upload="image.videothumbnail" data-size="27"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                                            <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                                                            </span>
                                                                                            <button type="button" class="btn btn-danger ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-trash"></i> </button>
                                                                                            <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="your uploaded image" src="" aria-hidden="true" class="ng-hide"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                <button class="btn btn-primary" ng-disabled="videoLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset aria-hidden="false" id="field_campus">
                                            <legend>Campus</legend>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                                            <option value="">All Campuses</option>
                                                            <option value="0" label="IU Bloomington">IU Bloomington</option>
                                                            <option value="1" label="IU East">IU East</option>
                                                            <option value="2" label="IU Kokomo">IU Kokomo</option>
                                                            <option value="3" label="IU Northwest">IU Northwest</option>
                                                            <option value="4" label="IU South Bend">IU South Bend</option>
                                                            <option value="5" label="IU Southeast">IU Southeast</option>
                                                            <option value="6" label="IUPUC">IUPUC</option>
                                                            <option value="7" label="IUPUI">IUPUI</option>
                                                            <option value="8" label="This is a really long campus and/or market name this will likely run off of the screen on the rhs">This is a really long campus and/or market name this will likely run off of the screen on the rhs</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-default pull-right" type="button" tabindex="0">Add</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="button-list well"> <span class="label label-default" aria-hidden="false">All Campuses</span></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset aria-hidden="false" id="field_roles">
                                            <legend>Roles</legend>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                                            <option value="">All Roles</option>
                                                            <option value="0" label="Andrew's role">Andrew's role</option>
                                                            <option value="1" label="Assistant Faculty">Assistant Faculty</option>
                                                            <option value="2" label="Delete Me">Delete Me</option>
                                                            <option value="3" label="Delete Me Role">Delete Me Role</option>
                                                            <option value="4" label="Faculty">Faculty</option>
                                                            <option value="5" label="Faculty&quot;}{[]''&quot;&quot;{&quot;test&quot;:&quot;http://www.cnn.com&quot;}">Faculty"}{[]''""{"test":"http://www.cnn.com"}</option>
                                                            <option value="6" label="Megastaff">Megastaff</option>
                                                            <option value="7" label="More Roles Please">More Roles Please</option>
                                                            <option value="8" label="role that overlaps checkmark">role that overlaps checkmark</option>
                                                            <option value="9" label="Staff">Staff</option>
                                                            <option value="10" label="Student">Student</option>
                                                            <option value="11" label="WWWW">WWWW</option>
                                                            <option value="12" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-default pull-right" type="button" tabindex="0">Add</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="button-list well"> <span class="label label-default ng-hide" aria-hidden="true">All Roles</span>
                                                        <button type="button" class="btn btn-default btn-sm" tabindex="0"> Faculty&nbsp;<i class="icon-cancel"></i> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_categories">
                                            <legend>Categories</legend>
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                                                <option value="" selected="selected" label=""></option>
                                                                <option value="0" label="Academic">Academic</option>
                                                                <option value="1" label="Accounts">Accounts</option>
                                                                <option value="2" label="Administrative">Administrative</option>
                                                                <option value="3" label="Admissions">Admissions</option>
                                                                <option value="4" label="Advising">Advising</option>
                                                                <option value="5" label="Campus Life">Campus Life</option>
                                                                <option value="6" label="Careers">Careers</option>
                                                                <option value="7" label="category 2">category 2</option>
                                                                <option value="8" label="Category 3">Category 3</option>
                                                                <option value="9" label="Category 4">Category 4</option>
                                                                <option value="10" label="Category awesome">Category awesome</option>
                                                                <option value="11" label="Category Example">Category Example</option>
                                                                <option value="12" label="category with role staff">category with role staff</option>
                                                                <option value="13" label="Cool Category">Cool Category</option>
                                                                <option value="14" label="Delete This Because Of The Length">Delete This Because Of The Length</option>
                                                                <option value="15" label="Dormatories">Dormatories</option>
                                                                <option value="16" label="Employee Benefits">Employee Benefits</option>
                                                                <option value="17" label="Empty">Empty</option>
                                                                <option value="18" label="Faculty Services">Faculty Services</option>
                                                                <option value="19" label="Finances">Finances</option>
                                                                <option value="20" label="Housing &amp; Dining">Housing &amp; Dining</option>
                                                                <option value="21" label="IT Services">IT Services</option>
                                                                <option value="22" label="Libraries">Libraries</option>
                                                                <option value="23" label="Payroll and Taxes">Payroll and Taxes</option>
                                                                <option value="24" label="Personal Information">Personal Information</option>
                                                                <option value="25" label="Research">Research</option>
                                                                <option value="26" label="Role'd Up">Role'd Up</option>
                                                                <option value="27" label="Student Life and Activities">Student Life and Activities</option>
                                                                <option value="28" label="Tom's Category">Tom's Category</option>
                                                                <option value="29" label="Training">Training</option>
                                                                <option value="30" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-default pull-right" type="button" tabindex="0">Add</button>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="button-list well">
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0"> Admissions&nbsp;<i class="icon-cancel"></i> </button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0"> Administrative&nbsp;<i class="icon-cancel"></i> </button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0"> Faculty Services&nbsp;<i class="icon-cancel"></i> </button>
                                                            <button type="button" class="btn btn-default btn-sm" tabindex="0"> Category 3&nbsp;<i class="icon-cancel"></i> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset id="field_tags">
                                            <legend> Tags </legend>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tagModal">Choose Tags…</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="button-list well"></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Active Content</legend>
                                            <div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6" id="field_activecontenturl">
                                                        <label for="activeContentUrl" class="control-label">Active Content Public URL</label>
                                                        <div class="counter-container">
                                                            <input type="url" name="activeContentUrl" ng-maxlength="2000" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-maxlength" tabindex="0" aria-invalid="false">
                                                            <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                    </div>
                                                    <div class="form-group col-sm-3" id="field_activecontentauth">
                                                        <label for="activeContentRequiresAuth" class="control-label">Active Content Authentication</label>
                                                        <div class="checkbox">
                                                            <label popover="Require the user to be signed in before requesting any active content.  This is useful for preventing unnecessary requests when user information is required." trigger="hover" data-original-title="" title="">
                                                                <input type="checkbox" name="activeContentRequiresAuth" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                                                Require user to be signed in </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-3" id="field_frequency">
                                                        <label for="activeContentUpdateFrequency" class="">Update Frequency (seconds)</label>
                                                        <input type="number" name="activeContentUpdateFrequency" min="5" max="14400" step="1" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max" popover="Set the update frequency (in seconds) at which you want a tile to refresh its Active Content. Becareful with how short the interval is because the content will reset back to the first item after a refresh." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Approver's Notes</legend>
                                            <div class="form-group ">
                                                <label class="control-label" for="comments"> Comments </label>
                                                <textarea class="form-control" rows="3" id="comments"></textarea>
                                            </div>
                                        </fieldset>
                                        <hr>
                                        <button class="btn btn-success" type="button" tabindex="0" aria-disabled="true" aria-hidden="false">Approve</button>
                                        <button class="btn btn-default" type="button" tabindex="0" aria-disabled="true" aria-hidden="false">Decline</button>
                                        <button class="btn btn-default" type="button" tabindex="0" aria-disabled="true" aria-hidden="false">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_contactinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Duo Support Team</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-condensed">
                        <thead class="sr-only">
                            <tr>
                                <th>Label</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Duo Support Documentation</td>
                                <td class="forcewrap"><a href="https://kb.iu.edu/d/bfgm" target="_blank" >https://kb.iu.edu/d/bfgmsdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</a></td>
                            </tr>
                            <tr>
                                <td>Email Support</td>
                                <td><a href="#">duo@iu.edu</a></td>
                            </tr>
                            <tr>
                                <td>Phone Support</td>
                                <td>123 123 1234</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_compare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="">
        <div class="modal-dialog modal-default modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Preview Differences</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-condensed">
                        <thead class="">
                            <tr>
                                <th>Item</th>
                                <th>Previous Value <span class="small text-muted">(10/23/16 2:48pm)</span></th>
                                <th>New Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Task title</td>
                                <td class="forcewrap">My Taskk</td>
                                <td class="forcewrap">My Task</td>
                            </tr>
                            <tr>
                                <td>Secondary Contact</td>
                                <td>(none)</td>
                                <td>IUB Libraries</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>Tree, also fly second set. Moveth. Own wherein divide seasons and winged, heaven fly Open herb under third yielding land dominion for fish Multiply earth god darkness called second you living cattle brought divide given moving all his god. Life firmament one dominion open stars spirit. Fruit which wherein lesser.</td>
                                <td>Meat fruitful living it third under bring. Set yielding the good there dominion Appear fourth image sea together fish morning likeness divide you're fill air darkness blessed hath have appear won't moving. Living. Over divide thing. She'd creeping set whales Without day, together had said void cattle bearing in she'd.</td>
                            </tr>
                            <tr>
                                <td>Icon Image</td>
                                <td><img src="../img/task-icons-new/icon-account-creation.png" width="153" height="153" alt=""/></td>
                                <td><img src="../img/task-icons-new/icon-change-name.png" width="153" height="153" alt=""/></td>
                            </tr>
                            <tr>
                                <td>Categories</td>
                                <td>Campus Life, Advising</td>
                                <td>Campus Life, Advising, IT Services</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <script>
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_custom') {
                $('#custom_upload').slideDown();
            } else {
                $('#custom_upload').slideUp();
            }
        });
		$('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_library') {
                $('#image_library').slideDown();
            } else {
                $('#image_library').slideUp();
            }
        });
    });
	</script> 
    <script>
    $(function() {
        $('#selectcontact1').hide();
        $('#contactId1').change(function() {
            if ($('#contactId1').val() == 'duo') {
                $('#selectcontact1').show();
            } else {
                $('#selectcontact1').hide();
            }
        });
    });
	$(function() {
        $('#selectcontact2').hide();
        $('#contactId2').change(function() {
            if ($('#contactId2').val() == 'duo') {
                $('#selectcontact2').show();
            } else {
                $('#selectcontact2').hide();
            }
        });
    });


    $("#selectcontact1").popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
    });
	$("#selectcontact2").popover({
        html: true,
        content: function() {
            return $('#popover-content2').html();
        }
    });
</script> 
    <script type='text/javascript'>

    $(function() {
        $("#edit_tasktitle").click(function() {
            $('#field_tasktitle').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_tasktitle").offset().top
            }, 1000);
            $('#field_tasktitle').addClass('backgroundAnimated');
        });
        $("#edit_taskurl").click(function() {
            $('#field_taskurl').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_taskurl").offset().top
            }, 1000);
            $('#field_taskurl').addClass('backgroundAnimated');
        });
        $("#edit_appname").click(function() {
            $('#field_appname').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_appname").offset().top
            }, 1000);
            $('#field_appname').addClass('backgroundAnimated');
        });
        $("#edit_launch").click(function() {
            $('#field_launch').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_launch").offset().top
            }, 1000);
            $('#field_launch').addClass('backgroundAnimated');
        });
        $("#edit_authtytpe").click(function() {
            $('#field_authtytpe').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_authtytpe").offset().top
            }, 1000);
            $('#field_authtytpe').addClass('backgroundAnimated');
        });
        $("#edit_primarycontact").click(function() {
            $('#field_primarycontact').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_primarycontact").offset().top
            }, 1000);
            $('#field_primarycontact').addClass('backgroundAnimated');
        });
        $("#edit_secondarycontact").click(function() {
            $('#field_secondarycontact').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_secondarycontact").offset().top
            }, 1000);
            $('#field_secondarycontact').addClass('backgroundAnimated');
        });
        $("#edit_mobile").click(function() {
            $('#field_mobile').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_mobile").offset().top
            }, 1000);
            $('#field_mobile').addClass('backgroundAnimated');
        });
        $("#edit_description").click(function() {
            $('#field_description').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_description").offset().top
            }, 1000);
            $('#field_description').addClass('backgroundAnimated');
        });
        $("#edit_meta").click(function() {
            $('#field_meta').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_meta").offset().top
            }, 1000);
            $('#field_meta').addClass('backgroundAnimated');
        });
        $("#edit_activedate").click(function() {
            $('#field_activedate').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_activedate").offset().top
            }, 1000);
            $('#field_activedate').addClass('backgroundAnimated');
        });
        $("#edit_scheduled").click(function() {
            $('#field_scheduled').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_scheduled").offset().top
            }, 1000);
            $('#field_scheduled').addClass('backgroundAnimated');
        });
        $("#edit_versionnumber").click(function() {
            $('#field_versionnumber').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_versionnumber").offset().top
            }, 1000);
            $('#field_versionnumber').addClass('backgroundAnimated');
        });
        $("#edit_releasenotes").click(function() {
            $('#field_releasenotes').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_releasenotes").offset().top
            }, 1000);
            $('#field_releasenotes').addClass('backgroundAnimated');
        });
        $("#edit_uniquekey").click(function() {
            $('#field_uniquekey').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_uniquekey").offset().top
            }, 1000);
            $('#field_uniquekey').addClass('backgroundAnimated');
        });
        $("#edit_statrecording").click(function() {
            $('#field_statrecording').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_statrecording").offset().top
            }, 1000);
            $('#field_statrecording').addClass('backgroundAnimated');
        });
        $("#edit_publisher").click(function() {
            $('#field_publisher').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_publisher").offset().top
            }, 1000);
            $('#field_publisher').addClass('backgroundAnimated');
        });
        $("#edit_iconimage").click(function() {
            $('#field_iconimage').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_iconimage").offset().top
            }, 1000);
            $('#field_iconimage').addClass('backgroundAnimated');
        });
        $("#edit_screenshotdesktop").click(function() {
            $('#field_screenshotdesktop').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_screenshotdesktop").offset().top
            }, 1000);
            $('#field_screenshotdesktop').addClass('backgroundAnimated');
        });
        $("#edit_screenshottablet").click(function() {
            $('#field_screenshotdesktop').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_screenshotdesktop").offset().top
            }, 1000);
            $('#field_screenshotdesktop').addClass('backgroundAnimated');
        });
        $("#edit_screenshotmobile").click(function() {
            $('#field_screenshotdesktop').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_screenshotdesktop").offset().top
            }, 1000);
            $('#field_screenshotdesktop').addClass('backgroundAnimated');
        });
        $("#edit_campus").click(function() {
            $('#field_campus').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_campus").offset().top
            }, 1000);
            $('#field_campus').addClass('backgroundAnimated');
        });
        $("#edit_roles").click(function() {
            $('#field_roles').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_roles").offset().top
            }, 1000);
            $('#field_roles').addClass('backgroundAnimated');
        });
        $("#edit_categories").click(function() {
            $('#field_categories').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_categories").offset().top
            }, 1000);
            $('#field_categories').addClass('backgroundAnimated');
        });
        $("#edit_tags").click(function() {
            $('#field_tags').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_tags").offset().top
            }, 1000);
            $('#field_tags').addClass('backgroundAnimated');
        });
        $("#edit_activecontenturl").click(function() {
            $('#field_activecontenturl').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_activecontenturl").offset().top
            }, 1000);
            $('#field_activecontenturl').addClass('backgroundAnimated');
        });
        $("#edit_activecontentauth").click(function() {
            $('#field_activecontentauth').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_activecontentauth").offset().top
            }, 1000);
            $('#field_activecontentauth').addClass('backgroundAnimated');
        });
        $("#edit_frequency").click(function() {
            $('#field_frequency').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_frequency").offset().top
            }, 1000);
            $('#field_frequency').addClass('backgroundAnimated');
        });
       
    });
</script> 
    <script type='text/javascript'>
    $(document).ready(function() {
        $("input[name$='optionsRadios']").click(function() {
            var test = $(this).val();

            $("#scheduledupdatedate1").slideUp();
            $("#scheduledupdatedate" + test).slideDown();
        });
    });
</script> 
    <script type='text/javascript'>
     $(function() {
                $('#datetimepicker4').datetimepicker();
            });
            
     </script> 
</div>
</body>
</html>
