<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">                   
                        {{-- <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingInconsistency">
                                        <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInconsistency" aria-expanded="false" aria-controls="collapseInconsistency">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.inconsistency') </h4> </a>
                                        </h6>
                                </div>
                                <div id="collapseInconsistency" class="collapse" role="tabpanel" aria-labelledby="headingInconsistency">
                                        <div class="card-body">@include('scheme.noticeAccident.SAO.inconsistency_SAO')</div>
                                </div>
                        </div> --}}
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingEleven110">
                                        <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven110" aria-expanded="false" aria-controls="collapseEleven110">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.recommendation.title')  </h4> </a>
                                        </h6>
                                </div>
                                <div id="collapseEleven110" class="collapse" role="tabpanel" aria-labelledby="headingEleven110">
                                        <div class="card-body">@include('scheme.noticeAccident.SAO.recommendation')</div>
                                </div>
                        </div>
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
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingMcSao">
                                        <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMcSao" aria-expanded="false" aria-controls="collapseMcSao">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.mc.title1')</h4>
                                                </a>
                                        </h6>
                                </div>
                                <div id="collapseMcSao" class="collapse" role="tabpanel" aria-labelledby="headingMcSao">
                                        {{-- <div class="card-body">@include('scheme.noticeAccident.SCO.medicalCertificate_SCO')</div> --}}
                                </div>
                        </div>
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingBankSao">
                                        <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBankSao" aria-expanded="false" aria-controls="collapseBankSao">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>@lang('scheme/index.attr.bank_information')</h4>
                                                </a>
                                        </h6>
                                </div>
                                <div id="collapseBankSao" class="collapse" role="tabpanel" aria-labelledby="headingBankSao">
                                        <div class="card-body">@include('scheme.general.bank')</div>
                                </div>
                        </div>
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
                </form>
                </div>
        </div>
</div>                
       
