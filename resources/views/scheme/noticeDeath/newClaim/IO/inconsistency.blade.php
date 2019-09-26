<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <div class="col-md-12" id="container">
                                <div class="table-responsive" id="table-medical">
                                    {{-- <div class="form-actions text-right">
                                        <button type="button" id="btn_add_inconsistency0" value='0' class="btn btn-sm waves-effect waves-light btn-info">@lang('form/scheme.general.collapse.inconsistency.add_item')</button>
                                    </div> --}}
                                    <table id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                            <th style='width:4%'>No</th> 
                                            <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistency.section')</th> 
                                            <th style='width:13%'>@lang('form/scheme.general.collapse.inconsistency.item')</th> 
                                            <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistency.notice_details')</th> 
                                            <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistency.supporting_documents')</th>
                                            <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistency.corrected_data')</th>
                                            {{-- <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistency.investigation')</th> --}}
                                            <th style='width:9%'>Justification</th>
                                            <th style='width:2%'>@lang('form/scheme.general.collapse.inconsistency.findings')</th>
                                            <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistency.consistent')</th>
                                            <th style='width:2%'>@lang('form/scheme.general.collapse.inconsistency.action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow" id="tr0_0">
                                                    <td>1.</td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="hussts[]">
                                                        <option value="" selected>Please select</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="hussts[]">
                                                        <option value="" selected>Please select</option>
                                                        <option value="" >Accident Time</option>
                                                        <option value="" >Accident Date</option>
                                                        <option value="" >Place Of Accident </option>
                                                        <option value="" >Injury Type</option>
                                                        <option value="" >How Accident Happen</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input id="noticedetails" name="noticedetails" type="text" value="" class="form-control" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="text" id="supportDoc" name="supportDoc" value="" class="form-control " >
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="correctdata" name="correctdata" value="" class="form-control" >
                                                </td>
                                                <td><button type="button" id="btn_add_inconsistency0" value='0' class="btn btn-sm waves-effect waves-light btn-info">@lang('form/scheme.general.collapse.inconsistency.add_item')</button></td>
                                                <td><input type="checkbox" id="customCheck2" class="text-center"><label for="customRadio1"></td>
                                                <td>
                                                    <select class="form-control" name="consistent">
                                                        <option value="">Please select</option>                                                  
                                                        <option value="">Yes</option>                                                  
                                                        <option value="">No</option> 
                                                    </select>                                                 
                                                <td>
                                                    <button type="button"  class="btn btn-sm btn-danger btn_del_workinconsistency" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>     
                                    <label class="control-label" id='lblinconsistencyerror0' style='color:red'></label>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>