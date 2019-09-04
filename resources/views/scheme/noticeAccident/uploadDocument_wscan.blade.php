<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="caserefno" id='caserefno' value="{{Session::get('caserefno')}}">
                    <input type="hidden" name="operid" id='operid' value="{{Session::get('loginname')}}">
                    <input type="hidden" name="brcode" id='brcode' value="{{Session::get('loginbranchcode')}}">
                    <input type="hidden" name="uniquerefno" id='uniquerefno' value="{{Session::get('uniquerefno')}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('uploaddoc.title')</h5>
                        <hr class="m-t-0 m-b-40">		
                        @if(Session::get('messagedoc')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagedoc')}}
                            </div>

                        </div>   
                        @endif
                        <div class="form-actions">
                            
                            <div class="row">
                            <div class="col-12">
                            
                                <div class="table-responsive">
                                    @if(count($errors)>0)
                                    <ul>
                                        @foreach($errors->all() as $error)

                                        <li class="alert alert danger">{{$error}}</li>

                                        @endforeach

                                    </ul>

                                    @endif
                                    <table class="table" id="table_upload_doc">
                                        <col width="40%">
                                        <col width="35%">
                                        <col width="10%">
                                        <col width="15%">
                                        <thead>
                                            <tr>
                                                <th style="display:none;">Doctype </th>
                                                <th>Document Description</th>
                                                <th>Choose File</th>
                                                <th style="text-align:center">Scan</th>
                                                <th style="text-align:center">View</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $cnt = 0; ?>
                                            @foreach($doclist as $data)

                                            <tr>
                                                <!--td style="display:none;">{{$cnt}} </td-->
                                                <td style="display:none;"><input type="hidden" name="doctype[{{$cnt}}]" id="doctype[{{$cnt}}]" value="{{ $data -> doctype}}"> </td>
                                                <td><input type ="hidden" name="doccat[{{$cnt}}]" id="doccat[{{$cnt}}]" value="{{ $data -> doccat}}" >{{ $data -> docdescen}}</td>
                                                <td style="display:none;"><input type="hidden" name="docdesc[{{$cnt}}]" id="docdesc[{{$cnt}}]" value="{{ $data -> docdescen}}"> </td>
                                                <td><input type="file" name="pdf[{{$cnt}}]"  /></td>
                                                <td class="table-row-button" style='text-align: center'><a id='viewdoc' onclick='sendscan({{$cnt}}); return false;'><i class="fas fa-print"></i></a>{{--<button id='viewdoc' type='button' onclick='sendscan({{$cnt}}); return false;'>Scan</button>--}}</td>
                                                
                                                <?php $docfound = false; ?>
                                                @if (!empty($docinfo))
                                                @foreach ($docinfo as $d)
                                                @if ($d->doctype == $data->doctype)
                                                <td align='center' style='text-align: center'><a id='viewdoc' href='/viewdoc?docname={{$d->docname}}' target="_blank" ><i class="fas fa-file-alt"></i></a></td>
                                                <?php $docfound = true;?>
                                                @break
                                                @endif
                                                @endforeach
                                                @endif
                                                
                                                @if ($docfound ==  false)
                                                <td></td>
                                                @endif
                                                <td style="display:none;"><input type="hidden" name="doccnt[{{$cnt}}]" id="doccnt[{{$cnt}}]" value='1' /></td>
                                                
                                            </tr>
                                            <?php $cnt++; ?>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                      
                                        
                                    </table>
                                    <table>
                                        <tr>
                                                <td id="select_database" style="display:none;" >
                                                    <select id="idtype" class="form-control" name="idtype">
                                                            @foreach($doclist as $data)
                                                            <option value="{{ $data -> doctype}}">{{ $data -> docdescen}}
                                                            </option>
                                                            @endforeach
                                                    </select>
                                                </td> 

                                        </tr>

                                    </table>
                                </div>
                            
                                

                                

                            
                        </div>
                    </div>
                            <div class="form-action">
                                    {{--<button type="button" id="add_doc"
                                        class="btn btn waves-effect waves-light btn-secondary">@lang('uploaddoc.adddoc')</button>--}}
                                    <!--button type="submit"
                                        class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('uploaddoc.uploadall')</button>
                                </div>
                            
                        </div>
                        <br/>
                        
                    </div>
                </form>
            </div>
	</div>
    </div>
<!-- Row -->
</div>

<script type='text/javascript'>
var ajaxReq;

function ajaxFunction()
{
    try
    {
        ajaxReq = new XMLHttpRequest();
    }
    catch (e)
    {
         try
         {
             ajaxReq = new ActiveXObject("Msxml2.XMLHTTP");
         }
         catch (e)
         {
             try
             {
                 ajaxReq = new ActiveXObject("Microsoft.XMLHTTP");
             }
             catch (e)
             {
                 alert('Your browser does not support AJAX');
                 return false;
             }
         }
    }
}

function sendscan(idx)
{
    //alert('sendscan');
        ajaxFunction();

       //ajaxReq.onreadystatechange = processRequest();
       
    var caseno = document.getElementById('caserefno').value;
    //alert(caseno);
    var uniquerefno = document.getElementById('uniquerefno').value;
    var doctype = document.getElementById('doctype['+idx+']').value;
    //alert(doctype);
    var doccat = document.getElementById('doccat['+idx+']').value;
    //alert(doccat);
    var operid = document.getElementById('operid').value;
    var brcode = document.getElementById('brcode').value;
    //alert(brcode);
    var docdesc = document.getElementById('docdesc['+idx+']').value;
    var doccnt = document.getElementById('doccnt['+idx+']').value;
    //alert(docdesc);

    var url = "http://127.0.0.1:2100?caseno=" + caseno + "&uniquerefno=" + uniquerefno + 
            "&doctype=" + doctype + "&doccat=" + doccat + "&docdesc=" + docdesc + "&doccnt=" + doccnt + 
            "&operid=" + operid + "&brcode=" + brcode ;
    
    //alert(url);

    ajaxReq.open('GET', url, true);

    ajaxReq.send(caseno);
       //alert(caseno);
}
</script>
