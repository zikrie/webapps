<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <h3 class="card-title">@lang('scheme/invalidityPension.title')</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                 <label class="control-label">@lang('scheme/invalidityPension.attr.payment_hist')</label>
                                 <input type="text" name="payment_hist" id="payment_hist" class="form-control">
                             </div>
                         </div>

                         <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/invalidityPension.attr.els')</label>
                                <input type="text" name="els" id="els" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/invalidityPension.attr.notice_date')</label>
                                <input type="date" name="notice_date" id="notice_date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-4">
                            <div class="form-group">
                             <label class="control-label">@lang('scheme/invalidityPension.attr.debtor')</label>
                             <input type="text" name="debtor" id="debtor" class="form-control">
                         </div>
                     </div>
                 </div>
                 <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('scheme/insuredPerson.save')</button>
                </div>              
            </form>
        </div>
    </div>
</div>
</div>
</div>