
<div class="modal fade" id="modalClassifieds" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content sd-modal announcement">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-attention"></i></div>
                    <div class="col-md-11 col-xs-height col-full-height sd-modal-content">
                        <div style=" position:relative">
                            <h4 class="category" style="border-bottom:solid 1px #ccc; padding-bottom:10px; padding-top:10px; margin:0px; margin-bottom:10px">Announcements </h4>
                            <a href="#" class="" id="signinmanage" style="position:absolute; right:0px; top:11px" onClick="alert('Note - at this point, the user would be prompted to authenticate. After authenticating, the user would be able to dismiss anouncements individually or collectively.')">Manage <span class="sr-only">Announcements</span></a> <a href="#" id="dismissall" class="btn btn-default btn-xs" style="display:none;position:absolute; right:0px; top:11px">Dismiss All</a> </div>
                        <div class="announcements-container">
                            
                               
                           
                           
                           
                           
                           <h5> System Maintenance</h5>
                                <p> <span style=" font-style:italic">(9/29/2015)</span> - The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant. </p>  <a href="#" class="btn btn-default btn-xs cb1-control" id="">Dismiss</a>
                        
                        
                         <h5>Security Notice</h5>
                          <p> <span style=" font-style:italic">(9/24/2015)</span> - Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game. </p>  <a href="#" class="btn btn-default btn-xs cb2-control" id="">Dismiss</a>
                        
                            
                            

                        </div>
                        <div class="announcement-footer">
                            <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-default btn-sm dismiss1" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-sm dismiss1" data-dismiss="modal">Launch Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#cb1-control,#cb1-control-modal').change(function(){
        $('#label1,#cb1,#label1-modal,#cb1-modal').hide('fast');

    });
	$('#cb2-control,#cb2-control-modal').change(function(){
        $('#label2,#cb2,#flag,#label2-modal,#cb2-modal').hide('fast');

    });
});
</script>