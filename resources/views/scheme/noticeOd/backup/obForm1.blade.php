<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="/obform_od" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('scheme/insuredPerson.title')</h5>
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
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.name')</label>
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
                                                        <th>@lang('scheme/insuredPerson.attr.id_type')</th>
                                                        <th>@lang('scheme/insuredPerson.attr.id_no')</th>
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
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.dateOfBirth')</label>
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
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.race')</label>
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
                                            <option value="Malay">@lang('scheme/insuredPerson.attr.malay')</option>
                                            <option value="Chinese">@lang('scheme/insuredPerson.attr.chinese')</option>
                                            <option value="Indian">@lang('scheme/insuredPerson.attr.indian')</option>
                                            <option value="Sabah">Bumiputera Sabah</option>
                                            <option value="Sarawak">Bumiputera Sarawak</option>
                                            <option value="Others">@lang('scheme/insuredPerson.attr.others')</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.gender')</label>
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
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.occupation')</label>
                                   {{--  @if(!empty($obprofile) && $obprofile->occupation != '')
                                    <input type="text" id="occupation" name="occupation" value="{{ $obprofile->occupation }}" class="form-control">
                                    @else --}}
                                    <input type="text" id="occupation" name="occupation" value="" class="form-control">
                                    {{-- @endif --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.sub_occupation')</label>
                                   {{--  @if(!empty($obprofile) && $obprofile->occupation != '')
                                    <input type="text" id="occupation" name="occupation" value="{{ $obprofile->occupation }}" class="form-control">
                                    @else --}}
                                    <input type="text" id="suboccupation" name="suboccupation" value="" class="form-control">
                                    {{-- @endif --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/insuredPerson.attr.sub_list')</label>
                                   {{--  @if(!empty($obprofile) && $obprofile->occupation != '')
                                    <input type="text" id="occupation" name="occupation" value="{{ $obprofile->occupation }}" class="form-control">
                                    @else --}}
                                    <input type="text" id="occupationlist" name="occupationlist" value="" class="form-control">
                                    {{-- @endif --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('scheme/insuredPerson.attr.postal_address')</label>
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
                                <label>@lang('scheme/insuredPerson.attr.postcode')</label>
                                {{-- @if(!empty($obprofile) && $obprofile->postcode != '')
                                <input type="text" id="postcode" name="postcode" value="{{ $obprofile->postcode }}" class="form-control">
                                @else --}}
                                <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.pobox')</label>
                               {{--  @if(!empty($obprofile) && $obprofile->pobox != '')
                                <input type="text" id="pobox" name="pobox" value="{{ $obprofile->pobox }}" class="form-control">
                                @else --}}
                                <input type="text" id="pobox" name="pobox" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.lockedbag')</label>
                               {{--  @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                <input type="text" id="lockedbag" name="lockedbag" value="{{ $obprofile->lockedbag }}" class="form-control">
                                @else --}}
                                <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.wdt')</label>
                               {{--  @if(!empty($obprofile) && $obprofile->wdt != '')
                                <input type="text" id="wdt" name="wdt" value="{{ $obprofile->wdt }}" class="form-control">
                                @else --}}
                                <input type="text" id="wdt" name="wdt" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.city')</label>
                              {{--   @if(!empty($obprofile) && $obprofile->city != '')
                                <input type="text" id="city" name="city" value="{{ $obprofile->city }}" class="form-control">
                                @else --}}
                                <input type="text" id="city" name="city" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/insuredPerson.attr.state')</label>
                                <select class="select form-control" style="width: 100%; height:36px;">
                                            {{-- <option>@lang('insuredPerson.attr.choose_state')</option> --}}
                                            <option value="Johor">Johor</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="NegeriSembilan">Negeri Sembilan</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Penang">Penang</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Terengganu">Terengganu</option>
                                            <option value="KualaLumpur">W.P Kuala Lumpur</option>
                                            <option value="Labuan">W.P Labuan</option>
                                            <option value="Putrajaya">W.P Putrajaya</option>
                                        </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.telNo')</label>
                               {{--  @if(!empty($obprofile) && $obprofile->telno != '')
                                <input type="text" id="telno" name="telno" value="{{ $obprofile->telno }}" class="form-control">
                                @else --}}
                                <input type="text" id="telno" name="telno" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.mobileNo')</label>
                               {{--  @if(!empty($obprofile) && $obprofile->mobileno != '')
                                <input type="text" id="mobileno" name="mobileno" value="{{ $obprofile->mobileno }}" class="form-control">
                                @else --}}
                                <input type="text" id="mobileno" name="mobileno" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/insuredPerson.attr.email')</label>
                               {{--  @if(!empty($obprofile) && $obprofile->email != '')
                                <input type="email" id="email" name="email" value="{{ $obprofile->email }}" class="form-control">
                                @else --}}
                                <input type="email" id="email" name="email" value="" class="form-control">
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/insuredPerson.attr.citizen')</label>
                                    <select name="race" class="form-control">
                                            {{-- <option>@lang('insuredPerson.attr.choose_race')</option> --}}
                                            <option value="Malay">Citizen</option>
                                            <option value="Chinese">Non-Citizen</option>
                                            <option value="Indian">Permanent Resident</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/insuredPerson.attr.under_act')</label>
                                        <select class="form-control" name='under_act' id='under_act'>
                                            <option value="Y">@lang('scheme/insuredPerson.attr.yes')</option>
                                            <option value="N">@lang('scheme/insuredPerson.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/insuredPerson.attr.under_act_date')</label>
                                        <input type="date" id="under_act_date" name="under_act_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        <div class="form-actions">
                                {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                                <button type="submit" class="btn waves-effect waves-light btn-success">
                                        @lang('scheme/insuredPerson.save')</button>
                                {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            



