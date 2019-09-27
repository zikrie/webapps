<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                        <h3 class="card-title">@lang('scheme/wagesContribute.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wagesContribute.attr.start_date')</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wagesContribute.attr.end_date')</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wagesContribute.attr.wages_paid_accident')</label>
                                    <input type="date" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="row p-t-20">
                                <div class="col-md-12">
                                    <label>@lang('scheme/wagesContribute.attr.details_wages')</label>
                                    <div class="table-responsive">
                                        <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">@lang('scheme/wagesContribute.attr.num')</th>
                                                    <th>@lang('scheme/wagesContribute.attr.contribution_month')</th>
                                                    <th>@lang('scheme/wages.attr.year')</th>
                                                    <th>@lang('scheme/wages.attr.month')</th>
                                                    <th data-breakpoints="xs sm">@lang('scheme/wagesContribute.attr.wages')</th>
                                                    <th data-breakpoints="xs">@lang('scheme/wagesContribute.attr.contribute_payable')</th>
                                                    <th data-breakpoints="xs">@lang('scheme/wagesContribute.attr.contribute_paid')</th>
                                                    <th data-breakpoints="xs">@lang('scheme/wagesContribute.attr.contribution')</th>
                                                    <th data-breakpoints="xs">@lang('scheme/wagesContribute.attr.contributionsupr')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-expanded="true">
                                                    <td>1</td>
                                                    <td>
                                                            <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('scheme/wagesContribute.attr.january')</option>
                                                                <option value="February">@lang('scheme/wagesContribute.attr.february')</option>
                                                                <option value="March">@lang('scheme/wagesContribute.attr.march')</option>
                                                                <option value="April">@lang('scheme/wagesContribute.attr.april')</option>
                                                                <option value="May">@lang('scheme/wagesContribute.attr.may')</option>
                                                                <option value="June">@lang('scheme/wagesContribute.attr.june')</option>
                                                                <option value="July">@lang('scheme/wagesContribute.attr.july')</option>
                                                                <option value="August">@lang('scheme/wagesContribute.attr.august')</option>
                                                                <option value="September">@lang('scheme/wagesContribute.attr.september')</option>
                                                                <option value="October">@lang('scheme/wagesContribute.attr.october')</option>
                                                                <option value="November">@lang('scheme/wagesContribute.attr.november')</option>
                                                                <option value="December">@lang('scheme/wagesContribute.attr.december')</option>
                                                            </select>
                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                     <td><input type="text" class="form-control"></td>
                                                    <td>

                                                        <select class="form-control" data-placeholder="contribution" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="Surplus">@lang('scheme/wagesContribute.attr.surplus')</option>
                                                                <option value="Deficit">@lang('scheme/wagesContribute.attr.deficit')</option>
                                                                <option value="Arrears">@lang('scheme/wagesContribute.attr.arrears')</option>
                                                            </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        
                                                            <input type="text" class="form-control">
                                                       
                                                    </td>
                                                    <td>
                                                      
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('scheme/wages.attr.january')</option>
                                                                <option value="February">@lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')</option>
                                                                <option value="April">@lang('scheme/wages.attr.april')</option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')</option>
                                                                <option value="July">@lang('scheme/wages.attr.july')</option>
                                                                <option value="August">@lang('scheme/wages.attr.august')</option>
                                                                <option value="September">@lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')</option>
                                                                <option value="November">@lang('scheme/wages.attr.november')</option>
                                                                <option value="December">@lang('scheme/wages.attr.december')</option>
                                                            </select>

                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                     <td><input type="text" class="form-control"></td>
                                                    <td>

                                                        <select class="form-control" data-placeholder="contribution" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="Surplus">@lang('scheme/wagesContribute.attr.surplus')</option>
                                                                <option value="Deficit">@lang('scheme/wagesContribute.attr.deficit')</option>
                                                                <option value="Arrears">@lang('scheme/wagesContribute.attr.arrears')</option>
                                                            </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>

                                                            <input type="text" class="form-control">

                                                    </td>
                                                    <td>

                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('scheme/wages.attr.january')</option>
                                                                <option value="February">@lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')</option>
                                                                <option value="April">@lang('scheme/wages.attr.april')</option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')</option>
                                                                <option value="July">@lang('scheme/wages.attr.july')</option>
                                                                <option value="August">@lang('scheme/wages.attr.august')</option>
                                                                <option value="September">@lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')</option>
                                                                <option value="November">@lang('scheme/wages.attr.november')</option>
                                                                <option value="December">@lang('scheme/wages.attr.december')</option>
                                                            </select>

                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                     <td><input type="text" class="form-control"></td>
                                                    <td>

                                                        <select class="form-control" data-placeholder="contribution" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="Surplus">@lang('scheme/wagesContribute.attr.surplus')</option>
                                                                <option value="Deficit">@lang('scheme/wagesContribute.attr.deficit')</option>
                                                                <option value="Arrears">@lang('scheme/wagesContribute.attr.arrears')</option>
                                                            </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                            <input type="text" class="form-control">

                                                    </td>
                                                    <td>

                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('scheme/wages.attr.january')</option>
                                                                <option value="February">@lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')</option>
                                                                <option value="April">@lang('scheme/wages.attr.april')</option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')</option>
                                                                <option value="July">@lang('scheme/wages.attr.july')</option>
                                                                <option value="August">@lang('scheme/wages.attr.august')</option>
                                                                <option value="September">@lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')</option>
                                                                <option value="November">@lang('scheme/wages.attr.november')</option>
                                                                <option value="December">@lang('scheme/wages.attr.december')</option>
                                                            </select>

                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td>

                                                        <select class="form-control" data-placeholder="contribution" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="Surplus">@lang('scheme/wagesContribute.attr.surplus')</option>
                                                                <option value="Deficit">@lang('scheme/wagesContribute.attr.deficit')</option>
                                                                <option value="Arrears">@lang('scheme/wagesContribute.attr.arrears')</option>
                                                            </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
  
                                                            <input type="text" class="form-control">

                                                    </td>
                                                    <td>

                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('scheme/wages.attr.january')</option>
                                                                <option value="February">@lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')</option>
                                                                <option value="April">@lang('scheme/wages.attr.april')</option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')</option>
                                                                <option value="July">@lang('scheme/wages.attr.july')</option>
                                                                <option value="August">@lang('scheme/wages.attr.august')</option>
                                                                <option value="September">@lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')</option>
                                                                <option value="November">@lang('scheme/wages.attr.november')</option>
                                                                <option value="December">@lang('scheme/wages.attr.december')</option>
                                                            </select>

                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>

                                                    <td>

                                                        <select class="form-control" data-placeholder="contribution" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="Surplus">@lang('scheme/wagesContribute.attr.surplus')</option>
                                                                <option value="Deficit">@lang('scheme/wagesContribute.attr.deficit')</option>
                                                                <option value="Arrears">@lang('scheme/wagesContribute.attr.arrears')</option>
                                                            </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>

                                                            <input type="text" class="form-control">

                                                    </td>
                                                    <td>
 
                                                            <select class="form-control" data-placeholder="Month" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="January">@lang('scheme/wages.attr.january')</option>
                                                                <option value="February">@lang('scheme/wages.attr.february')</option>
                                                                <option value="March">@lang('scheme/wages.attr.march')</option>
                                                                <option value="April">@lang('scheme/wages.attr.april')</option>
                                                                <option value="May">@lang('scheme/wages.attr.may')</option>
                                                                <option value="June">@lang('scheme/wages.attr.june')</option>
                                                                <option value="July">@lang('scheme/wages.attr.july')</option>
                                                                <option value="August">@lang('scheme/wages.attr.august')</option>
                                                                <option value="September">@lang('scheme/wages.attr.september')</option>
                                                                <option value="October">@lang('scheme/wages.attr.october')</option>
                                                                <option value="November">@lang('scheme/wages.attr.november')</option>
                                                                <option value="December">@lang('scheme/wages.attr.december')</option>
                                                            </select>

                                                    </td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                     <td><input type="text" class="form-control"></td>
                                                    <td>

                                                        <select class="form-control" data-placeholder="contribution" tabindex="2">
                                                                {{-- <option>@lang('wages.attr.select_month')</option> --}}
                                                                <option value="Surplus">@lang('scheme/wagesContribute.attr.surplus')</option>
                                                                <option value="Deficit">@lang('scheme/wagesContribute.attr.deficit')</option>
                                                                <option value="Arrears">@lang('scheme/wagesContribute.attr.arrears')</option>
                                                            </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/wages.attr.accept_io')</label>
                                    <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Yes &nbsp; &nbsp; </label>   <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">No</label> 
                                        </div>
                                        
                                </div>
                            </div>
                        
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.reason_io')</label>
                                    <input type="text" name="reason_io" id="reason_io" class="form-control">
                                </div>
                            </div>
                            

                        <div class="col-md-4">
                                <div class="form-group">
                                     <label class="control-label">@lang('scheme/wages.attr.remark_io')</label>
                                    <input type="text" name="scheme_ref_no" id="notice_date" class="form-control">
                                </div>
                            </div>

                            </div>

                            <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/wages.attr.min_io')</label>
                                    <input type="text" id="min_io" class="form-control">
                                </div>
                            </div>
                        
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.accept')</label>
                                    <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control">
                                </div>
                            </div>
                            

                    <div class="col-md-4">
                                <div class="form-group">
                                     <label class="control-label">@lang('scheme/wages.attr.reason')</label>
                                    <input type="date" name="scheme_ref_no" id="notice_date" class="form-control">
                                </div>
                            </div>

                            </div>

                                   <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="control-label">@lang('scheme/wages.attr.remark')</label>
                                    <input type="text" id="remark" class="form-control">
                                </div>
                            </div>
                        
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/wages.attr.min_wages')</label>
                                    <input type="text" name="min_wages" id="min_wages" class="form-control">
                                </div>
                            </div>
                            </div>


                        <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-actions">
                                        <button type="button" class="btn btn-danger">@lang('scheme/wages.cancel')</button>
                                        <button type="button" class="btn btn-warning">@lang('scheme/wages.clear')</button>
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('scheme/wages.save')</button>
                                </div>
                            </div>  
                            </div>   
                                       
                </form>
            </div>
        </div>
    </div>
</div>