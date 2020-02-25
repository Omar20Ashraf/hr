<?php

Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.welcome');
})->name('home');

//contact Routes
Route::resource('contact','Admin\ContactCtrl');
//contact Message
Route::get('contactMessage','Admin\ContactCtrl@contactMessage')->name('contactMessage');

//delete contact message
Route::delete('deletecontact/{id}','Admin\ContactCtrl@deleteMessages')->name('deleteMessages');

//about routes
Route::resource('about','Admin\AboutCtrl');
//services Routed
Route::resource('service','Admin\ServicesCtrl');


// new Admins Routes
Route::resource('registerAdmins','Admin\AdminsCtrl');
//edit loged in admin infromations
Route::get('/editAdmin/{id}','Admin\AdminsCtrl@editAdmin');
Route::put('/editAdmin/{id}','Admin\AdminsCtrl@updateAdmin');

//website Information
Route::get('showSettings/{id}','Admin\SettingsCtrl@index');
Route::get('editSetting/{id}','Admin\SettingsCtrl@edit');
Route::put('editSetting/{id}','Admin\SettingsCtrl@update');


//Militray Service
Route::resource('militrayService','Admin\MilitrayServiceCtrl');

// global static names

Route::get('globalStaticNames','Admin\StaticNamesCtrl@globalNames')->name('globalStaticNames');
Route::get('editGlobalNames/{id}','Admin\StaticNamesCtrl@editGlobalNames')->name('editGlobalNames');

Route::put('editGlobalNames/{id}','Admin\StaticNamesCtrl@updateGlobalNames')->name('updateGlobalNames');
// Icarire Routes

// static names
Route::get('carierStaticNames','Admin\StaticNamesCtrl@CarierNames')->name('carierStaticNames');
Route::get('editCarierStaticNames/{id}','Admin\StaticNamesCtrl@editCarierNames')->name('editCarierStaticNames');

Route::put('editCarierStaticNames/{id}','Admin\StaticNamesCtrl@updateCarierNames')->name('updateCarierStaticNames');

// carier Company
Route::resource('jobCompanies','Admin\JobCompanyCtrl');

//if you change the route name, You have to change it at Notifications/CarierCompanyRequest
Route::get('carierCompanyRequests','Admin\JobCompanyCtrl@indexRequest')->name('carierCompanyRequests');
//approve company
Route::get('approveCarierCompany/{id}','Admin\JobCompanyCtrl@approveCompany')->name('approveCarierCompany');

//Carier employees
Route::resource('carierEmployees','Admin\CarierEmployeesCtrl');


//if you change the route name, You have to change it at Notifications/CarierCompanyRequest
Route::get('carierEmployeesRequests','Admin\CarierEmployeesCtrl@indexRequest')->name('carierEmployeesRequests');

//approve employee
Route::get('approveCarierEmployee/{id}','Admin\CarierEmployeesCtrl@approveEmployee')->name('approveCarierEmployee');


//////////////////////// Media Routes //////////////////////////////////
//companines

Route::resource('mediaCompanines','Admin\MediaCompanyCtrl');
//if you change the route name, You have to change it at Notifications/MediaCompanyRequest
Route::get('mediaCompanyRequests','Admin\MediaCompanyCtrl@indexRequest')->name('mediaCompanyRequests');

//approve company
Route::get('approveMediaCompany/{id}','Admin\MediaCompanyCtrl@approveCompany')->name('approveMediaCompany');

//employee Routes
Route::resource('mediaEmployees','Admin\MediaEmployeeCtrl');

//if you change the route name, You have to change it at Notifications/mediaEmployeeRequest
Route::get('mediaEmployeesRequests','Admin\MediaEmployeeCtrl@indexRequest')->name('mediaEmployeesRequests');

//approve employee
Route::get('approveMediaEmployee/{id}','Admin\MediaEmployeeCtrl@approveEmployee')->name('approveMediaEmployee');

// static names
Route::get('mediaStaticNames','Admin\StaticNamesCtrl@mediaNames')->name('mediaStaticNames');
Route::get('editMediaStaticNames/{id}','Admin\StaticNamesCtrl@editMediaNames')->name('editMediaStaticNames');

Route::put('editMediaStaticNames/{id}','Admin\StaticNamesCtrl@updateMediaNames')->name('updateMediaStaticNames');




//////////////////////// Study Routes //////////////////////////////////
//companines

Route::resource('studyCompanines','Admin\StudyCompanyCtrl');
//if you change the route name, You have to change it at Notifications/MediaCompanyRequest
Route::get('studyCompanyRequests','Admin\StudyCompanyCtrl@indexRequest')->name('studyCompanyRequests');

//approve company
Route::get('approveStudyCompany/{id}','Admin\StudyCompanyCtrl@approveCompany')->name('approveStudyCompany');

//employee Routes
Route::resource('studyEmployees','Admin\StudyEmployeeCtrl');

//if you change the route name, You have to change it at Notifications/StudyEmployeeRequest
Route::get('studyaEmployeesRequests','Admin\StudyEmployeeCtrl@indexRequest')->name('studyEmployeesRequests');

//approve employee
Route::get('approveStudyEmployee/{id}','Admin\StudyEmployeeCtrl@approveEmployee')->name('approveStudyEmployee');
// static names
Route::get('studyStaticNames','Admin\StaticNamesCtrl@StudyNames')->name('studyStaticNames');
Route::get('editstudyStaticNames/{id}','Admin\StaticNamesCtrl@editstudyNames')->name('editStudyStaticNames');

Route::put('editstudyStaticNames/{id}','Admin\StaticNamesCtrl@updateStudyNames')->name('updateStudyStaticNames');

//slider Routes
Route::resource('sliders','Admin\SlidersCtrl');

//home Sliders Routes
Route::get('homeSlider/{type}','Admin\HomeSlidersCtrl@index')->name('homeSlider');

Route::get('createHomeSlider/{type}','Admin\HomeSlidersCtrl@create')->name('createHomeSlider');
Route::post('createHomeSlider/{type}','Admin\HomeSlidersCtrl@store')->name('storeHomeSlider');

Route::get('editHomeSliders/{id}','Admin\HomeSlidersCtrl@edit')->name('editHomeSliders');

Route::put('editHomeSliders/{id}','Admin\HomeSlidersCtrl@update')->name('updateHomeSliders');

Route::delete('deleteHomeSliders/{id}','Admin\HomeSlidersCtrl@destroy')->name('deleteHomeSliders');

//Certificates


Route::get('certificate/{type}/{id}/{folderName}','Admin\CertificatesCtrl@index')->name('getCertificate');
Route::get('createCertificate','Admin\CertificatesCtrl@create')->name('crreateCertificate');
Route::post('createCertificate','Admin\CertificatesCtrl@store')->name('storeCertificate');
Route::delete('deleteCertificate/{id}/{folderName}','Admin\CertificatesCtrl@destroy')->name('deleteCertificate');

//download certificate
Route::get('/download/{file}/{folderName}', 'Admin\CertificatesCtrl@download')->name('dowloadCertificate');


//Work Experience

Route::get('experiences/{type}/{id}','Admin\WorkExperienceCtrl@index')->name('getExperience');
Route::get('createExperience','Admin\WorkExperienceCtrl@create')->name('crreateExperience');
Route::post('createExperience','Admin\WorkExperienceCtrl@store')->name('storeExperience');
Route::delete('deleteExperience/{id}','Admin\WorkExperienceCtrl@destroy')->name('deleteExperience');

//select Images
Route::resource('selectImages','Admin\SalectImagesCtrl');
