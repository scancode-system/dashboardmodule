<?php

use Illuminate\Http\Request;

Route::get('/dashboard', function (Request $request) {
	return response()->json([]);
});