<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class='row'>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>@lang('Send To')</label>
                                <select class="form-control" name="send_to" data-placeholder="idType_invalidity" tabindex="2">
                                    <option selected disabled hidden>Please Choose </option>
                                    <option value="insuredperson">@lang('Insured Person')</option>
                                    <option value="employer">@lang('Employer')</option>
                                    <option value="others">@lang('Others')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('Select Employer')</label>
                                <select class="form-control" name="select_employer" data-placeholder="idType_invalidity" tabindex="2">
                                    <option selected disabled hidden>Please Choose </option>
                                    <option value="insuredperson">@lang('')</option>
                                    <option value="employer">@lang('')</option>
                                    <option value="others">@lang('')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>@lang('Notification Type')</label>
                                <input type="text" name="notification_type" id="noti" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <h4><label>List of Documents</label></h4>

                    <div class="col-md-20">
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox mr-sm-6">
                                <input type="checkbox" class="custom-control-input" name="list_doc[]" id="checkbox10" value="check1">
                                <label class="custom-control-label" for="checkbox10">Document 1</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox mr-sm-6">
                                <input type="checkbox" class="custom-control-input" name="list_doc[]" id="checkbox11" value="check2">
                                <label class="custom-control-label" for="checkbox11">Document 2</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name="list_doc[]" id="checkbox3" value="check3">
                                <label class="custom-control-label" for="checkbox3">Others</label>
                            </div>
                        </div>

                        <br>

                        <div class=" p-t-20" style="display:none;" id="description">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Description')</label>
                                    <input type="text" name="description" id="Description" class="form-control">
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"
                                    data-target="#popup">@lang('Add Others Document')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <hr>


        <h4><label>Additional Information</label></h4>
        <div class="col-md-6">
            <br>

            <div class="table-responsive" >
                <table class="table table-sm table-bordered" id="add_infor" >

                    <thead>
                        <tr>
                            <th style='width:1%'>@lang('scheme/wages.attr.num')</th>
                            <th style='width:10%'>@lang('Information')</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-expanded="true" class="workrow">
                            <td><input type="hidden" value="1">1.</td>
                            <td>
                                <input type="text" name="information[]" value="" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-actions">
                    <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"
                        data-target="#popup">@lang('Preview Letter')</button>

                    <button type="button" class="btn btn waves-effect waves-light btn-info" 
                        id="addinformation">@lang('Add Additional Info')</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="form-actions">
    <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"
        data-target="#popup">@lang('SAVE AND SEND NOTIFICATION')</button>

    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
        onclick="window.location='/noticetype'">@lang('RESET')</button>
    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
        onclick="window.location='/obform_od'">@lang('CANCEL')</button>
</div> -->

<script>

    $(document).ready(function () {
        $('#checkbox3').on('change', function(){
            if(this.checked == true){
                $('#description').show();
            } else {
                $('#description').hide();
            }
        });

        $("#addinformation").click(function () {
        var no = $('#add_infor tr:last td:first').find("input").val();
        no++;
         $("#add_infor > tbody:last-child").append('<tr data-expanded="true" class="workrow"><td><input type="hidden" value='+ no + '>'+ no +'</td><td><input type="text" name="information[]" value="" class="form-control"></td></tr>');
        // $("#addinfo tr:last").append('sdsadasdsadadadsa');
    });
    });

</script>
