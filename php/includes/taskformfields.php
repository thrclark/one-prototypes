
<fieldset>
    <legend>General</legend>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="title" class="control-label">Task  title</label>
            <div class="counter-container">
                <input type="text" name="title" required="" countdown="" class="form-control   -maxlength -required" popover="The Task  title is how the Task  will be referred to throughout the system." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                <span class="label pull-right label-info"><span class="counter">91</span><span class="sr-only"> characters remaining</span></span> </div>
        </div>
        <div class="form-group col-md-3">
            <label for="taskUrl" class="control-label">Task  URL</label>
            <div class="counter-container">
                <input type="url" name="taskUrl" class="form-control   -url -maxlength -required" required="" countdown="" popover="The URL will take users to the location where they can perform this Task ." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                <span class="label pull-right label-info"><span class="counter">1976</span><span class="sr-only"> characters remaining</span></span> </div>
        </div>
        <div class="form-group col-md-3">
            <label for="applicationName" class="control-label">Application Name</label>
            <div class="counter-container">
                <input type="text" name="applicationName" countdown="" class="form-control   -maxlength" popover="The name of the application that provides this Task . If two tasks have the same title, the application can be used to differentiate between them." data-original-title="" title="" tabindex="0" aria-invalid="false">
                <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
        </div>
        <div class="form-group col-md-3">
            <label for="openInNewWindow" class="control-label">Launch</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="openInNewWindow" class="  " tabindex="0" aria-checked="true" aria-invalid="false">
                    Open Task  in a new tab/window </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="authenticated">Authentication Type</label>
            <select class="form-control   " tabindex="0" aria-invalid="false">
                <option value="1" selected="selected" label="External">External</option>
                <option value="2" selected="selected" label="None">None</option>
                <option value="3" label="Internal">Internal</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="contactId1" class="control-label">Primary Contact</label>
            <i class="icon-info-circled pull-right"  id="selectcontact1" data-toggle="modal" data-target="#modal_contactinfo"></i>
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
        </div>
        <div class="form-group col-md-3">
            <label for="contactId2" class="control-label">Secondary Contact</label>
            <i class="icon-info-circled pull-right"  id="selectcontact2" data-toggle="modal" data-target="#modal_contactinfo"></i>
            <select id="contactId2"  class="form-control   " tabindex="0" aria-invalid="false">
                <option value="">Select Contact</option>
                <option value="duo">None </option>
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
        </div>
        <div class="form-group col-md-3">
            <label for="mobileFriendly" class="control-label">Mobile</label>
            <div class="checkbox">
                <label popover="This Task  is mobile-friendly and is usable on mobile devices such as phones and tablets." trigger="hover" data-original-title="" title="">
                    <input type="checkbox" name="mobileFriendly" class="  " tabindex="0" aria-checked="false" aria-invalid="false">
                    This Task  is mobile-friendly. </label>
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
                        <textarea name="description" required class="form-control   markItUpEditor -required" rows="5" mark-it-up="" aria-multiline="true" tabindex="0" aria-required="false" aria-invalid="false"></textarea>
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
<!-- <fieldset>
                                            <legend>Active Dates/Status <small class="text-muted" style="text-transform:lowercase;">(currently inactive)</small></legend>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <div class="radio">
                                                        <label class="control-label">
                                                            <input type="radio" value="status" name="15" tabindex="0" aria-checked="true" aria-invalid="false" id="show_status">
                                                            Specify by Status </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="range" name="15" tabindex="0" aria-checked="false" aria-invalid="false" id="show_range">
                                                            Specify End Date</label></div>
                                                </div>
                                                <div style="display:block" aria-hidden="false" id="choose_status">
                                                    <div class="form-group col-md-4">
                                                        <label for="status" class="control-label">Status</label>
                                                        <select class="form-control " required tabindex="0" aria-required="false" aria-invalid="false">
                                                            <option value="A" selected="selected" label="Active">Active</option>
                                                            <option value="I" label="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="display:none" aria-hidden="true" id="choose_range">
                                                   
                                                    <div class="form-group col-md-4"> <label for="endDate" class="control-label">End Date </label>
                                                        <input type="text" name="endDate" datepicker="body" time="" class="form-control picktime" title="" tabindex="0" aria-invalid="false">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>-->
