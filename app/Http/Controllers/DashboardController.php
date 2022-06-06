<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

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
          'label'=>collect(["January","February","March","April","May","June","July","August","September","October","November","December"])
      ];
        return view('admin.dashboard', compact('data'));
    }
}
