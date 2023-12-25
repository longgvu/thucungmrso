<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['tittle' => 'Balo Phi Hành Gia Vận Chuyển Chó Mèo','link' => 'ba-lo-phi-hanh-gia-van-chuyen-cho-meo', 'description' => 'Balo Phi Hành Gia Vận Chuyển Chó Mèo', 'image' => '1', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '1', 'category_2_id' => '3'],
            
        ];

        // Thêm dữ liệu vào bảng categories
        DB::table('products')->insert($products);
    }
}
