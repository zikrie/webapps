@extends('common.layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card-body p-b-0">
            <h4 class="card-title">@lang('scheme/index.attr.od_notice')</h4>
            
            <ul class="nav customtab" role="tablist" >
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#claim" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.claim_info')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.upload_documents')</span></a> </li>
           </ul>

           <!-- Nav tabs -->
            <div class="tab-content tabcontent-border">
                <div class="tab-pane p-20 active" id="claim" role="tabpanel">
                    @include('Scheme.noticeOd.collapse')
                </div>

                <div class="tab-pane p-20" id="uploaddoc" role="tabpanel">
                    @include('Scheme.noticeOd.uploadDocument')
                </div>
            </div>
        </div>
    </div>


<!-- row -->
@endsection

@section('script')

<script>
    //redirect to specific tab
    $(document).ready(function () {
    $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });
</script>
@endsection

