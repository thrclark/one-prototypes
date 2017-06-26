<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<link  href="../bower_components/cropperjs/dist/cropper.css" rel="stylesheet" type="text/css">
<style type="text/css">
.screenshots .tab-content .img-thumbnail {
}
.screenshots .panel-body .tab-content .image-controls {
	border: 1px solid #ddd;
	padding: 4px;
	margin-bottom: 20px;
	text-align: center;
}
.screenshots .panel-body .tab-content .image-controls img {
	margin-bottom: 5px;
}
.screenshots .nav-pills>li.active>a, .screenshots .nav-pills>li.active>a:hover, .screenshots .nav-pills>li.active>a:focus {
	color: #333;
	background-color: #f5f5f5;
}
.screenshots .panel-body .tab-content .tab-pane {
	border-bottom: none;
}
.screenshots .panel-body .tab-content {
	border-right: none;
}
</style>
<style>

.page-utilities {
	border-bottom: solid 1px #dddddd;
	padding-top: 5px;
	padding-bottom: 5px;
	margin-bottom: 10px;
}
hr {
	border-top: 1px solid #dddddd;
}
.panel.panel-default .panel-title .small.text-muted {
	font-family: BentonSansRegular;
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
                <div class="col-md-2">
                    <?php include('includes/nav-pub.php') ?>
                </div>
                <div class="col-md-10">
                    <div class="primary-content" style="min-height:500px">
                        <section>
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <div class="edittask-preview" style="display: inline-block; position:relative;"> <img src="../img/task-icons-new/icon-upload.png"  alt=""/ style="max-height: 42px;width: auto;vertical-align: text-bottom;">
                                        <div class="edittask-preview-content" style="display: inline-block; padding-left:5px;">
                                            <div class="edittask-preview-content-title" style="font-weight: bold; font-size:20px">New Task: (unnamed)</div>
                                            <div class="small text-muted"> &nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12  col-sm-3 text-right">
                                    <div id="help_toggle" class=""> Help: <a href="#" id="help_toggle_switch">on</a> </div>
                                </div>
                            </div>
                            <!--  <div class="page-utilities"> </div>-->
                            <hr style="margin-top: 0px;margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_taskbasics">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_taskbasics" aria-expanded="true" aria-controls="collapse_taskbasics" class="">Task Basics</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_taskbasics" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_taskbasics">
                                                <div class="panel-body">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="tasktitle"> Task Title </label>
                                                        <span class="help-block small">The Task title is how the Task will be referred to throughout the system.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="taskurl"> Task URL </label>
                                                        <span class="help-block small">The URL will take users to the location where they can perform this Task.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="taskurl" name="taskurl" type="text" placeholder="" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="uniquekey">Unique Key</label>
                                                        <span class="help-block small">The unique key uniquely identifies this Task in its Campuses (if any). This value will be used as part of the URL for this Task.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="uniquekey" name="uniquekey" type="text" placeholder="" required="required">
                                                            </div>
                                                            <div class="col-sm-6" style="padding-top:14px"> <a href="#" class="small" style="font-style: italic;margin-left: -15px;"> Suggest a key</a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="applicationname"> Application Name <span class="small text-muted">(optional)</span></label>
                                                        <span class="help-block small">The name of the application that provides this Task. If two Tasks have the same title, the application can be used to differentiate between them.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="applicationname" name="applicationname" type="text" placeholder="" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="status">New Window Launch </label>
                                                        <span class="help-block small">Specify if this task is to open in a new window. Task will open in existing window if left unchecked.</span>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Open in new window </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="mobilefriendly">Mobile Optimized </label>
                                                        <span class="help-block small">Specify if this task has been optimized for mobile devices.</span>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Task is mobile-optimized </label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_description" aria-expanded="false" aria-controls="collapse_description" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_description">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_description" aria-expanded="true" aria-controls="collapse_description" class="">Description</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_description" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_description">
                                                <div class="panel-body">
                                                    <div class="form-group ">
                                                        <label class="control-label " for="description"> Description</label>
                                                        <span class="help-block small"> Add a description for this task. </span>
                                                        <div>
                                                            <div id="markItUpDescription" class="markItUp">
                                                                <div class="markItUpContainer">
                                                                    <div class="markItUpHeader">
                                                                        <ul>
                                                                            <li class="markItUpButton markItUpButton1 "><a href="#" accesskey="B" title="Bold [Ctrl+B]">Bold</a></li>
                                                                            <li class="markItUpButton markItUpButton2 "><a href="#" accesskey="I" title="Italic [Ctrl+I]">Italic</a></li>
                                                                            <li class="markItUpSeparator">---------------</li>
                                                                            <li class="markItUpButton markItUpButton3 "><a href="#" accesskey="L" title="Link [Ctrl+L]">Link</a></li>
                                                                            <li class="markItUpSeparator">---------------</li>
                                                                            <li class="markItUpButton markItUpButton4 preview"><a href="#" title="Preview">Preview</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <textarea class="form-control text-formatter markItUpEditor" cols="40" id="description" name="message" rows="3"></textarea>
                                                                    <div class="markItUpFooter">
                                                                        <div class="markItUpResizeHandle"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="description"> Meta Description</label>
                                                        <span class="help-block small"> The meta description is a more concise description that is visible to search engines. This description may show up in search results on those search engines. </span>
                                                        <div>
                                                            <div id="markItUpDescription" class="markItUp">
                                                                <div class="markItUpContainer">
                                                                    <div class="markItUpHeader">
                                                                        <ul>
                                                                            <li class="markItUpButton markItUpButton1 "><a href="#" accesskey="B" title="Bold [Ctrl+B]">Bold</a></li>
                                                                            <li class="markItUpButton markItUpButton2 "><a href="#" accesskey="I" title="Italic [Ctrl+I]">Italic</a></li>
                                                                            <li class="markItUpSeparator">---------------</li>
                                                                            <li class="markItUpButton markItUpButton3 "><a href="#" accesskey="L" title="Link [Ctrl+L]">Link</a></li>
                                                                            <li class="markItUpSeparator">---------------</li>
                                                                            <li class="markItUpButton markItUpButton4 preview"><a href="#" title="Preview">Preview</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <textarea class="form-control text-formatter markItUpEditor" cols="40" id="description" name="message" rows="3"></textarea>
                                                                    <div class="markItUpFooter">
                                                                        <div class="markItUpResizeHandle"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_taskicon" aria-expanded="false" aria-controls="collapse_taskicon" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_taskicon">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_taskicon" aria-expanded="true" aria-controls="collapse_taskicon" class="">Task Icon</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_taskicon" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_taskicon">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="form-group ">
                                                                <label class="control-label " for="">Select the source of the icon image </label>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="iconsource" value="1" id="show_custom">
                                                                        Custom image upload </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="iconsource" value="2" id="show_library">
                                                                        Selected from current library </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4" >
                                                            <div id="crop-avatar" style="display:;">
                                                                <div class="avatar-view text-center"> <img src="../img/task-icons-new/icon-classifieds.png" alt="Avatar"> </div>
                                                                <div class="text-center"> <a href="#" class="">Upload</a></div>
                                                                <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                                                    <div class="modal-dialog modal-default modal-lg">
                                                                        <div class="modal-content">
                                                                            <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title" id="avatar-modal-label">Edit Application Icon</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="avatar-body">
                                                                                        <div class="avatar-upload"> </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-9">
                                                                                                <div class="avatar-wrapper"></div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="avatar-preview preview-lg hidden-xs"></div>
                                                                                                <div class="avatar-preview preview-md"></div>
                                                                                                <div class="avatar-preview preview-sm"></div>
                                                                                                <div class="avatar-preview preview-xs"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row avatar-btns">
                                                                                            <div class="col-md-3 col-xs-4">
                                                                                                <input type="hidden" class="avatar-src" name="avatar_src">
                                                                                                <input type="hidden" class="avatar-data" name="avatar_data">
                                                                                                <label class="btn btn-default btn-upload btn-xs" for="avatarInput" title="Upload image file">
                                                                                                    <input type="file" class="sr-only avatar-input" id="avatarInput" name="avatar_file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                                                                                    <span class="docs-tooltip" data-toggle="tooltip" title=""><span class="hidden-xsdd">Upload</span> </span> </label>
                                                                                                <button type="button" class="btn btn-default btn-xs" data-method="reset" title="Reset"> <span class="icon-arrows-cw" data-method="reset" title="Reset"></span> </button>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-xs-8 text-right">
                                                                                                <div class="btn-group">
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="icon-zoom-in" data-method="zoom" data-option="0.1" title="Zoom In"></span> </button>
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="icon-zoom-out" data-method="zoom" data-option="-0.1" title="Zoom Out"></span></button>
                                                                                                </div>
                                                                                                <div class="btn-group hidden-xs">
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="-10" data-second-option="0" title="Move Left"> <span class="icon-left-open" data-method="move" data-option="-10" data-second-option="0" title="Move Left"></span></button>
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="icon-right-open" data-method="move" data-option="10" data-second-option="0" title="Move Right"></span></button>
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="icon-up-open" data-method="move" data-option="0" data-second-option="-10" title="Move Up"></span> </button>
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="move" data-option="0" data-second-option="10" title="Move Down"> <span class="icon-down-open" data-method="move" data-option="0" data-second-option="10" title="Move Down"></span> </button>
                                                                                                </div>
                                                                                                <div class="btn-group hidden-xs">
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="icon-ccw-1" data-method="rotate" data-option="-45" title="Rotate Left"></span> </button>
                                                                                                    <button type="button" class="btn btn-default btn-xs" data-method="rotate" data-option="45" title="Rotate Right"> <span class="icon-cw-3" data-method="rotate" data-option="45" title="Rotate Right"></span> </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                                    <button type="submit" class="btn btn-primary avatar-save">Done</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                                            </div>
                                                            <div class="form-group" id="image_library" style="display:none">
                                                                <div class="row">
                                                                    <div class="col-md-4" style=" width:205px">
                                                                        <label for="imageSetId" class=" sr-only ">Choose an Image</label>
                                                                        <img src="../img/task-icons-new/icon-bill-pay.png" alt="" style="width:100%; margin-bottom:10px"/>
                                                                        <select name="imageSetId" class="form-control" tabindex="0" aria-invalid="false">
                                                                            <option value="0" label="A Example">A Example</option>
                                                                            <option value="1" label="A Test">A Test</option>
                                                                            <option value="2" label="Admissions">Admissions</option>
                                                                            <option value="3" label="Alert">Alert</option>
                                                                            <option value="4" label="Approved">Approved</option>
                                                                            <option value="5" label="Blocked">Blocked</option>
                                                                            <option value="6" label="Box test">Box test</option>
                                                                            <option value="7" label="Bus">Bus</option>
                                                                            <option value="8" label="Calendar">Calendar</option>
                                                                            <option value="9" label="Calendar - IU Mobile">Calendar - IU Mobile</option>
                                                                            <option value="10" label="Calendar - old">Calendar - old</option>
                                                                            <option value="11" label="Canvas">Canvas</option>
                                                                            <option value="12" label="Cap">Cap</option>
                                                                            <option value="13" label="Car">Car</option>
                                                                            <option value="14" label="Checkbox">Checkbox</option>
                                                                            <option value="15" label="Clipboard">Clipboard</option>
                                                                            <option value="16" label="Cloud">Cloud</option>
                                                                            <option value="17" label="Computer">Computer</option>
                                                                            <option value="18" label="Document">Document</option>
                                                                            <option value="19" label="Down arrow">Down arrow</option>
                                                                            <option value="20" label="Emergency">Emergency</option>
                                                                            <option value="21" label="Gear">Gear</option>
                                                                            <option value="22" label="Globe">Globe</option>
                                                                            <option value="23" label="Google">Google</option>
                                                                            <option value="24" label="Grades">Grades</option>
                                                                            <option value="25" label="Graduation">Graduation</option>
                                                                            <option value="26" label="Guest">Guest</option>
                                                                            <option value="27" label="Hard Drive">Hard Drive</option>
                                                                            <option value="28" label="Holds">Holds</option>
                                                                            <option value="29" label="House">House</option>
                                                                            <option value="30" label="IUPUI">IUPUI</option>
                                                                            <option value="31" label="Key">Key</option>
                                                                            <option value="32" label="Link">Link</option>
                                                                            <option value="33" label="Lock">Lock</option>
                                                                            <option value="34" label="Mail">Mail</option>
                                                                            <option value="35" selected="selected" label="Money">Money</option>
                                                                            <option value="36" label="Nametag">Nametag</option>
                                                                            <option value="37" label="Nodes">Nodes</option>
                                                                            <option value="38" label="OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!">OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!</option>
                                                                            <option value="39" label="Outlink">Outlink</option>
                                                                            <option value="40" label="Papers">Papers</option>
                                                                            <option value="41" label="Password">Password</option>
                                                                            <option value="42" label="People">People</option>
                                                                            <option value="43" label="Question">Question</option>
                                                                            <option value="44" label="Rewind">Rewind</option>
                                                                            <option value="45" label="Rolodex">Rolodex</option>
                                                                            <option value="46" label="Scholarships">Scholarships</option>
                                                                            <option value="47" label="Search">Search</option>
                                                                            <option value="48" label="Star">Star</option>
                                                                            <option value="49" label="Talisma">Talisma</option>
                                                                            <option value="50" label="Tenant Admin test">Tenant Admin test</option>
                                                                            <option value="51" label="test">test</option>
                                                                            <option value="52" label="Test only GLOBE">Test only GLOBE</option>
                                                                            <option value="53" label="Test only MONEY">Test only MONEY</option>
                                                                            <option value="54" label="Textbooks">Textbooks</option>
                                                                            <option value="55" label="Textbooks - old">Textbooks - old</option>
                                                                            <option value="56" label="Urgent">Urgent</option>
                                                                            <option value="57" label="User">User</option>
                                                                            <option value="58" label="Wrench">Wrench</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_contacts" aria-expanded="false" aria-controls="collapse_contacts" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_contacts">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_contacts" aria-expanded="true" aria-controls="collapse_contacts" class="">Contacts &amp; Publisher</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_contacts" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_contacts">
                                                <div class="panel-body">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="contact1"> Primary Contact</label>
                                                        <span class="help-block small">Specify the primary contact information to be associated with this task.</span>
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <select id="contactId1" class="form-control   -required" required tabindex="0" aria-required="false" aria-invalid="false">
                                                                    <option value="">Select Contact</option>
                                                                    <option value="duo" label="CyberDH Group">CyberDH Group</option>
                                                                    <option value="duo" label="David's Contact name">David's Contact name</option>
                                                                    <option value="duo" label="Duo Support Team">Duo Support Team</option>
                                                                    <option value="duo" label="eApp Instructions">eApp Instructions</option>
                                                                    <option value="duo" label="eDossier Administrator">eDossier Administrator</option>
                                                                    <option value="duo" label="eText Administrator">eText Administrator</option>
                                                                    <option value="duo" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                                                    <option value="duo" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                                                    <option value="duo" label="Financial Management Services">Financial Management Services</option>
                                                                    <option value="duo" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                                                    <option value="duo" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                                                    <option value="duo" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                                                    <option value="duo" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                                                    <option value="duo" label="IT Customer Support">IT Customer Support</option>
                                                                    <option value="duo" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                                                    <option value="duo" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                                                    <option value="duo" label="IUB Libraries">IUB Libraries</option>
                                                                    <option value="duo" label="IUPUI Athletics">IUPUI Athletics</option>
                                                                    <option value="duo" label="IUPUI Libraries">IUPUI Libraries</option>
                                                                    <option value="duo" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                                                    <option value="duo" label="OCSS">OCSS</option>
                                                                    <option value="duo" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                                                    <option value="duo" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                                                    <option value="duo" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                                                    <option value="duo" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                                                    <option value="duo" label="Office of International Services">Office of International Services</option>
                                                                    <option value="duo" label="Office of Research Administration">Office of Research Administration</option>
                                                                    <option value="duo" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                                                    <option value="duo" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                                                    <option value="duo" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                                                    <option value="duo" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                                                    <option value="duo" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                                    <option value="duo" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                                                    <option value="duo" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                                                    <option value="duo" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                                                    <option value="duo" label="Physical Plant">Physical Plant</option>
                                                                    <option value="duo" label="Redhawk Review">Redhawk Review</option>
                                                                    <option value="duo" label="Research Storage">Research Storage</option>
                                                                    <option value="duo" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                                                    <option value="duo" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                                                    <option value="duo" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                                                    <option value="duo" label="Science Gateway">Science Gateway</option>
                                                                    <option value="duo" label="Scott test">Scott test</option>
                                                                    <option value="duo" label="Student Aid offices">Student Aid offices</option>
                                                                    <option value="duo" label="Super David">Super David</option>
                                                                    <option value="duo" label="test contact">test contact</option>
                                                                    <option value="duo" label="test contact types">test contact types</option>
                                                                    <option value="duo" label="The Horizon">The Horizon</option>
                                                                    <option value="duo" label="UITS Research Technologies">UITS Research Technologies</option>
                                                                    <option value="duo" label="UITS Support Center">UITS Support Center</option>
                                                                    <option value="duo" label="University Human Resources">University Human Resources</option>
                                                                    <option value="duo" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                                                    <option value="duo" label="Veteran Support Services">Veteran Support Services</option>
                                                                </select>
                                                                <div class="well well-sm" id="selectcontact1">
                                                                    <table class="table table-condensed">
                                                                        <thead class="sr-only">
                                                                            <tr>
                                                                                <th>Label</th>
                                                                                <th>Value</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Duo Support Documentation</td>
                                                                                <td class="forcewrap"><a href="https://kb.iu.edu/d/bfgm" target="_blank">https://kb.iu.edu/d/bfgm</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email Support</td>
                                                                                <td><a href="#">duo@iu.edu</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Phone Support</td>
                                                                                <td>123 123 1234</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="contact2"> Secondary Contact <span class="small text-muted">(optional)</span></label>
                                                        <span class="help-block small">Specify the secondary contact information to be associated with this task.</span>
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <select id="contactId2" class="form-control   -required" required tabindex="0" aria-required="false" aria-invalid="false">
                                                                    <option value="">Select Contact</option>
                                                                    <option value="duo" label="CyberDH Group">CyberDH Group</option>
                                                                    <option value="duo" label="David's Contact name">David's Contact name</option>
                                                                    <option value="duo" label="Duo Support Team">Duo Support Team</option>
                                                                    <option value="duo" label="eApp Instructions">eApp Instructions</option>
                                                                    <option value="duo" label="eDossier Administrator">eDossier Administrator</option>
                                                                    <option value="duo" label="eText Administrator">eText Administrator</option>
                                                                    <option value="duo" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                                                    <option value="duo" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                                                    <option value="duo" label="Financial Management Services">Financial Management Services</option>
                                                                    <option value="duo" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                                                    <option value="duo" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                                                    <option value="duo" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                                                    <option value="duo" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                                                    <option value="duo" label="IT Customer Support">IT Customer Support</option>
                                                                    <option value="duo" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                                                    <option value="duo" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                                                    <option value="duo" label="IUB Libraries">IUB Libraries</option>
                                                                    <option value="duo" label="IUPUI Athletics">IUPUI Athletics</option>
                                                                    <option value="duo" label="IUPUI Libraries">IUPUI Libraries</option>
                                                                    <option value="duo" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                                                    <option value="duo" label="OCSS">OCSS</option>
                                                                    <option value="duo" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                                                    <option value="duo" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                                                    <option value="duo" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                                                    <option value="duo" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                                                    <option value="duo" label="Office of International Services">Office of International Services</option>
                                                                    <option value="duo" label="Office of Research Administration">Office of Research Administration</option>
                                                                    <option value="duo" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                                                    <option value="duo" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                                                    <option value="duo" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                                                    <option value="duo" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                                                    <option value="duo" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                                    <option value="duo" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                                                    <option value="duo" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                                                    <option value="duo" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                                                    <option value="duo" label="Physical Plant">Physical Plant</option>
                                                                    <option value="duo" label="Redhawk Review">Redhawk Review</option>
                                                                    <option value="duo" label="Research Storage">Research Storage</option>
                                                                    <option value="duo" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                                                    <option value="duo" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                                                    <option value="duo" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                                                    <option value="duo" label="Science Gateway">Science Gateway</option>
                                                                    <option value="duo" label="Scott test">Scott test</option>
                                                                    <option value="duo" label="Student Aid offices">Student Aid offices</option>
                                                                    <option value="duo" label="Super David">Super David</option>
                                                                    <option value="duo" label="test contact">test contact</option>
                                                                    <option value="duo" label="test contact types">test contact types</option>
                                                                    <option value="duo" label="The Horizon">The Horizon</option>
                                                                    <option value="duo" label="UITS Research Technologies">UITS Research Technologies</option>
                                                                    <option value="duo" label="UITS Support Center">UITS Support Center</option>
                                                                    <option value="duo" label="University Human Resources">University Human Resources</option>
                                                                    <option value="duo" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                                                    <option value="duo" label="Veteran Support Services">Veteran Support Services</option>
                                                                </select>
                                                                <div class="well well-sm" id="selectcontact2">
                                                                    <table class="table table-condensed">
                                                                        <thead class="sr-only">
                                                                            <tr>
                                                                                <th>Label</th>
                                                                                <th>Value</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Duo Support Documentation</td>
                                                                                <td class="forcewrap"><a href="https://kb.iu.edu/d/bfgm" target="_blank">https://kb.iu.edu/d/bfgm</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email Support</td>
                                                                                <td><a href="#">duo@iu.edu</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Phone Support</td>
                                                                                <td>123 123 1234</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="contact2">Publisher</label>
                                                        <span class="help-block small">Specify the publisher of this task.</span>
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <select id="publisherId" class="form-control" required aria-invalid="false">
                                                                    <option value="" selected="selected"> Select Publisher </option>
                                                                    <option value="duo"  label="AA/CTL Webmaster">AA/CTL Webmaster</option>
                                                                    <option label="ABITC" value="duo">ABITC</option>
                                                                    <option label="Access Management Team / IMS" value="duo">Access Management Team / IMS</option>
                                                                    <option label="Admissions - IUK" value="duo">Admissions - IUK</option>
                                                                    <option label="Admitted JD Law Students" value="duo">Admitted JD Law Students</option>
                                                                    <option label="Advance College Project (ACP)" value="duo">Advance College Project (ACP)</option>
                                                                    <option label="AIT" value="duo">AIT</option>
                                                                    <option label="Appear" value="duo">Appear</option>
                                                                    <option label="ASQA - EIG" value="duo">ASQA - EIG</option>
                                                                    <option label="ASQA - Testing Tools" value="duo">ASQA - Testing Tools</option>
                                                                    <option label="Athletics" value="duo">Athletics</option>
                                                                    <option label="Auxiliary IT" value="duo">Auxiliary IT</option>
                                                                    <option label="BCP" value="duo">BCP</option>
                                                                    <option label="Bepko" value="duo">Bepko</option>
                                                                    <option label="BL-SPEA (SPEA IT)" value="duo">BL-SPEA (SPEA IT)</option>
                                                                    <option label="Bursar - Bloomington" value="duo">Bursar - Bloomington</option>
                                                                    <option label="CAITS" value="duo">CAITS</option>
                                                                    <option label="CANC" value="duo">CANC</option>
                                                                    <option label="Capital Planning and Facilities" value="duo">Capital Planning and Facilities</option>
                                                                    <option label="Career and Accessibility Services" value="duo">Career and Accessibility Services</option>
                                                                    <option label="Career Services Office - South Bend" value="duo">Career Services Office - South Bend</option>
                                                                    <option label="Classroom Technology Services" value="duo">Classroom Technology Services</option>
                                                                    <option label="Cloud Technologies" value="duo">Cloud Technologies</option>
                                                                    <option label="Compliance Office" value="duo">Compliance Office</option>
                                                                    <option label="CRM" value="duo">CRM</option>
                                                                    <option label="CTSI" value="duo">CTSI</option>
                                                                    <option label="Data Center Operations" value="duo">Data Center Operations</option>
                                                                    <option label="DEMA" value="duo">DEMA</option>
                                                                    <option label="Department of Emergency Medicine" value="duo">Department of Emergency Medicine</option>
                                                                    <option label="Department of OB/GYN" value="duo">Department of OB/GYN</option>
                                                                    <option label="Division of Student Affairs" value="duo">Division of Student Affairs</option>
                                                                    <option label="Division of Undergraduate Education Technology Services" value="duo">Division of Undergraduate Education Technology Services</option>
                                                                    <option label="Educational Partnerships and Student Success" value="duo">Educational Partnerships and Student Success</option>
                                                                    <option label="EIG" value="duo">EIG</option>
                                                                    <option value="duo">Emergency Management &amp; Continuity</option>
                                                                    <option label="Engagement" value="duo">Engagement</option>
                                                                    <option label="Enrollments/Student Services" value="duo">Enrollments/Student Services</option>
                                                                    <option label="Enterprise Document Management" value="duo">Enterprise Document Management</option>
                                                                    <option label="ESS" value="duo">ESS</option>
                                                                    <option label="etrain" value="duo">etrain</option>
                                                                    <option label="Financial Management Services (FMS)" value="duo">Financial Management Services (FMS)</option>
                                                                    <option label="First year Seminar - IUPUC" value="duo">First year Seminar - IUPUC</option>
                                                                    <option label="Functional Contact – Support Center" value="duo">Functional Contact – Support Center</option>
                                                                    <option label="Healthy IU" value="duo">Healthy IU</option>
                                                                    <option label="Housing and Residence Life - IUPUI" value="duo">Housing and Residence Life - IUPUI</option>
                                                                    <option label="HRMS" value="duo">HRMS</option>
                                                                    <option label="HRMS - Technical" value="duo">HRMS - Technical</option>
                                                                    <option label="Human Resources and Payroll - Kokomo" value="duo">Human Resources and Payroll - Kokomo</option>
                                                                    <option label="IN-TEST" value="duo">IN-TEST</option>
                                                                    <option label="Indiana University Cinema" value="duo">Indiana University Cinema</option>
                                                                    <option label="Indiana University School of Dentistry" value="duo">Indiana University School of Dentistry</option>
                                                                    <option label="Indiana University School of Medicine (IUSM)" value="duo">Indiana University School of Medicine (IUSM)</option>
                                                                    <option label="INLOCCA" value="duo">INLOCCA</option>
                                                                    <option label="Internal Audit Group" value="duo">Internal Audit Group</option>
                                                                    <option label="IT Community Partners" value="duo">IT Community Partners</option>
                                                                    <option label="IT Services" value="duo">IT Services</option>
                                                                    <option label="IT Southeast Campus" value="duo">IT Southeast Campus</option>
                                                                    <option label="IT Statewide Conference" value="duo">IT Statewide Conference</option>
                                                                    <option label="IT Training - Bloomington" value="duo">IT Training - Bloomington</option>
                                                                    <option label="IT Training - Kokomo" value="duo">IT Training - Kokomo</option>
                                                                    <option label="IU Alumni Association" value="duo">IU Alumni Association</option>
                                                                    <option label="IU Communications" value="duo">IU Communications</option>
                                                                    <option label="IU Contact Center" value="duo">IU Contact Center</option>
                                                                    <option label="IU East Career Services" value="duo">IU East Career Services</option>
                                                                    <option label="IU Foundation" value="duo">IU Foundation</option>
                                                                    <option label="IU Southeast Career Development Center" value="duo">IU Southeast Career Development Center</option>
                                                                    <option label="IUEHS" value="duo">IUEHS</option>
                                                                    <option label="IUEP EXECRES System Administrators" value="duo">IUEP EXECRES System Administrators</option>
                                                                    <option label="IUESCC" value="duo">IUESCC</option>
                                                                    <option label="IUPUI Campus Career and Advising Services" value="duo">IUPUI Campus Career and Advising Services</option>
                                                                    <option label="IUPUI Finance and Administration" value="duo">IUPUI Finance and Administration</option>
                                                                    <option label="IUPUI Finance and Administration Office of Technology Services" value="duo">IUPUI Finance and Administration Office of Technology Services</option>
                                                                    <option label="IUPUI Human Resources" value="duo">IUPUI Human Resources</option>
                                                                    <option label="IUPUI Testing Center" value="duo">IUPUI Testing Center</option>
                                                                    <option label="Kelley School - Help Desk" value="duo">Kelley School - Help Desk</option>
                                                                    <option label="KelleyOnlineDegrees" value="duo">KelleyOnlineDegrees</option>
                                                                    <option label="Kelly School of Business" value="duo">Kelly School of Business</option>
                                                                    <option label="KFS" value="duo">KFS</option>
                                                                    <option label="KOWeb" value="duo">KOWeb</option>
                                                                    <option label="Kuali Rice (ESI)" value="duo">Kuali Rice (ESI)</option>
                                                                    <option label="Libraries - Bloomington" value="duo">Libraries - Bloomington</option>
                                                                    <option label="Libraries - East" value="duo">Libraries - East</option>
                                                                    <option label="Libraries - IUPUC" value="duo">Libraries - IUPUC</option>
                                                                    <option label="Libraries - IUPUI" value="duo">Libraries - IUPUI</option>
                                                                    <option label="Libraries - Kokomo" value="duo">Libraries - Kokomo</option>
                                                                    <option label="Libraries - Northwest" value="duo">Libraries - Northwest</option>
                                                                    <option label="Libraries - SouthBend" value="duo">Libraries - SouthBend</option>
                                                                    <option label="Libraries - Southeast" value="duo">Libraries - Southeast</option>
                                                                    <option label="Mathematical Science IUPUI" value="duo">Mathematical Science IUPUI</option>
                                                                    <option label="MDEP" value="duo">MDEP</option>
                                                                    <option label="MoneySmarts" value="duo">MoneySmarts</option>
                                                                    <option label="Multicultural Center - IUPUI" value="duo">Multicultural Center - IUPUI</option>
                                                                    <option label="Oasis" value="duo">Oasis</option>
                                                                    <option label="Office of Admissions - IUSB" value="duo">Office of Admissions - IUSB</option>
                                                                    <option label="Office of Online Education" value="duo">Office of Online Education</option>
                                                                    <option label="Office of Overseas Study" value="duo">Office of Overseas Study</option>
                                                                    <option label="Office of Student Employment" value="duo">Office of Student Employment</option>
                                                                    <option label="Office of the Registrar - Bloomington" value="duo">Office of the Registrar - Bloomington</option>
                                                                    <option label="Office of the Registrar - IU East" value="duo">Office of the Registrar - IU East</option>
                                                                    <option label="Office of the Registrar - IU Southeast" value="duo">Office of the Registrar - IU Southeast</option>
                                                                    <option label="Office of the Registrar - IUPUC" value="duo">Office of the Registrar - IUPUC</option>
                                                                    <option label="Office of the Registrar - IUPUI" value="duo">Office of the Registrar - IUPUI</option>
                                                                    <option label="Office of the Registrar - Kokomo" value="duo">Office of the Registrar - Kokomo</option>
                                                                    <option label="Office of the Registrar - Northwest" value="duo">Office of the Registrar - Northwest</option>
                                                                    <option label="Office of the Registrar - South Bend" value="duo">Office of the Registrar - South Bend</option>
                                                                    <option label="OMS Southeast" value="duo">OMS Southeast</option>
                                                                    <option label="Oncourse" value="duo">Oncourse</option>
                                                                    <option label="One.IU Support Team" value="duo">One.IU Support Team</option>
                                                                    <option label="Orientation - Bloomington" value="duo">Orientation - Bloomington</option>
                                                                    <option label="Orientation - East" value="duo">Orientation - East</option>
                                                                    <option label="Orientation - IUPUC" value="duo">Orientation - IUPUC</option>
                                                                    <option label="Orientation - IUPUI" value="duo">Orientation - IUPUI</option>
                                                                    <option label="Orientation - Northwest" value="duo">Orientation - Northwest</option>
                                                                    <option label="Orientation - Southeast" value="duo">Orientation - Southeast</option>
                                                                    <option label="Orientation and Academic Advising - Kokomo" value="duo">Orientation and Academic Advising - Kokomo</option>
                                                                    <option label="OVPIA" value="duo">OVPIA</option>
                                                                    <option label="OVPUE" value="duo">OVPUE</option>
                                                                    <option label="Parking" value="duo">Parking</option>
                                                                    <option value="duo">Payroll &amp; Time</option>
                                                                    <option label="Policy Coordinator" value="duo">Policy Coordinator</option>
                                                                    <option label="Principal Online Services" value="duo">Principal Online Services</option>
                                                                    <option label="PROVEVP" value="duo">PROVEVP</option>
                                                                    <option label="PSIA" value="duo">PSIA</option>
                                                                    <option label="PTI Research Services" value="duo">PTI Research Services</option>
                                                                    <option label="RASD" value="duo">RASD</option>
                                                                    <option label="RASD - Compliance" value="duo">RASD - Compliance</option>
                                                                    <option label="RASD - Grants" value="duo">RASD - Grants</option>
                                                                    <option label="RASD - Grants/Compliance" value="duo">RASD - Grants/Compliance</option>
                                                                    <option label="RASD - OVCR" value="duo">RASD - OVCR</option>
                                                                    <option label="RASD - OVPR" value="duo">RASD - OVPR</option>
                                                                    <option label="RASD - OVPR/VPR" value="duo">RASD - OVPR/VPR</option>
                                                                    <option label="RASD - VPR" value="duo">RASD - VPR</option>
                                                                    <option value="duo">ROAR - Registry of Options and Resources</option>
                                                                    <option label="RPAS" value="duo">RPAS</option>
                                                                    <option label="RPS Application Administration" value="duo">RPS Application Administration</option>
                                                                    <option label="Ruth Lilly Medical Library" value="duo">Ruth Lilly Medical Library</option>
                                                                    <option label="School of Nursing" value="duo">School of Nursing</option>
                                                                    <option label="School of Optometry" value="duo">School of Optometry</option>
                                                                    <option label="School of Public and Environmental Affairs (SPEA)" value="duo">School of Public and Environmental Affairs (SPEA)</option>
                                                                    <option label="School of Public Health – Bloomington IT Services (SPHBITS)" value="duo">School of Public Health – Bloomington IT Services (SPHBITS)</option>
                                                                    <option label="Schools of Education - IUPUI" value="duo">Schools of Education - IUPUI</option>
                                                                    <option label="SCMC" value="duo">SCMC</option>
                                                                    <option label="SIS" value="duo">SIS</option>
                                                                    <option label="SOIC: School of Informatics and Computing" value="duo">SOIC: School of Informatics and Computing</option>
                                                                    <option label="STC" value="duo">STC</option>
                                                                    <option label="Storage and Virtualization" value="duo">Storage and Virtualization</option>
                                                                    <option label="Student Academic Systems" value="duo">Student Academic Systems</option>
                                                                    <option label="Student Central on Union" value="duo">Student Central on Union</option>
                                                                    <option label="Student Development Center" value="duo">Student Development Center</option>
                                                                    <option label="Student Organization Accounts" value="duo">Student Organization Accounts</option>
                                                                    <option label="Student Outreach" value="duo">Student Outreach</option>
                                                                    <option label="Student Support - South Bend" value="duo">Student Support - South Bend</option>
                                                                    <option label="Support Center" value="duo">Support Center</option>
                                                                    <option label="Support Center Tool" value="duo">Support Center Tool</option>
                                                                    <option label="Training: SIS" value="duo">Training: SIS</option>
                                                                    <option label="UCard" value="duo">UCard</option>
                                                                    <option label="UHRS" value="duo">UHRS</option>
                                                                    <option label="UIPO" value="duo">UIPO</option>
                                                                    <option label="UIRR" value="duo">UIRR</option>
                                                                    <option label="UITS - CCI" value="duo">UITS - CCI</option>
                                                                    <option label="UITS - Collaboration Technologies" value="duo">UITS - Collaboration Technologies</option>
                                                                    <option value="duo">UITS - eLearning Design &amp; Services</option>
                                                                    <option label="UITS - Finance Office" value="duo">UITS - Finance Office</option>
                                                                    <option label="UITS - Internal Resources" value="duo">UITS - Internal Resources</option>
                                                                    <option label="UITS - IU eTexts" value="duo">UITS - IU eTexts</option>
                                                                    <option label="UITS - IUIE" value="duo">UITS - IUIE</option>
                                                                    <option label="UITS - Leveraged Services" value="duo">UITS - Leveraged Services</option>
                                                                    <option label="UITS - Northwest" value="duo">UITS - Northwest</option>
                                                                    <option label="UITS - South Bend" value="duo">UITS - South Bend</option>
                                                                    <option label="UITS Campus Networks" value="duo">UITS Campus Networks</option>
                                                                    <option label="University College" value="duo">University College</option>
                                                                    <option label="University Division" value="duo">University Division</option>
                                                                    <option label="University Graduate School - Bloomington" value="duo">University Graduate School - Bloomington</option>
                                                                    <option label="University Graduate School - IUPUI" value="duo">University Graduate School - IUPUI</option>
                                                                    <option label="USSS" value="duo">USSS</option>
                                                                    <option label="VPFA" value="duo">VPFA</option>
                                                                    <option label="Writing Tutorial Service (WTS)" value="duo">Writing Tutorial Service (WTS)</option>
                                                                    <option label="Writing Tutorial Services WTS" value="duo">Writing Tutorial Services WTS</option>
                                                                </select>
                                                                <div class="well well-sm" id="selectpublisher">
                                                                    <table class="table table-condensed">
                                                                        <thead class="sr-only">
                                                                            <tr>
                                                                                <th>Label</th>
                                                                                <th>Value</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Functional Contact</td>
                                                                                <td><a href="mailto">thrclark@iu.edu</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Technical Contact</td>
                                                                                <td><a href="mailto">thrclark@iu.edu</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Description</td>
                                                                                <td>&nbsp;</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ACL Members</td>
                                                                                <td><ul ng-show="isNonLeafExpression(expression)" aria-hidden="false">
                                                                                        <li ng-repeat="expression in expression.children" tree=""> <span ng-show="$parent.$parent.expression != null" aria-hidden="false">GROUPS : memberOf = BL-VPFA-ONE-PUBLISHER</span></li>
                                                                                        <li ng-repeat="expression in expression.children" tree="">  <span ng-show="$parent.$parent.expression != null" aria-hidden="false">GROUPS : memberOf = BL-UHRS-ONE-PUBLISHER</span></li>
                                                                                        <li ng-repeat="expression in expression.children" tree="">  <span ng-show="$parent.$parent.expression != null" aria-hidden="false">GROUPS : memberOf = BL-FMOP-ONE-PUBLISHER</span></li>
                                                                                    </ul></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Receive Task Notifications</td>
                                                                                <td>yes</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Receive Review Notifications</td>
                                                                                <td>yes</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_screenshots" aria-expanded="false" aria-controls="collapse_screenshots" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default screenshots">
                                            <div class="panel-heading" role="tab" id="heading_screenshots">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_screenshots" aria-expanded="true" aria-controls="collapse_screenshots" class="">Screen Shots &amp; Video</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_screenshots" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_screenshots">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <ul class="nav nav-pills nav-stacked col-sm-2 col-md-2">
                                                            <li class="active"><a href="#tab_a" data-toggle="pill">Desktop</a></li>
                                                            <li class=""><a href="#tab_b" data-toggle="pill">Tablet</a></li>
                                                            <li class=""><a href="#tab_c" data-toggle="pill">Mobile</a></li>
                                                        </ul>
                                                        <div class="tab-content col-sm-10 col-md-10">
                                                            <div class="tab-pane active" id="tab_a">
                                                                <h5>Desktop</h5>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-6">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl_grid.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default">Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-6">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl_list.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default" >Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-6">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl_details.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default">Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-6">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl_thumb.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default">Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12 text-center">
                                                                        <hr style="margin-bottom:10px">
                                                                        <a href="#" class="btn btn-default btn-sm"> Upload Image</a> <a href="#" class="btn btn-default btn-sm"> Link Image</a> <a href="#" class="btn btn-default btn-sm"> Link Video</a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab_b">
                                                                <h5>Tablet <span class="small text-muted">(optional)</span>
                                                                    </label>
                                                                </h5>
                                                                <div class="row">
                                                                    <div class="col-xs-12 text-center">
                                                                        <hr style="margin-bottom:10px">
                                                                        <a href="#" class="btn btn-default btn-sm"> Upload Image</a> <a href="#" class="btn btn-default btn-sm"> Link Image</a> <a href="#" class="btn btn-default btn-sm"> Link Video</a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="tab_c">
                                                                <h5>Mobile <span class="small text-muted">(optional)</span></h5>
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-4">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl-mobile-001.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default">Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-4">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl-mobile-002.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default" >Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-4">
                                                                        <div class="image-controls"><img src="../img/app-screenshots/ccl-mobile-003.png" class="img-responsive"alt=""> <a href="#" class="btn btn-xs btn-default">Delete</a> <a href="#" class="btn btn-xs btn-default">Alt Text</a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12 text-center">
                                                                        <hr style="margin-bottom:10px">
                                                                        <a href="#" class="btn btn-default btn-sm"> Upload Image</a> <a href="#" class="btn btn-default btn-sm"> Link Image</a> <a href="#" class="btn btn-default btn-sm"> Link Video</a> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- tab content --> 
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_audience" aria-expanded="false" aria-controls="collapse_audience" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_audience">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_audience" aria-expanded="true" aria-controls="collapse_audience" class="">Audience</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_audience" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_audience">
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label" for="campus">Campus</label>
                                                        <span class="help-block small">Select the campuses with which this task is affiliated with.</span>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="input-group">
                                                                    <select class="form-control" >
                                                                        <option value="">All Campuses</option>
                                                                        <option label="IU Bloomington" value="object:712">IU Bloomington</option>
                                                                        <option label="IU East" value="object:713">IU East</option>
                                                                        <option label="IU Kokomo" value="object:714">IU Kokomo</option>
                                                                        <option label="IU Northwest" value="object:715">IU Northwest</option>
                                                                        <option label="IU South Bend" value="object:716">IU South Bend</option>
                                                                        <option label="IU Southeast" value="object:717">IU Southeast</option>
                                                                        <option label="IUPUC" value="object:718">IUPUC</option>
                                                                        <option label="IUPUI" value="object:719">IUPUI</option>
                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" style="margin-left:10px">Add</button>
                                                                    </span> </div>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                <div class="well well-sm" style="width: 344px;"><span class="label label-white"> IU Bloomington <i class="icon-cancel-circled"></i></span> <span class="label label-white"> IU Kokomo <i class="icon-cancel-circled"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="role">Role</label>
                                                        <span class="help-block small">Select the roles with which this task is affiliated with.</span>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="input-group">
                                                                    <select class="form-control" >
                                                                        <option value="">All Roles</option>
                                                                        <option value="">Student</option>
                                                                        <option value="">Faculty</option>
                                                                        <option value="">Staff</option>
                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" style="margin-left:10px">Add</button>
                                                                    </span> </div>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                <div class="well well-sm" style="width: 344px;"><span class="label label-white"> All Roles <i class="icon-cancel-circled"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="categories">Categories</label>
                                                        <span class="help-block small">Select the categories that this task will be placed under.</span>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="input-group">
                                                                    <select ng-model="selectedCategory" id="categories" ng-options="category.name for category in ::pageData.categories" class="form-control ng-pristine ng-valid ng-empty ng-touched" aria-invalid="false">
                                                                        <option value="?" selected="selected"></option>
                                                                        <option label="Academics" value="object:1167">Academics</option>
                                                                        <option label="Accounts" value="object:1168">Accounts</option>
                                                                        <option label="Administrative" value="object:1169">Administrative</option>
                                                                        <option label="Admissions" value="object:1170">Admissions</option>
                                                                        <option label="Campus Life" value="object:1171">Campus Life</option>
                                                                        <option label="Careers" value="object:1172">Careers</option>
                                                                        <option label="Enrollment" value="object:1173">Enrollment</option>
                                                                        <option label="Faculty Services" value="object:1174">Faculty Services</option>
                                                                        <option label="Finances" value="object:1175">Finances</option>
                                                                        <option label="Housing &amp; Dining" value="object:1176">Housing &amp; Dining</option>
                                                                        <option label="HR &amp; Benefits" value="object:1177">HR &amp; Benefits</option>
                                                                        <option label="International" value="object:1178">International</option>
                                                                        <option label="IT Services" value="object:1179">IT Services</option>
                                                                        <option label="Libraries" value="object:1180">Libraries</option>
                                                                        <option label="Orientation" value="object:1181">Orientation</option>
                                                                        <option label="Payroll &amp; Taxes" value="object:1182">Payroll &amp; Taxes</option>
                                                                        <option label="Personal Information" value="object:1183">Personal Information</option>
                                                                        <option label="Research" value="object:1184">Research</option>
                                                                        <option label="Training" value="object:1185">Training</option>
                                                                        <option label="Transportation" value="object:1186">Transportation</option>
                                                                    </select>
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" style="margin-left:10px">Add</button>
                                                                    </span> </div>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                <div class="well well-sm" style="width: 344px;"><span class="label label-white"> IT Services <i class="icon-cancel-circled"></i></span> <span class="label label-white"> Libraries <i class="icon-cancel-circled"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="tags">Tags <span class="small text-muted">(optional)</span> </label>
                                                        <span class="help-block small">Select the tags with which this task will be affiliated.</span>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="input-group" style="margin-bottom:15px">
                                                                    <input type="text" class="form-control" placeholder="" required="required" id="versionnote">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Add</button>
                                                                    </span> </div>
                                                            </div>
                                                            <div class="col-xs-8">
                                                                <table class="table table-condensed table-actions">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Books</td>
                                                                            <td><div class="">
                                                                                    <label style="font-weight:normal" class="text-muted small">
                                                                                        <input type="checkbox">
                                                                                        hidden </label>
                                                                                </div></td>
                                                                            <td><a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Digital</td>
                                                                            <td><div class="">
                                                                                    <label style="font-weight:normal" class="text-muted small">
                                                                                        <input type="checkbox">
                                                                                        hidden </label>
                                                                                </div></td>
                                                                            <td><a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Deposit</td>
                                                                            <td><div class="">
                                                                                    <label style="font-weight:normal" class="text-muted small">
                                                                                        <input type="checkbox">
                                                                                        hidden </label>
                                                                                </div></td>
                                                                            <td><a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_authentication" aria-expanded="false" aria-controls="collapse_authentication" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_authentication">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_authentication" aria-expanded="true" aria-controls="collapse_authentication" class="">Authentication</a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_authentication" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_authentication">
                                                <div class="panel-body">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="authtype"> Authentication Type</label>
                                                        <span class="help-block small">Select the authentication type used by this task.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select ng-model="task.authenticated" ng-options="key as value for (key, value) in ::pageData.authenticatedValues" class="form-control ng-valid ng-touched ng-dirty ng-valid-parse" tabindex="0" aria-invalid="false">
                                                                    <option value="1" selected="selected" label="External">External</option>
                                                                    <option value="2" label="None">None</option>
                                                                    <option value="3" label="Internal">Internal</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="authtype"> Stat Recording Type</label>
                                                        <span class="help-block small">If the user is logged in, record who the user was with the stat being recorded.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select ng-model="task.statType" name="statType" id="statType" ng-options="key as value for (key, value) in ::pageData.statTypes" class="form-control ng-pristine ng-not-empty ng-valid ng-valid-required ng-touched" required popover="If the user is logged in, record who the user was with the stat being recorded." data-original-title="" title="" aria-invalid="false">
                                                                    <option label="User" value="string:U" selected="selected">User</option>
                                                                    <option label="Anonymous" value="string:A">Anonymous</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_versioning" aria-expanded="false" aria-controls="collapse_versioning" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_versioning">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_versioning" aria-expanded="true" aria-controls="collapse_versioning" class="">Versioning <span class="small text-muted">(optional)</span></a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_versioning" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_versioning">
                                                <div class="panel-body">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="versionnumber">Version Number</label>
                                                        <span class="help-block small">Versioning helps users to identify when improvements have been made to the service.  Note that when this version number changes, reviews and ratings will start over, but the old ones will be kept for review.</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="versionnumber" name="versionnumber" type="text" placeholder="1.1.0" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="versionnote">Version Release Notes</label>
                                                        <span class="help-block small">Add notes to inform users of changes or new features in this version.</span>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group" style="margin-bottom:10px">
                                                                    <input type="text" class="form-control" placeholder="" required="required" id="versionnote">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">Add</button>
                                                                    </span> </div>
                                                                <table class="table table-condensed table-actions">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Started his hearted any civilly. So me by marianne admitted speaking.</td>
                                                                            <td><a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Cottage out enabled was entered greatly prevent message. No procured unlocked an likewise.</td>
                                                                            <td><a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Do so written as raising parlors spirits mr elderly. Made late in of high left hold.</td>
                                                                            <td><a href="#" class="btn btn-default btn-xs">Delete</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_activecontent" aria-expanded="false" aria-controls="collapse_activecontent" class="btn btn-primary btn-sm pull-right">Continue <i class="icon-down-open-1"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading_activecontent">
                                                <div class="row">
                                                    <div class="col-xs-9">
                                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_activecontent" aria-expanded="true" aria-controls="collapse_activecontent" class="">Active Content <span class="small text-muted">(optional)</span></a> </h4>
                                                    </div>
                                                    <div class="col-xs-3 panel-validation text-right"></div>
                                                </div>
                                            </div>
                                            <div id="collapse_activecontent" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_activecontent">
                                                <div class="panel-body">
                                                    <div class="form-group ">
                                                        <label class="control-label" for="activecontenturl"> Active Content Public URL </label>
                                                        <span class="help-block small">Specify the public URL from which active content will be provided</span>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-control" id="activecontenturl" name="activecontenturl" type="text" placeholder="" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label " for="status">Active Content Authentication </label>
                                                        <span class="help-block small">Require the user to be signed in before requesting any active content.  This is useful for preventing unnecessary requests when user information is required.</span>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                Require user to be signed in </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="updatefreq"> Update Frequency (seconds) </label>
                                                        <span class="help-block small">Set the update frequency (in seconds) at which you want a tile to refresh its Active Content. Be careful with how short the interval is because the content will reset back to the first item after a refresh.</span>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <input class="form-control" id="updatefreq" name="updatefreq" type="text" placeholder="" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading12">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12"> asdfasdfasdf </a> </h4>
                                        </div>
                                        <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                            <div class="panel-body"> Anim pari </div>
                                        </div>
                                    </div>--> 
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="well well-sm" id="page_controls">
                                        <button type="button" disabled class="btn btn-primary btn-block" id="submitapproval" data-toggle="modal" data-target="#modal_publishdate">Submit for Approval...</button>
                                        <button type="button" disabled class="btn btn-default btn-block" id="savedraft">Save as Draft</button>
                                        <a href="pub-taskmaint-home.php"class="btn btn-default btn-block" id="cancelbutton">Cancel</a> </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('modal/pub-task-publishdate.php') ?>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <script type="text/javascript">
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
        $('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_custom') {
                $('#crop-avatar').slideDown();
            } else {
                $('#crop-avatar').slideUp();
            }
        });
        $('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_library') {
                $('#image_library').slideDown();
            } else {
                $('#image_library').slideUp();
            }
        });
    });
