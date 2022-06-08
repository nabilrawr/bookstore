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
                'id' => 3,
                'book_id' => 4,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:03:20',
                'updated_at' => '2022-06-06 00:03:20',
            ),
            1 => 
            array (
                'id' => 4,
                'book_id' => 4,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:03:20',
                'updated_at' => '2022-06-06 00:03:20',
            ),
            2 => 
            array (
                'id' => 5,
                'book_id' => 5,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:13:10',
                'updated_at' => '2022-06-06 00:13:10',
            ),
            3 => 
            array (
                'id' => 6,
                'book_id' => 5,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:13:10',
                'updated_at' => '2022-06-06 00:13:10',
            ),
            4 => 
            array (
                'id' => 7,
                'book_id' => 6,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:15:11',
                'updated_at' => '2022-06-06 00:15:11',
            ),
            5 => 
            array (
                'id' => 8,
                'book_id' => 6,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:15:11',
                'updated_at' => '2022-06-06 00:15:11',
            ),
            6 => 
            array (
                'id' => 9,
                'book_id' => 7,
                'category_id' => 1,
                'created_at' => '2022-06-06 00:17:19',
                'updated_at' => '2022-06-06 00:17:19',
            ),
            7 => 
            array (
                'id' => 10,
                'book_id' => 7,
                'category_id' => 2,
                'created_at' => '2022-06-06 00:17:19',
                'updated_at' => '2022-06-06 00:17:19',
            ),
            8 => 
            array (
                'id' => 11,
                'book_id' => 8,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:18:59',
                'updated_at' => '2022-06-06 00:18:59',
            ),
            9 => 
            array (
                'id' => 12,
                'book_id' => 8,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:18:59',
                'updated_at' => '2022-06-06 00:18:59',
            ),
            10 => 
            array (
                'id' => 13,
                'book_id' => 9,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:20:10',
                'updated_at' => '2022-06-06 00:20:10',
            ),
            11 => 
            array (
                'id' => 14,
                'book_id' => 9,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:20:10',
                'updated_at' => '2022-06-06 00:20:10',
            ),
            12 => 
            array (
                'id' => 15,
                'book_id' => 10,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:21:16',
                'updated_at' => '2022-06-06 00:21:16',
            ),
            13 => 
            array (
                'id' => 16,
                'book_id' => 10,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:21:16',
                'updated_at' => '2022-06-06 00:21:16',
            ),
            14 => 
            array (
                'id' => 17,
                'book_id' => 11,
                'category_id' => 3,
                'created_at' => '2022-06-06 00:22:09',
                'updated_at' => '2022-06-06 00:22:09',
            ),
            15 => 
            array (
                'id' => 18,
                'book_id' => 11,
                'category_id' => 4,
                'created_at' => '2022-06-06 00:22:09',
                'updated_at' => '2022-06-06 00:22:09',
            ),
            16 => 
            array (
                'id' => 19,
                'book_id' => 12,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:23:23',
                'updated_at' => '2022-06-06 00:23:23',
            ),
            17 => 
            array (
                'id' => 20,
                'book_id' => 12,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:23:23',
                'updated_at' => '2022-06-06 00:23:23',
            ),
            18 => 
            array (
                'id' => 21,
                'book_id' => 13,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:24:18',
                'updated_at' => '2022-06-06 00:24:18',
            ),
            19 => 
            array (
                'id' => 22,
                'book_id' => 13,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:24:18',
                'updated_at' => '2022-06-06 00:24:18',
            ),
            20 => 
            array (
                'id' => 23,
                'book_id' => 14,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:25:19',
                'updated_at' => '2022-06-06 00:25:19',
            ),
            21 => 
            array (
                'id' => 24,
                'book_id' => 14,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:25:19',
                'updated_at' => '2022-06-06 00:25:19',
            ),
            22 => 
            array (
                'id' => 25,
                'book_id' => 15,
                'category_id' => 5,
                'created_at' => '2022-06-06 00:26:36',
                'updated_at' => '2022-06-06 00:26:36',
            ),
            23 => 
            array (
                'id' => 26,
                'book_id' => 15,
                'category_id' => 6,
                'created_at' => '2022-06-06 00:26:36',
                'updated_at' => '2022-06-06 00:26:36',
            ),
            24 => 
            array (
                'id' => 27,
                'book_id' => 16,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:27:57',
                'updated_at' => '2022-06-06 00:27:57',
            ),
            25 => 
            array (
                'id' => 28,
                'book_id' => 16,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:27:57',
                'updated_at' => '2022-06-06 00:27:57',
            ),
            26 => 
            array (
                'id' => 29,
                'book_id' => 17,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:28:37',
                'updated_at' => '2022-06-06 00:28:37',
            ),
            27 => 
            array (
                'id' => 30,
                'book_id' => 17,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:28:37',
                'updated_at' => '2022-06-06 00:28:37',
            ),
            28 => 
            array (
                'id' => 31,
                'book_id' => 18,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:29:37',
                'updated_at' => '2022-06-06 00:29:37',
            ),
            29 => 
            array (
                'id' => 32,
                'book_id' => 18,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:29:37',
                'updated_at' => '2022-06-06 00:29:37',
            ),
            30 => 
            array (
                'id' => 33,
                'book_id' => 19,
                'category_id' => 7,
                'created_at' => '2022-06-06 00:30:21',
                'updated_at' => '2022-06-06 00:30:21',
            ),
            31 => 
            array (
                'id' => 34,
                'book_id' => 19,
                'category_id' => 8,
                'created_at' => '2022-06-06 00:30:21',
                'updated_at' => '2022-06-06 00:30:21',
            ),
            32 => 
            array (
                'id' => 35,
                'book_id' => 20,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:31:27',
                'updated_at' => '2022-06-06 00:31:27',
            ),
            33 => 
            array (
                'id' => 36,
                'book_id' => 20,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:31:27',
                'updated_at' => '2022-06-06 00:31:27',
            ),
            34 => 
            array (
                'id' => 37,
                'book_id' => 21,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:32:17',
                'updated_at' => '2022-06-06 00:32:17',
            ),
            35 => 
            array (
                'id' => 38,
                'book_id' => 21,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:32:17',
                'updated_at' => '2022-06-06 00:32:17',
            ),
            36 => 
            array (
                'id' => 39,
                'book_id' => 22,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:33:10',
                'updated_at' => '2022-06-06 00:33:10',
            ),
            37 => 
            array (
                'id' => 40,
                'book_id' => 22,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:33:10',
                'updated_at' => '2022-06-06 00:33:10',
            ),
            38 => 
            array (
                'id' => 41,
                'book_id' => 23,
                'category_id' => 9,
                'created_at' => '2022-06-06 00:34:17',
                'updated_at' => '2022-06-06 00:34:17',
            ),
            39 => 
            array (
                'id' => 42,
                'book_id' => 23,
                'category_id' => 10,
                'created_at' => '2022-06-06 00:34:17',
                'updated_at' => '2022-06-06 00:34:17',
            ),
            40 => 
            array (
                'id' => 43,
                'book_id' => 24,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:35:53',
                'updated_at' => '2022-06-06 00:35:53',
            ),
            41 => 
            array (
                'id' => 44,
                'book_id' => 24,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:35:53',
                'updated_at' => '2022-06-06 00:35:53',
            ),
            42 => 
            array (
                'id' => 45,
                'book_id' => 25,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:36:49',
                'updated_at' => '2022-06-06 00:36:49',
            ),
            43 => 
            array (
                'id' => 46,
                'book_id' => 25,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:36:49',
                'updated_at' => '2022-06-06 00:36:49',
            ),
            44 => 
            array (
                'id' => 47,
                'book_id' => 26,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:37:42',
                'updated_at' => '2022-06-06 00:37:42',
            ),
            45 => 
            array (
                'id' => 48,
                'book_id' => 26,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:37:42',
                'updated_at' => '2022-06-06 00:37:42',
            ),
            46 => 
            array (
                'id' => 49,
                'book_id' => 27,
                'category_id' => 11,
                'created_at' => '2022-06-06 00:38:36',
                'updated_at' => '2022-06-06 00:38:36',
            ),
            47 => 
            array (
                'id' => 50,
                'book_id' => 27,
                'category_id' => 12,
                'created_at' => '2022-06-06 00:38:36',
                'updated_at' => '2022-06-06 00:38:36',
            ),
            48 => 
            array (
                'id' => 51,
                'book_id' => 28,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:39:42',
                'updated_at' => '2022-06-06 00:39:42',
            ),
            49 => 
            array (
                'id' => 52,
                'book_id' => 28,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:39:42',
                'updated_at' => '2022-06-06 00:39:42',
            ),
            50 => 
            array (
                'id' => 53,
                'book_id' => 29,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:40:59',
                'updated_at' => '2022-06-06 00:40:59',
            ),
            51 => 
            array (
                'id' => 54,
                'book_id' => 29,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:40:59',
                'updated_at' => '2022-06-06 00:40:59',
            ),
            52 => 
            array (
                'id' => 55,
                'book_id' => 30,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:42:04',
                'updated_at' => '2022-06-06 00:42:04',
            ),
            53 => 
            array (
                'id' => 56,
                'book_id' => 30,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:42:04',
                'updated_at' => '2022-06-06 00:42:04',
            ),
            54 => 
            array (
                'id' => 57,
                'book_id' => 31,
                'category_id' => 13,
                'created_at' => '2022-06-06 00:42:49',
                'updated_at' => '2022-06-06 00:42:49',
            ),
            55 => 
            array (
                'id' => 58,
                'book_id' => 31,
                'category_id' => 14,
                'created_at' => '2022-06-06 00:42:49',
                'updated_at' => '2022-06-06 00:42:49',
            ),
            56 => 
            array (
                'id' => 59,
                'book_id' => 32,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:44:19',
                'updated_at' => '2022-06-06 00:44:19',
            ),
            57 => 
            array (
                'id' => 60,
                'book_id' => 32,
                'category_id' => 16,
                'created_at' => '2022-06-06 08:45:40',
                'updated_at' => '2022-06-06 08:45:42',
            ),
            58 => 
            array (
                'id' => 61,
                'book_id' => 33,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:47:32',
                'updated_at' => '2022-06-06 00:47:32',
            ),
            59 => 
            array (
                'id' => 62,
                'book_id' => 33,
                'category_id' => 16,
                'created_at' => '2022-06-06 00:47:32',
                'updated_at' => '2022-06-06 00:47:32',
            ),
            60 => 
            array (
                'id' => 63,
                'book_id' => 34,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:52:21',
                'updated_at' => '2022-06-06 00:52:21',
            ),
            61 => 
            array (
                'id' => 64,
                'book_id' => 34,
                'category_id' => 16,
                'created_at' => '2022-06-06 00:52:21',
                'updated_at' => '2022-06-06 00:52:21',
            ),
            62 => 
            array (
                'id' => 65,
                'book_id' => 35,
                'category_id' => 15,
                'created_at' => '2022-06-06 00:53:12',
                'updated_at' => '2022-06-06 00:53:12',
            ),
            63 => 
            array (
                'id' => 66,
                'book_id' => 35,
                'category_id' => 16,
                'created_at' => '2022-06-06 00:53:12',
                'updated_at' => '2022-06-06 00:53:12',
            ),
            64 => 
            array (
                'id' => 67,
                'book_id' => 36,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:54:34',
                'updated_at' => '2022-06-06 00:54:34',
            ),
            65 => 
            array (
                'id' => 68,
                'book_id' => 36,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:54:34',
                'updated_at' => '2022-06-06 00:54:34',
            ),
            66 => 
            array (
                'id' => 69,
                'book_id' => 37,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:55:33',
                'updated_at' => '2022-06-06 00:55:33',
            ),
            67 => 
            array (
                'id' => 70,
                'book_id' => 37,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:55:33',
                'updated_at' => '2022-06-06 00:55:33',
            ),
            68 => 
            array (
                'id' => 71,
                'book_id' => 38,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:56:37',
                'updated_at' => '2022-06-06 00:56:37',
            ),
            69 => 
            array (
                'id' => 72,
                'book_id' => 38,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:56:37',
                'updated_at' => '2022-06-06 00:56:37',
            ),
            70 => 
            array (
                'id' => 73,
                'book_id' => 39,
                'category_id' => 17,
                'created_at' => '2022-06-06 00:57:31',
                'updated_at' => '2022-06-06 00:57:31',
            ),
            71 => 
            array (
                'id' => 74,
                'book_id' => 39,
                'category_id' => 18,
                'created_at' => '2022-06-06 00:57:31',
                'updated_at' => '2022-06-06 00:57:31',
            ),
        ));
        
        
    }
}