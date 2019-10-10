
<div id="accordion2" role="tablist" class="accordion" >
    <!-- Ob Form -->
    <div class="card m-b-0">
        <div class="row p-t-20 card-header"><br>
                <div class="col-md-3">
                        <div class="form-group">
                                <label class="control-label ">@lang('scheme/ob.attr.form34_receivedDate')</label><span class="required">*</span>
                                <input type="date" id="f34recvdate" name="f34recvdate" value="{{ $obprofile->f34recvdate }}" class="form-control clearFields" required>
                        </div>
                </div>
        </div>
        <div class="row p-t-20 card-header">
                <div class="col-md-3">
                        <div class="form-group">
                                <label class="control-label ">Form 34 Submission By</label><span class="required">*</span>
                                <select  class="form-control" value="" name="form_submission" >
                                <option value=""></option>
                                <option value=""></option>
                                </select>
                        </div>
                </div>
        </div>
        <div class="card-header" role="tab" id="headingOb">
                <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb" aria-expanded="false" aria-controls="collapseOb"><h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.ob.title')</h6>
                        </a>
                </h6>
        </div>
        <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
                <div class="card-body">
                @include('scheme.general.ob')
                </div>
        </div>
    </div>
    <!-- Employer Details -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingEmployer">
                <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEmployer" aria-expanded="false" aria-controls="collapseEmployer"><h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('form/scheme.general.collapse.employer.title')</h6>
                 </a>
                </h6>
        </div>
        <div id="collapseEmployer" class="collapse" role="tabpanel" aria-labelledby="headingEmployer">
                <div class="card-body">
                @include('scheme.general.employer')
                </div>
        </div>
    </div>
    {{-- Accident Details --}}
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingAccident">
                <h6 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAccident" aria-expanded="false" aria-controls="collapseAccident"><h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('form/scheme.general.collapse.accident.title')</h6>
                </a>
                </h6>
        </div>
        <div id="collapseAccident" class="collapse" role="tabpanel" aria-labelledby="headingAccident">
                <div class="card-body">
                        @include('scheme.noticeAccident.PK.accidentDetails')
                </div>
        </div>
    </div>
     {{-- MC --}}
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingMC">
                    <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMC" aria-expanded="false" aria-controls="collapseMC">
                            <h6 class="card-title"><i class="fa fa-plus"></i>
                                @lang('form/scheme.general.collapse.mc.title')
                            </h6>
                    </a>
                    </h6>
            </div>
            <div id="collapseMC" class="collapse" role="tabpanel" aria-labelledby="headingMC">
                    <div class="card-body"> @include('scheme.general.mc')</div>
            </div>
    </div>
    {{-- Wages --}}
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingWages">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages">
                            <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.wages.title')</h6>
                            </a>
                    </h6>
            </div>
            <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                    <div class="card-body">@include('scheme.general.wages')</div>
            </div>
    </div>
    <!-- Socso --> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingSocso">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSocso" aria-expanded="false" aria-controls="collapseSocso">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.socso.title')</h6>
                            </a>
                    </h6>
            </div>
            <div id="collapseSocso" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
                    <div class="card-body">@include('scheme.general.socso')</div>
            </div>
    </div>
    <!-- Certificate --> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingCert">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCert" aria-expanded="false" aria-controls="collapseCert">
                            <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.certification.title') 
                            </h6>
                            </a>
                    </h6>
            </div>
            <div id="collapseCert" class="collapse" role="tabpanel" aria-labelledby="headingCert">
                    <div class="card-body">@include('scheme.general.certification')</div>
            </div>
    </div>
    <!-- Bank --> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingBank">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank" aria-expanded="false" aria-controls="collapseBank">
                                    <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.bank.title')</h6>
                            </a>
                    </h6>
            </div>
            <div id="collapseBank" class="collapse" role="tabpanel" aria-labelledby="headingBank">
                    <div class="card-body">@include('scheme.general.bank')</div>
            </div>
    </div>
    {{-- Confirmation --}}
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingConfirm">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseConfirm" aria-expanded="false" aria-controls="collapseConfirm">
                                    <h6 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.confirmation.title')</h6>
                            </a>
                    </h6>
            </div>
            <div id="collapseConfirm" class="collapse" role="tabpanel" aria-labelledby="headingConfirm">
                    <div class="card-body">@include('scheme.general.confirmation')</div>
            </div>
    </div>
</div> 