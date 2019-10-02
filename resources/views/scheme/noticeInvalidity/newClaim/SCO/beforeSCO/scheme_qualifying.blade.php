<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">

                        <div class="row p-t-20">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Scheme Entry Date')</label>
                                    <input type="text" name="Scheme_EntryDate" id="schemeEntryDate"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Age on notice date ')</label>
                                    <input type="text" name="Age_NoticeDate" id="ageNoticeDate" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Age at the time of scheme entry date')</label>
                                    <input type="date" name="Age_SchemeEntryDate" id="ageSchemeEntryDate"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Eligibility based on age on the date of entry
                                        scheme')</label>
                                    <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="">@lang('Eligible')</option>
                                        <option value="">@lang('Not Eligible')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Statutory Body')</label>
                                    <select class="form-control" data-placeholder="idType_invalidity" tabindex="2"
                                        id="selectStatutoryBody">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="y">@lang('Yes')</option>
                                        <option value="n">@lang('No')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-4" style="display:none;" id="typeOfStatutoryBody">
                                <div class="form-group">
                                    <label class="control-label">@lang('Type of Statutory Body ')</label>
                                    <select class="form-control" data-placeholder="idType_invalidity" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="">@lang('Statutory Body')</option>
                                        <option value="">@lang('Private Statutory Body')</option>
                                        <option value="">@lang('University Statutory Body and others')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Employment Start Date.')</label>
                                    <input type="date" name="Employment_StartDate" id="employmentStartDate"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Employment End Date')</label>
                                    <input type="date" name="Employment_EndtDate" id="employmentEndDate"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Total Months between Scheme Entry and Notice
                                        Date')</label>
                                    <input type="text" name="total_Month" id="TotalMonth" class="form-control">
                                </div>
                            </div>
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Total Months Contributed')</label>
                                    <input type="text" name="totalmonthContribute" id="Total_MonthContribute"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-mdcol-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Qualifying Condition')</label>
                                    <input type="text" name="qualifying_Condition" id="QualifyingCondition"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <!----------------age more than 60 ---------->

                        <div class="row">
                            <div class="col-md-10 m-b-10" style="display:none;" id="ageMoreThan60">

                            <label class="control-label">Regulations 46</label>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">1. Insured person is suffering from
                                            invalidity</label>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ageQ1a" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="ageQ1a">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ageQ1b" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="ageQ1b">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">2. Insured Person is incapable of engaging
                                            substaintially gainful activities
                                            before attains the age of 60 years old.</label>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ageQ2a" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="ageQ2a">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ageQ2b" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="ageQ2b">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label"> 3. Insured person has not been gainfully employed
                                            since then.</label>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ageQ3a" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="ageQ3a">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ageQ3b" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="ageQ3b">No</label>
                                            </div>
                                        </div>
                                    </div>
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


<script>
    //var age = document.getElementById("ageNoticeDate");

    $(document).ready(function () {
        $('#selectStatutoryBody').change(function () {
            if (this.value == 'y') {
                $('#typeOfStatutoryBody').show();
            } else {
                $('#typeOfStatutoryBody').hide();
            }
        });


        $('#ageNoticeDate').change(function () {
            var age = $(this).val();
            if (parseInt(age) >= 60) {
                $('#ageMoreThan60').show();

            } else {
                $('#ageMoreThan60').hide();
            }

        });
    });

</script>
