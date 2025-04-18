<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::get('/products/category/{categoryId}', [ProductController::class, 'getByCategory']);
Route::get('/products/subcategory/{subcategoryId}', [ProductController::class, 'getBySubcategory']);
Route::post('/orders', [OrderController::class, 'store']);
Route::post('/orders/create', [OrderController::class, 'createNewOrder']);
