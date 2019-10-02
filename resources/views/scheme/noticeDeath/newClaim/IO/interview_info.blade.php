<div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  
                  <form action="#" method="POST" id="reset">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="form-body">                   
              
                          <div class='row'>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label">Statement Date <span class="required">*</span></label>
                                      <input type="date" class="form-control clearFields" name=""  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Statement Time <span class="required">*</span></label>
                                      <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                  </div>
                              </div>
                          </div>
                          
                          <div class='row'>
                              <div class="col-md-12">
                                  <div class="form-actions">
                                      <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                      <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                  </div>
                              </div>
                          </div>
                          <br/>
                      </div>
                  </form>
              </div>
          </div>
      </div>
   </div>
   
   
   <script>
      function submitform()
      {
          $('#reset').find('form').submit();
          $('.clearFields').val('');
      }
   </script>