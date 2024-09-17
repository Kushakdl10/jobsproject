<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class jobalert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
            $user=User::where('is_Admin',0)->get();




        //
    }
}
