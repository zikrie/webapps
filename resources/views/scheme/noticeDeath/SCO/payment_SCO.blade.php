<div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <form action="#" method="POST">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <div class="form-body">
                              <h5 class="card-title">@lang('payment.title')</h5>
                              <hr>
                              @if(Session::get('messagepayment')) 
                              <div class="card-footer">
      
                                  <div class="alert alert-warning">
                                      {{Session::get('messagepayment')}}
                                  </div>
      
                              </div>
                              @elseif (!empty($messagepayment))
                              <div class="card-footer">
      
                                  <div class="alert alert-warning">
                                      {{$messagepayment}}
                                  </div>
      
                              </div>
                              @endif

                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.ot_name')</label>
                                             <input type="text" id="otname" name="otname" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.guardian')</label>
                                             <input type="text" id="guardian" name="guardian" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="control-label">@lang('payment.attr.share')</label>
                                          
                                          <input type="text" id="share" name="share" value="" class="form-control" >
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.share_rate')</label>
                                             <input type="text" id="sharerate" name="sharerate" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.entitlement_start_date')</label>
                                             <input type="date" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="control-label">@lang('payment.attr.entitlement_end_date')</label>
                                          
                                          <input type="date" id="remarks" name="remarks" value="" class="form-control" >
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-3">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.daily_rate_31')</label>
                                             <input type="text" id="approveddate" name="approveddate" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-3">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.daily_rate_30')</label>
                                             <input type="text" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-3">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.daily_rate_29')</label>
                                             <input type="text" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-3">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.daily_rate_28')</label>
                                             <input type="text" id="approveddate" name="approveddate" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.start_fot_payment')</label>
                                             <input type="date" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.last_fot_payment')</label>
                                             <input type="date" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.total_fot_payment')</label>
                                             <input type="text" id="approveddate" name="approveddate" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.amount_deducted')</label>
                                             <input type="text" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.deduction_approval')</label>
                                             <input type="text" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.fot_payment_dependant')</label>
                                             <input type="text" id="approveddate" name="approveddate" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.deduction_overpayment')</label>
                                             <input type="text" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.fot_payment_deduction')</label>
                                             <input type="text" id="approvedby" name="approvedby" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.cost_increment')</label>
                                             <input type="text" id="approveddate" name="approveddate" value="" class="form-control">
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.ssab_decision')</label>
                                             <select class="form-control" name="ssabdecision" id="ssabdecision"> 
                                                  <option value="">Please Select</option>
                                                  <option value="yes">Appeal Approved</option>
                                                  <option value="no">Appeal Rejected</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.high_court_decision')</label>
                                             <select class="form-control" name="highcourt" id="highcourt"> 
                                                  <option value="">Please Select</option>
                                                  <option value="yes">Appeal Approved</option>
                                                  <option value="no">Appeal Rejected</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.appealate_court_decision')</label>
                                             <select class="form-control" name="appealatecourt" id="appealatecourt"> 
                                                  <option value="">Please Select</option>
                                                  <option value="yes">Appeal Approved</option>
                                                  <option value="no">Appeal Rejected</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('payment.attr.overpayment_waived')</label>
                                             <select class="form-control" name="overpaymentwaived" id="overpaymentwaived"> 
                                                  <option value="">Please Select</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">No</option>
                                             </select>
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
            