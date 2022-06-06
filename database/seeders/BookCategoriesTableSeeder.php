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
                'book_id' => 4,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:03:20',
                'id' => 3,
                'updated_at' => '2022-06-06 00:03:20',
            ),
            1 => 
            array (
                'book_id' => 4,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:03:20',
                'id' => 4,
                'updated_at' => '2022-06-06 00:03:20',
            ),
            2 => 
            array (
                'book_id' => 5,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:13:10',
                'id' => 5,
                'updated_at' => '2022-06-06 00:13:10',
            ),
            3 => 
            array (
                'book_id' => 5,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:13:10',
                'id' => 6,
                'updated_at' => '2022-06-06 00:13:10',
            ),
            4 => 
            array (
                'book_id' => 6,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:15:11',
                'id' => 7,
                'updated_at' => '2022-06-06 00:15:11',
            ),
            5 => 
            array (
                'book_id' => 6,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:15:11',
                'id' => 8,
                'updated_at' => '2022-06-06 00:15:11',
            ),
            6 => 
            array (
                'book_id' => 7,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:17:19',
                'id' => 9,
                'updated_at' => '2022-06-06 00:17:19',
            ),
            7 => 
            array (
                'book_id' => 7,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:17:19',
                'id' => 10,
                'updated_at' => '2022-06-06 00:17:19',
            ),
            8 => 
            array (
                'book_id' => 8,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:18:59',
                'id' => 11,
                'updated_at' => '2022-06-06 00:18:59',
            ),
            9 => 
            array (
                'book_id' => 8,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:18:59',
                'id' => 12,
                'updated_at' => '2022-06-06 00:18:59',
            ),
            10 => 
            array (
                'book_id' => 9,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:20:10',
                'id' => 13,
                'updated_at' => '2022-06-06 00:20:10',
            ),
            11 => 
            array (
                'book_id' => 9,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:20:10',
                'id' => 14,
                'updated_at' => '2022-06-06 00:20:10',
            ),
            12 => 
            array (
                'book_id' => 10,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:21:16',
                'id' => 15,
                'updated_at' => '2022-06-06 00:21:16',
            ),
            13 => 
            array (
                'book_id' => 10,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:21:16',
                'id' => 16,
                'updated_at' => '2022-06-06 00:21:16',
            ),
            14 => 
            array (
                'book_id' => 11,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:22:09',
                'id' => 17,
                'updated_at' => '2022-06-06 00:22:09',
            ),
            15 => 
            array (
                'book_id' => 11,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:22:09',
                'id' => 18,
                'updated_at' => '2022-06-06 00:22:09',
            ),
            16 => 
            array (
                'book_id' => 12,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:23:23',
                'id' => 19,
                'updated_at' => '2022-06-06 00:23:23',
            ),
            17 => 
            array (
                'book_id' => 12,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:23:23',
                'id' => 20,
                'updated_at' => '2022-06-06 00:23:23',
            ),
            18 => 
            array (
                'book_id' => 13,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:24:18',
                'id' => 21,
                'updated_at' => '2022-06-06 00:24:18',
            ),
            19 => 
            array (
                'book_id' => 13,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:24:18',
                'id' => 22,
                'updated_at' => '2022-06-06 00:24:18',
            ),
            20 => 
            array (
                'book_id' => 14,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:25:19',
                'id' => 23,
                'updated_at' => '2022-06-06 00:25:19',
            ),
            21 => 
            array (
                'book_id' => 14,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:25:19',
                'id' => 24,
                'updated_at' => '2022-06-06 00:25:19',
            ),
            22 => 
            array (
                'book_id' => 15,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:26:36',
                'id' => 25,
                'updated_at' => '2022-06-06 00:26:36',
            ),
            23 => 
            array (
                'book_id' => 15,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:26:36',
                'id' => 26,
                'updated_at' => '2022-06-06 00:26:36',
            ),
            24 => 
            array (
                'book_id' => 16,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:27:57',
                'id' => 27,
                'updated_at' => '2022-06-06 00:27:57',
            ),
            25 => 
            array (
                'book_id' => 16,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:27:57',
                'id' => 28,
                'updated_at' => '2022-06-06 00:27:57',
            ),
            26 => 
            array (
                'book_id' => 17,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:28:37',
                'id' => 29,
                'updated_at' => '2022-06-06 00:28:37',
            ),
            27 => 
            array (
                'book_id' => 17,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:28:37',
                'id' => 30,
                'updated_at' => '2022-06-06 00:28:37',
            ),
            28 => 
            array (
                'book_id' => 18,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:29:37',
                'id' => 31,
                'updated_at' => '2022-06-06 00:29:37',
            ),
            29 => 
            array (
                'book_id' => 18,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:29:37',
                'id' => 32,
                'updated_at' => '2022-06-06 00:29:37',
            ),
            30 => 
            array (
                'book_id' => 19,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:30:21',
                'id' => 33,
                'updated_at' => '2022-06-06 00:30:21',
            ),
            31 => 
            array (
                'book_id' => 19,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:30:21',
                'id' => 34,
                'updated_at' => '2022-06-06 00:30:21',
            ),
            32 => 
            array (
                'book_id' => 20,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:31:27',
                'id' => 35,
                'updated_at' => '2022-06-06 00:31:27',
            ),
            33 => 
            array (
                'book_id' => 20,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:31:27',
                'id' => 36,
                'updated_at' => '2022-06-06 00:31:27',
            ),
            34 => 
            array (
                'book_id' => 21,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:32:17',
                'id' => 37,
                'updated_at' => '2022-06-06 00:32:17',
            ),
            35 => 
            array (
                'book_id' => 21,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:32:17',
                'id' => 38,
                'updated_at' => '2022-06-06 00:32:17',
            ),
            36 => 
            array (
                'book_id' => 22,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:33:10',
                'id' => 39,
                'updated_at' => '2022-06-06 00:33:10',
            ),
            37 => 
            array (
                'book_id' => 22,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:33:10',
                'id' => 40,
                'updated_at' => '2022-06-06 00:33:10',
            ),
            38 => 
            array (
                'book_id' => 23,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:34:17',
                'id' => 41,
                'updated_at' => '2022-06-06 00:34:17',
            ),
            39 => 
            array (
                'book_id' => 23,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:34:17',
                'id' => 42,
                'updated_at' => '2022-06-06 00:34:17',
            ),
            40 => 
            array (
                'book_id' => 24,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:35:53',
                'id' => 43,
                'updated_at' => '2022-06-06 00:35:53',
            ),
            41 => 
            array (
                'book_id' => 24,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:35:53',
                'id' => 44,
                'updated_at' => '2022-06-06 00:35:53',
            ),
            42 => 
            array (
                'book_id' => 25,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:36:49',
                'id' => 45,
                'updated_at' => '2022-06-06 00:36:49',
            ),
            43 => 
            array (
                'book_id' => 25,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:36:49',
                'id' => 46,
                'updated_at' => '2022-06-06 00:36:49',
            ),
            44 => 
            array (
                'book_id' => 26,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:37:42',
                'id' => 47,
                'updated_at' => '2022-06-06 00:37:42',
            ),
            45 => 
            array (
                'book_id' => 26,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:37:42',
                'id' => 48,
                'updated_at' => '2022-06-06 00:37:42',
            ),
            46 => 
            array (
                'book_id' => 27,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:38:36',
                'id' => 49,
                'updated_at' => '2022-06-06 00:38:36',
            ),
            47 => 
            array (
                'book_id' => 27,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:38:36',
                'id' => 50,
                'updated_at' => '2022-06-06 00:38:36',
            ),
            48 => 
            array (
                'book_id' => 28,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:39:42',
                'id' => 51,
                'updated_at' => '2022-06-06 00:39:42',
            ),
            49 => 
            array (
                'book_id' => 28,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:39:42',
                'id' => 52,
                'updated_at' => '2022-06-06 00:39:42',
            ),
            50 => 
            array (
                'book_id' => 29,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:40:59',
                'id' => 53,
                'updated_at' => '2022-06-06 00:40:59',
            ),
            51 => 
            array (
                'book_id' => 29,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:40:59',
                'id' => 54,
                'updated_at' => '2022-06-06 00:40:59',
            ),
            52 => 
            array (
                'book_id' => 30,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:42:04',
                'id' => 55,
                'updated_at' => '2022-06-06 00:42:04',
            ),
            53 => 
            array (
                'book_id' => 30,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:42:04',
                'id' => 56,
                'updated_at' => '2022-06-06 00:42:04',
            ),
            54 => 
            array (
                'book_id' => 31,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:42:49',
                'id' => 57,
                'updated_at' => '2022-06-06 00:42:49',
            ),
            55 => 
            array (
                'book_id' => 31,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:42:49',
                'id' => 58,
                'updated_at' => '2022-06-06 00:42:49',
            ),
            56 => 
            array (
                'book_id' => 32,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:44:19',
                'id' => 59,
                'updated_at' => '2022-06-06 00:44:19',
            ),
            57 => 
            array (
                'book_id' => 32,
                'category_id' => 16,
                'created_at' => '2022-06-06 08:45:40',
                'id' => 60,
                'updated_at' => '2022-06-06 08:45:42',
            ),
            58 => 
            array (
                'book_id' => 33,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:47:32',
                'id' => 61,
                'updated_at' => '2022-06-06 00:47:32',
            ),
            59 => 
            array (
                'book_id' => 33,
                'category_id' => 16,
                'created_at' => '2022-06-06 00:47:32',
                'id' => 62,
                'updated_at' => '2022-06-06 00:47:32',
            ),
            60 => 
            array (
                'book_id' => 34,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:52:21',
                'id' => 63,
                'updated_at' => '2022-06-06 00:52:21',
            ),
            61 => 
            array (
                'book_id' => 34,
                'category_id' => 16,
                'created_at' => '2022-06-06 00:52:21',
                'id' => 64,
                'updated_at' => '2022-06-06 00:52:21',
            ),
            62 => 
            array (
                'book_id' => 35,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:53:12',
                'id' => 65,
                'updated_at' => '2022-06-06 00:53:12',
            ),
            63 => 
            array (
                'book_id' => 35,
                'category_id' => 16,
                'created_at' => '2022-06-06 00:53:12',
                'id' => 66,
                'updated_at' => '2022-06-06 00:53:12',
            ),
            64 => 
            array (
                'book_id' => 36,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:54:34',
                'id' => 67,
                'updated_at' => '2022-06-06 00:54:34',
            ),
            65 => 
            array (
                'book_id' => 36,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:54:34',
                'id' => 68,
                'updated_at' => '2022-06-06 00:54:34',
            ),
            66 => 
            array (
                'book_id' => 37,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:55:33',
                'id' => 69,
                'updated_at' => '2022-06-06 00:55:33',
            ),
            67 => 
            array (
                'book_id' => 37,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:55:33',
                'id' => 70,
                'updated_at' => '2022-06-06 00:55:33',
            ),
            68 => 
            array (
                'book_id' => 38,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:56:37',
                'id' => 71,
                'updated_at' => '2022-06-06 00:56:37',
            ),
            69 => 
            array (
                'book_id' => 38,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:56:37',
                'id' => 72,
                'updated_at' => '2022-06-06 00:56:37',
            ),
            70 => 
            array (
                'book_id' => 39,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:57:31',
                'id' => 73,
                'updated_at' => '2022-06-06 00:57:31',
            ),
            71 => 
            array (
                'book_id' => 39,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:57:31',
                'id' => 74,
                'updated_at' => '2022-06-06 00:57:31',
            ),
        ));
        
        
    }
}