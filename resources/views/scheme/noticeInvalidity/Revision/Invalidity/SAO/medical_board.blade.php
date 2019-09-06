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
                                   <label class="control-label">@lang('Invalidity Starting Date Requirements')</label>
                                   <input type="text" id="InvadilatyDateReq" name="InvadilatyDateReq" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Morbid  Date Requirements')</label>
                                    <input type="text" id="moribDateReq" name="morib" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Age At The Time Of Invalidity Starting Date')</label>
                                <input type="text" id="ageInvadilatyDate" name="ageInvalidity" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Age At The Time Of Morbid Date')</label>
                                <input type="date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('JD Session Date')</label>
                                <input type="date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('JD Type')</label>
                                   <select class="form-control" data-placeholder="acc_dec" tabindex="3">
                                        <option selected disabled hidden>Please Choose</option>
                                        <option value="jd">@lang('JD')</option>
                                        <option value="jdr">@lang('JDR')</option>
                                        <option value="jdk">@lang('JDK')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('Invalidity Decision')</label>
                                   <select class="form-control" data-placeholder="acc_dec" tabindex="2">
                                        <option selected disabled hidden>Please Choose</option>
                                        <option value="yes">@lang('Yes')</option>
                                        <option value="no">@lang('No')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label">@lang('Morbid Date')</label>
                                <input type="date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('ELS')</label>
                                   <select class="form-control" data-placeholder="acc_dec" tabindex="2">
                                        <option selected disabled hidden>Please Choose</option>
                                        <option value="yes">@lang('Yes')</option>
                                        <option value="no">@lang('No')</option>
                                    </select>
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
