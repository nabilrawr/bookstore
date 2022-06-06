<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Category;
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
        //find total rental by month
        $totalRental = 0;
        $assign = [];
            for($i = 1; $i <= 12 ; $i++){
            $rentals=Rental::whereMonth('start_date', $i)->get();
            $totalRental = $rentals->count();
            array_push($assign,$totalRental);
            $totalRental = 0;
        }

        $data1 = [
          'total'=> collect($assign),
        ];

        //list of rental in table
        $rentals = DB::table('rentals')
            ->select('rentals.*', 'statuses.name', 'books.title')
            ->join('books', 'books.id', '=', 'rentals.book_id')
            ->join('statuses', 'statuses.id', '=', 'rentals.status_id')
            ->where('rentals.status_id', '=', 8)//status pending
            ->orWhere('rentals.status_id', '=', 9)//status pickup
            ->get();

        //status pending = 8
        $totalPending = count(Rental::query()->where('status_id', '=', 8)->get());

        //status pickup = 9
        $totalPickup = count(Rental::query()->where('status_id', '=', 9)->get());

        //status rent = 13
        $totalRent = count(Rental::query()->where('status_id', '=', 13)->get());

        //status complete = 14
        $totalComplete = count(Rental::query()->where('status_id', '=', 14)->get());

        //store catergory name
        $listCategories = [];
        $categories=Category::all();

        foreach( $categories as $category )
        {
            array_push($listCategories,$category->name);
        }

        //find total book rent by category
        $totalRentByCategories = [];
        $totalCategory = count($categories);
        for( $i =1 ; $i<= $totalCategory ; $i++)
        {
            $temp=count(BookCategory::query()->where('category_id', '=', $i)->get());
            array_push($totalRentByCategories,$temp);
        }

        $data2 = [
            'categoryName'=> collect($listCategories),
            'total'=>collect($totalRentByCategories)
        ];
        

        return view('admin.dashboard', compact('data1','rentals','totalPending','totalPickup','totalRent','totalComplete','data2'));
    }
}
