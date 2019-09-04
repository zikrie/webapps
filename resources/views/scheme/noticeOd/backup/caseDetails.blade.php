<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('scheme/caseDetails.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                             <label class="control-label">@lang('scheme/caseDetails.attr.case_category')</label>
                             <select class="form-control">
                                <option>@lang('scheme/caseDetails.attr.pending')</option> 
                                <option>@lang('scheme/caseDetails.attr.reject')</option> 
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">@lang('scheme/caseDetails.attr.scheme_ref_no')</label>
                                <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                               <label class="control-label">@lang('scheme/caseDetails.attr.type_scheme')</label>
                               <input type="text" name="type_scheme" id="type_scheme" class="form-control">
                             </div>
                            </div>
                             <div class="col-md-4">
                              <div class="form-group">
                               <label class="control-label">@lang('scheme/caseDetails.attr.notice_type')</label>
                               <input type="text" id="notice_type" class="form-control">
                             </div>
                            </div>
                        </div>
                         <div class="row p-t-20">  
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">@lang('scheme/caseDetails.attr.notice_date')</label>
                              <input type="date" name="notice_date" id="notice_date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">@lang('scheme/caseDetails.attr.accident_date')</label>
                              <input type="date" name="accident_date" id="accident_date" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row p-t-20">
                           <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/caseDetails.attr.form34_received')</label>
                               <input type="date" name="form34_received" id="form34_received" class="form-control">
                            </div>
                           </div>
                           <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/caseDetails.attr.registration_date')</label>
                               <input type="date" name="registration_date" id="registration_date" class="form-control">
                            </div>
                          </div>
                        </div>
                       <div class="row p-t-20">
                          <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/caseDetails.attr.socso_registration')</label>
                               <input type="text" name="socso_registration" id="socso_registration" class="form-control">
                             </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                             <label class="control-label">@lang('scheme/caseDetails.attr.socso_office')</label>
                             <input type="text" name="socso_office" id="socso_office" class="form-control">
                            </div>
                          </div>
                       </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> @lang('scheme/caseDetails.save')</button>
                        </div>
                            {{-- <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
