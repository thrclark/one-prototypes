
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " >
        <div class="modal-content sd-modal informational">
            <div class="container-fluid ">
                <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-cog"></i></div>
                <div class="col-md-11 col-xs-height col-full-height sd-modal-content" style="padding-top:15px">
                    <div class="row form-group" id="feedback_block">
                        <div class="col-xs-12">
                            <h4 class="category" id="reviews">Preferences</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="  position: absolute;
  right: 10px;
  top: -3px;"> <i class="icon-cancel-3"></i> <span class="sr-only" aria-hidden="true">Close preferences.</span> </button>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="defaultcampus" class="col-sm-3 control-label">Default Campus</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" tabindex="0" aria-invalid="false" id="defaultcampus">
                                            <option value="All {{pageData.marketsTitle}}" selected="selected" label="All IU Campuses">All IU Campuses</option>
                                            <option value="IU Bloomington" label="IU Bloomington">IU Bloomington</option>
                                            <option value="IU East" label="IU East">IU East</option>
                                            <option value="IU Kokomo" label="IU Kokomo">IU Kokomo</option>
                                            <option value="IU Northwest" label="IU Northwest">IU Northwest</option>
                                            <option value="IU South Bend" label="IU South Bend">IU South Bend</option>
                                            <option value="IU Southeast" label="IU Southeast">IU Southeast</option>
                                            <option value="IUPUC Columbus" label="IUPUC Columbus">IUPUC Columbus</option>
                                            <option value="IUPUI Indianapolis" label="IUPUI Indianapolis">IUPUI Indianapolis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tasklaunch" class="col-sm-3 control-label">Task Launch</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox"> <span class="text-muted checkboxdesc">
                                            <input id="tasklaunch" type="checkbox">
                                            Always open Tasks in a new window. </span> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="featuredtask" class="col-sm-3 control-label">Featured Tasks</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox"> <span class="text-muted checkboxdesc">
                                            <input id="featuredtask" type="checkbox">
                                            Don't show Featured Tasks carousel </span> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hideactivecontent" class="col-sm-3 control-label">Active Content</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox"> <span class="text-muted checkboxdesc">
                                            <input type="checkbox" id="hideactivecontent">
                                            Don't show Active Content on task tiles </span> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="showcatfilter" class="col-sm-3 control-label">Search Filter</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox"> <span class="text-muted checkboxdesc">
                                            <input type="checkbox" id="showcatfilter">
                                            Enable category filter on search </span> </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                 <div class="form-group">
                                    <label for="showalert" class="col-sm-3 control-label">Show Alert</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox"> <span class="text-muted checkboxdesc">
                                            <input type="checkbox" id="showalert">
                                            Show alert banner (prototype only) </span> </div>
                                    </div>
                                </div>
                                
                                
                                
                               
                            </div>
                        </div>
                    </div>
                    <div class="announcement-footer">
                        <div class="row">
                            <div class="col-md-6"> </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){

$(".dropdown-menu li a").click(function(){

  $(this).parents(".btn-group").find('.selection').text($(this).text());
  $(this).parents(".btn-group").find('.selection').val($(this).text());

});

});
</script>