<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    

    public function index()
    {
        return view('dashboard::products.index');
    }


    public function create()
    {
        return view('dashboard::products.create');
    }

    public function edit()
    {
        return view('dashboard::products.edit');
    }

}
