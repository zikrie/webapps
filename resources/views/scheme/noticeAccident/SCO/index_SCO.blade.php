@extends('common.layouts.app')

@section('content')
{{-- <div class="col-md-12"><br> --}}
	<div class="card-body p-b-0">
		<h4 class="card-title">@lang('index.attr.accident_notice')</h4>
		<!-- Nav tabs -->
		<ul class="nav customtab" role="tablist">
			<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.case_details')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.insured_details')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employerDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.employer_details')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wagesDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.wages_con')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similarWorker_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.similar_worker')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accidentDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.accident_details')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medicalCertificate_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.medical_details')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseFact_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.case_fact')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistentInformation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.inconsistent_information') </span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scoRecommend_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.sco_recommend') </span></a> </li>	
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#certificate" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.certificate') </span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#socsoDealings_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.preferred_socso')</span></a> </li>
			{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentPresentative_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">10. @lang('index.attr.permanent_representative') </span></a> </li> --}}
			{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">11. @lang('index.attr.comment') </span></a> </li> --}}
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.investigation') </span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploadDocuments_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.upload_documents') </span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankInfo_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.bank_information')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.confirmation')</span></a> </li>
		</ul><br>
		<div class="row" id="rowindex">
			<div class="col-md-12">
				   <div class="card text-left" id="cardindex">
						  <div class="card-body" id="cardbody">
								 <table>
										<thead>
										<tr>
											   <td><span class="no_bold">@lang('index.attr.name')</span>&nbsp; <span class="no_bold">@lang('index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('index.attr.idno')</span></td>
										</tr>
										<tr>
											   <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label></td>
										</tr>
										<tr>
											   <td><label></label></td>
										</tr>
										
										<tr>
											   <td><span class="no_bold">@lang('index.attr.schemerefno')</span>&nbsp; <span class="no_bold">@lang('index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('index.attr.accident_date')</span></td>
										</tr>
										<tr>
											   <td><label class="no_margin">A31NTK0720190001 - 31/01/2018</label></td>
										</tr>
										</thead>
								 </table>
						  </div>
				   </div>
			</div>
	 	</div>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane p-20 active" id="case_details" role="tabpanel">
				@include('scheme.noticeAccident.SCO.caseDetails_SCO')
			</div>
			<div class="tab-pane p-20" id="obform_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.obForm_SCO')
			</div>	
			<div class="tab-pane  p-20" id="employerDetails_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.employerDetails_SCO')
			</div>	
			<div class="tab-pane  p-20" id="wagesDetails_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.wagesDetails_SCO')
			</div>
			<div class="tab-pane  p-20" id="similarWorker_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.similarWorker_SCO')
			</div>
			<div class="tab-pane p-20" id="accidentDetails_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.accidentDetails_SCO')
			</div>	
			<div class="tab-pane p-20" id="medicalCertificate_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.medicalCertificate_SCO')
			</div>
			<div class="tab-pane  p-20" id="caseFact_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.caseFact_SCO')
			</div>
			<div class="tab-pane p-20" id="inconsistentInformation_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.inconsistentInformation_SCO')
			</div>
			<div class="tab-pane p-20" id="scoRecommend_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.scoRecommend_SCO')
			</div>
			<div class="tab-pane p-20" id="certificate" role="tabpanel">
				@include('scheme.common.certificateEmployee')
			</div>
			<div class="tab-pane p-20" id="socsoDealings_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.socsoDealings_SCO')
			</div>
			<div class="tab-pane p-20" id="uploadDocuments_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.uploadDocument_SCO')
			</div>
			<div class="tab-pane  p-20" id="bankInfo_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.bankInformation_SCO')
			</div>
			<div class="tab-pane p-20" id="confirmation_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.confirmation_SCO')
			</div>
			{{-- <div class="tab-pane p-20" id="permanentPresentative_SCO" role="tabpanel">
				@include('scheme.noticeAccident.permanentPresentative_SCO')
			</div>	 --}}
			{{-- <div class="tab-pane p-20" id="comment_SCO" role="tabpanel">
				@include('scheme.noticeAccident.comment_SCO')
			</div> --}}
			<div class="tab-pane p-20" id="investigation_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.investigation_SCO')
			</div>
		</div>
	</div>
{{-- </div> --}}

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
@endsection