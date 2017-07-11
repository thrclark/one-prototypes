<?php
$section = 'publishing';
$page_title = 'pub-taskcontacts';
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
	width:100%}
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
                                        <h2 class="taskmaint-preview-content-title">Task Contacts</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12  col-sm-3 text-right"> <a href="pub-taskcontacts-new.php" class="btn btn-xs btn-default pull-right"><i class="icon-plus-2"></i>New Contact</a> </div>
                        </div>
                        <div class="page-utilities">
                            <div class="page-utilities-item" style="padding-top:11px">
                                <div class="checkbox">
                                    <label style="white-space:nowrap">
                                        <input type="checkbox" id="showdetails1">
                                        Detail View </label>
                                </div>
                            </div>
                            <div class="page-utilities-item">
                                <input type="text" class="form-control input-sm" placeholder="Filter by Keyword" style="width:180px">
                            </div>
                        </div>
                        <section>
                          
                            <table class="table table-hover table-condensed table-actions" id="">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Academic Position Search: Additional Resources</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Academic Position Search: Download A Form</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>DM Activity Insight Help</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>DS Reports</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Duo Support Team</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>E Training</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>eApp Instructions</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>eBuilder</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>HathiTrust Research Center</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>HGRMS</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>High Performance File Systems Group</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Housing and Residence Life - IUPUI Indianapolis</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>HRMS Support Center</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>ILLiad (Interlibrary Loan) - Northwest</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Immunization Information</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Indiana Daily Student</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Indiana University Auditorium - IU Bloomington</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Indiana University Cinema - IU Bloomington</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Athletics IT</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Bursar Pay</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Check Stop and Reissue Workflow</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU China Gateway</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Communications</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Contact Center</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Credit Union</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Europe Gateway</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Global Gateway Network</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Human Resources</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Human Resources - Benefits</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Human Resources - IU 1095-C Questions</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Human Resources - Training</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Human Resources – Employment</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Human Resources – HR Today</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU International Magazine</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Kokomo International Student Services</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Kokomo Library</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Motor Pool</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Notify</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Parking Operations</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Libraries - IU Bloomington</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Libraries - IU Bloomington Interlibary Loan / Document Delivery</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Libraries - IU Bloomington Questions</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Libraries - IUSB</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Libraries - Northwest</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Library Resources A-Z - Northwest</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Manage Outlook Picture</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Master's Application for Advanced Degree eDoc Help Files</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Master's eDoc Contacts</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Math Lab - IU Northwest</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Mathematical Science IUPUI</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Media Collections Online</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Multicultural Center - IUPUI</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Admissions - IUPUI Indianapolis</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Admissions - IUSB</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Alternative Screening and Intervention Services (OASIS)</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Budget Administration</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Career Services - IU East</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Diversity, Equity &amp; Inclusion - IUPUI</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Environmental Health and Safety Management</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Financial Aid - IUE</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Financial Aid - IUS</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Financial Aid - IUSB</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Financial Aid and Scholarships  - IUNW</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Financial Literacy</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of First Year Experience Programs</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of Research Compliance</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Registrar - IU East</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Registrar - IU Kokomo</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Registrar - IU Northwest</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Registrar - IU Southeast</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Registrar - IUPUI</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Registrar - IUSB</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Vice Chancellor for Research</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Vice President for Research</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Office of the Vice Provost for Research</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>OMS Server Request</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>One.IU Support</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>One.IU Support Material</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Online Course Questionnaires</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Orientation - NW</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>OTP Additional Information</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>OVPGC</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>OVPIA</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>OVPIA Support Center</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>School of Public Health Career Services - IU Bloomington</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Selective Scholarships</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>SetUp 3rd Party Users</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Student Central on Union</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Student Development Center - IU Southeast</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Student Organization Accounts</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Travel On-Demand Documentation (TODD)</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>UCard</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>UCSO Help Desk</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>UISO</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>UITS Collaboration Technologies</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>UITS Research Technologies</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Vice President for Research - HR Office</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Vice President for Research - Strategic Research Initiatives</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Web Services</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
<tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Website Privacy Notice Generator</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Wired Device Registration</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="xxxxxxxxxxx"><div class="task-details-triggerview"><i class="icon-angle-right"></i>Wireless Outages</div>
                                            <div class="taskmeta">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Student Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-phone"></i> Phone</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Staff Support Hotline</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td>812-856-5555</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-mail"></i> Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Support Email</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="mmailto:systemsupport@iu.edu">systemsupport@iu.edu</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><i class="icon-link"></i> URL</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name:</td>
                                                            <td>Help Documentation</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value:</td>
                                                            <td><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td><a class="btn btn-default btn-xs" href="pub-taskcontacts-edit.php">Edit</a>

 <a href="#" class="btn btn-default btn-xs">Delete</a></td>
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
