<div class="row">
    <div class="col-sm-12">
       <div class="card">
          <div id="accordion2" role="tablist" class="accordion" >
             <!-- Investigation Appointment -->
             <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingQuery">
                   <h6 class="mb-0">                           
                      <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseQuery" aria-expanded="false" aria-controls="collapseQuery"><h6 class="card-title"><i class="fa fa-plus"></i>
                      Query</h6>
                      </a>
                   </h6>
                </div>
                <div id="collapseQuery" class="collapse" role="tabpanel" aria-labelledby="headingQuery">
                   <div class="card-body">
                      @include('scheme.noticeDeath.newClaim.SCO.general.query')
                   </div>
                </div>
             </div>
             <!-- Appointment -->
             <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingMedical">
                   <h6 class="mb-0">                           
                      <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseMedical" aria-expanded="false" aria-controls="collapseMedical"><h6 class="card-title"><i class="fa fa-plus"></i>
                      Medical Opinion</h6>
                      </a>
                   </h6>
                </div>
                <div id="collapseMedical" class="collapse" role="tabpanel" aria-labelledby="headingMedical">
                   <div class="card-body">
                      @include('scheme.noticeDeath.newClaim.SCO.general.medical_opinion')
                   </div>
                </div>
             </div>
             <!-- Investigation Document -->
             <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingLegal">
                   <h6 class="mb-0">                           
                      <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseLegal" aria-expanded="false" aria-controls="collapseLegal"><h6 class="card-title"><i class="fa fa-plus"></i>
                      Legal Opinion</h6>
                      </a>
                   </h6>
                </div>
                <div id="collapseLegal" class="collapse" role="tabpanel" aria-labelledby="headingLegal">
                   <div class="card-body">
                      @include('scheme.noticeDeath.newClaim.SCO.general.legal_opinion')
                   </div>
                </div>
             </div>
             <!-- Investigation Document -->
             <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingPpn">
                   <h6 class="mb-0">                           
                      <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapsePpn" aria-expanded="false" aria-controls="collapsePpn"><h6 class="card-title"><i class="fa fa-plus"></i>
                      PPN Opinion</h6>
                      </a>
                   </h6>
                </div>
                <div id="collapsePpn" class="collapse" role="tabpanel" aria-labelledby="headingPpn">
                   <div class="card-body">
                      @include('scheme.noticeDeath.newClaim.SCO.general.ppn_opinion')
                   </div>
                </div>
             </div>
             <!-- Investigation Document -->
             <div class="card m-b-0">
                <div class="card-header" role="tab" id="headingAro">
                   <h6 class="mb-0">                           
                      <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseAro" aria-expanded="false" aria-controls="collapseAro"><h6 class="card-title"><i class="fa fa-plus"></i>
                      ARO Opinion</h6>
                      </a>
                   </h6>
                </div>
                <div id="collapseAro" class="collapse" role="tabpanel" aria-labelledby="headingAro">
                   <div class="card-body">
                      @include('scheme.noticeDeath.newClaim.SCO.general.aro_opinion')
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
       