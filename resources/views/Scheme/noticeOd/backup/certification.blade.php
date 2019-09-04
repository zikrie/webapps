<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="./noticeOd/certificateEmployer" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-body">
						<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">@lang('scheme/certification.attr.name')</label>
										<input type="text" id="name" name="name" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">@lang('scheme/certification.attr.designation')</label>
										<input type="text" id="designation" name="designation" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label class="control-label">@lang('scheme/certification.attr.date')</label>
										<input type="date" id="date" name="date" value="" class="form-control">
									</div>
								</div>
							</div>

					<div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/insuredPerson.save')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('scheme/noticetype.back')</button>
                </div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Row -->
</div>