<div class="row">
        <div class="col-sm-12">
                <div class="card">
                <form class="form">
                <div id="accordion2" role="tablist" class="accordion" >
                        <div class="card">
                                <div class="card-body">
                                        <!-- upload doc -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="headingOne1">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#uploadDoc" aria-expanded="true" aria-controls="collapseOne1">
                                                        <h5 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.supporting_document.title')</h5>
                                                        </a>
                                                </h5>
                                                </div>
                                                <div id="uploadDoc" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
                                                <div class="card-body">
                                                        @include('scheme.general.upload_doc1')
                                                </div>
                                                </div>
                                        </div>
                                        <!-- generated doc -->
                                        <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="headingOne2">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#generatedDoc" aria-expanded="true" aria-controls="collapseOne1">
                                                        <h5 class="card-title"><i class="fa fa-plus"></i>@lang('form/scheme.general.collapse.generate_document.title')</h5>
                                                        </a>
                                                </h5>
                                                </div>
                                                <div id="generatedDoc" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                                                <div class="card-body">
                                                        @include('scheme.noticeAccident.SCO.generated_doc')
                                                </div>
                                                </div>
                                        </div>
                                        {{-- <div class="card m-b-0">
                                                <div class="card-header" role="tab" id="headingOne2">
                                                <h5 class="mb-0">                           
                                                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#sendNotification" aria-expanded="true" aria-controls="collapseOne1">
                                                        <h5 class="card-title"><i class="fa fa-plus"></i> Notification</h5>
                                                        </a>
                                                </h5>
                                                </div>
                                                <div id="sendNotification" class="collapse" role="tabpanel" aria-labelledby="headingOne2">
                                                <div class="card-body">
                                                        @include('scheme.noticeAccident.IO.notification')
                                                </div>
                                                </div>
                                        </div> --}}
                                </div>
                        </div>
                </div><!-- Row -->
                </form>
                </div>
        </div>
</div>
        
<script>
        //redirect to specific tab
        $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
        
        $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
        });
        
</script>
            
            