<div class="card m-b-0">
        <div class="card-header" role="tab" id="headingInSao">
                <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInSao" aria-expanded="false" aria-controls="collapseInSao">
                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.inconsistent.title')</h4> 
                        </a>
                </h6>
        </div>
        <div id="collapseInSao" class="collapse" role="tabpanel" aria-labelledby="headingInSao">
                <div class="card-body">
                        @include('scheme.noticeAccident.SCO.inconsistency')
                </div>
        </div>
</div>
<div class="card m-b-0">
        <div class="card-header" role="tab" id="headingTwenty20">
                <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwenty20" aria-expanded="false" aria-controls="collapseTwenty20">
                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.appointment.title')</h4>
                        </a>
                </h6>
        </div>
        <div id="collapseTwenty20" class="collapse" role="tabpanel" aria-labelledby="headingTwenty20">
                <div class="card-body">@include('scheme.noticeAccident.IO.appointment_IO')</div>
        </div>
</div>
<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">                   
                        <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTen10">
                                                <h6 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.investigation_document.title')</h4>
                                                        </a>
                                                </h6>
                                        </div>
                                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                                <div class="card-body">
                                                        @include('scheme.noticeAccident.SCO.investigation_doc')
                                                </div>
                                        </div>
                        </div>
                </form>
                </div>
        </div>
</div>                
