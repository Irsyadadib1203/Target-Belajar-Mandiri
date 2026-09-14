<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::get('/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
Route::post('/product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::post('/dashboard', [App\Http\Controllers\DashboardController::class, 'getProduct'])->name('dashboard.getProduct');
