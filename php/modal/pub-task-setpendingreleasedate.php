
<div class="modal fade" id="modal_setpendingreleasedate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Task Updates Release Date</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="control-label " for="api_account_type">Please select</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="cars" value="2">
                                Do not specify a date for updates to this task to be released</label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="cars" value="3">
                                Specify a date for updates to this task to be released </label>
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
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">//<![CDATA[



$(document).ready(function() {

    $("#modal_setpendingreleasedate input[name$='cars']").click(function() {
        var test = $(this).val();

        $("#modal_setpendingreleasedate .pubdate_widget3").slideUp();
        $("#modal_setpendingreleasedate .pubdate_widget" + test).slideDown();
    });
	
	 
	
	
});

</script> 

