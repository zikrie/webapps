<div id="accordion2" role="tablist" class="accordion" >
        <!-- Initial Assessment appointmentdetails-->
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOne1">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i> 
                                @lang('scheme/index.attr.insured_details')</h4>
                           </a>
                    </h6>
            </div>
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                    <div class="card-body">@include('scheme.common.ob')</div>
            </div>
    </div>
    <!-- Initial Assessment employementDetails-->
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingTwo2">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.employer_details')</h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                    <div class="card-body">
                            @include('scheme.common.employer')
                    </div>
            </div>
    </div>
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingSeven7">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.accident_details') </h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7">
                    <div class="card-body">
                                    @include('scheme.noticeAccident.PK.accidentDetails')
                    </div>
            </div>
    </div>
            <!-- Initial Assessment Disabled Details--> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingEight8">
                    <h6 class="mb-0">                           
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                            <h4 class="card-title"><i class="fa fa-plus"></i>
                                    @lang('scheme/index.attr.medical_details')
                            </h4>
                    </a>
                    </h6>
            </div>
            <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                    <div class="card-body"> @include('scheme.common.mc')</div>
            </div>
    </div>
    
    <!-- Initial Assessment OB Employment--> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingFour4">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                            <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.wages_details')</h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                    <div class="card-body">@include('scheme.common.wages')</div>
            </div>
    </div>
    <!-- Initial Assessment Education and Skills--> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingFive5">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.preferred_socso')</h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                    <div class="card-body">@include('scheme.common.socso')</div>
            </div>
    </div>
    <!-- Initial Assessment Mobility Details--> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingSix6">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                            <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.certificate') 
                            </h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6">
                    <div class="card-body">@include('scheme.common.certification')</div>
            </div>
    </div>
    <!-- Initial Assessment Treatment Details--> 
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingNine9">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information') </h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9">
                    <div class="card-body">@include('scheme.common.bank')</div>
            </div>
    </div>
    <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingTen10">
                    <h6 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.confirmation')</h4>
                            </a>
                    </h6>
            </div>
            <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                    <div class="card-body">@include('scheme.common.confirmation')</div>
            </div>
    </div>
</div> 