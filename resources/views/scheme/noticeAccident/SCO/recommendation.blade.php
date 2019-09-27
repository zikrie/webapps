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
                                            <option value="recommend"  >@lang('scheme/scoRecommend.attr.recommend')</option> 
                                            <option value="investigation" >@lang('scheme/scoRecommend.attr.investigation')</option> 
                                            <option value="wrong_benefit_type">Wrong Notice Type</option>
                                            <option value="transfer_case">Case Transfer</option> 
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-0"> <br>
                                <button type="button" name="action" id="ddNext" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                            </div>
                            {{-- POPUP From Dropdown  --}}
                            {{-- RECOMMENDATION --}}
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
                                            <button type="submit" id="recommend_save" class="btn btn-primary recommend_save">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                             {{-- POPUP From Dropdown  --}}
                             {{-- WRONG NOTICE TYPE --}}
                             <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel11">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel11">Wrong Notice Type</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.wrong_notice_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel2">Case Transfer</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.caseTransfer_popup') 
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel3">Query</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.query_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel4">Notification</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.notification_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            {{-- End POPUP From Dropdown  --}}
                        </div>
                        <div  id="viewTable" style="display:none">
                            <div class='row'>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card">
                                        <table class="table table-sm table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style='width:2%'>No</th>
                                                    <th style='width:8%'>Recommendation Date</th>  
                                                    <th style='width:20%'>Recommend By</th>
                                                    <th style='width:15%'>Role</th>
                                                    <th style='width:8%'>Employment Injury</th>
                                                    <th style='width:5%'>@lang('scheme/mc.attr.action')</th>
                                                </tr>
                                            </thead>
                                            <tbody class='align-middle'>
                                                <tr> 
                                                    <td>1</td>
                                                    <td><input type="date" name="recommendation_date" value="" class="form-control" ></td>
                                                    <td><input type="text" name="recommend_by" value="" class="form-control" ></td>
                                                    <td><input type="text" name="role" value="" class="form-control" ></td>
                                                    <td>
                                                        <select class="form-control" required>
                                                            <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                            <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-0">
                                                            <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#recommendationview_popup" data-whatever="@fat">View</button>
                                                        </div>

                                                        {{-- RECOMMENDATION POPUP --}}
                                                        <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel0">
                                                            <div class="modal-dialog modal-xl" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header  card-title">
                                                                        <h4 class="modal-title" id="exampleModalLabel0">Employment Injury Decision</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @include('scheme.noticeAccident.SCO.recommendation_popup') 
                                                                    </div>
                            
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                                                        <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 

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
                                                                        <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </td> 
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <h5 class="card-title-sub"> Potentials </h5>
                            <hr>

                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">Potential HUK</label>
                                            <select class="form-control">
                                                <option></option> 
                                                <option></option> 
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">Potential Invalidity</label>
                                            <select class="form-control">
                                                <option></option> 
                                                <option></option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            

                        {{-- <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Invalidity Benefit Ref. No. </label>
                                    <input type="text" name="invalidity" value="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Potential SEK 96</label>
                                        <select class="form-control">
                                            <option></option> 
                                            <option></option> 
                                        </select>
                                </div>
                            </div>
                        </div> --}}
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
        $("#recommend_save").click(function() { 
            $("#viewTable").show(1000); 
        }); 
    }); 
</script>