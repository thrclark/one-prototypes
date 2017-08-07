
<div class="modal fade" id="modal_scheduleaction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Schedule Action</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label " for="api_account_type"> Edit the scheduling of this action</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="actionschedule" value="1">
                                Leave this action as unscheduled. </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="actionschedule" value="3">
                                Specify date on which this action will take place. </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" id="pubdatee_widget3" style="display: none;">
                        <label for="title" class="control-label"> Date of Action</label>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="counter-container">
                                    <input type="text" name="title" required="" countdown="" class="form-control picktime" tabindex="0" aria-required="false" aria-invalid="false">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--    <div class="modal-body">
                <div class="row">
                   
                    <div class="form-group col-md-12">
                        <label for="title" class="control-label">Date of Action</label>
                        
                        <span class="help-block small">Set a date for this action to be performed.</span>
                        
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="counter-container">
                                    <input type="text" name="title" required="" countdown="" class="form-control picktime"  tabindex="0" aria-required="false" aria-invalid="false">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("input[name$='actionschedule']").click(function() {
            var test = $(this).val();
            $("#pubdatee_widget3").slideUp();
            $("#pubdatee_widget" + test).slideDown();
        });
    });
</script> 
