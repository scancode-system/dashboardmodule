<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Entities\Report;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{

    public function download(Request $request, Report $report){
        return Excel::download(new $report->export_class, $report->file_alias);
    }

}
