<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ClientController extends Controller
{

    public function index()
    {
        return view('dashboard::clients.index');
    }


    public function create()
    {
        return view('dashboard::clients.create');
    }

    public function edit()
    {
        return view('dashboard::clients.edit');
    }

}
