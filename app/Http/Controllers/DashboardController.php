<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalRental = 0;
        $assign = [];
            for($i = 1; $i <= 12 ; $i++){
            $rentals=Rental::whereMonth('start_date', $i)->get();
            $totalRental = $rentals->count();
            array_push($assign,$totalRental);
            $totalRental = 0;
        }

        $data = [
          'series'=> collect($assign),
        ];

        $rentals = DB::table('rentals')
            ->join('books', 'books.id', '=', 'rentals.book_id')
            ->join('statuses', 'statuses.id', '=', 'rentals.status_id')
            ->select('rentals.*', 'statuses.name', 'books.title')
            ->get();

        return view('admin.dashboard', compact('data','rentals'));
    }
}
