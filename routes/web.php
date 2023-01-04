<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/login', function () {
    return 'Login';
})->name('login');

Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
