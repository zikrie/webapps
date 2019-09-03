@extends('common.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')

@endsection

@section('content')

<!-- Column -->

<div class="col-12">
    <div class="card card-body">
        <h4 class="card-title">@lang('scheme/home.task')</h4>
        <div class="message-box">
            <div class="message-widget">
                <!-- Message -->

                {{--<div class="row p-t-20">--}}

                {{--<div class="col-md-3">
                        <div class="form-group">
                                <label class="control-label"><h3>@lang('scheme/home.search')</h3></label>
                            </div>
                </div>--}}

               
                
                <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-info"><i class="fas fa-list fa-lg"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">@if (empty($workbasket)){{0}}@else{{count($workbasket)}}@endif</h3>
                                    <h5 class="text-muted m-b-0">@lang('scheme/home.draft')</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-warning"><i class="far fa-hand-point-left fa-lg"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">@lang('scheme/home.query')</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #d8e8e9;">
                            <div class="d-flex flex-row">
                                <div class="round align-self-center round-success"><i class="far fa-clock fa-lg"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0">0</h3>
                                    <h5 class="text-muted m-b-0">Pending</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
                
            <div class="row p-t-20">
                
                <div class="col-md-4">
                    <div class="input-group col-12">
                    <label for="example-text-input" class="col-form-label">Date</label>
                    </div>
                    <div class="input-group col-12">
                        <input class="form-control" type="date" id="date">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                   
                </div>

                <div class="col-md-4">
                    <div class="input-group col-12">
                    <label for="example-text-input" class="col-form-label">SCHEME REF NO</label>
                    </div>
                    <div class="input-group col-12">
                        <input class="form-control" type="text" id="schemerefno">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group col-12">
                    <label for="example-text-input" class="col-form-label">ID NO</label>
                    </div>
                    <div class="input-group col-12">
                        <input class="form-control" type="text" id="idno">
                        <div class="input-group-append">
                            <span class="input-group-text" style="background-color: #d8e8e9;;"><i
                                    class="ti-search"></i></span>
                        </div>
                    </div>
                   
                </div>
                
                
            </div> <br><br>
            


            <div class="col-12">
                <div class="card">

                    <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>@lang('scheme/home.select')</th>
                                @if (Session::get('loginrole')== 'PK')
                                <th>@lang('scheme/home.delete')</th>
                                @endif
                                <th>@lang('scheme/home.no')</th>
                                <th>@lang('scheme/home.date')</th>
                                <th>@lang('scheme/home.desc')</th>
                                <th>@lang('scheme/home.aging')</th>
                                <th>@lang('scheme/home.noticetype')</th>
                                <th style='display: none'>@lang('scheme/home.caserefno')</th>
                                <th style='display: none'>noticetype</th>
                                <th>@lang('scheme/home.idno')</th>
                                <th>@lang('scheme/home.scheme_ref_no')</th>
                                <th>@lang('scheme/home.case_id')</th>
                                <th>@lang('scheme/home.revision_ref_no')</th>
                                <th>@lang('scheme/home.med_ref_no')</th>
                                <th>@lang('scheme/home.rtw_ref_no')</th>

                            </tr>
                        </thead>

                        <tbody class='align-middle'>
                            @if (!empty($workbasket))
                            @if (count($workbasket) == 0)
                            <td>No record</td>
                            @else
                            @foreach ($workbasket as $wb)
                            <tr>

                                <td><a id='selectdraft' href='/getnotice?caserefno={{$wb['caserefno']}}&casetype={{$wb['noticetype']}}&wbid={{$wb['wbid']}}'><i class="fas fa-edit"></i></a></td>
                                
                                @if (Session::get('loginrole')== 'PK')
                                @if ($wb['status'] == '01'){{--draft--}}
                                <td><a id="deletedraft" onclick="return confirm('Are you sure want to delete the draft?');" href='/deletedraft?caserefno={{$wb['caserefno']}}&wbid={{$wb['wbid']}}'><i class="fas fa-trash-alt fa-sm"></i></a></td>
                                @else
                                <td></td>
                                @endif
                                @endif
                                <td>{{ $wb['wbid'] }}</td>
                                <td>{{substr($wb['date'],6,2)}}-{{substr($wb['date'],4,2)}}-{{substr($wb['date'],0,4)}}</td>
                                <td>{{ $wb['descen'] }}</td>
                                <td><?php 
                                $wbdate = DateTime::createFromFormat('Ymd', $wb['date']);
                                $currdate = new DateTime();
                                $difference = $currdate->diff($wbdate);
                                echo ($difference->d);
                                ?></td>
                                <td>{{ $wb['noticetypedesc'] }}</td>
                                <td style='display: none'>{{ $wb['caserefno'] }}</td>
                                <td style='display: none'>{{ $wb['noticetype'] }}</td>
                                <td>{{ $wb['idno'] }}</td>
                                <td>{{ $wb['schemerefno'] }}</td>
                                <td>{{ $wb['caseid']}}</td>
                                <td>{{ $wb['revisionrefno'] }}</td>
                                <td>{{ $wb['medrefno'] }}</td>
                                <td>{{ $wb['rtwrefno'] }}</td>


                            </tr>
                            @endforeach
                            @endif
                            @else
                            
                            
                            @endif
                        </tbody>
                    </table>
                                            
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script>
    /*
 $('#tblwb').DataTable({
 language: {
 paginate: {
 next: '<img src="path/to/arrow.png">',
 previous: '<i class="fa fa-fw fa-long-arrow-left">'  
}
 },
 "bPaginate": true,
 "bLengthChange": false,
  "columnDefs": [
   { "targets": 0, "orderable": true },
    { "targets": 1, "orderable": false },
     { "targets": 2, "orderable": false }

    ],
   "bFilter": true,
    "bInfo": false,
   "bAutoWidth": false,
   "searching": false,
     "scrollX": true
});*/
</script>


        @endsection
