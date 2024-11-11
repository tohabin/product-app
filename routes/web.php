<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




// List all products
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Show the form to create a new product
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store a new product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Show a specific product by its ID
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Show the form to edit an existing product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update an existing product
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Delete a product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
