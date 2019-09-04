<div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <form action="/accsave" method="POST">    
                          <h5 class="card-title">@lang('socso.title')</h5>
                          <hr>
                      
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
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label> @lang('socso.attr.state')</label>
                                  <select name="state1" id="state1" class="form-control clearFields" onchange="statechange()" required>
                                      {{-- @foreach($state as $S)
                                      @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                          <option value="{{$S->refcode}}" selected>{{$S->descen}}</option>
                                      @else
                                           <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                      @endif
                                      @endforeach --}}
                                  </select>
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>@lang('socso.attr.city')</label>
                                  <select name="brname" id="brname" class="form-control clearFields" onchange='fieldchange()' required>
                                      <option value=""></option>
                                      {{-- @foreach($branch as $B)
                                      @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                      <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                      @else
                                          <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                      @endif
                                          @endforeach --}}
                                  </select>
                              </div>
                          </div>
                          
                                {{ csrf_field() }}
                                <!--/span-->
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="control-label">@lang('socso.attr.origin')</label>
                            <input type="text" name="origin" id="origin" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> @lang('socso.attr.register_branch')</label>
                                <select name="regbranch" id="regbranch" class="form-control clearFields" required>
                                    {{-- @foreach($state as $S)
                                    @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                        <option value="{{$S->refcode}}" selected>{{$S->descen}}</option>
                                    @else
                                         <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                    @endif
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-actions">
                          <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                          <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                          <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('insuredPerson.save')</button>
                          <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('noticetype.reset')</button>
                          <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('noticetype.cancel')</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>