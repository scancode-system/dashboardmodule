<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CompanyController extends Controller
{


    public function edit(Request $request, $tab)
    {
        return view('dashboard::companies.edit');
    }


}
