@extends('common.layouts.app')

@section('content')
<div class="col-md-12">
		<div class="card-body p-b-0">
			<h4 class="card-title">@lang('index.attr.od_notice')</h4>
			
			<!-- Nav tabs -->
			<ul class="nav customtab" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.case_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.insured_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odempinfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.employer_history')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odinfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.od_information')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medical_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.medical_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#office" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.preferred_socso')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.wages_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similar" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.similar_worker')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jdk_dec" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.jdk_dec')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paymentOption" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.payment_option') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rate_calculate" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.rate_calculate') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#overpay_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.overpay_details') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefit" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.benefit_decision')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.comment') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank_info" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.bank_information') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scorecommend" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.sco_recommend') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanent" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.permanent_representative') </span></a> </li>
				{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#notice" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.od_details')</span></a> </li> --}}
				{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages_con" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.wages_con')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#overpay_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.overpay_details') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#claimanage" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.claimanage') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.investigation') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.appointment') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.comment') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obconfirm" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.obconfirm') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scorecommend" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSCO.attr.sco_recommend') </span></a> </li> --}}
				
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane p-20 active" id="case_details" role="tabpanel">
					@include('Scheme.noticeOd.caseDetails')
				</div>
				<div class="tab-pane p-20" id="obform" role="tabpanel">
					@include('Scheme.noticeOd.obForm1')
				</div>
				<div class="tab-pane  p-20" id="odempinfo" role="tabpanel">
					@include('Scheme.noticeOd.odEmphistory1')
				</div>
				<div class="tab-pane  p-20" id="odinfo" role="tabpanel">
					@include('Scheme.noticeOd.odInformation1')
				</div>
				<div class="tab-pane p-20" id="medical_details" role="tabpanel">
					@include('Scheme.noticeOd.medicalCertificate1')
				</div>
				{{-- <div class="tab-pane p-20" id="office" role="tabpanel">
					@include('Scheme.noticeOd.confirmation1')
				</div> --}}
				{{-- <div class="tab-pane p-20" id="employer" role="tabpanel">
					@include('Scheme.noticeOd.employerDetails1')
				</div>	 --}}	 
				{{-- <div class="tab-pane p-20" id="wages" role="tabpanel">
					@include('noticeOd.wagesDetails')
				</div>	 --}}
				<div class="tab-pane  p-20" id="similar" role="tabpanel">
					@include('Scheme.noticeOd.similarWorker')
				</div>
				<div class="tab-pane  p-20" id="jdk_dec" role="tabpanel">
					@include('Scheme.noticeOd.jdkDecision')
				</div>
				<div class="tab-pane p-20" id="paymentOption" role="tabpanel">
					@include('Scheme.noticeOd.paymentOption')
				</div>	
				<div class="tab-pane p-20" id="rate_calculate" role="tabpanel">
					@include('Scheme.noticeOd.rateCalculation')
				</div>
				<div class="tab-pane p-20" id="overpay_details" role="tabpanel">
					@include('Scheme.noticeOd.overPayment')
				</div>
				<div class="tab-pane p-20" id="benefit" role="tabpanel">
					@include('Scheme.noticeOd.benefit')
				</div>
				<div class="tab-pane p-20" id="comment" role="tabpanel">
					@include('Scheme.noticeOd.comment')
				</div>
				<div class="tab-pane p-20" id="scorecommend" role="tabpanel">
					@include('Scheme.noticeOd.scoRecommend')
				</div>	
				<div class="tab-pane p-20" id="permanent" role="tabpanel">
					@include('Scheme.noticeOd.permanentRepresentative')
				</div>



				{{-- <div class="tab-pane  p-20" id="employer" role="tabpanel">
					@include('noticeOd.employerDetails1')
				</div>
				<div class="tab-pane  p-20" id="wages_con" role="tabpanel">
					@include('noticeOd.wagesContribution')
				</div>
				<div class="tab-pane p-20" id="claimanage" role="tabpanel">
					@include('noticeOd.claimManage')
				</div>
				<div class="tab-pane p-20" id="investigation" role="tabpanel">
					@include('noticeOd.investigation')
				</div>
				<div class="tab-pane p-20" id="appointment" role="tabpanel">
					@include('noticeOd.appointment')
				</div>
				<div class="tab-pane p-20" id="obconfirm" role="tabpanel">
					@include('noticeOd.obConfirm')
				</div>
				<div class="tab-pane p-20" id="scorecommend" role="tabpanel">
					@include('noticeOd.ScoRecommend')
				</div>	 --}}	

			</div>
		</div>
</div>
<!-- Row -->
</div>

@endsection
