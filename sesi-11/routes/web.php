<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart');

Route::post('/cart/add', [CartController::class, 'add'])
    ->name('cart.add');

Route::get('/checkout', [OrderController::class, 'checkout'])
    ->name('checkout');

Route::post('/checkout', [OrderController::class, 'store'])
    ->name('checkout.store');