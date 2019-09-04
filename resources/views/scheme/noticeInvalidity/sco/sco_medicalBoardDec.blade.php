<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('medicalDetails.title1')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.invalidity_date')</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.morbidity_date')</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.jd_date')</label>
                                    <input type="date" name="jd_date" id="jd_date" class="form-control" disabled>
                                </div>
                            </div>

                        </div>


                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.illness')</label>
                                    <input type="text" id="illness" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('medicalDetails.attr.invalidity_decision')</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.els')</label>
                                    <select class="form-control" disabled>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                </div>
                            </div>


                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('medicalDetails.attr.jd_type')</label>
                                    <select class="form-control" disabled>
                                        <option value="jd">JD</option>
                                        <option value="jdr">JDR</option>
                                        <option value="jdk">JDK</option>
                                    </select>
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