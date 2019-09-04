<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="./permanentPresentative">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">@lang('permanentRepresentative.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.permanent_representatives')</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.permanent_representative_name')</label>
                                        <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.id_type')</label>
                                        <select class="form-control">
                                            {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                            <option value="">@lang('permanentRepresentative.attr.new_ic')</option>
                                            <option value="">@lang('permanentRepresentative.attr.old_ic')</option>
                                            <option value="">@lang('permanentRepresentative.attr.army_id')</option>
                                            <option value="">@lang('permanentRepresentative.attr.police_id')</option>
                                            <option value="">@lang('permanentRepresentative.attr.ssn_id')</option>
                                            <option value="">@lang('permanentRepresentative.attr.cid')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.id_no')</label>
                                        <input type="text" id="idNum" class="form-control" value="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.dateOfBirth')</label>
                                        <input type="date" id="dateofbirth" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.pass_exp_date')</label>
                                        <input type="date" id="passportExpiry" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.relationship')</label>
                                        <input type="text" id="relationship" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('permanentRepresentative.attr.status')</label>
                                        <input type="text" id="status" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </form>
                </div>
            </div>
        </div>
    </div>