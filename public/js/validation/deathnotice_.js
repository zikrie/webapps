$(document).ready(function () {
    
    $("#mode_transport_other").hide();
    $("#race_other").hide();
    $("#relationship_other").hide();
    $("#yes").hide();
    $("#yes_dependantstudy").hide();
    $("#passport_expired").hide();
    $("#date_birth").show();
    $("#married_date").hide();
    $("#still_study").hide();
    $("#registered_married").hide();
    $("#in_edah").hide();
    $("#disability_i").hide();
    $("#eligibility_start").show();
    $("#eligibility_end").show();
    $("#demised_date").hide();
    $("#married_ob").hide();
    $("#disability_beforeafter").hide();
    $("#ssn").hide();
    $("#duetoaccident").hide();
    $("#duetoaccident_no").show();
    $("#duetoaccident_yes").hide();
    // $("#btn_add_applicant").hide();
    $("#edulvl_others_yes").hide();
    $("#btn_add_mc").hide();


    // FOR DEATH INFO TAB

    $('select[name=accdeath]').change(function () {

        if (this.value == 'Y') {
            $('#yes').show();
            $('#btn_add_mc').show();

        }
        else{
            $('#yes').hide();
            $('#btn_add_mc').hide();

        }
    });

    $("select[name=accdeath]").each(function() {
        $(this).change();
    });



    // $('.stillstudy').change(function () {
    //     if (this.value == 'yes') {
    //         $('#yes_dependantstudy').show();
    //     }
    //     else{
    //         $('#yes_dependantstudy').hide();
    //     }
    // });

    // $('.edulvl').change(function () {
    //     if (this.value == '6') {
    //         $('#edulvl_others_yes').show();
    //         $('#edulvl_others_no').hide();
    //     }
    //     else{
    //         $('#edulvl_others_yes').hide();
    //     }
    // });

    // FOR STILL STUDY IF AGE 18 - 21

    // $('.date_birth').on('change', function () {

    //     var a = $(this).val();
    //     var age = getAge(a);

    //     // check still study
    //     if (age <= 20 && age >= 18) {
    //         $('#still_study').show();
    //     }
    //     else{
    //         $('#still_study').hide();

    //     }
    // });

    // function getAge(dateString){
    //     var today = new Date();
    //     var birthDate = new Date(dateString);
    //     var age = today.getFullYear() - birthDate.getFullYear();
    //     var m = today.getMonth() - birthDate.getMonth();
    //     if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
    //         age--;
    //     }
    //     console.log(age);
    //     return age;
    // }

/** If ID Type = SSN */
$('.idtype').change(function () {
    if (this.value == '05') {
        $('#passport_expired').show();
    }
    else {
        $('#passport_expired').hide();
        $('#passportexp').prop('value', '');
    }
});



        $('.date_birth').on('change', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("b");
            var id = split_id[1];

            var a = $(this).val();
            var status = $('.ots').val()
            var relay = $('.relationship').val()
            var age = getAge(a);
            
            if (status == '4' && relay == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy'+id).show();
            }
            else{
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            
        });

        $('.ots').on('change', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("s");
            var id = split_id[1];

            var a = $(this).val();
            var dob = $('.date_birth').val()
            var relay = $('.relationship').val()
            var age = getAge(dob);
            

            // check still study
            if (a == '4' && relay == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy'+id).show();
            }
            else{
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            
        });

        $('.relationship').on('change', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("p");
            var id = split_id[1];

            var a = $(this).val();
            var status = $('.ots').val()
            var dob = $('.date_birth').val()
            var age = getAge(dob);
            

            // check still study
            if (status == '4' && a == '1' && (age <= 21 && age >= 18)) {
                $('#yes_dependantstudy'+id).show();
            }
            else{
                $('#yes_dependantstudy'+id).hide();
                $('#studystartdate'+id).prop('value', '');
                $('#studyenddate'+id).prop('value', '');
                $('#study_status'+id).prop('value', '');
                $('#edulvl'+id).prop('value', '');
                $('#eduothers'+id).prop('value', '');
                $('#coursename'+id).prop('value', '');
                $('#uniname'+id).prop('value', '');
            }
            
        });

        // ---------------------- CHECK BETWEEN DOB, RELATIONSHIP & OT STATUS --------------------------

        $('.relationship').on('change', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("p");
            var id = split_id[1];

            var a = $(this).val();
            var otstatus = $('.ots').val()

            // ----------------- RELATIONSHIP = CHILD --------------------

            if (this.value == '1') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '1' && otstatus == '6') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).show();
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '1' && otstatus == '5') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            // ----------------- RELATIONSHIP = WIDOW --------------------
            else if (a == '2') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            else if (a == '2' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            else if (a == '2' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            }

            // ----------------- RELATIONSHIP = WIDOWER --------------------
            else if (this.value == '3') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            else if (a == '3' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            else if (a == '3' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            }
            // ----------------- RELATIONSHIP = SIBLINGS --------------------
            else if (this.value == '8') {
                $('#edah'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#otstatus'+id).show();
            }
            else if (a == '8' && (otstatus == '2' || otstatus == '5')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '8' && (otstatus == '1')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '4' || a == '5' || a == '6' || a == '7') {
                $('#otstatus'+id).hide();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }

            else {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            
        });

        $('.ots').on('change', function () {
            var current_id = event.target.id;
            var split_id = current_id.split("s");
            var id = split_id[1];

            var a = $('.relationship').val();
            var otstatus = $(this).val()

            if (a == '1' && otstatus == '6') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).show();
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '1' && otstatus == '5') {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }

            else if (a == '2' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            else if (a == '2' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).show();
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            
            }

            else if (a == '3' && (otstatus == '2' || otstatus == '5')) {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');

            }
            else if (a == '3' && otstatus == '1') {
                $('#married_ob'+id).show();
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
                $('#registered_married'+id).show();
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
            
            }
            else if (a == '8' && (otstatus == '2' || otstatus == '5')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).show();
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '8' && (otstatus == '1')) {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).show();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            else if (a == '4' || a == '5' || a == '6' || a == '7') {
                $('#otstatus'+id).hide();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#dodeath'+id).prop('value', '');
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            
            else {
                $('#otstatus'+id).show();
                $('#registered_married'+id).hide();
                $('#regmarried'+id).prop('value', '');
                $('#married_date'+id).hide();
                $('#marrieddate'+id).prop('value', '');
                $('#disability_beforeafter'+id).hide();
                $('#disablewhen'+id).prop('value', '');
                $('#demised_date'+id).hide();
                $('#married_ob'+id).hide();
                $('#marriedobdate'+id).prop('value', '');
                $('#in_edah'+id).hide();
                $('#edah'+id).prop('value', '');
            }
            
        });


        // ----------------------------- TO DISPLAY DEPENDANT STUDY --------------------------------------

        // $('#containerx').on('change','.stillstudy',function() {
        //     var current_id = event.target.id;
        //     var split_id = current_id.split("ut");
        //     var id = split_id[1];

        //     if (this.value == 'yes') {
        //         // alert('Cuba');
        //         $('#yes_dependantstudy'+id).show();
        //         $('#still_study_input'+id).prop('value', 'yes');
        //     }
        //     else{
        //         $('#yes_dependantstudy'+id).hide();
        //         $('#still_study_input'+id).prop('value', 'no');
        //         $('#study_status'+id).prop('value', '');
        //         $('#studystartdate'+id).prop('value', '');
        //         $('#studyenddate'+id).prop('value', '');
        //         $('#uniname'+id).prop('value', '');
        //         $('#coursename'+id).prop('value', '');
        //         $('#edulvl'+id).prop('value', '');
        //         $('#eduothers'+id).prop('value', '');
        //     }
            
        // });

        // --------------------------- Calculate age -----------------------------------------

        function getAge(dateString){
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())){
                age--;
            }
            console.log(age);
            return age;
        }


});
