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
                    
                     <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Maintain Tasks</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"><a href="vfy-pub-new-verification.php" class="btn btn-xs btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Task</a></div>
                            </div>
                    
                    
                      <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Submitted</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Featured</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>
  
  
  <br><br><br><br><br><br><br><br><br><br>
  
  
                        <section style="display:;" id="all_verifications">
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h3 class="h4">All Tasks</h3>
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
                                        <th>Scheduled Update</th>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Not Live</td>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td>Not Live</td>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                        <td> Not Live</td>
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
                                        <td> Not Live</td>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_updatesummary">View Pending Task Summary</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#">Manually Publish Task Now</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_publishdate1">Set Pending Update Release Date</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Pending Update</a></li>
                                                    <li role="separator" class="divider"></li>
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
                                        <td> Not Live</td>
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
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                        <td> Not Live</td>
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
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">Remove</a></li>
                                                    <li><a href="#">Delete</a></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
                                                    <li role="separator" class="divider"></li>
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
    <div class="modal fade" id="modal_updatesummary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default modal-tabs-top">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified" id="myTab">
                        <li class="active"><a data-target="#toptab1" data-toggle="tab">Summary of Changes</a></li>
                        <li><a data-target="#toptab2" data-toggle="tab"> Notes</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="toptab1">
                            <h4>Summary of Changes</h4>
                            <table class="table table-condensed table-comparison">
                                <thead class="">
                                    <tr>
                                        <th scope="column">Item</th>
                                        <th scope="column">Current Value<span class="small text-muted"></span></th>
                                        <th scope="column">Pending Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Authentication Type</th>
                                        <td class="">None</td>
                                        <td class="">External</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unique Key</th>
                                        <td>task-123</td>
                                        <td>task-234</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Stat Recording Type</th>
                                        <td>User</td>
                                        <td>Anonymous</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="toptab2">
                            <h4>Notes</h4>
                            <div class="comment-list">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="message">
                                            <div class="row message-header">
                                                <div class="col-xs-12 col-sm-8 message-title">Admin <small>(rvallow)</small></div>
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
                                                <div class="col-xs-12 col-sm-8 message-title"> Publisher <small>(abretts)</small></div>
                                                <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">6/3/16 1:08 PM</small> </div>
                                            </div>
                                            <div class="message-content">
                                                <p>This is a task submission note Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content --> 
        </div>
    </div>
    <div class="modal fade" id="modal_whichversion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Select Version</h4>
                </div>
                <div class="modal-body" id="page1" style="display: block">
                    <p> You may use either the currently published version or pending version of this task as a starting point for new edits. </p>
                    <div class="well" style="    margin-left: 80px;
    margin-right: 80px;"> <a href="#" class="btn btn-default btn-lg btn-block nextpage">Use Current Version</a> <a href="#" class="btn btn-default btn-lg btn-block nextpage">Use Pending Version</a> </div>
                </div>
                <div class="modal-footer" id="footer1"> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a></div>
                <div class="modal-body" id="page2" style="display:none">
                    <p> There is a pending version of this task that is scheduled to be released on 09/13/2017 at 5:00am. By proceeding to create a new version, the currently pending version will be discarded and you will be asked to provide a new release date for the new version.</p>
                    <p> Do you wish to proceed?</p>
                </div>
                <div class="modal-footer" id="footer2" style="display:none"> <a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a> <a href="pub-taskmaint-edit.php" class="btn btn-primary">Edit Task</a></div>
            </div>
        </div>
    </div>
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
                        <div class="form-group col-md-12" id="pubdate_widget3"  style="display:none">
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
                                    <input type="radio" name="cars" value="2">
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
                        <div class="form-group col-md-12" id="pubdate_widget3"  style="display:none">
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
    <script type="text/javascript">//<![CDATA[



$(document).ready(function() {

    $("input[name$='cars']").click(function() {
        var test = $(this).val();

        $("#pubdate_widget3").slideUp();
        $("#pubdate_widget" + test).slideDown();
    });
});

</script> 
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
</div>
</body>
</html>
