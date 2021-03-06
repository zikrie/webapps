<h6>Bankrupt</h6>
<section>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Data Generated for Carian
                    Insolvensi Letter</label>
                <input type="text" name="data_generated_carian_insolvensi" id="data_generated_carian_insolvensi"
                    class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Insolvensi</label>
                <input type="text" name="insolvensi" id="insolvensi" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Branch</label>
                <input type="text" name="branch" id="branch" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Cheque No</label>
                <input type="text" name="cheque_no" id="cheque_no" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Cheque Date</label>
                <input type="date" name="cheque_date" id="cheque_date" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Net amount to be paid
                    (RM)</label>
                <input type="text" name="net_amount" id="net_amount" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Reason No IC</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="reason_no_ic1" name="reason_no_ic" class="custom-control-input"
                        value="IMM13">
                    <label class="custom-control-label" for="reason_no_ic1">IMM13</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="reason_no_ic2" name="reason_no_ic" class="custom-control-input"
                        value="indigenous people">
                    <label class="custom-control-label" for="reason_no_ic2">indigenous
                        people</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="reason_no_ic3" name="reason_no_ic" class="custom-control-input"
                        value="Others">

                    <label class="custom-control-label" for="reason_no_ic3">Others:
                    </label>
                    <div class="col-md-6">
                        <input type="" name="reason_no_ic_other" id="reason_no_ic_other" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <label class="control-label">Add New Another Bank Account</label>
            <br>
            <button type="button" class="btn btn-info btn-rounded m-t-10 float-center" data-toggle="modal"
                data-target="#add-contact">Add </button>
        </div>
    </div>
    <!-- model -->
    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New Account Bank Number</h4>
                </div>
                <div class="modal-body">
                    <from class="form-horizontal form-material">
                        <div class="form-group">

                            <div class="col-md-12 m-b-20">
                                <input type="text" class="form-control" placeholder="Account Bank Number"> </div>

                            <div class="col-md-12 m-b-20">
                                <input type="text" class="form-control" placeholder="Comment">
                            </div>

                        </div>
                    </from>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- end model -->

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered" id="editable-datatable">
                <thead>
                    <tr>
                        <th>Account Bank Number</th>
                        <th>Comment</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td> <button type="button"
                                class="btn waves-effect waves-light btn-rounded btn-info">View</button>
                            <button type="button"
                                class="btn waves-effect waves-light btn-rounded btn-secondary">Print</button>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
