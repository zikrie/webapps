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
                
                            <div class='row'>
                                <div class="col-md-12">
                                    <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:1%'>@lang('No.')</th>
                                                <th style='width:20%'>@lang('Section')</th> 
                                                <th style='width:17%'>@lang('Item')</th>
                                                <th style='width:20%'>@lang('Notice Details')</th> 
                                                <th style='width:17%'>@lang('Supporting Documnets')</th>
                                                <th style='width:1%'>@lang('Corrected Data.')</th>
                                                <th style='width:20%'>@lang('Justification')</th> 
                                                <th style='width:17%'>@lang('Finding')</th>
                                                <th style='width:1%'>@lang('Consistent')</th>
                                                <th style='width:1%'>@lang('Action')</th>
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
                                                    <div class="col-md-12">
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
                                                    <div class="col-md-12">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    