<div class="row">
    <div class="col-12">
<div class="card" id="container">
  <div class="card-body">
    <form method="post" action="{{ url('/updmc') }}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="caserefno" value="{{$caserefno}}">
      <div class="form-body">
        <h5 class="card-title">@lang('medicalDetails.title')</h5>
        <hr>
        @if(Session::get('messagemc'))
      <div class="alert alert-warning">
        {{Session::get('messagemc')}}
      </div>
      @elseif (!empty($messagemc))
      <div class="alert alert-warning">
        {{$messagemc}}
      </div>
      @endif
      <br/>
      <br/>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
              <textarea type="text" id="clinicname" name="clinicinfo" class="form-control">@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif</textarea>
            </div>
          </div>
        </div>
        @if (!empty($mcdata) && $mcdata->mcinfo!=null)
        @foreach($mcdata->mcinfo as $key => $mc)
        <div class="row mcitem" id="mc_list">
          <div class="col-md-12">
            <div id="mc_accordion{{ $key }}" role="tablist" aria-multiselectable="true">
              <div class="card m-b-0">
                <div class="card-header" role="tab" id="attendwork">
                  <h6 class="card-subtitle">
                    <a class="collapsed link" data-toggle="collapse" data-parent="#mc_accordion{{ $key }}" href="#mc_collapse{{ $key }}" aria-expanded="false" aria-controls="collapseTwo2">>  @lang('medicalDetails.attr.medicalleave') @if (!empty($mc) && $mc->startdate!='')({{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('d/m/Y') }} - {{ (DateTime::createFromFormat('Ymd', $mc->enddate))->format('d/m/Y') }})@endif</a>
                    <button type="button" id="btn_del_mc{{ $key }}" class="close btn_del_mc" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </h6>
                </div>
                <div id="mc_collapse{{ $key }}" class="collapse" role="tabpanel">
                  <div class="card-body">
                    <div class='row'>       
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label">@lang('medicalDetails.attr.type_hus')</label>
                            <select class="form-control" name="hussts[{{ $key }}]" required>
                              <option value="">Please select</option>
                              @foreach($hussts as $typehus)
                              <option value="{{ $typehus->refcode }}" {{ $typehus->refcode == $mc->hussts ? 'selected' : '' }}>{{$typehus->descen}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label" >@lang('medicalDetails.attr.start_mc')</label>
                            <input id="mcstartdate{{ $key }}" name="mcstartdate[{{ $key }}]" type="date" value="@if (!empty($mc) && $mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label" >@lang('medicalDetails.attr.end_mc')</label>
                            <input id="mcenddate{{ $key }}" name="mcenddate[{{ $key }}]" type="date" value="@if (!empty($mc) && $mc->enddate!=''){{ (DateTime::createFromFormat('Ymd', $mc->enddate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                            <input type="text" id="totalmc{{ $key }}" name="totalmc[{{ $key }}]" value="{{ $mc->totalmc }}" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <label class="control-label" id='lblmcerror{{ $key }}' style='color:red'></label>
                    </div>
                      <br/>
                    <div class="row">
                      <div class="col">
                        <div id="work_accordion{{ $key }}" role="tablist" aria-multiselectable="true">
                          <div class="card m-b-0">
                            <div class="card-header" role="tab" id="attendwork">
                              <h6 class="card-subtitle">
                                <a class="collapsed link" data-toggle="collapse" data-parent="#work_accordion{{ $key }}" href="#work_collapse{{ $key }}" aria-expanded="false" aria-controls="collapseTwo3">
                                  >  @lang('medicalDetails.attr.attended_work')
                                </a>
                              </h6>
                            </div>
                            <div id="work_collapse{{ $key }}" class="collapse" role="tabpanel" aria-labelledby="attendwork">
                              <div class="card-body">
                                <div class="row">
                                  <table id="attended_work_tbl{{ $key }}" class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                      <tr>
                                        <th style='width:17%'>@lang('medicalDetails.attr.start_date')</th>
                                        <th style='width:18%'>@lang('medicalDetails.attr.end_date')</th>
                                        <th style='width:15%'>@lang('medicalDetails.attr.days_work')</th>
                                        <th style='width:50%'>@lang('medicalDetails.attr.status')</th>
                                        <th style='width:50%'>@lang('medicalDetails.attr.action')</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if (!empty($mc->workinfo) && $mc->workinfo != '')
                                      @foreach($mc->workinfo as $key2 => $work)
                                      <tr data-expanded="true" class="workrow">
                                        <td>
                                          <div class="col-md-12">
                                            <input id="workstartdate{{ $key }}-{{ $key2 }}" name="workstartdate{{ $key }}[]" type="date" value="{{ date('Y-m-d', strtotime($work->workstartdate)) }}" class="form-control counttotalwork" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col-md-12">
                                            <input id="workenddate{{ $key }}-{{ $key2 }}" name="workenddate{{ $key }}[]" type="date" value="{{ date('Y-m-d', strtotime($work->workenddate)) }}" class="form-control counttotalwork" >
                                          </div>
                                        </td>
                                        <td>
                                          <input type="text" id="totalwork{{ $key }}-{{ $key2 }}" name="totalwork{{ $key }}[]" value="{{ $work->totalwork }}" class="form-control" readonly>
                                        </td>
                                        <td>
                                          <select type="text" id="statuswork" name="statuswork{{ $key }}[]" class="form-control">
                                            <option value="">Please select</option>
                                            @foreach ($worksts as $w)
                                            <option value="{{ $w->refcode }}" {{ $w->refcode == $work->statuswork ? 'selected' : '' }}>{{ $w->descen }}</option>
                                            @endforeach
                                          </select>
                                        </td>
                                        <td><button type="button" id="btn_del_workmc{{ $key }}-{{ $key2 }}" class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button></td>
                                      </tr>
                                      <label class="control-label" id='lblworkerror{{ $key }}' style='color:red'></label>
                                      @endforeach
                                      @else
                                     {{-- <tr data-expanded="true" class="workrow">
                                        <td>
                                          <div class="col-md-12">
                                            <input id="workstartdate{{ $key }}-{{ $key2 }}" name="workstartdate{{ $key }}[]" type="date" class="form-control counttotalwork" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="col-md-12">
                                            <input id="workenddate{{ $key }}-{{ $key2 }}" name="workenddate{{ $key }}[]" type="date"  class="form-control counttotalwork" >
                                          </div>
                                        </td>
                                        <td>
                                          <input type="text" id="totalwork{{ $key }}-{{ $key2 }}" name="totalwork{{ $key }}[]" class="form-control" readonly>
                                        </td>
                                        <td>
                                          <select type="text" id="statuswork" name="statuswork{{ $key }}[]" class="form-control">
                                            @foreach ($worksts as $w)
                                            <option value="{{ $w->refcode }}">{{ $w->descen }}</option>
                                            @endforeach
                                          </select>
                                        </td>
                                        <td><button type="button" id="btn_del_workmc{{ $key }}-{{ $key2 }}" class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button></td>
                                      </tr>--}}
                                      <label class="control-label" id='lblworkerror{{ $key }}' style='color:red'></label>
                                      @endif
                                    </tbody>
                                  </table>
                                </div>
                                <div class="row">
                                  <button type="button" id="btn_add_workmc{{ $key }}" class="btn btn-sm waves-effect waves-light btn-success btn_add_workmc">@lang('medicalDetails.addwork')</button>
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
        </div>
        @endforeach
        @else
        @include('noticeAccident.medicalCertificate_add')
        @endif

        <div id="add_mc_accordian">
        </div>
      
      <br>
      
      <div class="form-actions text-right">
        
        <button type="submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">
        @lang('insuredPerson.save')</button>
          <button type="button" id="btn_add_mc" class="btn btn-sm waves-effect waves-light btn-info">@lang('medicalDetails.addmc')</button>
      
      </div>

      </div>

    </form>
  </div>
</div>
    </div>
</div>

{{-- Confirm modal --}}
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
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
        <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" id="btn_delete" class="btn btn-danger btn-sm" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

@php($no_mcinfo = 0)
@php($mcdata == null ? $no_mcinfo = 0 : ($mcdata->mcinfo == null ? $no_mcinfo = 0 : $no_mcinfo = count($mcdata->mcinfo)))

<script>
$(document).ready(function() {

  var no_mc = {!! $no_mcinfo !!};

  if(no_mc > 0){
    var i = no_mc-1 ; var j = 0;
  }else{
    var i = 0; var j = 0;
  }

  var html; var html2;

  // Append new mc
  $('#btn_add_mc').click(function(){
    i++;

    html =  "<div class='row mcitem' id='mc_list'>"+
            "<div class='col-md-12'>"+
              "<div id='mc_accordion"+i+"' role='tablist' aria-multiselectable='true'>"+
                "<div class='card m-b-0'>"+
                "<div class='card-header' role='tab' id='attendwork'>"+//irina add 11072019
                  "<h6 class='card-subtitle'>"+
                    "<a class='collapsed link' data-toggle='collapse' data-parent='#mc_accordion"+i+"' href='#mc_collapse"+i+"' aria-expanded='false'>> Medical Leave</a>"+
                    "<button type='button' id='btn_del_mc"+i+"' class='close btn_del_mc' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+
                  "</h6>"+
                  "</div>"+//irina add 11072019
                  "<div id='mc_collapse"+i+"' class='collapse' role='tabpanel'><div class='card-body'>"+
                    "<div class='row'>"+
                      "<div class='col-md-3'>"+
                        "<div class='form-group'>"+
                          "<label class='control-label'>Type Of HUS</label>"+
                          "<select class='form-control' name='hussts["+i+"]' required>"+
                            "<option value=''>Please select</option>"+
                            @foreach($hussts as $typehus)
                            "<option value='{{$typehus->refcode}}'>{{$typehus->descen}}</option>"+
                            @endforeach
                          "</select>"+
                        "</div>"+
                      "</div>"+
                      "<div class='col-md-3'>"+
                        "<div class='form-group'>"+
                          "<label class='control-label'>@lang('medicalDetails.attr.start_mc')</label>"+
                          "<input id='mcstartdate"+i+"' name='mcstartdate["+i+"]' type='date' class='form-control counttotalmc' required>"+
                        "</div>"+
                      "</div>"+
                      "<div class='col-md-3'>"+
                        "<div class='form-group'>"+
                          "<label class='control-label'>@lang('medicalDetails.attr.end_mc')</label>"+
                          "<input id='mcenddate"+i+"' name='mcenddate["+i+"]' type='date' class='form-control counttotalmc' required>"+
                        "</div>"+
                      "</div>"+
                      "<div class='col-md-3'>"+
                        "<div class='form-group'>"+
                          "<label class='control-label'>@lang('medicalDetails.attr.total_days')</label>"+
                          "<input type='text' id='totalmc"+i+"' name='totalmc["+i+"]' class='form-control' readonly>"+
                        "</div>"+
                      "</div>"+
                      "<label class='control-label' id='lblmcerror"+i+"' style='color:red'></label>"+
                    "</div>"+
                    "<br/>"+
                    "<div class='row'>"+
                      "<div class='col'>"+
                        "<div id='work_accordion"+i+"' role='tablist' aria-multiselectable='true'>"+
                          "<div class='card m-b-0'>"+
                          "<div class='card-header' role='tab' id='attendwork'>"+
                            "<h6 class='card-subtitle'>"+
                              "<a class='collapsed link' data-toggle='collapse' data-parent='#work_accordion"+i+"' href='#work_collapse"+i+"' aria-expanded='false' aria-controls='collapseTwo3'>> Attended Work</a>"+
                            "</h6>"+
                            "</div>"+
                            "<div id='work_collapse"+i+"' class='collapse' role='tabpanel'>"+
                              "<div class='card-body'>"+
                                "<div class='row'>"+
                                  "<table id='attended_work_tbl"+i+"' class='table table-sm table-bordered' data-toggle-column='first'>"+
                                    "<thead>"+
                                      "<tr>"+
                                        "<th>Start Date</th>"+
                                        "<th>End Date</th>"+
                                        "<th>Total Days</th>"+
                                        "<th>Status</th>"+
                                        "<th>Action</th>"+
                                      "</tr>"+
                                    "</thead>"+
                                    "<tbody>"+
                                      "<tr class='workrow'>"+
                                        "<td><div class='col-md-12'><input id='workstartdate"+i+"-"+j+"' name='workstartdate"+i+"[]' type='date' class='form-control counttotalwork'></div></td>"+
                                        "<td><div class='col-md-12'><input id='workenddate"+i+"-"+j+"' name='workenddate"+i+"[]' type='date' class='form-control counttotalwork'></div></td>"+
                                        "<td><input type='text' id='totalwork"+i+"-"+j+"' name='totalwork"+i+"[]' class='form-control' readonly></td>"+
                                        "<td>"+
                                          "<select type='text' id='statuswork"+i+"-"+j+"' name='statuswork"+i+"[]' class='form-control'>"+
                                            "<option value=''>Please select</option>"+
                                            @foreach ($worksts as $w)
                                              "<option value='{{$w->refcode}}'>{{$w->descen}}</option>"+
                                            @endforeach
                                          "</select>"+
                                        "</td>"+
                                        "<td><button type='button' id='btn_del_workmc"+i+"-"+j+"' class='btn btn-sm btn-danger btn_del_work'><i class='fas fa-trash-alt fa-sm'></i></button></td>"+
                                      "</tr>"+
                                    "</tbody>"+
                                  "</table>"+
                                "</div>"+
                                "<label class='control-label' id='lblworkerror"+i+"' style='color:red'></label>"+
                                "<div class='row'>"+
                                  "<button type='button' id='btn_add_workmc"+i+"' class='btn btn-sm waves-effect waves-light btn-success btn_add_workmc'>Add Attended Work</button>"+
                                "</div>"+
                              "</div>"+
                            "</div>"+
                          "</div>"+
                        "</div>"+
                      "</div>"+
                    "</div>"+
                  "</div>"+
                "</div>"+
              "</div>"+
            "</div>"+
          "</div>";

    $('#add_mc_accordian').append(html);
  });

  // Append new work
  $('#container').on('click','.btn_add_workmc',function(e){
    e.preventDefault();
    var btn_add_work_id = event.target.id;
    var split_id = btn_add_work_id.split("c");
    var mcid = split_id[1];
    var norows = $('#attended_work_tbl'+mcid+' tr.workrow').length;

    html2 = "<tr class='workrow'>"+
                "<td><div class='col-md-12'><input id='workstartdate"+mcid+"-"+norows+"' name='workstartdate"+mcid+"[]' type='date' class='form-control counttotalwork'></div></td>"+
                "<td><div class='col-md-12'><input id='workenddate"+mcid+"-"+norows+"' name='workenddate"+mcid+"[]' type='date' class='form-control counttotalwork'></div></td>"+
                "<td><input type='text' id='totalwork"+mcid+"-"+norows+"' name='totalwork"+mcid+"[]' class='form-control' readonly></td>"+
                "<td><select type='text' id='statuswork"+mcid+"-"+norows+"' name='statuswork"+mcid+"[]' class='form-control'>@foreach ($worksts as $w)@if (!empty($mcdata) && !empty($mcdata->mcinfo[0]->workinfo[0]) && $mcdata->mcinfo[0]->workinfo[0]->statuswork == $w->refcode) <option value='{{$w->refcode}}' selected>{{$w->descen}}</option>@else<option value='{{$w->refcode}}'>{{$w->descen}}</option>@endif @endforeach</select></td>"+
                "<td><button type='button' id='btn_del_workmc"+mcid+"-"+norows+"' class='btn btn-sm btn-danger btn_del_workmc'><i class='fas fa-trash-alt fa-sm'></i></button></td>"+
              "</tr>";

    $('#attended_work_tbl'+mcid).append(html2);
  });

  // Get the total mc day
  $('#container').on('change','.counttotalmc',function(){
    var current_id = event.target.id;
    var id = current_id.substring(current_id.length - 1, current_id.length);
    counttotal(id);
  });

  // Get the total work day
  $('#container').on('change','.counttotalwork',function(){
    var current_id = event.target.id;
    //alert(current_id);
    var half_id = current_id.split("te");
    var split_id = half_id[1].split("-");
    var mcid = split_id[0];
    var workid = split_id[1];
    //alert('MC id: ' + mcid + '| Work id: ' + workid);
    counttotalwork(mcid,workid);
  });

  // Delete mc
  $('#container').on('click','.btn_del_mc',function(){
    var delete_id = $(this).attr('id');
    $("#deletemodal").modal('show');
    $("#deletemodal .modal-footer button").on('click', function(e) {
      var btn_id = event.target.id;
      // alert('tolak berapa kali? ' + i);
      if(btn_id == 'btn_delete'){
        e.preventDefault();
        $("#"+delete_id).closest("#mc_list").remove();
      }

    });
  });

  // Delete work
  $('#container').on('click','.btn_del_workmc',function(){
    var delete_id = $(this).attr('id');
    $("#deletemodal").modal('show');
    $("#deletemodal .modal-footer button").on('click', function(e) {
      var btn_id = event.target.id;
      if(btn_id == 'btn_delete'){
        e.preventDefault();
        $("#"+delete_id).closest("tr").remove();
        
      }
    });
  });

  function counttotalwork(mcid,workid){
    // id adalah nilai urutan mc
    // x adalah nilai urutan work
    var startdate = document.getElementById('workstartdate'+mcid+'-'+workid).value;
    // alert('startdate :' + startdate);
    var enddate = document.getElementById('workenddate'+mcid+'-'+workid).value;
    // alert('enddate :' + enddate);
    var total = document.getElementById('totalwork'+mcid+'-'+workid);
    var lblmcerror = document.getElementById('lblworkerror'+mcid);
    var btnsubmit = document.getElementById('btnsubmit');

    if(startdate != "" && enddate != ""){
      var totalwork = getdays(startdate,enddate);
      if (totalwork <= 0){
        total.value = "";
        lblmcerror.innerHTML  = 'Work end date must not before work start date';
        btnsubmit.disabled = true;
      }
      else{
        lblmcerror.innerHTML  = '';
        btnsubmit.disabled = false;
      }
      total.value = totalwork;
    }else{
      total.value = "";
    }
  }

  function counttotal(mcid){
    var startdate = document.getElementById('mcstartdate'+mcid).value;
    var enddate = document.getElementById('mcenddate'+mcid).value;
    var total = document.getElementById('totalmc'+mcid);
    var lblmcerror = document.getElementById('lblmcerror'+mcid);
    var btnsubmit = document.getElementById('btnsubmit');
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
    var days = getdays(currdate,startdate);
    var accddate = document.getElementById('accddate').value;
    var days2 = getdays(accddate,startdate);

    // Check the mc start date must before the current date
    if(days > 1){
      lblmcerror.innerHTML = 'MC start date must not after current date';
      total.value = '';
      btnsubmit.disabled = true;
      return;
    }else{
      lblmcerror.innerHTML = '';
      btnsubmit.disabled = false;
    }

    // Check the mc start date must after accident date
    if(days2 <= 0){
      lblmcerror.innerHTML = 'MC start date must not before accident date';
      total.value = '';
      btnsubmit.disabled = true;
      return;
    }else{
      lblmcerror.innerHTML = '';
      btnsubmit.disabled = false;
    }

    // Count the total mc work
    if(startdate != "" && enddate != ""){
      var totalmc = getdays(startdate,enddate);
      if(totalmc <= 0){
        lblmcerror.innerHTML = 'MC end date must not before MC start date';
        total.value = '';
        btnsubmit.disabled = true;
        return;
      }else{
        lblmcerror.innerHTML = '';
        btnsubmit.disabled = false;
      }
      total.value = totalmc;
      
      return;
    }else{
      total.value = '';
      return;
    }

  }

  function getdays(startdate,enddate){
    var dropdt = new Date(startdate);
    var pickdt = new Date(enddate);
    return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
  }

}); 
</script>