<?php
$section = 'publishing';
$page_title = 'pub-announcements';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<style type="text/css">
.primary-content .tab-content .section-head .section-controls .btn {
	margin-top: 10px;
}
.tab-content .tab-pane {
	padding-top: 15px;
	border-bottom: none;
}
.tab-content {
	border-left: none;
	border-right: none;
}
.dropdown.dropdown-lg .dropdown-menu {
	margin-top: -35px;
	padding: 20px;
}
.input-group-btn .btn-group {
	display: flex !important;
}
.btn-group .btn {
	border-radius: 0;
	margin-left: -1px;
}
.btn-group .btn:last-child {
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
}
.btn-group .form-horizontal .btn[type="submit"] {
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}
.form-horizontal .form-group {
	margin-left: 0;
	margin-right: 0;
}
.form-group .form-control:last-child {
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}

@media screen and (min-width: 768px) {
#adv-search {
 width:;
	margin: 0 auto;
}
.dropdown.dropdown-lg {
	position: static !important;
}
.dropdown.dropdown-lg .dropdown-menu {
	max-width: 434px;
}
.dropdown.dropdown-lg .dropdown-menu {
	margin-top: -51px;
	padding: 20px;
	left: 14px;
}
}
.primary-content .tab-content .well .filter-list {
	margin-bottom: 15px;
	display: inline;
	padding-left: 30px;
	position: relative;
}
.primary-content .tab-content .well .filter-list:before {
	content: '';
	background: #ddd;
	position: absolute;
	height: 34px;
	width: 1px;
	top: -6px;
	left: 11px;
}
.primary-content .tab-content .well {
	margin-bottom: 5px;
	margin-top: 5px;
	padding-top: 5px;
	padding-bottom: 5px;
}
</style>
<style type="text/css">
.dropdown1 {
	position: static !important;
}
</style>
<style type="text/css"></style>
<style>
.dataTable i {
	font-size: 12px;
	color: #999;
	margin-left: 5px;
}
.popover {
	min-width: 300px;
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
                    <div class="primary-content">
                        <div class="row section-head">
                            <div class="col-xs-12 section-header">
                                <div class="taskmaint-preview">
                                    <div class="taskmaint-preview-content">
                                        <h2 class="taskmaint-preview-content-title">Maintain Announcements</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#announcements_all" aria-controls="announcements_all" role="tab" data-toggle="tab"><i class="icon-th-list visible-xs"></i> <span class="hidden-xs">All</span></a></li>
                            <li role="presentation"><a href="#announcements_deleted" aria-controls="announcements_deleted" role="tab" data-toggle="tab"><i class="icon-flash-1 visible-xs"></i><span class="hidden-xs">Deleted</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="announcements_all" style=" display:;">
                                <section>
                                    <div class="row section-head">
                                        <div class="col-xs-9 section-header">
                                            <h3 class="h4">All Announcements</h3>
                                        </div>
                                        <div class="col-xs-3 section-controls"><a href="pub-taskmaint-new.php" class="btn btn-xs btn-default pull-right"><i class="icon-plus-2"></i>New</a></div>
                                    </div>
                                    <div class="page-utilities">
                                        <div class="page-utilities-item" style="padding-top:12px">
                                            <div class="dropdown" style="display:inline-block; margin-right:15px" id="select_status"> <span class=" dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="white-space:nowrap"> <span id="dropdown_title_campuses">All</span> <span class="caret"></span> </span>
                                                <ul class="dropdown-menu" aria-labelledby="select_status">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1"> All</a> </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Active</a> </li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" >Inactive</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="page-utilities-item">
                                           
                                                    <div class="input-group" id="adv-search">
                                                        <input type="text" class="form-control input-sm" placeholder="Filter" style="min-width: 80px;" />
                                                        <div class="input-group-btn">
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-default btn-sm apply_filter"><i class="icon-filter visible-inline-xs"></i><span class="hidden-xs">Apply Filter</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                        </div>
                                    </div>
                                    <table class="table table-hover table-condensed table-actions display tablesaw tablesaw-stack"  data-tablesaw-mode="stack" id="table1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Academic Affairs Workshop, September 29 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Academic Position Search Task Center </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> AcademicWorks System Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Action List Emails are Now Digitally Signed </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Brief Outage </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Central Authentication Service maintenance scheduled </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Citizenship: Important Login Information </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Difficulties accessing Digital Measures - Activity Insight </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Direct Deposit Funds Availability </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Document Search has a new look </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Emergency Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down For Emergency Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Emergency Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Emergency Maintenance </td>
                                                <td> Active </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Emergency Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Emergency Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Maintenance December 13, 2015 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Down for Maintenance December 13, 2015 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> E Training System Down </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Emergency KC Maintenance Today </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Emergency Patch TODAY 1/29/16 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Emergency Patch TODAY 1/29/16 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Employee Center Update </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Employee Center Update </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Explore Majors and More </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> FAR Application </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> HSO Office Hours </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Human Subjects Office update to policies, procedures, and processes - Effective July 9 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Important Login Information </td>
                                                <td> Active </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Important Login Information </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Important Login Information </td>
                                                <td> Active </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Improved Pre-Review Process </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Intermittent Exchange Issues </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Intermittent Exchange Issues </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> IOS Update Issue </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Is the incorrect campus showing for you?  Try clearing your cache. </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> IU Network ID Needed </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> IU Participates in Demonstration Project </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> IUPUI Competitive Scholarship Application </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> KC IRB System Maintenance </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> KC IRB Updates </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> KC IRB Upgrade to Version 5.2.1 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> KFS Critical Data </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Kuali Coeus 5.2.1 Upgrade </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Kuali Financial System </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Kuali Time temporarily unavailable Sunday, November 15th @ 12:01am - 8:am </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Last Monthly Pay of the Year </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> LastPass and Chrome with Two Step Login </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Make the Move to One.IU Today! </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> My Bookmarks Retirement </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> National Student Clearinghouse Temporarily Unavailable </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New HSO Guidance - For Public Comment </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New HSO Guidance – For Public Comment </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New Intranet Platform </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New KED Portal for Accessing KC Grants </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New KED Portal for Accessing KC IRB </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New NIH Policy on Single IRB (sIRB) Review </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New Paycheck Details Interface </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> New Study Closure Process and KC IRB Update </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> NIH Policy on Good Clinical Practice (GCP) Training Required Beginning January 1, 2017 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Notice about Retirement of System and Certificates </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Notice of KC IRB Questionnaire Updates </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Oncourse has been retired for Fall 2016 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> One.IU QuickStart Video Now Live! </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Please Read:  ALL Courses Have Moved to IU Expand E Training </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Please use Chrome or Firefox web browsers for best results. </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Printing the Electronic Watermark on IRB-Approved Consents </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Purchasing </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Receiving errors or pages not loading?  Try clearing your cache </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Receiving errors or pages not loading? Try clearing your cache </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr style="">
                                                <td> Receiving errors or pages not loading? Try clearing your cache </td>
                                                <td> Active </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Receiving errors or pages not loading? Try clearing your cache </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Scholarship App May Not Be Open </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> SIS Down on Saturday June 3 for Upgrade </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Student Self-Service for View/Pay Bursar Bill will be unavailable. </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Temporarily Unavailable Thursday, October 6 and Friday, October 7 </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Time is running out to access Oncourse! </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Travel@IU Retirement </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Updated IRB Processes and Procedures </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> W-4 &amp; WH-4 Notification </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Warning: Phishing attack targeting Action List users </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td> Where is the pie chart? </td>
                                                <td> Inactive </td>
                                                <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="announcements_deleted" style=" display:;">
                                <div class="row section-head">
                                    <div class="col-xs-12 col-sm-9 section-header">
                                        <h3 class="h4">Deleted Announcements</h3>
                                    </div>
                                    <div class="col-xs-12  col-sm-3 section-controls"></div>
                                </div>
                                <table class="table table-hover table-condensed table-actions display tablesaw tablesaw-stack"  data-tablesaw-mode="stack" id="table2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Document Search has a new look </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> IOS Update Issue </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> KC IRB Upgrade to Version 5.2.1 </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> New Paycheck Details Interface </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> Time is running out to access Oncourse! </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> Travel@IU Retirement </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> Updated IRB Processes and Procedures </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> W-4 &amp; WH-4 Notification </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> Warning: Phishing attack targeting Action List users </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td> Where is the pie chart? </td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <?php include('modal/pub-task-summary.php') ?>
    <?php include('modal/pub-task-summary-update.php') ?>
    <?php include('modal/pub-task-edit-selectversion.php') ?>
    <?php include('modal/pub-task-edit-deleteactionwarning.php') ?>
    <?php include('modal/pub-task-setnotlivedate.php') ?>
    <?php include('modal/pub-task-scheduleaction.php') ?>
    <?php include('modal/pub-task-setlivedate.php') ?>
    <?php include('modal/pub-task-edit-pendingwarning.php') ?>
    <?php include('modal/pub-task-setpendingreleasedate.php') ?>
    <?php include('modal/pub-task-edit-deletewarning.php') ?>
    <?php include('modal/pub-task-setpublishdate.php') ?>
    <?php include('modal/pub-task-previousschedule.php') ?>
    <?php include('modal/pub-task-viewscheduledaction.php') ?>
    <div class="modal fade" id="modal_publishdate1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Specify Publish Date</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label " for="api_account_type"> Publish Date Options </label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="2">
                                    I will manually release these changes when ready</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="3">
                                    Specify publish date </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 pubdate_widget3" id=""  style="display:none">
                            <label for="title" class="control-label">Publish Date</label>
                            <span class="help-block small"> Specify the date and time that you wish for these updates to be published.</span>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="counter-container">
                                        <input type="text" name="title" required="" countdown="" class="form-control picktime"  tabindex="0" aria-required="false" aria-invalid="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_publishdate2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Specify Publish Date</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label " for="api_account_type"> Publish Date Options </label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="1">
                                    Publish immediately upon admin approval</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="2">
                                    I will manually release these changes when ready</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="3">
                                    Specify publish date </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 pubdate_widget3" id=""  style="display:none">
                            <label for="title" class="control-label">Publish Date</label>
                            <span class="help-block small"> Specify the date and time that you wish for these updates to be published. Note that if this task is not reviewed for approval before this date, it will be published immediately upon approval.</span>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="counter-container">
                                        <input type="text" name="title" required="" countdown="" class="form-control picktime"  tabindex="0" aria-required="false" aria-invalid="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_cancelupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Cancel Task Updates</h4>
                </div>
                <div class="modal-body"> By canceling the submitted updates to this task, the original version of this task will remain unchanged and the new version will be discarded. Are you sure you would like to proceed? </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel Task Updates</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $(".nextpage").click(function() {
            $("#page1,#footer1").hide();
            $("#page2,#footer2").show();
        });

    });
