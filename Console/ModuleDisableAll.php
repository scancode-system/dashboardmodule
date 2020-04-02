<?php

namespace Modules\Dashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Nwidart\Modules\Facades\Module;

class ModuleDisableAll extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'module:disable-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disable all modules.';

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
        $modules = Module::allEnabled();
        foreach ($modules as $module) {
            if($module->getName() != 'Dashboard' || $this->options()['force'] !== false){
                $this->comment("Module [{$module}] desabilitado com sucesso.");
                $module->disable();
            }
        }       
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    /*protected function getArguments()
    {
        return [
            ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }*/

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_OPTIONAL, 'An example option.', false],
        ];
    }

}
