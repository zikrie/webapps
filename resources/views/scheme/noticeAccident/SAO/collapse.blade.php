<div class="row">
                <div class="col-sm-12">
                        <div class="card">
                        <form class="form">      
                                <div id="accordion2" role="tablist" class="accordion" >
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingZero0">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseZero0" aria-expanded="false" aria-controls="collapseZero0"><h4 class="card-title"><i class="fa fa-plus"></i>
                                                                @lang('form/scheme.general.collapse.preparer.title')</h4></a>
                                                </h6>
                                        </div>
                                        <div id="collapseZero0" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
                                                <div class="card-body">@include('scheme.noticeAccident.SCO.prepare')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment appointmentdetails-->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne1">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i> 
                                                                @lang('form/scheme.general.collapse.case_info.title')</h4>
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
                                                                <h4 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.certification.title') </h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseTwelve12" class="collapse" role="tabpanel" aria-labelledby="headingTwelve12">
                                                <div class="card-body">@include('scheme/general.certification')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment employementDetails-->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo2">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>  @lang('form/scheme.general.collapse.ob.title')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                <div class="card-body">
                                                @include('scheme.noticeAccident.SCO.ob')
                                                </div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingSeven7">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.employer.title') </h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7">
                                                <div class="card-body">
                                                @include('scheme.noticeAccident.SCO.employer')
                                                </div>
                                        </div>
                                </div>
                                <!-- Initial Assessment Education and Skills--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFive5">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.accident.title')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                                                <div class="card-body">@include('scheme.noticeAccident.SCO.accidentDetails')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment Disabled Details--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEight8">
                                                <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                                                @lang('form/scheme.general.collapse.wages.title')
                                                        </h4>
                                                </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                                                <div class="card-body"> @include('scheme.noticeAccident.SCO.wages')</div>
                                        </div>
                                </div> 
                                <!-- Initial Assessment Mobility Details--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingSix6">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.mc.title1')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.medicalCertificate_SAO')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment OB Employment--> 
                                {{-- <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFour4">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.similar_worker')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                                <div class="card-body">@include('scheme.noticeAccident.SCO.similarWorker_SCO')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEleven11">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven11" aria-expanded="false" aria-controls="collapseEleven11">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.fhus') </h4> </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven11">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.fhus_SAO')</div>
                                        </div>
                                </div> --}}
                                {{-- <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEleven011">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven011" aria-expanded="false" aria-controls="collapseEleven011">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.rateCalculation') </h4> </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEleven011" class="collapse" role="tabpanel" aria-labelledby="headingEleven011">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.rateCalculation_SAO')</div>
                                        </div>
                                </div>  --}}
                                {{-- <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEleven012">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven012" aria-expanded="false" aria-controls="collapseEleven012">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.fhuk') </h4> </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEleven012" class="collapse" role="tabpanel" aria-labelledby="headingEleven012">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.fhuk_SAO')</div>
                                        </div>
                                </div>  --}}
                                {{-- <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEleven013">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven013" aria-expanded="false" aria-controls="collapseEleven013">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.medical_board') </h4> </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEleven013" class="collapse" role="tabpanel" aria-labelledby="headingEleven013">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.medicalBoard_SAO')</div>
                                        </div>
                                </div>  --}}
                                <!-- Initial Assessment Treatment Details--> 
                                {{-- <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingNine09">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine09" aria-expanded="false" aria-controls="collapseNine09">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.permanentPresentative')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseNine09" class="collapse" role="tabpanel" aria-labelledby="headingNine09">
                                                <div class="card-body">@include('scheme.noticeAccident.SCO.permanentPresentative')</div>
                                        </div>
                                </div> --}}
                                {{-- <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingNine19">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine19" aria-expanded="false" aria-controls="collapseNine19">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.paymentOption')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseNine19" class="collapse" role="tabpanel" aria-labelledby="headingNine19">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.paymentOption_SAO')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingNine10">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine10" aria-expanded="false" aria-controls="collapseNine10">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.paymentHistory')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseNine10" class="collapse" role="tabpanel" aria-labelledby="headingNine10">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.paymentHistory_SAO')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingNine11">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine11" aria-expanded="false" aria-controls="collapseNine11">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.lumpsum_periodicalpayment')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseNine11" class="collapse" role="tabpanel" aria-labelledby="headingNine11">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.lumpSumPeriodocal_SAO')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
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
                                </div>
                                <div class="card m-b-0">
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
                                                <div class="card-body">@include('scheme.noticeAccident.SCO.investigation_doc')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwenty20">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwenty20" aria-expanded="false" aria-controls="collapseTwenty20">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.caseTransfer')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseTwenty20" class="collapse" role="tabpanel" aria-labelledby="headingTwenty20">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.caseTransfer_SAO')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwenty21">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwenty21" aria-expanded="false" aria-controls="collapseTwenty21">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.statement')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseTwenty21" class="collapse" role="tabpanel" aria-labelledby="headingTwenty21">
                                                <div class="card-body">@include('scheme.noticeAccident.IO.statement')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEighteen18">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEighteen18" aria-expanded="false" aria-controls="collapseEighteen18">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.comment')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEighteen18" class="collapse" role="tabpanel" aria-labelledby="headingEighteen18">
                                                <div class="card-body">@include('scheme.noticeAccident.SCO.comment_SCO')</div>
                                        </div>
                                </div> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEighteen30">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEighteen30" aria-expanded="false" aria-controls="collapseEighteen30">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.approval')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseEighteen30" class="collapse" role="tabpanel" aria-labelledby="headingEighteen30">
                                                <div class="card-body">@include('scheme.noticeAccident.SAO.approval_SAO')</div>
                                        </div>
                                </div>  --}}
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
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingBank1">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank1" aria-expanded="false" aria-controls="collapseBank1">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseBank1" class="collapse" role="tabpanel" aria-labelledby="headingBank1">
                                                <div class="card-body">@include('scheme.general.bank')</div>
                                        </div>
                                </div>
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
       