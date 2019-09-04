<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
               <div class="p-20">
                   <form action="#">
                       {{-- <h5 class="card-title">@lang('scheme/caseDetails.title')</h5>
                       <hr> --}}
                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.case_info.notice_id')</label>
                                   <input type="text" name="" id="" class="form-control" required>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">@lang('form/scheme.general.collapse.case_info.notice_date')</label>
                                  <input type="date" name="" id="" class="form-control" required>
                              </div>
                          </div>
                       </div>
                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.case_info.scheme_ref_no')</label>
                                   <input type="text" name="" id="" class="form-control" required>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.case_info.qualifying_condition')</label>
                                   <input type="text" name="" id="" class="form-control" required>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="control-label">@lang('form/scheme.general.collapse.case_info.periodical_receiver')</label>
                                 <select class="form-control" name="schemetype" id="schemetype"> 
                                       <option value="">Please Select</option>
                                       <option value="yes">@lang('option.yes')</option>
                                       <option value="no">@lang('option.no')</option>
                                  </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="control-label">@lang('form/scheme.general.collapse.case_info.case_status')</label>
                                 <select class="form-control" name="schemetype" id="schemetype"> 
                                    <option value="">Please Select</option>
                                    <option value="">Lulus</option>
                                    <option value="">Penyiasatan</option>
                                    <option value="">Baru</option>
                                    <option value="">Tutup dengan Bayaran</option>
                                    <option value="">Tutup tanpa Bayaran</option>
                                    <option value="">Tidak lulus</option>
                                    <option value="">Pertanyaan</option>
                                    <option value="">Belum Selesai</option>
                                    <option value="">Pilihan Bayaran - Request</option>
                                    <option value="">Dalam Proses</option>
                                    <option value="">Rayuan Ke JDR</option>
                                    <option value="">Tidak Cukup Caruman</option>
                                    <option value="">Tiada Orang Tanggungan</option>
                                    <option value="">Bukan Seorang</option>
                                 </select>
                              </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.case_info.notice_type')</label>
                                   <input type="text" name="" id="" value="Death" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                       <label class="control-label">@lang('form/scheme.general.collapse.case_info.date_death')</label>
                                   <input type="date" name="" id="" class="form-control" required>
                               </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.case_info.age_death')</label>
                                   <input type="text" name="" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">@lang('form/scheme.general.collapse.case_info.source_death')</label>
                                  <input type="text" name="" id="" class="form-control">
                              </div>
                          </div>
                       </div>
                       <div class="form-actions">
                           <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.next')</button>
                       </div>             
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>