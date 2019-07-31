<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="confirmationilat" method="POST">    
                    <h5 class="card-title">@lang('socso.title')</h5>
                <hr>
                <input type='hidden' name='caserefno' id='caserefno' value='{{$caserefno}}'>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> @lang('socso.attr.state')</label>
                            <select name="state1" id="state1" class="form-control" onchange="statechange()" required>
                                @foreach($state as $S)
                                @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                    <option value="{{$S->refcode}}" selected>{{$S->descen}}</option>
                                @else
                                     <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                     <div class="form-group">
                        <label>@lang('socso.attr.city')</label>
                        <select name="brname" id="brname" class="form-control" onchange='fieldchange()' required>
                            <option value=""></option>
                            @foreach($branch as $B)
                            @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                            <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                            @else
                               <option value="{{$B->brcode}}">{{$B->brname}}</option>
                            @endif
                            @endforeach
                        </select>
                              </div>
                          </div>
                          {{ csrf_field() }}
                          <!--/span-->
                      </div>
                      <!--/row-->
            {{-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>@lang('socso.attr.city_origin')</label>
                    <select class="form-control custom-select">
                        {{-- <option>@lang('confirmation.choose5')</option> --}}
                        {{-- <option>Kuala Lumpur</option>
                        <option>Petaling Jaya</option>
                        <option>Rawang</option>
                        <option>Klang</option>
                        <option>Kajang</option>
                        <option>Tanjung Karang</option>
                        <option>Ipoh</option>
                        <option>Taiping</option>
                        <option>Kuala Kangsar</option>
                        <option>Tapah</option>
                        <option>Teluk Intan</option>
                        <option>Manjung</option>
                        <option>Seberang Jaya</option>
                        <option>George Town</option>
                        <option>Alor Setar</option>
                        <option>Langkawi</option>
                        <option>Sungai Petani</option>
                        <option>Kulim</option>
                        <option>Kangar</option>
                        <option>Seremban</option>
                        <option>Kuala Pilah</option>
                        <option>Ayer Keroh</option>
                        <option>Johor Bahru</option>
                        <option>Muar</option>
                        <option>Batu Pahat</option>
                        <option>Kluang</option>
                        <option>Segamat</option>
                        <option>Kuantan</option>
                        <option>Temerloh</option>
                        <option>Bentong</option>
                        <option>Kuala Terengganu</option>
                        <option>Kemaman</option>
                        <option>Dungun</option>
                        <option>Kota Bharu</option>
                        <option>Kuala Krai</option>
                        <option>Labuan</option>
                        <option>Kota Kinabalu</option>
                        <option>Tawau</option>
                        <option>Lahad Datu</option>
                        <option>Keningau</option>
                        <option>Sandakan</option>
                        <option>Kota Marudu</option>
                        <option>Beaufort</option>
                        <option>Kuching</option>
                        <option>Miri</option>
                        <option>Sri Aman</option>
                        <option>Bintulu</option>
                        <option>Sibu</option>
                        <option>Kapit</option>
                        <option>Sarikei</option>
                        <option>Mukah</option>
                        <option>Limbang</option>
                        <option>Serian</option>
                    </select>
                    <small class="form-control-feedback"> If there is a change of office </small> </div>
                </div> --}}
                <!--/span-->
              {{--   <div class="col-md-6">
                   <div class="form-group">
                    <label>@lang('socso.attr.state_origin')</label>
                    <select class="form-control custom-select">
                       <option>@lang('confirmation.choose6')</option> --}}
                        {{-- <option>Wilayah Persekutuan Kuala Lumpur</option>
                        <option>Selangor</option>
                        <option>Perak</option>
                        <option>Pulau Pinang</option>
                        <option>Kedah</option>
                        <option>Perlis</option>
                        <option>Negeri Sembilan</option>
                        <option>Melaka</option>
                        <option>Johor</option>
                        <option>Pahang</option>
                        <option>Terengganu</option>
                        <option>Kelantan</option>
                        <option>Wilayah Persekutuan Labuan</option>
                        <option>Sabah</option>
                        <option>Sarawak</option>
                    </select>
                    <small class="form-control-feedback"> If there is a change of office </small> </div>
                </div>
            </div> --}}
                    
                    <h5 class="card-title">Confirmation Of Insured Person</h5>
                    <hr>

                    
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Section J Received</label>
                                    <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                        @if (!empty($confirmation) && $confirmation->jrecv == 'Y')
                                        <option value="Y" selected>Complete</option>
                                        <option value="N">Not Complete</option>
                                        @elseif (!empty($confirmation) && $confirmation->jrecv == 'N')
                                        <option value="Y">Complete</option>
                                        <option value="N" selected>Not Complete</option>
                                        @else
                                        <option value="Y">Complete</option>
                                        <option value="N">Not Complete</option>
                                        @endif
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Complete Section J Received Date</label>
                                    @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                                    <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()" value="{{substr($confirmation->jrecvdate,0,4)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}" class="form-control" required>
                                    @else
                                    <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()" value="" class="form-control" required>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Notice Date </label>
                                    <input type="date" name="notice_date" id="notice_date" class="form-control" value="{{date('Y-m-d')}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Acceptance stamp date</label>
                                    @if(!empty($confirmation) && $confirmation->stampdate != '')
                                    <input type="date" id="stampdate" name="stampdate" onchange="fieldchange()" value="{{substr($confirmation->stampdate,0,4)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,6,2)}}" class="form-control" required>
                                    @else
                                    <input type="date" id="stampdate" name="stampdate" onchange="fieldchange()" value="" class="form-control" required>
                                    @endif 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Remarks</label>
                                    @if(!empty($confirmation) && $confirmation->remarks != '') 
                                    <textarea type="text" id="remarks" name="remarks" onchange="fieldchange()" value="" class="form-control">{{$confirmation->remarks}}</textarea>
                                     @else 
                                    <textarea type="text" id="remarks" name="remarks" onchange="fieldchange()" value="" class="form-control"></textarea> 
                                     @endif 
                                    
                                </div>
                            </div>
                        </div>
                        <!--h5 class="card-title">Dependants Profile</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. OT Name </label>
                                    <input type="text" name="ot_name" id="ot_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Identification type
                                    </label>
                                    <input type="text" name="identification_type" id="identification_type"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Identification Number</label>
                                    <input type="text" name="identification_number" id="identification_number"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Relationship with Insured Person
                                    </label>
                                    <input type="text" name="relationship_insured_person"
                                        id="relationship_insured_person" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. Date Of Birth</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Married Date
                                    </label>
                                    <input type="text" name="married_date" id="married_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">7. Date Of Birth</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">8. Married Date
                                    </label>
                                    <input type="text" name="married_date" id="married_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">9. Registered Married</label>
                                    <input type="date" name="registered_married" id="registered_married"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">10. In Edah?
                                    </label>
                                    <input type="text" name="in_edah" id="in_edah" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">11. Disability?</label>
                                    <input type="text" name="disabilitiy" id="disabilitiy" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">12. Passport Expired Date
                                    </label>
                                    <input type="date" name="passport_expired_date" id="passport_expired_date"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">13. Eligibility Start Date</label>
                                    <input type="date" name="eligbility_start_date" id="eligbility_start_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">14. Eligbility End Date</label>
                                    <input type="date" name="eligbility_end_date" id="eligbility_end_date"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">15. OT Status</label>
                                    <input type="text" name="ot_status" id="ot_status" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">16. Demised Date</label>
                                    <input type="date" name="demised_date" id="demised_date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">17. Date of Married with OB</label>
                                    <input type="date" name="date_of_married_ob" id="date_of_married_ob"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label">18. Disability before or after death
                                    day for the Insured Person</label>
                                <select class="form-control custom-select">
                                    <option selected disabled hidden>--Choose your answer--
                                    </option>
                                    <option value="Before">Before</option>
                                    <option value="After">After
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">19. Postal Address
                                day for the Insured Person</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                placeholder="Message"></textarea>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">20. City</label>
                                    <input type="text" name="city" id="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">21. State</label>
                                    <input type="text" name="state" id="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">22. Postcode</label>
                                    <input type="number" name="post_code" id="post_code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">23. PO Box</label>
                                    <input type="text" name="po_box" id="po_box" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">24. Locked Bag</label>
                                    <input type="text" name="locked_bag" id="locked_bag" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">25. WDT</label>
                                    <input type="text" name="wdt" id="wdt" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">26. Telephone No</label>
                                    <input type="number" name="tel_no" id="tel_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">27.Mobile No</label>
                                    <input type="text" name="mobile_no" id="mobile_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">28. Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">29. OT has Guardian?</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your answer--
                                        </option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <h5 class="card-title">Guardian Details</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. OT Name</label>
                                    <input type="text" name="ot_name" id="ot_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Guardian Name</label>
                                    <input type="text" name="guardian_name" id="guardian_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Identification Type</label>
                                    <input type="text" name="identification_type" id="identification_type"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Identification Number</label>
                                    <input type="text" name="identification_number" id="identification_number"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. Passport Expired Date</label>
                                    <input type="date" name="passport_expired_date" id="passport_expired_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Eligibility Start Date</label>
                                    <input type="date" name="eligibility_start_date" id="eligbility_start_date"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">7. Eligibility End Date</label>
                                    <input type="date" name="passport_end_date" id="eligbility_end_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">8. Postal Address </label>
                                    <textarea class="form-control" id="postal_address" rows="3"
                                        placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">9. City</label>
                                    <input type="text" name="city" id="city" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">10. State</label>
                                    <input type="text" name="state" id="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">11. Postcode</label>
                                    <input type="number" name="post_code" id="post_code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">12. Demised Date</label>
                                    <input type="date" name="demised_date" id="demised_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">13. Supporting Document</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Dependant Study Details</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Study Start Date</label>
                                    <input type="date" name="study_start_date" id="study_start_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Expected Study End Date</label>
                                    <input type="date" name="expected_study_end_date" id="expected_study_end_date"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Status</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your status--
                                        </option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Education Level</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your Education
                                            Level--
                                        </option>
                                        <option value="Certificate">Certificate</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Master">Master</option>
                                        <option value="PHD">PHD</option>
                                        <option value="Others">Others
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. Please Specify</label>
                                    <input type="text" name="please_specify" id="please_specify" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Course Name</label>
                                    <input type="text" name="course_name" id="course_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">7. Institute/University
                                        Name</label>
                                    <input type="text" name="institute_university_name" id="institute_university_name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">8. Supporting Document</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Maklumat Bank</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Recipient Have Bank
                                        Account?</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="recipient_have_bank_account1"
                                            name="recipient_have_bank_account" class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="recipient_have_bank_account1">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="recipient_have_bank_account2"
                                            name="recipient_have_bank_account" class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="recipient_have_bank_account2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Bank Location</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bank_location1" name="bank_location"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="bank_location1">Local Bank
                                            Account</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="bank_location2" name="bank_location"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="bank_location2">Overseas Bank</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Reason No Bank Account</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your reason--
                                        </option>
                                        <option value="No IC">No IC</option>
                                        <option value="Permanent Representative Overseas">Permanent
                                            Representative Overseas</option>
                                        <option value="Bankrup">Bankrup</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. BAI Status</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your BAI Status--
                                        </option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Suspense">Suspense</option>
                                        <option value="Closed">Closed</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. Sub Status Description
                                    </label>
                                    <input type="text" name="sub_status_description" id="sub_status_description"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Payment Method</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your Payment
                                            Method--
                                        </option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="EFT">EFT</option>
                                        <option value="No Payment">No Payment</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Local Bank</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Bank Name</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your Bank Name--
                                        </option>
                                        <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                        <option value="Maybank (MBB)">Maybank (MBB)</option>
                                        <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                                            Nasional (BSN)</option>
                                        <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                                        </option>
                                        <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                                        </option>
                                        <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                                            (PBB)</option>
                                        <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                                            Malaysia Berhad (BIMB)</option>
                                        <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                                            Bank Berhad (HLBB)</option>
                                        <option value="Ambank Berhad (AMBank)">Ambank Berhad
                                            (AMBank)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Bank Branch</label>
                                    <input type="text" name="bank_branch" id="bank_branch" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Bank Account No</label>
                                    <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Bank Address</label>
                                    <input type="text" name="bank_address" id="bank_address" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">5. Type Of Account</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="type_of_account" id="type_of_account1" value="Saving"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="type_of_account1">Saving</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="type_of_account" id="type_of_account2" value="Current"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="type_of_account2">Current</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Overseas Bank</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Bank Name</label>
                                    <select class="form-control custom-select">
                                        <option selected disabled hidden>--Choose your Bank Name--
                                        </option>
                                        <option value="CIMB Bank Berhad">CIMB Bank Berhad</option>
                                        <option value="Maybank (MBB)">Maybank (MBB)</option>
                                        <option value="Bank Simpanan Nasional (BSN)">Bank Simpanan
                                            Nasional (BSN)</option>
                                        <option value="Bank Muamalat (BMMB)">Bank Muamalat (BMMB)
                                        </option>
                                        <option value="RHB Bank Berhad (RHB)">RHB Bank Berhad (RHB)
                                        </option>
                                        <option value="Public Bank Berhad (PBB)">Public Bank Berhad
                                            (PBB)</option>
                                        <option value="Bank Islam Malaysia Berhad (BIMB)">Bank Islam
                                            Malaysia Berhad (BIMB)</option>
                                        <option value="Hong Leong Bank Berhad (HLBB)">Hong Leong
                                            Bank Berhad (HLBB)</option>
                                        <option value="Ambank Berhad (AMBank)">Ambank Berhad
                                            (AMBank)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Bank Account No</label>
                                    <input type="text" name="bank_account_no" id="bank_account_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Swift Code</label>
                                    <input type="text" name="swift_code" id="swift_code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. BSB Code</label>
                                    <input type="text" name="bsb_code" id="bsb_code" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. Bank Address</label>
                                    <input type="text" name="bank_address" id="bank_address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Type Of Account</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="overseas_bank_type_of_account"
                                            id="overseas_bank_type_of_account1" value="Saving"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="overseas_bank_type_of_account1">Saving</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="overseas_bank_type_of_account"
                                            id="overseas_bank_type_of_account2" value="Current"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="overseas_bank_type_of_account2">Current</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Bankrupt</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Data Generated for Carian
                                        Insolvensi Letter</label>
                                    <input type="text" name="data_generated_carian_insolvensi"
                                        id="data_generated_carian_insolvensi" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Insolvensi</label>
                                    <input type="text" name="insolvensi" id="insolvensi" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Branch</label>
                                    <input type="text" name="branch" id="branch" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Cheque No</label>
                                    <input type="text" name="cheque_no" id="cheque_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. Cheque Date</label>
                                    <input type="date" name="cheque_date" id="cheque_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Net amount to be paid
                                        (RM)</label>
                                    <input type="text" name="net_amount" id="net_amount" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">7. Reason No IC</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="reason_no_ic1" name="reason_no_ic"
                                            class="custom-control-input" value="IMM13">
                                        <label class="custom-control-label" for="reason_no_ic1">IMM13</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="reason_no_ic2" name="reason_no_ic"
                                            class="custom-control-input" value="indigenous people">
                                        <label class="custom-control-label" for="reason_no_ic2">indigenous
                                            people</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="reason_no_ic3" name="reason_no_ic"
                                            class="custom-control-input" value="Others">

                                        <label class="custom-control-label" for="reason_no_ic3">Others:
                                        </label>
                                        <div class="col-md-6">
                                            <input type="" name="reason_no_ic_other" id="reason_no_ic_other"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">8. Upload Document</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                            <label class="control-label">9. Add New Another Bank Account</label>
                            <br>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 float-center"
                                
                                    data-toggle="modal" data-target="#add-contact">Add </button>
                            </div>
                        </div>
                        -->
                        <!-- model -->
                        <!--
                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Add New Account Bank Number</h4>
                                    </div>
                                    <div class="modal-body">
                                        <from class="form-horizontal form-material">
                                            <div class="form-group">
                                              
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Account Bank Number"> </div>

                                                    <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Comment"> </div>
                                               
                                            </div>
                                        </from>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect"
                                            data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-default waves-effect"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                        <tr>
                                            <th>Account Bank Number</th>
                                            <th>Comment</th>
                                            <th>Action</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  >
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td> <button type="button" class="btn waves-effect waves-light btn-rounded btn-info">View</button>
                                             <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">Print</button>
                                            </td>
                                           
                                        </tr>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                        <h5 class="card-title">Preparer</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">1. Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">2. Designation</label>
                                    <input type="text" name="designation" id="designation" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">3. Date</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <h5 class="card-title">Approver</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Name</label>
                                    <input type="text" name="approver_name" id="approver_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Designation</label>
                                    <input type="text" name="approver_designation" id="approver_designation"
                                        class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Effective Date</label>
                                    <input type="date" name="approver_effective_date" id="approver_effective_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Last Date</label>
                                    <input type="date" name="approver_last_date" id="approver_last_date"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">5. Supporting Document</label>
                                    <input type="file" name="approver_supporting_document"
                                        id="approver_supporting_document" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Applicant Details</h5>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">1. Applicant Name</label>
                                    <input type="text" name="applicant_details_name"
                                        id="applicant_details_approver_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">2. Relationship With Insured Person</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="applicant_details_relationship_insured_person1"
                                            name="applicant_details_relationship_insured_person"
                                            class="custom-control-input" value="IMM13">
                                        <label class="custom-control-label"
                                            for="relationship_insured_person1">Son</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="applicant_details_relationship_insured_person2"
                                            name="applicant_details_relationship_insured_person"
                                            class="custom-control-input" value="indigenous people">
                                        <label class="custom-control-label"
                                            for="applicant_details_relationship_insured_person2">The eldest</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="applicant_details_relationship_insured_person3"
                                            name="applicant_details_relationship_insured_person"
                                            class="custom-control-input" value="Others">

                                        <label class="custom-control-label" for="reason_no_ic3">Others:
                                        </label>
                                        <div class="col-md-6">
                                            <input type="" name="applicant_details_relationship_insured_person_other"
                                                id="applicant_details_relationship_insured_person_other"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">3. Postal Adresss</label>
                                    <input type="text" name="applicant_details_postal_address"
                                        id="applicant_details_postal_address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">4. Postcode</label>
                                    <input type="text" name="applicant_details_postcode" id="applicant_details_postcode"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">5. State</label>
                                    <input type="text" name="applicant_details_state" id="applicant_details_state"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">6. Identification Type</label>
                                    <input type="text" name="applicant_details_identification_type"
                                        id="applicant_details_identification_type" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">7. Identification Number</label>
                                    <input type="text" name="applicant_details_identification_number"
                                        id="applicant_details_identification_number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">8. Telephone No</label>
                                    <input type="text" name="applicant_details_telephone_no"
                                        id="applicant_details_telephone_no" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">9. Mobile No</label>
                                    <input type="text" name="applicant_details_mobile_no"
                                        id="applicant_details_mobile_no" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">10. E-mail</label>
                                    <input type="text" name="applicant_details_email" id="applicant_details_email"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">11. Amount</label>
                                    <input type="text" name="applicant_details_amount" id="applicant_details_amount"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">12. Receipt the funeral expenses-for claimant other
                                        than the widow/widower <br> or mother/father (Reg. 98(1))</label>
                                    <input type="text" name="applicant_details_receipt_funeral"
                                        id="applicant_details_receipt_funeral" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">13. Notice Date</label>
                                    <input type="date" name="applicant_details_notice_date"
                                        id="applicant_details_notice_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">14. Acceptance stamp date</label>
                                    <input type="text" name="applicant_details_acceptance_stamp"
                                        id="applicant_details_acceptance_stamp" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">15. Date</label>
                                    <input type="date" name="applicant_details_date" id="applicant_details_date"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">16. State (Origin)</label>
                                    <input type="text" name="applicant_details_state" id="applicant_details_state"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">17. City (Origin)</label>
                                    <input type="text" name="applicant_details_origin" id="applicant_details_origin"
                                        class="form-control">
                                </div>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->
                                <button type="submit" name="action" value="Save" class="btn btn-success">@lang('confirmation.save')</button>
                             
                               @if (!empty ($confirmation))
                            
                               <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button-->
                               <button type="button" name="action" value="Preview" class="btn btn-secondary" disabled>@lang('confirmation.preview')</button>
                               <!--a href='/preview' class="btn btn-secondary" >Preview</a-->
                                <button type="submit" name="action" value="Submit" class="btn btn-primary" id="sa-warning">@lang('confirmation.submit')</button>
                            
                                @else
                            
                                <button type="button" name="action" value="Preview" class="btn btn-secondary" disabled>@lang('confirmation.preview')</button>
                                <button type="submit" name="action" value="Submit" class="btn btn-primary" id="sa-warning" disabled>@lang('confirmation.submit')</button>
                            
                                @endif
                            </div>
                            </div>
                        </div>
                        <br/>
                        @if(Session::get('messageconf')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageconf')}}
                            </div>

                        </div>
                        @elseif (!empty($messageconf))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageconf}}
                            </div>

                        </div>
                        @endif  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- row -->
<script>
    
    function fieldchange()
    {
        //alert('test');
        var submitbutton = document.getElementById('sa-warning');
        //alert(submitbutton);
        submitbutton.disabled = true;
        //alert('test');
    }
    function statechange(){
        
         var statecode = $("#state1").val();
         // alert(statecode);
         $('#brname').find('option').not(':first').remove();
         if (statecode){  

           $.ajax({ 
             url: '/branch/'+statecode,
             type: 'GET',
             dataType: 'json',
            success: function(data){
  //            console.log(data);

             var len = 0;
             if(data != null){
                len = data.length;
            }   

            if(len > 0){
                for(var i=0; i<len; i++){

                    var id = data[i].brcode;
                    var name = data[i].brname; 
                    
                    var option ="<option value='"+id+"'>"+name+"</option>";

                    $("#brname").append(option);
                }
            }   
                
            }

           }); 
        }
        
        fieldchange();
    }
</script>


