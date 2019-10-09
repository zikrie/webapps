{{-- @foreach($ioappt as $io) --}}
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

<div id="hide_01" class="form-group" style="display:none">
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $io->empname }}">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $io->add1 }}">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" value="{{ $io->add2 }}">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" value="{{ $io->add3 }}">
            </div>
        </div>
    </div>
    <div class='row'>
        <div class="col-md-4">
            <div class="form-group">
                <label>@lang('scheme/ob.attr.postcode')</label>
                <input type="text" id="postcode" name="postcode" value="{{ $io->add3 }}" class="form-control clearFields">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>@lang('scheme/ob.attr.city')</label>
                <input type="text" name="city"  value="{{ $io->city }}" class="form-control clearFields" >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">@lang('scheme/ob.attr.state')</label>
                <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                <select name='state' id='state' class='form-control'>
                    <!-- <option value='{{ $io->statecode }}' selected>{{ $io->statecode }}</option> -->
                    @foreach($state as $s)
                        <!-- <option value='{{ $io->statecode }}' selected>{{ $s->descen }}</option> -->
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
</div>
<div id="hide_02" class="form-group" style="display:none">
<div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $io->name }}">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $io->copadd1 }}">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" value="{{ $io->copadd2 }}">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" value="{{ $io->copadd3 }}">
            </div>
        </div>
    </div>
    <div class='row'>
        <div class="col-md-4">
            <div class="form-group">
                <label>@lang('scheme/ob.attr.postcode')</label>
                <input type="text" id="postcode" name="postcode" value="{{ $io->copadd3 }}" class="form-control clearFields">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>@lang('scheme/ob.attr.city')</label>
                <input type="text" name="city"  value="{{ $io->cop_city }}" class="form-control clearFields" >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">@lang('scheme/ob.attr.state')</label>
                <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                <select name='state' id='state' class='form-control'>
                    <!-- <option value='{{ $io->statecode }}' selected>{{ $io->statecode }}</option> -->
                    @foreach($state as $s)
                        <!-- <option value='{{ $io->statecode }}' selected>{{ $s->descen }}</option> -->
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
</div>
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
                    <input type="text" name="address" id="address" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control">
            </div>
        </div>
    </div>
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control">
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
</div>


<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.attentionTo')</label>
            <input type="text" name="attentionTo"  value="" class="form-control clearFields" > 
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Is the interview location same as correspondence address?</label>
            <select class="form-control clearFields" name="question">
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >Yes</option>
                    <option value='' >No</option>
            </select>
        </div>
    </div>
    <!-- Is the interview location same as correspondence address? DEFAULT YES-->
</div>
<div class="row p-t-20">
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.location')</label>
            <select class="form-control clearFields" name="interviewLocation">
                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >SOCSO Office</option>
                    <option value='' >Employer Premise</option>
                    <option value='' >Insured Person Premise</option>
                    <option value='' >Others</option>
            </select>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12">
        <div class="form-group">
            {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                <input type="text" name="address" id="address" class="form-control">
        </div>
    </div>
</div>
<div class="row p-t-20">
        <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">@lang('scheme/appointment.attr.interviewAttendees')</label>
            <select class="form-control clearFields" name="interviewLocation" onchange="onLoc()">
                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                    <option value='' >Employer </option>
                    <option value='' >Insured Person </option>
                    <option value='' >Others</option>
            </select>
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
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="custom_Radio_Employer" name="custom_Radio2" onClick="others_attendes_list()" class="custom-control-input">
                        <label class="custom-control-label" for="custom_Radio_Employer">Employer</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="custom_Radio_insured_person" name="custom_Radio2" onClick="others_attendes_list()" class="custom-control-input" onclick="recommendationview_no3()">
                        <label class="custom-control-label" for="custom_Radio_insured_person">Insured Person</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="others_attendess" name="custom_Radio2" onClick="others_attendes_list()" class="custom-control-input" onclick="recommendationview_no3()">
                        <label class="custom-control-label" for="others_attendess">Others</label>
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
                        <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
        </div>
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">@lang('scheme/appointment.attr.address')</label>
                        <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
        </div>
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="form-group">
                    {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                        <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
        </div>
        <div class="row p-t-20">
            <div class="col-md-12">
                <div class="form-group">
                    {{-- <label class="control-label">@lang('scheme/appointment.attr.address')</label> --}}
                        <input type="text" name="address" id="address" class="form-control">
                </div>
            </div>
        </div>
    </div>
        
    <div class="row p-t-20">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Document to Request </label>
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="custom_Radio_document1" name="custom_Radio" onClick="others_document()"  class="custom-control-input">
                        <label class="custom-control-label" for="custom_Radio_document1">Document 1</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="custom_Radio_document2" name="custom_Radio" onClick="others_document()" class="custom-control-input" onclick="recommendationview_no3()">
                        <label class="custom-control-label" for="custom_Radio_document2">Document 2</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="document_others" name="custom_Radio" onClick="others_document()" class="custom-control-input" onclick="recommendationview_no3()">
                        <label class="custom-control-label" for="document_others">Others</label>
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
{{-- @endforeach --}}
<script>
    function others_attendes_list() {

        // Get the checkbox
        var checkBox = document.getElementById("others_attendess");
        // Get the output text
        var others_A = document.getElementById("others_A");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        others_A.style.display = "block";
        } else {
        others_A.style.display = "none";
        }P
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
        var checkBox = document.getElementById("document_others");
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
