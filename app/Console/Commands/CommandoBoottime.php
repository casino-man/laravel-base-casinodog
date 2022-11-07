<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CommandoBoot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'commando:boot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        return Command::SUCCESS;

    }
}
