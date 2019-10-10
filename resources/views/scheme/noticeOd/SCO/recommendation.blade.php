<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/scoRecommend.attr.action')</label>
                                        <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                            <option value=""  >Please Select</option> 
                                            <option value="recommend"  >Recommend</option> 
                                            <option value="investigation" >@lang('scheme/scoRecommend.attr.investigation')</option> 
                                            <option value="wrong_benefit_type">Wrong Notice Type</option>
                                            <option value="transfer_case">Case Transfer</option> 
                                            <option value="close">Close</option> 
                                        </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-0"> <br>
                                <button type="button" name="action" id="ddNext" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                            </div> --}}
                        </div>

                        {{-- Recommend Section --}}
                        <div  id="viewTable" style="display:none">
                        {{-- POTENTIALS SECTION --}}
                        <h5 class="card-title-sub"> Occupational Disease (Fifth Schedule) </h5>
                        <hr>
                            <div class="row p-t-20"> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Listed in  Occupational Disease (5th Schedule)?</label><span class="required">*</span>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input customRadio" value="yes">
                                        <label class="custom-control-label" for="customRadio1">@lang('scheme/scoRecommend.attr.yes')</label>
                                    </div>
                                </div>
                                <div class="col-md-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input customRadio" value="no">
                                        <label class="custom-control-label" for="customRadio2">@lang('scheme/scoRecommend.attr.no')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-12">
                                    <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style='width:2%'>No</th>
                                                <th style='width:15%'>Occupational Disease</th>  
                                                <th style='width:15%'>Causative Agent</th>
                                                <th style='width:15%'>Reference</th>
                                                <th style='width:5%'>@lang('scheme/mc.attr.action')</th>
                                            </tr>
                                        </thead>
                                        <tbody class='align-middle'>
                                            <tr> 
                                                <td>1</td>
                                                <td><select class="form-control" required>
                                                        <option>Please Select</option> 
                                                        <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                        <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                                    </select>
                                                </td>
                                                <td><select class="form-control" required>
                                                        <option>Please Select</option> 
                                                        <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                        <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="recommend_by" value="" class="form-control" >
                                                </td>
                                                <td>
                                                    <div class="col-md-0">
                                                        <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal"  data-whatever="@fat">Reset</button>
                                                    </div>
                                                </td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                    <textarea type="text" name="reason_reject" id="reason_reject" row="2"  class="form-control"></textarea>
                                </div>
                            </div>
                            <h5 class="card-title-sub"> Occupational Disease Decision </h5>
                            <hr>
                            <div class='row'>
                                <div class="col-md-12 col-lg-12">
                                    <div class="card">
                                        <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style='width:2%'>No</th>
                                                    <th style='width:8%'>Recommendation Date</th>  
                                                    <th style='width:20%'>Recommend By</th>
                                                    <th style='width:15%'>Role</th>
                                                    <th style='width:8%'>Occupational Disease</th>
                                                    <th style='width:12%'>@lang('scheme/mc.attr.action')</th>
                                                </tr>
                                            </thead>
                                            <tbody class='align-middle'>
                                                <tr> 
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="col-md-0">
                                                            <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#recommendationview_popup" data-whatever="@fat">View</button>
                                                            <button type="button" name="action" id="btn_recommendation_update" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#recommendation_update" data-whatever="@fat">Update</button>
                                                        </div>
                                                    </td> 
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="col-md-0">
                                            <button type="button" name="action" id="add_recommend" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Add Recommend</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-2">
                                <div class="form-group">
                                    <label class="control-label">Occupational Disease</label>
                                        <input type="text" name="employment_injury" id="employment_injury1" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Reason reject</label>
                                        <textarea type="text" name="reason_reject" id="reason_reject" row="2"  class="form-control" disabled></textarea>
                                </div>
                            </div>
                        </div>
                            
                        {{-- WRONG NOTICE TYPE SECTION--}}
                        <div id="wrong_notice_type" style="display:none">
                            <h5 class="card-title-sub"> Wrong Notice Type </h5>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Recommended Notice Type</label>
                                            <select name="dd_recommendation" id="dd_recommendation" class="form-control">
                                                <option value=""></option>
                                                <option value=""></option> 
                                            </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Justification</label>
                                            <textarea type="text" name="justification" id="justification" class="form-control"></textarea>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                            
                        {{--CASE TRANSFER SECTION--}}
                        <div id="case_transfer" style="display:none">
                            <h5 class="card-title-sub">Case Transfer </h5>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('scheme/socso.attr.preferred_socso')</label>
                                        <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                        {{-- CLOSE SECTION --}}
                        <div class='row' id="reason_close" style="display:none">
                            {{-- <div class="row p-t-20"> --}}
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">Reason Close</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                            <input type="checkbox" class="custom-control-input" id="checkbox00" value="check">
                                            <label class="custom-control-label" for="checkbox00">Tiada Sec J Borang 34</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                            <input type="checkbox" class="custom-control-input" id="checkbox1" value="check">
                                            <label class="custom-control-label" for="checkbox1">Tiada Laporan Perubatan</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                            <input type="checkbox" class="custom-control-input" id="checkbox2" value="check">
                                            <label class="custom-control-label" for="checkbox2">Maklumat/Dokumen Tidak Lengkap</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                            <input type="checkbox" class="custom-control-input" onclick="close_others()" id="checkbox3" value="check">
                                            <label class="custom-control-label"for="checkbox3">Others</label>
                                        </div>
                                    </div>
                                </div>
                            {{-- </div> --}}
                        </div>
                        <div id="others1" class="col-md-12" style="display:none">
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                    <textarea type="text" name="description" id="description" class="form-control"></textarea>
                            </div>
                        </div> 
                        {{--END SECTION-}}
                        
                        {{-- POPUP From Dropdown RECOMMENDATION  --}}
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header  card-title">
                                        <h4 class="modal-title" id="exampleModalLabel1">Employment Injury Decision</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('scheme.noticeAccident.SCO.recommendation_popup') 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                        <button type="button" id="recommend_save" class="btn btn-primary recommend_save" data-dismiss="modal">@lang('scheme/accidentDetails.save')</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        {{-- End POPUP From Dropdown  --}}

                        {{--View POPUP --}}
                        <div class="modal fade" id="recommendationview_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel0">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header  card-title">
                                        <h4 class="modal-title" id="exampleModalLabel0">Employment Injury Decision</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('scheme.noticeAccident.SCO.recommendationview_popup') 
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                        {{-- <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--UPDATE POPUP --}}
                        <div class="modal fade" id="recommendation_update" tabindex="-1" role="dialog" aria-labelledby="recommendation_update1">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header  card-title">
                                        <h4 class="modal-title" id="recommendation_update1">Employment Injury Decision</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('scheme.noticeOd.SCO.recommendationupdate_popup') 
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                        <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END POPUP --}}

                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
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
</div>

