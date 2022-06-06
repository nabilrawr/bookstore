<?php

namespace App\Console\Commands;

use App\Models\Rental;
use App\Models\User;
use App\Notifications\ReturnNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class ReturnNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'return:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $currentDate = Carbon::now()->addDay(-1)->format('y-m-d');

        $rentals = Rental::whereDate('end_date','>=',$currentDate)->get();

        foreach($rentals as $rental )
        {
            $user=User::find($rental->user_id);
            Notification::send($user, new ReturnNotification($rental));
        }
    }
}
