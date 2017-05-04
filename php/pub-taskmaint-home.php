<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
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
                                    <h2 class="h3">All Tasks</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"><a href="pub-taskmaint-edit.php" class="btn btn-xs btn-default"><i class="icon-plus-2"></i>Task</a></div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="showdetails">
                                    Detail View</label>
                            </div>
                            <table class="table table-condensed table-borderewwwd table-actions tablesaw tablesaw-stack"
                                   data-tablesaw-mode="stack" id="tablesaw-3579">
                                <thead>
                                    <tr>
                                        <th>Title <span class="small text-muted">(Application)</span></th>
                                        <th>Status</th>
                                        <th>Scheduling </th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Draft</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>(awaiting approval)</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li class="disabled"><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Schedule 'Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Set Dates for 'Active/Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active</td>
                                        <td>Inactive: 09/15/2017 5:00am</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Reschedule Task 'Inactive' Date</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br></td>
                                        <td>Active: 07/15/2017 5:00am<br>
                                            Inactive: 09/15/2017 5:00am</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: (awaiting approval)</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Schedule 'Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active <br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: (awaiting approval)<br>
                                            Inactive: 09/15/2017 5:00am <br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Reschedule Task 'Inactive' Date</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active <br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: TBD<br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Schedule 'Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Schedule Pending Updates Release</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active <br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: 07/15/2017 5:00am<br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Schedule 'Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Edit Pending Updates Release Date</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active <br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: TBD<br>
                                            Inactive: 09/15/2017 5:00am <br></td>
                                        <td ><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Reschedule Task 'Inactive' Date</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Schedule Pending Updates Release</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Active <br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: 07/15/2017 5:00am<br>
                                            Inactive: 09/15/2017 5:00am</td>
                                        <td ><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Inactive'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setnolivedate">Reschedule Task 'Inactive' Date</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Edit Pending Updates Release Date</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: (awaiting approval)</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu16" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Set Dates for 'Active/Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Active: 06/15/2017 5:00am<br>
                                            Update: (awaiting approval)<br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Active: 06/15/2017 5:00am<br>
                                            Update: (awaiting approval)<br>
                                            Inactive: 09/15/2017 5:00am</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: TBD<br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu13" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Set Dates for 'Active/Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Schedule Pending Updates Release</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: TBD<br>
                                            Inactive: 09/15/2017 5:00am <br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Schedule Pending Updates Release</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: 07/15/2017 5:00am<br></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Set Dates for 'Active/Inactive' Status</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Edit Pending Updates Release Date</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr >
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Active: 06/15/2017 5:00am<br>
                                            Update: 07/15/2017 5:00am</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Edit Pending Updates Release Date</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Update: 07/15/2017 5:00am<br>
                                            Inactive: 09/15/2017 5:00am</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Edit Pending Updates Release Date</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Alcohol Sanctions</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive<br>
                                            <span class="small text-muted">pending updates</span></td>
                                        <td>Active: 06/15/2017 5:00am<br>
                                            Update: 07/15/2017 5:00am<br>
                                            Inactive: 09/15/2017 5:00am</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu14" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_pendingwarning">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Set Task to 'Active'</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setlivedate">Edit Task 'Active/Inactive' Dates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                     <li><a href="pub-tasksubmitted-edit.php">Edit Pending Updates</a></li>
                                                    <li><a href="#">Release Pending Updates Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_setpendingreleasedate">Edit Pending Updates Release Date</a></li>
                                                    <li><a href="#">Delete Pending Updates</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <!-- <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Apple</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>IT Services, Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>All IU Campuses</td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>07/15/2017 5:00am<br>
                                            <span class="small text-muted">(pending approval)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li class="disabled"><a href="#" class="">Manually Publish Update Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate2">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Approved Chartered Buses <span class="small text-muted">(BusCompanies.cfm)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Transportation, Administrative, Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>All IU Campuses</td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Bus Routes <span class="small text-muted">(TARC)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUS<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus 411 Information</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB, IUPUI<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>Upon admin approval<br>
                                            <span class="small text-muted">(pending approval)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate2">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Alerts</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Elections <span class="small text-muted">(IUSB Vote)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Administrative, Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUSB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUE<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUPUI<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>07/18/2017 5:00am<br>
                                            <span class="small text-muted">(approved)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#">Manually Publish Update Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate1">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUPUC<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>07/18/2017 5:00am<br>
                                            <span class="small text-muted">(approved)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#">Manually Publish Update Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate1">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUN<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>07/18/2017 5:00am<br>
                                            <span class="small text-muted">(approved)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#">Manually Publish Update Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate1">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUK<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUS<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus events</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUSB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Tour</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Draft</td>
                                        <td>Upon admin approval<br>
                                            <span class="small text-muted">(pending approval)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate2">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Capital Asset Management<span aria-hidden="false" class="small text-muted"> (FR)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>Manual release by publisher<br>
                                            <span class="small text-muted">(pending approval)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Update Summary</a></li>
                                                    <li class="disabled"><a href="#" class="">Manually Publish Update Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate2">Change Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Check Account Balance <span class="small text-muted">(Jagtag)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Housing &amp; Dining, Finances, Personal Information</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Childcare fees</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUS<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Classifieds</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Draft</td>
                                        <td>Manual release by publisher<br>
                                            <span class="small text-muted">(approved)</span></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Draft Task Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#">Manually Publish Task Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate1">Set Task Release Date</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Code of conduct</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Competitive Scholarship Application <span class="small text-muted">(Academic Works)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Admissions, Academics, Campus Life, Enrollment, Orientation</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUPUI<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Construction Alerts</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Housing &amp; Dining, Transportation, Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Counseling and Psychological Services <span class="small text-muted">(CAPS)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Deal of the Day Promotion <span class="small text-muted">(Jagtag)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Housing &amp; Dining, Campus Life, HR &amp; Benefits</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>DeviceNet</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>IT Services, Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Division of Student Affairs</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td><span aria-hidden="true" >asdfasdfasdf</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Emergency Contact Phone Numbers <span class="small text-muted">(Protect.IU)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>All IU Campuses</td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Energy Matters</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Explore Majors and More <span class="small text-muted">(University Division)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Academics, Campus Life, Careers, Orientation</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Explore Programs <span class="small text-muted">(University Division)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Admissions, Academics, Campus Life, Careers, Orientation</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUB<span aria-hidden="true">, </span><span aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td>Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Extinguisher Information - IU Departments <span class="small text-muted">(Show Extinguishers)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Housing &amp; Dining, Administrative, Campus Life, Research</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>All IU Campuses</td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Extinguisher Information - Public <span class="small text-muted">(Unit Inspection Report)</span></div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Housing &amp; Dining, Administrative, Campus Life, Research, Libraries</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>All IU Campuses</td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>First Aid - CPR Classes</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Administrative, Campus Life, Training</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>All IU Campuses</td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Haven</div>
                                            <table class="small taskmeta">
                                                <tbody>
                                                    <tr>
                                                        <td>Categories:</td>
                                                        <td>Campus Life</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roles:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IU Campuses:</td>
                                                        <td>IUPUI, IUPUC<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>HavenPlus</div>
                                            <table class="small taskmeta">
                                                <tbody>
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
                                                        <td>IUPUC, IUPUI<span
                                                        aria-hidden="true">, </span><span
                                                aria-hidden="true">All IU Campuses</span></td>
                                                    </tr>
                                                </tbody>
                                            </table></td>
                                        <td> Live</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li> <li><a href="#" data-toggle="modal" data-target="#modal_deletewarning">Delete</a></li>
                                                  
                                                </ul>
                                            </div></td>
                                    </tr>-->
                                </tbody>
                            </table>
                            <div class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="icon-plus-2"></i>View More </a></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <?php include('modal/pub-task-summary.php') ?>
    <?php include('modal/pub-task-edit-selectversion.php') ?>
    <?php include('modal/pub-task-setnotlivedate.php') ?>
    <?php include('modal/pub-task-setlivedate.php') ?>
    <?php include('modal/pub-task-edit-pendingwarning.php') ?>
    <?php include('modal/pub-task-setpendingreleasedate.php') ?>
    <?php include('modal/pub-task-edit-deletewarning.php') ?>
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
        $('#showdetails').change(function() {
            if (this.checked)
                $(".taskmeta").show();
            else
                $(".taskmeta").hide();
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("#showdetails").click(function() {
            $(".icon-angle-right").toggleClass("icon-angle-down");
        });
    });
</script> 
    <script type='text/javascript'>
     $(function() {
                $('.picktime').datetimepicker();
            });
            
     </script> 
</div>
</body>
</html>
