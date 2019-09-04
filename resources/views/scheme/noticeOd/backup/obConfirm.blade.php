<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                <form action="#">
                        <h3 class="card-title">@lang('caseDetails.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.case_status')</label>
                                     <select class="form-control">
                                         <option>@lang('caseDetails.attr.pending')</option> 
                                          <option>@lang('caseDetails.attr.reject')</option> 
                                        </select>
                                </div>
                            </div>
                        
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.scheme_ref_no')</label>
                                    <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control">
                                </div>
                            </div>
                            

                    <div class="col-md-4">
                                <div class="form-group">
                                     <label class="control-label">@lang('caseDetails.attr.notice_date')</label>
                                    <input type="date" name="scheme_ref_no" id="notice_date" class="form-control">
                                </div>
                            </div>

                            </div>
                        
                        
                    <div class="row p-t-20">
                         <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.notice_type')</label>
                                    <input type="text" id="notice_type" class="form-control">
                                </div>
                            </div>
                        
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('caseDetails.attr.spi_eligible')</label>
                                   <select class="form-control">
                                         <option>@lang('caseDetails.attr.qualified')</option> 
                                         <option>@lang('caseDetails.attr.minimum_12')</option> 
                                          <option>@lang('caseDetails.attr.not_qualified')</option> 
                                        </select>
                                </div>
                            </div>
                            

                    <div class="col-md-4">
                                <div class="form-group">
                                     <label class="control-label">@lang('caseDetails.attr.death_date')</label>
                                     <input type="date" name="death_date" id="death_date" class="form-control">
                                </div>
                            </div>
                    </div>

                    <div class="row p-t-20">
                         <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.death_age')</label>
                                     <input type="text" name="death_age" id="death_age" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.death_source')</label>
                                     <input type="text" name="death_source" id="death_source" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.potential_96')</label>
                                     <select class="form-control">
                                         <option>@lang('caseDetails.attr.yes')</option> 
                                          <option>@lang('caseDetails.attr.no')</option> 
                                        </select>
                                </div>
                            </div>
                    </div>

                    <div class="row p-t-20">
                         <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.remark')</label>
                                     <input type="text" name="remark" id="remark" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('caseDetails.attr.support_doc')</label>
                                      <input type="text" name="support_doc" id="support_doc" class="form-control">
                                </div>
                            </div>

                    </div>
               
                <div class="row p-t-20">
                    <div class="col-md-6">
                        
                </div>  
                </div>   
                            <div class="form-actions">
                            <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('insuredPerson.save')</button>
                    </div>              
    </form>

</div>
</div>
</div>
</div>
</div>