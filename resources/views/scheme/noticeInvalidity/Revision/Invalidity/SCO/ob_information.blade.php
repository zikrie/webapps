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
                                       <label class="control-label">@lang('insuredPerson.attr.name')</label>
                                       <input type="text" id="name_invalidity" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.id_type')</label>
                                        <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                            <option selected disabled hidden>Please Choose </option>
                                            <option value="New IC">@lang('wages.attr.ic')</option>
                                            <option value="Old IC">@lang('wages.attr.old_ic')</option>
                                            <option value="Army ID">@lang('wages.attr.army_id')</option>
                                            <option value="Police ID">@lang('wages.attr.police_id')</option>
                                            <option value="Social Security ID">@lang('wages.attr.ssn')</option>
                                            <option value="CID">@lang('wages.attr.cid')</option>
                                    </select>  
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.id_num')</label>
                                    <input type="text" id="idNum_invalidity" name="idNum" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.casetype')</label>
                                    <input type="text" id="casetype_invalidity" name="casetype" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('insuredPerson.attr.status')</label>
                                        <input type="text" id="status_invalidity" name="status" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    