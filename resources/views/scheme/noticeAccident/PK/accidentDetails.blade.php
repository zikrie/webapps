<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{url ('/scheme/noticeaccident')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        
                        @if(Session::get('messageacc')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageacc')}}
                            </div>

                        </div>
                        @elseif (!empty($messageacc))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageacc}}
                            </div>

                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label"> @lang('form/scheme.notice_accident.PK.accident_info.accident_date')</label><span class="required">*</span>
                                    @if (!empty($accinfo))
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr($accinfo->accddate,0,4)}}-{{substr($accinfo->accddate,4,2)}}-{{substr($accinfo->accddate,6,2)}}" required readonly>
                                    @else
                                    @if (Session::get('accddate'))
                                    
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" required readonly>
                                    @else
                                    <input type="date" class="form-control" id="accddate" name="accddate" value="" required>
                                    @endif
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.accident_time')</label><span class="required">*</span>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        @if (!empty($accinfo))
                                        <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}" required readonly>
                                        @else
                                        @if (Session::get('accdtime'))
                                        <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}" required readonly>
                                        @else
                                        <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="" required>
                                        @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.place_accident')</label><span class="required">*</span>
                                    <select class="form-control" name="placeaccd" id="placeaccd" onchange="placeacc()" required>
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->place}} @endif</option-->
                                        <option>Please select</option>
                                        @foreach($accdplace as $AccPlace)
                                        @if (!empty($accinfo) && $accinfo->place == $AccPlace->refcode)
                                        <option value="{{$AccPlace->refcode}}" selected>{{$AccPlace->descen}}</option>
                                        @else
                                        <option value="{{$AccPlace->refcode}}">{{$AccPlace->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.when_accident')</label><span class="required">*</span>
                                    <select class="form-control" name="accwhen" id="accwhen" style="width: 100%; height:36px;" required>
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwhen}} @endif</option-->
                                        <option>Please select</option>
                                        @if (!empty($accdwhen))
                                        
                                        @foreach($accdwhen as $AccWhen)
                                            @if (!empty($accinfo) && $accinfo->accwhen == $AccWhen->refcode)
                                            <option value="{{$AccWhen->refcode}}" selected>{{$AccWhen->descen}}</option>
                                            @else
                                            <option value="{{$AccWhen->refcode}}">{{$AccWhen->descen}}</option>
                                            @endif
                                        @endforeach
                                        @endif
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4" >
                                <div class="form-group" id="others">
                                    <label class="control-label">Others</label>
                                    <input type="text" class="form-control clearFields" name="whendesc" value="@if(!empty($accinfo)){{$accinfo->whendesc}} @endif">
                                </div>
                            </div>
                        </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.date_death')</label>
                                    <input type="date" name="dodeath" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div> --}}
                            <!--/span-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.how_accident')</label><span class="required">*</span>
                                <textarea type="text" id="how" name="how" class="form-control clearFields" required>@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                                </div>
                            </div>
                        </div>
                            {{-- <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label>@lang('accidentDetails.attr.mode_transport')</label>
                                        <select id="transport" name="transport" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->transport}} @endif</option-->
                                            <option>Please select</option>
                                            @foreach($transport as $T)
                                                @if (!empty($accinfo) && $accinfo->transport == $T->refcode)
                                                <option value="{{$T->refcode}}" selected>{{$T->descen}}</option>
                                                @else
                                                <option value="{{$T->refcode}}">{{$T->descen}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input name="trothers" id="trothers" type="text" class="form-control"
                                         value="@if(!empty($accinfo)){{$accinfo->transportothers}} @endif">
                                    </div>
                                </div>
                            
                            </div> --}}
                            {{-- <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.causative_agent1')</label>
                                        <select name="causative" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->causative}} @endif</option-->
                                            <option>Please select</option>
                                            @foreach($causative as $c)
                                            @if (!empty($accinfo) && $accinfo->causative == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12  col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('accidentDetails.attr.accident_code')</label>
                                        <select name="accdcode" class="form-control">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                           <option>Please select</option>
                                            @foreach($accdcode as $c)
                                                @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                @else
                                                 <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                 @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            
                            {{-- <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.industrial_code')</label>
                                    <select name="industcode" class="form-control">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->industrialcode}} @endif</option-->
                                        <option>Please select</option>
                                        @foreach($industcode as $c)
                                            @if (!empty($accinfo) && $accinfo->industrialcode == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                             <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                             @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('accidentDetails.attr.employment_code')</label>
                                    <select name="profcode" class="form-control">
                                       <!--option value="">@if(!empty($accinfo)){{$accinfo->employmentcode}} @endif</option-->
                                       <option>Please select</option>
                                       @foreach($profcode as $c)
                                            @if (!empty($accinfo) && $accinfo->employmentcode == $c->refcode)
                                            <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                            @else
                                             <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                             @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                           <div class="row">
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.reason_travelling')</label>
                                        @if(!empty($accinfo)&&$accinfo->reasontravel)
                                        <textarea type="text" id="reason" name="reason" class="form-control clearFields" placeholder="">{{$accinfo->reasontravel}}</textarea>
                                        @elseif (!empty($accinfo)&&$accinfo->reasontravel)
                                        <textarea type="text" id="reason" name="reason" class="form-control clearFields" placeholder="" disabled></textarea>
                                        @else
                                        <textarea type="text" id="reason" name="reason" class="form-control clearFields" placeholder="" ></textarea>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Injury Description</label>
                                        <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control clearFields" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                                    </div>
                                </div>
                            </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label>@lang('form/scheme.notice_accident.PK.accident_info.accident_workingDay')</label>
                                    <select class="form-control clearFields" name="accdworkingday">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                        <option>Please select</option>
                                        @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                        <option value='Y' selected>@lang('option.yes')</option>
                                        <option value='N'>@lang('option.no')</option>
                                        @elseif (!empty($accinfo) && $accinfo->accwork == 'N')
                                        <option value='Y' >@lang('option.yes')</option>
                                        <option value='N' selected>@lang('option.no')</option>
                                        @else
                                        <option value='Y'>@lang('option.yes')</option>
                                        <option value='N'>@lang('option.no')</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('accidentDetails.attr.are_wagesPaid')</label>
                                    <select class="form-control" name="wagespaid"> --}}
                                            {{-- <!--option value="">@if(!empty($accinfo)){{$accinfo->wagespaid}} @endif</option--> --}}
                                            
                                            {{-- <option>Please select</option>
                                            @if (!empty($accinfo) && $accinfo->wagespaid == 'Y')
                                            <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @elseif (!empty($accinfo) && $accinfo->wagespaid == 'N')
                                            <option value='Y' >@lang('accidentDetails.yes')</option>
                                            <option value='N' selected>@lang('accidentDetails.no')</option>
                                            @else
                                            <option value='Y'>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @endif
                                        </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">    
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.start_workingTime')</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                    data-autoclose="true">
                                        @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                        <input  id="timeworking" type="time" class="form-control clearFields" name="startworkingtime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif">
                                        @else
                                        <input  id="timeworking" type="time" class="form-control clearFields" name="startworkingtime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif" disabled>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.rest_period')</label>
                                        @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                        <input  id="timeworking1" type="time" class="form-control clearFields" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif">
                                        @else
                                        <input  id="timeworking1" type="time" class="form-control clearFields" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif" disabled>
                                        @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.end_workingTime')</label>
                                    @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                        <input  id="timeworking2" type="time" class="form-control clearFields" name="endworkingtime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif">
                                        @else
                                        <input  id="timeworking2" type="time" class="form-control clearFields" name="endworkingtime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif" disabled>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.witness_name')</label>
                                    <input type="text" id="witnessname" name="witnessname" class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.witness_no')</label>
                                    <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label
                                    class="control-label">@lang('form/scheme.notice_accident.PK.accident_info.nameAddress_clinic')</label><span class="required">*</span>
                                    <textarea type="text" id="clinicinfo" name="clinicinfo" class="form-control clearFields" required>@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" name="action" value="Submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.loc'button'">@lang('button.cancel')</button>
                                <button type="submit" name="action" value="Back" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->

<script>
    function submitform()
    {
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>
