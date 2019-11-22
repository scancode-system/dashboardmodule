<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Entities\Widget;
use Modules\Dashboard\Http\Requests\Setting\WidgetRequest;
use Modules\Dashboard\Repositories\WidgetRepository;

class SettingDashboardController extends Controller
{

    public static function updateWidget(WidgetRequest $request, Widget $widget){
        WidgetRepository::update($widget, $request->all());
        return back()->with('success', 'Configuração atualizada.');
    }

}
