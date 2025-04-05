<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'mobile' => '0412345678',
            'address' => '123 Admin St',
            'avatar' => null,
            'role' => 'admin',
        ]);

        User::factory(10)->create(); // Optional: Create more with a factory
    }
}
