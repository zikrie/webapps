@extends('common.layouts.app')

@section('maintitle', 'Tab Screen')

@section('desc', 'Form')

@section('head')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-body">
            <h4 class="card-title">@lang('scheme/index.attr.invalidity_notice')</h4>
            
            <!-- Nav tabs -->
            <ul class="nav customtab" role="tablist" id="tabMenu">
                
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" id="nav_obform" href="#collapse" role="tab"><span
                            class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">
                            @lang('scheme/index.attr.insured_details')</span></a> </li>

                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#uploaddoc" id="nav_uploaddoc" role="tab"><span
                            class="hidden-sm-up"><i class="ti-files"></i></span> <span class="hidden-xs-down">
                            @lang('scheme/index.attr.upload_documents')</span></a> </li> 

            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabcontent-border">

                <div class="tab-pane p-20 active" id="collapse" role="tabpanel">
                    @include('scheme.noticeInvalidity.pk.collapse')
                </div>

                <div class="tab-pane p-20" id="uploaddoc" role="tabpanel">
                    @include('scheme.common.uploadDoc')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- row -->
<script>
    //redirect to specific tab
    $(document).ready(function () {
        $("a#changeme").attr('href', 'http://maps.google.com/');
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show');
        $('#wages').click(function () {
            // $("a.wages").prop("href", "/obformilat")


        });
    });


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
    
 
    function placeacc() {

        var accdwhen = $("#placeaccd").val();
        //alert(accdwhen);
        $('#descen').find('option').not(':first').remove();
        if (accdwhen) {

            $.ajax({
                url: '/reftable/' + accdwhen,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    //            console.log(data);

                    var len = 0;
                    if (data != null) {
                        len = data.length;
                    }

                    if (len > 0) {
                        $("#accwhen").empty();
                        for (var i = 0; i < len; i++) {

                            var id = data[i].refcode;
                            var name = data[i].descen;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#accwhen").append(option);
                        }
                    }

                }

            });
        }
    }

</script>

@endsection
