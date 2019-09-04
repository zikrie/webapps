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
                    <form action="/back" method="post"> 
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body" >
                          <h5 class="card-title">@lang('insuredPerson.title')</h5>
                          <hr class="m-t-0 m-b-40">
                          <table id="div_preview" border="0" cellpadding="10px">
                            <tr>
                                <td class="control-label">@lang('insuredPerson.attr.name')</td>
                                <td>:</td>
                                <td>
                                        @if(!empty($obprofile) && $obprofile->name !='')
                                        {{ $obprofile->name }}
                                        @elseif(!empty($obformassist) && $obformassist->name !='')
                                        {{ $obformassist->name }}
                                        @else
                                        @endif
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('insuredPerson.attr.id_type')</td>
                                <td>:</td>
                                <td class="control-label text-left" >
                                    @foreach($idtype as $id)
                                        @if (!empty($obprofile) && $id->refcode == $obprofile->idtype)
                                        {{$id->descen}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.id_no')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                            @if(!empty($obprofile) && $obprofile->idno !='')
                                            {{ $obprofile->idno }}
                                            @elseif(!empty($obformassist) && $obformassist->idno !='')
                                           {{ $obformassist->idno }}
                                            @else
                                            @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.dateOfBirth')</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                            @if(!empty($obprofile) && $obprofile->dob !='')
                                            {{substr($obprofile->dob,0,4)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,6,2)}}
                                            @elseif(!empty($obformassist) && $obformassist->dob !='')
                                            {{substr($obformassist->dob,0,4)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,6,2)}}
                                            @else
                                            @endif
                                    </td>  
                            </tr>
                            <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.race')</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                        @foreach($race as $id)
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
                                    <td class="control-label">@lang('insuredPerson.attr.gender')</td>
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
                                    <td class="control-label">@lang('insuredPerson.attr.occupation')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile)){{ $obprofile->occupation }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.postal_address')</td>
                                    <td>:</td>
                                    <td class="control-label" >
                                            <label class="control-label text-right ">@if(!empty($obprofile)){{ $obprofile->add1 }} @endif</label>
                                            {{-- <br><label class="control-label text-right ">{{ $obprofile->add2 }} </label>
                                            <br><label class="control-label text-right ">{{ $obprofile->add3 }}  </label> --}}
                                                
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.city')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                            @if(!empty($obprofile)){{ $obprofile->city }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><label class="control-label text-right ">@if(!empty($obprofile)){{ $obprofile->add2 }} @endif</label></td>
                                    <td></td>
                                   
                            </tr>
                            <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.state')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
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
                                    <td></td>
                                    <td></td>
                                    <td><label class="control-label text-right ">@if(!empty($obprofile)){{ $obprofile->add3 }} @endif</label></td>
                                    
                            </tr>
                            <tr>    
                                <td class="control-label">@lang('insuredPerson.attr.postcode')</td>
                                <td>:</td>
                                <td class="control-label text-left" >
                                        @if(!empty($obprofile)){{ $obprofile->postcode }} @endif
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('insuredPerson.attr.pobox')</td>
                                <td>:</td>
                                <td class="control-label text-left">
                                    @if(!empty($obprofile)){{ $obprofile->pobox }} @endif
                                </td>
                                
                                
                            </tr>
                            <tr>    
                                    <td class="control-label">@lang('insuredPerson.attr.lockedbag')</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >
                                            @if(!empty($obprofile)){{ $obprofile->lockedbag }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.wdt')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                            @if(!empty($obprofile)){{ $obprofile->wdt }} @endif
                                    </td>
                                    
                                    
                            </tr>
                            <tr>    
                                    <td class="control-label">@lang('insuredPerson.attr.mobileNo')</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >@if(!empty($obprofile)){{ $obprofile->mobileno }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.telNo')</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >@if(!empty($obprofile)){{ $obprofile->telno }} @endif
                                    </td>
                                    
                            </tr>
                          
                            <tr>    
                                    <td class="control-label">@lang('insuredPerson.attr.email')</td>
                                    <td>:</td>
                                    <td class="control-label text-left" >@if(!empty($obprofile)){{ $obprofile->email }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.citizen')</td>
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
                                        <td class="control-label">@lang('employerDetails.attr.employerCode')</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @if(!empty($emprecord) && $emprecord->empcode != '')
                                                {{$emprecord->empcode}}
                                                @elseif(!empty($employer) && $employer->empcode != '')
                                                {{$employer->empcode}}
                                                @else
                                                @endif
                                        </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">@lang('employerDetails.attr.employerType')</td>
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
                                            <td class="control-label">@lang('employerDetails.attr.employerName')</td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    @if(!empty($emprecord) && $emprecord->empname != '')
                                                    {{$emprecord->empname}}
                                                    @elseif(!empty($employer) && $employer->empname != '')
                                                    {{$employer->empname}}
                                                    @else
                                                    @endif
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">@lang('employerDetails.attr.postal_address')</td>
                                            <td>:</td>
                                            <td class="control-label" >
                                                <label class="control-label text-right ">
                                                        @if(!empty($emprecord) && $emprecord->add1 != '')
                                                        {{$emprecord->add1}}
                                                        @elseif(!empty($employer) && $employer->add1 != '')
                                                        {{$employer->add1}}
                                                        @else
                                                        @endif
                                                </label>
                                            </td> 
                                    </tr>
                                    <tr>
                                            <td class="control-label">@lang('employerDetails.attr.postcode')</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    @if(!empty($emprecord) && $emprecord->postcode != '')
                                                    {{$emprecord->postcode}}
                                                    @elseif(!empty($employer) && $employer->add3 != '')
                                                    {{$employer->postcode}}
                                                    @else
                                                    @endif
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> @if(!empty($emprecord) && $emprecord->add2 != '')
                                                    {{$emprecord->add1}}
                                                    @elseif(!empty($employer) && $employer->add2 != '')
                                                    {{$employer->add2}}
                                                    @else
                                                    @endif
                                                </td>
                                            
                                    </tr>
                                    <tr>
                                            <td class="control-label">@lang('employerDetails.attr.state')</td>
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
                                            <td>
                                                    @if(!empty($emprecord) && $emprecord->add3 != '')
                                                    {{$emprecord->add3}}
                                                    @elseif(!empty($employer) && $employer->add3 != '')
                                                    {{$employer->add3}}
                                                    @else
                                                    @endif
                                            </td>
                                            
                                    </tr>
                                    <tr>
                                            
                                            <td class="control-label">@lang('employerDetails.attr.city')</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    @if(!empty($emprecord) && $emprecord->city != '')
                                                    {{$emprecord->city}}
                                                    @elseif(!empty($employer) && $employer->city != '')
                                                    {{$employer->city}}
                                                    @else
                                                    @endif
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">@lang('insuredPerson.attr.pobox')</td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    @if(!empty($emprecord) && $emprecord->pobox != '')
                                                  {{$emprecord->pobox}}
                                                    {{-- @elseif(!empty($employer) && $employer->pobox != '')
                                                    <input type="text" id="pobox" name="pobox" value="{{$employer->pobox}}" class="form-control"> --}}
                                                    @else
                                                    @endif
                                                
                                            </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label">@lang('employerDetails.attr.telNo')</td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    @if(!empty($emprecord) && $emprecord->telno != '')
                                                    {{$emprecord->telno}}
                                                    @elseif(!empty($employer) && $employer->phoneno != '')
                                                    {{$employer->phoneno}}
                                                    @else
                                                    @endif
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">@lang('insuredPerson.attr.lockedbag')</td>
                                            <td>:</td>
                                            <td class="control-label text-LEFT" >
                                                    @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                                   {{$emprecord->lockedbag}}
                                                    {{-- @elseif(!empty($employer) && $employer->lockedbag != '')
                                                    <input type="text" id="lockedbag" name="lockedbag" value="{{$employer->lockedbag}}" class="form-control"> --}}
                                                    @else
                                                    @endif
                                            </td>
                                           
                                    </tr>
                                    <tr>
                                            <td class="control-label">@lang('employerDetails.attr.email')</td>
                                            <td>:</td>
                                            <td class="control-label text-left">
                                                    @if(!empty($emprecord) && $emprecord->email != '')
                                                    {{$emprecord->email}}
                                                    @elseif(!empty($employer) && $employer->faxno != '')
                                                    {{$employer->email}}
                                                    @else
                                                    @endif
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="control-label">@lang('insuredPerson.attr.wdt')</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                    @if(!empty($emprecord) && $emprecord->wdt != '')
                                                    {{$emprecord->wdt}}
                                                    {{-- @elseif(!empty($employer) && $employer->wdt != '')
                                                    <input type="text" id="wdt" name="wdt" value="{{$employer->wdt}}" class="form-control"> --}}
                                                    @else
                                                    @endif
                                            </td>
                                    </tr>
                                    <tr>            
                                            <td class="control-label">@lang('employerDetails.attr.faxNo')</td>
                                            <td>:</td>
                                            <td class="control-label text-left" >
                                                <label class="control-label text-right ">
                                                        @if(!empty($emprecord) && $emprecord->faxno != '')
                                                        {{$emprecord->faxno}}
                                                        @elseif(!empty($employer) && $employer->faxno != '')
                                                        {{$employer->faxno}}
                                                        @else
                                                        @endif  
                                                </label>
                                            </td>
                                            
                                    </tr>  
                        </table>
                        
                        
                        <h5 class="card-title">@lang('wages.title')</h5>
                <hr class="m-t-0 m-b-40">
                @if (!empty($wagesinfo))
                        
                        <?php $contrcnt = 0; ?>
                        <?php $wagescnt = 0; ?>
                        @foreach ($wagesinfo as $wages)
                        <table border="0" cellpadding="10px">
                            <tr>
                                <td class="control-label">@lang('wages.attr.company_name')</td>
                                <td>:</td>
                                <td class="control-label text-left">{{$wages->empname}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('wages.attr.commencement_date')</td>
                                <td>:</td>
                                <td class="control-label text-left">{{substr($wages->startdate,6,2)}}-{{substr($wages->startdate,4,2)}}-{{substr($wages->startdate,0,4)}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('wages.attr.end_date')</td>
                                <td>:</td>
                                <td class="control-label text-left">{{substr($wages->enddate,6,2)}}-{{substr($wages->enddate,4,2)}}-{{substr($wages->enddate,0,4)}}</td>
                            </tr>
                        </table>
                        
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('wages.attr.details_wages_accd')</label>
                                    <div class="table-responsive">
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
                                                
                                             <?php 
                                                  $cnt = 0; ?>
                                            @foreach ($wages->wagesinfo as $gaji)
                                                <tr data-expanded="true">
                                                <td>{{$cnt+1}}</td>
                                                    
                                                @foreach ($month as $m)
                                                @if ($m->refcode == $gaji->month)
                                                <td>{{$m->descen}}</td>
                                                
                                                @endif
                                                @endforeach
                                                <td>{{$gaji->year}}</td>
                                                <td>{{$gaji->wages}}</td>
                                                <td>{{$gaji->contrpaid}}</td>
                                                </tr>  
                                            <?php $cnt++; ?>
                                            @endforeach
                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $contrcnt++; ?>                    
                        @endforeach
                        
                        
                        @else
                        <?php $contrcnt = 0; ?>
                        <?php $wagescnt = 0; ?>
                        @foreach ($contribution as $contr)
                        
                        <table border="0" cellpadding="10px">
                            <tr>
                                <td class="control-label">@lang('wages.attr.company_name')</td>
                                <td>:</td>
                                <td class="control-label text-left">{{$contr->empname}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('wages.attr.commencement_date')</td>
                                <td>:</td>
                                <td class="control-label text-left">{{substr($contr->startdate,6,2)}}-{{substr($contr->startdate,4,2)}}-{{substr($contr->startdate,0,4)}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="control-label">@lang('wages.attr.end_date')</td>
                                <td>:</td>
                                <td class="control-label text-left">{{substr($contr->enddate,6,2)}}-{{substr($contr->enddate,4,2)}}-{{substr($contr->enddate,0,4)}}</td>
                            </tr>
                        </table>
                        <br/>
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('wages.attr.details_wages_accd')</label>
                                    <div class="table-responsive">
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
                                            <?php $accdmonth = session('mcmonth'); 
                                                  $accdyear = session('mcyear'); 
                                                  $cnt = 0; 
                                                  
                                                  if ($accdmonth == '')
                                                  {
                                                      $accdmonth = date('m');
                                                  }
                                                  if ($accdyear == '')
                                                  {
                                                      $accdyear = date('Y');
                                                  }?>
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
                                                    
                                                    
                                                    @foreach ($month as $m)
                                                    @if ($m->refcode == $accdmonth)
                                                    <td>{{$m->descen}}</td>

                                                    @endif
                                                    @endforeach
                                                    <td>{{$accdyear}}</td>


                                                   <?php $wagefound = false; ?>
                                                @if (!empty($wagesinfo))
                                                @foreach ($wagesinfo as $w)
                                                    @if ($w->empcode == $contr->empcode)
                                                    @foreach ($w->wagesinfo as $gaji)
                                                        @if ($gaji->month == $accdmonth && $gaji->year == $accdyear)
                                                        <td>{{$gaji->wages}}</td>
                                                        <?php $wagefound = true; ?>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                @endforeach
                                                @endif
                                                @if ($wagefound == false)
                                                <td></td>
                                                @endif

                                                    <?php $contrfound = false; ?>
                                                    
                                                    
                                                    @if (!empty($contr))
                                                    @foreach ($contr->contribution as $c)
                                                    @if ($c->month == $accdmonth && $c->year == $accdyear)
                                                    <td>{{$c->contribution}}</td>
                                                    <?php $contrfound = true; ?>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if ($contrfound == false)
                                                    <td></td>
                                                    @endif

                                                </tr>
                                                <?php $cnt++; 
                                                      ?>
                                            @endwhile





                                            <!--    @for ($i = 0; $i < 6; $i++)
                                                <tr data-expanded="true">
                                                    <td>{{$i+1}}</td>
                                                    <td>
                                                        <select id="month[{{$i}}]" name="month[{{$i}}]">
                                                            @foreach ($month as $m)

                                                            <option value='{{$m->refcode}}'>{{$m->descen}}</option>
                                                            @endforeach

                                                        </select>
                                                    </td>
                                                    <td><input type="text" id="year[{{$i}}]" name="year[{{$i}}]" value="" class="form-control" ></td>
                                                    <td><input type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control" ></td>
                                                    <td><input type="text" id="contrpaid[{{$i}}]" name="contrpaid[{{$i}}]" value="" class="form-control"></td>
                                                </tr>
                                                @endfor 
                                                -->


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $contrcnt++; ?>                    
                        @endforeach
                        @endif
                
                        <br/>
                        
                            <h5 class="card-title">@lang('accidentDetails.title')</h5>
                            <hr class="m-t-0 m-b-40">
				<table  border="0" cellpadding="10px">
									<tr>
                                        <td class="control-label">@lang('accidentDetails.attr.accident_date')</td>
                                        <td>:</td>
                                        <td width="300"><label class="control-label text-right ">
                                            {{substr(Session::get('accddate'),6,2)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),0,4)}}</label>
                                        </td>
                                        <td></td>
                                        <td class="control-label">@lang('accidentDetails.attr.time_accident')</td>
                                        <td>:</td>
                                        <td width="300" class="control-label text-left" >
											<label class="control-label text-right ">{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}</label>
                                        </td>
                                    </tr>
									<tr>
                                        <td class="control-label">@lang('accidentDetails.attr.place_accident')</td>
                                        <td>:</td>
                                        <td width="300">
											@foreach($accdplace as $AccPlace)
                                                @if (!empty($accinfo) && $accinfo->place == $AccPlace->refcode)
                                                {{$AccPlace->descen}}
                                                @endif
                                                @endforeach</td>
                                        <td></td>
                                        <td class="control-label">@lang('accidentDetails.attr.when_accident')</td>
                                        <td>:</td>
                                        <td width="300" class="control-label text-left" >
											<label class="control-label text-right ">@foreach($accdwhen as $AccWhen)
                                        
                                            @if (!empty($accinfo) && $accinfo->accwhen == $AccWhen->refcode)
                                            {{$AccWhen->descen}}
                                            @endif
                                            @endforeach
											</label>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td class="control-label">@lang('accidentDetails.attr.how_accident')</td>
                                            <td>:</td>
                                            <td width="300">@if(!empty($accinfo)){{$accinfo->how}} @endif  </td>
                                            <td></td>
                                            <td class="control-label">@lang('accidentDetails.attr.reason_travelling')</td>
                                            <td>:</td>
                                            <td width="300" class="control-label text-left" >
                                                @if(!empty($accinfo)){{$accinfo->reasontravel}} @endif
                                            </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">@lang('accidentDetails.attr.injury_desc')</td>
                                                <td>:</td>
                                                <td width="300"><label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</label>
                                                </td>
                                                <td></td>
                                                <td class="control-label">@lang('accidentDetails.attr.accident_workingDay')</td>
                                                <td>:</td>
                                                <td width="300" class="control-label text-left" >
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
                                                <td class="control-label">@lang('accidentDetails.attr.are_wagesPaid')</td>
                                                <td>:</td>
                                                <td width="300">
                                                     {{-- {{$accinfo->wagespaid}} --}}
                                                        @if (!empty($accinfo) && $accinfo->wagespaid == 'Y')
                                                        @lang('accidentDetails.yes')
                                                       @elseif(!empty($accinfo) && $accinfo->wagespaid == 'N')
                                                       @lang('accidentDetails.no')
                                                       @else
                                                       @endif
                                                </td>
                                                <td></td>
                                                <td class="control-label">@lang('accidentDetails.attr.start_workingTime')</td>
                                                <td>:</td>
                                                <td width="300" class="control-label text-left" >
                                                        <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->startworktime!='') {{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}} @endif</label>
                                    
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">@lang('accidentDetails.attr.rest_period')</td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}} @endif</label>
                                        
                                                </td>
                                                <td></td>
                                                <td class="control-label">@lang('accidentDetails.attr.end_workingTime')</td>
                                                <td>:</td>
                                                <td class="control-label text-left" >
                                                        <label class="control-label text-right ">@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}} @endif</label>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="control-label">@lang('accidentDetails.attr.witness_name')</td>
                                                <td>:</td>
                                                <td>
                                                    <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->witnessname}} @endif</label>
                                                </td>
                                                <td></td>
                                                <td class="control-label">@lang('accidentDetails.attr.witness_no')</td>
                                                <td>:</td>
                                                <td class="control-label text-left" >
                                                        <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif</label>
                                             </td>
                                        </tr>
							</table>
							<br>
									
                            
                            <h5 class="card-title">@lang('medicalDetails.title')</h5>
                            <hr class="m-t-0 m-b-40">
                            <table border="0" cellpadding="10px">
                                    <tr>
                                            <td class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</td>
                                            <td>:</td>
                                            <td>
                                                    <label class="control-label text-right ">@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</label>
                                            </td>
                                    </tr>
                            </table><br>
                            <label>@lang('medicalDetails.attr.medical_leave')</label>
                                <table border="0" cellpadding="5px">
                                    <tr>
                                        <td class="control-label">@lang('medicalDetails.attr.type_hus')</td>
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
                                        <td class="control-label">@lang('medicalDetails.attr.start_mc')</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @if (!empty($mcdata) && strlen($mcdata->mcinfo[0]->startdate)>0){{substr($mcdata->mcinfo[0]->startdate,6,2)}}-{{substr($mcdata->mcinfo[0]->startdate,4,2)}}-{{substr($mcdata->mcinfo[0]->startdate,0,4)}}@endif
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">@lang('medicalDetails.attr.end_mc')</td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">
                                                @if (!empty($mcdata) && strlen($mcdata->mcinfo[0]->enddate)>0){{substr($mcdata->mcinfo[0]->enddate,6,2)}}-{{substr($mcdata->mcinfo[0]->enddate,4,2)}}-{{substr($mcdata->mcinfo[0]->enddate,0,4)}}@endif
                                           </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="control-label">@lang('medicalDetails.attr.total_days')</td>
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
                                <label>@lang('medicalDetails.attr.attended_work')</label>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>@lang('medicalDetails.attr.start_date')</th>
                                            <th>@lang('medicalDetails.attr.end_date')</th>
                                            <th>@lang('medicalDetails.attr.total_days')</th>
                                            <th>@lang('medicalDetails.attr.status')</th>
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
                        <h5 class="card-title">@lang('confirmation.bank_info')</h5>
                        <hr class="m-t-0 m-b-40">
                        
                        <table border="0" cellpadding="5px">
                            <tr >

                                <td class="control-label">@lang('confirmation.attr.payment')</td>
                                <td>:</td>
                                <td width="300">
                                        @foreach($optionpay as $opay)
                                        @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                            {{$opay->descen}}
                                            <input type="hidden" id="payment_method" value="{{$opay->refcode}}">
                                        @else
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                    <td class="control-label have_acc_bank">@lang('confirmation.attr.recipient_bank')</td>
                                    <td class="control-label have_acc_bank">:</td>
                                    <td class="control-label have_acc_bank" width="300">
                                        @foreach($optionreason as $or)
                                            @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                            {{$or->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="control-label have_acc_bank"></td>
                                    <td class="control-label reason_no_acc">@lang('confirmation.attr.reason_no_bankAcc')</td>
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
                                    <td class="control-label bank_location">@lang('confirmation.attr.bank_location')</td>
                                    <td class="control-label bank_location">:</td>
                                    <td class="control-label bank_location">
                                        @foreach($optionbank as $ob)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                            {{$ob->descen}}
                                            <input type="hidden" id="preview_bank" value="{{$ob->refcode}}">
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="control-label bank_location"></td>
                                    <td class="control-label status_bai">@lang('confirmation.attr.bai_status')</td>
                                    <td class="control-label status_bai">:</td>
                                    <td class="control-label status_bai" width="300">
                                        @foreach($optionbai as $obai)
                                            @if (!empty($bankinfo) && $bankinfo->baists == $obai->refcode)
                                            {{$obai->descen}}
                                            @else
                                            @endif
                                        @endforeach
                                    </td>
                            </tr>
                            <tr>
                                    <td class="control-label bank_status">@lang('confirmation.attr.substatus_desc')</td>
                                    <td class="control-label bank_status">:</td>
                                    <td class="control-label bank_status">
                                        @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                                        {{$bankinfo->substsdesc}}
                                            @else
                                        @endif
                                    </td>
                                    <td class="control-label bank_status"></td>
                                    <td class="control-label bank_code">@lang('confirmation.attr.bank_name')</td>
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
                                    <td class="control-label bank_branch">@lang('confirmation.attr.bank_branch')</td>
                                    <td class="control-label bank_branch">:</td>
                                    <td class="control-label bank_branch">
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            {{$bankinfo->bankbr}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            @else
                                        @endif
                                    </td>
                                    <td class="control-label bank_branch"></td>
                                    <td class="control-label bank_acc">@lang('confirmation.attr.bank_accNo')</td>
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
                                    <td class="control-label bank_address">@lang('confirmation.attr.bank_address')</td>
                                    <td class="control-label bank_address">:</td>
                                    <td class="control-label bank_address">
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->bankaddr)
                                            {{$bankinfo->bankaddr}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            @else
                                         @endif
                                    </td>
                                    <td class="control-label bank_address"></td>
                                    <td class="control-label bank_acc_type">@lang('confirmation.attr.type_acc')</td>
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
                                    <td class="control-label swiftcode">@lang('confirmation.attr.swift_code')</td>
                                    <td class="control-label swiftcode">:</td>
                                    <td class="control-label swiftcode">
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            {{$bankinfo->swiftcode}}
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            @else
                                            @endif
                                    </td>
                                    <td class="control-label swiftcode"></td>
                                    <td class="control-label bsbcode">@lang('confirmation.attr.bsb_code')</td>
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
                            <h5 class="card-title">@lang('confirmation.title_ob')</h5>
                            <hr class="m-t-0 m-b-40">
                            <h5 class="box-title">@lang('socso.title')</h5>
                            <hr class="m-t-0 m-b-40">

                            <table border="0" cellpadding="5px">
                                    <tr>
                                        <td class="control-label"> @lang('socso.attr.state')</td>
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
                                        <td class="control-label">@lang('socso.attr.city')</td>
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
                                <h5 class="box-title">@lang('confirmation.title_ob')</h5>
                                <hr class="m-t-0 m-b-40">
                                <table border="0" cellpadding="5px">
                                        
                                        <tr>
                                            <td class="control-label">@lang('confirmation.attr.sectionj_received')</td>
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
                                            <td class="control-label">@lang('confirmation.attr.complete_sectionj')</td>
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
                                            <td class="control-label">@lang('confirmation.attr.notice_date')</td>
                                            <td>:</td>
                                            <td><label class="control-label text-right ">{{date('d-m-Y')}}</label>
                                           </td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                            <td class="control-label">@lang('confirmation.attr.acceptance_stamp')</td>
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
                                                <td class="control-label">@lang('confirmation.attr.remarks')</td>
                                                <td>:</td>
                                                <td><label class="control-label text-right ">{{$confirmation->remarks}}</label>
                                               </td>
                                        </tr>
                                </table>

                                
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-11"> </div> 
                                    <div class="col-md-1">        
                                    <button type="submit" class="btn btn-success">@lang('confirmation.attr.back')</button>
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