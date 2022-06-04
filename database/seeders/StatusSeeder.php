<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('statuses')->insert([
            'name' => 'complete(paid)',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'complete(replace)',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'complete',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'available',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'not available',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'unpaid',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'late',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'pending',
        ]);
    }
}
