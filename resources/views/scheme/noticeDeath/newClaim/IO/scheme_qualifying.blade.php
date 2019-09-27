<div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <form action="#" method="POST">
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                          <div class="form-body">
                              @if(Session::get('messagesq')) 
                              <div class="card-footer">
      
                                  <div class="alert alert-warning">
                                      {{Session::get('messagesq')}}
                                  </div>
      
                              </div>
                              @elseif (!empty($messagesq))
                              <div class="card-footer">
      
                                  <div class="alert alert-warning">
                                      {{$messagesq}}
                                  </div>
      
                              </div>
                              @endif
                              <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.scheme_type')</label>
                                          <select class="form-control" name="schemetype" id="schemetype"> 
                                                <option value="">Please Select</option>
                                                <option value="sbk">SBK</option>
                                                <option value="spi">SPI</option>
                                                <option value="both">Both</option>
                                           </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.entry_date')</label>
                                          <input type="date" id="entrydate" name="entrydate" value="" class="form-control" required>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.age_entry_date')</label>
                                          <input type="text" id="ageentrydate" name="ageentrydate" value="" class="form-control" >
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.statutory_body')</label>
                                          <select class="form-control" name="statutorybody" id="statutorybody"> 
                                              <option value="">Please Select</option>
                                              <option value="yes">Yes</option>
                                              <option value="no">No</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.start_date')</label>
                                          <input type="date" name="startdate" id="startdate" value="" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.end_date')</label>
                                          <input type="date" name="enddate" id="enddate" value="" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class='row'>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.total_months_entry_death')</label>
                                          <input type="text" class="form-control" name="totalmonthsentrydeath" id="totalmonthsentrydeath" value="">
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                        <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.total_months_contributed')</label>
                                            <input type="text" class="form-control" name="totalmonthscontribution" id="totalmonths" value="">
                                        </div>
                                    </div>
                              </div>
                              <div class="row p-t-20">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.qualifying_condition')</label>
                                          <input type="text" id="qualifyingcondition" name="qualifyingcondition" value="" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.SCO.scheme_q.pension')</label>
                                          <input type="text" id="pension" name="pension" value="" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
            