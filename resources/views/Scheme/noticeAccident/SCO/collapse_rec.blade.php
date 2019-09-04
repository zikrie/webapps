<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">     
                        <div class="row">
                                <div class="col-sm-12">
                                        <form class="form">
                                                <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingEleven11">
                                                                <h6 class="mb-0">                           
                                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven11" aria-expanded="false" aria-controls="collapseEleven11">
                                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.recommendation') </h4> </a>
                                                                </h6>
                                                        </div>
                                                        <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven11">
                                                                <div class="card-body">@include('scheme.noticeAccident.SCO.recommendation')</div>
                                                        </div>
                                                </div>
                                        </form>
                                </div>
                        </div>
                        <!-- Initial Assessment Disabled Details--> 
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
                                <div class="card-header" role="tab" id="headingMCReco">
                                        <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.HUS_info')</h4>
                                                </a>
                                        </h6>
                                </div>
                                <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingMCReco">
                                        {{-- <div class="card-body">@include('scheme.noticeAccident.SCO.medicalCertificate_SCO')</div> --}}
                                </div>
                        </div>
                        <div class="card m-b-0">
                                <div class="card-header" role="tab" id="headingBanK">
                                        <h6 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank" aria-expanded="false" aria-controls="collapseBank">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information')</h4>
                                                </a>
                                        </h6>
                                </div>
                                <div id="collapseBank" class="collapse" role="tabpanel" aria-labelledby="headingBanK">
                                        <div class="card-body">@include('scheme.common.bank')</div>
                                </div>
                        </div>
                        {{-- <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingEleven011">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven011" aria-expanded="false" aria-controls="collapseEleven011">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.routing') </h4> </a>
                                </h6>
                        </div>
                        <div id="collapseEleven011" class="collapse" role="tabpanel" aria-labelledby="headingEleven11">
                                <div class="card-body">@include('scheme.noticeAccident.SCO.sco_recommendation')</div>
                        </div>
                        </div> --}}
                </form>
                </div>
        </div>
</div>                