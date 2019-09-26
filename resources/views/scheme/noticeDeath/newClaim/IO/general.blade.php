<div class="modal fade bs-example-modal-lg" id="exampleModalGeneral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel1">Doubtful Contract of Service - General (G)</h4>
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
                                      <input type="radio" id="gen_ques1" name="gen_ques" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ques1">Majikan Utama</label>
                                
                                      <input type="radio" id="gen_ques2" name="gen_ques" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ques2">Majikan Langsung</label>
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
                              <select name="gen_jenis_pekerjaan" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="lisan">Lisan</option>
                                    <option value="bertulis">Bertulis</option>
                                    <option value="others">Lain-lain</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20" id="gen_jenis_lain" style="display:none">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label">Lain-lain</label>
                              <textarea type="text" name="" rows="6" class="form-control gen_jenis_lain"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="control-label">Taraf Pekerjaan</label><span class="required">*</span>
                              <select name="gen_taraf_pekerjaan" class="form-control">
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
                     <div class="row p-t-20" id="gen_taraf_lain" style="display:none">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="control-label">Lain-lain</label>
                              <textarea type="text" name="" rows="6" class="form-control gen_taraf_lain"></textarea>
                           </div>
                        </div>
                     </div>
              
                    <!-- ======================================= UJIAN-UJIAN PENENTUAN KONTRAK PERKHIDMATAN ====================================== -->
              
                    <h6 class="card-title-sub">C. Ujian-Ujian Penentuan Kontrak Perkhidmatan</h6>
                    <hr>
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">1. Adakah waktu kerja telah ditetapkan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques1a" name="gen_ques1" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques1a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques1b" name="gen_ques1" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques1b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">2. Adakah waktu rehat telah ditetapkan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques2a" name="gen_ques2" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques2a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques2b" name="gen_ques2" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques2b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">3. Adakah faedah-faedah lain diberikan kepada individu tersebut?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques3a" name="gen_ques3" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques3a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques3b" name="gen_ques3" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques3b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">4. Adakah elaun-elaun lain diberikan kepada individu tersebut?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques4a" name="gen_ques4" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques4a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques4b" name="gen_ques4" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques4b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">5. Adakah catatan kehadiran direkodkan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques5a" name="gen_ques5" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques5a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques5b" name="gen_ques5" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques5b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">6. Bolehkah kontrak perkhidmatan ditamatkan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques6a" name="gen_ques6" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques6a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques6b" name="gen_ques6" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques6b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">7. Bagaimanakah kontrak perkhidmatan diatas boleh ditamatkan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques7a" name="gen_ques7" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques7a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques7b" name="gen_ques7" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques7b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">8. Upah atau gaji dibayar berdasarkan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8a" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8a">Bulanan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8b" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8b">Nisbah pembahagian komisyen yang telah ditetapkan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8c" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8c">Mingguan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8d" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8d">Harian</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8e" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8e">Bayaran mengikut jam</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8f" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8f">Bayaran mengikut suatu tugas/kerja</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques8g" name="gen_ques8" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques8g">Lain-lain</label>
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
                                         <input type="radio" id="gen_ques9a" name="gen_ques9" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques9a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques9b" name="gen_ques9" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques9b">Tidak</label>
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
                                         <input type="radio" id="gen_ques10a" name="gen_ques10" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques10a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques10b" name="gen_ques10" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques10b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">11. Adakah tugasan yang ditetapkan itu berkaitan dengan perniagaan majikan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques11a" name="gen_ques11" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques11a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques11b" name="gen_ques11" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques11b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">12. Elaun-elaun dibayar secara</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques12a" name="gen_ques12" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques12a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques12b" name="gen_ques12" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques12b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">13. Dimanakah lokasi perkhidmatan/pekerjaan dijalankan</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13a" name="gen_ques13" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13a">Premis majikan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13b" name="gen_ques13" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13b">Premis individu</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13c" name="gen_ques13" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13c">Tapak projek</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13d" name="gen_ques13" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13d">Lokasi yang ditetapkan oleh majikan</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques13e" name="gen_ques13" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques13e">Lain-lain</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">14. Perkakasan atau peralatan yang digunakan dalam menjalankan pekerjaan adalah kepunyaan</label>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14a" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14a">Syarikat</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14b" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14b">Sendiri</label>      
                                    </div>     
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14c" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14c">Tidak berkaitan</label>      
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques14d" name="checkbox14">
                                       <label class="custom-control-label" for="gen_ques14d">Lain-lain</label>      
                                    </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">15. Penyelenggaraan perkakasan dan peralatan tersebut dilakukan oleh</label>
                                <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15a" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15a">Syarikat</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15b" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15b">Sendiri</label>      
                                    </div>     
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15c" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15c">Tidak berkaitan</label>      
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="gen_ques15d" name="checkbox15">
                                       <label class="custom-control-label" for="gen_ques15d">Lain-lain</label>      
                                    </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">16. Bolehkah individu itu diarahkan untuk membuat sesuatu kerja mengikut cara yang ditetapkann</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques16a" name="gen_ques16" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques16a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques16b" name="gen_ques16" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques16b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">17. Adakah individu itu tertakluk kepada penyeliaan Pegawai Atasan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques17a" name="gen_ques17" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques17a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques17b" name="gen_ques17" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques17b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">18. Adakah penyeliaan dilakukan keatas kerja-kerja yang dibuat oleh individu itu?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques18a" name="gen_ques18" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques18a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques18b" name="gen_ques18" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques18b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">19. Siapakah yang menyelia atau mengawal kerja-kerja yang dijalankan?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19a" name="gen_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19a">Pengurus</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19b" name="gen_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19b"> Penyelia</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19c" name="gen_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19c">Ketua Unit/ Bahagian/ Seksyen</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19d" name="gen_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19d">Mandor</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19e" name="gen_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19e">Kepala / Tekong</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques19f" name="gen_ques19" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques19f">Lain-lain</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                                 <div class="form-group">
                                <label class="control-label">20. Sekiranya individu itu gagal mematuhi apa-apa arahan yang diberikan adakah tindakan disiplin akan dikenakan terhadap pekerja tersebut?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques20a" name="gen_ques20" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques20a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques20b" name="gen_ques20" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques20b">Tidak</label>
                                      </div>
                                </div>
                             </div>
                          </div>
                    </div>
              
                    <div class="row p-t-20">
                         <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">21. Sekiranya pekerja tidak hadir, adakah kerja-kerja yang akan dilakukan akan diganti oleh pekerja yang lain?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques21a" name="gen_ques21" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques21a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques21b" name="gen_ques21" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques21b">Tidak</label>
                                      </div>
                                 </div>
                             </div>
                         </div>
                    </div>
              
                    <div class="row p-t-20">
                          <div class="col-md-10">
                             <div class="form-group">
                                <label class="control-label">22. Adakah dalam tempoh yang sama individu itu tidak dibenarkan untuk berkhidmat dengan mana-mana syarikat / pihak lain?</label>
                                <div class="col-sm-6">
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques22a" name="gen_ques22" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques22a">Ya</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="gen_ques22b" name="gen_ques22" class="custom-control-input">
                                         <label class="custom-control-label" for="gen_ques22b">Tidak</label>
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
                                      <input type="radio" id="gen_ulasan1a" name="gen_ques23" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ulasan1a">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="gen_ulasan1b" name="gen_ques23" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ulasan1b">Bukan Pekerja</label>
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
                                      <input type="radio" id="gen_ulasan2a" name="gen_ques24" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ulasan2a">Pekerja</label>
                                </div>
                                <div class="custom-control custom-radio">
                                      <input type="radio" id="gen_ulasan2b" name="gen_ques24" class="custom-control-input">
                                      <label class="custom-control-label" for="gen_ulasan2b">Bukan pekerja</label>
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