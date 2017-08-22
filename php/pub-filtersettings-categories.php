<?php
$section = 'settings';
$page_title = 'pub-filtersettings-categories';
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
                                        <h2 class="taskmaint-preview-content-title">Categories</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12  col-sm-3 text-right"> <a href="pub-taskcontacts-new.php" class="btn btn-xs btn-default pull-right"><i class="icon-plus-2"></i>New Category</a> </div>
                        </div>
                        <hr>
                        <section>
                            <table class="table table-hover table-condensed table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">Academics</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Accounts</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Administrative</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Admissions</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Campus Life</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Careers</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Enrollment</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Faculty Services</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Finances</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Housing &amp; Dining</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">HR &amp; Benefits</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">International</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">IT Services</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Libraries</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Orientation</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Payroll &amp; Taxes</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Personal Information</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Research</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Training</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td class="">Transportation</td>
                                        <td><b class="tablesaw-cell-label"><span class="visible-xs">Actions</span></b><span class="tablesaw-cell-content">
                                            <div class="dropdown">
                                                <div class="dropdown1">
                                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="visible-xs-inline">Select</span> <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                        <li><a href="pub-taskmaint-edit.php">Edit Category</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_categories-tasks">View Tasks</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Delete Category</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </span></td>
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
    <?php include('modal/pub-categories-tasks.php') ?>
</div>
</body>
</html>
