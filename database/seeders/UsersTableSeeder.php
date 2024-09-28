<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([

            ['username' => 'neny', 'password' => bcrypt('12345'), 'role' => 'admin'],
        ]);
    }
}

