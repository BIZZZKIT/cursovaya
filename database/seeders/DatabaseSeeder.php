<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
                'login' => 'User',
                'full_name' => 'Иванов Иван Иванович',
                'number_phone' => '89238228388',
                'password' => Hash::make('123456'),
        ]);

        User::insert([
            'login'=>'admin',
            'full_name'=>'admin',
            'number_phone'=>'admin',
            'password'=>Hash::make('admin'),
            'is_admin'=>true,
        ]);

        Category::insert([
            [
                'name_category'=>'Стиральная машина'
            ],
            [
                'name_category'=>'Холодильник'
            ],
            [
                'name_category'=>'Микроволновая печь'
            ],
            [
                'name_category'=>'Электрический чайник'
            ],
            [
                'name_category'=>'Пылесос'
            ],
        ]);

        Product::insert([
            [
                'name_product' => 'Стиральная машина LG',
                'description_product' => 'Стиральная машина с фронтальной загрузкой, 8 кг, 1200 об/мин, с функцией паровой стирки.',
                'price_product' => 29999,
                'category_id'=>'1',
                'image_product' => 'stiralka.jpeg',
                'country_product' => 'Южная Корея'
            ],
            [
                'name_product' => 'Холодильник Samsung',
                'description_product' => 'Холодильник с морозильной камерой, объем 350 л, класс энергопотребления A++.',
                'price_product' => 45999,
                'category_id'=>'2',
                'image_product' => 'holodilnik.png',
                'country_product' => 'Южная Корея'
            ],
            [
                'name_product' => 'Микроволновая печь Panasonic',
                'description_product' => 'Микроволновая печь с грилем, мощность 1000 Вт, объем 20 л.',
                'price_product' => 8999,
                'category_id'=>'3',
                'image_product' => 'microvolnovka.jpg',
                'country_product' => 'Япония'
            ],
            [
                'name_product' => 'Электрический чайник Philips',
                'description_product' => 'Чайник с функцией автоматического отключения, объем 1.7 л, мощность 2200 Вт.',
                'price_product' => 2999,
                'category_id'=>'4',
                'image_product' => 'chainik.jpg',
                'country_product' => 'Нидерланды'
            ],
            [
                'name_product' => 'Пылесос Dyson',
                'description_product' => 'Беспроводной пылесос с мощной всасывающей способностью и HEPA-фильтром.',
                'price_product' => 24999,
                'category_id'=>'5',
                'image_product' => 'pilesos.jpg',
                'country_product' => 'Великобритания'
            ],
        ]);
    }
}
