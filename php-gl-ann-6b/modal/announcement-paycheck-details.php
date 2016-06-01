
<div class="modal fade" id="modalPaycheck" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
   <div class="modal-dialog" >
        <div class="modal-content sd-modal announcement">
            <div class="container-fluid ">
                <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-attention"></i></div>
                <div class="col-md-11 col-xs-height col-full-height sd-modal-content">
                    <div style=" position:relative">
                        <h4 class="category" style="border-bottom:solid 1px #ccc; padding-bottom:10px; padding-top:10px; margin:0px; margin-bottom:10px">New Announcements </h4>
                        <a href="#" class="btn btn-default btn-xs dismiss-announcement-all dismiss1" style="position:absolute; right:0px; top:11px">Dismiss all</a> </div>
                    <div class="comment-list">
                        <ul class="list-unstyled">
                            <li class="announcement1">
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> System Outage </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content">
                                        <p>The IU Classifieds system will be down for maintenance and upgrades on Monday, October 15th, from 1-5:00am. We apologise for any inconveniences. Impossible considered invitation him men instrument saw celebrated unpleasant.</p>
                                    </div>
                                    <div class="row message-footer" >
                                        <div class="col-md-12 message-footer-actions" > <a href="#" class="btn btn-default btn-xs dismiss-announcement1 dismiss1" id="">Dismiss</a> </div>
                                    </div>
                                </div>
                            </li>
                            <li class="announcement2">
                                <div class="message">
                                    <div class="row message-header">
                                        <div class="col-xs-12 col-sm-8 message-title"> Security Notice </div>
                                        <div class="col-xs-12 col-sm-4 message-meta"> <small class="message-date">10/21/15</small> </div>
                                    </div>
                                    <div class="message-content">
                                        <p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
                                    </div>
                                    <div class="row message-footer" >
                                        <div class="col-md-12 message-footer-actions" > <a href="#" class="btn btn-default btn-xs dismiss-announcement2 dismiss1" id="">Dismiss</a></div>
                                    </div>
                                </div>
                            </li>
                            <li style="display:none" class="announcements-nonew">
                                <div class="message">
                                    <div class="message-content">
                                        <p class="lead text-muted" style="padding-top:20px; padding-bottom:20px">There are no new announcements.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="announcement-footer">
                        <div class="row">
                            <div class="col-md-9"> </div>
                            <div class="col-md-3 text-right">
                                
                                <button type="button" class="btn btn-default btn-sm " data-dismiss="modal">Close</button>
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