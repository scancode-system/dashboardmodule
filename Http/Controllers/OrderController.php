<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{


    public function index()
    {
        return view('dashboard::orders.index');
    }

    public function edit(Request $request, $id, $tab = 0)
    {
        return view('dashboard::orders.edit');
    }


}
