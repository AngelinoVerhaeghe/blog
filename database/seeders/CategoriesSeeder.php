<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Laravel', 'slug' => 'laravel', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Development', 'slug' => 'development', 'created_at' => now(), 'updated_at' => now()]);
    }
}
