<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'bde',
        ]);

        DB::table('roles')->insert([
            'name' => 'employee',
        ]);

        DB::table('roles')->insert([
            'name' => 'student',
        ]);
    }
}
