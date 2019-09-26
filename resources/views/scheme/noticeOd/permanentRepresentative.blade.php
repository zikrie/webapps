<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('scheme/permanentRepresentative.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.permanent_representatives')</label>
                                    <input type="text" name="permanentrep" id="permanentrep" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.permanent_representative_name')</label>
                                    <input type="text" name="name" id="name" class="form-control" value=""  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.id_type')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                       {{--  <option value="">@lang('permanentRepresentative.attr.new_ic')</option>
                                        <option value="">@lang('permanentRepresentative.attr.old_ic')</option>
                                        <option value="">@lang('permanentRepresentative.attr.army_id')</option>
                                        <option value="">@lang('permanentRepresentative.attr.police_id')</option>
                                        <option value="">@lang('permanentRepresentative.attr.ssn_id')</option>
                                        <option value="">@lang('permanentRepresentative.attr.cid')</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.id_no')</label>
                                    <input type="text" name="idno" id="idno" class="form-control" value="" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.dateOfBirth')</label>
                                    <input type="date" name="dob" id="dob" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.pass_exp_date')</label>
                                    <input type="date" name="passportExpiry" id="passportExpiry" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.relationship')</label>
                                    <input type="text" name="relationship" id="relationship" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/permanentRepresentative.attr.status')</label>
                                    <input type="text" name="status" id="status" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                    @lang('scheme/odDetails.save')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
</div>