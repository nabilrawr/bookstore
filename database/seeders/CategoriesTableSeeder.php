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
                'created_at' => '2022-06-04 05:55:55',
                'id' => 1,
                'name' => 'General Management',
                'updated_at' => '2022-06-04 05:55:55',
            ),
            1 => 
            array (
                'created_at' => '2022-06-04 06:07:24',
                'id' => 2,
                'name' => 'Human Resource',
                'updated_at' => '2022-06-04 06:07:24',
            ),
            2 => 
            array (
                'created_at' => '2022-06-04 06:08:16',
                'id' => 3,
                'name' => 'General Comic & Graphic Novel',
                'updated_at' => '2022-06-04 06:08:16',
            ),
            3 => 
            array (
                'created_at' => '2022-06-04 06:08:23',
                'id' => 4,
                'name' => 'Children & Teenage Comic',
                'updated_at' => '2022-06-04 06:08:23',
            ),
            4 => 
            array (
                'created_at' => '2022-06-04 06:08:31',
                'id' => 5,
                'name' => 'Cookbook - Malaysian',
                'updated_at' => '2022-06-04 06:08:31',
            ),
            5 => 
            array (
                'created_at' => '2022-06-04 06:08:40',
                'id' => 6,
                'name' => 'Cookbook - Asian',
                'updated_at' => '2022-06-04 06:08:40',
            ),
            6 => 
            array (
                'created_at' => '2022-06-04 06:08:46',
                'id' => 7,
                'name' => 'Engineering',
                'updated_at' => '2022-06-04 06:08:46',
            ),
            7 => 
            array (
                'created_at' => '2022-06-04 06:08:54',
                'id' => 8,
                'name' => 'Computer Technology',
                'updated_at' => '2022-06-04 06:08:54',
            ),
            8 => 
            array (
                'created_at' => '2022-06-04 06:09:02',
                'id' => 9,
                'name' => 'General Health',
                'updated_at' => '2022-06-04 06:09:02',
            ),
            9 => 
            array (
                'created_at' => '2022-06-04 06:09:10',
                'id' => 10,
                'name' => 'Fitness & Exercise',
                'updated_at' => '2022-06-04 06:09:10',
            ),
            10 => 
            array (
                'created_at' => '2022-06-04 06:09:19',
                'id' => 11,
                'name' => 'General Parenting',
                'updated_at' => '2022-06-04 06:09:19',
            ),
            11 => 
            array (
                'created_at' => '2022-06-04 06:09:30',
                'id' => 12,
                'name' => 'Pregnancy & Childcare',
                'updated_at' => '2022-06-04 06:09:30',
            ),
            12 => 
            array (
                'created_at' => '2022-06-04 06:09:36',
                'id' => 13,
                'name' => 'Accounting & Economics',
                'updated_at' => '2022-06-04 06:09:36',
            ),
            13 => 
            array (
                'created_at' => '2022-06-06 07:53:06',
                'id' => 14,
                'name' => 'Investment',
                'updated_at' => '2022-06-06 07:53:07',
            ),
            14 => 
            array (
                'created_at' => '2022-06-06 07:54:06',
                'id' => 15,
                'name' => 'Travel - Malaysia',
                'updated_at' => '2022-06-06 07:54:08',
            ),
            15 => 
            array (
                'created_at' => '2022-06-06 07:54:07',
                'id' => 16,
                'name' => 'Travel - Asian',
                'updated_at' => '2022-06-06 07:54:09',
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Career Development',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Communication & Social Skills',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}