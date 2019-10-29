<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Repositories\CompanyRepository;
use Modules\Dashboard\Http\Requests\CompanyAddressRequest;


class CompanyAddressController extends Controller
{


    public function update(CompanyAddressRequest $request)
    {
        CompanyRepository::updateAddress($request->all());
        return back()->with('success', 'Endereo da empresa atualizado com sucesso.');
    }


}
