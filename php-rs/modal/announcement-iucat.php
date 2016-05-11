
<div class="modal fade" id="modalIucat" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
    <div class="modal-dialog modal-lgg" >
        <div class="modal-content sd-modal announcement">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-attention"></i></div>
                    <div class="col-md-11 col-xs-height col-full-height sd-modal-content">
                        <div style=" position:relative">
                            <h4 class="category" style="border-bottom:solid 1px #ccc; padding-bottom:10px; padding-top:10px; margin:0px; margin-bottom:10px">Announcements </h4>
                            <a href="#" class="" id="signinmanage-iucat" style="position:absolute; right:0px; top:11px" onClick="alert('Note - At this point, the user would be prompted to authenticate. After authenticating, the user would be able to dismiss anouncements individually or collectively ')">Manage Announcements</a> </div>
                        <div class="announcement-block" id="block3">
                            <h4>System Maintenance</h4>
                            <p> IUCAT will be down for routine maintenance on Sunday, 3/15/2015, from 3-4am. Access to the system may be unavailable during this period. </p>
                            <button type="button" class="btn btn-default btn-xs" id="dismiss-trigger3" style="display:none">Dismiss</button>
                        </div>
                        <div class="announcement-dismissed" id="dismiss-message3"> -- Announcement Dismissed --</div>
                        <div class="announcement-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="button" class="btn btn-default btn-sm dismiss2" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger btn-sm dismiss2" data-dismiss="modal">Launch Task</button>
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
$( "#dismiss-trigger3" ).click(function() {
  $( "#block3" ).hide( );
  $( "#dismiss-message3" ).show( );
});


$( "#signinmanage-iucat" ).click(function() {
  $( "#dismiss-trigger3").show( );
  $( "#signinmanage-iucat" ).hide( );
});


$( ".dismiss2" ).click(function() {
  $( "#badge2" ).hide( );
});

</script> 
