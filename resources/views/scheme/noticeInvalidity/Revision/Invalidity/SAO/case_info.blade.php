<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('insuredPerson.attr.scheme_ref_info')</label><span class="required">*</span>
                                   <input type="text" id="schemeRefInfo_invalidity" name="scheme_ref_info" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.notice')</label><span class="required">*</span>
                                    <input type="text" id="noticeID_invalidity" name="notice" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.rev_type')</label><span class="required">*</span>
                                <input type="text" id="revType_invalidity" name="rev_type" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('insuredPerson.attr.rev_reason')</label><span class="required">*</span>
                                   <select class="form-control" data-placeholder="source_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="Reemployment">@lang('wages.attr.reemployment')</option>
                                        <option value="Reverse Invalidity">@lang('wages.attr.rev_invalidity')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="control-label">@lang('insuredPerson.attr.source')</label><span class="required">*</span>
                                   <select class="form-control" data-placeholder="source_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="JD">@lang('wages.attr.new_info')</option>
                                        <option value="JDR">@lang('wages.attr.complaint')</option>
                                        <option value="JDK">@lang('wages.attr.fraud')</option>
                                        <option value="JD">@lang('wages.attr.JRKS')</option>
                                        <option value="JDR">@lang('wages.attr.registration_module')</option>
                                        <option value="JDK">@lang('wages.attr.contribution_module')</option>
                                        <option value="JD">@lang('wages.attr.declaration117')</option>
                                        <option value="JDR">@lang('wages.attr.jd_module')</option>
                                        <option value="JDK">@lang('wages.attr.other')</option>
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.dateRevNotice')</label><span class="required">*</span>
                                <input type="date" id="dateRevNotice_invalidity" name="dateRevNotice" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.year')</label><span class="required">*</span>
                                <input type="date" id="year_invalidity" name="year" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('insuredPerson.attr.acc_dec')</label><span class="required">*</span>
                                   <select class="form-control" data-placeholder="acc_dec" tabindex="2">
                                        <option selected disabled hidden>Please Choose</option>
                                        <option value="Yes">@lang('wages.attr.Yes')</option>
                                        <option value="No">@lang('wages.attr.No')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.ssn')</label><span class="required">*</span>
                                <input type="text" id="ssn_invalidity" name="ssn" value="" class="form-control"> 
                                </div> 
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.dateAcceptanceDeclaration117')</label><span class="required">*</span>
                                <input type="date" id="dateAcceptanceDeclaration117_invalidity" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-6" >
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.remarks')</label>
                                <input type="text" id="remark_invalidity" name="remark" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.ssab')</label>
                                <input type="text" id="ssab_invalidity" name="ssab" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
