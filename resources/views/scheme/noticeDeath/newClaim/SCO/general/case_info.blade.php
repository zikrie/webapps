<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                            {{-- <h5 class="card-title">@lang('scheme/caseDetails.title')</h5>
                            <hr> --}}
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.caseCategory')</label>
                                        <input type="text" name="caseCategory" id="caseCategory" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.scheme_ref_no')</label>
                                        <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.typeOfScheme')</label>
                                        <input type="text" name="typeOfScheme" id="typeOfScheme" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.SPIeligible')</label>
                                        <input type="text" id="SPIeligible" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.notice_type')</label>
                                        <input type="text" id="notice_type" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.general.collapse.case_info.notice_date')</label>
                                        <input type="date" name="notice_date" id="notice_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.accident_date')</label>
                                        <input type="date" name="registrationDate" id="registrationDate" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.general.collapse.case_info.form34_date')</label>
                                        <input type="date" name="form34_date" id="form34_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.registrationDate')</label>
                                        <input type="date" name="registrationDate" id="registrationDate" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('form/scheme.general.collapse.case_info.socsoRegistrationOffice')</label>
                                        <input type="text" name="socsoOffice" id="socsoOffice" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/scheme.general.collapse.case_info.socsoOffice')</label>
                                        <input type="text" name="socsoOffice" id="socsoOffice" class="form-control">
                                    </div>
                                </div>
                            </div>
                            {{--<div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.spi_eligible')</label><span class="required">*</span>
                                        <select class="form-control">
                                            <option value="">@lang('caseDetails.attr.qualified')</option> 
                                            <option value="">@lang('caseDetails.attr.minimum_12')</option> 
                                            <option value="">@lang('caseDetails.attr.not_qualified')</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.potential_HUK')</label>
                                            <select class="form-control">
                                                <option value="N">@lang('caseDetails.attr.no')</option> 
                                                <option value="Y">@lang('caseDetails.attr.yes')</option> 
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.potential_96')</label>
                                            <select class="form-control">
                                                <option value="N">@lang('caseDetails.attr.no')</option> 
                                                <option value="Y">@lang('caseDetails.attr.yes')</option> 
                                            </select>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('caseDetails.attr.death_date')</label>
                                            <input type="date" name="death_date" id="death_date" class="form-control">
                                    </div>
                                </div> 
                            </div>--}}
                            <div class="row p-t-20">
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.ilat_notice')</label>
                                            <input type="text" name="ilatNotice" id="ilatNotice" class="form-control">
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.declare_117')</label>
                                        <select class="form-control">
                                            <option>@lang('caseDetails.attr.yes')</option> 
                                            <option>@lang('caseDetails.attr.no')</option> 
                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="row p-t-20">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('caseDetails.attr.remark')</label>
                                            <input type="text" name="remark" id="remark" class="form-control">
                                    </div>
                                </div>
                            </div>  --}}
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.next')</button>
                            </div>             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>