<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks to safely truncate the table
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert users
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // assuming Admin has role ID 1
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Normal User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // assuming User has role ID 2
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
