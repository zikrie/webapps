<div class="card">
    <div class="card-body">
        <form method="post" action="{{ url('/updmc') }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="caserefno" value="{{$caserefno}}">
            <div class="form-body">
                <h5 class="card-title">@lang('medicalDetails.title')</h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                            <textarea type="text" id="clinicname" name="clinicinfo" class="form-control">@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif</textarea>
                        </div>
                    </div>
                </div>
                @if (!empty($mcdata))
                @foreach($mcdata->mcinfo as $mc)
                <div class="row">
                    <div class="col-md-12">
                        <div id="mc_accordion{{ $loop->iteration }}" role="tablist" aria-multiselectable="true">
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="attendwork"> 
                                    <h5 class="card-subtitle">
                                        @if ($mc->startdate != '')
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#mc_accordion{{ $loop->iteration }}" href="#mc_collapse{{ $loop->iteration }}" aria-expanded="false" aria-controls="collapseTwo2">
                                            @lang('medicalDetails.attr.medical_leave') ({{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('d/m/Y') }} - {{ (DateTime::createFromFormat('Ymd', $mc->enddate))->format('d/m/Y') }})
                                        </a>
                                        @else
                                        <a class="collapsed link" data-toggle="collapse" data-parent="#mc_accordion{{ $loop->iteration }}" href="#mc_collapse{{ $loop->iteration }}" aria-expanded="false" aria-controls="collapseTwo2">
                                            @lang('medicalDetails.attr.medical_leave')
                                        </a>
                                        @endif
                                    </h5>
                                </div>
                                <div id="mc_collapse{{ $loop->iteration }}" class="collapse" role="tabpanel">
                                    <div class="card-body">
                                        <div class='row'>       
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('medicalDetails.attr.type_hus')</label>
                                                        <select class="form-control" name="hussts[]">
                                                            <option>Please select</option>
                                                            @foreach($hussts as $typehus)
                                                            <option value="{{ $typehus->refcode }}" {{ $typehus->refcode == $mc->hussts ? 'selected' : '' }}>{{$typehus->descen}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label" >@lang('medicalDetails.attr.start_mc')</label>
                                                        <input id="mcstartdate" name="mcstartdate[]" type="date" onchange='counttotal()' value="@if ($mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label" >@lang('medicalDetails.attr.end_mc')</label>
                                                        <input id="mcenddate" name="mcenddate[]" type="date" onchange='counttotal()' value="@if ($mc->enddate!=''){{ (DateTime::createFromFormat('Ymd', $mc->enddate))->format('Y-m-d') }}@endif" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                                                            <input type="text" id="totalmc" name="totalmc[]" value="{{ $mc->totalmc }}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="control-label" id='lblmcerror' style='color:red'></label>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div id="accordion2" role="tablist" aria-multiselectable="true">
                                                    <div class="card m-b-0">
                                                        {{-- <div class="card-header" role="tab" id="attendwork"> --}}
                                                            <h6 class="card-subtitle">
                                                                <a id='work' class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                                                  @lang('medicalDetails.attr.attended_work')
                                                                </a>
                                                            </h6>
                                                        {{-- </div> --}}
                                                        <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="attendwork">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <table id="attended_work_tbl" class="table table-sm table-bordered" data-toggle-column="first">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style='width:17%'>Start Date</th>
                                                                                <th style='width:18%'>End Date</th>
                                                                                <th style='width:15%'>Total Days</th>
                                                                                <th style='width:50%'>Status</th>
                                                                                <th style='width:50%'>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if (!empty($mc->workinfo))
                                                                            @foreach($mc->workinfo as $work)
                                                                            <tr data-expanded="true" id="div_attend_work">
                                                                                <td>
                                                                                    <div class="col-md-12">
                                                                                        <input id="workstartdate" name="workstartdate0[]" type="date" onchange='counttotalwork()' value="@if ($work->workstartdate!=''){{ (DateTime::createFromFormat('Ymd', $work->workstartdate))->format('Y-m-d') }}@endif" class="form-control" >
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="col-md-12">
                                                                                        <input id="workenddate" name="workenddate0[]" type="date" onchange='counttotalwork()' value="@if ($work->workenddate!=''){{ (DateTime::createFromFormat('Ymd', $work->workenddate))->format('Y-m-d') }}@endif" class="form-control" >
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" id="totalwork" name="totalwork0[]" value="{{ $work->totalwork }}" class="form-control" readonly>
                                                                                </td>
                                                                                <td>
                                                                                    <select type="text" id="statuswork" name="statuswork0[]" class="form-control">
                                                                                        @foreach ($worksts as $w)
                                                                                        <option value="{{ $w->refcode }}" {{ $w->refcode == $work->statuswork ? 'selected' : '' }}>{{ $w->descen }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </td>
                                                                                <td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt fa-sm"></i></button></td>
                                                                            </tr>
                                                                            @endforeach
                                                                            @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="row">
                                                                    <button type="button" id="btn_add_work" class="btn btn-sm waves-effect waves-light btn-success">Add Attended Work</button>
                                                                </div>
                                                                <label class="control-label" id='lblworkerror' style='color:red'></label>
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
                    </div>
                </div>
                @endforeach
                @else
                    
                    {{--<select class="form-control" name="hussts[]">
                        <option>Please select</option>
                        @foreach($hussts as $typehus)
                        <option value="{{ $typehus->refcode }}" >{{$typehus->descen}}</option>
                        @endforeach

                    </select>--}}
                    {{--@include('noticeAccident.medicalCertificate_add')--}}
                @endif

                <div id="add_mc_accordian">
                    
                </div>
            </div>
            <br>
            <div class="form-actions text-right">
                <button type="button" id="btn_add_mc" class="btn btn-sm waves-effect waves-light btn-info">Add MC</button>
                <button type="submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" onclick="mcsubmit()">
                @lang('insuredPerson.save')</button>
            </div>
            
            @if(Session::get('messagemc'))
            <div class="alert alert-warning">
                {{Session::get('messagemc')}}
            </div>
            @elseif (!empty($messagemc))
            <div class="alert alert-warning">
                {{$messagemc}}
            </div>
            @endif

        </form>
    </div>
</div>
  
<script>
    function mcsubmit(){
        counttotal();
        counttotalwork();
    }
 
    function counttotalwork(){
        var startdate = document.getElementById('workstartdate').value;
        //alert(startdate);
        var enddate = document.getElementById('workenddate').value;
        var total = document.getElementById('totalwork');
        
        if(startdate != "" && enddate != ""){
            var totalwork = GetDays(startdate,enddate);
            if (totalwork <= 0)
            {
                var lblmcerror = document.getElementById('lblworkerror');
                total.value = "";
                lblmcerror.innerHTML  = 'End date must not before start date';
                return;
            }
            else
            {
                var lblmcerror = document.getElementById('lblworkerror');
                lblmcerror.innerHTML  = '';
            }
            total.value = totalwork;
            //total.value = startdate;
        }else{
            total.value = "";
        }
    }
     
    function counttotal()
    {
        //var startdate = document.getElementById('startdate['+idx+']').value;
        var startdate = document.getElementById('mcstartdate').value;
        var enddate = document.getElementById('mcenddate').value;
        var total = document.getElementById('totalmc');
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
        var days = GetDays(currdate,startdate);
        //alert(currdate + '+'+ startdate);
        if (days >= 0){
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = 'Start date must not after current date';
            total.value = "";
            return;
        }else{
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = '';
        }
        
        var accddate = document.getElementById('accddate').value;
        //accddate = accddate.substring(0, 4)+'-'+accddate.substring(4, 2)+'-'+accddate.substring(6, 2);
        days = GetDays(accddate,startdate);
        if (days <= 0)
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = 'Start date must not before accident date';
            total.value = "";
            return;
        }
        else
        {
            var lblmcerror = document.getElementById('lblmcerror');
            lblmcerror.innerHTML  = '';
        }
        
        if(startdate != "" && enddate != ""){
            var totalmc = GetDays(startdate,enddate);
            if (totalmc <= 0)
            {
                var lblmcerror = document.getElementById('lblmcerror');
                lblmcerror.innerHTML  = 'End date must not before start date';
                total.value = "";
                return;
            }
            else
            {
                var lblmcerror = document.getElementById('lblmcerror');
                lblmcerror.innerHTML  = '';
            }
            total.value = totalmc;
            //total.value = startdate;
        }
        else
        {
            total.value = "";
        }
    }

    function GetDays(startdate, enddate){
        var dropdt = new Date(startdate);
        var pickdt = new Date(enddate);
        return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
        //return Math.round((dropdt - pickdt) / (24 * 3600 * 1000));
    }   

    
    $(document).ready(function() {
        $( "#startdate1,#enddate1" ).datepicker({
			changeMonth: true,
			changeYear: true,
			firstDay: 1,
			dateFormat: 'dd/mm/yy',
		})

		$( "#startdate1" ).datepicker({ dateFormat: 'dd/mm/yy' });
		$( "#enddate1" ).datepicker({ dateFormat: 'dd-mm-yy' });

		$('#enddate1').change(function() {
			var start = $('#startdate1').datepicker('getDate');
			var end   = $('#enddate1').datepicker('getDate');

			if (start<end) {
				var days   = (end - start)/1000/60/60/24;
				$('#days1').val(days);
			}
			else {
				alert ("You cant come back before you have been!");
				$('#startdate1').val("");
				$('#enddate1').val("");
				$('#days1').val("");
			}
        });
		$( "#startdate,#enddate" ).datepicker({
			changeMonth: true,
			changeYear: true,
			firstDay: 1,
			dateFormat: 'dd/mm/yy',
		})
		$( "#startdate" ).datepicker({ dateFormat: 'dd/mm/yy' });
		$( "#enddate" ).datepicker({ dateFormat: 'dd-mm-yy' });

		$('#enddate').change(function() {
			var start = $('#startdate').datepicker('getDate');
			var end   = $('#enddate').datepicker('getDate');

			if (start<end) {
				var days   = (end - start)/1000/60/60/24;
				$('#days').val(days);
			}
			else {
				alert ("You cant come back before you have been!");
				$('#startdate').val("");
				$('#enddate').val("");
				$('#days').val("");
			}
        });

        var i=0; var j=0; var html; var html2;

        // Append mc
        
        $('#btn_add_mc').click(function(){  
            i++;

            html = '<div class="row"><div class="col-md-12">';
            html += '<div id="mc_accordion'+i+'" role="tablist" aria-multiselectable="true"><div class="card m-b-0"><div class="card-header" role="tab" id="attendwork"><h5 class="card-subtitle"><a class="collapsed link" data-toggle="collapse" data-parent="#mc_accordion'+i+'" href="#mc_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">Medical Leave</a></h5></div><div id="mc_collapse'+i+'" class="collapse" role="tabpanel"><div class="card-body">';
            html += '<div class="row"><div class="col-md-3"><div class="form-group"><label class="control-label">Type Of HUS</label><select class="form-control" name="hussts['+i+']"><option>Please select</option> @foreach($hussts as $typehus) @if (!empty($mcdata) && $mcdata->mcinfo[0]->hussts == $typehus->refcode)<option value="{{$typehus->refcode}}">{{$typehus->descen}}</option> @else <option value="{{$typehus->refcode}}">{{$typehus->descen}}</option>@endif @endforeach</select></div></div>';
            html += '<div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.start_mc')</label><input id="mcstartdate" name="mcstartdate['+i+']" type="date" value="" class="form-control"></div></div>';
            html += '<div class="col-md-3"><div class="form-group"><label class="control-label" >@lang('medicalDetails.attr.end_mc')</label><input id="mcenddate" name="mcenddate['+i+']" type="date" value="" class="form-control" ></div></div>';
            html += '<div class="col-md-3"><div class="form-group"><label class="control-label">@lang('medicalDetails.attr.total_days')</label><input type="text" id="totalmc" name="totalmc['+i+']" value="" class="form-control" readonly></div></div></div>';
            html += '<div class="row"><div class="col"><div id="accordion2" role="tablist" aria-multiselectable="true"><div class="card m-b-0"><h6 class="card-subtitle"><a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">Attended Work</a></h6><div id="collapseTwo3" class="collapse" role="tabpanel"><div class="card-body"><div class="row">';
            html += '<table id="attended_work_tbl'+i+'" class="table table-sm table-bordered" data-toggle-column="first"><thead><tr><th>Start Date</th><th>End Date</th><th>Total Days</th><th>Status</th><th>Action</th></tr></thead><tbody><tr><td><div class="col-md-12"><input id="workstartdate" name="workstartdate'+i+'[]" type="date" value="" class="form-control"></div></td><td><div class="col-md-12"><input id="workenddate" name="workenddate'+i+'[]" type="date" value="" class="form-control" ></div></td><td><input type="text" id="totalwork" name="totalwork'+i+'[]" value="" class="form-control" readonly></td><td><select type="text" id="statuswork" name="statuswork'+i+'[]" class="form-control">@foreach ($worksts as $w)@if (!empty($mcdata) && $mcdata->mcinfo[0]->workinfo[0]->statuswork == $w->refcode) <option value="{{$w->refcode}}" selected>{{$w->descen}}</option>@else<option value="{{$w->refcode}}">{{$w->descen}}</option>@endif @endforeach</select></td><td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt fa-sm"></i></button></td></tr></tbody></table>';
            html += '</div><div class="row"><button type="button" id="btn_add_work'+i+'" class="btn btn-sm waves-effect waves-light btn-success btn-add-work">Add Attended Work</button></div></div></div></div></div></div></div></div></div></div></div></div></div>';

            $('#add_mc_accordian').append(html);
        });

        $('#btn_add_work').click(function(){
            html2 += '<tr><th>Start Date</th><th>End Date</th><th>Total Days</th><th>Status</th><th>Action</th></tr></thead><tbody><tr><td><div class="col-md-12"><input id="workstartdate" name="workstartdate0[]" type="date" value="" class="form-control" ></div></td><td><div class="col-md-12"><input id="workenddate" name="workenddate0[]" type="date" value="" class="form-control" ></div></td><td><input type="text" id="totalwork" name="totalwork0[]" value="" class="form-control" readonly></td><td><select type="text" id="statuswork" name="statuswork0[]" class="form-control">@foreach ($worksts as $w)@if (!empty($mcdata) && $mcdata->mcinfo[0]->workinfo[0]->statuswork == $w->refcode) <option value="{{$w->refcode}}" selected>{{$w->descen}}</option>@else<option value="{{$w->refcode}}">{{$w->descen}}</option>@endif @endforeach</select></td><td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt fa-sm"></i></button></td></tr>';
            $('#attended_work_tbl').append(html2); 
        });

        $(document).on("click",".btn-add-work", function (event) {
            var btn_add_work_id = event.target.id;
            var id = btn_add_work_id.substring(btn_add_work_id.length - 1, btn_add_work_id.length);

            html2 += '<tr><th>Start Date</th><th>End Date</th><th>Total Days</th><th>Status</th><th>Action</th></tr></thead><tbody><tr><td><div class="col-md-12"><input id="workstartdate" name="workstartdate'+id+'[]" type="date" value="" class="form-control"></div></td><td><div class="col-md-12"><input id="workenddate" name="workenddate'+id+'[]" type="date" value="" class="form-control" ></div></td><td><input type="text" id="totalwork" name="totalwork'+id+'[]" value="" class="form-control" readonly></td><td><select type="text" id="statuswork" name="statuswork'+id+'[]" class="form-control">@foreach ($worksts as $w)@if (!empty($mcdata) && $mcdata->mcinfo[0]->workinfo[0]->statuswork == $w->refcode) <option value="{{$w->refcode}}" selected>{{$w->descen}}</option>@else<option value="{{$w->refcode}}">{{$w->descen}}</option>@endif @endforeach</select></td><td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt fa-sm"></i></button></td></tr>';

            $('#attended_work_tbl'+id).append(html2); 
        });

    }); 
</script>