<?php

namespace Modules\Dashboard\Http\ViewComposers\Layouts;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\CompanyRepository;

class MasterComposer extends ServiceComposer {

    private $company;


    public function assign($view){
        $this->company();
    }


    private function company(){
        $this->company = CompanyRepository::company();
    }


    public function view($view){
        $view->with('company', $this->company);
    }

}