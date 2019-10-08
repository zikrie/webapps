<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#" id="reset">
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> @lang('scheme/socso.attr.state')</label>
                                <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                            <label>@lang('scheme/socso.attr.city')</label>
                            <input type="text" name="brname" id="brname" class="form-control clearFields" value="">
                            <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                                        <option value="">@lang('')</option>
                            </select> 
                        </div>
                    </div>
     
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('scheme/noticetype.back')</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


                   