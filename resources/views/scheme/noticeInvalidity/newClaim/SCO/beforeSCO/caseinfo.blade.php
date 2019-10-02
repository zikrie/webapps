<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                    <h5 class="card-title">@lang('Preparer Information')</h5>
                        <hr> 
                        <div class="row p-t-20">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Perpared By')</label>
                                    <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Prepared Date')</label>
                                    <input type="date" name="prepared_date" id="PreparedDate" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4" style="display:none;">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <label class="custom-control-label" for="checkbox3">Recommendation Rehabilitation</label>
                                    <input type="checkbox" class="custom-control-input" name="list_doc[]" id="checkbox3" value="check3">
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-4" style="display:none;">
                                <div class="form-group">
                                    <label class="control-label">@lang('Refer to Medical Board')</label>
                                         <select class="form-control" data-placeholder="" tabindex="2">
                                            <option selected readonly disabled hidden>Please Choose </option>
                                            <option value="">@lang('Yes')</option>
                                            <option value="">@lang('No')</option>
                                        </select>
                                </div>
                            </div>
                        </div>

                         <h5 class="card-title">@lang('scheme/caseDetails.title')</h5>
                        <hr> 

                        <div class="row p-t-20">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.caseCategory')</label>
                                    <input type="text" name="caseCategory" id="caseCategory" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.scheme_ref_no')</label>
                                    <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.typeOfScheme')</label>
                                    <input type="text" name="typeOfScheme" id="typeOfScheme" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.SPIeligible')</label>
                                    <input type="text" name="SPI_eligible" id="SPIeligible" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.notice_type')</label>
                                    <input type="text" id="notice_type" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.notice_date')</label>
                                    <input type="date" name="notice_date" id="notice_date" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.form34_date')</label>
                                    <input type="date" name="form34_date" id="form34_date" class="form-control" >
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/caseDetails.attr.registrationDate')</label>
                                    <input type="date" name="registrationDate" id="registrationDate"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('In employment.')</label>
                                    <div id="input-type" class="row">
                                        <div class="col-sm-6 m-b-10">
                                            <label class="radio-inline m-b-10" onclick=""><input name="InEmployment1"
                                                    id="inEmployment1" type="radio" /> Yes</label>
                                        </div>
                                        <div class="col-sm-6 m-b-10">
                                            <label class="radio-inline m-b-10" onclick=""><input name="InEmployment2"
                                                    id="inEmployment12" type="radio" /> No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Accident Potential')</label>
                                    <div id="input-type" class="row">
                                        <div class="col-sm-6 m-b-10">
                                            <label class="radio-inline m-b-10" onclick=""><input name="AccidentPotential1"
                                                    id="accidentPotential1" type="radio" /> Yes</label>
                                        </div>
                                        <div class="col-sm-6 m-b-10">
                                            <label class="radio-inline m-b-10" onclick=""><input name="AccidentPotential2"
                                                    id="accidentPotential2" type="radio" /> No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('scheme/caseDetails.attr.socsoRegistrationOffice')</label>
                                    <input type="text" name="socsoOffice" id="socsoOffice" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/caseDetails.attr.socsoOffice')</label>
                                    <input type="text" name="socsoOffice" id="socsoOffice" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.next')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
