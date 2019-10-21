<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class RepresentativeController extends Controller
{

    public function index()
    {
        return view('dashboard::representatives.index');
    }


    public function create()
    {
        return view('dashboard::representatives.create');
    }

    public function edit()
    {
        return view('dashboard::representatives.edit');
    }

}
