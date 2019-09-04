<div id="accordion2" role="tablist" class="accordion">
    {{-- <h5 class="card-title">@lang('scheme/index.attr.appointment')</h5> --}}
    <!-- appointment -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#appointment" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.appointment')</h5>
                </a>
            </h5>
        </div>
        <div id="appointment" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeOd.IO.appointment')
            </div>
        </div>
    </div>
    <!-- investigation document -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation_doc" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigation_document')</h5>
                </a>
            </h5>
        </div>
        <div id="investigation_doc" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeOd.SCO.investigation_document')
            </div>
        </div>
    </div>
    <!-- od report -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne11">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odreport" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.odreport')</h5>
                </a>
            </h5>
        </div>
        <div id="odreport" class="collapse" role="tabpanel" aria-labelledby="headingOne11">
            <div class="card-body">
                @include('scheme.noticeOd.IO.odreport')
            </div>
        </div>
    </div> 
    <!-- jdk decision -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne8">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#jdkdecision" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.jdk_dec')</h5>
                </a>
            </h5>
        </div>
        <div id="jdkdecision" class="collapse" role="tabpanel" aria-labelledby="headingOne8">
            <div class="card-body">
                @include('scheme.noticeOd.SCO.jdk_decision')
            </div>
        </div>
    </div> 
    <!-- investigation -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne9">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> Investigation</h5>
                </a>
            </h5>
        </div>
        <div id="investigation" class="collapse" role="tabpanel" aria-labelledby="headingOne9">
            <div class="card-body">
                @include('scheme.noticeOd.IO.investigation')
            </div>
        </div>
    </div> 
    <!-- investigation info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne10">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#investigation_info" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.investigation_info')</h5>
                </a>
            </h5>
        </div>
        <div id="investigation_info" class="collapse" role="tabpanel" aria-labelledby="headingOne10">
            <div class="card-body">
                @include('scheme.noticeOd.IO.investigationInfo')
            </div>
        </div>
    </div> 
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