@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Column -->

<div class="my-3 my-md-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="/back" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            @if(Session::get('messageconf')) 
                                    <div class="card-footer">

                                        <div class="alert alert-warning">
                                            {{Session::get('messageconf')}}
                                        </div>

                                    </div>
                                    @elseif (!empty($messageconf))
                                    <div class="card-footer">

                                        <div class="alert alert-warning">
                                            {{$messageconf}}
                                        </div>

                                    </div>
                                @endif 
                                <br/>
                            {{-- <h5 class="card-title">@lang('insuredPerson.title')</h5>
                            <hr class="m-t-0 m-b-40"> --}}
                            <table id="div_preview" border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.name')</td>
                                    <td>:</td>
                                    <td>@if(!empty($obprofile) && $obprofile->name !='')
                                        <label class="control-label text-right"> {{ $obprofile->name }} </label>
                                        @elseif(!empty($obformassist) && $obformassist->name !='')
                                        <label type="text" id="name" name="name" value="{{ $obformassist->name }}"
                                            class="control-label text-right" required>
                                            @else
                                            <label type="text" id="name" name="name" value=""
                                                class="control-label text-right" required>
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
                                    <td class="control-label text-left">@foreach($idtype as $id)
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
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile) && $obprofile->dob !='')
                                        {{substr($obprofile->dob,6,2)}}-{{substr($obprofile->dob,4,2)}}-{{substr($obprofile->dob,0,4)}}
                                        @else
                                        {{substr($obformassist->dob,6,2)}}-{{substr($obformassist->dob,4,2)}}-{{substr($obformassist->dob,0,4)}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.race')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">@foreach($race as $id)
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
                                    <td class="control-label text-left">
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
 @endif --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.occupation')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile) && $obprofile->occupation != '')
                                        {{ $obprofile->occupation }}
                                        @else
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.postal_address')</td>
                                    <td>:</td>
                                    <td class="control-label">
                                        <label class="control-label text-right ">
                                            @if(!empty($obprofile) && $obprofile->add1 != '')
                                            {{ $obprofile->add1 }}
                                            @else
                                            @endif
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.city') </td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile) && $obprofile->city != '')
                                        {{ $obprofile->city }}
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
                                    <td><label class="control-label text-right ">
                                            @if(!empty($obprofile) && $obprofile->add2 != '')
                                            {{ $obprofile->add2 }}
                                            @else
                                            @endif
                                        </label>
                                    </td>

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
                                    <td><label class="control-label text-right ">
                                            @if(!empty($obprofile) && $obprofile->add3 != '')
                                            {{ $obprofile->add3 }}
                                            @else
                                            @endif
                                        </label></td>

                                </tr>
                                <tr>
                                    <td class="control-label"> @lang('insuredPerson.attr.postcode')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile) && $obprofile->postcode != '')
                                        {{ $obprofile->postcode }}
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
                                        @if(!empty($obprofile) && $obprofile->pobox != '')
                                        {{ $obprofile->pobox }}
                                        @else
                                        @endif
                                    </td>


                                </tr>
                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.lockedbag')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile) && $obprofile->lockedbag != '')
                                        {{ $obprofile->lockedbag }}
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
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile) && $obprofile->wdt != '')
                                        {{ $obprofile->wdt }}
                                        @else
                                        @endif
                                    </td>


                                </tr>
                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.mobileNo')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile)){{ $obprofile->mobileno }} @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('insuredPerson.attr.telNo')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile)){{ $obprofile->telno }} @endif
                                    </td>

                                </tr>

                                <tr>
                                    <td class="control-label">@lang('insuredPerson.attr.email')</td>
                                    <td>:</td>
                                    <td class="control-label text-left">
                                        @if(!empty($obprofile)){{ $obprofile->email }} @endif
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

                                </tr>
                            </table>
                            <br/> <br/>
                            
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
                        <br/>
                        
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('wages.attr.details_wages_ilat')</label>
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
                                                <td>{{$m->descen}}
                                                </td>
                                                
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
                                    <label>@lang('wages.attr.details_wages_ilat')</label>
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
                                            <?php $accdmonth = date('m');
                                                  $accdyear = date('Y');
                                                  $cnt = 0; ?>
                                            @while ($cnt < 24)   
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
                                                    <td>{{$m->descen}}
                                                    </td>

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

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $contrcnt++; ?>                    
                        @endforeach
                        @endif
                        
                            <br><br/>
                            <h5 class="card-title">@lang('pensionDetails.title')</h5>
                            <hr class="m-t-0 m-b-40">

                            <table border="0" cellpadding="10px">
                                <tr>
                                    <td class="control-label">@lang('pensionDetails.attr.desc')</td>
                                    <td>:</td>
                                    <td colspan="13">
                                        <label class="control-label text-right ">
                                            @if(!empty($ilatinfo) && $ilatinfo->morbiddesc !='')
                                            {{ $ilatinfo->morbiddesc }}
                                            @else
                                            @endif
                                        </label>
                                    </td>
                                </tr>
                           
                                <tr>
                                    <td class="control-label">@lang('pensionDetails.attr.year')</td>
                                    <td>:</td>
                                    <td>
                                        <?php $curryear = date('Y'); ?>
                                        @for ($i = $curryear; $i >= 1974; $i--)
                                        @if (!empty($ilatinfo) && $ilatinfo->morbidyear !='' && $ilatinfo->morbidyear ==
                                        $i)
                                        {{$i}}
                                        @else

                                        @endif
                                        @endfor



                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('pensionDetails.attr.engaged_employment')</td>
                                    <td>:</td>
                                    <td> @if (!empty($ilatinfo) && $ilatinfo->inemployment !='' &&
                                        $ilatinfo->inemployment == 'Y')


                                        @lang('pensionDetails.attr.yes')

                                        @elseif (!empty($ilatinfo) && $ilatinfo->inemployment !='' &&
                                        $ilatinfo->inemployment == 'N')

                                        @lang('pensionDetails.attr.no')
                                        @else

                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="control-label">@lang('pensionDetails.attr.date_cessation')</td>
                                    <td>:</td>
                                    <td><label class="control-label text-right ">
                                            @if(!empty($ilatinfo) && $ilatinfo->endempdate !='')
                                            {{substr($ilatinfo->endempdate,0,4)}}-{{substr($ilatinfo->endempdate,4,2)}}-{{substr($ilatinfo->endempdate,6,2)}}
                                            @else
                                            @endif
                                        </label>
                                    </td>
                                </tr>
                            </table>
                            
                            <br><br/>
                            <br>
                            <h5 class="card-title">@lang('pensionDetails.employment_info')</h5>
                            <hr class="m-t-0 m-b-40">

                            <table id="table_add_emp_info" class="table table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width: 5%;align-self: center'>@lang('pensionDetails.attr.num')</th>
                                        <th style='width: 20%;align-self: center'>
                                            @lang('pensionDetails.attr.employer_name')</th>
                                        <th style='width: 25%;align-self: center'>
                                            @lang('pensionDetails.attr.employer_address')</th>
                                        <th style='width: 15%;align-self: center'>@lang('pensionDetails.attr.period')
                                        </th>
                                        <th style='width: 20%;align-self: center'>
                                            @lang('pensionDetails.attr.occupation')</th>
                                        <th style='width: 15%;align-self: center'>
                                            @lang('pensionDetails.attr.monthly_wages')</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @if (empty($empinfo))
                                    <?php $cnt = 5; ?>
                                    @for ($i = 0; $i < $cnt; $i++) <tr data-expanded="true">
                                        <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                        <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value=""
                                                class="form-control"></textarea></td>
                                        <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value=""
                                                class="form-control"></textarea></td>
                                        <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value=""
                                                class="form-control"></textarea></td>
                                        <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]"
                                                value="" class="form-control"></textarea></td>
                                        <td><textarea type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value=""
                                                class="form-control"></textarea></td>
                                        </tr>
                                        @endfor
                                        @else
                                        <?php $cnt = 5; $i = 0; ?>
                                        @foreach ($empinfo as $emp)
                                        <tr data-expanded="true">
                                            <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                            <td>{{$emp->empname}}</td>
                                            <td>{{$emp->empadd}}</td>
                                            <td>{{$emp->duration}}</td>
                                            <td>{{$emp->designation}}</td>
                                            <td>{{$emp->salary}}</td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                        @for ($j = $i; $j < $cnt; $j++) <tr data-expanded="true">
                                            <td><input type="hidden" value="{{$j}}">{{$j+1}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            @endfor

                                            @endif

                                            {{-- @endforeach
 @endforeach
 @endif --}}



                                </tbody>
                            </table><br/><br/>

                            <h5 class="card-title">@lang('confirmation.bank_info')</h5>
                            <hr class="m-t-0 m-b-40">

                            <table border="0" cellpadding="5px">
                                <tr>

                                    <td class="control-label ">@lang('confirmation.attr.payment')</td>
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
                                    <td class="control-label reason_no_acc">@lang('confirmation.attr.reason')</td>
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
                                    <td class="control-label bank_status">@lang('confirmation.attr.substatus_desc') </td>
                                    <td class="control-label bank_status">:</td>
                                    <td class="control-label bank_status">
                                        @if(!empty($bankinfo) && $bankinfo->substsdesc != '')
                                        {{$bankinfo->substsdesc}}
                                        @else
                                        @endif
                                    </td>
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
                                        @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' && $bankinfo->acctype ==
                                        $at->refcode)
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
                                    <td class="control-label">@lang('socso.attr.state')</td>
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
                            <h5 class="box-title">@lang('confirmation.title_ob')</h3>
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
                                        <td class="control-label">@lang('confirmation.attr.notice_date') </td>
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
                                        <td class="control-label">@lang('confirmation.attr.remarks') </td>
                                        <td>:</td>
                                        <td><label class="control-label text-right ">{{$confirmation->remarks}}</label>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                
                                

                                <div class="form-actions">   
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-actions">
                                            <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->
                                            
                                         
                                           @if (!empty ($confirmation) 
                                           && $confirmation->preferredbranch !=''
                                           && $confirmation->jrecvdate != ''
                                           && $confirmation->stampdate != '')
                                        
                                           <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button-->
                                            
                                            <button type="submit" name="action" value="Submit" class=" btn waves-effect waves-light btn btn-primary" alt="alert" id="submit" onclick="return confirm('Are you sure want to submit?');">@lang('confirmation.submit')</button>
                                        
                                            @else
                                        
                                            <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn btn-primary" id="submit" disabled>@lang('confirmation.submit')</button>
                                            
                                            @endif
                                            
                                            <button type="submit" name="action" value="Back" class="btn waves-effect waves-light btn btn-success">@lang('confirmation.attr.back')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                {{--<div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-11"> </div> 
                                    <div class="col-md-1">        
                                    <button type="submit" class="btn btn-success">@lang('confirmation.attr.back')</button>
                                    </div>           
                                       
                                        
                                    </div>
                                </div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
