
<div class="modal fade" id="modal_taskcontacts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Task Contacts</h4>
            </div>
            <div class="modal-body">
            
            
             <div class="header-form-section" style="margin-top:0px">
                                        <h3>Contact Name</h3>
                                    </div>
                                    
                                    
                                    
                   <div class="form-group ">
                    <label class="control-label" for="tasktitle"> Contact Name </label>
                    <span class="help-block small">Specify the name for this contact (used internally only).</span>
                    <div class="row">
                        <div class="col-sm-6">
                            <select name="methodType"  class="form-control" requireddata-original-title="" title="" aria-invalid="true">
                                <option value="" selected="selected">Select Type</option>
                                <option label="Phone" value="string:P">Phone</option>
                                <option label="Email" value="string:E">Email</option>
                                <option label="Url" value="string:U">Url</option>
                            </select>
                        </div>
                    </div>
                </div>
                
            
           <div class="header-form-section">
                                        <h3> Add Contact Method</h3>
                                    </div>
            
                <div class="form-group ">
                    <label class="control-label" for="tasktitle"> Contact Method Type </label>
                    <span class="help-block small">Specify the type of contact method.</span>
                    <div class="row">
                        <div class="col-sm-6">
                            <select name="methodType"  class="form-control" requireddata-original-title="" title="" aria-invalid="true">
                                <option value="" selected="selected">Select Type</option>
                                <option label="Phone" value="string:P">Phone</option>
                                <option label="Email" value="string:E">Email</option>
                                <option label="Url" value="string:U">Url</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label" for="tasktitle"> Contact Label </label>
                    <span class="help-block small">The display label for this contact method.</span>
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="control-label" for="tasktitle"> Value </label>
                    <span class="help-block small">The value for this contact method. (Actual email address, phone number, or URL).</span>
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="form-control" id="tasktitle" name="tasktitle" type="text" placeholder="" required="required">
                        </div>
                    </div>
                </div>
                
           
   <div class="header-form-section" style="margin-top:0px">
                                        <h3> Current Contact Methods</h3>
                                    </div>
             

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
                            <td style="white-space:nowrap">Phone</td>
                            <td class="forcewrap">Student Help Hotline</td>
                            <td class="forcewrap">812-555-5555</td>
                            <td class="forcewrap"><a href="#" class="btn btn-xs btn-default">Delete</a></td>
                        </tr>
                        <tr>
                             <td style="white-space:nowrap"> Phone</td>
                            <td class="forcewrap">Staff Help Hotline</td>
                            <td class="forcewrap">812-555-5555</td>
                            <td class="forcewrap"><a href="#" class="btn btn-xs btn-default">Delete</a></td>
                        </tr>
                        <tr>
                           <td style="white-space:nowrap">Email</td>
                            <td class="forcewrap">Contact Us</td>
                            <td class="forcewrap"><a href="mailto:">systemsupport@iu.edu</a></td>
                            <td class="forcewrap"><a href="#" class="btn btn-xs btn-default">Delete</a></td>
                        </tr>
                        <tr>
                             <td style="white-space:nowrap">URL</td>
                            <td class="forcewrap">Online Documentation</td>
                            <td class="forcewrap"><a href="https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv">https://iu.box.com/s/v0aa87bou3hv1xjegprj2pse0ocazxcv</a></td>
                            <td class="forcewrap"><a href="#" class="btn btn-xs btn-default">Delete</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button> <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
