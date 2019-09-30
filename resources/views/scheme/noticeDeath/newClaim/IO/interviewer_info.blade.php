<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
               
               <form action="#" method="POST" id="reset">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <div class="form-body">
                       {{-- <h5 class="card-title">@lang('scheme/ob.title')</h5>
                       <hr> --}}
                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">Interviewer Name</label><span class="required">*</span>
                                   <select name="iv_name" class="form-control">
                                      <option>Please Select</option>
                                   </select>
                               </div>
                           </div>
                       </div>
                       <div class='row'>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="control-label">Others</label>
                                 <input type="text" id="name" name="name" value="" class="form-control" required>    
                               </div>
                           </div>
                       </div>
                       <div class='row'>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">Identification No</label><span class="required">*</span>
                                   {{-- @if(!empty($obprofile) && $obprofile->idno !='')
                                   <input type="text" id="idno" name="idno" value="{{ $obprofile->idno }}" class="form-control" required >
                                   <input type="hidden" id="previdno" name="previdno" value="{{ $obprofile->idno }}" class="form-control" >
                                   @elseif(!empty($obformassist) && $obformassist->idno !='')
                                   <input type="text" id="idno" name="idno" value="{{ $obformassist->idno }}" class="form-control" required >
                                   <input type="hidden" id="previdno" name="previdno" value="{{ $obformassist->idno }}" class="form-control" >
                                   @else --}}
                                   <input type="text" id="idno" name="idno" value="" class="form-control" required >
                                   <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                   {{-- @endif --}}
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