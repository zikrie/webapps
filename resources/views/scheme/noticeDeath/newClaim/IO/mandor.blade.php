<div class="modal fade bs-example-modal-lg" id="exampleModalMandor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel1">Doubtful Contract of Service - Mandor (M)</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           </div>
           <div class="modal-body">
            <form action="#" method="POST" id="reset">
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <div class="form-body">                   
                 <h6 class="card-title-sub">Case Information</h6>
                    <hr>
                    <div class='row'>
                       <div class="col-md-4">
                          <div class="form-group">
                                <label class="control-label">Case ID<span class="required">*</span></label>
                                <input type="text" class="form-control clearFields" name=""  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                                <label class="control-label">Survey Date<span class="required">*</span></label>
                                <input type="date" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                          </div>
                       </div>
                    </div>
                    <br/>
              
                    <h6 class="card-title-sub">Officer Information</h6>
                    <hr>
                    <div class="row p-t-20">
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Name</label><span class="required">*</span>
                                <input type="text" id="name" name="name" value="" class="form-control" required>    
                             </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                             <label class="control-label">SOCSO Office</label>
                             <input type="text" id="name" name="name" value="" class="form-control" required>    
                             </div>
                       </div>
                    </div>
                    <div class='row'>
                       <div class="col-md-4">
                          <div class="form-group">
                             <label class="control-label">Email</label>
                             <input type="text" id="name" name="name" value="" class="form-control" required>    
                             </div>
                       </div>
                       <div class="col-md-4">
                          <div class="form-group">
                             <label class="control-label">Mobile No.</label>
                             <input type="text" id="name" name="name" value="" class="form-control" required>    
                             </div>
                       </div>
                    </div>
              
                    <h6 class="card-title-sub">A. Butir-Butir Am Majikan</h6>
                    <hr>
              
                    <div class="row p-t-20">
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Butir-Butir Am Majikan</label><span class="required">*</span>
                                <div class="col-sm-6">
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="man_ques1" name="man_ques" class="custom-control-input">
                                      <label class="custom-control-label" for="man_ques1">Majikan Utama</label>
                                
                                      <input type="radio" id="man_ques2" name="man_ques" class="custom-control-input">
                                      <label class="custom-control-label" for="man_ques2">Majikan Langsung</label>
                                </div>
                             </div>
                             </div>
                       </div>
                    </div>
                    <div class="row p-t-20">
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Employer Code</label><span class="required">*</span>
                                <input type="text" id="name" name="name" value="" class="form-control" required>
                             </div>
                       </div>
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Employer Name</label><span class="required">*</span>
                                <input type="text" id="name" name="name" value="" class="form-control" required>
                             </div>
                       </div>
                    </div>
                    <div class="row p-t-20">
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Employer BRN</label><span class="required">*</span>
                                <input type="text" id="name" name="name" value="" class="form-control" required>
                             </div>
                       </div>
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Business Entity</label><span class="required">*</span>
                                <input type="text" id="name" name="name" value="" class="form-control" required>
                             </div>
                       </div>
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">Employer Status</label><span class="required">*</span>
                                <input type="text" id="name" name="name" value="" class="form-control" required>
                             </div>
                       </div>
                    </div>
                    
                    <div class="row">
                       <div class="col-md-12">
                             <div class="form-group">
                                <label>Industry Address</label>
                                <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" >
                             </div>
                       </div>
                       <div class="col-md-12">
                             <div class="form-group">
                                
                                <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" >
                             </div>
                       </div>
                       <div class="col-md-12">
                             <div class="form-group">
                                
                                <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" >
                             </div>
                       </div>
                    </div>
              
                    <div class='row'>
                       <div class="col-md-4">
                          <div class="form-group">
                             <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                             <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                          </div>
                       </div>
                       <div class="col-md-4">
                             <div class="form-group">
                                <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                                <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                             </div>
                       </div>
                       <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
                                <select name='state' id='state' class='form-control'>
                                   @foreach($state as $s)
                                   @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                   <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                   @else
                                   <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                   @endif
                                   @endforeach
                                </select>
                             </div>
                       </div>
                    </div>
                    <div class="row">
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>P.O. Box</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>Locked Bag No.</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>WDT</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                    </div>
                    <div class="row">
                          <div class="col-md-12">
                             <div class="form-group">
                                <label>Postal Address</label>
                                <input type="text" name="add1" value="@if(!empty($obprofile)){{ $obprofile->add1 }} @endif" class="form-control clearFields" >
                             </div>
                          </div>
                          <div class="col-md-12">
                             <div class="form-group">
                                
                                <input type="text" name="add2" value="@if(!empty($obprofile)){{ $obprofile->add2 }} @endif" class="form-control clearFields" >
                             </div>
                          </div>
                          <div class="col-md-12">
                             <div class="form-group">
                                
                                <input type="text" name="add3" value="@if(!empty($obprofile)){{ $obprofile->add3 }} @endif" class="form-control clearFields" >
                             </div>
                          </div>
                    </div>
                    <div class='row'>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>@lang('scheme/ob.attr.postcode')  <span class="required">*</span></label>
                                <input type="text" id="postcode" name="postcode" value="@if(!empty($obprofile)){{ $obprofile->postcode }} @endif" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>@lang('scheme/ob.attr.city')  <span class="required">*</span></label>
                                <input type="text" class="form-control clearFields" name="city"  value="@if(!empty($obprofile)){{ $obprofile->city }} @endif">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label class="control-label">@lang('scheme/ob.attr.state')  <span class="required">*</span></label>
                                <select name='state' id='state' class='form-control'>
                                      @foreach($state as $s)
                                      @if(!empty($obprofile) && $obprofile->statecode == $s->refcode)
                                      <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                      @else
                                      <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                      @endif
                                      @endforeach
                                </select>
                             </div>
                          </div>
                    </div>
                    <div class="row">
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>P.O. Box</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>Locked Bag No.</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>WDT</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                    </div>
                    <div class="row">
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>Telephone No.</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>Mobile No.</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label>Fax No.</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                    </div>
                    <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="" name="" value="" class="form-control clearFields">
                             </div>
                          </div>
                    </div>
              
                    <!-- ============================================= MAKLUMAT AM BERKAITAN PEKERJAAN ================================================ -->
                    
                    <h6 class="card-title-sub">B. Maklumat Am Berkaitan Pekerjaan</h6>
                    <hr>
                    <div class="row p-t-20">
                       <div class="col-md-4">
                          <div class="form-group">
                             <label class="control-label">Bilangan Pekerja</label>
                             <input type="text" id="name" name="name" value="" class="form-control" required>    
                             </div>
                       </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Jenis Kontrak/Perjanjian Perkhidmatan</label><span class="required">*</span>
                              <select name="man_jenis_pekerjaan" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="lisan">Lisan</option>
                                    <option value="bertulis">Bertulis</option>
                                    <option value="others">Lain-lain</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20" id="man_jenis_lain" style="display:none">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label">Lain-lain</label>
                              <textarea type="text" name="" rows="6" class="form-control man_jenis_lain"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Taraf Pekerjaan</label><span class="required">*</span>
                              <select name="man_taraf_pekerjaan" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="a">a. Tetap</option>
                                    <option value="b">b. Gantian</option>
                                    <option value="c">c. Sementara</option>
                                    <option value="d">d. Atas Panggilan</option>
                                    <option value="e">e. Satu Jangkamasa Sahaja</option>
                                    <option value="f">f. Lain-lain</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20" id="man_taraf_lain" style="display:none">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label">Lain-lain</label>
                              <textarea type="text" name="" rows="6" class="form-control man_taraf_lain"></textarea>
                           </div>
                        </div>
                     </div>
              
                    <!-- ======================================= UJIAN-UJIAN PENENTUAN KONTRAK PERKHIDMATAN ====================================== -->
              
                    <h6 class="card-title-sub">Ujian-Ujian Penentuan Kontrak Perkhidmatan</h6>
                    <hr>
                    <!-- =================================== QUESTION 1 ======================================= -->
                    <div class="row p-t-20">
                        <div class="col-md-10">
                                 <div class="form-group">
                              <label class="control-label">1. Adakah waktu kerja telah ditetapkan?</label>
                              <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="man_ques1a" name="man_ques1" onclick="man_question1a()" class="custom-control-input">
                                       <label class="custom-control-label" for="man_ques1a">Ya</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="man_ques1b" name="man_ques1" onclick="man_question1b()" class="custom-control-input">
                                       <label class="custom-control-label" for="man_ques1b">Tidak</label>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
   
                  <!-- ================================ QUESTION 1 - YA ==================================== -->
                  <div class="row p-t-20" id="man_ques1_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques1_tetap" name="man_ques1_yes" onclick="man_question1_tetap()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques1_tetap">a. Tetap</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques1_syif" name="man_ques1_yes" onclick="man_question1_syif()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques1_syif">b. Syif</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques1_others" name="man_ques1_yes" onclick="man_question1_others()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques1_others">c. Lain-Lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 1 (YA) - TETAP ==================================== -->
                  <div class="row p-t-20" id="man_ques1_tetaps" style="display: none">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Dari Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Hingga Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 1 (YA) - SYIF ==================================== -->
                  <div id="man_ques1_syifs" style="display: none">
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Dari Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Hingga Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Dari Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Hingga Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Dari Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Hingga Jam</label>
                              <input type="text" id="name" name="name" value="" class="form-control" required>    
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 1 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="man_ques1_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 1 - TIDAK ==================================== -->
                  <div class="row" id="man_ques1_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- =================================== QUESTION 2 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">2. Adakah waktu rehat telah ditetapkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques2a" name="man_ques2" onclick="man_question2a()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques2a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques2b" name="man_ques2" onclick="man_question2b()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques2b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 2 - YA ==================================== -->
                  <div class="row p-t-20" id="man_ques2_ya" style="display: none">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Dari Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="control-label">Hingga Jam</label>
                           <input type="text" id="name" name="name" value="" class="form-control" required>    
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 2 - TIDAK ==================================== -->
                  <div class="row" id="man_ques2_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 3 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div cla ss="form-group">
                           <label class="control-label">3. Adakah faedah-faedah lain diberikan kepada individu tersebut?</label>
                           <div class="col-sm-10">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques3a" name="man_ques3" onclick="man_question3a()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques3a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques3b" name="man_ques3" onclick="man_question3b()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques3b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 3 - YA ==================================== -->
                  <div class="row p-t-20" id="man_ques3_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Jika 'Ya' apakah faedah-faedah yang diberikan:</label>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="man_question3_e()" id="man_ques3_a">
                              <label class="custom-control-label" for="man_ques3_a">a. Cuti Sakit Bergaji</label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="man_question3_e()" id="man_ques3_b">
                              <label class="custom-control-label" for="man_ques3_b">b. Rawatan Perubatan Percuma</label>      
                           </div>     
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="man_question3_e()" id="man_ques3_c">
                              <label class="custom-control-label" for="man_ques3_c">c. Hari Pelepasan gaji</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="man_question3_e()" id="man_ques3_d">
                              <label class="custom-control-label" for="man_ques3_d">d. Cuti tahunan</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" onclick="man_question3_e()" id="man_ques3_e">
                              <label class="custom-control-label" for="man_ques3_e">e. Lain-lain</label>      
                           </div>                    
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 3 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="man_ques3_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 3 - TIDAK ==================================== -->
                  <div class="row" id="man_ques3_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
            
                  <!-- =================================== QUESTION 4 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">4. Adakah elaun-elaun lain diberikan kepada individu tersebut?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques4a" name="man_ques4" onclick="man_question4a()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques4a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques4b" name="man_ques4" onclick="man_question4b()"class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques4b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 4 - YA ==================================== -->
                  <div class="row p-t-20" id="man_ques4_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Jika 'Ya' apakah elaun-elaun tersebut:</label>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_a" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_a">a. Perjalanan</label>
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_b" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_b">b. Makan</label>      
                           </div>     
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_c" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_c">c. Pakaian</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_d" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_d">d. Kedatangan</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_e" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_e">e. Kenderaan</label>      
                           </div>   
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_f" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_f">f. Dobi</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_g" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_g">g. Telefon</label>      
                           </div>
                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="man_ques4_h" onclick="man_question4_h()">
                              <label class="custom-control-label" for="man_ques4_h">h. Lain-lain</label>      
                           </div>                 
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 4 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="man_ques4_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 4 - TIDAK ==================================== -->
                  <div class="row" id="man_ques4_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- =================================== QUESTION 5 ======================================= -->                        
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">5. Adakah catatan kehadiran direkodkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques5a" name="man_ques5" onclick="man_question5a()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques5a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques5b" name="man_ques5" onclick="man_question5b()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques5b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- ================================ QUESTION 5 - YA ==================================== -->
                  <div class="row p-t-20" id="man_ques5_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques5_a" name="man_ques5_yes" onclick="man_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques5_a">a. Kad Perakam Waktu</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques5_b" name="man_ques5_yes" onclick="man_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques5_b">b. Rekod Kedatangan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques5_c" name="man_ques5_yes" onclick="man_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques5_c">c. Atas Arahan Syarikat</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques5_d" name="man_ques5_yes" onclick="man_question5_d()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques5_d">d. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 5 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="man_ques5_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 5 - TIDAK ==================================== -->
                  <div class="row" id="man_ques5_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- =================================== QUESTION 6 ======================================= -->                                                
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">6. Bolehkah kontrak perkhidmatan ditamatkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques6a" name="man_ques6" onclick="man_question6a()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques6a">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques6b" name="man_ques6" onclick="man_question6b()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques6b">Tidak</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- =================================== QUESTION 6 - YA ======================================= -->                                                
                  <div class="row p-t-20" id="man_ques6_ya" style="display: none">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">Siapakah yang boleh menamatkan kontrak perkhidmatan tersebut:</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques6_a" name="man_ques6_yes" onclick="man_question6_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques6_a">a. Majikan</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques6_b" name="man_ques6_yes"  onclick="man_question6_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques6_b">b. Ketua</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques6_c" name="man_ques6_yes" onclick="man_question6_c()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques6_c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 6 (YA) - LAIN-LAIN ==================================== -->
                  <div class="row" id="man_ques6_ya_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 6 - TIDAK ==================================== -->
                  <div class="row" id="man_ques6_tidak" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
   
                  <!-- =================================== QUESTION 7 ======================================= -->
                  <div class="row p-t-20">
                     <div class="col-md-10">
                        <div class="form-group">
                           <label class="control-label">7. Bagaimanakah kontrak perkhidmatan di atas boleh ditamatkan?</label>
                           <div class="col-sm-6">
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques7a" name="man_ques7" onclick="man_question7c()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques7a">a. Bernotis</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques7b" name="man_ques7" onclick="man_question7c()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques7b">b. Tanpa notis</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input type="radio" id="man_ques7c" name="man_ques7" onclick="man_question7c()" class="custom-control-input">
                                 <label class="custom-control-label" for="man_ques7c">c. Lain-lain</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
   
                  <!-- ================================ QUESTION 7 - LAIN-LAIN ==================================== -->
                  <div class="row" id="man_ques7_lain" style="display: none">
                     <div class="col-md-7 m-b-10">
                        <label class="control-label">Lain-lain</label>
                        <textarea class="form-control form-control-lg" id="" placeholder="" style="height: 100px;"></textarea>
                     </div>
                  </div>
              
                  <div class="row p-t-20">
                     <div class="col-md-10">
                           <div class="form-group">
                           <label class="control-label">8. Upah atau gaji dibayar berdasarkan</label>
                           <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques8a" name="man_ques8" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques8a">Keluasan Blok Pembalakan</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques8b" name="man_ques8" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques8b">Bulanan</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques8c" name="man_ques8" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques8c">Nisbah pembahagian komisyen yang telah ditetapkan</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques8d" name="man_ques8" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques8d"> Timbangan Berat / Tonnage</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques8e" name="man_ques8" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques8e">Lain-lain</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
              
                     <div class="row p-t-20">
                        <div class="col-md-10">
                              <div class="form-group">
                              <label class="control-label">9. Adakah upah ditetapkan secara rundingan?</label>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques9a" name="man_ques9" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques9a">Ya</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques9b" name="man_ques9" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques9b">Tidak</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                     <div class="row p-t-20">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">10. Adakah individu itu diberikan tugasan dengan menetapkan tempoh masa tertentu?</label>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques10a" name="man_ques10" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques10a">Ya</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques10b" name="man_ques10" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques10b">Tidak</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
              
                     <div class="row p-t-20">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">11. Elaun-elaun dibayar secara</label>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques11a" name="man_ques11" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques11a">Tetap</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques11b" name="man_ques11" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques11b">Pendahuluan Gaji</label>
                                 </div>
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="man_ques11c" name="man_ques11" class="custom-control-input">
                                    <label class="custom-control-label" for="man_ques11c">Lain-lain</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
              
                     <div class="row p-t-20">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">12. Kenderaan dan kelengkapan lain adalah kepunyaan</label>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="man_ques12a" name="checkBox12">
                                    <label class="custom-control-label" for="man_ques12a">Syarikat</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="man_ques12b" name="checkBox12">
                                    <label class="custom-control-label" for="man_ques12b">Sendiri</label>      
                                 </div>     
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="man_ques12c" name="checkBox12">
                                    <label class="custom-control-label" for="man_ques12c">Lain-lain</label>      
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
              
                     <div class="row p-t-20">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">13. Penyelenggaraan peralatan dilakukan oleh</label>
                              <div class="col-sm-6">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="man_ques13a" name="checkBox13">
                                    <label class="custom-control-label" for="man_ques13a">Syarikat</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="man_ques13b" name="checkBox13">
                                    <label class="custom-control-label" for="man_ques13b">Sendiri</label>      
                                 </div>     
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="man_ques13c" name="checkBox13">
                                    <label class="custom-control-label" for="man_ques13c">Lain-lain</label>      
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">14. Adakah penyeliaan dilakukan keatas individu itu</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques14a" name="man_ques14" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques14a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques14b" name="man_ques14" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques14b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">15. Siapakah yang membuat penyeliaan tersebut</label>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="man_ques15a" name="checkBox13">
                                       <label class="custom-control-label" for="man_ques15a">Majikan Utama</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="man_ques15b" name="checkBox13">
                                       <label class="custom-control-label" for="man_ques15b">Majikan Langsung</label>      
                                    </div>     
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="man_ques15c" name="checkBox13">
                                       <label class="custom-control-label" for="man_ques15c">Supervisor/Pengurus</label>      
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="man_ques15d" name="checkBox13">
                                       <label class="custom-control-label" for="man_ques15d">Lain-lain</label>      
                                    </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">16. Ditempatkan di kem pembalakan mengikut blok yang ditetapkan oleh syarikat</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques16a" name="man_ques16" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques16a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques16b" name="man_ques16" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques16b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">17. Upah/Gaji kepada pekerja dibawah seliaan mandor dibayar oleh majikan kepada mandor</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques17a" name="man_ques17" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques17a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques17b" name="man_ques17" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques17b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">18.  Pembahagian gaji kepada pekerja dibuat oleh mandor</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques18a" name="man_ques18" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques18a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques18b" name="man_ques18" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques18b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">19.  Arahan daripada syarikat disampaikan oleh mador kepada pekerja:</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques19a" name="man_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques19a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques19b" name="man_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques19b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">20. Mandor disediakan tempat tinggal yang ditetapkan oleh majikan dikawasan perkhemahan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques20a" name="man_ques20" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques20a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques20b" name="man_ques20" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques20b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">21. Tidak boleh meninggalkan kem tanpa kebenaran kecuali kecemasan dengan memaklumkan kepada majikan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques21a" name="man_ques21" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques21a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques21b" name="man_ques21" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques21b">Tidak</label>
                                      </div>
                                 </div>
                             </div>
                         </div>
                    </div>
              
                    <div class="row p-t-20">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">22. Cuti ditetapkan secara berjadual oleh majikan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques22a" name="man_ques22" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques22a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques22b" name="man_ques22" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques22b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <div class="row p-t-20">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">23. Majikan menyediakan makanan secara berkumpulan tetapi kos makanan akan dipotong dari upah</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques23a" name="man_ques23" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques23a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques23b" name="man_ques23" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques23b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <div class="row p-t-20">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">24. Tidak dibenarkan bekerja dengan majikan lain dalam masa yang sama</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques24a" name="man_ques24" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques24a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques24b" name="man_ques24" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques24b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <div class="row p-t-20">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">25. Syarikat menetapkan syarat-syarat dan peraturan-peraturan terhadap mandor</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques25a" name="man_ques25" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques25a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques25b" name="man_ques25" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques25b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <div class="row p-t-20">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">26. Mandor tidak akan berkongsi keuntungan atau menanggung kerugian syarikat</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques26a" name="man_ques26" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques26a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="man_ques26b" name="man_ques26" class="custom-control-input">
                                         <label class="custom-control-label" for="man_ques26b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>

                    <label class="control-label">Jika hasil temuduga lebih banyak menjurus kepada jawapan "Ya" maka seseorang itu boleh dianggap sebagai seorang pekerja seperti yang diperuntukkan di bawah Seksyen 2(5), AKSP 1969.</label>
                    <hr>
                 <!-- ================================================== ULASAN ========================================================= -->
              
                 <h6 class="card-title-sub">Ulasan</h6>
                 <hr>
                 <div class="row p-t-20">
                    <div class="col-md-10">
                          <div class="form-group">
                             <label class="control-label">1. Pandangan/pengesyoran Pegawai Pemeriksa samada individu itu adalah seorang pekerja atau tidak</label>
                             <div class="col-sm-8">
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="man_recommend1" name="man_recommend" class="custom-control-input">
                                      <label class="custom-control-label" for="man_recommend1">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="man_recommend2" name="man_recommend" class="custom-control-input">
                                      <label class="custom-control-label" for="man_recommend2">Bukan Pekerja</label>
                                </div>
                             </div>
                          </div>
                    </div>
                 </div>
                 
                 <div class="row p-t-20">
                     <div class="col-md-8">
                         <div class="form-group">
                             <label class="control-label">Jika ada ulasan sila nyatakan</label>
                             <textarea type="text" name="" rows="6" class="form-control lain"></textarea>
                         </div>
                     </div>
                 </div>
              
                 <div class="row p-t-20">
                    <div class="col-md-10">
                          <div class="form-group">
                             <label class="control-label">2. PANDANGAN / KEPUTUSAN PENGARAH PERKESO NEGERI / PENGURUS PEJABAT PERKESO</label>
                             <label class="control-label">Saya memutuskan bahawa individu tersebut adalah:</label>
              
                             <div class="col-sm-6">
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="dir_result1" name="dir_result" class="custom-control-input">
                                      <label class="custom-control-label" for="dir_result1">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="dir_result2" name="dir_result" class="custom-control-input">
                                      <label class="custom-control-label" for="dir_result2">Bukan pekerja</label>
                                </div>
                             </div>
                          </div>
                    </div>
                 </div>
                 <div class="row p-t-20">
                     <div class="col-md-8">
                         <div class="form-group">
                             <label class="control-label">Jika ada ulasan sila nyatakan</label>
                             <textarea type="text" name="" rows="6" class="form-control lain"></textarea>
                         </div>
                     </div>
                 </div>
              </div>
           </form>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn waves-effect waves-light btn-success">SAVE</button>
           </div>
       </div>
   </div>
