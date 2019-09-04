<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                        <form action="#">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scheme/approval.attr.case_status')</label>
                                           <input type="text" name="case_status" id="case_status" class="form-control">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scheme/approval.attr.date_of_IP')</label>
                                           <input type="date" name="date_of_IP" id="date_of_IP" class="form-control">
                                        </div>
                                    </div>     --}}
                                </div>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.question_1')</label>
                                            <select class="form-control">
                                                <option>@lang('scheme/approval.attr.yes')</option> 
                                                <option>@lang('scheme/approval.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.question_2')</label>
                                            <select class="form-control">
                                                <option>@lang('scheme/approval.attr.yes')</option> 
                                                <option>@lang('scheme/approval.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('scheme/approval.attr.question_3')</label><br>
                                       <select class="form-control">
                                            <option>@lang('scheme/approval.attr.yes')</option> 
                                            <option>@lang('scheme/approval.attr.no')</option> 
                                        </select>
                                    </div>
                                </div>   
                            </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.question_4')</label>
                                        <select class="form-control">
                                            <option>@lang('scheme/approval.attr.yes')</option> 
                                            <option>@lang('scheme/approval.attr.no')</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>    
                            <div class="row p-t-20">    
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('scheme/approval.attr.question_5')</label><br>
                                            <br><select class="form-control">
                                                <option>@lang('scheme/approval.attr.yes')</option> 
                                                <option>@lang('scheme/approval.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.system_recommendation_SCO')</label>
                                             <input type="text" name="system_recommendation_SCO" id="system_recommendation_SCO" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.system_recommendation_by')</label>
                                            <input type="text" name="system_recommendation_by" id="system_recommendation_by" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.system_recommendation_date')</label>
                                            <input type="date" name="system_recommendation_date" id="system_recommendation_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.question_1_SAO')</label>
                                            <select class="form-control">
                                                <option>@lang('scheme/approval.attr.yes')</option> 
                                                <option>@lang('scheme/approval.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.question_2_SAO')</label>
                                            <select class="form-control">
                                                <option>@lang('scheme/approval.attr.yes')</option> 
                                                <option>@lang('scheme/approval.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('scheme/approval.attr.question_3_SAO')</label><br>
                                       <select class="form-control">
                                            <option>@lang('scheme/approval.attr.yes')</option> 
                                            <option>@lang('scheme/approval.attr.no')</option> 
                                        </select>
                                    </div>
                                </div>   
                            </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.question_4_SAO')</label>
                                        <select class="form-control">
                                            <option>@lang('scheme/approval.attr.yes')</option> 
                                            <option>@lang('scheme/approval.attr.no')</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>    
                            <div class="row p-t-20"> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('scheme/approval.attr.question_5_SAO')</label><br>
                                            <br><select class="form-control">
                                                <option>@lang('scheme/approval.attr.yes')</option> 
                                                <option>@lang('scheme/approval.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.wrong_benefit')</label>
                                             <input type="text" name="wrong_benefit" id="wrong_benefit" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.status_scheme')</label>
                                            <input type="text" name="status_scheme" id="status_scheme" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.approval_soa')</label>
                                            <select class="form-control" required>
                                                <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.reject_reason')</label>
                                             <input type="text" name="reject_reason" id="reject_reason" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.close_reason')</label>
                                            <input type="text" name="close_reason" id="close_reason" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.scheme_approved_by')</label>
                                            <input type="text" name="scheme_approved_by" id="scheme_approved_by" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/approval.attr.scheme_approved_date')</label>
                                             <input type="date" name="scheme_approved_date" id="scheme_approved_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                    </div>
                                </div>
                            </div>            
                    </form>
                </div>
                </div>
            </div>
        </div>
</div>