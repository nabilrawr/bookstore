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
                'id' => 1,
                'name' => 'staff',
                'email' => 'staff@test.com',
                'phone' => '01238902837',
                'address' => 'no 2',
                'ic' => '990909107720',
                'email_verified_at' => '2022-06-04 22:06:38',
                'password' => 'pass1234',
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 22:06:49',
                'updated_at' => '2022-06-04 22:06:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'staff',
                'email' => 'staff@gmail.com',
                'phone' => '0112348892',
                'address' => 'address',
                'ic' => '99090201022',
                'email_verified_at' => NULL,
                'password' => '$2y$10$G5ZoWnlN/06uH0azxkOIoudURJqDX.mY7JVo6C.jZM2E7PNNUaQD2',
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 14:38:45',
                'updated_at' => '2022-06-04 14:38:45',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'staff2',
                'email' => 'staff2@gmail.com',
                'phone' => '0119909890',
                'address' => 'address',
                'ic' => '010920100988',
                'email_verified_at' => '2022-06-04 14:41:52',
                'password' => '$2y$10$Uqdiso42cKDka9CilwBML.3BX2H0TayVbkGlmCyAi9bMXj433op4.',
                'role' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 14:40:31',
                'updated_at' => '2022-06-04 14:47:32',
            ),
        ));
        
        
    }
}