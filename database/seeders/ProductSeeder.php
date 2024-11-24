<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone 14 Pro',
                'price' => '99999',
                'description' => 'Latest iPhone with Dynamic Island and 48MP camera',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/83/39/82/8339823656ee1fb3d5487e9ecd86c971.jpg',
            ],
            [
                'name' => 'OnePlus 11',
                'price' => '54999',
                'description' => 'Flagship phone with Snapdragon 8 Gen 2 and 50MP camera',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/52/78/cd/5278cdbdc58569242eb0ed5461c18f7d.jpg',
            ],
            [
                'name' => 'Google Pixel 7',
                'price' => '59999',
                'description' => 'Best-in-class camera with Google Tensor chip',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/77/50/27/775027f904d219fe249a3483edad9522.jpg',
            ],
            [
                'name' => 'Xiaomi 13 Pro',
                'price' => '74999',
                'description' => 'Stunning 120Hz AMOLED display and Leica-powered camera',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/9f/95/09/9f95096338e1c3a3ce56a4a30ea72636.jpg',
            ],
            [
                'name' => 'Oppo Reno 8 Pro',
                'price' => '44999',
                'description' => 'Ultra-fast charging and flagship performance',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/52/23/c6/5223c67cff816229abb96f9fc2603db7.jpg',
            ], 
            [
                'name' => 'Vivo X90 Pro',
                'price' => '69999',
                'description' => 'Professional-grade Zeiss optics and advanced night photography',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/6f/53/d3/6f53d3da4b0596fb52f99f98859957a1.jpg',
            ],
            [
                'name' => 'Realme GT Neo 5',
                'price' => '38999',
                'description' => 'Blazing-fast 240W charging with AMOLED display',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/d6/34/7c/d6347c2eb32580882fa7d220de41c149.jpg',
            ],
            [
                'name' => 'Asus ROG Phone 7',
                'price' => '79999',
                'description' => 'Gaming powerhouse with 165Hz screen and AirTrigger controls',
                'category' => 'mobile',
                'gallery' => 'https://i.pinimg.com/736x/be/f9/15/bef91594b3bcc7833cd62b37343c932f.jpg',
            ],
            
            

        ]);
    }
}
