@extends('layouts.app')

@section('content')
<div class="col-md-12">
		<div class="card-body p-b-0">
			<h4 class="card-title">@lang('index.attr.accident_notice')</h4>
			
			<!-- Nav tabs -->
			<ul class="nav customtab" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#caseDetails_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#accidentDetails_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.details_accident')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medicalCertificate_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.medical_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#socsoDealings_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank_information" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseTransfer_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_transfer')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employerDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wagesDetails_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.wages_con')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similarWorker_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.similar_worker')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.investigation') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#statement_IO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.statement') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseFact_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_fact') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigationInformation_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.investigation_information') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistentInformation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.inconsistent_information') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.comment') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#approval_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.approval_SAO') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fhus_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.fhus_SAO') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rateCalculation_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.rate_cal') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#periodicalPaymentInfo_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.overpayment_info') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefit_management_decision_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.benefit_management_decision') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#FHUK_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.fhuk_SAO') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medicalBoard_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.medical_board') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentPresentative_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.permanent_representative') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#interim_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.interim') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paymentOption_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.payment_option') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#asisstFHUK_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.assist_fhuk') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paymentHistory_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.payment_history_fhus') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invalidityPension_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.invalidity_pension') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#balanceAggregateFHUKDaily_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.balance_aggregate_FHUK_daily') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitRateCalculate_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.benefit_rate_calculate') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paymentInformation_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.payment_information') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lumpSumPaymentInfo_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.lump_sum_payment_info') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lumpSumPeriodocal_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.lump_sum_periodocal') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#periodicalPaymentInfo_SAO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.periodical_payment_info') </span></a> </li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane p-20 active" id="caseDetails_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.caseDetails_SAO')
				</div>
				<div class="tab-pane p-20" id="obform_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.obForm_SCO')
				</div>	
				<div class="tab-pane p-20" id="accidentDetails_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.accidentDetails_SAO')
				</div>	
				<div class="tab-pane p-20" id="medicalCertificate_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.medicalCertificate_SAO')
				</div>
				<div class="tab-pane p-20" id="socsoDealings_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.socsoDealings_SCO')
				</div>	
				<div class="tab-pane p-20" id="caseTransfer_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.caseTransfer_SAO')
				</div>	
				<div class="tab-pane  p-20" id="employerDetails_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.employerDetails_SCO')
				</div>
				<div class="tab-pane  p-20" id="wagesDetails_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.wagesDetails_SCO')
				</div>
				<div class="tab-pane  p-20" id="similarWorker_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.similarWorker_SCO')
				</div>
				<div class="tab-pane p-20" id="investigation_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.investigation_SCO')
                </div>
                <div class="tab-pane p-20" id="caseFact_SCO" role="tabpanel">
                    @include('Scheme.noticeAccident.caseFact_SCO')
				</div>
                <div class="tab-pane p-20" id="investigationInformation_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.investigationInformation_SAO')
				</div>
				<div class="tab-pane p-20" id="inconsistentInformation_SCO" role="tabpanel">
					@include('Scheme.noticeAccident.inconsistentInformation_SCO')
				</div>
                <div class="tab-pane p-20" id="comment_SCO" role="tabpanel">
                    @include('Scheme.noticeAccident.comment_SCO')
                </div> 
				<div class="tab-pane p-20" id="approval_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.approval_SAO')
                </div>
				<div class="tab-pane p-20" id="fhus_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.fhus_SAO')
				</div>
				<div class="tab-pane p-20" id="rateCalculation_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.rateCalculation_SAO')
				</div>
				<div class="tab-pane p-20" id="FHUK_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.fhuk_SAO')
				</div>
				<div class="tab-pane p-20" id="medicalBoard_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.medicalBoard_SAO')
				</div>
				<div class="tab-pane p-20" id="permanentPresentative_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.permanentPresentative_SCO')
				</div>
				<div class="tab-pane p-20" id="interim_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.interim_SAO')
				</div>
				<div class="tab-pane p-20" id="paymentOption_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.paymentOption_SAO')
				</div>
				<div class="tab-pane p-20" id="paymentHistory_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.paymentHistory_SAO')
				</div>
				<div class="tab-pane p-20" id="invalidityPension_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.invalidityPension_SAO')
				</div>
				<div class="tab-pane p-20" id="lumpSumPeriodocal_SAO" role="tabpanel">
					@include('Scheme.noticeAccident.lumpSumPeriodocal_SAO')
				</div>
			</div>
		</div>
</div>
<!-- Row -->
</div>
@endsection