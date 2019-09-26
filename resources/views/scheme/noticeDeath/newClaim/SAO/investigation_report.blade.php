<div class="row">
   <div class="col-12">
         <div class="card">
            <div class="card-body">
               <div class="p-20">
                  <form action="#">
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">Investigation Date</label>
                                 <input type="date" name="sender_note" id="sender_note" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">Date of IP informed Employer (about accident)</label>
                                 <input type="date" name="sender_note" id="sender_note" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Whether the insured person is an employee under the SOCSO Act?</label>
                              <select class="form-control" name="statutorybody" id="statutorybody"> 
                                 <option value="">Please Select</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-6">
                           <div class="form-group">
                                 <label class="control-label">Whether the SOCSO Act applies to this industry?</label>
                                 <select class="form-control" name="statutorybody" id="statutorybody"> 
                                    <option value="">Please Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                 </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-6">
                           <div class="form-group">
                                 <label class="control-label">Whether the personal injury is caused by an accident or an OD?</label>
                                 <select class="form-control" name="statutorybody" id="statutorybody"> 
                                    <option value="">Please Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                 </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-6">
                           <div class="form-group">
                                 <label class="control-label">Whether the accident is in the course of his/her employment?</label>
                                 <select class="form-control" name="statutorybody" id="statutorybody"> 
                                    <option value="">Please Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                 </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-6">
                           <div class="form-group">
                                 <label class="control-label">Whether the accident arised out of his employment?</label>
                                 <select class="form-control" name="statutorybody" id="statutorybody"> 
                                    <option value="">Please Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                 </select>
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">System Recommendation from IO</label>
                                    <input type="text" name="notes" id="notes" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">IO Recommended Date</label>
                                    <input type="date" name="notes" id="notes" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row p-t-20">
                        <div class="col-md-4">
                           <div class="form-group">
                                 <label class="control-label">IO Recommended By</label>
                                    <input type="text" name="notes" id="notes" class="form-control">
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                    <label class="control-label">Remarks from IO</label>
                                       <input type="text" name="notes" id="notes" class="form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                     </div>            
                  </form>
               </div>
            </div>
         </div>
   </div>
</div>