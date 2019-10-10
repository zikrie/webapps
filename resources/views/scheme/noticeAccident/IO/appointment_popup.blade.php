{{-- Appointment --}}
<div class="modal fade" id="appointment_popup" tabindex="-1" role="dialog" aria-labelledby="appointmentPopup">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header  card-title">
                <h4 class="modal-title" id="appointmentPopup">Appointment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('addappt') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="row p-t-20">  
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Date Appointment</label>
                        <input type="date" name="current_date" id="current_date" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Time</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="text" class="form-control" name="time" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.correspondenceAddress')</label>
                                <select class="form-control clearFields" name="category_type" onchange="onLoc(this.options[this.selectedIndex].value)">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                        <option value="01" >Employer Premise</option>
                                        <option value="02">Insured Person Premise</option>
                                        <option value="03">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @foreach($ioappt as $ioappts)
                    <div id="hide_01" class="form-group" style="display:none">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $ioappts->empname }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="address1" id="address1" class="form-control" value="{{ $ioappts->add1 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address2" id="address2" class="form-control" value="{{ $ioappts->add2 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address3" id="address3" class="form-control" value="{{ $ioappts->add3 }}">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="{{ $ioappts->add3 }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.city')</label>
                                    <input type="text" name="city"  value="{{ $ioappts->city }}" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        
                                        @foreach($state as $s)
                                            
                                            @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                            <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                            @else
                                            <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.pobox')</label>
                                    <input type="text" id="pobox" name="pobox" value="{{ $ioappts->pobox }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.lockedbag')</label>
                                    <input type="text" name="lockedbag"  value="{{ $ioappts->lockedbag }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.wdt')</label>
                                    <input type="text" name="wdt"  value="{{ $ioappts->wdt }}" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hide_02" class="form-group" style="display:none">
                    <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                    <input type="text" name="ia_attentionto" id="ia_attentionto" class="form-control" value="{{ $ioappts->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="address1" id="address" class="form-control" value="{{ $ioappts->copadd1 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address2" id="address" class="form-control" value="{{ $ioappts->copadd2 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address3" id="address" class="form-control" value="{{ $ioappts->copadd3 }}">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="{{ $ioappts->copadd3 }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.city')</label>
                                    <input type="text" name="city"  value="{{ $ioappts->cop_city }}" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        
                                        @foreach($state as $s)
                                            
                                            @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                            <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                            @else
                                            <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.pobox')</label>
                                    <input type="text" id="pobox" name="pobox" value="{{ $ioappts->cop_pobox }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.lockedbag')</label>
                                    <input type="text" name="lockedbag"  value="{{ $ioappts->cop_lockedbag }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.wdt')</label>
                                    <input type="text" name="wdt"  value="{{ $ioappts->cop_wdt }}" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="hide_03" class="form-group" style="display:none">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="address1" id="address" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address2" id="address" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address3" id="address" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postcode')</label>
                                    <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.city')</label>
                                    <input type="text" name="city"  value="" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        @foreach($state as $s)
                                        @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                        <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                        @else
                                        <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.pobox')</label>
                                    <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.lockedbag')</label>
                                    <input type="text" name="lockedbag"  value="" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.wdt')</label>
                                    <input type="text" name="wdt"  value="" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.attentionTo')</label>
                                <input type="text" name="ia_attentionto"  value="" class="form-control clearFields" > 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Is the interview location same as correspondence address?</label>
                                <select class="form-control clearFields" name="qintvloc">
                                        <!-- <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option> -->
                                        <option value='Yes' selected>Yes</option>
                                        <option value='No' >No</option>
                                </select>
                            </div>
                        </div>
                        <!-- Is the interview location same as correspondence address? DEFAULT YES-->
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.location')</label>
                                <select class="form-control clearFields" name="intvloc">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                        <option value='01' >SOCSO Office</option>
                                        <option value='02' >Employer Premise</option>
                                        <option value='03' >Insured Person Premise</option>
                                        <option value='04' >Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                    <input type="text" name="intvadd1" id="intvadd1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="intvadd2" id="intvadd2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="intvadd3" id="intvadd3" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row p-t-20">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.officer_name')</label>
                                    <input type="text" name="officer_name" id="officer_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.officer_email')</label>
                                    <input type="text" name="officer_email" id="officer_email" class="form-control">
                            </div>
                        </div>
                    </div> --}}
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Interview Attendees</label>
                                    <div class="col-sm-4">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="intvattendees" id="custom_emp">
                                            <label class="custom-control-label" for="custom_emp">Employer</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="intvattendees" id="custom_ip">
                                            <label class="custom-control-label" for="custom_ip">Insured Person</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"name="intvattendees" id="custom_other" onClick="others_attendes_list()">
                                            <label class="custom-control-label" for="custom_other">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="others_A" style="display:none">
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="othername" id="othername" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="otheraddress1" id="otheraddress1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                                            <input type="text" name="otheraddress2" id="otheraddress2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                                            <input type="text" name="otheraddress3" id="otheraddress3" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Document to Request </label>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="reqdoctype" id="custom_doc1">
                                            <label class="custom-control-label" for="custom_doc1">Document 1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="reqdoctype" id="custom_doc2">
                                            <label class="custom-control-label" for="custom_doc2">Document 2</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="reqdoctype" onClick="others_document()" id="custom_doc3">
                                            <label class="custom-control-label" for="custom_doc3">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="others_B" class="row p-t-20" style="display:none">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                        <input type="text" name="description" id="description" class="form-control">
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                    <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                </div>
            </form>
        </div>
    </div>
</div>         

<script>
    function others_attendes_list() {

        // Get the checkbox
        var checkBox = document.getElementById("custom_other");
        // Get the output text
        var others_A = document.getElementById("others_A");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        others_A.style.display = "block";
        } 
        else {
        others_A.style.display = "none";
        }
    }

    function onLoc(aval){

        if (aval == "01") {
            $('#hide_01').show();
            $('#hide_02').hide();
            $('#hide_03').hide();

        } 
        else if (aval == "02"){
            $('#hide_01').hide();
            $('#hide_02').show();
            $('#hide_03').hide();

        }
        else if (aval == "03"){
            $('#hide_01').hide();
            $('#hide_02').hide();
            $('#hide_03').show();
        }
        else {
            $('#hide_01').hide();
            $('#hide_02').hide();
            $('#hide_03').hide();
        }
    }

    function others_document() {

        // Get the checkbox
        var checkBox = document.getElementById("custom_doc3");
        // Get the output text
        var others_B = document.getElementById("others_B");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        others_B.style.display = "block";
        } else {
        others_B.style.display = "none";
        }
    }

</script>
