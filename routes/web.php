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
/*front-end*/
Route::get('/',[
    'uses' => 'FrontController@index',
    'as' => '/'
]);

Route::get('/department',[
    'uses' => 'FrontController@department',
    'as' => 'department'
]);

Route::get('/doctor',[
    'uses' => 'FrontController@doctor',
    'as' => 'doctor'
]);

/*front-end*/

/*patient*/

Route::get ('/patient',[
    'uses' => 'PatientController@index',
    'as' => 'patient-register'
]);

Route::post ('/patient/register',[
    'uses' => 'PatientController@patientRegister',
    'as' => 'new-patient'
]);

Route::get ('/patient/confirmed',[
    'uses' => 'PatientController@confirmAccount',
    'as' => 'confirm-account'
]);

Route::get ('/doctor/appointment',[
    'uses' => 'PatientController@appointmentForm',
    'as' => 'appointment-form'
]);



/*patient*/



//Admin

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*departments*/

Route::get('/department/add',[
    'uses' => 'DepartmentController@index',
    'as' => 'add-department'
]);

Route::post('/department/save',[
    'uses' => 'DepartmentController@saveDepartment',
    'as' => 'new-department'
]);

Route::get('/department/manage',[
    'uses' => 'DepartmentController@manageDepartment',
    'as' => 'manage-department'
]);

Route::get('/department/open/{id}',[
    'uses' => 'DepartmentController@openDepartment',
    'as' => 'open-department'
]);

Route::get('/department/unpublished/{id}',[
    'uses' => 'DepartmentController@closedDepartment',
    'as' => 'closed-department'
]);

Route::get('/department/delete/{id}',[
    'uses' => 'DepartmentController@deleteDepartment',
    'as' => 'delete-department'
]);


/*departments*/

/*Doctor*/

Route::get('/doctor/add',[
    'uses' => 'DoctorController@index',
    'as' => 'add-doctor'
]);

Route::post('/doctor/save',[
    'uses' => 'DoctorController@saveDoctor',
    'as' => 'new-doctor'
]);

Route::get('/doctor/manage',[
    'uses' => 'DoctorController@manageDoctor',
    'as' => 'manage-doctor'
]);

Route::get('/doctor/edit{id}',[
    'uses' => 'DoctorController@editDoctor',
    'as' => 'edit-doctor'
]);

Route::post('/doctor/update',[
    'uses' => 'DoctorController@updateDoctor',
    'as' => 'update-doctor'
]);

Route::get('/doctor/delete/{id}',[
    'uses' => 'DoctorController@deleteDoctor',
    'as' => 'delete-doctor'
]);


/*Doctor*/

