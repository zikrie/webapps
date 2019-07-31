// For select 2
$(".select2").select2();
$('.selectpicker').selectpicker();

$(document).ready(function () {
     $("#navbar_preview").hide();
    $("#others").hide();
    $('#bank_reason').hide();
    $('#bank_eft').hide();


$('select[name=mode_transport_other]').change(function () {
    if (this.value == 'others') {
        $("#others").prop('readonly', false);
        $("#others").show();


    } else {
        $("#others").prop('readonly', true);  
        $("#others").val('');
        $("#others").hide();
    }
});

//For Bank Info
$('select[name=paymode]').change(function () {
    if (this.value == '02') {
        $('#bank_reason').hide();
        $('#bank_eft').show();
        
        var bankloc = $('#bankloc').val();
        //alert(bankloc);
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
        $('#bank_reason').show();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#local_bank').hide();
    }
    else{
        $('#bank_reason').hide();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#local_bank').hide();
    }
});
$('select[name=bankloc]').change(function () {
    if (this.value == 'L') {
        $('#local_bank').show();
        $('#oversea_bank').hide();
    }
    else{
        $('#local_bank').hide();
        $('#oversea_bank').show();

    }
});

$("select[name=paymode]").each(function() {
        $(this).change();
    });

$("select[name=bankloc]").each(function() {
        $(this).change();
    });

//For GET BANK INFO (Preview Blade)
var preview_bank=$('#preview_bank').val();
var payment_method=$('#payment_method').val();
// alert(payment_method);
if(payment_method=='Cheque'){
   $('#bank_location').hide();
   $('#status_bai').hide();
   $('#bank_status').hide();
   $('#bank_code').hide();
   $('#bank_branch').hide();
   $('#bank_acc').hide();
   $('#bank_address').hide();
   $('#bank_acc_type').hide();
   $('#swiftcode').hide();
   $('#bsbcode').hide();   
   $('#bank_topic').hide();
   $('#have_acc_bank').hide();
   
   $('#reason_no_acc').show();
   
   
}
else if(payment_method=='EFT'){
    $('#bank_location').show();
    $('#status_bai').show();
    $('#bank_status').show();
    $('#bank_code').show();
    $('#bank_branch').show();
    $('#bank_acc').show();
    $('#bank_address').show();
    $('#bank_acc_type').show();
    $('#swiftcode').show();
    $('#bsbcode').show();   
    $('#bank_topic').show();

    $('#reason_no_acc').hide();
    $('#have_acc_bank').hide();

    if(preview_bank=='Overseas Bank'){
        $('#bank_code').hide();
        $('#swiftcode').show();
        $('#bsbcode').show();
    }
    else{
        $('#bank_code').show();
        $('#bsbcode').hide();
        $('#swiftcode').hide();
    }

}
else{

    $('#bank_location').hide();
   $('#status_bai').hide();
   $('#bank_status').hide();
   $('#bank_code').hide();
   $('#bank_branch').hide();
   $('#bank_acc').hide();
   $('#bank_address').hide();
   $('#bank_acc_type').hide();
   $('#swiftcode').hide();
   $('#bsbcode').hide();   
   $('#bank_topic').hide();

   $('#reason_no_acc').hide();
   $('#have_acc_bank').hide();
   
}

 
//for mc form
// $("#btn_add_attended_work").click(function () {
//     get_div=document.getElementById('div_attend_work').outerHTML;
//     $('.attendtable > tbody:last-child').append(get_div);

// });
// $("#btn_add_MC").click(function () {
//     get_div1=document.getElementById('div_mcdetail').innerHTML;
//     $('.attendtable1').append(get_div1);
// });

//preview blade
// $(".btn_preview").click(function (){
//     $('#form12').removeClass('active');
//     $('#form10').addClass('active');
//     $("#navbar_confirmation").removeClass('active');
//     $('#div_preview').on('focus');
// });

$("select[name=paymode]").each(function() {
        $(this).change();
    });

$("select[name=bankloc]").each(function() {
        $(this).change();
    });
});

