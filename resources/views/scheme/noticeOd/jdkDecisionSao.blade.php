<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                        <h5 class="card-title">@lang('scheme/jdkDecision.title')</h5>
                        <hr>
                         <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/jdkDecision.attr.speciality')</label>
                                   <input type="text" name="speciality" id="speciality" class="form-control">
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/jdkDecision.attr.part_injury')</label>
                                    <input type="date" name="partinjury" id="partinjury" class="form-control">
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/jdkDecision.attr.location')</label>
                                   <input type="text" name="location" id="location" class="form-control">
                               </div>
                           </div>
                       </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/jdkDecision.attr.session_date')</label>
                                    <input type="date" name="sessiondate" id="sessiondate" class="form-control">
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/jdkDecision.attr.od_decision')</label>
                                   <input type="text" name="oddecision" id="oddecision" class="form-control">
                               </div>
                           </div>

                           <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/jdkDecision.attr.jdk_dec')</label>
                                    <input type="text" id="jdk_dec" class="form-control">
                                </div>
                            </div>
                        </div>

                        
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.jdk_type')</label>
                                <input type="text" id="jdk_type" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.assess_type')</label>
                                <input type="text" name="assess_type" id="assess_type" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.assessment')</label>
                                <input type="text" name="assessment" id="assessment" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                 <label class="control-label">@lang('scheme/jdkDecision.attr.prov_enddate')</label>
                                 <input type="date" name="prov_enddate" id="prov_enddate" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/jdkDecision.attr.els_option')</label>
                                <input type="text" name="els_option" id="els_option" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                               <label class="control-label">@lang('scheme/jdkDecision.attr.remark')</label>
                               <input type="text" name="remark" id="remark" class="form-control">
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