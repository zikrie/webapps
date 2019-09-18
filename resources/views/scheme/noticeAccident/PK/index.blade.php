@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
<link href="{{ asset("bower_components/footable/css/footable.standalone.min.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">@lang('form/scheme.general.tab_title.accident_notice')</h4>
            <!-- Nav tabs -->
            <ul class="nav customtab" role="tablist" id="tabMenu">
                {{-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#remarks" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.remarks')</span></a> </li> --}}
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#claim" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">@lang('form/scheme.general.tab_title.claim')</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#upload" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span  class="hidden-xs-down">@lang('form/scheme.general.tab_title.supporting_document')</span></a> </li>
            </ul>
	    <!-- Tab panes -->
            <div class="tab-content tabcontent-border">
               
                <div class="tab-pane p-20 active" id="claim" role="tabpanel">
                        @include('scheme.noticeAccident.PK.collapse')
                </div>
                <div class="tab-pane p-20" id="upload" role="tabpanel">
                        @include('scheme.noticeAccident.PK.collapse_upload')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<script>
        //redirect to specific tab
        $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
</script>

<script>
        function placeacc(){
                
                        var accdwhen = $("#placeaccd").val();
                        //alert(accdwhen);
                        $('#descen').find('option').not(':first').remove();
                if (accdwhen){  

                $.ajax({ 
                url: '/reftable/'+accdwhen,
                type: 'GET',
                dataType: 'json',
                success: function(data){
        //            console.log(data);

                var len = 0;
                if(data != null){
                len = data.length;
                }   

                if(len > 0){
                $("#accwhen").empty();
                for(var i=0; i<len; i++){

                        var id = data[i].refcode;
                        var name = data[i].descen; 
                        
                        var option ="<option value='"+id+"'>"+name+"</option>";

                        $("#accwhen").append(option);
                }
                }   
                        
                        }

                        }); 
                }
        }
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

