<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">
                <h5 class="card-title">@lang('index.attr.case_info')</h5>
                        <hr>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.bgrRefNo')</label>
                                    <input type="text" readonly id="bgrRefNo" name="bgrRefNo" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.deathPersonName')</label>
                                    <input type="text" readonly id="deathPersonName" name="deathPersonName" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.deathPersonIDType')</label>
                                    <select class="form-control clearfields" name='idtype' readonly id='idtype'
                                        required>
                                        <option selected readonly disabled hidden>Please Select </option>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.deathPersonIDNum')</label>
                                    <input type="text" readonly id="deathPersonIDNum" name="deathPersonIDNum" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.dateOfDeath')</label>
                                    <input type="date" readonly id="dateOfDeath" name="dateOfDeath" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.totalNetAmount')</label>
                                    <input type="text" readonly id="totalNetAmount" name="totalNetAmount" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('insuredPerson.attr.netAmountToBePaidByNoticeID')</label>
                                    <input type="text" readonly id="netAmountToBePaidByNoticeID"
                                        name="netAmountToBePaidByNoticeID" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.caseStatus')</label>
                                    <input type="text" readonly id="caseStatus" name="caseStatus" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.amountApprovedBy')</label>
                                    <input type="text" readonly id="amountApprovedBy" name="amountApprovedBy" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.amountApprovedDate')</label>
                                    <input type="text" readonly id="amountApprovedDate" name="amountApprovedDate"
                                        value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.operationOffice')</label>
                                    <input type="text" id="operationOffice" name="operationOffice" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.relatedCaseList')</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.schemeRefNo')</label>
                                    <input type="text" id="schemeRefNo" name="schemeRefNo" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.notice')</label>
                                    <input type="text"  id="noticeID" name="noticeID" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.casetype')</label>
                                    <input type="text"  id="casetype" name="casetype"
                                        value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.recipient')</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.recipientName')</label>
                                    <input type="text" id="recipientName" name="recipientName" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.recipientIDType')</label>
                                    <select class="form-control clearfields" name='idtype'  id='idtype'
                                        required>
                                        <option selected readonly disabled hidden>Please Select </option>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.recipientIDNum')</label>
                                    <input type="text"  id="recipientIDNum" name="recipientIDNum" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address')</label>
                                    <input type="text"  name="add1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text"  name="add2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text"  name="add3" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postcode')</label>
                                    <input type="text"  id="postcode" name="postcode" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.city')</label>
                                    <input type="text"  id="city" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                    <input type="text"  id="state" name="state" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.pobbox')</label>
                                    <input type="text"  id="pobox" name="pobox" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.lockbag')</label>
                                    <input type="text"  id="lockbag" name="lockbag" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.wdt')</label>
                                    <input type="text"  id="wdt" name="wdt" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.email')</label>
                                    <input type="text"  id="email" name="email" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.share')</label>
                                    <input type="text"  id="share" name="share" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.paymentToBePaid')</label>
                                    <input type="text"  id="paymentToBePaid" name="paymentToBePaid" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.recipientHasGuardian')</label>
                                    <select class="form-control" data-placeholder="recipientHasGuardian" tabindex="2">
                                        <option selected  disabled hidden>Please Select </option>
                                        <option value="Perkeso">@lang('wages.attr.yes')</option>
                                        <option value="PTPTN">@lang('wages.attr.no')</option>
                                </select>                                
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.guardian')</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.guardianName')</label>
                                    <input type="text" id="recipientName" name="recipientName" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.guardianIDType')</label>
                                    <select class="form-control clearfields" name='idtype'  id='idtype'
                                        required>
                                        <option selected readonly disabled hidden>Please Select </option>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.guardianIDNum')</label>
                                    <input type="text"  id="guardianIDNum" name="guardianIDNum" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postal_address')</label>
                                    <input type="text"  name="add1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text"  name="add2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text"  name="add3" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.postcode')</label>
                                    <input type="text"  id="postcode" name="postcode" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('insuredPerson.attr.city')</label>
                                    <input type="text"  id="city" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.state')</label>
                                    <input type="text"  id="state" name="state" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.pobbox')</label>
                                    <input type="text"  id="pobox" name="pobox" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.lockbag')</label>
                                    <input type="text"  id="lockbag" name="lockbag" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.wdt')</label>
                                    <input type="text"  id="wdt" name="wdt" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.email')</label>
                                    <input type="text"  id="email" name="email" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.share')</label>
                                    <input type="text"  id="share" name="share" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.paymentAmount')</label>
                                    <input type="text"  id="paymentAmount" name="paymentAmount" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('index.attr.bankInformation')</h5>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.bankAcc')</label>
                                    <input type="text"  id="bankAcc" name="bankAcc" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.bankName')</label>
                                    <input type="text"  id="bankName" name="bankName" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.bankAccNo')</label>
                                    <input type="text"  id="bankAccNo" name="bankAccNo" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.reason')</label>
                                    <select class="form-control" data-placeholder="recipientHasGuardian" tabindex="2">
                                        <option selected  disabled hidden>Please Select </option>
                                        <option value="Bankrupt">@lang('wages.attr.bankrupt')</option>
                                        <option value="Residing Overseas">@lang('wages.attr.residingOverseas')</option>
                                        <option value="Permanent Representative">@lang('wages.attr.permanentRepresentative')</option>
                                        <option value="No IC">@lang('wages.attr.noIC')</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.accType')</label>
                                    <select class="form-control" data-placeholder="recipientHasGuardian" tabindex="2">
                                        <option selected  disabled hidden>Please Select </option>
                                        <option value="Bankrupt">@lang('wages.attr.current')</option>
                                        <option value="Residing Overseas">@lang('wages.attr.saving')</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.swift')</label>
                                    <select class="form-control" data-placeholder="swift" tabindex="2">
                                        <option selected  disabled hidden>Please Select </option>
                                        <option value="Residing Overseas">@lang('wages.attr.swiftCode')</option>
                                        <option value="Permanent Representative">@lang('wages.attr.bsbCode')</option>                                       
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.bsbCode')</label>
                                    <input type="text"  id="bsbCode" name="bsbCode" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('insuredPerson.attr.overseasBankAddress')</label>
                                    <input type="text"  id="overseasBankAddress" name="overseasBankAddress" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit"
                                    class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info"
                                    onclick="submitform()">@lang('noticetype.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary"
                                    id='btncancelacc'
                                    onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
