@extends('common.layouts.app')

@section('content')
<div class="col-md-12">
		<div class="card-body p-b-0">
			<h4 class="card-title">@lang('scheme/index.attr.accident_notice')</h4>
			
			<!-- Nav tabs -->
			<ul class="nav customtab" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.case_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.insured_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accidentDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.accident_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medicalCertificate_IO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.medical_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#socsoDealings_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.preferred_socso')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank_information" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.bank_information')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employerDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wagesDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.wages_con')</span></a> </li>
				{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similarWorker_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.similar_worker')</span></a> </li> --}}
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentPresentative_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.permanent_representative') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scoRecommend_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.sco_recommend') </span></a> </li>	
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.comment') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment_IO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.appointment') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.investigation') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#statement_IO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.statement') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigationInformation_IO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.investigation_information') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseFact_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.case_fact') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistentInformation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.inconsistent_information') </span></a> </li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane p-20 active" id="case_details" role="tabpanel">
					@include('scheme.noticeAccident.SCO.caseinfo')
				</div>
				<div class="tab-pane p-20" id="obform_SCO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.ob')
				</div>	
				<div class="tab-pane p-20" id="accidentDetails_SCO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.accidentDetails')
				</div>	
				<div class="tab-pane p-20" id="medicalCertificate_IO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.medicalCertificate_SCO') DAH
				</div>
				<div class="tab-pane p-20" id="socsoDealings_SCO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.socsoDealings_SCO') DAH
				</div>	
				<div class="tab-pane p-20" id="bank_information" role="tabpanel">
					@include('scheme.common.bank') DAH
				</div>	
				<div class="tab-pane  p-20" id="employerDetails_SCO" role="tabpanel">
					@include('scheme.common.employer') DAH
				</div>
				<div class="tab-pane  p-20" id="wagesDetails_SCO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.wages') DAH
				</div>
				{{-- <div class="tab-pane  p-20" id="similarWorker_SCO" role="tabpanel">
					@include('scheme.oticeAccident.SCO.similarWorker_SCO')
				</div> --}}
				<div class="tab-pane p-20" id="permanentPresentative_SCO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.permanentPresentative_SCO')
                </div>	
				<div class="tab-pane p-20" id="scoRecommend_SCO" role="tabpanel">
                    @include('scheme.noticeAccident.SCO.scoRecommend_SCO') DAH
                </div> 
                <div class="tab-pane p-20" id="comment_SCO" role="tabpanel">
                    @include('scheme.noticeAccident.SCO.comment_SCO')
                </div>    
				<div class="tab-pane p-20" id="appointment_IO" role="tabpanel">
					@include('scheme.noticeAccident.IO.appointment_IO')
				</div>
				<div class="tab-pane p-20" id="statement_IO" role="tabpanel">
					@include('scheme.noticeAccident.IO.statement')
				</div>
				<div class="tab-pane p-20" id="investigation_SCO" role="tabpanel">
					@include('scheme.noticeAccident.SCO.investigation_SCO') DAH
                </div>
                <div class="tab-pane p-20" id="investigationInformation_IO" role="tabpanel">
                    @include('scheme.noticeAccident.IO.investigationInformation_IO')
                </div>
                <div class="tab-pane p-20" id="caseFact_SCO" role="tabpanel">
                    @include('scheme.noticeAccident.SCO.caseFact_SCO') DAH
				</div>
				<div class="tab-pane p-20" id="inconsistentInformation_SCO" role="tabpanel">
                    @include('scheme.noticeAccident.SCO.inconsistentInformation_SCO') DAH
                </div>
                
			</div>
		</div>
</div>
<!-- Row -->
</div>
@endsection