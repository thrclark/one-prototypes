<?php
$section = 'data';
$page_title = 'pub-datasettings-reviews';
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
	margin-top: -51px;
	padding: 20px;
	left: 14px;
}
}
.primary-content .tab-content .well .filter-list {
	margin-bottom: 15px;
	display: inline;
	padding-left: 30px;
	position: relative;
}
.primary-content .tab-content .well .filter-list:before {
	content: '';
	background: #ddd;
	position: absolute;
	height: 34px;
	width: 1px;
	top: -6px;
	left: 11px;
}
.primary-content .tab-content .well {
	margin-bottom: 5px;
	margin-top: 5px;
	padding-top: 5px;
	padding-bottom: 5px;
}
</style>
<style type="text/css">
.dropdown1 {
	position: static !important;
}
</style>
<style type="text/css"></style>
<style>
.dataTable i {
	font-size: 12px;
	color: #999;
	margin-left: 5px;
}
.popover {
	min-width: 300px;
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
                            <div class="col-xs-12 section-header">
                                <div class="taskmaint-preview">
                                    <div class="taskmaint-preview-content">
                                        <h2 class="taskmaint-preview-content-title">Reviews</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#all_active" aria-controls="all_active" role="tab" data-toggle="tab"><i class="icon-th-list visible-xs"></i> <span class="hidden-xs">All Active</span></a></li>
                            <li role="presentation"><a href="#currently_flagged" aria-controls="currently_flagged" role="tab" data-toggle="tab"><i class="icon-flash-1 visible-xs"></i><span class="hidden-xs">Currently Flagged</span></a></li>
                            <li role="presentation"><a href="#resolved_flags" aria-controls="resolved_flags" role="tab" data-toggle="tab"><i class="icon-upload-cloud visible-xs"></i><span class="hidden-xs">Resolved Flags</span></a></li>
                            <li role="presentation"><a href="#requested_deactivations" aria-controls="requested_deactivations" role="tab" data-toggle="tab"><i class="icon-flag-1 visible-xs"></i><span class="hidden-xs">Requested Deactivations</span></a></li>
                            <li role="presentation"><a href="#review_replies" aria-controls="review_replies" role="tab" data-toggle="tab"><i class="icon-trash visible-xs"></i><span class="hidden-xs">Review Replies (2)</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="all_active" style=" display: ;">
                                <section>
                                    <div class="row section-head">
                                        <div class="col-xs-9 section-header">
                                            <h3 class="h4">All Active</h3>
                                        </div>
                                    </div>
                                    <div class="page-utilities">
                                        <div class="page-utilities-item col-sm-4 col-xs-6">
                                            <select class="form-control input-sm" ng-change="selectTask()" ng-options="task.uid as getTaskLabel(task) for task in tasks" aria-invalid="false" style="">
                                                <option value="" selected="selected">All Tasks</option>
                                                <option label="1095-C Electronic Consent" value="string:20161107T023108862one.iu.edu0">1095-C Electronic Consent</option>
                                                <option label="1095-C Statement" value="string:20160310T020031398one.iu.edu0">1095-C Statement</option>
                                                <option label="1098-T Tax Form" value="string:20131001T0527294191-test.iu.edu3">1098-T Tax Form</option>
                                                <option label="3D Digitization" value="string:20150121T111514322one.iu.edu11">3D Digitization</option>
                                                <option label="3D Stereoscopic Video Camera Rigs: IU Bloomington, IUPUI Indianapolis" value="string:20150122T100024256one.iu.edu1">3D Stereoscopic Video Camera Rigs: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="3rd Party User or Parent Access" value="string:20140602T084321103one.iu.edu1">3rd Party User or Parent Access</option>
                                                <option label="Academic Advisement Report" value="string:20140519T092728452one.iu.edu1">Academic Advisement Report</option>
                                                <option label="Academic Analytics: IU Bloomington, IUPUI Indianapolis" value="string:20161128T013123223one.iu.edu0">Academic Analytics: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Academic and Career Help: IUPUI Indianapolis" value="string:20170313T053214230one.iu.edu32">Academic and Career Help: IUPUI Indianapolis</option>
                                                <option label="Academic Calendar: IUPUC Columbus" value="string:20150407T021215067one.iu.edu1">Academic Calendar: IUPUC Columbus</option>
                                                <option label="Academic Calendar: IU East" value="string:20140528T111441399one.iu.edu4">Academic Calendar: IU East</option>
                                                <option label="Academic Calendar: IU Southeast" value="string:20140528T105833330one.iu.edu2">Academic Calendar: IU Southeast</option>
                                                <option label="Academic Calendar: IU South Bend" value="string:20140501T040447110one.iu.edu2">Academic Calendar: IU South Bend</option>
                                                <option label="Academic Calendar: IU Bloomington" value="string:20131204T080108896one.iu.edu4">Academic Calendar: IU Bloomington</option>
                                                <option label="Academic Calendar: IUPUI Indianapolis" value="string:20140501T035411104one.iu.edu1">Academic Calendar: IUPUI Indianapolis</option>
                                                <option label="Academic Calendar: IU Kokomo" value="string:20140528T110710679one.iu.edu3">Academic Calendar: IU Kokomo</option>
                                                <option label="Academic Calendar: IU Northwest" value="string:20140520T031242708one.iu.edu1">Academic Calendar: IU Northwest</option>
                                                <option label="Acceptable Use Agreements" value="string:20150612T012355149one.iu.edu1">Acceptable Use Agreements</option>
                                                <option label="Access Coordinator Lookup" value="string:20160928T011000071one.iu.edu3">Access Coordinator Lookup</option>
                                                <option label="Account Delegate Lookup (KFS)" value="string:20170125T034446691one.iu.edu23">Account Delegate Lookup (KFS)</option>
                                                <option label="Account Lookup (KFS)" value="string:20170125T033013611one.iu.edu20">Account Lookup (KFS)</option>
                                                <option label="Account Management Reporting Tool (AMReT)" value="string:20150617T054930526one.iu.edu5">Account Management Reporting Tool (AMReT)</option>
                                                <option label="ACP Payments: IU Kokomo" value="string:20151116T014503317one.iu.edu1">ACP Payments: IU Kokomo</option>
                                                <option label="Action List (Kuali Rice)" value="string:20131025T054919331one.iu.edu1">Action List (Kuali Rice)</option>
                                                <option label="Ad Astra" value="string:20151016T103236107one.iu.edu1">Ad Astra</option>
                                                <option label="Add/Remove User Access Request - eDoc (eDoc): IU Bloomington, IUPUI Indianapolis" value="string:20150811T095932175one.iu.edu1">Add/Remove User Access Request - eDoc (eDoc): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Addictions and Recovery: IUPUI Indianapolis" value="string:20170313T054135248one.iu.edu36">Addictions and Recovery: IUPUI Indianapolis</option>
                                                <option label="Administrative Center (SIS)" value="string:20150331T122133838one.iu.edu5">Administrative Center (SIS)</option>
                                                <option label="Admissions Confirmation: IU South Bend" value="string:20160223T115629243one.iu.edu0">Admissions Confirmation: IU South Bend</option>
                                                <option label="Adobe Connect" value="string:20131211T113458427one.iu.edu1">Adobe Connect</option>
                                                <option label="Advance Deposit (AD) (KFS)" value="string:20170125T022520859one.iu.edu2">Advance Deposit (AD) (KFS)</option>
                                                <option label="Advanced technical training (EdCert)" value="string:20140502T091351246one.iu.edu5">Advanced technical training (EdCert)</option>
                                                <option label="Advising: IUPUI Indianapolis" value="string:20170316T035536313one.iu.edu14">Advising: IUPUI Indianapolis</option>
                                                <option label="Advising Records (AdRx)" value="string:20140324T100803750one.iu.edu1">Advising Records (AdRx)</option>
                                                <option label="Advisor" value="string:20130906T102141281test.uisapp2.iu.edu5">Advisor</option>
                                                <option label="Affiliate Accounts" value="string:20140326T113806621one.iu.edu3">Affiliate Accounts</option>
                                                <option label="AIM: IU Bloomington, IUPUI Indianapolis" value="string:20150626T061821519one.iu.edu1">AIM: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="All IRB Services (Kuali Coeus)" value="string:20150428T112443092one.iu.edu2">All IRB Services (Kuali Coeus)</option>
                                                <option label="All Maintenance Services (Kuali Coeus)" value="string:20150428T112749370one.iu.edu3">All Maintenance Services (Kuali Coeus)</option>
                                                <option label="Analysis and Software Delivery and Support" value="string:20150122T100631573one.iu.edu3">Analysis and Software Delivery and Support</option>
                                                <option label="App Share (IU Application Share)" value="string:20160831T041013116one.iu.edu1">App Share (IU Application Share)</option>
                                                <option label="APPEAR" value="string:20150320T093751298one.iu.edu11">APPEAR</option>
                                                <option label="Apple" value="string:20150128T110230505one.iu.edu2">Apple</option>
                                                <option label="Application Status" value="string:20130905T115912124test.uisapp2.iu.edu1">Application Status</option>
                                                <option label="Apply for Faculty Exchange Program (International)" value="string:20161123T112137107one.iu.edu31">Apply for Faculty Exchange Program (International)</option>
                                                <option label="Apply for Graduate Exchange Program (International)" value="string:20161123T105717287one.iu.edu30">Apply for Graduate Exchange Program (International)</option>
                                                <option label="Apply IU Admin Center" value="string:20170801T121228328one.iu.edu0">Apply IU Admin Center</option>
                                                <option label="Approval Request (School of Optometry)" value="string:20150925T084512453one.iu.edu2">Approval Request (School of Optometry)</option>
                                                <option label="Approved Caterers (Alcohol.cfm)" value="string:20161024T090634401one.iu.edu0">Approved Caterers (Alcohol.cfm)</option>
                                                <option label="Approved Chartered Buses (BusCompanies.cfm)" value="string:20161024T093326512one.iu.edu1">Approved Chartered Buses (BusCompanies.cfm)</option>
                                                <option label="Arts &amp; Sciences Career Services: IU Bloomington" value="string:20140124T101254602one.iu.edu2">Arts &amp; Sciences Career Services: IU Bloomington</option>
                                                <option label="Ask A Librarian (Research Help): IU Bloomington" value="string:20160815T024225400one.iu.edu10">Ask A Librarian (Research Help): IU Bloomington</option>
                                                <option label="Ask Questions (AskIU)" value="string:20131003T0344072041-test.iu.edu1">Ask Questions (AskIU)</option>
                                                <option label="Asset Location Global (KFS)" value="string:20170202T011224739one.iu.edu4">Asset Location Global (KFS)</option>
                                                <option label="Asset Lookup (KFS)" value="string:20170202T120500669one.iu.edu1">Asset Lookup (KFS)</option>
                                                <option label="Asset Payment Lookup (KFS)" value="string:20170202T121826401one.iu.edu2">Asset Payment Lookup (KFS)</option>
                                                <option label="Asset Retirement Global (ARG) (KFS)" value="string:20170202T014120130one.iu.edu5">Asset Retirement Global (ARG) (KFS)</option>
                                                <option label="Background Check Training" value="string:20170815T043324116one.iu.edu0">Background Check Training</option>
                                                <option label="beINvolved (Student Activities): IU Bloomington" value="string:20130906T110615177test.uisapp2.iu.edu8">beINvolved (Student Activities): IU Bloomington</option>
                                                <option label="Benefits Change Connection" value="string:20151013T023829287one.iu.edu1">Benefits Change Connection</option>
                                                <option label="Benefits Customer Service Contacts" value="string:20151013T040648965one.iu.edu2">Benefits Customer Service Contacts</option>
                                                <option label="Benefits Information" value="string:20131024T111536511one.iu.edu3">Benefits Information</option>
                                                <option label="Big Red II Supercomputer" value="string:20150122T102709146one.iu.edu1">Big Red II Supercomputer</option>
                                                <option label="Big Red II Supercomputer Machine Software Information" value="string:20150122T102901379one.iu.edu2">Big Red II Supercomputer Machine Software Information</option>
                                                <option label="Books24x7 IT Pro" value="string:20150923T091733897one.iu.edu1">Books24x7 IT Pro</option>
                                                <option label="Box" value="string:20130907T033810961test.uisapp2.iu.edu15">Box</option>
                                                <option label="BREG Portal (SharePoint)" value="string:20170303T051007908one.iu.edu0">BREG Portal (SharePoint)</option>
                                                <option label="Broader Impacts Resource Guide" value="string:20150122T103101107one.iu.edu3">Broader Impacts Resource Guide</option>
                                                <option label="Budget Adjustment (BA) (KFS)" value="string:20170125T031509803one.iu.edu14">Budget Adjustment (BA) (KFS)</option>
                                                <option label="Building and Room Reports" value="string:20150702T100632955one.iu.edu2">Building and Room Reports</option>
                                                <option label="Building List" value="string:20150625T091643050one.iu.edu6">Building List</option>
                                                <option label="Bursar External Upload (BEX)" value="string:20160324T094903824one.iu.edu2">Bursar External Upload (BEX)</option>
                                                <option label="Bus Routes (City Line): IU Kokomo" value="string:20131025T103640070one.iu.edu1">Bus Routes (City Line): IU Kokomo</option>
                                                <option label="Bus Routes (TARC): IU Southeast" value="string:20150925T085709460one.iu.edu3">Bus Routes (TARC): IU Southeast</option>
                                                <option label="Bus Routes (TRANSPO): IU South Bend" value="string:20131025T102542143one.iu.edu2">Bus Routes (TRANSPO): IU South Bend</option>
                                                <option label="Bus Schedule &amp; Routes (Bloomington Transit): IU Bloomington" value="string:20140703T014131074one.iu.edu4">Bus Schedule &amp; Routes (Bloomington Transit): IU Bloomington</option>
                                                <option label="Bus Schedules: IU Bloomington" value="string:20140818T085153936one.iu.edu5">Bus Schedules: IU Bloomington</option>
                                                <option label="Bus Tracking (DoubleMap): IU Bloomington" value="string:20131015T040941599one.iu.edu2">Bus Tracking (DoubleMap): IU Bloomington</option>
                                                <option label="Bus Tracking (DoubleMap): IUPUI Indianapolis" value="string:20140826T105921752one.iu.edu1">Bus Tracking (DoubleMap): IUPUI Indianapolis</option>
                                                <option label="CAITS Service Request" value="string:20160908T022718507one.iu.edu0">CAITS Service Request</option>
                                                <option label="Calendar (Canvas)" value="string:20140808T115615564one.iu.edu6">Calendar (Canvas)</option>
                                                <option label="Campus 411 Information: IU Bloomington, IUPUI Indianapolis" value="string:20140821T014013821one.iu.edu2">Campus 411 Information: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Campus Administrative and Training Series (CATS): IU Bloomington" value="string:20151116T105438485one.iu.edu1">Campus Administrative and Training Series (CATS): IU Bloomington</option>
                                                <option label="Campus Administrative Registrar Transactions (CART): IU Bloomington" value="string:20150403T084818844one.iu.edu10">Campus Administrative Registrar Transactions (CART): IU Bloomington</option>
                                                <option label="Campus Alerts" value="string:20140818T110805060one.iu.edu2">Campus Alerts</option>
                                                <option label="Campus Bridging:  Connecting to Local and National Cyberinfrastructure" value="string:20150122T103346730one.iu.edu4">Campus Bridging:  Connecting to Local and National Cyberinfrastructure</option>
                                                <option label="Campus Elections (IUSB Vote): IU South Bend" value="string:20160329T103702758one.iu.edu0">Campus Elections (IUSB Vote): IU South Bend</option>
                                                <option label="Campus Events: IU East" value="string:20131021T042444600one.iu.edu3">Campus Events: IU East</option>
                                                <option label="Campus Events: IU Northwest" value="string:20131023T091050536one.iu.edu4">Campus Events: IU Northwest</option>
                                                <option label="Campus Events: IU Bloomington" value="string:20131023T090612070one.iu.edu3">Campus Events: IU Bloomington</option>
                                                <option label="Campus events: IU South Bend" value="string:20131023T091405107one.iu.edu5">Campus events: IU South Bend</option>
                                                <option label="Campus Events: IUPUI Indianapolis" value="string:20131023T092453905one.iu.edu9">Campus Events: IUPUI Indianapolis</option>
                                                <option label="Campus Events: IUPUC Columbus" value="string:20131023T092103498one.iu.edu8">Campus Events: IUPUC Columbus</option>
                                                <option label="Campus Events: IU Kokomo" value="string:20131023T091609979one.iu.edu6">Campus Events: IU Kokomo</option>
                                                <option label="Campus Events: IU Southeast" value="string:20131023T091858743one.iu.edu7">Campus Events: IU Southeast</option>
                                                <option label="Campus Map and Directions: IU Southeast" value="string:20131007T0940043631-test.iu.edu5">Campus Map and Directions: IU Southeast</option>
                                                <option label="Campus Map and Directions: IU Bloomington" value="string:20131007T0944410301-test.iu.edu7">Campus Map and Directions: IU Bloomington</option>
                                                <option label="Campus Map and Directions: IUPUI Indianapolis" value="string:20131007T0942489941-test.iu.edu6">Campus Map and Directions: IUPUI Indianapolis</option>
                                                <option label="Campus Map and Directions: IU South Bend" value="string:20131007T0930344161-test.iu.edu2">Campus Map and Directions: IU South Bend</option>
                                                <option label="Campus Map and Directions: IU Kokomo" value="string:20131007T0937375481-test.iu.edu4">Campus Map and Directions: IU Kokomo</option>
                                                <option label="Campus Map and directions: IU Northwest" value="string:20131007T0934311851-test.iu.edu3">Campus Map and directions: IU Northwest</option>
                                                <option label="Campus Map and Directions: IU East" value="string:20131007T0924315731-test.iu.edu1">Campus Map and Directions: IU East</option>
                                                <option label="Campus Networks Portal" value="string:20160729T010126034one.iu.edu2">Campus Networks Portal</option>
                                                <option label="Campus shuttles: IUPUI Indianapolis" value="string:20140207T013147740one.iu.edu1">Campus shuttles: IUPUI Indianapolis</option>
                                                <option label="Campus Tour: IU Bloomington" value="string:20140523T014822084one.iu.edu2">Campus Tour: IU Bloomington</option>
                                                <option label="Cancel Housing Contract, Appeal Charges, Request Residency Exemption (Housing Appeals): IU Bloomington" value="string:20131007T0931419261-test.iu.edu8">Cancel Housing Contract, Appeal Charges, Request Residency Exemption (Housing Appeals): IU Bloomington</option>
                                                <option label="Canvas" value="string:20140423T100805610one.iu.edu2">Canvas</option>
                                                <option label="Car Trouble Parking and Escort Services: IUPUI Indianapolis" value="string:20170313T054613117one.iu.edu38">Car Trouble Parking and Escort Services: IUPUI Indianapolis</option>
                                                <option label="Career Development Center: IU Southeast" value="string:20140522T103201525one.iu.edu3">Career Development Center: IU Southeast</option>
                                                <option label="Career Development Center: IU Bloomington" value="string:20140124T102610713one.iu.edu3">Career Development Center: IU Bloomington</option>
                                                <option label="Career Planning Budget Benefits: IUPUI Indianapolis" value="string:20170314T043824059one.iu.edu4">Career Planning Budget Benefits: IUPUI Indianapolis</option>
                                                <option label="Career Services Office: IU South Bend" value="string:20150604T111635192one.iu.edu4">Career Services Office: IU South Bend</option>
                                                <option label="CareerLink: IU Kokomo" value="string:20150520T111618235one.iu.edu38">CareerLink: IU Kokomo</option>
                                                <option label="CareerLink: IU Southeast" value="string:20150619T112531491one.iu.edu1">CareerLink: IU Southeast</option>
                                                <option label="Cash Receipt (CR) (KFS)" value="string:20170125T032451368one.iu.edu18">Cash Receipt (CR) (KFS)</option>
                                                <option label="Castlight Health" value="string:20140226T085252028one.iu.edu1">Castlight Health</option>
                                                <option label="Certificate of Insurance (COI)" value="string:20161121T113557141one.iu.edu2">Certificate of Insurance (COI)</option>
                                                <option label="Certificate of Insurance - Film Students (COI-Film)" value="string:20161121T114421407one.iu.edu4">Certificate of Insurance - Film Students (COI-Film)</option>
                                                <option label="Certification for Use of Personally Owned Devices" value="string:20140227T025512076one.iu.edu3">Certification for Use of Personally Owned Devices</option>
                                                <option label="CFS Resource Center" value="string:20170508T110541445one.iu.edu0">CFS Resource Center</option>
                                                <option label="Change Name (Students)" value="string:20130908T123849312test.uisapp2.iu.edu5">Change Name (Students)</option>
                                                <option label="Chart Review (School of Optometry)" value="string:20151012T030007073one.iu.edu1">Chart Review (School of Optometry)</option>
                                                <option label="Chemistry placement exam: IU Bloomington" value="string:20140425T095156541one.iu.edu4">Chemistry placement exam: IU Bloomington</option>
                                                <option label="Child Safety Support: IUPUI Indianapolis" value="string:20170314T042720798one.iu.edu0">Child Safety Support: IUPUI Indianapolis</option>
                                                <option label="Childcare fees: IU Southeast" value="string:20131021T030500753one.iu.edu2">Childcare fees: IU Southeast</option>
                                                <option label="Chronicle of Higher Education" value="string:20150416T091244264one.iu.edu9">Chronicle of Higher Education</option>
                                                <option label="Citizenship Verification" value="string:20131015T045208500one.iu.edu3">Citizenship Verification</option>
                                                <option label="Class Registration" value="string:20130909T020005424test.uisapp2.iu.edu1">Class Registration</option>
                                                <option label="Classifieds" value="string:20140207T042410444one.iu.edu1">Classifieds</option>
                                                <option label="Classroom Database: IUPUI Indianapolis" value="string:20161110T095011301one.iu.edu5">Classroom Database: IUPUI Indianapolis</option>
                                                <option label="Classroom Technology Services: IU Bloomington" value="string:20161110T094439125one.iu.edu0">Classroom Technology Services: IU Bloomington</option>
                                                <option label="Classroom Technology Services: IUPUI Indianapolis" value="string:20161110T094858425one.iu.edu4">Classroom Technology Services: IUPUI Indianapolis</option>
                                                <option label="Classrooms: IUPUI Indianapolis" value="string:20140918T011155037one.iu.edu2">Classrooms: IUPUI Indianapolis</option>
                                                <option label="Classrooms: IU Bloomington" value="string:20140918T010936077one.iu.edu1">Classrooms: IU Bloomington</option>
                                                <option label="Clery Fire Reporting (FireReportingInfo)" value="string:20161122T110008986one.iu.edu13">Clery Fire Reporting (FireReportingInfo)</option>
                                                <option label="Clothing Closet: IUPUI Indianapolis" value="string:20170313T044746811one.iu.edu14">Clothing Closet: IUPUI Indianapolis</option>
                                                <option label="Cloud Storage" value="string:20131015T035903951one.iu.edu1">Cloud Storage</option>
                                                <option label="Code of conduct" value="string:20140403T030453462one.iu.edu1">Code of conduct</option>
                                                <option label="Collaborative Institutional Training Initiative (CITI)" value="string:20150402T035114506one.iu.edu7">Collaborative Institutional Training Initiative (CITI)</option>
                                                <option label="Collaboratory: IUPUI Indianapolis" value="string:20170731T024444425one.iu.edu2">Collaboratory: IUPUI Indianapolis</option>
                                                <option label="Commitment Tracking System (CTS)" value="string:20170807T022604397one.iu.edu0">Commitment Tracking System (CTS)</option>
                                                <option label="Compass Admin" value="string:20140708T014214879one.iu.edu1">Compass Admin</option>
                                                <option label="Computation" value="string:20150122T103619741one.iu.edu5">Computation</option>
                                                <option label="Conference Accounts" value="string:20140326T114153211one.iu.edu4">Conference Accounts</option>
                                                <option label="Confluence" value="string:20140320T020852396one.iu.edu2">Confluence</option>
                                                <option label="Connect to Help - 211: IUPUI Indianapolis" value="string:20170209T101655115one.iu.edu0">Connect to Help - 211: IUPUI Indianapolis</option>
                                                <option label="Consolidated Business Intelligence (CBI)" value="string:20140528T120422585one.iu.edu1">Consolidated Business Intelligence (CBI)</option>
                                                <option label="Construction Alerts: IU Bloomington" value="string:20160825T042425881one.iu.edu0">Construction Alerts: IU Bloomington</option>
                                                <option label="Consultation for Visualization, Interaction, and Advanced Media Production" value="string:20150122T103847052one.iu.edu6">Consultation for Visualization, Interaction, and Advanced Media Production</option>
                                                <option label="Consulting for Supercomputing" value="string:20150122T104035023one.iu.edu7">Consulting for Supercomputing</option>
                                                <option label="Counseling and Psychological Services (CAPS): IUPUI Indianapolis" value="string:20170317T094636864one.iu.edu42">Counseling and Psychological Services (CAPS): IUPUI Indianapolis</option>
                                                <option label="Counseling and Psychological Services (CAPS)" value="string:20161115T110647762one.iu.edu4">Counseling and Psychological Services (CAPS)</option>
                                                <option label="Course Browser: IU Bloomington" value="string:20131023T025117591one.iu.edu5">Course Browser: IU Bloomington</option>
                                                <option label="Course Bulletin Descriptions and Academic Bulletin: IU Bloomington" value="string:20150422T124711586one.iu.edu4">Course Bulletin Descriptions and Academic Bulletin: IU Bloomington</option>
                                                <option label="Course Bulletin Descriptions and Academic Bulletin: IU Southeast" value="string:20150423T102244602one.iu.edu6">Course Bulletin Descriptions and Academic Bulletin: IU Southeast</option>
                                                <option label="Course Bulletin Descriptions and Academic Bulletin: IU Northwest" value="string:20150423T101944462one.iu.edu4">Course Bulletin Descriptions and Academic Bulletin: IU Northwest</option>
                                                <option label="Course Bulletin Descriptions and Academic Bulletin: IU East" value="string:20150423T101405692one.iu.edu1">Course Bulletin Descriptions and Academic Bulletin: IU East</option>
                                                <option label="Course Bulletin Descriptions and Academic Bulletin: IU South Bend" value="string:20150423T102114908one.iu.edu5">Course Bulletin Descriptions and Academic Bulletin: IU South Bend</option>
                                                <option label="Course Bulletin Descriptions and Academic Bulletin: IUPUI Indianapolis, IUPUC Columbus" value="string:20150423T101656164one.iu.edu2">Course Bulletin Descriptions and Academic Bulletin: IUPUI Indianapolis, IUPUC Columbus</option>
                                                <option label="Course Descriptions and Academic Bulletin: IU Kokomo" value="string:20150423T101818345one.iu.edu3">Course Descriptions and Academic Bulletin: IU Kokomo</option>
                                                <option label="Course History" value="string:20130926T0242205921-test.iu.edu1">Course History</option>
                                                <option label="Course Questionnaire Data Manager (CQDM)" value="string:20170503T044551902one.iu.edu0">Course Questionnaire Data Manager (CQDM)</option>
                                                <option label="Course-Specific Research Guides: IU Bloomington" value="string:20160411T081725381one.iu.edu2">Course-Specific Research Guides: IU Bloomington</option>
                                                <option label="Courses (Canvas)" value="string:20140808T115935706one.iu.edu7">Courses (Canvas)</option>
                                                <option label="Create Additional Accounts" value="string:20140326T112101435one.iu.edu1">Create Additional Accounts</option>
                                                <option label="Create an IU Videoconference Room (Bridge)" value="string:20160328T113756207one.iu.edu1">Create an IU Videoconference Room (Bridge)</option>
                                                <option label="Create Cash Receipt" value="string:20150331T121927356one.iu.edu4">Create Cash Receipt</option>
                                                <option label="Create My First IU Account" value="string:20150511T010513948one.iu.edu1">Create My First IU Account</option>
                                                <option label="Create Templates (Administrative) (eSpecial Credit)" value="string:20160128T090716503one.iu.edu1">Create Templates (Administrative) (eSpecial Credit)</option>
                                                <option label="Credit Transfer Service: IU Bloomington" value="string:20131018T032803486one.iu.edu1">Credit Transfer Service: IU Bloomington</option>
                                                <option label="Crimson Advancement System" value="string:20150925T093634749one.iu.edu8">Crimson Advancement System</option>
                                                <option label="CRM (Salesforce)" value="string:20160301T032530712one.iu.edu0">CRM (Salesforce)</option>
                                                <option label="CRM (Talisma)" value="string:20140502T094405103one.iu.edu6">CRM (Talisma)</option>
                                                <option label="CTL Activity Journal" value="string:20170223T091509634one.iu.edu0">CTL Activity Journal</option>
                                                <option label="Cyberinfrastructure for Digital Humanities" value="string:20150122T104209032one.iu.edu8">Cyberinfrastructure for Digital Humanities</option>
                                                <option label="Data Capacitor II" value="string:20150122T104509101one.iu.edu9">Data Capacitor II</option>
                                                <option label="Data Capacitor Wide-area Network" value="string:20150122T104635546one.iu.edu10">Data Capacitor Wide-area Network</option>
                                                <option label="Data Center Operations" value="string:20150902T123450056one.iu.edu1">Data Center Operations</option>
                                                <option label="Data Center Proxy" value="string:20160729T011437560one.iu.edu4">Data Center Proxy</option>
                                                <option label="Data Discovery Tool for Identity Finder" value="string:20170626T120117925one.iu.edu1">Data Discovery Tool for Identity Finder</option>
                                                <option label="Data Storage" value="string:20150122T104822814one.iu.edu11">Data Storage</option>
                                                <option label="Data to Insight Center" value="string:20150415T111543277one.iu.edu9">Data to Insight Center</option>
                                                <option label="Data Use Tutorial (HRMS)" value="string:20150810T015109065one.iu.edu3">Data Use Tutorial (HRMS)</option>
                                                <option label="Decision Support: Reports (ds.iu.edu)" value="string:20150304T123344019one.iu.edu4">Decision Support: Reports (ds.iu.edu)</option>
                                                <option label="Degree Map Search (Login Required) (iGPS)" value="string:20150828T124949370one.iu.edu12">Degree Map Search (Login Required) (iGPS)</option>
                                                <option label="Degree Map Search (Public) (iGPS)" value="string:20141030T052222800one.iu.edu1">Degree Map Search (Public) (iGPS)</option>
                                                <option label="Degree Requirements" value="string:20130906T073313669test.uisapp2.iu.edu2">Degree Requirements</option>
                                                <option label="Dell Store for IU" value="string:20140808T102029225one.iu.edu3">Dell Store for IU</option>
                                                <option label="Dental Clinics: IUPUI Indianapolis" value="string:20170313T044031648one.iu.edu10">Dental Clinics: IUPUI Indianapolis</option>
                                                <option label="Design Request (RFS)" value="string:20150702T101252583one.iu.edu5">Design Request (RFS)</option>
                                                <option label="DeviceNet" value="string:20160729T123824305one.iu.edu0">DeviceNet</option>
                                                <option label="Digital Humanities Cyberinfrastructure Consulting" value="string:20150122T105206297one.iu.edu12">Digital Humanities Cyberinfrastructure Consulting</option>
                                                <option label="Digital Humanities Cyberinfrastructure Software Support" value="string:20150122T105831293one.iu.edu13">Digital Humanities Cyberinfrastructure Software Support</option>
                                                <option label="Digital Measures - Activity Insight (DM Activity Insight)" value="string:20160722T034030473one.iu.edu0">Digital Measures - Activity Insight (DM Activity Insight)</option>
                                                <option label="DIRDEP Bank Reject" value="string:20170328T114440445one.iu.edu0">DIRDEP Bank Reject</option>
                                                <option label="Direct Deposit of Bursar Refunds" value="string:20130930T0506513431-test.iu.edu3">Direct Deposit of Bursar Refunds</option>
                                                <option label="Disabilities Help: IUPUI Indianapolis" value="string:20170314T044224333one.iu.edu6">Disabilities Help: IUPUI Indianapolis</option>
                                                <option label="Disability - Deaf Resources: IUPUI Indianapolis" value="string:20170314T044757513one.iu.edu8">Disability - Deaf Resources: IUPUI Indianapolis</option>
                                                <option label="Disbursement Voucher (DV) (KFS)" value="string:20170125T030447043one.iu.edu10">Disbursement Voucher (DV) (KFS)</option>
                                                <option label="Disbursement Voucher Supporting Documentation Upload" value="string:20151028T102005232one.iu.edu3">Disbursement Voucher Supporting Documentation Upload</option>
                                                <option label="Distributed Schedule of Classes (DSOC) (SIS)" value="string:20160225T011838907one.iu.edu1">Distributed Schedule of Classes (DSOC) (SIS)</option>
                                                <option label="Distribution of Income and Expense (DI) (KFS)" value="string:20170125T023142738one.iu.edu4">Distribution of Income and Expense (DI) (KFS)</option>
                                                <option label="Diversi-Fi for Diversity, Equity, and Multicultural Affairs (DEMA DiversiFi)" value="string:20160908T023237727one.iu.edu1">Diversi-Fi for Diversity, Equity, and Multicultural Affairs (DEMA DiversiFi)</option>
                                                <option label="Division of Student Affairs: IUPUI Indianapolis" value="string:20160511T025800364one.iu.edu0">Division of Student Affairs: IUPUI Indianapolis</option>
                                                <option label="Document Search (Kuali Rice)" value="string:20140811T095241799one.iu.edu1">Document Search (Kuali Rice)</option>
                                                <option label="Document Service Center" value="string:20151009T033921309one.iu.edu1">Document Service Center</option>
                                                <option label="Dorothy J. Wiekamp Educational Resource Commons: IU South Bend" value="string:20150903T103107598one.iu.edu3">Dorothy J. Wiekamp Educational Resource Commons: IU South Bend</option>
                                                <option label="Driver's License Check (Adjudication)" value="string:20161021T015003772one.iu.edu0">Driver's License Check (Adjudication)</option>
                                                <option label="Drones (UAS)" value="string:20161121T104924573one.iu.edu0">Drones (UAS)</option>
                                                <option label="Drop or Add Classes (through 1st week of classes)" value="string:20130909T023837734test.uisapp2.iu.edu3">Drop or Add Classes (through 1st week of classes)</option>
                                                <option label="DSS Schedule Status (IUIE)" value="string:20150416T091746950one.iu.edu11">DSS Schedule Status (IUIE)</option>
                                                <option label="Duo Token Activation" value="string:20150302T014514922one.iu.edu1">Duo Token Activation</option>
                                                <option label="Duplicate Tax Form Request" value="string:20140410T090500193one.iu.edu1">Duplicate Tax Form Request</option>
                                                <option label="E Training" value="string:20140310T020231744one.iu.edu1">E Training</option>
                                                <option label="e-Builder" value="string:20150702T101526971one.iu.edu6">e-Builder</option>
                                                <option label="EAB SSC Campus: IUPUI Indianapolis" value="string:20170511T042752412one.iu.edu2">EAB SSC Campus: IUPUI Indianapolis</option>
                                                <option label="eApp Administrative Center" value="string:20141215T032015395one.iu.edu1">eApp Administrative Center</option>
                                                <option label="eDocLite (Kuali Rice)" value="string:20150203T113616297one.iu.edu6">eDocLite (Kuali Rice)</option>
                                                <option label="eDossier System" value="string:20140910T123603280one.iu.edu3">eDossier System</option>
                                                <option label="Education and Outreach" value="string:20150122T105954469one.iu.edu14">Education and Outreach</option>
                                                <option label="Education, Outreach and Training for Visualization, Interaction, and Advanced Media" value="string:20150122T110633179one.iu.edu4">Education, Outreach and Training for Visualization, Interaction, and Advanced Media</option>
                                                <option label="Education, Outreach, and Training Highlights of UITS Research Technologies" value="string:20150122T110759693one.iu.edu5">Education, Outreach, and Training Highlights of UITS Research Technologies</option>
                                                <option label="Egencia (formerly Orbitz for Business)" value="string:20140501T125642405one.iu.edu1">Egencia (formerly Orbitz for Business)</option>
                                                <option label="Email Management" value="string:20140326T114618614one.iu.edu5">Email Management</option>
                                                <option label="Emergency 911 Acknowledgement Statement" value="string:20161020T115918636one.iu.edu3">Emergency 911 Acknowledgement Statement</option>
                                                <option label="Emergency Contact Phone Numbers (Protect.IU)" value="string:20140818T082106548one.iu.edu6">Emergency Contact Phone Numbers (Protect.IU)</option>
                                                <option label="Emergency Notification Settings (IU-Notify)" value="string:20130930T0408355971-test.iu.edu1">Emergency Notification Settings (IU-Notify)</option>
                                                <option label="Employee Active Jobs Lookup" value="string:20150810T042915183one.iu.edu1">Employee Active Jobs Lookup</option>
                                                <option label="Employee Center" value="string:20150310T025128679one.iu.edu5">Employee Center</option>
                                                <option label="Employee Information" value="string:20140604T012725095one.iu.edu15">Employee Information</option>
                                                <option label="Employment Literacy: IUPUI Indianapolis" value="string:20170314T043113123one.iu.edu2">Employment Literacy: IUPUI Indianapolis</option>
                                                <option label="Endowment information (ETA-Web)" value="string:20131026T040717683one.iu.edu4">Endowment information (ETA-Web)</option>
                                                <option label="Energy Matters: IU Bloomington" value="string:20140612T115601890one.iu.edu3">Energy Matters: IU Bloomington</option>
                                                <option label="Engage (Campus Labs Engage): IUPUC Columbus" value="string:20150820T102514646one.iu.edu1">Engage (Campus Labs Engage): IUPUC Columbus</option>
                                                <option label="Enrollment Shopping Cart" value="string:20130925T0347199901-test.iu.edu4">Enrollment Shopping Cart</option>
                                                <option label="Enrollment Verification Certificate: IU Southeast" value="string:20131018T123925970one.iu.edu8">Enrollment Verification Certificate: IU Southeast</option>
                                                <option label="Enrollment Verification Certificate: IU South Bend" value="string:20131018T123816219one.iu.edu7">Enrollment Verification Certificate: IU South Bend</option>
                                                <option label="Enrollment Verification Certificate: IU East" value="string:20131018T123309167one.iu.edu4">Enrollment Verification Certificate: IU East</option>
                                                <option label="Enrollment Verification Certificate: IU Bloomington" value="string:20131018T115215403one.iu.edu1">Enrollment Verification Certificate: IU Bloomington</option>
                                                <option label="Enrollment Verification Certificate: IU Northwest" value="string:20131018T123610181one.iu.edu6">Enrollment Verification Certificate: IU Northwest</option>
                                                <option label="Enrollment Verification Certificate: IUPUI Indianapolis" value="string:20131018T123119748one.iu.edu3">Enrollment Verification Certificate: IUPUI Indianapolis</option>
                                                <option label="Enrollment Verification Certificate: IUPUC Columbus" value="string:20131018T122854971one.iu.edu2">Enrollment Verification Certificate: IUPUC Columbus</option>
                                                <option label="Enrollment Verification Certificate: IU Kokomo" value="string:20131018T123433415one.iu.edu5">Enrollment Verification Certificate: IU Kokomo</option>
                                                <option label="Enterprise Application Compliance" value="string:20160617T021336135one.iu.edu2">Enterprise Application Compliance</option>
                                                <option label="Enterprise Information Governance (EIG)" value="string:20150811T045950405one.iu.edu1">Enterprise Information Governance (EIG)</option>
                                                <option label="eProcure (Facility Operations): IU Bloomington" value="string:20150521T103136455one.iu.edu1">eProcure (Facility Operations): IU Bloomington</option>
                                                <option label="eTranscript Request (Administrative)" value="string:20150331T122507560one.iu.edu6">eTranscript Request (Administrative)</option>
                                                <option label="eTranscript Request (Former Students)" value="string:20141229T012955954one.iu.edu1">eTranscript Request (Former Students)</option>
                                                <option label="eTranscript Request (Recent Students)" value="string:20141229T013357335one.iu.edu2">eTranscript Request (Recent Students)</option>
                                                <option label="Event Planning: IU Kokomo" value="string:20160420T101158215one.iu.edu0">Event Planning: IU Kokomo</option>
                                                <option label="Event Scheduler: IU Northwest" value="string:20150513T101210824one.iu.edu1">Event Scheduler: IU Northwest</option>
                                                <option label="Event Scheduler (Admin): IU Northwest" value="string:20150703T064017404one.iu.edu1">Event Scheduler (Admin): IU Northwest</option>
                                                <option label="Exchange (Email)" value="string:20131015T041949076one.iu.edu1">Exchange (Email)</option>
                                                <option label="Executive Degree Programs: IU Bloomington" value="string:20160121T094054677one.iu.edu2">Executive Degree Programs: IU Bloomington</option>
                                                <option label="Executive Reservations: IU Bloomington" value="string:20160126T113012707one.iu.edu1">Executive Reservations: IU Bloomington</option>
                                                <option label="Explore Programs (University Division): IU Bloomington" value="string:20160603T084235142one.iu.edu3">Explore Programs (University Division): IU Bloomington</option>
                                                <option label="Extinguisher Information - IU Departments (Show Extinguishers)" value="string:20161122T092459439one.iu.edu9">Extinguisher Information - IU Departments (Show Extinguishers)</option>
                                                <option label="Extinguisher Information - Public (Unit Inspection Report)" value="string:20161122T092915016one.iu.edu11">Extinguisher Information - Public (Unit Inspection Report)</option>
                                                <option label="Facilities Information Management System (FIMS)" value="string:20150702T023726211one.iu.edu8">Facilities Information Management System (FIMS)</option>
                                                <option label="Faculty Center (SIS)" value="string:20140617T094403456one.iu.edu13">Faculty Center (SIS)</option>
                                                <option label="Faculty Funding for International Activities" value="string:20161123T073458612one.iu.edu16">Faculty Funding for International Activities</option>
                                                <option label="Fax service" value="string:20140411T014117549one.iu.edu1">Fax service</option>
                                                <option label="Federal Aid Application (FAFSA)" value="string:20150827T011846342one.iu.edu1">Federal Aid Application (FAFSA)</option>
                                                <option label="Federal W-4" value="string:20140603T031054754one.iu.edu2">Federal W-4</option>
                                                <option label="FERPA Information" value="string:20150810T013849327one.iu.edu2">FERPA Information</option>
                                                <option label="FERPA Tutorial" value="string:20160928T125801514one.iu.edu1">FERPA Tutorial</option>
                                                <option label="Files (Canvas)" value="string:20140808T120110730one.iu.edu8">Files (Canvas)</option>
                                                <option label="Final Exams: IU Bloomington" value="string:20140422T112504427one.iu.edu3">Final Exams: IU Bloomington</option>
                                                <option label="Final Exams: IU Northwest" value="string:20140501T025614279one.iu.edu2">Final Exams: IU Northwest</option>
                                                <option label="Final Exams: IU Southeast" value="string:20140501T024901165one.iu.edu1">Final Exams: IU Southeast</option>
                                                <option label="Financial Administration Training Catalog" value="string:20150918T123319872one.iu.edu1">Financial Administration Training Catalog</option>
                                                <option label="Financial Aid Assistance: IU South Bend" value="string:20150824T041655868one.iu.edu6">Financial Aid Assistance: IU South Bend</option>
                                                <option label="Financial Aid Assistance: IU Southeast" value="string:20150824T041520815one.iu.edu5">Financial Aid Assistance: IU Southeast</option>
                                                <option label="Financial Aid Assistance: IU East" value="string:20150824T041358798one.iu.edu4">Financial Aid Assistance: IU East</option>
                                                <option label="Financial Aid Assistance: IU Northwest" value="string:20150824T041819788one.iu.edu7">Financial Aid Assistance: IU Northwest</option>
                                                <option label="Financial Aid Assistance: IU Bloomington" value="string:20131206T010444232one.iu.edu5">Financial Aid Assistance: IU Bloomington</option>
                                                <option label="Financial Aid Assistance: IUPUI Indianapolis" value="string:20150824T041023525one.iu.edu2">Financial Aid Assistance: IUPUI Indianapolis</option>
                                                <option label="Financial Aid Assistance: IUPUC Columbus" value="string:20150824T040756930one.iu.edu1">Financial Aid Assistance: IUPUC Columbus</option>
                                                <option label="Financial Aid Assistance: IU Kokomo" value="string:20150824T041235882one.iu.edu3">Financial Aid Assistance: IU Kokomo</option>
                                                <option label="Financial Aid Disbursement: IUPUI Indianapolis" value="string:20170221T054007727one.iu.edu5">Financial Aid Disbursement: IUPUI Indianapolis</option>
                                                <option label="Financial Management Services (FMS)" value="string:20150729T093501259one.iu.edu1">Financial Management Services (FMS)</option>
                                                <option label="First Aid - CPR Classes" value="string:20161121T115612456one.iu.edu8">First Aid - CPR Classes</option>
                                                <option label="FLAGS Early Alerts (SIS Student Center)" value="string:20161208T015504090one.iu.edu8">FLAGS Early Alerts (SIS Student Center)</option>
                                                <option label="FLAGS Student Performance Roster (SIS)" value="string:20161208T113433635one.iu.edu6">FLAGS Student Performance Roster (SIS)</option>
                                                <option label="Flex Bucks Plan: IU Bloomington" value="string:20131007T0918361741-test.iu.edu6">Flex Bucks Plan: IU Bloomington</option>
                                                <option label="Floorplans" value="string:20150625T092148617one.iu.edu7">Floorplans</option>
                                                <option label="Floorplans (Administrative)" value="string:20150702T100333637one.iu.edu1">Floorplans (Administrative)</option>
                                                <option label="FMS Support Form (Web Form)" value="string:20160826T065706928one.iu.edu4">FMS Support Form (Web Form)</option>
                                                <option label="FNIS - International Tax Questionnaire (FMS Website: University Tax Services)" value="string:20160930T015952404one.iu.edu14">FNIS - International Tax Questionnaire (FMS Website: University Tax Services)</option>
                                                <option label="Food Pantry - St. Vincent Depaul: IUPUI Indianapolis" value="string:20170313T045542309one.iu.edu18">Food Pantry - St. Vincent Depaul: IUPUI Indianapolis</option>
                                                <option label="Food Pantry and Clothing Closet: IUPUI Indianapolis" value="string:20170313T045133828one.iu.edu16">Food Pantry and Clothing Closet: IUPUI Indianapolis</option>
                                                <option label="Food Services Form: IU Kokomo" value="string:20170120T020903245one.iu.edu0">Food Services Form: IU Kokomo</option>
                                                <option label="FootPrints" value="string:20140422T025933599one.iu.edu1">FootPrints</option>
                                                <option label="Foreign language placement exam: IU Bloomington" value="string:20131204T074455688one.iu.edu2">Foreign language placement exam: IU Bloomington</option>
                                                <option label="Foreign Travel - Restricted Countries (ForeignTravel)" value="string:20161121T120115328one.iu.edu10">Foreign Travel - Restricted Countries (ForeignTravel)</option>
                                                <option label="Form I-9 E-verify Training" value="string:20170817T024540947one.iu.edu1">Form I-9 E-verify Training</option>
                                                <option label="Franklin D. Schurz Library: IU South Bend" value="string:20150903T102933303one.iu.edu2">Franklin D. Schurz Library: IU South Bend</option>
                                                <option label="FREE Courses: IUPUI Indianapolis" value="string:20170313T051539033one.iu.edu26">FREE Courses: IUPUI Indianapolis</option>
                                                <option label="Free Dental Care - Indiana: IUPUI Indianapolis" value="string:20170313T044440272one.iu.edu12">Free Dental Care - Indiana: IUPUI Indianapolis</option>
                                                <option label="Freshman Admission: IU Bloomington" value="string:20130907T024116259test.uisapp2.iu.edu8">Freshman Admission: IU Bloomington</option>
                                                <option label="Full Text Online Journals: Search or Browse: IU Bloomington" value="string:20160411T081341405one.iu.edu1">Full Text Online Journals: Search or Browse: IU Bloomington</option>
                                                <option label="Furniture Request (RFS)" value="string:20160308T100717950one.iu.edu0">Furniture Request (RFS)</option>
                                                <option label="FY(Me) To-Do List: IU Bloomington" value="string:20140428T092715900one.iu.edu1">FY(Me) To-Do List: IU Bloomington</option>
                                                <option label="General Error Correction (GEC) (KFS)" value="string:20161129T044638443one.iu.edu1">General Error Correction (GEC) (KFS)</option>
                                                <option label="Geographic Information Systems (GIS) Consulting Services" value="string:20150122T110944384one.iu.edu6">Geographic Information Systems (GIS) Consulting Services</option>
                                                <option label="Geographic Information Systems (GIS) software" value="string:20150122T111135952one.iu.edu7">Geographic Information Systems (GIS) software</option>
                                                <option label="GitHub Enterprise" value="string:20140327T031954365one.iu.edu2">GitHub Enterprise</option>
                                                <option label="Google@IU" value="string:20170125T124955509one.iu.edu0">Google@IU</option>
                                                <option label="Grade Distribution: IU Bloomington" value="string:20131018T124922647one.iu.edu9">Grade Distribution: IU Bloomington</option>
                                                <option label="Grades (Canvas)" value="string:20140808T120310458one.iu.edu9">Grades (Canvas)</option>
                                                <option label="GradesFirst - IU Athletics: IU Bloomington" value="string:20170324T041117865one.iu.edu2">GradesFirst - IU Athletics: IU Bloomington</option>
                                                <option label="Graduate School Awards and Fellowships (Canvas): IU Bloomington" value="string:20150929T122640909one.iu.edu1">Graduate School Awards and Fellowships (Canvas): IU Bloomington</option>
                                                <option label="Graduate Student Funding for International Activities" value="string:20161123T074709850one.iu.edu17">Graduate Student Funding for International Activities</option>
                                                <option label="Grand Challenges - Vice President for Research" value="string:20151021T104436918one.iu.edu1">Grand Challenges - Vice President for Research</option>
                                                <option label="Grant Support" value="string:20150122T111310890one.iu.edu8">Grant Support</option>
                                                <option label="Grants and Contracts (Kuali Coeus)" value="string:20150428T112123481one.iu.edu1">Grants and Contracts (Kuali Coeus)</option>
                                                <option label="Grenadier Central (Campus Labs Engage): IU Southeast" value="string:20130907T092135776test.uisapp2.iu.edu5">Grenadier Central (Campus Labs Engage): IU Southeast</option>
                                                <option label="Grid Operations Center" value="string:20150122T111427827one.iu.edu9">Grid Operations Center</option>
                                                <option label="Group Accounts" value="string:20140326T115142254one.iu.edu6">Group Accounts</option>
                                                <option label="Guest Accounts" value="string:20130908T030704956test.uisapp2.iu.edu6">Guest Accounts</option>
                                                <option label="Guides and Job Aids (graduate.indiana.edu): IU Bloomington" value="string:20150929T021022804one.iu.edu2">Guides and Job Aids (graduate.indiana.edu): IU Bloomington</option>
                                                <option label="Guides and Job Aids (graduate.iupui.edu): IUPUI Indianapolis" value="string:20151006T103125506one.iu.edu1">Guides and Job Aids (graduate.iupui.edu): IUPUI Indianapolis</option>
                                                <option label="Halogen: IU Bloomington, IUPUI Indianapolis" value="string:20150617T052934102one.iu.edu3">Halogen: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="HathiTrust Research Center" value="string:20150415T111403868one.iu.edu8">HathiTrust Research Center</option>
                                                <option label="Health and Wellness: IUPUI Indianapolis" value="string:20170313T053703571one.iu.edu34">Health and Wellness: IUPUI Indianapolis</option>
                                                <option label="Healthy IU — Your Workplace Wellness Program" value="string:20170227T112019601one.iu.edu2">Healthy IU — Your Workplace Wellness Program</option>
                                                <option label="High Throughput Computing Software Optimization" value="string:20150123T101945386one.iu.edu10">High Throughput Computing Software Optimization</option>
                                                <option label="High Throughput Computing:  Access to Local and National Resources" value="string:20150123T102109433one.iu.edu11">High Throughput Computing:  Access to Local and National Resources</option>
                                                <option label="Hiring Managers (PeopleAdmin)" value="string:20160119T025546657one.iu.edu2">Hiring Managers (PeopleAdmin)</option>
                                                <option label="Homelessness Food and Lodging: IUPUI Indianapolis" value="string:20170313T050032122one.iu.edu20">Homelessness Food and Lodging: IUPUI Indianapolis</option>
                                                <option label="Hot Work Training" value="string:20170307T095521043one.iu.edu5">Hot Work Training</option>
                                                <option label="Housing: IUPUI Indianapolis" value="string:20131016T102208989one.iu.edu1">Housing: IUPUI Indianapolis</option>
                                                <option label="Housing Damage Appeal (Apartment Housing): IU Bloomington" value="string:20150603T022309429one.iu.edu1">Housing Damage Appeal (Apartment Housing): IU Bloomington</option>
                                                <option label="Housing Damage Appeal (Residence Halls): IU Bloomington" value="string:20131007T1032537451-test.iu.edu16">Housing Damage Appeal (Residence Halls): IU Bloomington</option>
                                                <option label="Housing for Incoming Students (New Housing): IU Bloomington" value="string:20131007T0953292681-test.iu.edu11">Housing for Incoming Students (New Housing): IU Bloomington</option>
                                                <option label="Housing For New Student Orientation (FYE Housing): IU Bloomington" value="string:20131007T1023599201-test.iu.edu15">Housing For New Student Orientation (FYE Housing): IU Bloomington</option>
                                                <option label="Housing information (My Housing): IU Bloomington" value="string:20130907T104615282test.uisapp2.iu.edu7">Housing information (My Housing): IU Bloomington</option>
                                                <option label="Housing Mail Services (Mailroom): IU Bloomington" value="string:20131007T0924278431-test.iu.edu7">Housing Mail Services (Mailroom): IU Bloomington</option>
                                                <option label="Housing Occupant Door Access Request Forms (Door Access Gateway): IU Bloomington" value="string:20150817T074126650one.iu.edu1">Housing Occupant Door Access Request Forms (Door Access Gateway): IU Bloomington</option>
                                                <option label="Housing RA or CUE Position (RA/CUE): IU Bloomington" value="string:20131007T0938541771-test.iu.edu9">Housing RA or CUE Position (RA/CUE): IU Bloomington</option>
                                                <option label="How to Request Application Access" value="string:20151020T041103381one.iu.edu1">How to Request Application Access</option>
                                                <option label="HR Today - News You Can Use" value="string:20160218T024042378one.iu.edu0">HR Today - News You Can Use</option>
                                                <option label="HR2020" value="string:20151016T122410477one.iu.edu2">HR2020</option>
                                                <option label="HRMS" value="string:20150318T121552647one.iu.edu1">HRMS</option>
                                                <option label="HSA, TSB &amp; HRA (Nyhart)" value="string:20140506T083649111one.iu.edu1">HSA, TSB &amp; HRA (Nyhart)</option>
                                                <option label="Human Resources Policies" value="string:20160204T012016828one.iu.edu1">Human Resources Policies</option>
                                                <option label="I-BUCKS Meal Plans: IU Bloomington" value="string:20131007T0830025641-test.iu.edu1">I-BUCKS Meal Plans: IU Bloomington</option>
                                                <option label="ID Billing (KFS)" value="string:20150521T020108058one.iu.edu41">ID Billing (KFS)</option>
                                                <option label="idsnews.com: IU Bloomington" value="string:20140123T015728605one.iu.edu1">idsnews.com: IU Bloomington</option>
                                                <option label="iGPS Inbox: IU Bloomington" value="string:20160104T084922267one.iu.edu1">iGPS Inbox: IU Bloomington</option>
                                                <option label="iGPS Inbox Sender: IU Bloomington" value="string:20160104T085402457one.iu.edu2">iGPS Inbox Sender: IU Bloomington</option>
                                                <option label="iGPS Plan (Student)" value="string:20131002T1133025021-test.iu.edu3">iGPS Plan (Student)</option>
                                                <option label="ILLiad (Interlibrary Loan): IU Northwest" value="string:20150903T105005790one.iu.edu6">ILLiad (Interlibrary Loan): IU Northwest</option>
                                                <option label="Imail (Email)" value="string:20131002T1053444131-test.iu.edu1">Imail (Email)</option>
                                                <option label="Immunization Compliance (SIS)" value="string:20160302T113611482one.iu.edu4">Immunization Compliance (SIS)</option>
                                                <option label="Immunization Records (Administrative) (SIS)" value="string:20160302T112110774one.iu.edu3">Immunization Records (Administrative) (SIS)</option>
                                                <option label="Inbox (Canvas)" value="string:20140808T120435198one.iu.edu10">Inbox (Canvas)</option>
                                                <option label="Incident Reporting Form" value="string:20150331T065539541one.iu.edu1">Incident Reporting Form</option>
                                                <option label="Indiana Clinical and Translational Science Institute (CTSI)" value="string:20150123T102256354one.iu.edu12">Indiana Clinical and Translational Science Institute (CTSI)</option>
                                                <option label="Indiana Hoosiers Gameday Live" value="string:20140812T053732720one.iu.edu18">Indiana Hoosiers Gameday Live</option>
                                                <option label="Indiana Spatial Data Portal" value="string:20150123T102438511one.iu.edu13">Indiana Spatial Data Portal</option>
                                                <option label="Indiana University Cinema: IU Bloomington" value="string:20150702T024659356one.iu.edu9">Indiana University Cinema: IU Bloomington</option>
                                                <option label="Indiana University Faculty and Staff Salary Listing" value="string:20151028T102500973one.iu.edu5">Indiana University Faculty and Staff Salary Listing</option>
                                                <option label="Indiana's Private Cloud" value="string:20151103T034401492one.iu.edu3">Indiana's Private Cloud</option>
                                                <option label="Indianapolis Community Clinics: IUPUI Indianapolis" value="string:20170313T043749036one.iu.edu8">Indianapolis Community Clinics: IUPUI Indianapolis</option>
                                                <option label="Initiate New Course/Course Change Request (CARMIn)" value="string:20150326T023416580one.iu.edu1">Initiate New Course/Course Change Request (CARMIn)</option>
                                                <option label="Inside IU" value="string:20160923T015419182one.iu.edu1">Inside IU</option>
                                                <option label="Inside IU Bloomington: IU Bloomington" value="string:20160923T015720213one.iu.edu3">Inside IU Bloomington: IU Bloomington</option>
                                                <option label="Inside IUPUI: IUPUI Indianapolis" value="string:20160923T015946840one.iu.edu5">Inside IUPUI: IUPUI Indianapolis</option>
                                                <option label="Intent to Enroll - Acceptance: IU Northwest" value="string:20150814T030935809one.iu.edu9">Intent to Enroll - Acceptance: IU Northwest</option>
                                                <option label="Intent to Enroll - Decline: IU Northwest" value="string:20150814T034014331one.iu.edu10">Intent to Enroll - Decline: IU Northwest</option>
                                                <option label="Interactive World Map" value="string:20161123T080303916one.iu.edu19">Interactive World Map</option>
                                                <option label="Intercampus transfer" value="string:20130924T0249570691-test.iu.edu3">Intercampus transfer</option>
                                                <option label="Interlibrary Loan (ILL) &amp; Document Delivery: IU Bloomington" value="string:20160225T081909657one.iu.edu0">Interlibrary Loan (ILL) &amp; Document Delivery: IU Bloomington</option>
                                                <option label="Internal Billing (IB) (KFS)" value="string:20170125T024143756one.iu.edu8">Internal Billing (IB) (KFS)</option>
                                                <option label="International Student Services: IU Kokomo" value="string:20151130T021925151one.iu.edu1">International Student Services: IU Kokomo</option>
                                                <option label="Interview Request (Academic Position Search)" value="string:20160613T094721597one.iu.edu1">Interview Request (Academic Position Search)</option>
                                                <option label="IQ-Force Visualization Resource: IUPUI Indianapolis" value="string:20150123T102601464one.iu.edu14">IQ-Force Visualization Resource: IUPUI Indianapolis</option>
                                                <option label="IQ-Station Visualization Resource: IU Bloomington, IUPUI Indianapolis" value="string:20150123T102740132one.iu.edu15">IQ-Station Visualization Resource: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="IQ-Table Visualization Resource: IU Bloomington, IUPUI Indianapolis" value="string:20150123T102916771one.iu.edu16">IQ-Table Visualization Resource: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="IQ-Tilt Visualization Resource: IU Bloomington, IUPUI Indianapolis" value="string:20150123T103100321one.iu.edu17">IQ-Tilt Visualization Resource: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="IQ-Wall Visualization Resource: IU Bloomington" value="string:20150123T103221516one.iu.edu18">IQ-Wall Visualization Resource: IU Bloomington</option>
                                                <option label="iStart" value="string:20140808T021735508one.iu.edu4">iStart</option>
                                                <option label="IT News" value="string:20151019T122012663one.iu.edu1">IT News</option>
                                                <option label="IT Pro Videos (ITCP Kaltura Page)" value="string:20170517T125832854one.iu.edu7">IT Pro Videos (ITCP Kaltura Page)</option>
                                                <option label="IT Pros Discussion Forum (Google Groups)" value="string:20170517T010514318one.iu.edu9">IT Pros Discussion Forum (Google Groups)</option>
                                                <option label="IT Service Request: IU Southeast" value="string:20150419T090900589one.iu.edu2">IT Service Request: IU Southeast</option>
                                                <option label="IT Training Center: IU Kokomo" value="string:20140512T030033316one.iu.edu1">IT Training Center: IU Kokomo</option>
                                                <option label="IT Training Certificate Series" value="string:20140502T112349954one.iu.edu3">IT Training Certificate Series</option>
                                                <option label="IT Training Materials" value="string:20140502T111755055one.iu.edu2">IT Training Materials</option>
                                                <option label="IT Training Sessions" value="string:20140502T090644448one.iu.edu4">IT Training Sessions</option>
                                                <option label="IT Training Tips" value="string:20140507T115027152one.iu.edu5">IT Training Tips</option>
                                                <option label="ITHelpLive (Support Center)" value="string:20141222T104946519one.iu.edu1">ITHelpLive (Support Center)</option>
                                                <option label="IU 457(b) Supplemental Retirement Plan for All Employees" value="string:20160323T113520184one.iu.edu0">IU 457(b) Supplemental Retirement Plan for All Employees</option>
                                                <option label="IU Address Book" value="string:20131210T102207700one.iu.edu1">IU Address Book</option>
                                                <option label="IU Advancement IQ" value="string:20150224T124031405one.iu.edu1">IU Advancement IQ</option>
                                                <option label="IU Athletics" value="string:20150107T010111354one.iu.edu1">IU Athletics</option>
                                                <option label="IU Bookstore: IU East" value="string:20150422T125611436one.iu.edu8">IU Bookstore: IU East</option>
                                                <option label="IU Bookstore: IUPUC Columbus" value="string:20160107T011103807one.iu.edu1">IU Bookstore: IUPUC Columbus</option>
                                                <option label="IU Bookstore: IU Southeast" value="string:20140808T094104764one.iu.edu5">IU Bookstore: IU Southeast</option>
                                                <option label="IU Bookstore: IU Bloomington" value="string:20150422T125223104one.iu.edu5">IU Bookstore: IU Bloomington</option>
                                                <option label="IU Bookstore: IU Kokomo" value="string:20150422T125502655one.iu.edu7">IU Bookstore: IU Kokomo</option>
                                                <option label="IU Bookstore: IUPUI Indianapolis" value="string:20150422T125352223one.iu.edu6">IU Bookstore: IUPUI Indianapolis</option>
                                                <option label="IU Box Health Request (Box Health Request Form): IU Bloomington, IUPUI Indianapolis" value="string:20170329T100702075one.iu.edu4">IU Box Health Request (Box Health Request Form): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="IU Check Image Request Workflow" value="string:20150918T123518244one.iu.edu2">IU Check Image Request Workflow</option>
                                                <option label="IU Check Status - IUIE Report (Indiana University Information Environment (IUIE))" value="string:20170120T023336139one.iu.edu3">IU Check Status - IUIE Report (Indiana University Information Environment (IUIE))</option>
                                                <option label="IU Check Stop Payment Workflow" value="string:20151028T101804217one.iu.edu2">IU Check Stop Payment Workflow</option>
                                                <option label="IU China Gateway" value="string:20161128T114143188one.iu.edu2">IU China Gateway</option>
                                                <option label="IU Credit Union" value="string:20150430T105231487one.iu.edu1">IU Credit Union</option>
                                                <option label="IU Cyberinfrastructure Gateway" value="string:20150123T103447481one.iu.edu19">IU Cyberinfrastructure Gateway</option>
                                                <option label="IU Cyberinfrastructure Statement for Project Description" value="string:20150123T103604310one.iu.edu20">IU Cyberinfrastructure Statement for Project Description</option>
                                                <option label="IU Data Management Plan" value="string:20150123T103747163one.iu.edu21">IU Data Management Plan</option>
                                                <option label="IU East Library: IU East" value="string:20151014T020045609one.iu.edu3">IU East Library: IU East</option>
                                                <option label="IU Employee Assistance Program (IUEAP)" value="string:20160321T015249589one.iu.edu0">IU Employee Assistance Program (IUEAP)</option>
                                                <option label="IU eTexts Adoption (Coordinator)" value="string:20140910T122549372one.iu.edu1">IU eTexts Adoption (Coordinator)</option>
                                                <option label="IU eTexts Adoption (Faculty)" value="string:20140910T122953680one.iu.edu2">IU eTexts Adoption (Faculty)</option>
                                                <option label="IU eTexts Catalog" value="string:20140909T044148327one.iu.edu1">IU eTexts Catalog</option>
                                                <option label="IU Europe Gateway" value="string:20161129T064851047one.iu.edu7">IU Europe Gateway</option>
                                                <option label="IU Expand" value="string:20170226T010304742one.iu.edu0">IU Expand</option>
                                                <option label="IU Facilities Statement" value="string:20150123T103930882one.iu.edu22">IU Facilities Statement</option>
                                                <option label="IU Global Gateway Network" value="string:20161129T070225460one.iu.edu11">IU Global Gateway Network</option>
                                                <option label="IU Hotels" value="string:20150421T114518431one.iu.edu1">IU Hotels</option>
                                                <option label="IU Human Resources Training (IU Expand)" value="string:20170127T042341528one.iu.edu1">IU Human Resources Training (IU Expand)</option>
                                                <option label="IU India Gateway" value="string:20161129T065745165one.iu.edu9">IU India Gateway</option>
                                                <option label="IU International Fact Book" value="string:20161123T081107331one.iu.edu20">IU International Fact Book</option>
                                                <option label="IU International Magazine" value="string:20161123T081827799one.iu.edu21">IU International Magazine</option>
                                                <option label="IU Knowledge Base (KB)" value="string:20131025T060920009one.iu.edu2">IU Knowledge Base (KB)</option>
                                                <option label="IU Kokomo Library: IU Kokomo" value="string:20150610T010709956one.iu.edu1">IU Kokomo Library: IU Kokomo</option>
                                                <option label="IU Mobile for Android (GooglePlay)" value="string:20140313T023853058one.iu.edu2">IU Mobile for Android (GooglePlay)</option>
                                                <option label="IU Mobile for IOS (iTunes)" value="string:20140313T025037303one.iu.edu3">IU Mobile for IOS (iTunes)</option>
                                                <option label="IU MoneySmarts Team" value="string:20150316T112111296one.iu.edu2">IU MoneySmarts Team</option>
                                                <option label="IU Newsroom" value="string:20140612T103603923one.iu.edu2">IU Newsroom</option>
                                                <option label="IU Northwest Library: IU Northwest" value="string:20150903T104647751one.iu.edu4">IU Northwest Library: IU Northwest</option>
                                                <option label="IU Peer Coaches (University Division): IU Bloomington" value="string:20150904T043939663one.iu.edu7">IU Peer Coaches (University Division): IU Bloomington</option>
                                                <option label="IU Podcast: Through the Gates" value="string:20160726T093206554one.iu.edu1">IU Podcast: Through the Gates</option>
                                                <option label="IU Print Quota/Credits" value="string:20150610T013301972one.iu.edu4">IU Print Quota/Credits</option>
                                                <option label="IU Ready: IUPUI Indianapolis" value="string:20150331T034154756one.iu.edu2">IU Ready: IUPUI Indianapolis</option>
                                                <option label="IU Ready: IU Kokomo" value="string:20150331T034744320one.iu.edu5">IU Ready: IU Kokomo</option>
                                                <option label="IU Ready: IUPUC Columbus" value="string:20150331T034343670one.iu.edu3">IU Ready: IUPUC Columbus</option>
                                                <option label="IU Ready: IU East" value="string:20150331T034601168one.iu.edu4">IU Ready: IU East</option>
                                                <option label="IU Ready: IU Northwest" value="string:20150331T034937485one.iu.edu6">IU Ready: IU Northwest</option>
                                                <option label="IU Ready: IU South Bend" value="string:20150331T035313998one.iu.edu8">IU Ready: IU South Bend</option>
                                                <option label="IU Ready: IU Bloomington" value="string:20150330T042256271one.iu.edu1">IU Ready: IU Bloomington</option>
                                                <option label="IU Ready: IU Southeast" value="string:20150331T035131884one.iu.edu7">IU Ready: IU Southeast</option>
                                                <option label="IU Real Estate: IU Bloomington" value="string:20141031T121922731one.iu.edu2">IU Real Estate: IU Bloomington</option>
                                                <option label="IU Southeast Library: IU Southeast" value="string:20151014T020218936one.iu.edu4">IU Southeast Library: IU Southeast</option>
                                                <option label="IU Surplus Stores" value="string:20150526T104900201one.iu.edu1">IU Surplus Stores</option>
                                                <option label="IU VPN" value="string:20141219T112059362one.iu.edu1">IU VPN</option>
                                                <option label="IU Worldwide" value="string:20161123T072029026one.iu.edu15">IU Worldwide</option>
                                                <option label="IU-CTO" value="string:20161122T111502817one.iu.edu0">IU-CTO</option>
                                                <option label="IUanyWare" value="string:20131002T1124067051-test.iu.edu2">IUanyWare</option>
                                                <option label="IUB Classroom Database" value="string:20161110T094615510one.iu.edu1">IUB Classroom Database</option>
                                                <option label="IUB Libraries: IU Bloomington" value="string:20140711T055426972one.iu.edu12">IUB Libraries: IU Bloomington</option>
                                                <option label="IUBeginnings reservation: IU Bloomington" value="string:20140425T094650601one.iu.edu3">IUBeginnings reservation: IU Bloomington</option>
                                                <option label="IUEHS Apps Dashboard" value="string:20170526T104644253one.iu.edu0">IUEHS Apps Dashboard</option>
                                                <option label="IUIE" value="string:20151007T010901506one.iu.edu3">IUIE</option>
                                                <option label="IUIE Account View (IUIE)" value="string:20160825T115424741one.iu.edu2">IUIE Account View (IUIE)</option>
                                                <option label="IUIE Registration" value="string:20151007T010648616one.iu.edu2">IUIE Registration</option>
                                                <option label="IUIE Reports" value="string:20131024T023626908one.iu.edu4">IUIE Reports</option>
                                                <option label="IUKLife (Campus Labs Engage): IU Kokomo" value="string:20130907T092014963test.uisapp2.iu.edu4">IUKLife (Campus Labs Engage): IU Kokomo</option>
                                                <option label="IUPUC Library: IUPUC Columbus" value="string:20151014T020816118one.iu.edu5">IUPUC Library: IUPUC Columbus</option>
                                                <option label="IUPUI Athletics: IUPUI Indianapolis" value="string:20140821T083144230one.iu.edu8">IUPUI Athletics: IUPUI Indianapolis</option>
                                                <option label="IUPUI Libraries: IUPUI Indianapolis" value="string:20140818T113944014one.iu.edu3">IUPUI Libraries: IUPUI Indianapolis</option>
                                                <option label="IUS Athletics: IU Southeast" value="string:20141219T105955259one.iu.edu3">IUS Athletics: IU Southeast</option>
                                                <option label="IUS Orientation Registration: IU Southeast" value="string:20140527T010158089one.iu.edu1">IUS Orientation Registration: IU Southeast</option>
                                                <option label="IUSBCareers: IU South Bend" value="string:20150604T111431391one.iu.edu3">IUSBCareers: IU South Bend</option>
                                                <option label="IUScholarWorks: IU East, IU Bloomington, IU Kokomo, IU Northwest, IU South Bend, IU Southeast" value="string:20140808T124001229one.iu.edu3">IUScholarWorks: IU East, IU Bloomington, IU Kokomo, IU Northwest, IU South Bend, IU Southeast</option>
                                                <option label="IUSON Bylaws, Policies &amp; Procedures: IU Bloomington, IUPUI Indianapolis" value="string:20170323T023736920one.iu.edu0">IUSON Bylaws, Policies &amp; Procedures: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="IUSON Faculty Governance: IU Bloomington, IUPUI Indianapolis" value="string:20170329T103535192one.iu.edu6">IUSON Faculty Governance: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="IUSON Help Desk (Web Application): IUPUI Indianapolis, IU Bloomington" value="string:20170329T093239711one.iu.edu0">IUSON Help Desk (Web Application): IUPUI Indianapolis, IU Bloomington</option>
                                                <option label="IUSON Staff Council: IU Bloomington, IUPUI Indianapolis" value="string:20170329T105321721one.iu.edu10">IUSON Staff Council: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="JagJobs: IUPUI Indianapolis" value="string:20161207T083251441one.iu.edu0">JagJobs: IUPUI Indianapolis</option>
                                                <option label="JagNews: IUPUI Indianapolis" value="string:20151013T124939790one.iu.edu2">JagNews: IUPUI Indianapolis</option>
                                                <option label="JagVenture: IUPUI Indianapolis" value="string:20160511T102229718one.iu.edu1">JagVenture: IUPUI Indianapolis</option>
                                                <option label="Jagversity Workshop Request: IUPUI Indianapolis" value="string:20150925T092204655one.iu.edu6">Jagversity Workshop Request: IUPUI Indianapolis</option>
                                                <option label="Java Config Browser" value="string:20170519T040150705one.iu.edu0">Java Config Browser</option>
                                                <option label="JIRA" value="string:20140320T020534796one.iu.edu1">JIRA</option>
                                                <option label="Job Aids / Training Resources (SIS)" value="string:20150416T084808552one.iu.edu1">Job Aids / Training Resources (SIS)</option>
                                                <option label="Jobs at IU (PeopleAdmin)" value="string:20160119T024702781one.iu.edu1">Jobs at IU (PeopleAdmin)</option>
                                                <option label="Jobs On-Campus Employment: IUPUI Indianapolis" value="string:20170316T035944334one.iu.edu16">Jobs On-Campus Employment: IUPUI Indianapolis</option>
                                                <option label="Join an IU Videoconference Room (Bridge)" value="string:20151103T022210677one.iu.edu1">Join an IU Videoconference Room (Bridge)</option>
                                                <option label="Kaltura MediaSpace" value="string:20160328T113920204one.iu.edu2">Kaltura MediaSpace</option>
                                                <option label="Karst Supercomputer" value="string:20150123T104055960one.iu.edu23">Karst Supercomputer</option>
                                                <option label="Karst Supercomputer Machine Software Information" value="string:20150123T104226995one.iu.edu24">Karst Supercomputer Machine Software Information</option>
                                                <option label="KB for IT Pros (Login required) (Knowledge Base Internal Documents)" value="string:20170517T103011111one.iu.edu3">KB for IT Pros (Login required) (Knowledge Base Internal Documents)</option>
                                                <option label="Kelley Connect: IU Bloomington" value="string:20131126T010927392one.iu.edu1">Kelley Connect: IU Bloomington</option>
                                                <option label="Kelley Direct Programs: IU Bloomington" value="string:20160121T094234295one.iu.edu3">Kelley Direct Programs: IU Bloomington</option>
                                                <option label="Komadu Provenance Collection" value="string:20150415T111122237one.iu.edu7">Komadu Provenance Collection</option>
                                                <option label="Kuali Enterprise Dashboard (KED)" value="string:20161003T100324554one.iu.edu0">Kuali Enterprise Dashboard (KED)</option>
                                                <option label="Kuali Financial System (Authorized Users) (KFS)" value="string:20150218T090232336one.iu.edu2">Kuali Financial System (Authorized Users) (KFS)</option>
                                                <option label="Kuali Time" value="string:20131002T0146018901-test.iu.edu4">Kuali Time</option>
                                                <option label="Late Drop / Add Classes (after 1st week of classes)" value="string:20150303T020410393one.iu.edu3">Late Drop / Add Classes (after 1st week of classes)</option>
                                                <option label="Late Drop Add Classes (Administrative)" value="string:20150331T121059161one.iu.edu1">Late Drop Add Classes (Administrative)</option>
                                                <option label="Learn About Bias Incident Reporting: IU Bloomington" value="string:20161118T105534226one.iu.edu20">Learn About Bias Incident Reporting: IU Bloomington</option>
                                                <option label="Learn About One.IU" value="string:20150226T090746078one.iu.edu2">Learn About One.IU</option>
                                                <option label="Legal Probono Services: IUPUI Indianapolis" value="string:20170316T114646069one.iu.edu4">Legal Probono Services: IUPUI Indianapolis</option>
                                                <option label="Letters of Support for IU Researchers" value="string:20150123T104404620one.iu.edu25">Letters of Support for IU Researchers</option>
                                                <option label="Library Catalog (IUCAT)" value="string:20131004T1045485711-test.iu.edu1">Library Catalog (IUCAT)</option>
                                                <option label="Library Databases A to Z: IU Kokomo" value="string:20150610T011807670one.iu.edu2">Library Databases A to Z: IU Kokomo</option>
                                                <option label="Library Resources A to Z: IU Northwest" value="string:20150903T104822069one.iu.edu5">Library Resources A to Z: IU Northwest</option>
                                                <option label="Library Resources A to Z: IUPUI Indianapolis" value="string:20160818T024423115one.iu.edu1">Library Resources A to Z: IUPUI Indianapolis</option>
                                                <option label="Library Resources A to Z: IU Bloomington" value="string:20151021T090908073one.iu.edu1">Library Resources A to Z: IU Bloomington</option>
                                                <option label="Licensed HPC Software" value="string:20150123T104538229one.iu.edu26">Licensed HPC Software</option>
                                                <option label="Life Event" value="string:20150505T092629153one.iu.edu1">Life Event</option>
                                                <option label="Limited Submission Opportunities (LimSub)" value="string:20150619T032419976one.iu.edu1">Limited Submission Opportunities (LimSub)</option>
                                                <option label="Live workshops" value="string:20140507T112601165one.iu.edu2">Live workshops</option>
                                                <option label="Loan Cancellation/Reduction Request Form" value="string:20160714T104647729one.iu.edu1">Loan Cancellation/Reduction Request Form</option>
                                                <option label="Lookup Vendors (KFS)" value="string:20151023T013133443one.iu.edu1">Lookup Vendors (KFS)</option>
                                                <option label="LSP Database (LSP Database)" value="string:20170517T010916674one.iu.edu11">LSP Database (LSP Database)</option>
                                                <option label="Maintain Templates (Administrative) (eSpecial Credit)" value="string:20160407T095513980one.iu.edu1">Maintain Templates (Administrative) (eSpecial Credit)</option>
                                                <option label="Maintenance Request: IU Bloomington" value="string:20150702T101119255one.iu.edu4">Maintenance Request: IU Bloomington</option>
                                                <option label="Maintenance Request: IUPUI Indianapolis" value="string:20150811T105158987one.iu.edu1">Maintenance Request: IUPUI Indianapolis</option>
                                                <option label="Majors, Minors, and More Fair (University Division): IU Bloomington" value="string:20150904T044105220one.iu.edu8">Majors, Minors, and More Fair (University Division): IU Bloomington</option>
                                                <option label="Make a deposit to your CrimsonCard or campus ID card" value="string:20170630T063520832one.iu.edu5">Make a deposit to your CrimsonCard or campus ID card</option>
                                                <option label="Manage Class Descriptions (Administrators)" value="string:20150508T020516913one.iu.edu2">Manage Class Descriptions (Administrators)</option>
                                                <option label="Manage Class Descriptions (Instructors)" value="string:20150507T092403537one.iu.edu28">Manage Class Descriptions (Instructors)</option>
                                                <option label="Manage Outlook Picture (Access Management System)" value="string:20160330T052833460one.iu.edu1">Manage Outlook Picture (Access Management System)</option>
                                                <option label="Manage Passphrase Questions" value="string:20151130T125820382one.iu.edu1">Manage Passphrase Questions</option>
                                                <option label="Manage Student Loans - NSLDS" value="string:20140605T090245808one.iu.edu28">Manage Student Loans - NSLDS</option>
                                                <option label="Marketing Cloud (Salesforce)" value="string:20160301T054720625one.iu.edu2">Marketing Cloud (Salesforce)</option>
                                                <option label="Mason Supercomputer" value="string:20150123T104711750one.iu.edu27">Mason Supercomputer</option>
                                                <option label="Mason Supercomputer Machine Software Information" value="string:20150123T104823755one.iu.edu28">Mason Supercomputer Machine Software Information</option>
                                                <option label="Master's Application for Advanced Degree (eDoc): IU Bloomington, IUPUI Indianapolis" value="string:20150731T085234991one.iu.edu1">Master's Application for Advanced Degree (eDoc): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Math Help: IUPUI Indianapolis" value="string:20170313T050447925one.iu.edu22">Math Help: IUPUI Indianapolis</option>
                                                <option label="Math Placement Exam (ALEKS): IU Bloomington" value="string:20131204T074120141one.iu.edu1">Math Placement Exam (ALEKS): IU Bloomington</option>
                                                <option label="Math Placement, Preparation and Learning (ALEKS): IU Kokomo" value="string:20161108T035728731one.iu.edu1">Math Placement, Preparation and Learning (ALEKS): IU Kokomo</option>
                                                <option label="Math tutoring: IU Northwest" value="string:20131021T094715774one.iu.edu1">Math tutoring: IU Northwest</option>
                                                <option label="Mathematical Software Support and Services" value="string:20150123T105125092one.iu.edu29">Mathematical Software Support and Services</option>
                                                <option label="Meal plan: IUPUI Indianapolis" value="string:20131016T102755435one.iu.edu2">Meal plan: IUPUI Indianapolis</option>
                                                <option label="Media Collections Online (MCO)" value="string:20140808T023404250one.iu.edu1">Media Collections Online (MCO)</option>
                                                <option label="Medicare Coverage Analysis Tool (MCA)" value="string:20150422T120314864one.iu.edu1">Medicare Coverage Analysis Tool (MCA)</option>
                                                <option label="Mentoring Coaching Tutoring: IUPUI Indianapolis" value="string:20170316T034737271one.iu.edu10">Mentoring Coaching Tutoring: IUPUI Indianapolis</option>
                                                <option label="MMS (Maintenance Management System)" value="string:20150422T084309370one.iu.edu3">MMS (Maintenance Management System)</option>
                                                <option label="Mobile Device Security" value="string:20140819T094116237one.iu.edu6">Mobile Device Security</option>
                                                <option label="Money Budget Calculator: IUPUI Indianapolis" value="string:20170316T035132480one.iu.edu12">Money Budget Calculator: IUPUI Indianapolis</option>
                                                <option label="MoneySmarts" value="string:20140529T102521611one.iu.edu1">MoneySmarts</option>
                                                <option label="MORA - My Office of Research Administration: IU Bloomington, IUPUI Indianapolis" value="string:20150617T053732715one.iu.edu4">MORA - My Office of Research Administration: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Motor Pool: IU Bloomington" value="string:20140327T100509099one.iu.edu1">Motor Pool: IU Bloomington</option>
                                                <option label="Multicultural Center Events Calendar: IUPUI Indianapolis" value="string:20150925T091654100one.iu.edu4">Multicultural Center Events Calendar: IUPUI Indianapolis</option>
                                                <option label="Multicultural Student Organizations: IUPUI Indianapolis" value="string:20150925T092339145one.iu.edu7">Multicultural Student Organizations: IUPUI Indianapolis</option>
                                                <option label="My Account (IUCAT)" value="string:20160411T080850931one.iu.edu0">My Account (IUCAT)</option>
                                                <option label="My Class Schedule" value="string:20130915T104051599test.uisapp2.iu.edu1">My Class Schedule</option>
                                                <option label="My IU Calendar" value="string:20140808T101355134one.iu.edu2">My IU Calendar</option>
                                                <option label="My Jobs: IU Bloomington" value="string:20140124T103204580one.iu.edu4">My Jobs: IU Bloomington</option>
                                                <option label="My Trips (KFS)" value="string:20160524T014152356one.iu.edu2">My Trips (KFS)</option>
                                                <option label="MyRA - My Research Administration" value="string:20140909T012637836one.iu.edu1">MyRA - My Research Administration</option>
                                                <option label="MySPEA: IU Bloomington" value="string:20160104T094549550one.iu.edu4">MySPEA: IU Bloomington</option>
                                                <option label="MyStudentBody" value="string:20140806T024643001one.iu.edu3">MyStudentBody</option>
                                                <option label="New Employee Activity Guide" value="string:20170516T035343638one.iu.edu0">New Employee Activity Guide</option>
                                                <option label="New Employee Orientation (IUB): IU Bloomington" value="string:20170112T104315609one.iu.edu3">New Employee Orientation (IUB): IU Bloomington</option>
                                                <option label="New Prospective Student Form: IU Northwest" value="string:20140516T103421727one.iu.edu1">New Prospective Student Form: IU Northwest</option>
                                                <option label="New TSM Subscription Request" value="string:20151103T034228224one.iu.edu2">New TSM Subscription Request</option>
                                                <option label="New Virtual Machine Request" value="string:20151103T034112158one.iu.edu1">New Virtual Machine Request</option>
                                                <option label="Nominate Student for RA or CUE Position (RA/CUE Nomination): IU Bloomington" value="string:20131007T1039016811-test.iu.edu17">Nominate Student for RA or CUE Position (RA/CUE Nomination): IU Bloomington</option>
                                                <option label="Nomination to Candidacy for the Ph.D. Degree Application (eDoc): IU Bloomington, IUPUI Indianapolis" value="string:20150625T115130941one.iu.edu19">Nomination to Candidacy for the Ph.D. Degree Application (eDoc): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Norman Brown Diversity &amp; Leadership Scholarship Application: IUPUI Indianapolis" value="string:20150925T091851957one.iu.edu5">Norman Brown Diversity &amp; Leadership Scholarship Application: IUPUI Indianapolis</option>
                                                <option label="NSO Reservation: IU Bloomington" value="string:20140425T093957560one.iu.edu2">NSO Reservation: IU Bloomington</option>
                                                <option label="Nutrition Information for Food Products (Net Nutrition): IU Bloomington" value="string:20131007T1010415381-test.iu.edu14">Nutrition Information for Food Products (Net Nutrition): IU Bloomington</option>
                                                <option label="Object Code Lookup (KFS)" value="string:20170125T034821591one.iu.edu25">Object Code Lookup (KFS)</option>
                                                <option label="OCQ Student Dashboard: IU Bloomington" value="string:20150414T112145065one.iu.edu1">OCQ Student Dashboard: IU Bloomington</option>
                                                <option label="Offer Request (Academic Position Search)" value="string:20160613T095541547one.iu.edu4">Offer Request (Academic Position Search)</option>
                                                <option label="Office for Veterans and Military Personnel: IUPUI Indianapolis" value="string:20170309T122150105one.iu.edu9">Office for Veterans and Military Personnel: IUPUI Indianapolis</option>
                                                <option label="Office of Career Services (Career Services-IU East)" value="string:20160804T032940482one.iu.edu0">Office of Career Services (Career Services-IU East)</option>
                                                <option label="Office of Career Services: IU Northwest" value="string:20151116T122407216one.iu.edu3">Office of Career Services: IU Northwest</option>
                                                <option label="Office of Overseas Study" value="string:20150520T095437535one.iu.edu37">Office of Overseas Study</option>
                                                <option label="Office of Research Administration (ORA)" value="string:20140130T020442257one.iu.edu2">Office of Research Administration (ORA)</option>
                                                <option label="Office of Research Compliance (ORC)" value="string:20150319T122207053one.iu.edu10">Office of Research Compliance (ORC)</option>
                                                <option label="Office of the Vice Chancellor for Research (OVCR): IUPUI Indianapolis" value="string:20150319T121637186one.iu.edu9">Office of the Vice Chancellor for Research (OVCR): IUPUI Indianapolis</option>
                                                <option label="Office of the Vice President for International Affairs (OVPIA)" value="string:20161123T054327566one.iu.edu2">Office of the Vice President for International Affairs (OVPIA)</option>
                                                <option label="Office of the Vice President for Research (VPR)" value="string:20150324T044813902one.iu.edu9">Office of the Vice President for Research (VPR)</option>
                                                <option label="Office of the Vice Provost for Research (OVPR): IU Bloomington" value="string:20150304T100606789one.iu.edu1">Office of the Vice Provost for Research (OVPR): IU Bloomington</option>
                                                <option label="OMS Server Request: IU Southeast" value="string:20150430T112047339one.iu.edu2">OMS Server Request: IU Southeast</option>
                                                <option label="OnBase (Authorized Users) (IUanyWare)" value="string:20170412T091344575one.iu.edu1">OnBase (Authorized Users) (IUanyWare)</option>
                                                <option label="OnCore" value="string:20170207T020659746one.iu.edu2">OnCore</option>
                                                <option label="Oncourse (retired)" value="string:20140130T014649974one.iu.edu1">Oncourse (retired)</option>
                                                <option label="One Degree Imager - Portal, Pipeline, and Archive" value="string:20150123T105332940one.iu.edu30">One Degree Imager - Portal, Pipeline, and Archive</option>
                                                <option label="OneSearch@IU: IU Bloomington" value="string:20131109T104316409one.iu.edu1">OneSearch@IU: IU Bloomington</option>
                                                <option label="Online Course Questionnaires: IU Kokomo, IU East, IU Northwest, IU South Bend, IU Southeast, IUPUC Columbus, IUPUI Indianapolis" value="string:20160523T041744869one.iu.edu1">Online Course Questionnaires: IU Kokomo, IU East, IU Northwest, IU South Bend, IU Southeast, IUPUC Columbus, IUPUI Indianapolis</option>
                                                <option label="Online Course Questionnaires: IU Bloomington" value="string:20140506T023025210one.iu.edu1">Online Course Questionnaires: IU Bloomington</option>
                                                <option label="Online Room Reservation: IU Kokomo" value="string:20170411T102907354one.iu.edu3">Online Room Reservation: IU Kokomo</option>
                                                <option label="Online Room Reservation: IU Kokomo" value="string:20170411T102907354one.iu.edu3">Online Room Reservation: IU Kokomo</option>
                                                <option label="Open Access Policy: IUPUI Indianapolis" value="string:20160818T040800114one.iu.edu6">Open Access Policy: IUPUI Indianapolis</option>
                                                <option label="Open Burning Permits (OpenBurning)" value="string:20161121T115134709one.iu.edu6">Open Burning Permits (OpenBurning)</option>
                                                <option label="Open Computer Labs (STC): IU Southeast" value="string:20150312T121152398one.iu.edu6">Open Computer Labs (STC): IU Southeast</option>
                                                <option label="Open Computer Labs (STC): IU Northwest" value="string:20131007T0239201451-test.iu.edu9">Open Computer Labs (STC): IU Northwest</option>
                                                <option label="Open Science Grid" value="string:20150123T105457943one.iu.edu31">Open Science Grid</option>
                                                <option label="Orientation: IU Northwest" value="string:20150814T011028767one.iu.edu8">Orientation: IU Northwest</option>
                                                <option label="Orientation Reservation System: IUPUI Indianapolis" value="string:20150908T115842035one.iu.edu2">Orientation Reservation System: IUPUI Indianapolis</option>
                                                <option label="Outreach to Students in the State of Indiana" value="string:20150123T105714112one.iu.edu32">Outreach to Students in the State of Indiana</option>
                                                <option label="PackLife (Campus Labs Engage): IU East" value="string:20150820T102814719one.iu.edu2">PackLife (Campus Labs Engage): IU East</option>
                                                <option label="Pages for IT Pros Site (Google Site)" value="string:20170517T104720916one.iu.edu5">Pages for IT Pros Site (Google Site)</option>
                                                <option label="Paid Time Off (ePTO)" value="string:20131024T110752037one.iu.edu2">Paid Time Off (ePTO)</option>
                                                <option label="Parking Appeals Administration" value="string:20160727T043304601one.iu.edu2">Parking Appeals Administration</option>
                                                <option label="Parking Availability in IUPUI Garages (Jag Spots): IUPUI Indianapolis" value="string:20160727T053832593one.iu.edu0">Parking Availability in IUPUI Garages (Jag Spots): IUPUI Indianapolis</option>
                                                <option label="Parking Citation (Citation Appeal)" value="string:20131113T124044180one.iu.edu1">Parking Citation (Citation Appeal)</option>
                                                <option label="Parking Citation (Citation Payment)" value="string:20131107T040857129one.iu.edu1">Parking Citation (Citation Payment)</option>
                                                <option label="Parking Garage Rates (Parking Info - Garage): IU Bloomington" value="string:20151103T114238615one.iu.edu2">Parking Garage Rates (Parking Info - Garage): IU Bloomington</option>
                                                <option label="Parking Lot Locator (Parking Info - Lots): IU Bloomington" value="string:20151102T022403689one.iu.edu1">Parking Lot Locator (Parking Info - Lots): IU Bloomington</option>
                                                <option label="Parking Permit" value="string:20130924T1232399091-test.iu.edu2">Parking Permit</option>
                                                <option label="Passphrase Reset" value="string:20130906T104614779test.uisapp2.iu.edu7">Passphrase Reset</option>
                                                <option label="Paw's Pantry: IUPUI Indianapolis" value="string:20170221T042844298one.iu.edu0">Paw's Pantry: IUPUI Indianapolis</option>
                                                <option label="Paycheck Details" value="string:20131024T104209163one.iu.edu1">Paycheck Details</option>
                                                <option label="Paycheck Direct Deposit" value="string:20140502T020931126one.iu.edu3">Paycheck Direct Deposit</option>
                                                <option label="Payroll (HRMS)" value="string:20150318T121746694one.iu.edu2">Payroll (HRMS)</option>
                                                <option label="Payroll WorkCenter (HRMS)" value="string:20161213T105917968one.iu.edu0">Payroll WorkCenter (HRMS)</option>
                                                <option label="Payroll Year-To-Date" value="string:20140603T032232900one.iu.edu4">Payroll Year-To-Date</option>
                                                <option label="PCI Network" value="string:20160729T011015314one.iu.edu3">PCI Network</option>
                                                <option label="PeopleAdmin Faculty Applicant Tracking System" value="string:20150310T040210303one.iu.edu11">PeopleAdmin Faculty Applicant Tracking System</option>
                                                <option label="Permission Lookup (Kuali Rice)" value="string:20150203T115658340one.iu.edu11">Permission Lookup (Kuali Rice)</option>
                                                <option label="Person Lookup (Kuali Rice)" value="string:20150203T114601769one.iu.edu8">Person Lookup (Kuali Rice)</option>
                                                <option label="Personal Information (Students)" value="string:20130908T100415226test.uisapp2.iu.edu3">Personal Information (Students)</option>
                                                <option label="Pervasive Technology Institute Multimedia Gallery" value="string:20150123T105828356one.iu.edu33">Pervasive Technology Institute Multimedia Gallery</option>
                                                <option label="Pervasive Technology Institute Publications" value="string:20150123T110029791one.iu.edu34">Pervasive Technology Institute Publications</option>
                                                <option label="Ph.D. Commencement Participation Application (eDoc): IU Bloomington" value="string:20150811T100804971one.iu.edu2">Ph.D. Commencement Participation Application (eDoc): IU Bloomington</option>
                                                <option label="Ph.D. Defense Announcement (eDoc): IU Bloomington, IUPUI Indianapolis" value="string:20150811T102105135one.iu.edu3">Ph.D. Defense Announcement (eDoc): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Ph.D. Nomination of Research Committee (eDoc): IUPUI Indianapolis, IU Bloomington" value="string:20150811T104014317one.iu.edu4">Ph.D. Nomination of Research Committee (eDoc): IUPUI Indianapolis, IU Bloomington</option>
                                                <option label="Ph.D. Research Committee Change (eDoc): IU Bloomington, IUPUI Indianapolis" value="string:20150811T104948454one.iu.edu5">Ph.D. Research Committee Change (eDoc): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Phishing Education and Training" value="string:20160614T093118123one.iu.edu0">Phishing Education and Training</option>
                                                <option label="Physical Plant Request: IU Northwest" value="string:20150513T101448063one.iu.edu2">Physical Plant Request: IU Northwest</option>
                                                <option label="Placement Testing: IUPUI Indianapolis" value="string:20151123T043751600one.iu.edu1">Placement Testing: IUPUI Indianapolis</option>
                                                <option label="Placement Testing: IU Northwest" value="string:20150814T010912198one.iu.edu7">Placement Testing: IU Northwest</option>
                                                <option label="Placement Testing: IU Southeast" value="string:20160519T100921575one.iu.edu0">Placement Testing: IU Southeast</option>
                                                <option label="PRAGMA Cluster at IU" value="string:20150415T111648608one.iu.edu10">PRAGMA Cluster at IU</option>
                                                <option label="Printed materials (IT Training)" value="string:20140507T113102014one.iu.edu3">Printed materials (IT Training)</option>
                                                <option label="Problem Report (SIS)" value="string:20150520T112045579one.iu.edu39">Problem Report (SIS)</option>
                                                <option label="Procurement Card Documentation Upload" value="string:20151028T102228171one.iu.edu4">Procurement Card Documentation Upload</option>
                                                <option label="Programs Involving Children" value="string:20150610T012254619one.iu.edu3">Programs Involving Children</option>
                                                <option label="Proposal Development Services (OVPR): IU Bloomington" value="string:20151013T041205024one.iu.edu3">Proposal Development Services (OVPR): IU Bloomington</option>
                                                <option label="Purchase Requisitions (KFS)" value="string:20131024T015551182one.iu.edu1">Purchase Requisitions (KFS)</option>
                                                <option label="Purchasing and Travel Expense Modules (KFS)" value="string:20150218T090056124one.iu.edu1">Purchasing and Travel Expense Modules (KFS)</option>
                                                <option label="Purchasing Website" value="string:20151015T112245350one.iu.edu1">Purchasing Website</option>
                                                <option label="Push Notifications" value="string:20140702T105145483one.iu.edu1">Push Notifications</option>
                                                <option label="Qualtrics" value="string:20170127T011727710one.iu.edu6">Qualtrics</option>
                                                <option label="Ready, Set, Robots! Program" value="string:20150123T110148911one.iu.edu35">Ready, Set, Robots! Program</option>
                                                <option label="Recommend Student for RA or CUE Position (RA/CUE Recommendation): IU Bloomington" value="string:20131007T1043210041-test.iu.edu18">Recommend Student for RA or CUE Position (RA/CUE Recommendation): IU Bloomington</option>
                                                <option label="Record Holds" value="string:20130906T101514847test.uisapp2.iu.edu4">Record Holds</option>
                                                <option label="Recorder Portal (SharePoint): IU Bloomington" value="string:20151203T013626372one.iu.edu3">Recorder Portal (SharePoint): IU Bloomington</option>
                                                <option label="Recorders + (Registrar Academic Support): IUPUI Indianapolis" value="string:20151019T124527118one.iu.edu2">Recorders + (Registrar Academic Support): IUPUI Indianapolis</option>
                                                <option label="REDCap" value="string:20160324T125438950one.iu.edu0">REDCap</option>
                                                <option label="Redhawk Link (Campus Labs Engage): IU Northwest" value="string:20130907T091808249test.uisapp2.iu.edu3">Redhawk Link (Campus Labs Engage): IU Northwest</option>
                                                <option label="RedHawk Link: IU Northwest" value="string:20161209T032734197one.iu.edu4">RedHawk Link: IU Northwest</option>
                                                <option label="Redhawk Review: IU Northwest" value="string:20140811T011528007one.iu.edu3">Redhawk Review: IU Northwest</option>
                                                <option label="RedHawk Shuttle: IU Northwest" value="string:20140725T052814919one.iu.edu6">RedHawk Shuttle: IU Northwest</option>
                                                <option label="Reimbursement - Phone, PDA &amp; ISP" value="string:20141223T101048396one.iu.edu1">Reimbursement - Phone, PDA &amp; ISP</option>
                                                <option label="Renew Housing for Current Residents (Housing Renewal): IU Bloomington" value="string:20131007T0905480821-test.iu.edu4">Renew Housing for Current Residents (Housing Renewal): IU Bloomington</option>
                                                <option label="Report a Compliance Concern" value="string:20150205T101356776one.iu.edu1">Report a Compliance Concern</option>
                                                <option label="Report Classroom Problem: IU Bloomington" value="string:20161110T094720166one.iu.edu2">Report Classroom Problem: IU Bloomington</option>
                                                <option label="Report Classroom Problem: IUPUI Indianapolis" value="string:20161110T095105695one.iu.edu6">Report Classroom Problem: IUPUI Indianapolis</option>
                                                <option label="Report Hazards: IU Bloomington" value="string:20140814T020326268one.iu.edu1">Report Hazards: IU Bloomington</option>
                                                <option label="Report IU Secure Outages" value="string:20150226T085218799one.iu.edu1">Report IU Secure Outages</option>
                                                <option label="Report Malware Domains" value="string:20151012T034245147one.iu.edu1">Report Malware Domains</option>
                                                <option label="Report Scholarship: IU Bloomington" value="string:20150617T011601078one.iu.edu2">Report Scholarship: IU Bloomington</option>
                                                <option label="Report Water Pollution: IU Bloomington" value="string:20140521T113404860one.iu.edu2">Report Water Pollution: IU Bloomington</option>
                                                <option label="Report your CrimsonCard or campus ID card lost or stolen" value="string:20170630T063036799one.iu.edu3">Report your CrimsonCard or campus ID card lost or stolen</option>
                                                <option label="Request a SharePoint site" value="string:20131204T075244948one.iu.edu3">Request a SharePoint site</option>
                                                <option label="Request a Video Stream and Recording For a Class You Teach" value="string:20160328T114151941one.iu.edu4">Request a Video Stream and Recording For a Class You Teach</option>
                                                <option label="Request a Video Stream and Recording For Your Event" value="string:20160328T114339386one.iu.edu5">Request a Video Stream and Recording For Your Event</option>
                                                <option label="Request Account (REDCap)" value="string:20150123T110258892one.iu.edu36">Request Account (REDCap)</option>
                                                <option label="Request Echo360 lecture capture for a class you teach" value="string:20160328T114044544one.iu.edu3">Request Echo360 lecture capture for a class you teach</option>
                                                <option label="Request for Individualized Minor (eDoc): IU Bloomington" value="string:20160927T091815149one.iu.edu4">Request for Individualized Minor (eDoc): IU Bloomington</option>
                                                <option label="Request for Revalidation of Coursework (eDoc): IU Bloomington, IUPUI Indianapolis" value="string:20160927T090314483one.iu.edu0">Request for Revalidation of Coursework (eDoc): IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Request For Substitution or Waiver of Program Requirements (eDoc): IU Bloomington" value="string:20160927T091034961one.iu.edu2">Request For Substitution or Waiver of Program Requirements (eDoc): IU Bloomington</option>
                                                <option label="Request GI Bill Certification: IU Bloomington" value="string:20140820T023930684one.iu.edu1">Request GI Bill Certification: IU Bloomington</option>
                                                <option label="Request HRMS Access" value="string:20150810T022917040one.iu.edu5">Request HRMS Access</option>
                                                <option label="Request or Modify an AAR" value="string:20150324T124653894one.iu.edu1">Request or Modify an AAR</option>
                                                <option label="Request SIS Access (ARMS)" value="string:20150302T103242417one.iu.edu1">Request SIS Access (ARMS)</option>
                                                <option label="Research Admin 101 Courses (Expand)" value="string:20170503T050558769one.iu.edu0">Research Admin 101 Courses (Expand)</option>
                                                <option label="Research Administration Dashboards (KC)" value="string:20161116T115601788one.iu.edu13">Research Administration Dashboards (KC)</option>
                                                <option label="Research Database Support" value="string:20150123T110426290one.iu.edu37">Research Database Support</option>
                                                <option label="Research File System (RFS)" value="string:20150123T110540079one.iu.edu38">Research File System (RFS)</option>
                                                <option label="Research-Related Conflict of Interest Disclosure Form (Kuali COI)" value="string:20170728T120431618one.iu.edu0">Research-Related Conflict of Interest Disclosure Form (Kuali COI)</option>
                                                <option label="Reserve a Classroom: IU Bloomington" value="string:20151203T124031961one.iu.edu1">Reserve a Classroom: IU Bloomington</option>
                                                <option label="Residence Hall Parking (RPS Parking Waitlist): IU Bloomington" value="string:20131007T0947433271-test.iu.edu10">Residence Hall Parking (RPS Parking Waitlist): IU Bloomington</option>
                                                <option label="Residence Life and Housing: IU Southeast" value="string:20140808T055419070one.iu.edu4">Residence Life and Housing: IU Southeast</option>
                                                <option label="Residential Guest Registration: IU Bloomington" value="string:20131007T0958171431-test.iu.edu12">Residential Guest Registration: IU Bloomington</option>
                                                <option label="Residential Programs and Services info (RPS Live Chat): IU Bloomington" value="string:20131027T070631656one.iu.edu1">Residential Programs and Services info (RPS Live Chat): IU Bloomington</option>
                                                <option label="Responsibility Lookup (Kuali Rice)" value="string:20150203T115809296one.iu.edu12">Responsibility Lookup (Kuali Rice)</option>
                                                <option label="Retirement Readiness Calculator" value="string:20140411T012455072one.iu.edu1">Retirement Readiness Calculator</option>
                                                <option label="Review Remonstrance List (CARMIn)" value="string:20140805T015307421one.iu.edu1">Review Remonstrance List (CARMIn)</option>
                                                <option label="ROAR Information: IUPUI Indianapolis" value="string:20170309T010942440one.iu.edu11">ROAR Information: IUPUI Indianapolis</option>
                                                <option label="Role Lookup (Kuali Rice)" value="string:20150203T115547380one.iu.edu10">Role Lookup (Kuali Rice)</option>
                                                <option label="Routing and Identity Management Document Type Hierarchy (Kuali Rice)" value="string:20150203T113129805one.iu.edu4">Routing and Identity Management Document Type Hierarchy (Kuali Rice)</option>
                                                <option label="Routing Report (Kuali Rice)" value="string:20150203T113307512one.iu.edu5">Routing Report (Kuali Rice)</option>
                                                <option label="RPS 3rd party access (eProxy): IU Bloomington" value="string:20130908T041659239test.uisapp2.iu.edu9">RPS 3rd party access (eProxy): IU Bloomington</option>
                                                <option label="RPS Calendar: IU Bloomington" value="string:20140805T084256871one.iu.edu1">RPS Calendar: IU Bloomington</option>
                                                <option label="RPS emergency contact information (PECI): IU Bloomington" value="string:20130908T042807828test.uisapp2.iu.edu10">RPS emergency contact information (PECI): IU Bloomington</option>
                                                <option label="RPS Laundry Status: IU Bloomington" value="string:20131107T050627256one.iu.edu1">RPS Laundry Status: IU Bloomington</option>
                                                <option label="Ruth Lilly Medical Library: IUPUI Indianapolis" value="string:20160203T020805587one.iu.edu1">Ruth Lilly Medical Library: IUPUI Indianapolis</option>
                                                <option label="Salary Expense Transfer (ST) (KFS)" value="string:20170125T023639665one.iu.edu6">Salary Expense Transfer (ST) (KFS)</option>
                                                <option label="Scanning Results (Digital Desk): IU Bloomington" value="string:20160817T103855158one.iu.edu0">Scanning Results (Digital Desk): IU Bloomington</option>
                                                <option label="Schedule of Classes (Public)" value="string:20140814T023059019one.iu.edu2">Schedule of Classes (Public)</option>
                                                <option label="Scheduling Officer Portal (SharePoint): IU Bloomington" value="string:20151203T125211008one.iu.edu2">Scheduling Officer Portal (SharePoint): IU Bloomington</option>
                                                <option label="Scholarly Data Archive (SDA)" value="string:20150123T110918271one.iu.edu40">Scholarly Data Archive (SDA)</option>
                                                <option label="Scholarly Highlights of UITS Research Technologies" value="string:20150123T111029579one.iu.edu41">Scholarly Highlights of UITS Research Technologies</option>
                                                <option label="Scholarships" value="string:20150727T125130556one.iu.edu1">Scholarships</option>
                                                <option label="ScholarWorks: IUPUI Indianapolis" value="string:20160818T041008115one.iu.edu8">ScholarWorks: IUPUI Indianapolis</option>
                                                <option label="School of Education Career Connections: IU Bloomington" value="string:20140805T043616962one.iu.edu2">School of Education Career Connections: IU Bloomington</option>
                                                <option label="School of Public Health Career Services: IU Bloomington" value="string:20140117T053132420one.iu.edu2">School of Public Health Career Services: IU Bloomington</option>
                                                <option label="Science Gateways" value="string:20150123T111149054one.iu.edu42">Science Gateways</option>
                                                <option label="Science on a Sphere Visualization Resource: IU Bloomington" value="string:20150123T111312597one.iu.edu43">Science on a Sphere Visualization Resource: IU Bloomington</option>
                                                <option label="Search All Academic Position Documents (Academic Position Search)" value="string:20160613T105528898one.iu.edu19">Search All Academic Position Documents (Academic Position Search)</option>
                                                <option label="Search Courses (Login Required) (iGPS)" value="string:20130924T1150487371-test.iu.edu1">Search Courses (Login Required) (iGPS)</option>
                                                <option label="Search Courses (Public) (iGPS)" value="string:20150828T123714310one.iu.edu11">Search Courses (Public) (iGPS)</option>
                                                <option label="Search for Online Classes" value="string:20170519T105009676one.iu.edu0">Search for Online Classes</option>
                                                <option label="Search Interview Request Documents Only (Academic Position Search)" value="string:20160613T110008610one.iu.edu21">Search Interview Request Documents Only (Academic Position Search)</option>
                                                <option label="Search IU’s Registry - International Partnerships and Cross Border Activities" value="string:20161124T120428767one.iu.edu38">Search IU’s Registry - International Partnerships and Cross Border Activities</option>
                                                <option label="Search My IRB Protocol (Kuali Coeus)" value="string:20140623T122557284one.iu.edu4">Search My IRB Protocol (Kuali Coeus)</option>
                                                <option label="Search Offer Request Documents Only (Academic Position Search)" value="string:20160613T110246766one.iu.edu22">Search Offer Request Documents Only (Academic Position Search)</option>
                                                <option label="Search Vacancy Notice Documents Only (Academic Position Search)" value="string:20160613T105816092one.iu.edu20">Search Vacancy Notice Documents Only (Academic Position Search)</option>
                                                <option label="Search Waiver Request Documents Only (Academic Position Search)" value="string:20160613T110428937one.iu.edu23">Search Waiver Request Documents Only (Academic Position Search)</option>
                                                <option label="Selective Scholarships: IU Bloomington" value="string:20150812T124205599one.iu.edu2">Selective Scholarships: IU Bloomington</option>
                                                <option label="Service Billing (SB) (KFS)" value="string:20170125T030902437one.iu.edu12">Service Billing (SB) (KFS)</option>
                                                <option label="Service Request (Facility Operations): IU Bloomington" value="string:20150521T103459737one.iu.edu2">Service Request (Facility Operations): IU Bloomington</option>
                                                <option label="Services for Biomedical, Biological, and Health-related Research" value="string:20150123T111505123one.iu.edu44">Services for Biomedical, Biological, and Health-related Research</option>
                                                <option label="Services in Support of Cyber-risk Mitigation and IT-28 Mitigation" value="string:20150123T111619268one.iu.edu45">Services in Support of Cyber-risk Mitigation and IT-28 Mitigation</option>
                                                <option label="Set Up 3rd Party Users" value="string:20130908T035746808test.uisapp2.iu.edu7">Set Up 3rd Party Users</option>
                                                <option label="Shop Catalogs (KFS)" value="string:20140109T121820480one.iu.edu1">Shop Catalogs (KFS)</option>
                                                <option label="Shorten URL (Go.IU)" value="string:20131007T0146340691-test.iu.edu8">Shorten URL (Go.IU)</option>
                                                <option label="Slashtmp" value="string:20141210T025536537one.iu.edu1">Slashtmp</option>
                                                <option label="Software Consultation" value="string:20150123T111733802one.iu.edu46">Software Consultation</option>
                                                <option label="Software Downloads (IUware)" value="string:20131002T1119076961-test.iu.edu1">Software Downloads (IUware)</option>
                                                <option label="Software for Advanced Visualization" value="string:20150123T111907757one.iu.edu47">Software for Advanced Visualization</option>
                                                <option label="Software Installation Request" value="string:20150123T112017687one.iu.edu48">Software Installation Request</option>
                                                <option label="SoIC Careers: IU Bloomington" value="string:20131126T044710839one.iu.edu1">SoIC Careers: IU Bloomington</option>
                                                <option label="Solution Finder: IU Kokomo" value="string:20140820T123523881one.iu.edu7">Solution Finder: IU Kokomo</option>
                                                <option label="Sophomore Experience: IUPUI Indianapolis" value="string:20170317T024636782one.iu.edu0">Sophomore Experience: IUPUI Indianapolis</option>
                                                <option label="Space Information" value="string:20150702T100827781one.iu.edu3">Space Information</option>
                                                <option label="SPEA Career Development Office (Simplicity): IU Bloomington" value="string:20160104T094315267one.iu.edu3">SPEA Career Development Office (Simplicity): IU Bloomington</option>
                                                <option label="SPEA Intranet (Microsoft SharePoint Online): IU Bloomington" value="string:20160922T103159248one.iu.edu7">SPEA Intranet (Microsoft SharePoint Online): IU Bloomington</option>
                                                <option label="SPEA IT Services (SPEABITS): IU Bloomington" value="string:20160907T083841772one.iu.edu1">SPEA IT Services (SPEABITS): IU Bloomington</option>
                                                <option label="SPEA Website: IU Bloomington" value="string:20160922T102848314one.iu.edu6">SPEA Website: IU Bloomington</option>
                                                <option label="SSN/educational tax credit verification" value="string:20131001T0524388981-test.iu.edu2">SSN/educational tax credit verification</option>
                                                <option label="State &amp; Local Tax Withholding" value="string:20140603T031707853one.iu.edu3">State &amp; Local Tax Withholding</option>
                                                <option label="Statistical Software Support and Services" value="string:20150123T112139878one.iu.edu49">Statistical Software Support and Services</option>
                                                <option label="Status.IU" value="string:20140411T015630656one.iu.edu2">Status.IU</option>
                                                <option label="Step Workshop: IU Northwest" value="string:20150814T010755963one.iu.edu6">Step Workshop: IU Northwest</option>
                                                <option label="Step Workshop (ADMIN): IU Northwest" value="string:20150908T114548410one.iu.edu1">Step Workshop (ADMIN): IU Northwest</option>
                                                <option label="Stop Payment Request - Bursar Refunds: IU Bloomington, IU Kokomo, IU Northwest, IU Southeast, IU East" value="string:20160407T104544293one.iu.edu0">Stop Payment Request - Bursar Refunds: IU Bloomington, IU Kokomo, IU Northwest, IU Southeast, IU East</option>
                                                <option label="Stop Sexual Violence" value="string:20141030T025908994one.iu.edu1">Stop Sexual Violence</option>
                                                <option label="Student Advising Records (AdRx)" value="string:20140220T022439578one.iu.edu1">Student Advising Records (AdRx)</option>
                                                <option label="Student Appointment Scheduler (SAS)" value="string:20170109T115701164one.iu.edu0">Student Appointment Scheduler (SAS)</option>
                                                <option label="Student Center (SIS)" value="string:20130908T095238950test.uisapp2.iu.edu1">Student Center (SIS)</option>
                                                <option label="Student Information System (Administrative) (SIS)" value="string:20140603T020657399one.iu.edu14">Student Information System (Administrative) (SIS)</option>
                                                <option label="Student Organization Transportation Request: IU Bloomington" value="string:20150319T105147628one.iu.edu10">Student Organization Transportation Request: IU Bloomington</option>
                                                <option label="Student Outreach Free Clinic: IUPUI Indianapolis" value="string:20170309T014355843one.iu.edu21">Student Outreach Free Clinic: IUPUI Indianapolis</option>
                                                <option label="Student Rights and Advocate: IUPUI Indianapolis" value="string:20170316T031747459one.iu.edu8">Student Rights and Advocate: IUPUI Indianapolis</option>
                                                <option label="Student Travel Safety" value="string:20161123T075520770one.iu.edu18">Student Travel Safety</option>
                                                <option label="Student University ID Lookup (Access Management System)" value="string:20160120T113723160one.iu.edu1">Student University ID Lookup (Access Management System)</option>
                                                <option label="Study Abroad 101" value="string:20160429T043512846one.iu.edu0">Study Abroad 101</option>
                                                <option label="Subject Research Guides: IUPUI Indianapolis" value="string:20160818T040204147one.iu.edu3">Subject Research Guides: IUPUI Indianapolis</option>
                                                <option label="Submit a Bias Incident: IU Bloomington" value="string:20140812T121851339one.iu.edu4">Submit a Bias Incident: IU Bloomington</option>
                                                <option label="Submit Application for an International Agreement" value="string:20161123T113840583one.iu.edu34">Submit Application for an International Agreement</option>
                                                <option label="Submit eAchievement/REAL Request (Administrative) (Achievement Record)" value="string:20161215T085108539one.iu.edu6">Submit eAchievement/REAL Request (Administrative) (Achievement Record)</option>
                                                <option label="Submit eGrade Change (Instructor)" value="string:20150416T090641201one.iu.edu7">Submit eGrade Change (Instructor)</option>
                                                <option label="Submit eGrade Change (Staff)" value="string:20150521T035240298one.iu.edu1">Submit eGrade Change (Staff)</option>
                                                <option label="Submit eSpecial Credit (Administrative) (eSpecial Credit)" value="string:20160128T050808110one.iu.edu3">Submit eSpecial Credit (Administrative) (eSpecial Credit)</option>
                                                <option label="Suicide Assessment: IUPUI Indianapolis" value="string:20170313T055255913one.iu.edu40">Suicide Assessment: IUPUI Indianapolis</option>
                                                <option label="Support for Diverse Students: IUPUI Indianapolis" value="string:20170313T052918844one.iu.edu30">Support for Diverse Students: IUPUI Indianapolis</option>
                                                <option label="System User Role Lookup (KFS)" value="string:20150219T092828559one.iu.edu3">System User Role Lookup (KFS)</option>
                                                <option label="Talisma Business Administrator" value="string:20150521T022426330one.iu.edu42">Talisma Business Administrator</option>
                                                <option label="Taskstream  - Assessment Management System (AMS)" value="string:20151110T013632735one.iu.edu1">Taskstream  - Assessment Management System (AMS)</option>
                                                <option label="Taskstream Learning Achievements Tools (LAT) (Taskstream LAT): IU East, IU Kokomo, IU Northwest, IU South Bend, IU Southeast, IUPUC Columbus, IUPUI Indianapolis" value="string:20170613T112211809one.iu.edu2">Taskstream Learning Achievements Tools (LAT) (Taskstream LAT): IU East, IU Kokomo, IU Northwest, IU South Bend, IU Southeast, IUPUC Columbus, IUPUI Indianapolis</option>
                                                <option label="Telecom Services Request" value="string:20150714T010622641one.iu.edu1">Telecom Services Request</option>
                                                <option label="Template for an International Agreement" value="string:20161123T115132181one.iu.edu36">Template for an International Agreement</option>
                                                <option label="Test credits reports" value="string:20130925T0330235991-test.iu.edu1">Test credits reports</option>
                                                <option label="Textbook Orders (Faculty)" value="string:20150604T025747438one.iu.edu6">Textbook Orders (Faculty)</option>
                                                <option label="Textbook Orders (Student)" value="string:20130925T0405141221-test.iu.edu5">Textbook Orders (Student)</option>
                                                <option label="The Den (Campus Labs Engage): IUPUI Indianapolis" value="string:20130907T091410995test.uisapp2.iu.edu1">The Den (Campus Labs Engage): IUPUI Indianapolis</option>
                                                <option label="The Graduate Mentoring Center (The University Graduate School): IU Bloomington" value="string:20160713T092310790one.iu.edu1">The Graduate Mentoring Center (The University Graduate School): IU Bloomington</option>
                                                <option label="The Horizon: IU Southeast" value="string:20140811T112139540one.iu.edu2">The Horizon: IU Southeast</option>
                                                <option label="The Mathematics Assistance Center: IUPUI Indianapolis" value="string:20150419T090125657one.iu.edu1">The Mathematics Assistance Center: IUPUI Indianapolis</option>
                                                <option label="The Preface: IU South Bend" value="string:20141229T091820633one.iu.edu1">The Preface: IU South Bend</option>
                                                <option label="Tickets (IU Auditorium): IU Bloomington" value="string:20131022T053304582one.iu.edu4">Tickets (IU Auditorium): IU Bloomington</option>
                                                <option label="Titan Atlas (Campus Labs Engage): IU South Bend" value="string:20130907T091606125test.uisapp2.iu.edu2">Titan Atlas (Campus Labs Engage): IU South Bend</option>
                                                <option label="Title IV Financial Aid Authorizations" value="string:20131001T0520362191-test.iu.edu1">Title IV Financial Aid Authorizations</option>
                                                <option label="To Do List" value="string:20130906T100244393test.uisapp2.iu.edu3">To Do List</option>
                                                <option label="Total Rewards" value="string:20140806T032750962one.iu.edu4">Total Rewards</option>
                                                <option label="Tours of High Performance Computing Facilities" value="string:20150123T112257749one.iu.edu50">Tours of High Performance Computing Facilities</option>
                                                <option label="Tours of Visualization Facilities" value="string:20150123T112441429one.iu.edu51">Tours of Visualization Facilities</option>
                                                <option label="Track My SIS eDocs" value="string:20150331T121247544one.iu.edu2">Track My SIS eDocs</option>
                                                <option label="Training (SIS)" value="string:20140722T092933056one.iu.edu3">Training (SIS)</option>
                                                <option label="Training About Research Computing" value="string:20150123T112607525one.iu.edu52">Training About Research Computing</option>
                                                <option label="Training facility reservation (IT Training)" value="string:20140502T090201618one.iu.edu3">Training facility reservation (IT Training)</option>
                                                <option label="Training on High Performance Computing" value="string:20150123T112722354one.iu.edu53">Training on High Performance Computing</option>
                                                <option label="Transfer Admission: IU Bloomington" value="string:20131015T093207041one.iu.edu1">Transfer Admission: IU Bloomington</option>
                                                <option label="Transfer Courses: IU Southeast" value="string:20140312T091111528one.iu.edu3">Transfer Courses: IU Southeast</option>
                                                <option label="Transfer Courses: IU South Bend" value="string:20140311T042647107one.iu.edu2">Transfer Courses: IU South Bend</option>
                                                <option label="Transfer Courses: IU Northwest" value="string:20140312T092148082one.iu.edu5">Transfer Courses: IU Northwest</option>
                                                <option label="Transfer Courses: IU Kokomo" value="string:20140311T041621267one.iu.edu1">Transfer Courses: IU Kokomo</option>
                                                <option label="Transfer Courses: IUPUI Indianapolis, IUPUC Columbus" value="string:20131018T033504363one.iu.edu2">Transfer Courses: IUPUI Indianapolis, IUPUC Columbus</option>
                                                <option label="Transfer Courses: IU East" value="string:20140312T091737544one.iu.edu4">Transfer Courses: IU East</option>
                                                <option label="Transfer Credits" value="string:20130924T0259124401-test.iu.edu4">Transfer Credits</option>
                                                <option label="Transfer of Funds (TF) (KFS)" value="string:20170125T031849399one.iu.edu16">Transfer of Funds (TF) (KFS)</option>
                                                <option label="Travel Arranger Change Requests (KFS)" value="string:20160524T015803740one.iu.edu4">Travel Arranger Change Requests (KFS)</option>
                                                <option label="Travel Management Services" value="string:20150408T040649136one.iu.edu2">Travel Management Services</option>
                                                <option label="Travel Reimbursement Direct Deposit" value="string:20140606T094027346one.iu.edu6">Travel Reimbursement Direct Deposit</option>
                                                <option label="Trinity Free Clinic: IUPUI Indianapolis" value="string:20170313T025948105one.iu.edu6">Trinity Free Clinic: IUPUI Indianapolis</option>
                                                <option label="Trinity Free Clinic - Faith-based: IUPUI Indianapolis" value="string:20170313T110018291one.iu.edu4">Trinity Free Clinic - Faith-based: IUPUI Indianapolis</option>
                                                <option label="Tuition Benefit" value="string:20141103T075535949one.iu.edu1">Tuition Benefit</option>
                                                <option label="Tutor Matching Service: IUPUI Indianapolis" value="string:20131021T114730254one.iu.edu1">Tutor Matching Service: IUPUI Indianapolis</option>
                                                <option label="Two-Step Login (Duo)" value="string:20160628T043837964one.iu.edu0">Two-Step Login (Duo)</option>
                                                <option label="UITS Finance Office" value="string:20150408T032736606one.iu.edu1">UITS Finance Office</option>
                                                <option label="UITS Financial Report Search" value="string:20150226T010807275one.iu.edu1">UITS Financial Report Search</option>
                                                <option label="UITS Identity Finder Services Console" value="string:20150520T120234396one.iu.edu40">UITS Identity Finder Services Console</option>
                                                <option label="UITS Internal Resources" value="string:20150312T090722912one.iu.edu9">UITS Internal Resources</option>
                                                <option label="UITS Leveraged Services Analytics (ls.iu.edu)" value="string:20170517T011509512one.iu.edu15">UITS Leveraged Services Analytics (ls.iu.edu)</option>
                                                <option label="UITS Research Technologies Service Request" value="string:20150123T112842396one.iu.edu54">UITS Research Technologies Service Request</option>
                                                <option label="UITS Support Center" value="string:20170208T101918184one.iu.edu13">UITS Support Center</option>
                                                <option label="Ultra-high Resolution Photography Gigapan Robot: IU Bloomington, IUPUI Indianapolis" value="string:20150123T113000572one.iu.edu55">Ultra-high Resolution Photography Gigapan Robot: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Umail (Email)" value="string:20131002T1059192791-test.iu.edu2">Umail (Email)</option>
                                                <option label="Undergraduate Admission" value="string:20170731T094522139one.iu.edu0">Undergraduate Admission</option>
                                                <option label="University Division - Academic Advising: IU Bloomington" value="string:20160328T112131118one.iu.edu0">University Division - Academic Advising: IU Bloomington</option>
                                                <option label="University Human Resources (UHR)" value="string:20151021T090958053one.iu.edu1">University Human Resources (UHR)</option>
                                                <option label="University ID (SIS)" value="string:20130908T040358779test.uisapp2.iu.edu8">University ID (SIS)</option>
                                                <option label="University Legions Post 360: IUPUI Indianapolis" value="string:20170309T121642814one.iu.edu7">University Legions Post 360: IUPUI Indianapolis</option>
                                                <option label="University Library Study Room Reservation: IUPUI Indianapolis" value="string:20160823T021727409one.iu.edu1">University Library Study Room Reservation: IUPUI Indianapolis</option>
                                                <option label="University Policies" value="string:20160921T093014079one.iu.edu0">University Policies</option>
                                                <option label="Upcoming Outreach, Training, and Education Events" value="string:20150123T113131591one.iu.edu56">Upcoming Outreach, Training, and Education Events</option>
                                                <option label="Update Grade Rosters (SIS Faculty Center)" value="string:20151216T095719540one.iu.edu1">Update Grade Rosters (SIS Faculty Center)</option>
                                                <option label="Update My Major: IU Southeast" value="string:20150610T014649346one.iu.edu5">Update My Major: IU Southeast</option>
                                                <option label="Use Agreement and FERPA Compliance Check" value="string:20160929T092536564one.iu.edu0">Use Agreement and FERPA Compliance Check</option>
                                                <option label="User/Group Lookup (Admin) (Help Desk)" value="string:20150219T104933496one.iu.edu3">User/Group Lookup (Admin) (Help Desk)</option>
                                                <option label="Vacancy Notice (Academic Position Search)" value="string:20160613T094235123one.iu.edu0">Vacancy Notice (Academic Position Search)</option>
                                                <option label="Verify Acceptable Use Agreement Completion" value="string:20150810T012113866one.iu.edu1">Verify Acceptable Use Agreement Completion</option>
                                                <option label="View Accounts" value="string:20140326T120037386one.iu.edu8">View Accounts</option>
                                                <option label="View Class Rosters (SIS Faculty Center)" value="string:20151216T111824843one.iu.edu2">View Class Rosters (SIS Faculty Center)</option>
                                                <option label="View Grades (SIS Student Center)" value="string:20130915T105307783test.uisapp2.iu.edu2">View Grades (SIS Student Center)</option>
                                                <option label="View Unofficial Transcript (SIS Student Center)" value="string:20130926T0252577631-test.iu.edu2">View Unofficial Transcript (SIS Student Center)</option>
                                                <option label="View/Edit Optional Selections (SIS)" value="string:20150612T094250050one.iu.edu6">View/Edit Optional Selections (SIS)</option>
                                                <option label="View/Manage My Financial Aid Information" value="string:20130907T095230476test.uisapp2.iu.edu6">View/Manage My Financial Aid Information</option>
                                                <option label="View/Pay Bursar Bill (IU Bursar Pay)" value="string:20131022T023404388one.iu.edu2">View/Pay Bursar Bill (IU Bursar Pay)</option>
                                                <option label="Virtual Reality Theater: IUPUI Indianapolis" value="string:20150123T113247896one.iu.edu57">Virtual Reality Theater: IUPUI Indianapolis</option>
                                                <option label="Visualization &amp; Collaboration Theater: IU Bloomington" value="string:20150123T113412278one.iu.edu58">Visualization &amp; Collaboration Theater: IU Bloomington</option>
                                                <option label="Visualization Facilities and Services" value="string:20150123T113539924one.iu.edu59">Visualization Facilities and Services</option>
                                                <option label="VM Request - Quarry Gateway Web Services Hosting" value="string:20150123T113754436one.iu.edu60">VM Request - Quarry Gateway Web Services Hosting</option>
                                                <option label="VPR Internal Funding (InfoReady)" value="string:20150626T063821352one.iu.edu2">VPR Internal Funding (InfoReady)</option>
                                                <option label="VPR/OVPR Finance Quick Links" value="string:20150616T121637920one.iu.edu1">VPR/OVPR Finance Quick Links</option>
                                                <option label="W-2 Electronic Consent" value="string:20140306T012000002one.iu.edu1">W-2 Electronic Consent</option>
                                                <option label="W-2 Tax Form" value="string:20140306T012612704one.iu.edu2">W-2 Tax Form</option>
                                                <option label="Waiver Request (Academic Position Search)" value="string:20160613T095914542one.iu.edu6">Waiver Request (Academic Position Search)</option>
                                                <option label="Wake on Lan" value="string:20141219T112348418one.iu.edu2">Wake on Lan</option>
                                                <option label="WCMS Web Help: IU Kokomo" value="string:20151105T054349931one.iu.edu1">WCMS Web Help: IU Kokomo</option>
                                                <option label="Weave Online" value="string:20151030T081151318one.iu.edu1">Weave Online</option>
                                                <option label="Web Content Management System (WCMS)" value="string:20140210T011523189one.iu.edu1">Web Content Management System (WCMS)</option>
                                                <option label="Website Privacy Notice Generator" value="string:20150430T110942786one.iu.edu1">Website Privacy Notice Generator</option>
                                                <option label="Weeks of Welcome (WOW): IUPUI Indianapolis" value="string:20160511T102031298one.iu.edu0">Weeks of Welcome (WOW): IUPUI Indianapolis</option>
                                                <option label="Wells Learning Commons: IU Bloomington" value="string:20160816T013856828one.iu.edu0">Wells Learning Commons: IU Bloomington</option>
                                                <option label="What-If Academic Advisement Report" value="string:20130906T103504336test.uisapp2.iu.edu6">What-If Academic Advisement Report</option>
                                                <option label="What-If Academic Advisement Report (Public)" value="string:20160405T121759797one.iu.edu0">What-If Academic Advisement Report (Public)</option>
                                                <option label="Wired Device Registration: IU Bloomington, IUPUI Indianapolis" value="string:20160729T124502821one.iu.edu1">Wired Device Registration: IU Bloomington, IUPUI Indianapolis</option>
                                                <option label="Workflow Group Lookup (Kuali Rice)" value="string:20150203T115412537one.iu.edu9">Workflow Group Lookup (Kuali Rice)</option>
                                                <option label="Workflow Rule Delegations (Kuali Rice)" value="string:20150203T113000227one.iu.edu3">Workflow Rule Delegations (Kuali Rice)</option>
                                                <option label="Workflow Rules (Kuali Rice)" value="string:20150203T112835000one.iu.edu2">Workflow Rules (Kuali Rice)</option>
                                                <option label="Workflow User Preferences (Kuali Rice)" value="string:20150203T113730074one.iu.edu7">Workflow User Preferences (Kuali Rice)</option>
                                                <option label="Workshop materials for instructors" value="string:20140507T115744962one.iu.edu6">Workshop materials for instructors</option>
                                                <option label="Workshop requests" value="string:20140502T041536445one.iu.edu2">Workshop requests</option>
                                                <option label="Writing Center: IU Northwest" value="string:20151028T010948656one.iu.edu2">Writing Center: IU Northwest</option>
                                                <option label="Writing Help: IUPUI Indianapolis" value="string:20170316T115412892one.iu.edu6">Writing Help: IUPUI Indianapolis</option>
                                                <option label="Zoom (Zoom Web Collaboration)" value="string:20170120T015934900one.iu.edu0">Zoom (Zoom Web Collaboration)</option>
                                            </select>
                                        </div>
                                        <div class="page-utilities-item col-sm-4 col-xs-6">
                                            <select  class="form-control input-sm" aria-invalid="false" style="">
                                                <option  selected="selected">Select Version</option>
                                                <option >1.4.0 (Current)</option>
                                                <option >1.2.0</option>
                                                <option  >1.0.0</option>
                                            </select>
                                        </div>
                                    </div>
                                    <table class="table table-hover table-condensed table-actions display tablesaw tablesaw-stack"  data-tablesaw-mode="stack" id="table1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Alias Name<span class="small text-muted hidden-xs"></span></th>
                                                <th>Title </th>
                                                <th>Post Date</th>
                                                <th><span class="visible-xs">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">Abdul E</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Student</td>
                                                <td class="">Aug 22, 2017 5:52 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Anon</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Employee</td>
                                                <td class="">Aug 22, 2017 4:03 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Christopher W</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Not Authorized</td>
                                                <td class="">Aug 22, 2017 2:08 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Ned</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Horrible Search</td>
                                                <td class="">Aug 22, 2017 12:19 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Zack M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Simple and Easy</td>
                                                <td class="">Aug 22, 2017 12:07 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Nicolo F</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Not Authorized</td>
                                                <td class="">Aug 21, 2017 5:30 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Sarah C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Awesome</td>
                                                <td class="">Aug 21, 2017 4:52 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Meredith M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Hate this site!</td>
                                                <td class="">Aug 21, 2017 10:32 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Ricky S</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Can't pay</td>
                                                <td class="">Aug 20, 2017 5:41 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Kevin</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Difficult interface</td>
                                                <td class="">Aug 20, 2017 4:34 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Andrew H</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Terrible terrible…</td>
                                                <td class="">Aug 20, 2017 2:46 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Andrew M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Denied access</td>
                                                <td class="">Aug 20, 2017 1:02 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Lucille</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Starting Point</td>
                                                <td class="">Aug 19, 2017 11:46 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Morgan C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Love it!</td>
                                                <td class="">Aug 19, 2017 3:03 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Anon</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Can never get in</td>
                                                <td class="">Aug 18, 2017 2:28 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Claire A</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">no access</td>
                                                <td class="">Aug 18, 2017 2:26 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Nina U</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">won't let me acce…</td>
                                                <td class="">Aug 18, 2017 12:14 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Sheryl</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Addl Information …</td>
                                                <td class="">Aug 18, 2017 11:16 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jesse B</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">No access</td>
                                                <td class="">Aug 17, 2017 4:25 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">w y</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">terrible user exp…</td>
                                                <td class="">Aug 17, 2017 3:01 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Nicky</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Terrible</td>
                                                <td class="">Aug 17, 2017 9:13 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jen</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Needs Notifications</td>
                                                <td class="">Aug 16, 2017 4:58 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Evan C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Worked Great for …</td>
                                                <td class="">Aug 16, 2017 4:00 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Dessie R</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">To unorganized</td>
                                                <td class="">Aug 15, 2017 8:00 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Noma M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">UITS Sustainable …</td>
                                                <td class="">Aug 15, 2017 12:10 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Xi W</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">What I can do if …</td>
                                                <td class="">Aug 15, 2017 12:11 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jeff B</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">employee center</td>
                                                <td class="">Aug 14, 2017 8:45 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Whitney</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Good</td>
                                                <td class="">Aug 14, 2017 2:30 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">MC</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">All you need</td>
                                                <td class="">Aug 14, 2017 11:59 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Laura M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">i can't get in an…</td>
                                                <td class="">Aug 14, 2017 10:57 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Samantha N</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Student</td>
                                                <td class="">Aug 14, 2017 8:22 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">RL</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Trouble with subm…</td>
                                                <td class="">Aug 14, 2017 1:40 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jasmine B</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">this was very lon…</td>
                                                <td class="">Aug 13, 2017 3:39 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jeffrey B</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Umail</td>
                                                <td class="">Aug 13, 2017 12:30 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Mariah T</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">I love canvas</td>
                                                <td class="">Aug 12, 2017 8:12 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Kasandra R</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Cannot Access</td>
                                                <td class="">Aug 12, 2017 4:08 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Hannah P</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Confused</td>
                                                <td class="">Aug 11, 2017 3:52 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Rob L</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">First Time User</td>
                                                <td class="">Aug 11, 2017 10:09 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Shaozhou Z</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Annoying</td>
                                                <td class="">Aug 10, 2017 9:07 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Mariela O</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Preperation</td>
                                                <td class="">Aug 10, 2017 6:31 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Stacia C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Thoughts</td>
                                                <td class="">Aug 10, 2017 2:13 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Sean M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">availability</td>
                                                <td class="">Aug 10, 2017 7:42 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Hasan A</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Terrible</td>
                                                <td class="">Aug 9, 2017 2:56 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Tracey H</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Alternate access?</td>
                                                <td class="">Aug 9, 2017 11:31 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jennifer P</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">This is absolutel…</td>
                                                <td class="">Aug 7, 2017 3:56 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Cheryl</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Additions Needed</td>
                                                <td class="">Aug 7, 2017 1:02 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Alice D</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Could you make th…</td>
                                                <td class="">Aug 7, 2017 10:55 AM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Blair C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Great Tool/Resource</td>
                                                <td class="">Aug 6, 2017 10:03 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Chiloh W</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Review</td>
                                                <td class="">Aug 3, 2017 4:17 PM</td>
                                                <td><a  class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="currently_flagged" style="display: ;">
                                <section>
                                    <div class="row section-head">
                                        <div class="col-sm-12">
                                            <h3 class="h4">Currently Flagged</h3>
                                        </div>
                                    </div>
                                    <table class="table table-actions table-condensed" ng-show="reviews.length > 0" aria-hidden="false" style="">
                                        <thead>
                                            <tr>
                                                <th>Alias Name</th>
                                                <th>Title</th>
                                                <th>Post Date</th>
                                                <th><span class="visible-xs">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!---->
                                            <tr ng-repeat="review in reviews" class="" style="">
                                                <td>Tom C</td>
                                                <td ng-bind-html="::review.title|truncate:20"> Needs Notifications</td>
                                                <td>Nov 11, 2016 3:38 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <!---->
                                            <tr ng-repeat="review in reviews" class="">
                                                <td>Jeremy H</td>
                                                <td ng-bind-html="::review.title|truncate:20">Not Authorized</td>
                                                <td>Apr 8, 2016 9:24 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <!---->
                                            <tr ng-repeat="review in reviews" class="">
                                                <td>Clayton S</td>
                                                <td ng-bind-html="::review.title|truncate:20">Hate this site!</td>
                                                <td>Feb 6, 2015 3:56 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <!---->
                                            <tr ng-repeat="review in reviews" class="">
                                                <td>Ryan V</td>
                                                <td ng-bind-html="::review.title|truncate:20">what the...?</td>
                                                <td>Jul 22, 2014 3:43 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <!---->
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="resolved_flags" style=" display:;">
                                <section>
                                    <div class="row section-head">
                                        <div class="col-xs-12 col-sm-9 section-header">
                                            <h3 class="h4">Resolved Flags</h3>
                                        </div>
                                        <div class="col-xs-12  col-sm-3 section-controls"></div>
                                    </div>
                                    <table class="table table-hover table-condensed table-actions tablesaw tablesaw-stack"  data-tablesaw-mode="stack" id="" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Alias Name</th>
                                                <th>Title</th>
                                                <th>Post Date</th>
                                                <th scope="row"><span class="sr-only">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">Donald Duck</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">terrible user exp…</td>
                                                <td class="">May 18, 2017 4:19 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Thomas Y</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Terrible</td>
                                                <td class="">Feb 26, 2017 8:31 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Ian C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Needs Notifications</td>
                                                <td class="">Dec 19, 2016 12:18 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Lauren C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Worked Great for …</td>
                                                <td class="">Sep 11, 2016 10:11 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Patrick W</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">To unorganized</td>
                                                <td class="">May 17, 2016 6:29 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Emma L</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">UITS Sustainable …</td>
                                                <td class="">Apr 28, 2016 5:25 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">K</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">What I can do if …</td>
                                                <td class="">Apr 21, 2016 7:32 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">S A</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">employee center</td>
                                                <td class="">Mar 25, 2016 2:45 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Hunter M</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Good</td>
                                                <td class="">Mar 21, 2016 6:39 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Kathleen C</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">All you need</td>
                                                <td class="">Jan 30, 2016 8:20 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Anyer</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">i can't get in an…</td>
                                                <td class="">Jan 1, 2016 4:39 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Hasan A</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Student</td>
                                                <td class="">Dec 23, 2015 9:52 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Richard W</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Trouble with subm…</td>
                                                <td class="">Dec 20, 2015 6:40 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Brooke H</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">this was very lon…</td>
                                                <td class="">Nov 26, 2015 9:02 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Krista S</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Umail</td>
                                                <td class="">Nov 26, 2015 10:47 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">stupid test</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">I love canvas</td>
                                                <td class="">Nov 11, 2015 4:02 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Sheryl</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Cannot Access</td>
                                                <td class="">Oct 15, 2015 12:04 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">T. W.</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Confused</td>
                                                <td class="">Oct 14, 2015 2:28 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Scott P</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">First Time User</td>
                                                <td class="">Oct 6, 2015 9:30 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Jesse L</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Annoying</td>
                                                <td class="">Oct 5, 2015 11:39 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Purchasing Helpdesk</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Preperation</td>
                                                <td class="">Aug 28, 2015 8:22 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Sweet Hickory Ham Mike</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Thoughts</td>
                                                <td class="">Aug 20, 2015 2:08 AM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Allen K</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">availability</td>
                                                <td class="">Aug 16, 2015 3:43 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                            <tr>
                                                <td class="">Felipe L</td>
                                                <td class="" ng-bind-html="::review.title|truncate:20">Terrible</td>
                                                <td class="">Aug 8, 2015 5:16 PM</td>
                                                <td><a class="btn btn-default btn-xs" href="#">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="requested_deactivations" style=" display:">
                                <div class="row section-head">
                                    <div class="col-xs-12 col-sm-9 section-header">
                                        <h3 class="h4">Requested Deactivations</h3>
                                    </div>
                                    <div class="col-xs-12  col-sm-3 section-controls"></div>
                                </div>
                                <hr>
                                <p class="">There are currently no requested deactivations.</p>
                                <hr>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="review_replies" style=" display: ;">
                                <div class="row section-head">
                                    <div class="col-xs-12 col-sm-9 section-header">
                                        <h3 class="h4">Review Replies</h3>
                                    </div>
                                    <div class="col-xs-12  col-sm-3 section-controls"></div>
                                </div>
                                <table class="table table-condensed  table-actions tablesaw tablesaw-stack" data-tablesaw-mode="stack" id="">
                                    <thead>
                                        <tr>
                                            <th>Display Name</th>
                                            <th>Review Title</th>
                                            <th> Response Text</th>
                                            <th>Post Date</th>
                                            <th><span class="visible-xs">Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SIS</td>
                                            <td>Unable to upload documents</td>
                                            <td>I am sorry that you are having issues uploading a new...<a href="#" style="font-style:italic">(more)</a></td>
                                            <td >Jul 15, 2017 7:27 AM</td>
                                            <td ><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default"> Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>SIS</td>
                                            <td>The Worst Interface</td>
                                            <td>Thank you for your comment and alerting us to the broken...<a href="#" style="font-style:italic">(more)</a></td>
                                            <td >Jul 11, 2017 9:48 AM</td>
                                            <td ><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-xs btn-default"> Delete</a></td>
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
