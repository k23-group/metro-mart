<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'Nike',
                'description' => 'Nike is a global leader in athletic footwear, apparel, and equipment.',
                'image' => 'images/nike_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apple',
                'description' => 'Apple Inc. designs, manufactures, and sells consumer electronics, computer software, and online services.',
                'image' => 'images/apple_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung',
                'description' => 'Samsung is a multinational conglomerate known for its wide range of electronics, including smartphones, tablets, and televisions.',
                'image' => 'images/samsung_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony',
                'description' => 'Sony is a Japanese multinational corporation known for its electronics, gaming, and entertainment products.',
                'image' => 'images/sony_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adidas',
                'description' => 'Adidas is a global brand specializing in sportswear, footwear, and accessories.',
                'image' => 'images/adidas_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
