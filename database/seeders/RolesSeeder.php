<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['name' => 'Administrator', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('roles')->insert(['name' => 'User', 'created_at' => now(), 'updated_at' => now()]);
    }
}
