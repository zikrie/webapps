<div id="accordion2" role="tablist" class="accordion" >
    <!-- preparer -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne16">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#preparer" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.preparer')</h5>
                </a>
            </h5>
        </div>
        <div id="preparer" class="collapse" role="tabpanel" aria-labelledby="headingOne16">
            <div class="card-body">
                @include('scheme.noticeOd.IO.preparer')
            </div>
        </div>
    </div>
    <!-- case info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#case" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.case_details')</h5>
                </a>
            </h5>
        </div>
        <div id="case" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeOd.IO.caseinfo')
            </div>
        </div>
    </div>
    <!-- certificate -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne14">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#certificate" aria-expanded="false" aria-controls="collapseOne9">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.certificate')</h5>
                </a>
            </h5>
        </div>
        <div id="certificate" class="collapse" role="tabpanel" aria-labelledby="headingOne14">
            <div class="card-body">
                @include('scheme.common.certification')
            </div>
        </div>
    </div> 
    <!-- obform -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne2">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#obform" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.insured_details')</h5>
                </a>
            </h5>
        </div>
        <div id="obform" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
            <div class="card-body">
                @include('scheme.noticeOd.IO.ob')
            </div>
        </div>
    </div>  
    <!-- employer -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne3">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#employer" aria-expanded="false" aria-controls="collapseOne2">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.employer_details')</h5>
                </a>
            </h5>
        </div>
        <div id="employer" class="collapse" role="tabpanel" aria-labelledby="headingOne3">
            <div class="card-body">
                @include('scheme.common.employer')
            </div>
        </div>
    </div>  
    <!-- employment history -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne4">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odempinfo" aria-expanded="false" aria-controls="collapseOne3">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.employer_history')</h5>
                </a>
            </h5>
        </div>
        <div id="odempinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne4">
            <div class="card-body">
                @include('Scheme.noticeOd.PK.odEmphistory')
            </div>
        </div>
    </div>  
    <!-- od info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne5">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#odinfo" aria-expanded="false" aria-controls="collapseOne4">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.od_information')</h5>
                </a>
            </h5>
        </div>
        <div id="odinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne5">
            <div class="card-body">
                @include('Scheme.noticeOd.IO.odInformation')
            </div>
        </div>
    </div>  
    <!-- mc info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne6">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#mcdetails" aria-expanded="false" aria-controls="collapseOne5">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.hus')</h5>
                </a>
            </h5>
        </div>
        <div id="mcdetails" class="collapse" role="tabpanel" aria-labelledby="headingOne6">
            <div class="card-body">
                @include('scheme.noticeOd.IO.mc')
            </div>
        </div>
    </div>
    <!-- wages info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne7">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne6">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.wages_details')</h5>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne7">
            <div class="card-body">
                @include('scheme.noticeOd.IO.wages')
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
    <!-- socso office -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne12">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socso" aria-expanded="false" aria-controls="collapseOne7">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.preferred_socso')</h5>
                </a>
            </h5>
        </div>
        <div id="socso" class="collapse" role="tabpanel" aria-labelledby="headingOne12">
            <div class="card-body">
                @include('scheme.noticeOd.IO.socso')
            </div>
        </div>
    </div>
    <!-- bank info -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne13">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankinfo" aria-expanded="false" aria-controls="collapseOne8">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.bank_information')</h5>
                </a>
            </h5>
        </div>
        <div id="bankinfo" class="collapse" role="tabpanel" aria-labelledby="headingOne13">
            <div class="card-body">
                @include('scheme.common.bank')
            </div>
        </div>
    </div>
    <!-- confirmation -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne15">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.confirmation')</h5>
                </a>
            </h5>
        </div>
        <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingOne15">
            <div class="card-body">
                @include('scheme.noticeOd.IO.confirmation')
            </div>
        </div>
    </div>  
    <!-- overpayment -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne16">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#overpayment" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.overpayment')</h5>
                </a>
            </h5>
        </div>
        <div id="overpayment" class="collapse" role="tabpanel" aria-labelledby="headingOne16">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.overpayment')
            </div>
        </div>
    </div>  
    <!-- benefit management decision -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne17">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#benefit" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.benefit_management')</h5>
                </a>
            </h5>
        </div>
        <div id="benefit" class="collapse" role="tabpanel" aria-labelledby="headingOne17">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.benefit_management')
            </div>
        </div>
    </div> 
    <!-- medical board decision -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne18">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#medical_board" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.medical_board')</h5>
                </a>
            </h5>
        </div>
        <div id="medical_board" class="collapse" role="tabpanel" aria-labelledby="headingOne18">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.medical_board')
            </div>
        </div>
    </div> 
    <!-- sao approval -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne19">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#approval" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.approval')</h5>
                </a>
            </h5>
        </div>
        <div id="approval" class="collapse" role="tabpanel" aria-labelledby="headingOne19">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.saoApproval')
            </div>
        </div>
    </div> 
    <!-- ms opinion -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne20">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#msopinion" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.ms_opinion')</h5>
                </a>
            </h5>
        </div>
        <div id="msopinion" class="collapse" role="tabpanel" aria-labelledby="headingOne20">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.msopinion')
            </div>
        </div>
    </div>  
    <!-- payment option -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne21">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#payment" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.payment_option')</h5>
                </a>
            </h5>
        </div>
        <div id="payment" class="collapse" role="tabpanel" aria-labelledby="headingOne21">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.payment_option')
            </div>
        </div>
    </div>
    <!-- transfer case -->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne22">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#transfer" aria-expanded="false" aria-controls="collapseOne10">
                <h5 class="card-title"><i class="fa fa-plus"></i> @lang('scheme/index.attr.transfer_case')</h5>
                </a>
            </h5>
        </div>
        <div id="transfer" class="collapse" role="tabpanel" aria-labelledby="headingOne22">
            <div class="card-body">
                @include('Scheme.noticeOd.SAO.transfer_case')
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