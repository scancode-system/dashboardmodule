<?php

namespace Modules\Dashboard\Http\ViewComposers\Layouts;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;

class MasterComposer extends ServiceComposer {

    private $user;


    public function assign($view){
        $this->user();
    }


    private function user(){
        $this->user = auth()->user();
    }


    public function view($view){
        $view->with('user', $this->user);
    }

}