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
    Route::get('/admin/masjid/{masjid}', 'AdminController@showmasjid');
    Route::post('/admin/masjid', 'AdminController@storemasjid');
    Route::delete('/admin/masjid/{masjid}', 'AdminController@destroymasjid');
    Route::patch('/admin/masjid/{masjid}', 'AdminController@updatemasjid');

    // Mubaligh Section
    Route::get('/admin/mubaligh', 'AdminController@mubaligh');
    Route::get('/admin/mubaligh', 'AdminController@indexmubaligh');
    Route::get('/admin/mubaligh/create', 'AdminController@createmubaligh');
    Route::post('/admin/mubaligh', 'AdminController@storemubaligh');
    // Route::delete('/admin/mubaligh/{mubaligh}', 'AdminController@destroymubaligh');
    Route::patch('/admin/mubaligh/{mubaligh}', 'AdminController@updatemubaligh');

    Route::get('/admin/mubaligh/{mubaligh}', 'AdminController@showmubaligh');

    // Jadwal Section
    Route::get('/admin/jadwal', 'AdminController@jadwal');
    Route::get('/admin/jadwal', 'AdminController@indexjadwal');
    Route::get('/search', 'StudentsController@search');
});