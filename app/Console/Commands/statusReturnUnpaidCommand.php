<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Rental;
use Carbon\Carbon;

class statusReturnUnpaidCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statusReturn:unpaidReturn';

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
        $rentals = Rental::where('status_id', 7)->update(['status_id' => 6])->get();
    }
}
