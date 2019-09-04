<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="p-20">
          <form action="#">
            <h5 class="card-title">@lang('scheme/appointment.title')</h5>
            <hr>
              <div class="row p-t-20">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">@lang('scheme/appointment.attr.investigate_date')</label>
                    <input type="date" name="investigate_date" id="investigate_date" class="form-control">
                  </div>
                </div>
                        
                <div class="col-md-4">
                  <div class="form-group">
                      <label class="control-label">@lang('scheme/appointment.attr.investigate_time')</label>
                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                          <input type="text" class="form-control" name="time" value="">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                            
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.type_person')</label>
                          <input type="text" name="typeperson" id="typeperson" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row p-t-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="control-label">@lang('scheme/appointment.attr.ot_name')</label>
                            <input type="text" name="otname" id="otname" class="form-control">
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">@lang('scheme/appointment.attr.name_person_attend')</label>
                            <input type="text" name="personattend" id="personattend" class="form-control">
                          </div>
                        </div>
                            
                        <div class="col-md-4">
                          <div class="form-group">
                              <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                              <input type="text" name="address" id="address" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">@lang('scheme/appointment.attr.name_officer')</label>
                            <input type="text" name="nameofficer" id="nameofficer" class="form-control">
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">@lang('scheme/appointment.attr.email_officer')</label>
                            <input type="text" name="emailofficer" id="emailofficer" class="form-control">
                          </div>
                        </div>
                            
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">@lang('scheme/appointment.attr.place_officer')</label>
                            <input type="text" name="placeofficer" id="placeofficer" class="form-control">
                          </div>
                        </div>
                      </div>
                        

                          {{--     <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('appointment.attr.support_doc')</label>
                                   <input type="text" name="support_doc" id="support_doc" class="form-control">
                                </div>
                            </div>
                        

                            </div> --}}

                            <h3 class="box-title m-t-40">@lang('scheme/appointment.title1')</h3>
                            <hr><hr>
                            <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.icon_12')</label>
                                   <input type="text" name="icon_12" id="icon_12" class="form-control">
                                </div>
                            </div>
                            </div>


                             <h3 class="box-title m-t-40">@lang('scheme/appointment.title2')</h3>
                            <hr>
                            <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.inspector_name')</label>
                                   <input type="text" name="inspector_name" id="inspector_name" class="form-control">
                                </div>
                            </div>
                            </div>

                            <h3 class="box-title m-t-40">@lang('scheme/appointment.title_interviewee')</h3>
                            <hr>
                            <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                   <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.id_type')</label>
                                   <input type="text" name="idtype" id="idtype" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.id_no')</label>
                                   <input type="text" name="idno" id="idno" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.postal_address')</label>
                                   <input type="text" name="postaladdress" id="postaladdress" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                  {{--  <label class="control-label">@lang('scheme/appointment.attr.postal_address')</label> --}}
                                   <input type="text" name="postaladdress" id="postaladdress" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                   {{-- <label class="control-label">@lang('scheme/appointment.attr.postal_address')</label> --}}
                                   <input type="text" name="postaladdress" id="postaladdress" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.postcode')</label>
                                   <input type="text" name="postcode" id="postcode" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.city')</label>
                                   <input type="text" name="city" id="city" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.state')</label>
                                   <input type="text" name="state" id="state" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.telno')</label>
                                   <input type="text" name="telno" id="telno" class="form-control">
                                </div>
                            </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.age')</label>
                                   <input type="text" name="age" id="age" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.about_investigation')</label>
                                   <textarea type="text" name="about" id="about" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                          <h3 class="box-title m-t-40">@lang('scheme/appointment.title_witness')</h3>
                            <hr>
                            <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.witness_name')</label>
                                   <input type="text" name="witnessname" id="witnessname" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.id_type')</label>
                                   <input type="text" name="idtype" id="idtype" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.id_no')</label>
                                   <input type="text" name="idno" id="idno" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.witness_statement')</label>
                                   <input type="text" name="witness_statement" id="witness_statement" class="form-control">
                                </div>
                            </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.language')</label>
                                   <input type="text" name="language" id="language" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.translator_name')</label>
                                   <input type="text" name="translator_name" id="translator_name" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/appointment.attr.investigation_date')</label>
                                   <input type="date" name="investigation_date" id="investigation_date" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.investigation_starttime')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="text" class="form-control" name="investigation_starttime" id="investigation_starttime" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.investigation_endtime')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="text" class="form-control" name="investigation_endtime" id="investigation_endtime" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         
  
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                    @lang('scheme/odDetails.save')</button>
                                </div>             
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>