<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    <h5 class="card-title">@lang('Insured Person Profile')</h5>
                        <hr>
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
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('Postal Address')</label>
                                <input type="text"  name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Postcode')</label>
                                <input type="text" id="postcode_dependent" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('City')</label>
                                <input type="text" id="city_dependent" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('State')</label>
                                <input type="text" id="state_dependent" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('PO Box')</label>
                                <input type="text" id="pobox_dependent" name="pobox" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Lockbag')</label>
                                <input type="text" id="lockbag_dependent" name="lockbag" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('WDT')</label>
                                <input type="text" id="wdt_dependent" name="wdt" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Telephone Number')</label>
                                <input type="text" id="telNo_dependent" name="telNo" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Mobile Number')</label>
                                <input type="text" id="mobileNo_obProf" name="mobileNo" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Date Of Death')</label>
                                <input type="date" id="dDeath_invalidity" name="email" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Date')</label>
                                <input type="date"  id="date_invalidity" name="date" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                   <h5 class="card-title">@lang('Employee Info')</h5>
                   <hr>
                   <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Name')</label>
                                <input type="text" id="name_invalidity" name="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Telephone Number')</label>
                                <input type="text" id="telephoneNo_invalidity" name="telephoneNo" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('Postal Address')</label>
                                <input type="text" name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Postcode')</label>
                                <input type="text"  id="postcode_dependent" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('City')</label>
                                <input type="text" id="city_dependent" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('State')</label>
                                <input type="text" id="state_dependent" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">@lang('Supporting Document')</h5>
                   <hr>
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
