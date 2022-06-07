<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

use App\Models\Rental;

class FeeReturnLate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statusReturn:lateFee';

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
        $rentals = Rental::where('status_id', '=', 6)->get();
        foreach($rentals as $rental){
            $endDay = Carbon::parse($rental->end_date);
            $currentDay = Carbon::now();
            $lateDay= $endDay->diffInDays($currentDay);

            Rental::where('user_id','=', $rental->id)->update(array('day' => $lateDay));

        }

    }
}