</div>

<!-- ================================ START JAVASCRIPT ====================================== -->

<script>   

      $(document).ready(function () {
         $('select[name=man_jenis_pekerjaan]').change(function () {
            if (this.value == 'others') {
               $("#man_jenis_lain").show();
            } else {
               $("#man_jenis_lain").hide();
               $(".man_jenis_lain").val('');
            }
         });
      });
      
      $(document).ready(function () {
         $('select[name=man_taraf_pekerjaan]').change(function () {
            if (this.value == 'f') {
               $("#man_taraf_lain").show();
            } else {
               $("#man_taraf_lain").hide();
               $(".lain").val('');
            }
         });
      });
      
      // ============================== QUESTION 1 ============================= 

function question1a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1a");
   // Get the output text
   var ques1_ya = document.getElementById("ques1_ya");
   var ques1_tetap = document.getElementById("ques1_tetap");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");
   var ques1_tidak = document.getElementById("ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_ya.style.display = "block";
      ques1_tidak.style.display = "none";
   }
}

function question1b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1b");
   // Get the output text
   var ques1_ya = document.getElementById("ques1_ya");
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");
   var ques1_tidak = document.getElementById("ques1_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tidak.style.display = "block";
      ques1_ya.style.display = "none"; 
      ques1_tetap.style.display = "none"; 
      ques1_syif.style.display = "none"; 
      ques1_lain.style.display = "none"; 
   }
}

