<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">@lang('form/scheme.general.tab_title.supporting_document')</h5>
            <hr>
            <div id="accordion2" role="tablist" class="accordion" >
               <!-- Recommendation -->
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingUpload">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseUpload" aria-expanded="false" aria-controls="collapseUpload"><h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('form/scheme.general.collapse.supporting_document.title')</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseUpload" class="collapse" role="tabpanel" aria-labelledby="headingUpload">
                     <div class="card-body">
                        @include('scheme.general.upload_doc')
                     </div>
                  </div>
               </div>
               <div class="card m-b-0">
                  <div class="card-header" role="tab" id="headingGenerate">
                     <h6 class="mb-0">                           
                        <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseGenerate" aria-expanded="false" aria-controls="collapseGenerate"><h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('form/scheme.general.collapse.generate_document.title')</h6>
                        </a>
                     </h6>
                  </div>
                  <div id="collapseGenerate" class="collapse" role="tabpanel" aria-labelledby="headingGenerate">
                     <div class="card-body">
                        @include('scheme.noticeDeath.newClaim.SAO.generate_doc')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   