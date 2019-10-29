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

Route::prefix('products')->middleware('auth')->group(function() {
	Route::get('', 'ProductController@index')->name('products.index');
	Route::get('create', 'ProductController@create')->name('products.create');
	Route::get('{product}/edit', 'ProductController@edit')->name('products.edit');

	Route::post('', 'ProductController@store')->name('products.store');
	Route::put('', 'ProductController@update')->name('products.update');
	Route::delete('{product}/destroy', 'ProductController@destroy')->name('products.destroy');		
});


Route::prefix('clients')->middleware('auth')->group(function() {
	Route::get('', 'ClientController@index')->name('clients.index');
	Route::get('create', 'ClientController@create')->name('clients.create');
	Route::get('{clients}/edit', 'ClientController@edit')->name('clients.edit');

	Route::post('', 'ClientController@store')->name('clients.store');
	Route::put('', 'ClientController@update')->name('clients.update');
	Route::delete('{clients}/destroy', 'ClientController@destroy')->name('clients.destroy');		
});


Route::prefix('representatives')->middleware('auth')->group(function() {
	Route::get('', 'RepresentativeController@index')->name('representatives.index');
	Route::get('create', 'RepresentativeController@create')->name('representatives.create');
	Route::get('{representatives}/edit', 'RepresentativeController@edit')->name('representatives.edit');

	Route::post('', 'RepresentativeController@store')->name('representatives.store');
	Route::put('', 'RepresentativeController@update')->name('representatives.update');
	Route::delete('{representatives}/destroy', 'RepresentativeController@destroy')->name('representatives.destroy');		
});


Route::prefix('orders')->middleware('auth')->group(function() {
	Route::get('', 'OrderController@index')->name('orders.index');
	Route::get('{order}/edit/{tab?}', 'OrderController@edit')->name('orders.edit');

	Route::post('', 'OrderController@store')->name('orders.store');
	// put
	Route::put('{order}', 'OrderController@update')->name('orders.update');
	Route::put('{order}/client', 'OrderController@updateClient')->name('orders.update.client');
	Route::put('{order}/representative', 'OrderController@updateRepresentative')->name('orders.update.representative');
	Route::put('{order}/payment', 'OrderController@updatePayment')->name('orders.update.payment');
	// delete
	Route::delete('{order}/destroy', 'OrderController@destroy')->name('orders.destroy');
});

Route::prefix('order_items')->middleware('auth')->group(function() {
	// post
	Route::post('', 'OrderItemController@store')->name('order_items.store');
	// put
	Route::put('{order_item}', 'OrderItemController@update')->name('order_items.update');
	// delete
	Route::delete('{order_item}/destroy', 'OrderItemController@destroy')->name('order_items.destroy');
});