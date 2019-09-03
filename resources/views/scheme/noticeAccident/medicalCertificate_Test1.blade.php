<div class="card">
    <div class="card-body">
        <h4 class="card-title">@lang('medicalDetails.title')</h4>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">@lang('medicalDetails.attr.nameAddress_clinic')</label>
                        <textarea type="text" id="clinicname" name="clinicinfo" class="form-control">@if (!empty($mcdata)){{ $mcdata->clinicinfo }}@endif</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive" id="table-medical">
                    <div class="form-actions text-right">
                        <button type="button" id="btn_add_mc" class="btn btn-sm waves-effect waves-light btn-info">@lang('medicalDetails.addmc')</button>
                    </div>{{-- <label class="control-label">@lang('medicalDetails.attr.medicalleave')</label> --}}
                    <table  id="table-medical-details" class="table table-sm table-bordered" data-toggle-column="first">
                        <thead>
                            <tr>
                                <th style='width:20%'>@lang('medicalDetails.attr.type_hus')</th> 
                                <th style='width:17%'>@lang('medicalDetails.attr.start_date')</th>
                                <th style='width:18%'>@lang('medicalDetails.attr.end_date')</th>
                                <th style='width:15%'>@lang('medicalDetails.attr.days_work')</th>
                                <th style='width: 8%'>@lang('medicalDetails.attr.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-expanded="true" class="workrow">
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="hussts[]">
                                        <option value="">Please select</option>
                                        <option value="" selected> MC</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input  name="" type="date" value="" class="form-control counttotalwork" >
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input name="" type="date" value="" class="form-control counttotalwork" >
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="" value="" class="form-control" readonly>
                                </td>
                                <td>
                                    <button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button>
                                    <button id="add_attended_work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                        <i class="ti-plus text" aria-hidden="true"></i>
                                        <i class="ti-plus text-active" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td>
                                    <div class="form-group">
                                        <input  name="attendedwork" type="text" value="Attended Work" class="form-control counttotalwork" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input  name="" type="date" value="" class="form-control counttotalwork" >
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input name="" type="date" value="" class="form-control counttotalwork" >
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="" value="" class="form-control" readonly>
                                </td>
                                <td>
                                    <button type="button"  class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button>
                                    {{-- <button id="add-attended-work" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">
                                        <i class="ti-plus text" aria-hidden="true"></i>
                                        <i class="ti-plus text-active" aria-hidden="true"></i>
                                    </button> 
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>     
                </div>
            </div>
        </div>
        <div id="new-mc"></div>
        </div>
        <div class="form-actions text-right">
            <button type="submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">@lang('insuredPerson.save')</button>
            <button type="button" id="btn_add_clinic" class="btn btn-sm waves-effect waves-light btn-info">@lang('medicalDetails.addClinic')</button>
        </div>
    </div>
