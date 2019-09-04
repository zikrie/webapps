@extends('layouts.app')

@section('content')
<div class="col-md-12">
		<div class="card-body p-b-0">
			<h4 class="card-title">@lang('index.attr.od_notice')</h4>
			
			<!-- Nav tabs -->
			<ul class="nav customtab" role="tablist">
				<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#case_details" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> @lang('indexIO.attr.case_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.insured_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.employer_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odempinfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.employer_history')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odinfo" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.od_information')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.wages_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medical_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.medical_details')</span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#similar" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.similar_worker')</span></a> </li>
				{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rate_calculate" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">9. @lang('indexIO.attr.rate_calculate') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#overpay_details" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">10. @lang('indexIO.attr.overpay_details') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#benefit" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">11. @lang('indexSAO.attr.benefit_decision')</span></a> </li> --}}
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.investigation') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#report" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.investigation_report') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#odreport" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.od_report') </span></a> </li>
				{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#comment" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">15. @lang('indexIO.attr.comment') </span></a> </li> --}}
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.confirmation') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.bank_information')</span></a> </li>
				{{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanent" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">18. @lang('indexIO.attr.permanent_representative') </span></a> </li> --}}
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#socso" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.preferred_socso') </span></a> </li>
				<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#upload" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('indexIO.attr.upload_doc') </span></a> </li>
				
			</ul>
			<div class="row" id="rowindex">
				<div class="col-md-12">
					<div class="card text-left" id="cardindex">
						<div class="card-body" id="cardbody">
							<table>
								<thead>
								<tr>
									<th><label>@lang('index.attr.name')</label></th>
											
									<th>:</th>
									<th></th>
								</tr>
								<tr>
									<th><label>@lang('index.attr.idno')</label></th>
									<th>:</th>
									<th></th>
								</tr>
								<tr>
									<th><label>@lang('index.attr.schemerefno')</label></th>
									<th>:</th>
									<th></th>
								</tr>
								<tr>
									<th><label>@lang('index.attr.notice_date')</label></th>
									<th>:</th>
									<th></th>
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
					@include('Scheme.noticeOd.caseDetails')
				</div>
				<div class="tab-pane p-20" id="obform" role="tabpanel">
					@include('Scheme.noticeOd.obForm_io')
				</div>	
				<div class="tab-pane  p-20" id="employer" role="tabpanel">
					@include('Scheme.noticeOd.employerDetails')
				</div>
				<div class="tab-pane  p-20" id="odempinfo" role="tabpanel">
					@include('Scheme.noticeOd.odEmphistory')
				</div>
				<div class="tab-pane  p-20" id="odinfo" role="tabpanel">
					@include('Scheme.noticeOd.odInformation1')
				</div>
				<div class="tab-pane p-20" id="wages" role="tabpanel">
					@include('Scheme.noticeOd.wages1')
				</div> 
				<div class="tab-pane p-20" id="medical_details" role="tabpanel">
					@include('Scheme.noticeOd.medicalCertificate1')
				</div>
				<div class="tab-pane  p-20" id="similar" role="tabpanel">
					@include('Scheme.noticeOd.similarWorker')
				</div>
				{{-- <div class="tab-pane p-20" id="rate_calculate" role="tabpanel">
					@include('noticeOd.rateCalculation')
				</div>
				<div class="tab-pane p-20" id="overpay_details" role="tabpanel">
					@include('noticeOd.overPayment')
				</div>
				<div class="tab-pane p-20" id="benefit" role="tabpanel">
					@include('noticeOd.benefit')
				</div> --}}
				<div class="tab-pane p-20" id="investigation" role="tabpanel">
					@include('Scheme.noticeOd.investigation')
				</div>
				<div class="tab-pane p-20" id="report" role="tabpanel">
					@include('Scheme.noticeOd.report')
				</div>
				<div class="tab-pane p-20" id="odreport" role="tabpanel">
					@include('Scheme.noticeOd.odreport')
				</div>
				{{-- <div class="tab-pane p-20" id="comment" role="tabpanel">
					@include('noticeOd.comment')
				</div>	 --}}
				<div class="tab-pane p-20" id="confirmation" role="tabpanel">
					@include('Scheme.noticeOd.confirmation1')
				</div>
				<div class="tab-pane p-20" id="bank" role="tabpanel">
					@include('Scheme.noticeOd.bankInformation')
				</div>	
				{{--<div class="tab-pane  p-20" id="employer" role="tabpanel">
					@include('noticeOd.employerDetails')
				</div>
				<div class="tab-pane  p-20" id="wages_con" role="tabpanel">
					@include('noticeOd.wagesContribution')
				</div> --}}
				{{--<div class="tab-pane p-20" id="claimanage" role="tabpanel">
					@include('noticeOd.claimManage')
				</div>--}}
				{{-- <div class="tab-pane p-20" id="appointment" role="tabpanel">
					@include('noticeOd.appointment')
				</div> --}}
				{{-- <div class="tab-pane p-20" id="permanent" role="tabpanel">
					@include('noticeOd.permanentRepresentative')
				</div> --}}
				<div class="tab-pane p-20" id="socso" role="tabpanel">
					@include('Scheme.noticeOd.socso')
				</div>
				<div class="tab-pane p-20" id="upload" role="tabpanel">
					@include('Scheme.noticeOd.uploadDocument')
				</div>
			</div>
		</div>
</div>
<!-- Row -->
</div>

@endsection