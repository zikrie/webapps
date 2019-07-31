$(document).ready(function () {
    // no_select=0;

    $("#add_emp_info").click(function () {
        var no = $('#table_add_emp_info tr:last td:first').find("input").val();
        no++
        var no_index = no++
        $('#table_add_emp_info > tbody:last-child').append('<tr data-expanded="true" id="tr_add_emp_info"> <td><input type="hidden" value="' + no_index + '">' + no + '</td><td> <textarea type="text"  name="empname[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="empadd[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="duration[' + no_index + ']" class="form-control"></textarea></td><td> <textarea type="text" name="designation[' + no_index + ']" class="form-control"></textarea></td> <td> <textarea type="text" name="wages[' + no_index + ']" class="form-control"></textarea></td></tr>');
    });
    $('#add_doc').click(function () {
        var no_doc = $('#table_upload_doc tr:last td:first').find("input").val();
       
        no_doc++;
        //select=document.getElementById('select_database').innerHTML;
        idtype = document.getElementById('idtype_doc').innerHTML;
        
        $('#table_upload_doc > tbody:last-child').append('<tr><td style="display:none;"><input type="hidden" class="number" value="' + no_doc + '"></td><td><select class="form-control" name="doccat[' + no_doc + ']">' + idtype + '</select></td><td><input type="file" id="pdf_cancel_' + no_doc + '" name="pdf[' + no_doc + ']"  /><div class="preview btn_cancel_' + no_doc + '"> <i class="icon-close"></i></div></td><td><input type="hidden" name="doctype['+no_doc+']" value="" </td></tr>');
        $('#table_upload_doc tr').each(function () {
            var no = $(this).find(".number").val();
            // no++;
            $('.btn_cancel_' + no + '').click(function () {
                $('#pdf_cancel_' + no + '').val("");
                
            }); 
        });
        // no_select++;
        // return (no_select);

    });
    $('#table_upload_doc tr').each(function () {
        var no = $(this).find(".number").val();
        // no++;
        $('.btn_cancel_' + no + '').click(function () {
            $('#pdf_cancel_' + no + '').val("");
            
        }); 
    });
});
 // var id = $(this).attr('id');
        // $('#countdown-'+id).countdown({until: +remainingTime, format: 'HMS', compact: true});
