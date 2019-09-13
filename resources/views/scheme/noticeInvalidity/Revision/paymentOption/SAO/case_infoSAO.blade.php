<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label><span
                                        class="required">*</span>
                                        <select class="form-control clearfields" name='idtype' id='idtype' required>
                                        <option selected readonly disabled hidden>Please Select </option>
                                        @foreach ($idtype as $id)
                                        @if (old('idtype') == $id->refcode)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @elseif(!empty($selectidtype)&&$id->refcode == $selectidtype)
                                        <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                        @else
                                        <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Identification No.</label><span
                                        class="required">*</span>
                                    <input type="text" id="idNum_PaymentOption" name="id_num" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Notice ID</label><span
                                            class="required">*</span>
                                        <input type="text" id="noticeID_PaymentOption" name="notice" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Revision Type</label><span
                                            class="required">*</span>
                                        <input type="text" id="noticeID_PaymentOption" name="notice" value=""
                                            class="form-control">
                                    </div>
                                </div>
                        </div>
                        <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Revision Reason</label><span
                                            class="required">*</span>
                                        <input type="text" id="revReason_PaymentOption" name="revReason" value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label
                                            class="control-label">Date of Revision Notice Received</label><span
                                            class="required">*</span>
                                        <input type="date" id="dateRevNotice_PaymentOption" name="dateRevNotice"
                                            value="" class="form-control">
                                    </div>
                                </div>
                        </div>
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Source</label><span
                                            class="required">*</span>
                                        <input type="text" id="source_PaymentOption" name="source" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                    
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                                </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
