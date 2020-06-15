<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/', 'HomeController@index');
Route::resource('/masjid', 'MasjidController@index');
Route::resource('/mubaligh', 'MubalighController@index');
Route::resource('/kajian', 'KajianController@index');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home');