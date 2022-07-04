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
    return view('home');  //return dari home
});
Route::get('table', function () {
    return view('table');  //return dari home
});

Route::get('about', function () {
    return view('about');  //return dari home
});

Route::get('features', function () {
    return view('features');  //return dari home
});

Route::get('contact', function () {
    return view('contact');  //return dari home
});



Route::get('/table', 'tableController@myTable');
Route::get('table/{NIS}/{pelajaran}', 'tableController@myTable')->name('table');
Route::get('/features', 'featureController@index')->name('NIS');


Route::get('/table', 'tableController@myTable')->name('table');

Route::get('features', 'featureController@show')->name('NIS');