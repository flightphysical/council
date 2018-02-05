<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddThreadCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Dummy Thread to test scheduler';

    /**
     * Create a new command instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        parent::__construct();
//    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