function question1_tetap() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1_tetap");
   // Get the output text
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tetaps.style.display = "block";
      ques1_syif.style.display = "none"; 
      ques1_lain.style.display = "none"; 
   }
}

function question1_syif() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1_syif");
   // Get the output text
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tetap.style.display = "none";
      ques1_syif.style.display = "block"; 
      ques1_lain.style.display = "none"; 
   }
}

function question1_others() {

   // Get the checkbox
   var radioButton = document.getElementById("ques1_others");
   // Get the output text
   var ques1_tetap = document.getElementById("ques1_tetaps");
   var ques1_syif = document.getElementById("ques1_syifs");
   var ques1_lain = document.getElementById("ques1_lain");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques1_tetap.style.display = "none";
      ques1_syif.style.display = "none"; 
      ques1_lain.style.display = "block"; 
   }
}

// ============================== QUESTION 2 ============================== 

function question2a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques2a");
   // Get the output text
   var ques2_ya = document.getElementById("ques2_ya");
   var ques2_tidak = document.getElementById("ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques2_ya.style.display = "block";
      ques2_tidak.style.display = "none";
   }
}

function question2b() {

   //  alert('masuk');
   // Get the checkbox
   var radioButton = document.getElementById("ques2b");
   // Get the output text
   var ques2_ya = document.getElementById("ques2_ya");
   var ques2_tidak = document.getElementById("ques2_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques2_ya.style.display = "none";
      ques2_tidak.style.display = "block";
   }
}

