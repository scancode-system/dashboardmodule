<?php

namespace Modules\Dashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Modules\Dashboard\Repositories\CompanyRepository;

class RefreshLogin extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'login:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh login to default.';

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
        CompanyRepository::update(['name' => 'scancode', 'password' => 'scancode']);
    }


}
