<?php

use App\Models\CarierStaticNames;

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get('/', 'PagesCtrl@index');

Route::get('/about', 'PagesCtrl@about');

//contact us route
Route::get('/contact', 'PagesCtrl@contact');

//store Contact us messages
Route::post('storeContactUs', 'SiteCtrl@storeContactUs')->name('storeContactus');

//download certificate
Route::get('/download/{file}/{folderName}', 'Site\SectionsCtrl@download')->name('dowloadCertificate');

//Icarier Routes

Route::get('/carier-select', 'Site\CarierAuthCtrl@Select')->name('carierSelect');
//company

//show login&& register page

Route::get('/carier-company-register','Site\CarierAuthCtrl@showCarierForm')->name('carierCompanyAuth');

//register company
Route::post('/carier-company-register', 'Site\CarierAuthCtrl@Companyregister')->name('carierCompanyRegister');

//login company
Route::post('carierLogin', 'Site\CarierAuthCtrl@companyLogin')->name('carierLogin');

Route::middleware(['carierCompany'])->group(function () {

// if you change the route name ('carierCompanies') change it in Auth\LoginController

Route::get('/carierCompanies', function () {
    return view('carier.company');
})->name('carierCompany');

Route::get('/carierCompany/{slug}','Site\SectionsCtrl@carierCompany')->name('carierCompanyName');

//show edit Carier Employee Information
Route::get('/carier/profile/editEmployee/{slug}','Site\UsersCtrl@editCarierEmployee')->name('editCarierEmployee');

//update Company Information
Route::put('/carier/profile/editEmployee/{id}','Admin\CarierEmployeesCtrl@update')->name('updateCarierEmployee');

});




/////////////////////////End Company Routes///////////////////////////////

//employee

Route::get('/carier-employee-register','Site\CarierAuthCtrl@showCarierEmployeeForm')->name('carierEmployeeAuth');

//register Employee
Route::post('/carier-employee-register', 'Site\CarierAuthCtrl@employeeRegister')->name('carierEmployeeRegister');
//login Employee
Route::post('carierEmployeeLogin', 'Site\CarierAuthCtrl@EmployeeLogin')->name('carierEmployeeLogin');


Route::middleware(['auth', 'carierEmployee'])->group(function () {
    // if you change the route name ('carierEmployees') change it in Auth\LoginController
    Route::get('/carierEmployees', function () {
        return view('carier.employees');
    })->name('carierEmployee');

    Route::get('/carierEmployee/{name}','Site\SectionsCtrl@carierEmployee')->name('singleCarierEmployee');
    
    //edit Company Information
    Route::get('/carier/profile/editCompany/{slug}','Site\UsersCtrl@editCarierCompany')->name('editCarierCompany');
    //update Company Information
    Route::put('/carier/profile/editCompany/{id}','Admin\JobCompanyCtrl@update')->name('updateCarierCompany');

});

//////////////////////////////////////////Media Routes/////////////////////

// show select page
Route::get('/mediaSelect', 'Site\MediaAuthCtrl@Select')->name('mediaSelect');


//media companies
// show auth page
Route::get('/mediaCompanyAuth','Site\MediaAuthCtrl@showCompanyForm')->name('mediaCompanyAuth');
//register company
Route::post('/mediaCompanyRegister', 'Site\MediaAuthCtrl@Companyregister')->name('mediaCompanyRegister');
//login company
Route::post('mediaCompanyLogin', 'Site\MediaAuthCtrl@companyLogin')->name('mediaCompanyLogin');

//All Media Companines
Route::middleware(['auth', 'mediaCompany'])->group(function () {

    // if you change the route name ('mediaCompany') change it in Auth\LoginController
    Route::get('/mediaCompanies', function () {
        return view('media.company');
    })->name('mediaCompany');

    Route::get('/mediaCompany/{slug}','Site\SectionsCtrl@mediaCompany')->name('mediaCompanyName');
    
    //show edit media Employee Information
    Route::get('/media/profile/editEmployee/{slug}','Site\UsersCtrl@editMediaEmployee')->name('editMediaEmployee');

    Route::put('/media/profile/editEmployee/{id}','Admin\MediaEmployeeCtrl@update')->name('updateMediaEmployee');

});


//////////////////////////IMedia Employees//////////////

//show media employee form

// if you change the name of the link (mediaTalentedAuth) you have to change it in EmployeeRegisterRequests
Route::get('/mediaTalentedAuth','Site\MediaAuthCtrl@showEmployeeForm')->name('mediaEmployeeAuth');

//register new media employee
Route::post('/mediaEmployeeRegister', 'Site\MediaAuthCtrl@employeeRegister')->name('mediaEmployeeRegister');

//login employee
Route::post('mediaEmployeeLogin', 'Site\MediaAuthCtrl@employeeLogin')->name('mediaEmployeeLogin');

