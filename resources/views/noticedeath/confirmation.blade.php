    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="/confirmation_death" method="POST">    
                    <h5 class="card-title">@lang('socso.title')</h5>
                <hr>

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
                <input type='hidden' name='caserefno' id='caserefno' value='{{$caserefno}}'>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> @lang('socso.attr.state')</label>
                            <select name="statecode" id="state1" class="form-control" onchange="statechange()">
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

                </div>
            

                    <h5 class="card-title">@lang('confirmation.title_ot')</h5>
                    <hr>

                    @if (!empty($confirmation -> jsection)) 
                    @foreach($confirmation -> jsection as $d)

                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.idtype')</label>
                                @foreach($idtype as $id)
                                @if(!empty($d) && $id->refcode == $d->idtype)
                                <input type="text" id="idtype" name="idtype[]" value="{{$id->descen}}" class="form-control" readonly>
                                 @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.idno')</label>
                                @if(!empty($d) && $d->idno !='')
                                <input type="text" id="idno" name="idno[]" value="{{ $d->idno }}" class="form-control" readonly>
                                @else
                                <input type="text" id="idno" name="idno[]" value="" class="form-control">
                                @endif
                            </div>
                        </div>

                        
                        <input type='hidden' name='uniquerefno[]' id='uniquerefno' value='{{ $d->uniquerefno }}'>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.sectionj_received')</label>
                                <select name="jrecv[]" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                    @if (!empty($d) && $d->jrecv == 'Y')
                                    <option value="Y" selected>Complete</option>
                                    <option value="N">Not Complete</option>
                                    @elseif (!empty($d) && $d->jrecv == 'N')
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
                                <label class="control-label">@lang('confirmation.attr.complete_sectionj')
                                </label>
                                @if(!empty($d) && $d->jrecvdate != '')
                                <input type="date" id="jrecvdate" name="jrecvdate[]" onchange='fieldchange()' value="{{substr($d->jrecvdate,0,4)}}-{{substr($d->jrecvdate,4,2)}}-{{substr($d->jrecvdate,6,2)}}" class="form-control" required>
                                @else
                                <input type="date" id="jrecvdate" name="jrecvdate[]" onchange='fieldchange()' value="" class="form-control" required>
                                @endif
                            </div>
                        </div>
                
                    </div>

                    @endforeach
                    @endif

                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label"> @lang('confirmation.attr.notice_date')</label>
                                <input type="date" name="notice_date" id="notice_date" onchange='fieldchange()' class="form-control" value="{{date('Y-m-d')}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.acceptance_stamp')</label>
                                @if(!empty($confirmation) && $confirmation->stampdate != '')
                                <input type="date" id="stampdate" name="stampdate" onchange='fieldchange()' value="{{substr($confirmation->stampdate,0,4)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,6,2)}}" class="form-control" required>
                                @else
                                <input type="date" id="stampdate" name="stampdate" onchange='fieldchange()' value="" class="form-control" required>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.remarks')</label>
                               @if(!empty($confirmation) && $confirmation->remarks != '')
                                <textarea type="text" id="remarks" name="remarks" value="" onchange='fieldchange()' class="form-control">{{$confirmation->remarks}}</textarea>
                                @else
                                <textarea type="text" id="remarks" name="remarks" value="" onchange='fieldchange()' class="form-control"></textarea>
                                @endif
                               
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                @if (!empty ($confirmation))
                                <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button-->
                                <button type="submit" name="action" value="Submit" class=" btn waves-effect waves-light btn btn-primary" alt="alert" id="submit" onclick="return confirm('Are you sure want to submit?');">@lang('confirmation.submit')</button>
                                {{-- <a href="/preview" id='preview' type="button" name="action" value="Preview" class="btn btn-secondary">@lang('confirmation.preview')</a> --}}
                                {{-- <button type="submit" name="action" value="Submit" class="btn btn-primary" alt="alert"  id="sa-warning">@lang('confirmation.submit')</button> --}}
                                 @else
                                <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn btn-primary" id="submit" disabled>@lang('confirmation.submit')</button>
                                {{-- <a href="/preview" id='preview' type="button" name="action" value="Preview" class="btn btn-secondary">@lang('confirmation.preview')</a> --}}
                                @endif
                                <button type="submit" name="action" value="Save" class="btn waves-effect waves-light btn btn-success">@lang('confirmation.save')</button>
                            </div>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>

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

