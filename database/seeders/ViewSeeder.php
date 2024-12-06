<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\View;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        View::create([
            'title' => 'Ark Care Ministry',
            'favicon_logo' => null,  // Add default value or leave it null
            'greeting_message' => 'Welcome to ACM!',
            // Add any other default columns you want to set
        ]);
    }
}
