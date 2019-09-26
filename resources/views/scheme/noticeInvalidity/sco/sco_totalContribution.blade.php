<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <h5 class="card-title">@lang('totalcontri.title')</h3>
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('totalcontri.attr.employer_code')</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('totalcontri.attr.employer_name')</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                    </div>
                    <!-- Column -->
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            {{-- <label>@lang('totalcontri.attr.details_wages')</label> --}}
                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th>@lang('totalcontri.attr.year')</th>
                                            <th colspan="6" data-breakpoints="xs sm">
                                                @lang('totalcontri.attr.employer_monthly_contribution')
                                            </th>
                                            
                                            <th data-breakpoints="xs">
                                                @lang('totalcontri.attr.totalmonths_contributed')</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td rowspan="4">
                                                2019
                                            </td>
                                            <td>@lang('totalcontri.attr.month_1')</td>
                                            <td>@lang('totalcontri.attr.month_2')</td>
                                            <td>@lang('totalcontri.attr.month_3')</td>
                                            <td>@lang('totalcontri.attr.month_4')</td>
                                            <td>@lang('totalcontri.attr.month_5')</td>
                                            <td>@lang('totalcontri.attr.month_6')</td>
                                            <td rowspan="4">FDSAFA</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr >
                                                <td>@lang('totalcontri.attr.month_7')</td>
                                                <td>@lang('totalcontri.attr.month_8')</td>
                                                <td>@lang('totalcontri.attr.month_9')</td>
                                                <td>@lang('totalcontri.attr.month_10')</td>
                                                <td>@lang('totalcontri.attr.month_11')</td>
                                                <td>@lang('totalcontri.attr.month_12')</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                                <td><input type="text" class="form-control"></td>
                                            </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        {{-- <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button> --}}
                        <button type="submit" class="btn btn-success">
                            @lang('insuredPerson.save')</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
