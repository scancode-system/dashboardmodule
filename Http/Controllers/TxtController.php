<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Entities\Txt;

class TxtController extends Controller
{

    public function download(Request $request, Txt $txt){
        //$txt_service = new $txt->service_class($txt->file_alias);
        return (new $txt->service_class($txt->alias))->download();
    }

}
