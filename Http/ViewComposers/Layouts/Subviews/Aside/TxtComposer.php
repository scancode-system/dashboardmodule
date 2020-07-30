<?php

namespace Modules\Dashboard\Http\ViewComposers\Layouts\Subviews\Aside;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\TxtRepository;

class TxtComposer extends ServiceComposer {

    private $txts;

    public function assign($view)
    {
        $this->txts();
    }


    private function txts()
    {
        $this->txts = TxtRepository::load();
    }


    public function view($view)
    {
        $view->with('txts', $this->txts);
    }

}