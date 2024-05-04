<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('products')->insert([
            'product_id' => 1,
            'product_name' => 'Tự truyện của Nemo',
            'description' => 'Tự truyện của Nemo kể về cuộc hành trình của nemo ...',
            'price' => 100000,
            'category' => 'Phiêu Lưu',
            'image' => '1712835587_✰Zenitsu Agatsuma.jpg',
        ]);
        DB::table('products')->insert([
            'product_id' => 2,
            'product_name' => 'Cuộc phiêu lưu của shabo',
            'description' => 'Tự truyện của Nemo kể về cuộc hành trình của nemo ...',
            'price' => 100000,
            'category' => 'Phiêu Lưu',
            'image' => '1712835587_✰Zenitsu Agatsuma.jpg',
        ]);
        DB::table('products')->insert([
            'product_id' => 3,
            'product_name' => 'Qua khứ của chúng ta',
            'description' => 'Tự truyện của Nemo kể về cuộc hành trình của nemo ...',
            'price' => 100000,
            'category' => 'Lãng mạng',
            'image' => '1712835587_✰Zenitsu Agatsuma.jpg',
        ]);
        DB::table('products')->insert([
            'product_id' => 4,
            'product_name' => 'Án mạng sau ngọn núi',
            'description' => 'Tự truyện của Nemo kể về cuộc hành trình của nemo ...',
            'price' => 100000,
            'category' => 'trinh thám',
            'image' => '1712835587_✰Zenitsu Agatsuma.jpg',
        ]);
        DB::table('products')->insert([
            'product_id' => 5,
            'product_name' => 'Xuyên không trở thành công chúa',
            'description' => 'Tự truyện của Nemo kể về cuộc hành trình của nemo ...',
            'price' => 100000,
            'category' => 'viễn tưởng',
            'image' => '1712835587_✰Zenitsu Agatsuma.jpg',
        ]);
        DB::table('products')->insert([
            'product_id' => 6,
            'product_name' => 'Bí ẩn về vũ trụ',
            'description' => 'Tự truyện của Nemo kể về cuộc hành trình của nemo ...',
            'price' => 100000,
            'category' => 'khoa học',
            'image' => '1712835587_✰Zenitsu Agatsuma.jpg',
        ]);

    }
}