<fieldset>
    <legend>Versioning</legend>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="displayVersion" class="control-label">Version Number</label>
            <input type="text" name="displayVersion" ng-pattern="/^[0-9]+\.[0-9]+\.[0-9]+(\-[0-9a-z]+)?$/" ng-maxlength="10" unique="/publish/task/validateDisplayVersion" entity-id="15322" class="form-control ng-pristine ng-untouched ng-valid-pattern ng-valid-maxlength ng-valid ng-valid-required" required="" popover="Versioning helps users to identify when improvements have been made to the service.  Note that when this version number changes, comments and ratings will start over, but the old ones will be kept for review." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label class="control-label">Release Notes</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" name="releaseNote" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-maxlength="1000" popover="Add notes to inform users of changes or new features in this version." data-original-title="" title="" tabindex="0" aria-invalid="false">
            </div>
            <div class="form-group">
                <button class="btn btn-default pull-right" type="button" ng-disabled="releaseNote == null || releaseNote.length == 0" tabindex="0" aria-disabled="true" disabled="disabled">Add</button>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="form-group col-md-8">
            <div class="well release-notes">
                <ul class="list-unstyled ng-pristine ng-untouched ng-valid ui-sortable" ui-sortable="" tabindex="0" aria-invalid="false">
                </ul>
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend class=""> Additional Information </legend>
    <div class="">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="uniqueKey" class="control-label">Unique Key</label>
                <div class="counter-container">
                    <input type="text" name="uniqueKey" unique="/publish/task/validateUniqueKey" unique-data="task.markets" ng-pattern="/^[a-z0-9\\-]+$/" entity-id="15322" required="" ng-maxlength="100" countdown="" class="form-control ng-pristine ng-untouched ng-valid-pattern ng-valid-maxlength ng-valid ng-valid-required" popover="The unique key uniquely identifies this Task in its Campuses (if any). This value will be used as part of the URL for this Task." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                    <span class="label pull-right label-info"><span class="counter">92</span><span class="sr-only"> characters remaining</span></span> </div>
            </div>
            <div class="form-group col-md-3">
                <label for="statType" class="control-label">Stat Recording Type</label>
                <div class="counter-container">
                    <select name="statType" class="form-control " required popover="If the user is logged in, record who the user was with the stat being recorded." data-original-title="" title="" tabindex="0" aria-required="false" aria-invalid="false">
                        <option value="A" selected="selected" label="Anonymous">Anonymous</option>
                        <option value="U" label="User">User</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<fieldset aria-hidden="false">
    <legend>Publisher</legend>
    <div>
        <div class="row">
            <div class="form-group col-md-3">
                <select name="publisherId" class="form-control " required tabindex="0" aria-required="false" aria-invalid="false">
                    <option value="0" selected="selected" label="AIT">AIT</option>
                    <option value="1" label="dhdyer Test Publisher">dhdyer Test Publisher</option>
                    <option value="2" label="Jeremy Walker">Jeremy Walker</option>
                    <option value="3" label="One.IU Team">One.IU Team</option>
                    <option value="4" label="Research Technologies">Research Technologies</option>
                    <option value="5" label="SIS Test">SIS Test</option>
                    <option value="6" label="Test Publisher">Test Publisher</option>
                    <option value="7" label="Test Publisher 2">Test Publisher 2</option>
                    <option value="8" label="Training Test">Training Test</option>
                </select>
            </div>
            <div class="form-group col-md-9">
                <p class="form-control-static"></p>
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Icon Images</legend>
    <div class="form-group ">
        <label class="control-label " for="api_account_type">Select the source of the icon image </label>
        <div class="radio">
            <label>
                <input type="radio" name="cars" value="1" id="show_custom">
                Custom image upload </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="cars" value="2" id="show_library">
                Selected from current library </label>
        </div>
    </div>
    <div class="form-group" id="custom_upload" style="display:none">
        <div class="" id="uploadImages">
            <label class="control-label " for="api_account_type">Select the source of the icon image </label>
            <div class="row">
                <div class="form-group col-sm-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ng-valid ng-dirty ng-valid-parse ng-touched" tabindex="0" aria-checked="true" aria-invalid="false">
                            Automatically generate smaller image sizes. </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label class="control-label">Large Image (153×153)</label>
                    <div data-size="5"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                        <input type="file" fileupload="" name="files[]">
                        </span>
                        <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                        <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/153x153.jpg" aria-hidden="false" class=""> </div>
                    </div>
                </div>
                <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                    <label class="control-label">Small Retina Image (144×144)</label>
                    <div data-size="4"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                        <input type="file" fileupload="" name="files[]">
                        </span>
                        <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                        <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/144x144.jpg" aria-hidden="false" class=""> </div>
                    </div>
                </div>
                <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                    <label class="control-label">Medium Image (90×90)</label>
                    <div data-size="2"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                        <input type="file" fileupload="" name="files[]">
                        </span>
                        <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                        <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/90x90.jpg" aria-hidden="false" class=""> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                    <label class="control-label">Small Image (72×72)</label>
                    <div data-size="3"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                        <input type="file" fileupload="" name="files[]">
                        </span>
                        <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                        <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/72x72.jpg" aria-hidden="false" class=""> </div>
                    </div>
                </div>
                <div class="form-group col-md-3 ng-hide" aria-hidden="true">
                    <label class="control-label">Very Small Image (31×31)</label>
                    <div data-size="1"> <span class="btn btn-default btn-xs fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                        <input type="file" fileupload="" name="files[]">
                        </span>
                        <button type="button" class="btn btn-default btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-trash"></i> </button>
                        <div class="panel"> <img alt="your uploaded image" src="../img/task-icons-new/publishing/31x31.jpg" aria-hidden="false" class=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group" id="image_library" style="display:none">
        <div class="row">
            <div class="col-md-4">
                <label for="imageSetId" class="control-label">Choose an Image</label>
                <select name="imageSetId" class="form-control" tabindex="0" aria-invalid="false">
                    <option value="0" label="A Example">A Example</option>
                    <option value="1" label="A Test">A Test</option>
                    <option value="2" label="Admissions">Admissions</option>
                    <option value="3" label="Alert">Alert</option>
                    <option value="4" label="Approved">Approved</option>
                    <option value="5" label="Blocked">Blocked</option>
                    <option value="6" label="Box test">Box test</option>
                    <option value="7" label="Bus">Bus</option>
                    <option value="8" label="Calendar">Calendar</option>
                    <option value="9" label="Calendar - IU Mobile">Calendar - IU Mobile</option>
                    <option value="10" label="Calendar - old">Calendar - old</option>
                    <option value="11" label="Canvas">Canvas</option>
                    <option value="12" label="Cap">Cap</option>
                    <option value="13" label="Car">Car</option>
                    <option value="14" label="Checkbox">Checkbox</option>
                    <option value="15" label="Clipboard">Clipboard</option>
                    <option value="16" label="Cloud">Cloud</option>
                    <option value="17" label="Computer">Computer</option>
                    <option value="18" label="Document">Document</option>
                    <option value="19" label="Down arrow">Down arrow</option>
                    <option value="20" label="Emergency">Emergency</option>
                    <option value="21" label="Gear">Gear</option>
                    <option value="22" label="Globe">Globe</option>
                    <option value="23" label="Google">Google</option>
                    <option value="24" label="Grades">Grades</option>
                    <option value="25" label="Graduation">Graduation</option>
                    <option value="26" label="Guest">Guest</option>
                    <option value="27" label="Hard Drive">Hard Drive</option>
                    <option value="28" label="Holds">Holds</option>
                    <option value="29" label="House">House</option>
                    <option value="30" label="IUPUI">IUPUI</option>
                    <option value="31" label="Key">Key</option>
                    <option value="32" label="Link">Link</option>
                    <option value="33" label="Lock">Lock</option>
                    <option value="34" label="Mail">Mail</option>
                    <option value="35" selected="selected" label="Money">Money</option>
                    <option value="36" label="Nametag">Nametag</option>
                    <option value="37" label="Nodes">Nodes</option>
                    <option value="38" label="OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!">OneStart Running Man plus eighty more characters to fill up this space here and another twenty five!</option>
                    <option value="39" label="Outlink">Outlink</option>
                    <option value="40" label="Papers">Papers</option>
                    <option value="41" label="Password">Password</option>
                    <option value="42" label="People">People</option>
                    <option value="43" label="Question">Question</option>
                    <option value="44" label="Rewind">Rewind</option>
                    <option value="45" label="Rolodex">Rolodex</option>
                    <option value="46" label="Scholarships">Scholarships</option>
                    <option value="47" label="Search">Search</option>
                    <option value="48" label="Star">Star</option>
                    <option value="49" label="Talisma">Talisma</option>
                    <option value="50" label="Tenant Admin test">Tenant Admin test</option>
                    <option value="51" label="test">test</option>
                    <option value="52" label="Test only GLOBE">Test only GLOBE</option>
                    <option value="53" label="Test only MONEY">Test only MONEY</option>
                    <option value="54" label="Textbooks">Textbooks</option>
                    <option value="55" label="Textbooks - old">Textbooks - old</option>
                    <option value="56" label="Urgent">Urgent</option>
                    <option value="57" label="User">User</option>
                    <option value="58" label="Wrench">Wrench</option>
                </select>
                <img src="../img/task-icons-new/icon-bill-pay.png" alt="" style="width:100%"/> </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend> Screen Shots &amp; Video </legend>
    <p class="text-danger ng-hide" aria-hidden="true">At least one desktop screen shot is required</p>
    <p class="text-danger ng-hide" aria-hidden="true">At least one phone screen shot is required</p>
    <div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#desktopImages" data-toggle="tab" eat-click="">Desktop</a></li>
            <li><a href="#tabletImages" data-toggle="tab" eat-click="">Tablet</a></li>
            <li><a href="#phoneImages" data-toggle="tab" eat-click="">Phone</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="desktopImages">
                <div class="row">
                    <div media-upload="task.desktopMedia" url-parameters="'?taskId=' + task.taskId">
                        <div class="form-group col-sm-12">
                            <div class="well media-list">
                                <ul ui-sortable="" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                    <li data-ng-repeat="file in mediaList" class="">
                                        <div data-ng-switch="" data-on="::file.mediaType">
                                            <div data-ng-switch-default="" class=""> <img ng-src="/publish/media/22271" title="" src="/publish/media/22271" class="">
                                                <div>
                                                    <button type="button" class="btn btn-warning btn-xs" tabindex="0"> <i class="icon-edit"></i> <span class="">Add</span> Alt Text </button>
                                                    <button type="button" class="btn btn-danger btn-xs" tabindex="0" aria-hidden="false"> <i class="icon-minus-circled"></i> Delete </button>
                                                    <button ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy btn-xs ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-minus-circled"></i> Delete </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-ng-repeat="file in mediaList" class="">
                                        <div data-ng-switch="" data-on="::file.mediaType">
                                            <div data-ng-switch-when="V" class="">
                                                <div aria-hidden="false">
                                                    <iframe ng-src="https://www.youtube.com/watch?v=3TBOyAOoYZ0" frameborder="0" src="https://www.youtube.com/watch?v=3TBOyAOoYZ0"></iframe>
                                                    <div>
                                                        <button type="button" class="btn btn-danger destroy btn-xs" data-ng-click="deleteMedia(file)" tabindex="0"> <i class="icon-minus-circled"></i> Delete </button>
                                                    </div>
                                                </div>
                                                <div aria-hidden="true" >
                                                    <video width="320" height="240" controls> Your browser does not support the video tag. </video>
                                                    <div>
                                                        <button type="button" class="btn btn-danger destroy btn-xs" data-ng-click="deleteMedia(file)" tabindex="0"> <i class="icon-minus-circled"></i> Delete </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div style="clear: both"></div>
                            </div>
                            Add more files
                            <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" class="ng-pristine ng-valid">
                                <div class="row fileupload-buttonbar">
                                    <div class="col-sm-12">
                                        <div> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                            <input type="file" name="files[]" multiple>
                                            </span>
                                            <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link an image… </button>
                                            <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link a video… </button>
                                            <div class="fileupload-loading"></div>
                                        </div>
                                        <div class="fade" data-ng-class="{true: 'in'}[!!active()]">
                                            <div class="progress" data-file-upload-progress="progress()">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label aria-hidden="true" >Upload Files Queue</label>
                            <div class="well media-list ng-hide" aria-hidden="true">
                                <div style="clear: both"></div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" link-image-dialog="linkedImageUrl" open="open" success-callback="linkImage(imageUrl)">
                            <div class="modal-dialog">
                                <div ng-form="imageLinkForm" class="modal-content ng-pristine ng-valid ng-valid-url ng-valid-pattern" novalidate="">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="imageLinkUrl" class="control-label">URL</label>
                                            <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                            <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                        <button class="btn btn-success" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true" media-caption-dialog="mediaForCaptionEdit.caption" open="open">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" aria-hidden="true" tabindex="0">×</button>
                                        <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div ng-form="altTextForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength">
                                            <div>
                                                <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                                <div class="counter-container">
                                                    <input type="text" name="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                    <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                <div class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" tabindex="0">Cancel</button>
                                        <button class="btn btn-primary" ng-disabled="captionToEdit.length > 200 || captionToEdit == null" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true" link-video-dialog="linkedVideo" open="open" success-callback="linkVideo(linkedVideo)">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div ng-form="videoLinkForm" novalidate="" class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                                <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="youtubeUrl">
                                                    <div class="form-group">
                                                        <label for="videoLinkUrl" class="control-label">URL</label>
                                                        <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="videoFiles">
                                                    <div class="form-group">
                                                        <label for="webmUrl" class="control-label">WebM URL</label>
                                                        <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="oggUrl" class="control-label">Ogg URL</label>
                                                        <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mp4Url" class="control-label">MP4 URL</label>
                                                        <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#uploadThumbnail" data-toggle="tab" eat-click="">Add Thumbnail (100x100)</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div style="max-width:250px;" data-image-upload="image.videothumbnail" data-size="27"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                    <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                    </span>
                                                    <button type="button" class="btn btn-danger ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-trash"></i> </button>
                                                    <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="your uploaded image" src="" aria-hidden="true" > </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" ng-disabled="videoLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tabletImages">
                <div class="row">
                    <div media-upload="task.tabletMedia" url-parameters="'?taskId=' + task.taskId">
                        <div class="form-group col-sm-12">
                            <div class="well media-list">
                                <ul ui-sortable="" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                </ul>
                                <div style="clear: both"></div>
                            </div>
                            Add more files
                            <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" class="ng-pristine ng-valid">
                                <div class="row fileupload-buttonbar">
                                    <div class="col-sm-12">
                                        <div> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                            <input type="file" name="files[]" multiple>
                                            </span>
                                            <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link an image… </button>
                                            <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link a video… </button>
                                            <div class="fileupload-loading"></div>
                                        </div>
                                        <div class="fade" data-ng-class="{true: 'in'}[!!active()]">
                                            <div class="progress" data-file-upload-progress="progress()">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label aria-hidden="true" >Upload Files Queue</label>
                            <div class="well media-list ng-hide" aria-hidden="true">
                                <div style="clear: both"></div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" link-image-dialog="linkedImageUrl" open="open" success-callback="linkImage(imageUrl)">
                            <div class="modal-dialog">
                                <div ng-form="imageLinkForm" class="modal-content ng-pristine ng-valid ng-valid-url ng-valid-pattern" novalidate="">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="imageLinkUrl" class="control-label">URL</label>
                                            <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                            <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                        <button class="btn btn-success" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true" media-caption-dialog="mediaForCaptionEdit.caption" open="open">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" aria-hidden="true" tabindex="0">×</button>
                                        <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div ng-form="altTextForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength">
                                            <div>
                                                <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                                <div class="counter-container">
                                                    <input type="text" name="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                    <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                <div class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" tabindex="0">Cancel</button>
                                        <button class="btn btn-primary" ng-disabled="captionToEdit.length > 200 || captionToEdit == null" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true" link-video-dialog="linkedVideo" open="open" success-callback="linkVideo(linkedVideo)">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div ng-form="videoLinkForm" novalidate="" class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                                <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="youtubeUrl">
                                                    <div class="form-group">
                                                        <label for="videoLinkUrl" class="control-label">URL</label>
                                                        <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="videoFiles">
                                                    <div class="form-group">
                                                        <label for="webmUrl" class="control-label">WebM URL</label>
                                                        <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="oggUrl" class="control-label">Ogg URL</label>
                                                        <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mp4Url" class="control-label">MP4 URL</label>
                                                        <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#uploadThumbnail" data-toggle="tab" eat-click="">Add Thumbnail (100x100)</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div style="max-width:250px;" data-image-upload="image.videothumbnail" data-size="27"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                    <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                    </span>
                                                    <button type="button" class="btn btn-danger ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-trash"></i> </button>
                                                    <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="your uploaded image" src="" aria-hidden="true" > </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" ng-disabled="videoLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="phoneImages">
                <div class="row">
                    <div media-upload="task.phoneMedia" url-parameters="'?taskId=' + task.taskId">
                        <div class="form-group col-sm-12">
                            <div class="well media-list">
                                <ul ui-sortable="" class="ng-pristine ng-untouched ng-valid ui-sortable" tabindex="0" aria-invalid="false">
                                </ul>
                                <div style="clear: both"></div>
                            </div>
                            Add more files
                            <div ng-form="" id="fileupload" action="/publish/task/image" method="POST" enctype="multipart/form-data" file-upload="fileUploadOptions" class="ng-pristine ng-valid">
                                <div class="row fileupload-buttonbar">
                                    <div class="col-sm-12">
                                        <div> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload images…</span>
                                            <input type="file" name="files[]" multiple>
                                            </span>
                                            <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link an image… </button>
                                            <button type="button" class="btn btn-success" tabindex="0"> <i class="icon-plus"></i> Link a video… </button>
                                            <div class="fileupload-loading"></div>
                                        </div>
                                        <div class="fade" data-ng-class="{true: 'in'}[!!active()]">
                                            <div class="progress" data-file-upload-progress="progress()">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" data-ng-style="{width: num + '%'}"> <span class="sr-only">% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label aria-hidden="true" >Upload Files Queue</label>
                            <div class="well media-list ng-hide" aria-hidden="true">
                                <div style="clear: both"></div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" link-image-dialog="linkedImageUrl" open="open" success-callback="linkImage(imageUrl)">
                            <div class="modal-dialog">
                                <div ng-form="imageLinkForm" class="modal-content ng-pristine ng-valid ng-valid-url ng-valid-pattern" novalidate="">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="imageModalLabel">Link an Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="imageLinkUrl" class="control-label">URL</label>
                                            <input type="url" name="imageLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                            <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                        <button class="btn btn-success" ng-disabled="imageLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="captionModalLabel" aria-hidden="true" media-caption-dialog="mediaForCaptionEdit.caption" open="open">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" aria-hidden="true" tabindex="0">×</button>
                                        <h4 class="modal-title" id="captionModalLabel">Edit Alternative Text For Image</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div ng-form="altTextForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength">
                                            <div>
                                                <label for="imageCaption" class="control-label">Alternative (Alt) Text</label>
                                                <div class="counter-container">
                                                    <input type="text" name="imageCaption" ng-maxlength="200" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" popover="Alternative text that can be read by screen readers." data-original-title="" title="" tabindex="0" aria-invalid="false">
                                                    <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
                                                <div class="text-danger ng-hide" aria-hidden="true">Must be no more than 200 characters.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" tabindex="0">Cancel</button>
                                        <button class="btn btn-primary" ng-disabled="captionToEdit.length > 200 || captionToEdit == null" tabindex="0" aria-disabled="true" disabled="disabled">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true" link-video-dialog="linkedVideo" open="open" success-callback="linkVideo(linkedVideo)">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="videoModalLabel">Link a Video</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div ng-form="videoLinkForm" novalidate="" class="ng-pristine ng-valid ng-valid-url ng-valid-pattern">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#youtubeUrl" data-toggle="tab" eat-click="">YouTube / Vimeo</a></li>
                                                <li><a href="#videoFiles" data-toggle="tab" eat-click="">File</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="youtubeUrl">
                                                    <div class="form-group">
                                                        <label for="videoLinkUrl" class="control-label">URL</label>
                                                        <input type="url" name="videoLinkUrl" id="videoLinkUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="videoFiles">
                                                    <div class="form-group">
                                                        <label for="webmUrl" class="control-label">WebM URL</label>
                                                        <input type="url" id="webmUrl" name="webmUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="oggUrl" class="control-label">Ogg URL</label>
                                                        <input type="url" id="oggUrl" name="oggUrl" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mp4Url" class="control-label">MP4 URL</label>
                                                        <input type="url" id="mp4Url" name="mp4Url" ng-pattern="/^https:\/\/.+$/" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-pattern" tabindex="0" aria-invalid="false">
                                                        <p class="text-danger ng-hide" aria-hidden="true">Must be a valid secure URL</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#uploadThumbnail" data-toggle="tab" eat-click="">Add Thumbnail (100x100)</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div style="max-width:250px;" data-image-upload="image.videothumbnail" data-size="27"> <span class="btn btn-success fileinput-button"> <i class="icon-plus"></i> <span>Upload image…</span>
                                                    <input type="file" fileupload="" name="files[]" customdata="customData" uploadurl="/publish/image/media" done="uploadDone(e, data)" fail="uploadFail(e, data)" progress="uploadProgress(e, data)">
                                                    </span>
                                                    <button type="button" class="btn btn-danger ng-hide" tabindex="0" aria-hidden="true"> <i class="icon-trash"></i> </button>
                                                    <div class="panel"> <span data-ng-show="errorMessage" class="file-error ng-hide" aria-hidden="true"> <span class="label label-danger">Error</span> </span> <img alt="your uploaded image" src="" aria-hidden="true" > </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" ng-disabled="videoLinkForm.$invalid" tabindex="0" aria-disabled="false">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<fieldset aria-hidden="false" class="">
    <legend>Campus</legend>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <select class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                    <option value="">All Campuses</option>
                    <option value="0" label="IU Bloomington">IU Bloomington</option>
                    <option value="1" label="IU East">IU East</option>
                    <option value="2" label="IU Kokomo">IU Kokomo</option>
                    <option value="3" label="IU Northwest">IU Northwest</option>
                    <option value="4" label="IU South Bend">IU South Bend</option>
                    <option value="5" label="IU Southeast">IU Southeast</option>
                    <option value="6" label="IUPUC">IUPUC</option>
                    <option value="7" label="IUPUI">IUPUI</option>
                    <option value="8" label="This is a really long campus and/or market name this will likely run off of the screen on the rhs">This is a really long campus and/or market name this will likely run off of the screen on the rhs</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-default pull-right" type="button" tabindex="0">Add</button>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="button-list well"> <span class="label label-default" aria-hidden="false">All Campuses</span></div>
        </div>
    </div>
