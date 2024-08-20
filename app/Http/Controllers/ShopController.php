<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Импорт модели Product

class ShopController extends Controller
{
    // Метод для отображения всех товаров
    public function index()
    {
        $products = Product::all(); // Получаем все товары
        return view('shop.index', compact('products')); // Передаем данные в представление
    }

    // Метод для отображения отдельного товара
    public function show($id)
    {
        $product = Product::findOrFail($id); // Находим товар по ID
        return view('shop.show', compact('product')); // Передаем данные в представление
    }
}
