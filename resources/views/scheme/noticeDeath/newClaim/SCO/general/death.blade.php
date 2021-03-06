<div class="row">
  <div class="col-12">
    <div class="card" id="container">
      <div class="card-body">
        <form action="/deathDetails" method="POST" id="reset_death">
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
          
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">@lang('scheme/deathDetails.attr.date_death')</label><span class="required">*</span>
                  @if(!empty($deathdetail) && $deathdetail->dodeath !='')
                  <input type="date" id="dodeath" name="dodeath" value="{{substr($deathdetail->dodeath,0,4)}}-{{substr($deathdetail->dodeath,4,2)}}-{{substr($deathdetail->dodeath,6,2)}}" class="form-control clear_death" required>
                  @else
                  <input type="date" id="dodeath" name="dodeath" value="" class="form-control clear_death" required>
                  @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">Age At The Time of Death</label><span class="required">*</span>
                  {{-- @if(!empty($deathdetail) && $deathdetail->dodeath !='')
                  <input type="date" id="dodeath" name="dodeath" value="{{substr($deathdetail->dodeath,0,4)}}-{{substr($deathdetail->dodeath,4,2)}}-{{substr($deathdetail->dodeath,6,2)}}" class="form-control clear_death" required>
                  @else --}}
                  <input type="text" id="dodeath" name="dodeath" value="" class="form-control clear_death" required>
                  {{-- @endif --}}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">Source of Death Information</label><span class="required">*</span>
                  <select class="form-control" name="statutorybody" id="statutorybody"> 
                      <option value="">Please Select</option>
                      <option value="counter">OTC</option>
                      <option value="portal">Portal</option>
                  </select>    
              </div>
            </div>
          </div>
          {{-- <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                 <label class="control-label">@lang('scheme/deathDetails.attr.cause_death')</label><span class="required">*</span>
                 @if(!empty($deathdetail) && $deathdetail->deathcause !='')
                 <textarea id="deathcause" name="deathcause" value="{{ $deathdetail->deathcause }}" class="form-control clear_death"></textarea>
                 @else
                 <textarea id="deathcause" name="deathcause" value="" class="form-control clear_death"></textarea>
                 @endif
              </div>
            </div>
          </div> --}}
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group">
                  <label class="control-label">@lang('scheme/deathDetails.attr.cause_death')</label><span class="required">*</span>
                  @if(!empty($deathdetail) && $deathdetail->deathcause !='')
                  <textarea id="deathcause" name="deathcause" value="{{ $deathdetail->deathcause }}" class="form-control clear_death"></textarea>
                  @else
                  <textarea id="deathcause" name="deathcause" value="" class="form-control clear_death"></textarea>
                  @endif
              </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-4" id="death_accident">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/noticetype.attr.death_accident')</label>
                    <select name="select_death_accident" id="select_death_accident" class="form-control clearfields">
                        <option value="please select" selected hidden readonly>
                            @lang('scheme/noticetype.attr.please_select')</option>
                        <option value="Yes">@lang('scheme/noticetype.attr.yes')</option>
                        <option value="No">@lang('scheme/noticetype.attr.no')</option>
                    </select>
                </div>
            </div>
          </div>
          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                 <label class="control-label">@lang('scheme/deathDetails.attr.status')</label>
                 <select class="form-control clear_death" name="obsts"> 
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    @foreach($maritalsts as $id)
                 @if (!empty($deathdetail) && $deathdetail->obsts == $id->refcode)
                 <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                 @else
                 <option value="{{$id->refcode}}">{{$id->descen}}</option>
                 @endif
                 @endforeach
              </select>
              </div>
            </div>
          </div>

          <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                <label class="control-label">@lang('scheme/deathDetails.attr.periodical')</label>
                  <select class="form-control" name="inpayment">
                    <option>Please select</option>
                    <option value='Y'>@lang('option.yes')</option>
                    <option value='N'>@lang('option.no')</option>
                  </select>    
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="periodical">
            <div class="table-responsive m-t-40">
              <table id="tablePeriodical" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Benefit Type</th>
                    <th>Benefit Ref No.</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>PKT</td>
                    <td>PKT1234</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <br>
          {{-- <div class="row p-t-20">
            <div class="col-md-4">
              <div class="form-group ">
                <label class="control-label">@lang('scheme/deathDetails.attr.periodical')</label>
                  <select class="form-control" name="inpayment">
                    <option>Please select</option>
                    <option value='pencen_ilat'>@lang('option.pencen_ilat')</option>
                    <option value='huk'>@lang('option.huk')</option>
                  </select>    
              </div>
            </div>
          </div> --}}
       
          {{-- @if({{Session::get('select_death_accident')}} == 'Yes') --}}
          
          

          <!-- ------------------------------------- If the death due to accident = Yes --------------------------------------------------- -->
          @if(Session::get('select_death_accident') == 'Yes')
            <h6 class="card-title-sub">@lang('scheme/accidentDetails.title')</h6>
            <hr>
            <div class="row">
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.accident_date')</label><span class="required">*</span>
                    @if (!empty($accinfo))
                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr($accinfo->accddate,0,4)}}-{{substr($accinfo->accddate,4,2)}}-{{substr($accinfo->accddate,6,2)}}">
                    @else
                    @if (Session::get('accddate'))
                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}">
                    @else
                    <input type="date" class="form-control" id="accddate" name="accddate" value="">
                    @endif
                    @endif
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.time_accident')</label><span class="required">*</span>
                  <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                    @if (!empty($accinfo))
                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr($accinfo->accdtime,0,2)}}:{{substr($accinfo->accdtime,2,2)}}:{{substr($accinfo->accdtime,4,2)}}">
                    @else
                    @if (Session::get('accdtime'))
                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="{{substr(Session::get('accdtime'),0,2)}}:{{substr(Session::get('accdtime'),2,2)}}:{{substr(Session::get('accdtime'),4,2)}}">
                    @else
                    <input type="time" class="form-control" id="timeaccident" name="timeaccident" value="">
                    @endif
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-lg-4">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.place_accident')</label><span class="required">*</span>
                  <select class="form-control" name="placeaccd" id="placeaccd" onchange="placeacc()">
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
              <div class="col-md-12 col-lg-8">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.when_accident')</label><span class="required">*</span>
                    <select class="form-control" name="accwhen" id="accwhen" style="width: 100%; height:36px;">
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
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('scheme/accidentDetails.attr.how_accident')</label><span class="required">*</span>
                    <textarea type="text" id="how" name="how" class="form-control" value="">@if(!empty($accinfo)){{$accinfo->how}} @endif</textarea>
                    </div>
                </div>
            </div>            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.reason_travelling')</label>
                  <textarea type="text" id="reason" name="reason" class="form-control" placeholder="">@if(!empty($accinfo)){{$accinfo->reasontravel}} @endif</textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.injury_desc')</label>
                  <textarea type="text" id="injurydesc"  name="injurydesc" class="form-control" placeholder="">@if(!empty($accinfo)){{$accinfo->injurydesc}} @endif</textarea>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>@lang('scheme/accidentDetails.attr.accident_workingDay')</label>
                        <select class="form-control" name="accdworkingday">
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
            <div class="row">    
              <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.start_workingTime')</label>
                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                    data-autoclose="true">
                    <input type="time" class="form-control" name="startworkingtime" value="@if(!empty($accinfo)&&$accinfo->startworktime!=''){{substr($accinfo->startworktime,0,2)}}:{{substr($accinfo->startworktime,2,2)}}:{{substr($accinfo->startworktime,4,2)}}@endif">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label">@lang('scheme/accidentDetails.attr.rest_period')</label>
                  <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                  data-autoclose="true">
                  <input type="time" class="form-control" name="restperiod" value="@if(!empty($accinfo)&&$accinfo->restperiod!=''){{substr($accinfo->restperiod,0,2)}}:{{substr($accinfo->restperiod,2,2)}}:{{substr($accinfo->restperiod,4,2)}}@endif">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.end_workingTime')</label>
                    <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                      <input type="time" class="form-control" name="endworkingtime" value="@if(!empty($accinfo)&&$accinfo->endworktime!=''){{substr($accinfo->endworktime,0,2)}}:{{substr($accinfo->endworktime,2,2)}}:{{substr($accinfo->endworktime,4,2)}}@endif">
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.witness_name')</label>
                    <input type="text" id="witnessname" name="witnessname" class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/accidentDetails.attr.witness_no')</label>
                    <input type="text" id="witnesscontact" name="witnesscontact"  class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnesscontact}} @endif">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label
                    class="control-label">@lang('scheme/accidentDetails.attr.nameAddress_clinic')</label>
                    <textarea type="text" id="clinicinfo" name="clinicinfo" class="form-control">@if(!empty($accinfo)){{$accinfo->clinicinfo}} @endif</textarea>
                </div>
              </div>
            </div>
    
        <!-- -------------------------------------------------   MC DETAILS ------------------------------------------------------- -->
            <div class="form-body" id="container">
              <h6 class="card-title-sub">@lang('scheme/mc.title')</h6>
              <hr>
              
              <div class="row">
                  <div class="col-md-12" id="container">
                      <div class="table-responsive" id="table-medical">
                          <div class="form-actions text-right">
                              <button type="button" id="btn_add_mc0" value='0' class="btn btn-sm waves-effect waves-light btn-info">@lang('scheme/mc.addMc')</button>
                          </div>{{-- <label class="control-label">@lang('mc.attr.medicalleave')</label> --}}
                          <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                              <thead>
                                  <tr>
                                      <th style='width:15%'>@lang('scheme/mc.attr.type_hus')</th> 
                                      <th style='width:20%'>@lang('scheme/mc.attr.nameAddress_clinic')</th> 
                                      <th style='width:17%'>@lang('scheme/mc.attr.start_date')</th>
                                      <th style='width:18%'>@lang('scheme/mc.attr.end_date')</th>
                                      <th style='width:15%'>@lang('scheme/mc.attr.days_work')</th>
                                      <th style='width:10%'>@lang('scheme/mc.attr.action')</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr data-expanded="true" class="workrow" id="tr0_0">
                                      <td>
                                          <div class="col-md-12">
                                              <select class="form-control" name="hussts[]">
                                              <option value="">Please select</option>
                                              <option value="" selected> MC </option>
                                              <option value="" > Light Duty </option>
                                              </select>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="clinicname" name="clinicinfo" type="text" value="@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input id="mcstartdate_0_0" name="mcstartdate_0_0[]" type="date" value="@if (!empty($mc) && $mc->startdate!=''){{ (DateTime::createFromFormat('Ymd', $mc->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" required>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input type="date" id="mcenddate_0_0" name="mcenddate_0_0[]" value="" class="form-control " >
                                          </div>
                                      </td>
                                      <td>
                                          <input type="text" id="totalmc_0_0" name="totalmc_0_0[]" value="" class="form-control" readonly>
                                      </td>
                                      <td>
                                          <button type="button"  class="btn btn-sm btn-danger btn_del_workmc" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>
                                          <button id="add_attended_work0_0" value='0_0' type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
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
                                              <input  name="" type="date" value="" id="workstartdatedate0" name="workstartdate0[]" class="form-control counttotalwork" >
                                          </div>
                                      </td>
                                      <td>
                                          <div class="col-md-12">
                                              <input name="" type="date" value="" id="workenddate0" name="workenddate0[]" class="form-control counttotalwork" >
                                          </div>
                                      </td>
                                      <td>
                                          <input type="text" value="" id="totalwork0" name="totalwork0[]" class="form-control" readonly>
                                      </td>
                                      <td>
                                          <button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button>
                                          <button id="add-attended-work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                              <i class="ti-plus text" aria-hidden="true"></i>
                                              <i class="ti-plus text-active" aria-hidden="true"></i>
                                          </button> 
                                      </td>
                                  </tr> --}}
                              </tbody>
                          </table>     
                          <label class="control-label" id='lblmcerror0' style='color:red'></label>
                      </div>
                  </div>
              </div>
            </div>
            @endif

            <div id="add_mc_accordian">
            </div><br>
            <div class="form-actions text-right">
                <button type="submit" name="action" value="Submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">@lang('button.save')</button>
                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                
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

  
  addmc(0);
  add_attend_work(0,0);
  modal_delete();
  totalmc();
  //alert("Masuk");
  var i=0;

  var no_mc = {!! $no_mcinfo !!};

  if(no_mc > 0){
    var i = no_mc-1 ; var j = 0;
  }else{
    var i = 0; var j = 0;
  }

  var html; var html2;

  // Append new mc
  // $('#btn_add_mc').click(function(){
  //   i++;

  //   html =  "<div class='row mcitem' id='mc_list'>"+
  //           "<div class='col-md-12'>"+
  //             "<div id='mc_accordion"+i+"' role='tablist' aria-multiselectable='true'>"+
  //               "<div class='card m-b-0'>"+
  //               "<div class='card-header' role='tab' id='attendwork'>"+//irina add 11072019
  //                 "<h6 class='card-subtitle'>"+
  //                   "<a class='collapsed link' data-toggle='collapse' data-parent='#mc_accordion"+i+"' href='#mc_collapse"+i+"' aria-expanded='false'>> Medical Leave</a>"+
  //                   "<button type='button' id='btn_del_mc"+i+"' class='close btn_del_mc' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+
  //                 "</h6>"+
  //                 "</div>"+//irina add 11072019
  //                 "<div id='mc_collapse"+i+"' class='collapse' role='tabpanel'><div class='card-body'>"+
  //                   "<div class='row'>"+
  //                     "<div class='col-md-3'>"+
  //                       "<div class='form-group'>"+
  //                         "<label class='control-label'>Type Of HUS</label>"+
  //                         "<select class='form-control' name='hussts["+i+"]'>"+
  //                           "<option value=''>Please select</option>"+
  //                           @foreach($hussts as $typehus)
  //                           "<option value='{{$typehus->refcode}}'>{{$typehus->descen}}</option>"+
  //                           @endforeach
  //                         "</select>"+
  //                       "</div>"+
  //                     "</div>"+
  //                     "<div class='col-md-3'>"+
  //                       "<div class='form-group'>"+
  //                         "<label class='control-label'>@lang('scheme/mc.attr.start_mc')</label>"+
  //                         "<input id='mcstartdate"+i+"' name='mcstartdate["+i+"]' type='date' class='form-control counttotalmc'>"+
  //                       "</div>"+
  //                     "</div>"+
  //                     "<div class='col-md-3'>"+
  //                       "<div class='form-group'>"+
  //                         "<label class='control-label'>@lang('scheme/mc.attr.end_mc')</label>"+
  //                         "<input id='mcenddate"+i+"' name='mcenddate["+i+"]' type='date' class='form-control counttotalmc'>"+
  //                       "</div>"+
  //                     "</div>"+
  //                     "<div class='col-md-3'>"+
  //                       "<div class='form-group'>"+
  //                         "<label class='control-label'>@lang('scheme/mc.attr.total_days')</label>"+
  //                         "<input type='text' id='totalmc"+i+"' name='totalmc["+i+"]' class='form-control' readonly>"+
  //                       "</div>"+
  //                     "</div>"+
  //                     "<label class='control-label' id='lblmcerror"+i+"' style='color:red'></label>"+
  //                   "</div>"+
  //                   "<br/>"+
  //                   "<div class='row'>"+
  //                     "<div class='col'>"+
  //                       "<div id='work_accordion"+i+"' role='tablist' aria-multiselectable='true'>"+
  //                         "<div class='card m-b-0'>"+
  //                         "<div class='card-header' role='tab' id='attendwork'>"+
  //                           "<h6 class='card-subtitle'>"+
  //                             "<a class='collapsed link' data-toggle='collapse' data-parent='#work_accordion"+i+"' href='#work_collapse"+i+"' aria-expanded='false' aria-controls='collapseTwo3'>> Attended Work</a>"+
  //                           "</h6>"+
  //                           "</div>"+
  //                           "<div id='work_collapse"+i+"' class='collapse' role='tabpanel'>"+
  //                             "<div class='card-body'>"+
  //                               "<div class='row'>"+
  //                                 "<table id='attended_work_tbl"+i+"' class='table table-sm table-bordered' data-toggle-column='first'>"+
  //                                   "<thead>"+
  //                                     "<tr>"+
  //                                       "<th>Start Date</th>"+
  //                                       "<th>End Date</th>"+
  //                                       "<th>Total Days</th>"+
  //                                       "<th>Status</th>"+
  //                                       "<th>Action</th>"+
  //                                     "</tr>"+
  //                                   "</thead>"+
  //                                   "<tbody>"+
  //                                     "<tr class='workrow'>"+
  //                                       "<td><div class='col-md-12'><input id='workstartdate"+i+"-"+j+"' name='workstartdate"+i+"[]' type='date' class='form-control counttotalwork'></div></td>"+
  //                                       "<td><div class='col-md-12'><input id='workenddate"+i+"-"+j+"' name='workenddate"+i+"[]' type='date' class='form-control counttotalwork'></div></td>"+
  //                                       "<td><input type='text' id='totalwork"+i+"-"+j+"' name='totalwork"+i+"[]' class='form-control' readonly></td>"+
  //                                       "<td>"+
  //                                         "<select type='text' id='statuswork"+i+"-"+j+"' name='statuswork"+i+"[]' class='form-control'>"+
  //                                           "<option value=''>Please select</option>"+
  //                                           @foreach ($worksts as $w)
  //                                             "<option value='{{$w->refcode}}'>{{$w->descen}}</option>"+
  //                                           @endforeach
  //                                         "</select>"+
  //                                       "</td>"+
  //                                       "<td><button type='button' id='btn_del_workmc"+i+"-"+j+"' class='btn btn-sm btn-danger btn_del_work'><i class='fas fa-trash-alt fa-sm'></i></button></td>"+
  //                                     "</tr>"+
  //                                   "</tbody>"+
  //                                 "</table>"+
  //                               "</div>"+
  //                               "<label class='control-label' id='lblworkerror"+i+"' style='color:red'></label>"+
  //                               "<div class='row'>"+
  //                                 "<button type='button' id='btn_add_workmc"+i+"' class='btn btn-sm waves-effect waves-light btn-success btn_add_workmc'>Add Attended Work</button>"+
  //                               "</div>"+
  //                             "</div>"+
  //                           "</div>"+
  //                         "</div>"+
  //                       "</div>"+
  //                     "</div>"+
  //                   "</div>"+
  //                 "</div>"+
  //               "</div>"+
  //             "</div>"+
  //           "</div>"+
  //         "</div>";

  //   $('#add_mc_accordian').append(html);
  // });

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
    $('#deletemodal').modal('show');
    $("#deletemodal .modal-footer button").on('click', function(e) {
      var btn_id = e.target.id;
      if(btn_id == 'btn_delete'){
        $("#"+delete_id).closest("#mc_list").remove();
      }

    });
  });

  // Delete work
  $('#container').on('click','.btn_del_workmc',function(){
    var delete_id = $(this).attr('id');
    $('#deletemodal').modal('show');
    $("#deletemodal .modal-footer button").on('click', function(e) {
      var btn_id = event.target.id;
      if(btn_id == 'btn_delete'){
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
        lblmcerror.innerHTML  = 'End date must not before start date';
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
      lblmcerror.innerHTML = 'Start date must not after current date';
      total.value = '';
      btnsubmit.disabled = true;
      return;
    }else{
      lblmcerror.innerHTML = '';
      btnsubmit.disabled = false;
    }

    // Check the mc start date must after accident date
    if(days2 <= 0){
      lblmcerror.innerHTML = 'Start date must not before accident date';
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
        lblmcerror.innerHTML = 'End date must not before start date';
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

  function addmc(i){
        //add new mc
        $('button[id=btn_add_mc'+i+']').on('click',function(){
            var i = $(this).val();
            //alert(i);
            var j = $(":button[id^=add_attended_work"+i+"_]").length;
            // alert(j);
            for (k = 0; k <= j; k++) { 
                if($("#add_attended_work"+i+"_"+k).length == 0) { //if doesn't exist

                    $('#table-medical-details'+i+' > tbody:last-child').append('<tr data-expanded="true" class="workrow" id="tr'+i+'_'+k+'"><td><div class="col-md-12"><select class="form-control" name="hussts[]"><option value="">Please select</option><option value="" selected> MC </option><option value="" > Light Duty </option></select></div></td>'+
                        "<td>"+
                                        "<div class='col-md-12'>"+
                                            "<input id='clinicname' name='clinicinfo' type='text' value='' class='form-control counttotalmc' required>"+
                                        "</div>"+
                                    "</td>"+
                    '<td><div class="col-md-12"><input type="date" value="" id="mcstartdate_'+i+'_'+k+'" name="mcstartdate_'+i+'_'+k+'[]" class="form-control counttotalmc" ></div></td><td><div class="col-md-12"><input type="date" value="" id="mcenddate_'+i+'_'+k+'" name="mcenddate_'+i+'_'+k+'[]" class="form-control counttotalmc" ></div></td><td><input type="text" id="totalmc_'+i+'_'+k+'" name="totalmc_'+i+'_'+k+'[]" value="" class="form-control" readonly></td><td><button type="button"  class="btn btn-sm btn-danger btn_del_workmc" id="del_attended_work'+i+'_'+k+'"><i class="fas fa-trash-alt fa-sm"></i></button><button id="add_attended_work'+i+'_'+k+'" value="'+i+'_'+k+'" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">'+
                                            '<i class="ti-plus text" aria-hidden="true"></i>'+
                                            '<i class="ti-plus text-active" aria-hidden="true"></i>'+
                                        '</button></td></tr>');

                    add_attend_work(i,k);
                    modal_delete();
                    totalmc();
                    
                    break;
                }
            }
            
        });


    }

    function add_attend_work(i,j){

    //add attended work
    $('button[id=add_attended_work'+i+'_'+j+']').click(function(){ 
        var val = $(this).val();
        var values = val.split('_');
        var i = values[0];
        var j = values[1];
        // alert('i: '+i+' j: '+j);

        var k = $("tr[id^=tr"+i+"_"+j+"_]").length;
        // alert(k);
        for (w = 0; w <= k; w++) { 
            if($("#tr"+i+"_"+j+"_"+w).length == 0) { 
                // alert("hihihihi");

                $('#tr'+i+'_'+j).after('<tr id="tr'+i+'_'+j+'_'+w+'"><td><div class="col-md-12"> <input  name="attendedwork" type="text" value="Attended Work" class="form-control counttotalwork" readonly></div></td><td><div class="col-md-12"><input id="clinicname" name="clinicinfo" type="text" value="" class="form-control counttotalmc" required></div></td><td><div class="col-md-12"><input   type="date" value="" id="workstartdate_'+i+'_'+j+'_'+w+'" name="workstartdate_'+i+'_'+j+'_'+w+'" class="form-control counttotalwork" ></div></td><td><div class="col-md-12"><input type="date" value="" id="workenddate_'+i+'_'+j+'_'+w+'" name="workenddate_'+i+'_'+j+'_'+w+'" class="form-control counttotalwork" ></div></td><td><input type="text" id="totalwork_'+i+'_'+j+'_'+w+'" name="totalwork_'+i+'_'+j+'_'+w+'" value="" class="form-control" readonly></td><td><button type="button"  class="btn btn-sm btn-danger btn_del_workmc" id="del_attended_work'+i+'_'+j+'_'+w+'"><i class="fas fa-trash-alt fa-sm"></i></button></td> </tr>');

                modal_delete();
                totalwork();

                break;
            }
        }
        
        });

}

function modal_delete(){

  // Delete work
  $('.btn_del_workmc').on('click',function(){
      // alert("hehehe");
      var delete_id = $(this).attr('id');
      console.log(delete_id);
      $("#deletemodal").modal('show');
      $("#deletemodal .modal-footer button").on('click', function(e) {
          var btn_id = event.target.id;
          if(btn_id == 'btn_delete'){
              e.preventDefault();
              $("#"+delete_id).closest("tr").remove();
              
          }
      });
  });

}

function totalmc(){
        // Get the total mc day
        $('.counttotalmc').on('change',function(){
            var current_id = event.target.id;
            var values = current_id.split('_');
            var i = values[1];
            var j = values[2];
            // alert(current_id);
            // var id = current_id.substring(current_id.length - 1, current_id.length);
            // alert(id);
            // console.log("current_id: "+current_id);
            counttotal(i,j);
        });
    }

    function counttotal(i,j){
        // console.log("i: "+i+ " j: " +j);
        var startdate = document.getElementById('mcstartdate_'+i+'_'+j).value;
        var enddate = document.getElementById('mcenddate_'+i+'_'+j).value;
        var total = document.getElementById('totalmc_'+i+'_'+j);
        var lblmcerror = document.getElementById('lblmcerror'+i);
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
        lblmcerror.innerHTML = 'Start date must not after current date';
        total.value = '';
        btnsubmit.disabled = true;
        return;
        }else{
        lblmcerror.innerHTML = '';
        btnsubmit.disabled = false;
        }

        // Check the mc start date must after accident date
        if(days2 <= 0){
        lblmcerror.innerHTML = 'Start date must not before accident date';
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
            lblmcerror.innerHTML = 'End date must not before start date';
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

    function totalwork(){

        // Get the total work day
        $('.counttotalwork').on('change',function(){
            var current_id = event.target.id;
            // console.log("current_id: "+current_id);

            var values = current_id.split('_');
            var i = values[1];
            var j = values[2];
            var w = values[3];

            counttotalwork(i,j,w);
        });

    }

    function counttotalwork(i,j,w){

    // console.log("i: "+i+ " j: " +j+ " w: " +w);
    // id adalah nilai urutan mc
    // x adalah nilai urutan work
    var startdate = document.getElementById('workstartdate_'+i+'_'+j+'_'+w).value;
    // alert('startdate :' + startdate);
    var enddate = document.getElementById('workenddate_'+i+'_'+j+'_'+w).value;
    // alert('enddate :' + enddate);
    var total = document.getElementById('totalwork_'+i+'_'+j+'_'+w);
    var lblmcerror = document.getElementById('lblmcerror'+i);
    var btnsubmit = document.getElementById('btnsubmit');

    if(startdate != "" && enddate != ""){
      var totalwork = getdays(startdate,enddate);
      if (totalwork <= 0){
        total.value = "";
        lblmcerror.innerHTML  = 'End date must not before start date';
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

}); 
</script>

<script>
    function submitform()
    {
        $('#reset_death').find('form').submit();
        $('.clear_death').val('');
    }
</script>

<script>
    $(document).ready(function () {
        $("#periodical").hide();
    
        $('select[name=inpayment]').change(function () {
          if (this.value == 'Y') {
              $("#periodical").show();
    
    
          } else {
              $("#periodical").hide();
              }
        });
    });
    </script>