<script>
 $(document).ready(function() { 
      $('select[name=dd_recommendation]').change(function () 
      {
         if (this.value == 'recommend') 
         {
            $("#viewTable").show();
            $("#investigation").hide();
            $("#wrong_notice_type").hide();
            $("#case_transfer").hide();
            $("#reason_close").hide();
            $("#others1").hide();
         } 
         
         else if (this.value == 'investigation') 
         {
            $("#viewTable").hide();
            $("#investigation").show();
            $("#wrong_notice_type").hide();
            $("#case_transfer").hide();
            $("#reason_close").hide();
            $("#others1").hide();
         } 
         
         else if (this.value == 'wrong_benefit_type') 
         {
            $("#viewTable").hide();
            $("#investigation").hide();
            $("#wrong_notice_type").show();
            $("#case_transfer").hide();
            $("#reason_close").hide();
            $("#others1").hide();
         } 

         else if (this.value == 'transfer_case') 
         {
            $("#viewTable").hide();
            $("#investigation").hide();
            $("#wrong_notice_type").hide();
            $("#case_transfer").show();
            $("#reason_close").hide();
            $("#others1").hide();
         }

         else if (this.value == 'close') 
         {
            $("#viewTable").hide();
            $("#investigation").hide();
            $("#wrong_notice_type").hide();
            $("#case_transfer").hide();
            $("#reason_close").show();
            $("#others1").hide();
         }

         else 
         {
            $("#viewTable").hide();
            $("#investigation").hide();
            $("#wrong_notice_type").hide();
            $("#case_transfer").hide();
            $("#others1").hide();''
         }
      });
      
      $('#recommend_save').click(function(){
        $('#exampleModal1').hide();
        $('#add_recommend').hide();
        });
    });

    function close_others(){

        // Get the checkbox
        var checkBox = document.getElementById("checkbox3");
        // Get the output text
        var others = document.getElementById("others1");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        others.style.display = "block";
        } else {
        others.style.display = "none";
        }
    }


    
</script> 
