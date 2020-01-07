<?php

namespace Modules\Dashboard\Http\ViewComposers\Layouts\Subviews\Aside;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Dashboard\Repositories\BackupRepository;

class BackupComposer extends ServiceComposer {

    private $backup;

    public function assign($view)
    {
        $this->backup();
    }


    private function backup()
    {
        $this->backup = BackupRepository::load();
    }


    public function view($view)
    {
        $view->with('backup', $this->backup);
    }

}