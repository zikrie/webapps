<div class="row">
   <div class="col-sm-12">
       <div class="card">
       <form class="form">
           <div id="accordion2" role="tablist" class="accordion" >
               <!-- Case Info -->
               <div class="card m-b-0">
                   <div class="card-header" role="tab" id="headingInspector">
                       <h6 class="mb-0">                           
                           <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInspector" aria-expanded="false" aria-controls="collapseInspector"><h6 class="card-title"><i class="fa fa-plus"></i>
                           Inspector Information</h6>
                           </a>
                       </h6>
                   </div>
                   <div id="collapseInspector" class="collapse" role="tabpanel" aria-labelledby="headingInspector">
                       <div class="card-body">
                           @include('scheme.noticeDeath.newClaim.SAO.inspector_info')
                       </div>
                   </div>
               </div>
                <!-- Scheme Qualifying -->
                <div class="card m-b-0">
                   <div class="card-header" role="tab" id="headingInterviewee">
                       <h6 class="mb-0">                           
                           <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseInterviewee" aria-expanded="false" aria-controls="collapseInterviewee"><h6 class="card-title"><i class="fa fa-plus"></i>
                           Interviewee Information</h6>
                           </a>
                       </h6>
                   </div>
                   <div id="collapseInterviewee" class="collapse" role="tabpanel" aria-labelledby="headingInterviewee">
                       <div class="card-body">
                           @include('scheme.noticeDeath.newClaim.SAO.interviewee_info')
                       </div>
                   </div>
               </div>
               <!-- Ob Form -->
               <div class="card m-b-0">
                   <div class="card-header" role="tab" id="headingWitness">
                       <h6 class="mb-0">                           
                           <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseWitness" aria-expanded="false" aria-controls="collapseWitness"><h6 class="card-title"><i class="fa fa-plus"></i>
                           Witness Information</h6>
                           </a>
                       </h6>
                   </div>
                   <div id="collapseWitness" class="collapse" role="tabpanel" aria-labelledby="headingWitness">
                       <div class="card-body">
                           @include('scheme.noticeDeath.newClaim.SAO.witness_info')
                       </div>
                   </div>
               </div>
           </div>
       </form>
       </div>
   </div>
</div>
                  