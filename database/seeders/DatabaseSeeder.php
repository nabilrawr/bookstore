<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoriesTableSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(BookCategoriesTableSeeder::class);
    }
}
