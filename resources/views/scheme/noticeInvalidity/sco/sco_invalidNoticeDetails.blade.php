<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('invaNotice.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.start_date')</label>
                                        <input type="date" name="startDate" id="startDate" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.end_date')</label>
                                        <input type="date" name="endDate" id="endDate" class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.restart_date')</label>
                                        <input type="date" name="restartDate" id="restartDate" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.reend_date')</label>
                                        <input type="date" id="reendDate" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.scheme_entry_date')</label>
                                        <input type="date" id="schemeDate" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.ob_work')</label>
                                        <select class="form-control" name="person_working">
                                            <option value="yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.scheme_entry_age')</label>
                                        <input type="text" name="schemeAge" id="schemeAge" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.begin_illness')</label>
                                        <input type="text" id="beginIllness" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('invaNotice.attr.notice_entry_age')</label>
                                            <input type="text" name="noticeAge" id="noticeAge" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('invaNotice.attr.morbid_date')</label>
                                                <input type="date" id="morbidDate" class="form-control">
                                            </div>
                                        </div>
                            </div>

                            <div class="row p-t-20">
                                

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.eligibility_age')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.meet_age')</option>
                                            <option>@lang('invaNotice.attr.notmeet_age')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.statuotary_body')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.yes')</option>
                                            <option>@lang('invaNotice.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('invaNotice.attr.spi_eligible')</label>
                                            <select class="form-control">
                                                <option>@lang('invaNotice.attr.qualified')</option>
                                                <option>@lang('invaNotice.attr.not_qualified')</option>
                                            </select>
                                        </div>
                                    </div>
                                
                            </div>

                            <div class="row p-t-20">
                             

                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('invaNotice.attr.total_months_notice')</label>
                                                <input type="text" id="totalNoticeDate" class="form-control">
                                            </div>
                                        </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('invaNotice.attr.total_months_morbid')</label>
                                        <input type="text" id="totalMorbidDate" class="form-control">
                                    </div>
                                </div>
                             
    
                            </div>

                            <div class="row p-t-20">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label
                                                    class="control-label">@lang('invaNotice.attr.total_months_contribute')</label>
                                                <input type="text" id="totalMonthContribute" class="form-control">
                                            </div>
                                        </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('invaNotice.attr.qualifying_ondition')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.full')</option>
                                            <option>@lang('invaNotice.attr.reduced')</option>
                                            <option>@lang('invaNotice.attr.full2440')</option>
                                            <option>@lang('invaNotice.attr.full3660')</option>
                                            <option>@lang('invaNotice.attr.invalidity_assist')</option>
                                            <option>@lang('invaNotice.attr.not_qualified')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('invaNotice.attr.total_months_morbid')</label>
                                        <input type="text" id="totalMorbidDate" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.invalid_date_req')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.yes')</option>
                                            <option>@lang('invaNotice.attr.no')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.morbid_date_req')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.yes')</option>
                                            <option>@lang('invaNotice.attr.no')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.cp_req')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.yes')</option>
                                            <option>@lang('invaNotice.attr.no')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.s56_req')</label>
                                        <select class="form-control">
                                            <option>@lang('invaNotice.attr.yes')</option>
                                            <option>@lang('invaNotice.attr.no')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.about_illness')</label>
                                        <input type="text" id="aboutIllness" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('invaNotice.attr.illness_year')</label>
                                        <input type="text" id="illnessYear" class="form-control">
                                    </div>
                                </div>
                            </div>

                           

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> @lang('insuredPerson.save')</button>

                            </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
