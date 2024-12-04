<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;  // Import the User model

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if an admin already exists, if not create one
        if (User::where('email', 'admin@gmail.com')->doesntExist()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@Gmail.com',
                'password' => Hash::make('admin'),  // Make sure the password is hashed
            ]);
        }
    }
}
