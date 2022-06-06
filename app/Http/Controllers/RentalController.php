<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rental;
use App\Models\User;
use App\Notifications\PickupNotification;
use App\Notifications\ReturnNotification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use DateTime;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = DB::table('rentals')
            ->join('books', 'books.id', '=', 'rentals.book_id')
            ->join('statuses', 'statuses.id', '=', 'rentals.status_id')
            ->select('rentals.*', 'statuses.name', 'books.title')
            ->get();
        return view('borrower.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
        ]);

        //automatik tambah 7 hari
        $end_date_copy = Carbon::parse($request->start_date);
        $end_date = $end_date_copy->addDays(7);

        $rental = new Rental();
        $rental->start_date = $request->start_date;
        $rental->end_date = $end_date;
        $rental->user_id = $request->user_id;
        $rental->book_id = $request->book_id;
        $rental->save();

        return redirect()->route('borrower.index-booking')->with('success', 'Booking added successfully');
    }

    //status rent update
    public function statusRent(Rental $rental)
    {
        $staff = Auth::user()->id;
        $user = User::first();
        // return $user;
        if ($rental->status_id == 8) {
            $rental->user_id = $rental->user_id;
            $rental->start_date = $rental->start_date;
            $rental->book_id = $rental->book_id;
            $rental->status_id = 9;
            $rental->staff_id = $rental->staff_id;
            $rental->receipt = $rental->receipt;
            $rental->save();

            Notification::send($user, new PickupNotification($rental));

            Alert::success('Success', 'Rental Can Come Pickup The Book');
        } else if ($rental->status_id == 9) {
            $rental->user_id = $rental->user_id;
            $rental->start_date = $rental->start_date;
            $rental->book_id = $rental->book_id;
            $rental->status_id = 13;
            $rental->staff_id = $rental->staff_id;
            $rental->receipt = $rental->receipt;
            $rental->save();

            Alert::success('Success', 'The Book Has Been Rented');
        } else if ($rental->status_id == 13) {
            $rental->user_id = $rental->user_id;
            $rental->start_date = $rental->start_date;
            $rental->book_id = $rental->book_id;
            $rental->status_id = 3;
            $rental->staff_id = $rental->staff_id;
            $rental->receipt = $rental->receipt;
            $rental->save();

            Notification::send($user, new ReturnNotification($rental));

            Alert::success('Success', 'The Book Has Been Retured and Complete');
        } else if ($rental->status_id == 6) {
            $rental->user_id = $rental->user_id;
            $rental->start_date = $rental->start_date;
            $rental->book_id = $rental->book_id;
            $rental->status_id = 2;
            $rental->staff_id = $staff;
            $rental->receipt = $rental->receipt;
            $rental->save();

            Notification::send($user, new ReturnNotification($rental));

            Alert::success('Success', 'The book already paid for the late return');
        }

        return redirect()->route('staff.rent-record');
    }

    //status rent update
    public function statusRentDamage(Rental $rental)
    {
        $staff = Auth::user()->id;
        $user = User::first();

        $rental->user_id = $rental->user_id;
        $rental->start_date = $rental->start_date;
        $rental->book_id = $rental->book_id;
        $rental->status_id = 1;
        $rental->staff_id = $staff;
        $rental->receipt = $rental->receipt;
        $rental->save();

        Notification::send($user, new ReturnNotification($rental));

        Alert::success('Success', 'The book already paid for the damage / missing book');

        return redirect()->route('staff.rent-record');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexCatalog()
    {
        $books = Book::orderByDesc('created_at')->get();
        $categories = Category::all();
        return view('borrower.catalog-index', compact('books', 'categories'));
    }

    public function listbook()
    {
        $books = Book::orderByDesc('created_at')->get();
        $categories = Category::all();
        return view('borrower.book-list', compact('books', 'categories'));
    }

    public function showCatalog(Book $book)
    {
        $categories = Category::all();
        return view('borrower.catalog-show', compact('book', 'categories'));
    }

    public function pdfReportRental(Request $request)
    {

        $rentals = Rental::all();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function pdfReceipt(Request $request)
    {

        $rentals = Rental::all();
        return PDF::loadview('receipt', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '10mm')
            ->setOption('margin-top', '10mm')
            ->inline('RentalReceipt.pdf');
    }
}