// ============================ QUESTION 3 ================================= 

function question3a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques3a");
   // Get the output text
   var ques3_ya = document.getElementById("ques3_ya");
   var ques3_ya_lain = document.getElementById("ques3_ya_lain");
   var ques3_tidak = document.getElementById("ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques3_ya.style.display = "block";
      ques3_ya_lain.style.display = "none";
      ques3_tidak.style.display = "none";
   }
}

function question3b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques3b");
   // Get the output text
   var ques3_ya = document.getElementById("ques3_ya");
   var ques3_ya_lain = document.getElementById("ques3_ya_lain");
   var ques3_tidak = document.getElementById("ques3_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques3_ya.style.display = "none";
      ques3_ya_lain.style.display = "none";
      ques3_tidak.style.display = "block";
   }
}

function question3_e() {
   
   // Get the checkbox
   var checkBox = document.getElementById("ques3_e");
   // Get the output text
   var ques3_ya = document.getElementById("ques3_ya");
   var ques3_ya_lain = document.getElementById("ques3_ya_lain");
   var ques3_tidak = document.getElementById("ques3_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques3_ya_lain.style.display = "block";
   } else {
      ques3_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 4 ================================= 

function question4a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques4a");
   // Get the output text
   var ques4_ya = document.getElementById("ques4_ya");
   var ques4_ya_lain = document.getElementById("ques4_ya_lain");
   var ques4_tidak = document.getElementById("ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques4_ya.style.display = "block";
      ques4_ya_lain.style.display = "none";
      ques4_tidak.style.display = "none";
   }
}

function question4b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques4b");
   // Get the output text
   var ques4_ya = document.getElementById("ques4_ya");
   var ques4_ya_lain = document.getElementById("ques4_ya_lain");
   var ques4_tidak = document.getElementById("ques4_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques4_ya.style.display = "none";
      ques4_ya_lain.style.display = "none";
      ques4_tidak.style.display = "block";
   }
}

