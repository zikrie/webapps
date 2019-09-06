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
                                   <label class="control-label">@lang('Scheme Ref. No.')</label><span class="required">*</span>
                                   <input type="text" id="schemeRefInfo_invalidity" name="scheme_ref_info" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Notice ID')</label><span class="required">*</span>
                                    <input type="text" id="noticeID_invalidity" name="notice" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Revision Type')</label><span class="required">*</span>
                                <input type="text" id="revType_invalidity" name="rev_type" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('Revision Reason')</label><span class="required">*</span>
                                   <select class="form-control" data-placeholder="source_invalidity" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="Reemployment">@lang('Reemployment')</option>
                                        <option value="Reverse Invalidity">@lang('Invalidity')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <label class="control-label">@lang('Source')</label><span class="required">*</span>
                                   <select class="form-control" data-placeholder="source_invalidity" tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="JD">@lang('New Info')</option>
                                        <option value="JDR">@lang('Complaint')</option>
                                        <option value="JDK">@lang('Fraud')</option>
                                        <option value="JD">@lang('JRKS')</option>
                                        <option value="JDR">@lang('Registration Module')</option>
                                        <option value="JDK">@lang('Contribution Module')</option>
                                        <option value="JD">@lang('Declaration117')</option>
                                        <option value="JDR">@lang('JD Module')</option>
                                        <option value="JDK">@lang('Other')</option>
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Date of revision notice received')</label><span class="required">*</span>
                                <input type="date" id="dateRevNotice_invalidity" name="dateRevNotice" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Year')</label><span class="required">*</span>
                                <input type="date" readonly id="year_invalidity" name="year" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('Acceptance Declaration 117')</label><span class="required">*</span>
                                   <select class="form-control" data-placeholder="acc_dec" readonly tabindex="2">
                                        <option selected disabled hidden>Please Choose</option>
                                        <option value="Yes">@lang('wages.attr.Yes')</option>
                                        <option value="No">@lang('wages.attr.No')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('SSN Appendix A received')</label><span class="required">*</span>
                                <input type="text" readonly id="ssn_invalidity" name="ssn" value="" class="form-control"> 
                                </div> 
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Date Acceptance Declaration 117')</label><span class="required">*</span>
                                <input type="date" readonly id="dateAcceptanceDeclaration117_invalidity" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('Reemployment Start Date')</label><span class="required">*</span>
                                   <input type="date" readonly id="reemploymentStartDate_invalidity" name="reemploymentStartDate" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-6" >
                                <div class="form-group">
                                <label class="control-label">@lang('Remarks')</label>
                                <input type="text" id="remark_invalidity" name="remark" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">@lang('SSAB Decision')</label>
                                <input type="text" id="ssab_invalidity" name="ssab" value="" class="form-control">
                                </div>
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
                </form>
            </div>
        </div>
    </div>
</div>
