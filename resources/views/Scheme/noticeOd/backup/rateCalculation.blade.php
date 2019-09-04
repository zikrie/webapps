<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                <form action="#">
                  <h5 class="card-title">@lang('scheme/rateCalculation.title')</h5>
                  <hr>
                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.assumed_wage')</label>
                          <input type="text" id="assumed_wage" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.total_wage')</label>
                          <input type="text" name="total_wage" id="total_wage" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.wage_monthly')</label>
                          <input type="date" name="wage_monthly" id="wage_monthly" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.wage_daily')</label>
                          <input type="text" id="wage_daily" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.fhus_dailyrate')</label>
                          <input type="text" id="fhus_dailyrate" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                         <label class="control-label">@lang('scheme/rateCalculation.attr.min_dailyrate')</label>
                         <input type="text" id="max_dailyrate" class="form-control">
                       </div>
                     </div>
                    </div>

                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.max_dailyrate')</label>
                          <input type="text" id="min_dailyrate" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.total_day_approved')</label>
                          <input type="text" id="total_day_approved" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.fhus_payment')</label>
                          <input type="text" id="fhus_payment" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.deduct_overpay')</label>
                          <input type="text" id="deduct_overpay" class="form-control">
                        </div>
                      </div>  

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.totalfhus_paid')</label>
                          <input type="text" id="totalfhus_paid" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/rateCalculation.attr.ssab_decision')</label>
                            <select class="form-control select">
                             <option>Appeal Approved</option>
                             <option>Appeal Rejected</option>
                           </select>
                        </div>
                      </div>
                    </div>

                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.highcourt_decision')</label>
                          <input type="text" id="highcourt_decision" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.appellatecourt_decision')</label>
                          <input type="text" id="appellatecourt_decision" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.overpay_waived')</label>
                          <input type="text" id="overpay_waived" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.calculate_date')</label>
                          <input type="date" id="calculate_date" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/rateCalculation.attr.calculate_status')</label>
                          <input type="text" id="calculate_status" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="form-actions">
                      {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                      <button type="submit" class="btn waves-effect waves-light btn-success">
                      @lang('scheme/insuredPerson.save')</button>
                      {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                    </div> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        