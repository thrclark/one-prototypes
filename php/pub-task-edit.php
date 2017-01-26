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
                                                    <label for="title" class="control-label">Widget title</label>
                                                    <div class="counter-container">
                                                        <input type="text" name="title" required="" countdown="" class="form-control   -maxlength -required" popover="The Widget title is how the Widget will be referred to throughout the system." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                        <span class="label pull-right label-info"><span class="counter">91</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="taskUrl" class="control-label">Widget URL</label>
                                                    <div class="counter-container">
                                                        <input type="url" name="taskUrl" class="form-control   -url -maxlength -required" required="" countdown="" popover="The URL will take users to the location where they can perform this Widget." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                                                        <span class="label pull-right label-info"><span class="counter">1976</span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="applicationName" class="control-label">Application Name</label>
                                                    <div class="counter-container">
                                                        <input type="text" name="applicationName" countdown="" class="form-control   -maxlength" popover="The name of the application that provides this Widget. If two Widgettes have the same title, the application can be used to differentiate between them." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                        <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="openInNewWindow" class="control-label">Launch</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="openInNewWindow" class="  " tabindex="0" aria-checked="true" aria-invalid="false">
                                                            Open Widget in a new tab/window </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <label for="authenticated">Authentication Type</label>
                                                    <select class="form-control   " tabindex="0" aria-invalid="false">
                                                        <option value="E" selected="selected" label="External">External</option>
                                                        <option value="F" selected="selected" label="None">None</option>
                                                        <option value="T" label="Internal">Internal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="contactId1" class="control-label">Primary Contact</label>
                                                    <i class="icon-info-circled pull-right" data-toggle="popover" id="selectcontact1" title="Currently Selected" data-placement="top"></i>
                                                    <div id="popover-content" class="hide">
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
                                                    <select id="contactId1" class="form-control   -required" required tabindex="0" aria-required="false" aria-invalid="false">
                                                        <option value="">Select Contact</option>
                                                        <option value="10" label="CyberDH Group">CyberDH Group</option>
                                                        <option value="11" label="David's Contact name">David's Contact name</option>
                                                        <option value="duo" label="Duo Support Team">Duo Support Team</option>
                                                        <option value="13" label="eApp Instructions">eApp Instructions</option>
                                                        <option value="14" label="eDossier Administrator">eDossier Administrator</option>
                                                        <option value="15" label="eText Administrator">eText Administrator</option>
                                                        <option value="16" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                                        <option value="17" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                                        <option value="18" label="Financial Management Services">Financial Management Services</option>
                                                        <option value="19" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                                        <option value="20" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                                        <option value="21" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                                        <option value="22" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                                        <option value="23" label="IT Customer Support">IT Customer Support</option>
                                                        <option value="24" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                                        <option value="25" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                                        <option value="26" label="IUB Libraries">IUB Libraries</option>
                                                        <option value="27" label="IUPUI Athletics">IUPUI Athletics</option>
                                                        <option value="28" label="IUPUI Libraries">IUPUI Libraries</option>
                                                        <option value="29" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                                        <option value="30" label="OCSS">OCSS</option>
                                                        <option value="31" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                                        <option value="32" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                                        <option value="33" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                                        <option value="34" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                                        <option value="35" label="Office of International Services">Office of International Services</option>
                                                        <option value="36" label="Office of Research Administration">Office of Research Administration</option>
                                                        <option value="37" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                                        <option value="38" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                                        <option value="39" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                                        <option value="40" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                                        <option value="41" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                        <option value="44" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                                        <option value="45" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                                        <option value="46" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                                        <option value="47" label="Physical Plant">Physical Plant</option>
                                                        <option value="48" label="Redhawk Review">Redhawk Review</option>
                                                        <option value="49" label="Research Storage">Research Storage</option>
                                                        <option value="50" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                                        <option value="51" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                                        <option value="52" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                                        <option value="53" label="Science Gateway">Science Gateway</option>
                                                        <option value="54" label="Scott test">Scott test</option>
                                                        <option value="55" label="Student Aid offices">Student Aid offices</option>
                                                        <option value="56" label="Super David">Super David</option>
                                                        <option value="57" label="test contact">test contact</option>
                                                        <option value="58" label="test contact types">test contact types</option>
                                                        <option value="59" label="The Horizon">The Horizon</option>
                                                        <option value="60" label="UITS Research Technologies">UITS Research Technologies</option>
                                                        <option value="61" label="UITS Support Center">UITS Support Center</option>
                                                        <option value="62" label="University Human Resources">University Human Resources</option>
                                                        <option value="63" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                                        <option value="64" label="Veteran Support Services">Veteran Support Services</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="contactId2" class="control-label">Secondary Contact</label>
                                                    <i class="icon-info-circled pull-right" data-toggle="popover" id="selectcontact2" title="Currently Selected" data-placement="top"></i>
                                                    <div id="popover-content2" class="hide">
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
                                                    <select id="contactId2"  class="form-control   " tabindex="0" aria-invalid="false">
                                                        <option value="">Select Contact</option>
                                                        <option value="">None </option>
                                                        <option value="10" label="CyberDH Group">CyberDH Group</option>
                                                        <option value="11" label="David's Contact name">David's Contact name</option>
                                                        <option value="duo" label="Duo Support Team">Duo Support Team</option>
                                                        <option value="13" label="eApp Instructions">eApp Instructions</option>
                                                        <option value="14" label="eDossier Administrator">eDossier Administrator</option>
                                                        <option value="15" label="eText Administrator">eText Administrator</option>
                                                        <option value="16" label="Financial Aid &amp; Scholarships (IU East)">Financial Aid &amp; Scholarships (IU East)</option>
                                                        <option value="17" label="Financial Aid and Scholarships (IUPUC)">Financial Aid and Scholarships (IUPUC)</option>
                                                        <option value="18" label="Financial Management Services">Financial Management Services</option>
                                                        <option value="19" label="Frances Adjorlolo">Frances Adjorlolo</option>
                                                        <option value="20" label="High Performance File Systems Group">High Performance File Systems Group</option>
                                                        <option value="21" label="Indiana University Department of Intercollegiate Athletics">Indiana University Department of Intercollegiate Athletics</option>
                                                        <option value="22" label="Indiana University Foundation - Scholarships and Awards">Indiana University Foundation - Scholarships and Awards</option>
                                                        <option value="23" label="IT Customer Support">IT Customer Support</option>
                                                        <option value="24" label="IU Advancement IQ e-docs">IU Advancement IQ e-docs</option>
                                                        <option value="25" label="IU Southeast Bookstore">IU Southeast Bookstore</option>
                                                        <option value="26" label="IUB Libraries">IUB Libraries</option>
                                                        <option value="27" label="IUPUI Athletics">IUPUI Athletics</option>
                                                        <option value="28" label="IUPUI Libraries">IUPUI Libraries</option>
                                                        <option value="29" label="KFS Resources &amp; Support">KFS Resources &amp; Support</option>
                                                        <option value="30" label="OCSS">OCSS</option>
                                                        <option value="31" label="Office of Admissions - IU Northwest">Office of Admissions - IU Northwest</option>
                                                        <option value="32" label="Office of Financial Aid (IU Southeast)">Office of Financial Aid (IU Southeast)</option>
                                                        <option value="33" label="Office of Financial Aid and Scholarship (IU South Bend)">Office of Financial Aid and Scholarship (IU South Bend)</option>
                                                        <option value="34" label="Office of Financial Aid and Scholarships (IU Northwest)">Office of Financial Aid and Scholarships (IU Northwest)</option>
                                                        <option value="35" label="Office of International Services">Office of International Services</option>
                                                        <option value="36" label="Office of Research Administration">Office of Research Administration</option>
                                                        <option value="37" label="Office of Residence Life and Housing">Office of Residence Life and Housing</option>
                                                        <option value="38" label="Office of Scholarships (IU Bloomington)">Office of Scholarships (IU Bloomington)</option>
                                                        <option value="39" label="Office of Scholarships and Financial Aid (IU Kokomo)">Office of Scholarships and Financial Aid (IU Kokomo)</option>
                                                        <option value="40" label="Office of Student Scholarships (IUPUI)">Office of Student Scholarships (IUPUI)</option>
                                                        <option value="41" label="Office of the Registrar - Bloomington">Office of the Registrar - Bloomington</option>
                                                        <option value="44" label="Parking and Transportation Services - IUPUI">Parking and Transportation Services - IUPUI</option>
                                                        <option value="45" label="Parking Operations - Bloomington">Parking Operations - Bloomington</option>
                                                        <option value="46" label="Parking Services - Kokomo">Parking Services - Kokomo</option>
                                                        <option value="47" label="Physical Plant">Physical Plant</option>
                                                        <option value="48" label="Redhawk Review">Redhawk Review</option>
                                                        <option value="49" label="Research Storage">Research Storage</option>
                                                        <option value="50" label="Residential Programs and Services (RPS)">Residential Programs and Services (RPS)</option>
                                                        <option value="51" label="Ruth Lilly Law Library">Ruth Lilly Law Library</option>
                                                        <option value="52" label="School of Education (Bloomington) Career Connections">School of Education (Bloomington) Career Connections</option>
                                                        <option value="53" label="Science Gateway">Science Gateway</option>
                                                        <option value="54" label="Scott test">Scott test</option>
                                                        <option value="55" label="Student Aid offices">Student Aid offices</option>
                                                        <option value="56" label="Super David">Super David</option>
                                                        <option value="57" label="test contact">test contact</option>
                                                        <option value="58" label="test contact types">test contact types</option>
                                                        <option value="59" label="The Horizon">The Horizon</option>
                                                        <option value="60" label="UITS Research Technologies">UITS Research Technologies</option>
                                                        <option value="61" label="UITS Support Center">UITS Support Center</option>
                                                        <option value="62" label="University Human Resources">University Human Resources</option>
                                                        <option value="63" label="University Student Services &amp; Systems">University Student Services &amp; Systems</option>
                                                        <option value="64" label="Veteran Support Services">Veteran Support Services</option>
                                                    </select>
                                                </div>
                                                <div ng-if="pageData.mobileFriendlyEnabled" class="form-group col-md-3">
                                                    <label for="mobileFriendly" class="control-label">Mobile</label>
                                                    <div class="checkbox">
                                                        <label popover="This Widget is mobile-friendly and is usable on mobile devices such as phones and tablets." trigger="hover" data-original-title="" title="">
                                                            <input type="checkbox" name="mobileFriendly" class="  " tabindex="0" aria-checked="false" aria-invalid="false">
                                                            This Widget is mobile-friendly. </label>
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
