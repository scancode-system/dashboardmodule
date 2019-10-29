<?php

namespace Modules\Dashboard\Http\ViewComposers\Company;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\CompanyRepository;

class EditComposer extends ServiceComposer {

    private $tab;
    private $company;

    public function assign($view){
        $this->tab();
        $this->company();
    }


    private function tab(){
        $this->tab = request()->route('tab');
    }

    private function company(){
        $this->company = CompanyRepository::company();
    }

    public function view($view){
        $view->with('tab', $this->tab);
        $view->with('company', $this->company);
    }

}