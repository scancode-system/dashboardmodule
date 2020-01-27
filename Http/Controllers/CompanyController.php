<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Repositories\CompanyRepository;

class CompanyController extends Controller
{


    public function edit(Request $request, $tab)
    {
        return view('dashboard::companies.edit');
    }

    public function update(Request $request){
    	CompanyRepository::update($request->all());
        return back()->with('success', 'Login atualizado com sucesso.');
    }

    public function updateLogo(Request $request){
    	$request->file->store('companies/logo/', 'public');
    	CompanyRepository::updateLogo('storage/companies/logo/'. $request->file->hashName());
    }


}
