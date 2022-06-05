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
                'address' => 'address',
                'created_at' => '2022-06-04 14:38:45',
                'email' => 'borrower@test.com',
                'email_verified_at' => '2022-06-05 03:59:24',
                'ic' => '99090201022',
                'id' => 2,
                'name' => 'borrower',
                'password' => '$2y$10$G5ZoWnlN/06uH0azxkOIoudURJqDX.mY7JVo6C.jZM2E7PNNUaQD2',
                'phone' => '0112348892',
                'remember_token' => NULL,
                'role' => 1,
                'updated_at' => '2022-06-05 03:59:24',
            ),
            1 => 
            array (
                'address' => 'address',
                'created_at' => '2022-06-04 14:40:31',
                'email' => 'staff@test.com',
                'email_verified_at' => '2022-06-04 14:41:52',
                'ic' => '010920100988',
                'id' => 4,
                'name' => 'staff',
                'password' => '$2y$10$Uqdiso42cKDka9CilwBML.3BX2H0TayVbkGlmCyAi9bMXj433op4.',
                'phone' => '0119909890',
                'remember_token' => NULL,
                'role' => 2,
                'updated_at' => '2022-06-04 14:47:32',
            ),
            2 => 
            array (
                'address' => 'address',
                'created_at' => '2022-06-05 04:02:45',
                'email' => 'admin@test.com',
                'email_verified_at' => '2022-06-05 04:03:13',
                'ic' => '990131045045',
                'id' => 5,
                'name' => 'admin',
                'password' => '$2y$10$UcUGhTRu6BXENwxq.jG1oemOTv7.GKRgZbrCMO7QEZPt.Y0r68Khu',
                'phone' => '0107030656',
                'remember_token' => NULL,
                'role' => 3,
                'updated_at' => '2022-06-05 04:03:13',
            ),
        ));
        
        
    }
}