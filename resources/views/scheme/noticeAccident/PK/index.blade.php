@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">@lang('scheme/index.attr.accident_notice')</h4>
		<!-- Nav tabs -->
                <ul class="nav customtab" role="tablist" id="tabMenu">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#claimDetails" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span><span class="hidden-xs-down">@lang('scheme/index.attr.claimDetails')</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploadDocuments" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.supporting') </span></a> </li>
                </ul>
				<!-- Tab panes -->
            <div class="tab-content tabcontent-border">
                {{-- <div class="tab-pane p-20 active" id="obform" role="tabpanel">
                        <div id="accordion2" role="tablist" class="accordion" >
                                <!-- Initial Assessment appointmentdetails-->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne1">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                                                        @lang('index.attr.insured_details')</h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                <div class="card-body">
                                                        @include('scheme.noticeAccident.obForm')
                                                </div>
                                        </div>
                                </div>
                                <!-- Initial Assessment employementDetails-->
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo2">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>@lang('index.attr.employer_details')</h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                                <div class="card-body">
                                                        @include('scheme.noticeAccident.employerDetails')
                                                </div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingSeven7">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i>@lang('index.attr.accident_details') </h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7">
                                                <div class="card-body">
                                                                @include('scheme.noticeAccident.accidentDetails')
                                                </div>
                                        </div>
                                </div>
                                        <!-- Initial Assessment Disabled Details--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingEight8">
                                                <h5 class="mb-0">                           
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>
                                                                @lang('index.attr.medical_details')
                                                        </h4>
                                                </a>
                                                </h5>
                                        </div>
                                        <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8">
                                                <div class="card-body"> @include('scheme.noticeAccident.medicalCertificate_PK')</div>
                                        </div>
                                </div>
                                
                                <!-- Initial Assessment OB Employment--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFour4">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>@lang('index.attr.wages_details')</h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4">
                                                <div class="card-body">@include('scheme.noticeAccident.wagesDetails')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment Education and Skills--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingFive5">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i>@lang('index.attr.preferred_socso')</h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5">
                                                <div class="card-body">@include('scheme.noticeAccident.socsoDealings')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment Mobility Details--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingSix6">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                                        <h4 class="card-title"><i class="fa fa-plus"></i>@lang('index.attr.certificate') 
                                                        </h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6">
                                                <div class="card-body">@include('scheme.noticeAccident.certificateEmployee')</div>
                                        </div>
                                </div>
                                <!-- Initial Assessment Treatment Details--> 
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingNine9">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine9" aria-expanded="false" aria-controls="collapseNine9">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i> @lang('index.attr.bank_information') </h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9">
                                                <div class="card-body">@include('scheme.noticeAccident.bankInformation')</div>
                                        </div>
                                </div>
                                <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTen10">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen10" aria-expanded="false" aria-controls="collapseTen10">
                                                                <h4 class="card-title"><i class="fa fa-plus"></i>@lang('index.attr.confirmation')</h4>
                                                        </a>
                                                </h5>
                                        </div>
                                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10">
                                                <div class="card-body">@include('scheme.noticeAccident.confirmation')</div>
                                        </div>
                                </div>
                        </div> 
                </div> --}}
                <div class="tab-pane p-20 active" id="claimDetails" role="tabpanel">
                        @include('scheme.noticeAccident.PK.collapse')
                </div>
                <div class="tab-pane p-20" id="uploadDocuments" role="tabpanel">
                        @include('scheme.noticeAccident.PK.collapse_upload')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<script>
        //redirect to specific tab
        $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
</script>

<script>
        function placeacc(){
                
                        var accdwhen = $("#placeaccd").val();
                        //alert(accdwhen);
                        $('#descen').find('option').not(':first').remove();
                if (accdwhen){  

                $.ajax({ 
                url: '/reftable/'+accdwhen,
                type: 'GET',
                dataType: 'json',
                success: function(data){
        //            console.log(data);

                var len = 0;
                if(data != null){
                len = data.length;
                }   

                if(len > 0){
                $("#accwhen").empty();
                for(var i=0; i<len; i++){

                        var id = data[i].refcode;
                        var name = data[i].descen; 
                        
                        var option ="<option value='"+id+"'>"+name+"</option>";

                        $("#accwhen").append(option);
                }
                }   
                        
                        }

                        }); 
                }
        }
</script>

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
@endsection

