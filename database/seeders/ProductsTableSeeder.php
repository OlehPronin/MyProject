<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Ryzen 5 1600', 'summary' => 'Анонс товара 19:08:2024', 'price' => 2100.00, 'category' => 'Категория Процессоры'],
            ['name' => 'Ryzen 5 3600', 'summary' => 'Анонс товара 19:08:2024', 'price' => 3150.00, 'category' => 'Категория Процессоры'],
            ['name' => 'Ryzen 7 3800x', 'summary' => 'Анонс товара 19:08:2024', 'price' => 6100.00, 'category' => 'Категория Процессоры'],
            ['name' => 'Ryzen 9 3900', 'summary' => 'Анонс товара 19:08:2024', 'price' => 11150.00, 'category' => 'Категория Процессоры'],
            ['name' => 'Ryzen 7 7800x3d', 'summary' => 'Анонс товара 19:08:2024', 'price' => 14100.00, 'category' => 'Категория Процессоры'],
            ['name' => 'Intel Pentium 2', 'summary' => 'Анонс товара 19:08:2024', 'price' => 150.00, 'category' => 'Категория Процессоры'],
            // Добавьте другие товары здесь
        ]);
    }
}