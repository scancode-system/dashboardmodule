<?php

namespace Modules\Dashboard\Http\ViewComposers\Widgets;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\WidgetRepository;

class WidgetComposer extends ServiceComposer {

    private $widgets;
    private $orders;

    public function assign($view){
        $this->widgets();
        $this->orders();
    }


    private function widgets(){
        $this->widgets = WidgetRepository::loadVisible();
    }

    private function orders(){

    }

    public function view($view){
        $view->with('widgets', $this->widgets);
        $view->with('orders', $this->orders);
    }

}