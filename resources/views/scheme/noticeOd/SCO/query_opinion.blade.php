<div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <form action="#">
                     <div class="form-body">
                        {{-- <h6 class="card-title">Query & Opinion</h6>
                        <hr> --}}
                        <div class='row'>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label class="control-label">Action</label>
                                 <select name="action" class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="query">Query</option>
                                    <option value="opinion">Opinion</option>
                                 </select>
                              </div>
                           </div>
                        </div>
   
                        <div id="query0">
                           <h6 class="card-title-sub">Query</h6>
                           <hr>
                           <div class='row'>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <textarea type="text" id="desc" name="desc" class="form-control" rows="10" value=""></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class='row'>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label">Route to:</label>
                                    <select name="route_to" class="form-control">
                                       <option>Please Select</option>
                                    </select>                           
                                 </div>
                              </div>
                           </div>
                        </div>
   
                        <div id="opinion_req0">
                           <h6 class="card-title-sub">Request Opinion</h6>
                           <hr>
                           <div class="row p-t-20">
                              <div class="col-md-5">
                                 <div class="card">
                                    <div class="table-responsive">
                                       <table id="table-contribution" class="table table-sm table-bordered" data-toggle-column="first">
                                          <thead>
                                             <tr>
                                                <th style='width:1%'>No.</th>
                                                <th style='width:4%'>Type of Opinion</th>
                                                <th style='width:1%'>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody class='align-middle'>
                                                <tr data-expanded="true" class="workrow" id="tr0_0">
                                                   <td> <input  type="hidden" id="date" name="date" value="" class="form-control" >1.</td>
                                                   <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required >Medical</td>
                                                   <td> <a id='selectdraft' href='#'><i class="fas fa-edit"></i></a>&nbsp;<a id="deletedraft" href='#'><i class="fas fa-trash-alt fa-sm"></i></a></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       <button type="button" id="btn_add_opinion0" value='0' class="btn btn-sm waves-effect waves-light btn-info text-right">Add Opinion</button>
                                     </div>
                                  </div>
                              </div>
                           </div>
   
                           <div id="add_opinion_accordian">
                              </div>
                        </div>
   
                       
   
                        {{-- <div id="opinion0">
                           
                        </div> --}}
   
                        <div class='row'>
                           <div class="col-md-12">
                              <div class="form-actions">
                                 <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                 <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
              </div>
          </div>
      </div>
   </div>
   
   @section('js')
   
   <script>
   
   $(document).ready(function() {
   
      // alert('hello');
   
      $("#query0").hide();
      $("#opinion_req0").hide();
      $("#opinion0").hide();
   
      $('select[name=action]').change(function () {
         if (this.value == 'query') {
            $("#query0").show();
            $("#opinion_req0").hide();
   
         } else if (this.value == 'opinion') {
            $("#opinion_req0").show();
            $("#query0").hide();
         } else {
            $("#query0").hide();
            $("#opinion_req0").hide();
         }
      });
   
   
      $('#btn_add_opinion0').click(function(){
   
         var html;
   
         html = '<h6 class="card-title-sub">Add Opinion</h6>'+
                  '<hr>'+
                  '<div class="row">'+
                     '<div class="col-md-4">'+
                        '<div class="form-group">'+
                           '<label class="control-label">Type of Opinion</label>'+
                           '<select name="type_opinion" class="form-control">'+
                              '<option>Please Select</option>'+
                              '<option value="medical_o">Medical Opinion</option>'+
                              '<option value="legal_o">Legal Opinion</option>'+
                              '<option value="ppn_o">PPN Opinion</option>'+
                              '<option value="aro_o">ARO Opinion</option>'+
                           '</select>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
                  '<div class="row">'+
                     '<div class="col-md-4">'+
                        '<div class="form-group">'+
                           '<label class="control-label">Purpose of Reference</label>'+
                           '<select name="purpose_reference" class="form-control">'+
                              '<option>Please Select</option>'+
                           '</select>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
                  '<div class="row">'+
                     '<div class="col-md-4">'+
                        '<div class="form-group">'+
                           '<label class="control-label">Case Details</label>'+
                           '<textarea id="" name="" value="" class="form-control clear_death" rows="10"></textarea>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
                  '<div class="row">'+
                     '<div class="col-md-4">'+
                        '<div class="form-group">'+
                           '<label class="control-label">Investigation Details</label>'+
                           '<textarea id="" name="" value="" class="form-control clear_death" rows="10"></textarea>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
                  '<div class="row">'+
                     '<div class="col-md-4">'+
                        '<div class="form-group">'+
                           '<label class="control-label">Doubtful/Issue</label>'+
                           '<textarea id="" name="" value="" class="form-control clear_death" rows="10"></textarea>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
                  '<div class="row">'+
                     '<div class="col-md-4">'+
                        '<div class="form-group">'+
                           '<label class="control-label">Recommendation</label>'+
                           '<textarea id="" name="" value="" class="form-control clear_death" rows="10"></textarea>'+
                        '</div>'+
                     '</div>'+
                  '</div>';
   
               $('#add_opinion_accordian').append(html);
   
            });
   });
   
   
   </script>
   
   @endsection