@extends('layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card-body p-b-0">
            <h4 class="card-title">@lang('index.attr.death_notice')</h4>

                <!-- Nav tabs -->
            <ul class="nav customtab" role="tablist" id="tabMenu">
          
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#obform" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">1. @lang('index.attr.insured_details')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">2. @lang('index.attr.employer_details')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">3. @lang('index.attr.wages_details')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#death_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">4. @lang('index.attr.death_details')</span></a> </li>
                {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#prefered" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">@lang('index.attr.preferred_socso')</span></a> </li> --}}
                {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#certificate" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">@lang('index.attr.certificate') </span></a> </li> --}}
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#dependant_profiles" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">5. @lang('index.attr.dependant_profiles') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#guardian_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">6. @lang('index.attr.guardian_details') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#applicant_details" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">7. @lang('index.attr.applicant_details') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank_information" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">8. @lang('index.attr.bank_information') </span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">9. @lang('index.attr.confirmation')</span></a> </li>
              
            </ul>

        <div class="tab-content tabcontent-border">

            <!-- Insured details tab -->
            <div class="tab-pane p-20 active" id="obform" role="tabpanel">
                @include('noticedeath.obForm')
            </div>

            <!-- Employer details tab -->
            <div class="tab-pane p-20" id="employer" role="tabpanel">
                @include('noticedeath.employerDetails')
            </div>

             <!-- Wages tab -->
            <div class="tab-pane p-20" id="wages" role="tabpanel">
                @include('noticedeath.wagesDetails')
            </div>

             <!-- Death details tab -->
            <div class="tab-pane p-20" id="death_details" role="tabpanel">
                @include('noticedeath.deathDetails')
            </div>

            <!-- Dependant details tab -->
            <div class="tab-pane p-20" id="dependant_profiles" role="tabpanel">
                @include('noticedeath.dependantProfiles')
            </div>

            <!-- Guardian details tab -->
            <div class="tab-pane p-20" id="guardian_details" role="tabpanel">
                @include('noticedeath.guardianDetails')
            </div>

            <!-- Applicant details tab -->
            <div class="tab-pane p-20" id="applicant_details" role="tabpanel">
                @include('noticedeath.applicantDetails')
            </div>

            <!-- Bank information -->
            <div class="tab-pane p-20" id="bank_information" role="tabpanel">
                @include('noticedeath.bankInformation')
            </div>

            <!-- Confirmation tab -->
            <div class="tab-pane p-20" id="confirmation" role="tabpanel">
                @include('noticedeath.confirmation')
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

@endsection
