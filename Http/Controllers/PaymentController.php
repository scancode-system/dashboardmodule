<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{

    public function index()
    {
        return view('dashboard::payments.index');
    }


    public function create()
    {
        return view('dashboard::payments.create');
    }

    public function edit()
    {
        return view('dashboard::payments.edit');
    }

}
