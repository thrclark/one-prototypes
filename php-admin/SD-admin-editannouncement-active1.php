


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
                <h2> <span ng-show="::announcement &amp;&amp; announcement.announcementId == null" aria-hidden="false" class="">New</span><span ng-show="::announcement &amp;&amp; announcement.announcementId != null" aria-hidden="true" class="ng-hide">Edit</span> Announcement </h2>
                
                <!-- ngRepeat: alert in alertService.alerts -->
                <form name="announcementForm" novalidate validate="errors" id="announcementForm" class="ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength">
                    <fieldset>
                        <legend>General</legend>
                        <div class="row">
                            <div class="form-group col-md-6" ng-class="{'has-error': (announcementForm.title.$invalid || announcementForm.$serverError.title.$invalid)}">
                                <label for="title" class="control-label">Announcement Title</label>
                                <div class="counter-container">
                                    <input type="text" name="title" ng-model="announcement.title" required="" ng-maxlength="100" countdown="" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-maxlength" popover="The title is how the announcement will be referred to throughout the system." data-original-title="" title="" tabindex="0" aria-required="true" aria-invalid="true">
                                    <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12" ng-class="{'has-error': (announcementForm.description.$invalid || announcementForm.$serverError.description.$invalid)}">
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
                                            <textarea ng-model="announcement.description" name="description" required class="form-control ng-pristine markItUpEditor ng-invalid ng-invalid-required ng-touched" rows="5" mark-it-up="" aria-multiline="true" tabindex="0" aria-required="true" aria-invalid="true"></textarea>
                                            <div class="markItUpFooter">
                                                <div class="markItUpResizeHandle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ngIf: announcement.announcementId != null -->
                        
                        <legend> Active Dates <span class="text-muted" style="font-size:14px">(currently active)</span></legend>
                        <div class="row">
                            <div id="byrange" style="display:inline">
                                <div class="form-group col-md-3 desc" ng-class="{'has-error': (taskForm.beginDate.$invalid || taskForm.$serverError.beginDate.$invalid)}">
                                    <label for="beginDate" class="control-label">Begin Date</label>
                                    <input type="text" id="setstartdate" name="daterangetype" datepicker="body" time="" ng-model="task.beginDate" class="form-control ng-pristine ng-untouched ng-valid" popover="The date that this Task will become available. If left blank, Task will be available immediately if status is active." popover-placement="auto top" data-original-title="" title="" tabindex="0" aria-invalid="false">
                                    <!-- ngRepeat: (validator, invalid) in taskForm.beginDate.$error --> 
                                    <!-- ngRepeat: message in taskForm.$serverError.beginDate.messages --> 
                                </div>
                                <div class="form-group col-md-3" ng-class="{'has-error': (taskForm.beginDate.$invalid || taskForm.$serverError.beginDate.$invalid)}">
                                    <label for="beginDate" class="control-label">End Date* </label>
                                    <input type="text" class="form-control" id="setenddate">
                                    <a class="" href="#" style="font-size:12px; font-style:italic"id="setnow">End now</a> 
                                    
                                    <!-- /input-group --> 
                                    
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset ng-show="pageData.publishers.length > 1 || announcementForm.$serverError.publisherId.$invalid" aria-hidden="false" class="">
                        <legend>Publisher</legend>
                        <div class="row">
                            <div class="form-group col-md-3" ng-class="{'has-error': (announcementForm.publisherId.$invalid || announcementForm.$serverError.publisherId.$invalid)}">
                                <select ng-model="announcement.publisherId" name="publisherId" ng-options="publisher.publisherId as publisher.name for publisher in ::pageData.publishers" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required tabindex="0" aria-required="true" aria-invalid="true">
                                    <option value="" selected="selected" label=""></option>
                                    <option value="0" label="AIT">AIT</option>
                                    <option value="1" label="One.IU Team">One.IU Team</option>
                                    <option value="2" label="Research Technologies">Research Technologies</option>
                                    <option value="3" label="SIS Test">SIS Test</option>
                                    <option value="4" label="Test Publisher">Test Publisher</option>
                                    <option value="5" label="Test Publisher 2">Test Publisher 2</option>
                                    <option value="6" label="Training Test">Training Test</option>
                                    <option value="7" label="Training Video">Training Video</option>
                                </select>
                            </div>
                            <div class="form-group col-md-9"> </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Tasks</legend>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                                <label class="control-label" for="taskSearch">Search</label>
                                <div class="form-group input-group">
                                    <input type="text" name="taskSearch" ng-model="filter.terms" ng-enter="search()" ng-disabled="announcement.publisherId == null" placeholder="Select a publisher" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-disabled="true" disabled="disabled" aria-invalid="false">
                                    <span class="input-group-btn">
                                    <button class="btn btn-danger" ng-click="search()" role="button" ng-disabled="announcement.publisherId == null" tabindex="0" aria-disabled="true" disabled="disabled"> <span class="icon-search"></span> <span class="sr-only">search submit</span> </button>
                                    </span> </div>
                            </div>
                            <div ng-show="pageData.markets.length > 0" class="col-xs-6 col-sm-6 col-md-4 col-lg-3" aria-hidden="false">
                                <label class="control-label" for="market">Campus</label>
                                <select ng-model="filter.marketUniqueKey" name="market" ng-options="market.uniqueKey as market.name for market in ::pageData.markets" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                    <option value="">All </option>
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
                            <div ng-show="pageData.roles.length > 0" class="col-xs-6 col-sm-6 col-md-4 col-lg-3" aria-hidden="false">
                                <label class="control-label" for="role">Role</label>
                                <select ng-model="role" name="role" ng-options="role.uniqueKey as role.name for role in ::pageData.roles" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
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
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-md-5">
                                <div class="form-group">
                                    <label class="control-label" for="taskSelect">Tasks Found</label>
                                    <select ng-model="selectedTasks" multiple="" id="taskSelect" ng-options="searchResult as searchResult.displayName for searchResult in taskSearchResults | filter:taskFilter" size="8" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2 col-md-1 left-right">
                                <button class="btn btn-default btn-lg" type="button" ng-click="addTasks(selectedTasks)" title="Add" tabindex="0"><i class="icon-right hidden-inline-xs"></i><i class="icon-down visible-inline-xs"></i></button>
                                <button class="btn btn-default btn-lg" type="button" ng-click="removeTasks(selectedTaskAnnouncementIndexes)" title="Remove" tabindex="0"><i class="icon-left hidden-inline-xs"></i><i class="icon-up visible-inline-xs"></i></button>
                            </div>
                            <div class="col-sm-5 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="selectedTaskAnnouncementIndexes">Selected Tasks</label>
                                    <select ng-model="selectedTaskAnnouncementIndexes" id="selectedTaskAnnouncementIndexes" multiple="" size="8" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                        <!-- ngRepeat: task in announcement.taskAnnouncements -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-md-5">
                                <div class="form-group">
                                    <label class="control-label" for="taskSelect">Task Centers Found</label>
                                    <select ng-model="selectedTaskCenters" multiple="" id="taskCenterSelect" ng-options="searchResult as searchResult.displayName for searchResult in taskCenterSearchResults | filter:taskCenterFilter" size="8" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2 col-md-1 left-right">
                                <button class="btn btn-default btn-lg" type="button" ng-click="addTaskCenters(selectedTaskCenters)" title="Add" tabindex="0"><i class="icon-right hidden-inline-xs"></i><i class="icon-down visible-inline-xs"></i></button>
                                <button class="btn btn-default btn-lg" type="button" ng-click="removeTaskCenters(selectedTaskCenterAnnouncementIndexes)" title="Remove" tabindex="0"><i class="icon-left hidden-inline-xs"></i><i class="icon-up visible-inline-xs"></i></button>
                            </div>
                            <div class="col-sm-5 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="selectedTaskCenterAnnouncementIndexes">Selected Task Centers</label>
                                    <select ng-model="selectedTaskCenterAnnouncementIndexes" id="selectedTaskCenterAnnouncementIndexes" multiple="" size="8" class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                                        <!-- ngRepeat: task in announcement.taskCenterAnnouncements -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- ngIf: announcement.status == 'A' && announcement.taskAnnouncements.length == 0 && announcement.taskCenterAnnouncements.length == 0 -->
                        <p class="text-danger" ng-if="announcement.status == 'A' &amp;&amp; announcement.taskAnnouncements.length == 0 &amp;&amp; announcement.taskCenterAnnouncements.length == 0">This announcement is not on any Tasks or Task Centers and will not be visible.</p>
                        <!-- end ngIf: announcement.status == 'A' && announcement.taskAnnouncements.length == 0 && announcement.taskCenterAnnouncements.length == 0 -->
                    </fieldset>
                    <button class="btn btn-success" type="button" ng-click="saveAnnouncement()" ng-disabled="announcementForm.$invalid" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                    <a href="#/announcements" ng-hide="pending" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include ('modal/announcement-paycheck-details.php') ?>
