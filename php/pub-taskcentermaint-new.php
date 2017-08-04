<?php
$section = 'publishing';
$page_title = 'pub-taskcentermaint';
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
	padding-left:5px}

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
                    <div class="primary-content" style="min-height:500px">
                        <section>
                            <div class="row section-head">
                                <div class="col-xs-12 col-sm-9 section-header">
                                    <div class="taskmaint-preview"> <img src="../img/9grid-90x90.png"  alt=""/>
                                        <div class="taskmaint-preview-content">
                                            <h2 class="taskmaint-preview-content-title">New Task Center: (unnamed)</h2>
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
                                    <div class="header-form-section" style="margin-top:0px">
                                        <h3> Task Center Basics</h3>
                                    </div>
                                     <div class="row">
                                <div class="col-md-9">
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="taskcentertitle"> Task Center Title </label>
                                        <span class="help-block small">The Task Center title is how the Task will be referred to throughout the system.</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-control" id="taskcentertitle" name="taskcentertitle" type="text" placeholder="" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="uniquekey">Unique Key</label>
                                        <span class="help-block small">The unique key uniquely identifies this Task Center in its Campuses (if any). This value will be used as part of the URL for this Task Center.</span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-control" id="uniquekey" name="uniquekey" type="text" placeholder="" required="required">
                                            </div>
                                            <div class="col-sm-6" style="padding-top:14px"> <a href="#" class="small" style="font-style: italic;margin-left: -15px;"> Suggest a key</a> </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="contact2">Publisher</label>
                                        <span class="help-block small">Specify the publisher of this task.</span>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <select id="publisherId" class="form-control" required aria-invalid="false">
                                                    <option value="" selected="selected"> Select Publisher </option>
                                                    <option value="duo" label="AA/CTL Webmaster">AA/CTL Webmaster</option>
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
                                                <div class="well well-sm" id="selectpublisher" style="display: block;">
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
                                                                        <li ng-repeat="expression in expression.children" tree="">&nbsp;<span ng-show="$parent.$parent.expression != null" aria-hidden="false">GROUPS : memberOf = BL-VPFA-ONE-PUBLISHER</span></li>
                                                                        <li ng-repeat="expression in expression.children" tree=""> &nbsp;<span ng-show="$parent.$parent.expression != null" aria-hidden="false">GROUPS : memberOf = BL-UHRS-ONE-PUBLISHER</span></li>
                                                                        <li ng-repeat="expression in expression.children" tree=""> &nbsp;<span ng-show="$parent.$parent.expression != null" aria-hidden="false">GROUPS : memberOf = BL-FMOP-ONE-PUBLISHER</span></li>
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
                                    
                                    </div></div>
                                    
                                    
                                     <div class="header-form-section">
                                        <h3> Description</h3>
                                    </div>
                                    
                                         <div class="row">
                                <div class="col-md-9">
                                    
                                    <div class="form-group ">
                                        <label class="control-label " for="description"> Description</label>
                                        <span class="help-block small"> Add a description for this task center. </span>
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
                                    
                                    </div></div>
                                    
                                    
                                     <div class="header-form-section">
                                        <h3> Add Tasks</h3>
                                    </div>
                                    
                                    
                                    
                                         <div class="row">
                                <div class="col-md-9">
                                    
                                    <div class="form-group">
                                        <label class="control-label" for="role">Select Tasks</label>
                                        <div class="row">
                                            <div class="col-sm-6"> <span class="help-block small"> Add tasks to be included with this task center. </span> </div>
                                            <div class="col-sm-6 text-right small">
                                                <div class="dropdown" style="display:inline-block; margin-right:15px" id="select_campus"> <span class=" dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span id="dropdown_title_campuses">All Campuses</span> <span class="caret"></span> </span>
                                                    <ul class="dropdown-menu" aria-labelledby="select_campus">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1"> All Campuses</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IU Bloomington</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IU East</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IU Kokomo</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IU Northwest</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IU South Bend</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IU Southeast</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IUPUC Columbus</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >IUPUI Indianapolis</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown" style="display:inline-block" id="select_role" > <span class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span id="dropdown_title_roles"> All Roles</span> <span class="caret"></span> </span>
                                                    <ul class="dropdown-menu" aria-labelledby="select_role">
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >Student</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >Faculty</a> </li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" >Staff</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-group mainsearch">
                                                    <input type="text" class="form-control typeahead2 tt-query" style="padding-left:5px"autocomplete="off" spellcheck="false" placeholder="Search for tasks" id="thesearchbox">
                                                    <div id="cleartext" style="display:none"> <i class="icon-cancel-squared" ></i></div>
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="icon-search-3"></i></button>
                                                    </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="role">Currently Selected Tasks</label>
                                        <span class="help-block small"> Drag and drop to rearrange order. </span>
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="task-select"> <img src="../img/task-icons-new/icon-change-name.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>Name Change</div>
                                                            <div class="small text-muted">(All Capmuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="task-select"> <img src="../img/task-icons-new/icon-box.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>Box.IU</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="task-select"> <img src="../img/task-icons-new/icon-childcare-fees.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>Child Care fees</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="task-select" > <img src="../img/task-icons-new/icon-iucat.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>IUCAT</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="task-select"> <img src="../img/task-icons-new/icon-emergency-contact.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>Emergency Contacts</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="task-select"> <img src="../img/task-icons-new/SD-015.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>Data Security</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="task-select" >
                                                        <div class="inactive-overlay" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This task (Talk Nerdy to Me) is currently set as inactive, and will not be visible in the task center."> Inactive </div>
                                                        <img src="../img/task-icons-new/icon-guest-accounts.png" alt=""/>
                                                        <div class="task-select-content">
                                                            <div>Guest Accounts</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--    <hr>
                                            <div class="small" style=" margin-bottom:15px"> The following tasks are currently set to Inactive , and will appear in your task center once they are set to Live by the publisher.</div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="task-select" > <img src="../img/task-icons-new/icon-guest-accounts.png" style="opacity:.3" alt=""/>
                                                        <div class="task-select-content" style="opacity:.3">
                                                            <div>TaskTitle</div>
                                                            <div class="small text-muted">(All Campuses)</div>
                                                        </div>
                                                        <div class="delete-task"><i class="icon-cancel-1"></i></div>
                                                    </div>
                                                </div>
                                            </div>--> 
                                        </div>
                                    </div>
                                    
                                    
</div></div>                                    
                                     <div class="header-form-section">
                                        <h3> Audience</h3>
                                    </div>
                                    
                                    
                                         <div class="row">
                                <div class="col-md-9">
                                    
                                    <div class="form-group">
                                        <label class="control-label" for="campus">Campus</label>
                                        <span class="help-block small">Select the campuses with which this task is affiliated with.</span>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="input-group">
                                                    <select class="form-control">
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
                                                <div class="well well-sm" style="width: 366px;"><span class="label label-white"> IU Bloomington <i class="icon-cancel-circled"></i></span> <span class="label label-white"> IU Kokomo <i class="icon-cancel-circled"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="role">Role</label>
                                        <span class="help-block small">Select the roles with which this task is affiliated with.</span>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="input-group">
                                                    <select class="form-control">
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
                                                <div class="well well-sm" style="width: 366px;"><span class="label label-white"> All Roles <i class="icon-cancel-circled"></i></span></div>
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
                                                <div class="well well-sm" style="width: 366px;"><span class="label label-white"> IT Services <i class="icon-cancel-circled"></i></span> <span class="label label-white"> Libraries <i class="icon-cancel-circled"></i></span></div>
                                            </div>
                                        </div>
                                    </div></div></div>
                                    
                                    
                                </div>
                                
                            
                                <div class="col-md-12">
                                      <hr>
                                        <button type="button"  class="btn btn-primary" id="submitapproval" data-toggle="modal" data-target="#modal_publishdate">Submit for Approval...</button>
                                        <button type="button"  class="btn btn-default " id="savedraft">Save as Draft</button>
                                        <a href="pub-taskmaint-home.php"class="btn btn-default" id="cancelbutton">Cancel</a> 
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
