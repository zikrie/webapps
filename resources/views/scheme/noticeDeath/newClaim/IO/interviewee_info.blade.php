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
                                   <label class="control-label">Interviewer Type</label><span class="required">*</span>
                                   <select name="iv_name" class="form-control">
                                      <option>Please Select</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-4">
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
                           <div class="col-md-4">
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
                                   <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
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
                                   <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                                   <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
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
                           <div class="col-md-4">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Language</label>
                                    <select name="language" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="">Malay</option>
                                        <option value="">English</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" id="others_language">
                                <div class="form-group">
                                    <label class="control-label">Please Specify</label>
                                    <input type="text" id="name" name="name" value="" class="form-control language" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Translator Name</label>
                                    <input type="text" id="" name="" value="" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Add Statement?</label>
                                    <input type="checkbox" id="add_statement" class="text-center" onclick="addStatement()" class="custom-control-input"><label for="customRadio1">

                                    {{-- <select name="add_statement" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>

                        <div class='row' id="without_statement">
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">PRINT</button>
                                </div>
                            </div>
                        </div>
                        <br/>

                        <div id="statement" style="display:none">

                            <h6 class="card-title-sub">Statement</h6>
                            <hr>

                            <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Statement</label>
                                        <textarea type="text" name="statement" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                       
                            <div class='row' id="with_statement">
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">PRINT</button>
                                    </div>
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

    $(document).ready(function() {
    
    // alert('hello');
    
        $("#others_language").hide();
        // $("#statement").hide();
    
        $('select[name=language]').change(function () {
            if (this.value == 'others') {
                $("#others_language").show();
                } else {
                $("#others_language").hide();
                $(".language").val('');
            }
        });
    
        // if ($('#add_statement').attr('checked')) {
           
        //     $("#statement").show();
        //     $("#with_statement").show();
        //     $("#without_statement").hide();
        //     } else {
        //     $("#statement").hide();
        //     $("#with_statement").hide();
        //     $("#without_statement").show();

        //         // $(".language").val('');
        //     }

    
    });

    function addStatement() {

        // alert('masuk');
    // Get the checkbox
    var checkBox = document.getElementById("add_statement");
    // Get the output text
    var text = document.getElementById("statement");
    var text2 = document.getElementById("without_statement");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
        text2.style.display = "none";
    } else {
        text.style.display = "none";
        text2.style.display = "block";

    }
    }
    
</script>