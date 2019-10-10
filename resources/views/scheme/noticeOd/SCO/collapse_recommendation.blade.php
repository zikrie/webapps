<div id="accordion2" role="tablist" class="accordion" >
    <!-- inconsistency -->
    {{-- <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#inconsistent" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.inconsistency')</h5>
                </a>
            </h5>
        </div>
        <div id="inconsistent" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeOd.IO.inconsistency')
            </div>
        </div>
    </div> --}}
    
    {{-- HUS --}}
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingMCReco">
                <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                        <h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.mc.title1')</h4>
                        </a>
                </h6>
        </div>
        <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingMCReco">
                <div class="card-body">@include('scheme.noticeAccident.SCO.hus')</div>
        </div>
    </div>
    <!-- wages -->
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

   {{-- Bank --}}
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingBanK">
                <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseBank" aria-expanded="false" aria-controls="collapseBank">
                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information')</h4>
                        </a>
                </h6>
        </div>
        <div id="collapseBank" class="collapse" role="tabpanel" aria-labelledby="headingBanK">
                <div class="card-body">@include('scheme.general.bank')</div>
        </div>
    </div>
    <!-- recommendation -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#recommendation" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.recommendation.title') </h5>
                </a>
            </h5>
        </div>
        <div id="recommendation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeOd.SCO.recommendation')
            </div>
        </div>
    </div>
    <!-- case info -->
    {{-- <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#routing" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.routing')</h5>
                </a>
            </h5>
        </div>
        <div id="routing" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeOd.SCO.generated_doc')
            </div>
        </div>
    </div> --}}   
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