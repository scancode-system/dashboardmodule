<?php

namespace Modules\Dashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Nwidart\Modules\Facades\Module;

class ModuleEnableAll extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'module:enable-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enable all modules.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $modules = Module::allDisabled();
        foreach ($modules as $module) {
            $module->enable();
                        $this->info("Module [{$module}] habilitado com sucesso.");
        }
    }

}
