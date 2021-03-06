<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#" id="reset">
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> @lang('scheme/socso.attr.state')</label>
                                <select name="state1" id="state1" class="form-control" onchange="statechange()" required> --}}
                                    {{-- <input type="text" name="state1" id="state1" class="form-control clearFields" value=""> --}}
                                    @foreach($state as $S)
                                    @if (!empty($confirmation) && $confirmation->statecode == $S->refcode)
                                    <option value="{{$S->refcode}}" selected>{{$S->descen}}</option>
                                    @else
                                    <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                         <div class="form-group">
                            <label>@lang('scheme/socso.attr.preferred_socso_branch')</label>
                            <input type="text" name="brname" id="brname" class="form-control clearFields" value="">
                            {{-- <select name="brname" id="brname" class="form-control" onchange='fieldchange()' required>
                                <option value=""></option>
                                @foreach($branch as $B)
                                @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                @else
                                <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                @endif
                                @endforeach
                            </select> --}}
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <!--/span-->
                </div>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Origin</label>
                            <input type="text" name="scheme_ref_no" id="scheme_ref_no" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Current</label>
                            <input type="text" name="typeOfScheme" id="typeOfScheme" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    function submitform(){
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>

                   