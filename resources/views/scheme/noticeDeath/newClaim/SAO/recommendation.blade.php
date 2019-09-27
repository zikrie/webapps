<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                                {{-- <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/scoRecommend.attr.case_status')</label>
                                                <select class="form-control">
                                                    <option>@lang('scheme/scoRecommend.attr.approved')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.investigation')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.new')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.close_payment')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.close_wo_payment')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.not_approved')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.inquiry')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.not_finished')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.request')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.in_process')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.appeal_jdr')</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/scoRecommend.attr.question_1')</label><span class="required">*</span>
                                            <select class="form-control" required>
                                                <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/scoRecommend.attr.question_2')</label><span class="required">*</span>
                                            <select class="form-control" required>
                                                <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label class="control-label">@lang('scheme/scoRecommend.attr.question_3')</label><span class="required">*</span>
                                        <select class="form-control" required>
                                                <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>   
                                </div>    
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/scoRecommend.attr.question_4')</label><span class="required">*</span>
                                        <select class="form-control" required>
                                            <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                            <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                        </select>
                                    </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label class="control-label">@lang('scheme/scoRecommend.attr.question_5')</label><span class="required">*</span>
                                            <select class="form-control" required>
                                                <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/scoRecommend.attr.system_recommend')</label>
                                                <input type="text" name="system_recommend" id="system_recommend" class="form-control">
                                    </div>
                                </div>
                               {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/scoRecommend.attr.scheme_by')</label>
                                            <input type="text" name="scheme_by" id="scheme_by" class="form-control">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">SPI Eligible</label>
                                        <input type="text" id="SPIEligible" name="SPIEligible" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Potential HUK</label>
                                        <input type="text" id="potentialHUK" name="potentialHUK" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Potential 96</label>
                                        <input type="text" id="potential96" name="potential96" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">SAO Approval</label>
                                        <select class="form-control" required>
                                            <option>@lang('option.yes')</option> 
                                            <option>@lang('option.no')</option> 
                                        </select>                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Reason Rejection</label>
                                        <input type="text" id="potentialHUK" name="potentialHUK" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Reason Close</label>
                                        <input type="text" id="potential96" name="potential96" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Is FPM case need to open?</label>
                                        <select class="form-control" required>
                                            <option>@lang('option.yes')</option> 
                                            <option>@lang('option.no')</option> 
                                        </select>                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Scheme Appproved Date</label>
                                        <input type="date" id="potentialHUK" name="potentialHUK" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Scheme Approved By</label>
                                        <input type="text" id="potential96" name="potential96" value="" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Opinion Type</label>
                                            <input type="text" id="potential96" name="potential96" value="" class="form-control" >                                   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">MS Opinion</label>
                                            <input type="text" id="potentialHUK" name="potentialHUK" value="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Date Received case from MOTION</label>
                                            <input type="date" id="potential96" name="potential96" value="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                    </div>
                                </div>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>