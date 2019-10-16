<?php

namespace Modules\Dashboard\Http\ViewComposers\Setting;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;

class IndexComposer extends ServiceComposer {

    private $tab;

    public function assign($view){
        $this->tab();
    }


    private function tab(){
        $this->tab = request()->route('tab');
    }


    public function view($view){
        $view->with('tab', $this->tab);
    }

}