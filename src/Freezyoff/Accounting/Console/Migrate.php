<?php 
namespace Freezyoff\Accounting\Console;

use Illuminate\Console\Command;

class Migrate extends Command{
	/**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'freezyoff-accounting:migrate {database : database connection to use}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install package freezyoff/accounting database migrations';

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
    public function handle(){
		$this->call('migrate',['--database'=>$this->argument('database')]);
    }
}