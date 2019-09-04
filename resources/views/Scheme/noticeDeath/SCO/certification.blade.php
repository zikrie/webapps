<div class="row">
   <div class="col-lg-12">
       <div class="card">
           <div class="card-body">
               <form method="POST" action="./certificateemployee">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">

                   <div class="form-body">
                       {{-- <div class="row">
                           <div class="col-md-12">
                               <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                   @if (!empty($empcert))
                                   @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                   
                                   <input type="checkbox" class="custom-control-input" id="chkcert" name='chkcert' onchange="chkcertchange()">
                                   @else
                                   
                                   <input type="checkbox" class="custom-control-input" id="chkcert" name='chkcert' checked onchange="chkcertchange()">>
                                   @endif
                                   @else
                                   
                                   <input type="checkbox" class="custom-control-input" id="chkcert" name='chkcert' onchange="chkcertchange()">>
                                   @endif
                                   <label class="custom-control-label" for="chkcert">@lang('certification.attr.details')</label>
                               </div>
                           </div>
                       </div>	 --}}    
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="exampleInputEmail1">@lang('scheme/certification.attr.name')</label>
                                   @if(!empty($empcert))
                                   @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                   <input type="text" class="form-control clearFields" id='emprepname' name="emprepname" value="" required>
                                   @else
                                   <input type="text" class="form-control clearFields" id='emprepname' name="emprepname" value="{{$empcert->emprepname}}"required>
                                   @endif
                                   @else
                                   <input type="text" class="form-control clearFields" id='emprepname' name="emprepname" value=""required >
                                   @endif
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="exampleInputEmail1">@lang('scheme/certification.attr.designation')</label>
                                   @if(!empty($empcert))
                                   @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                   <input type="text" class="form-control clearFields" id='emprepdes' name="emprepdes" value="" required>
                                   @else
                                   <input type="text" class="form-control clearFields" id='emprepdes' name="emprepdes" value="{{$empcert->emprepdes}}" required>
                                   @endif
                                   @else
                                   <input type="text" class="form-control clearFields" id='emprepdes' name="emprepdes" value="" required>
                                   @endif
                               </div>
                           </div>
                           <div class="col-md-2">
                               <div class="form-group">
                                   <label for="exampleInputPassword1">@lang('scheme/certification.attr.date')</label>
                                   @if(!empty($empcert))
                                   @if ($empcert->emprepname == '' && $empcert->emprepdes == '' && $empcert->emprepdate == '')
                                   <input type="date" class="form-control clearFields" id="emprepdate"  value="" name="emprepdate" required>
                                   @else
                                   <input type="date" class="form-control clearFields" id="emprepdate"  value="@if (strlen($empcert->emprepdate) == 8){{substr($empcert->emprepdate,0,4)}}-{{substr($empcert->emprepdate,4,2)}}-{{substr($empcert->emprepdate,6,2)}}@endif" name="emprepdate" required>
                                   @endif
                                   @else
                                   <input type="date" class="form-control clearFields" id="emprepdate"  value="" name="emprepdate" required>
                                   @endif
                               </div>
                           </div>
                    
                       {{-- <div class="row">
                           <div class="col-md-12">
                               <div class="form-group row">
                                   <label class="control-label text-right col-md-1"></label>
                                   <div class="col-md-12">
                                           <p class="form-control-static"> @lang('certification.attr.no_sign') </p>
                                   </div>
                               </div>
                           </div>
                       </div> --}}
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