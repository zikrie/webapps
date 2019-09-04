<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/accsave" method="POST">    
                    
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
                    <input type='hidden' name='caserefno' id='caserefno' value=''>
                    <input type="hidden" name="_token" value="">
                    <div class="row p-t-20">
                        <!--/span-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('scheme/preparer.attr.preparedBy')</label>
                                <input type="text" class="form-control clearFields" name="city"  value="">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <!--/span-->
                        <div class="col-md-12 col-lg-4">
                            <div class="form-group">
                                <label>@lang('scheme/preparer.attr.preparedDate')</label>
                                <input type="date" class="form-control clearFields" name="origin"  value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.next')</button>
                    </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>