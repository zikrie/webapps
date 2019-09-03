<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <h5 class="card-title">@lang('wages.title2')</h3>
                    <hr>
                    <!-- Column -->
                    <div class="row p-t-20">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="xs">@lang('wages.attr.num')</th>
                                            <th>@lang('wages.attr.year')</th>
                                            <th>@lang('wages.attr.total_month_contribute')</th>
                                            <th>@lang('wages.attr.source')</th>
                                            <th data-breakpoints="xs">@lang('wages.attr.recommendation')</th>
                                            <th data-breakpoints="xs">@lang('wages.attr.recommended_by')</th>
                                            <th data-breakpoints="xs">@lang('wages.attr.recommended_date')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true">
                                            <td>1</td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="date" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="date" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="date" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="date" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="date" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>

                                                <input type="text" class="form-control">

                                            </td>

                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="date" class="form-control"></td>
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
