<?php

use Illuminate\Http\Request;

Route::get('/dashboard/check', function (Request $request) {
	return response()->json([]);
}); 


Route::prefix('dashboard')->middleware('auth.basic.once')->group(function() {

	Route::get('settings', 'Api\SettingsController@settings');
	
});
