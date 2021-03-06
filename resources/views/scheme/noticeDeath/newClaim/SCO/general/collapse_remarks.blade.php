<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/scheme.general.collapse.remarks.title')</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table id="table-remarks" class="table table-sm table-bordered" data-toggle-column="first">
                                                <thead>
                                                <tr>
                                                    <th>@lang('form/scheme.general.collapse.remarks.date')</th>
                                                    <th>@lang('form/scheme.general.collapse.remarks.time')</th>
                                                    <th>@lang('form/scheme.general.collapse.remarks.from')</th>
                                                    <th>@lang('form/scheme.general.collapse.remarks.to')</th>
                                                    <th>@lang('form/scheme.general.collapse.remarks.remark')</th>
                                                </tr>
                                            </thead>
                                            <tbody class='align-middle'>
                                                <tr> 
                                                    <td> <input  type="hidden" id="date" name="date" value="" class="form-control" >No Record</td>
                                                    <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required ></td>
                                                    <td> <input  type="hidden" id="from" name="from" value="" class="form-control" required ></td>
                                                    <td> <input  type="hidden" id="to" name="to" value="" class="form-control" required ></td>
                                                    <td> <input  type="hidden" id="remark" name="remark" value="" class="form-control" required ></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/scheme.general.collapse.remarks.remark')</label>
                                    <textarea type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>