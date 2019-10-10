<div class="modal fade" id="reshedule_popup" tabindex="-1" role="dialog" aria-labelledby="reshedulePopup">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header  card-title">
                <h4 class="modal-title" id="reshedulePopup">Reshedule</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="form_reschedule" action="{{ route('rescheduleappt') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <input type="hidden" name="ia_apptid" id="ia_apptid" value="{{ $ioappts->ia_apptid }}">
                    
                    <div class="row p-t-20">  
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Current Date</label>
                                <input type="date" name="current_dateR" id="current_dateR" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Reshedule Date</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="text" class="form-control" name="timeR" id="timeR" value=" ">
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
                                <select class="form-control clearFields" name="category_typeR" onchange="onLoc1(this.options[this.selectedIndex].value)">
                                        <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                        <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                        <option value="01" >Employer Premise</option>
                                        <option value="02">Insured Person Premise</option>
                                        <option value="03">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="hideR_01" class="form-group">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                    <input type="text" name="nameR" id="nameR" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="address1R" id="address1R" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address2R" id="address2R" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address3R" id="address3R" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postcode')</label>
                                    <input type="text" id="postcodeR" name="postcodeR" value="" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.city')</label>
                                    <input type="text" name="cityR"  id="cityR" value="" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        <!-- <option value='{{ $ioappts->statecode }}' selected>{{ $ioappts->statecode }}</option> -->
                                        @foreach($state as $s)
                                            <!-- <option value='{{ $ioappts->statecode }}' selected>{{ $s->descen }}</option> -->
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
                                    <input type="text" id="poboxR" name="poboxR" value="" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.lockedbag')</label>
                                    <input type="text" name="lockedbagR" id="lockedbagR" value="" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.wdt')</label>
                                    <input type="text" name="wdtR" id="wdtR" value="" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hideR_02" class="form-group" style="display:none">
                    <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                    <input type="text" name="nameR" id="nameR" class="form-control" value="{{ $ioappts->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="address1R" id="address1R" class="form-control" value="{{ $ioappts->copadd1 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address2R" id="address2R" class="form-control" value="{{ $ioappts->copadd2 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address3R" id="address3R" class="form-control" value="{{ $ioappts->copadd3 }}">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.postcode')</label>
                                    <input type="text" id="postcodeR" name="postcodeR" value="{{ $ioappts->copadd3 }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.city')</label>
                                    <input type="text" name="cityR" id="cityR" value="{{ $ioappts->cop_city }}" class="form-control clearFields" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        <!-- <option value='{{ $ioappts->statecode }}' selected>{{ $ioappts->statecode }}</option> -->
                                        @foreach($state as $s)
                                            <!-- <option value='{{ $ioappts->statecode }}' selected>{{ $s->descen }}</option> -->
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
                                    <input type="text" id="poboxR" name="poboxR" value="{{ $ioappts->cop_pobox }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/ob.attr.lockedbag')</label>
                                    <input type="text" name="lockedbagR" id="lockedbagR" value="{{ $ioappts->cop_lockedbag }}" class="form-control clearFields">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.wdt')</label>
                                    <input type="text" name="wdtR" id="wdtR" value="{{ $ioappts->cop_wdt }}" class="form-control clearFields">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hideR_03" class="form-group" style="display:none">
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
                                        <input type="text" name="address1" id="address1" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address2" id="address2" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="address3" id="address3" class="form-control">
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
                                <input type="text" name="attentionToR" id="attentionToR" value="" class="form-control clearFields" > 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Is the interview location same as correspondence address?</label>
                                <select class="form-control clearFields" name="question">
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
                                <select class="form-control clearFields" name="interviewLocationR" id="interviewLocationR">
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
                                    <input type="text" name="ia_intvadd1R" id="ia_intvadd1R" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="ia_intvadd2R" id="ia_intvadd2R" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="ia_intvadd3R" id="ia_intvadd3R" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row p-t-20">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.officer_name')</label>
                                    <input type="text" name="officer_nameR" id="officer_nameR" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/appointment.attr.officer_email')</label>
                                    <input type="text" name="officer_emailR" id="officer_emailR" class="form-control">
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
                                            <input type="checkbox" class="custom-control-input" name="intvattendees" onClick="others_attendes_listR()" id="custom_othersR">
                                            <label class="custom-control-label" for="custom_othersR">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="others_AA" style="display:none">
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="othernameR" id="othernameR" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                                        <input type="text" name="otheraddress1R" id="otheraddress1R" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                                            <input type="text" name="otheraddress2R" id="otheraddress2R" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                                            <input type="text" name="otheraddress3R" id="otheraddress3R" value="" class="form-control">
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
                                            <input type="checkbox" class="custom-control-input" name="ard_reqdocothers" id="custom_doc1">
                                            <label class="custom-control-label" for="custom_doc1">Document 1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="ard_reqdocothers" id="custom_doc2">
                                            <label class="custom-control-label" for="custom_doc2">Document 2</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="ard_reqdocothers" onClick="others_documentR()" id="custom_doc3R">
                                            <label class="custom-control-label" for="custom_doc3R">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="others_BB" class="row p-t-20" style="display:none">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                        <input type="text" name="descriptionR" id="descriptionR" class="form-control">
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
    function others_attendes_listR() {

        // Get the checkbox
        var checkBox = document.getElementById("custom_othersR");
        // Get the output text
        var others_AA = document.getElementById("others_AA");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        others_AA.style.display = "block";
        } 
        else {
        others_AA.style.display = "none";
        }
    }

    function onLoc1(aval){

        if (aval == "01") {
            $('#hideR_01').show();
            $('#hideR_02').hide();
            $('#hideR_03').hide();

        } 
        else if (aval == "02"){
            $('#hideR_01').hide();
            $('#hideR_02').show();
            $('#hideR_03').hide();

        }
        else if (aval == "03"){
            $('#hideR_01').hide();
            $('#hideR_02').hide();
            $('#hideR_03').show();
        }
        else {
            $('#hideR_01').hide();
            $('#hideR_02').hide();
            $('#hideR_03').hide();
        }
    }

    function others_documentR() {

        // Get the checkbox
        var checkBox = document.getElementById("custom_doc3R");
        // Get the output text
        var others_BB = document.getElementById("others_BB");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        others_BB.style.display = "block";
        } else {
        others_BB.style.display = "none";
        }
    }

</script>
