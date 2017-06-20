   <div class="modal fade" id="modal_publishdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-default" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Submit Task for Approval</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="control-label " for="api_account_type"> Publish Date Options </label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="1">
                                    Upon approval, publish this task immediately. </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="2">
                                    Upon approval, leave this task set to 'Inactive'.</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="cars" value="3">
                                    Set this task to 'Active' on a specified date (pending approval).</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 pubdate_widget pubdate_widget3"  style="display:none">
                            <label for="title" class="control-label">Set Date</label>
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
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Submit Task for Approval</button>
                </div>
            </div>
        </div>
    </div>