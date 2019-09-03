<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/obform_od" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            <h5 class="card-title">@lang('insuredPerson.title')</h5>
                            <hr>
                            @if(Session::get('messageob')) 
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{Session::get('messageob')}}
                                </div>
    
                            </div>
                            @elseif (!empty($messageob))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messageob}}
                                </div>
                            </div>
                            @endif
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.name')</label><span class="required">*</span>
                                        {{-- @if(!empty($obprofile) && $obprofile->name != '')
                                        <input type="text" id="name" name="name" value="{{ $obprofile->name }}" class="form-control" required>
                                        @elseif(!empty($obformassist) && $obformassist->name != '')
                                        <input type="text" id="name" name="name" value="{{ $obformassist->name }}" class="form-control" required>
                                        @else --}}
                                        <input type="text" id="name" name="name" value="" class="form-control" required>
                                        {{-- @endif --}}
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="card">
                                    <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>@lang('insuredPerson.attr.id_type')</th>
                                                            <th>@lang('insuredPerson.attr.id_no')</th>
                                                        </tr>
                                                    </thead>
    
                                                    <tbody class='align-middle'>
                                                        <tr>
                                                            <td>
                                                                <div class="form-group"></div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                {{--  <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.no_ic')</label>
                                       <select class="form-control" name="noic">
                                            <option value="Y">Yes</option>
                                            <option value="N">No</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.dateOfBirth')</label><span class="required">*</span>
                                       {{--  @if(!empty($obprofile) && $obprofile->dob !='')
                                        <input type="date" id="dob" name="dob" value="{{substr($obprofile->dob,0,4)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,6,2)}}" class="form-control">
                                        @elseif(!empty($obformassist) && $obformassist->dob !='')
                                        <input type="date" id="dob" name="dob" value="{{substr($obformassist->dob,0,4)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,6,2)}}" class="form-control">
                                        @else --}}
                                        <input type="date" id="dob" name="dob" value="" class="form-control">
                                        {{-- @endif --}}
    
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.race')</label>
                                        {{--  <input type="text" id="race" value="{{ $obprofile->race }}" class="form-control">
                                        <select class="form-control" name="race"> 
                                            <option value="">@if(!empty($obprofile)){{ $obprofile->race }} @endif</option>
                                           {{@foreach($race as $id)
                                            @if (!empty($obprofile) && $obprofile->race == $id->refcode)
                                            <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                            @else
                                            <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>--}}
                                        <select name="race" class="form-control">
                                                {{-- <option>@lang('insuredPerson.attr.choose_race')</option> --}}
                                                <option value="Malay">@lang('insuredPerson.attr.malay')</option>
                                                <option value="Chinese">@lang('insuredPerson.attr.chinese')</option>
                                                <option value="Indian">@lang('insuredPerson.attr.indian')</option>
                                                <option value="Sabah">Bumiputera Sabah</option>
                                                <option value="Sarawak">Bumiputera Sarawak</option>
                                                <option value="Others">@lang('insuredPerson.attr.others')</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.gender')</label>
                                        {{--  <input type="text" id="gender" value="{{ $obprofile->gender }}" class="form-control"> --}}
                                        <select class="form-control" name="gender">
                                            <!--option value="">@if(!empty($obprofile)){{ $obprofile->gender }} @endif</option-->
                                          {{--   @if (!empty($obprofile) && $obprofile->gender == 'F')
                                            <option value="F" selected>Female</option>
                                            <option value="M">Male</option>
                                            @elseif (!empty($obprofile) && $obprofile->gender == 'M')
                                            <option value="F">Female</option>
                                            <option value="M" selected>Male</option>
                                            @else --}}
                                            <option value="F">Female</option>
                                            <option value="M">Male</option>
                                            {{-- @endif --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.occupation_form34')</label>
                                        @if(!empty($obprofile) && $obprofile->occupation != '')
                                        <input type="text" id="occupation34" name="occupation" value="{{ $obprofile->occupation }}" class="form-control clearFields">
                                        @else
                                        <input type="text" id="occupation34" name="occupation" value="" class="form-control clearFields">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.occupation')</label>
                                        <select class="form-control clearFields" name="occucode" id="occucode" onchange="occupationcode()">
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            {{-- @foreach($occucode as $occup)
                                            @if (!empty($obprofile) && $obprofile->occucode == $occup->refcode)
                                            <option value="{{$occup->refcode}}" selected>{{$occup->descen}}</option>
                                            @else
                                            <option value="{{$occup->refcode}}">{{$occup->descen}}</option>
                                            @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.sub_occupation')</label>
                                        <select class="form-control clearFields" name="suboccucode" id="suboccucode" style="width: 100%; height:36px;">
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            {{-- @if (!empty($suboccucode))
                                            @foreach($suboccucode as $suboccu)
                                            @if (!empty($obprofile) && $obprofile->suboccucode == $suboccu->refcode)
                                            <option value="{{$suboccu->refcode}}" selected>{{$suboccu->descen}}</option>
                                            @else
                                            <option value="{{$suboccu->refcode}}">{{$suboccu->descen}}</option>
                                            @endif
                                            @endforeach
                                            @endif --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.sub_list')</label>
                                        <select class="form-control clearFields" name="suboccucodelist" id="suboccucodelist" style="width: 100%; height:36px;">
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            {{-- @if (!empty($suboccucodelist))
                                            @foreach($suboccucodelist as $subocculist)
                                            @if (!empty($obprofile) && $obprofile->suboccucodelist == $subocculist->refcode)
                                            <option value="{{$subocculist->refcode}}" selected>{{$subocculist->descen}}</option>
                                            @else
                                            <option value="{{$subocculist->refcode}}">{{$subocculist->descen}}</option>
                                            @endif
                                            @endforeach
                                            @endif --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.postal_address')</label><span class="required">*</span>
                                       {{--  @if(!empty($obprofile) && $obprofile->add1 != '')
                                        <input type="text" id="add1" name="add1" value="{{ $obprofile->add1 }}" class="form-control">
                                        @else --}}
                                        <input type="text" id="add1" name="add1" value="" class="form-control">
                                        {{-- @endif --}}
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     {{--  <label>@lang('insuredPerson.attr.postal_address2')</label> --}}
                                    {{--  @if(!empty($obprofile) && $obprofile->add2 != '')
                                     <input type="text" id="add2" name="add2" value="{{ $obprofile->add2 }}" class="form-control">
                                     @else --}}
                                     <input type="text" id="add2" name="add2" value="" class="form-control">
                                     {{-- @endif --}}
                                 </div>
                             </div>
                         </div>
                         <div class='row'>
                             <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label>@lang('insuredPerson.attr.postal_address3')</label> --}}
                                   {{--  @if(!empty($obprofile) && $obprofile->add3 != '')
                                    <input type="text" id="add3" name="add3" value="{{ $obprofile->add3 }}" class="form-control">
                                    @else --}}
                                    <input type="text" id="add3" name="add3" value="" class="form-control">
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.state')</label><span class="required">*</span>
                                        <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                        <select name='state' id='state' class='form-control clearFields'>
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            {{-- @foreach($state as $s)
                                            @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                            <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                            @else
                                            <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                            @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.city')</label><span class="required">*</span>
                                        <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.postcode')</label><span class="required">*</span>
                                        <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.pobox')</label>
                                        <input type="text" class="form-control clearFields" name="pobox" value="@if(!empty($obprofile)){{ $obprofile->pobox }} @endif">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.lockedbag')</label>
                                        <input type="text" name="lockedbag" id="lockedbag" value="@if(!empty($obprofile)){{ $obprofile->lockedbag }} @endif" class="form-control clearFields">
                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.wdt')</label>
                                        <input type="text" id="wdt" name="wdt" value="@if(!empty($obprofile)){{ $obprofile->wdt }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.telNo')</label>
                                        <input type="text" id="telno" name="telno" value="@if(!empty($obprofile)){{ $obprofile->telno }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.mobileNo')</label>
                                        <input type="text" id="mobileno" name="mobileno" value="@if(!empty($obprofile)){{ $obprofile->mobileno }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('insuredPerson.attr.email')</label>
                                        <input type="email" id="email" name="email"  value="@if(!empty($obprofile)){{ $obprofile->email }} @endif" class="form-control clearFields">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.citizen')</label><span class="required">*</span>
                                        {{-- <input type="text" id="citizen" value="@if(!empty($obprofile)){{ $obprofile->nationality }} @endif" class="form-control"> --}}
                                        {{-- @if(!empty($obprofile) && $obprofile->name !='')
                                        <input type="text" id="nationality" name="nationality" value="{{ $obprofile->nationality }}" class="form-control">
                                        @else
                                        <input type="text" id="nationality" name="nationality" value="{{ $obformassist->nationality }}" class="form-control">
                                        @endif --}}
                                        
                                        <select class="form-control clearFields" tabindex="1" name='nationality' id='nationality'>
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            {{-- @foreach($national as $N)
                                            @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                            <option value="{{$N->refcode}}" selected>{{$N->descen}}</option>
                                            @else
                                            <option value="{{$N->refcode}}">{{$N->descen}}</option>
                                            @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.invalidity_ref_no')</label><span class="required">*</span>
                                        <input type="text" id="under_act_date" name="under_act_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.ilat_receiver')</label><span class="required">*</span>
                                        <select class="form-control" name='under_act' id='under_act'>
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            <option value="Y">@lang('insuredPerson.attr.yes')</option>
                                            <option value="N">@lang('insuredPerson.attr.no')</option>
                                        </select>                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.ilat_rate')</label><span class="required">*</span>
                                        <input type="text" id="under_act_date" name="under_act_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.location_office')</label><span class="required">*</span>
                                        <input type="text" id="under_act_date" name="under_act_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.declaration_117')</label><span class="required">*</span>
                                        <select class="form-control" name='under_act' id='under_act'>
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            <option value="Y">@lang('insuredPerson.attr.yes')</option>
                                            <option value="N">@lang('insuredPerson.attr.no')</option>
                                        </select>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.under_act')</label>
                                        <select class="form-control" name='under_act' id='under_act'>
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            <option value="Y">@lang('insuredPerson.attr.yes')</option>
                                            <option value="N">@lang('insuredPerson.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.under_act_date')</label>
                                        <input type="date" id="under_act_date" name="under_act_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.ssab_decision')</label>
                                        <select class="form-control" name='under_act' id='under_act'>
                                            <option selected hidden readonly value="please select">@lang('noticetype.attr.please_select')</option>
                                            <option value="approved">@lang('insuredPerson.attr.appeal_approved')</option>
                                            <option value="reject">@lang('insuredPerson.attr.appeal_reject')</option>
                                        </select>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                    {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                                    <button type="submit" class="btn waves-effect waves-light btn-success">
                                            @lang('insuredPerson.save')</button>
                                    {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>