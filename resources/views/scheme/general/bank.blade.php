<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/bankinformation_od" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-body">
                        @if(Session::get('messagebank'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagebank')}}
                            </div>

                        </div>
                        @elseif (!empty($messagebank))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagebank}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/bank.attr.payment')</label>
                                    <select class="form-control" name='paymode' id='paymode' required>
                                        {{-- <option value=""></option>     --}}
                                        @foreach($optionpay as $opay)
                                        @if (!empty($bankinfo) && $bankinfo->paymode == $opay->refcode)
                                        <option value="{{$opay->refcode}}" selected >{{$opay->descen}}</option>
                                        @elseif(empty($bankinfo) && $opay->refcode =='02')
                                        <option value="{{$opay->refcode}}" selected> {{$opay->descen}} </option>
                                        @else
                                        <option value="{{$opay->refcode}}"> {{$opay->descen}} </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" id="bank_location">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/bank.attr.bank_location')</label>
                                    <select class="form-control select" id="bankloc" name='bankloc'
                                    onchange="myFunction()">
                                    @foreach($optionbank as $ob)
                                    @if (!empty($bankinfo) && $bankinfo->bankloc == $ob->refcode)
                                    <option value="{{$ob->refcode}}" selected>{{$ob->descen}}</option>
                                    @else
                                    <option value="{{$ob->refcode}}">{{$ob->descen}}</option>
                                    @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="bank_reason">
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/bank.attr.reason')</label>
                                        @if (!empty($bankinfo) && $bankinfo->accexist=='N')
                                        <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                        @else
                                        <select class="form-control select" name='reasonnoacc' id='reasonnoacc'>
                                        @endif
                                        @foreach($optionreason as $or)
                                        @if (!empty($bankinfo) && $bankinfo->reasonnoacc == $or->refcode)
                                        <option value="{{$or->refcode}}" selected>{{$or->descen}}</option>
                                        <option>@lang('scheme/bank.attr.senior')</option>
                                        <option>@lang('scheme/bank.attr.legal')</option>
                                        @else
                                        <option value="{{$or->refcode}}">{{$or->descen}}</option>
                                        @endif
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bank_eft">
                            <div id="local_bank">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.bank_name')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <select class="form-control selectLocalBank" name='bankcode' id='bankcode'>
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                                <select class="form-control selectLocalBank" name='bankcode'
                                                id='bankcode'>
                                                @else
                                                <select class="form-control selectLocalBank" name='bankcode'
                                                id='bankcode'>
                                                @endif

                                                @foreach($bankcode as $bc)
                                                @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                                $bankinfo->bankcode == $bc->refcode)
                                                <option value="{{$bc->refcode}}" selected>{{$bc->descen}}
                                                </option>
                                                @else
                                                <option value="{{$bc->refcode}}">{{$bc->descen}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.bank_accNo')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="{{$bankinfo->accno}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                            @else
                                            <input type="text" name="localaccno" id="localaccno" class="form-control selectLocalBank clearFields" value="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.type_acc')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='L' && $bankinfo->acctype)
                                            <select class="form-control selectLocalBank" name='localacctype'
                                            id='localacctype' value="{{$bankinfo->acctype}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <select class="form-control selectLocalBank" name='localacctype'
                                            id='localacctype' value="">
                                            @else
                                            <select class="form-control selectLocalBank" name='localacctype'
                                            id='localacctype'>
                                            @endif


                                            @foreach($accountype as $at)
                                            @if (!empty($bankinfo) && $bankinfo->bankloc == 'L' &&
                                            $bankinfo->acctype == $at->refcode)
                                            <option value="{{$at->refcode}}" selected>{{$at->descen}}
                                            </option>
                                            <option>@lang('scheme/bank.attr.joint')</option>
                                            @else
                                            <option value="{{$at->refcode}}">{{$at->descen}}</option>
                                            @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.bank_address')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                            @else
                                            <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="oversea_bank">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.bank_name')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->ovbankname)
                                            <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->ovbankname}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                            @else
                                            <input type="text" name="ovbankname" id="ovbankname" class="form-control selectOverseasBank clearFields" value="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.bank_accNo')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O' && $bankinfo->accno)
                                            <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->accno}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                            @else
                                            <input type="text" name="ovaccno" id="ovaccno" class="form-control selectOverseasBank clearFields" value="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.ov_type_acc')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <select class="form-control selectOverseasBank" name='ovacctype' id='ovacctype'>
                                                @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                                <select class="form-control selectOverseasBank" name='ovacctype'
                                                id='ovacctype'>
                                                @else
                                                <select class="form-control selectOverseasBank" name='ovacctype'
                                                id='ovacctype'>
                                                @endif

                                                @foreach($overseasbanktype as $ovt)
                                                @if (!empty($bankinfo) && $bankinfo->bankloc == 'O' &&
                                                $bankinfo->acctype == $ovt->refcode)
                                                <option value="{{$ovt->refcode}}" selected>{{$ovt->descen}}</option>
                                                <option>@lang('scheme/bank.attr.joint')</option>
                                                @else
                                                <option value="{{$ovt->refcode}}">{{$ovt->descen}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.country')</label>
                                            <input type="text" name="country" id="country" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.currency')</label>
                                            <input type="text" name="currency" id="currency" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.swift_code')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                            @else
                                            <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.bsb_code')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                            @else
                                            <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/bank.attr.ov_bank_address')</label>
                                            @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                            <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                            @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                            <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                            @else
                                            <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

{{-- 
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/bank.attr.country')</label>
                                    <input type="text" name="country" id="country" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/bank.attr.currency')</label>
                                    <input type="text" name="currency" id="currency" class="form-control">
                                </div>
                            </div>
                        </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/bank.attr.swift_code')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->swiftcode}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="swiftcode" id="swiftcode" class="form-control selectOverseasBank clearFields" value="">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/bank.attr.bsb_code')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bsbcode}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="bsbcode" id="bsbcode" class="form-control selectOverseasBank clearFields" value="">
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/bank.attr.bank_address')</label>
                                        @if (!empty($bankinfo) && $bankinfo->bankloc=='O')
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="{{$bankinfo->bankaddr}}">
                                        @elseif (!empty($bankinfo) && $bankinfo->bankloc=='L')
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                        @else
                                        <input type="text" name="ovbankaddr" id="ovbankaddr" class="form-control selectOverseasBank clearFields" value="">
                                        @endif

                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> --}}

                    {{-- <h3 class="box-title m-t-40">@lang('confirmation.bankrupt')</h3> --}}
                    {{-- <hr> --}}
                        {{-- <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.date_letter')</label>
                                        <input type="date" name="data_generated_carian_insolvensi" id="data_generated_carian_insolvensi" placeholder="dd/mm/yyyy"
                                        class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                        {{-- <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.insolvensy_add')</label>
                                        <input type="text" name="insolvensi" id="insolvensi" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                        {{-- <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.branch_insolvency')</label>
                                        <input type="text" name="branch" id="branch" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.cheque_no')</label>
                                        <input type="text" name="cheque_no" id="cheque_no" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.cheque_date')</label>
                                        <input type="date" name="cheque_date" id="cheque_date" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                        {{-- <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.nett_amount')</label>
                                        <input type="text" name="net_amount" id="net_amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('confirmation.attr.reason_no_ic')</label>
                                        <select class="form-control">
                                            <option selected disabled hidden>@lang('confirmation.choose1')</option>
                                            <option value="yes">IMM13</option>
                                            <option value="no">Indigenous People</option>
                                            <option value="no">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Account Bank Number</label>
                                        <input type="text" name="acc_bankNo" id="acc_bankNo" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                        {{--  <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Comments</label>
                                        <input type="text" name="comment" id="comment" class="form-control">
                                    </div>
                                </div>
                            </div>--}}

                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
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
    $('select[name=paymode]').change(function () {
    if (this.value == '02') {
        // alert('try');
        $('#bank_reason').hide();
        $('#bank_location').show();
        $('#bank_eft').show();
        
        var bankloc = $('#bankloc').val();
        if (bankloc == 'L')
        {
            $('#local_bank').show();
            $('#oversea_bank').hide();
        }
        else if (bankloc == 'O')
        {
            $('#local_bank').hide();
            $('#oversea_bank').show();
        }
    }
    else if (this.value == '01'){
      // alert('try');
        $('#bank_reason').show();
        $('#bank_location').hide();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#local_bank').hide();
    }
    else{
        $('#bank_reason').hide();
        $('#bank_location').hide();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#local_bank').hide();
    }
});
</script>


 {{--    // function accountexist() {
    //     var accexist = document.getElementById('accexist').value;
    //     if (accexist == 'Y') {
    //         document.getElementById('reasonnoacc').setAttribute('disabled', true);
    //     } else if (accexist == 'N') {
    //         document.getElementById('reasonnoacc').removeAttribute('disabled');
    //     }
    // }

    // function myFunction() {
    //     var objTo = document.getElementById('selectBank')

    //     if (objTo.value == 'L') {
    //         $('.selectOverseasBank').prop("disabled", true);
    //         $('.selectLocalBank').prop("disabled", false);

    //     } else if (objTo.value == 'O') {
    //         $('.selectLocalBank').prop("disabled", true);
    //         $('.selectOverseasBank').prop("disabled", false);

    //     }

    // }  --}}

