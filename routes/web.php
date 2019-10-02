<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
    return view('general.auth.login');
});

/* -------------------- LOGIN ------------------------ */

Route::get('/login', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
    return view('general.auth.login');
});

/* -------------------- LOGOUT ----------------------- */

Route::get('/logout', 'AuthController@logout');

/* ----------------- AUTHENTICATION ------------------ */

Route::post('/login', 'AuthController@login');

/* ------------------- HOME TASK --------------------- */

Route::get('/home', 'WorkbasketController@wblist');
Route::get('/getnotice', 'WorkbasketController@getnotice');
Route::get('/deletedraft', 'WorkbasketController@deletedraft');

/* ------------------ ADMIN TASK --------------------- */

Route::get('/homeADM', function () {
    return view('homeADM');
});

/* ------------------- ALL NOTICE -------------------- */


//Route::resource('noticeOd', 'NewClaim\CommonController@GetOBDetails');
//Route::post('/accidentdatetime', 'NewClaim\NoticeAccidentController@index');//irina comment out
//Route::post('/remark', 'NewClaim\NoticeAccidentController@postRemark');

//testing
Route::get('/testmc', 'NoticeAccidentController@DisplayMC');
Route::post('/testmc', 'NoticeAccidentController@TestUpdMC');
Route::get('/testuploaddoc', 'UploadclaimController@getdoc');
Route::post('/testuploaddoc', 'UploadclaimController@upload');


