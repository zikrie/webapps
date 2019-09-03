<div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <form action="#" method="POST">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <div class="form-body">
                              <h5 class="card-title">@lang('overpayment.title')</h5>
                              <hr>
                              @if(Session::get('messageop')) 
                              <div class="card-footer">
      
                                  <div class="alert alert-warning">
                                      {{Session::get('messageop')}}
                                  </div>
      
                              </div>
                              @elseif (!empty($messageop))
                              <div class="card-footer">
      
                                  <div class="alert alert-warning">
                                      {{$messageop}}
                                  </div>
      
                              </div>
                              @endif

                              <div class='row'>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('overpayment.attr.reason')</label>
                                             <input type="text" id="opreason" name="opreason" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="control-label">@lang('overpayment.attr.debtor_id')</label>
                                             <input type="text" id="opdebtorid" name="opdebtorid" value="" class="form-control">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="control-label">@lang('overpayment.attr.period')</label>
                                          
                                          <input type="text" id="opperiod" name="opperiod" value="" class="form-control" >
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
            