Route::middleware(['mediaEmployee'])->group(function () {

    // if you change the route name ('mediaTalented') change it in Auth\LoginController

    // show all media talented
    Route::get('/mediaTalented', function () {
        return view('media.employees');
    })->name('mediaTalents');

    // show single media talented
    Route::get('/mediaTalented/{slug}','Site\SectionsCtrl@mediaEmployee')->name('mediaTalented');
    
    //edit Company Information
    Route::get('/media/profile/editCompany/{slug}','Site\UsersCtrl@editMediaCompany')->name('editMediaCompany');
    //update Company Information
    Route::put('/media/profile/editCompany/{id}','Admin\MediaCompanyCtrl@update')->name('updateMediaCompany');

});
////////////////////////////IStudy///////////////////////////////////

// show select page
Route::get('/studySelect', 'Site\StudyAuthCtrl@Select')->name('studySelect');

//study companies
// show auth page
Route::get('/studyCompanyAuth','Site\StudyAuthCtrl@showCompanyForm')->name('studyCompanyAuth');
//register company
Route::post('/studyCompanyRegister', 'Site\StudyAuthCtrl@Companyregister')->name('studyCompanyRegister');
//login company
Route::post('studyCompanyLogin', 'Site\StudyAuthCtrl@companyLogin')->name('studyCompanyLogin');

//All study Companines
Route::middleware(['studyCompany'])->group(function () {

    // if you change the route name ('studyCompanies') change it in Auth\LoginController
    Route::get('/studyCompanies', function () {
        return view('study.company');
    })->name('studyCompany');

    Route::get('/studyCompany/{slug}','Site\SectionsCtrl@studyCompany')->name('studyCompanyName');
    
    //show edit study Employee Information
    Route::get('/study/profile/editEmployee/{slug}','Site\UsersCtrl@editStudyEmployee')->name('editStudyEmployee');

    Route::put('/study/profile/editEmployee/{id}','Admin\StudyEmployeeCtrl@update')->name('updateStudyEmployee');

});



//////////////////////////IMedia Employees//////////////

//show media employee form

// if you change the name of the link (studyTalentedAuth) you have to change it in EmployeeRegisterRequests
Route::get('/studyTalentedAuth','Site\StudyAuthCtrl@showEmployeeForm')->name('studyEmployeeAuth');

//register new media employee
Route::post('/studyEmployeeRegister', 'Site\StudyAuthCtrl@employeeRegister')->name('studyEmployeeRegister');

//login employee
Route::post('studyEmployeeLogin', 'Site\StudyAuthCtrl@employeeLogin')->name('studyEmployeeLogin');

Route::middleware(['auth', 'studyEmployee'])->group(function () {

    // if you change the route name ('studyEmployee') change it in Auth\LoginController

    // show all Study talented
    Route::get('/studyEmployee', function () {
        return view('study.employees');
    })->name('studyEmployees');

    // show single media talented
    Route::get('/studyEmployee/{slug}','Site\SectionsCtrl@studyEmployee')->name('singleStudyEmployee');
    
    //edit Company Information
    Route::get('/study/profile/editCompany/{slug}','Site\UsersCtrl@editStudyCompany')->name('editStudyCompany');
    //update Company Information
    Route::put('/study/profile/editCompany/{id}','Admin\StudyCompanyCtrl@update')->name('updateStudyCompany');

});
//admin routes
Route::group(['prefix' => 'admin'], function () {

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

    //show User Information
    Route::get('/profile/{id}/{type}','Site\UsersCtrl@profile')->name('profile');

    //experience Routes
    //show Employee Work Experience
    Route::get('/showEmployeeExperience/{slug}/{userType}','Site\EditEmployeeCtrl@showEmployeeExperience')->name('showEmployeeExperience');

    //create New Employee Experience
    Route::get('/profile/createExperience/{userType}/{employeeId}','Site\EditEmployeeCtrl@createEmployeeExperience')->name('createExperience');

    Route::post('/profile/createExperience','Site\EditEmployeeCtrl@storeExperience')->name('storeExperience');
    //delete Experience
    Route::delete('deleteExperience/{id}','Admin\WorkExperienceCtrl@destroy')->name('deleteExperience');


    //certificates Routes

    //show Employee Work Experience
    Route::get('/showEmployeeCertificates/{slug}/{userType}','Site\EditEmployeeCtrl@showEmployeeCertificates')->name('showEmployeeCertificates');

    //create New Employee Experience
    Route::get('/profile/createCertificates','Site\EditEmployeeCtrl@createEmployeeCertificates')->name('createCertificates');

    Route::post('/profile/createCertificates','Site\EditEmployeeCtrl@storeCertificates')->name('storeCertificates');
    //delete Experience
    Route::delete('deleteCertificates/{id}/{folderName}','Admin\CertificatesCtrl@destroy')->name('deleteCertificates');


});