Route::group(['prefix' => 'scheme','namespace'=>'scheme'], function () {
    /* -------------------------------- COMMON ------------------------------------ */
    Route::post('/obform', 'NewClaim\CommonController@postObForm');
    Route::post('/bankinformation', 'NewClaim\CommonController@postBankInfo');
    //HANNIS
    Route::post('/employerDetails', 'NewClaim\CommonController@postEmployer');
    Route::get('/success', 'NewClaim\CommonController@success');
    Route::post('/backhome', 'NewClaim\CommonController@backhome');
    Route::post('/back', 'NewClaim\CommonController@BacktoConfirmation');//chg07072019
    /* ----------------------------- END OF COMMON --------------------------------- */

    /* ---------------------------------- UPLOAD FILE ------------------------------------------ */

    Route::get('/fileupload', 'FileuploadController@index');
    Route::get('/searchdocument', function () {
        return view('fileupload.index');
    });
    //najmi
    Route::get('/indexobprofile', 'ObprofileController@index')->name('obprofile.index');
    Route::get('/indexclaiminfo', 'ClaimController@index')->name('claim.index');
    Route::post('insertlola', 'UploadobprofileController@upload')->name('obprofile.upload');
    Route::post('insert', 'UploadclaimController@upload')->name('claim.upload');
    Route::get('/viewdoc', 'UploadclaimController@viewstorage');
    Route::get('/testing', 'UploadclaimController@test');
    Route::get('/viewNoNotes', 'UploadclaimController@viewNonotes');
    Route::get('/viewNotes', 'UploadclaimController@viewnotes');
    
    //irina
    Route::get('/scanningdone', 'UploadclaimController@ScanningDone');
    /* ----------------------------------END OF UPLOAD FILE ------------------------------------------ */

    /* -------------------------------NOTICE TYPE --------------------------------- */
    Route::post('/idno', 'NoticeTypeController@noticeType');
    Route::get('', 'NoticeTypeController@index');
    Route::get('/idno', 'NoticeTypeController@index');
    /* ------------------------END OF NOTICE TYPE --------------------------------- */

    /* -------------------------- NOTICE ACCIDENT(PK) ----------------------------- */
    Route::get('/noticeaccident', 'NewClaim\NoticeAccidentController@index');
    Route::get('/branch/{statecode}', 'NewClaim\NoticeAccidentController@getbranchname');
    Route::get('/reftable/{accdwhen}', 'NewClaim\NoticeAccidentController@getaccwhen');
    Route::get('/obform', 'NewClaim\NoticeAccidentController@index');
    Route::post('/employerdetails_accd', 'NewClaim\CommonController@postEmployer');
    Route::get('/accdatetime', 'NewClaim\NoticeAccidentController@AccidentDate');
    Route::post('/accidentdatetime', 'NewClaim\NoticeAccidentController@checkAccidentDate');
    Route::post('/wagesdetails', 'NewClaim\NoticeAccidentController@postWages');
    Route::post('/certificateemployee', 'NewClaim\NoticeAccidentController@postCertificateEmployee');

    //Confirmation & Preview
    Route::post('/accsave', 'NewClaim\NoticeAccidentController@postConfirmation');
    Route::get('/preview', 'NewClaim\NoticeAccidentController@Preview');
    Route::post('/accsubmit', 'NewClaim\NoticeAccidentController@Submit');
    Route::post('/back', 'NewClaim\CommonController@BacktoConfirmation');
    // Route::post('/bankinformation','NewClaim\NoticeAccidentController@postBankInfo');

    //irina
    Route::post('/noticeaccident', 'NewClaim\NoticeAccidentController@postAccident');
    //zik
    Route::post('/HUS', 'NewClaim\NoticeAccidentController@postHusInfo');
    /* --------------------------END OF NOTICE ACCIDENT(PK) ------------------------ */

    /* -------------------------- NOTICE ACCIDENT -- SCO ----------------------------- */
    Route::get('/noticeaccident_sco', 'NewClaim\NoticeAccidentController@indexSCO');
    Route::post('/obform_sco', 'NewClaim\CommonController@postObForm');
    Route::post('/accidentDetails_sco', 'NewClaim\NoticeAccidentController@postAccident');
    Route::post('/employerdetails_sco', 'NewClaim\CommonController@postEmployer');

    /* --------------------------- NOTICE ACCIDENT -- IO --------------------------- */
    Route::get('/noticeaccident_io', 'NewClaim\NoticeAccidentController@indexIO');
    /* ---------------------------END OF NOTICE ACCIDENT -- IO ---------------------- */

    /* -------------------------- NOTICE ACCIDENT -- SAO --------==------------------- */
    Route::get('/noticeaccident_sao', 'NewClaim\NoticeAccidentController@indexSAO');
    /* ----------------------END OF NOTICE ACCIDENT -- SAO --------------------------- */

    /* -------------------------- NOTICE ACCIDENT -- REVISION (Date Of Accident) ----------------------- */
    Route::get('/revisiondateaccident_pk', 'Revision\DateAccidentController@index');
    Route::get('/revisiondateaccident_sco', 'Revision\DateAccidentController@index_SCO');
    Route::get('/revisiondateaccident_io', 'Revision\DateAccidentController@index_IO');
    Route::get('/revisiondateaccident_sao', 'Revision\DateAccidentController@index_SAO');
    /* ----------------------END OF NOTICE ACCIDENT -- REVISION --------------------------- */
    
    /* -------------------------- NOTICE ACCIDENT -- REVISION (OB Profile) ----------------------- */
    Route::get('/revisionobprofile_pk', 'Revision\OBProfileController@index');
    Route::get('/revisionobprofile_sco', 'Revision\OBProfileController@index_SCO');
    Route::get('/revisionobprofile_io', 'Revision\OBProfileController@index_IO');
    Route::get('/revisionobprofile_sao', 'Revision\OBProfileController@index_SAO');
    /* ----------------------END OF NOTICE ACCIDENT -- REVISION --------------------------- */

    /* -------------------------- NOTICE ACCIDENT -- REVISION (Wages) --------------------------- */
    Route::get('/revisionwages_pk', 'Revision\WagesController@index');
    Route::get('/revisionwages_sco', 'Revision\WagesController@index_SCO');
    Route::get('/revisionwages_sco_spi', 'Revision\WagesController@index_SCO_SPI');
    Route::get('/revisionwages_io', 'Revision\WagesController@index_IO');
    Route::get('/revisionwages_io_spi', 'Revision\WagesController@index_IO_SPI');
    Route::get('/revisionwages_sao', 'Revision\WagesController@index_SAO');
    Route::get('/revisionwages_sao_spi', 'Revision\WagesController@index_SAO_SPI');
    /* ----------------------END OF NOTICE ACCIDENT -- REVISION --------------------------- */

    /* -------------------------- NOTICE ACCIDENT -- REVISION (Reverse Decision) ---------------------- */
    Route::get('/revisionreversedecisionbktobbk_pk', 'Revision\ReverseDecisionController@index_bk_to_bbk');
    Route::get('/revisionreversedecisionbktobbk_sco', 'Revision\ReverseDecisionController@index_SCO_bk_to_bbk');
    Route::get('/revisionreversedecisionbktobbk_io', 'Revision\ReverseDecisionController@index_IO_bk_to_bbk');
    Route::get('/revisionreversedecisionbktobbk_sao', 'Revision\ReverseDecisionController@index_SAO_bk_to_bbk');

    Route::get('/revisionreversedecisionnationality_pk', 'Revision\ReverseDecisionController@index_nationality');
    Route::get('/revisionreversedecisionnationality_sco', 'Revision\ReverseDecisionController@index_SCO_nationality');
    Route::get('/revisionreversedecisionnationality_io', 'Revision\ReverseDecisionController@index_IO_nationality');
    Route::get('/revisionreversedecisionnationality_sao', 'Revision\ReverseDecisionController@index_SAO_nationality');
    /* ----------------------END OF NOTICE ACCIDENT -- REVISION --------------------------- */

    /* -------------------------- NOTICE ACCIDENT -- OTHERS (Bon Ganti Rugi) ---------------------- */
    Route::get('/bgr_pk', 'others\BGRController@index');
    Route::get('/bgr_sco', 'others\BGRController@index_SCO');
    Route::get('/bgr_io', 'others\BGRController@index_IO');
    Route::get('/bgr_sao', 'others\BGRController@index_SAO');
    /* ----------------------END OF NOTICE ACCIDENT -- OTHERS --------------------------- */

    /* --------------------------- NOTICE OD(PK) ------------------------------------ */
    Route::get('/noticeod', 'NewClaim\NoticeOdController@index');
    Route::post('/noticeod', 'NewClaim\CommonController@postObForm');
    Route::post('/employerdetails_od', 'NewClaim\CommonController@postEmployer');
    Route::post('/updmc', 'NewClaim\NoticeOdController@UpdMC');
    Route::post('/confirmation_od', 'NewClaim\NoticeOdController@postConfirmation');
    Route::post('/bankinformation_od', 'NewClaim\NoticeOdController@postBankInfo');
    Route::post('/wagesdetails_od', 'NewClaim\NoticeOdController@postWages');
    Route::post('/odinfo', 'NewClaim\NoticeOdController@postOdinfo');
    Route::post('/odemphistory', 'NewClaim\NoticeOdController@postOdEmphistory');
    Route::get('/odpreview', 'NewClaim\NoticeOdController@Preview');
    // Route::get('/branch/{statecode}', 'NoticeOdController@getbranchname');
    /* ---------------------------END OF NOTICE OD(PK) ------------------------------- */

    /* --------------------------- NOTICE OD(SCO) ------------------------------------ */
    Route::get('/noticeod_sco', 'NewClaim\NoticeOdController@indexSCO');
    /* ------------------------ END OF NOTICE OD(IO) ---------------------------------- */

    /* --------------------------- NOTICE OD(IO) ------------------------------------ */
    Route::get('/noticeod_io', 'NewClaim\NoticeOdController@indexIO');
    /* ------------------------ END OF NOTICE OD(IO) ---------------------------------- */

    /* --------------------------- NOTICE OD(SAO) ------------------------------------ */
    Route::get('/noticeod_sao', 'NewClaim\NoticeOdController@indexSAO');
    /* ------------------------ END OF NOTICE OD(SAO) ---------------------------------- */

    /* --------------------------- NOTICE OD(REVISION) ------------------------------------ */
    Route::get('/revisionprovisional_sco', 'Revision\ProvisionalController@index_SCO');
    Route::get('/revisionprovisional_sao', 'Revision\ProvisionalController@index_SAO');
    Route::get('/revisionchangedate', 'Revision\ChangeDateODController@index');
    Route::get('/revisionchangedate_sco', 'Revision\ChangeDateODController@index_SCO');
    Route::get('/revisionchangedate_io', 'Revision\ChangeDateODController@index_IO');
    Route::get('/revisionchangedate_sao', 'Revision\ChangeDateODController@index_SAO');
    Route::get('/revisionmedical_pk','Revision\MedicalController@index_pk');
    Route::get('/revisionmedical_sco','Revision\MedicalController@index_sco');
    Route::get('/revisionmedical_io','Revision\MedicalController@index_io');
    Route::get('/revisionmedical_sao','Revision\MedicalController@index_sao');
    Route::get('/revisionassess_sco', 'Revision\AssessmentController@indexRevisionSCO');
    Route::get('/revisionassess_sao', 'Revision\AssessmentController@indexRevisionSAO');
    Route::get('/revisionels', 'Revision\ElsController@index');
    Route::get('/revisionels_sco', 'Revision\ElsController@indexEls');
    Route::get('/revisionels_io', 'Revision\ElsController@indexElsIO');
    Route::get('/revisionels_sao', 'Revision\ElsController@indexElsSao');

    /* ------------------------ END OF NOTICE OD(REVISION) ---------------------------------- */

    /* --------------------------- NOTICE OD(OTHERS) ------------------------------------ */
    Route::get('/noic', 'Others\NoIcController@index');
    Route::get('/noic_sco', 'Others\NoIcController@index_SCO');
    Route::get('/noic_sao', 'Others\NoIcController@index_SAO');

    /* ------------------------ END OF NOTICE OD(OTHERS) ---------------------------------- */

    /* ------------------------------ NOTICE ILAT(PK) -------------------------------- */
    Route::get('/noticeinvalidity', 'NewClaim\NoticeInvalidityController@index');
    Route::post('/wagesilat', 'NewClaim\NoticeInvalidityController@postWages');
    Route::post('/noticeinvalidity', 'NewClaim\CommonController@postObForm');
    Route::post('/ilatinfo', 'NewClaim\NoticeInvalidityController@postIlat_info');
    Route::post('/emphistory', 'NewClaim\NoticeInvalidityController@postEmphistory');
    Route::post('/confirmationilat', 'NewClaim\NoticeInvalidityController@postConfirmation');
    Route::post('/bankinformationilat', 'NewClaim\NoticeInvalidityController@postBankInfo');
    Route::get('/ilatpreview', 'NewClaim\NoticeInvalidityController@Preview');
    Route::post('/Back', 'NewClaim\NoticeInvalidityController@Back');
    // Route::get('/checkIlatNotice', 'NewClaim\NoticeInvalidityController@checkIlatNotice');
    //Route::get('/noticeinvalidity','NewClaim\NoticeInvalidityController@index');
    /* ----------------------------END OF NOTICE ILAT(PK) -------------------------------- */

    /* ---------------------------- NOTICE ILAT(SCO) ------------------------------------- */
    Route::get('/noticeinvalidity_sco', 'NewClaim\NoticeInvalidityController@indexsco');
    /* ----------------------------END OF NOTICE ILAT(SCO) -------------------------------- */

    
    /* ---------------------------- NOTICE ILAT(IO) ------------------------------------- */
    Route::get('/noticeinvalidity_io', 'NewClaim\NoticeInvalidityController@indexio');
    /* ----------------------------END OF NOTICE ILAT(IO) -------------------------------- */

    
    /* ---------------------------- NOTICE ILAT(SAO) ------------------------------------- */
    Route::get('/noticeinvalidity_sao', 'NewClaim\NoticeInvalidityController@indexsao');
    /* ----------------------------END OF NOTICE ILAT(SAO) -------------------------------- */
    Route::get('/revisioninvalidity', 'Revision\InvalidityController@index_PK');
    Route::get('/revisioninvalidity_sco', 'Revision\InvalidityController@index_SCO');
    Route::get('/revisioninvalidity_sao', 'Revision\InvalidityController@index_SAO');

    Route::get('/revisionbankruptcy', 'Revision\BankruptcyController@index_PK');
    Route::get('/revisionbankruptcy_sco', 'Revision\BankruptcyController@index_SCO');
    Route::get('/revisionbankruptcy_sao', 'Revision\BankruptcyController@index_SAO');

    Route::get('/revisionsection96', 'Revision\Section96Controller@index_PK');
    Route::get('/revisionsection96_sco', 'Revision\Section96Controller@index_SCO');
    Route::get('/revisionsection96_sao', 'Revision\Section96Controller@index_SAO');

    Route::get('/revisionreemployment', 'Revision\ReemploymentController@index_PK');
  
    Route::get('/revisionpaymentoption', 'Revision\PaymentOptionController@index_PK');
    Route::get('/revisionpaymentoption_sao', 'Revision\PaymentOptionController@index_SAO');
    Route::get('/revisionpaymentoption_sco', 'Revision\PaymentOptionController@index_SCO');

    Route::get('/permanentrepresentatives', 'others\PermanentrepresentativesController@index_PK');
    Route::get('/permanentrepresentatives_sco', 'others\PermanentrepresentativesController@index_SCO');
    Route::get('/permanentrepresentatives_io', 'others\PermanentrepresentativesController@index_IO');
    Route::get('/permanentrepresentatives_sao', 'others\PermanentrepresentativesController@index_SAO');
    Route::get('/permanentrepresentatives_akd', 'others\PermanentrepresentativesController@index_AKD');
    Route::get('/permanentrepresentatives_hof', 'others\PermanentrepresentativesController@index_HOF');
    Route::get('/permanentrepresentatives_hol', 'others\PermanentrepresentativesController@index_HOL');
    Route::get('/permanentrepresentatives_pkdis', 'others\PermanentrepresentativesController@index_PKDIS');


    /* --------------------------------- NOTICE DEATH(PK) --------------------------------- */
    Route::post('/noticedeath', 'NewClaim\NoticeDeathController@postObForm');
    Route::post('/employerDetails_death', 'NewClaim\CommonController@postEmployer');
    Route::post('/deathdetails', 'NewClaim\NoticeDeathController@postDeathWithMC');
    Route::get('/deathdetails', 'NewClaim\NoticeDeathController@index');
    Route::post('/confirmation_death', 'NewClaim\NoticeDeathController@postConfirmation');
    Route::get('/noticedeath', 'NewClaim\NoticeDeathController@index');
    Route::post('/applicantinfo', 'NewClaim\NoticeDeathController@postApplicantInfo');
    Route::get('/applicantinfo', 'NewClaim\NoticeDeathController@index');
    Route::post('/wagesdetails_death', 'NewClaim\NoticeDeathController@postWages');
    Route::post('/bankinformation_death', 'NewClaim\NoticeDeathController@postBankInfo');
    Route::post('/otinfo', 'NewClaim\NoticeDeathController@postOtInfo');
    Route::get('/otinfo', 'NewClaim\NoticeDeathController@index');
    Route::get('/preview', 'NewClaim\NoticeDeathController@Preview');
    Route::get('/reftable/{accdwhen}', 'NewClaim\NoticeDeathController@getaccwhen');
    Route::get('/reftable1/{suboccucode}', 'NewClaim\NoticeDeathController@getsuboccucode');

    // Anis
    Route::post('/guardianinfo', 'NewClaim\NoticeDeathController@postGuardianInfo');
    Route::get('/guardianinfo', 'NewClaim\NoticeDeathController@index');
    /* ------------------------------ END OF NOTICE DEATH(PK) --------------------------------- */

    /* ------------------------------ NOTICE DEATH -- SCO ------------------------------------- */
    Route::get('/noticedeath_sco', 'NewClaim\NoticeDeathController@indexSCO');
    /* ------------------------- END OF NOTICE DEATH -- SCO ------------------------------------- */

    /* ---------------- NOTICE DEATH -- IO-------------------- */
    Route::get('/noticedeath_io', 'NewClaim\NoticeDeathController@indexIO');
    /* ------------------------- END OF NOTICE DEATH -- IO ------------------------------------- */

    /* ------------------------------- NOTICE DEATH -- SAO -------------------------------------- */
    Route::get('/noticedeath_sao', 'NewClaim\NoticeDeathController@indexSAO');
    /* ------------------------------ END OF NOTICE DEATH(SAO) --------------------------------- */
});

/* ---------------- LOCALIZATION -------------------- */

Route::get('locale', function () {
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});