function question4_h() {
   
   // Get the checkbox
   var checkBox = document.getElementById("ques4_h");
   // Get the output text
   var ques4_ya = document.getElementById("ques4_ya");
   var ques4_ya_lain = document.getElementById("ques4_ya_lain");
   var ques4_tidak = document.getElementById("ques4_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques4_ya_lain.style.display = "block";
   } else {
      ques4_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 5 ================================= 

function question5a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques5a");
   // Get the output text
   var ques5_ya = document.getElementById("ques5_ya");
   var ques5_ya_lain = document.getElementById("ques5_ya_lain");
   var ques5_tidak = document.getElementById("ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques5_ya.style.display = "block";
      ques5_ya_lain.style.display = "none";
      ques5_tidak.style.display = "none";
   }
}

function question5b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques5b");
   // Get the output text
   var ques5_ya = document.getElementById("ques5_ya");
   var ques5_ya_lain = document.getElementById("ques5_ya_lain");
   var ques5_tidak = document.getElementById("ques5_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques5_ya.style.display = "none";
      ques5_ya_lain.style.display = "none";
      ques5_tidak.style.display = "block";
   }
}

function question5_d() {

   // Get the checkbox
   var checkBox = document.getElementById("ques5_d");
   // Get the output text
   var ques5_ya = document.getElementById("ques5_ya");
   var ques5_ya_lain = document.getElementById("ques5_ya_lain");
   var ques5_tidak = document.getElementById("ques5_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques5_ya_lain.style.display = "block";
   } else {
      ques5_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 6 ================================= 

function question6a() {

   // Get the checkbox
   var radioButton = document.getElementById("ques6a");
   // Get the output text
   var ques6_ya = document.getElementById("ques6_ya");
   var ques6_ya_lain = document.getElementById("ques6_ya_lain");
   var ques6_tidak = document.getElementById("ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques6_ya.style.display = "block";
      ques6_ya_lain.style.display = "none";
      ques6_tidak.style.display = "none";
   }
}

function question6b() {

   // Get the checkbox
   var radioButton = document.getElementById("ques6b");
   // Get the output text
   var ques6_ya = document.getElementById("ques6_ya");
   var ques6_ya_lain = document.getElementById("ques6_ya_lain");
   var ques6_tidak = document.getElementById("ques6_tidak");

   // If the checkbox is checked, display the output text
   if (radioButton.checked == true){
      ques6_ya.style.display = "none";
      ques6_ya_lain.style.display = "none";
      ques6_tidak.style.display = "block";
   }
}

function question6_c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques6_c");
   // Get the output text
   var ques6_ya = document.getElementById("ques6_ya");
   var ques6_ya_lain = document.getElementById("ques6_ya_lain");
   var ques6_tidak = document.getElementById("ques6_tidak");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques6_ya_lain.style.display = "block";
   } else {
      ques6_ya_lain.style.display = "none";
   }
}

