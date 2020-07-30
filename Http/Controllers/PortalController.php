<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Http;

class PortalController extends Controller
{

    public function update(Request $request)
    {
        
        //dd(config('dashboardportal.url'). '/api/dashboard/update');

        $response = Http::attach(
            'attachment', file_get_contents(storage_path('app/arquivo')), 'arquivo'
        )->post(config('dashboardportal.url'). '/api/pos');

        dd($response->body());
    }

}
