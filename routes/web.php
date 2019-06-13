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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/showroom', 'VehicleController@index')->name('showroom');

// Appointment Routing
Route::resource('appointments', 'AppointmentController')->except([
    'index'
]);
Route::post('appointments/timeslots', 'AppointmentController@displayTimeSlots')->name('appointments.times');


Route::group(['middleware' => ['admin']], function () {
    Route::get('/adweb', 'AdminController@adweb')->name('admin.adweb');
    Route::get('/appointments', 'AppointmentController@index')->name('appointments.index');
    Route::resource('vehicles', 'VehicleController')->except([
        'index', 'show'
        ]);
        //Route::get('/adweb', 'AdminController@adweb')->name('admin.adweb');
        Route::get('/ad', 'AdminController@ad')->name('admin.ad');
        Route::get('/msg', 'AdminController@msg')->name('admin.msg');
        //Route::get('/create', 'VehicleController@create')->name('vehicles.create');
        Route::get('/manageads', 'AdController@manage')->name('ads.manage');
    });
    
    //ad routing
    Route::resource('ads', 'AdController');
    
    // Vehicles Routing
    Route::resource('vehicles', 'VehicleController')->only([
        'index', 'show'
    ]);
