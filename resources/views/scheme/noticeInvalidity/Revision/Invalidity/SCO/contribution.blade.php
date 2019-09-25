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
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="control-label">@lang('Employer Code')</label>
                                       <input type="text"  id="schemeRefInfo_invalidity" name="scheme_ref_info" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employer Name')</label>
                                        <input type="text"  id="noticeID_invalidity" name="notice" value="" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Year')</label>
                                    <input type="text"  id="revType_invalidity" name="rev_type" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Month')</label>
                                    <input type="text"  id="year_invalidity" name="year" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Wages (RM)')</label>
                                    <input type="text"  id="ssn_invalidity" name="ssn" value="" class="form-control"> 
                                    </div> 
                                </div>
                            </div>
                            <div class="row p-t-20">
                               <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Contribution Payable (RM)')</label>
                                    <input type="text"  id="dateAcceptanceDeclaration117_invalidity" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8" >
                                    <div class="form-group">
                                    <label class="control-label">@lang('Decision 1/3')</label>
                                    <input type="text" id="remark_invalidity" name="remark" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label class="control-label">@lang('SCO Recomendation')</label>
                                    <input type="text" id="ssab_invalidity" name="ssab" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Approval')</label>
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
    