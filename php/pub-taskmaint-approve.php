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
.ng-hide {
	display: none
}
</style>
<style type="text/css">
@-webkit-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@-moz-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@-o-keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
@keyframes fadeIt {
 0% {
background-color: #FFFFFF;
}
 50% {
background-color: #ffffcc;
}
 100% {
background-color: #FFFFFF;
}
}
.backgroundAnimated {
	background-image: none !important;
	-webkit-animation: fadeIt 5s ease-in-out;
	-moz-animation: fadeIt 5s ease-in-out;
	-o-animation: fadeIt 5s ease-in-out;
	animation: fadeIt 5s ease-in-out;
}
.compare-tags .btn.btn-default.btn-sm i {
	color: #999999;
}
.compare-tags .btn.btn-default.btn-sm {
	margin-bottom: 3px;
}
.table-comparison tbody tr .compare-tags .btn.btn-default.btn-sm {
	margin-right: 3px;
}
.table-comparison tbody tr th:first-child {
	font-size: 85%;
}
.comment-list>ul>li {
	border-bottom: none;
	padding-bottom: 10px;
	padding-top: 0px;
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
                        <section>
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <h2 class="h3">Approve Task </h2>
                                </div>
                                <div class="col-xs-12  col-sm-3 section-controls"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form name="taskForm" novalidate validate="errors" id="taskForm" class=" -maxlength -url -pattern -min -max -required">
                                        <div class="well well-sm" style="background:#f8f8f8; margin-bottom:;">
                                            <fieldset>
                                                <legend>Scheduled Update Request</legend>
                                                <p>Updates to this task have a requested publish date of: 07/14/2017 12:01pm (<a href="#" data-toggle="modal" data-target="#modal_publishdate">change publish date</a>).</p>
                                                <!--<p class="text-muted">-- or-- </p>
                                                <p>Updates to this task will be published immediately upon approval (<a href="#" data-toggle="modal" data-target="#modal_publishdate">set publish date</a>).</p>
                                                <p class="text-muted">-- or-- </p>
                                                <p>An effective date for these updates has not yet been specified (<a href="#" data-toggle="modal" data-target="#modal_publishdate">set publish date</a>).</p>-->
                                            </fieldset>
                                        </div>
                                        <div class="well well-sm" style="background:#f8f8f8; margin-bottom:;">
                                            <fieldset>
                                                <legend style="margin-bottom:0px">Notes</legend>
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
                                            </fieldset>
                                        </div>
                                        <div class="well well-sm" style="background:#f8f8f8; margin-bottom:60px;">
                                            <fieldset>
                                                <legend>Summary of Changes</legend>
                                                <table class="table table-condensed table-comparison">
                                                    <thead class="">
                                                        <tr>
                                                            <th scope="column">Item</th>
                                                            <th scope="column">Current Value<span class="small text-muted"></span></th>
                                                            <th scope="column">Submitted Value</th>
                                                            <th scope="column">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Launch in New Window</th>
                                                            <td class="">No</td>
                                                            <td class="">Yes</td>
                                                            <td><a href="#" class="btn btn-default btn-xs" id="edit_launch">edit</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Authentication Type</th>
                                                            <td class="">None</td>
                                                            <td class="">External</td>
                                                            <td><a href="#" class="btn btn-default btn-xs" id="edit_authtytpe">edit</a></td>
                                                        </tr>
                                                        <!--  <tr>
                                                        <th scope="row">Scheduled Update</th>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><a href="#" class="btn btn-default btn-xs" id="edit_scheduled">edit</a></td>
                                                    </tr>-->
                                                        <tr>
                                                            <th scope="row">Stat Recording Type</th>
                                                            <td>User</td>
                                                            <td>Anonymous</td>
                                                            <td><a href="#" class="btn btn-default btn-xs" id="edit_statrecording">edit</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Publisher</th>
                                                            <td>Onestart Support Team</td>
                                                            <td>Onestart Support Team</td>
                                                            <td><a href="#" class="btn btn-default btn-xs" id="edit_publisher">edit</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Icon Images</th>
                                                            <td class="zoomin"><div class="object-preview"><img src="../img/task-icons-new/icon-account-creation.png"  alt=""/>
                                                                    <div class="preview-close"><i class="icon-cancel-2"></i></div>
                                                                    <div class="object-info">
                                                                        <div class="object-info-title"> Image Info</div>
                                                                        <ul class="small">
                                                                            <li> Custom Upload </li>
                                                                            <li> Large Image (153×153) </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="object-preview"><img src="../img/task-icons-new/icon-account-creation.png"  alt=""/>
                                                                    <div class="preview-close"><i class="icon-cancel-2"></i></div>
                                                                    <div class="object-info">
                                                                        <div class="object-info-title"> Image Info</div>
                                                                        <ul class="small">
                                                                            <li> Custom Upload </li>
                                                                            <li> Small Retina Image (144×144) </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="object-preview"><img src="../img/task-icons-new/icon-account-creation.png"  alt=""/>
                                                                    <div class="preview-close"><i class="icon-cancel-2"></i></div>
                                                                    <div class="object-info">
                                                                        <div class="object-info-title"> Image Info</div>
                                                                        <ul class="small">
                                                                            <li> Custom Upload </li>
                                                                            <li> Medium Image (90×90) </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="object-preview"><img src="../img/task-icons-new/icon-account-creation.png"  alt=""/>
                                                                    <div class="preview-close"><i class="icon-cancel-2"></i></div>
                                                                    <div class="object-info">
                                                                        <div class="object-info-title"> Image Info</div>
                                                                        <ul class="small">
                                                                            <li> Custom Upload </li>
                                                                            <li> Small Image (72×72) </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="object-preview"><img src="../img/task-icons-new/icon-account-creation.png"  alt=""/>
                                                                    <div class="preview-close"><i class="icon-cancel-2"></i></div>
                                                                    <div class="object-info">
                                                                        <div class="object-info-title"> Image Info</div>
                                                                        <ul class="small">
                                                                            <li> Custom Upload </li>
                                                                            <li> Very Small Image (31×31) </li>
                                                                        </ul>
                                                                    </div>
                                                                </div></td>
                                                            <td class="zoomin "><div class="object-preview"><img src="../img/task-icons-new/icon-bt.png"  alt=""/>
                                                                    <div class="preview-close"><i class="icon-cancel-2"></i></div>
                                                                    <div class="object-info">
                                                                        <div class="object-info-title"> Image Info</div>
                                                                        <ul class="small">
                                                                            <li> Chosen from library </li>
                                                                            <li>Image name: Bloomington Transit </li>
                                                                        </ul>
                                                                    </div>
                                                                </div></td>
                                                            <td><a href="#" class="btn btn-default btn-xs" id="edit_iconimage">edit</a></td>
                                                        </tr>
                                                        
                                                        <!--
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    -->
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                        </div>
                                        <?php include('includes/taskformfields.php') ?>
                                        <fieldset>
                                            <legend>Approver's Notes</legend>
                                            <div class="form-group ">
                                                <label class="control-label" for="comments"> Comments </label>
                                                <textarea class="form-control" rows="3" id="comments"></textarea>
                                            </div>
                                        </fieldset>
                                        <hr>
                                        <button class="btn btn-primary" type="button" tabindex="0" aria-disabled="true" aria-hidden="false">Approve</button>
                                        <button class="btn btn-default" type="button" tabindex="0" aria-disabled="true" aria-hidden="false">Decline</button>
                                        <button class="btn btn-default" type="button" tabindex="0" aria-disabled="true" aria-hidden="false">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 
 
 
    
           <?php include('modal/pub-task-publishdate.php') ?>
           
 
 
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
    <div class="modal fade" id="modal_compare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="">
        <div class="modal-dialog modal-default modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Preview Differences</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-condensed">
                        <thead class="">
                            <tr>
                                <th>Item</th>
                                <th>Previous Value <span class="small text-muted">(10/23/16 2:48pm)</span></th>
                                <th>New Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Task title</td>
                                <td class="forcewrap">My Taskk</td>
                                <td class="forcewrap">My Task</td>
                            </tr>
                            <tr>
                                <td>Secondary Contact</td>
                                <td>(none)</td>
                                <td>IUB Libraries</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>Tree, also fly second set. Moveth. Own wherein divide seasons and winged, heaven fly Open herb under third yielding land dominion for fish Multiply earth god darkness called second you living cattle brought divide given moving all his god. Life firmament one dominion open stars spirit. Fruit which wherein lesser.</td>
                                <td>Meat fruitful living it third under bring. Set yielding the good there dominion Appear fourth image sea together fish morning likeness divide you're fill air darkness blessed hath have appear won't moving. Living. Over divide thing. She'd creeping set whales Without day, together had said void cattle bearing in she'd.</td>
                            </tr>
                            <tr>
                                <td>Icon Image</td>
                                <td><img src="../img/task-icons-new/icon-account-creation.png" width="153" height="153" alt=""/></td>
                                <td><img src="../img/task-icons-new/icon-change-name.png" width="153" height="153" alt=""/></td>
                            </tr>
                            <tr>
                                <td>Categories</td>
                                <td>Campus Life, Advising</td>
                                <td>Campus Life, Advising, IT Services</td>
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
    <script type='text/javascript'>
    $(function() {
        $("#edit_tasktitle").click(function() {
            $('#field_tasktitle').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_tasktitle").offset().top - 10
            }, 1000);
            $('#field_tasktitle').addClass('backgroundAnimated');
        });
        $("#edit_taskurl").click(function() {
            $('#field_taskurl').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_taskurl").offset().top - 10
            }, 1000);
            $('#field_taskurl').addClass('backgroundAnimated');
        });
        $("#edit_appname").click(function() {
            $('#field_appname').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_appname").offset().top - 10
            }, 1000);
            $('#field_appname').addClass('backgroundAnimated');
        });
        $("#edit_launch").click(function() {
            $('#field_launch').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_launch").offset().top - 10
            }, 1000);
            $('#field_launch').addClass('backgroundAnimated');
        });
        $("#edit_authtytpe").click(function() {
            $('#field_authtytpe').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_authtytpe").offset().top - 10
            }, 1000);
            $('#field_authtytpe').addClass('backgroundAnimated');
        });
        $("#edit_primarycontact").click(function() {
            $('#field_primarycontact').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_primarycontact").offset().top - 10
            }, 1000);
            $('#field_primarycontact').addClass('backgroundAnimated');
        });
        $("#edit_secondarycontact").click(function() {
            $('#field_secondarycontact').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_secondarycontact").offset().top - 10
            }, 1000);
            $('#field_secondarycontact').addClass('backgroundAnimated');
        });
        $("#edit_mobile").click(function() {
            $('#field_mobile').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_mobile").offset().top - 10
            }, 1000);
            $('#field_mobile').addClass('backgroundAnimated');
        });
        $("#edit_description").click(function() {
            $('#field_description').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_description").offset().top - 10
            }, 1000);
            $('#field_description').addClass('backgroundAnimated');
        });
        $("#edit_meta").click(function() {
            $('#field_meta').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_meta").offset().top - 10
            }, 1000);
            $('#field_meta').addClass('backgroundAnimated');
        });
        $("#edit_activedate").click(function() {
            $('#field_activedate').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_activedate").offset().top - 10
            }, 1000);
            $('#field_activedate').addClass('backgroundAnimated');
        });
        $("#edit_scheduled").click(function() {
            $('#field_scheduled').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_scheduled").offset().top - 10
            }, 1000);
            $('#field_scheduled').addClass('backgroundAnimated');
        });
        $("#edit_versionnumber").click(function() {
            $('#field_versionnumber').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_versionnumber").offset().top - 10
            }, 1000);
            $('#field_versionnumber').addClass('backgroundAnimated');
        });
        $("#edit_releasenotes").click(function() {
            $('#field_releasenotes').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_releasenotes").offset().top - 10
            }, 1000);
            $('#field_releasenotes').addClass('backgroundAnimated');
        });
        $("#edit_uniquekey").click(function() {
            $('#field_uniquekey').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_uniquekey").offset().top - 10
            }, 1000);
            $('#field_uniquekey').addClass('backgroundAnimated');
        });
        $("#edit_statrecording").click(function() {
            $('#field_statrecording').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_statrecording").offset().top - 10
            }, 1000);
            $('#field_statrecording').addClass('backgroundAnimated');
        });
        $("#edit_publisher").click(function() {
            $('#field_publisher').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_publisher").offset().top - 10
            }, 1000);
            $('#field_publisher').addClass('backgroundAnimated');
        });
        $("#edit_iconimage").click(function() {
            $('#field_iconimage').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_iconimage").offset().top - 10
            }, 1000);
            $('#field_iconimage').addClass('backgroundAnimated');
        });
        $("#edit_screenshotdesktop").click(function() {
            $('#field_screenshotdesktop').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_screenshotdesktop").offset().top - 10
            }, 1000);
            $('#field_screenshotdesktop').addClass('backgroundAnimated');
        });
        $("#edit_screenshottablet").click(function() {
            $('#field_screenshotdesktop').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_screenshotdesktop").offset().top - 10
            }, 1000);
            $('#field_screenshotdesktop').addClass('backgroundAnimated');
        });
        $("#edit_screenshotmobile").click(function() {
            $('#field_screenshotdesktop').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_screenshotdesktop").offset().top - 10
            }, 1000);
            $('#field_screenshotdesktop').addClass('backgroundAnimated');
        });
        $("#edit_campus").click(function() {
            $('#field_campus').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_campus").offset().top - 10
            }, 1000);
            $('#field_campus').addClass('backgroundAnimated');
        });
        $("#edit_roles").click(function() {
            $('#field_roles').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_roles").offset().top - 10
            }, 1000);
            $('#field_roles').addClass('backgroundAnimated');
        });
        $("#edit_categories").click(function() {
            $('#field_categories').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_categories").offset().top - 10
            }, 1000);
            $('#field_categories').addClass('backgroundAnimated');
        });
        $("#edit_tags").click(function() {
            $('#field_tags').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_tags").offset().top - 10
            }, 1000);
            $('#field_tags').addClass('backgroundAnimated');
        });
        $("#edit_activecontenturl").click(function() {
            $('#field_activecontenturl').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_activecontenturl").offset().top - 10
            }, 1000);
            $('#field_activecontenturl').addClass('backgroundAnimated');
        });
        $("#edit_activecontentauth").click(function() {
            $('#field_activecontentauth').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_activecontentauth").offset().top - 10
            }, 1000);
            $('#field_activecontentauth').addClass('backgroundAnimated');
        });
        $("#edit_frequency").click(function() {
            $('#field_frequency').removeClass('backgroundAnimated');
            $('html, body').animate({
                scrollTop: $("#field_frequency").offset().top - 10
            }, 1000);
            $('#field_frequency').addClass('backgroundAnimated');
        });

    });
