
<div class="row" id="containerx45">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/otinfo">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{-- <input type="hidden" name="caserefno" value="{{$caserefno}}"> --}}
                        <div class="form-body">
                            
                            @if(Session::get('messageotinfo'))
                            <div class="card-footer">
                                <div class="alert alert-warning">
                                    {{Session::get('messageotinfo')}}
                                </div>
                            </div>
                            @elseif (!empty($messageotinfo))
                            <div class="card-footer">
                                <div class="alert alert-warning">
                                    {{$messageotinfo}}
                                </div>
                            </div>
                            @endif
    
                            @if (!empty($otinfo))
             
    
                            @else
                            @include('scheme.noticeDeath.newClaim.general.dependant_add')
                            @endif
                         </div>
    <div id="add_ot_accordian">
    </div>
    <div class="form-actions">
        <!-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button> -->
        <button type="button" id="btn_add_ot" style="display:none" href="#!" data-toggle="modal" data-id="0" data-target="#modal_dependent" class="btn btn-sm waves-effect waves-light btn-info">ADD DEPENDANT</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    {{-- Confirm modal --}}
    <div class="modal fade" id="deletemodalot" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete?
                    <input type="hidden" class="form-control" name="id" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_close" class="btn btn-secondary btn-sm"
                        data-dismiss="modal">Close</button>
                    <button type="button" id="btn_delete" class="btn btn-danger btn-sm" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="modal_dependent" role="dialog">
        <div class="modal-dialog  modal-xl" role="document">
            <div class="modal-content" id="containerx">
    
                <!-- <div class="modal-header" style="background-color:#98cb5b;"> -->
                <!-- <div class="modal-header" style="background-color:#284682;color:#f8f9fa;border-bottom: 5px solid #98cb5b;"> -->
                <div class="modal-header">
                    <!-- <h6 class="modal-title"  id="exampleModalLabel3">Add Dependent Information</h6> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form id="form_dependent" action="{{--{{route('postOtInfo')}}--}}" method="post" data-parsley-validate>
                <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                @csrf
    
                    <div class="modal-body" style="margin-bottom: 15px;overflow:hidden;">
                        <div class="SFPanelScroll-Hidden">
                            <div class="col-sm-12" style="padding-top: 0px">
                                <div class="col-sm-12">
                                <h5 class="card-title" >@lang('form/scheme.notice_death.PK.dependant.title_modal')</h5>
                                <div class="row">    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_name')</label>
                                            <input type="text" id="name0" name="name" value="" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_type')
                                                </label>
                                                <select id="idtype" class="form-control idtype" value="@if(!empty($oti)){{$oti->idtype}} @endif" name="idtype">
                                            <option value="">Please select</option>
                                                @foreach($idtype as $id)
                                                <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_no')</label>
                                            <input type="text" id="idno" name="idno" value="" class="form-control" required>
                                        </div>
                                    </div>        
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.passportno')</label>
                                                <input type="text" id="passportno" name="passportno" value="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.passportexp')</label>
                                            <input type="date" id="passportexp" name="passportexp" value="" class="form-control" >
                                        </div>
                                    </div>        
                                </div>
                                <div class="row">
                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.oldpassportno')</label>
                                            <input type="text" id="oldpassportno" name="oldpassportno" value="" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" id="date_birth">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.dateOfBirth')</label>
                                            <input type="date" id="dob" name="dob" value="" class="form-control date_birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.relationship')</label>
                                                <select class="form-control relationship" name="relationship" id="relationship"> 
                                                <option value="">Please select</option>
                                                @foreach($relation as $rel)
                                                <option value="{{$rel->refcode}}">{{$rel->descen}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Date of Married with OB -->
                                    <div class="col-md-4" id="married_ob">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_marriedOb')</label>
                                            <input type="date" id="marriedobdate" name="marriedobdate" value="" class="form-control">
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4" id="otstatus">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.status')</label>
                                            <select class="form-control ots" name="otsts" id="ots"> 
                                                <option value="">Please select</option>    
                                                @foreach($otsts as $ot)
                                                <option value="{{$ot->refcode}}">{{$ot->descen}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Demised Date if OT Status = Demised -->
                                    <div class="col-md-4" id="demised_date">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_death')</label>
                                            <input type="date" id="dodeath" name="dodeath" value="" class="form-control">
                                        </div>
                                    </div>
                                    <!-- Passport Expired Date if ID Type = SSN -->
                                    <div class="col-md-4" id="passport_expired">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.passport_expired')
                                            </label>
                                                <input type="date" id="passportexp" name="passportexp" value="" class="form-control">
                                        </div>
                                    </div> 
                                    <!-- Disablity either Before or After death if OT Status == disabled -->
                                    <div class="col-md-4" id="disability_beforeafter">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.disability_beforeAfter_death')</label>
                                            <select class="form-control" name="disablewhen" id="disablewhen">  
                                                <option value="">Please select</option>  
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>           
                                                {{-- @foreach($disable as $dis)
                                                <option value="{{$dis->refcode}}">{{$dis->descen}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-4" id="married_date">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.married_date')</label>
                                            <input type="date" id="marrieddate" name="marrieddate" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="remarried_date">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.remarried_date')</label>
                                            <input type="date" id="remarrieddate" name="remarrieddate" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Condition based on relationship, OT Status & ID Type = SSN -->
                                {{-- <div class="row"> --}}
                                    <!-- Date Of Birth if relationship with OB = child -->
                                    
                    
                                        <!-- Eligibility start Date -->
                                        {{--<div class="col-md-4" id="eligibility_start">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_start')</label>
                                            <input type="date" id="eligibilitystart" name="eligibilitystart" value="" class="form-control">
                                        </div>
                                    </div>
                                
                                    <!-- Eligibility End Date -->
                                    <div class="col-md-4" id="eligibility_end">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_end')</label>
                                            <input type="date" id="eligibilityend" name="eligibilityend" value="" class="form-control">
                                        </div>
                                    </div>--}}
                                
                                    
                                    <!-- Date of Married with OB -->
                                    {{-- <div class="col-md-4" id="divored_ob">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_divorcedOb')</label>
                                            <input type="date" id="divorcedobdate" name="divorcedobdate" value="" class="form-control">
                                        </div>
                                    </div>  --}}
                                {{-- </div> --}}
                                {{-- <div class="row">                         --}}
                                    <!--In Edah if Marital Status at the time of death is Divorced -->
                                    {{-- <div class="col-md-3" id="in_edah">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.edah')</label>
                                            <select class="form-control" name="edah" id="edah">
                                            <option value=''>Please select</option>
                                            <option value='Y'>@lang('option.yes')</option>
                                            <option value='N'>@lang('option.no')</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                        
                                {{-- </div>  --}}
                                {{-- <div class="row"> --}}
                                    <!-- Married Date if OT Status = Married && Relation with OB == Child/Siblings -->
                                    
                                    <!-- Registered Married is the same with married date -->
                                    {{-- <div class="col-md-3" id="registered_married">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.registered_married')</label>
                                            <select class="form-control" name="regmarried" id="regmarried">
                                                <option value=''>Please select</option>
                                                <option value='Y'>@lang('option.yes')</option>
                                                <option value='N'>@lang('option.no')</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                {{-- </div> --}}
                                {{-- <div class="row">
                                    <!-- Disability if relation OB & OT == Child -->
                                    <div class="col-md-4" id="disability_i">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.disability')</label>
                                                <select class="form-control" name="disability" id="disability">
                                                    <option value=''>Please select</option>
                                                    <option value='Y'>@lang('option.yes')</option>
                                                    <option value='N'>@lang('option.no')</option>
                                                </select> 
                                        </div>
                                    </div>
                                                            
                                    <!-- Still Study appear when choose Yes -->
                                    <div class="col-md-4" id="still_study">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.still_study')</label>
                                            <select class="form-control stillstudy" name="still_study" id="still_study_input">
                                                <option value="">Please select</option>    
                                                <option value="yes" selected>Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.address')</label>
                                            <input type="text" id="add1" name="add1" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="add2" name="add2" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="add3" name="add3" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.state')</label>
                                            <select name='statecode' id='statecode' class='form-control'>
                                                    <option value="">Please select</option>    
                                                    @foreach($state as $s)
                                                    <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.city')</label>
                                            <input type="text" id="city" name="city" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.postcode')</label>
                                            <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.po_box')</label>
                                            <input type="text" id="pobox" name="pobox" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.locked_bag')</label>
                                            <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.wdt')</label>
                                            <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                        </div>
                                    </div>
                                    
                                
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.telephoneNo')</label>
                                            <input type="text" id="telno" name="telno" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.mobileNo')</label>
                                            <input type="text" id="mobileno" name="mobileno" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.email')</label>
                                            <input type="text" id="email" name="email" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_guardian')</label>
                                            <select class="form-control guardianQ" name="guardian" id="guardianQ">
                                                <option>Please select</option>
                                                <option value='Y'>@lang('option.yes')</option>
                                                <option value='N'>@lang('option.no')</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-actions col-md-8 pull-right">
                                        <!-- <button type="button" id="btn_add_guardian0" style="display:none" class="btn btn-sm waves-effect waves-light btn-info" href="#!" data-toggle="modal" data-id="0" data-target="#modal_guardian">ADD GUARDIAN INFO</button> -->
                                        <button type="button" id="btn_add_guardian" style="display:none" class="btn btn-sm waves-effect waves-light btn-info">ADD GUARDIAN INFO</button>
                                    </div>  
                                </div>
                                            
                                {{--<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.otobdependence')</label>
                                        <input type="text" id="obotdependence" name="obotdependence" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.qualification')</label>
                                        <input type="text" id="qualification" name="qualification" value="" class="form-control">
                                    </div>
                                </div>--}}
                                {{--<div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility')</label>
                                        <input type="text" id="eligibility" name="eligibility" value="" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.pendingpay')</label>
                                        <input type="text" id="pendingpay" name="pendingpay" value="" class="form-control">
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.maritalstatus')</label>
                                        <select class="form-control" name="maritalsts"> 
                                        <option value="">Please select</option>    
                                        @foreach($maritalsts as $id)
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>--}} 
                        
                                <div id="yes_dependantstudy">
                                <h5 class="card-title">@lang('form/scheme.notice_death.PK.dependant_study.title')</h5>
                                <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_start_date')</label>
                                                <input type="date" id="studystartdate" name="studystartdate" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_end_date')</label>
                                                <input type="date" id="studyenddate" name="studyenddate" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.status')</label>
                                                <select class="form-control" name="studysts" id="study_status"> 
                                                    <option value="">Please select</option>    
                                                    @foreach($studysts as $id)
                                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.edu_level')</label>
                                                <select class="form-control edu" name="edulvl" id="edulvl"> 
                                                    <option value="">Please select</option>    
                                                    @foreach($edulvl as $id)
                                                    <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 edu_other_box" id="eduother">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.pls_specify')</label>
                                                <input type="text" name="eduothers" id="eduothers" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.course_name')</label>
                                                <input type="text" id="coursename" name="coursename" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.inst_univer_name')</label>
                                                <input type="text" id="uniname" name="uniname" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                    
                                
                                <div id="guardian" style="display:none">
                                <h5 class="card-title">@lang('form/scheme.notice_death.PK.dependant.M_guardian_info')</h5>
                                <hr>
                                <div class="table-responsive m-t-40">
                                  <table id="tableGuardian" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                      <thead>
                                          <tr>
                                              <th>@lang('form/scheme.notice_death.PK.dependant.T_select')</th>
                                              <th>@lang('form/scheme.notice_death.PK.dependant.T_idno')</th>
                                              <th>@lang('form/scheme.notice_death.PK.dependant.T_name')</th>
                                          </tr>
                                      </thead>
                                      
                                      <tbody>
                                        @if ($otinfo !== null && $otinfo !== '')   
                                            @foreach ($otinfo as $og)
                                            @if($og->guardian == 'Y')
                                            <tr class="{{ $og->idno }}" id="{{ $og->idno }}" style="">
                                                 <td><input type="checkbox" class="cb" name="OT[]" value="{{ $og->idno }}_0_{{ $og->idtype }}"></td>
                                                 <td>{{ $og->name }}</td>
                                                 <td>{{ $og->idno }}</td>
                                                 
                                            </tr>
                                            @endif
                                            @endforeach 
                                        @endif
                                      </tbody>
                                  </table>
                              </div>
                              <div class="row p-t-20 pull-right">
                              
                                        <button type="button" id="btn_guardian_modal" class="btn btn-sm waves-effect waves-light btn-info" href="#!" data-id="0">ADD GUARDIAN</button>
                                
                              </div>
                                    
                              <div id="add_guardian" style="display:none;">

                              <div class="row p-t-20">
                                  <div class="col-md-12">
                                       <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.guardian_name')</label>
                                            <input type="text" name="guardian_name" id="guardian_name" class="form-control">
                                       </div>
                                  </div>
                             </div>
                             <div class="row p-t-20">
                                  <div class="col-md-6">
                                  <div class="form-group">
                                       <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.id_type')</label>
                                       <select id="idtype0" class="form-control"  name="guardian_idtype">
                                        @foreach($idtype as $id)
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                       <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_no')</label>
                                       <input type="text" name="guardian_idno" id="identification_number" class="form-control">
                                  </div>
                                  </div>
                             </div>
                             <div class="row p-t-20">
                                  <div class="col-md-12">
                                       <div class="form-group">
                                       <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.address')</label>
                                       <input type="text" name="guardian_add1" id="address1" class="form-control">
                                       </div>
                                  </div>
                                  <div class="col-md-12">
                                       <div class="form-group">
                                       <input type="text" name="guardian_add2" id="address2" class="form-control">
                                       </div>
                                  </div>
                                  <div class="col-md-12">
                                       <div class="form-group">
                                       <input type="text" name="guardian_add3" id="address3" class="form-control">
                                       </div>
                                  </div>
                          </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.city')</label>
                                        <input type="text" name="guardian_city" id="city" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.state')</label>
                                        <select name="guardian_statecode" id="statecode" class="form-control">
                                                @foreach($state as $s)
                                                <option value="{{$s->refcode}}">{{$s->descen}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.postcode')</label>
                                            <input type="number" name="guardian_post_code" id="post_code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.po_box')</label>
                                            <input type="text" name="guardian_pobox" id="pobox" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.locked_bag')</label>
                                            <input type="text" name="guardian_lockedbag" id="lockedbag" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.guardian.wdt')</label>
                                            <input type="text" name="guardian_wdt" id="wdt" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.telephoneNo')</label>
                                            <input type="text" id="telno" name="guardian_telno" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.mobileNo')</label>
                                            <input type="text" id="mobileno" name="guardian_mobileno" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.notice_death.PK.dependant.email')</label>
                                            <input type="text" id="email" name="guardian_email" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
    
                              
    
                              </div>
            
                                </div>
                                <div class="form-body"  id="bank_info" style="display:none;">
                                    <h5 class="card-title-sub">@lang('form/scheme.general.collapse.bank.title')</h5>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.general.collapse.bank.payment')</label>
                                                <select class="form-control" name='paymode' id='paymode' required>
                                                    <option value="">Please Select</option>
                                                    @foreach($optionpay as $opay)
                                                    
                                                    <option value="{{$opay->refcode}}"> {{$opay->descen}} </option>
                                          
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="bank_location" style="display:none">
                                            <div class="form-group">
                                                <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_account')</label>
                                                <select class="form-control select" id="bankloc" name='bankloc'>
                                                <option value="">Please Select</option>
                                                @foreach($optionbank as $ob)
                                                <option value="{{$ob->refcode}}">{{$ob->descen}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="bank_reason">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.bank.reason')</label>
                                                    @if (!empty($bankinfo) && $bankinfo->accexist=='N')
                                                    <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                                    @else
                                                    <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                                    @endif
                                                    @foreach($optionreason as $or)
                                                    @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                                    <option value="{{$or->refcode}}" selected>{{$or->descen}}</option>
                                                    <option>@lang('form/scheme.general.collapse.bank.senior')</option>
                                                    <option>@lang('form/scheme.general.collapse.bank.legal')</option>
                                                    @else
                                                    <option value="{{$or->refcode}}">{{$or->descen}}</option>
                                                    @endif
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="bank_eft">
                                        <div id="local_bank">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                            <select class="form-control selectLocalBank" name='bankcode'
                                                            id='bankcode'>
                                                            @else
                                                            <select class="form-control selectLocalBank" name='bankcode'
                                                            id='bankcode'>
                                                            @endif

                                                            @foreach($bankcode as $bc)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                            $bankinfo->bankcode == $bc->refcode)
                                                            <option value="{{$bc->refcode}}" selected>{{$bc->descen}}
                                                            </option>
                                                            @else
                                                            <option value="{{$bc->refcode}}">{{$bc->descen}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="{{$bankinfo->accno}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->acctype)
                                                        <select class="form-control selectLocalBank" name='localacctype'
                                                        id='localacctype' value="{{$bankinfo->acctype}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <select class="form-control selectLocalBank" name='localacctype'
                                                        id='localacctype' value="">
                                                        @else
                                                        <select class="form-control selectLocalBank" name='localacctype'
                                                        id='localacctype'>
                                                        @endif


                                                        @foreach($accountype as $at)
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                        $bankinfo->acctype == $at->refcode)
                                                        <option value="{{$at->refcode}}" selected>{{$at->descen}}
                                                        </option>
                                                        <option>@lang('form/scheme.general.collapse.bank.joint')</option>
                                                        @else
                                                        <option value="{{$at->refcode}}">{{$at->descen}}</option>
                                                        @endif
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="oversea_bank">
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->ovbankname)
                                                        <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->ovbankname}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->accno)
                                                        <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->accno}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.ov_type_acc')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <select class="form-control selectOverseasBank" name='ovacctype' id='ovacctype'>
                                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                            <select class="form-control selectOverseasBank" name='ovacctype'
                                                            id='ovacctype'>
                                                            @else
                                                            <select class="form-control selectOverseasBank" name='ovacctype'
                                                            id='ovacctype'>
                                                            @endif

                                                            @foreach($overseasbanktype as $ovt)
                                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'O' &&
                                                            $bankinfo->acctype == $ovt->refcode)
                                                            <option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>
                                                            <option>@lang('form/scheme.general.collapse.bank.joint')</option>
                                                            @else
                                                            <option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.country')</label>
                                                        <input type="text" name="country" id="country" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.currency')</label>
                                                        <input type="text" name="currency" id="currency" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.swift_code')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.bsb_code')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.bank.ov_bank_address')</label>
                                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                                        @else
                                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">@lang('button.close')</button>
                        <button type="submit" class="btn btn-primary" id="save_dependent">@lang('button.save')</button>
                    </div>
    
    
                </form>
    
            </div>
        </div>
    </div>

    <!-- <div class="modal" id="modal_guardian" role="dialog">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('form/scheme.notice_death.PK.dependant.M_guardian_info')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form id="form_guardian" method="post" data-parsley-validate>
    
                    <div class="modal-body" style="margin-bottom: 15px;overflow:hidden;">
                        <div class="SFPanelScroll-Hidden">
                            <div class="col-sm-12" style="padding-top: 0px">
                                <div class="col-sm-12">
                                <div class="table-responsive m-t-40">
                                  <table id="tableGuardian" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                      <thead>
                                          <tr>
                                              <th>@lang('form/scheme.notice_death.PK.dependant.T_select')</th>
                                              <th>@lang('form/scheme.notice_death.PK.dependant.T_idno')</th>
                                              <th>@lang('form/scheme.notice_death.PK.dependant.T_name')</th>
                                          </tr>
                                      </thead>
                                      
                                      <tbody>
                                        @if ($otinfo !== null && $otinfo !== '')   
                                            @foreach ($otinfo as $og)
                                            @if($og->guardian == 'Y')
                                            <tr class="{{ $og->idno }}" id="{{ $og->idno }}_0" style="">
                                                 <td><input type="checkbox" class="cb" name="OT_0[]" value="{{ $og->idno }}_0_{{ $og->idtype }}"></td>
                                                 <td>{{ $og->name }}</td>
                                                 <td>{{ $og->idno }}</td>
                                                 
                                            </tr>
                                            @endif
                                            @endforeach 
                                        @endif
                                      </tbody>
                                  </table>
                              </div>
                              <div class="row p-t-20">
                                <div class="text-right">
                                        <button type="button" id="btn_guardian_modal" class="btn btn-sm waves-effect waves-light btn-info" href="#!" data-id="0">ADD GUARDIAN</button>
                                </div>
                              </div>
                                    
                              <div id="add_guardian" style="display:none;">

                             
    
                              
    
                              </div>
                            
            
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">@lang('button.close')</button>
                        <button type="submit" class="btn btn-primary" id="btn_add2">@lang('button.save')</button>
                    </div>
    
    
                </form>
    
            </div>
        </div>
    </div> -->

    <!--end Modal-->
    
    @php($no_ot = 0)
    @php($otinfo == null ? $no_ot = 0 : $no_ot = count($otinfo))
    
    <script src="{{ asset('/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />
        
    <script>
    $(document).ready(function() {

        $('#modal_dependent').on('hidden.bs.modal', function () {

            // alert();
    
            // $('#modal_dependent').empty();
            $(':input','#modal_dependent')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .prop('checked', false)
                .prop('selected', false);
            $('#btn_add_guardian').hide();
            $('#guardian').hide();

        });

        $('#btn_add_guardian').on('click',function(){
            $('#guardian').show();
               
        });
    
        $("#yes_dependantstudy").hide();
        $("#passport_expired").hide();
        $("#date_birth").show();
        $("#married_date").hide();
        $("#remarried_date").hide();
        $("#still_study").hide();
        $("#registered_married").hide();
        $("#in_edah").hide();
        $("#disability_i").hide();
        $("#eligibility_start").show();
        $("#eligibility_end").show();
        $("#demised_date").hide();
        $("#married_ob").hide();
        $("#divorced_ob").hide();
        $("#disability_beforeafter").hide();
    
        guardian_question();
        bank_info (0);
    
    
        $('#btn_guardian_modal').on('click',function(){
            // alert("masuk");
                // var delete_id = $(this).attr('id');

                $('#add_guardian').show();
                $('#bank_info').show();
               
                            
                
        });
    
        $('#modal_guardian').on('hidden.bs.modal', function () {
    
            $('#add_guardian').empty();
            $('#add_guardian').hide();
            $('#bank_info').empty();
            $('#bank_info').hide();
            $('#tableGuardian  > tbody').empty();
    
        });
    
        // alert('Jquery detected');
        var no_ot = {!! $no_ot !!};
        //alert(no_ot);
    
        // FOR CHECKING
            if(no_ot > 0){
                var i = no_ot-1;
                var ot_data = {!! json_encode($otinfo) !!};
    
                if(ot_data){
                    $.each(ot_data, function(index,value){
                        // alert (index);
                        // check the idtype
                        if (value.idtype == '05') {
                            $('#passport_expired'+index).show();
                        }
                        else {
                            $('#passportexp'+index).prop('value', '');
                            $('#passport_expired'+index).hide();
                        }
                        
                        // ------------------------------------ CHECK RELATIONSHIP -------------------------------------
    
    
                        if (value.relationship == '1') {
                            $('#otstatus'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        if (value.relationship == '1' && value.otsts == '6') {
                            $('#otstatus'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).show();
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        if (value.relationship == '1' && value.otsts == '5') {
                            $('#otstatus'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).show();
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        if (value.relationship == '1' && value.otsts !== '5') {
                            $('#otstatus'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        // ----------------- RELATIONSHIP = WIDOW --------------------
                        if (value.relationship == '2') {
                            $('#married_ob'+index).show();
                            $('#in_edah'+index).show();
                            $('#registered_married'+index).show();
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#yes_dependantstudy'+index).hide();
                            $('#studystartdate'+index).prop('value', '');
                            $('#studyenddate'+index).prop('value', '');
                            $('#study_status'+index).prop('value', '');
                            $('#edulvl_'+index).prop('value', '');
                            $('#eduothers'+index).prop('value', '');
                            $('#coursename'+index).prop('value', '');
                            $('#uniname'+index).prop('value', '');
                        }
                        if (value.relationship == '2' && (value.otsts == '2' || value.otsts == '5')) {
                            $('#married_ob'+index).show();
                            $('#in_edah'+index).show();
                            $('#registered_married'+index).show();
                            $('#married_date'+index).show();
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
    
                        }
                        if (value.relationship == '2' && value.otsts == '1') {
                            $('#married_ob'+index).show();
                            $('#in_edah'+index).show();
                            $('#registered_married'+index).show();
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).show();
                        }
    
                        // ----------------- RELATIONSHIP = WIDOWER --------------------
                        if (value.relationship == '3') {
                            $('#married_ob'+index).show();
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                            $('#registered_married'+index).show();
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
    
                        }
                        if (value.relationship == '3' && (value.otsts == '2' || value.otsts == '5')) {
                            $('#married_ob'+index).show();
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                            $('#registered_married'+index).show();
                            $('#married_date'+index).show();
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
    
                        }
                        if (value.relationship == '3' && value.otsts == '1') {
                            $('#married_ob'+index).show();
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                            $('#registered_married'+index).show();
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).show();
                        }
                        // ----------------- RELATIONSHIP = SIBLINGS --------------------
                        if (value.relationship == '8') {
                            $('#edah'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#otstatus'+index).show();
                            $('#married_date'+index).hide();
                            $('#ots'+index).prop('value', '');
                        }
                        if (value.relationship == '8' && (value.otsts == '2' || value.otsts == '5')) {
                            $('#otstatus'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        if (value.relationship == '8' && (value.otsts == '1')) {
                            $('#otstatus'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).show();
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        if (value.relationship == '4' || value.relationship == '5' || value.relationship == '6' || value.relationship == '7') {
                            $('#otstatus'+index).hide();
                            $('#ots'+index).prop('value', '');
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                            $('#yes_dependantstudy'+index).hide();
                            $('#studystartdate'+index).prop('value', '');
                            $('#studyenddate'+index).prop('value', '');
                            $('#study_status'+index).prop('value', '');
                            $('#edulvl_'+index).prop('value', '');
                            $('#eduothers'+index).prop('value', '');
                            $('#coursename'+index).prop('value', '');
                            $('#uniname'+index).prop('value', '');
                        }
                       
    
                        // ---------------------------- CHECK DEPENDANT INFO -------------------------------------
    
                        var a = $('#dob'+index).val();
                        var age = getAge(a);
                        // console.log(age);
                        // console.log(status);
    
                        
    
                        if (value.relationship == '1' && value.otsts == '4' && (age <= 21 && age >= 18)) {
                            $('#yes_dependantstudy'+index).show();
                            $('#registered_married'+index).hide();
                            $('#regmarried'+index).prop('value', '');
                            $('#married_date'+index).hide();
                            $('#marrieddate'+index).prop('value', '');
                            $('#disability_beforeafter'+index).hide();
                            $('#disablewhen'+index).prop('value', '');
                            $('#demised_date'+index).hide();
                            $('#dodeath'+index).prop('value', '');
                            $('#married_ob'+index).hide();
                            $('#marriedobdate'+index).prop('value', '');
                            $('#in_edah'+index).hide();
                            $('#edah'+index).prop('value', '');
                        }
                        else{
                            $('#yes_dependantstudy'+index).hide();
                            $('#studystartdate'+index).prop('value', '');
                            $('#studyenddate'+index).prop('value', '');
                            $('#study_status'+index).prop('value', '');
                            $('#edulvl_'+index).prop('value', '');
                            $('#eduothers'+index).prop('value', '');
                            $('#coursename'+index).prop('value', '');
                            $('#uniname'+index).prop('value', '');
                        }
                    })
                }
            }
                else 
            {
                var i = 0;
            }
    
            function getAge(dateString){
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                    age--;
                }
                console.log(age);
                return age;
            }
    
            // --------------------------------------------------------- TO CHANGE IDTYPE VALUE -----------------------------------------------------------------
    
            $('#containerx').on('change','.idtype',function() {
                var current_id = event.target.id;
                var split_id = current_id.split("e");
                var id = split_id[1];
                // alert(id);
    
                if (this.value == '05') {
                    $('#passport_expired').show();
                }
                else {
                    $('#passportexp').prop('value', '');
                    $('#passport_expired').hide();
                }
            });
    
            // --------------------------- TO DISPLAY DEPENDANT STUDY INFO ------------------------------
    
                
            $('#containerx').on('change','.date_birth',function() {
                var current_id = event.target.id;
                var split_id = current_id.split("b");
                var id = split_id[1];
    
                var a = $(this).val();
                var status = $('#ots').val();
                var relay = $('#relationship').val();
                var age = getAge(a);
    
                // console.log("current_id"+current_id);
    
                // alert('date_birth - id: '+ ' otstatus: ' +status+ ' age: ' +age+ ' relationship: '+relay);
    
                if (status == '4' && relay == '1' && (age <= 21 && age >= 18)) {
                    $('#yes_dependantstudy').show();
                }
                else{
                    $('#yes_dependantstudy').hide();
                    $('#studystartdate').prop('value', '');
                    $('#studyenddate').prop('value', '');
                    $('#study_status').prop('value', '');
                    $('#edulvl_').prop('value', '');
                    $('#eduothers').prop('value', '');
                    $('#coursename').prop('value', '');
                    $('#uniname').prop('value', '');
                }
                
            });        
    
            // ---------------------- ON CHANGE WHEN CLICK RELATIONSHIP --------------------------
    
            $('#containerx').on('change','.relationship',function() {
                var current_id = event.target.id;
                var split_id = current_id.split("p");
                var id = split_id[1];
    
                var a = $(this).val();
                var status = $('#ots').val()
                var dob = $('#dob').val()
                var age = getAge(dob);
    
                // Dependent Status
                //1- Demised
                //2- Remarried
                //3- Bankruptcy
                //4- Studying
                //5- Married
                //6- Disabled
                //7- Adoption
                //8- Date Not Qualified
    
                // console.log("current_id"+current_id);
    
                // ----------------- FIRST RELATIONSHIP CHANGE--------------------
                var first_relationship = $('#relationship').val();
                // ----------------- SELECT WIDOWER--------------------
    
                var no_of_widow = $('[id^="relationship"] option[value=2]:selected').length;
    
                // alert('realtionship - id: '+ ' otstatus: ' +status+ ' age: ' +age+ ' relationship: '+a);
    
                // check still study
                if (status == '4' && a == '1' && (age <= 21 && age >= 18)) {
                    $('#yes_dependantstudy').show();
                }
                if (status !== '4' && a !== '1' && (age >= 21 && age <= 18)){
                    $('#yes_dependantstudy').hide();
                    $('#studystartdate').prop('value', '');
                    $('#studyenddate').prop('value', '');
                    $('#study_status').prop('value', '');
                    $('#edulvl').prop('value', '');
                    $('#eduothers').prop('value', '');
                    $('#coursename').prop('value', '');
                    $('#uniname').prop('value', '');
                }
    
                // ----------------- RELATIONSHIP = CHILD --------------------
    
                if (a == '1') {
                    $('#otstatus').show();
                    $('[id="otstatus"] option[value=1]').hide();
                    $('[id="otstatus"] option[value=2]').hide();
                    $('[id="otstatus"] option[value=3]').hide();
                    $('[id="otstatus"] option[value=4]').show();
                    $('[id="otstatus"] option[value=5]').show();
                    $('[id="otstatus"] option[value=6]').show();
                    $('[id="otstatus"] option[value=7]').show();
                    $('[id="otstatus"] option[value=8]').hide();
                    $('[id="otstatus"] option[value=9]').hide();
    
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '1' && otstatus == '6') {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').show();
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '1' && otstatus == '5') {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '1' && otstatus !== '5') {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                // ----------------- RELATIONSHIP = WIDOW --------------------
                if (a == '2') {
                    $('#otstatus').show();
                    $('[id="otstatus"] option[value=1]').show();
                    $('[id="otstatus"] option[value=2]').show();
                    $('[id="otstatus"] option[value=3]').hide();
                    $('[id="otstatus"] option[value=4]').hide();
                    $('[id="otstatus"] option[value=5]').hide();
                    $('[id="otstatus"] option[value=6]').hide();
                    $('[id="otstatus"] option[value=7]').hide();
                    $('[id="otstatus"] option[value=8]').hide();
                    $('[id="otstatus"] option[value=9]').show();
                    
                    $('#married_ob').show();
                    $('#in_edah').show();
                    $('#registered_married').show();
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#yes_dependantstudy').hide();
                    $('#studystartdate').prop('value', '');
                    $('#studyenddate').prop('value', '');
                    $('#study_status').prop('value', '');
                    $('#edulvl_').prop('value', '');
                    $('#eduothers').prop('value', '');
                    $('#coursename').prop('value', '');
                    $('#uniname').prop('value', '');
                }
                if (a == '2' && (otstatus == '2' || otstatus == '5')) {

                    if (otstatus == '2'){
                        $('#remarried_date').show(); 
                    }else{
                        $('#married_date').show();
                    }
                    $('#married_ob').show();
                    $('#in_edah').show();
                    $('#registered_married').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
    
                }
                if (a == '2' && otstatus == '1') {
                    $('#remarried_date').hide(); 
                    $('#married_ob').show();
                    $('#in_edah').show();
                    $('#registered_married').show()
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                }
    
                // ----------------- RELATIONSHIP = WIDOWER --------------------
                if (a == '3') {
    
                    $('#otstatus').show();
                    $('[id="otstatus"] option[value=1]').show();
                    $('[id="otstatus"] option[value=2]').show();
                    $('[id="otstatus"] option[value=3]').hide();
                    $('[id="otstatus"] option[value=4]').hide();
                    $('[id="otstatus"] option[value=5]').hide();
                    $('[id="otstatus"] option[value=6]').hide();
                    $('[id="otstatus"] option[value=7]').hide();
                    $('[id="otstatus"] option[value=8]').hide();
                    $('[id="otstatus"] option[value=9]').show();
    
                    $('#married_ob').show();
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#registered_married').show();
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
    
                }
                if (a == '3' && (otstatus == '2' || otstatus == '5')) {

                    if (otstatus == '2'){
                        $('#remarried_date').show(); 
                    }else{
                        $('#married_date').show();
                    }
                    $('#married_ob').show();
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#registered_married').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
    
                }
                if (a == '3' && otstatus == '1') {
                    $('#married_ob').show();
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#registered_married').show();
                    $('#remarried_date').hide(); 
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                }
                // ----------------- RELATIONSHIP = SIBLINGS --------------------
                if (a == '8') {
                    $('#otstatus').show();
                    $('[id="otstatus"] option[value=1]').show();
                    $('[id="otstatus"] option[value=2]').hide();
                    $('[id="otstatus"] option[value=3]').hide();
                    $('[id="otstatus"] option[value=4]').hide();
                    $('[id="otstatus"] option[value=5]').show();
                    $('[id="otstatus"] option[value=6]').hide();
                    $('[id="otstatus"] option[value=7]').hide();
                    $('[id="otstatus"] option[value=8]').hide();
                    $('[id="otstatus"] option[value=9]').hide();
    
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '8' && (otstatus == '2' || otstatus == '5')) {

                    $('#otstatus').show();
                    $('#remarried_date').hide(); 
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '8' && (otstatus == '1')) {
                    $('#otstatus').show();
                    $('#remarried_date').hide(); 
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '8' && (otstatus == '6')) {
                    $('#otstatus').show();
                    $('#remarried_date').hide(); 
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
    
                // ----------------- RELATIONSHIP = Mother/ Father/ Grandmother/ Grandfather --------------------
                if (a == '4' || a == '5' || a == '6' || a == '7') {
                    $('#otstatus').show();
                    $('[id="otstatus"] option[value=1]').show();
                    $('[id="otstatus"] option[value=2]').hide();
                    $('[id="otstatus"] option[value=3]').hide();
                    $('[id="otstatus"] option[value=4]').hide();
                    $('[id="otstatus"] option[value=5]').hide();
                    $('[id="otstatus"] option[value=6]').hide();
                    $('[id="otstatus"] option[value=7]').hide();
                    $('[id="otstatus"] option[value=8]').hide();
    
                    $('#ots').prop('value', '');
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#yes_dependantstudy').hide();
                    $('#studystartdate').prop('value', '');
                    $('#studyenddate').prop('value', '');
                    $('#study_status').prop('value', '');
                    $('#edulvl_').prop('value', '');
                    $('#eduothers').prop('value', '');
                    $('#coursename').prop('value', '');
                    $('#uniname').prop('value', '');
                    $('#remarried_date').hide(); 
                }
                
            });
    
            $('#containerx').on('change','.ots',function() {
                
                var current_id = event.target.id;
                var split_id = current_id.split("s");
                var id = split_id[1];
    
                var otstatus = $(this).val();
                var dob = $('#dob').val();
                var a = $('#relationship').val();
                var age = getAge(dob);
    
                console.log("current_id"+current_id);
                // alert(dob);
                // alert('id: '+ ' otstatus: ' +otstatus+ ' age: ' +age+ ' relationship: '+a);
    
    
                // check still study
                if (otstatus == '4' && a == '1' && (age <= 21 && age >= 18)) {
                    $('#yes_dependantstudy').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                }
                if (otstatus !== '4' && a !== '1' && (age >= 21 && age <= 18)) {
                    $('#yes_dependantstudy').hide();
                    $('#studystartdate').prop('value', '');
                    $('#studyenddate').prop('value', '');
                    $('#study_status').prop('value', '');
                    $('#edulvl_').prop('value', '');
                    $('#eduothers').prop('value', '');
                    $('#coursename').prop('value', '');
                    $('#uniname').prop('value', '');
                }
    
                if (a == '1' && otstatus == '6') {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').show();
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '1' && otstatus == '5') {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
    
                if (a == '2' && (otstatus == '2' || otstatus == '5')) {

                    if (otstatus == '2'){
                        $('#remarried_date').show(); 
                    }else{
                        $('#married_date').show();
                    }
                    $('#married_ob').show();
                    $('#in_edah').show();
                    $('#registered_married').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
    
                }
                if (a == '2' && otstatus == '1') {
                    $('#married_ob').show();
                    $('#in_edah').show();
                    $('#registered_married').show();
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                
                }
    
                if (a == '3' && (otstatus == '2' || otstatus == '5')) {

                    if (otstatus == '2'){
                        $('#remarried_date').show(); 
                    }else{
                        $('#married_date').show();
                    }
                    $('#married_ob').show();
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#registered_married').show();
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
    
                }
                if (a == '3' && otstatus == '1') {
                    $('#married_ob').show();
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#registered_married').show();
                    $('#married_date').hide();
                    $('#remarried_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                
                }
                if (a == '8' && (otstatus == '2' || otstatus == '5')) {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '8' && (otstatus == '1')) {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#remarried_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').show();
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '8' && (otstatus !== '1' && otstatus !== '2' && otstatus !== '5')) {
                    $('#otstatus').show();
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                }
                if (a == '4' || a == '5' || a == '6' || a == '7') {
                    $('#otstatus').hide();
                    $('#ots').prop('value', '');
                    $('#registered_married').hide();
                    $('#regmarried').prop('value', '');
                    $('#married_date').hide();
                    $('#marrieddate').prop('value', '');
                    $('#remarried_date').hide();
                    $('#remarrieddate').prop('value', '');
                    $('#disability_beforeafter').hide();
                    $('#disablewhen').prop('value', '');
                    $('#demised_date').hide();
                    $('#dodeath').prop('value', '');
                    $('#married_ob').hide();
                    $('#marriedobdate').prop('value', '');
                    $('#in_edah').hide();
                    $('#edah').prop('value', '');
                    $('#yes_dependantstudy').hide();
                    $('#studystartdate').prop('value', '');
                    $('#studyenddate').prop('value', '');
                    $('#study_status').prop('value', '');
                    $('#edulvl_').prop('value', '');
                    $('#eduothers').prop('value', '');
                    $('#coursename').prop('value', '');
                    $('#uniname').prop('value', '');
                }
                
            });
    
            $('#containerx').on('change','.edu',function() {
                var current_id = event.target.id;
                var split_id = current_id.split("_");
                var id = split_id[1];
    
                if (this.value == '6') {
                    console.log(this.value);
                    $('#eduother').show();
                }
                else {
                    console.log(this.value);
                    $('#eduother').hide();
                    $('#eduothers').prop('value', '');
                }
            });
    
    
            // ----------------------------- TO DISPLAY DEPENDANT STUDY --------------------------------------
    
            // $('#containerx').on('change','.stillstudy',function() {
            //     var current_id = event.target.id;
            //     var split_id = current_id.split("ut");
            //     var id = split_id[1];
    
            //     if (this.value == 'yes') {
            //         // alert('Cuba');
            //         $('#yes_dependantstudy').show();
            //         $('#still_study_input').prop('value', 'yes');
            //     }
            //     else{
            //         $('#yes_dependantstudy').hide();
            //         $('#still_study_input').prop('value', 'no');
            //         $('#study_status').prop('value', '');
            //         $('#studystartdate').prop('value', '');
            //         $('#studyenddate').prop('value', '');
            //         $('#uniname').prop('value', '');
            //         $('#coursename').prop('value', '');
            //         $('#edulvl').prop('value', '');
            //         $('#eduothers').prop('value', '');
            //     }
                
            // });
    
            // --------------------------- Calculate age -----------------------------------------
    
            function getAge(dateString){
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                    age--;
                }
                console.log(age);
                return age;
            }
                
            var html;
            // alert('Jquery detected');
    
            // --------------------------- FOR APPEND OT -------------------------------------
    
        $('#btn_add_ot').click(function(){  
            i++;
    
            var ot_collapse = $('div[id^="ot_collapse"]').length;
            console.log('no of ot:' + ot_collapse);
            var relation = $('#relationship').val();
    
            var no_of_ot = ot_collapse + 1;
    
            // var checked = $('table[id^="tableOT"]').find('input[type=checkbox]:checked').length;
            var no_of_widow = $('[id^="relationship"] option[value=2]:selected').length;
            console.log('no_of_widow :' + no_of_widow);
    
            //1 - child
            //2 - widow
            //3 - widower
            //4 - mother
            //5 - father
            //6 - Grandmother
            //7 - Grandfather
            //8 - siblings
    
            if(relation == '2') { //widow - next child and up to 4 widow
                var next_dependent = "1";
                var next_dependent = "3";
    
                console.log('next_dependent :' + next_dependent);
    
                //     $("#btn_add_ot").hide();
    
            }else if(relation == '3') { //widower - next child only
                var next_dependent = "1";
                console.log('next_dependent :' + next_dependent);
    
            }else if(relation == '4') { //mother - next father only
                var next_dependent = "5";
                $('#btn_add_ot').hide();
                console.log('next_dependent :' + next_dependent);
            }else if(relation == '5') { //father - next mother only
                var next_dependent = "4";
                $('#btn_add_ot').hide();
                console.log('next_dependent :' + next_dependent);
            }else if(relation == '8') { //siblings - next siblings only
                var next_dependent = "8";
                console.log('next_dependent :' + next_dependent);
            }else if(relation == '1') { //child - next child only ??
                var no_of_widow = $('[id^="relationship"] option[value=2]:selected').length;
                var no_of_widower = $('[id^="relationship"] option[value=3]:selected').length;
                console.log('next_dependent :' + next_dependent);
            }else{
                console.log('relation :' + relation);
            }
    
            html = '<div class="row" id="ot_list">'+
                        '<div class="col-md-12">'+
                            '<div id="ot_accordion'+i+'" role="tablist" aria-multiselectable="true">'+    
                                '<div class="m-b-0-1">'+
                                    '<div role="tab" id="otinfo">'+
                                        '<h6 class="card-title-sub"><i class="fa fa-plus"></i>&nbsp;<a class="collapsed link" data-toggle="collapse" data-parent="#ot_accordion'+i+'" href="#ot_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">@lang('form/scheme.notice_death.PK.dependant.title')</a>'+
                                        '<button type="button" id="btn_del_ot'+i+'" class="close btn_del_ot" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '</h6>'+
                                    '</div>'+
                                    '<div id="ot_collapse'+i+'" class="collapse" role="tabpanel">'+
                                        '<div class="card-body">'+
                                            '<div class="row">'+
                                                '<div class="col-md-12">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_name')</label>'+
                                                        '<input type="text" id="name'+i+'" name="name[]" value="" class="form-control" required>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_type')</label>'+
                                                        '<select id="idtype'+i+'" class="form-control idtype" value="" name="idtype[]">'+
                                                        '<option>Please select</option>'+
                                                         '@foreach($idtype as $id)'+
                                                         '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                                         '@endforeach'+
                                                         '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.id_no')</label>'+
                                                        '<input type="text" id="idno'+i+'" name="idno[]" value="" class="form-control" required>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-3 relay_box" id="relay'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.relationship')</label>'+
                                                        '<select class="form-control relationship" name="relationship[]" id="relationship'+i+'">';
                                                        if(relation == '2'){ //widow
                                                            html += '<option>Please select</option>';
                                                            html += '@foreach($relation as $rel)';
                                                            if (no_of_widow == 4){ //widow dah cukup 4 tak boleh tambah dah
                                                                if ({{$rel->refcode}} == '1'){
                                                                    html += '<option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>';
                                                                }
                                                            }else{
                                                                if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '3'){
                                                                    html += '<option value="{{$rel->refcode}}">{{$rel->descen}}</option>';
                                                                }
                                                            }
                                                            html += '@endforeach';
    
                                                        }else if(relation == '1'){ //child
                                                            html += '<option>Please select</option>';
                                                            html += '@foreach($relation as $rel)';
                                                            if (no_of_widow == 4){ //widow dah cukup 4 tak boleh tambah dah
                                                                if (no_of_widower == 1){ //widower dah cukup 1 tak boleh tambah dah
                                                                    if ({{$rel->refcode}} == '1'){
                                                                        html += '<option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>';
                                                                    }
                                                                }else{
                                                                    if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '3'){
                                                                        html += '<option value="{{$rel->refcode}}" >{{$rel->descen}}</option>';
                                                                    }
                                                                }
                                                            }else{
                                                                if (no_of_widower == 1){ //widower dah cukup 1 tak boleh tambah dah 
                                                                    if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '2'){
                                                                        html += '<option value="{{$rel->refcode}}">{{$rel->descen}}</option>';
                                                                    }
                                                                }else{
                                                                    if ({{$rel->refcode}} == '1' || {{$rel->refcode}} == '3' || {{$rel->refcode}} == '2'){
                                                                        html += '<option value="{{$rel->refcode}}">{{$rel->descen}}</option>';
                                                                    }
                                                                }
                                                            }
                                                            html += '@endforeach';
                                                        }else{
                                                            html += '<option>Please select</option>';
                                                            html += '@foreach($relation as $rel)';
                                                            if (next_dependent == {{$rel->refcode}}){
                                                                html += '<option value="{{$rel->refcode}}" selected>{{$rel->descen}}</option>';
                                                            }
                                                            html += '@endforeach';
                                                        }
                                        html +=         '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 otstatus_box" id="otstatus'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.status')</label>'+
                                                        '<select class="form-control ots" name="otsts[]" id="ots'+i+'">'+
                                                            '<option value="">Please select</option>'+
                                                            '@foreach($otsts as $ot)'+
                                                            '<option value="{{$ot->refcode}}">{{$ot->descen}}</option>'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-3 date_birth_box" id="date_birth'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.dateOfBirth')</label>'+
                                                        '<input type="date" id="dob'+i+'" name="dob[]" value="" class="form-control date_birth">'+
                                                    '</div>'+
                                                '</div>';
            //html += '<div class="col-md-4" id="eligibility_start"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_start')</label><input type="date" id="eligibilitystart" name="eligibilitystart[]" value="" class="form-control"></div></div>';
            //html += '<div class="col-md-4" id="eligibility_end"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility_end')</label><input type="date" id="eligibilityend" name="eligibilityend[]" value="" class="form-control"></div></div></div>';
                            html +=            '<div class="col-md-3 demised_date_box" id="demised_date'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_death')</label>'+
                                                        '<input type="date" id="dodeath'+i+'" name="dodeath[]" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 passport_expired_box" id="passport_expired'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.passport_expired')</label>'+
                                                        '<input type="date" id="passportexp" name="passportexp[]" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 disability_beforeafter_box" id="disability_beforeafter'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.disability_beforeAfter_death')</label>'+
                                                        '<select class="form-control" name="disablewhen[]" id="disablewhen'+i+'">'+
                                                            '<option value="">Please select</option>'+
                                                            '@foreach($disable as $dis)<option value="{{$dis->refcode}}">{{$dis->descen}}</option>'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                // '<div class="col-md-3 in_edah_box" id="in_edah'+i+'">'+
                                                //     '<div class="form-group">'+
                                                //         '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.edah')</label>'+
                                                //         '<select class="form-control" name="edah[]" id="edah'+i+'">'+
                                                //             '<option value="">Please select</option>'+
                                                //             '<option value="Y">@lang('option.yes')</option>'+
                                                //             '<option value="N">@lang('option.no')</option>'+
                                                //         '</select>'+
                                                //     '</div>'+
                                                // '</div>'+
                                                '<div class="col-md-3 married_date_box" id="married_date'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.married_date')</label>'+
                                                        '<input type="date" id="marrieddate'+i+'" name="marrieddate[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3 married_ob_box" id="married_ob'+i+'">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.date_marriedOb')</label>'+
                                                        '<input type="date" id="marriedobdate'+i+'" name="marriedobdate[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+    
                                            '<div class="row">'+
                                                '<div class="col-md-12">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">Address</label>'+
                                                        '<input type="text" id="add1" name="add1[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-12">'+
                                                    '<div class="form-group">'+
                                                        '<input type="text" id="add2" name="add2[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-12">'+
                                                    '<div class="form-group">'+
                                                        '<input type="text" id="add3" name="add3[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.state')</label>'+
                                                        '<select name="statecode[]" id="statecode" class="form-control">'+
                                                            '<option>Please select</option>'+
                                                            '@foreach($state as $s)<option value="{{$s->refcode}}">{{$s->descen}}'+
                                                            '</option>'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.city')</label>'+
                                                        '<input type="text" id="city" name="city[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.postcode')</label>'+
                                                        '<input type="text" id="postcode" name="postcode[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.po_box')</label>'+
                                                        '<input type="text" id="pobox" name="pobox[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.locked_bag')</label>'+
                                                        '<input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.wdt')</label>'+
                                                        '<input type="text" id="wdt" name="wdt[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.telephoneNo')</label>'+
                                                        '<input type="text" id="telno" name="telno[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.mobileNo')</label>'+
                                                        '<input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.email')</label>'+
                                                        '<input type="text" id="email" name="email[]" value="" class="form-control">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant.ot_guardian')</label>'+
                                                        '<select class="form-control guardianQ" id="guardianQ'+i+'" name="guardian[]">'+
                                                            '<option>Please select</option><option value="Y">@lang('option.yes')</option>'+
                                                            '<option value="N">@lang('option.no')</option>'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="form-actions col-md-8 pull-right">'+
                                                    '<button type="button" id="btn_add_guardian'+i+'" class="btn btn-sm waves-effect waves-light btn-info" style="display:none" href="#!" data-toggle="modal" data-id="'+i+'" data-target="#modal_guardian">ADD GUARDIAN INFO</button>'+
                                                '</div>'+
                                            
                                            '</div>';
            //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.otobdependence')</label><input type="text" id="obotdependence" name="obotdependence[]" value="" class="form-control"></div></div>';
            //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.qualification')</label><input type="text" id="qualification" name="qualification[]" value="" class="form-control"></div></div></div>';
            //html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.eligibility')</label><input type="text" id="eligibility" name="eligibility[]" value="" class="form-control"></div></div>';
            //html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.pendingpay')</label><input type="text" id="pendingpay" name="pendingpay[]" value="" class="form-control"> </div></div>';
            //html += '<div class="col-md-4"><div class="form-group "><label class="control-label">@lang('form/scheme.notice_death.PK.dependant.maritalstatus')</label><select class="form-control" name="maritalsts[]"><option>Please select</option> @foreach($maritalsts as $id) <option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach</select></div></div>';
    
                            html +=        '<div id="yes_dependantstudy'+i+'" class="dependant_study_box">'+
                                                '<h5 class="card-title">@lang('form/scheme.notice_death.PK.dependant_study.title')</h5>'+
                                                '<hr>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_start_date')</label>'+
                                                            '<input type="date" id="studystartdate'+i+'" name="studystartdate[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.study_end_date')</label>'+
                                                            '<input type="date" id="studyenddate'+i+'" name="studyenddate[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.status')</label>'+
                                                            '<select class="form-control" name="studysts[]">'+
                                                                '<option value="">Please select</option>'+
                                                                '@foreach($studysts as $id)'+
                                                                '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.edu_level')</label>'+
                                                            '<select class="form-control edu" name="edulvl[]" id="edulvl_'+i+'">'+
                                                                '<option value="">Please select</option>'+
                                                                '@foreach($edulvl as $id)'+
                                                                '<option value="{{$id->refcode}}">{{$id->descen}}</option>'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6 edu_other_box" id="eduother'+i+'">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.pls_specify')</label>'+
                                                            '<input type="text" name="eduothers[]" id="eduothers'+i+'" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.course_name')</label>'+
                                                            '<input type="text" id="coursename'+i+'" name="coursename[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.notice_death.PK.dependant_study.inst_univer_name')</label>'+
                                                            '<input type="text" id="uniname'+i+'" name="uniname[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>';
                        html +=        '<div class="form-body" id="bank_info'+i+'" style="display:none;">'+
                                            '<h6 class="card-title-sub">@lang('form/scheme.general.collapse.bank.title')</h6>'+
                                            '<hr>'+
                                            '<div class="row p-t-20">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.payment')</label>'+
                                                        '<select class="form-control" name="paymode" id="paymode_'+i+'" required>'+
                                                            '@foreach($optionpay as $opay)'+
                                                            '@if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)'+
                                                            '<option value="{{$opay->refcode}}" selected >{{$opay->descen}}</option>'+
                                                            '@elseif(empty($bankinfo) && $opay->refcode =="02")'+
                                                            '<option value="{{$opay->refcode}}" selected> {{$opay->descen}} </option>'+
                                                            '@else'+
                                                            '<option value="{{$opay->refcode}}"> {{$opay->descen}} </option>'+
                                                            '@endif'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>';
    
                                    html +=    '<div id="bank_eft_'+i+'">'+
                                                '<div class="row p-t-20">'+
    
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_location')</label>'+
                                                            '<select class="form-control select" id="bankloc_'+i+'" name="bankloc" onchange="myFunction()">'+
    
                                                            '@foreach($optionbank as $ob)'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)'+
                                                            '<option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>'+
                                                            '@else'+
                                                            '<option value="{{$ob->refcode}}">{{$ob->descen}}</option>'+
                                                            '@endif'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="row p-t-20">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.bai_status')</label>'+
                                                        '<select class="form-control select" name="baists" id="baists">'+
    
                                                            '@foreach($optionbai as $obai)'+
                                                            '@if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)'+
                                                            '<option value="{{$obai->refcode}}" selected>{{$obai->descen}}</option>'+
                                                            '@else'+
                                                            '<option value="{{$obai->refcode}}">{{$obai->descen}}</option>'+
                                                            '@endif'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.substatus_desc')</label>'+
                                                        '@if(!empty($bankinfo) && $bankinfo->substsdesc != '')'+
                                                        '<input type="text" id="substsdesc" name="substsdesc" value="{{$bankinfo->substsdesc}}" class="form-control select">'+
                                                        '@else'+
                                                        '<input type="text" id="substsdesc" name="substsdesc" value="" class="form-control select">'+
                                                        '@endif'+
                                                    '</div>'+
                                                '</div>'+
    
                                            '</div>'+
                                            '<div id="local_bank_'+i+'">'+
                                                '<h3 class="box-title m-t-60">@lang('form/scheme.general.collapse.bank.local_bank')</h3>'+
                                                '<hr>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<select class="form-control selectLocalBank" name='"bankcode"' id="bankcode">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                                '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                '@else'+
                                                                '<select class="form-control selectLocalBank" name="bankcode" id="bankcode">'+
                                                                '@endif'+
    
                                                                '@foreach($bankcode as $bc)'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->bankcode == $bc->refcode)'+
                                                                '<option value="{{$bc->refcode}}" selected>{{$bc->descen}} </option>'+
                                                                '@else'+
                                                                '<option value="{{$bc->refcode}}">{{$bc->descen}}</option>'+
                                                                '@endif'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_branch')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="localbankbr" id="localbankbr" class="form-control selectLocalBank" value="{{$bankinfo->bankbr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="localbankbr" id="localbankbr" class="form-control selectLocalBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="localbankbr" id="localbankbr" class="form-control selectLocalBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank" value="{{$bankinfo->accno}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank" value="">'+
                                                            '@endif'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-8">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L" && $bankinfo->bankaddr)'+
                                                            '<input type="text" name="localbankaddr" id="localbankaddr"  class="form-control selectLocalBank" value="{{$bankinfo->bankaddr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="localbankaddr" id="localbankaddr" class="form-control selectLocalBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="localbankaddr" id="localbankaddr" class="form-control selectLocalBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="L" && $bankinfo->acctype)'+
                                                            '<select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="{{$bankinfo->acctype}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<select class="form-control selectLocalBank" name="localacctype" id="localacctype" value="">'+
                                                            '@else'+
                                                            '<select class="form-control selectLocalBank" name="localacctype" id="localacctype">'+
                                                            '@endif'+
    
    
                                                            '@foreach($accountype as $at)'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc == "L" && $bankinfo->acctype == $at->refcode)'+
                                                            '<option value="{{$at->refcode}}" selected>{{$at->descen}} </option>'+
                                                            '@else'+
                                                            '<option value="{{$at->refcode}}">{{$at->descen}}</option>'+
                                                            '@endif'+
                                                            '@endforeach'+
                                                        '</select>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div id="oversea_bank_'+i+'" style="display:none">'+
                                            '<h3 class="box-title m-t-40" id="cardOverseas">@lang('form/scheme.general.collapse.bank.overseas_bank')</h3>'+
                                            '<hr>'+
                                            '<div class="row p-t-20">'+
                                                '<div class="col-md-4">'+
                                                    '<div class="form-group">'+
    
                                                        '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_name')</label>'+
                                                        '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->ovbankname)'+
                                                        '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank" value="{{$bankinfo->ovbankname}}">'+
                                                        '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                        '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank" value="">'+
                                                        '@else'+
                                                        '<input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank" value="">'+
                                                        '@endif'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_branch')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->bankbr)'+
                                                            '<input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank" value="{{$bankinfo->bankbr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovbankbr" id="ovbankbr" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group ">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_accNo')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O" && $bankinfo->accno)'+
                                                            '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank" value="{{$bankinfo->accno}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row p-t-20">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.swift_code')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank" value="{{$bankinfo->swiftcode}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bsb_code')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank" value="{{$bankinfo->bsbcode}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row p-t-20">'+
    
                                                    '<div class="col-md-8">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.bank_address')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank" value="{{$bankinfo->bankaddr}}">'+
                                                            '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                            '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank" value="">'+
                                                            '@else'+
                                                            '<input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank" value="">'+
                                                            '@endif'+
    
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('form/scheme.general.collapse.bank.type_acc')</label>'+
                                                            '@if (!empty($bankinfo) && $bankinfo->bankloc=="O")'+
                                                            '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                '@elseif (!empty($bankinfo) && $bankinfo->bankloc=="L")'+
                                                                '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                '@else'+
                                                                '<select class="form-control selectOverseasBank" name="ovacctype" id="ovacctype">'+
                                                                '@endif'+
    
                                                                '@foreach($overseasbanktype as $ovt)'+
                                                                '@if (!empty($bankinfo) && $bankinfo->bankloc == "O" && $bankinfo->acctype == $ovt->refcode)'+
                                                                '<option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>'+
                                                                '@else'+
                                                                '<option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>'+
                                                                '@endif'+
                                                                '@endforeach'+
                                                            '</select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
        
            // $('#add_ot_accordian').append(html);
            $(".passport_expired_box").hide();
            $(".demised_date_box").hide();
            $(".in_edah_box").hide();
            $(".married_date_box").hide();
            $(".registered_married_box").hide();
            $(".married_ob_box").hide();
            $(".disability_box").hide();
            $(".disability_beforeafter_box").hide();
            $(".still_study_box").hide();
            $(".dependant_study_box").hide();
            // $(".edulvlothersyes_box").hide();
            $(".edu_other_box").hide();
    
            guardian_question();
            bank_info (i);
                
     
            
            function getAge(dateString){
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                    age--;
                }
                // console.log(age);
                return age;
                }
    
            // $('.stillstudy').change(function () {
            //     if (this.value == 'yes') {
            //         $('.dependant_study_box').show();
            //     }
            //     else{
            //         $('.dependant_study_box').hide();
            //     }
            // });
    
            
        }); 
        
        function getAge(dateString){
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                    age--;
                }
                // console.log(age);
                return age;
                }
    
                // Delete mc
            $('#containerx').on('click','.btn_del_ot',function(){
                var delete_id = $(this).attr('id');
                $('#deletemodalot').modal('show');
                $("#deletemodalot .modal-footer button").on('click', function(e) {
                var btn_id = e.target.id;
                if(btn_id == 'btn_delete'){
                    $("#"+delete_id).closest("#ot_list").remove();
                    $('#btn_add_ot').show();
                }
            });
        });
    
        
    
    });
    
    function bank_info (no){
        //For Bank Info
        $('select[name=paymode]').change(function () {
            var id = $(this).attr('id');
            var values = id.split('_');
            var no = values[1];
            // alert("bank info" +no);
            
            if (this.value == '02') {
                // $('#bank_reason').hide();
                $('#bank_location').show();
                $('#bank_eft').show();
                
                var bankloc = $('#bankloc').val();
                if (bankloc == 'L')
                {
                    $('#local_bank').show();
                    $('#oversea_bank').hide();
                }
                else if (bankloc == 'O')
                {
                    $('#local_bank').hide();
                    $('#oversea_bank').show();
                }
            }
            else if (this.value == '01'){
                // $('#bank_reason').hide();
                $('#bank_location').hide();
                $('#bank_eft').hide();
                $('#oversea_bank').hide();
                $('#local_bank').hide();
            }
            else{
                // $('#bank_reason').hide();
                $('#bank_eft').hide();
                $('#oversea_bank').hide();
                $('#local_bank').hide();
            }
        });
        $('select[name=bankloc]').change(function () {
            var id = $(this).attr('id');
            // var values = id.split('_');
            // var no = values[1];
    
            if (this.value == 'L') {
                $('#local_bank').show();
                $('#oversea_bank').hide();
            }
            else{
                $('#local_bank').hide();
                $('#oversea_bank').show();
    
            }
        });
    
        // $("select[name=paymode]").each(function() {
        //         $(this).change();
        //     });
    
        // $("select[name=bankloc]").each(function() {
        //         $(this).change();
        // });
    }
    
    function guardian_question(){
        $('.guardianQ').on('change',function(){
           
           var guardianQ  = $(this).val();
           var id  = $(this).attr('id');
           var values = id.split('Q');
           var i = values[1];
        //    alert(i);
           if(guardianQ == 'Y'){
               $('#btn_add_guardian').show();
               $('#bank_info').hide();
           }else if(guardianQ == 'N'){
               $('#bank_info').show();
               $('#btn_add_guardian').hide();
               $('#guardian').hide();
               $('#add_guardian').hide();
           
           }else{
               $('#btn_add_guardian').hide();
               $('#bank_info').hide();
               $('#guardian').hide();
               $('#add_guardian').hide();
           }
    
       });
    }
    </script>