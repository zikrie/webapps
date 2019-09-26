@extends('layouts.app')

@section('content')
<div class="col-md-12">
		<div class="card-body p-b-0">
			<h4 class="card-title">@lang('index.attr.od_notice')</h4>
			
			<!-- Nav tabs -->
			<ul class="nav customtab" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.case_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.insured_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odempinfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.employer_history')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odinfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.od_information')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medical_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.medical_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanent" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.permanent_representative') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#interim" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.interim')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#office" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.preferred_socso')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#casetransfer" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.case_transfer')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.bank_information')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.wages_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similar" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.similar_worker')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rate_calculate" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.rate_calculate') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#overpay_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.overpay_details') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#temporarybenefit" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.temporary_disablement')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fhuspayment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.fhus_payment')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invaliditypension" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.invalidity_pension_payment')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#balanceaggregate" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.balance_aggregate')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefit" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.benefit_decision')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#assisstant" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.assisstant') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#appointment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.appointment') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.investigation_report') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odreport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.od_report') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#casefact" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.casefact') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistent" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.inconsistent_details') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#approval" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.approval') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jdkDecision" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.jdk_dec')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ms_opinion" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.ms_opinion')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paymentOption" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.payment_option') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexSAO.attr.comment') </span></a> </li>
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
				<div class="tab-pane p-20" id="interim" role="tabpanel">
					@include('Scheme.noticeOd.interim')
				</div>
				<div class="tab-pane p-20" id="permanent" role="tabpanel">
					@include('Scheme.noticeOd.permanentRepresentative')
				</div>
				<div class="tab-pane p-20" id="office" role="tabpanel">
					@include('Scheme.noticeOd.confirmation1')
				</div>
				<div class="tab-pane p-20" id="casetransfer" role="tabpanel">
					@include('Scheme.noticeOd.casetransfer')
				</div>
				{{-- <div class="tab-pane p-20" id="bank" role="tabpanel">
					@include('noticeOd.bankInformation1')
				</div>	 --}}
				<div class="tab-pane p-20" id="employer" role="tabpanel">
					@include('Scheme.noticeOd.employerDetails1')
				</div>		 
				{{-- <div class="tab-pane p-20" id="wages" role="tabpanel">
					@include('noticeOd.wagesDetails')
				</div>	 --}}
				<div class="tab-pane  p-20" id="similar" role="tabpanel">
					@include('Scheme.noticeOd.similarWorker')
				</div>
				<div class="tab-pane p-20" id="rate_calculate" role="tabpanel">
					@include('Scheme.noticeOd.rateCalculation')
				</div>
				<div class="tab-pane p-20" id="overpay_details" role="tabpanel">
					@include('Scheme.noticeOd.overPayment')
				</div>
				<div class="tab-pane p-20" id="temporarybenefit" role="tabpanel">
					@include('Scheme.noticeOd.temporaryDisablement')
				</div>
				<div class="tab-pane p-20" id="fhuspayment" role="tabpanel">
					@include('Scheme.noticeOd.fhusPayment')
				</div>
				<div class="tab-pane p-20" id="invaliditypension" role="tabpanel">
					@include('Scheme.noticeOd.invalidityPension')
				</div>
				{{-- <div class="tab-pane p-20" id="balanceaggregate" role="tabpanel">
					@include('noticeOd.balanceAggregate')
				</div> --}}
				<div class="tab-pane p-20" id="benefit" role="tabpanel">
					@include('Scheme.noticeOd.benefit')
				</div>
				<div class="tab-pane p-20" id="assisstant" role="tabpanel">
					@include('Scheme.noticeOd.investigationAssisstant')
				</div>
				<div class="tab-pane p-20" id="appointment" role="tabpanel">
					@include('Scheme.noticeOd.appointment')
				</div>
				<div class="tab-pane p-20" id="report" role="tabpanel">
					@include('Scheme.noticeOd.report')
				</div>
				<div class="tab-pane p-20" id="odreport" role="tabpanel">
					@include('Scheme.noticeOd.odreport')
				</div>
				<div class="tab-pane p-20" id="casefact" role="tabpanel">
					@include('Scheme.noticeOd.casefact')
				</div>
				<div class="tab-pane p-20" id="inconsistent" role="tabpanel">
					@include('Scheme.noticeOd.inconsistent')
				</div>
				<div class="tab-pane p-20" id="approval" role="tabpanel">
					@include('Scheme.noticeOd.saoApproval')
				</div>
				<div class="tab-pane p-20" id="jdkDecision" role="tabpanel">
					@include('Scheme.noticeOd.jdkDecisionSao')
				</div>
				<div class="tab-pane p-20" id="paymentOption" role="tabpanel">
					@include('Scheme.noticeOd.paymentOption')
				</div>
				<div class="tab-pane p-20" id="ms_opinion" role="tabpanel">
					@include('Scheme.noticeOd.msopinion')
				</div>
				<div class="tab-pane p-20" id="comment" role="tabpanel">
					@include('Scheme.noticeOd.comment')
				</div>
			</div>
		</div>
</div>
<!-- Row -->
</div>
@endsection