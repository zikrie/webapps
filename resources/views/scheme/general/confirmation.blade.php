<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="confirmationilat" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if(Session::get('messageconf'))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{Session::get('messageconf')}}
                        </div>

                    </div>
                    @elseif (!empty($messageconf))
                    <div class="card-footer">

                        <div class="alert alert-warning">
                            {{$messageconf}}
                        </div>

                    </div>
                    @endif
                    <input type='hidden' name='caserefno' id='caserefno' value='{{$caserefno}}'>
                    {{ csrf_field() }}


                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <br>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label"
                                        for="customCheck1">@lang('scheme/confirmation.attr.bank_completed')
                                        &nbsp; &nbsp; </label> <input type="checkbox" class="custom-control-input"
                                        id="customCheck1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.acceptance_stamp')</label>
                                @if(!empty($confirmation) && $confirmation->stampdate != '')
                                <input type="date" id="stampdate" name="stampdate" onchange="fieldchange()"
                                    value="{{substr($confirmation->stampdate,0,4)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,6,2)}}"
                                    class="form-control" required>
                                @else
                                <input type="date" id="stampdate" name="stampdate" onchange="fieldchange()" value=""
                                    class="form-control" required>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label
                                    class="control-label">@lang('scheme/confirmation.attr.completion_completed')</label>
                                <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                    @if (!empty($confirmation) && $confirmation->jrecv == 'Y')
                                    <option value="">@lang('scheme/confirmation.attr.please_select')</option>
                                    <option value="Y" selected>@lang('scheme/confirmation.attr.yes')</option>
                                    <option value="N">@lang('scheme/confirmation.attr.no')</option>
                                    @elseif (!empty($confirmation) && $confirmation->jrecv == 'N')
                                    <option value="">@lang('scheme/confirmation.attr.please_select')</option>
                                    <option value="Y">@lang('scheme/confirmation.attr.yes')</option>
                                    <option value="N" selected>@lang('scheme/confirmation.attr.no')</option>
                                    @else
                                    <option value="">@lang('scheme/confirmation.attr.please_select')</option>
                                    <option value="Y">@lang('scheme/confirmation.attr.yes')</option>
                                    <option value="N" selected>@lang('scheme/confirmation.attr.no')</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" id="completion_date">
                                <label class="control-label">@lang('scheme/confirmation.attr.completion_date')</label>
                                @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                                <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()"
                                    value="{{substr($confirmation->jrecvdate,0,4)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}"
                                    class="form-control" required>
                                @else
                                <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()" value=""
                                    class="form-control" required>
                                @endif

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/confirmation.attr.remarks')</label>
                                @if(!empty($confirmation) && $confirmation->remarks != '')
                                <textarea type="text" id="remarks" name="remarks" onchange="fieldchange()" value=""
                                    class="form-control">{{$confirmation->remarks}}</textarea>
                                @else
                                <textarea type="text" id="remarks" name="remarks" onchange="fieldchange()" value=""
                                    class="form-control"></textarea>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                        <button type="submit" value="Save" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="submit" value="preview" class="btn btn waves-effect waves-light btn-success">Preview</button>
                        <button type="submit" value="Submit" class="btn btn waves-effect waves-light btn-success">@lang('button.submit')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- row -->
    <script>
        function fieldchange() {
            //alert('test');
            var submitbutton = document.getElementById('submit');
            //alert(submitbutton);
            submitbutton.disabled = true;
            //alert('test');
        }

        function statechange() {

            var statecode = $("#state1").val();
            // alert(statecode);
            $('#brname').find('option').not(':first').remove();
            if (statecode) {

                $.ajax({
                    url: '/branch/' + statecode,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        //            console.log(data);

                        var len = 0;
                        if (data != null) {
                            len = data.length;
                        }

                        if (len > 0) {
                            for (var i = 0; i < len; i++) {

                                var id = data[i].brcode;
                                var name = data[i].brname;

                                var option = "<option value='" + id + "'>" + name + "</option>";

                                $("#brname").append(option);
                            }
                        }

                    }

                });
            }

            fieldchange();
        }

        // Check
        // $("#customCheck1").attr("checked", true);
        // $('select[name=jrecv]').change(function () {
        // if (this.value == 'Y') {
        //     $("#jrecv").prop('readonly', false);
        //     $("#jrecv").disabled();


        // Uncheck
        // $("#customCheck1").attr("checked", false);

    </script>
