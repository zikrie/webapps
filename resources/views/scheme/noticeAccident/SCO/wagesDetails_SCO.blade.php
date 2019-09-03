<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        
                        <h5 class="card-title">@lang('scheme/wages.title')</h5>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.minimum_wages')</label>
                                    <select class="form-control clearFields" name="accdworkingday">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                            <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                            {{-- @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                            <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @elseif (!empty($accinfo) && $accinfo->accwork == 'N') --}}
                                            <option value='Y' >@lang('scheme/accidentDetails.yes')</option>
                                            <option value='N' selected>@lang('scheme/accidentDetails.no')</option>
                                            {{-- @else
                                            <option value='Y'>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @endif --}}
                                        </select>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">@lang('scheme/similarWorker.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.similarWorker')</label>
                                    <input type="text" id="empcode" name="empcode" value="" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">@lang('scheme/employer.title')</h5>
                        <hr>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.empcode')</label>
                                    <input type="text" id="empcode" name="empcode" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.company_name')</label>
                                    <input type="text" id="empname" name="empname" value="" class="form-control" >
                                </div>
                            </div>   
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.commencement_date')</label><span class="required">*</span>
                                    <input type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.end_date')</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('accidentDetails.attr.are_wagesPaid')</label>
                                    <select class="form-control" name="wagespaid"> --}}
                                            {{-- <option value="">@if(!empty($accinfo)){{$accinfo->wagespaid}} @endif</option--> --}} 
                                            
                                            {{-- <option>Please select</option>
                                            @if (!empty($accinfo) && $accinfo->wagespaid == 'Y')
                                            <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @elseif (!empty($accinfo) && $accinfo->wagespaid == 'N')
                                            <option value='Y' >@lang('accidentDetails.yes')</option>
                                            <option value='N' selected>@lang('accidentDetails.no')</option>
                                            @else
                                            <option value='Y'>@lang('accidentDetails.yes')</option>
                                            <option value='N'>@lang('accidentDetails.no')</option>
                                            @endif
                                        </select>
                                </div>
                            </div> --}}
                        </div>
                        <!-- Column -->
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('scheme/wages.attr.details_wages_accd')</label>
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                            data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('scheme/wages.attr.num')</th>
                                                    <th style='width:9%' class="text-center">@lang('scheme/wages.attr.year')</th>
                                                    <th style='width:16%' class="text-center">@lang('scheme/wages.attr.month')</th>
                                                    <th style='width:15%' class="text-center">@lang('scheme/wages.attr.wages')</th>
                                                    <th style='width:15%' class="text-center">@lang('scheme/wages.attr.contribution_payable')</th>
                                                    <th style='width:15%' class="text-center">@lang('scheme/wages.attr.contribution_paid')</th>
                                                    {{-- <th style='width:15%' class="text-center">@lang('wages.attr.contribution')</th> --}}
                                                    <th style='width:15%' class="text-center">@lang('scheme/wages.attr.contribution_surplus')</th>
                                                    <th style='width:5%' class="text-center">@lang('scheme/wages.attr.reject')</th>
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
                                                                <option>@lang('scheme/wages.attr.please_select')</option>
                                                                <option value="January">@lang('scheme/wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('scheme/wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('scheme/wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('scheme/wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('scheme/wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('scheme/wages.attr.december')</option>
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
                                                                <option>@lang('scheme/wages.attr.please_select')</option>
                                                                <option value="January">@lang('scheme/wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('scheme/wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('scheme/wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('scheme/wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('scheme/wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('scheme/wages.attr.december')</option>
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
                                                                <option>@lang('scheme/wages.attr.please_select')</option>
                                                                <option value="January">@lang('scheme/wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('scheme/wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('scheme/wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('scheme/wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('scheme/wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('scheme/wages.attr.december')</option>
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
                                                                <option>@lang('scheme/wages.attr.please_select')</option>
                                                                <option value="January">@lang('scheme/wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('scheme/wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('scheme/wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('scheme/wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('scheme/wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('scheme/wages.attr.december')</option>
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
                                                                <option>@lang('scheme/wages.attr.please_select')</option>
                                                                <option value="January">@lang('scheme/wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('scheme/wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('scheme/wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('scheme/wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('scheme/wages.attr.december')</option>
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
                                                                <option>@lang('scheme/wages.attr.please_select')</option>
                                                                <option value="January">@lang('scheme/wages.attr.january')
                                                                </option>
                                                                <option value="February">
                                                                    @lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')
                                                                </option>
                                                                <option value="April">@lang('scheme/wages.attr.april')
                                                                </option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')
                                                                </option>
                                                                <option value="July">@lang('scheme/wages.attr.july')
                                                                </option>
                                                                <option value="August">@lang('scheme/wages.attr.august')
                                                                </option>
                                                                <option value="September">
                                                                    @lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')
                                                                </option>
                                                                <option value="November">
                                                                    @lang('scheme/wages.attr.november')</option>
                                                                <option value="December">
                                                                    @lang('scheme/wages.attr.december')</option>
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
                                    <label class="control-label">@lang('scheme/wages.attr.wages_type')</label>
                                    <select class="form-control">
                                        <option value="">@lang('scheme/wages.attr.please_select')</option>
                                        <option value="">@lang('scheme/wages.attr.multiple')</option>
                                        <option value="">@lang('scheme/wages.attr.similar_worker')</option>
                                        <option value="">@lang('scheme/wages.attr.similar_industry')</option>
                                        <option value="">@lang('scheme/wages.attr.minimum_wages')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.recommended')</label>
                                    <select class="form-control">
                                        <option value="">@lang('scheme/wages.attr.please_select')</option>
                                        <option value="">@lang('scheme/wages.attr.yes')</option>
                                        <option value="">@lang('scheme/wages.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7"></label>
                                    <label class="control-label">@lang('wages.attr.minimum_wages')</label>
                                </div>
                            </div> --}}
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>