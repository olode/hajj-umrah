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

Route::resource('arrival', 'ArrivalController');
Route::resource('transportcompany', 'TransportCompanyController');
Route::resource('representative', 'RepresentativeController');
Route::resource('direction', 'DirectionController');
Route::resource('departure', 'DepartureController');
Route::resource('mazarat', 'MazaratController');
Route::resource('betweencity', 'BetweenCityController');
Route::resource('tripinfo', 'TripInfoController');




Route::get('dashoard', function(){
    return view('admin.dashboard.index');

})->name('dash');

// Route::get('arrival', function(){
//     return view('admin.dashboard.arrival.create');

// })->name('arrival');

// Route::get('departure', function(){
//     return view('admin.dashboard.departure.create');
// })->name('departure');


// Route::get('visit', function(){

//     return view('admin.dashboard.visit.create');

// })->name('visit');


// Route::get('between-cities', function(){
//     return view('admin.dashboard.between-cities.creat');

// })->name('between-cities');


Route::get('chase-movement', function(){
    return view('admin.dashboard.chase-movement.index');

})->name('chase-movement');


Route::get('register-employee', function(){
    return view('admin.dashboard.employee.create');

})->name('register-employee');

Route::get('employee', function(){
    return view('admin.dashboard.employee.index');

})->name('employee-index');



