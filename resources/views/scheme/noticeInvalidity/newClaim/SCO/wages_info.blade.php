<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">

                        <!---------------- TABLE --------------------->

                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table id="tableWages"  class="table table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width:1%' data-breakpoints="xs" class="text-center">
                                                        @lang('scheme/wages.attr.num')</th>
                                                    <th style='width:10%' class="text-center">
                                                        @lang('Employer Code')</th>
                                                    <th style='width:16%' class="text-center">
                                                        @lang('Employer Name')</th>
                                                    <th style='width:9%' class="text-center">
                                                        @lang('Year')</th>
                                                    <th style='width:9%' class="text-center">
                                                        @lang('Month')</th>
                                                    <th style='width:9%' class="text-center">
                                                        @lang('Wages (RM)')</th>
                                                    <th style='width:9%' class="text-center">
                                                        @lang('Assumed Wages (RM)')</th>
                                                    <th style='width:9%' class="text-center">
                                                        @lang('Contribution Paid (RM)')</th>
                                                    <th style='width:9%' class="text-center">
                                                        @lang('Contribution Payable (RM)')</th>
                                                    <th style='width:10%' class="text-center">
                                                        @lang('Contribution Surplus/Deficit')</th>
                                                    <th style="width:14%" class="text-center">
                                                        @lang('Action')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($getwages as $idnum => $wagesInfo)
                                                <tr data-expanded="true">
                                                    <td>{{$idnum+1}}</td>
                                                    <td>{{$wagesInfo['emp_code']}}</td>
                                                    <td>{{$wagesInfo['emp_name']}}</td>
                                                    <td>{{$wagesInfo['year']}}</td>
                                                    <td>{{$wagesInfo['month']}}</td>
                                                    <td>{{$wagesInfo['wages']}}</td>
                                                    <td>{{$wagesInfo['assume_wages']}}</td>
                                                    <td>{{$wagesInfo['contribution_paid']}}</td>
                                                    <td>{{$wagesInfo['contribution_payable']}}</td>
                                                    <td>{{$wagesInfo['contribution_surplusDeficit']}}</td>
                                                    <td>
                                                     <div class="row">
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-danger"
                                                            id="del_consistency"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                        <button type="button"
                                                            class="btn waves-effect waves-light btn-info"
                                                            id='selectdraft'><i class="fas fa-edit"></i></button>
                                                     </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-actions text-right">
                                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                                            data-toggle="modal" data-target="#popAddWages">@lang('ADD WAGES')</button>
                                    </div>
                                    <br>
                                    <!-- <div class="form-actions text-right">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SAVE')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('CANCEL')</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('Invalidity Grant Info')</h5>
                        <hr>

                        <!-- <div class="row p-t-20">
                            <div class="col-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Year')</label>
                                    <input type="text" name="year" id="year" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('Month')</label>
                                    <input type="text" name="month" id="month" class="form-control">
                                </div>
                            </div>
                        </div> -->
                        <div class="form-body">
                            <div class="col-md-4 table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="xs" class="text-center">
                                                @lang('scheme/wages.attr.num')</th>
                                            <th class="text-center">
                                                @lang('Year')</th>
                                            <th class="text-center">
                                                @lang('Contribution Paid (RM)')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getwages as $idnum => $wagesInfo )
                                        <tr data-expanded="true">
                                            <td>{{$idnum+1}}</td>
                                            <td>
                                            {{$wagesInfo['year']}}
                                            </td>
                                            <td>
                                            {{$wagesInfo['contribution_paid']}}
                                            </td>
                                        </tr>@endforeach
                                        
                                        <td colspan="2">
                                            <div class="form-actions text-right">
                                                <label class="control-label">@lang('Total')</label>
                                            </div>
                                        </td>
                                        <td>
                                        @php $total = 0; @endphp
                                        @foreach($getwages as $idnum => $wagesInfo )
                                         @php
                                        $total+=$wagesInfo['contribution_paid']
                                        @endphp
                                        @endforeach
                                        {{$total}}
                                        </td>
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
</div>

    <!------------POPUP ADD NOTIFICATION ----------------->
    <div class="col-md-20">
        <div class="card">
            <div class="card-body">
                <!-- sample modal content -->
                <div id="popAddWages" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" style="width:50%;">
                        <div class="modal-content">
                            <div class="col-md-20" id="addWages">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="vcenter">Add Wages</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>

                                <div class="modal-body">

                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Employer Code')</label>
                                                <input type="text" name="empCame" id="empName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-5">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Employer Name')</label>
                                                <input type="text" name="empCode" id="empCode" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Year')</label>
                                                <input type="text" name="year" id="year" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Month')</label>
                                                <input type="text" name="month" id="month" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Wages')</label>
                                                <input type="text" name="wages" id="wages" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right">
                                        <button type="submit" name="action" value="Submit"
                                            class="btn btn-sm waves-effect waves-light btn-success btn-newMC"
                                            id='btnsubmit' onclick="mcsubmit()">@lang('SEARCH')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                                            onclick="submitform()">@lang('CANCEL')</button>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script>
    $(document).ready(function () {
        $("#addwages").click(function () {
            var no = $('#tableWages tr:last td:first').find("input").val();
            no++;
            $("#tableWages > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow">'+ no + 
                '<td><input type="hidden" value= '+ no +' >' + no +'</td>'+ 
                '<td><input type="text" name="emp_Code" value="" class="form-control"></td>'+
                '<td><input type="text" name="emp_Name" value="" class="form-control"></td>'+
                '<td><input type="text" name="year" value="" class="form-control"></td>'+
                '<td><div class="col-md-15">'+
                    '<select class="form-control" name="month" data-placeholder="Month"'+
                        'tabindex="2">'+
                        '<option>@lang("scheme/wages.attr.please_select")</option>'+
                        '<option value="January">@lang("scheme/wages.attr.january")</option>'+
                        '<option value="February"> @lang("scheme/wages.attr.february")</option>'+
                        '<option value="March">@lang("scheme/wages.attr.march")</option>'+
                        '<option value="April">@lang("scheme/wages.attr.april")</option>'+
                        '<option value="May">@lang("scheme/wages.attr.may")</option>'+
                        '<option value="June">@lang("scheme/wages.attr.june")</option>'+
                        '<option value="July">@lang("scheme/wages.attr.july")</option>'+
                        '<option value="August">@lang("scheme/wages.attr.august")</option>'+
                        '<option value="September">@lang("scheme/wages.attr.september")</option>'+
                        '<option value="October">@lang("scheme/wages.attr.october")</option>'+
                        '<option value="November">@lang("scheme/wages.attr.november")</option>'+
                        '<option value="December">@lang("scheme/wages.attr.december")</option>'+
                    '</select>'+
                '</div></td>'+
                '<td><input type="text" name="wages" value="" class="form-control"></td>'+
                '<td><input type="text" name="assumedWages" value="" class="form-control"></td>'+
                '<td><input type="text" name="contributionPaid" value="" class="form-control"></td>'+
                '<td><input type="text" name="payable" value="" class="form-control"></td>'+
                '<td><input type="text" name="Surplus" value="" class="form-control"></td>'+
                '<td>'+
                    '<button type="button" class="btn waves-effect waves-light btn-danger" id="del_consistency"><i class="fas fa-trash-alt"></i></button>'+
                    '<button type="button" class="btn waves-effect waves-light btn-info" id="selectdraft"><i class="fas fa-edit"></i></button>'+
                '</td>'+
                '</tr>'
            );
        });
    });

</script> -->
