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
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('dashboard')->middleware('auth')->group(function() {

	Route::get('', 'DashboardController@index')->name('dashboard');

});


Route::prefix('companies')->middleware('auth')->group(function() {

		Route::get('{tab}', 'CompanyController@edit')->name('companies.edit');
		Route::put('upload', 'CompanyController@upload')->name('companies.upload');

});

Route::prefix('settings')->middleware('auth')->group(function() {

		Route::get('{tab}', 'SettingController@index')->name('settings.index');

});