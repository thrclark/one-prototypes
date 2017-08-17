<?php
$section = 'publishing';
$page_title = 'pub-taskcentermaint';
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
                                        <h2 class="taskmaint-preview-content-title"> Task Centers</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 section-controls"> <a href="pub-taskcentermaint-new.php" class="btn btn-xs btn-default"><i class="icon-plus-2"></i>New Task Center</a></div>
                        </div>
                        <section>
                            <div class="row section-head">
                                <div class="col-sm-8"> </div>
                                <div class="col-sm-4"> </div>
                            </div>
                            <div class="page-utilities hidden-xs">
                                <div class="page-utilities-item hidden-xs">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="showdetails1">
                                            Detail View </label>
                                    </div>
                                </div>
                                
                                <!-- <div class="page-utilities-item">
                                    <div class="input-group input-group-sm col-xs-4 pull-right" id="adv-search">
                                        <input type="text" class="form-control" placeholder="Filter by Keyword" />
                                        <div class="input-group-btn">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default btn-sm">Apply Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>--> 
                                
                            </div>
                            <table class="table table-hover table-condensed table-actions display tablesaw tablesaw-stack"  data-tablesaw-mode="stack" id="table1" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title <span class="small text-muted hidden-xs">(Application)</span></th>
                                        <th>Campus</th>
                                        <th>Status</th>
                                        <th><span class="visible-xs">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>IUB Orientation</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/icon-box.png" alt=""  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Box.IU"/><img src="../img/task-icons-new/icon-campus-events.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-classifieds.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-registration.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-005.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-kuali.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Campus Life</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>Student</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>IUB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Admissions</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>IUB</td>
                                        <td><span class="label label-white">Live</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>Employee Center</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/icon-classifieds.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-019.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-academic-calendar.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-007.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-005.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-change-name.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Administration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>Faculty, Staff</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>All Campuses</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Human Resources</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>All Campuses</td>
                                        <td><span class="label label-white">Live</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>University Travel</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/icon-classifieds.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-registration.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-015.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-016.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-academic-calendar.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-software-downloads.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-018.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-005.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-020.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Administration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>Faculty, Staff</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>All Campuses</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Human Resources</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>All Campuses</td>
                                        <td><span class="label label-white">Live</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>Purchasing</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/icon-box.png" alt=""/  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Box.IU"><img src="../img/task-icons-new/icon-campus-events.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-classifieds.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-registration.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-005.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-kuali.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Administration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>Faculty, Staff</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>All Campuses</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Human Resources</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>All Campuses</td>
                                        <td><span class="label label-white">Inactive</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>IUK Orientation</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/SD-015.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-016.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-software-downloads.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-018.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-020.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Campus Life</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>Student</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>IUK</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Admissions</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>IUK</td>
                                        <td><span class="label label-white">Live</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>Hospitality Services</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/icon-box.png" alt=""/  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Box.IU"><img src="../img/task-icons-new/icon-campus-events.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-classifieds.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-registration.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-005.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-kuali.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Campus Life</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>All Roles</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>All Campuses</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Conferences</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>All Campuses</td>
                                        <td><span class="label label-white">Inactive</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right hidden-xs"></i>Parking</div>
                                            <div class="taskmeta hidden-xs">
                                                <table class="taskmeta-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tasks:</td>
                                                            <td><img src="../img/task-icons-new/icon-box.png" alt=""/  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Box.IU"><img src="../img/task-icons-new/icon-campus-events.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-classifieds.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-registration.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-account-creation.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/SD-005.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /><img src="../img/task-icons-new/icon-kuali.png" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Application Name" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Categories:</td>
                                                            <td>Campus Life</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Roles:</td>
                                                            <td>All Roles</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Publisher:</td>
                                                            <td>Parking Operations</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div></td>
                                        <td>IUPUI, IUPUC</td>
                                        <td><span class="label label-white">Live</span></td>
                                        <td><div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Task Center</a></li>
                                                        <li><a href="#">Feature</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#xxxxxxxxxxxxxxxxxx">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div></td>
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
    <?php include('modal/pub-task-summary.php') ?>
    <?php include('modal/pub-task-summary-update.php') ?>
    <?php include('modal/pub-task-edit-selectversion.php') ?>
    <?php include('modal/pub-task-setnotlivedate.php') ?>
    <?php include('modal/pub-task-setlivedate.php') ?>
    <?php include('modal/pub-task-edit-pendingwarning.php') ?>
    <?php include('modal/pub-task-setpendingreleasedate.php') ?>
    <?php include('modal/pub-task-edit-deletewarning.php') ?>
    <?php include('modal/pub-task-setpublishdate.php') ?>
    <?php include('modal/pub-task-previousschedule.php') ?>
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
</div>
</body>
</html>
