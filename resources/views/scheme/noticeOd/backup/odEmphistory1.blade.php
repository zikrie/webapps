<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/odemphistory" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('scheme/odDetails.emphistory_title')</h5>
                        <hr>
                        @if(Session::get('msgodemphist')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('msgodemphist')}}
                            </div>

                        </div>
                        @elseif (!empty($msgodemphist))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$msgodemphist}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    <label>@lang('scheme/odDetails.attr.nameAddress')</label>
                                    <div class="table-responsive">
                                        <table id="table_add_emp_od" class="table table-bordered attendtable" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th data-breakpoints="xs">@lang('scheme/odDetails.attr.num')</th>
                                                    <th>@lang('scheme/odDetails.attr.employer_name')</th>
                                                    <th>@lang('scheme/odDetails.attr.employer_address')</th>
                                                    <th>@lang('scheme/odDetails.attr.period')</th>
                                                    <th data-breakpoints="xs sm">@lang('scheme/odDetails.attr.designation')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if (!empty($odempinfo))
                                                @foreach ($odempinfo as $odemp)
                                                @foreach ($odemp->odempinfo as $od) --}}
                                                
                                                @if (empty($odempinfo))
                                                <?php $cnt = 3; ?>
                                                @for ($i = 0; $i < $cnt; $i++)
                                                <tr data-expanded="true" id="div_employer">
                                                    <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                    <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control"></textarea></td>
                                                    <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control"></textarea></td>
                                                    <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="" class="form-control"></textarea></td>
                                                    <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="" class="form-control"></textarea></td>
                                                </tr>
                                                @endfor
                                                @else
                                                <?php $cnt = 3; $i = 0; ?>
                                                @foreach ($odempinfo as $odemp)
                                                <tr data-expanded="true">
                                                    <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                    <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control">{{$odemp->empname}}</textarea></td>
                                                    <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control">{{$odemp->empadd}}</textarea></td>
                                                    <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="" class="form-control">{{$odemp->duration}}</textarea></td>
                                                    <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="" class="form-control">{{$odemp->designation}}</textarea></td>
                                                </tr>
                                                <?php $i++; ?>
                                                @endforeach
                                                @for ($j = $i; $j < $cnt; $j++)
                                                <tr data-expanded="true">
                                                    <td><input type="hidden" value="{{$j}}">{{$j+1}}</td>
                                                    <td><textarea type="text" id="empname[{{$j}}]" name="empname[{{$j}}]" value="" class="form-control"></textarea></td>
                                                    <td><textarea type="text" id="empadd[{{$j}}]" name="empadd[{{$j}}]" value="" class="form-control"></textarea></td>
                                                    <td><textarea type="text" id="duration[{{$j}}]" name="duration[{{$j}}]" value="" class="form-control"></textarea></td>
                                                    <td><textarea type="text" id="designation[{{$j}}]" name="designation[{{$j}}]" value="" class="form-control"></textarea></td>
                                                </tr>
                                                @endfor

                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary"
                                id="add_emp_od">@lang('scheme/odDetails.attr.add_employer_info')</button>
                            </div>
                        </div>

                        <div class="form-actions">
                                {{-- <button data-toggle="tab" href="#odinfo" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextOdInfo">@lang('insuredPerson.next')</button> --}}
                                <button type="submit" class="btn waves-effect waves-light btn-success">
                                        @lang('scheme/insuredPerson.save')</button>
                                {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-previousEmpDetails">@lang('insuredPerson.previous')</button> --}}
                                {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
