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


//Route::resource('noticeOd', 'CommonController@GetOBDetails');
//Route::post('/accidentdatetime', 'NoticeAccidentController@index');//irina comment out
//Route::post('/remark', 'NoticeAccidentController@postRemark');

//testing
Route::get('/testmc', 'NoticeAccidentController@DisplayMC');
Route::post('/testmc', 'NoticeAccidentController@TestUpdMC');
Route::get('/testuploaddoc', 'UploadclaimController@getdoc');
Route::post('/testuploaddoc', 'UploadclaimController@upload');


Route::group(['prefix' => 'scheme','namespace'=>'scheme'], function () {
    /* -------------------------------- COMMON ------------------------------------ */
    Route::post('/obform', 'CommonController@postObForm');
    Route::post('/bankinformation', 'CommonController@postBankInfo');
    //HANNIS
    Route::post('/employerDetails', 'CommonController@postEmployer');
    Route::get('/success', 'CommonController@success');
    Route::post('/backhome', 'CommonController@backhome');
    Route::post('/back', 'CommonController@BacktoConfirmation');//chg07072019
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
    Route::get('/noticeaccident', 'NoticeAccidentController@index');
    Route::get('/branch/{statecode}', 'NoticeAccidentController@getbranchname');
    Route::get('/reftable/{accdwhen}', 'NoticeAccidentController@getaccwhen');
    Route::get('/obform', 'NoticeAccidentController@index');
    Route::post('/employerdetails_accd', 'CommonController@postEmployer');
    Route::get('/accdatetime', 'NoticeAccidentController@AccidentDate');
    Route::post('/accidentdatetime', 'NoticeAccidentController@checkAccidentDate');
    Route::post('/wagesdetails', 'NoticeAccidentController@postWages');
    Route::post('/certificateemployee', 'NoticeAccidentController@postCertificateEmployee');

    //Confirmation & Preview
    Route::post('/accsave', 'NoticeAccidentController@postConfirmation');
    Route::get('/preview', 'NoticeAccidentController@Preview');
    Route::post('/accsubmit', 'NoticeAccidentController@Submit');
    Route::post('/back', 'CommonController@BacktoConfirmation');
    // Route::post('/bankinformation','NoticeAccidentController@postBankInfo');

    //irina
    Route::post('/noticeaccident', 'NoticeAccidentController@postAccident');
    Route::post('/updmc', 'NoticeAccidentController@UpdMC');
    /* --------------------------END OF NOTICE ACCIDENT(PK) ------------------------ */

    /* -------------------------- NOTICE ACCIDENT -- SCO ----------------------------- */
    Route::get('/noticeaccident_sco', 'NoticeAccidentController@indexSCO');
    Route::post('/obform_sco', 'CommonController@postObForm');
    Route::post('/accidentDetails_sco', 'NoticeAccidentController@postAccident');
    Route::post('/employerdetails_sco', 'CommonController@postEmployer');

    /* --------------------------- NOTICE ACCIDENT -- IO --------------------------- */
    Route::get('/noticeaccident_io', 'NoticeAccidentController@indexIO');
    /* ---------------------------END OF NOTICE ACCIDENT -- IO ---------------------- */

    /* -------------------------- NOTICE ACCIDENT -- SAO --------==------------------- */
    Route::get('/noticeaccident_sao', 'NoticeAccidentController@indexSAO');
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
    Route::get('/noticeod', 'NoticeOdController@index');
    Route::post('/noticeod', 'CommonController@postObForm');
    Route::post('/employerdetails_od', 'CommonController@postEmployer');
    Route::post('/odupdmc', 'NoticeOdController@UpdMC');
    Route::post('/confirmation_od', 'NoticeOdController@postConfirmation');
    Route::post('/bankinformation_od', 'NoticeOdController@postBankInfo');
    Route::post('/wagesdetails_od', 'NoticeOdController@postWages');
    Route::post('/odinfo', 'NoticeOdController@postOdinfo');
    Route::post('/odemphistory', 'NoticeOdController@postOdEmphistory');
    Route::get('/odpreview', 'NoticeOdController@Preview');
    // Route::get('/branch/{statecode}', 'NoticeOdController@getbranchname');
    /* ---------------------------END OF NOTICE OD(PK) ------------------------------- */

    /* --------------------------- NOTICE OD(SCO) ------------------------------------ */
    Route::get('/noticeod_sco', 'NoticeOdController@indexSCO');
    /* ------------------------ END OF NOTICE OD(IO) ---------------------------------- */

    /* --------------------------- NOTICE OD(IO) ------------------------------------ */
    Route::get('/noticeod_io', 'NoticeOdController@indexIO');
    /* ------------------------ END OF NOTICE OD(IO) ---------------------------------- */

    /* --------------------------- NOTICE OD(SAO) ------------------------------------ */
    Route::get('/noticeod_sao', 'NoticeOdController@indexSAO');
    /* ------------------------ END OF NOTICE OD(SAO) ---------------------------------- */

    /* ------------------------------ NOTICE ILAT(PK) -------------------------------- */
    Route::get('/noticeinvalidity', 'NoticeInvalidityController@index');
    Route::post('/wagesilat', 'NoticeInvalidityController@postWages');
    Route::post('/noticeinvalidity', 'CommonController@postObForm');
    Route::post('/ilatinfo', 'NoticeInvalidityController@postIlat_info');
    Route::post('/emphistory', 'NoticeInvalidityController@postEmphistory');
    Route::post('/confirmationilat', 'NoticeInvalidityController@postConfirmation');
    Route::post('/bankinformationilat', 'NoticeInvalidityController@postBankInfo');
    Route::get('/ilatpreview', 'NoticeInvalidityController@Preview');
    Route::post('/Back', 'NoticeInvalidityController@Back');
    // Route::get('/checkIlatNotice', 'NoticeInvalidityController@checkIlatNotice');
    //Route::get('/noticeinvalidity','NoticeInvalidityController@index');
    /* ----------------------------END OF NOTICE ILAT(PK) -------------------------------- */

    /* ---------------------------- NOTICE ILAT(SCO) ------------------------------------- */
    Route::get('/noticeinvalidity_sco', 'NoticeInvalidityController@indexsco');
    /* ----------------------------END OF NOTICE ILAT(SCO) -------------------------------- */

    
    /* ---------------------------- NOTICE ILAT(IO) ------------------------------------- */
    Route::get('/noticeinvalidity_io', 'NoticeInvalidityController@indexio');
    /* ----------------------------END OF NOTICE ILAT(IO) -------------------------------- */

    
    /* ---------------------------- NOTICE ILAT(SAO) ------------------------------------- */
    Route::get('/noticeinvalidity_sao', 'NoticeInvalidityController@indexsao');
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
    Route::post('/noticedeath', 'NoticeDeathController@postObForm');
    Route::post('/employerDetails_death', 'CommonController@postEmployer');
    Route::post('/deathdetails', 'NoticeDeathController@postDeathWithMC');
    Route::get('/deathdetails', 'NoticeDeathController@index');
    Route::post('/confirmation_death', 'NoticeDeathController@postConfirmation');
    Route::get('/noticedeath', 'NoticeDeathController@index');
    Route::post('/applicantinfo', 'NoticeDeathController@postApplicantInfo');
    Route::get('/applicantinfo', 'NoticeDeathController@index');
    Route::post('/wagesdetails_death', 'NoticeDeathController@postWages');
    Route::post('/bankinformation_death', 'NoticeDeathController@postBankInfo');
    Route::post('/otinfo', 'NoticeDeathController@postOtInfo');
    Route::get('/otinfo', 'NoticeDeathController@index');
    Route::get('/preview', 'NoticeDeathController@Preview');
    Route::get('/reftable/{accdwhen}', 'NoticeDeathController@getaccwhen');
    Route::get('/reftable1/{suboccucode}', 'NoticeDeathController@getsuboccucode');

    // Anis
    Route::post('/guardianinfo', 'NoticeDeathController@postGuardianInfo');
    Route::get('/guardianinfo', 'NoticeDeathController@index');
    /* ------------------------------ END OF NOTICE DEATH(PK) --------------------------------- */

    /* ------------------------------ NOTICE DEATH -- SCO ------------------------------------- */
    Route::get('/noticedeath_sco', 'NoticeDeathController@indexSCO');
    /* ------------------------- END OF NOTICE DEATH -- SCO ------------------------------------- */

    /* ---------------- NOTICE DEATH -- IO-------------------- */
    Route::get('/noticedeath_io', 'NoticeDeathController@indexIO');
    /* ------------------------- END OF NOTICE DEATH -- IO ------------------------------------- */

    /* ------------------------------- NOTICE DEATH -- SAO -------------------------------------- */
    Route::get('/noticedeath_sao', 'NoticeDeathController@indexSAO');
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
