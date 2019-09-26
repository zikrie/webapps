@extends('common.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">@lang('scheme/index.attr.invalidity_notice')</h4>

            <!-- Nav tabs -->
            <ul class="nav customtab" role="tablist" id="tabMenu">
                <li class="nav-item"> <a class="nav-link active"  href="/home" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                            @lang('scheme/index.attr.caseDetails')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obform" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                            @lang('scheme/index.attr.insured_details')</span></a> </li>

                {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#insurancesalary" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                                    @lang('scheme/index.attr.insurance_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contrisalary" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                                    @lang('scheme/index.attr.detailsContriSalary')</span></a> </li>

                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinfo" role="tab"><span
                                        class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                                                @lang('scheme/index.attr.bank_information')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#creditperiod" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                                    @lang('scheme/index.attr.creditPeriod')   
                            </span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contribution56" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                                    @lang('scheme/index.attr.contribution_section')
                            
                        </span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#totalcontribution" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">
                            @lang('scheme/index.attr.total_contribution')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#aidwages" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">
                            @lang('scheme/index.attr.aid_wages')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#invaliditydetails" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down"> @lang('scheme/index.attr.invalidity_notice_details')</span></a> </li>

                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#emphistory" role="tab"><span
                                class="hidden-sm-up"><i class="ti-email"></i></span> <span
                                class="hidden-xs-down">@lang('scheme/index.attr.employer_history')</span></a> </li>


                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#medicalboarddec" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down">@lang('scheme/index.attr.medical_board')</span></a> </li>

                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#social_developing" role="tab"><span
                                class="hidden-sm-up"><i class="ti-email"></i></span> <span
                                class="hidden-xs-down">@lang('scheme/index.attr.social_developing')</span></a> </li>               

                {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permanentrepresentative"
                        role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down">14. @lang('scheme/index.attr.permanent_representative')</span></a> </li> --}}

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#supportingdoc" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down">@lang('scheme/index.attr.upload_documents')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#investigation" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down"> @lang('scheme/index.attr.investigation')</span></a> </li>

                 

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#obconfirm" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down"> @lang('scheme/index.attr.confirmation_ob')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#suggestion" role="tab"><span
                            class="hidden-sm-up"><i class="ti-email"></i></span> <span
                            class="hidden-xs-down">@lang('scheme/index.attr.suggestion')</span></a> </li> --}}

                


                {{-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#wages" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">2. @lang('scheme/index.attr.wages_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pensiondetails" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">3. @lang('scheme/index.attr.pension_details')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#empinfo" role="tab"><span class="hidden-sm-up"><i class="ti-pencil-alt"></i></span> <span class="hidden-xs-down">4. @lang('scheme/index.attr.employer_history')</span></a> </li>

                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bankinfo" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">5. @lang('scheme/index.attr.bank_information')</span></a> </li>
                
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" role="tab"><span class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">6. @lang('scheme/index.attr.upload_documents')</span></a> </li>

                <li class="nav-item"> <a class="nav-link"  id="navbar_confirmation" data-toggle="tab" href="#confirmation" role="tab"><span class="hidden-sm-up"><i class="ti-check-box"></i></span> <span class="hidden-xs-down">7. @lang('scheme/index.attr.confirmation') </span></a> </li> --}}



            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="casedetails" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_caseDetails')
                </div>

                 <div class="tab-pane p-20 " id="obform" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_ob_form')
                </div> 

                <div class="tab-pane p-20 " id="insurancesalary" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_wagesInfo')
                </div>

                <div class="tab-pane p-20 " id="contrisalary" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_contriInfo')
                </div>

                <div class="tab-pane p-20 " id="bankinfo" role="tabpanel">
                        @include('scheme.noticeInvalidity.sco.sco_bankInformation')
                    </div>

                <div class="tab-pane p-20 " id="creditperiod" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_creditperiod')
                </div>
                <div class="tab-pane p-20" id="contribution56" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_contribution56')
                </div>

                <div class="tab-pane p-20" id="totalcontribution" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_totalContribution')
                </div>

                <div class="tab-pane p-20" id="aidwages" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_aidWages')
                </div>

                <div class="tab-pane p-20" id="invaliditydetails" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_invalidNoticeDetails')
                </div>

                <div class="tab-pane p-20" id="emphistory" role="tabpanel">
                        @include('scheme.noticeInvalidity.sco.sco_empHistory')
                    </div>

                <div class="tab-pane p-20" id="medicalboarddec" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_medicalBoardDec')
                </div>

                <div class="tab-pane p-20" id="social_developing" role="tabpanel">
                        @include('scheme.noticeInvalidity.sco.sco_preferedsoco')
                    </div>
                
                <div class="tab-pane p-20" id="permanentrepresentative" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_permanentRepresentative')
                </div>

                {{-- <div class="tab-pane p-20" id="supportingdoc" role="tabpanel">
                    @include('SCO.noticeInvalidity.sco.supportDoc')
                </div> --}}

                <div class="tab-pane p-20" id="investigation" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_investigationDetails')
                </div>

                <div class="tab-pane p-20" id="comment" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_commentSco')
                </div>

                 <div class="tab-pane p-20" id="obconfirm" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_confirmation')
                </div> 

                <div class="tab-pane p-20" id="suggestion" role="tabpanel">
                    @include('scheme.noticeInvalidity.sco.sco_recommend')
                </div>


            </div>
        </div>
    </div>
</div>

<!-- row -->
<script>
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });

</script>

<script>
    function placeacc() {

        var accdwhen = $("#placeaccd").val();
        //alert(accdwhen);
        $('#descen').find('option').not(':first').remove();
        if (accdwhen) {

            $.ajax({
                url: '/reftable/' + accdwhen,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    //            console.log(data);

                    var len = 0;
                    if (data != null) {
                        len = data.length;
                    }

                    if (len > 0) {
                        $("#accwhen").empty();
                        for (var i = 0; i < len; i++) {

                            var id = data[i].refcode;
                            var name = data[i].descen;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#accwhen").append(option);
                        }
                    }

                }

            });
        }
    }

</script>

@endsection
