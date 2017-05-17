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
.primary-content .tab-content .section-head .section-controls .btn {
	margin-top: 10px;
}
.tab-content .tab-pane {
	padding-top: 15px;
	border-bottom: none;
}
.tab-content {
	border-left: none;
	border-right: none;
}
.dropdown.dropdown-lg .dropdown-menu {
	margin-top: -35px;
	padding: 20px;
}
.input-group-btn .btn-group {
	display: flex !important;
}
.btn-group .btn {
	border-radius: 0;
	margin-left: -1px;
}
.btn-group .btn:last-child {
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
}
.btn-group .form-horizontal .btn[type="submit"] {
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}
.form-horizontal .form-group {
	margin-left: 0;
	margin-right: 0;
}
.form-group .form-control:last-child {
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}

@media screen and (min-width: 768px) {
#adv-search {
 width:;
	margin: 0 auto;
}
.dropdown.dropdown-lg {
	position: static !important;
}
.dropdown.dropdown-lg .dropdown-menu {
	max-width: 434px;
}
.dropdown.dropdown-lg .dropdown-menu {
	margin-top: -56px;
	padding: 20px;
	left: 14px;
}
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
                        <div class="row section-head">
                            <div class="col-xs-12 col-sm-9 section-header">
                                <h2 class="h3">Maintain Tasks</h2>
                            </div>
                            <div class="col-xs-12  col-sm-3 section-controls"><a href="pub-taskmaint-edit.php" class="btn btn-xs btn-default pull-right"><i class="icon-plus-2"></i>New Task</a> </div>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tasks_all" aria-controls="tasks_live" role="tab" data-toggle="tab">Live Tasks</a></li>
                            <li role="presentation"><a href="#tasks_idle" aria-controls="tasks_idle" role="tab" data-toggle="tab">Idle Tasks</a></li>
                            <li role="presentation"><a href="#tasks_submitted" aria-controls="tasks_submitted" role="tab" data-toggle="tab">Submitted Tasks</a></li>
                            <li role="presentation"><a href="#tasks_featured" aria-controls="tasks_featured" role="tab" data-toggle="tab">Featured Tasks</a></li>
                            <li role="presentation"><a href="#tasks_deleted" aria-controls="tasks_deleted" role="tab" data-toggle="tab">Deleted Tasks</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tasks_all" style=" display: block;">
                                <section>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3 class="h4">Live Tasks</h3>
                                        </div>
                                    
                                    </div>
                                
                                    
                             <div class="well well-sm">       
                                 <div class="row"> 
                                 
                                 <div class="col-sm-6">  <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="showdetails1">
                                            Detail View</label>
                                    </div></div>
                                 
                                       <div class="col-sm-6 ">
                                            <div class="input-group" id="adv-search">
                                                <input type="text" class="form-control input-sm" placeholder="Filter List" />
                                                <div class="input-group-btn">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default btn-sm ">Apply Filter</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-lg" style="margin-top:5px"> <a href="#" class="small pull-right" data-toggle="dropdown" aria-expanded="false">Advanced</a>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <form class="form-horizontal" role="form">
                                                    
                                                    
                                                  <p> <strong>Filter List</strong>  </p>
                                                    
                                                        <div class="form-group">
                                                            <label for="publishers">By Keyword</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="publishers">By Publisher</label>
                                                            <select name="publisher" id="publisher"class="form-control " tabindex="0" aria-invalid="false">
                                                                <option value="" selected="selected"></option>
                                                                <option value="0" label="AA/CTL Webmaster">AA/CTL Webmaster</option>
                                                                <option value="1" label="ABITC">ABITC</option>
                                                                <option value="2" label="Access Management Team / IMS">Access Management Team / IMS</option>
                                                                <option value="3" label="Admissions - IUK">Admissions - IUK</option>
                                                                <option value="4" label="Admitted JD Law Students">Admitted JD Law Students</option>
                                                                <option value="5" label="Advance College Project (ACP)">Advance College Project (ACP)</option>
                                                                <option value="6" label="AIT">AIT</option>
                                                                <option value="7" label="Appear">Appear</option>
                                                                <option value="8" label="ASQA - EIG">ASQA - EIG</option>
                                                                <option value="9" label="ASQA - Testing Tools">ASQA - Testing Tools</option>
                                                                <option value="10" label="Athletics">Athletics</option>
                                                                <option value="11" label="Auxiliary IT">Auxiliary IT</option>
                                                                <option value="12" label="BCP">BCP</option>
                                                                <option value="13" label="Bepko">Bepko</option>
                                                                <option value="14" label="BL-SPEA (SPEA IT)">BL-SPEA (SPEA IT)</option>
                                                                <option value="15" label="Bursar - Bloomington">Bursar - Bloomington</option>
                                                                <option value="16" label="CAITS">CAITS</option>
                                                                <option value="17" label="CANC">CANC</option>
                                                                <option value="18" label="Capital Planning and Facilities">Capital Planning and Facilities</option>
                                                                <option value="19" label="Career and Accessibility Services">Career and Accessibility Services</option>
                                                                <option value="20" label="Career Services Office - South Bend">Career Services Office - South Bend</option>
                                                                <option value="21" label="Classroom Technology Services">Classroom Technology Services</option>
                                                                <option value="22" label="Cloud Technologies">Cloud Technologies</option>
                                                                <option value="23" label="Compliance Office">Compliance Office</option>
                                                                <option value="24" label="CRM">CRM</option>
                                                                <option value="25" label="CTSI">CTSI</option>
                                                                <option value="26" label="Data Center Operations">Data Center Operations</option>
                                                                <option value="27" label="DEMA">DEMA</option>
                                                                <option value="28" label="Department of Emergency Medicine">Department of Emergency Medicine</option>
                                                                <option value="29" label="Department of OB/GYN">Department of OB/GYN</option>
                                                                <option value="30" label="Division of Student Affairs">Division of Student Affairs</option>
                                                                <option value="31" label="Division of Undergraduate Education Technology Services">Division of Undergraduate Education Technology Services</option>
                                                                <option value="32" label="Educational Partnerships and Student Success">Educational Partnerships and Student Success</option>
                                                                <option value="33" label="EIG">EIG</option>
                                                                <option value="34" label="Emergency Management &amp; Continuity">Emergency Management &amp; Continuity</option>
                                                                <option value="35" label="Engagement">Engagement</option>
                                                                <option value="36" label="Enrollments/Student Services">Enrollments/Student Services</option>
                                                                <option value="37" label="Enterprise Document Management">Enterprise Document Management</option>
                                                                <option value="38" label="ESS">ESS</option>
                                                                <option value="39" label="etrain">etrain</option>
                                                                <option value="40" label="Financial Management Services (FMS)">Financial Management Services (FMS)</option>
                                                                <option value="41" label="First year Seminar - IUPUC">First year Seminar - IUPUC</option>
                                                                <option value="42" label="Functional Contact – Support Center">Functional Contact – Support Center</option>
                                                                <option value="43" label="Healthy IU">Healthy IU</option>
                                                                <option value="44" label="Housing and Residence Life - IUPUI">Housing and Residence Life - IUPUI</option>
                                                                <option value="45" label="HRMS">HRMS</option>
                                                                <option value="46" label="HRMS - Technical">HRMS - Technical</option>
                                                                <option value="47" label="Human Resources and Payroll - Kokomo">Human Resources and Payroll - Kokomo</option>
                                                                <option value="48" label="IN-TEST">IN-TEST</option>
                                                                <option value="49" label="Indiana University Cinema">Indiana University Cinema</option>
                                                                <option value="50" label="Indiana University School of Dentistry">Indiana University School of Dentistry</option>
                                                                <option value="51" label="Indiana University School of Medicine (IUSM)">Indiana University School of Medicine (IUSM)</option>
                                                                <option value="52" label="INLOCCA">INLOCCA</option>
                                                                <option value="53" label="Internal Audit Group">Internal Audit Group</option>
                                                                <option value="54" label="IT Community Partners">IT Community Partners</option>
                                                                <option value="55" label="IT Services">IT Services</option>
                                                                <option value="56" label="IT Southeast Campus">IT Southeast Campus</option>
                                                                <option value="57" label="IT Statewide Conference">IT Statewide Conference</option>
                                                                <option value="58" label="IT Training - Bloomington">IT Training - Bloomington</option>
                                                                <option value="59" label="IT Training - Kokomo">IT Training - Kokomo</option>
                                                                <option value="60" label="IU Alumni Association">IU Alumni Association</option>
                                                                <option value="61" label="IU Communications">IU Communications</option>
                                                                <option value="62" label="IU Contact Center">IU Contact Center</option>
                                                                <option value="63" label="IU East Career Services">IU East Career Services</option>
                                                                <option value="64" label="IU Foundation">IU Foundation</option>
                                                                <option value="65" label="IU Southeast Career Development Center">IU Southeast Career Development Center</option>
                                                                <option value="66" label="IUEP EXECRES System Administrators">IUEP EXECRES System Administrators</option>
                                                                <option value="67" label="IUESCC">IUESCC</option>
                                                                <option value="68" label="IUPUI Campus Career and Advising Services">IUPUI Campus Career and Advising Services</option>
                                                                <option value="69" label="IUPUI Finance and Administration">IUPUI Finance and Administration</option>
                                                                <option value="70" label="IUPUI Finance and Administration Office of Technology Services">IUPUI Finance and Administration Office of Technology Services</option>
                                                                <option value="71" label="IUPUI Human Resources">IUPUI Human Resources</option>
                                                                <option value="72" label="IUPUI Testing Center">IUPUI Testing Center</option>
                                                                <option value="73" label="Kelley School - Help Desk">Kelley School - Help Desk</option>
                                                                <option value="74" label="KelleyOnlineDegrees">KelleyOnlineDegrees</option>
                                                                <option value="75" label="Kelly School of Business">Kelly School of Business</option>
                                                                <option value="76" label="KFS">KFS</option>
                                                                <option value="77" label="KOWeb">KOWeb</option>
                                                                <option value="78" label="Kuali Rice (ESI)">Kuali Rice (ESI)</option>
                                                                <option value="79" label="Libraries - Bloomington">Libraries - Bloomington</option>
                                                                <option value="80" label="Libraries - East">Libraries - East</option>
                                                                <option value="81" label="Libraries - IUPUC">Libraries - IUPUC</option>
                                                                <option value="82" label="Libraries - IUPUI">Libraries - IUPUI</option>
                                                                <option value="83" label="Libraries - Kokomo">Libraries - Kokomo</option>
                                                                <option value="84" label="Libraries - Northwest">Libraries - Northwest</option>
                                                                <option value="85" label="Libraries - SouthBend">Libraries - SouthBend</option>
                                                                <option value="86" label="Libraries - Southeast">Libraries - Southeast</option>
                                                                <option value="87" label="Mathematical Science IUPUI">Mathematical Science IUPUI</option>
                                                                <option value="88" label="MDEP">MDEP</option>
                                                                <option value="89" label="MoneySmarts">MoneySmarts</option>
                                                                <option value="90" label="Multicultural Center - IUPUI">Multicultural Center - IUPUI</option>
                                                                <option value="91" label="Oasis">Oasis</option>
                                                                <option value="92" label="Office of Admissions - IUSB">Office of Admissions - IUSB</option>
                                                                <option value="93" label="Office of Overseas Study">Office of Overseas Study</option>
                                                                <option value="94" label="Office of Student Employment">Office of Student Employment</option>
                                                                <option value="95" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                                <option value="96" label="Office of the Registrar - IU East">Office of the Registrar - IU East</option>
                                                                <option value="97" label="Office of the Registrar - IU Southeast">Office of the Registrar - IU Southeast</option>
                                                                <option value="98" label="Office of the Registrar - IUPUC">Office of the Registrar - IUPUC</option>
                                                                <option value="99" label="Office of the Registrar - IUPUI">Office of the Registrar - IUPUI</option>
                                                                <option value="100" label="Office of the Registrar - Kokomo">Office of the Registrar - Kokomo</option>
                                                                <option value="101" label="Office of the Registrar - Northwest">Office of the Registrar - Northwest</option>
                                                                <option value="102" label="Office of the Registrar - South Bend">Office of the Registrar - South Bend</option>
                                                                <option value="103" label="OMS Southeast">OMS Southeast</option>
                                                                <option value="104" label="Oncourse">Oncourse</option>
                                                                <option value="105" label="One.IU Support Team">One.IU Support Team</option>
                                                                <option value="106" label="Orientation - Bloomington">Orientation - Bloomington</option>
                                                                <option value="107" label="Orientation - East">Orientation - East</option>
                                                                <option value="108" label="Orientation - IUPUC">Orientation - IUPUC</option>
                                                                <option value="109" label="Orientation - IUPUI">Orientation - IUPUI</option>
                                                                <option value="110" label="Orientation - Northwest">Orientation - Northwest</option>
                                                                <option value="111" label="Orientation - Southeast">Orientation - Southeast</option>
                                                                <option value="112" label="Orientation and Academic Advising - Kokomo">Orientation and Academic Advising - Kokomo</option>
                                                                <option value="113" label="OVPIA">OVPIA</option>
                                                                <option value="114" label="OVPUE">OVPUE</option>
                                                                <option value="115" label="Parking">Parking</option>
                                                                <option value="116" label="Payroll &amp; Time">Payroll &amp; Time</option>
                                                                <option value="117" label="Policy Coordinator">Policy Coordinator</option>
                                                                <option value="118" label="Principal Online Services">Principal Online Services</option>
                                                                <option value="119" label="PROVEVP">PROVEVP</option>
                                                                <option value="120" label="PSIA">PSIA</option>
                                                                <option value="121" label="PTI Research Services">PTI Research Services</option>
                                                                <option value="122" label="RASD">RASD</option>
                                                                <option value="123" label="RASD - Compliance">RASD - Compliance</option>
                                                                <option value="124" label="RASD - Grants">RASD - Grants</option>
                                                                <option value="125" label="RASD - Grants/Compliance">RASD - Grants/Compliance</option>
                                                                <option value="126" label="RASD - OVCR">RASD - OVCR</option>
                                                                <option value="127" label="RASD - OVPR">RASD - OVPR</option>
                                                                <option value="128" label="RASD - OVPR/VPR">RASD - OVPR/VPR</option>
                                                                <option value="129" label="RASD - VPR">RASD - VPR</option>
                                                                <option value="130" label="ROAR  - Registry of Options and Resources">ROAR  - Registry of Options and Resources</option>
                                                                <option value="131" label="RPAS">RPAS</option>
                                                                <option value="132" label="RPS Application Administration">RPS Application Administration</option>
                                                                <option value="133" label="Ruth Lilly Medical Library">Ruth Lilly Medical Library</option>
                                                                <option value="134" label="School of Nursing">School of Nursing</option>
                                                                <option value="135" label="School of Optometry">School of Optometry</option>
                                                                <option value="136" label="School of Public and Environmental Affairs (SPEA)">School of Public and Environmental Affairs (SPEA)</option>
                                                                <option value="137" label="School of Public Health – Bloomington IT Services (SPHBITS)">School of Public Health – Bloomington IT Services (SPHBITS)</option>
                                                                <option value="138" label="Schools of Education - IUPUI">Schools of Education - IUPUI</option>
                                                                <option value="139" label="SCMC">SCMC</option>
                                                                <option value="140" label="SIS">SIS</option>
                                                                <option value="141" label="SOIC: School of Informatics and Computing">SOIC: School of Informatics and Computing</option>
                                                                <option value="142" label="STC">STC</option>
                                                                <option value="143" label="Storage and Virtualization">Storage and Virtualization</option>
                                                                <option value="144" label="Student Academic Systems">Student Academic Systems</option>
                                                                <option value="145" label="Student Central on Union">Student Central on Union</option>
                                                                <option value="146" label="Student Development Center">Student Development Center</option>
                                                                <option value="147" label="Student Organization Accounts">Student Organization Accounts</option>
                                                                <option value="148" label="Student Outreach">Student Outreach</option>
                                                                <option value="149" label="Student Support - South Bend">Student Support - South Bend</option>
                                                                <option value="150" label="Support Center">Support Center</option>
                                                                <option value="151" label="Support Center Tool">Support Center Tool</option>
                                                                <option value="152" label="Training: SIS">Training: SIS</option>
                                                                <option value="153" label="UCard">UCard</option>
                                                                <option value="154" label="UHRS">UHRS</option>
                                                                <option value="155" label="UIPO">UIPO</option>
                                                                <option value="156" label="UIRR">UIRR</option>
                                                                <option value="157" label="UITS - CCI">UITS - CCI</option>
                                                                <option value="158" label="UITS - Collaboration Technologies">UITS - Collaboration Technologies</option>
                                                                <option value="159" label="UITS - eLearning Design &amp; Services">UITS - eLearning Design &amp; Services</option>
                                                                <option value="160" label="UITS - Finance Office">UITS - Finance Office</option>
                                                                <option value="161" label="UITS - Internal Resources">UITS - Internal Resources</option>
                                                                <option value="162" label="UITS - IU eTexts">UITS - IU eTexts</option>
                                                                <option value="163" label="UITS - IUIE">UITS - IUIE</option>
                                                                <option value="164" label="UITS - Leveraged Services">UITS - Leveraged Services</option>
                                                                <option value="165" label="UITS - Northwest">UITS - Northwest</option>
                                                                <option value="166" label="UITS - South Bend">UITS - South Bend</option>
                                                                <option value="167" label="UITS Campus Networks">UITS Campus Networks</option>
                                                                <option value="168" label="University College">University College</option>
                                                                <option value="169" label="University Division">University Division</option>
                                                                <option value="170" label="University Graduate School - Bloomington">University Graduate School - Bloomington</option>
                                                                <option value="171" label="University Graduate School - IUPUI">University Graduate School - IUPUI</option>
                                                                <option value="172" label="USSS">USSS</option>
                                                                <option value="173" label="VPFA">VPFA</option>
                                                                <option value="174" label="Writing Tutorial Service (WTS)">Writing Tutorial Service (WTS)</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="categories">By Categories</label>
                                                            <select name="category" class="form-control " tabindex="0" aria-invalid="false">
                                                                <option value="" selected="selected"></option>
                                                                <option value="0" label="Academics">Academics</option>
                                                                <option value="1" label="Accounts">Accounts</option>
                                                                <option value="2" label="Administrative">Administrative</option>
                                                                <option value="3" label="Admissions">Admissions</option>
                                                                <option value="4" label="Campus Life">Campus Life</option>
                                                                <option value="5" label="Careers">Careers</option>
                                                                <option value="6" label="Enrollment">Enrollment</option>
                                                                <option value="7" label="Faculty Services">Faculty Services</option>
                                                                <option value="8" label="Finances">Finances</option>
                                                                <option value="9" label="Housing &amp; Dining">Housing &amp; Dining</option>
                                                                <option value="10" label="HR &amp; Benefits">HR &amp; Benefits</option>
                                                                <option value="11" label="International">International</option>
                                                                <option value="12" label="IT Services">IT Services</option>
                                                                <option value="13" label="Libraries">Libraries</option>
                                                                <option value="14" label="Orientation">Orientation</option>
                                                                <option value="15" label="Payroll &amp; Taxes">Payroll &amp; Taxes</option>
                                                                <option value="16" label="Personal Information">Personal Information</option>
                                                                <option value="17" label="Research">Research</option>
                                                                <option value="18" label="Training">Training</option>
                                                                <option value="19" label="Transportation">Transportation</option>
                                                            </select>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                                            <label for="status">By Status</label>
                                                                            <select name="status" class="form-control " tabindex="0" aria-invalid="false">
                                                                                <option value="" selected="selected">Any Status</option>
                                                                                <option ng-repeat="(key, value) in ::pageData.status" value="A" class="">Active</option>
                                                                                <option ng-repeat="(key, value) in ::pageData.status" value="I" class="">Inactive</option>
                                                                                <option value="D">Draft</option>
                                                                            </select>
                                                                        </div>-->
                                                        <button type="submit" class="btn btn-default btn-xs pull-right">Apply Filter</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                     
                                     
                                  
                                    </div>
                                    </div>
                                    
                                 <div class="filter-list" style="margin-bottom:15px">   <span class="small">Filtered by:</span> <span class="label label-primary">Keyword: Bus</span> <span class="label label-primary">Publisher: AIT</span></div>
                                    
                                    <table class="table table-condensed table-borderewwwd table-actions tablesaw tablesaw-stack"
                                   data-tablesaw-mode="stack" id="tablesaw-3579">
                                        <thead>
                                            <tr>
                                                <th>Title <span class="small text-muted">(Application)</span></th>
                                                <th>Campus</th>
                                                <th>&nbsp;</th>
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
                                                                <td>IUPUI, IUPUC</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUI, IUPUC</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUPUI, IUPUC</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUI, IUPUC</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUS</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUS</td>
                                                <td><span data-toggle="popover" title="Schedule" data-placement="bottom" data-content="This task is set to go idle on 06/27/2017 11:59 pm"><i class="icon-info-circled"></i></span></td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB, IUPUI</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB, IUPUI</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUSB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUSB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUE</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUE</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUPUI</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUI</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUPUC</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUC</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUN</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUN</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUK</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUK</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUS</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUS</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUSB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUSB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td><span data-toggle="popover" title="Schedule" data-placement="bottom" data-content="This task is set to be updated on 07/12/2017 11:59 pm"><i class="icon-info-circled"></i></span></td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUS</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUS</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                            <li><a href="#" data-toggle="modal" data-target="#modal_whichversion">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUPUI</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUI</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUB</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                <td>All IU Campuses</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUPUI, IUPUC</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUI, IUPUC</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
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
                                                                <td>IUPUC, IUPUI</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>IUPUI, IUPUC</td>
                                                <td>&nbsp;</td>
                                                <td><div class="dropdown">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenu1">
                                                            <li><a href="pub-taskmaint-edit.php">Edit</a></li>
                                                            <li><a href="#">Feature</a></li>
                                                            <li><a href="#">See Reviews</a></li>
                                                            <li role="separator" class="divider"></li>
                                                            <li><a href="#">Remove</a></li>
                                                            <li><a href="#">Delete</a></li>
                                                        </ul>
                                                    </div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="icon-plus-2"></i>View More </a></div>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tasks_idle" style="display: ">
                                <section>
                                    <h3 class="h4">Idle Tasks</h3>
                                    <div class="well well-sm" style="background:#f8f8f8; margin-bottom:;">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group" id="adv-search">
                                                    <input type="text" class="form-control" placeholder="Filter List">
                                                    <div class="input-group-btn">
                                                        <div class="btn-group" role="group">
                                                            <div class="dropdown dropdown-lg">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                                    <form class="form-horizontal" role="form">
                                                                        <div class="form-group">
                                                                            <label for="publishers">By Publisher</label>
                                                                            <select name="publisher" id="publisher" class="form-control " tabindex="0" aria-invalid="false">
                                                                                <option value="" selected="selected">All Publishers</option>
                                                                                <option value="0" label="AA/CTL Webmaster">AA/CTL Webmaster</option>
                                                                                <option value="1" label="ABITC">ABITC</option>
                                                                                <option value="2" label="Access Management Team / IMS">Access Management Team / IMS</option>
                                                                                <option value="3" label="Admissions - IUK">Admissions - IUK</option>
                                                                                <option value="4" label="Admitted JD Law Students">Admitted JD Law Students</option>
                                                                                <option value="5" label="Advance College Project (ACP)">Advance College Project (ACP)</option>
                                                                                <option value="6" label="AIT">AIT</option>
                                                                                <option value="7" label="Appear">Appear</option>
                                                                                <option value="8" label="ASQA - EIG">ASQA - EIG</option>
                                                                                <option value="9" label="ASQA - Testing Tools">ASQA - Testing Tools</option>
                                                                                <option value="10" label="Athletics">Athletics</option>
                                                                                <option value="11" label="Auxiliary IT">Auxiliary IT</option>
                                                                                <option value="12" label="BCP">BCP</option>
                                                                                <option value="13" label="Bepko">Bepko</option>
                                                                                <option value="14" label="BL-SPEA (SPEA IT)">BL-SPEA (SPEA IT)</option>
                                                                                <option value="15" label="Bursar - Bloomington">Bursar - Bloomington</option>
                                                                                <option value="16" label="CAITS">CAITS</option>
                                                                                <option value="17" label="CANC">CANC</option>
                                                                                <option value="18" label="Capital Planning and Facilities">Capital Planning and Facilities</option>
                                                                                <option value="19" label="Career and Accessibility Services">Career and Accessibility Services</option>
                                                                                <option value="20" label="Career Services Office - South Bend">Career Services Office - South Bend</option>
                                                                                <option value="21" label="Classroom Technology Services">Classroom Technology Services</option>
                                                                                <option value="22" label="Cloud Technologies">Cloud Technologies</option>
                                                                                <option value="23" label="Compliance Office">Compliance Office</option>
                                                                                <option value="24" label="CRM">CRM</option>
                                                                                <option value="25" label="CTSI">CTSI</option>
                                                                                <option value="26" label="Data Center Operations">Data Center Operations</option>
                                                                                <option value="27" label="DEMA">DEMA</option>
                                                                                <option value="28" label="Department of Emergency Medicine">Department of Emergency Medicine</option>
                                                                                <option value="29" label="Department of OB/GYN">Department of OB/GYN</option>
                                                                                <option value="30" label="Division of Student Affairs">Division of Student Affairs</option>
                                                                                <option value="31" label="Division of Undergraduate Education Technology Services">Division of Undergraduate Education Technology Services</option>
                                                                                <option value="32" label="Educational Partnerships and Student Success">Educational Partnerships and Student Success</option>
                                                                                <option value="33" label="EIG">EIG</option>
                                                                                <option value="34" label="Emergency Management &amp; Continuity">Emergency Management &amp; Continuity</option>
                                                                                <option value="35" label="Engagement">Engagement</option>
                                                                                <option value="36" label="Enrollments/Student Services">Enrollments/Student Services</option>
                                                                                <option value="37" label="Enterprise Document Management">Enterprise Document Management</option>
                                                                                <option value="38" label="ESS">ESS</option>
                                                                                <option value="39" label="etrain">etrain</option>
                                                                                <option value="40" label="Financial Management Services (FMS)">Financial Management Services (FMS)</option>
                                                                                <option value="41" label="First year Seminar - IUPUC">First year Seminar - IUPUC</option>
                                                                                <option value="42" label="Functional Contact – Support Center">Functional Contact – Support Center</option>
                                                                                <option value="43" label="Healthy IU">Healthy IU</option>
                                                                                <option value="44" label="Housing and Residence Life - IUPUI">Housing and Residence Life - IUPUI</option>
                                                                                <option value="45" label="HRMS">HRMS</option>
                                                                                <option value="46" label="HRMS - Technical">HRMS - Technical</option>
                                                                                <option value="47" label="Human Resources and Payroll - Kokomo">Human Resources and Payroll - Kokomo</option>
                                                                                <option value="48" label="IN-TEST">IN-TEST</option>
                                                                                <option value="49" label="Indiana University Cinema">Indiana University Cinema</option>
                                                                                <option value="50" label="Indiana University School of Dentistry">Indiana University School of Dentistry</option>
                                                                                <option value="51" label="Indiana University School of Medicine (IUSM)">Indiana University School of Medicine (IUSM)</option>
                                                                                <option value="52" label="INLOCCA">INLOCCA</option>
                                                                                <option value="53" label="Internal Audit Group">Internal Audit Group</option>
                                                                                <option value="54" label="IT Community Partners">IT Community Partners</option>
                                                                                <option value="55" label="IT Services">IT Services</option>
                                                                                <option value="56" label="IT Southeast Campus">IT Southeast Campus</option>
                                                                                <option value="57" label="IT Statewide Conference">IT Statewide Conference</option>
                                                                                <option value="58" label="IT Training - Bloomington">IT Training - Bloomington</option>
                                                                                <option value="59" label="IT Training - Kokomo">IT Training - Kokomo</option>
                                                                                <option value="60" label="IU Alumni Association">IU Alumni Association</option>
                                                                                <option value="61" label="IU Communications">IU Communications</option>
                                                                                <option value="62" label="IU Contact Center">IU Contact Center</option>
                                                                                <option value="63" label="IU East Career Services">IU East Career Services</option>
                                                                                <option value="64" label="IU Foundation">IU Foundation</option>
                                                                                <option value="65" label="IU Southeast Career Development Center">IU Southeast Career Development Center</option>
                                                                                <option value="66" label="IUEP EXECRES System Administrators">IUEP EXECRES System Administrators</option>
                                                                                <option value="67" label="IUESCC">IUESCC</option>
                                                                                <option value="68" label="IUPUI Campus Career and Advising Services">IUPUI Campus Career and Advising Services</option>
                                                                                <option value="69" label="IUPUI Finance and Administration">IUPUI Finance and Administration</option>
                                                                                <option value="70" label="IUPUI Finance and Administration Office of Technology Services">IUPUI Finance and Administration Office of Technology Services</option>
                                                                                <option value="71" label="IUPUI Human Resources">IUPUI Human Resources</option>
                                                                                <option value="72" label="IUPUI Testing Center">IUPUI Testing Center</option>
                                                                                <option value="73" label="Kelley School - Help Desk">Kelley School - Help Desk</option>
                                                                                <option value="74" label="KelleyOnlineDegrees">KelleyOnlineDegrees</option>
                                                                                <option value="75" label="Kelly School of Business">Kelly School of Business</option>
                                                                                <option value="76" label="KFS">KFS</option>
                                                                                <option value="77" label="KOWeb">KOWeb</option>
                                                                                <option value="78" label="Kuali Rice (ESI)">Kuali Rice (ESI)</option>
                                                                                <option value="79" label="Libraries - Bloomington">Libraries - Bloomington</option>
                                                                                <option value="80" label="Libraries - East">Libraries - East</option>
                                                                                <option value="81" label="Libraries - IUPUC">Libraries - IUPUC</option>
                                                                                <option value="82" label="Libraries - IUPUI">Libraries - IUPUI</option>
                                                                                <option value="83" label="Libraries - Kokomo">Libraries - Kokomo</option>
                                                                                <option value="84" label="Libraries - Northwest">Libraries - Northwest</option>
                                                                                <option value="85" label="Libraries - SouthBend">Libraries - SouthBend</option>
                                                                                <option value="86" label="Libraries - Southeast">Libraries - Southeast</option>
                                                                                <option value="87" label="Mathematical Science IUPUI">Mathematical Science IUPUI</option>
                                                                                <option value="88" label="MDEP">MDEP</option>
                                                                                <option value="89" label="MoneySmarts">MoneySmarts</option>
                                                                                <option value="90" label="Multicultural Center - IUPUI">Multicultural Center - IUPUI</option>
                                                                                <option value="91" label="Oasis">Oasis</option>
                                                                                <option value="92" label="Office of Admissions - IUSB">Office of Admissions - IUSB</option>
                                                                                <option value="93" label="Office of Overseas Study">Office of Overseas Study</option>
                                                                                <option value="94" label="Office of Student Employment">Office of Student Employment</option>
                                                                                <option value="95" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                                                <option value="96" label="Office of the Registrar - IU East">Office of the Registrar - IU East</option>
                                                                                <option value="97" label="Office of the Registrar - IU Southeast">Office of the Registrar - IU Southeast</option>
                                                                                <option value="98" label="Office of the Registrar - IUPUC">Office of the Registrar - IUPUC</option>
                                                                                <option value="99" label="Office of the Registrar - IUPUI">Office of the Registrar - IUPUI</option>
                                                                                <option value="100" label="Office of the Registrar - Kokomo">Office of the Registrar - Kokomo</option>
                                                                                <option value="101" label="Office of the Registrar - Northwest">Office of the Registrar - Northwest</option>
                                                                                <option value="102" label="Office of the Registrar - South Bend">Office of the Registrar - South Bend</option>
                                                                                <option value="103" label="OMS Southeast">OMS Southeast</option>
                                                                                <option value="104" label="Oncourse">Oncourse</option>
                                                                                <option value="105" label="One.IU Support Team">One.IU Support Team</option>
                                                                                <option value="106" label="Orientation - Bloomington">Orientation - Bloomington</option>
                                                                                <option value="107" label="Orientation - East">Orientation - East</option>
                                                                                <option value="108" label="Orientation - IUPUC">Orientation - IUPUC</option>
                                                                                <option value="109" label="Orientation - IUPUI">Orientation - IUPUI</option>
                                                                                <option value="110" label="Orientation - Northwest">Orientation - Northwest</option>
                                                                                <option value="111" label="Orientation - Southeast">Orientation - Southeast</option>
                                                                                <option value="112" label="Orientation and Academic Advising - Kokomo">Orientation and Academic Advising - Kokomo</option>
                                                                                <option value="113" label="OVPIA">OVPIA</option>
                                                                                <option value="114" label="OVPUE">OVPUE</option>
                                                                                <option value="115" label="Parking">Parking</option>
                                                                                <option value="116" label="Payroll &amp; Time">Payroll &amp; Time</option>
                                                                                <option value="117" label="Policy Coordinator">Policy Coordinator</option>
                                                                                <option value="118" label="Principal Online Services">Principal Online Services</option>
                                                                                <option value="119" label="PROVEVP">PROVEVP</option>
                                                                                <option value="120" label="PSIA">PSIA</option>
                                                                                <option value="121" label="PTI Research Services">PTI Research Services</option>
                                                                                <option value="122" label="RASD">RASD</option>
                                                                                <option value="123" label="RASD - Compliance">RASD - Compliance</option>
                                                                                <option value="124" label="RASD - Grants">RASD - Grants</option>
                                                                                <option value="125" label="RASD - Grants/Compliance">RASD - Grants/Compliance</option>
                                                                                <option value="126" label="RASD - OVCR">RASD - OVCR</option>
                                                                                <option value="127" label="RASD - OVPR">RASD - OVPR</option>
                                                                                <option value="128" label="RASD - OVPR/VPR">RASD - OVPR/VPR</option>
                                                                                <option value="129" label="RASD - VPR">RASD - VPR</option>
                                                                                <option value="130" label="ROAR  - Registry of Options and Resources">ROAR  - Registry of Options and Resources</option>
                                                                                <option value="131" label="RPAS">RPAS</option>
                                                                                <option value="132" label="RPS Application Administration">RPS Application Administration</option>
                                                                                <option value="133" label="Ruth Lilly Medical Library">Ruth Lilly Medical Library</option>
                                                                                <option value="134" label="School of Nursing">School of Nursing</option>
                                                                                <option value="135" label="School of Optometry">School of Optometry</option>
                                                                                <option value="136" label="School of Public and Environmental Affairs (SPEA)">School of Public and Environmental Affairs (SPEA)</option>
                                                                                <option value="137" label="School of Public Health – Bloomington IT Services (SPHBITS)">School of Public Health – Bloomington IT Services (SPHBITS)</option>
                                                                                <option value="138" label="Schools of Education - IUPUI">Schools of Education - IUPUI</option>
                                                                                <option value="139" label="SCMC">SCMC</option>
                                                                                <option value="140" label="SIS">SIS</option>
                                                                                <option value="141" label="SOIC: School of Informatics and Computing">SOIC: School of Informatics and Computing</option>
                                                                                <option value="142" label="STC">STC</option>
                                                                                <option value="143" label="Storage and Virtualization">Storage and Virtualization</option>
                                                                                <option value="144" label="Student Academic Systems">Student Academic Systems</option>
                                                                                <option value="145" label="Student Central on Union">Student Central on Union</option>
                                                                                <option value="146" label="Student Development Center">Student Development Center</option>
                                                                                <option value="147" label="Student Organization Accounts">Student Organization Accounts</option>
                                                                                <option value="148" label="Student Outreach">Student Outreach</option>
                                                                                <option value="149" label="Student Support - South Bend">Student Support - South Bend</option>
                                                                                <option value="150" label="Support Center">Support Center</option>
                                                                                <option value="151" label="Support Center Tool">Support Center Tool</option>
                                                                                <option value="152" label="Training: SIS">Training: SIS</option>
                                                                                <option value="153" label="UCard">UCard</option>
                                                                                <option value="154" label="UHRS">UHRS</option>
                                                                                <option value="155" label="UIPO">UIPO</option>
                                                                                <option value="156" label="UIRR">UIRR</option>
                                                                                <option value="157" label="UITS - CCI">UITS - CCI</option>
                                                                                <option value="158" label="UITS - Collaboration Technologies">UITS - Collaboration Technologies</option>
                                                                                <option value="159" label="UITS - eLearning Design &amp; Services">UITS - eLearning Design &amp; Services</option>
                                                                                <option value="160" label="UITS - Finance Office">UITS - Finance Office</option>
                                                                                <option value="161" label="UITS - Internal Resources">UITS - Internal Resources</option>
                                                                                <option value="162" label="UITS - IU eTexts">UITS - IU eTexts</option>
                                                                                <option value="163" label="UITS - IUIE">UITS - IUIE</option>
                                                                                <option value="164" label="UITS - Leveraged Services">UITS - Leveraged Services</option>
                                                                                <option value="165" label="UITS - Northwest">UITS - Northwest</option>
                                                                                <option value="166" label="UITS - South Bend">UITS - South Bend</option>
                                                                                <option value="167" label="UITS Campus Networks">UITS Campus Networks</option>
                                                                                <option value="168" label="University College">University College</option>
                                                                                <option value="169" label="University Division">University Division</option>
                                                                                <option value="170" label="University Graduate School - Bloomington">University Graduate School - Bloomington</option>
                                                                                <option value="171" label="University Graduate School - IUPUI">University Graduate School - IUPUI</option>
                                                                                <option value="172" label="USSS">USSS</option>
                                                                                <option value="173" label="VPFA">VPFA</option>
                                                                                <option value="174" label="Writing Tutorial Service (WTS)">Writing Tutorial Service (WTS)</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="categories">By Categories</label>
                                                                            <select name="category" class="form-control " tabindex="0" aria-invalid="false">
                                                                                <option value="" selected="selected">All Categories</option>
                                                                                <option value="0" label="Academics">Academics</option>
                                                                                <option value="1" label="Accounts">Accounts</option>
                                                                                <option value="2" label="Administrative">Administrative</option>
                                                                                <option value="3" label="Admissions">Admissions</option>
                                                                                <option value="4" label="Campus Life">Campus Life</option>
                                                                                <option value="5" label="Careers">Careers</option>
                                                                                <option value="6" label="Enrollment">Enrollment</option>
                                                                                <option value="7" label="Faculty Services">Faculty Services</option>
                                                                                <option value="8" label="Finances">Finances</option>
                                                                                <option value="9" label="Housing &amp; Dining">Housing &amp; Dining</option>
                                                                                <option value="10" label="HR &amp; Benefits">HR &amp; Benefits</option>
                                                                                <option value="11" label="International">International</option>
                                                                                <option value="12" label="IT Services">IT Services</option>
                                                                                <option value="13" label="Libraries">Libraries</option>
                                                                                <option value="14" label="Orientation">Orientation</option>
                                                                                <option value="15" label="Payroll &amp; Taxes">Payroll &amp; Taxes</option>
                                                                                <option value="16" label="Personal Information">Personal Information</option>
                                                                                <option value="17" label="Research">Research</option>
                                                                                <option value="18" label="Training">Training</option>
                                                                                <option value="19" label="Transportation">Transportation</option>
                                                                            </select>
                                                                        </div>
                                                                        <!-- <div class="form-group">
                                                                            <label for="status">By Status</label>
                                                                            <select name="status" class="form-control " tabindex="0" aria-invalid="false">
                                                                                <option value="" selected="selected">Any Status</option>
                                                                                <option ng-repeat="(key, value) in ::pageData.status" value="A" class="">Active</option>
                                                                                <option ng-repeat="(key, value) in ::pageData.status" value="I" class="">Inactive</option>
                                                                                <option value="D">Draft</option>
                                                                            </select>
                                                                        </div>-->
                                                                        <button type="submit" class="btn btn-default pull-right">Apply</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-default ">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"> </div>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="showdetails2">
                                            Detail View </label>
                                    </div>
                                    <table class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Title (Application)</th>
                                                <th >IU Campuses</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Drop or Add Classes</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Academics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Student</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Endowment information<span aria-hidden="false"> (ETA-Web)</span></div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Research</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Faculty</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> FMS Support Form<span aria-hidden="false"> (Web Form)</span></div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Finances</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Faculty, Staff</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> FNIS - International Tax Questionnaire<span aria-hidden="false"> (FMS Website: University Tax Services)</span></div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Finances</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Faculty, Staff</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Health and Wellness</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>IT Services, Campus Life</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>All Roles</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>IUPUI</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false"><span >IUPUI</span></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Healthy IU — Your Workplace Wellness Program</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>IT Services, Campus Life</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Faculty, Staff</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> IU Northwest Library</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Libraries</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>All Roles</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>IUN</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false"><span >IUN</span></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> IUSON Help Desk<span aria-hidden="false"> (Web Application)</span></div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td><span class="col-lg-3 col-md-4 col-sm-4 col-xs-12"> <i data-ng-class="::category.fontIcon ? 'icon-' + category.fontIcon : 'icon-dot'" class="icon-monitor"></i> <span data-ng-bind="::category.name">IT Services</span> </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Faculty, Staff</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td><span >IUB<span aria-hidden="false">, </span></span><span >IUPUI</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false"><span >IUB<span aria-hidden="false">, </span></span><span >IUPUI</span></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Late Drop / Add Classes<span aria-hidden="false"> (after 1st week of classes)</span></div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Academics</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Student</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Open Enrollment Webinar Info</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td><span class="col-lg-3 col-md-4 col-sm-4 col-xs-12"> <i data-ng-class="::category.fontIcon ? 'icon-' + category.fontIcon : 'icon-dot'" class="icon-users"></i> <span data-ng-bind="::category.name">Faculty Services, HR &amp; Bneefits</span></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Faculty, Staff</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Weeks of Welcome (WOW)</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>IT Services, Campus Life</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Student</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>IUPUI</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false"><span >IUPUI</span></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Wells Learning Commons</div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>Libraries</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>Student</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>IUB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false"><span >IUB</span></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr >
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Zoom<span aria-hidden="false"> (Zoom Web Collaboration)</span></div>
                                                    <table class="small taskmeta" style="display: noneeee;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Categories:</td>
                                                                <td>IT Services, Campus Life</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Roles:</td>
                                                                <td>All Roles</td>
                                                            </tr>
                                                            <tr>
                                                                <td>IU Campuses:</td>
                                                                <td>All IU Campuses</td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td ><span aria-hidden="false">All IU Campuses</span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tasks_submitted">
                                <section>
                                    <div class="row section-head">
                                        <div class="col-xs-12 col-sm-9 section-header">
                                            <h3 class="h4">Submitted Tasks</h3>
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Explore Programs</div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="true" >All IU Campuses</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>Updated </td>
                                                <td><span class="text-danger" > Declined </span></td>
                                                <td > thrclark </td>
                                                <td><div class="dropdown" style="display:inline">
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Motor Vehicle Records Check</div>
                                                    <table class="small taskmeta">
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
                                                                    IUPUI </td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>Updated</td>
                                                <td><span class="text-danger" > Declined </span></td>
                                                <td > hesenthal </td>
                                                <td><div class="dropdown" style="display:inline">
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Waiver Request</div>
                                                    <table class="small taskmeta">
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
                                                                    IUPUI </td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>Updated</td>
                                                <td><span class="text-danger" > Declined </span></td>
                                                <td > seenyj </td>
                                                <td><div class="dropdown" style="display:inline">
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Apple</div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses<br>
                                                                    IUPUI </span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>New </td>
                                                <td>Upon admin approval<br></td>
                                                <td > breckerm </td>
                                                <td><a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus 411 Information</div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses<br>
                                                                    IUPUI </span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>New </td>
                                                <td>TBD by publisher<br></td>
                                                <td > breckerm </td>
                                                <td><a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Campus Tour</div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses<br>
                                                                    IUPUI </span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td>New </td>
                                                <td>Upon admin approval<br></td>
                                                <td > breckerm </td>
                                                <td><a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Asset Retirement Global <span aria-hidden="false" class="small text-muted"> (KFS)</span></div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td> Updated </td>
                                                <td>Upon admin approval</td>
                                                <td > tcain </td>
                                                <td><a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> Capital Asset Management<span aria-hidden="false" class="small text-muted"> (FR)</span></div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td> Updated</td>
                                                <td>TBD by publisher<br></td>
                                                <td > tozogar </td>
                                                <td><a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
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
                                                <td><div class="task-details-triggerview"><i class="icon-angle-right"></i> IU Peer Coaches <span aria-hidden="false" class="small text-muted">(University Division)</span></div>
                                                    <table class="small taskmeta">
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
                                                                <td><span aria-hidden="false"><span >IUB<span aria-hidden="true" >, </span></span></span> <span aria-hidden="true" >All IU Campuses</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td> New </td>
                                                <td>TBD by publisher<br></td>
                                                <td > adobiega </td>
                                                <td><a href="pub-tasksubmitted-edit.php" class="btn btn-default btn-xs">Review</a>
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
                            <div role="tabpanel" class="tab-pane" id="tasks_featured" style=" display:">
                                <div class="row section-head">
                                    <div class="col-xs-12 col-sm-9 section-header">
                                        <h3 class="h4">Current &amp; Pending Featured Items</h3>
                                    </div>
                                    <div class="col-xs-12  col-sm-3 section-controls"><a href="pub-taskmaint-edit.php" class="btn btn-xs btn-default"><i class="icon-plus-2"></i>Featured Task</a></div>
                                </div>
                                <table class="table table-condensed table-borderewwwd table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Display Order</th>
                                            <th>Featured Schedule</th>
                                            <th><span class="sr-only">Expiration</span></th>
                                            <th>&nbsp;</th>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td>1</td>
                                            <td>End: 07/03/2017 5:00am</td>
                                            <td>&nbsp;</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
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
                                                            <td>Student</td>
                                                        </tr>
                                                        <tr>
                                                            <td>IU Campuses:</td>
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td>2</td>
                                            <td>End: 07/03/2017 5:00am</td>
                                            <td>&nbsp;</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr class="warning">
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Orientation</div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task Center</td>
                                            <td>3</td>
                                            <td>End: 05/03/2017 5:00am </td>
                                            <td><span class="label label-warning">Ending soon</span></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Anyware</div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td>&nbsp;</td>
                                            <td>Begin: 06/03/2017 5:00am<br>
                                                End: 07/03/2017 5:00am</td>
                                            <td>&nbsp;</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Open Enrollment</div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td>&nbsp;</td>
                                            <td>Begin: 06/03/2017 5:00am<br>
                                                End: 07/03/2017 5:00am</td>
                                            <td>&nbsp;</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row section-head">
                                    <div class="col-xs-12 col-sm-9 section-header">
                                        <h3 class="h4">Previously Featured Items</h3>
                                    </div>
                                    <div class="col-xs-12  col-sm-3 section-controls"></div>
                                </div>
                                <table class="table table-condensed table-borderewwwd table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>3rd Party User or Parent Access </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Report IU Secure Outages </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Status.IU </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task Center</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>My Class Schedule </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Imail <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(Email)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Umail <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(Email)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Textbook Orders (Student) </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Print quota <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(IU Print)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Canvas </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Talk Nerdy to Me </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Knowledge Base <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(KB)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Student Center <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(SIS)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Cloud Storage </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Course History </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>1095-C Statement </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td>Task</td>
                                            <td><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tasks_deleted" style="">
                                <div class="row section-head">
                                    <div class="col-xs-12 col-sm-9 section-header">
                                        <h3 class="h4">Deleted Items</h3>
                                    </div>
                                    <div class="col-xs-12  col-sm-3 section-controls"></div>
                                </div>
                                <table class="table table-condensed table-borderewwwd table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>3rd Party User or Parent Access </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Report IU Secure Outages </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Status.IU </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>My Class Schedule </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Imail <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(Email)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Umail <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(Email)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Textbook Orders (Student) </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Print quota <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(IU Print)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Canvas </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Talk Nerdy to Me </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>IU Knowledge Base <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(KB)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Student Center <span ng-show="!!featuredTask.task.applicationName" aria-hidden="false">(SIS)</span></div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Cloud Storage </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>Course History </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td><div class="task-details-triggerview"><i class="icon-angle-right"></i>1095-C Statement </div>
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
                                                            <td>IUPUI, IUPUC</td>
                                                        </tr>
                                                    </tbody>
                                                </table></td>
                                            <td><a href="#" class="btn btn-xs btn-default">Restore</a> <a href="#" class="btn btn-xs btn-default">Permanently Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <?php include('modal/pub-task-edit-selectversion.php') ?>
    <?php include('modal/pub-task-setnotlivedate.php') ?>
    <?php include('modal/pub-task-setlivedate.php') ?>
    <?php include('modal/pub-task-edit-pendingwarning.php') ?>
    <?php include('modal/pub-task-setpendingreleasedate.php') ?>
    <?php include('modal/pub-task-edit-deletewarning.php') ?>
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
        $('#showdetails1, #showdetails2').change(function() {
            if (this.checked)
                $(".taskmeta").show();
            else
                $(".taskmeta").hide();
        });
    });
</script> 
    <script>
    $(document).ready(function() {
        $("#showdetails1, #showdetails2").click(function() {
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
</div>
</body>
</html>
