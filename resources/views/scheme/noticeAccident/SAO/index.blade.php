@extends('general.layouts.app')

@section('content')
{{-- <div class="col-md-12"><br> --}}
	<div class="card-body p-b-0">
		<h4 class="card-title">@lang('scheme/index.attr.accident_notice')</h4>
		<!-- Nav tabs -->
		<ul class="nav customtab" role="tablist">
			<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.remarks')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#claimDetails" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.claimDetails')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inconsistency" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.investigation_detail')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#queryOpinion" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.queryOpinion')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#recommend" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('scheme/index.attr.recommendation')</span></a> </li>
			<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploadDocuments_SCO" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> @lang('scheme/index.attr.supporting') </span></a> </li>
		</ul><br>
		<div class="row" id="rowindex">
			<div class="col-md-12">
				   <div class="card text-left" id="cardindex">
						  <div class="card-body" id="cardbody">
								 <table>
										<thead>
										<tr>
											   <td><span class="no_bold">@lang('scheme/index.attr.name')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.idno')</span></td>
										</tr>
										<tr>
											   <td><label class="no_margin">Putri Nor Shamiera Natasha Binti Azizan Shah - 940117015674</label></td>
										</tr>
										<tr>
											   <td><label></label></td>
										</tr>
										
										<tr>
											   <td><span class="no_bold">@lang('scheme/index.attr.schemerefno')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.dash')</span>&nbsp; <span class="no_bold">@lang('scheme/index.attr.accident_date')</span></td>
										</tr>
										<tr>
											   <td><label class="no_margin">A31NTK0720190001 - 31/01/2018</label></td>
										</tr>
										</thead>
								 </table>
						  </div>
				   </div>
			</div>
	 	</div>
		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane p-20 active" id="remarks" role="tabpanel">
				@include('scheme.noticeAccident.SCO.remarks')
			</div>
			<div class="tab-pane p-20" id="claimDetails" role="tabpanel">
				@include('scheme.noticeAccident.SAO.collapse')
			</div>
			<div class="tab-pane p-20" id="inconsistency" role="tabpanel">
				@include('scheme.noticeAccident.IO.collapse_investigation')
			</div>
			<div class="tab-pane p-20" id="queryOpinion" role="tabpanel">
				@include('scheme.noticeAccident.IO.collapse_query')
			</div>
			<div class="tab-pane p-20" id="recommend" role="tabpanel">
				@include('scheme.noticeAccident.SAO.collapse_rec')
			</div>
			<div class="tab-pane p-20" id="uploadDocuments_SCO" role="tabpanel">
				@include('scheme.noticeAccident.SCO.collapse_upload')
			</div>
		</div>
	</div>
{{-- </div> --}}

<script>
        //redirect to specific tab
        $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
</script>

<script>
        //redirect to specific tab
        $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
        
        $(document).ready(function(){
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function(){
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });
            
            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });
        
</script>
@endsection