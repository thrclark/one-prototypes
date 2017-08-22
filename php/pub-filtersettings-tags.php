<?php
$section = 'settings';
$page_title = 'pub-filtersettings-tags';
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
<style type="text/css">
.label1 {
	border-radius: 10px;
	background-color: #fff;
	color: #555;
	border: solid 1px #cccccc;
}
.label1 {
	color: #a94442;
	border: solid 1px #a94442;
}
.label.label-white .icon-circle {
	font-size: 8px;
	color: #2879ba;
}
</style>
<style>
/* Tabs panel */
.tabbable-panel {
}
/* Default mode */
.tabbable-line > .nav-tabs {
	border: none;
	margin: 0px;
}
.tabbable-line > .nav-tabs > li {
	margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
	border: 0;
	margin-right: 0;
	color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
	color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
	border-bottom: 4px solid #eeeeee;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
	border: 0;
	background: none !important;
	color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
	color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
	margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
	border-bottom: 4px solid #cccccc;
	position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
	border: 0;
	color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
	color: #404040;
}
.tabbable-line > .tab-content {
	margin-top: -3px;
	background-color: #fff;
	border: 0;
	border-top: 1px solid #eee;
	padding-bottom: 15px;
	padding-top: 0px;
}
.portlet .tabbable-line > .tab-content {
	padding-bottom: 0;
}
.taskmeta {
	width: 100%
}
.taskmeta hr {
	margin: 0px;
	border-top: 1px solid #ddd;
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
                            <div class="col-xs-12 col-sm-9 section-header">
                                <div class="taskmaint-preview">
                                    <div class="taskmaint-preview-content">
                                        <h2 class="taskmaint-preview-content-title">Tags</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12  col-sm-3 text-right"> <a href="pub-taskcontacts-new.php" class="btn btn-xs btn-default pull-right"><i class="icon-plus-2"></i>New Tag</a> </div>
                        </div>
                        <hr>
                        <section>
                            <table class="table table-hover table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tag Name</th>
                                        <th>Visibility</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">1095-C</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">1098T</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">AAR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Abuse</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Academic Bulletin</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Academic Plan</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Academic Planning</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Academic Position Search</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Academic Structure</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Access</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Access Management</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Account Creation</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Activities</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Add</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Add New Person</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Address</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Admissions</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Admissions Requirements</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Adoption</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Advanced Placement</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Adventures</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Advising</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">AIM</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Alumni</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Animal Care &amp; Use</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Annual Report</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Annual Review</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Appeals</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Appear</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Applicant Tracking</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Application Access</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Applications</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Approval</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">AQIP</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">ARMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Art</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Ask</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Assignments</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Athletics</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Authorizations</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Auto Awards</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Award</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Awards</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Banking Services</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">BCP</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Benefits</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">BI</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">BIM</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Biosafety</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Blog</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Blueprints</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Bookstore</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">BT</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Budgeting</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Bursar</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Bursar Stop Payment</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Bus</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Business</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Business Continuity</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CAFM</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Calendar</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Campus 411</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CampusBird</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Candidate</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Capital Planning</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Career Guide</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Careers</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CARMin</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CAS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CBI</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Center for Teaching and Learning</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Centers</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Certificate</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Certification</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Change Name</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Chemistry</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Chronicle</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Citations</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Class Search</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Classes</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Classroom</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Clinical Research Billing Compliance</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">ClinicalTrials.gov</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Clock In</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Clock Out</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Cloud</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Coaching</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Coding</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Collaboration</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Community Engagement</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Community service</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Compliance</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Compromise</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Comptia</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Computer labs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Computers</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Conferencing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Conflict of Interest</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Continuity</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Continuous Quality Improvement</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Contracts</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Core Animal Facilities</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Cost of attendance</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Course Change</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Course Request</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Courses</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Cover Letter</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CPMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Credit</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Credits</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Crimson Card</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">CWA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Dashboard</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Data</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Data Governance</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Debt</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Degree Progress</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Degree Requirements</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Deposit</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Digital</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Digital Learning Tool</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Dining</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Directory</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Disaster Recovery</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Discount</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Discrimination</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Donor</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Dossier</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Downloads</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">DPR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Drop</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">DS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Duo</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">EAB</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eAdd</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eApp</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eApplications</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eAppraisal</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">EBI</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eDocs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eDrop</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Education Advisory Board</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eGrade</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">eGradeChanges</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Eligibility</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Email</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Emergency</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Emergency Alerts</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Emergency Management</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Emergency Notifications</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Employers</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Employment</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Energy</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Enrollment</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Enrollment Requirements</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Environment</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Environmental Health and Safety</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">etraining</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Evaluations</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Events</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Exams</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Explore</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Export Control</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Exposure</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">External Funding</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Facilities</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Faculty</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Faculty Job Postings</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Faculty Jobs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FAFSA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Fair</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FAR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FAR Data Reports</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FDA GLP</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FDA GMP</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FIMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Financial Aid</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Financial literacy</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Financial System</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">First Year Experience</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FLAGS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Flight</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Floorplans</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">FM: Interact</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Foreign language</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Freshmen</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Garage</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">GI Bill</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Grades</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Graduate</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Graduate School</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Grant Services</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Grants</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Hardware</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Health</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Healthcare</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Help</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Help Desk</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">HIPAA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Hire eDoc</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Holds</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Hotel</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Housing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">HRMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Human Resources</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Human Subjects</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Human Subjects QA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IBC</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IBUCKS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IDs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Incident</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Information Session</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">INLOCC</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Institutes</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Institutional Biosafety Committee</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Instructor Information</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Instructor-led</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Intelligent Infrastructure</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Intercampus</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Internal Funding</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">International</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Internship</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Interview</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Interview Request</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IRB</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">ISPP-25</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IT</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IT Help</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IU Foundation</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IU Notify</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IU Ready</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IUanyWare</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IUF</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IUIE</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">IWMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Job Aid</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Jobs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">KC</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">KFS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">KFS Financials</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Kuali</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Kuali Coeus</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Kuali Identity</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Kuali Workflow</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Late Add</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Late Drop</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Late Swap</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Leadership</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Leads</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Library</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Life Events</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Listing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Loan consolidation</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Loan counseling</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Loans</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Mail</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Maintenance</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Management</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Maps</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Mass Notification</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Master Promissory Note</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Meals</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Medicare Coverage Qualification</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Meeting</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">MFA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Microsoft IT Academy</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Military</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Misuse</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">MMS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Mobile</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Money</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">MoneySmarts</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Multi Factor Authentication</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">My classes</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">MyRA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">News</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Nominations</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Notice</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Notifications</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">OAA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">OAA eDocLite</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Occupancy</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Offer Request</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Office for Women</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Office of Academic Affairs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Online</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Open Enrollment</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Operations</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">ORA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">ORC</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Order</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Orientation</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">OTP</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">OVCR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Overseas</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">OVPR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Parents</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Parking</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Passphrase</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Pay</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Paycheck</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Payroll</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Paystub</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">PeopleSoft</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Permissions</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Permits</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Personal Information</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Pervasive Technology Institute (PTI)</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">phd</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">PHI</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Phishing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Phone</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Physical Plant</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Pilot</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Placement exams</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">PLUS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Podcast</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Points</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Policies</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Pollution</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Preferred Name</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Preparedness</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Print</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Privacy</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Professional Development</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Programming</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Prometric</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Promotion</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Proposal Development</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Proposals</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Prospects</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Protect</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">PTO</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Public</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Public transportation</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Publication</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Purchasing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Quality Improvement</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Radiation Safety</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Rape</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">REC</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Records</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Registration</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Reimbursement</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Renewals</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Rental Car</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Repairs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Repayment calculator</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Reports</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Research Administration</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Research Compliance</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Research Development</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Research Integrity</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Research Technologies</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Reservation</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Reservations</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Restricted</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Results</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Resume</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Reviewer Portal</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">ROAR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Rooms</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Roster</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">RPS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Rules</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Safety</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Salesforce</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Schedules</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Scholarships</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Search</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Search Status</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Security</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Sensitive Data Exposure</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Settings</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Sex</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Sidewalk</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Signage</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">SIS</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Software</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Spam</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">SPF</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Spill</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">SPR</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Square Footage</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">SSA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">SSC</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Staff</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Stairs</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Starter Kit</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Status</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Storage</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Strong Authentication</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Student</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Student Center</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Student Performance Roster</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Student Planner</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Study Abroad</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Summer Job</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Support</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Swap</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Taxes</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tech Support</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tech Talk</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tenure</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Testing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Textbooks</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Third party</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tickets</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Timesheet</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Title IV</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Topaz</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tour</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Training</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Transcripts</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Transfers</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Travel</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Travel@IU</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Trips</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tuition</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Tutoring</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Two-Step Login</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Uits</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">UITS Intranet</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">UITS Research Technologies (RT)</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Undergraduate</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">University Division</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Utilities</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">VA</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Vacancy Notice</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Veterans</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Videoconferencing</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Violence</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Visa</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Voc-Rehab</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Voucher</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">VP for Research</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">W-2</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Waiver Request</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Walk</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Web Site Privacy Notices</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Webinar</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Webmail</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Wireless</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Wombat</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Work</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Workflow</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Workgroup</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Workshop</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">YTD</td>
                                        <td >Visible</td>
                                        <td><a class="btn btn-default btn-xs" href="#">Edit</a> <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <?php include('modal/pub-task-contacts.php') ?>
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
</div>
</body>
</html>
