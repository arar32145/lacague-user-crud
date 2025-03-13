<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed users
        $names = ["j", "k", "i", "e", "h", "l", "c"];

        foreach ($names as $name) {
            User::create([
                'name' => ucfirst($name) . " User",
                'email' => strtolower($name) . '@example.com',
                'password' => Hash::make('password123'), // Store hashed password
            ]);
        }
    }
}

