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




Route::get('dash', function(){
    return view('admin.dashboard.index');

})->name('dash');

Route::get('arrival', function(){
    return view('admin.dashboard.arrival.create');

})->name('arrival');

Route::get('departure', function(){
    return view('admin.dashboard.index');

})->name('departure');


Route::get('visit', function(){

    return view('dashboard/visit/visit-form');

})->name('visit');


Route::get('between-cities', function(){
    return view('admin.dashboard.between-cities.creat');

})->name('between-cities');


Route::get('chase-movement', function(){
    return view('admin.dashboard.chase-movement.chase-movement');

})->name('chase-movement');


