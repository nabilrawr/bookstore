<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'borrower',
                'email' => 'borrower@test.com',
                'phone' => '0112348892',
                'address' => 'Persiaran Multimedia, Cyberjaya, 63000 Cyberjaya, Selangor',
                'ic' => '99090201022',
                'email_verified_at' => '2022-06-05 03:59:24',
                'password' => '$2y$10$G5ZoWnlN/06uH0azxkOIoudURJqDX.mY7JVo6C.jZM2E7PNNUaQD2',
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 14:38:45',
                'updated_at' => '2022-06-05 03:59:24',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'staff',
                'email' => 'staff@test.com',
                'phone' => '0119909890',
                'address' => 'Tamarind Bldg Rd, Cyberjaya, 63000 Cyberjaya, Selangor',
                'ic' => '010920100988',
                'email_verified_at' => '2022-06-04 14:41:52',
                'password' => '$2y$10$Uqdiso42cKDka9CilwBML.3BX2H0TayVbkGlmCyAi9bMXj433op4.',
                'role' => 2,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 14:40:31',
                'updated_at' => '2022-06-04 14:47:32',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'admin',
                'email' => 'admin@test.com',
                'phone' => '0107030656',
                'address' => ' 1, Jalan BP 7/1 Sierra 7, Bandar Bukit, 47120 Puchong, Selangor',
                'ic' => '990131045045',
                'email_verified_at' => '2022-06-05 04:03:13',
                'password' => '$2y$10$UcUGhTRu6BXENwxq.jG1oemOTv7.GKRgZbrCMO7QEZPt.Y0r68Khu',
                'role' => 3,
                'remember_token' => NULL,
                'created_at' => '2022-06-05 04:02:45',
                'updated_at' => '2022-06-05 04:03:13',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'borrower2',
                'email' => 'borrower2@gmail.com',
                'phone' => '01123459809',
                'address' => 'address 1',
                'ic' => '000908105690',
                'email_verified_at' => '2022-06-08 14:00:34',
                'password' => '$2y$10$e9GXIX5iTYdLt6LM5lTlsOwbtNC9PJXgRquh.o1Bl66IkZnWb4tnm',
                'role' => 3,
                'remember_token' => NULL,
                'created_at' => '2022-06-08 13:59:41',
                'updated_at' => '2022-06-08 14:00:34',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'borrower3',
                'email' => 'borrower3@gmail.com',
                'phone' => '0124565333',
                'address' => 'address 4',
                'ic' => '990909100909',
                'email_verified_at' => '2022-06-08 14:02:47',
                'password' => '$2y$10$6ag57xViPuzr9CdPtqGyV.IEkPmgn6tyrURpiIUCqSO2co4fak7SK',
                'role' => 3,
                'remember_token' => NULL,
                'created_at' => '2022-06-08 14:02:36',
                'updated_at' => '2022-06-08 14:02:47',
            ),
        ));
        
        
    }
}