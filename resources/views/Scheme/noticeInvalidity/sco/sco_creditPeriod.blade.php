                                                                                                                                                        <div class="row">
                                                                                                                                                            <div class="col-12">
                                                                                                                                                                <div class="card">
                                                                                                                                                                    <div class="card-body">
                                                                                                                                                                        <div class="p-20">
                                                                                                                                                                            <form action="#">
                                                                                                                                                                                <h5 class="card-title">@lang('creditPeriod.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('creditPeriod.attr.hus_notice_id')</label>
                                    <input type="text" id="case_status" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('creditPeriod.attr.start_date')</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('creditPeriod.attr.end_date')</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control">
                                </div>
                            </div>

                        </div>


                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('creditPeriod.attr.total_months')</label>
                                    <input type="text" id="total_months" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('creditPeriod.attr.overall_months')</label>
                                    <input type="text" id="overall_months" class="form-control">

                                </div>
                            </div>


                        </div>

                        <div class="form-actions">

                                <button type="submit" class="btn btn waves-effect waves-light btn-success">
                                    @lang('confirmation.save')</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
