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
    return view('home.index');
});

Route::get('wine-cocktails', 'MenuController@wine');
Route::get('happy-hour', 'MenuController@happyHour');
Route::get('brunch-menu','MenuController@brunch');
Route::get('dinner-menu', 'MenuController@dinner');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
