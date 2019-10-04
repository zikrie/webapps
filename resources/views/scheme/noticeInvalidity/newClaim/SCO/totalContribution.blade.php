<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">

                    <!-- Column -->

                            <div class='row'>
                                <div class="col-md-12">
                                    <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:2%'>@lang('No.')</th>
                                                <th style='width:15%'>@lang('Employer code')</th> 
                                                <th style='width:10%'>@lang('Year')</th>
                                                <th style='width:15%'>@lang('Employee monthly contribution (RM)')</th> 
                                                <th style='width:10%'>@lang('No of contribution')</th>
                                                <th style='width:10%'>@lang('Total months contributed (RM)')</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow">
                                            <td>1.</td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                            </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                      
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
