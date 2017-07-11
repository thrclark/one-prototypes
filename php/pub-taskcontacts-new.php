<?php
$section = 'publishing';
$page_title = 'pub-taskcontacts';
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
.task-select {
	background: white;
	margin-bottom: 10px;
	border: 1px solid #ccc;
	position: relative;
}
.task-select img {
	height: 38px;
	width: 38px;
	vertical-align: top;
}
.task-select .delete-task {
	background: red;
	position: absolute;
	top: 0px;
	right: 0px;
	height: 16px;
	width: 16px;
	color: #ffffff;
	cursor: pointer;
}
.task-select .delete-task i {
	position: absolute;
	top: -2px;
}
.task-select .task-select-content {
	display: inline-block;
}
#cleartext i {
	display: none
}
.task-select .inactive-overlay {
	background-color: rgba(138, 138, 138, 0.75);
	position: absolute;
	width: 100%;
	height: 100%;
	font-size: 22px;
	text-align: center;
	padding-top: 2px;
	text-shadow: 0px 1px 2px #000000;
	color: #ffffff;
}
.primary-content .form-group {
	padding-left: 5px
}
</style>
<?php include('includes/scripts.php') ?>
<script>
    $(document).ready(function() {


        $(".getAll").click(function() {
            $("#asdf").text("All Categories");
            $('.typeahead2').attr('placeholder', 'Search All Categories');
        });
        $(".getAcademics").click(function() {
            $("#asdf").text("Academics");
            $('.typeahead2').attr('placeholder', 'Search Academics');
        });
        $(".getAccounts").click(function() {
            $("#asdf").text("Accounts");
            $('.typeahead2').attr('placeholder', 'Search Accounts');
        });
        $(".getAdministrative").click(function() {
            $("#asdf").text("Administrative");
            $('.typeahead2').attr('placeholder', 'Search Administrative');
        });
        $(".getAdmissions").click(function() {
            $("#asdf").text("Admissions");
            $('.typeahead2').attr('placeholder', 'Search Admissions');
        });
        $(".getCampus").click(function() {
            $("#asdf").text("Campus Life");
            $('.typeahead2').attr('placeholder', 'Search Campus Life');
        });
        $(".getCareers").click(function() {
            $("#asdf").text("Careers");
            $('.typeahead2').attr('placeholder', 'Search Careers');
        });
        $(".getEmployee").click(function() {
            $("#asdf").text("Employee Benefits");
            $('.typeahead2').attr('placeholder', 'Search Employee Benefits');
        });
        $(".getEnrollment").click(function() {
            $("#asdf").text("Enrollment");
            $('.typeahead2').attr('placeholder', 'Search Enrollment');
        });
        $(".getFaculty").click(function() {
            $("#asdf").text("Faculty Services");
            $('.typeahead2').attr('placeholder', 'Search Faculty Services');
        });
        $(".getFinances").click(function() {
            $("#asdf").text("Finances");
            $('.typeahead2').attr('placeholder', 'Search Finances');
        });
        $(".getHousing").click(function() {
            $("#asdf").text("Housing & Dining");
            $('.typeahead2').attr('placeholder', 'Search Housing & Dining');
        });
        $(".getIT").click(function() {
            $("#asdf").text("IT Services");
            $('.typeahead2').attr('placeholder', 'Search IT Services');
        });
        $(".getLibraries").click(function() {
            $("#asdf").text("Libraries");
            $('.typeahead2').attr('placeholder', 'Search Libraries');
        });
        $(".getOrientation").click(function() {
            $("#asdf").text("Orientation");
            $('.typeahead2').attr('placeholder', 'Search Orientation');
        });
        $(".getPayroll").click(function() {
            $("#asdf").text("Payroll & Taxes");
            $('.typeahead2').attr('placeholder', 'Search Payroll & Taxes');
        });
        $(".getPersonal").click(function() {
            $("#asdf").text("Personal Information");
            $('.typeahead2').attr('placeholder', 'Search Personal Information');
        });
        $(".getResearch").click(function() {
            $("#asdf").text("Research");
            $('.typeahead2').attr('placeholder', 'Search Research');
        });
        $(".getTraining").click(function() {
            $("#asdf").text("Training");
            $('.typeahead2').attr('placeholder', 'Search Training');
        });
        $(".getTransportation").click(function() {
            $("#asdf").text("Transportation");
			 $('.typeahead2').attr('placeholder', 'Search Transportation');

        });

    });
