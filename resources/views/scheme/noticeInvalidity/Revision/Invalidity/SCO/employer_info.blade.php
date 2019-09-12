<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
    
                    <form action="/caseinfo_revision" method="POST">
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
                                       <input type="text" id="EmployerCode" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Employer Name')</label>
                                        <input type="date" id="dateEmployerName" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </select>  
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Employment Start Date')</label>
                                    <input type="date" id="dateEmploymentStart" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('Employement End Date')</label>
                                    <input type="date" id="dateEmploymentEnd" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Reemployment Start Date')</label>
                                        <input type="date" id="dateReemploymentStart" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Reemployment End Date')</label>
                                        <input type="date" id="dateReemploymentEnd" name="dateAcceptanceDeclaration117" value="" class="form-control">
                                    </div>
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
    