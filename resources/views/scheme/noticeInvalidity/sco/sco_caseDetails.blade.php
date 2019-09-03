<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('caseDetails.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.case_status')</label>
                                    <input type="text" id="case_status" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.scheme_ref_no')</label>
                                    <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.notice_date')</label>
                                    <input type="date" name="scheme_ref_no" id="notice_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.notice_type')</label>
                                    <input type="text" id="notice_type" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.working')</label>
                                    <select class="form-control">
                                        <option>@lang('caseDetails.attr.yes')</option>
                                        <option>@lang('caseDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.declare_117')</label>
                                    <select class="form-control">
                                        <option>@lang('caseDetails.attr.yes')</option>
                                        <option>@lang('caseDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.acc_potential')</label>
                                    <select class="form-control">
                                        <option>@lang('caseDetails.attr.yes')</option>
                                        <option>@lang('caseDetails.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                @lang('confirmation.save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
