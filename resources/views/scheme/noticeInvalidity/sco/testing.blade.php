<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('confirmation.bank_info')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.recipient_bank')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.select_reason')
                                                            </option> --}}
                                        <option value="No IC">@lang('confirmation.attr.yes')</option>
                                        <option value="Permanent Representative Overseas">@lang('confirmation.attr.no')
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_location')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.select_reason')
                                                            </option> --}}
                                        <option value="No IC">@lang('confirmation.local_bank')</option>
                                        <option value="Permanent Representative Overseas">
                                            @lang('confirmation.overseas_bank')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.reason')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.select_reason')
                                                            </option> --}}
                                        <option value="No IC">@lang('confirmation.attr.no_ic')</option>
                                        <option value="Permanent Representative Overseas">
                                            @lang('confirmation.attr.permanent_representative')</option>
                                        <option value="Bankrupt">@lang('confirmation.attr.bankrupt')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bai_status')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.choose_bai')
                                                            </option> --}}
                                        <option value="Active">@lang('confirmation.attr.active')</option>
                                        <option value="Inactive">@lang('confirmation.attr.inactive')</option>
                                        <option value="Suspense">@lang('confirmation.attr.suspense')</option>
                                        <option value="Closed">@lang('confirmation.attr.closed')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.substatus_desc')
                                    </label>
                                    <input type="text" name="sub_status_description" id="sub_status_description"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.payment')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.choose_payment')
                                                            </option> --}}
                                        <option value="Cheque">@lang('confirmation.attr.cheque')</option>
                                        <option value="EFT">@lang('confirmation.attr.eft')</option>
                                        <option value="No Payment">@lang('confirmation.attr.no_payment')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h3 class="box-title m-t-40">@lang('confirmation.local_bank')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.choose_bank')
                                                            </option> --}}
                                        <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                        <option value="Maybank (MBB)">Maybank (MBB)</option>
                                        <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                                            Nasional (BSN)</option>
                                        <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                                        </option>
                                        <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                                        </option>
                                        <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                                            (PBB)</option>
                                        <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                                            Malaysia Berhad (BIMB)</option>
                                        <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                                            Bank Berhad (HLBB)</option>
                                        <option value="Ambank Berhad (AMBank)">Ambank Berhad
                                            (AMBank)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_branch')</label>
                                    <input type="text" name="bank_branch" id="bank_branch" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                                    <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                                    <input type="text" name="bank_address" id="bank_address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.choose_type_acc')
                                                            </option> --}}
                                        <option value="Savings">@lang('confirmation.attr.savings')</option>
                                        <option value="Current">@lang('confirmation.attr.current')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h3 class="box-title m-t-40">@lang('confirmation.overseas_bank')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_name')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.choose_bank')
                                                            </option> --}}
                                        <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                        <option value="Maybank (MBB)">Maybank (MBB)</option>
                                        <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                                            Nasional (BSN)</option>
                                        <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                                        </option>
                                        <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                                        </option>
                                        <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                                            (PBB)</option>
                                        <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                                            Malaysia Berhad (BIMB)</option>
                                        <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                                            Bank Berhad (HLBB)</option>
                                        <option value="Ambank Berhad (AMBank)">Ambank Berhad
                                            (AMBank)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_accNo')</label>
                                    <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.swift_code')</label>
                                    <input type="text" name="swift_code" id="swift_code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bsb_code')</label>
                                    <input type="text" name="bsb_code" id="bsb_code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.bank_address')</label>
                                    <input type="text" name="bank_address" id="bank_address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('confirmation.attr.type_acc')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('confirmation.attr.choose_type_acc')
                                                            </option> --}}
                                        <option value="Savings">@lang('confirmation.attr.savings')</option>
                                        <option value="Current">@lang('confirmation.attr.current')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">@lang('noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
