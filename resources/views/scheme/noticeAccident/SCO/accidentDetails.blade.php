<!-- Row -->
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{url ('/accidentDetails_sco')}}">
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
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.accident_date')</label><span class="required">*</span>
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
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.accident_time')</label><span class="required">*</span>
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
                                {{-- <div class="col-md-0">
                                    <div class="form-group"><br>
                                        <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">@lang('scheme/accidentDetails.attr.viewOriginal')</button>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header  card-title">
                                                <h4 class="modal-title" id="exampleModalLabel3">@lang('scheme/index.attr.accident_details')</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                               @include('scheme.noticeAccident.SCO.accidentDetailOriginal') 
                                            </div>
    
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                                <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                             </div>
                             <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label>Date Of Death</label>
                                        <input type="date" class="form-control" name="doddate"  value="">
                                    </div>
                                </div>
                             </div>
                            <!--/span-->
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.place_accident')</label><span class="required">*</span>
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
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.when_accident')</label><span class="required">*</span>
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
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.add_acc_place')</label><span class="required">*</span>
                                                <input type="text" class="form-control" id="addressaccident1" name="addressaccident1" value="" required>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="addressaccident2" name="addressaccident2" value="" >
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="addressaccident3" name="addressaccident3" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12 col-lg-4">
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
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label>@lang('scheme/ob.attr.city')</label>
                                                <input type="text" class="form-control" name="city"  value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label>@lang('scheme/ob.attr.postcode')</label><span class="required">*</span>
                                                <input type="text" id="postcode" name="postcode" value="" class="form-control" required>
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
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.how_accident')</label><span class="required">*</span>
                                                <textarea type="text" id="how" name="how" class="form-control clearFields" value="" required>@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label>@lang('scheme/accidentDetails.attr.mode_transport')</label><span class="required">*</span>
                                                    <select id="transport" name="transport" class="form-control">
                                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->transport}} @endif</option-->
                                                        <option>@lang('scheme/accidentDetails.choose2')</option>
                                                        {{-- @foreach($transport as $T)
                                                            @if (!empty($accinfo) && $accinfo->transport == $T->refcode)
                                                            <option value="{{$T->refcode}}" selected>{{$T->descen}}</option>
                                                            @else
                                                            <option value="{{$T->refcode}}">{{$T->descen}}</option>
                                                            @endif
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label>@lang('scheme/accidentDetails.attr.modeTransport_others')</label>
                                                    <input name="trothers" id="trothers" type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.causeOfAccd')</label><span class="required">*</span>
                                                <input name="causeOfAccd" id="causeOfAccd" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12  col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.causative_agent')</label><span class="required">*</span>
                                                <select name="causative_agent" class="form-control">
                                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                                    <option>@lang('scheme/accidentDetails.choose2')</option>
                                                    {{-- @foreach($accdcode as $c)
                                                        @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                        <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                        @else
                                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                            @endif
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12  col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.typeInjury')</label><span class="required">*</span>
                                                <select name="causative_agent" class="form-control">
                                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                                    <option>@lang('scheme/accidentDetails.choose2')</option>
                                                    {{-- @foreach($accdcode as $c)
                                                        @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                        <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                        @else
                                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                            @endif
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12  col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.locationOfInjury')</label><span class="required">*</span>
                                                <select name="causative_agent" class="form-control">
                                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                                    <option>@lang('scheme/accidentDetails.choose2')</option>
                                                    {{-- @foreach($accdcode as $c)
                                                        @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                        <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                        @else
                                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                            @endif
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12  col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/accidentDetails.attr.accident_code')</label><span class="required">*</span>
                                                <select name="accident_code" class="form-control">
                                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accdcode}} @endif</option-->
                                                    <option>@lang('scheme/accidentDetails.choose2')</option>
                                                    {{-- @foreach($accdcode as $c)
                                                        @if (!empty($accinfo) && $accinfo->accdcode == $c->refcode)
                                                        <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                        @else
                                                            <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                            @endif
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.employment_code')</label><span class="required">*</span>
                                                <select name="profcode" class="form-control">
                                                <!--option value="">@if(!empty($accinfo)){{$accinfo->employmentcode}} @endif</option-->
                                                <option>@lang('accidentDetails.choose2')</option>
                                                {{-- @foreach($profcode as $c)
                                                        @if (!empty($accinfo) && $accinfo->employmentcode == $c->refcode)
                                                        <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                        @else
                                                        <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('accidentDetails.attr.industrial_code')</label><span class="required">*</span>
                                                <select name="industcode" class="form-control">
                                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->industrialcode}} @endif</option-->
                                                    <option>@lang('accidentDetails.choose2')</option>
                                                    {{-- @foreach($industcode as $c)
                                                        @if (!empty($accinfo) && $accinfo->industrialcode == $c->refcode)
                                                        <option value="{{$c->refcode}}" selected>{{$c->descen}}</option>
                                                        @else
                                                        <option value="{{$c->refcode}}">{{$c->descen}}</option>
                                                        @endif
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                               <div class="row">
                                    <!--/span-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/accidentDetails.attr.reason_travelling')</label><span class="required">*</span>
                                            <textarea type="text" id="reason" name="reason" class="form-control clearFields" placeholder="">@if(!empty($accinfo)){{$accinfo->reasontravel}} @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/accidentDetails.attr.injury_desc')</label><span class="required">*</span>
                                            <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control clearFields" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                                        </div>
                                    </div>
                                </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label>@lang('scheme/accidentDetails.attr.accident_workingDay')</label><span class="required">*</span>
                                        <select class="form-control clearFields" name="accdworkingday">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                            <option>Please select</option>
                                            @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                            <option value='Y' selected>@lang('scheme/accidentDetails.yes')</option>
                                            <option value='N'>@lang('scheme/accidentDetails.no')</option>
                                            @elseif (!empty($accinfo) && $accinfo->accwork == 'N')
                                            <option value='Y' >@lang('scheme/accidentDetails.yes')</option>
                                            <option value='N' selected>@lang('scheme/accidentDetails.no')</option>
                                            @else
                                            <option value='Y'>@lang('scheme/accidentDetails.yes')</option>
                                            <option value='N'>@lang('scheme/accidentDetails.no')</option>
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
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.start_workingTime')</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                            <input  id="timeworking" type="time" class="form-control clearFields" name="startworkingtime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.rest_period')</label>
                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                <input id="timeworking1" type="time" class="form-control clearFields" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.end_workingTime')</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                          <input id="timeworking2" type="time" class="form-control clearFields" name="endworkingtime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif">
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.witness_name')</label>
                                        <input type="text" id="witnessname" name="witnessname" class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/accidentDetails.attr.witness_no')</label>
                                        <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control clearFields" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                        class="control-label">@lang('scheme/accidentDetails.attr.nameAddress_clinic')</label><span class="required">*</span>
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
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
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
    