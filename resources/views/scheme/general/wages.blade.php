<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/wages">
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    @csrf
                    <div class="form-body">

                        @if(Session::get('messagewage')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagewage')}}
                            </div>
                            @elseif (!empty($messagewage))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messagewage}}
                                </div>
    
                            </div>

                        </div>
                        @endif

                        @if (!empty($wagesinfo))
                        <?php $index=0; ?>
                        <?php $contrcnt = 0; ?>
                        <?php $wagescnt = 0; ?>
                        @foreach ($wagesinfo as $wages)
                        <?php $index++; ?>
                        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div role="tab" id="heading{{$index}}">
                                    <h6 class="card-title-sub">
                                        <a @if($index>1) @endif class="link" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                                          @lang('form/scheme.general.collapse.wages.employer_info') {{$index}}
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse{{$index}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$index}}">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.empcode')</label>
                                                    <input type="text" id="empcode[{{$contrcnt}}]" name="empcode[{{$contrcnt}}]" value="{{$wages->empcode}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.company_name')</label>
                                                    <input type="text" id="empname[{{$contrcnt}}]" name="empname[{{$contrcnt}}]" value="{{$wages->empname}}" class="form-control" >
                                                </div>
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/scheme.general.collapse.wages.commencement_date')</label>
                                                            <input type="date" id="startdate[{{$contrcnt}}]" onchange='checkdate({{$contrcnt}})' name="startdate[{{$contrcnt}}]" value="{{substr($wages->startdate,0,4)}}-{{substr($wages->startdate,4,2)}}-{{substr($wages->startdate,6,2)}}" class="form-control"  >
                                                            <label class="control-label" id='lblerror' style='color:red'></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/scheme.general.collapse.wages.end_date')</label>
                                                            <input type="date" id="enddate[{{$contrcnt}}]" onchange='checkdate({{$contrcnt}})' name="enddate[{{$contrcnt}}]" value="{{substr($wages->enddate,0,4)}}-{{substr($wages->enddate,4,2)}}-{{substr($wages->enddate,6,2)}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-t-20">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <label>@lang('form/scheme.general.collapse.wages.details_wages_od')</label>
                                                            <div class="table-responsive">
                                                                <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                                    <thead>
                                                                        <tr>
                                                                            <th data-breakpoints="xs">@lang('table-header.wages.num')</th>
                                                                            <th>@lang('table-header.wages.year')</th>
                                                                            <th>@lang('table-header.wages.month')</th>
                                                                            <th data-breakpoints="xs sm">@lang('table-header.wages.wages')</th>
                                                                            <th data-breakpoints="xs">@lang('table-header.wages.contribution_paid')</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
    
                                                                       <?php 
                                                                       $cnt = 0; ?>
                                                                       @foreach ($wages->wagesinfo as $gaji)
                                                                       <tr data-expanded="true">
                                                                        <td>{{$cnt+1}}</td>
    
                                                                        <td><input type="text" id="year[{{$contrcnt}}][{{$cnt}}]" name="year[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->year}}" class="form-control" readonly></td>
                                                                        <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->wages}}" class="form-control maskdecimal" ></td>
                                                                        <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->contrpaid}}" class="form-control maskdecimal" ></td>
                                                                    </tr> 
    
                                                                    @foreach ($month as $m)
                                                                    @if ($m->refcode == $gaji->month)
                                                                    <td><input type="text" value='{{$m->descen}}' class='form-control'readonly>
                                                                        <input type="hidden" value='{{$gaji->month}}' class='form-control' id="month[{{$contrcnt}}][{{$cnt}}]" name="month[{{$contrcnt}}][{{$cnt}}]" readonly>
                                                                    </td>
                                                                    @endif
                                                                    @endforeach
                                                                    <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->wages}}" class="form-control maskdecimal" ></td>
                                                                    <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->contrpaid}}" class="form-control maskdecimal" readonly></td>
                                                                </tr> 
                                                                <?php $cnt++; ?>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                        @endforeach
                        <?php $index++; ?>    
                        <?php $contrcnt++; ?>                     
                        
                        @else
                        <?php $index=0; ?>
                        <?php $contrcnt = 0; ?>
                        <?php $wagescnt = 0; ?>
                        @foreach ($contribution as $contr) 
                        <?php $index++; ?>
                        <div id="accordion2" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div role="tab" id="heading{{$index}}">
                                    <h6 class="card-title-sub">
                                        <a @if($index>1) @endif class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                                          @lang('form/scheme.general.collapse.wages.employer_info') {{$index}} 
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse{{$index}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$index}}">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.empcode')</label>
                                                    <input type="text" id="empcode[{{$contrcnt}}]" name="empcode[{{$contrcnt}}]" value="{{$contr->empcode}}" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.company_name')</label>
                                                    <input type="text" id="empname[{{$contrcnt}}]" name="empname[{{$contrcnt}}]" value="{{$contr->empname}}" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.commencement_date')</label>
                                                    <input type="date" id="startdate[{{$contrcnt}}]" onchange='checkdate({{$contrcnt}})' name="startdate[{{$contrcnt}}]" value="{{substr($contr->startdate,0,4)}}-{{substr($contr->startdate,4,2)}}-{{substr($contr->startdate,6,2)}}" class="form-control"  >
                                                    <label class="control-label" id='lblerror' style='color:red'></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('form/scheme.general.collapse.wages.end_date')</label>
                                                    <input type="date" id="enddate[{{$contrcnt}}]" onchange='checkdate({{$contrcnt}})' name="enddate[{{$contrcnt}}]" value="{{substr($contr->enddate,0,4)}}-{{substr($contr->enddate,4,2)}}-{{substr($contr->enddate,6,2)}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-12">
                                                <div class="card">
                                                    <label>@lang('form/scheme.general.collapse.wages.details_wages_death')</label>
                                                    <div class="table-responsive">
                                                        <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                                            <thead>
                                                                <tr>
                                                                    <th data-breakpoints="xs">@lang('form/scheme.general.collapse.wages.num')</th>
                                                                    <th>@lang('form/scheme.general.collapse.wages.year')</th>
                                                                    <th>@lang('form/scheme.general.collapse.wages.month')</th>
                                                                    <th data-breakpoints="xs sm">@lang('form/scheme.general.collapse.wages.wages')</th>
                                                                    <th data-breakpoints="xs">@lang('form/scheme.general.collapse.wages.contribution_paid')</th>
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
                                                                    <td><input type="text" id="year[{{$contrcnt}}][{{$cnt}}]" name="year[{{$contrcnt}}][{{$cnt}}]" value="{{$accdyear}}" class="form-control" readonly></td>
                                                                    @foreach ($month as $m)
                                                                    @if ($m->refcode == $accdmonth)
                                                                    <td><input type="text" value='{{$m->descen}}' class='form-control'readonly>
                                                                        <input type="hidden" value='{{$accdmonth}}' class='form-control' id="month[{{$contrcnt}}][{{$cnt}}]" name="month[{{$contrcnt}}][{{$cnt}}]" readonly>
                                                                    </td>
                                                                    @endif
                                                                    @endforeach


                                                                    <?php $wagefound = false; ?>
                                                                    @if (!empty($wagesinfo))
                                                                    @foreach ($wagesinfo as $w)
                                                                    @if ($w->empcode == $contr->empcode)
                                                                    @foreach ($w->wagesinfo as $gaji)
                                                                    @if ($gaji->month == $accdmonth && $gaji->year == $accdyear)
                                                                    <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="{{$gaji->wages}}" class="form-control maskdecimal" ></td>
                                                                    <?php $wagefound = true; ?>
                                                                    @endif
                                                                    @endforeach
                                                                    @endif
                                                                    @endforeach
                                                                    @endif
                                                                    @if ($wagefound == false)
                                                                    <td><input type="text" id="wages[{{$contrcnt}}][{{$cnt}}]" name="wages[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control maskdecimal" ></td>
                                                                    @endif

                                                                    <?php $contrfound = false; ?>
                                                                    
                                                                    
                                                                    @if (!empty($contr))
                                                                    @foreach ($contr->contribution as $c)
                                                                    @if ($c->month == $accdmonth && $c->year == $accdyear)
                                                                    <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="{{$c->contribution}}" class="form-control maskdecimal" readonly></td>
                                                                    <?php $contrfound = true; ?>
                                                                    @endif
                                                                    @endforeach
                                                                    @endif

                                                                    @if ($contrfound == false)
                                                                    <td><input type="text" id="contrpaid[{{$contrcnt}}][{{$cnt}}]" name="contrpaid[{{$contrcnt}}][{{$cnt}}]" value="" class="form-control maskdecimal" readonly></td>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <?php $contrcnt++; ?>  
                        @endif

                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function checkdate(cnt)
    {

        var startdate = document.getElementById('startdate['+cnt+']').value;
    //var startdate = document.getElementById('startdate[0]').value;
    //alert(startdate);
    var enddate = document.getElementById('enddate['+cnt+']').value;

    var date = new Date();
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    
    if(dd<10) {
        dd = '0'+dd;
    } 

    if(mm<10) {
       mm  = '0'+mm;
   } 

   var currdate = yyyy + '-' + mm + '-' + dd;
   var days = GetDays(startdate,currdate);

   if (days <= 0)
   {
    var lblerror = document.getElementById('lblerror');
    lblerror.innerHTML  = 'Start date must not after current date';
    total.value = "";
    return;
}
else
{
    var lblerror = document.getElementById('lblerror');
    lblerror.innerHTML  = '';
}

if(startdate != "" && enddate != ""){

    var totaldays = GetDays(startdate,enddate);
    if (totaldays <= 0)
    {
        var lblmcerror = document.getElementById('lblmcerror');
        lblerror.innerHTML  = 'End date must not before start date';

        return;
    }
    else
    {
        var lblerror = document.getElementById('lblerror');
        lblerror.innerHTML  = '';
    }
    
    if(startdate != "" && enddate != ""){
    
        var totaldays = GetDays(startdate,enddate);
        if (totaldays <= 0)
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblerror.innerHTML  = 'End date must not before start date';
    
            return;
        }
        else
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblerror.innerHTML  = '';
        }
    
    }
    
    
    }
</script>
