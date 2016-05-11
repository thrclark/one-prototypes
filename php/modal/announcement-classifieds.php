
<div class="modal fade" id="modalClassifieds" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content sd-modal announcement">
            <div class="container-fluid ">
                <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-attention"></i></div>
                <div class="col-md-11 col-xs-height col-full-height sd-modal-content">
                    <div style=" position:relative">
                        <h4 class="category" style="border-bottom:solid 1px #ccc; padding-bottom:10px; padding-top:10px; margin:0px; margin-bottom:10px">Announcements </h4>
                        <a href="#" class="btn btn-default btn-xs dismiss-announcement-all" style="position:absolute; right:0px; top:11px">Dismiss all</a> </div>
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
                                        <div class="col-md-12 message-footer-actions" > <a href="#" class="btn btn-default btn-xs dismiss-announcement1" id="">Dismiss</a> </div>
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
                                        <div class="col-md-12 message-footer-actions" > <a href="#" class="btn btn-default btn-xs dismiss-announcement2" id="">Dismiss</a></div>
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
                            <div class="col-md-6"> </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn btn-default btn-sm dismiss1" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm dismiss1" data-dismiss="modal"><i class="icon-play-circled2"></i> <span class="">Launch Task</span></button>
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