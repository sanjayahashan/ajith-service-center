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
    return view('home1');
});

Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/showroom', 'PageController@showroom')->name('showroom');

// Appointment Routing
Route::resource('appointments', 'AppointmentController')->except([
    'index'
]);
Route::post('appointments/timeslots', 'AppointmentController@displayTimeSlots')->name('appointments.times');

//Vehicles Routing
Route::resource('vehicles', 'VehicleController')->only([
    'index'
]);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::get('/appointments', 'AppointmentController@index')->name('appointments.index');
    Route::resource('vehicles', 'VehicleController')->except([
        'index'
    ]);
});