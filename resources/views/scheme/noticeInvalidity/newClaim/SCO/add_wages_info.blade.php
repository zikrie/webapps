<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="/obform" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            
                            @if(Session::get('messageob')) 
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{Session::get('messageob')}}
                                </div>
    
                            </div>
                            @elseif (!empty($messageob))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messageob}}
                                </div>
    
                            </div>
                            @endif
                
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employer Code')</label>
                                        <input type="text" name="empCode" id="emp_code" class="form-control">
                                        <br>
                                        <button type="button" name="action" id="view_just" class="btn btn-facebook waves-effect waves-light">SEARCH</button>                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class='row'>
                                <div class="col-md-12">
                                    <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:1%'>@lang('No.')</th>
                                                <th style='width:10%'>@lang('Year')</th> 
                                                <th style='width:10%'>@lang('Month')</th>
                                                <th style='width:10%'>@lang('Wage (RM)')</th> 
                                                <th style='width:10%'>@lang('Contribution Paid (RM)')</th>
                                                <th style='width:10%'>@lang('Contribution Payable (RM)')</th> 
                                                <th style='width:15%'>@lang('Contribution Surplus/ Deficit (RM)')</th>
                                                <th style='width:15%'>@lang('Reject')</th> 
                                                <th style='width:25%'>@lang('Reason')</th>  
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

                            <br>
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                              
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    