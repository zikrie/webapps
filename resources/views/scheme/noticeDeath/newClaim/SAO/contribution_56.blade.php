<div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <form method="POST" action="./certificateemployee">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
   
                        <div class="form-body">  
                           <div class='row'>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Year</label>
                                      <input type="text" class="form-control clearFields" id='emprepname' name="emprepname" value=""required >
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Total Month Contribute</label>
                                      <input type="text" class="form-control clearFields" id='emprepdes' name="emprepdes" value="" required>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Source</label>
                                      <select class="form-control" name="schemetype" id="schemetype"> 
                                          <option value="">Please Select</option>
                                       </select>
                                  </div>
                              </div>
                           </div>
                           <div class='row'>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Recommendation</label>
                                         <input type="text" class="form-control clearFields" id='emprepname' name="emprepname" value=""required >
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Recommended By</label>
                                         <input type="text" class="form-control clearFields" id='emprepdes' name="emprepdes" value="" required>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="exampleInputPassword1">Recommended Date</label>
                                             <input type="date" class="form-control clearFields" id='emprepdes' name="emprepdes" value="" required>
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
                          
                          @if(Session::get('messagecert')) 
                          <div class="card-footer">
   
                              <div class="alert alert-warning">
                                  {{Session::get('messagecert')}}
                              </div>
   
                          </div>
                          @elseif (!empty($messagecert))
                          <div class="card-footer">
   
                              <div class="alert alert-warning">
                                  {{$messagecert}}
                              </div>
   
                          </div>
                          @endif
              
                      </div>
                  </form>
              </div>
         </div>
      </div>
   </div>
   
   <script type='text/javascript'>
      function chkcertchange()
      {
          var chkcert = document.getElementById('chkcert');
          var chkval = chkcert.value;
          
          //alert(chkcert.checked);
          
          if (chkcert.checked == false)
          {
              document.getElementById('emprepname').setAttribute('disabled', true);
              document.getElementById('emprepdes').setAttribute('disabled', true);
              document.getElementById('emprepdate').setAttribute('disabled', true);
          }
          else
          {
              document.getElementById('emprepname').removeAttribute('disabled');
              document.getElementById('emprepdes').removeAttribute('disabled');
              document.getElementById('emprepdate').removeAttribute('disabled');
          }
      }
   </script>