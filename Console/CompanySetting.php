<?php

namespace Modules\Dashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Nwidart\Modules\Facades\Module;
use Nwidart\Modules\Exceptions\ModuleNotFoundException;
use Exception;
use Illuminate\Support\Facades\Artisan;

class CompanySetting extends Command
{

    protected $name = 'company:setting';

    protected $description = 'Command description.';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        try 
        {
            $module = $this->check_module($this->argument('company'));

            $this->call('module:disable-all');
            $this->enable_modules($module);

        } catch (ModuleNotFoundException $e) {
            $this->comment($e->getMessage());
        }
    }


    private function check_module($name_module)
    {
        return Module::findOrFail($name_module);
    }

    private function enable_modules($module)
    {

        $alias_modules = $module->getRequires();
        foreach ($alias_modules as $alias_module) {
            $module = Module::find($alias_module);
            $this->enable_modules($module);
            
            $module->enable();
            $this->info("Module [{$module}] habilitado com sucesso.");
        }

    }


    protected function getArguments()
    {
        return [
            ['company', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }


}
