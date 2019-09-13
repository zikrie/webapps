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
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.notice')</label>
                                    <input type="text" readonly id="notice" name="notice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.casetype')</label>
                                    <input type="text" readonly id="casetype" name="casetype" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.insuredPerson')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.insuredPersonName')</label>
                                    <input type="text" readonly id="insuredPersonName" name="insuredPersonName" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.PRType')</label>
                                    <select class="form-control" data-placeholder="source_wages" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="mother">@lang('wages.attr.mother')</option>
                                        <option value="father">@lang('wages.attr.father')</option>
                                        <option value="husband">@lang('wages.attr.husband')</option>
                                        <option value="wife">@lang('wages.attr.wife')</option>
                                        <option value="others">@lang('wages.attr.other')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.new_ic')</label>
                                    <input type="text" readonly id="new_ic" name="new_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.old_ic')</label>
                                    <input type="text" readonly id="old_ic" name="old_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.others')</label>
                                    <input type="text" readonly id="other" name="other" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.pr')</h5>
                        <hr>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.PRName')</label>
                                    <input type="text" id="PRName" name="PRName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.mobileNo')</label>
                                    <input type="text" id="mobileNo" name="mobileNo" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.new_ic')</label>
                                    <input type="text" id="new_ic" name="new_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.old_ic')</label>
                                    <input type="text" id="old_ic" name="old_ic" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.others')</label>
                                    <input type="text"  id="other" name="other" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address')</label>
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
                                <label class="control-label"> @lang('insuredPerson.attr.postcode')</label>
                                <input type="text" id="postcode" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.city')</label>
                                <input type="text" id="city" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                <input type="text" id="state" name="state" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('insuredPerson.attr.relationshipPRwithOB')</label>
                                <input type="text" id="relationshipPRwithOB" name="relationshipPRwithOB" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.relationshipOBwithPR')</label>
                                <input type="text" id="relationshipOBwithPR" class="form-control"
                                    name="relationshipOBwithPR" value="">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('insuredPerson.attr.OBSituation')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('wages.attr.coma')</option>
                                    <option value="">@lang('wages.attr.bedridden')</option>
                                    <option value="">@lang('wages.attr.paralyzed')</option>
                                    <option value="">@lang('wages.attr.lostMemory')</option>
                                    <option value="">@lang('wages.attr.unable')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.PRStatus')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('wages.attr.permanent')</option>
                                    <option value="">@lang('wages.attr.nonPermanent')</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('index.attr.pnpp')</h5>
                    <hr>

                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.pnppName')</label>
                                <input type="text" id="pnppName" name="pnppName" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.pnppOffice')</label>
                                <input type="text" id="pnppOffice" name="pnppOffice" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.new_ic')</label>
                                <input type="text" id="new_ic" name="new_ic" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.old_ic')</label>
                                <input type="text" id="old_ic" name="old_ic" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.others')</label>
                                <input type="text"  id="other" name="other" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"> @lang('insuredPerson.attr.OBSituation')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('wages.attr.coma')</option>
                                    <option value="">@lang('wages.attr.bedridden')</option>
                                    <option value="">@lang('wages.attr.paralyzed')</option>
                                    <option value="">@lang('wages.attr.lostMemory')</option>
                                    <option value="">@lang('wages.attr.unable')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.PRStatus')</label>
                                <select class="form-control" data-placeholder="" tabindex="2">
                                    <option selected readonly disabled hidden>Please Choose </option>
                                    <option value="">@lang('wages.attr.permanent')</option>
                                    <option value="">@lang('wages.attr.nonPermanent')</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5 class="card-title">@lang('index.attr.bank')</h5>
                    <hr>

                    <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.bankName')</label>
                                    <input type="text" id="bankName" name="bankName" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.bankBranch')</label>
                                    <input type="text" readonly id="bankBranch" name="bankBranch" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('insuredPerson.attr.postal_address')</label>
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
                                <label class="control-label"> @lang('insuredPerson.attr.postcode')</label>
                                <input type="text" id="postcode" name="postcode" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.city')</label>
                                <input type="text" id="city" class="form-control" name="city" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                <input type="text" id="state" name="state" value="" class="form-control">
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
