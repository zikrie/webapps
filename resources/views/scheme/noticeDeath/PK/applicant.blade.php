<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/applicantinfo">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
                        <div class="form-body">
                           
                            @if(Session::get('messageapplicantinfo'))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{Session::get('messageapplicantinfo')}}
                                </div>
    
                            </div>
                            @elseif (!empty($messageapplicantinfo))
                            <div class="card-footer">
    
                                <div class="alert alert-warning">
                                    {{$messageapplicantinfo}}
                                </div>
    
                            </div>
                            @endif
    
    
    
                            @if (!empty($applicantinfo))
                            @foreach($applicantinfo as $key => $app)
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="applicant_accordion{{ $key }}" role="tablist" aria-multiselectable="true">
                                        <div class="card m-b-0">
                                            <div role="tab" id="applicantinfo">
                                                <h6 class="card-title-sub">
                                                    <i class="fa fa-plus"></i>&nbsp;
                                                    @if ($app->name != '')
                                                    <a class="collapsed link" data-toggle="collapse"
                                                        data-parent="#applicant_accordion{{ $key }}"
                                                        href="#applicant_collapse{{ $key }}" aria-expanded="false"
                                                        aria-controls="collapseTwo2">
                                                        @lang('scheme/applicantDetails.title') ({{$app->idno}})
                                                    </a>
                                                    @endif
                                                </h6>
                                            </div>
                                            <div id="applicant_collapse{{ $key }}" class="collapse" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.name')</label>
                                                                @if(!empty($app) && $app->name !='')
                                                                <input type="text" id="name" name="name[]"
                                                                    value="{{ $app->name }}" class="form-control" required>
                                                                @else
                                                                <input type="text" id="name" name="name[]" value=""
                                                                    class="form-control" required>
                                                                @endif
                                                                <input type="hidden" class="kira" id="kira" name="kira"
                                                                    value="{{ $key }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.relationship')</label>
                                                                <select name='relation[]' id='relation{{ $key }}'
                                                                    class='form-control' required>
                                                                    @foreach($applrelation as $aplrl)
                                                                    @if(!empty($app) && $app->relation == $aplrl->refcode)
                                                                    <option value='{{$aplrl->refcode}}' selected>
                                                                        {{$aplrl->descen}}</option>
                                                                    @else
                                                                    <option value='{{$aplrl->refcode}}'>{{$aplrl->descen}}
                                                                    </option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.id_type')</label>
                                                                <select id="idtype" class="form-control"
                                                                    value="@if(!empty($app)){{$app->idtype}} @endif"
                                                                    name="idtype[]" required>
                                                                    <!--option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option-->
                                                                    @foreach($idtype as $id)
                                                                    @if (!empty($app) && $id->refcode == $app->idtype)
                                                                    <option value="{{$id->refcode}}" selected>
                                                                        {{$id->descen}}</option>
                                                                    @else
                                                                    <option value="{{$id->refcode}}">{{$id->descen}}
                                                                    </option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.id_no')</label>
                                                                @if(!empty($app) && $app->idno !='')
                                                                <input type="text" id="idno" name="idno[]"
                                                                    value="{{ $app->idno }}" class="form-control">
                                                                @else
                                                                <input type="text" id="idno" name="idno[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.address')</label>
                                                                @if(!empty($app) && $app->add1 !='')
                                                                <input type="text" id="add1" name="add1[]"
                                                                    value="{{ $app->add1 }}" class="form-control">
                                                                @else
                                                                <input type="text" id="add1" name="add1[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                @if(!empty($app) && $app->add2 !='')
                                                                <input type="text" id="add2" name="add2[]"
                                                                    value="{{ $app->add2 }}" class="form-control">
                                                                @else
                                                                <input type="text" id="add2" name="add2[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                @if(!empty($app) && $app->add3 !='')
                                                                <input type="text" id="add3" name="add3[]"
                                                                    value="{{ $app->add3 }}" class="form-control">
                                                                @else
                                                                <input type="text" id="add3" name="add3[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.state')</label>
                                                                <select name='statecode[]' id='statecode'
                                                                    class='form-control'>
                                                                    @foreach($state as $s)
                                                                    @if(!empty($app) && $app->statecode == $s->refcode)
                                                                    <option value='{{$s->refcode}}' selected>{{$s->descen}}
                                                                    </option>
                                                                    @else
                                                                    <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                                                    @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.city')</label>
                                                                @if(!empty($app) && $app->city !='')
                                                                <input type="text" id="city" name="city[]"
                                                                    value="{{ $app->city }}" class="form-control">
                                                                @else
                                                                <input type="text" id="city" name="city[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.postcode')</label>
                                                                @if(!empty($app) && $app->postcode !='')
                                                                <input type="text" id="postcode" name="postcode[]"
                                                                    value="{{ $app->postcode }}" class="form-control">
                                                                @else
                                                                <input type="text" id="postcode" name="postcode[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.pobox')</label>
                                                                @if(!empty($app) && $app->pobox !='')
                                                                <input type="text" id="pobox" name="pobox[]"
                                                                    value="{{ $app->pobox }}" class="form-control">
                                                                @else
                                                                <input type="text" id="pobox" name="pobox[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.lockedbag')</label>
                                                                @if(!empty($app) && $app->lockedbag !='')
                                                                <input type="text" id="lockedbag" name="lockedbag[]"
                                                                    value="{{ $app->lockedbag }}" class="form-control">
                                                                @else
                                                                <input type="text" id="lockedbag" name="lockedbag[]"
                                                                    value="" class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.wdt')</label>
                                                                @if(!empty($app) && $app->wdt !='')
                                                                <input type="text" id="wdt" name="wdt[]"
                                                                    value="{{ $app->wdt }}" class="form-control">
                                                                @else
                                                                <input type="text" id="wdt" name="wdt[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.telNo')</label>
                                                                @if(!empty($app) && $app->telno !='')
                                                                <input type="text" id="telno" name="telno[]"
                                                                    value="{{ $app->telno }}" class="form-control">
                                                                @else
                                                                <input type="text" id="telno" name="telno[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.mobileNo')</label>
                                                                @if(!empty($app) && $app->mobileno !='')
                                                                <input type="text" id="mobileno" name="mobileno[]"
                                                                    value="{{ $app->mobileno }}" class="form-control">
                                                                @else
                                                                <input type="text" id="mobileno" name="mobileno[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.email')</label>
                                                                @if(!empty($app) && $app->email !='')
                                                                <input type="text" id="email" name="email[]"
                                                                    value="{{ $app->email }}" class="form-control">
                                                                @else
                                                                <input type="text" id="email" name="email[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4" id="div_amount{{ $key }}">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">@lang('scheme/applicantDetails.attr.amount')</label>
                                                                @if(!empty($app) && $app->amount !='')
                                                                <input type="text" id="amount" name="amount[]"
                                                                    value="{{ $app->amount }}" class="form-control">
                                                                @else
                                                                <input type="text" id="amount" name="amount[]" value=""
                                                                    class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
    
                            @else
                            @include('scheme.noticeDeath.PK.applicant_add')
                            @endif
                        </div>
                        <div id="container_try">
                            <div id="add_app_accordian">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            <button type="button" id="btn_add_applicant" class="btn btn-sm waves-effect waves-light btn-info">ADD APPLICANT</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
    
    {{-- Confirm modal --}}
    <div class="modal fade" id="deletemodalad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete?
                    <input type="hidden" class="form-control" name="id" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_close2" class="btn btn-secondary btn-sm"
                        data-dismiss="modal">Close</button>
                    <button type="button" id="btn_delete2" class="btn btn-danger btn-sm"
                        data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
    @php($no_app = 0)
    @php($applicantinfo == null ? $no_app = 0 : $no_app = count($applicantinfo))
    
    <script>
        
    $(document).ready(function() {
    
        $("#btn_add_applicant").hide();
    
        var no_app = {!! $no_app !!};
        //alert(no_app);
    
        if(no_app > 0){
            var i = no_app-1;
    
            check_fromdb();
    
        }else{
            var i = 0;
        }
    
        var html;
        // alert('Jquery detected');
    
        // Append applicant
    
    
        $('#btn_add_applicant').click(function(){  
            //alert(i);
    
        var abc = $('div[id^="applicant_collapse"]').length;
        console.log('no of applicant:' + abc);
        var relation = $('#relation0').val(); //
    
        //01 - wife
        //02 - husband
        //03 - father
        //04 - mother
        //05 - child
        //06 - sibling
        //07 - Grandparent
        //08 - others
    
        if(relation == '03') {
            var next_applicant = "04";
    
            if(abc >1){
                return false;
            }else if(abc == 1){
                $("#btn_add_applicant").hide();
            }
    
        }else if(relation == '04') {
            var next_applicant = "03";
    
            if(abc >1){
                return false;
            }else if(abc == 1){
                $("#btn_add_applicant").hide();
            }
        }else if(relation == '01') {
            var next_applicant = "01";
            if(abc >3){
                return false;
            }else if (abc == 3){
                $("#btn_add_applicant").hide();
            }
        }
            i++;
    
            $('#applicantinfo0').show();
    
            var no = i + 1;
    
            html = '<div class="ad_list" id="ad_list">'+
                        '<div class="col-md-12">'+
                            '<div id="applicant_accordion'+i+'" role="tablist" aria-multiselectable="true">'+
                                '<div class="m-b-0-1">'+
                                    '<div class="m-b-0-1">'+
                                        '<div role="tab" id="applicantinfo">'+
                                            '<h6 class="card-title-sub"><i class="fa fa-plus"></i>&nbsp;'+
                                                '<a class="collapsed link" data-toggle="collapse" data-parent="#applicant_accordion'+i+'" href="#applicant_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">@lang('scheme/applicantDetails.title') </a>'+
                                                '<button type="button" id="btn_del_ad'+i+'" class="close btn_del_ad" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                            '</h6>'+
                                        '</div>'+
                                        '<div id="applicant_collapse'+i+'" class="collapse" role="tabpanel">'+
                                            '<div class="card-body">'+
                                                '<div class="row">'+    
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.name')</label>'+
                                                            '<input type="text" id="name" name="name[]" value="" class="form-control" required>'+
                                                            '<input type="hidden" class="kira" id="kira" name="kira" value="'+i+'" >'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.relationship')</label>';
                                                            if(next_applicant == '01' || next_applicant == '04' || next_applicant == '03'){
                                                            html +=   '<input type="hidden" name="relation[]" value="'+next_applicant+'" >';
                                                            html +=     '<select class="form-control" name="relation[]" id="relation'+i+'" disabled>'; 
                                                            html +=        '@foreach($applrelation as $aplrl)';
                                                                if (next_applicant == {{$aplrl->refcode}}){
                                                            html +=        '<option value="{{$aplrl->refcode}}" selected>{{$aplrl->descen}}</option>';
                                                                }else{
                                                            html +=        '<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>';
                                                                }
                                                            html +=        '@endforeach </select>';
                                                            }else{
                                                            html +=      '<select class="form-control" name="relation[]" id="relation'+i+'">'; 
                                                            html +=        '@foreach($applrelation as $aplrl)<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>';
                                                            html +=        '@endforeach </select>';
                                                            }
                                                html +='</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.id_type')</label>'+
                                                            '<select id="idtype" class="form-control" value="" name="idtype[]"> @foreach($idtype as $id)<option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach </select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-6">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.id_no')</label>'+
                                                            '<input type="text" id="idno" name="idno[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-12">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.postal_address')</label>'+
                                                            '<input type="text" id="add1" name="add1[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-12">'+
                                                        '<div class="form-group">'+
                                                            '<input type="text" id="add2" name="add2[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-12">'+
                                                        '<div class="form-group">'+
                                                            '<input type="text" id="add3" name="add3[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.state')</label>'+
                                                            '<select name="statecode[]" id="statecode" class="form-control"> @foreach($state as $s)<option value="{{$s->refcode}}">{{$s->descen}}</option> @endforeach </select>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.city')</label>'+
                                                            '<input type="text" id="city" name="city[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.postcode')</label>'+
                                                            '<input type="text" id="postcode" name="postcode[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.pobox')</label>'+
                                                            '<input type="text" id="pobox" name="pobox[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.lockedbag')</label>'+
                                                            '<input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.wdt')</label>'+
                                                            '<input type="text" id="wdt" name="wdt[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.telNo')</label>'+
                                                            '<input type="text" id="telno" name="telno[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.mobileNo')</label>'+
                                                            '<input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.email')</label>'+
                                                            '<input type="text" id="email" name="email[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="row" style="display:none;">'+
                                                    '<div class="col-md-4">'+
                                                        '<div class="form-group">'+
                                                            '<label class="control-label">@lang('scheme/applicantDetails.attr.amount')</label>'+
                                                            '<input type="text" id="amount" name="amount[]" value="" class="form-control">'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
        
     
            $('#add_app_accordian').append(html);
        });
    
        $('select[id^=relation]').on('change', function () {
    
            var nilai = $(this).val();
            var id = $(this).attr("id");
            var values = id.split('n');
            var this_id = values[1];
    
            console.log('id'+id);
            console.log('this_id'+ this_id);
    
        //01 - wife
        //02 - husband
        //03 - father
        //04 - mother
        //05 - child
        //06 - sibling
        //07 - Grandparent
        //08 - others
    
           // alert(nilai);
    
            if (nilai == '08'){
                // alert(nilai);
                $('#btn_add_applicant').hide();
                $('#div_amount'+this_id).show();
    
                if (this_id == '0'){
    
                    $('.ad_list').remove();
    
                    }
    
            }else if(nilai == '03'){
                $('#btn_add_applicant').show();
                $('#div_amount'+this_id).hide();
    
                if (this_id == '0'){
    
                    $('.ad_list').remove();
    
                }
    
            }else if(nilai == '04'){
                $('#btn_add_applicant').show();
                $('#div_amount'+this_id).hide();
    
                if (this_id == '0'){
    
                    $('.ad_list').remove();
    
                }
    
            }else if(nilai == '01'){
                $('#btn_add_applicant').show();
                $('#div_amount'+this_id).hide();
    
            }else if(nilai == '02' || nilai == '05' || nilai == '06' || nilai == '07'){ 
                $('#div_amount'+this_id).hide();//irina add 22072019	
                $('#btn_add_applicant').hide();
    
                if (this_id == '0'){
    
                    var count = document.getElementsByClassName('kira');
                    var len = count.length;
                    // alert(len);
    
                    for (var i = 0; i < count.length; i ++) {
                    var val = count[i].getAttribute('value');
                    //for (var j=0; j<len; j++) {
    
                        //alert(j);
    
                        // var val = count[j].value;
                        // alert(val);
                            if (val !== '0'){
    
                                
    
                                var relation = $('#relation'+val).val();
                                // if(relation !== '02' && relation !== '05' && relation !== '06' && relation !== '07'){
    
                                     $('#applicant_accordion'+val).remove();
    
                                    // $('#applicant_accordion'+val).find('input:text').val('');
                                    // $('#applicant_accordion'+val).find('select').val('');
                                    // $('#applicant_accordion'+val).find('select').prop('disabled', false);
    
                                // }
                                
                            }
    
                    }
    
                    $('.ad_list').remove();
    
                }
    
            }else{
                $('#btn_add_applicant').hide();
                $('#div_amount'+id).hide();
            }
    
    
          
    
        });
    
      $('#container_try').on('click','.btn_del_ad',function(){
        var delete_id = $(this).attr('id');
        // alert(delete_id);
        $('#deletemodalad').modal('show');
        $("#deletemodalad .modal-footer button").on('click', function(e) {
          var btn_id = e.target.id;
          if(btn_id == 'btn_delete2'){
            //   alert("masuk");
            $("#"+delete_id).closest("#ad_list").empty();
    
            var abc = $('div[id^="applicant_collapse"]').length;
            console.log('no of applicant:' + abc);
            var relation = $('#relation0').val(); //
    
            if(relation == '03') {
    
                if(abc == 1){
                    $("#btn_add_applicant").show();
                }
    
            }else if(relation == '04') {
    
                if(abc == 1){
                    $("#btn_add_applicant").show();
                }
            }else if(relation == '01') {
                if(abc <4){
                    $("#btn_add_applicant").show();
                }
            }
    
          }
    
        });
      });
    
    //   $("#btn_delete2").click(function(e){
    //             e.preventDefault();
    //             var action = $(this).val();
    //             action_type(action);
    //         });
    
    }); 
    
    function Cuba(){
        var abc = $('input[name*="idno"]').length;
        // alert(abc);
        var relation = $('#relation').val();
        // alert(relation);
    
        if(relation == '03') {
            if(abc >4){
                // alert("hahahaha");
                return false;
            }
        }
    }
    
    function labelOnClick () {
        function makeDivId(id) {
            return id + "_div";
        };
    
        var div = this.getElementById(makeDivId(this.id));
    
        if (div) {
            div.parentNode.removeChild(div);
        } else {
            div = document.createElement("div");
            div.innerHTML = outMsg;
            div.id = makeDivId(this.id);
    
            this.appendChild(div);
        }
    }
    
    function delete_div(i){
    
        //alert(i);
        $("#applicant_accordion"+i).empty();
    
        var abc = $('div[id^="applicant_collapse"]').length;
        var relation = $('#relation').val();
        if(relation == '03' || relation == '04') {
    
            if(abc <2){
                $("#btn_add_applicant").show();
            }
        }else if(relation == '01') {
            if(abc <4){
                $("#btn_add_applicant").show();
            }
        }
    
    }
    
    function check_fromdb(){
             
        var count = document.getElementsByClassName('kira');
        var len = count.length;
            for (var j=0; j<len; j++) {
    
                var id = count[j].value;
                
                var relation = $('#relation'+id).val();
    
                if (relation !== '08'){
                    $('#div_amount'+id).hide();
    
                }
    
                      
            }
    
            var relation0 = $('#relation0').val();
            if (relation0 == '04'){
    
                if ( len >= '2'){
                    $("#btn_add_applicant").hide();
                }else{
                    $("#btn_add_applicant").show();
                }
    
                
            }else if(relation0 == '01'){
    
                if(len >= '4'){
    
                    $("#btn_add_applicant").hide();
                }else{
    
                    $("#btn_add_applicant").show();
    
                }
    
                var count = document.getElementsByClassName('kira');
                    var len = count.length;
                    for (var j=0; j<len; j++) {
    
                        var val = count[j].value;
                            if (val !== '0'){
    
                                var relation = $('#relation'+val).val();
                                if(relation == '01'){
    
                                    $('#relation'+val).prop('disabled', true);
    
                                }
                                
                            }
    
                    }
    
            }
        
    }
    
    </script>