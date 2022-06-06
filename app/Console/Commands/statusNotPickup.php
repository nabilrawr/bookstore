<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Rental;
use Carbon\Carbon;

class statusNotPickup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statusRental:notPickup';

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
        $startDate = Carbon::now()->format('y-m-d');
        $rentals = Rental::whereDate('start_date', '<', $startDate)->where('status_id', 9)->delete()->get();
    }
}
