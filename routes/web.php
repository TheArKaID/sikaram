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

Route::get('/', 'HomeController@index');

Route::get('/masjid', 'MasjidController@index');
Route::get('/masjid/search', 'MasjidController@search');

Route::get('/mubaligh', 'MubalighController@index');
Route::get('/mubaligh/search', 'MubalighController@search');

Route::get('/kajian', 'KajianController@index');
Route::get('/kajian/search', 'KajianController@search');

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
    Route::delete('/admin/mubaligh/{mubaligh}', 'AdminController@destroymubaligh');
    Route::patch('/admin/mubaligh/{mubaligh}', 'AdminController@updatemubaligh');
    Route::get('/admin/mubaligh/{mubaligh}', 'AdminController@showmubaligh');

    // Jadwal Section
    Route::get('/admin/jadwal', 'AdminController@indexjadwal');
    Route::get('/admin/jadwal/create', 'AdminController@createjadwal');
    Route::get('/admin/jadwal/{jadwal}', 'AdminController@showjadwal');
    Route::post('/admin/jadwal', 'AdminController@storejadwal');
    Route::delete('/admin/jadwal/{jadwal}', 'AdminController@destroyjadwal');
    Route::patch('/admin/jadwal/{jadwal}', 'AdminController@updatejadwal');
});