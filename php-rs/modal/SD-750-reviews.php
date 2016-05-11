
<div class="modal fade" id="task-reviews" tabindex="-1" role="dialog" aria-labelledby="modalPaycheckLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content sd-modal informational">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-1 col-xs-height sd-modal-visual text-center"><i class="icon-star-circled"></i></div>
                    <div class="col-md-11 col-xs-height col-full-height sd-modal-content" style="padding-top:15px">
                        <div class="row form-group" id="feedback_block">
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <h4 class="category" id="reviews">Reviews</h4>
                                <div style=" position:absolute; top:0px; right:15px"> Version:
                                    <div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="selection">3.0.0 (Current)</span><span class="caret"></span> </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">3.0.0 (Current)</a></li>
                                            <li><a href="#">2.5.0</a></li>
                                            <li><a href="#">2.0.0</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pull-left">
                                        <button type="button" id="review_button" class="btn btn-primary btn-xs" tabindex="0"><!-- ngIf: !currentCommentId --><span >Write a</span><!-- end ngIf: !currentCommentId --><!-- ngIf: currentCommentId --> review</button>
                                    </div>
                                    <div class="pull-right" >
                                        <div class="pull-right ng-scope" id="comment_sort_block">Sort by:
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs" tabindex="0">Date</button>
                                                <button type="button" class="btn btn-xs btn-default" tabindex="0">Helpful</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="commentArea" class="collapse form-group">
                                    <form name="commentForm" class="ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength">
                                        <div class="form-group">
                                            <label for="userAlias" class="control-label">Name</label>
                                            <input id="userAlias" ng-model="commentUserAlias" required="" name="userAlias" type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-maxlength" ng-maxlength="100" tabindex="0" aria-required="true" aria-invalid="true">
                                            <!-- ngIf: commentForm.userAlias.$error.required -->
                                            <p class="text-danger ng-scope">This is required</p>
                                            <!-- end ngIf: commentForm.userAlias.$error.required --> 
                                            <!-- ngIf: commentForm.userAlias.$error.maxlength --> 
                                        </div>
                                        <div class="form-group">
                                            <label for="ratingInput" class="control-label">Rating</label>
                                            <p tabindex="0" ng-keypress="rateTaskWithKeyboard($event)"> <span class="sr-only ng-binding">Use the number keys 1 - 5 to select a rating. Current rating is 0.</span> <span name="rating" id="ratingInput" value="rating" max="5" class="user-rating ng-isolate-scope" required="required" style="font-size:1.75em;"> 
                                                <!-- ngRepeat: number in range --><i role="presentation" class="ng-scope glyphicon glyphicon-star-empty icon-star-empty" tabindex="0"></i><!-- end ngRepeat: number in range --><i role="presentation" class="ng-scope glyphicon glyphicon-star-empty icon-star-empty" tabindex="0"></i><!-- end ngRepeat: number in range --><i role="presentation" class="ng-scope glyphicon glyphicon-star-empty icon-star-empty" tabindex="0"></i><!-- end ngRepeat: number in range --><i role="presentation" class="ng-scope glyphicon glyphicon-star-empty icon-star-empty" tabindex="0"></i><!-- end ngRepeat: number in range --><i role="presentation" class="ng-scope glyphicon glyphicon-star-empty icon-star-empty" tabindex="0"></i><!-- end ngRepeat: number in range --> 
                                                </span> 
                                                <!-- ngIf: !rating --><span class="text-danger ng-scope">A rating is required</span><!-- end ngIf: !rating --> 
                                            </p>
                                        </div>
                                        <div class="form-group has-error">
                                            <label for="commentText" class="control-label">Review</label>
                                            <textarea id="commentText" ng-model="commentText" name="commentText" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-maxlength" required="" ng-maxlength="2000" aria-multiline="true" tabindex="0" aria-required="true" aria-invalid="true"></textarea>
                                            <span class="label pull-right ng-binding label-info">2000<span class="sr-only"> characters remaining</span></span> 
                                            <!-- ngIf: commentForm.commentText.$error.required -->
                                            <p class="text-danger ng-scope">A Review is required</p>
                                            <!-- end ngIf: commentForm.commentText.$error.required --> 
                                            <!-- ngIf: commentForm.commentText.$error.maxlength --> 
                                        </div>
                                        <button type="button" class="btn btn-default" tabindex="0" aria-disabled="true" disabled="disabled">Submit</button>
                                    </form>
                                </div>
                                <!-- ngIf: comments.length > 1 --><!-- end ngIf: comments.length > 1 -->
                                <div class="clearfix"></div>
                                <div id="commentList" class="well comment-list" style="background:#FFFFFF">
                                    <ul class="list-unstyled">
                                        <!-- ngRepeat: comment in comments -->
                                        <li id="comment_2802" class="comment ng-scope">
                                            <button type="button" class="btn btn-danger btn-xs pull-right" title="mark as inappropriate" tabindex="0"><i class="icon-flag"></i><span class="sr-only">Mark review by <span class="ng-binding">Jason L</span> as inappropriate</span></button>
                                            <p> <strong class="ng-binding">Jason L</strong> &nbsp;|&nbsp;<em class="text-muted"><span class="ng-binding">March 13, 2015</span></em> 
                                                <!-- ngIf: comment.rating > 0 --><span > &nbsp;|&nbsp; <span class="stars"> 
                                                <!-- ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><!-- ngRepeat: n in [] | range:1:(5-comment.rating) --> 
                                                </span> </span><!-- end ngIf: comment.rating > 0 --> 
                                            </p>
                                            <p class="ng-binding">WE LOVE THE IU CALL CENTER!  YOUR APP IS AWESOME!  WHOOHOO!</p>
                                            <!-- ngIf: 6139 == taskDisplayVersionId -->
                                            <fieldset >
                                                <legend class="text-muted">Was this review helpful?</legend>
                                                <button type="button" class="btn btn-success btn-xs btn-vote" tabindex="0" aria-disabled="false">Yes</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                                <button type="button" class="btn btn-danger btn-xs btn-vote" tabindex="0" aria-disabled="false">No</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                            </fieldset>
                                            <!-- end ngIf: 6139 == taskDisplayVersionId --> 
                                            <!-- ngIf: 6139 != taskDisplayVersionId --> 
                                            <!-- ngIf: comment.commentReply != null -->
                                            <hr aria-hidden="false">
                                        </li>
                                        <!-- end ngRepeat: comment in comments -->
                                        <li id="comment_1894" class="comment ng-scope">
                                            <button type="button" class="btn btn-danger btn-xs pull-right" title="mark as inappropriate" tabindex="0"><i class="icon-flag"></i><span class="sr-only">Mark review by <span class="ng-binding">jorlcoff@iu.edu</span> as inappropriate</span></button>
                                            <p> <strong class="ng-binding">jorlcoff@iu.edu</strong> &nbsp;|&nbsp;<em class="text-muted"><span class="ng-binding">August 27, 2014</span></em> 
                                                <!-- ngIf: comment.rating > 0 --><span > &nbsp;|&nbsp; <span class="stars"> 
                                                <!-- ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><!-- ngRepeat: n in [] | range:1:(5-comment.rating) --> 
                                                </span> </span><!-- end ngIf: comment.rating > 0 --> 
                                            </p>
                                            <p class="ng-binding">VERY fast - great if you need to find info in a hurry!</p>
                                            <!-- ngIf: 6139 == taskDisplayVersionId -->
                                            <fieldset >
                                                <legend class="text-muted">Was this review helpful?</legend>
                                                <button type="button" class="btn btn-success btn-xs btn-vote" tabindex="0" aria-disabled="false">Yes</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                                <button type="button" class="btn btn-danger btn-xs btn-vote" tabindex="0" aria-disabled="false">No</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                            </fieldset>
                                            <!-- end ngIf: 6139 == taskDisplayVersionId --> 
                                            <!-- ngIf: 6139 != taskDisplayVersionId --> 
                                            <!-- ngIf: comment.commentReply != null -->
                                            <hr aria-hidden="false">
                                        </li>
                                        <!-- end ngRepeat: comment in comments -->
                                        <li id="comment_1853" class="comment ng-scope">
                                            <button type="button" class="btn btn-danger btn-xs pull-right" title="mark as inappropriate" tabindex="0"><i class="icon-flag"></i><span class="sr-only">Mark review by <span class="ng-binding">baerdman@iu.edu</span> as inappropriate</span></button>
                                            <p> <strong class="ng-binding">baerdman@iu.edu</strong> &nbsp;|&nbsp;<em class="text-muted"><span class="ng-binding">August 20, 2014</span></em> 
                                                <!-- ngIf: comment.rating > 0 --><span > &nbsp;|&nbsp; <span class="stars"> 
                                                <!-- ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><!-- ngRepeat: n in [] | range:1:(5-comment.rating) --> 
                                                </span> </span><!-- end ngIf: comment.rating > 0 --> 
                                            </p>
                                            <p class="ng-binding">Great Services for all.</p>
                                            <!-- ngIf: 6139 == taskDisplayVersionId -->
                                            <fieldset >
                                                <legend class="text-muted">Was this review helpful?</legend>
                                                <button type="button" class="btn btn-success btn-xs btn-vote" tabindex="0" aria-disabled="false">Yes</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                                <button type="button" class="btn btn-danger btn-xs btn-vote" tabindex="0" aria-disabled="false">No</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                            </fieldset>
                                            <!-- end ngIf: 6139 == taskDisplayVersionId --> 
                                            <!-- ngIf: 6139 != taskDisplayVersionId --> 
                                            <!-- ngIf: comment.commentReply != null -->
                                            <hr aria-hidden="false">
                                        </li>
                                        <!-- end ngRepeat: comment in comments -->
                                        <li id="comment_1852" class="comment ng-scope">
                                            <button type="button" class="btn btn-danger btn-xs pull-right" title="mark as inappropriate" tabindex="0"><i class="icon-flag"></i><span class="sr-only">Mark review by <span class="ng-binding">scunning@iu.edu</span> as inappropriate</span></button>
                                            <p> <strong class="ng-binding">scunning@iu.edu</strong> &nbsp;|&nbsp;<em class="text-muted"><span class="ng-binding">August 20, 2014</span></em> 
                                                <!-- ngIf: comment.rating > 0 --><span > &nbsp;|&nbsp; <span class="stars"> 
                                                <!-- ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><!-- ngRepeat: n in [] | range:1:(5-comment.rating) --> 
                                                </span> </span><!-- end ngIf: comment.rating > 0 --> 
                                            </p>
                                            <p class="ng-binding">Fantastic Service! Very helpful!</p>
                                            <!-- ngIf: 6139 == taskDisplayVersionId -->
                                            <fieldset >
                                                <legend class="text-muted">Was this review helpful?</legend>
                                                <button type="button" class="btn btn-success btn-xs btn-vote" tabindex="0" aria-disabled="false">Yes</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                                <button type="button" class="btn btn-danger btn-xs btn-vote" tabindex="0" aria-disabled="false">No</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                            </fieldset>
                                            <!-- end ngIf: 6139 == taskDisplayVersionId --> 
                                            <!-- ngIf: 6139 != taskDisplayVersionId --> 
                                            <!-- ngIf: comment.commentReply != null -->
                                            <hr aria-hidden="false">
                                        </li>
                                        <!-- end ngRepeat: comment in comments -->
                                        <li id="comment_1851" class="comment ng-scope">
                                            <button type="button" class="btn btn-danger btn-xs pull-right" title="mark as inappropriate" tabindex="0"><i class="icon-flag"></i><span class="sr-only">Mark review by <span class="ng-binding">kdavidso@iu.edu</span> as inappropriate</span></button>
                                            <p> <strong class="ng-binding">kdavidso@iu.edu</strong> &nbsp;|&nbsp;<em class="text-muted"><span class="ng-binding">August 20, 2014</span></em> 
                                                <!-- ngIf: comment.rating > 0 --><span > &nbsp;|&nbsp; <span class="stars"> 
                                                <!-- ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><i class="icon-star"></i><!-- end ngRepeat: n in [] | range:1:(comment.rating) --><!-- ngRepeat: n in [] | range:1:(5-comment.rating) --> 
                                                </span> </span><!-- end ngIf: comment.rating > 0 --> 
                                            </p>
                                            <p class="ng-binding">This service is excellent.  Saves a lot of time whren you are unable to find what you need.</p>
                                            <!-- ngIf: 6139 == taskDisplayVersionId -->
                                            <fieldset >
                                                <legend class="text-muted">Was this review helpful?</legend>
                                                <button type="button" class="btn btn-success btn-xs btn-vote" tabindex="0" aria-disabled="false">Yes</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                                <button type="button" class="btn btn-danger btn-xs btn-vote" tabindex="0" aria-disabled="false">No</button>
                                                <small class="text-muted">&nbsp;(<span class="ng-binding">0</span><span class="sr-only"> votes</span>)</small>
                                            </fieldset>
                                            <!-- end ngIf: 6139 == taskDisplayVersionId --> 
                                            <!-- ngIf: 6139 != taskDisplayVersionId --> 
                                            <!-- ngIf: comment.commentReply != null -->
                                            <hr aria-hidden="true" class="ng-hide">
                                        </li>
                                        <!-- end ngRepeat: comment in comments -->
                                    </ul>
                                    <span id="no-reviews" aria-hidden="true" class="ng-hide">No reviews.</span>
                                    <button type="button" class="btn btn-default btn-more ng-hide" tabindex="0" aria-hidden="true">Load More</button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div>
                                    <h4 class="category" id="ratings">Ratings</h4>
                                    <div class="row form-group">
                                        <div class="col-sm-8 col-md-12 col-lg-12"> 
                                            <!-- ngIf: versionRatingData.ratingsCount == 0 --> 
                                            <!-- ngIf: versionRatingData.ratingsCount > 0 -->
                                            <p >Average user rating is <span class="ng-binding">5.0</span> stars</p>
                                            <!-- end ngIf: versionRatingData.ratingsCount > 0 --> 
                                        </div>
                                        <div class="col-sm-4 col-md-12 col-lg-12">
                                            <div class="rating-list ng-scope" aria-hidden="false">
                                                <div class="stars"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 70%;"> <span class="sr-only"><span class="ng-binding">0</span>% of ratings are <span class="ng-binding">4</span> stars</span> </div>
                                                </div>
                                            </div>
                                            <div class="rating-list ng-scope" aria-hidden="false">
                                                <div class="stars"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i> </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 90%;"> <span class="sr-only"><span class="ng-binding">0</span>% of ratings are <span class="ng-binding">4</span> stars</span></div>
                                                </div>
                                            </div>
                                            <div class="rating-list ng-scope" aria-hidden="false">
                                                <div class="stars"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 50%;"> <span class="sr-only"><span class="ng-binding">0</span>% of ratings are <span class="ng-binding">3</span> stars</span> </div>
                                                </div>
                                            </div>
                                            <div class="rating-list ng-scope" aria-hidden="false">
                                                <div class="stars"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i> </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 30%;"> <span class="sr-only"><span class="ng-binding">0</span>% of ratings are <span class="ng-binding">2</span> stars</span> </div>
                                                </div>
                                            </div>
                                            <div class="rating-list ng-scope" aria-hidden="false">
                                                <div class="stars"> <i class="icon-star"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i> </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" style="width: 10%;"> <span class="sr-only"><span class="ng-binding">0</span>% of ratings are <span class="ng-binding">1</span> stars</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div aria-hidden="true" class="ng-hide">
                                    <h4 class="category" id="ratings">Release Notes</h4>
                                    <div class="release-notes">
                                        <ul class="list-unstyled">
                                            <!-- ngRepeat: note in releaseNotes track by $index -->
                                            <li ng-repeat="note in releaseNotes track by $index" class="ng-binding ng-scope"> - List View is now default view </li>
                                            <!-- end ngRepeat: note in releaseNotes track by $index -->
                                            <li ng-repeat="note in releaseNotes track by $index" class="ng-binding ng-scope"> - Grid View has been improved </li>
                                            <!-- end ngRepeat: note in releaseNotes track by $index -->
                                            <li ng-repeat="note in releaseNotes track by $index" class="ng-binding ng-scope"> - Share Ad Url is now provided </li>
                                            <!-- end ngRepeat: note in releaseNotes track by $index -->
                                            <li ng-repeat="note in releaseNotes track by $index" class="ng-binding ng-scope"> - Searching has been improved </li>
                                            <!-- end ngRepeat: note in releaseNotes track by $index -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="announcement-footer">
                            <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
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
$(function(){

$(".dropdown-menu li a").click(function(){

  $(this).parents(".btn-group").find('.selection').text($(this).text());
  $(this).parents(".btn-group").find('.selection').val($(this).text());

});

});
</script>