<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'telephone' => '123456789',
            'address' => 'Admin Address',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Membuat user
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'telephone' => '987654321',
            'address' => 'User Address',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}