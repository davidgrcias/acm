<?php
use Illuminate\Database\Seeder;
use Illuminate\Supaport\Facades\DB;

class GalleriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'image' => '1.jpeg',
                'label' => 'Gallery Image 1',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '2.png',
                'label' => 'Gallery Image 2',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '3.png',
                'label' => 'Gallery Image 3',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '4.jpg',
                'label' => 'Gallery Image 4',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '5.png',
                'label' => 'Gallery Image 5',
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => '6.jpg',
                'label' => 'Gallery Image 6',
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
