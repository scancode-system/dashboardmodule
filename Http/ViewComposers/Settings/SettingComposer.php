<?php

namespace Modules\Dashboard\Http\ViewComposers\Settings;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\WidgetRepository;


class SettingComposer extends ServiceComposer {

    private $widgets;

    public function assign($view){
        $this->widgets();
    }


    private function widgets(){
        $this->widgets = WidgetRepository::loadPaginate();
    }


    public function view($view){
        $view->with('widgets', $this->widgets);
    }

}