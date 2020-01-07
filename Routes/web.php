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

// auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// dashboard
Route::prefix('dashboard')->middleware('auth')->group(function() {
	Route::get('', 'DashboardController@index')->name('dashboard');
});

// companies
Route::prefix('companies')->middleware('auth')->group(function() {
	Route::get('{tab}', 'CompanyController@edit')->name('companies.edit');
	Route::post('logo', 'CompanyController@updateLogo')->name('companies.updateLogo');
});
Route::prefix('company_infos')->middleware('auth')->group(function() {
	Route::put('', 'CompanyInfoController@update')->name('company_infos.update');
});
Route::prefix('company_addresses')->middleware('auth')->group(function() {
	Route::put('', 'CompanyAddressController@update')->name('company_addresses.update');
});

// settings
Route::prefix('settings')->middleware('auth')->group(function() {
	Route::get('{tab}', 'SettingController@index')->name('settings.index');
});

Route::prefix('setting_dasboard')->middleware('auth')->group(function() {
	Route::put('{widget}', 'SettingDashboardController@updateWidget')->name('setting_dashboard.update.widget');
});


Route::prefix('backup')->middleware('auth')->group(function() {
	Route::put('', 'BackupController@update')->name('backup.update');
});