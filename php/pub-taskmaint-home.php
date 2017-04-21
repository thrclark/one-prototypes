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
                                <div class="col-xs-12  col-sm-3 section-controls"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Task</a></div>
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
                                        <th>Title (Application)</th>
                                        <th>Status</th>
                                        <th>Pending Updates</th>
                                        <th><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>AlcoholEdu</div>
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
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
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
                                        <td> Active</td>
                                        <td><i class="icon-ok"><span class="sr-only">yes</span></i></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Approved Chartered Buses (BusCompanies.cfm)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Bus Routes (TARC)</div>
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
                                        <td> Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td><i class="icon-ok"><span class="sr-only">yes</span></i></td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Elections (IUSB Vote)</div>
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
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Check Account Balance (Jagtag)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Competitive Scholarship Application (Academic Works)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Counseling and Psychological Services (CAPS)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Deal of the Day Promotion (Jagtag)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Emergency Contact Phone Numbers (Protect.IU)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Explore Majors and More (University Division)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Explore Programs (University Division)</div>
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
                                        <td> Inactive</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Extinguisher Information - IU Departments (Show Extinguishers)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Extinguisher Information - Public (Unit Inspection Report)</div>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Active</td>
                                        <td>&nbsp;</td>
                                        <td><div class="dropdown">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                    <li><a href="#">Feature</a></li>
                                                    <li><a href="#">View Comments</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Cancel Pending Updates</a></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center"><a href="#" class="btn btn-xs btn-default"><i
                                            class="fa fa-angle-down" aria-hidden="true"></i> View More </a></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <div class="modal fade" id="modal_whichversion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Select Version</h4>
                </div>
                <div class="modal-body">
                    <p> This task has previously been edited, and is scheduled to become effective on 09/13/2017 at 5:00am.  Choose which version of this task you wish to edit: </p>
                    <div class="well" style="    margin-left: 80px;
    margin-right: 80px;">
                        <button type="button" class="btn btn-default btn-lg btn-block">Current</button>
                        <button type="button" class="btn btn-default btn-lg btn-block">Pending</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function {
        $('.divider').on('hide.bs.dropdown', function {
            return false;
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
$(document).ready(function(){
    $("#showdetails").click(function(){
        $(".icon-angle-right").toggleClass("icon-angle-down");
	
    });

});
</script> 
</div>
</body>
</html>
