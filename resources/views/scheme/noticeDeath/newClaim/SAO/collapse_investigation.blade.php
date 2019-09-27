<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div id="accordion2" role="tablist" class="accordion" >
            <!-- Investigation Appointment -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingInvestigation">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInvestigation" aria-expanded="false" aria-controls="collapseInvestigation"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Investigation Assistant</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseInvestigation" class="collapse" role="tabpanel" aria-labelledby="headingInvestigation">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SAO.investigation')
                  </div>
               </div>
            </div>
            <!-- Recommendation -->
            <div class="card m-b-0">
               <div class="card-header" role="tab" id="headingReport">
                  <h6 class="mb-0">                           
                     <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseReport" aria-expanded="false" aria-controls="collapseReport"><h6 class="card-title"><i class="fa fa-plus"></i>
                     Investigation Report</h6>
                     </a>
                  </h6>
               </div>
               <div id="collapseReport" class="collapse" role="tabpanel" aria-labelledby="headingReport">
                  <div class="card-body">
                     @include('scheme.noticeDeath.newClaim.SAO.investigation_report')
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      