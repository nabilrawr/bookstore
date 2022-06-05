<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('book_categories')->delete();
        
        \DB::table('book_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'book_id' => 1,
                'category_id' => 1,
                'created_at' => '2022-06-04 17:41:01',
                'updated_at' => '2022-06-04 17:41:01',
            ),
            1 => 
            array (
                'id' => 2,
                'book_id' => 2,
                'category_id' => 2,
                'created_at' => '2022-06-04 17:42:35',
                'updated_at' => '2022-06-04 17:42:35',
            ),
        ));
        
        
    }
}