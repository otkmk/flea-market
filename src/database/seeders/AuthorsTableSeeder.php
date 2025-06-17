<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'product_name' => '腕時計',
            'price' => 15000,
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'product_img' => '/images/Armani+Mens+Clock.jpg',
            'condition' => '良好',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'HDD',
            'price' => 5000,
            'description' => '高速で信頼性の高いハードリスク',
            'product_img' => '/images/HDD+Hard+Disk.jpg',
            'condition' => '目立った傷や汚れなし',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => '玉ねぎ3束',
            'price' => 300,
            'description' => '新鮮な玉ねぎ3束のセット',
            'product_img' => '/images/iLoveIMG+d.jpg',
            'condition' => 'やや傷や汚れあり',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => '革靴',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
            'product_img' => '/images/Leather+Shoes+Product+Photo.jpg',
            'condition' => '状態が悪い',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'ノートPC',
            'price' => 45000,
            'description' => '高性能なノートパソコン',
            'product_img' => '/images/Living+Room+Laptop.jpg',
            'condition' => '良好',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'マイク',
            'price' => 8000,
            'description' => '高音質のレコーディング用マイク',
            'product_img' => '/images/Music+Mic+4632231.jpg',
            'condition' => '目立った傷や汚れなし',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'ショルダーバッグ',
            'price' => 3500,
            'description' => 'おしゃれなショルダーバッグ',
            'product_img' => '/images/Purse+fashion+pocket.jpg',
            'condition' => 'やや傷や汚れあり',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'タンブラー',
            'price' => 500,
            'description' => '使いやすいタンブラー',
            'product_img' => '/images/Tumbler+souvenir.jpg',
            'condition' => '状態が悪い',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'コーヒーミル',
            'price' => 4000,
            'description' => '手動のコーヒーミル',
            'product_img' => '/images/Waitress+with+Coffee+Grinder.jpg',
            'condition' => '良好',
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name' => 'メイクセット',
            'price' => 2500,
            'description' => '便利なメイクアップセット',
            'product_img' => '/images/外出メイクアップセット.jpg',
            'condition' => '目立った傷や汚れなし',
        ];
        DB::table('products')->insert($param);
    }
}