</fieldset>
<fieldset aria-hidden="false" class="">
    <legend>Roles</legend>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <select class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
                    <option value="">All Roles</option>
                    <option value="0" label="Andrew's role">Andrew's role</option>
                    <option value="1" label="Assistant Faculty">Assistant Faculty</option>
                    <option value="2" label="Delete Me">Delete Me</option>
                    <option value="3" label="Delete Me Role">Delete Me Role</option>
                    <option value="4" label="Faculty">Faculty</option>
                    <option value="5" label="Faculty&quot;}{[]''&quot;&quot;{&quot;test&quot;:&quot;http://www.cnn.com&quot;}">Faculty"}{[]''""{"test":"http://www.cnn.com"}</option>
                    <option value="6" label="Megastaff">Megastaff</option>
                    <option value="7" label="More Roles Please">More Roles Please</option>
                    <option value="8" label="role that overlaps checkmark">role that overlaps checkmark</option>
                    <option value="9" label="Staff">Staff</option>
                    <option value="10" label="Student">Student</option>
                    <option value="11" label="WWWW">WWWW</option>
                    <option value="12" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-default pull-right" type="button" tabindex="0">Add</button>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="button-list well"> <span class="label label-default ng-hide" aria-hidden="true">All Roles</span>
                <button type="button" class="btn btn-default btn-sm" tabindex="0"> Faculty&nbsp;<i class="icon-cancel"></i> </button>
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Categories</legend>
    <div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
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
                        <option value="9" label="Category 4">Category 4</option>
                        <option value="10" label="Category awesome">Category awesome</option>
                        <option value="11" label="Category Example">Category Example</option>
                        <option value="12" label="category with role staff">category with role staff</option>
                        <option value="13" label="Cool Category">Cool Category</option>
                        <option value="14" label="Delete This Because Of The Length">Delete This Because Of The Length</option>
                        <option value="15" label="Dormatories">Dormatories</option>
                        <option value="16" label="Employee Benefits">Employee Benefits</option>
                        <option value="17" label="Empty">Empty</option>
                        <option value="18" label="Faculty Services">Faculty Services</option>
                        <option value="19" label="Finances">Finances</option>
                        <option value="20" label="Housing &amp; Dining">Housing &amp; Dining</option>
                        <option value="21" label="IT Services">IT Services</option>
                        <option value="22" label="Libraries">Libraries</option>
                        <option value="23" label="Payroll and Taxes">Payroll and Taxes</option>
                        <option value="24" label="Personal Information">Personal Information</option>
                        <option value="25" label="Research">Research</option>
                        <option value="26" label="Role'd Up">Role'd Up</option>
                        <option value="27" label="Student Life and Activities">Student Life and Activities</option>
                        <option value="28" label="Tom's Category">Tom's Category</option>
                        <option value="29" label="Training">Training</option>
                        <option value="30" label="Ὀδυσσέα Ἐλύτη">Ὀδυσσέα Ἐλύτη</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-default pull-right" type="button" tabindex="0">Add</button>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="button-list well">
                    <button type="button" class="btn btn-default btn-sm" tabindex="0"> Admissions&nbsp;<i class="icon-cancel"></i> </button>
                    <button type="button" class="btn btn-default btn-sm" tabindex="0"> Administrative&nbsp;<i class="icon-cancel"></i> </button>
                    <button type="button" class="btn btn-default btn-sm" tabindex="0"> Faculty Services&nbsp;<i class="icon-cancel"></i> </button>
                    <button type="button" class="btn btn-default btn-sm" tabindex="0"> Category 3&nbsp;<i class="icon-cancel"></i> </button>
                </div>
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
            <div class="button-list well"></div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Active Content</legend>
    <div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="activeContentUrl" class="control-label">Active Content Public URL</label>
                <div class="counter-container">
                    <input type="url" name="activeContentUrl" ng-maxlength="2000" countdown="" class="form-control ng-pristine ng-untouched ng-valid ng-valid-url ng-valid-maxlength" tabindex="0" aria-invalid="false">
                    <span class="label pull-right"><span class="counter"></span><span class="sr-only"> characters remaining</span></span> </div>
            </div>
            <div class="form-group col-sm-3">
                <label for="activeContentRequiresAuth" class="control-label">Active Content Authentication</label>
                <div class="checkbox">
                    <label popover="Require the user to be signed in before requesting any active content.  This is useful for preventing unnecessary requests when user information is required." trigger="hover" data-original-title="" title="">
                        <input type="checkbox" name="activeContentRequiresAuth" ng-true-value="'T'" ng-false-value="'F'" tabindex="0" aria-checked="false" aria-invalid="false">
                        Require user to be signed in </label>
                </div>
            </div>
            <div class="form-group col-sm-3">
                <label for="activeContentUpdateFrequency" class="">Update Frequency (seconds)</label>
                <input type="number" name="activeContentUpdateFrequency" min="5" max="14400" step="1" class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max" popover="Set the update frequency (in seconds) at which you want a tile to refresh its Active Content. Becareful with how short the interval is because the content will reset back to the first item after a refresh." data-original-title="" title="" tabindex="0" aria-invalid="false">
            </div>
        </div>
    </div>
</fieldset>
