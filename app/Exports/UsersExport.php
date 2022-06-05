<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class UsersExport implements FromCollection

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $bookings = DB::table('rentals')
        ->join('books', 'books.id', '=', 'rentals.book_id')
        ->join('statuses', 'statuses.id', '=', 'rentals.status_id')
        ->join('users', 'users.id', '=', 'rentals.user_id')
        // ->join('users', 'users.id', '=', 'rentals.staff_id')
        ->select('users.name as Username','books.title', 'rentals.start_date','statuses.name as statusName','users.name as Staffname')
        ->get();

        return $bookings;
        // return User::all();

    }



}
