<?php

namespace App\Console\Commands;

use App\Models\Rental;
use App\Models\User;
use App\Notifications\PickupNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class PickupNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:pickup';

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
        $currentTime = Carbon::now()->addHour(-1)->format('y-m-d H:i');

        $rentals = Rental::where('start_date','>=',$currentTime)->get();

        foreach($rentals as $rental )
        {
            $user=User::find($rental->user_id);
            Notification::send($user, new PickupNotification($rental));
        }
    }
}
