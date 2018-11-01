<?php
$section = 'publishing';
$page_title = 'pub-taskmaint';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include('includes/head-meta.php') ?>
<?php include('includes/styles.php') ?>
<style>
.ng-hide {
	display: none
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
                    <div class="ng-view primary-content" style="">
                        <h2><span ng-show="!isFeatured &amp;&amp; !pending" aria-hidden="false" class="">Internal URL History: </span>This Task Name</h2>
                        <ul class="breadcrumb">
                            <li><a href="#/">Publishing</a></li>
                            <li class="active"><span ng-show="!isFeatured &amp;&amp; !pending" aria-hidden="false" class="">Internal URL History</span></li>
                        </ul>
                        <hr>
                        <p> When creating a task in One.IU, specific URLs are created to manage that task within the One.IU application. 
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            For this task (This Task Name), the following default URLs are currently used. Note that the campus to which this task is affiliated with (IUK) is represented in the URL: </p>
                        <div class="well well-sm">
                            <p><strong>View task details:</strong><br>
                                <a href="https://one.iu.edu/task/iuk/this-task-name" target="_blank">https://one.iu.edu/task/iuk/this-task-name</a></p>
                            <p><strong>Launch task:</strong><br>
                                <a href="https://one.iu.edu/task-launch/iuk/this-task-name" target="_blank">https://one.iu.edu/task/iuk/this-task-name</a></p>
                        </div>
                        <p>When a publisher changes the campus that a task is assigned to, the newly selected campus name will then be reflected in the default URL, and the previously used URLs (containing the previously used campus names) will redirect to use the default URL containing the newly selected campus name reference. </p>
                        <p>If you wish to prevent previously used URLs from redirecting to the current and default URL for this task, please delete them from the following list:</p>
                        <table ng-if="taskListSize > 0" class="table table-hover table-condensed table-actions" style="">
                            <thead>
                                <tr>
                                    <th>Historical URL (redirects to current URL)</th>
                                    <th>Affiliated with</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
                                    <td><span class="label label-default">Task details</span>  <a href="#">https://one.iu.edu/task/iuk/thistaskname</a><br>
                                        <span class="label label-default">Task launch</span>  <a href="#">https://one.iu.edu/task-launch/iuk/thistaskname</a></td>
                                    <td>IU Kokomo</td>
                                    <td><span ng-if="!pending &amp;&amp; !isFeatured"> <span ng-if="!pageData.pendingTaskIds[task.taskId]"> <a ng-href="#/task/11922" ng-show="task.status != 'R'" class="btn btn-primary btn-sm ng-hide" href="#/task/11922" aria-hidden="true">Edit</a> <a ng-href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" class="btn btn-info btn-sm ng-hide" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" aria-hidden="true">Feature</a> <a ng-href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" class="btn btn-success btn-sm ng-hide" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" aria-hidden="true">View Reviews</a>
                                        <button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
                                        <button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remov</button>
                                        </span></span></td>
                                </tr>
                                <tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
                                    <td><span class="label label-default">Task details</span> <a href="#">https://one.iu.edu/task/iue/thistaskname</a><br>
                                        <span class="label label-default">Task launch</span> <a href="#">https://one.iu.edu/task-launch/iue/thistaskname</a></td>
                                    <td>IU East</td>
                                    <td><span ng-if="!pending &amp;&amp; !isFeatured"> <span ng-if="!pageData.pendingTaskIds[task.taskId]"> <a ng-href="#/task/11922" ng-show="task.status != 'R'" class="btn btn-primary btn-sm ng-hide" href="#/task/11922" aria-hidden="true">Edit</a> <a ng-href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" class="btn btn-info btn-sm ng-hide" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" aria-hidden="true">Feature</a> <a ng-href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" class="btn btn-success btn-sm ng-hide" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" aria-hidden="true">View Reviews</a>
                                        <button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
                                        <button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remov</button>
                                    </span></span></td>
                                </tr>
                                <tr ng-repeat="task in tasks" ng-if="!isFeatured || (isFeatured &amp;&amp; task.versionStatus != 'R')">
                                    <td><span class="label label-default">Task details</span> <a href="#">https://one.iu.edu/task/iu/thistaskname</a><br>
                                        <span class="label label-default">Task launch</span> <a href="#">https://one.iu.edu/task-launch/iu/thistaskname</a></td>
                                    <td>All Campuses</td>
                                    <td><span ng-if="!pending &amp;&amp; !isFeatured"> <span ng-if="!pageData.pendingTaskIds[task.taskId]"> <a ng-href="#/task/11922" ng-show="task.status != 'R'" class="btn btn-primary btn-sm ng-hide" href="#/task/11922" aria-hidden="true">Edit</a> <a ng-href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" class="btn btn-info btn-sm ng-hide" ng-show="pageData.admin &amp;&amp; task.versionStatus != 'R' &amp;&amp; task.status != 'R'" href="#/featured?taskUid=20141218T0851381961-test.iu.edu10" aria-hidden="true">Feature</a> <a ng-href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" class="btn btn-success btn-sm ng-hide" ng-hide="!pageData.reviewsEnabled || task.versionStatus == 'R' || task.status == 'R'" href="#/reviews?taskUid=20141218T0851381961-test.iu.edu10&amp;filter=ACTIVE" aria-hidden="true">View Reviews</a>
                                        <button ng-click="confirmDelete(task)" ng-show="pageData.admin" class="btn btn-danger btn-sm" aria-hidden="false">Delete</button>
                                        <button ng-click="confirmRemove(task)" ng-show="task.status != 'R' &amp;&amp; task.versionStatus != 'R'" class="btn btn-warning btn-sm ng-hide" aria-hidden="true">Remov</button>
                                    </span></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="modal fade" id="deleteTaskDialog" tabindex="-1" role="dialog" aria-labelledby="deleteTaskLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h1 class="h4 modal-title" id="deleteTaskLabel">Confirm Task Deletion</h1>
                                    </div>
                                    <div class="modal-body"> Are you sure you want to delete the Task ""? </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-success" ng-click="deleteTask()">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="removeTaskDialog" tabindex="-1" role="dialog" aria-labelledby="removeTaskLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h1 class="h4 modal-title" id="removeTaskLabel">Confirm Task Removal</h1>
                                    </div>
                                    <div class="modal-body"> Are you sure you want to remove the Task ""? </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-success" ng-click="removeTask()">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="taskDetailsDialog" tabindex="-1" role="dialog" aria-labelledby="taskDetailsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h1 class="h4 modal-title" id="taskDetailsLabel">Task Overview</h1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2"> <img ng-if="taskData.task.imageSet == null &amp;&amp; (taskData.task.desktopImage.contentUrl == null || taskData.task.desktopImage.contentUrl.length == 0)" alt=""> </div>
                                            <div class="col-sm-9 col-md-10">
                                                <h2 class="h3" style="margin:0;">&nbsp;<small>&nbsp;</small></h2>
                                                <span class="text-muted"> </span> </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <dl class="dl-horizontal">
                                                    <dt>Task URL</dt>
                                                    <dd style="word-break: break-all;"></dd>
                                                    <dt>Status</dt>
                                                    <dt>Open in new window</dt>
                                                    <dd>No</dd>
                                                    <dt>Publisher</dt>
                                                    <dt>Description</dt>
                                                    <dt>Version Number</dt>
                                                    <dt ng-if="pageData.roles.length > 0" class="" style="">Roles</dt>
                                                    <dd ng-if="pageData.roles.length > 0" class="">&nbsp; </dd>
                                                    <dt>Categories</dt>
                                                    <dt>Stat Recording Type</dt>
                                                </dl>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#desktopImages" data-toggle="tab" eat-click="">Desktop</a></li>
                                            <li><a href="#tabletImages" data-toggle="tab" eat-click="">Tablet</a></li>
                                            <li><a href="#phoneImages" data-toggle="tab" eat-click="">Phone</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="desktopImages">
                                                <div class="well media-scroll">
                                                    <div class="media-scroll-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tabletImages">
                                                <div class="well media-scroll">
                                                    <div class="media-scroll-wrap"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="phoneImages">
                                                <div class="well media-scroll">
                                                    <div class="media-scroll-wrap"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="taskNotesDialog" tabindex="-1" role="dialog" aria-labelledby="taskNotesLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h1 class="h4 modal-title" id="taskNotesLabel">Task Notes Overview</h1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2"> <img ng-if="noteData.task.imageSet == null &amp;&amp; (noteData.task.desktopImage.contentUrl == null || noteData.task.desktopImage.contentUrl.length == 0)" alt=""> </div>
                                            <div class="col-sm-9 col-md-10">
                                                <h2 class="h3" style="margin:0;">&nbsp;<small>&nbsp;</small></h2>
                                                <span class="text-muted"> </span> </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <?php include('modal/pub-task-summary.php') ?>
    <?php include('modal/pub-task-summary-update.php') ?>
    <?php include('modal/pub-task-edit-selectversion.php') ?>
    <?php include('modal/pub-task-edit-deleteactionwarning.php') ?>
    <?php include('modal/pub-task-setnotlivedate.php') ?>
    <?php include('modal/pub-task-scheduleaction.php') ?>
    <?php include('modal/pub-task-setlivedate.php') ?>
    <?php include('modal/pub-task-edit-pendingwarning.php') ?>
    <?php include('modal/pub-task-setpendingreleasedate.php') ?>
    <?php include('modal/pub-task-edit-deletewarning.php') ?>
    <?php include('modal/pub-task-setpublishdate.php') ?>
    <?php include('modal/pub-task-previousschedule.php') ?>
    <?php include('modal/pub-task-viewscheduledaction.php') ?>
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
        $('#showdetails1, #showdetails2,#showdetails3').change(function() {
            if (this.checked)
                $(".taskmeta").show();
            else
                $(".taskmeta").hide();
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("#showdetails1, #showdetails2,#showdetails3").click(function() {
            $(".icon-angle-right").toggleClass("icon-angle-down");
        });
    });
</script> 
    <script type='text/javascript'>
     $(function() {
                $('.picktime').datetimepicker();
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
    <script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
    <script>
    $(document).ready(function() {
        $('.icon-cancel-circled').on("click", function() {
            $(this).parents('span').fadeOut();
        });
		
		$(".apply_filter").click(function(){
    $("#filter_tags .label.label-white").show();
});


      
    });
</script> 
    <script>


$(document).ready(function() {
    $('#table1, #table2').DataTable( {
        "paging":   false,
		"bFilter":   false,
        "info":     false,
    } );
} );


</script> 
</div>
</body>
</html>
