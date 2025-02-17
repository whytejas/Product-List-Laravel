<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'hello');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');

Route::patch('/products/update/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
