
<div id="accordion2" role="tablist" class="accordion" >
                  
    <!-- Initial Assessment appointmentdetails-->
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ob" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/index.attr.insured_details')</h4>
                </a>
            </h5>
        </div>
        <div id="ob" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.common.ob')
            </div>
        </div>
    </div>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/index.attr.wages_details')</h4>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.wages')
            </div>
        </div>
    </div>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socso" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/socso.title')</h4>
                </a>
            </h5>
        </div>
        <div id="socso" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.common.socso')
            </div>
        </div>
    </div>
 
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#invalidityInfo" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/index.attr.pension_details')</h4>
                </a>
            </h5>
        </div>
        <div id="invalidityInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.invalidityInfo')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#empHistory" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/index.attr.employer_history')</h4>
                </a>
            </h5>
        </div>
        <div id="empHistory" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.empHistory')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfo" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/index.attr.bank_information')</h4>
                </a>
            </h5>
        </div>
        <div id="bankInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.common.bank')
            </div>
        </div>
    </div>
  
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                @lang('scheme/index.attr.confirmation_ob')</h4>
                </a>
            </h5>
        </div>
        <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.confirmation')
            </div>
        </div>
    </div>
</div>