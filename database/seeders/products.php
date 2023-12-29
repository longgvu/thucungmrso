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
            ['tittle' => 'THỨC ĂN ME-O GOLD PERSIAN','link' => 'thuc-an-me-o-gold-persian', 'description' => 'Thức ăn cho mèo Me-o Gold Persian', 'image' => 'meo-o-gold-persian.png', 'brand' => '', 'old_price' => '90000', 'new_price' => '75000', 'category_1_id' => '3', 'category_2_id' => '7'],
            ['tittle' => 'THỨC ĂN ME-O DÀNH CHO MÈO ĐANG MANG THAI VÀ CHO CON BÚ','link' => 'thuc-an-me-o-danh-cho-meo-dang-mang-thai-va-cho-con-bu', 'description' => 'Thức ăn cho mèo đang mang thai và cho con bú', 'image' => 'me-o-danh-cho-meo-dang-mang-thai.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '3', 'category_2_id' => '7'],
            ['tittle' => 'BÁNH THƯỞNG DẠNG KEM SMARTHEART HƯƠNG VỊ GÀ VÀ BÍ NGÔ','link' => 'banh-thuong-dang-kem-smartheart-huong-vi-ga-va-bi-ngo', 'description' => 'Bánh thưởng dạng kem smartheart hương vị gà và bí ngô', 'image' => 'banh-thuong-dang-kem-smartheart.png', 'brand' => '', 'old_price' => '', 'new_price' => '', 'category_1_id' => '2', 'category_2_id' => '4'],
        ];

        // Thêm dữ liệu vào bảng categories
        DB::table('products')->insert($products);
    }
}
