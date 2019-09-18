<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">                   
                        <div class="row">
                                <div class="col-sm-12">
                                        <div class="card">
                                        <form class="form">
                                        <div id="accordion2" role="tablist" class="accordion" >
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingZero0">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.preparer')</h4>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.prepare')</div>
                                                        </div>
                                                </div>
                                        <!-- Case Info-->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingOne1">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.case_details')</h4>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.caseinfo')</div>
                                                        </div>
                                                </div>
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingTwelve12">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwelve12" aria-expanded="false" aria-controls="collapseTwelve12">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.certificate') </h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseTwelve12" class="collapse" role="tabpanel" aria-labelledby="headingTwelve12">
                                                                <div class="card-body">@include('scheme/general.certification')</div>
                                                        </div>
                                                </div>
                                                <!-- OB Form-->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingTwo2">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.insured_details')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                                <div class="card-body">
                                                                @include('scheme.noticeAccident.SCO.ob')
                                                                </div>
                                                        </div>
                                                </div>
                                                <!-- Employer-->
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingSeven7">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('scheme/index.attr.employer_details') </h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7">
                                                                <div class="card-body">
                                                                @include('scheme.general.employer')
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--Accident Details--> 
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingFive5">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.accident_details')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.accidentDetails')</div>
                                                        </div>
                                                </div>
                                                <!--Wages--> 
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingEight8">
                                                                <h6 class="mb-0">                           
                                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                                                        @lang('scheme/index.attr.wages_con')
                                                                        </h4>
                                                                </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                                                                <div class="card-body"> @include('scheme.noticeAccident.SCO.wages')</div>
                                                        </div>
                                                </div>
                                                <!--HUS--> 
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="testMC">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#testMC" aria-expanded="false" aria-controls="testMC">
                                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.HUS_info')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="testMC" class="collapse" role="tabpanel" aria-labelledby="testMC">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.medicalCertificate_SCO')</div>
                                                        </div>
                                                </div>
                                                <!-- Initial Assessment OB Employment--> 
                                                {{-- <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingFour4">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.similar')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.similarWorker_SCO')</div>
                                                        </div>
                                                </div> --}}
                                                <!-- Case Fact--> 
                                                {{-- <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingNine9">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.case_fact')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.caseFact_SCO')</div>
                                                        </div>
                                                </div> --}}
                                                {{-- <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingTen10">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.inconsistent_information')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.inconsistentInformation_SCO')</div>
                                                        </div>
                                                </div>
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingSixteen16">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSixteen16" aria-expanded="false" aria-controls="collapseSixteen16">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigation')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseSixteen16" class="collapse" role="tabpanel" aria-labelledby="headingSixteen16">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.investigation_SCO')</div>
                                                        </div>
                                                </div> --}}
                                                <!-- SOCSO--> 
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingThirteen13">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirteen13" aria-expanded="false" aria-controls="collapseThirteen13">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.preferred_socso')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseThirteen13" class="collapse" role="tabpanel" aria-labelledby="headingThirteen13">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.socso')</div>
                                                        </div>
                                                </div>
                                                <!-- BANK--> 
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingFourteen14">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourteen14" aria-expanded="false" aria-controls="collapseFourteen14">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseFourteen14" class="collapse" role="tabpanel" aria-labelledby="headingFourteen14">
                                                                <div class="card-body">@include('scheme.general.bank')</div>
                                                        </div>
                                                </div>
                                                <!-- Confirmation--> 
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingFifteen15">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFifteen15" aria-expanded="false" aria-controls="collapseFifteen15">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.confirmation')</h4>
                                                                        </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseFifteen15" class="collapse" role="tabpanel" aria-labelledby="headingFifteen15">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.confirmation_SCO')</div>
                                                        </div>
                                                </div>
                                        </div> 
                                        </form>
                                        </div>
                                </div>
                        </div>
                </form>
                </div>
        </div>
</div>                