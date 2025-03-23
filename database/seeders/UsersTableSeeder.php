<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('password'), 'mobile' => '1234567890', 'address' => 'Admin Street, City', 'role' => 'admin'],
            ['name' => 'User1', 'email' => 'user1@example.com', 'password' => Hash::make('password'), 'mobile' => '1111111111', 'address' => 'User1 Street, City', 'role' => 'customer'],
            ['name' => 'User2', 'email' => 'user2@example.com', 'password' => Hash::make('password'), 'mobile' => '2222222222', 'address' => 'User2 Street, City', 'role' => 'customer'],
            ['name' => 'User3', 'email' => 'user3@example.com', 'password' => Hash::make('password'), 'mobile' => '3333333333', 'address' => 'User3 Street, City', 'role' => 'customer']
        ]);
    }
}