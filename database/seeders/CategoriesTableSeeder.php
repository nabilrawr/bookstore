<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Horror',
                'created_at' => '2022-06-04 05:55:55',
                'updated_at' => '2022-06-04 05:55:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fantasy',
                'created_at' => '2022-06-04 06:07:24',
                'updated_at' => '2022-06-04 06:07:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Adventure',
                'created_at' => '2022-06-04 06:08:16',
                'updated_at' => '2022-06-04 06:08:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Romance',
                'created_at' => '2022-06-04 06:08:23',
                'updated_at' => '2022-06-04 06:08:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Contemporary',
                'created_at' => '2022-06-04 06:08:31',
                'updated_at' => '2022-06-04 06:08:31',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Dystopian',
                'created_at' => '2022-06-04 06:08:40',
                'updated_at' => '2022-06-04 06:08:40',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mystery',
                'created_at' => '2022-06-04 06:08:46',
                'updated_at' => '2022-06-04 06:08:46',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Thriller',
                'created_at' => '2022-06-04 06:08:54',
                'updated_at' => '2022-06-04 06:08:54',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Paranormal',
                'created_at' => '2022-06-04 06:09:02',
                'updated_at' => '2022-06-04 06:09:02',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Historical',
                'created_at' => '2022-06-04 06:09:10',
                'updated_at' => '2022-06-04 06:09:10',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Science Fiction',
                'created_at' => '2022-06-04 06:09:19',
                'updated_at' => '2022-06-04 06:09:19',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Children`s',
                'created_at' => '2022-06-04 06:09:30',
                'updated_at' => '2022-06-04 06:09:30',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Memoir',
                'created_at' => '2022-06-04 06:09:36',
                'updated_at' => '2022-06-04 06:09:36',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Cooking',
                'created_at' => '2022-06-04 06:09:42',
                'updated_at' => '2022-06-04 06:09:42',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Art',
                'created_at' => '2022-06-04 06:09:48',
                'updated_at' => '2022-06-04 06:09:48',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Self-help / Personal',
                'created_at' => '2022-06-04 06:09:59',
                'updated_at' => '2022-06-04 06:09:59',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Development',
                'created_at' => '2022-06-04 06:10:06',
                'updated_at' => '2022-06-04 06:10:06',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Motivational',
                'created_at' => '2022-06-04 06:10:16',
                'updated_at' => '2022-06-04 06:10:16',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Health',
                'created_at' => '2022-06-04 06:10:23',
                'updated_at' => '2022-06-04 06:10:23',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'History',
                'created_at' => '2022-06-04 06:10:29',
                'updated_at' => '2022-06-04 06:10:29',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Travel',
                'created_at' => '2022-06-04 06:10:36',
                'updated_at' => '2022-06-04 06:10:36',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Guide / How-to-',
                'created_at' => '2022-06-04 06:10:48',
                'updated_at' => '2022-06-04 06:10:48',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Families & Relationships',
                'created_at' => '2022-06-04 06:11:04',
                'updated_at' => '2022-06-04 06:11:04',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Humor',
                'created_at' => '2022-06-04 06:11:12',
                'updated_at' => '2022-06-04 06:11:12',
            ),
        ));
        
        
    }
}