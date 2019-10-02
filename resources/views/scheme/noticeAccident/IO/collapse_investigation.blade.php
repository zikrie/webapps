<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">
               <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTwenty20">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwenty20" aria-expanded="false" aria-controls="collapseTwenty20">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.appointment')</h4>
                                        </a>
                                </h6>
                        </div>
                        <div id="collapseTwenty20" class="collapse" role="tabpanel" aria-labelledby="headingTwenty20">
                                <div class="card-body">@include('scheme.noticeAccident.IO.appointment_IO')</div>
                        </div>
                </div>
                <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingTen10">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigationDoc')</h4>
                                        </a>
                                </h6>
                        </div>
                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                <div class="card-body">@include('scheme.noticeAccident.IO.investigationDoc')</div>
                        </div>
                </div>
                
                <div class="card m-b-0">
                        <div class="card-header" role="tab" id="headingEleven19">
                                <h6 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven19" aria-expanded="false" aria-controls="collapseEleven19">
                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.inconsistency') </h4> </a>
                                </h6>
                        </div>
                        <div id="collapseEleven19" class="collapse" role="tabpanel" aria-labelledby="headingEleven19">
                                <div class="card-body">@include('scheme.noticeAccident.SAO.inconsistency_SAO')</div>
                        </div>
                </div>
                </form>
                </div>
        </div>
</div>                
