<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\ShellCommand;

class GlobalUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public $commands = [
        'composer update',
        'npm update',
        'php artisan optimize:clear',
        'php artisan migrate:fresh --seed',
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach($this->commands as $command){
            $this->line($command);
            ShellCommand::execute($command);
        }
    }

}
