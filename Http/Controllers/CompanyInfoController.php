<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Repositories\CompanyRepository;
use Modules\Dashboard\Http\Requests\CompanyInfoRequest;


class CompanyInfoController extends Controller
{

    public function update(CompanyInfoRequest $request)
    {
        CompanyRepository::updateInfo($request->all());
        return back()->with('success', 'Informações da empresa atualizado com sucesso.');
    }

}