</script> 
    <script>
    $(function() {
        $('#selectcontact1').hide();
        $('#contactId1').change(function() {
            if ($('#contactId1').val() == 'duo') {
                $('#selectcontact1').show();
            } else {
                $('#selectcontact1').hide();
            }
        });
    });
    $(function() {
        $('#selectcontact2').hide();
        $('#contactId2').change(function() {
            if ($('#contactId2').val() == 'duo') {
                $('#selectcontact2').show();
            } else {
                $('#selectcontact2').hide();
            }
        });
    });
    $(function() {
        $('#selectpublisher').hide();
        $('#publisherId').change(function() {
            if ($('#publisherId').val() == 'duo') {
                $('#selectpublisher').show();
            } else {
                $('#selectpublisher').hide();
            }
        });
    });
</script> 
    <script src="../js/cropper-main.js"></script> 
    <script>
    $(document).ready(function() {
        $("#page_controls").sticky({
            topSpacing: 40
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $('#tasktitle').blur(function() {
            tmpval = $(this).val();
            if (tmpval == '') {
                $("#submitapproval,#savedraft,#cancelbutton").attr("disabled");
            } else {
                $("#submitapproval,#savedraft,#cancelbutton").removeAttr("disabled");
            }
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("#help_toggle").click(function() {
            $("#help_toggle_switch").fadeOut(function() {
                $("#help_toggle_switch").text(($("#help_toggle_switch").text() == 'off') ? 'on' : 'off').fadeIn();
            })
        })
    });
</script> 
    <script>
    $("#help_toggle").click(function() {
        $(".help-block").fadeToggle();
    });
</script> 
</div>
</body>
</html>
