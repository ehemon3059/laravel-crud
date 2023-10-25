<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [productController::class, 'index'])->name('product.index');

Route::get('/product/create', [productController::class, 'create'])->name('product.create');

Route::post('/product', [productController::class, 'store'])->name('product.store');

Route::get('/product/{variableProduct}/edit', [productController::class, 'edit'])->name('product.edit');

Route::put('/product/{updateProduct}/update', [productController::class, 'update'])->name('product.update');

Route::delete('/product/{deleteProduct}/destory', [productController::class, 'destory'])->name('product.destory');