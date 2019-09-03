<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('wages.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Employer Name</label>
                                       <input type="text" name="empname" id="empname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Employer Code</label>
                                       <input type="text" name="empcode" id="empcode" class="form-control">
                                    </div>
                                </div>
                            </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.commencement_date')</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.end_date')</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('wages.attr.details_wages_death')</label>
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                            data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('wages.attr.num')</th>
                                                    <th style='width:9%' class="text-center">@lang('wages.attr.year')</th>
                                                    <th style='width:16%' class="text-center">@lang('wages.attr.month')</th>
                                                    <th style='width:15%' class="text-center">@lang('wages.attr.wages')</th>
                                                    <th style='width:15%' class="text-center">@lang('wages.attr.contribution_payable')</th>
                                                    <th style='width:15%' class="text-center">@lang('wages.attr.contribution_paid')</th>
                                                    <th style='width:15%' class="text-center">@lang('wages.attr.contribution')</th>
                                                    <th style='width:15%' class="text-center">@lang('wages.attr.contribution_surplus')</th>
                                                    <th style='width:15%' class="text-center">@lang('wages.attr.reject')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-expanded="true">
                                                    <td>1</td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                             <select class="form-control"
                                                                data-placeholder="Month" tabindex="2">
                                                                <option>@lang('wages.attr.please_select')</option>
                                                                <option value="January">@lang('wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </td>

                                                </tr>  
                                                <tr data-expanded="true">
                                                    <td>2</td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                             <select class="form-control"
                                                                data-placeholder="Month" tabindex="2">
                                                                <option>@lang('wages.attr.please_select')</option>
                                                                <option value="January">@lang('wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2"></label>
                                                        </div>
                                                    </td>
                                                </tr>  
                                                <tr data-expanded="true">
                                                    <td>3</td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                             <select class="form-control"
                                                                data-placeholder="Month" tabindex="2">
                                                                <option>@lang('wages.attr.please_select')</option>
                                                                <option value="January">@lang('wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                            <label class="custom-control-label" for="customCheck3"></label>
                                                        </div>
                                                    </td>
                                                </tr>  
                                                <tr data-expanded="true">
                                                    <td>4</td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                             <select class="form-control"
                                                                data-placeholder="Month" tabindex="2">
                                                                <option>@lang('wages.attr.please_select')</option>
                                                                <option value="January">@lang('wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                            <label class="custom-control-label" for="customCheck4"></label>
                                                        </div>
                                                    </td>
                                                </tr>  
                                                <tr data-expanded="true">
                                                    <td>5</td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                             <select class="form-control"
                                                                data-placeholder="Month" tabindex="2">
                                                                <option>@lang('wages.attr.please_select')</option>
                                                                <option value="January">@lang('wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                            <label class="custom-control-label" for="customCheck5"></label>
                                                        </div>
                                                    </td>
                                                </tr>   
                                                <tr data-expanded="true">
                                                    <td>6</td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                             <select class="form-control"
                                                                data-placeholder="Month" tabindex="2">
                                                                <option>@lang('wages.attr.please_select')</option>
                                                                <option value="January">@lang('wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('wages.attr.may')</option>
                                                                <option value="June">@lang('wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('wages.attr.september')</option>
                                                                <option value="October">@lang('wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('wages.attr.december')</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-15">
                                                            <input type="text" id="year" name="year" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                            <label class="custom-control-label" for="customCheck6"></label>
                                                        </div>
                                                    </td>
                                                </tr>    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.wages_type')</label>
                                    <select class="form-control">
                                        <option value="">@lang('wages.attr.please_select')</option>
                                        <option value="">@lang('wages.attr.multiple')</option>
                                        <option value="">@lang('wages.attr.similar_worker')</option>
                                        <option value="">@lang('wages.attr.similar_industry')</option>
                                        <option value="">@lang('wages.attr.minimum_wages')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('wages.attr.recommended')</label>
                                    <select class="form-control">
                                        <option value="">@lang('wages.attr.please_select')</option>
                                        <option value="">@lang('wages.attr.yes')</option>
                                        <option value="">@lang('wages.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox"><br><br>
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7"></label>
                                    <label class="control-label">@lang('wages.attr.minimum_wages')</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                                {{-- <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button> --}}
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>