</script>
<script>
$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
   
    
    //make status editable
    $('#status').editable({
        type: 'select',
        title: 'Select status',
        placement: 'bottom',
        value: 2,
        source: [
            {value: 1, text: 'status 1'},
            {value: 2, text: 'status 2'},
            {value: 3, text: 'status 3'}
        ]
        /*
        //uncomment these lines to send data on server
        ,pk: 1
        ,url: '/post'
        */
    });
	
	 $('#roles').editable({
	placement: 'bottom',
       pk: 1,
       limit: 3,
       source: [
        {value: 1, text: 'Student'},
        {value: 2, text: 'Staff'},
        {value: 3, text: 'Faculty'},
       ]
    }); 
	
	
	$('#campuses').editable({
		placement: 'bottom',
		showbuttons: false,
        source: [
            {value: 1, text: 'All Campuses'},
            {value: 2, text: 'IU Bloomington'},
			{value: 3, text: 'IU East'},
			{value: 4, text: 'IU Kokomo'},
			{value: 5, text: 'IU Northwest'},
			{value: 6, text: 'IU South Bend'},
			{value: 7, text: 'IU Southeast'},
			{value: 8, text: 'IUPUC Columbus'},
			{value: 9, text: 'IUPUI Indianapolis'}

        ]
       
    });    
	
	
	
});

</script>
<script>
    $(document).ready(function() {
        $(".togglebrowse").click(function() {
            $(".browsecat-panel").slideToggle("slow");
			$( ".app-header .well" ).toggleClass( "open" );
        });
        $(".dropdown-toggle").click(function() {
            $(".browsecat-panel").slideUp("slow");
			$( ".app-header .well" ).removeClass( "open" );
        });
        $('#thesearchbox').keydown(function() {
            tmpval = $(this).val();
            if (tmpval == '') {

                $("#cleartext").css({"display": "none"});
            } else {
                $("#cleartext").css({"display": "block"});
            }
        });
        $("#cleartext").click(function() {
            $("#cleartext").hide();
            $("#thesearchbox").val("");
			$("#thesearchbox").focus();
        });
    });
</script>
<script>


$(function() {                       
  $(".clickable").click(function() {  
    $(".clickable").removeClass("active"); 
	$(this).addClass("active");      
  });
});

</script>
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
                    <div class="primary-content" style="min-height:">
                        <section>
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <div class="taskmaint-preview">
                                        <div class="taskmaint-preview-content">
                                            <h2 class="taskmaint-preview-content-title">New Contact</h2>
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
                                <div class="col-md-12">
                                   
                                    <div class="form-group ">
                                        <label class="control-label" for="tasktitle"> Contact Name </label>
                                        <span class="help-block small">Specify the name for this contact (used internally only).</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="" value="" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    
                              <div class="form-group " style="min-height:300px">
                              
                               <label class="control-label" for="tasktitle"> Contact Methods </label>
                                        <span class="help-block small">Add/delete contact methods to this contact.</span>
                                        
                                         
                                    <table class="table table-condensed">
                                        <thead class="">
                                            <tr>
                                                <th>Type</th>
                                                <th>Label<span class="small text-muted"></span></th>
                                                <th class="col-xs-5">Value</th>
                                                <th><span class="sr-only">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="white-space:nowrap"> <select name="methodType" class="form-control input-sm" requireddata-original-title="" title="" aria-invalid="true">
                                                    <option value="" selected="selected">Select Type</option>
                                                    <option label="Phone" value="string:P">Phone</option>
                                                    <option label="Email" value="string:E">Email</option>
                                                    <option label="Url" value="string:U">Url</option>
                                                </select></td>
                                                <td class=""> <input class="form-control input-sm" id="tasktitle" name="tasktitle" type="text" placeholder="" required="required"></td>
                                                <td class=""> <input class="form-control input-sm" id="tasktitle" name="tasktitle" type="text" placeholder="e.g. phone number, URl, or email address" required="required"></td>
                                                <td class="" style="padding-top: 8px;"><a href="#" class="btn btn-xs btn-default">Add</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        </div>
                                 
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                  
                                 
                                    <a href="pub-taskcontacts-home.php" class="btn btn-primary" id="">Save</a>   <a href="pub-taskcontacts-home.php" class="btn btn-default" id="">Cancel</a></div>
                                <!--
                            </div--> 
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
    <script type='text/javascript'>
    //<![CDATA[
    $(window).load(function() {
        $('.dropdown-toggle').dropdown();


        $('#select_campus li').on('click', function() {
            $('#dropdown_title_campuses').html($(this).find('a').html());
        });
		
		 $('#select_role li').on('click', function() {
            $('#dropdown_title_roles').html($(this).find('a').html());
        });
		
		
    }); //]]>
</script> 
</div>
</body>
</html>
