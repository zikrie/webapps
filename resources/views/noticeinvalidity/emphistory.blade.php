<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="/emphistory" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('pensionDetails.employment_info')</h5>
                        <hr>
                        @if(Session::get('msgemphist')) 
                        <div class="card-footer">
    
                            <div class="alert alert-warning">
                                {{Session::get('msgemphist')}}
                            </div>
    
                        </div>
                        @elseif (!empty($msgemphist))
                        <div class="card-footer">
    
                            <div class="alert alert-warning">
                                {{$msgemphist}}
                            </div>
    
                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="table-responsive">
                                        <table id="table_add_emp_info" class="table table-bordered" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width: 5%;align-self: center'>@lang('pensionDetails.attr.num')</th>
                                                    <th style='width: 20%;align-self: center'>@lang('pensionDetails.attr.employer_name')</th>
                                                    <th style='width: 25%;align-self: center'>@lang('pensionDetails.attr.employer_address')</th>
                                                    <th style='width: 15%;align-self: center'>@lang('pensionDetails.attr.period')</th>
                                                    <th style='width: 20%;align-self: center'>@lang('pensionDetails.attr.occupation')</th>
                                                    <th style='width: 15%;align-self: center'>@lang('pensionDetails.attr.monthly_wages')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                                @if (empty($empinfo))
                                                    <?php $cnt = 5; ?>
                                                    @for ($i = 0; $i < $cnt; $i++)
                                                    <tr data-expanded="true">
                                                        <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                        <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="" class="form-control"></textarea></td>
                                                        <td><textarea type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control"></textarea></td>
                                                    </tr>
                                                    @endfor
                                                @else
                                                    <?php $cnt = 5; $i = 0; ?>
                                                    @foreach ($empinfo as $emp)
                                                    <tr data-expanded="true">
                                                            <td><input type="hidden" value="{{$i}}">{{$i+1}}</td>
                                                        <td><textarea type="text" id="empname[{{$i}}]" name="empname[{{$i}}]" value="" class="form-control">{{$emp->empname}}</textarea></td>
                                                        <td><textarea type="text" id="empadd[{{$i}}]" name="empadd[{{$i}}]" value="" class="form-control">{{$emp->empadd}}</textarea></td>
                                                        <td><textarea type="text" id="duration[{{$i}}]" name="duration[{{$i}}]" value="" class="form-control">{{$emp->duration}}</textarea></td>
                                                        <td><textarea type="text" id="designation[{{$i}}]" name="designation[{{$i}}]" value="" class="form-control">{{$emp->designation}}</textarea></td>
                                                        <td><textarea type="text" id="wages[{{$i}}]" name="wages[{{$i}}]" value="" class="form-control">{{$emp->salary}}</textarea></td>
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
                                                        <td><textarea type="text" id="wages[{{$j}}]" name="wages[{{$j}}]" value="" class="form-control"></textarea></td>
                                                    </tr>
                                                    @endfor
                                                    
                                                @endif
                                                
                                                {{-- @endforeach
                                                @endforeach
                                                @endif --}}

                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                                
                        <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.cancel')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('odDetails.clear')</button-->
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        @lang('odDetails.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-secondary"
                                id="add_emp_info">ADD EMPLOYMENT INFO</button>
                    </div>
                    <br/>
                   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
