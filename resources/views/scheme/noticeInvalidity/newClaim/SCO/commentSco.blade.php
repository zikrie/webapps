<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
    <div class="p-20">
        <form action="#">
            <h5 class="card-title">@lang('comment.title')</h3>
            <hr>
            <div class="row p-t-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('comment.attr.comment_by')</label>
                        <input type="text" name="commentBy" id="commentBy" class="form-control">

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('comment.attr.comment_date')</label>
                        <input type="date" name="commentDate" id="commentDate" class="form-control">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label">@lang('comment.attr.comment_desc')</label>
                        <input type="text" name="commentDesc" id="commentDesc" class="form-control">
                    </div>
                </div>

            </div>



            <div class="form-actions">
                <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                  
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                </div>
        </form>

    </div>
</div>
</div>
</div>
</div>