</script> 
    <script>
    $(document).ready(function() {
        $(".taskmeta").hide();
        $(".task-details-triggerview").on('click', function() {
            $(this).next(".taskmeta").fadeToggle();
            $(this).children(".icon-angle-right").toggleClass("icon-angle-down");
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $('#showdetails1, #showdetails2,#showdetails3').change(function() {
            if (this.checked)
                $(".taskmeta").show();
            else
                $(".taskmeta").hide();
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("#showdetails1, #showdetails2,#showdetails3").click(function() {
            $(".icon-angle-right").toggleClass("icon-angle-down");
        });
    });
</script> 
    <script type='text/javascript'>
     $(function() {
                $('.picktime').datetimepicker();
            });
            
     </script> 
    <script>
    $(document).ready(function() {
		$(".declined").hide();
        $('#toggledeclined').click(function() {
            if ($(this).is(':checked')) {
                $(".declined").show();
            } else {
                $(".declined").hide();
            }
        });
    });
</script> 
    <script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
    <script>
    $(document).ready(function() {
        $('.icon-cancel-circled').on("click", function() {
            $(this).parents('span').fadeOut();
        });
		
		$(".apply_filter").click(function(){
    $("#filter_tags .label.label-white").show();
});


      
    });
</script> 
    <script>


$(document).ready(function() {
    $('#table1, #table2').DataTable( {
        "paging":   false,
		"bFilter":   false,
        "info":     false,
    } );
} );


</script> 
    <script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        $('.dropdown-toggle').dropdown();


        $('#select_status li').on('click', function() {
            $('#dropdown_title_campuses').html($(this).find('a').html());
        });
		
		 $('#select_role li').on('click', function() {
            $('#dropdown_title_roles').html($(this).find('a').html());
        });
		
		
    }); //]]>
</script> 
</div>
</body>
</html>
