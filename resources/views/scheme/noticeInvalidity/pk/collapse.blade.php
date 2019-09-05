
<div id="accordion2" role="tablist" class="accordion" >
                  
   <!-- Ob Form -->
   <div class="card m-b-0">
    <div class="card-header" role="tab" id="headingOb">
        <h6 class="mb-0">                           
            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb" aria-expanded="false" aria-controls="collapseOb"><h6 class="card-title"><i class="fa fa-plus"></i>
            @lang('form/scheme.general.collapse.ob.title')</h6>
            </a>
        </h6>
    </div>
    <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
        <div class="card-body">
            @include('scheme.general.ob')
        </div>
    </div>
</div>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingWages">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.wages.title')</h4>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.wages')
            </div>
        </div>
    </div>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingSocso">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socso" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.socso.title')</h4>
                </a>
            </h5>
        </div>
        <div id="socso" class="collapse" role="tabpanel" aria-labelledby="headingSocso">
            <div class="card-body">
                @include('scheme.general.socso')
            </div>
        </div>
    </div>
 
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingPension">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#invalidityInfo" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.pension_details.title')</h4>
                </a>
            </h5>
        </div>
        <div id="invalidityInfo" class="collapse" role="tabpanel" aria-labelledby="headingPension">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.invalidityInfo')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingEmployerHist">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#empHistory" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.employer_history.title')</h4>
                </a>
            </h5>
        </div>
        <div id="empHistory" class="collapse" role="tabpanel" aria-labelledby="headingEmployerHist">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.empHistory')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingBank">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfo" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.bank.title')</h4>
                </a>
            </h5>
        </div>
        <div id="bankInfo" class="collapse" role="tabpanel" aria-labelledby="headingBank">
            <div class="card-body">
                @include('scheme.general.bank')
            </div>
        </div>
    </div>
  
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingConfirm">
            <h5 class="mb-0">                           
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation" aria-expanded="false" aria-controls="collapseOne1"><h4 class="card-title"><i class="fa fa-plus"></i>
                    @lang('form/scheme.general.collapse.confirmation.title')</h4>
                </a>
            </h5>
        </div>
        <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingConfirm">
            <div class="card-body">
                @include('scheme.noticeInvalidity.pk.confirmation')
            </div>
        </div>
    </div>
</div>