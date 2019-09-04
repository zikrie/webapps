<div id="accordion2" role="tablist" class="accordion">

    <!-- Initial Assessment appointmentdetails-->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#caseinfo" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.case_details')</h4>
                </a>
            </h5>
        </div>
        <div id="caseinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.SCO.caseinfo')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.insured_details')</h4>
                </a>
            </h5>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.SCO.ob')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wagesInfo" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.insurance_details')</h4>
                </a>
            </h5>
        </div>
        <div id="wagesInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.SCO.wagesInfo')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#contriInfo"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.detailsContriSalary')</h4>
                </a>
            </h5>
        </div>
        <div id="contriInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.SCO.contriInfo')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#creditPeriod"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.creditPeriod') </h4>
                </a>
            </h5>
        </div>
        <div id="creditPeriod" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.SCO.credit')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#contri56" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.contribution_section')</h4>
                </a>
            </h5>
        </div>
        <div id="contri56" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.IO.contribution56')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne1">
                <h5 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#totalContri" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.total_contribution')</h4>
                    </a>
                </h5>
            </div>
            <div id="totalContri" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.SCO.totalContribution')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne1">
                <h5 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#aidWages" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.aid_wages')</h4>
                    </a>
                </h5>
            </div>
            <div id="aidWages" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.SCO.aidWages')
                </div>
            </div>
        </div>
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne1">
                <h5 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#invalidityNoticeDetails" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                        @lang('scheme/index.attr.invalidity_notice_details')</h4>
                    </a>
                </h5>
            </div>
            <div id="invalidityNoticeDetails" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                <div class="card-body">
                    @include('scheme.noticeInvalidity.SCO.invalidNoticeDetails')
                </div>
            </div>
        </div>
    
        <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#empHistory" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/index.attr.employer_history')</h4>
                        </a>
                    </h5>
                </div>
                <div id="empHistory" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.SCO.empHistory')
                    </div>
                </div>
            </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medicalBoard" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/index.attr.medical_board')</h4>
                        </a>
                    </h5>
                </div>
                <div id="medicalBoard" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.SCO.medicalboard')
                    </div>
                </div>
            </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socso" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                         @lang('scheme/index.attr.social_developing')</h4>
                        </a>
                    </h5>
                </div>
                <div id="socso" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.SCO.socso')
                    </div>
                </div>
            </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#permanent" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/index.attr.permanent_representative')</h4>
                        </a>
                    </h5>
                </div>
                <div id="permanent" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.SCO.permanent')
                    </div>
                </div>
            </div>
           
            {{-- <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigateDetails" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/index.attr.investigation')</h4>
                        </a>
                    </h5>
                </div>
                <div id="investigateDetails" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.IO.investigation')
                    </div>
                </div>
            </div> --}}
            <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne1">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bank" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                                @lang('scheme/index.attr.bank_information')</h4>
                            </a>
                        </h5>
                    </div>
                    <div id="bank" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="card-body">
                            {{-- @include('scheme.noticeInvalidity.SCO.bank') --}}
                        </div>
                    </div>
                </div>
            <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/index.attr.confirmation_ob')</h4>
                        </a>
                    </h5>
                </div>
                <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.SCO.confirmation')
                    </div>
                </div>
            </div>
            {{-- <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#recommend" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                            @lang('scheme/index.attr.suggestion')</h4>
                        </a>
                    </h5>
                </div>
                <div id="recommend" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">
                        @include('scheme.noticeInvalidity.SCO.recommendation')
                    </div>
                </div>
            </div> --}}

</div>
