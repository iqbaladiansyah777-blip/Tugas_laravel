<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);

use App\Http\Controllers\BookController;

Route::resource('book', BookController::class);

Route::get('/admin', function () {
    return "Selamat datang!";
})->middleware('admin');

Route::get('/login', function () {
    return "Ini halaman login sementara.";
})->name('login');