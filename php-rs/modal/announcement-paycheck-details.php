
<div class="modal fade" id="modalPaycheck" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
    <div class="modal-dialog modal-lgg" >
        <div class="modal-content sd-modal announcement">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-attention"></i></div>
                    <div class="col-md-11 col-xs-height col-full-height sd-modal-content">
                        <div style=" position:relative">
                            <h4 class="category" style="border-bottom:solid 1px #ccc; padding-bottom:10px; padding-top:10px; margin:0px; margin-bottom:10px">Announcements </h4>
                            <a href="#" class="" id="signinmanage" style="position:absolute; right:0px; top:11px" onClick="alert('Note - At this point, the user would be prompted to authenticate. After authenticating, the user would be able to dismiss anouncements individually or collectively ')">Manage <span class="sr-only">Announcements</span></a> <a href="#" id="dismissall" class="btn btn-default btn-xs" style="display:none;position:absolute; right:0px; top:11px">Dismiss All</a> </div>
                        <div class="announcements-container">
                            <div class="announcement-block" id="block1">
                                <h4> System Maintenance</h4>
                                <p> The Paycheck Details system will be down for routine maintenance on Sunday, 3/15/2015, from 3-4am. Your paycheck details may be unavailable during this period. </p>
                                <a href="#" id="dismiss-trigger1" class="btn btn-default btn-xs" style="display:none">Dismiss</a> </div>
                            <div class="announcement-dismissed" id="dismiss-message1"> -- Announcement Dismissed --</div>
                            <div class="announcement-block" id="block2">
                                <h4>Security Notice</h4>
                                <p> An email phishing scam is out that implies that your paycheck account has been compromised. Please delete any messages that are addressed to "IU Paycheck Account Member". This incident has been reported to IT security. </p>
                                <a href="#" id="dismiss-trigger2" class="btn btn-default btn-xs" style="display:none">Dismiss</a> </div>
                            <div class="announcement-dismissed" id="dismiss-message2"> -- Announcement Dismissed --</div>
                        </div>
                        <div class="announcement-footer">
                            <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-default btn-sm dismiss1" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger btn-sm dismiss1" data-dismiss="modal">Launch Task</button>
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
$( "#dismiss-trigger1" ).click(function() {
  $( "#block1" ).hide( );
  $( "#dismiss-message1" ).show( );
});

$( "#dismiss-trigger2" ).click(function() {
  $( "#block2" ).hide( );
  $( "#dismiss-message2" ).show( );
});

$( "#signinmanage" ).click(function() {
  $( "#dismiss-trigger1, #dismiss-trigger2, #dismissall" ).show( );
  $( "#signinmanage" ).hide( );
});
$( "#dismissall" ).click(function() {
  $( "#block1,#block2" ).hide( );
  $( "#dismiss-message1,#dismiss-message2" ).show( );
});


$( ".dismiss1" ).click(function() {
  $( "#badge1" ).hide( );
});

</script>