<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div id="accordion2" role="tablist" class="accordion" >
            <!-- Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingRecommendation">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseRecommendation" aria-expanded="false" aria-controls="collapseRecommendation"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Recommendation</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseRecommendation" class="collapse" role="tabpanel" aria-labelledby="headingRecommendation">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.general.recommendation')
                  </div>
               </div>
            </div>
            <!-- Wages Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingWages">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWages" aria-expanded="false" aria-controls="collapseWages"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Wages Information</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseWages" class="collapse" role="tabpanel" aria-labelledby="headingWages">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.general.wages')
                  </div>
               </div>
            </div>
            <!-- HUS Info -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingHus">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseHus" aria-expanded="false" aria-controls="collapseHus"><h6 class="card-title"><i class="fa fa-plus"></i>
                     HUS Information</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseHus" class="collapse" role="tabpanel" aria-labelledby="headingHus">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SCO.sbk.hus_info')
                  </div>
               </div>
            </div>
            <!-- Dependant Details -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingDependant">
                   <h6 class="mb-0">                           
                       <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseDependant" aria-expanded="false" aria-controls="collapseDependant"><h6 class="card-title"><i class="fa fa-plus"></i>
                       @lang('form/scheme.notice_death.PK.dependant.title')</h6>
                       </a>
                   </h6>
               </div>
               <div id="collapseDependant" class="collapse" role="tabpanel" aria-labelledby="headingDependant">
                   <div class="card-body">
                       @include('scheme.noticeDeath.newClaim.SCO.general.dependant')
                   </div>
               </div>
           </div>
         </div>
      </div>
   </div>
</div>
      