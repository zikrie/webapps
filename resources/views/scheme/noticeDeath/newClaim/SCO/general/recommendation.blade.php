<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Action</label><span class="required">*</span>
                                    <select class="form-control" name="action_recommend" required>
                                        <option value="">Please Select</option> 
                                        <option value="1">Recommend</option> 
                                        <option value="2">Transfer Case</option> 
                                        <option value="3">Investigation</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="recommendationz">
                            <h6 class="card-title-sub">Recommendation</h6>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">ILAT Pension Receiver?</label>
                                        <select class="form-control" required>
                                            <option>Yes</option> 
                                            <option>No</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Fulfill Qualifying Condition</label>
                                        <select class="form-control" required>
                                            <option>Yes</option> 
                                            <option>No</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Fulfill minimum months of contribution</label>
                                        <select class="form-control" required>
                                            <option>Yes</option> 
                                            <option>No</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Dependant entitlement Recommendation</label>
                                        <select class="form-control" required>
                                            <option>Yes</option> 
                                            <option>No</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Remarks</label>
                                        <textarea type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="transfer_case">

                            <h6 class="card-title-sub">Transfer Case</h6>
                            <hr>

                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state1" id="state1" class="form-control clearFields" onchange="statechange()" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SOCSO Office</label>
                                        <select name="brname" id="brname" class="form-control clearFields" onchange='fieldchange()' required>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                </div>
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function() {

// alert('hello');

    $("#recommendationz").hide();
    $("#transfer_case").hide();

    $('select[name=action_recommend]').change(function () {
    if (this.value == '1') {
        $("#recommendationz").show();
        $("#transfer_case").hide();

    } else if (this.value == '2') {
        $("#transfer_case").show();
        $("#recommendationz").hide();
    } else {
        $("#transfer_case").hide();
        $("#recommendationz").hide();
    }
    });

});

</script>
