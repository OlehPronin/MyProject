<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CommentController;

Route::get('/article/add', [ArticlesController::class, 'create']);
Route::post('/article/add', [ArticlesController::class, 'store']);

Route::get('/article/{id}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/article/{id}/edit', [ArticlesController::class, 'edit']);
Route::put('/article/{id}/edit', [ArticlesController::class, 'update']);
Route::delete('/article/{id}/delete', [ArticlesController::class, 'destroy']);

Route::post('/comments/{article}', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/', [StaticController::class, 'index']);
Route::get('/about-us', [StaticController::class, 'about']);

Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/{id}', [ShopController::class, 'show']);

Auth::routes();
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
