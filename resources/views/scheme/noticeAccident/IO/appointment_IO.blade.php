<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <!-- <form> -->
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
                                        
                                        <tbody>
                                        
                                            @foreach ($ioappt as $ioappts)
                                                
                                                <tr>
                                                    <td>{{ $ioappts->ia_date}}</td>
                                                    <td>{{ $ioappts->ia_time }}</td>
                                                    <td>{{ $ioappts->ia_intvloc }}</td>
                                                    <td>{{ $ioappts->ia_officerid }}</td>
                                                    <td>
                                                    @if($ioappts->ia_apptid !== null && $ioappts->ia_apptid !== '')
                                                    <a id="selectdraft" href="" data-id="{{ $ioappts->ia_apptid }}" data-target="#reshedule_popup" data-toggle="modal"><i class="fas fa-calendar-alt"></i></a>
                                                    <a id="deletedraft" href="" data-target="#delete_popup" data-toggle="modal" ><i class="fas fa-trash-alt fa-sm"></i></a>
                                                    @endif
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>    
                                </div>
                                  
                                <div class="form-actions">
                                    <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#appointment_popup">ADD APPOINTMENT</button>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>              -->
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
{{-- POPUP From Dropdown  --}}
@include('scheme.noticeAccident.IO.reshedule_popup')
@include('scheme.noticeAccident.IO.appointment_popup')
@include('scheme.noticeAccident.IO.appointment_delete')

<script>
// $('#recommendation').submit(function (e) {
//             e.preventDefault();
//       });
$(document).ready(function(){

        $('#reshedule_popup').on('show.bs.modal',function(e){
            var ia_apptid = $(e.relatedTarget).data('id');

        $.ajax({
            headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
            type: 'GET',
            data: {
                ia_apptid: ia_apptid
                },
            url: "{{ route('reschedule') }}",
            // global: false,
            success: function (data) {

                // alert(data);
                var details = JSON.parse(data);
                // console.log(details[1].aa_caserefno);
                $('#current_dateR').prop("value",details[0].ia_date);
                $('#timeR').prop("value",details[0].ia_time);
                $('#category_typeR').prop("value",details[0].ia_correspaddtype);
                $('#nameR').prop("value",details[0].ia_name);
                $('#address1R').prop("value",details[0].ia_add1);
                $('#address2R').prop("value",details[0].ia_add2);
                $('#address3R').prop("value",details[0].ia_add3);
                $('#postcodeR').prop("value",details[0].ia_postcode);
                $('#cityR').prop("value",details[0].ia_city);
                $('#state').prop("value",details[0].ia_statecode);
                $('#poboxR').prop("value",details[0].ia_pobox);
                $('#lockedbagR').prop("value",details[0].ia_lockedbag);
                $('#wdtR').prop("value",details[0].ia_wdt);
                $('#attentionToR').prop("value",details[0].ia_attentionto);
                $('#interviewLocationR').prop("value",details[0].ia_intvloc);
                $('#ia_intvadd1R').prop("value",details[0].ia_intvadd1);
                $('#ia_intvadd2R').prop("value",details[0].ia_intvadd2);
                $('#ia_intvadd3R').prop("value",details[0].ia_intvadd3);
                $('#othernameR').prop("value",details[1].aa_othersname);
                $('#otheraddress1R').prop("value",details[1].aa_othersadd1);
                $('#otheraddress2R').prop("value",details[1].aa_othersadd2);
                $('#otheraddress3R').prop("value",details[1].aa_othersadd3);

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }  
            });
        });
});
</script>