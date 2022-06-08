<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStartRow;

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class StaffExport implements FromCollection, ShouldAutoSize, WithHeadings, WithEvents

{
    use Exportable;

    public function collection()
    {

        $bookings = DB::table('rentals')
            // ->join('books', 'books.id', '=', 'rentals.book_id')
            // ->join('statuses', 'statuses.id', '=', 'rentals.status_id')
            // ->join('users', 'users.id', '=', 'rentals.user_id')
            // // ->join('users', 'users.id', '=', 'rentals.staff_id')
            // ->select('rentals.id','users.name as Username','books.title', 'rentals.start_date','statuses.name as statusName','users.name as Staffname')
            // ->get();

            ->join('books', 'books.id', '=', 'rentals.book_id')
            ->join('statuses', 'statuses.id', '=', 'rentals.status_id')
            ->join('users', 'users.id', '=', 'rentals.user_id')->on('users', 'users.id', '=', 'rentals.staff_id')
            // ->join('users', 'users.id', '=', 'rentals.staff_id')
            ->select('rentals.id', 'users.name as Username', 'rentals.staff_id as Staffname', 'rentals.start_date', 'rentals.end_date', 'books.title', 'statuses.name as statusName',)
            ->get();

        return $bookings;
    }

    public function headings(): array
    {
        return [
            'No',
            'Borrower Name',
            'Staff On Charge',
            'Pickup date',
            'Return Date',
            'Book Title',
            'Status',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getFont()->setName('Arial');
                $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getFont()->setSize(10);

                //Style
                $event->sheet->getstyle('A1:G1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '00000000'],
                        ],
                    ]


                ]);
            },
        ];
    }
}
