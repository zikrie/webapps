<div class="row">
    <div class="col-sm-12">
        <div class="card">
        <form class="form">
            <div id="accordion2" role="tablist" class="accordion" >
                 <!-- Test Bank Info -->
                {{-- <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingBank">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank" aria-expanded="false" aria-controls="collapseBank"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.bank.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseBank" class="collapse" role="tabpanel" aria-labelledby="headingBank">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.bank')
                        </div>
                    </div>
                </div> --}}
                <!-- Ob Form -->
                <div class="card m-b-0">
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
                <!-- Wages Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingWages">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.wages.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                        <div class="card-body">
                            @include('scheme.general.wages')
                        </div>
                    </div>
                </div>
                <!-- Death Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingDeath">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDeath" aria-expanded="false" aria-controls="collapseDeath"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.notice_death.PK.death.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDeath" class="collapse" role="tabpanel" aria-labelledby="headingDeath">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.death')
                        </div>
                    </div>
                </div>
                <!-- Dependant Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingDependant">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependant" aria-expanded="false" aria-controls="collapseDependant"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.notice_death.PK.dependant.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDependant" class="collapse" role="tabpanel" aria-labelledby="headingDependant">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.dependant')
                        </div>
                    </div>
                </div>
                <!-- Applicant Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingApplicant">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseApplicant" aria-expanded="false" aria-controls="collapseApplicant"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.notice_death.PK.applicant.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseApplicant" class="collapse" role="tabpanel" aria-labelledby="headingApplicant">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.applicant')
                        </div>
                    </div>
                </div>
                <!-- Socso Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingSocso">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSocso" aria-expanded="false" aria-controls="collapseSocso"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.socso.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseSocso" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
                        <div class="card-body">
                            @include('scheme.general.socso')
                        </div>
                    </div>
                </div>
                <!-- Certification -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingCertification">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseCertification" aria-expanded="false" aria-controls="collapseCertification"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.certification.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseCertification" class="collapse" role="tabpanel" aria-labelledby="headingCertification">
                        <div class="card-body">
                            @include('scheme.noticeDeath.SCO.certification')
                        </div>
                    </div>
                </div>
                <!-- Confirmation Details -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingConfirmation">
                        <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseConfirmation" aria-expanded="false" aria-controls="collapseConfirmation"><h6 class="card-title"><i class="fa fa-plus"></i>
                            @lang('form/scheme.general.collapse.confirmation.title')</h6>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseConfirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirmation">
                        <div class="card-body">
                            @include('scheme.noticeDeath.PK.confirmation')
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
   