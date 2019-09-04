<div class="row">
   <div class="col-lg-12">
       <div class="card">
           <div class="card-body">
               <form action="#">
                   <div class="form-body">
                       
                       {{-- <h5 class="card-title">@lang('scheme/wages.title')</h5>
                       <hr> --}}

                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.minimum_wages')</label>
                                   <select class="form-control clearFields" name="minimumwages">
                                           <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                           <option selected hidden readonly value="please select">@lang('scheme/noticetype.attr.please_select')</option>
                                           {{-- @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                           <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                           <option value='N'>@lang('accidentDetails.no')</option>
                                           @elseif (!empty($accinfo) && $accinfo->accwork == 'N') --}}
                                           <option value='Y' >@lang('option.yes')</option>
                                           <option value='N' selected>@lang('option.no')</option>
                                           {{-- @else
                                           <option value='Y'>@lang('accidentDetails.yes')</option>
                                           <option value='N'>@lang('accidentDetails.no')</option>
                                           @endif --}}
                                   </select>
                               </div>
                           </div>
                       </div>
                       <h5 class="card-title">@lang('form/scheme.general.collapse.similar.title')</h5>
                       <hr>
                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.similar_worker')</label>
                                   <select class="form-control clearFields" name="similar" id="similar">
                                           <!--option value="">@if(!empty($accinfo)){{$accinfo->accwork}} @endif</option-->
                                           <option selected hidden readonly value="please select">@lang('option.please_select')</option>
                                           {{-- @if (!empty($accinfo) && $accinfo->accwork == 'Y')
                                           <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                           <option value='N'>@lang('accidentDetails.no')</option>
                                           @elseif (!empty($accinfo) && $accinfo->accwork == 'N') --}}
                                           <option value='Y' >@lang('option.yes')</option>
                                           <option value='N' selected>@lang('option.no')</option>
                                           {{-- @else
                                           <option value='Y'>@lang('accidentDetails.yes')</option>
                                           <option value='N'>@lang('accidentDetails.no')</option>
                                           @endif --}}
                                       </select>
                               </div>
                           </div>
                           {{-- <div class="col-md-4">
                                   <div class="form-group"><br>
                                       <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">@lang('scheme/ob.addNotification')</button>
                                   </div>
                               </div> --}}
                               <div class="modal fade" id="similarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                   <div class="modal-dialog modal-xl" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header  card-title">
                                               <h6 class="card-title-sub" id="exampleModalLabel1">@lang('form/scheme.general.collapse.similar.title')</h6>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           </div>
                                           <div class="modal-body">
                                               <div class="row p-t-20">
                                                   <div class="col-md-4">
                                                       <div class="form-group">
                                                           <label class="control-label">@lang('form/scheme.general.collapse.wages.empcode')</label>
                                                           <input type="text" id="empcode" name="empcode" value="" class="form-control">
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-md-4">
                                                       <div class="form-group">
                                                           <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_idtype')</label>
                                                           <select class="form-control">
                                                               {{-- <option>@lang('insuredPerson.attr.choose_id_type')</option> --}}
                                                               <option value="">@lang('form/scheme.general.collapse.similar.attr.new_ic')</option>
                                                               <option value="">@lang('form/scheme.general.collapse.similar.attr.old_ic')</option>
                                                               <option value="">@lang('form/scheme.general.collapse.similar.attr.army_id')</option>
                                                               <option value="">@lang('form/scheme.general.collapse.similar.attr.police_id')</option>
                                                               <option value="">@lang('form/scheme.general.collapse.similar.attr.ssn_id')</option>
                                                               <option value="">@lang('form/scheme.general.collapse.similar.attr.cid')</option>
                                                           </select>
                                                       </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                       <div class="form-group">
                                                        <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_id')</label>
                                                        <input type="text" id="similar_empcode" class="form-control">
                                                    </div>
                                                </div>
                                               </div>
   
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                               <button type="button" class="btn btn-primary" id="btn_search">Search</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                   <!-- /.modal -->
                           </div>
                       </div>

                       <div id="accordion1" role="tablist" aria-multiselectable="true">
                       <div class="card m-b-0">
                       <div class="card-header" role="tab" id="headingwages">
                                   <h6 class="mb-0">
                                       <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#collapsewages" aria-expanded="true" aria-controls="collapse">
                                         @lang('form/scheme.general.collapse.wages.employer_info')
                                     </a>
                                 </h6>
                             </div>

                       <div id="collapsewages" class="collapse show" role="tabpanel" aria-labelledby="headingwages">
                       <div class="card-body">
                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.empcode')</label>
                                   <input type="text" id="empcode" name="empcode" value="" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.company_name')</label>
                                   <input type="text" id="empname" name="empname" value="" class="form-control" >
                               </div>
                           </div>   
                       </div>
                       <div class="row p-t-20">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.commencement_date')</label><span class="required">*</span>
                                   <input type="date" class="form-control" required>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.end_date')</label>
                                   <input type="date" class="form-control">
                               </div>
                           </div>
                       </div>
                           {{-- <div class="col-md-4">
                               <div class="form-group">
                                   <label>@lang('accidentDetails.attr.are_wagesPaid')</label>
                                   <select class="form-control" name="wagespaid"> --}}
                                           {{-- <option value="">@if(!empty($accinfo)){{$accinfo->wagespaid}} @endif</option> --}} 
                                           
                                           {{-- <option>Please select</option>
                                           @if (!empty($accinfo) && $accinfo->wagespaid == 'Y')
                                           <option value='Y' selected>@lang('accidentDetails.yes')</option>
                                           <option value='N'>@lang('accidentDetails.no')</option>
                                           @elseif (!empty($accinfo) && $accinfo->wagespaid == 'N')
                                           <option value='Y' >@lang('accidentDetails.yes')</option>
                                           <option value='N' selected>@lang('accidentDetails.no')</option>
                                           @else
                                           <option value='Y'>@lang('accidentDetails.yes')</option>
                                           <option value='N'>@lang('accidentDetails.no')</option>
                                           @endif
                                       </select>
                               </div>
                           </div> --}}
                       <!-- Column -->
                       <div class="row p-t-20">
                           <div class="col-12">
                               <div class="card">
                                   <label>@lang('form/scheme.general.collapse.wages.details_wages_accd')</label>
                                   <div class="table-responsive">
                                       <table id="demo-foo-row-toggler" class="table table-bordered"
                                           data-toggle-column="first">
                                           <thead>
                                               <tr>
                                                   <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('form/scheme.general.collapse.wages.num')</th>
                                                   <th style='width:9%' class="text-center">@lang('form/scheme.general.collapse.wages.year')</th>
                                                   <th style='width:16%' class="text-center">@lang('form/scheme.general.collapse.wages.month')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.wages')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_paid')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_payable')</th>
                                                   {{-- <th style='width:15%' class="text-center">@lang('wages.attr.contribution')</th> --}}
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_surplus')</th>
                                                   <th style='width:5%' class="text-center">@lang('form/scheme.general.collapse.wages.accept')</th>
                                                   <th style='width:20%' class="text-center">@lang('form/scheme.general.collapse.wages.reason')</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr data-expanded="true">
                                                   <td>1</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       {{-- <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                           <label class="custom-control-label" for="customCheck1"></label>
                                                       </div> --}}
                                                   </td>
                                                   <td></td>

                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>2</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')</option>
                                                               <option value="February"> @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')</option>
                                                               <option value="April">@lang('form/month.april')</option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')</option>
                                                               <option value="July">@lang('form/month.july')</option>
                                                               <option value="August">@lang('form/month.august')</option>
                                                               <option value="September"> @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')</option>
                                                               <option value="November"> @lang('form/month.november')</option>
                                                               <option value="December"> @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       {{-- <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                           <label class="custom-control-label" for="customCheck2"></label>
                                                       </div> --}}
                                                   </td>
                                                   <td></td>
                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>3</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <input type="text" id="year" name="year" value="" class="form-control">
                                                       {{-- <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                           <label class="custom-control-label" for="customCheck3"></label>
                                                       </div> --}}
                                                   </td>
                                                   <td></td>
                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>4</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       {{-- <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                           <label class="custom-control-label" for="customCheck4"></label>
                                                       </div> --}}
                                                   </td>
                                                   <td></td>
                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>5</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('wages.attr.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('wages.attr.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td><input type="text" id="year" name="year" value="" class="form-control">
                                                       {{-- <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                           <label class="custom-control-label" for="customCheck5"></label>
                                                       </div> --}}
                                                   </td>
                                                   <td></td>
                                               </tr>   
                                               <tr data-expanded="true">
                                                   <td>6</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')</option>
                                                               <option value="August">@lang('form/month.august')</option>
                                                               <option value="September">@lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')</option>
                                                               <option value="November">@lang('form/month.november')</option>
                                                               <option value="December">@lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td><input type="text" id="year" name="year" value="" class="form-control">
                                                       {{-- <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                           <label class="custom-control-label" for="customCheck6"></label>
                                                       </div> --}}
                                                   </td>
                                                   <td></td>
                                               </tr>    
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                       <div class="row">
                           <div class="col-md-12">
                               <div class="form-group">
                                   <label class="control-label">@lang('form/scheme.general.collapse.wages.remarks')</label>
                                   <textarea type="text" id="remarks" name="remarks" class="form-control"></textarea>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="similar_work" id="similar_work">
                   @include('scheme.noticeDeath.SCO.similar')
               {{-- <h5 class="card-title">@lang('form/scheme.general.collapse.similar.title')</h5>
                   <hr>
                    <div class="row p-t-20">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_idtype')</label>
                                       <select class="form-control">
                                           <option value="">@lang('form/scheme.general.collapse.similar.attr.new_ic')</option>
                                           <option value="">@lang('form/scheme.general.collapse.similar.attr.old_ic')</option>
                                           <option value="">@lang('form/scheme.general.collapse.similar.attr.army_id')</option>
                                           <option value="">@lang('form/scheme.general.collapse.similar.attr.police_id')</option>
                                           <option value="">@lang('form/scheme.general.collapse.similar.attr.ssn_id')</option>
                                           <option value="">@lang('form/scheme.general.collapse.similar.attr.cid')</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group">
                                      <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_id')</label>
                                       <input type="text" id="similar_empcode" class="form-control">
                                   </div>
                               </div>
                           </div>
                       
                               <div class="row p-t-20">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                       <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_name')</label>
                                       <input type="text" name="similarName" id="similarName" class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <div class="row p-t-20">
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_empcode')</label>
                                               <input type="text" id="similar_empcode" class="form-control">
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_empname')</label>
                                               <input type="text" id="similar_empname" class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <div class="row p-t-20">
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_startdate')</label>
                                           <input type="date" name="similar_startdate" id="similar_startdate" class="form-control">
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="form-group">
                                           <label class="control-label">@lang('form/scheme.general.collapse.similar.attr.similar_enddate')</label>
                                               <input type="date" name="similar_enddate" id="similar_enddate" class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <!-- Column -->
                       <div class="row p-t-20">
                           <div class="col-12">
                               <div class="card">
                                   <label>@lang('form/scheme.general.collapse.wages.details_wages_accd')</label>
                                   <div class="table-responsive">
                                       <table id="demo-foo-row-toggler" class="table table-bordered"
                                           data-toggle-column="first">
                                           <thead>
                                               <tr>
                                                   <th style='width:1%' data-breakpoints="xs" class="text-center">@lang('form/scheme.general.collapse.wages.num')</th>
                                                   <th style='width:9%' class="text-center">@lang('form/scheme.general.collapse.wages.year')</th>
                                                   <th style='width:16%' class="text-center">@lang('form/scheme.general.collapse.wages.month')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.wages')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_paid')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_payable')</th>
                                                   <th style='width:15%' class="text-center">@lang('form/scheme.general.collapse.wages.contribution_surplus')</th>
                                                   <th style='width:5%' class="text-center">@lang('form/scheme.general.collapse.wages.reject')</th>
                                                   <th style='width:20%' class="text-center">@lang('form/scheme.general.collapse.wages.reason')</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr data-expanded="true">
                                                   <td>1</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                           <label class="custom-control-label" for="customCheck1"></label>
                                                       </div>
                                                   </td>
                                                   <td></td>

                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>2</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                           <label class="custom-control-label" for="customCheck2"></label>
                                                       </div>
                                                   </td>
                                                   <td></td>
                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>3</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                           <label class="custom-control-label" for="customCheck3"></label>
                                                       </div>
                                                   </td>
                                                   <td></td>
                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>4</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                           <label class="custom-control-label" for="customCheck4"></label>
                                                       </div>
                                                   </td>
                                                   <td></td>
                                               </tr>  
                                               <tr data-expanded="true">
                                                   <td>5</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('wages.attr.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('wages.attr.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                           <label class="custom-control-label" for="customCheck5"></label>
                                                       </div>
                                                   </td>
                                                   <td></td>
                                               </tr>   
                                               <tr data-expanded="true">
                                                   <td>6</td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                            <select class="form-control"
                                                               data-placeholder="Month" tabindex="2">
                                                               <option>@lang('option.please_select')</option>
                                                               <option value="January">@lang('form/month.january')
                                                               </option>
                                                               <option value="February">
                                                                   @lang('form/month.february')</option>
                                                               <option value="March">@lang('form/month.march')
                                                               </option>
                                                               <option value="April">@lang('form/month.april')
                                                               </option>
                                                               <option value="May">@lang('form/month.may')</option>
                                                               <option value="June">@lang('form/month.june')
                                                               </option>
                                                               <option value="July">@lang('form/month.july')
                                                               </option>
                                                               <option value="August">@lang('form/month.august')
                                                               </option>
                                                               <option value="September">
                                                                   @lang('form/month.september')</option>
                                                               <option value="October">@lang('form/month.october')
                                                               </option>
                                                               <option value="November">
                                                                   @lang('form/month.november')</option>
                                                               <option value="December">
                                                                   @lang('form/month.december')</option>
                                                           </select>
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="col-md-15">
                                                           <input type="text" id="year" name="year" value="" class="form-control">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="custom-control custom-checkbox">
                                                           <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                           <label class="custom-control-label" for="customCheck6"></label>
                                                       </div>
                                                   </td>
                                                   <td></td>
                                               </tr>    
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div> --}}
                       </div>
                       <br>
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

   <script>
       $(document).ready(function() {
           $("#similar").on("change", function () {        
             $modal = $('#similarModal');
             if($(this).val() === 'Y'){
               $modal.modal('show');
           }
       });
           $('#similar_work').hide();
           $("#btn_search").click(function (){
               $modal.modal('hide');
               $('#similar_work').show();
           });
       });
   </script>