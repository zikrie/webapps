<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <h4 class="card-title">@lang('scheme/inconsistent.title')</h4>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.item')</label>
                                    <input type="text" name="item" id="item" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.data')</label>
                                    <input type="text" name="data" id="data" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.review')</label>
                                    <input type="text" name="review" id="review" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.review_by')</label>
                                    <input type="text" name="reviewby" id="reviewby" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h3 class="box-title m-t-40">@lang('scheme/inconsistent.title_justification')</h3>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.investigation_date')</label>
                                    <input type="text" name="investigationdate" id="investigationdate" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.date')</label>
                                    <input type="text" name="date" id="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.finding_data')</label>
                                    <input type="text" name="findingdata" id="findingdata" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.justification')</label>
                                    <input type="text" name="justification" id="justification" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/inconsistent.attr.justify_by')</label>
                                    <input type="text" name="justifyby" id="justifyby" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                            @lang('scheme/insuredPerson.save')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>