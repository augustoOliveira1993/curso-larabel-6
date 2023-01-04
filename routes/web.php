<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/login', function () {
    return 'Login';
})->name('login');

Route::get('products', [ProductController::class, 'index'])->name('products.index');

