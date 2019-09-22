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

Route::resource('transportcompany', 'TransportCompanyController');
Route::resource('representative', 'RepresentativeController');
Route::resource('direction', 'DirectionController');
Route::resource('tripinfo', 'TripInfoController');
Route::resource('tracking-movement', 'TrackingMovementController');

Route::resource('trip', 'TripController');
Route::resource('triptype', 'TripTypeController');



Route::get('dashboard', function(){
    return view('admin.dashboard.index');

})->name('dash');

Route::get('register-employee', function(){
    return view('admin.dashboard.employee.create');

})->name('register-employee');

Route::get('employee', function(){
    return view('admin.dashboard.employee.index');

})->name('employee-index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
