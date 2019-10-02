<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">

                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list"
                            data-paging="true" data-paging-size="7">
                            <thead>
                                <tr>
                                    <th style='width:5%'>@lang('scheme/wages.attr.num')</th>
                                    <th>@lang('Year')</th>
                                    <th>@lang('Month')</th>
                                    <th>@lang('Employer Code')</th>
                                    <th>@lang('Employer Name')</th>
                                    <th>@lang('Wages (RM)')</th>
                                    <th>@lang('Assumed Wages')</th>
                                    <th>@lang('Contribution Paid')</th>
                                    <th>@lang('Contribution Payable (RM)')</th>
                                    <th>@lang('Contribution Surplus/Deficit (RM)')</th>
                                    <th>@lang('Action')</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr data-expanded="true">
                                    <td>1</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td><input type="text" class="form-control"></td>
                                    <td col width="130">
                                        <button type="button" id="btn_update" class="btn btn-sm btn-danger"
                                            style="margin:3px;">
                                            <i class="fas fa-trash-alt fa-sm "></i></button>

                                        <button type="button" id="btn_update" class="btn btn-sm btn-danger"
                                            style="margin:3px;">
                                            <i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <div class="form-actions">
            <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"
                data-target="#popup">@lang('ADD WAGES')</button>

            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                onclick="window.location='/noticetype'">@lang('button.cancel')</button>
            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                onclick="window.location='/obform_od'">@lang('button.back')</button>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <!-- sample modal content -->
                <div id="popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="vcenter">Add Wages</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">

                                <div class='row'>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>@lang('Employer Code')</label>
                                            <input type="text" name="employerCode" id="empCode" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Employer Name')</label>
                                            <input type="text" name="employerName" id="empName" value=""
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-0">
                                        <div class="form-group">
                                            <br>
                                            <button type="button" data-toggle="modal" data-target="#verticalcenter"
                                                class="btn btn-facebook waves-effect waves-light"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <label>No recordfound. </label>
                                <div class='row'>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>@lang('Year')</label>
                                            <input type="text" name="year" id="Year" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Month')</label>
                                            <input type="text" name="month" id="Month" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Wages (RM)')</label>
                                            <input type="text" name="wages" id="Wages" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
    </div>
</div>

