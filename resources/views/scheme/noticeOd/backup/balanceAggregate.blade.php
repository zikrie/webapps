<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                 <form action="#">
                    <h5 class="card-title">@lang('balance.title')</h5>
                    <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.mc_end')</label>
                                    <input type="date" name="mc_enddate" id="mc_enddate" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.total_day')</label>
                                    <input type="text" name="totalday" id="totalday" class="form-control">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.total_HUS')</label>
                                    <input type="text" name="total_HUS" id="total_HUS" class="form-control">
                                </div>
                            </div>
                                
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('paymentOption.attr.support_doc')</label>
                                   <input type="text" name="support_doc" id="support_doc" class="form-control">
                               </div>
                           </div> --}}
                       </div>
                       <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.remark')</label>
                                    <input type="text" name="remark" id="remark" class="form-control">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('fhusPayment.attr.status')</label>
                                   <input type="text" name="status" id="status" class="form-control">
                               </div>
                           </div>
    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.assumed_wage')</label>
                                    <input type="text" name="assumed_wage" id="assumed_wage" class="form-control">
                                </div>
                            </div>
                        </div>   
                       <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.total_assumed')</label>
                                    <input type="text" name="total_assumed" id="total_assumed" class="form-control">
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('fhusPayment.attr.assumed_average_monthly')</label>
                                   <input type="text" name="assumed_average_monthly" id="assumed_average_monthly" class="form-control">
                               </div>
                           </div>
    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.assumed_average_daily')</label>
                                    <input type="text" name="assumed_average_daily" id="assumed_average_daily" class="form-control">
                                </div>
                            </div>
                        </div>  
                        <div class="row p-t-20">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label class="control-label">@lang('fhusPayment.attr.fhus_daily_rate')</label>
                                     <input type="text" name="fhus_daily_rate" id="fhus_daily_rate" class="form-control">
                                 </div>
                             </div>
     
                             <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label">@lang('fhusPayment.attr.minimum_daily_rate')</label>
                                    <input type="text" name="minimum_daily_rate" id="minimum_daily_rate" class="form-control">
                                </div>
                            </div>
     
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label class="control-label">@lang('fhusPayment.attr.maximum_daily_rate')</label>
                                     <input type="text" name="maximum_daily_rate" id="maximum_daily_rate" class="form-control">
                                 </div>
                             </div>
                         </div> 
                         <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('fhusPayment.attr.total_HUS_days')</label>
                                        <input type="text" name="total_HUS_days" id="total_HUS_days" class="form-control">
                                    </div>
                                </div>
        
                                <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">@lang('fhusPayment.attr.total_FHUS_payment')</label>
                                       <input type="text" name="total_FHUS_payment" id="total_FHUS_payment" class="form-control">
                                   </div>
                               </div>
                            </div>
                        <div class="form-actions">
                            {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                            @lang('insuredPerson.save')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                        </div>             
                    </form>
                </div>
            </div>
        </div>
    </div>