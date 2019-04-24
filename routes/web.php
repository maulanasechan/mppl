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
Route::get('/home', function () {
    return view('home');
});
Route::get('/profil', function () {
    return view('profil.index');
});
Route::get('/foodprofil', function () {
    return view('foodprofil.index');
});
Route::get('/foodrecipe', function () {
    return view('foodrecipe.index');
});
Route::get('/marketplace', function () {
    return view('marketplace.index');
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