// ============================ QUESTION 7 ================================= 

function question7c() {

   // Get the checkbox
   var checkBox = document.getElementById("ques7c");
   // Get the output text
   var ques7_lain = document.getElementById("ques7_lain");

   // If the checkbox is checked, display the output text
   if (checkBox.checked == true){
      ques7_lain.style.display = "block";
   } else {
      ques7_lain.style.display = "none";
   }
}
      
      // ============================ QUESTION 8 ================================= 
      
      function dri_question8d() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques8d");
         // Get the output text
         var dri_ques8_lain = document.getElementById("dri_ques8_lain");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques8_lain.style.display = "block";
         } else {
            dri_ques8_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 9 ================================= 
      
      function dri_question9a() {
      
         // Get the checkbox
         var radioButton = document.getElementById("dri_ques9a");
         // Get the output text
         var dri_ques9_ya = document.getElementById("dri_ques9_ya");
         var dri_ques9_ya_lain = document.getElementById("dri_ques9_ya_lain");
         var dri_ques9_tidak = document.getElementById("dri_ques9_tidak");
      
         // If the checkbox is checked, display the output text
         if (radioButton.checked == true){
            dri_ques9_ya.style.display = "block";
            dri_ques9_ya_lain.style.display = "none";
            dri_ques9_tidak.style.display = "none";
         }
      }
      
      function dri_question9b() {
      
         // Get the checkbox
         var radioButton = document.getElementById("dri_ques9b");
         // Get the output text
         var dri_ques9_ya = document.getElementById("dri_ques9_ya");
         var dri_ques9_ya_lain = document.getElementById("dri_ques9_ya_lain");
         var dri_ques9_tidak = document.getElementById("dri_ques9_tidak");
      
         // If the checkbox is checked, display the output text
         if (radioButton.checked == true){
            dri_ques9_ya.style.display = "none";
            dri_ques9_ya_lain.style.display = "none";
            dri_ques9_tidak.style.display = "block";
         }
      }
      
      function dri_question9_c() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques9_c");
         // Get the output text
         var dri_ques9_ya = document.getElementById("dri_ques9_ya");
         var dri_ques9_ya_lain = document.getElementById("dri_ques9_ya_lain");
         var dri_ques9_tidak = document.getElementById("dri_ques9_tidak");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques9_ya_lain.style.display = "block";
         } else {
            dri_ques9_ya_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 10 ================================= 
      
      function dri_question10a() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques10a");
         // Get the output text
         var dri_ques10_ya = document.getElementById("dri_ques10_ya");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques10_ya.style.display = "block";
         } else {
            dri_ques10_ya.style.display = "none";
         }
      }
      
      // ============================ QUESTION 11 ================================= 
      
      function dri_question11c() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques11c");
         // Get the output text
         var dri_ques11_lain = document.getElementById("dri_ques11_lain");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques11_lain.style.display = "block";
         } else {
            dri_ques11_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 12 ================================= 
      
      function dri_question12d() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques12d");
         // Get the output text
         var dri_ques12_lain = document.getElementById("dri_ques12_lain");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques12_lain.style.display = "block";
         } else {
            dri_ques12_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 13 ================================= 
      
      function dri_question13f() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques13f");
         // Get the output text
         var dri_ques13_lain = document.getElementById("dri_ques13_lain");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques13_lain.style.display = "block";
         } else {
            dri_ques13_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 14 ================================= 
      
      function dri_question14d() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques14d");
         // Get the output text
         var dri_ques14_lain = document.getElementById("dri_ques14_lain");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques14_lain.style.display = "block";
         } else {
            dri_ques14_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 17 ================================= 
      
      function dri_question17d() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques17d");
         // Get the output text
         var dri_ques17_lain = document.getElementById("dri_ques17_lain");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques17_lain.style.display = "block";
         } else {
            dri_ques17_lain.style.display = "none";
         }
      }
      
      // ============================ QUESTION 22 ================================= 
      
      function dri_question22a() {
      
         // Get the checkbox
         var radioButton = document.getElementById("dri_ques22a");
         // Get the output text
         var dri_ques22_ya = document.getElementById("dri_ques22_ya");
         var dri_ques22_ya_lain = document.getElementById("dri_ques22_ya_lain");
         var dri_ques22_tidak = document.getElementById("dri_ques22_tidak");
      
         // If the checkbox is checked, display the output text
         if (radioButton.checked == true){
            dri_ques22_ya.style.display = "block";
            dri_ques22_ya_lain.style.display = "none";
            dri_ques22_tidak.style.display = "none";
         }
      }
      
      function dri_question22b() {
      
         // Get the checkbox
         var radioButton = document.getElementById("dri_ques22b");
         // Get the output text
         var dri_ques22_ya = document.getElementById("dri_ques22_ya");
         var dri_ques22_ya_lain = document.getElementById("dri_ques22_ya_lain");
         var dri_ques22_tidak = document.getElementById("dri_ques22_tidak");
      
         // If the checkbox is checked, display the output text
         if (radioButton.checked == true){
            dri_ques22_ya.style.display = "none";
            dri_ques22_ya_lain.style.display = "none";
            dri_ques22_tidak.style.display = "block";
         }
      }
      
      function dri_question22_e() {
      
         // Get the checkbox
         var checkBox = document.getElementById("dri_ques22_e");
         // Get the output text
         var dri_ques22_ya = document.getElementById("dri_ques22_ya");
         var dri_ques22_ya_lain = document.getElementById("dri_ques22_ya_lain");
         var dri_ques22_tidak = document.getElementById("dri_ques22_tidak");
      
         // If the checkbox is checked, display the output text
         if (checkBox.checked == true){
            dri_ques22_ya_lain.style.display = "block";
         } else {
            dri_ques22_ya_lain.style.display = "none";
         }
      }
      </script>