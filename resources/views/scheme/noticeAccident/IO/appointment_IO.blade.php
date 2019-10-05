<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="{{ route('addappt') }}" method="POST">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="table_appointment" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                        <tr>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.investigate_date')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.investigate_time')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.location')</th>
                                            <th style='width:8%'>Attendees</th>
                                            {{-- <th style='width:8%'>@lang('scheme/appointment.attr.name')</th> --}}
                                            <th style='width:8%'>@lang('scheme/appointment.attr.action')</th>
                                        </tr>
                                        </thead>
                                       
                                        <!-- <tr data-expanded="true">
                                            <td><input type="date" name="investigate_date" id="investigate_date" class="form-control"></td>
                                            <td><div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                                data-autoclose="true">
                                                    <input type="text" class="form-control" name="time" value="{{-- {{$checkaccddate->accdtime}} --}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-control clearFields" name="interviewLocation">
                                                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                                    <option value='' >SOCSO Office</option>
                                                    <option value='' >Employer Premise</option>
                                                    <option value='' >Insured Person Premise</option>
                                                    <option value='' >Others</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="category_interviewee"></td>
                                            {{-- <td><input type="text" class="form-control" name="name"></td> --}}
                                            <td> 
                                                {{-- <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash"></i> </button> --}}
                                                <button type="button"  name="action" id="action" class="btn btn-facebook waves-effect waves-light" type="button"><i class="fas fa-trash"></i> </button>
                                                <button type="button"  name="action" id="action" class="btn btn-facebook waves-effect waves-light" type="button" data-toggle="modal" data-target="#reshedule_popup" data-whatever="@fat"><i class="fas fa-calendar-alt"></i> </button>
                                                {{-- <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#reshedule_popup" data-whatever="@fat">Reshedule</button> --}}
                                             </td> -->
                                        <!-- </tr> -->
                                        
                                        <tbody>
                                            @foreach ($ioappt as $ioappts)
                                                <tr>
                                                    <td>{{ $ioappts->ia_date }}</td>
                                                    <td>{{ $ioappts->ia_time }}</td>
                                                    <td>{{ $ioappts->ia_intvloc }}</td>
                                                    <td>{{ $ioappts->ia_officerid }}</td>
                                                    <td><a id='selectdraft' href="" data-toggle="modal" data-target="#reshedule_popup" data-whatever="@fat"><i class="fas fa-calendar-alt"></i></a>
                                                        <a id="deletedraft" onclick="return confirm('Are you sure want to delete the draft?');" ><i class="fas fa-trash-alt fa-sm"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="form-actions"><br>
                                        <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#appointment_popup" data-whatever="@fat">ADD APPOINTMENT</button>
                                    </div>
                                </div>
                            </div>

                            {{-- POPUP From Dropdown  --}}
                            {{-- Appointment --}}
                            <div class="modal fade" id="appointment_popup" tabindex="-1" role="dialog" aria-labelledby="appointmentPopup">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('addappt') }}" method="POST">
                                            <div class="modal-header  card-title">
                                                <h4 class="modal-title" id="appointmentPopup">Appointment</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                @include('scheme.noticeAccident.IO.appointment_popup') 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                                <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>     
                             {{-- Reshedule --}}
                             <div class="modal fade" id="reshedule_popup" tabindex="-1" role="dialog" aria-labelledby="reshedulePopup">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="reshedulePopup">Reshedule</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.IO.reshedule_popup')
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>             
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>