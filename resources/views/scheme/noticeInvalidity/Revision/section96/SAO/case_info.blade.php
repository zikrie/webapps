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
                                    <label>Notice ID</label><span class="required">*</span>
                                    <input type="text" id="notice_section96" name="notice" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Revision</label><span class="required">*</span>
                                    <input type="text" id="revType_section96" name="revType" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Stop Payment Type</label><span
                                        class="required">*</span>
                                    <select class="form-control" data-placeholder="optionHUKorILAT_section96"
                                        tabindex="2">
                                        <option selected readonly disabled hidden>Please Choose </option>
                                        <option value="Stop Payment ILT (S96)">Stop Payment ILT (S96)
                                        </option>
                                        <option value="Stop Payment HUK (S96)">Stop Payment HUK (S96)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ilat Notice ID</label><span
                                        class="required">*</span>
                                    <input type="text" id="ilatNoticeID_section96" class="form-control"
                                        name="ilatNoticeID" value="">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">HUK Notice ID</label><span
                                        class="required">*</span>
                                    <input type="text" id="hukNoticeID_Section96" name="hukNoticeID" value=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">Option HUK or Ilat</label><span
                                        class="required">*</span>
                                    <select class="form-control" data-placeholder="optionHUKorILAT_section96"
                                        tabindex="2">
                                        <option selected readonly disabled hidden>Please Select </option>
                                        <option value="HUK">HUK</option>
                                        <option value="ILAT">ILAT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="control-label">Date of Option Received</label><span
                                        class="required">*</span>
                                    <input type="date" id="dateOfOptionReceived_Section96" name="dateOfOptionReceived"
                                        value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">Save</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">Reset</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
