
<div class="modal fade" id="writereview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " >
        <div class="modal-content sd-modal informational">
            <div class="container-fluid ">
                <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-edit-2"></i></div>
                <div class="col-md-11 col-xs-height col-full-height sd-modal-content" style="padding-top:15px">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="  position: absolute;right: 10px;top: -3px;"> <i class="icon-cancel-3"></i> <span class="sr-only" aria-hidden="true">Close window</span> </button>
                            <h4 class="category" id="reviews">Write a Review</h4>
                           
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Review Title</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">	
                                    <label for="exampleInputPassword1">Your Review</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Your Rating</label>
                                    <div style=" font-size:24px; cursor:pointer"><i class="icon-star" style="color:orange"></i> <i class="icon-star" style="color:orange"></i> <i class="icon-star" style="color:orange"></i> <i class="icon-star-empty" style="color:#cccccc"></i> <i class="icon-star-empty" style="color:#cccccc"></i> </div>
                                </div>
                            </form>
                        
                  
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