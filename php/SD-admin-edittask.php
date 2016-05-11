



<?php
$section = '';
$page = '';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
<style>
.search .well.well-sm {
	display: none
}
header + section {
	border-bottom: solid 1px #cccccc;
}
.ng-hide {
	display: none
}
</style>
</head>
<body id="top" style="background:#FFFFFF" >
<?php include ('includes/mobile-sidebar.php') ?>
<?php include ('includes/brand-header.php') ?>
<?php include ('includes/header-gen-announcements5.php') ?>

<section class="utilities-bar">
    <div class="container">
        <nav class="navbar navbar-default"  style="margin-bottom:0px">
            <div class="row">
                <div class="col-md-6 col-xs-12"> <nav class="btn-group btn-breadcrumb" > <a href="SD-home.php" class="btn btn-default"><i class="icon-home-2"></i><span class="sr-only">Home</></a>
                        <div class="btn btn-default seemore" style="">...</div>
                        <a href="#" class="btn btn-default">
                        <div>Publishing </div></a> <a href="#" class="btn btn-default">
                        <div>Tasks</div></a> <div class="btn btn-default">
                        <div>Edit Task</div></div> </nav>
                  
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-right"> <li><a href="#" class=""><i class="icon-bell-3"></i>
                       
                            <span class="sr-only">Notifications</span></a> </li>

<li><a href="#" class="launch-notifications"><i class="icon-inbox-alt"></i>
                            <div class="container-badge"><span class="badge">2</span></div>
                            <span class="sr-only">Inbox</span></a> </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-user-3"></i> Hello, Tom</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" tabindex="0" class=""><i class="icon-heart"></i> My Favorites</a></li>
                                <li><a href="#"  data-toggle="modal" data-target="#settings"><i class="icon-cog"></i>Preferences</a></li>
                                <li class="divider"></li>
                                <li><a href="#" id="feedbackButton" tabindex="0"><i class="icon-comment-empty"></i> Send Feedback</a></li>
                                <li><a href="#" tabindex="0" class="ng-click-active"><i class="icon-info-circled-1"></i> Help</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-edit"></i> Publishing</a></li>
                                <li><a href="/#"><i class="icon-tools"></i> Admin</a></li>
                                <li class="divider"></li>
                                <li><a href="#" tabindex="0" aria-disabled="false"><i class="icon-logout"></i> Not Tom? <small class="text-muted">(sign out)</small></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="position:relative">
        <?php include ('modal/inbox.php') ?>
    </div>
</section>

