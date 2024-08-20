<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Замените это на фактические данные
        $posts = [
            ['title' => 'Запись на сайте', 'content' => 'Lorem ipsum dolor sit amet...'],
            ['title' => 'Запись на сайте', 'content' => 'Lorem ipsum dolor sit amet...'],
            // Добавьте больше постов по мере необходимости
        ];

        return view('blog.index', compact('posts'));
    }
}
