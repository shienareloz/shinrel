<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['role_name' => 'Admin', 'url' => '/admin', 'created_at' => now(), 'updated_at' => now()],
            ['role_name' => 'User', 'url' => '/user', 'created_at' => now(), 'updated_at' => now()],
            ['role_name' => 'Guest', 'url' => '/guest', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
