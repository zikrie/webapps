<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="employerDetails" method="POST" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        {{-- <h5 class="card-title">@lang('employerDetails.title')</h5>
                        <hr>
 --}}                        @if(Session::get('messageemp')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageemp')}}
                            </div>

                        </div>
                        @elseif (!empty($messageemp))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageemp}}
                            </div>

                        </div>
                        @endif
                        <div class="row">
                        	{{-- <div class="col-md-3">
                        		<div class="form-group">
                        			<label class="control-label">Employer Code</label>
                        			<input type="text" class="form-control" name="empcode" value={{$checkaccddate->empcode}} required>
                        			<div class="input-group-append">
                        			</div>
                        		</div>
                        	</div>
                        	<div class="form-actions">
                        		<button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                        	</div> --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.employerCode')</label>
                                    <span class="required">*</span>
                                    @if(!empty($emprecord) && $emprecord->empcode != '')
                                    <input type="text" id="empcode" name="empcode" value="{{$emprecord->empcode}}" class="form-control" required readonly>
                                    @elseif(!empty($employer) && $employer->empcode != '')
                                    <input type="text" id="empcode" name="empcode" value="{{$employer->empcode}}" class="form-control" required readonly>
                                    @else
                                    <input type="text" id="empcode" name="empcode" value="{{old('empcode')}}" class="form-control" required readonly>
                                    @endif
                                </div>
                            </div>
							{{-- <div class="form-actions">
                        		<button type="submit" class="btn btn waves-effect waves-light btn-secondary">Search</button>
                        	</div> --}}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.employerName')</label>
                                    <span class="required">*</span>
                                    @if(!empty($emprecord) && $emprecord->empname != '')
                                    <input type="text" id="empname" name="empname" value="{{$emprecord->empname}}" class="form-control clearFields" required readonly>
                                    @elseif(!empty($employer) && $employer->empname != '')
                                    <input type="text" id="empname" name="empname" value="{{$employer->empname}}" class="form-control clearFields" required readonly>
                                    @else
                                    <input type="text" id="empname" name="empname" value="" class="form-control clearFields" required readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.business_entity')</label>
                                    @if(!empty($emprecord) && $emprecord->bussentity != '')
                                    <input type="text" id="bussentity" name="bussentity" value="{{$emprecord->bussentity}}" class="form-control" readonly>
                                    @elseif(!empty($employer) && $employer->bussentity != '')
                                    <input type="text" id="bussentity" name="bussentity" value="{{$employer->bussentity}}" class="form-control" readonly>
                                    @else
                                    <input type="text" id="bussentity" name="bussentity" value="" class="form-control clearFields" readonly>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.subbusiness_entity')</label>
                                    @if(!empty($emprecord) && $emprecord->subbussentity != '')
                                    <input type="text" id="subbussentity" name="subbussentity" value="{{$emprecord->subbussentity}}" class="form-control" readonly>
                                    @elseif(!empty($employer) && $employer->subbussentity != '')
                                    <input type="text" id="subbussentity" name="subbussentity" value="{{$employer->subbussentity}}" class="form-control" readonly>
                                    @else
                                    <input type="text" id="subbussentity" name="subbussentity" value="" class="form-control clearFields" readonly>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.subbusiness_list')</label>
                                    @if(!empty($emprecord) && $emprecord->subbussentitylist != '')
                                    <input type="text" id="subbussentitylist" name="subbussentitylist" value="{{$emprecord->subbussentitylist}}" class="form-control" readonly>
                                    @elseif(!empty($employer) && $employer->subbussentitylist != '')
                                    <input type="text" id="subbussentitylist" name="subbussentitylist" value="{{$employer->subbussentitylist}}" class="form-control" readonly>
                                    @else
                                    <input type="text" id="subbussentitylist" name="subbussentitylist" value="" class="form-control clearFields" readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.service_type')</label>
                                    @if(!empty($emprecord) && $emprecord->servicetype != '')
                                    <input type="text" id="servicetype" name="servicetype" value="{{$emprecord->servicetype}}" class="form-control" readonly>
                                    @elseif(!empty($employer) && $employer->servicetype != '')
                                    <input type="text" id="servicetype" name="servicetype" value="{{$employer->servicetype}}" class="form-control" readonly>
                                    @else
                                    <input type="text" id="servicetype" name="servicetype" value="" class="form-control clearFields" readonly>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.industry_code')</label>
                                    @if(!empty($emprecord) && $emprecord->indscode != '')
                                    <input type="text" id="indscode" name="indscode" value="{{$emprecord->indscode}}" class="form-control" readonly>
                                    @elseif(!empty($employer) && $employer->indscode != '')
                                    <input type="text" id="indscode" name="indscode" value="{{$employer->indscode}}" class="form-control" readonly>
                                    @else
                                    <input type="text" id="indscode" name="indscode" value="" class="form-control clearFields" readonly>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.subindustry_list')</label>
                                    @if(!empty($emprecord) && $emprecord->subindscodelist != '')
                                    <input type="text" id="subindscodelist" name="subindscodelist" value="{{$emprecord->subindscodelist}}" class="form-control" readonly>
                                    @elseif(!empty($employer) && $employer->subindscodelist != '')
                                    <input type="text" id="subindscodelist" name="subindscodelist" value="{{$employer->subindscodelist}}" class="form-control" readonly>
                                    @else
                                    <input type="text" id="subindscodelist" name="subindscodelist" value="" class="form-control clearFields" readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/employer.attr.postal_address')</label>
                                    @if(!empty($emprecord) && $emprecord->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$emprecord->add1}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add1" name="add1" value="{{$employer->add1}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="add1" name="add1" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label class="control-label">@lang('scheme/employer.attr.postal_address2')</label> --}}
                                    @if(!empty($emprecord) && $emprecord->add2 != '')
                                    <input type="text" id="add2" name="add2" value="{{$emprecord->add2}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->add1 != '')
                                    <input type="text" id="add2" name="add2" value="{{$employer->add2}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="add2" name="add2" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <label class="control-label">@lang('scheme/employer.attr.postal_address3')</label>  --}}
                                    @if(!empty($emprecord) && $emprecord->add3 != '')
                                    <input type="text" id="add3" name="add3" value="{{$emprecord->add3}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->add3 != '')
                                    <input type="text" id="add3" name="add3" value="{{$employer->add3}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="add3" name="add3" value="{{old('add3')}}" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                <select name='state' id='state' class='form-control'>
                                    <option value="please select" selected hidden readonly>@lang('scheme/noticetype.attr.please_select')</option>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.city')</label>
                                @if(!empty($obprofile) && $obprofile->city != '')
                                <input type="text" id="city" name="city" value="{{ $obprofile->city }}" class="form-control clearFields">
                                @else
                                <input type="text" id="city" name="city" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('scheme/ob.attr.postcode')</label>
                                @if(!empty($obprofile) && $obprofile->postcode != '')
                                <input type="text" id="postcode" name="postcode" value="{{ $obprofile->postcode }}" class="form-control clearFields">
                                @else
                                <input type="text" id="postcode" name="postcode" value="" class="form-control clearFields">
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/employer.attr.pobox')</label>
                                    @if(!empty($emprecord) && $emprecord->pobox != '')
                                    <input type="text" id="pobox" name="pobox" value="{{$emprecord->pobox}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->pobox != '')
                                    <input type="text" id="pobox" name="pobox" value="{{$emprecord->pobox}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="pobox" name="pobox" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/employer.attr.lockedbag')</label>
                                    @if(!empty($emprecord) && $emprecord->lockedbag != '')
                                    <input type="text" id="lockedbag" name="lockedbag" value="{{$emprecord->lockedbag}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->lockedbag != '')
                                    <input type="text" id="lockedbag" name="lockedbag" value="{{$emprecord->lockedbag}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="lockedbag" name="lockedbag" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/employer.attr.wdt')</label>
                                    @if(!empty($emprecord) && $emprecord->wdt != '')
                                    <input type="text" id="wdt" name="wdt" value="{{$emprecord->wdt}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->wdt != '')
                                    <input type="text" id="wdt" name="wdt" value="{{$emprecord->wdt}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="wdt" name="wdt" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/employer.attr.telNo')</label>
                                    @if(!empty($emprecord) && $emprecord->telno != '')
                                    <input type="text" id="telno" name="telno" value="{{$emprecord->telno}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->phoneno != '')
                                    <input type="text" id="telno" name="telno" value="{{$employer->phoneno}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="telno" name="telno" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/employer.attr.faxNo')</label>
                                    @if(!empty($emprecord) && $emprecord->faxno != '')
                                    <input type="text" id="faxno" name="faxno" value="{{$emprecord->faxno}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->faxno != '')
                                    <input type="text" id="faxno" name="faxno" value="{{$employer->faxno}}" class="form-control clearFields">
                                    @else
                                    <input type="text" id="faxno" name="faxno" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>@lang('scheme/employer.attr.email')</label>
                                    @if(!empty($emprecord) && $emprecord->email != '')
                                    <input type="email" id="email" name="email" value="{{$emprecord->email}}" class="form-control clearFields">
                                    @elseif(!empty($employer) && $employer->faxno != '')
                                    <input type="email" id="email" name="email" value="{{$employer->email}}" class="form-control clearFields">
                                    @else
                                    <input type="email" id="email" name="email" value="" class="form-control clearFields">
                                    @endif
                                </div>
                            </div>  
                        </div>
                            
                            
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                            {{-- <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('noticetype.back')</button> --}}
                        </div>
                            
                        <br/>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitform(){
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>
