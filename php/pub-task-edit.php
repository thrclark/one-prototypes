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
.popovertable tbody tr td {
	white-space: nowrap;
}
.popovertable tbody tr td:first-child {
	padding-right: 10px;
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
                    <div class="primary-content" style="min-height:500px">
                        <section style="display:;" id="all_verifications">
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Edit Task</h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form name="taskForm" novalidate validate="errors" id="taskForm" class=" -maxlength -url -pattern -min -max -required">
                                        <fieldset>
                                            <legend>General</legend>
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label for="title" class="control-label">Task  title</label>
                                                    <div class="counter-container">
                                                        <input type="text" name="title" required="" countdown="" class="form-control   -maxlength -required" popover="The Task  title is how the Task  will be referred to throughout the system." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                        <span class="label pull-right label-info"><span class="counter">91</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="taskUrl" class="control-label">Task  URL</label>
                                                    <div class="counter-container">
                                                        <input type="url" name="taskUrl" class="form-control   -url -maxlength -required" required="" countdown="" popover="The URL will take users to the location where they can perform this Task ." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                        <span class="label pull-right label-info"><span class="counter">1976</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="applicationName" class="control-label">Application Name</label>
                                                    <div class="counter-container">
                                                        <input type="text" name="applicationName" countdown="" class="form-control   -maxlength" popover="The name of the application that provides this Task . If two tasks have the same title, the application can be used to differentiate between them." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                        <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="openInNewWindow" class="control-label">Launch</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="openInNewWindow" class="  " tabindex="0" aria-checked="true" aria-invalid="false">
                                                            Open Task  in a new tab/window </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label for="authenticated">Authentication Type</label>
                                                    <select class="form-control   " tabindex="0" aria-invalid="false">
                                                        <option value="1" selected="selected" label="External">External</option>
                                                        <option value="2" selected="selected" label="None">None</option>
                                                        <option value="3" label="Internal">Internal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="contactId1" class="control-label">Primary Contact</label>
                                                    <i class="icon-info-circled pull-right"  id="selectcontact1" data-toggle="modal" data-target="#modal_contactinfo"></i>
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
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="contactId2" class="control-label">Secondary Contact</label>
                                                    <i class="icon-info-circled pull-right"  id="selectcontact2" data-toggle="modal" data-target="#modal_contactinfo"></i>
                                                    <select id="contactId2"  class="form-control   " tabindex="0" aria-invalid="false">
                                                        <option value="">Select Contact</option>
                                                        <option value="duo">None </option>
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
                                                </div>
                                                <div ng-if="pageData.mobileFriendlyEnabled" class="form-group col-md-3">
                                                    <label for="mobileFriendly" class="control-label">Mobile</label>
                                                    <div class="checkbox">
                                                        <label popover="This Task  is mobile-friendly and is usable on mobile devices such as phones and tablets." trigger="hover" data-original-title="" title="">
                                                            <input type="checkbox" name="mobileFriendly" class="  " tabindex="0" aria-checked="false" aria-invalid="false">
                                                            This Task  is mobile-friendly. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="description" class="control-label">Description</label>
                                                    <div>
                                                        <div class="markItUp">
                                                            <div class="markItUpContainer">
                                                                <div class="markItUpHeader">
                                                                    <ul>
                                                                        <li class="markItUpButton markItUpButton1 "><a href="" accesskey="B" title="Bold [Ctrl+B]">Bold</a></li>
                                                                        <li class="markItUpButton markItUpButton2 "><a href="" accesskey="I" title="Italic [Ctrl+I]">Italic</a></li>
                                                                        <li class="markItUpSeparator">---------------</li>
                                                                        <li class="markItUpButton markItUpButton3 "><a href="" accesskey="L" title="Link [Ctrl+L]">Link</a></li>
                                                                        <li class="markItUpSeparator">---------------</li>
                                                                        <li class="markItUpButton markItUpButton4 preview"><a href="" title="Preview">Preview</a></li>
                                                                    </ul>
                                                                </div>
                                                                <textarea ng-if="pageData.markupDescriptionEnabled" name="description" required class="form-control   markItUpEditor -required" rows="5" mark-it-up="" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false"></textarea>
                                                                <div class="markItUpFooter">
                                                                    <div class="markItUpResizeHandle"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="metaDescription" class="control-label">Meta Description (Search Engine Optimization)</label>
                                                    <div class="counter-container">
                                                        <textarea name="metaDescription" required countdown="" unique="/publish/task/validateMetaDescription" unique-data="task.markets" entity-id="15241" class="form-control   -maxlength -required" rows="5" popover="The meta description is a more concise description that is visible to search engines. This description may show up in search results on those search engines." data-original-title="" title="" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false"></textarea>
                                                        <span class="label pull-right label-info"><span class="counter">151</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Icon Images</legend>
                                            <div class="form-group ">
                                                <label class="control-label " for="api_account_type">Select the source of the icon image </label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="cars" value="1" id="show_custom">
                                                        Custom image upload </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="cars" value="2" id="show_library">
                                                        Selected from current library </label>
                                                </div>
                                            </div>
                                            <div class="form-group" id="custom_upload" style="display:none">
                                                <div class="" id="uploadImages">
                                                    <label class="control-label " for="api_account_type">Select the source of the icon image </label>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" ng-model="task.generateSmallerImageSizes" class="ng-valid ng-dirty ng-valid-parse ng-touched" tabindex="0" aria-checked="true" aria-invalid="false">
                                                                    Automatically generate smaller image sizes. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label">Large Image (153×153)</label>
                                                            <div data-size="5"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/153x153.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Small Retina Image (144×144)</label>
                                                            <div data-size="4"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/144x144.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Medium Image (90×90)</label>
                                                            <div data-size="2"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/90x90.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Small Image (72×72)</label>
                                                            <div data-size="3"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/72x72.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                                                            <label class="control-label">Very Small Image (31×31)</label>
                                                            <div data-size="1"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                                <input type="file" fileupload="" name="files[]">
                                                                </span>
                                                                <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                                <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/31x31.jpg" aria-hidden="false" class=""> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="image_library" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="imageSetId" class="control-label">Choose an Image</label>
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
                                                        <img src="../img/task-icons-new/icon-bill-pay.png" alt="" style="width:100%"/> </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_contactinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Duo Support Team</h4>
                </div>
                <div class="modal-body">
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
                                <td class="forcewrap"><a href="https://kb.iu.edu/d/bfgm" target="_blank" >https://kb.iu.edu/d/bfgmsdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</a></td>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <script>
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_custom') {
                $('#custom_upload').slideDown();
            } else {
                $('#custom_upload').slideUp();
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


    $("#selectcontact1").popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
    });
	$("#selectcontact2").popover({
        html: true,
        content: function() {
            return $('#popover-content2').html();
        }
    });
</script> 
</div>
</body>
</html>
