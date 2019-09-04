<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('socso.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('socso.attr.state')</label>
                                        <input type="text" id="case_status" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('socso.attr.city')</label>
                                        <input type="text" name="start_date" id="start_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('socso.attr.state_origin')</label>
                                        <input type="text" name="end_date" id="end_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('socso.attr.city_origin')</label>
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
