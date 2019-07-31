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
    return view('welcome');
});

/* -------------------- LOGIN ------------------------ */

Route::get('/login', function () {
    session(['loginid' => '']);
    session(['loginname' => '']);
    session(['loginbranchcode' => '']);
   return view('auth.login');

});

/* -------------------- LOGOUT ----------------------- */

Route::get('/logout', 'AuthController@logout');

/* ----------------- AUTHENTICATION ------------------ */

Route::post('/login', 'AuthController@login');

/* ------------------- HOME TASK --------------------- */

Route::get('/home', 'WorkbasketController@wblist');

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

/* ------------------------ COMMON ------------------------- */

Route::post('/obform', 'CommonController@postObForm');
Route::post('/bankinformation','CommonController@postBankInfo');
//HANNIS
Route::post('/employerDetails', 'CommonController@postEmployer');
Route::get('/success','CommonController@success');
Route::post('/backhome', 'CommonController@backhome');
Route::get('/getnotice','WorkbasketController@getnotice');
Route::get('/deletedraft','WorkbasketController@deletedraft');
Route::post('/back', 'CommonController@BacktoConfirmation');//chg07072019


/* ---------------- NOTICE TYPE(PK) -------------------- */

Route::post('/idno', 'NoticeTypeController@noticeType');
Route::get('/noticetype', 'NoticeTypeController@index');

/* ---------------- NOTICE ACCIDENT(PK) -------------------- */

Route::get('/noticeaccident','NoticeAccidentController@index');
Route::get('/branch/{statecode}', 'NoticeAccidentController@getbranchname');
Route::get('/reftable/{accdwhen}', 'NoticeAccidentController@getaccwhen');
Route::get('/obform', 'NoticeAccidentController@index');
Route::post('/employerdetails', 'CommonController@postEmployer');
Route::get('/accdatetime', 'NoticeAccidentController@AccidentDate');
Route::post('/accidentdatetime', 'NoticeAccidentController@checkAccidentDate');
Route::post('/wagesdetails', 'NoticeAccidentController@postWages');
//Route::post('/bankinformation','NoticeAccidentController@postBankInfo');
Route::post('/certificateemployee','NoticeAccidentController@postCertificateEmployee');
//irina
Route::post('/noticeaccident', 'NoticeAccidentController@postAccident');
Route::post('/updmc', 'NoticeAccidentController@UpdMC');


//Confirmation & Preview
Route::post('/accsave', 'NoticeAccidentController@postConfirmation');
Route::get('/preview', 'NoticeAccidentController@Preview');
Route::post('/accsubmit', 'NoticeAccidentController@Submit');
Route::post('/back', 'CommonController@BacktoConfirmation');

/* ---------------- NOTICE OD(PK) -------------------- */

Route::get('/obform_od', 'NoticeOdController@index');
Route::get('/noticeOd', 'NoticeOdController@index');
Route::post('/obform_od', 'CommonController@postObForm');
Route::post('/employerdetails_od', 'CommonController@postEmployer');
Route::post('/odupdmc', 'NoticeOdController@UpdMC');
Route::post('/confirmation_od', 'NoticeOdController@postConfirmation');
Route::post('/bankinformation_od', 'NoticeOdController@postBankInfo');
Route::post('/wagesdetails_od', 'NoticeOdController@postWages');
Route::post('/odinfo', 'NoticeOdController@postOdinfo');
Route::post('/odemphistory', 'NoticeOdController@postOdEmphistory');
Route::get('/branch/{statecode}', 'NoticeOdController@getbranchname');
Route::get('/odpreview', 'NoticeOdController@Preview');

/* ---------------- NOTICE ILAT(PK) -------------------- */

//Route::get('/noticeinvalidity','NoticeInvalidityController@index');
Route::get('/noticeinvalidity', function () {
    return view('noticeinvalidity.index');
});
Route::get('/obformilat', 'NoticeInvalidityController@index');
// Route::get('/checkIlatNotice', 'NoticeInvalidityController@checkIlatNotice');
Route::post('/wagesilat', 'NoticeInvalidityController@postWages');
Route::post('/obformilat', 'CommonController@postObForm');
Route::post('/ilatinfo', 'NoticeInvalidityController@postIlat_info');
Route::post('/emphistory', 'NoticeInvalidityController@postEmphistory');
Route::post('/confirmationilat', 'NoticeInvalidityController@postConfirmation');
Route::post('/bankinformationilat', 'NoticeInvalidityController@postBankInfo');
Route::get('/ilatpreview', 'NoticeInvalidityController@Preview');

/* ---------------- NOTICE DEATH(PK) -------------------- */

Route::get('/noticedeath','NoticeDeathController@index');
Route::post('/obform_death', 'NoticeDeathController@postObForm');
Route::get('/obform_death', 'NoticeDeathController@index');
Route::post('/employerDetails_death', 'CommonController@postEmployer');
Route::post('/deathdetails', 'NoticeDeathController@postDeathWithMC');
//Route::post('/deathdetails', 'NoticeDeathController@postAccident');
//Route::post('/deathdetails', 'NoticeDeathController@postMcDetails');
Route::get('/deathdetails', 'NoticeDeathController@index');
Route::post('/otinfo', 'NoticeDeathController@postOtInfo');
Route::get('/otinfo', 'NoticeDeathController@index');
Route::post('/guardianinfo', 'NoticeDeathController@postGuardianInfo');
Route::get('/guardianinfo', 'NoticeDeathController@index');
//Route::get('/obform_death', 'NoticeDeathController@otguardian')->name('otguardian');
Route::post('/confirmation_death', 'NoticeDeathController@postConfirmation');
Route::get('/confirmation_death', 'NoticeDeathController@index');
Route::post('/applicantinfo', 'NoticeDeathController@postApplicantInfo');
Route::get('/applicantinfo', 'NoticeDeathController@index');
Route::post('/wagesdetails_death', 'NoticeDeathController@postWages');
Route::get('/wagesdetails_death', 'NoticeDeathController@index');
Route::post('/bankinformation_death','NoticeDeathController@postBankInfo');
Route::get('/bankinformation_death','NoticeDeathController@index');

/* ------------------ UPLOAD FILE -------------------- */

Route::get('/fileupload','FileuploadController@index');
Route::get('/searchdocument', function () {
    return view('fileupload.index');
});
//najmi
Route::get('/indexobprofile', 'ObprofileController@index')->name('obprofile.index');
Route::get('/indexclaiminfo', 'ClaimController@index')->name('claim.index');
Route::post('insertlola', 'UploadobprofileController@upload')->name('obprofile.upload');
Route::post('insert', 'UploadclaimController@upload')->name('claim.upload');
Route::get('/viewdoc', 'UploadclaimController@viewstorage');

//irina
Route::get('/scanningdone', 'UploadclaimController@ScanningDone');

/* ---------------- LOCALIZATION -------------------- */

Route::get('locale', function () {
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});