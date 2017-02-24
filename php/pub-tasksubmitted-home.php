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
.modal-body .table th[scope="row"] {
	background-color: #eeeeee;
}
.thischanged {
	background: #ffffcc
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
                        <section style="display:;" id="all_verifications">
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Approve Submitted Tasks</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"></div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="toggledeclined">
                                    Show declined tasks </label>
                            </div>
                            <table class="table table-condensed table-actions tablesaw tablesaw-stack table-collection" data-tablesaw-mode="stack" id="">
                                <thead>
                                    <tr>
                                        <th scope="row">Title (Application)</th>
                                        <th scope="row">Status</th>
                                        <th scope="row">Scheduled</th>
                                        <th scope="row">Submitted By</th>
                                        <th scope="row"><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="declined">
                                        <td><div class="asdf"><i class="icon-angle-right"></i>Explore Programs</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Admissions, Academics, Campus Life, Careers, Orientation</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >All</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Updated <span class="small text-danger" > (Declined) </span> </td>
                                        <td>&nbsp;</td>
                                        <td > thrclark </td>
                                        <td><a href="#" data-toggle="modal" data-target="#standardmodal_messages-declined"class="btn btn-default btn-xs">Notes</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Submission Details</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                            <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                     <tr class="declined">
                                        <td><div class="asdf"><i class="icon-angle-right"></i>Motor Vehicle Records Check</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Transportation</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >All</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>UB, All IU Campuses,
                                                            IUPUI </td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>New <span class="small text-danger" > (Declined) </span></td>
                                        <td>&nbsp;</td>
                                        <td > hesenthal </td>
                                        <td><a href="#" data-toggle="modal" data-target="#standardmodal_messages-declined"class="btn btn-default btn-xs">Notes</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Submission Details</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                            <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                       <tr class="declined">
                                        <td><div class="asdf"><i class="icon-angle-right"></i>Waiver Request</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Training</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >All</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>UB, All IU Campuses,
IUPUI </td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Updated <span class="small text-danger" > (Declined) </span> </td>
                                        <td>&nbsp;</td>
                                        <td > seenyj </td>
                                        <td><a href="#" data-toggle="modal" data-target="#standardmodal_messages-declined"class="btn btn-default btn-xs">Notes</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Submission Details</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                            <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                    <tr >
                                        <td><div class="asdf"><i class="icon-angle-right"></i>New Employee HIPAA Training</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Training</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >All</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses<br>
                                                            IUPUI
                                                        </span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>New </td>
                                        <td>Upon Approval</td>
                                        <td > breckerm </td>
                                        <td><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted"class="btn btn-default btn-xs">Notes</a> <a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
                                            <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                    <tr >
                                        <td><div class="asdf"><i class="icon-angle-right"></i> Asset Retirement Global <span aria-hidden="false"> (KFS)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td><span >Finances<span aria-hidden="false">, </span></span><span >Administrative</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >Staff<span aria-hidden="false">, </span></span><span >Faculty</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Updated </td>
                                        <td>Upon Approval</td>
                                        <td > tcain </td>
                                        <td><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted"class="btn btn-default btn-xs">Notes</a> <a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
                                            <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                    <tr >
                                        <td><div class="asdf"><i class="icon-angle-right"></i> Capital Asset Management<span aria-hidden="false">  (FR)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td><span >Finances<span aria-hidden="false">, </span></span><span >Administrative</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >Staff<span aria-hidden="false">, </span></span><span >Faculty</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Updated</td>
                                        <td>3/21/17 8:00am</td>
                                        <td > tozogar </td>
                                        <td><a href="#" class="btn btn-default btn-xs disabled">Notes</a> <a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a> <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                    <tr >
                                        <td><div class="asdf"><i class="icon-angle-right"></i> IU Peer Coaches<span aria-hidden="false"> (University Division)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td><span >Finances<span aria-hidden="false">, </span></span><span >Administrative</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td><span >Staff<span aria-hidden="false">, </span></span><span >Faculty</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> New </td>
                                        <td>4/09/17 5:00pm</td>
                                        <td > adobiega </td>
                                        <td><a href="#" class="btn btn-default btn-xs disabled">Notes</a> <a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
                                            <!-- <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_compare" >View Details</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages">Read Notes</a></li>
                                                </ul>
                                            </div>--></td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
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
                    <fieldset>
                        <legend>Task Details</legend>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" id="highlightdifferences" checked>
                                Highlight Differences </label>
                        </div>
                        <table class="table table-condensed">
                            <thead class="">
                                <tr>
                                    <th scope="column">Item</th>
                                    <th scope="column">Current Value</th>
                                    <th scope="column">Submitted Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Task Title</th>
                                    <td class="forcewrap thischanged">Classifieds</td>
                                    <td class="forcewrap thischanged">Classifieds 2</td>
                                </tr>
                                <tr>
                                    <th scope="row">Task URL</th>
                                    <td class="thischanged">https://apps.iu.edu/ccf2-prd/classifieds</td>
                                    <td class="thischanged">https://apps.iu.edu/ccf2-prd/classifieds2</td>
                                </tr>
                                <tr>
                                    <th scope="row">Application Name</th>
                                    <td>(Not Specified)</td>
                                    <td>(Not Specified)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Launch in new Tab/Window</th>
                                    <td>yes</td>
                                    <td>yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Authentication Type</th>
                                    <td>internal</td>
                                    <td>internal</td>
                                </tr>
                                <tr>
                                    <th scope="row">Primary Contact</th>
                                    <td>UITS Support Center</td>
                                    <td>UITS Support Center</td>
                                </tr>
                                <tr>
                                    <th scope="row">Secondary Contact</th>
                                    <td class="thischanged">(Not Specified)</td>
                                    <td class="thischanged">Classifieds2 Support</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile Friendly</th>
                                    <td>yes</td>
                                    <td>yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><p>Have something to buy or sell? Or need a roommate or tutor? Find all of this and more in the IU classifieds.</p>
                                        <p>IU Classifieds is the place to go for current Students, Staff and Faculty.</p></td>
                                    <td><p>Have something to buy or sell? Or need a roommate or tutor? Find all of this and more in the IU classifieds.</p>
                                        <p>IU Classifieds is the place to go for current Students, Staff and Faculty.</p></td>
                                </tr>
                                <tr>
                                    <th scope="row">Meta Description</th>
                                    <td>Buy or sell items, find tutors or roommates, all in the IU classifieds.</td>
                                    <td>Buy or sell items, find tutors or roommates, all in the IU classifieds.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Active Dates/Status</th>
                                    <td>Active</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <th scope="row">Versioning</th>
                                    <td>2.2.0</td>
                                    <td>2.2.0</td>
                                </tr>
                                <tr>
                                    <th scope="row">Release Notes</th>
                                    <td><ul>
                                            <li>List View is now default view</li>
                                            <li>Grid View has been improved</li>
                                            <li>Share Ad Url is now provided on the Ad details page</li>
                                            <li>Searching has been improved</li>
                                        </ul></td>
                                    <td><ul>
                                            <li>List View is now default view</li>
                                            <li>Grid View has been improved</li>
                                            <li>Share Ad Url is now provided on the Ad details page</li>
                                            <li>Searching has been improved</li>
                                        </ul></td>
                                </tr>
                                <tr>
                                    <th scope="row">Unique Key</th>
                                    <td>classifieds</td>
                                    <td>classifieds</td>
                                </tr>
                                <tr>
                                    <th scope="row">Stat Recording Type</th>
                                    <td>user</td>
                                    <td>user</td>
                                </tr>
                                <tr>
                                    <th scope="row">Publisher</th>
                                    <td>One.IU Support Team</td>
                                    <td>One.IU Support Team</td>
                                </tr>
                                <tr>
                                    <th scope="row">Icon Image</th>
                                    <td><img src="../img/task-icons-new/icon-account-creation.png" width="153" height="153" alt=""/></td>
                                    <td><img src="../img/task-icons-new/icon-account-creation.png" width="153" height="153" alt=""/></td>
                                </tr>
                                <tr>
                                    <th scope="row">Screen Shots/ Video (Desktop)</th>
                                    <td class="zoomin thischanged"><div class="hover-preview"><img src="../img/app-screenshots/ccl_grid.png"  alt=""/></div>
                                        <div class="hover-preview"><img src="../img/app-screenshots/ccl_list.png"  alt=""/></div></td>
                                    <td class="zoomin thischanged"><div class="hover-preview"><img src="../img/app-screenshots/ccl_grid.png"  alt=""/></div>
                                        <div class="hover-preview"><img src="../img/app-screenshots/ccl_thumb.png"  alt=""/></div></td>
                                </tr>
                                <tr>
                                    <th scope="row">Screen Shots/ Video (Tablet)</th>
                                    <td class="zoomin">&nbsp;</td>
                                    <td class="zoomin">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th scope="row">Screen Shots/ Video (Mobile)</th>
                                    <td class="zoomin thischanged"><div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-002.png"  alt=""/></div></td>
                                    <td class="zoomin thischanged"><div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-002.png"  alt=""/></div>
                                        <div class="hover-preview"><img src="../img/app-screenshots/ccl-mobile-001.png"  alt=""/></div></td>
                                </tr>
                                <tr>
                                    <th scope="row">Campus</th>
                                    <td>All Campuses</td>
                                    <td>All Campuses</td>
                                </tr>
                                <tr>
                                    <th scope="row">Roles</th>
                                    <td>All Roles</td>
                                    <td>All Roles</td>
                                </tr>
                                <tr>
                                    <th scope="row">Categories</th>
                                    <td>Campus Life, Advising</td>
                                    <td>Campus Life, Advising</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tags</th>
                                    <td>event, activities, textbooks, housing, collaboration, business, coaching, listing</td>
                                    <td>event, activities, textbooks, housing, collaboration, business, coaching, listing, meeting, tutoring</td>
                                </tr>
                                <tr>
                                    <th scope="row">Active Content Public URL</th>
                                    <td>https://onestart.iu.edu/ccf2-prd/classifieds/liveData</td>
                                    <td>https://onestart.iu.edu/ccf2-prd/classifieds/liveData</td>
                                </tr>
                                <tr>
                                    <th scope="row">Active Content Authentication</th>
                                    <td>none</td>
                                    <td>none</td>
                                </tr>
                                <tr>
                                    <th scope="row">Update Frequency (seconds)</th>
                                    <td>(Not Specified)</td>
                                    <td>(Not Specified)</td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
                <div class="modal-footer"> <a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-sm">Edit Task</a>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="modal fade" id="standardmodal_messages-submitted" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-default modal-multimessage">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-doc"></i> Task Notes</h4>
                </div>
                <div class="modal-body">
                    <div class="comment-list">
                        <ul class="list-unstyled">
                           
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Task Submitted <small>(abretts)</small></div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">6/3/16 1:08 PM</small> </div>
                                    </div>
                                    <div class="message-content">
                                        <p>This is a task submission note Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.

</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
        <div class="modal fade" id="standardmodal_messages-declined" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-default modal-multimessage">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="icon-doc"></i> Task Notes</h4>
                </div>
                <div class="modal-body">
                    <div class="comment-list">
                        <ul class="list-unstyled">
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title">Task Declined <small>(rvallow)</small></div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">6/3/16 2:16 PM</small> </div>
                                    </div>
                                    <div class="message-content">
                                        <p> We strongly recommend looking at your icon. We are moving away from small text due to users not being able to read it and it appearing blurry. We can submit a redesign for your icon to our designers. *if so please change to universal icon requesting the redesign or email one@iu.edu requesting this.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Task Submitted <small>(abretts)</small></div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">6/3/16 1:08 PM</small> </div>
                                    </div>
                                    <div class="message-content">
                                        <p>This is a task submission note Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.

</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <script>
        //$(document).ready(function {
          //  $('.divider').on('hide.bs.dropdown', function {
        //        return false;
        //    });
      //  });
    </script> 
    <script>
    $(document).ready(function() {
        $(".taskmeta").hide();
        $(".asdf").on('click', function() {
            $(this).next(".taskmeta").fadeToggle();
			$(this).children(".icon-angle-right").toggleClass( "icon-angle-down" );
        });
    });
</script> 
    <script>
$(document).ready(function(){
    $('#highlightdifferences').change(function(){
        if(this.checked)
            $('.thischanged').css( "background", "#ffffcc" );
        else
            $('.thischanged').css( "background", "none" );

    });
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





</div>
</body>
</html>
