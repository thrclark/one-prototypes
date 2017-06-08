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
                        <section>
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Submitted Tasks</h2>
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
                                        <th scope="row">Title</th>
                                        <th scope="row">Type</th>
                                        <th scope="row">Publish Date</th>
                                        <th scope="row">Submitted By</th>
                                        <th scope="row"><span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="declined">
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Explore Programs</div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="true" >All IU Campuses</span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td >Updated </td>
                                        <td><span class="text-danger" > Declined </span></td>
                                        <td > thrclark </td>
                                        <td>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-declined" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Motor Vehicle Records Check</div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                            IUPUI </td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td >Updated</td>
                                        <td><span class="text-danger" > Declined </span></td>
                                        <td > hesenthal </td>
                                        <td>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-declined" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Waiver Request</div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                            IUPUI </td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td >Updated</td>
                                        <td><span class="text-danger" > Declined </span></td>
                                        <td > seenyj </td>
                                        <td>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-declined" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Apple</div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses, IUPUI </span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td >New </td>
                                        <td>Upon admin approval<br></td>
                                        <td > breckerm </td>
                                        <td><a href="pub-taskmaint-approve.php" class="btn btn-default btn-xs">Review</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Submission</a></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus 411 Information</div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses, IUPUI </span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td >New </td>
                                        <td>TBD by publisher<br></td>
                                        <td > breckerm </td>
                                        <td><a href="pub-taskmaint-approve.php" class="btn btn-default btn-xs">Review</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Submission</a></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Tour</div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses, IUPUI </span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td >New </td>
                                        <td>Upon admin approval<br></td>
                                        <td > breckerm </td>
                                        <td><a href="pub-taskmaint-approve.php" class="btn btn-default btn-xs">Review</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Submission</a></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Asset Retirement Global <span aria-hidden="false" class="small text-muted"> (KFS)</span></div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td > Updated </td>
                                        <td>Upon admin approval</td>
                                        <td > tcain </td>
                                        <td><a href="pub-taskmaint-approve.php" class="btn btn-default btn-xs">Review</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Submission</a></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Capital Asset Management<span aria-hidden="false" class="small text-muted"> (FR)</span></div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td > Updated</td>
                                        <td>TBD by publisher<br></td>
                                        <td > tozogar </td>
                                        <td><a href="pub-taskmaint-approve.php" class="btn btn-default btn-xs">Review</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Submission</a></li>
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
                                        <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> IU Peer Coaches <span aria-hidden="false" class="small text-muted">(University Division)</span></div> <div class="taskmeta">
                                                    <div class="task-icon"><img src="../img/task-icons-new/icon-address.png" alt=""/></div>
                                           
                                                <table class="taskmeta-table">
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
                                                        <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td> </tr>
                                                        </tbody>
                                                    </table></div></td>
                                                <td > New </td>
                                        <td>TBD by publisher<br></td>
                                        <td > adobiega </td>
                                        <td><a href="pub-taskmaint-approve.php" class="btn btn-default btn-xs">Review</a>
                                            <div class="dropdown" style="display:inline">
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#" data-toggle="modal" data-target="#standardmodal_messages-submitted" >View Notes</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modal_cancelupdate">Cancel Submission</a></li>
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
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_publishdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                    Publish immediately upon admin approval </label>
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
                                        <p>This is a task submission note Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large. </p>
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
                                        <p>This is a task submission note Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large. </p>
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
    <div class="modal fade" id="modal_cancelupdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Cancel Task Updates</h4>
                </div>
                <div class="modal-body"> By canceling the submitted updates to this task, the original values will remain in place and the new values will be discarded. Are you sure you would like to proceed? </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel Task Updates</button>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
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
        //$(document).ready(function {
          //  $('.divider').on('hide.bs.dropdown', function {
        //        return false;
        //    });
      //  });
    </script> 
    <script>
    $(document).ready(function() {
        $(".taskmeta").hide();
        $(".task-details-triggerview").on('click', function() {
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
    <script type='text/javascript'>
     $(function() {
                $('.picktime').datetimepicker();
            });
            
     </script> 
</div>
</body>
</html>
