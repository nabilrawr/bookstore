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
            'name' => 'complete paid(replace)',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'complete paid(late)',
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
            'name' => 'unpaid(late)',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'late',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'pending',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'pickup',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'new',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'damaged/missing',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'used',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'rent',
        ]);
        \DB::table('statuses')->insert([
            'name' => 'Complete paid(late)',
        ]);
    }
}
