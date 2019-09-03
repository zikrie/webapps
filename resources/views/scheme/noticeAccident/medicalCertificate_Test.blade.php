<div class="row">
    <div class="card" id="container">
        <div class="card-body">
            <form method="post" action="{{ url('/updmc') }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="caserefno" value="{{$caserefno}}">
            <div class="form-body">
            
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

            <h4 class="card-title">@lang('medicalDetails.title')</h4>
            <div class="col-md-12">
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

                <div class="col-md-12" id="mc_list">
                    <div class="table-responsive" id="table-medical">
                        <div class="form-actions text-right">
                            <button type="button" id="btn_add_mc" class="btn btn-sm waves-effect waves-light btn-info">@lang('medicalDetails.addmc')</button>
                        </div>{{-- <label class="control-label">@lang('medicalDetails.attr.medicalleave')</label> --}}
                        <table  id="table-medical-details" class="table table-sm table-bordered" data-toggle-column="first">
                            <thead>
                                <tr>
                                    <th style='width:20%'>@lang('medicalDetails.attr.type_hus')</th> 
                                    <th style='width:17%'>@lang('medicalDetails.attr.start_date')</th>
                                    <th style='width:18%'>@lang('medicalDetails.attr.end_date')</th>
                                    <th style='width:15%'>@lang('medicalDetails.attr.days_work')</th>
                                    <th style='width: 8%'>@lang('medicalDetails.attr.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-expanded="true" class="workrow">
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" name="hussts[{{ $key }}]" required>
                                                <option value="">Please select</option>
                                                @foreach($hussts as $typehus)
                                                <option value="{{ $typehus->refcode }}" {{ $typehus->refcode == $mc->hussts ? 'selected' : '' }}>{{$typehus->descen}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <input id="mcstartdate{{ $key }}" name="mcstartdate[{{ $key }}]" type="date" value="@if (!empty($mc) && $mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <input id="mcenddate{{ $key }}" name="mcenddate[{{ $key }}]" type="date" value="@if (!empty($mc) && $mc->enddate!=''){{ (DateTime::createFromFormat('Ymd', $mc->enddate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" id="totalmc{{ $key }}" name="totalmc[{{ $key }}]" value="{{ $mc->totalmc }}" class="form-control" readonly>
                                    </td>
                                    <td>
                                        <button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button>
                                        <button id="add_attended_work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                            <i class="ti-plus text" aria-hidden="true"></i>
                                            <i class="ti-plus text-active" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td>
                                        <div class="form-group">
                                            <input  name="attendedwork" type="text" value="Attended Work" class="form-control counttotalwork" readonly>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <input  name="" type="date" value="" class="form-control counttotalwork" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <input name="" type="date" value="" class="form-control counttotalwork" >
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="" value="" class="form-control" readonly>
                                    </td>
                                    <td>
                                        <button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button>
                                        {{-- <button id="add-attended-work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                            <i class="ti-plus text" aria-hidden="true"></i>
                                            <i class="ti-plus text-active" aria-hidden="true"></i>
                                        </button> 
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>     
                    </div>
                </div>

                @endforeach
                @else
                @include('noticeAccident.medicalCertificate_Test1')
                @endif

            </div>
            <div id="new-mc"></div>
            <div class="form-actions text-right">
                <button type="submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">@lang('insuredPerson.save')</button>
                <button type="button" id="btn_add_clinic" class="btn btn-sm waves-effect waves-light btn-info">@lang('medicalDetails.addClinic')</button>
            </div>

        </div>
        </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        alert("Masuk");
        var i=0;

        //Append New MC
        $('#btn_add_clinic').click(function(){
            i++;
            html = "<br><br> Clinic Name<hr>" +
            "<div class='col-md-12'>"+
                "<div class='row'>"+
                    "<div class='col-md-12'>"+
                        "<div class='form-group'>"+
                            "<label class='control-label'>@lang('medicalDetails.attr.nameAddress_clinic')</label>"+
                            "<textarea type='text' id='clinicname' name='clinicinfo' class='form-control'>@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif</textarea>"+
                        "</div>"+
                    "</div>"+
                "</div>"+
                "<div class='col-md-12'>"+
                "<div class='table-responsive' id='table-medical'>"+
                        "<div class='form-actions text-right'>"+
                        "<button type='button' id='btn_add_mc"+i"' class='btn btn-sm waves-effect waves-light btn-info'>@lang('medicalDetails.addmc')</button>"+
                        "</div>"+
                        "<table  id='table-medical-details' class='table table-sm table-bordered' data-toggle-column='first'>"+
                            "<thead>"+
                                "<tr>"+
                                    "<th style='width:20%'>Type of HUS</th>"+
                                    "<th style='width:17%'>@lang('medicalDetails.attr.start_date')</th>"+
                                    "<th style='width:18%'>@lang('medicalDetails.attr.end_date')</th>"+
                                    "<th style='width:15%'>@lang('medicalDetails.attr.days_work')</th>"+
                                    "<th style='width: 8%'>@lang('medicalDetails.attr.action')</th>"+
                                "</tr>"+
                            "</thead>"+
                            "<tbody>"+
                                "<tr data-expanded='true' class='workrow'>"+
                                    "<td>"+
                                        "<div class='form-group'>"+
                                            "<select class='form-control' name='hussts[]'>"+
                                            "<option value=''>Please select</option>"+
                                            "<option value='' selected> MC</option>"+
                                            "</select>"+
                                        "</div>"+
                                    "</td>"+
                                    "<td>"+
                                        "<div class='col-md-12'>"+
                                        " <input  name='' type='date' value='' class='form-control counttotalwork' >"+
                                        "</div>"+
                                    "</td>"+
                                    "<td>"+
                                        "<div class='col-md-12'>"+
                                            "<input name='' type='date' value='' class='form-control counttotalwork' >"+
                                        "</div>"+
                                " </td>"+
                                    "<td>"+
                                        "<input type='text' name='' value='' class='form-control' readonly>"+
                                    "</td>"+
                                    "<td>"+
                                        "<button type='button'  class='btn btn-sm btn-danger btn_del_workmc'><i class='fas fa-trash-alt fa-sm'></i></button>"+
                                        "<button id='add_attended_work"+i"' type='button' class='btn btn-info' data-toggle='button' data-more='#sh' aria-pressed='false'>"+
                                            "<i class='ti-plus text' aria-hidden='true'></i>"+
                                            "<i class='ti-plus text-active' aria-hidden='true'></i>"+
                                        "</button>"+
                                    "</td>"+
                            "</tr>"+
                            "</tbody>"+
                        "</table>"+ 
                    "</div>"+
                "</div>"+
            "</div>";

            $('#new-mc').append(html);
        });

        //add attended work
        $('button[id^=add_attended_work]').click(function(){ 
            alert(test');
            $('#table-medical-details > tbody:last-child').append('<tr><td><div class="form-group"> <input  name="attendedwork" type="text" value="Attended Work" class="form-control counttotalwork" readonly></div></td><td><div class="col-md-12"><input  name="" type="date" value="" class="form-control counttotalwork" ></div></td><td><div class="col-md-12"><input name="" type="date" value="" class="form-control counttotalwork" ></div></td><td><input type="text" name="" value="" class="form-control" readonly></td><td><button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button></td> </tr>');
        });

        //add new mc
        $('#btn_add_mc').click(function(){
            $('#table-medical-details > tbody:last-child').append('<tr data-expanded="true" class="workrow"><td><div class="form-group"><select class="form-control" name="hussts[]"><option value="">Please select</option><option value="" selected> MC</option></select></div></td><td><div class="col-md-12"><input  name="" type="date" value="" class="form-control counttotalwork" ></div></td><td><div class="col-md-12"><input name="" type="date" value="" class="form-control counttotalwork" ></div></td><td><input type="text" name="" value="" class="form-control" readonly></td><td><button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button><button id="add_attended_work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false"><i class="ti-plus text" aria-hidden="true"></i><i class="ti-plus text-active" aria-hidden="true"></i></button></td></tr>');
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

    });
</script>