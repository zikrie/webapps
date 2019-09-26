<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <h5 class="card-title">@lang('scheme/report.title')</h5>
                    <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/report.attr.date')</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/report.attr.question_1')</label>
                                    <select class="form-control" id="question1" name="question1">
                                        <option value="" selected>@lang('scheme/report.attr.please_select')</option>
                                        <option value="Y">@lang('scheme/report.attr.yes')</option>
                                        <option value="N">@lang('scheme/report.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label">@lang('scheme/report.attr.question_2')</label>
                                    <select class="form-control" id="question2" name="question2">
                                        <option value="" selected>@lang('scheme/report.attr.please_select')</option>
                                        <option value="Y">@lang('scheme/report.attr.yes')</option>
                                        <option value="N">@lang('scheme/report.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label">@lang('scheme/report.attr.question_3')</label>
                                    <select class="form-control" id="question3" name="question3">
                                        <option value="" selected>@lang('scheme/report.attr.please_select')</option>
                                        <option value="Y">@lang('scheme/report.attr.yes')</option>
                                        <option value="N">@lang('scheme/report.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/report.attr.question_4')</label>
                                    <select class="form-control" id="question4" name="question4">
                                        <option value="" selected>@lang('scheme/report.attr.please_select')</option>
                                        <option value="Y">@lang('scheme/report.attr.yes')</option>
                                        <option value="N">@lang('scheme/report.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <label class="control-label">@lang('scheme/report.attr.question_5')</label>
                                    <select class="form-control" id="question5" name="question5">
                                        <option value="" selected>@lang('scheme/report.attr.please_select')</option>
                                        <option value="Y">@lang('scheme/report.attr.yes')</option>
                                        <option value="N">@lang('scheme/report.attr.no')</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/report.attr.system_recommend')</label>
                                    <textarea type="text" name="systemrecommend" id="systemrecommend" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/report.attr.wrong_benefit_type')</label>
                                    <select class="form-control">
                                       <option>@lang('scheme/report.attr.yes')</option> 
                                       <option>@lang('scheme/report.attr.no')</option> 
                                   </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/report.attr.recommend_date')</label>
                                    <input type="date" name="recommenddate" id="recommenddate" value="{{date('Y-m-d')}}" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                            @lang('scheme/insuredPerson.save')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>