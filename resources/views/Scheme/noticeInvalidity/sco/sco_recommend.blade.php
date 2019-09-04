<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h5 class="card-title">@lang('suggestion.title')</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.section_96')</label>
                                        <select class="form-control">
                                            <option>@lang('suggestion.attr.yes')</option>
                                            <option>@lang('suggestion.attr.no')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.huk_id')</label>
                                        <input type="text" name="hukId" id="hukId" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-0">
                                    <div class="form-group">
                                        <br>

                                        <button type="button" data-toggle="modal" data-target="#modal_huk"
                                            class="btn btn-facebook waves-effect waves-light"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>




                            </div>


                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.option_hukilat')</label>
                                        <select class="form-control">
                                            <option selected hidden>Please Choose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.received_date')</label>
                                        <input type="date" id="receivedDate" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.potential_96')</label>
                                        <select class="form-control">
                                            <option>@lang('suggestion.attr.yes')</option>
                                            <option>@lang('suggestion.attr.no')</option>
                                        </select>
                                    </div>
                                </div>



                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.remark_96')</label>
                                        <input type="text" id="remark" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label
                                            class="control-label">@lang('suggestion.attr.recommend_medical_board')</label>
                                        <select class="form-control">
                                            <option>@lang('suggestion.attr.yes')</option>
                                            <option>@lang('suggestion.attr.no')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.wrong_benefit_type')</label>
                                        <select class="form-control">
                                            <option>@lang('suggestion.attr.yes')</option>
                                            <option>@lang('suggestion.attr.no')</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.scheme_date')</label>
                                        <input type="date" id="schemeDate" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('suggestion.attr.routing')</label>
                                        <select class="form-control">
                                            <option>@lang('suggestion.attr.pk')</option>
                                            <option>@lang('suggestion.attr.io')</option>
                                            <option>@lang('suggestion.attr.sao')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- sample modal content -->
                                        <div id="modal_huk" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="vcenter" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="vcenter">Case Number</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Case Ref No</h4>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->


                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> @lang('insuredPerson.save')</button>

                            </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