<?php include ('modal/SD-1002-settings.php') ?>
<?php include('includes/brand-footer.php') ?><?php include('includes/footer-scripts.php') ?><script type='text/javascript'>

$('#theCheckbox').change(function() {
    $('#setstartdate,#setenddate').attr('disabled', this.checked);
	$('#setstartdate,#setenddate').val("");
});

</script> 
<script type='text/javascript'>//<![CDATA[
$(document).ready(function() {
var targetDate = new Date();
targetDate.setDate(targetDate.getDate() + 30);


function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}



// So you can see the date we have created
//alert(targetDate);
var minutes = addZero(targetDate.getMinutes());
var hour = targetDate.getHours();
var dd = targetDate.getDate();
var mm = targetDate.getMonth() + 1; // 0 is January, so we must add 1
var yyyy = targetDate.getFullYear();

var dateString = mm + "/" + dd + "/" + yyyy + " at " + hour + ":" + minutes;

// So you can see the output
//alert(dateString);
$("#setenddate").val(dateString);
 //document.getElementById('setstartdate').value = Date();
 
var startdate = new Date();
var minutes = addZero(startdate.getMinutes());
var hour = startdate.getHours();
var d = startdate.getDate();
var m =  startdate.getMonth();
m += 1;  // JavaScript months are 0-11
var y = startdate.getFullYear();

$("#setstartdate").val("1/6/2016 at 10:23");

$("#setnow").click(function() {
        $("#setenddate").val(m + "/" + d + "/" + y + " at " + hour + ":" + minutes);
    })	


});//]]> 

</script> 


</body>
</html>