<div class="container" style="background:#FFFFFF">
    <div class="row">
        <div class="col-sm-3 col-lg-2" style="padding-left:0;">
            <div class="sidebar-container-pub" data-tab-selection=""> 
                <!-- ngIf: ::publisher || approver || support --><a ng-if="::publisher || approver || support" href="" ng-click="selectTab('ts')" id="ts" ng-class="{active: tabSelection=='ts', inactive: tabSelection!='ts'}" tabindex="0" class="active"> Task Settings <span>Add/Edit Task related features</span> </a><!-- end ngIf: ::publisher || approver || support --> 
                <!-- ngIf: ::admin --><a ng-if="::admin" href="" ng-click="selectTab('fs')" id="fs" ng-class="{active: tabSelection=='fs', inactive: tabSelection!='fs'}" tabindex="0" class="inactive"> Filter Settings <span>Add/Edit filter related features</span> </a><!-- end ngIf: ::admin --> 
                <!-- ngIf: ::publisher || feedback --><a ng-if="::publisher || feedback" href="" ng-click="selectTab('ds')" id="ds" ng-class="{active: tabSelection=='ds', inactive: tabSelection!='ds'}" tabindex="0" class="inactive"> Data Settings <span>Manage data related features</span> </a><!-- end ngIf: ::publisher || feedback --> 
                <!-- ngIf: ::admin --><a ng-if="::admin" href="" ng-click="selectTab('bs')" id="bs" ng-class="{active: tabSelection=='bs', inactive: tabSelection!='bs'}" tabindex="0" class="inactive"> Brand Settings <span>Manage Branding Images and Colors</span> </a><!-- end ngIf: ::admin --> 
                <!-- ngIf: ::admin --><a ng-if="::admin" href="" ng-click="selectTab('as')" id="as" ng-class="{active: tabSelection=='as', inactive: tabSelection!='as'}" tabindex="0" class="inactive"> Advanced Settings <span>Manage advanced features</span> </a><!-- end ngIf: ::admin -->
                <div class="hidden-xs" style="height: 250px;"></div>
            </div>
        </div>
        <div class="col-sm-9 col-lg-10"> 
            <!-- ngView: undefined -->
            <div class="ng-view main-content">
                <h2> <span ng-show="task.taskId == null &amp;&amp; !pending" aria-hidden="true" class="ng-hide">New</span><span ng-show="task.taskId != null &amp;&amp; !pending" aria-hidden="false" class="">Edit</span><span ng-show="pending" aria-hidden="true" class="ng-hide">Approve</span> <span ng-bind="::taskLabel">Task</span> Definition </h2>
                
                <!-- ngRepeat: alert in alertService.alerts -->
                <form name="taskForm" novalidate validate="errors" id="taskForm" class="ng-pristine ng-valid-maxlength ng-valid-url ng-valid-pattern ng-valid-min ng-valid-max ng-valid ng-valid-required">
                    <fieldset>
                        <legend>General</legend>
                        <div class="row">
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.title.$invalid || taskForm.$serverError.title.$invalid)}">
                                <label for="title" class="control-label">Task title</label>
                                <div class="counter-container">
                                    <input type="text" name="title" ng-model="task.title" required="" ng-maxlength="100" countdown="" class="form-control ng-pristine ng-untouched ng-valid-maxlength ng-valid ng-valid-required" popover="The Task title is how the Task will be referred to throughout the system." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                    <span class="label pull-right label-info"><span class="counter">67</span><span class="sr-only"> characters remaining</span></span> </div>
                                <!-- ngRepeat: (validator, invalid) in taskForm.title.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.title.messages --> 
                            </div>
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.taskUrl.$invalid || taskForm.$serverError.taskUrl.$invalid)}">
                                <label for="taskUrl" class="control-label">Task URL</label>
                                <div class="counter-container">
                                    <input type="url" name="taskUrl" ng-model="task.taskUrl" class="form-control ng-pristine ng-untouched ng-valid-url ng-valid-maxlength ng-valid ng-valid-required" required="" ng-maxlength="2000" countdown="" popover="The URL will take users to the location where they can perform this Task." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                    <span class="label pull-right label-info"><span class="counter">1943</span><span class="sr-only"> characters remaining</span></span> </div>
                                <!-- ngRepeat: (validator, invalid) in taskForm.taskUrl.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.taskUrl.messages --> 
                            </div>
                           
                       
                            <div class="form-group col-md-3">
                                <label for="applicationName" class="control-label">Application Name</label>
                                <div class="counter-container">
                                    <input type="text" name="applicationName" ng-model="task.applicationName" ng-maxlength="100" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="The name of the application that provides this Task. If two Tasks have the same title, the application can be used to differentiate between them." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                    <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                <!-- ngRepeat: (validator, invalid) in taskForm.applicationName.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.applicationName.messages --> 
                            </div>
                            
                             <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.openInNewWindow.$invalid || taskForm.$serverError.openInNewWindow.$invalid)}">
                                <label for="openInNewWindow" class="control-label">Launch</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="openInNewWindow" ng-model="task.openInNewWindow" ng-true-value="'yes'" ng-false-value="'no'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="true" aria-invalid="false">
                                        Open in new tab/window </label>
                                </div>
                                <!-- ngRepeat: (validator, invalid) in taskForm.openInNewWindow.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.openInNewWindow.messages --> 
                            </div>
                            
                            </div>
                              <div class="row">
                            <div class="form-group col-md-3">
                                <label for="authenticated">Authentication Type</label>
                                <select ng-model="task.authenticated" ng-options="key as value for (key, value) in ::pageData.authenticatedValues" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                    <option value="E" selected="selected" label="External">External</option>
                                    <option value="F" selected="selected" label="None">None</option>
                                    <option value="T" label="Internal">Internal</option>
                                </select>
                                <!-- ngRepeat: message in taskForm.$serverError.authenticated.messages --> 
                            </div>
                            
                          
                      
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.contactId.$invalid || taskForm.$serverError.contactId.$invalid)}">
                                <label for="contactId" class="control-label">Primary Contact</label>
                                <select ng-model="task.contactId" name="contactId" ng-options="contact.contactId as contact.name for contact in ::pageData.contacts" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required tabindex="0" aria-required="false" aria-invalid="false">
                                    <option value="">Select Contact</option>
                                    <option value="0" label="A contact name is required so we can identify who it is that we are talking to however this box allows two thousand characters so I'm going to use generated text to fill it this time Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu and seventeen ch">A contact name is required so we can identify who it is that we are talking to however this box allows two thousand characters so I'm going to use generated text to fill it this time Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu and seventeen ch</option>
                                    <option value="1" label="Advance Visualization Lab">Advance Visualization Lab</option>
                                    <option value="2" label="AT&amp;T Customer Care">AT&amp;T Customer Care</option>
                                    <option value="3" label="Avalon Media System">Avalon Media System</option>
                                    <option value="4" label="Beth Norzinskay">Beth Norzinskay</option>
                                    <option value="5" label="Campus Bridging and Research Initiative Group">Campus Bridging and Research Initiative Group</option>
                                    <option value="6" label="Classroom Technology Services - Bloomington">Classroom Technology Services - Bloomington</option>
                                    <option value="7" label="Classroom Technology Services - IUPUI">Classroom Technology Services - IUPUI</option>
                                    <option value="8" label="Crimson Resources">Crimson Resources</option>
                                    <option value="9" label="CyberDH Group">CyberDH Group</option>
                                    <option value="10" label="David's Contact name">David's Contact name</option>
                                    <option value="11" label="Duo Support Team">Duo Support Team</option>
                                    <option value="12" label="eApp Instructions">eApp Instructions</option>
                                    <option value="13" label="eDossier Administrator">eDossier Administrator</option>
                                    <option value="14" label="eText Administrator">eText Administrator</option>
                                    <option value="15" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                    <option value="16" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                    <option value="17" label="Financial Management Services">Financial Management Services</option>
                                    <option value="18" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                    <option value="19" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                    <option value="20" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                    <option value="21" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                    <option value="22" label="IT Customer Support">IT Customer Support</option>
                                    <option value="23" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                    <option value="24" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                    <option value="25" label="IUB Libraries">IUB Libraries</option>
                                    <option value="26" label="IUPUI Athletics">IUPUI Athletics</option>
                                    <option value="27" label="IUPUI Libraries">IUPUI Libraries</option>
                                    <option value="28" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                    <option value="29" label="OCSS">OCSS</option>
                                    <option value="30" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                    <option value="31" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                    <option value="32" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                    <option value="33" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                    <option value="34" label="Office of International Services">Office of International Services</option>
                                    <option value="35" label="Office of Research Administration">Office of Research Administration</option>
                                    <option value="36" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                    <option value="37" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                    <option value="38" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                    <option value="39" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                    <option value="40" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                    <option value="41" label="OneHundredCharacters">OneHundredCharacters</option>
                                    <option value="42" label="Orange Juice">Orange Juice</option>
                                    <option value="43" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                    <option value="44" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                    <option value="45" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                    <option value="46" label="Physical Plant">Physical Plant</option>
                                    <option value="47" label="Redhawk Review">Redhawk Review</option>
                                    <option value="48" label="Research Storage">Research Storage</option>
                                    <option value="49" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                    <option value="50" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                    <option value="51" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                    <option value="52" label="Science Gateway">Science Gateway</option>
                                    <option value="53" label="Scott test">Scott test</option>
                                    <option value="54" label="Student Aid offices">Student Aid offices</option>
                                    <option value="55" label="Super David">Super David</option>
                                    <option value="56" label="test contact">test contact</option>
                                    <option value="57" label="test contact types">test contact types</option>
                                    <option value="58" label="The Horizon">The Horizon</option>
                                    <option value="59" selected="selected" label="UITS Research Technologies">UITS Research Technologies</option>
                                    <option value="60" label="UITS Support Center">UITS Support Center</option>
                                    <option value="61" label="University Human Resources">University Human Resources</option>
                                    <option value="62" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                    <option value="63" label="Veteran Support Services">Veteran Support Services</option>
                                    <option value="64" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                </select>
                                <!-- ngRepeat: (validator, invalid) in taskForm.contactId.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.contactId.messages --> 
                            </div>
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.secondaryContactId.$invalid || taskForm.$serverError.secondaryContactId.$invalid)}">
                                <label for="secondaryContactId" class="control-label">Secondary Contact</label>
                                <select ng-model="task.secondaryContactId" name="secondaryContactId" ng-options="contact.contactId as contact.name for contact in ::pageData.contacts" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                    <option value="">No Contact</option>
                                    <option value="0" label="A contact name is required so we can identify who it is that we are talking to however this box allows two thousand characters so I'm going to use generated text to fill it this time Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu and seventeen ch">A contact name is required so we can identify who it is that we are talking to however this box allows two thousand characters so I'm going to use generated text to fill it this time Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu and seventeen ch</option>
                                    <option value="1" label="Advance Visualization Lab">Advance Visualization Lab</option>
                                    <option value="2" label="AT&amp;T Customer Care">AT&amp;T Customer Care</option>
                                    <option value="3" label="Avalon Media System">Avalon Media System</option>
                                    <option value="4" label="Beth Norzinskay">Beth Norzinskay</option>
                                    <option value="5" label="Campus Bridging and Research Initiative Group">Campus Bridging and Research Initiative Group</option>
                                    <option value="6" label="Classroom Technology Services - Bloomington">Classroom Technology Services - Bloomington</option>
                                    <option value="7" label="Classroom Technology Services - IUPUI">Classroom Technology Services - IUPUI</option>
                                    <option value="8" label="Crimson Resources">Crimson Resources</option>
                                    <option value="9" label="CyberDH Group">CyberDH Group</option>
                                    <option value="10" label="David's Contact name">David's Contact name</option>
                                    <option value="11" label="Duo Support Team">Duo Support Team</option>
                                    <option value="12" label="eApp Instructions">eApp Instructions</option>
                                    <option value="13" label="eDossier Administrator">eDossier Administrator</option>
                                    <option value="14" label="eText Administrator">eText Administrator</option>
                                    <option value="15" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                    <option value="16" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                    <option value="17" label="Financial Management Services">Financial Management Services</option>
                                    <option value="18" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                    <option value="19" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                    <option value="20" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                    <option value="21" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                    <option value="22" label="IT Customer Support">IT Customer Support</option>
                                    <option value="23" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                    <option value="24" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                    <option value="25" label="IUB Libraries">IUB Libraries</option>
                                    <option value="26" label="IUPUI Athletics">IUPUI Athletics</option>
                                    <option value="27" label="IUPUI Libraries">IUPUI Libraries</option>
                                    <option value="28" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                    <option value="29" label="OCSS">OCSS</option>
                                    <option value="30" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                    <option value="31" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                    <option value="32" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                    <option value="33" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                    <option value="34" label="Office of International Services">Office of International Services</option>
                                    <option value="35" label="Office of Research Administration">Office of Research Administration</option>
                                    <option value="36" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                    <option value="37" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                    <option value="38" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                    <option value="39" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                    <option value="40" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                    <option value="41" label="OneHundredCharacters">OneHundredCharacters</option>
                                    <option value="42" label="Orange Juice">Orange Juice</option>
                                    <option value="43" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                    <option value="44" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                    <option value="45" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                    <option value="46" label="Physical Plant">Physical Plant</option>
                                    <option value="47" label="Redhawk Review">Redhawk Review</option>
                                    <option value="48" label="Research Storage">Research Storage</option>
                                    <option value="49" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                    <option value="50" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                    <option value="51" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                    <option value="52" label="Science Gateway">Science Gateway</option>
                                    <option value="53" label="Scott test">Scott test</option>
                                    <option value="54" label="Student Aid offices">Student Aid offices</option>
                                    <option value="55" label="Super David">Super David</option>
                                    <option value="56" label="test contact">test contact</option>
                                    <option value="57" label="test contact types">test contact types</option>
                                    <option value="58" label="The Horizon">The Horizon</option>
                                    <option value="59" label="UITS Research Technologies">UITS Research Technologies</option>
                                    <option value="60" label="UITS Support Center">UITS Support Center</option>
                                    <option value="61" label="University Human Resources">University Human Resources</option>
                                    <option value="62" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                    <option value="63" label="Veteran Support Services">Veteran Support Services</option>
                                    <option value="64" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                </select>
                                <!-- ngRepeat: (validator, invalid) in taskForm.secondaryContactId.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.secondaryContactId.messages --> 
                            </div>
                            <!-- ngIf: pageData.mobileFriendlyEnabled -->
                            <div ng-if="pageData.mobileFriendlyEnabled" class="form-group col-md-3" ng-class="{'has-error': (taskForm.mobileFriendly.$invalid || taskForm.$serverError.mobileFriendly.$invalid)}">
                                <label for="mobileFriendly" class="control-label">Mobile</label>
                                <div class="checkbox">
                                    <label popover="This Task is mobile-friendly and is usable on mobile devices such as phones and tablets." trigger="hover" data-original-title="" title="">
                                        <input type="checkbox" name="mobileFriendly" ng-model="task.mobileFriendly" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                        This Task is mobile-friendly. </label>
                                </div>
                                <!-- ngRepeat: (validator, invalid) in taskForm.mobileFriendly.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.mobileFriendly.messages --> 
                            </div>
                            <!-- end ngIf: pageData.mobileFriendlyEnabled --> 
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" ng-class="{'has-error': (taskForm.description.$invalid || taskForm.$serverError.description.$invalid)}">
                                <label for="description" class="control-label">Description</label>
                                <textarea ng-model="task.description" name="description" required class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" rows="5" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false"></textarea>
                                <!-- ngRepeat: (validator, invalid) in taskForm.description.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.description.messages --> 
                            </div>
                        </div>
                      
                        <legend> Active Dates/Status <span class="text-muted" style="font-size:14px">(currently inactive)</span></legend>
                        <div class="row">
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.title.$invalid || taskForm.$serverError.title.$invalid)}">
                               <div class="radio">
                                    <label>
                                       <input type="radio" name="contact" value="status" id="active-status" onclick="showHide(this)" checked="checked">
                                        Specify by Status </label>
                                </div>
                              
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="contact" value="range" id="active-range"  onclick="showHide(this)">
                                        Specify by Date Range </label>
                                </div>
                               
                            </div>
                           
                          
                            
                            

    <div id="bystatus" style="display: inline">
    
    
    
    
    
    
    <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.status.$invalid || taskForm.$serverErrorstatus.$invalid)}">
                                <label for="status" class="control-label">Status</label>
                                <select ng-model="task.status" ng-options="key as value for (key, value) in ::pageData.status" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required tabindex="0" aria-required="false" aria-invalid="false">
                                    <option value="A" selected="selected" label="Active">Active</option>
                                    <option value="I" label="Inactive">Inactive</option>
                                 
                                </select>
                                <!-- ngRepeat: (validator, invalid) in taskForm.status.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.status.messages --> 
                            </div>
                            
                            
                            
                            </div>
                            
                             <div id="byrange" class='hide'  style="display:inline">
                           
                           
                            <div class="form-group col-md-3 desc" ng-class="{'has-error': (taskForm.beginDate.$invalid || taskForm.$serverError.beginDate.$invalid)}">
                                <label for="beginDate" class="control-label">Begin Date</label>
                                <input type="text" name="daterangetype" datepicker="body" time="" ng-model="task.beginDate" class="form-control ng-pristine ng-untouched ng-valid" popover="The date that this Task will become available. If left blank, Task will be available immediately if status is active." popover-placement="auto top" data-original-title="" title="" tabindex="0" aria-invalid="false">
                                <!-- ngRepeat: (validator, invalid) in taskForm.beginDate.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.beginDate.messages --> 
                            </div>
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.beginDate.$invalid || taskForm.$serverError.beginDate.$invalid)}">
                                <label for="beginDate" class="control-label">End Date</label>
                                <input type="text" name="daterangetype" datepicker="body" time="" ng-model="task.beginDate" class="form-control ng-pristine ng-untouched ng-valid" popover="The date that this Task will become available. If left blank, Task will be available immediately if status is active." popover-placement="auto top" data-original-title="" title="" tabindex="0" aria-invalid="false">
                                <!-- ngRepeat: (validator, invalid) in taskForm.beginDate.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.beginDate.messages --> 
                            </div>
                            
                            </div>
                            
                            
                        </div>
                       
                        
    
    
    
                 
                        <legend>Versioning</legend>
                        <div class="row">
                            <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.displayVersion.$invalid || taskForm.$serverError.displayVersion.$invalid)}">
                                <label for="displayVersion" class="control-label">Version Number</label>
                                <input type="text" name="displayVersion" ng-model="task.displayVersion" ng-pattern="/^[0-9]+\.[0-9]+\.[0-9]+(\-[0-9a-z]+)?$/" ng-maxlength="10" unique="/publish/task/validateDisplayVersion" entity-id="12800" class="form-control ng-pristine ng-untouched ng-valid-pattern ng-valid-maxlength ng-valid ng-valid-required" required="" popover="Versioning helps users to identify when improvements have been made to the service.  Note that when this version number changes, comments and ratings will start over, but the old ones will be kept for review." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                <!-- ngRepeat: (validator, invalid) in taskForm.displayVersion.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.displayVersion.messages --> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label">Release Notes</label>
                            </div>
                        </div>
                        <div class="row" ng-class="{'has-error': (taskForm.releaseNotes.$invalid || taskForm.$serverError.releaseNotes.$invalid)}">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" ng-model="releaseNote" name="releaseNote" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-maxlength="1000" popover="Add notes to inform users of changes or new features in this version." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default pull-right" type="button" ng-disabled="releaseNote == null || releaseNote.length == 0" ng-click="addReleaseNote()" tabindex="0" aria-disabled="true" disabled="disabled">Add</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="well release-notes">
                                    <ul class="list-unstyled ng-pristine ng-untouched ng-valid ui-sortable" ui-sortable="" ng-model="task.releaseNotes" tabindex="0" aria-invalid="false">
                                        <!-- ngRepeat: note in task.releaseNotes -->
                                    </ul>
                                </div>
                                <!-- ngRepeat: (validator, invalid) in taskForm.releaseNotes.$error --> 
                                <!-- ngRepeat: message in taskForm.$serverError.releaseNotes.messages --> 
                            </div>
                        </div>
                        
                        <!-- ngIf: pending || pageData.approver || !pageData.requireApproval -->
                        <legend ng-if="pending || pageData.approver || !pageData.requireApproval"> Additional Information </legend>
                        <!-- end ngIf: pending || pageData.approver || !pageData.requireApproval --> 
                        <!-- ngIf: pending || pageData.approver || !pageData.requireApproval -->
                        <div ng-if="pending || pageData.approver || !pageData.requireApproval">
                            <div class="row">
                                <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.uniqueKey.$invalid || taskForm.$serverError.uniqueKey.$invalid)}">
                                    <label for="uniqueKey" class="control-label">Unique Key</label>
                                    <div class="counter-container">
                                        <input type="text" name="uniqueKey" ng-model="task.uniqueKey" unique="/publish/task/validateUniqueKey" unique-data="task.markets" ng-pattern="/^[a-z0-9\\-]+$/" entity-id="12800" required="" ng-maxlength="100" countdown="" class="form-control ng-pristine ng-untouched ng-valid-pattern ng-valid-maxlength ng-valid ng-valid-required" popover="The unique key uniquely identifies this Task in its IU Campuses (if any). This value will be used as part of the URL for this Task." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                        <span class="label pull-right label-info"><span class="counter">67</span><span class="sr-only"> characters remaining</span></span> </div>
                                    <!-- ngRepeat: (validator, invalid) in taskForm.uniqueKey.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.uniqueKey.messages --> 
                                </div>
                                <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.statType.$invalid || taskForm.$serverError.statType.$invalid)}">
                                    <label for="statType" class="control-label">Stat Recording Type</label>
                                    <div class="counter-container">
                                        <select ng-model="task.statType" name="statType" ng-options="key as value for (key, value) in ::pageData.statTypes" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required popover="If the user is logged in, record who the user was with the stat being recorded." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                            <option value="A" selected="selected" label="Anonymous">Anonymous</option>
                                            <option value="U" selected="selected" label="User">User</option>
                                        </select>
                                    </div>
                                    <!-- ngRepeat: (validator, invalid) in taskForm.statType.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.statType.messages --> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12" ng-class="{'has-error': (taskForm.metaDescription.$invalid || taskForm.$serverError.metaDescription.$invalid)}">
                                    <label for="metaDescription" class="control-label">Meta Description (Search Engine Optimization)</label>
                                    <div class="counter-container">
                                        <textarea ng-model="task.metaDescription" name="metaDescription" required ng-maxlength="155" countdown="" unique="/publish/task/validateMetaDescription" unique-data="task.markets" entity-id="12800" class="form-control ng-pristine ng-untouched ng-valid-maxlength ng-valid ng-valid-required" rows="5" popover="The meta description is a more concise description that is visible to search engines. This description may show up in search results on those search engines." data-original-title="" title="" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false"></textarea>
                                        <span class="label pull-right label-info"><span class="counter">94</span><span class="sr-only"> characters remaining</span></span> </div>
                                    <!-- ngRepeat: (validator, invalid) in taskForm.metaDescription.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.metaDescription.messages --> 
                                </div>
                            </div>
                        </div>
                        <!-- end ngIf: pending || pageData.approver || !pageData.requireApproval -->
                    </fieldset>
                    <fieldset ng-show="pending || pageData.publishers.length != 1 || taskForm.$serverError.publisherId.$invalid" aria-hidden="false">
                        <legend>Publisher</legend>
                        <div>
                            <div class="row"> 
                                <!-- ngIf: ::!pending -->
                                <div ng-if="::!pending" class="form-group col-md-3" ng-class="{'has-error': (taskForm.publisherId.$invalid || taskForm.$serverError.publisherId.$invalid)}">
                                    <select ng-model="task.publisherId" name="publisherId" ng-options="publisher.publisherId as publisher.name for publisher in ::pageData.publishers" class="form-control ng-pristine ng-untouched ng-valid ng-valid-required" required tabindex="0" aria-required="false" aria-invalid="false">
                                        <option value="0" selected="selected" label="AIT">AIT</option>
                                        <option value="1" label="One.IU Team">One.IU Team</option>
                                        <option value="2" label="Research Technologies">Research Technologies</option>
                                        <option value="3" label="SIS Test">SIS Test</option>
                                        <option value="4" selected="selected" label="Test Publisher">Test Publisher</option>
                                        <option value="5" label="Test Publisher 2">Test Publisher 2</option>
                                        <option value="6" label="Training Test">Training Test</option>
                                        <option value="7" label="Training Video">Training Video</option>
                                    </select>
                                    <!-- ngRepeat: (validator, invalid) in taskForm.publisherId.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.publisherId.messages --> 
                                </div>
                                <!-- end ngIf: ::!pending --> 
                                <!-- ngIf: ::pending -->
                                <div class="form-group col-md-9">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Icon Images</legend>
                        <div> 
                            <!-- ngRepeat: message in taskForm.$serverError.imageSetId.messages -->
                            <p ng-show="!taskForm.$serverError.imageSetId.$invalid &amp;&amp; (task.imageSetId==null || task.imageSetId=='') &amp;&amp; (task.desktopImage == null || (!task.generateSmallerImageSizes &amp;&amp; (task.tabletHighResolutionImage == null || task.tabletLowResolutionImage == null || task.phoneHighResolutionImage == null || task.phoneLowResolutionImage == null)))" class="text-danger ng-hide" aria-hidden="true">Select an icon, or upload all 5 image sizes</p>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#selectImage" data-toggle="tab" eat-click="">Select An Image</a></li>
                                <li><a href="#uploadImages" data-toggle="tab" eat-click="">Upload Images</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="selectImage">
                                    <div class="row">
                                        <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.imageSetId.$invalid || taskForm.$serverError.imageSetId.$invalid)}">
                                            <label for="imageSetId" class="control-label">Choose an Image</label>
                                            <select ng-model="selectedImageSet" ng-change="task.imageSetId = selectedImageSet.imageSetId" name="imageSetId" ng-options="imageSet as imageSet.name for imageSet in ::pageData.imageSets" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                                <option value=""></option>
                                                <option value="0" label="A Test">A Test</option>
                                                <option value="1" label="Admissions">Admissions</option>
                                                <option value="2" label="Alert">Alert</option>
                                                <option value="3" label="Approved">Approved</option>
                                                <option value="4" label="Blocked">Blocked</option>
                                                <option value="5" label="Box test">Box test</option>
                                                <option value="6" label="Bus">Bus</option>
                                                <option value="7" label="Calendar">Calendar</option>
                                                <option value="8" label="Calendar - IU Mobile">Calendar - IU Mobile</option>
                                                <option value="9" label="Calendar - old">Calendar - old</option>
                                                <option value="10" label="Canvas">Canvas</option>
                                                <option value="11" label="Cap">Cap</option>
                                                <option value="12" label="Car">Car</option>
                                                <option value="13" label="Checkbox">Checkbox</option>
                                                <option value="14" label="Clipboard">Clipboard</option>
                                                <option value="15" label="Cloud">Cloud</option>
                                                <option value="16" label="Computer">Computer</option>
                                                <option value="17" label="Document">Document</option>
                                                <option value="18" label="Down arrow">Down arrow</option>
                                                <option value="19" label="Emergency">Emergency</option>
                                                <option value="20" label="Gear">Gear</option>
                                                <option value="21" label="Globe">Globe</option>
                                                <option value="22" label="Google">Google</option>
                                                <option value="23" label="Grades">Grades</option>
                                                <option value="24" label="Graduation">Graduation</option>
                                                <option value="25" label="Guest">Guest</option>
                                                <option value="26" label="Hard Drive">Hard Drive</option>
                                                <option value="27" label="Holds">Holds</option>
                                                <option value="28" label="House">House</option>
                                                <option value="29" label="IUPUI">IUPUI</option>
                                                <option value="30" label="Key">Key</option>
                                                <option value="31" label="Link">Link</option>
                                                <option value="32" label="Lock">Lock</option>
                                                <option value="33" label="Mail">Mail</option>
                                                <option value="34" label="Money">Money</option>
                                                <option value="35" label="Nametag">Nametag</option>
                                                <option value="36" label="Nodes">Nodes</option>
                                                <option value="37" label="OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!">OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!</option>
                                                <option value="38" label="Outlink">Outlink</option>
                                                <option value="39" label="Papers">Papers</option>
                                                <option value="40" label="Password">Password</option>
                                                <option value="41" label="People">People</option>
                                                <option value="42" label="Question">Question</option>
                                                <option value="43" label="Rewind">Rewind</option>
                                                <option value="44" label="Rolodex">Rolodex</option>
                                                <option value="45" label="Scholarships">Scholarships</option>
                                                <option value="46" label="Search">Search</option>
                                                <option value="47" label="Star">Star</option>
                                                <option value="48" label="Talisma">Talisma</option>
                                                <option value="49" label="Tenant Admin test">Tenant Admin test</option>
                                                <option value="50" label="test">test</option>
                                                <option value="51" label="Test only GLOBE">Test only GLOBE</option>
                                                <option value="52" label="Test only MONEY">Test only MONEY</option>
                                                <option value="53" label="Textbooks">Textbooks</option>
                                                <option value="54" label="Textbooks - old">Textbooks - old</option>
                                                <option value="55" label="Urgent">Urgent</option>
                                                <option value="56" label="User">User</option>
                                                <option value="57" label="Wrench">Wrench</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Image Preview</label>
                                            <!-- ngIf: selectedImageSet && selectedImageSet.desktopImageCdnUrl --> 
                                            <!-- ngIf: selectedImageSet && !selectedImageSet.desktopImageCdnUrl --> 
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="uploadImages">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" ng-model="task.generateSmallerImageSizes" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                                    Automatically generate smaller image sizes. </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3" ng-class="{'has-error': task.desktopImage == null || desktopUploadReturn.error || taskForm.$serverError.desktopImage.$invalid}">
                                            <label class="control-label">Large Image (153×153)</label>
                                            <div data-image-upload="task.desktopImage" data-size="5"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                </span>
                                                <button type="button" class="btn btn-danger" ng-click="image = null" ng-show="image != null" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="" src="/publish/media/15055"> </div>
                                            </div>
                                            <!-- ngRepeat: message in taskForm.$serverError.desktopImage.messages --> 
                                        </div>
                                        <div class="form-group col-md-3" ng-hide="task.generateSmallerImageSizes" ng-class="{'has-error': (!task.generateSmallerImageSizes &amp;&amp; task.tabletHighResolutionImage == null) || tabletHiResUploadReturn.error || taskForm.$serverError.tabletHighResolutionImage.$invalid}" aria-hidden="false">
                                            <label class="control-label">Small Retina Image (144×144)</label>
                                            <div data-image-upload="task.tabletHighResolutionImage" data-size="4"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                </span>
                                                <button type="button" class="btn btn-danger" ng-click="image = null" ng-show="image != null" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="" src="/publish/media/15058"> </div>
                                            </div>
                                            <!-- ngRepeat: message in taskForm.$serverError.tabletHighResolutionImage.messages --> 
                                        </div>
                                        <div class="form-group col-md-3" ng-hide="task.generateSmallerImageSizes" ng-class="{'has-error': (!task.generateSmallerImageSizes &amp;&amp; task.phoneHighResolutionImage == null) || phoneHiResUploadReturn.error || taskForm.$serverError.phoneHighResolutionImage.$invalid}" aria-hidden="false">
                                            <label class="control-label">Medium Image (90×90)</label>
                                            <div data-image-upload="task.phoneHighResolutionImage" data-size="2"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                </span>
                                                <button type="button" class="btn btn-danger" ng-click="image = null" ng-show="image != null" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="" src="/publish/media/15056"> </div>
                                            </div>
                                            <!-- ngRepeat: message in taskForm.$serverError.phoneHighResolutionImage.messages --> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3" ng-hide="task.generateSmallerImageSizes" ng-class="{'has-error': (!task.generateSmallerImageSizes &amp;&amp; task.tabletLowResolutionImage == null) || tabletLoResUploadReturn.error || taskForm.$serverError.tabletLowResolutionImage.$invalid}" aria-hidden="false">
                                            <label class="control-label">Small Image (72×72)</label>
                                            <div data-image-upload="task.tabletLowResolutionImage" data-size="3"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                </span>
                                                <button type="button" class="btn btn-danger" ng-click="image = null" ng-show="image != null" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="" src="/publish/media/15059"> </div>
                                            </div>
                                            <!-- ngRepeat: message in taskForm.$serverError.tabletLowResolutionImage.messages --> 
                                        </div>
                                        <div class="form-group col-md-3" ng-hide="task.generateSmallerImageSizes" ng-class="{'has-error': (!task.generateSmallerImageSizes &amp;&amp; task.phoneLowResolutionImage == null) || phoneLoResUploadReturn.error || taskForm.$serverError.phoneLowResolutionImage.$invalid}" aria-hidden="false">
                                            <label class="control-label">Very Small Image (31×31)</label>
                                            <div data-image-upload="task.phoneLowResolutionImage" data-size="1"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                </span>
                                                <button type="button" class="btn btn-danger" ng-click="image = null" ng-show="image != null" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                                                <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="" src="/publish/media/15057"> </div>
                                            </div>
                                            <!-- ngRepeat: message in taskForm.$serverError.phoneLowResolutionImage.messages --> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend> Screen Shots &amp; Video </legend>
                        <div class="form-group" ng-class="{'has-error': (task.media.length < 1 || taskForm.$serverError.media.$invalid)}"> 
                            <!-- ngRepeat: message in taskForm.$serverError.media.messages -->
                            <p ng-show="task.media.length < 1" class="text-danger ng-hide" aria-hidden="true">At least one screen shot is required</p>
                            <label class="control-label">All Files</label>
                            <div class="well media-list">
                                <ul ui-sortable="" ng-model="task.media" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                    <!-- ngRepeat: file in task.media -->
                                    <li data-ng-repeat="file in task.media">
                                        <div data-ng-switch="" data-on="::file.mediaType"> 
                                            <!-- ngSwitchWhen: V --> 
                                            <!-- ngSwitchDefault:  -->
                                            <div data-ng-switch-default=""> 
                                                <!-- ngIf: !!file.contentUrl --> 
                                                <!-- ngIf: !file.contentUrl && !!file.mediaId --><img ng-if="!file.contentUrl &amp;&amp; !!file.mediaId" ng-src="/publish/media/14558" title="" src="/publish/media/14558"><!-- end ngIf: !file.contentUrl && !!file.mediaId --> 
                                                <!-- ngIf: !file.contentUrl && !file.mediaId -->
                                                <div>
                                                    <button type="button" class="btn btn-warning btn-xs" ng-click="editCaption(file)" tabindex="0"> <i class="icon-edit"></i> <!-- ngIf: !file.caption.length --><span ng-if="!file.caption.length">Add</span><!-- end ngIf: !file.caption.length --><!-- ngIf: file.caption.length --> Alt Text </button>
                                                    <button type="button" class="btn btn-danger btn-xs" ng-click="deleteMedia(file)" ng-show="!file.$destroy" tabindex="0" aria-hidden="false"> <i class="icon-minus-circled"></i> Delete </button>
                                                    <button ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy btn-xs ng-hide" ng-click="file.$destroy()" ng-hide="!file.$destroy" tabindex="0" aria-hidden="true"> <i class="icon-minus-circled"></i> Delete </button>
                                                </div>
                                            </div>
                                            <!-- end ngSwitchWhen: --> 
                                        </div>
                                    </li>
                                    <!-- end ngRepeat: file in task.media -->
                                    <li data-ng-repeat="file in task.media">
                                        <div data-ng-switch="" data-on="::file.mediaType"> 
                                            <!-- ngSwitchWhen: V --> 
                                            <!-- ngSwitchDefault:  -->
                                            <div data-ng-switch-default=""> 
                                                <!-- ngIf: !!file.contentUrl --> 
                                                <!-- ngIf: !file.contentUrl && !!file.mediaId --><img ng-if="!file.contentUrl &amp;&amp; !!file.mediaId" ng-src="/publish/media/18749" title="" src="/publish/media/18749"><!-- end ngIf: !file.contentUrl && !!file.mediaId --> 
                                                <!-- ngIf: !file.contentUrl && !file.mediaId -->
                                                <div>
                                                    <button type="button" class="btn btn-warning btn-xs" ng-click="editCaption(file)" tabindex="0"> <i class="icon-edit"></i> <!-- ngIf: !file.caption.length --><span ng-if="!file.caption.length">Add</span><!-- end ngIf: !file.caption.length --><!-- ngIf: file.caption.length --> Alt Text </button>
                                                    <button type="button" class="btn btn-danger btn-xs" ng-click="deleteMedia(file)" ng-show="!file.$destroy" tabindex="0" aria-hidden="false"> <i class="icon-minus-circled"></i> Delete </button>
                                                    <button ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy btn-xs ng-hide" ng-click="file.$destroy()" ng-hide="!file.$destroy" tabindex="0" aria-hidden="true"> <i class="icon-minus-circled"></i> Delete </button>
                                                </div>
                                            </div>
                                            <!-- end ngSwitchWhen: --> 
                                        </div>
                                    </li>
                                    <!-- end ngRepeat: file in task.media -->
                                </ul>
                                <div style="clear: both"></div>
                            </div>
                            Add more files
                            <div>
                                <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" ng-class="{true: 'fileupload-processing'}[!!processing() || loadingFiles]" class="ng-pristine ng-valid">
                                    <div class="row fileupload-buttonbar">
                                        <div class="col-md-7"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                            <input type="file" name="files[]" multiple>
                                            </span> 
                                            <!-- not part of the upload widget -->
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#imageModal"> <i class="icon-plus"></i> Link an image… </button>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#videoModal"> <i class="icon-plus"></i> Link a video… </button>
                                            <!-- end not part of the upload widget -->
                                            <div class="fileupload-loading"></div>
                                        </div>
                                        <div class="col-md-5 fade" data-ng-class="{true: 'in'}[!!active()]">
                                            <div class="progress" data-file-upload-progress="progress()">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Upload Files Queue</label>
                            <div class="well media-list">
                                <ul>
                                    <!-- ngRepeat: file in queue -->
                                </ul>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset ng-show="pageData.markets.length > 0" aria-hidden="false" class="">
                        <legend>Campus</legend>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select ng-model="selectedMarket" ng-options="market.name for market in ::pageData.markets" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                        <option value="">All IU Campuses</option>
                                        <option value="0" label="IU Bloomington">IU Bloomington</option>
                                        <option value="1" label="IU East">IU East</option>
                                        <option value="2" label="IU Kokomo">IU Kokomo</option>
                                        <option value="3" label="IU Northwest">IU Northwest</option>
                                        <option value="4" label="IU South Bend">IU South Bend</option>
                                        <option value="5" label="IU Southeast">IU Southeast</option>
                                        <option value="6" label="IUPUC">IUPUC</option>
                                        <option value="7" label="IUPUI">IUPUI</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default pull-right" type="button" ng-click="addMarket()" tabindex="0">Add</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="button-list well"> <span ng-show="task.markets.length == 0" class="label label-default" aria-hidden="false">All IU Campuses</span> 
                                    <!-- ngRepeat: market in task.markets --> 
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset ng-show="pageData.roles.length > 0" aria-hidden="false" class="">
                        <legend>Roles</legend>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select ng-model="selectedRole" ng-options="role.name for role in ::pageData.roles" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                        <option value="">All Roles</option>
                                        <option value="0" label="Delete Me">Delete Me</option>
                                        <option value="1" label="Faculty">Faculty</option>
                                        <option value="2" label="Faculty2">Faculty2</option>
                                        <option value="3" label="role that overlaps checkmark">role that overlaps checkmark</option>
                                        <option value="4" label="Staff">Staff</option>
                                        <option value="5" label="Student">Student</option>
                                        <option value="6" label="WWWW">WWWW</option>
                                        <option value="7" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default pull-right" type="button" ng-click="addRole()" tabindex="0">Add</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="button-list well"> <span ng-show="task.roles.length == 0" class="label label-default" aria-hidden="false">All Roles</span> 
                                    <!-- ngRepeat: role in task.roles --> 
                                </div>
                                <!-- ngIf: invalidRoles.length > 0 --> 
                                <!-- ngRepeat: message in taskForm.$serverError.roles.messages --> 
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Categories</legend>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select ng-model="selectedCategory" ng-options="category.name for category in ::pageData.categories" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                            <option value="" selected="selected" label=""></option>
                                            <option value="0" label="Academic">Academic</option>
                                            <option value="1" label="Accounts">Accounts</option>
                                            <option value="2" label="Administrative">Administrative</option>
                                            <option value="3" label="Admissions">Admissions</option>
                                            <option value="4" label="Advising">Advising</option>
                                            <option value="5" label="Campus Life">Campus Life</option>
                                            <option value="6" label="Careers">Careers</option>
                                            <option value="7" label="category 2">category 2</option>
                                            <option value="8" label="Category 3">Category 3</option>
                                            <option value="9" label="Category awesome">Category awesome</option>
                                            <option value="10" label="category with role staff">category with role staff</option>
                                            <option value="11" label="Cool Category">Cool Category</option>
                                            <option value="12" label="Delete This Because Of The Length">Delete This Because Of The Length</option>
                                            <option value="13" label="Dormatories">Dormatories</option>
                                            <option value="14" label="Employee Benefits">Employee Benefits</option>
                                            <option value="15" label="Empty">Empty</option>
                                            <option value="16" label="Faculty Services">Faculty Services</option>
                                            <option value="17" label="Finances">Finances</option>
                                            <option value="18" label="Housing &amp; Dining">Housing &amp; Dining</option>
                                            <option value="19" label="IT Services">IT Services</option>
                                            <option value="20" label="Libraries">Libraries</option>
                                            <option value="21" label="Payroll and Taxes">Payroll and Taxes</option>
                                            <option value="22" label="Personal Information">Personal Information</option>
                                            <option value="23" label="Research">Research</option>
                                            <option value="24" label="Role'd Up">Role'd Up</option>
                                            <option value="25" label="Student Life and Activities">Student Life and Activities</option>
                                            <option value="26" label="Training">Training</option>
                                            <option value="27" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-default pull-right" type="button" ng-click="addCategory()" tabindex="0">Add</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="button-list well"> <span ng-show="task.categories.length == 0" class="label label-danger ng-hide" aria-hidden="true">A category is required</span> 
                                        <!-- ngRepeat: category in task.categories -->
                                        <button type="button" ng-repeat="category in task.categories" ng-click="removeCategory(category)" class="btn btn-default btn-sm" tabindex="0"> Research&nbsp;<i class="icon-cancel"></i> </button>
                                        <!-- end ngRepeat: category in task.categories --> 
                                    </div>
                                    <!-- ngRepeat: message in taskForm.$serverError.categories.messages --> 
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend> Tags </legend>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tagModal">Choose Tags…</button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="button-list well"> 
                                    <!-- ngRepeat: taskTag in task.tags -->
                                    <div ng-repeat="taskTag in task.tags" class="btn-sm tag">
                                        <button ng-click="removeTag(taskTag)" class="btn btn-danger btn-xs pull-right" tabindex="0"> <i class="icon-cancel"></i> </button>
                                        <span class="h5" style="font-weight:normal;">UITS Research Technologies (RT)&nbsp;&nbsp;&nbsp;</span>
                                        <div class="clearfix"></div>
                                        <div class="checkbox" style="margin-bottom:0;">
                                            <label>
                                                <input type="checkbox" ng-model="taskTag.hidden" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                                Hidden </label>
                                        </div>
                                    </div>
                                    <!-- end ngRepeat: taskTag in task.tags -->
                                    <div ng-repeat="taskTag in task.tags" class="btn-sm tag">
                                        <button ng-click="removeTag(taskTag)" class="btn btn-danger btn-xs pull-right" tabindex="0"> <i class="icon-cancel"></i> </button>
                                        <span class="h5" style="font-weight:normal;">test tag&nbsp;&nbsp;&nbsp;</span>
                                        <div class="clearfix"></div>
                                        <div class="checkbox" style="margin-bottom:0;">
                                            <label>
                                                <input type="checkbox" ng-model="taskTag.hidden" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                                Hidden </label>
                                        </div>
                                    </div>
                                    <!-- end ngRepeat: taskTag in task.tags -->
                                    <div ng-repeat="taskTag in task.tags" class="btn-sm tag">
                                        <button ng-click="removeTag(taskTag)" class="btn btn-danger btn-xs pull-right" tabindex="0"> <i class="icon-cancel"></i> </button>
                                        <span class="h5" style="font-weight:normal;">Academic Planning&nbsp;&nbsp;&nbsp;</span>
                                        <div class="clearfix"></div>
                                        <div class="checkbox" style="margin-bottom:0;">
                                            <label>
                                                <input type="checkbox" ng-model="taskTag.hidden" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="true" aria-invalid="false">
                                                Hidden </label>
                                        </div>
                                    </div>
                                    <!-- end ngRepeat: taskTag in task.tags --> 
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Active Content</legend>
                        <div>
                            <div class="row">
                                <div class="form-group col-sm-6" ng-class="{'has-error': (taskForm.activeContentUrl.$invalid || taskForm.$serverError.activeContentUrl.$invalid)}">
                                    <label for="activeContentUrl" class="control-label">Active Content Public URL</label>
                                    <div class="counter-container">
                                        <input type="url" ng-model="task.activeContentUrl" name="activeContentUrl" ng-maxlength="2000" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-maxlength" tabindex="0" aria-invalid="false">
                                        <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                    <!-- ngRepeat: (validator, invalid) in taskForm.activeContentUrl.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.activeContentUrl.messages --> 
                                </div>
                                <div class="form-group col-sm-3" ng-class="{'has-error': (taskForm.activeContentRequiresAuth.$invalid || taskForm.$serverError.activeContentRequiresAuth.$invalid)}">
                                    <label for="activeContentRequiresAuth" class="control-label">Active Content Authentication</label>
                                    <div class="checkbox">
                                        <label popover="Require the user to be signed in before requesting any active content.  This is useful for preventing unnecessary requests when user information is required." trigger="hover" data-original-title="" title="">
                                            <input type="checkbox" name="activeContentRequiresAuth" ng-model="task.activeContentRequiresAuth" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                            Require user to be signed in </label>
                                    </div>
                                    <!-- ngRepeat: (validator, invalid) in taskForm.activeContentRequiresAuth.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.activeContentRequiresAuth.messages --> 
                                </div>
                                <div class="form-group col-sm-3" ng-class="{'has-error': (taskForm.activeContentUpdateFrequency.$invalid || taskForm.$serverError.activeContentUpdateFrequency.$invalid)}">
                                    <label for="activeContentUpdateFrequency" class="">Update Frequency (seconds)</label>
                                    <input type="number" name="activeContentUpdateFrequency" min="5" max="14400" step="1" ng-model="task.activeContentUpdateFrequency" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max" popover="Set the update frequency (in seconds) at which you want a tile to refresh its Active Content. Becareful with how short the interval is because the content will reset back to the first item after a refresh." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                    <!-- ngRepeat: (validator, invalid) in taskForm.activeContentUpdateFrequency.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.activeContentUpdateFrequency.messages --> 
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- <fieldset>
		<legend>
			Maintenance
		</legend>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group col-md-3">
					<label for="maintenanceBeginDate" class="control-label">Maintenance Begin Date</label> <input type="text" datepicker="body" time ng-model="task.maintenanceBeginDate" class="form-control" />
				</div>
				<div class="form-group col-md-3">
					<label for="maintenanceEndDate" class="control-label">Maintenance End Date</label> <input type="text" datepicker="body" time ng-model="task.maintenanceEndDate" class="form-control" />
				</div>
				<div class="form-group col-md-6">
					<label for="maintenanceDescription" class="control-label">Maintenance Description</label>
					<textarea ng-model="task.maintenanceDescription" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</fieldset> -->
                    <button class="btn btn-success" type="button" ng-hide="pending || (!pageData.approver &amp;&amp; pageData.requireApproval)" ng-click="saveTask(false)" ng-disabled="taskForm.$invalid || invalidRoles.length > 0" tabindex="0" aria-disabled="false" aria-hidden="false">Save</button>
                    <button class="btn btn-info ng-hide" type="button" ng-hide="pending || (task.versionStatus != null &amp;&amp; task.versionStatus != 'R')" ng-disabled="taskForm.uniqueKey.$invalid || taskForm.title.$invalid" ng-click="saveTask(true)" tabindex="0" aria-hidden="true" aria-disabled="false">Save As Draft</button>
                    <button class="btn btn-warning ng-hide" type="button" ng-hide="pending || pageData.approver || !pageData.requireApproval" ng-click="submitTask()" ng-disabled="taskForm.$invalid || invalidRoles.length > 0" tabindex="0" aria-hidden="true" aria-disabled="false">Submit</button>
                    <button class="btn btn-primary ng-hide" type="button" ng-show="pending &amp;&amp; pageData.approver" ng-click="approveTask()" ng-disabled="taskForm.$invalid || invalidRoles.length > 0" tabindex="0" aria-hidden="true" aria-disabled="false">Approve</button>
                    <button class="btn btn-danger ng-hide" type="button" ng-show="pending &amp;&amp; pageData.approver" ng-click="declineTask()" tabindex="0" aria-hidden="true">Decline</button>
                    <a href="#/tasks" ng-hide="pending" class="btn btn-danger">Cancel</a> <a href="#/pendingTasks" ng-show="pending" class="btn btn-default ng-hide" aria-hidden="true">Cancel</a>
                    <a href="#/tasks" ng-hide="pending" class="btn btn-danger">Remove Task</a> <a href="#/pendingTasks" ng-show="pending" class="btn btn-default ng-hide" aria-hidden="true">Remove</a>
                </form>
                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content ng-pristine ng-valid-url ng-invalid ng-invalid-required ng-valid-pattern" name="imageLinkForm" novalidate>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group has-error" ng-class="{'has-error': imageLinkForm.imageLinkUrl.$invalid}">
                                    <label for="imageLinkUrl" class="control-label">URL</label>
                                    <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" required="" ng-model="linkedImageUrl" class="form-control ng-pristine ng-untouched ng-valid-url ng-invalid ng-invalid-required ng-valid-pattern" tabindex="0" aria-required="true" aria-invalid="true">
                                    <p ng-show="imageLinkForm.imageLinkUrl.$error.pattern" class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <button class="btn btn-success" ng-click="linkImage()" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                            </div>
                        </form>
                        <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                </div>
                <!-- /.modal -->
                
                <div class="modal fade" id="captionModal" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                            </div>
                            <div class="modal-body">
                                <form name="altTextForm" novalidate class="ng-pristine ng-valid ng-valid-maxlength">
                                    <div ng-class="{'has-error': altTextForm.imageCaption.$invalid}">
                                        <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                        <div class="counter-container">
                                            <input type="text" name="imageCaption" ng-model="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                            <span class="label pull-right label-info"><span class="counter">200</span><span class="sr-only"> characters remaining</span></span> </div>
                                        <div ng-show="altTextForm.imageCaption.$error.maxlength" class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <button class="btn btn-success" ng-click="saveCaption()" ng-disabled="imageCaption.length > 200 || imageCaption == null" tabindex="0" aria-disabled="false">Save</button>
                            </div>
                        </div>
                        <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                </div>
                <!-- /.modal -->
                
                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                            </div>
                            <div class="modal-body">
                                <form name="videoLinkForm" novalidate class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                        <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="youtubeUrl">
                                            <div class="form-group" ng-class="{'has-error': videoLinkForm.videoLinkUrl.$invalid}">
                                                <label for="videoLinkUrl" class="control-label">URL</label>
                                                <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" ng-model="linkedVideo.contentUrl" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                <p ng-show="videoLinkForm.videoLinkUrl.$error.pattern" class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="videoFiles">
                                            <div class="form-group" ng-class="{'has-error': videoLinkForm.webmUrl.$invalid}">
                                                <label for="webmUrl" class="control-label">WebM URL</label>
                                                <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" ng-model="linkedVideo.webmUrl" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                <p ng-show="videoLinkForm.webmUrl.$error.pattern" class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                            </div>
                                            <div class="form-group" ng-class="{'has-error': videoLinkForm.oggUrl.$invalid}">
                                                <label for="oggUrl" class="control-label">Ogg URL</label>
                                                <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" ng-model="linkedVideo.oggUrl" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                <p ng-show="videoLinkForm.oggUrl.$error.pattern" class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                            </div>
                                            <div class="form-group" ng-class="{'has-error': videoLinkForm.mp4Url.$invalid}">
                                                <label for="mp4Url" class="control-label">MP4 URL</label>
                                                <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" ng-model="linkedVideo.mp4Url" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                <p ng-show="videoLinkForm.mp4Url.$error.pattern" class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                <button class="btn btn-success" ng-click="linkVideo()" tabindex="0">Save</button>
                            </div>
                        </div>
                        <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                </div>
                <!-- /.modal -->
                
                <div class="modal fade" id="tagModal" tabindex="-1" role="dialog" aria-labelledby="tagModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="tagModalLabel">Select Tags</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="tagSearch">Filter Tags</label>
                                            <input type="text" name="tagSearch" ng-model="tagSearch" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="tagSelect">Choose Tags</label>
                                            <select ng-model="selectedTags" name="tagSelect" multiple="" ng-options="tag as tag.name for tag in ::pageData.tags | filter:tagSearch | orderBy:'+name'" size="6" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                                <option value="0" label="8/4/15">8/4/15</option>
                                                <option value="1" label="Academic Planning">Academic Planning</option>
                                                <option value="2" label="Activities">Activities</option>
                                                <option value="3" label="Admissions Requirements">Admissions Requirements</option>
                                                <option value="4" label="Adoption">Adoption</option>
                                                <option value="5" label="Advanced Placement">Advanced Placement</option>
                                                <option value="6" label="Advising">Advising</option>
                                                <option value="7" label="Applications">Applications</option>
                                                <option value="8" label="asldjfhsadlf">asldjfhsadlf</option>
                                                <option value="9" label="Assignments">Assignments</option>
                                                <option value="10" label="Authorizations">Authorizations</option>
                                                <option value="11" label="Auto Awards">Auto Awards</option>
                                                <option value="12" label="Awards">Awards</option>
                                                <option value="13" label="Benefits">Benefits</option>
                                                <option value="14" label="Birth">Birth</option>
                                                <option value="15" label="Bursar">Bursar</option>
                                                <option value="16" label="Candidate">Candidate</option>
                                                <option value="17" label="Certification">Certification</option>
                                                <option value="18" label="Change Name">Change Name</option>
                                                <option value="19" label="Chat">Chat</option>
                                                <option value="20" label="Citations">Citations</option>
                                                <option value="21" label="Classes">Classes</option>
                                                <option value="22" label="Classroom">Classroom</option>
                                                <option value="23" label="CMS">CMS</option>
                                                <option value="24" label="Coaching">Coaching</option>
                                                <option value="25" label="Collaboration">Collaboration</option>
                                                <option value="26" label="Compass">Compass</option>
                                                <option value="27" label="Conflict of Interest">Conflict of Interest</option>
                                                <option value="28" label="Courses">Courses</option>
                                                <option value="29" label="Credits">Credits</option>
                                                <option value="30" label="CWA">CWA</option>
                                                <option value="31" label="Death">Death</option>
                                                <option value="32" label="Degree Requirements">Degree Requirements</option>
                                                <option value="33" label="Dependents">Dependents</option>
                                                <option value="34" label="Digital">Digital</option>
                                                <option value="35" label="Digital Learning Tool">Digital Learning Tool</option>
                                                <option value="36" label="Dining">Dining</option>
                                                <option value="37" label="Discount">Discount</option>
                                                <option value="38" label="Discrimination">Discrimination</option>
                                                <option value="39" label="Divorce">Divorce</option>
                                                <option value="40" label="Dossier">Dossier</option>
                                                <option value="41" label="eDocs">eDocs</option>
                                                <option value="42" label="Eligibility">Eligibility</option>
                                                <option value="43" label="Email">Email</option>
                                                <option value="44" label="Employers">Employers</option>
                                                <option value="45" label="Enrollment">Enrollment</option>
                                                <option value="46" label="Enrollment Requirements">Enrollment Requirements</option>
                                                <option value="47" label="Events">Events</option>
                                                <option value="48" label="FAFSA">FAFSA</option>
                                                <option value="49" label="Fairs">Fairs</option>
                                                <option value="50" label="Financial Aid">Financial Aid</option>
                                                <option value="51" label="GI Bill">GI Bill</option>
                                                <option value="52" label="Grades">Grades</option>
                                                <option value="53" label="Hardware">Hardware</option>
                                                <option value="54" label="Health">Health</option>
                                                <option value="55" label="Holds">Holds</option>
                                                <option value="56" label="Housing">Housing</option>
                                                <option value="57" label="Human Subjects">Human Subjects</option>
                                                <option value="58" label="IDs">IDs</option>
                                                <option value="59" label="Instructor-led">Instructor-led</option>
                                                <option value="60" label="Insurance">Insurance</option>
                                                <option value="61" label="Intercampus">Intercampus</option>
                                                <option value="62" label="International">International</option>
                                                <option value="63" label="Internet2">Internet2</option>
                                                <option value="64" label="Internship">Internship</option>
                                                <option value="65" label="Interview">Interview</option>
                                                <option value="66" label="IRB">IRB</option>
                                                <option value="67" label="IT Help">IT Help</option>
                                                <option value="68" label="ITHelpLive">ITHelpLive</option>
                                                <option value="69" label="IU Mobile">IU Mobile</option>
                                                <option value="70" label="IUF">IUF</option>
                                                <option value="71" label="Job Aid">Job Aid</option>
                                                <option value="72" label="Jobs">Jobs</option>
                                                <option value="73" label="JW Test">JW Test</option>
                                                <option value="74" label="Keep on testing">Keep on testing</option>
                                                <option value="75" label="Kuali">Kuali</option>
                                                <option value="76" label="Kuali Coeus">Kuali Coeus</option>
                                                <option value="77" label="Library">Library</option>
                                                <option value="78" label="Loans">Loans</option>
                                                <option value="79" label="Mail">Mail</option>
                                                <option value="80" label="Marriage">Marriage</option>
                                                <option value="81" label="Meals">Meals</option>
                                                <option value="82" label="Military">Military</option>
                                                <option value="83" label="My classes">My classes</option>
                                                <option value="84" label="New Tag">New Tag</option>
                                                <option value="85" label="News">News</option>
                                                <option value="86" label="NewTag">NewTag</option>
                                                <option value="87" label="Nominations">Nominations</option>
                                                <option value="88" label="Notifications">Notifications</option>
                                                <option value="89" label="Online">Online</option>
                                                <option value="90" label="Orientation">Orientation</option>
                                                <option value="91" label="Parking">Parking</option>
                                                <option value="92" label="Paycheck">Paycheck</option>
                                                <option value="93" label="PC">PC</option>
                                                <option value="94" label="Permissions">Permissions</option>
                                                <option value="95" label="Permits">Permits</option>
                                                <option value="96" label="Personal Information">Personal Information</option>
                                                <option value="97" label="Pervasive Technology Institute (PTI)">Pervasive Technology Institute (PTI)</option>
                                                <option value="98" label="Placement">Placement</option>
                                                <option value="99" label="Preferred Name">Preferred Name</option>
                                                <option value="100" label="Promotion">Promotion</option>
                                                <option value="101" label="Proposals">Proposals</option>
                                                <option value="102" label="Publication">Publication</option>
                                                <option value="103" label="REC">REC</option>
                                                <option value="104" label="Registration">Registration</option>
                                                <option value="105" label="Renewals">Renewals</option>
                                                <option value="106" label="Reports">Reports</option>
                                                <option value="107" label="Reservations">Reservations</option>
                                                <option value="108" label="Resume">Resume</option>
                                                <option value="109" label="RPS">RPS</option>
                                                <option value="110" label="Safety">Safety</option>
                                                <option value="111" label="Schedules">Schedules</option>
                                                <option value="112" label="Scholarships">Scholarships</option>
                                                <option value="113" label="search">search</option>
                                                <option value="114" label="Security">Security</option>
                                                <option value="115" label="Self-service">Self-service</option>
                                                <option value="116" label="Settings">Settings</option>
                                                <option value="117" label="Sidewalk">Sidewalk</option>
                                                <option value="118" label="SIS">SIS</option>
                                                <option value="119" label="SIS Test">SIS Test</option>
                                                <option value="120" label="Software">Software</option>
                                                <option value="121" label="SSA">SSA</option>
                                                <option value="122" label="Stairs">Stairs</option>
                                                <option value="123" label="Status">Status</option>
                                                <option value="124" label="Storage">Storage</option>
                                                <option value="125" label="Student Success Collaborative">Student Success Collaborative</option>
                                                <option value="126" label="Support">Support</option>
                                                <option value="127" label="Syllabus">Syllabus</option>
                                                <option value="128" label="Taxes">Taxes</option>
                                                <option value="129" label="Tenure">Tenure</option>
                                                <option value="130" label="test tag">test tag</option>
                                                <option value="131" label="test tag without aliases or task relations">test tag without aliases or task relations</option>
                                                <option value="132" label="testatafawefadsf">testatafawefadsf</option>
                                                <option value="133" label="Testing">Testing</option>
                                                <option value="134" label="Textbooks">Textbooks</option>
                                                <option value="135" label="This is a long tag name, intended to fill the entirety of characters available to a tag name for you">This is a long tag name, intended to fill the entirety of characters available to a tag name for you</option>
                                                <option value="136" label="Transcripts">Transcripts</option>
                                                <option value="137" label="Transfers">Transfers</option>
                                                <option value="138" label="UITS">UITS</option>
                                                <option value="139" label="UITS Research Technologies (RT)">UITS Research Technologies (RT)</option>
                                                <option value="140" label="VA">VA</option>
                                                <option value="141" label="Veterans">Veterans</option>
                                                <option value="142" label="Visa">Visa</option>
                                                <option value="143" label="Voc-Rehab">Voc-Rehab</option>
                                                <option value="144" label="Webinar">Webinar</option>
                                                <option value="145" label="Work">Work</option>
                                                <option value="146" label="Workflow">Workflow</option>
                                                <option value="147" label="Workshop">Workshop</option>
                                                <option value="148" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary pull-right" type="button" ng-click="addTags()" tabindex="0">Add Selected</button>
                                        </div>
                                    </div>
                                    <div class="form Group col-md-6">
                                        <label class="control-label">Currently Selected Tags</label>
                                        <div style="max-height:300px; overflow-y:auto;overflow-x:none;">
                                            <table class="table well">
                                                <tbody>
                                                    <!-- ngRepeat: taskTag in task.tags -->
                                                    <tr ng-repeat="taskTag in task.tags">
                                                        <td>UITS Research Technologies (RT)</td>
                                                        <td><input type="checkbox" ng-model="taskTag.hidden" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                                            Hidden </td>
                                                        <td><button ng-click="removeTag(taskTag)" class="btn btn-danger btn-xs" tabindex="0"><i class="icon-cancel"></i></button></td>
                                                    </tr>
                                                    <!-- end ngRepeat: taskTag in task.tags -->
                                                    <tr ng-repeat="taskTag in task.tags">
                                                        <td>test tag</td>
                                                        <td><input type="checkbox" ng-model="taskTag.hidden" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="false" aria-invalid="false">
                                                            Hidden </td>
                                                        <td><button ng-click="removeTag(taskTag)" class="btn btn-danger btn-xs" tabindex="0"><i class="icon-cancel"></i></button></td>
                                                    </tr>
                                                    <!-- end ngRepeat: taskTag in task.tags -->
                                                    <tr ng-repeat="taskTag in task.tags">
                                                        <td>Academic Planning</td>
                                                        <td><input type="checkbox" ng-model="taskTag.hidden" ng-true-value="'T'" ng-false-value="'F'" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-checked="true" aria-invalid="false">
                                                            Hidden </td>
                                                        <td><button ng-click="removeTag(taskTag)" class="btn btn-danger btn-xs" tabindex="0"><i class="icon-cancel"></i></button></td>
                                                    </tr>
                                                    <!-- end ngRepeat: taskTag in task.tags -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                        <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                </div>
                <!-- /.modal --> 
            </div>
        </div>
    </div>
</div>
<?php include ('modal/announcement-paycheck-details.php') ?>

<?php include ('modal/SD-1002-settings.php') ?>

<?php include('includes/brand-footer.php') ?><?php include('includes/footer-scripts.php') ?><script type='text/javascript'>//<![CDATA[

function showHide(elm) {
  var byrange = document.getElementById("byrange");
  var bystatus = document.getElementById("bystatus")
  if (elm.id == 'active-range') {
    byrange.classList.remove('hide');
    bystatus.classList.add('hide');
  } else {
    byrange.classList.add('hide');
    bystatus.classList.remove('hide');
  }
}

//]]> 

</script>
</body>
</html>
