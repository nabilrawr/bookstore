<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Rental;
use App\Models\User;
use App\Notifications\PickupNotification;
use App\Notifications\ReturnNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\StaffExport;
use PDF;

class StatusRentController extends Controller
{
    public function complete()
    {
        $rentals = Rental::where('status_id', 3)->get();
        return view('staff.rent-status.rent-status-complete', compact('rentals'));
    }

    public function completeReplace()
    {
        $rentals = Rental::where('status_id', 1)->get();
        return view('staff.rent-status.rent-status-complete-replace', compact('rentals'));
    }

    public function completePaid()
    {
        $rentals = Rental::where('status_id', 2)->get();
        return view('staff.rent-status.rent-status-complete-paid', compact('rentals'));
    }

    public function late()
    {
        $rentals = Rental::where('status_id', 7)->get();
        return view('staff.rent-status.rent-status-late', compact('rentals'));
    }

    public function pending()
    {
        $rentals = Rental::where('status_id', 8)->get();
        return view('staff.rent-status.rent-status-pending', compact('rentals'));
    }

    public function rent()
    {
        $rentals = Rental::where('status_id', 13)->get();
        return view('staff.rent-status.rent-status-rent', compact('rentals'));
    }
    public function pickup()
    {
        $rentals = Rental::where('status_id', 13)->get();
        return view('staff.rent-status.rent-status-pickup', compact('rentals'));
    }

    public function completePdf()
    {
        $rentals = Rental::where('status_id', 3)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function completeReplacePdf()
    {
        $rentals = Rental::where('status_id', 1)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function completePaidPdf()
    {
        $rentals = Rental::where('status_id', 2)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function latePdf()
    {
        $rentals = Rental::where('status_id', 7)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function pendingPdf()
    {
        $rentals = Rental::where('status_id', 8)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function rentPdf()
    {
        $rentals = Rental::where('status_id', 13)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function pickupPdf()
    {
        $rentals = Rental::where('status_id', 9)->get();
        return PDF::loadview('report-rental', compact('rentals'))
            ->setOrientation('landscape')
            ->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->inline('ReportRental.pdf');
    }

    public function completeExcel()
    {
        return (new StaffExport(3))->download('statusComplete.xlsx');
    }

    public function completeReplaceExcel()
    {
        return (new StaffExport(1))->download('statusReplace.xlsx');
    }

    public function completePaidExcel()
    {
        return (new StaffExport(2))->download('statusPaidLate.xlsx');
    }

    public function lateExcel()
    {
        return (new StaffExport(7))->download('statusLate.xlsx');
    }

    public function pendingExcel()
    {
        return (new StaffExport(8))->download('statusPending.xlsx');
    }

    public function rentExcel()
    {
        return (new StaffExport(13))->download('statusRent.xlsx');
    }

    public function pickupExcel()
    {
        return (new StaffExport(9))->download('statusPickup.xlsx');
    }
}
