<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div id="accordion2" role="tablist" class="accordion" >
                <!-- obform -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne1">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#obform" aria-expanded="true" aria-controls="collapseOne1">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.insured_details')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="obform" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                        <div class="card-body">
                            @include('scheme.general.ob')
                        </div>
                    </div>
                </div>	
                <!-- employer -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne2">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employer" aria-expanded="false" aria-controls="collapseOne2">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.employer_details')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="employer" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                        <div class="card-body">
                            @include('scheme.general.employer')
                        </div>
                    </div>
                </div>  
                <!-- employment history -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne3">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odempinfo" aria-expanded="false" aria-controls="collapseOne3">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.employer_history')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="odempinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
                        <div class="card-body">
                            @include('scheme.noticeOd.PK.odEmphistory')
                        </div>
                    </div>
                </div> 	
                <!-- od info -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne4">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odinfo" aria-expanded="false" aria-controls="collapseOne4">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.od_information')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="odinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
                        <div class="card-body">
                            @include('scheme.noticeOd.PK.odInformation')
                        </div>
                    </div>
                </div> 	
                <!-- mc info -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne5">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mcdetails" aria-expanded="false" aria-controls="collapseOne5">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.medical_details')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="mcdetails" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
                        <div class="card-body">
                            @include('scheme.general.mc')
                        </div>
                    </div>
                </div>
                <!-- wages info -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne6">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne6">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.wages_details')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne6">
                        <div class="card-body">
                            @include('scheme.general.wages')
                        </div>
                    </div>
                </div> 
                <!-- socso office -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne7">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#office" aria-expanded="false" aria-controls="collapseOne7">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.preferred_socso')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="office" class="collapse" role="tabpanel" aria-labelledby="headingOne7">
                        <div class="card-body">
                            @include('scheme.general.socso')
                        </div>
                    </div>
                </div>
                <!-- bank info -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne8">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankinfo" aria-expanded="false" aria-controls="collapseOne8">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="bankinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne8">
                        <div class="card-body">
                            @include('scheme.general.bank')
                        </div>
                    </div>
                </div> 
                <!-- certificate -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne9">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificate" aria-expanded="false" aria-controls="collapseOne9">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.certificate')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="certificate" class="collapse" role="tabpanel" aria-labelledby="headingOne9">
                        <div class="card-body">
                            @include('scheme.general.certification')
                        </div>
                    </div>
                </div> 
                <!-- bank info -->
                <div class="card m-b-0">
                    <div class="card-header" role="tab" id="headingOne10">
                        <h5 class="mb-0">                           
                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne10">
                            <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.confirmation')</h5>
                            </a>
                        </h5>
                    </div>
                    <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingOne10">
                        <div class="card-body">
                            @include('scheme.general.confirmation')
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- bank info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingBank">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankinfo" aria-expanded="false" aria-controls="collapseOne8">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.bank.title')</h5>
                </a>
            </h5>
        </div>
        <div id="bankinfo" class="collapse" role="tabpanel" aria-labelledby="headingBank">
            <div class="card-body">
                @include('scheme.general.bank')
            </div>
        </div>
    </div> 
    <!-- certificate -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingCert">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificate" aria-expanded="false" aria-controls="collapseOne9">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.certification.title')</h5>
                </a>
            </h5>
        </div>
        <div id="certificate" class="collapse" role="tabpanel" aria-labelledby="headingCert">
            <div class="card-body">
                @include('scheme.general.certification')
            </div>
        </div>
    </div> 
    <!-- bank info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingConfirm">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.confirmation.title_confirmation')</h5>
                </a>
            </h5>
        </div>
        <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirm">
            <div class="card-body">
                @include('scheme.general.confirmation')
            </div>
        </div>
    </div>  
</div>

<!-- Row -->

<script>
    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });

    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });

</script>