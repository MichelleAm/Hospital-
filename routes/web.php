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

//Rutas que requieren que el usuario haya iniciado sesión
Route::group(['middleware' => 'auth'], function () {
    Route::resource('doctor', 'DoctorController');
    Route::resource('patient', 'PatientController');
    Route::resource('office', 'OfficeController');
    Route::resource('appointment', 'AppointmentController');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
