<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="/emphistory" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            <h5 class="card-title">@lang('pensionDetails.employment_info')</h5>
                            <hr>
                            @if(Session::get('msgemphist')) 
                            <div class="card-footer">
        
                                <div class="alert alert-warning">
                                    {{Session::get('msgemphist')}}
                                </div>
        
                            </div>
                            @elseif (!empty($msgemphist))
                            <div class="card-footer">
        
                                <div class="alert alert-warning">
                                    {{$msgemphist}}
                                </div>
        
                            </div>
                            @endif
                            <div class="row p-t-20">
                                <div class="col-12">
                                    <div class="card">
                                        
                                        <div class="table-responsive">
                                            <table id="table_add_emp_info" class="table table-bordered" data-toggle-column="first">
                                                <thead>
                                                    <tr>
                                                        <th style='width: 5%;align-self: center'>@lang('pensionDetails.attr.num')</th>
                                                        <th style='width: 20%;align-self: center'>@lang('pensionDetails.attr.employer_name')</th>
                                                        <th style='width: 25%;align-self: center'>@lang('pensionDetails.attr.employer_address')</th>
                                                        <th style='width: 15%;align-self: center'>@lang('pensionDetails.attr.period')</th>
                                                        <th style='width: 20%;align-self: center'>@lang('pensionDetails.attr.occupation')</th>
                                                        <th style='width: 15%;align-self: center'>@lang('pensionDetails.attr.monthly_wages')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                               
    
                                                    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                    
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.clear')</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">
                            @lang('odDetails.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary"
                                    id="add_emp_info">ADD EMPLOYMENT INFO</button>
                        </div>
                        <br/>
                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    