<?php

use Illuminate\Http\Request;

Route::get('/dashboard/check', function (Request $request) {
	return response()->json([]);
});