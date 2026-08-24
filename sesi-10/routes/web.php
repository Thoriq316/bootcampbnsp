<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart');

Route::post('/cart/add', [CartController::class, 'add'])
    ->name('cart.add');    

Route::get('/checkout', [OrderController::class, 'checkout'])
    ->name('checkout');

    Route::post('/checkout', [OrderController::class, 'store'])
    ->name('checkout.store');