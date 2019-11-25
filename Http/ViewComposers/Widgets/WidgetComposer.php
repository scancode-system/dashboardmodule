<?php

namespace Modules\Dashboard\Http\ViewComposers\Widgets;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\WidgetRepository;

class WidgetComposer extends ServiceComposer {

    private $widgets;

    public function assign($view){
        $this->widgets();
    }


    private function widgets(){
        $this->widgets = WidgetRepository::loadVisible();
    }


    public function view($view){
        $view->with('widgets', $this->widgets);
    }

}