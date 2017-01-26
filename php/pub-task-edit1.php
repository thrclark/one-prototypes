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
s
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
                                    <form name="taskForm" novalidate validate="errors" id="taskForm" class="">
                                        <fieldset>
                                            <legend>General</legend>
                                            <div class="form-group ">
                                                <label class="control-label" for="tasktitle"> Task Title</label>
                                                <span class="help-block small">The Task title is how the Task will be referred to throughout the system.</span>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="taskurl"> Task URL</label>
                                                <span class="help-block small">The URL will take users to the location where they can perform this Task.</span>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="taskurl" name="taskurl" type="text" placeholder="" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="applicationname"> Application Name</label>
                                                <span class="help-block small">The name of the application that provides this Task. If two Tasks have the same title, the application can be used to differentiate between them.</span>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="applicationname" name="applicationname" type="text" placeholder="" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label " for="status">Launch Target </label>
                                                <span class="help-block small">Specify if this task is to open in a new window, or existing window.</span>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="checked">
                                                        New Window </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                        Existing Window </label>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                            <label class="control-label " for="mobilefriendly">Mobile Friendly </label>
                                            <span class="help-block small">Specify if this task has been optimized for mobile devices.</span>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" id="optionsRadios12" value="option1" checked="checked">
                                                    Yes </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" id="optionsRadios12" value="option1">
                                                    No </label>
                                            </div>
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
                                                <label class="control-label" for="contact1"> Primary Contact</label>
                                                <span class="help-block small">Specify the primary contact information to be associated with this task.</span>
                                                <div class="row">
                                                    <div class="col-sm-6">
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
                                                            <table class="popovertable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Name</td>
                                                                        <td>Duo Support Team</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phone</td>
                                                                        <td>123 123 1234</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email</td>
                                                                        <td><a href="#">duo@iu.edu</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="contact2"> Secondary Contact</label>
                                                <span class="help-block small">Specify the secondary contact information to be associated with this task.</span>
                                                <div class="row">
                                                    <div class="col-sm-6">
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
                                                            <table class="popovertable">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Name</td>
                                                                        <td>Duo Support Team</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phone</td>
                                                                        <td>123 123 1234</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email</td>
                                                                        <td><a href="#">duo@iu.edu</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
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
    <?php include('includes/brand-footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
    <script>
    $(function() {
        $('#selectcontact1').hide();
        $('#contactId1').change(function() {
            if ($('#contactId1').val() == 'duo') {
                $('#selectcontact1').slideDown();
            } else {
                $('#selectcontact1').slideUp();
            }
        });
    });
	$(function() {
        $('#selectcontact2').hide();
        $('#contactId2').change(function() {
            if ($('#contactId2').val() == 'duo') {
                $('#selectcontact2').slideDown();
            } else {
                $('#selectcontact2').slideUp();
            }
        });
    });


</script> 
</div>
</body>
</html>
