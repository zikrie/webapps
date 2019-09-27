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
                           <div class="col-md-12">
                               <div class="form-group">
                                   <label class="control-label">@lang('scheme/ob.attr.name')</label><span class="required">*</span>
                                   <input type="text" id="name" name="name" value="" class="form-control" required>
                               </div>
                           </div>
                       </div>
                       <div class='row'>
                           <div class="col-md-6">
                              <div class="form-group">
                                           
                               </div>
                           </div>
                       </div>
                       <div class='row'>
                           <div class="col-md-3">
                               <div class="form-group">
                                   <label class="control-label">Identification Type</label> <span class="required">*</span>

                                   <select id="idtype" class="form-control" value="@if(!empty($obprofile)){{$obprofile->idtype}} @endif" name="idtype" required>
                                           <option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option>
                                       @foreach($idtype as $id)
                                       @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                       <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                       @else
                                       <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                       @endif
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-3">
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
                       
                       <div class="row">
                           <div class="col-md-12">
                               <div class="form-group">
                                   <label>@lang('scheme/ob.attr.postal_address')</label>
                                   <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" >
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group">
                                   
                                   <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" >
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="form-group">
                                  
                                   <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" >
                               </div>
                           </div>
                       </div>
           
                       <div class='row'>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                   <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                   <select name='state' id='state' class='form-control'>
                                       @foreach($state as $s)
                                       @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                       <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                       @else
                                       <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                       @endif
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label>@lang('scheme/ob.attr.city')</label>
                                   <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label>@lang('scheme/ob.attr.postcode')</label>
                                   <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label>@lang('scheme/ob.attr.telNo')</label>
                                   <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control clearFields">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label>About Investigation</label>
                                   <textarea type="text" class="form-control"></textarea>
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