</script> 
    <script type='text/javascript'>
    $(document).ready(function() {
        $("input[name$='optionsRadios']").click(function() {
            var test = $(this).val();

            $("#scheduledupdatedate1").slideUp();
            $("#scheduledupdatedate" + test).slideDown();
        });
    });
</script> 
    <script type='text/javascript'>
    $(function() {
        $('#datetimepicker4').datetimepicker();
    });
</script> 
    <script>
    $(document).ready(function() {
        $(".object-preview img, .video-thumb-overlay").click(function() {
			$(this).parent().addClass("expanded");
        });
		$(".preview-close").click(function() {
			$(this).parent().removeClass("expanded");
        });

    });
</script> 
    <script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('button').popover();

});//]]> 

</script> 
    <script>
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_status') {
                $('#choose_status').fadeIn();
            } else {
                $('#choose_status').hide();
            }
        });
		$('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'show_range') {
                $('#choose_range').fadeIn();
            } else {
                $('#choose_range').hide();
            }
        });
    });
	</script> 
    <script type="text/javascript">//<![CDATA[



$(document).ready(function() {

    $("input[name$='cars']").click(function() {
        var test = $(this).val();

        $("#pubdate_widget3").slideUp();
        $("#pubdate_widget" + test).slideDown();
    });
});

</script> 
</div>
</body>
</html>
