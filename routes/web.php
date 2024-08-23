<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CommentController;

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/', [StaticController::class, 'index']);
Route::get('/about-us', [StaticController::class, 'about']);

Route::get('/article/add','ArticlesController@create');
Route::get('/article/{id}', [ArticlesController::class, 'show']);
Route::post('/article/add','ArticlesController@store');

Route::get('/article/{id}/edit','ArticlesController@edit');
Route::put('/article/{id}/edit','ArticlesController@update');

Route::delete('/article/{id}/delete','ArticlesController@destroy');


Route::get('/shop', [ShopController::class, 'index']); // Для отображения всех товаров
Route::get('/shop/{id}', [ShopController::class, 'show']); // Для отображения одного товара


// Route::resource('/articles', ArticlesController::class);

Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

