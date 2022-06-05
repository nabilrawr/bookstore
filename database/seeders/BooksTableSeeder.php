<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('books')->delete();
        
        \DB::table('books')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Learning Mobile App Development',
                'writer' => 'Jakob Iversen, Michael Eierman',
                'description' => 'Now, one book can help you master mobile app development with both market-leading platforms: Apple\'\'s iOS and Google\'\'s Android. Perfect for both students and professionals, Learning Mobile App Development is the only tutorial with complete parallel coverage of both iOS and Android. With this guide, you can master either platform, or both - and gain a deeper understanding of the issues associated with developing mobile apps.\\r\\n\\r\\nYou\'\'ll develop an actual working app on both iOS and Android, mastering the entire mobile app development lifecycle, from planning through licensing and distribution.\\r\\n\\r\\nEach tutorial in this book has been carefully designed to support readers with widely varying backgrounds and has been extensively tested in live developer training courses. If you\'\'re new to iOS, you\'\'ll also find an easy, practical introduction to Objective-C, Apple\'\'s native language.',
                'image' => '/uploads/book/book-mobile_app.jpg',
                'price' => '10.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 17:41:01',
                'updated_at' => '2022-06-04 17:41:01',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Doing Good By Doing Good',
                'writer' => 'Peter Baines',
                'description' => 'Doing Good by Doing Good shows companies how to improve the bottom line by implementing an engaging, authentic, and business-enhancing program that helps staff and business thrive. International CSR consultant Peter Baines draws upon lessons learnt from the challenges faced in his career as a police officer, forensic investigator, and founder of Hands Across the Water to describe the Australian CSR landscape, and the factors that make up a program that benefits everyone involved. Case studies illustrate the real effect of CSR on both business and society, with clear guidance toward maximizing involvement, engaging all employees, and improving the bottom line. The case studies draw out the companies that are focusing on creating shared value in meeting the challenges of society whilst at the same time bringing strong economic returns.\\r\\n\\r\\nConsumers are now expecting that big businesses with ever-increasing profits give back to the community from which those profits arise. At the same time, shareholders are demanding their share and are happy to see dividends soar. Getting this right is a balancing act, and Doing Good by Doing Good helps companies delineate a plan of action for getting it done.',
                'image' => '/uploads/book/book-doing_good.jpg',
                'price' => '20.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 17:42:35',
                'updated_at' => '2022-06-04 17:42:35',
            ),
        ));
        
        
    }
}