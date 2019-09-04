@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="my-3 my-md-5">
    <div class="row" >
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="/Back" method="post"> 
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body" >
                          <h5 class="card-title">Insured Person Details</h5>
                          <hr class="m-t-0 m-b-40">
                          <table id="div_preview" border="0" cellpadding="10px">
                            <tr>
                                <td class="control-label">Name</td>
                                <td>:</td>
                                <td>@if(!empty($obprofile) && $obprofile->name !='')
                                        <label class="control-label text-right" > {{ $obprofile->name }} </label>
                                        @elseif(!empty($obformassist) && $obformassist->name !='')
                                        <label type="text" id="name" name="name" value="{{ $obformassist->name }}" class="control-label text-right" required>
                                        @else
                                        <label type="text" id="name" name="name" value="" class="control-label text-right" required>
                                        @endif
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">Identification Type</td>
                                <td>:</td>
                                <td class="control-label text-left" >@foreach($idtype as $id)
                                        @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                        {{$id->descen}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                    <td class="control-label">Identification Number</td>
                                    <td>:</td>
                                    <td class="control-label text-left">{{ $obprofile->idno }}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Date of Birth</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                            @if(!empty($obprofile) && $obprofile->dob !='')
                                        {{substr($obprofile->dob,6,2)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,0,4)}}
                                        @else
                                        {{substr($obprofile->dob,6,2)}}{{substr($obprofile->dob,4,2)}}{{substr($obprofile->dob,0,4)}}
                                        @endif
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label">Race</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >@foreach($race as $id)
                                            @if (!empty($obprofile) && $obprofile->race == $id->refcode)
                                            {{$id->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Gender</td>
                                    <td>:</td>
                                <td class="control-label text-left" > 
                                    {{-- {{$obprofile->gender}} --}}
									@if (!empty($obprofile) && $obprofile->gender == "F")
                                        Female
                                        @elseif(!empty($obprofile) && $obprofile->gender == "M")
                                        Male
                                        @else
                                         @endif
                                       {{-- @if (!empty($obprofile) && $obprofile->gender == "F")
                                            <label class="control-label text-right ">Female</label>
                                       @else
                                            <label class="control-label text-right ">Male</label>
                                       @endif  --}}
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label">Occupation</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        {{ $obprofile->occupation }} 
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Address</td>
                                    <td>:</td>
                                    <td class="control-label" >
                                            <label class="control-label text-right ">{{ $obprofile->add1 }}  </label>
                                            {{-- <br><label class="control-label text-right ">{{ $obprofile->add2 }} </label>
                                            <br><label class="control-label text-right ">{{ $obprofile->add3 }}  </label> --}}
                                                
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label">City </td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        {{ $obprofile->city }}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><label class="control-label text-right ">{{ $obprofile->add2 }} </label></td>
                                    <td></td>
                                   
                            </tr>
                            <tr>
                                    <td class="control-label">Postcode</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                            {{ $obprofile->postcode }}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><label class="control-label text-right ">{{ $obprofile->add3 }}  </label></td>
                                    
                            </tr>
                            <tr>    
                                    <td class="control-label">State</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                        @foreach($state as $s)
                                                    @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                                    {{$s->descen}}
                                                    @else
                                                    @endif
                                                @endforeach
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Mobile No.</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                            {{ $obprofile->mobileno }}
                                    </td>
                                    
                                    
                            </tr>
                            <tr>    
                                    <td class="control-label">Telephone No.</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >{{ $obprofile->telno }}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">Email</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >{{ $obprofile->email }} 
                                    </td>
                                    
                            </tr>
                          
                            <tr>
                                    <td class="control-label">Citizen</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                            <label class="control-label text-right ">
                                                    @foreach($national as $N)
                                                    @if (!empty($obprofile) && $obprofile->nationality == $N->refcode)
                                                    {{$N->descen}}
                                                    @endif
                                                    @endforeach
                                                </label>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                            </tr>
                        </table>
                        <h5 class="card-title">@lang('employerDetails.title')</h5>
                        <hr class="m-t-0 m-b-40">
                        <table id="div_preview" border="0" cellpadding="10px">
									<tr>
                                        <td class="control-label">Employer Code No</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">{{$employer->empcode}}</label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">Employer Type</td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @foreach ($emptype as $et)
                                                @if (!empty($emprecord) && $emprecord->emptype == $et->refcode )
                                                     {{$et->descen}}
                                                @endif
                                                @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label">Employer Name </td>
                                            <td>:</td>
                                            <td class="control-label text-left">{{$employer->empname}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">Address</td>
                                            <td>:</td>
                                            <td class="control-label" >
                                                    <label class="control-label text-right ">{{ $employer->add1 }}  </label>
                                                    {{-- <br><label class="control-label text-right ">{{ $employer->add2 }} </label>
                                                    <br><label class="control-label text-right ">{{ $employer->add3 }}  </label> --}}
                                                {{-- {{ $employer->add1 }} , {{ $employer->add2 }} , {{ $employer->add3 }}--}}
                                            </td> 
                                    </tr>
                                    <tr>
                                            <td class="control-label">Postcode</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                {{$employer->postcode}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $employer->add2 }}</td>
                                            
                                    </tr>
                                    <tr>
                                            <td class="control-label">State</td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    @foreach($state as $id)
                                                    @if (!empty($emprecord) && $emprecord->statecode == $id->refcode)
                                                    {{$id->descen}}
                                                    @endif
                                                    @endforeach
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $employer->add3 }}</td>
                                            
                                            
                                                
                                            </td>
                                    </tr>
                                    <tr>
                                            
                                            <td class="control-label">City</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                {{$employer->city}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">Locked By </td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label">Telephone No.</td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                {{$employer->phoneno}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">P.O BOX</td>
                                            <td>:</td>
                                            <td class="control-label text-right" >
                                           
                                    </tr>
                                    <tr>
                                            <td class="control-label">E-mail.</td>
                                            <td>:</td>
                                            <td class="control-label text-left">{{$employer->email}}
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">W.D.T</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                    </tr>
                                    <tr>            
                                            <td class="control-label">Fax No.</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    <label class="control-label text-right ">{{$employer->faxno}}</label>
                                            </td>
                                            
                                    </tr>  
                        </table>
						<h5 class="card-title">Wages Details</h5>
                        <hr class="m-t-0 m-b-40">
						<table border="0" cellpadding="10px">
                                <tr>
                                        <td class="control-label">Company Name</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
										@foreach ($contribution as $contr)
                                                    {{$contr->empname}}
                                                    @endforeach
													</label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td class="control-label">Employment Start Date</td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
											<label class="control-label text-right">
                                                    @if(!empty($contr) && $contr->startdate !='')
                                                {{substr($contr->startdate,6,2)}}-{{substr($contr->startdate,4,2)}}-{{substr($contr->startdate,0,4)}}
                                                @else
                                                {{substr($contr->startdate,6,2)}}{{substr($contr->startdate,4,2)}}{{substr($contr->startdate,0,4)}}
                                                @endif
										</td>
										<td></td>
                                        <td></td>
                                        <td></td>
										<td class="control-label">Employment End Date</td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
                                                @if(!empty($contr) && $contr->enddate !='')
											<label class="control-label text-right">{{substr($contr->enddate,6,2)}}-{{substr($contr->enddate,4,2)}}-{{substr($contr->enddate,0,4)}}</label>
                                             @else       
                                             {{substr($contr->enddate,6,2)}}{{substr($contr->enddate,4,2)}}{{substr($contr->enddate,0,4)}}
                                             @endif
										</td>
                                    </tr>
						</table> <br><br>
                                <div class="row">   
                                    <div class="col-md-12">
                                            <?php $contrcnt = 0; ?>
                                            <?php $wagescnt = 0; ?>
                                            @foreach ($contribution as $contr)
                                            <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                    <thead>
                                                        <tr>
                                                            <th data-breakpoints="xs">@lang('wages.attr.num')</th>
                                                            <th>@lang('wages.attr.month')</th>
                                                            <th>@lang('wages.attr.year')</th>
                                                            <th data-breakpoints="xs sm">@lang('wages.attr.wages')</th>
                                                            <th data-breakpoints="xs">@lang('wages.attr.contribution')</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $accdmonth = session('accdmonth'); 
                                                          $accdyear = session('accdyear'); 
                                                          $cnt = 0; ?>
                                                    @while ($cnt < 6)   
                                                    <?php 
                                                    $accdmonth = $accdmonth - 1;
                                                    if ($accdmonth <= 0)
                                                    {
                                                        $accdmonth = 12 + $accdmonth;
                                                        $accdyear  = $accdyear - 1;
                                                    }
                                                    ?>
                                                        <tr data-expanded="true">
                                                            <td>{{$cnt+1}}</td>
                                                            <td>
        
                                                                <label id="month[{{$contrcnt}}][{{$cnt}}]" name="month[{{$contrcnt}}][{{$cnt}}]" class="control-label text-right" >
                                                                    @foreach ($month as $m)
                                                                    @if ($m->refcode == $accdmonth)
                                                                    {{$m->descen}}
                                                                    @endif
                                                                    @endforeach
                                                                </label>
        
                                                                
                                                            </td>
                                                            <td><label class="control-label text-right" readonly>{{$accdyear}}</label></td>
                                                            
                                                            
                                                           <?php $wagefound = false; ?>
                                                        @if (!empty($wagesinfo))
                                                        @foreach ($wagesinfo as $w)
                                                            @if ($w->empcode == $contr->empcode)
                                                            @foreach ($w->wagesinfo as $gaji)
                                                                @if ($gaji->month == $accdmonth && $gaji->year == $accdyear)
                                                                <td><label class="control-label text-right" >{{$gaji->wages}}</label></td>
                                                                <?php $wagefound = true; ?>
                                                                @endif
                                                            @endforeach
                                                            @endif
                                                        @endforeach
                                                        @endif
                                                        @if ($wagefound == false)
                                                        <td><label ></label></td>
                                                        @endif
                                                            
                                                            <?php $contrfound = false; ?>
                                                            @if (!empty($contr))
                                                            @foreach ($contr->contribution as $c)
                                                            @if ($c->month == $accdmonth && $c->year == $accdyear)
                                                            <td><label class="control-label text-right" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" >{{$c->contribution}}</td>
                                                            <?php $contrfound = true; ?>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                            
                                                            @if ($contrfound == false)
                                                            <td><label class="control-label text-right" id="contrpaid[{{$contrcnt}}][{{$cnt}}]"></td>
                                                            @endif
                                                            
                                                        </tr>
                                                        <?php $cnt++; 
                                                              ?>
                                                    @endwhile
                                                    </tbody>
                                                </table>
                                                
								<?php $contrcnt++; ?>                    
								@endforeach
                                </div>
                                <!--/span-->
                            </div>
                            <h5 class="card-title">Accident Details</h5>
                            <hr class="m-t-0 m-b-40">
							<table border="0" cellpadding="10px">
									<tr>
                                        <td class="control-label">Accident Date</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                            {{substr(Session::get('accddate'),6,2)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),0,4)}}</label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td class="control-label">Time Accident</td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
											<label class="control-label text-right ">{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}</label>
                                        </td>
                                    </tr>
									<tr>
                                        <td class="control-label">Place of Accident</td>
                                        <td>:</td>
                                        <td>
											@foreach($accdplace as $AccPlace)
                                                @if (!empty($accinfo) && $accinfo->place == $AccPlace->refcode)
                                                {{$AccPlace->descen}}
                                                @endif
                                                @endforeach</td>
                                        
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">When Accident Happen</td>
                                        <td>:</td>
                                        <td class="control-label text-left" >
											<label class="control-label text-right ">@foreach($accdwhen as $AccWhen)
                                        
                                            @if (!empty($accinfo) && $accinfo->accwhen == $AccWhen->refcode)
                                            {{$AccWhen->descen}}
                                            @endif
                                            @endforeach
											</label>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label">How the Accident Happened</td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->how}} @endif</label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">Reason for Travelling </td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                @if(!empty($accinfo)){{$accinfo->reasontravel}} @endif
                                            </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">Injury Description</td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="control-label">Is Accident Date a Working Day For The Insured Person</td>
                                                <td>:</td>
                                                <td class="control-label text-left" >
                                                    <label class="control-label text-right "> 
                                                        {{-- {{$accinfo->accwork}} --}}
                                                            @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                                            @lang('accidentDetails.yes')
                                                           @elseif(!empty($accinfo) && $accinfo->accwork == 'N')
                                                           @lang('accidentDetails.no')
                                                           @else
                                                           @endif

                                                    </label>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">Are wages paid on the day of accident?</td>
                                                <td>:</td>
                                                <td>
                                                     {{-- {{$accinfo->wagespaid}} --}}
                                                        @if (!empty($accinfo) && $accinfo->wagespaid == 'Y')
                                                        @lang('accidentDetails.yes')
                                                       @elseif(!empty($accinfo) && $accinfo->wagespaid == 'N')
                                                       @lang('accidentDetails.no')
                                                       @else
                                                       @endif
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="control-label">Start Working Time on Accident Day</td>
                                                <td>:</td>
                                                <td class="control-label text-left" >
                                                        <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->startworktime!='') {{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}} @endif</label>
                                    
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">Rest Periods are Allowed on The Day of The Accident</td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}} @endif</label>
                                        
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="control-label">Ending Time of Work on The Accident Date</td>
                                                <td>:</td>
                                                <td class="control-label text-left" >
                                                        <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}} @endif</label>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">Name of Witness</td>
                                                <td>:</td>
                                                <td>
                                                    <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->witnessname}} @endif</label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="control-label">Witness Phone No. </td>
                                                <td>:</td>
                                                <td class="control-label text-left" >
                                                        <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif</label>
                                             </td>
                                        </tr>
							</table>
							<br>
									
                            
                            <h5 class="card-title">MC Details</h5>
                            <hr class="m-t-0 m-b-40">
                            <table border="0" cellpadding="10px">
                                    <tr>
                                            <td class="control-label">Name and Address of Clinic Which Provides First Treatment</td>
                                            <td>:</td>
                                            <td>
                                                    <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</label>
                                            </td>
                                    </tr>
                            </table><br>
                            <label>Medical Leave</label>
                                <table border="0" cellpadding="5px">
                                    <tr>
                                        <td class="control-label"> Type Of HUS</td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                    @foreach($hussts as $typehus)
                                                    @if (!empty($mcdata) && $mcdata->mcinfo[0]->hussts == $typehus->refcode)
                                                    {{$typehus->descen}}
                                                    @endif
                                                    @endforeach
                                                </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">Start Date</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @if (!empty($mcdata) && strlen($mcdata->mcinfo[0]->startdate)>0){{substr($mcdata->mcinfo[0]->startdate,6,2)}}-{{substr($mcdata->mcinfo[0]->startdate,4,2)}}-{{substr($mcdata->mcinfo[0]->startdate,0,4)}}@endif
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">End Date</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @if (!empty($mcdata) && strlen($mcdata->mcinfo[0]->enddate)>0){{substr($mcdata->mcinfo[0]->enddate,6,2)}}-{{substr($mcdata->mcinfo[0]->enddate,4,2)}}-{{substr($mcdata->mcinfo[0]->enddate,0,4)}}@endif
                                           </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">Total Days</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @if (!empty($mcdata)){{$mcdata->mcinfo[0]->totalmc}}@endif
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table><br>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Attended Work</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Total Day(s)</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>@if (!empty($mcdata) && strlen($mcdata->mcinfo[0]->workinfo[0]->workstartdate)>0){{substr($mcdata->mcinfo[0]->workinfo[0]->workstartdate,6,2)}}-{{substr($mcdata->mcinfo[0]->workinfo[0]->workstartdate,4,2)}}-{{substr($mcdata->mcinfo[0]->workinfo[0]->workstartdate,0,4)}}@endif</td>
                                            <td>@if (!empty($mcdata) && strlen($mcdata->mcinfo[0]->workinfo[0]->workenddate)>0){{substr($mcdata->mcinfo[0]->workinfo[0]->workenddate,6,2)}}-{{substr($mcdata->mcinfo[0]->workinfo[0]->workenddate,4,2)}}-{{substr($mcdata->mcinfo[0]->workinfo[0]->workenddate,0,4)}}@endif</td>
                                            <td>@if (!empty($mcdata)){{$mcdata->mcinfo[0]->workinfo[0]->totalwork}}@endif</td>
                                            <td>
                                                @foreach ($worksts as $w)
                                                @if (!empty($mcdata) && $mcdata->mcinfo[0]->workinfo[0]->statuswork == $w->refcode) 
                                                {{$w->descen}}
                                                @endif
                                                @endforeach    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h5 class="card-title">Bank Information</h5>
                        <hr class="m-t-0 m-b-40">
                        <table border="0" cellpadding="5px">
                            <tr>
                                <td class="control-label">Payment Mode</td>
                                <td>:</td>
                                <td>
                                        @foreach($optionpay as $opay)
                                        @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                            {{$opay->descen}}
                                        @else
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                    <td class="control-label have_acc_bank">Recipient have bank account</td>
                                    <td class="control-label have_acc_bank">:</td>
                                    <td class="control-label have_acc_bank" >
                                        @foreach($optionreason as $or)
                                            @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                            {{$or->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="control-label have_acc_bank"></td>
                                    <td class="control-label have_acc_bank"></td>
                                    <td class="control-label reason_no_acc">Reason no Bank Account</td>
                                    <td class="control-label reason_no_acc">:</td>
                                    <td class="control-label reason_no_acc">
                                        @foreach($optionreason as $or)
                                            @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                            {{$or->descen}}
                                            @else
                                            @endif
                                            @endforeach
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label bank_location">Bank Location</td>
                                    <td class="control-label bank_location">:</td>
                                    <td class="control-label bank_location">
                                        @foreach($optionbank as $ob)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                            {{$ob->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="control-label bank_location"></td>
                                    <td class="control-label bank_location"></td>
                                    <td class="control-label status_bai">Status BAI</td>
                                    <td class="control-label status_bai">:</td>
                                    <td class="control-label status_bai">
                                        @foreach($optionbai as $obai)
                                            @if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)
                                            {{$obai->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label bank_status">Sub Status Description </td>
                                    <td class="control-label bank_status">:</td>
                                    <td class="control-label bank_status">
                                        @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                                        {{$bankinfo->substsdesc}}
                                            @else
                                        @endif
                                    </td>
                                    <td class="control-label bank_status"></td>
                                    <td class="control-label bank_status"></td>
                                    <td class="control-label bank_code">Bank Code</td>
                                    <td class="control-label bank_code">:</td>
                                    <td class="control-label bank_code">
                                         @foreach($bankcode as $bc)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                            $bankinfo->bankcode == $bc->refcode)
                                            {{$bc->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label bank_branch">Bank Branch</td>
                                    <td class="control-label bank_branch">:</td>
                                    <td class="control-label bank_branch">
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            {{$bankinfo->bankbr}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            @else
                                        @endif
                                    </td>
                                    <td class="control-label bank_branch"></td>
                                    <td class="control-label bank_branch"></td>
                                    <td class="control-label bank_acc">Bank Accno</td>
                                    <td class="control-label bank_acc">:</td>
                                    <td class="control-label bank_acc">  
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            {{$bankinfo->accno}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            @else
                                        @endif
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label bank_address">Bank Address</td>
                                    <td class="control-label bank_address">:</td>
                                    <td class="control-label bank_address">
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankaddr)
                                            {{$bankinfo->bankaddr}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            @else
                                         @endif
                                    </td>
                                    <td class="control-label bank_address"></td>
                                    <td class="control-label bank_address"></td>
                                    <td class="control-label bank_acc_type">Bank Acc Type</td>
                                    <td class="control-label bank_acc_type">:</td>
                                    <td class="control-label bank_acc_type">
                                        @foreach($accountype as $at)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' && $bankinfo->acctype == $at->refcode)
                                            {{$at->descen}}
                                            @endif
                                        @endforeach
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label swiftcode">Swiftcode</td>
                                    <td class="control-label swiftcode">:</td>
                                    <td class="control-label swiftcode">
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            {{$bankinfo->swiftcode}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            @else
                                            @endif
                                    </td>
                                    <td class="control-label swiftcode"></td>
                                    <td class="control-label swiftcode"></td>
                                    <td class="control-label bsbcode">BSBCode</td>
                                    <td class="control-label bsbcode">:</td>
                                    <td class="control-label bsbcode"> 
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        {{$bankinfo->bsbcode}}
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        @else
                                        @endif
                                    </td>
                            </tr>
                        </table>
                        
            <!--h5 class="card-title">Upload Document</h5>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Document</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Form34</td>
                                                <td>.pdf</td>
                                            </tr>
                                             <tr>
                                                <td>Copy of Insured Person's Identification Card ( both sides )Form34</td>
                                                <td>.pdf</td>
                                            </tr>
                                             <tr>
                                                <td>Original Police Report </td>
                                                <td>.pdf</td>
                                            </tr>
                                            <tr>
                                                <td>Medical Report </td>
                                                <td>.pdf</td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>
                                                <td>.pdf</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div--><br><br>
                            <h5 class="card-title">Confirmation</h5>
                            <hr class="m-t-0 m-b-40">
                            <h5 class="box-title">Preferred Socso Office</h5>
                            <hr class="m-t-0 m-b-40">

                            <table border="0" cellpadding="5px">
                                    <tr>
                                        <td class="control-label">State</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @foreach($state as $S)
                                                @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                                    {{$S->descen}}
                                                @endif
                                                @endforeach
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                         <td></td>
                                        <td class="control-label">City</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @foreach($branch as $B)
                                                @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                                    {{$B->brname}}
                                                @endif
                                                @endforeach
                                           </label>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table><br><br>
                            <h5 class="box-title">Confirmation Of Insured Person</h3>
                                <hr class="m-t-0 m-b-40">
                                <table border="0" cellpadding="5px">
                                        
                                        <tr>
                                            <td class="control-label">Section J Received</td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                    @foreach($state as $S)
                                                    @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                                        {{$S->descen}}
                                                    @endif
                                                    @endforeach
                                                </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">Complete Section J Received Date</td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                    @if(!empty($confirmation) && $confirmation->jrecvdate !='')
                                                    {{substr($confirmation->jrecvdate,6,2)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,0,4)}}
                                                    @else
                                                    {{substr($confirmation->jrecvdate,6,2)}}{{substr($confirmation->jrecvdate,4,2)}}{{substr($confirmation->jrecvdate,0,4)}}
                                                    @endif
                                            </label>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="control-label">Notice Date </td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">{{date('d-m-Y')}}</label>
                                           </td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                            <td class="control-label">Acceptance stamp date </td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">
                                                    @if(!empty($confirmation) && $confirmation->stampdate !='')
                                                    {{substr($confirmation->stampdate,6,2)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,0,4)}}
                                                    @else()
                                                    {{substr($confirmation->stampdate,6,2)}}{{substr($confirmation->stampdate,4,2)}}{{substr($confirmation->stampdate,0,4)}}
                                                    @endif
                                                </label>
                                        </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">Remarks </td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">{{$confirmation->remarks}}</label>
                                               </td>
                                        </tr>
                                </table>

                                
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-pencil"></i> Back</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection