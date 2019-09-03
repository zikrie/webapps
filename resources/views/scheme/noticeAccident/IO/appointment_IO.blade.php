<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="demo-foo-row-toggler" class="table table-bordered"
                                        data-toggle-column="first">
                                        <thead>
                                        <tr>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.investigate_date')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.investigate_time')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.location')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.category_interviewee')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.name')</th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.action')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-expanded="true">
                                            <td><input type="date" name="investigate_date" id="investigate_date" class="form-control"></td>
                                            <td><div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                                data-autoclose="true">
                                                <input type="text" class="form-control" name="time" value={{-- {{$checkaccddate->accdtime}} --}}>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                                </div>
                                            </td>
                                            <td><select class="form-control clearFields" name="interviewLocation">
                                                    <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                                    <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                                    <option value='' >SOCSO Office</option>
                                                    <option value='' >Employer Premise</option>
                                                    <option value='' >Insured Person Premise</option>
                                                    <option value='' >Others</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" name="category_interviewee"></td>
                                            <td><input type="text" class="form-control" name="name"></td>
                                            <td><button class="btn btn-facebook waves-effect waves-light" type="button"><i class="fas fa-download"></i> </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.investigate_date')</label>
                                        <input type="date" name="investigate_date" id="investigate_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.investigate_time')</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" class="form-control" name="time" value={{-- {{$checkaccddate->accdtime}} --}}>
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
                                    <select class="form-control clearFields" name="category_type">
                                            <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                            <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
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
                                    <label class="control-label">@lang('scheme/appointment.attr.name')</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                       </div>
                         {{-- <div class="row p-t-20"> --}}
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.interviewee_name')</label>
                                        <input type="text" name="interviewee_name" id="interviewee_name" class="form-control">
                                </div>
                            </div>
                        </div> --}}
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
                                    <select class="form-control clearFields" name="interviewLocation">
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
                            
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.investigate_site')</label>
                                        <input type="text" name="investigate_site" id="investigate_site" class="form-control">
                                </div>
                            </div> --}}
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/appointment.attr.docToReq')</label>
                                    <textarea type="text" class="form-control"></textarea>
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