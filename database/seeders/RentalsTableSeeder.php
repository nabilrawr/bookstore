<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rentals')->delete();
        
        \DB::table('rentals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 6,
                'start_date' => '2022-06-08 14:00:00',
                'end_date' => '2022-06-15 14:00:00',
                'status_id' => 3,
                'book_id' => 38,
                'staff_id' => NULL,
                'receipt' => NULL,
                'day' => 7,
                'fee' => 0.0,
                'created_at' => '2022-06-08 14:00:47',
                'updated_at' => '2022-06-08 14:05:37',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 7,
                'start_date' => '2022-06-08 14:03:00',
                'end_date' => '2022-06-15 14:03:00',
                'status_id' => 1,
                'book_id' => 31,
                'staff_id' => 4,
                'receipt' => NULL,
                'day' => NULL,
                'fee' => 102.9,
                'created_at' => '2022-06-08 14:03:10',
                'updated_at' => '2022-06-08 14:05:52',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'start_date' => '2022-06-09 14:03:00',
                'end_date' => '2022-06-16 14:03:00',
                'status_id' => 3,
                'book_id' => 35,
                'staff_id' => NULL,
                'receipt' => NULL,
                'day' => 7,
                'fee' => 0.0,
                'created_at' => '2022-06-08 14:04:07',
                'updated_at' => '2022-06-08 14:06:04',
            ),
        ));
        
        
    }
}