<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Query And Opinion')</label>
                                <select class="form-control" data-placeholder="queryAndOpinion" tabindex="2"
                                    id=selectQueryOpinion>
                                    <option selected disabled hidden>Please Choose </option>
                                    <option value="query">@lang('Query')</option>
                                    <option value="opinion">@lang('Opinion')</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-----------------Query ------------>

<div class="row" id="query1" style="display:none;">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang(' Remarks')</label>
                                    <textarea type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Route')</label>
                                <input type="text" name="route" id="Route" class="form-control">
                            </div>
                            <div class="form-actions">
                                <button type="submit"
                                    class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

    <!-------------Opinion --------->


    <div class="row" id="opinion1" style="display:none;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table-responsive">

                                        <table id="demo-foo-row-toggler" class="table table-bordered"
                                            data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th>@lang('No')</th>
                                                    <th>@lang('Type Of Opinion')</th>
                                                    <th>@lang('Action')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <select class="form-control"
                                                            data-placeholder="idType_invalidity" tabindex="2">
                                                            <option selected disabled hidden>Please Choose </option>
                                                            <option value="">@lang('Medical Opinion')</option>
                                                            <option value="">@lang('Legal Opinion')</option>
                                                            <option value="">@lang('ARO Opinion')</option>
                                                            <option value="">@lang('PPN Opinion')</option>
                                                        </select>
                                                    </td>
                                                    <td col width="180">
                                                        <button type="button" id="btn_view"
                                                            class="btn waves-effect waves-light btn-primary col-sm-6 col-md-4 col-lg-3 f-icon"
                                                            style="margin:3px;">
                                                            <i class="fas fa-file"></i></button>
                                                        <button type="button" id="btn_delete_od4"
                                                            class="btn btn-sm btn-danger " style="margin:3px;">
                                                            <i class="fas fa-trash-alt fa-sm "></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                                id="addOpinion">@lang('ADD OPINION')</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!------- Opinion details ------>


<div class="col-md-12" style="display:none;" id="opinionDetails">
    <div class="card">
        <div class="card-body">
            <!-- sample modal content -->
            <h6 class="card-title">Opinion</h6>
            <hr>
            <div class='row'>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>@lang(' Purpose of Reference')</label>
                        <input type="text" name="employerCode" id="empCode" value="" class="form-control">
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang(' Case Details')</label>
                        <textarea type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang(' Investigation Details')</label>
                        <textarea type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang(' Doubtful/Issue')</label>
                        <textarea type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang(' Recommendation')</label>
                        <textarea type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                <button type="button" class="btn btn waves-effect waves-light btn-info"
                    onclick="submitform()">@lang('button.reset')</button>

                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                    onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                    onclick="window.location='/obform_od'">@lang('button.back')</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#selectQueryOpinion').on('change', function () {
            if (this.value == "query") {
                $('#query1').show();
                $('#opinion1').hide();
                $('#opinionDetails').hide();
            } else {
                $('#query1').hide();
                $('#opinion1').show();
                $('#addOpinion').click(function () {

                    $('#opinionDetails').show();

                });
            }
        });
    });
</script>
