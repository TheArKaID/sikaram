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

Route::resource('/', 'HomeController');
Route::resource('/masjid', 'MasjidController');
Route::resource('/mubaligh', 'MubalighController');
Route::resource('/kajian', 'KajianController');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@index')->name('home');

    // Masjid Section
    Route::get('/admin/masjid', 'AdminController@indexmasjid');
    Route::get('/admin/masjid/create', 'AdminController@createmasjid');
    Route::post('/admin/masjid', 'AdminController@storemasjid');

    // Mubaligh Section
    Route::get('/admin/mubaligh', 'AdminController@mubaligh');

    // Jadwal Section
    Route::get('/admin/jadwal', 'AdminController@jadwal');
});