@extends('layouts.app')

@section('content')

<div class="card-body p-b-0">
<h4 class="card-title">@lang('index.attr.death_notice')</h4>
	
	<!-- Nav tabs -->
	<ul class="nav customtab" role="tablist">
		<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.insured_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.employer_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.wages_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similarWorker_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.similar_worker') </span></a> </li>	
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#death_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.death_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#socso_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso') </span></a> </li>	
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#certification_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li>	
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependant_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.dependant_profiles')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#guardian_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.guardian_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankInfo_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.bank_information')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#applicant_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.applicant_details')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#schemeQualifying_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.scheme_qualifying')</span></a> </li>
		{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#adjustment_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.adjustment')</span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitRate_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.benefit_rate') </span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#payment_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.payment') </span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#overpayment_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.overpayment') </span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefitMgt_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.benefit_mgt') </span></a> </li> --}}
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.investigation') </span></a> </li>	
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#caseFact_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.case_fact') </span></a> </li>
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#scoRecommendation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.sco_recommend') </span></a> </li>		
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistent_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.inconsistent') </span></a> </li>	
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploadDocument_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.upload_document') </span></a> </li>	
		<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.confirmation') </span></a> </li>	
	</ul>

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
							<td><span class="no_bold">@lang('index.attr.schemerefno')</span>&nbsp; <span class="no_bold">@lang('index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('index.attr.dateofdeath')</span></td>
						</tr>
						<tr>
							<td><label class="no_margin">A31FOT181234569-NTU004 - 31/01/2018</label></td>
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
			@include('Scheme.noticedeath.caseDetails_SCO')
		</div>
		<div class="tab-pane p-20" id="obform_SCO" role="tabpanel">
			@include('Scheme.noticedeath.obForm_SCO')
		</div>	
		<div class="tab-pane p-20" id="death_SCO" role="tabpanel">
			@include('Scheme.noticedeath.deathDetails_SCO')
		</div>	
		<div class="tab-pane p-20" id="bankInfo_SCO" role="tabpanel">
			@include('Scheme.noticedeath.bankInformation_SCO')
		</div>
		<div class="tab-pane p-20" id="employer_SCO" role="tabpanel">
			@include('Scheme.noticedeath.employerDetails_SCO')
		</div>
		<div class="tab-pane p-20" id="wages_SCO" role="tabpanel">
			@include('Scheme.noticedeath.wagesDetails_SCO')
		</div>
		<div class="tab-pane p-20" id="dependant_SCO" role="tabpanel">
			@include('Scheme.noticedeath.dependantProfiles_SCO')
		</div>	
		<div class="tab-pane p-20" id="guardian_SCO" role="tabpanel">
			@include('Scheme.noticedeath.guardianDetails_SCO')
		</div>
		<div class="tab-pane p-20" id="applicant_SCO" role="tabpanel">
			@include('Scheme.noticedeath.applicantDetails_SCO')
		</div>
		<div class="tab-pane p-20" id="schemeQualifying_SCO" role="tabpanel">
			@include('Scheme.noticedeath.schemeQualifying_SCO')
		</div>
		<div class="tab-pane p-20" id="adjustment_SCO" role="tabpanel">
			@include('Scheme.noticedeath.adjustment_SCO')
		</div>
		<div class="tab-pane p-20" id="benefitRate_SCO" role="tabpanel">
			@include('Scheme.noticedeath.benefitRate_SCO')
		</div>	
		<div class="tab-pane p-20" id="payment_SCO" role="tabpanel">
			@include('Scheme.noticedeath.payment_SCO')
		</div>
		<div class="tab-pane p-20" id="overpayment_SCO" role="tabpanel">
			@include('Scheme.noticedeath.overpayment_SCO')
		</div>
		<div class="tab-pane p-20" id="benefitMgt_SCO" role="tabpanel">
			@include('Scheme.noticedeath.benefitMgt_SCO')
		</div>
		<div class="tab-pane p-20" id="certification_SCO" role="tabpanel">
			@include('Scheme.noticedeath.certification_SCO')
		</div>
		<div class="tab-pane p-20" id="similarWorker_SCO" role="tabpanel">
				@include('Scheme.noticedeath.similarWorker_SCO')
		</div>
		<div class="tab-pane p-20" id="caseFact_SCO" role="tabpanel">
				@include('Scheme.noticedeath.caseFact_SCO')
		</div>
		<div class="tab-pane p-20" id="inconsistent_SCO" role="tabpanel">
				@include('Scheme.noticedeath.inconsistent_SCO')
		</div>
		<div class="tab-pane p-20" id="investigation_SCO" role="tabpanel">
				@include('Scheme.noticedeath.investigation_SCO')
		</div>
		<div class="tab-pane p-20" id="scoRecommendation_SCO" role="tabpanel">
				@include('Scheme.noticedeath.scoRecommend_SCO')
		</div>
		<div class="tab-pane p-20" id="socso_SCO" role="tabpanel">
				@include('Scheme.noticedeath.socsoDealings_SCO')
		</div>
		<div class="tab-pane p-20" id="confirmation_SCO" role="tabpanel">
				@include('Scheme.noticedeath.confirmation_SCO')
			</div>
			<div class="tab-pane p-20" id="uploadDocument_SCO" role="tabpanel">
				@include('Scheme.noticedeath.uploadDocument_SCO')
		</div>
	</div>
</div>
@endsection