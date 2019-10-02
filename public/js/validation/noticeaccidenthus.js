
    $(document).ready(function() {

     
        addmc(0);
        add_attend_work(0,0);
        modal_delete();
        totalmc();
        //alert("Masuk");
        //var i=0;

        // Get the total work day
        $('.counttotalwork').on('change',function(){
            var current_id = event.target.id;
            // alert(current_id);
            var half_id = current_id.split("te");
            var split_id = half_id[1].split("-");
            var mcid = split_id[0];
            var workid = split_id[1];
            //alert('MC id: ' + mcid + '| Work id: ' + workid);
            counttotalwork(mcid,workid);
        });

    });

    function addmc(i){
        //add new mc
        $('button[id=btn_add_mc'+i+']').on('click',function(){
            var i = $(this).val();
            //alert(i);
            var j = $(":button[id^=add_attended_work"+i+"_]").length;
            // alert(j);
            for (k = 0; k <= j; k++) { 
                if($("#add_attended_work"+i+"_"+k).length == 0) { //if doesn't exist

                    $('#table-medical-details'+i+' > tbody:last-child').append('<tr data-expanded="true" class="workrow" id="tr'+i+'_'+k+'"><td><div class="col-md-12"><select class="form-control" name="hussts['+k+']"><option value="">Please select</option><option value="mc" selected> MC </option><option value="ld" > Light Duty </option></select></div></td>'+
                        "<td>"+
                                        "<div class='col-md-12'>"+
                                            "<input id='clinicname' name='clinicinfo["+k+"]' type='text' value='' class='form-control counttotalmc' required>"+
                                        "</div>"+
                                    "</td>"+
                    '<td><div class="col-md-12"><input type="date" value="" id="mcstartdate_'+i+'_'+k+'" name="startdate['+k+']" class="form-control counttotalmc" ></div></td><td><div class="col-md-12"><input type="date" value="" id="mcenddate_'+i+'_'+k+'" name="enddate['+k+']" class="form-control counttotalmc" ></div></td><td><input type="text" id="totalmc_'+i+'_'+k+'" name="totalmc['+k+']" value="" class="form-control" readonly></td><td><button type="button"  class="btn btn-sm btn-danger btn_del_workmc" id="del_attended_work'+i+'_'+k+'"><i class="fas fa-trash-alt fa-sm"></i></button><button id="add_attended_work'+i+'_'+k+'" value="'+i+'_'+k+'" type="button" class="btn btn-info" data-toggle="button" data-more="#sh" aria-pressed="false">'+
                                            '<i class="ti-plus text" aria-hidden="true"></i>'+
                                            '<i class="ti-plus text-active" aria-hidden="true"></i>'+
                                        '</button></td><td><div class="col-md-12"><select class="form-control" name="scorecommend['+k+']"><option value="">Please select</option><option value="approved" selected>Approved</option><option value="rejected" >Rejected</option><option value="pending" >Pending</option><option value="paidduring" >Attended Work and Salary Paid during MC</option><option value="overlapped" >Overlapped</option><option value="overlappedapproved" >Overlapped-Approved</option><option value="overlappedrejected" >Overlapped-Rejected</option></select></div></td></tr>');

                    add_attend_work(i,k);
                    modal_delete();
                    totalmc();
                    
                    break;
                }
            }
            
        });


    }

    function add_attend_work(i,j){

            //add attended work
            $('button[id=add_attended_work'+i+'_'+j+']').click(function(){ 
                // alert("hiiii");
                var val = $(this).val();
                var values = val.split('_');
                var i = values[0];
                var j = values[1];
                // alert('i: '+i+' j: '+j);
                
                $('[id^=hus_recommendation]').attr('disabled', true);

                var k = $("tr[id^=tr"+i+"_"+j+"_]").length;
                // alert(k);
                for (w = 0; w <= k; w++) { 
                    if($("#tr"+i+"_"+j+"_"+w).length == 0) { 
                        // alert("hihihihi");

                        $('#tr'+i+'_'+j).after('<tr id="tr'+i+'_'+j+'_'+w+'"><td><div class="col-md-12"> <input  name="attendedwork" type="text" value="" class="form-control counttotalwork" readonly></div></td><td><div class="col-md-12"><input id="clinicname" name="clinicinfo['+j+'][]" type="text" value="" class="form-control counttotalmc" disabled></div></td><td><div class="col-md-12"><input   type="date" value="" id="workstartdate_'+i+'_'+j+'_'+w+'" name="mcitemstartdate['+j+'][]" class="form-control counttotalwork" ></div></td><td><div class="col-md-12"><input type="date" value="" id="workenddate_'+i+'_'+j+'_'+w+'" name="mcitemenddate['+j+'][]" class="form-control counttotalwork" ></div></td><td><input type="text" id="totalwork_'+i+'_'+j+'_'+w+'" name="totalmcitem['+j+'][]" value="" class="form-control" readonly><td><button type="button"  class="btn btn-sm btn-danger btn_del_workmc" id="del_attended_work'+i+'_'+j+'_'+w+'"><i class="fas fa-trash-alt fa-sm"></i></button></td><td><div class="col-md-12"><select class="form-control" name="approvalsts['+j+'][]"><option value="">Please select</option><option value="approved" selected>Approved</option><option value="rejected" >Rejected</option><option value="pending" >Pending</option><option value="paidduring" >Attended Work and Salary Paid during MC</option><option value="overlapped" >Overlapped</option><option value="overlappedapproved" >Overlapped-Approved</option><option value="overlappedreject" >Overlapped-Rejected</option></select></div></td> </tr>');
            
                        modal_delete();
                        totalwork();

                        break;
                    }
                }

                });

    }

    function modal_delete(){

        // Delete work
        $('.btn_del_workmc').on('click',function(){

            // del_attended_work0_0_1
            var delete_id = $(this).attr('id');
            var values = delete_id.split('_');
            var id1 = values[2];
            var id2 = values[3];
            var id3 = values[4];

            var no_of_child = $('[id^="del_attended_'+id1+'_'+id2+'_"]').length;
            if(no_of_child == 1){

                id1 = id1.substr(-1);
                $('#hus_recommendation'+id1+'_'+id2).prop('disabled', false);
            }
            console.log('id1:'+id1);
            console.log('id2:'+id2);
            console.log('id3:'+id3);
            console.log('no_of_child:'+no_of_child);
            console.log(delete_id);
            $("#deletemodal").modal('show');
            $("#deletemodal .modal-footer button").on('click', function(e) {
                var btn_id = event.target.id;
                if(btn_id == 'btn_delete'){
                    e.preventDefault();
                    var check = 'del_attended_'+id1+'_'+id2;
                    console.log('check:'+check);
                    console.log('delete_id:'+delete_id);
                    if (delete_id == check){
                        console.log("hahhahahahahaha: .tr"+id1+"_"+id2);
                        //alert("aa");
                        // $("#"+delete_id).closest("tr").remove();
                        // $("tr").remove(".tr"+id1+"_"+id2);

                        $(".tr"+id1+"_"+id2).each(function(){
                            $(this).remove();
                        })
                    }else{
                        $("#"+delete_id).closest("tr").remove();
                    }

                }
            });
        });

    }
    
    function totalmc(){
        // Get the total mc day
        $('.counttotalmc').on('change',function(){
            var current_id = event.target.id;
            var values = current_id.split('_');
            var i = values[1];
            var j = values[2];
            // alert(current_id);
            // var id = current_id.substring(current_id.length - 1, current_id.length);
            // alert(id);
            // console.log("current_id: "+current_id);
            counttotal(i,j);
        });
    }

    function counttotal(i,j){
        // console.log("i: "+i+ " j: " +j);
        var startdate = document.getElementById('mcstartdate_'+i+'_'+j).value;
        var enddate = document.getElementById('mcenddate_'+i+'_'+j).value;
        var total = document.getElementById('totalmc_'+i+'_'+j);
        var lblmcerror = document.getElementById('lblmcerror'+i);
        var btnsubmit = document.getElementById('btnsubmit');
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        
        if(dd<10) {
        dd = '0'+dd;
        } 

        if(mm<10) {
        mm  = '0'+mm;
        } 

        var currdate = yyyy + '-' + mm + '-' + dd;
        var days = getdays(currdate,startdate);
        var accddate = document.getElementById('accddate').value;
        var days2 = getdays(accddate,startdate);

        // Check the mc start date must before the current date
        if(days > 1){
        lblmcerror.innerHTML = 'Start date must not after current date';
        total.value = '';
        btnsubmit.disabled = true;
        return;
        }else{
        lblmcerror.innerHTML = '';
        btnsubmit.disabled = false;
        }

        // Check the mc start date must after accident date
        if(days2 <= 0){
        lblmcerror.innerHTML = 'Start date must not before accident date';
        total.value = '';
        btnsubmit.disabled = true;
        return;
        }else{
        lblmcerror.innerHTML = '';
        btnsubmit.disabled = false;
        }

        // Count the total mc work
        if(startdate != "" && enddate != ""){
        var totalmc = getdays(startdate,enddate);
        if(totalmc <= 0){
            lblmcerror.innerHTML = 'End date must not before start date';
            total.value = '';
            btnsubmit.disabled = true;
            return;
        }else{
            lblmcerror.innerHTML = '';
            btnsubmit.disabled = false;
        }
        total.value = totalmc;
        
        return;
        }else{
        total.value = '';
        return;
        }

    }

    function totalwork(){

        // Get the total work day
        $('.counttotalwork').on('change',function(){
            var current_id = event.target.id;
            // console.log("current_id: "+current_id);

            var values = current_id.split('_');
            var i = values[1];
            var j = values[2];
            var w = values[3];

            counttotalwork(i,j,w);
        });

    }

    function counttotalwork(i,j,w){

    // console.log("i: "+i+ " j: " +j+ " w: " +w);
    // id adalah nilai urutan mc
    // x adalah nilai urutan work
    var startdate = document.getElementById('workstartdate_'+i+'_'+j+'_'+w).value;
    // alert('startdate :' + startdate);
    var enddate = document.getElementById('workenddate_'+i+'_'+j+'_'+w).value;
    // alert('enddate :' + enddate);
    var total = document.getElementById('totalwork_'+i+'_'+j+'_'+w);
    var lblmcerror = document.getElementById('lblmcerror'+i);
    var btnsubmit = document.getElementById('btnsubmit');

    if(startdate != "" && enddate != ""){
      var totalwork = getdays(startdate,enddate);
      if (totalwork <= 0){
        total.value = "";
        lblmcerror.innerHTML  = 'End date must not before start date';
        btnsubmit.disabled = true;
      }
      else{
        lblmcerror.innerHTML  = '';
        btnsubmit.disabled = false;
      }
      total.value = totalwork;
    }else{
      total.value = "";
    }
  }


    function getdays(startdate,enddate){
        var dropdt = new Date(startdate);
        var pickdt = new Date(enddate);
        return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
    }
