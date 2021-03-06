<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="preparer" method="POST">
                      @csrf
                      @if(Session::get('msgpreparer')) 
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('msgpreparer')}}
                            </div>

                        </div>
                        @elseif (!empty($msgpreparer))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$msgpreparer}}
                            </div>
                        </div>
                        @endif
                        <div class="row p-t-20">
                          <div class="col-md-8">
                            <div class="form-group">
                             <label class="control-label">@lang('scheme/preparer.attr.preparedBy')</label>
                             <input type="text" name="name" id="name" class="form-control">
                            </div>
                          </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="control-label">@lang('scheme/preparer.attr.preparedDate')</label>
                                <input type="date" name="date" id="date" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                              <button type="submit" class="btn btn-success"> @lang('scheme/caseinfo.save')</button>
                          </div>
                              {{-- <button type="button" class="btn btn-danger">@lang('insuredPerson.cancel')</button>
                              <button type="button" class="btn btn-warning">@lang('insuredPerson.clear')</button> --}}
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
