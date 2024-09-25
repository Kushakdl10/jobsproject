<?php

namespace App\Console\Commands;

use App\Models\applications;
use App\Models\recommendation;
use App\Models\User;
use Carbon\Carbon;
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
        $users = applications::where('created_at', '<', Carbon::now()->subDay())->get();

        foreach($users as $user) {
            recommendation::create([
                'user_id' => $user->users_id,
                'status' => 0
            ]);
        }
    }

















    //

}
