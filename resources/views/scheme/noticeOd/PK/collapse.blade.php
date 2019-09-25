<div id="accordion2" role="tablist" class="accordion" >
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
    <!-- employment history -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOdHist">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odempOdHist" aria-expanded="false" aria-controls="collapseOne3">
                <h5 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.employer_history.title')</h5>
                </a>
            </h5>
        </div>
        <div id="odempOdHist" class="collapse" role="tabpanel" aria-labelledby="headingOdHist">
            <div class="card-body">
                @include('scheme.noticeOd.PK.odEmphistory')
            </div>
        </div>
    </div> 	
    <!-- od info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOdInfo">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odinfo" aria-expanded="false" aria-controls="collapseOne4">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.od_information.title')</h5>
                </a>
            </h5>
        </div>
        <div id="odinfo" class="collapse" role="tabpanel" aria-labelledby="headingOdInfo">
            <div class="card-body">
                @include('scheme.noticeOd.PK.odInformation')
            </div>
        </div>
    </div> 	
    <!-- mc info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingMC">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mcdetails" aria-expanded="false" aria-controls="collapseOne5">
                <h5 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.mc.title')</h5>
                </a>
            </h5>
        </div>
        <div id="mcdetails" class="collapse" role="tabpanel" aria-labelledby="headingMC">
            <div class="card-body">
                @include('scheme.general.mc')
            </div>
        </div>
    </div>
    <!-- wages info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingWages">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.wages.title')</h5>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
            <div class="card-body">
                @include('scheme.general.wages')
            </div>
        </div>
    </div> 
    <!-- socso office -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingSocso">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#office" aria-expanded="false" aria-controls="collapseOne7">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.socso.title')</h5>
                </a>
            </h5>
        </div>
        <div id="office" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
            <div class="card-body">
                @include('scheme.general.socso')
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
                <h5 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.certification.title')</h5>
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
                <h5 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.confirmation.title')</h5>
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