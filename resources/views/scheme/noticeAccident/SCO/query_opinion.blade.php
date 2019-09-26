<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/scoRecommend.attr.action')</label>
                                    <select name='route' id='dd_route' class='form-control'>
                                        <option value="">Please Select</option>
                                        <option value="query">Query</option>
                                        <option value="opinion">Opinion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-0"> <br>
                                <button type="button" name="action" id="dd_Next" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-whatever="@fat">Next</button>
                            </div>
                            {{-- POPUP From Dropdown  --}}
                            {{-- QUERY --}}
                            <div class="modal fade" id="query_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel1">Query</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.query_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            {{-- OPINION --}}
                            <div class="modal fade" id="opinion_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  card-title">
                                            <h4 class="modal-title" id="exampleModalLabel1">Request Medical/Legal/PPN/ARO Opinion</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('scheme.noticeAccident.SCO.opinion_popup') 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                            <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        $("#dd_Next").click(function () {
       var dd_route = $('#dd_route').val();
       if (dd_route == 'query') {
         
           var testing ="#query_popup";
   
       } 
       else if(dd_route == 'opinion') {
          
          var testing ="#opinion_popup";
       } 
       $("#dd_Next").attr('data-target', testing);
       });
      
</script>