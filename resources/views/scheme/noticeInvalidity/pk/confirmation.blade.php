<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="confirmationilat" method="POST">    
                  
                
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
             
                    
                    {{-- <h5 class="card-title">@lang('scheme/confirmation.title_ob')</h5>
                    <hr> --}}

                    
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
                       
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->
                                
                             
                               @if (!empty ($confirmation))
                            
                               <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('scheme/confirmation.preview')</button-->
                               <!--button type="button" name="action" value="Preview" class="btn btn-secondary" >@lang('scheme/confirmation.preview')</button-->
                               <!--a href='/preview' class="btn btn-secondary" >Preview</a-->
                                <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn-primary" id="submit" onclick="return confirm('Are you sure want to submit?');">@lang('scheme/confirmation.submit')</button>
                                <a href="/ilatpreview" id='preview' type="button" name="action" value="Preview" class="btn btn-secondary">@lang('scheme/confirmation.preview')</a>
                            
                                @else
                            
                                <!--button type="button" name="action" value="Preview" class="btn btn-secondary" disabled>@lang('scheme/confirmation.preview')</button-->
                                <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn-primary" id="submit" disabled>@lang('scheme/confirmation.submit')</button>
                                <a href="/ilatpreview" id='preview' type="button" name="action" value="Preview" class="btn btn-secondary">@lang('scheme/confirmation.preview')</a>
                            
                                @endif
                                <button type="submit" name="action" value="Save" class="btn waves-effect waves-light btn-success">@lang('scheme/confirmation.save')</button>
                            </div>
                            </div>
                        </div>
                        <br/>
                       
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
        var submitbutton = document.getElementById('submit');
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


