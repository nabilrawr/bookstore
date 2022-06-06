<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //1= rental
        if (Auth::user()->role == 1) {
            return redirect()->route('borrower.index-catalog');
        } else if (Auth::user()->role == 2) {
            return redirect()->route('staff.rent-record');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }
}
