<div class="modal fade" id="duplicate-modal" tabindex="-1" role="dialog" aria-labelledby="duplicate-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="duplicate_takwim_modal">@lang('medical_board/takwim.takwim')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="duplicatetakwim_form" action="/takwim/duplicate" method="post">
            <div class="modal-body">
                {{ csrf_field() }}
                    <input type="hidden" name="takwim-index">
                    <input name="takwim_hospital" type="hidden">
                    <input type="hidden" name="takwim_statecode">
                    <input id="takwim_table_count" name="takwim_table_count" type="hidden">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <div class="controls"> --}}
                                <label class="control-label">@lang('medical_board/takwim.attr.date')</label>
                                <div class="input-group input-daterange" id="date-range-duplicate">
                                    <input id="min-date" name="takwim-start-date" type="text" required class="form-control" onkeydown="return false">
                                    <div class="input-group-prepend input-group-append">
                                        <div class="input-group-text">to</div>
                                    </div>
                                    <input name="takwim-end-date" id="takwim-end-date" type="text" required class="form-control" onkeydown="return false">
                                </div>
                            {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.venue')</label>
                                {{-- <div class="controls"> --}}
                                    <input type="text" name="takwim_venue" class="form-control" disabled>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.session')</label>
                                {{-- <div class="controls"> --}}
                                <select name="takwim_session" id="takwim_session" class="form-control" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') --</option>
                                    @foreach ($session as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.medical_board_category')</label>
                                {{-- <div class="controls"> --}}
                                <select name="takwim_medical_board_category" id="takwim_medical_board_category" class="form-control" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($medical_board_category as $value)
                                        {{-- <option value={{$value->refcode}}>{{$value->descen}}</option> --}}
                                        @foreach($value as $v)
                                            <option value="{{$v->refcode}}" {{-- selected = "selected" --}}>{{$v->descen}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                                {{-- </div> --}}
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('takwim.attr.benefit_type')</label>
                                <div class="controls">
                                <select name="takwim_benefit_type" id="takwim_benefit_type" required class="form-control" >
                                    <option value="">-- @lang('index.please_select') -- </option>
                                    @foreach ($benefit_type as $value)
                                    <option value={{$value->refcode}}>{{$value->refcode}} - {{$value->descen}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <hr class="p-t-10" width="100%"> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.chairman')</label>
                                <div class="controls">
                                <select name="takwim_chairman" class="form-control" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($chairman as $value)
                                        <option value={{$value->c_id}}>{{$value->c_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.sectariat')</label>
                                <div class="controls">
                                <select name="takwim_sectariat" class="form-control" disabled>
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($sectariat as $value)
                                        <option value={{$value->sec_id}}>{{$value->sec_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.discipline')</label>
                                <div class="controls">
                                <select name="takwim_discipline" required class="form-control" style="width: 100%;">
                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                    @foreach ($discipline as $value)
                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('medical_board/takwim.attr.quota')</label>
                                <div class="controls">
                                <input type="hidden" name="takwim_quota" required class="form-control">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('takwim.attr.doctor')</label>
                                <div class="controls">
                                <select name="takwim_doctor" required class="form-control" style="width: 100%;">
                                    <option value="">-- @lang('index.please_select') -- </option>
                                    @foreach ($doctor as $value)
                                        <option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div> --}}
                        <br>
                        <div class="col-md-12">
                            <div class="table-responsive" style="position: relative;height: 200px;overflow: auto;display:block;">
                                <table id="duplicate_takwim_table" class="table order-list4 table table-bordered duplicate_takwim_table">
                                    <thead {{-- style="background-color:skyblue;" --}}>
                                        <tr>
                                            {{-- <th>NO</th> --}}
                                            <th>@lang('medical_board/takwim.list.discipline')</th>
                                            <th>@lang('medical_board/takwim.list.panel')</th>
                                            <th>@lang('medical_board/takwim.list.minquota')</th>
                                            <th>@lang('medical_board/takwim.list.maxquota')</th>
                                            {{-- <th>@lang('medical_board/takwim.list.action')</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td>
                                                <select name="takwim_discipline" class="form-control" id="takwim_discipline" disabled>
                                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                                    @foreach ($discipline as $value)
                                                        <option value={{$value->refcode}}>{{$value->descen}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="takwim_doctor" class="form-control" id="takwim_doctor" disabled>
                                                    <option value="">-- @lang('medical_board/index.please_select') -- </option>
                                                    @foreach ($doctor as $value)
                                                        <option value={{$value->doctor_id}}>{{$value->doctor_name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="takwim_quota" class="form-control" disabled>
                                            </td>
                                            <td>
                                                <input type="number" name="takwim_quota1" class="form-control" disabled>
                                            </td>
                                            {{-- <td>
                                                <button type="button" class="btn btn-md btn-info" id="addrow" ><i class="fas fa-plus"></i></button>
                                            </td> --}}
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-center text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('medical_board/modal.cancel')</button></div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success" id="duplicate2-event"><i class="fa fa-check"></i> @lang('medical_board/modal.save')</button>
            </div>
        </form>
        </div>
    </div>
</div>
