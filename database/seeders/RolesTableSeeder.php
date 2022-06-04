<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2022-06-04 21:53:11',
                'updated_at' => '2022-06-04 21:53:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'staff',
                'guard_name' => 'web',
                'created_at' => '2022-06-04 21:53:43',
                'updated_at' => '2022-06-04 21:53:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'borrower',
                'guard_name' => 'web',
                'created_at' => '2022-06-04 21:53:57',
                'updated_at' => '2022-06-04 21:53:57',
            ),
        ));
        
        
    }
}