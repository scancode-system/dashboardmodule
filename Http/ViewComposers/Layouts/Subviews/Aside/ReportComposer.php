<?php

namespace Modules\Dashboard\Http\ViewComposers\Layouts\Subviews\Aside;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\ReportRepository;

class ReportComposer extends ServiceComposer {

    private $report_categories;

    public function assign($view)
    {
        $this->report_categories();
    }


    private function report_categories()
    {
        $this->report_categories = ReportRepository::loadGoupByCategoryName();
    }


    public function view($view)
    {
        $view->with('report_categories', $this->report_categories);
    }

}