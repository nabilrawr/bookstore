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
                'price' => '30.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 15:23:06',
                'updated_at' => '2022-06-04 15:23:06',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Doing Good By Doing Good',
                'writer' => 'Peter Baines',
                'description' => 'Doing Good by Doing Good shows companies how to improve the bottom line by implementing an engaging, authentic, and business-enhancing program that helps staff and business thrive. International CSR consultant Peter Baines draws upon lessons learnt from the challenges faced in his career as a police officer, forensic investigator, and founder of Hands Across the Water to describe the Australian CSR landscape, and the factors that make up a program that benefits everyone involved. Case studies illustrate the real effect of CSR on both business and society, with clear guidance toward maximizing involvement, engaging all employees, and improving the bottom line. The case studies draw out the companies that are focusing on creating shared value in meeting the challenges of society whilst at the same time bringing strong economic returns.\\r\\n\\r\\nConsumers are now expecting that big businesses with ever-increasing profits give back to the community from which those profits arise. At the same time, shareholders are demanding their share and are happy to see dividends soar. Getting this right is a balancing act, and Doing Good by Doing Good helps companies delineate a plan of action for getting it done.',
                'image' => '/uploads/book/book-doing_good.jpg',
                'price' => '30.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 15:23:50',
                'updated_at' => '2022-06-04 15:23:50',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Programmable Logic Controllers',
                'writer' => 'Dag H. Hanssen',
            'description' => 'Widely used across industrial and manufacturing automation, Programmable Logic Controllers (PLCs) perform a broad range of electromechanical tasks with multiple input and output arrangements, designed specifically to cope in severe environmental conditions such as automotive and chemical plants.Programmable Logic Controllers: A Practical Approach using CoDeSys is a hands-on guide to rapidly gain proficiency in the development and operation of PLCs based on the IEC 61131-3 standard. Using the freely-available* software tool CoDeSys, which is widely used in industrial design automation projects, the author takes a highly practical approach to PLC design using real-world examples. The design tool, CoDeSys, also features a built in simulator / soft PLC enabling the reader to undertake exercises and test the examples.',
                'image' => '/uploads/book/book-logic_program.jpg',
                'price' => '50.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 15:24:45',
                'updated_at' => '2022-06-04 15:24:45',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Professional JavaScript for Web Developers, 3rd Edition',
                'writer' => 'Nicholas C. Zakas',
                'description' => 'If you want to achieve JavaScript\'\'s full potential, it is critical to understand its nature, history, and limitations. To that end, this updated version of the bestseller by veteran author and JavaScript guru Nicholas C. Zakas covers JavaScript from its very beginning to the present-day incarnations including the DOM, Ajax, and HTML5. Zakas shows you how to extend this powerful language to meet specific needs and create dynamic user interfaces for the web that blur the line between desktop and internet. By the end of the book, you\'\'ll have a strong understanding of the significant advances in web development as they relate to JavaScript so that you can apply them to your next website.',
                'image' => '/uploads/book/book-pro_js.jpg',
                'price' => '30.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 15:25:36',
                'updated_at' => '2022-06-04 15:25:36',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Learning Web App Development',
                'writer' => 'Semmy Purewal',
                'description' => 'Grasp the fundamentals of web application development by building a simple database-backed app from scratch, using HTML, JavaScript, and other open source tools. Through hands-on tutorials, this practical guide shows inexperienced web app developers how to create a user interface, write a server, build client-server communication, and use a cloud-based service to deploy the application.\\r\\n\\r\\nEach chapter includes practice problems, full examples, and mental models of the development workflow. Ideal for a college-level course, this book helps you get started with web app development by providing you with a solid grounding in the process.',
                'image' => '/uploads/book/book-web_app_dev.jpg',
                'price' => '20.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 15:26:33',
                'updated_at' => '2022-06-04 15:26:33',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Beautiful JavaScript',
                'writer' => 'Beautiful JavaScript',
                'description' => 'JavaScript is arguably the most polarizing and misunderstood programming language in the world. Many have attempted to replace it as the language of the Web, but JavaScript has survived, evolved, and thrived. Why did a language created in such hurry succeed where others failed?\\r\\n\\r\\nThis guide gives you a rare glimpse into JavaScript from people intimately familiar with it. Chapters contributed by domain experts such as Jacob Thornton, Ariya Hidayat, and Sara Chipps show what they love about their favorite language - whether it\'\'s turning the most feared features into useful tools, or how JavaScript can be used for self-expression.',
                'image' => '/uploads/book/book-beauty_js.jpg',
                'price' => '40.00',
                'status_id' => 4,
                'created_at' => '2022-06-04 15:27:45',
                'updated_at' => '2022-06-04 15:27:45',
            ),
        ));
        
        
    }
}