<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/confirmation.attr.sectionj_received')</label>
                                    <select class="form-control">
                                        {{-- <option>@lang('scheme/confirmation.attr.select_reason')
                                                        </option> --}}
                                        <option value="Completed">@lang('scheme/confirmation.attr.complete')</option>
                                        <option value="Not Completed">@lang('scheme/confirmation.attr.not_complete')
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/confirmation.attr.complete_sectionj')</label>
                                    <input type="date" name="sub_status_description" id="sub_status_description"
                                        class="form-control">

                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/confirmation.attr.noticedate')</label>
                                    <input type="text" name="notice_date" id="notice_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/confirmation.attr.acceptance_stamp')</label>
                                    <input type="text" name="accept_stamp" id="accept_stamp" class="form-control">

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
