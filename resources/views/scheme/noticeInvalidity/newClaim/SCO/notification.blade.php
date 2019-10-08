<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="col-9">
                        <div class="table-responsive" id="table-generated">
                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:1%'>@lang('No')</th>
                                        <th style='width:15%'>@lang('Send to')</th>
                                        <th style='width:15%'>@lang('Notification type')</th>
                                        <th style='width:2%'>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                        <td>1.</td>
                                        <td>
                                            <select class="form-control" data-placeholder="" tabindex="2">
                                                <option selected readonly disabled hidden>Please Choose </option>
                                                <option value="">@lang(' Insured Person')</option>
                                                <option value="">@lang(' Employer')</option>
                                                <option value="">@lang('Others')</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="col-md-12">
                                                <input type="text" name="generated_date" value="" class="form-control">
                                            </div>
                                        </td>
                                        <td >
                                            
                                          &nbsp;<button style="align:center;width:40%;" tittle="VIEW"><a id='view'><i class="fas fa-file-alt"></i></button>&nbsp;&nbsp;
                                                <button style="align:center;width:40%;" tittle="PREVIEW"><a id='view'><i class="fas fa-file-alt"></i></button>
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-actions">
                                <button type="button" class="btn btn waves-effect waves-light btn-info"
                                    data-toggle="modal" data-target="#pop2">@lang('Add Notification')</button>
                            </div>
                        </div>
                    </div>

                    <br>

                    <hr>
            </div>
        </div>
    </div>
</div>

<!------------POPUP ADD NOTIFICATION ----------------->
<div class="col-md-20">
    <div class="card">
        <div class="card-body">
            <!-- sample modal content -->
            <div id="pop2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-xl" style="width:60%;">
                    <div class="modal-content">
                        <div class="col-md-20" id="addNoti">


                            <div class="modal-header">
                                <h4 class="modal-title" id="vcenter">Notification</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>

                            <div class="modal-body">

                        <!---------Others --->


                            <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Send To')</label>
                                <select class="form-control" name="send_to" data-placeholder="idType_invalidity"
                                    tabindex="2" id="selectEmployer">
                                    <option selected disabled hidden>Please Choose </option>
                                    <option value="insuredperson">@lang('Insured Person')</option>
                                    <option value="employer">@lang('Employer')</option>
                                    <option value="o">@lang('Others')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('Select Employer')</label>
                                <select class="form-control" name="select_employer" data-placeholder="idType_invalidity"
                                    tabindex="2">
                                    <option selected disabled hidden>Please Choose </option>
                                    <option value="insuredperson">@lang('')</option>
                                    <option value="employer">@lang('')</option>
                                    <option value="others">@lang('')</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('Notification Type')</label>
                                <input type="text" name="notification_type" id="noti" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class='row' style="display:none;" id="othersNoti">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Name')</label>
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('Email')</label>
                                <input type="text" name="email" id="email" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.postal_address')</label>
                                <input type="text" name="add1" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add2" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="add3" value="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!------------------------LIST OF DOCUMENT ------------->

                    
                                <div class="col-md-12">
                                    <div class="table-responsive" style='width:100%'>
                                        <table class="table-sm " id="add_others">

                                            <thead>
                                                <tr>
                                                    <h4><label> List Of Document </label></h4>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-expanded="true" class="workrow">
                                                    <td style="display:none;"> <input type="hidden" value="1"> </td>
                                                    <td>
                                                  
                                                        <div class="col-md-12">
                                                            <div class="custom-control custom-checkbox mr-sm-6">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    name="list_doc[]" id="checkbox10" value="check1">
                                                                <label class="custom-control-label"
                                                                    for="checkbox10">Document 1</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr data-expanded="true" class="workrow">
                                                <td style="display:none;"> <input type="hidden" value="2"> </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <div class="custom-control custom-checkbox mr-sm-6">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    name="list_doc[]" id="checkbox11" value="check2">
                                                                <label class="custom-control-label"
                                                                    for="checkbox11">Document 2</label>
                                                            </div>
                                                        </div>
                                                        </td>
                                                </tr>
                                                <tr data-expanded="true" class="workrow">
                                                <td style="display:none;"> <input type="hidden" value="2"> </td>
                                                <td>
                                                        <div class="col-md-12">
                                                            <div class="custom-control custom-checkbox mr-sm-6">
                                                                <input type="checkbox" class="custom-control-input"name="list_doc[]" id="checkbox12" value="check3">
                                                                <label class="custom-control-label" for="checkbox12">Others</label>
                                                            </div>

                                                        <!-- <div class=" p-t-20" style="display:none;" id="description"> -->
                                                            <!-- <div style="display:none;" id="description">
                                                                <input type="text" name="description"
                                                                        id="Description" >
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="text" style="display:none;" name="list_doc_others[]" id="description" class="form-control" >
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-actions">
                                            <button type="button" class="btn btn waves-effect waves-light btn-info" id="but_others">
                                                @lang('Add Others Document')</button>
                                        </div>
                                    </div>

                                    <h4><label>Additional Information</label></h4>
                                    <div class="col-md-12">

                                        <br>

                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered" id="add_infor">

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
                                                            <input type="text" name="information[]" value=""
                                                                class="form-control">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn waves-effect waves-light btn-info"  >@lang('Preview
                                                    Letter')</button>

                                                <button type="button" class="btn btn waves-effect waves-light btn-info"
                                                    id="addinformation">@lang('Add Additional Info')</button>
                                            </div>
                                            
                                        </div>

                                        <br>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Reset</button>
                                                <button type="button" class="btn btn-success waves-effect waves-light">Send Notification</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#checkbox12').on('change', function () {
            if (this.checked == true) {
                $('#description').show();
            } else {
                $('#description').hide();
            }
        });

        $("#addinformation").click(function () {
            var no = $('#add_infor tr:last td:first').find("input").val();
            no++;
            $("#add_infor > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow"><td><input type="hidden" value=' +
                no +
                '>' + no +
                '</td><td><input type="text" name="information[]" value="" class="form-control"></td></tr>'
            );
        });

        $('#selectEmployer').change(function () {
            if (this.value == 'o') {
                $('#othersNoti').show();
            } else {
                $('#othersNoti').hide();
            }
        });

        $("#but_others").click(function () {
            var no = $('#add_others tr:last td:first').find("input").val();
           
            no++;
            $("#add_others > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow"><td style="display:none;"> <input type="hidden" value=' + no + '> </td><td><div class="col-md-12">' +
                '<div class="custom-control custom-checkbox mr-sm-6">' +
                '<input type="checkbox" class="custom-control-input cb_1" name="list_doc[]" id="checkbox12' + no + '" value="'+no+'">' +
                '<label class="custom-control-label" for="checkbox12' + no + '">Others</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '<td>' +
                '&nbsp;&nbsp;&nbsp;&nbsp;' +
                '<input type="text" style="display:none;" name="list_doc_others[]" id="description' + no + '" class="form-control" >' +
                '</td>' +
                '</tr>'
            );
        });

        $('#add_others').on('change', '.cb_1', function () {
            
            if (this.checked == true) {
                $('#description'+$(this).val()).show();
            } else {
                $('#description'+$(this).val()).hide();
            }
        });
    });

</script>

