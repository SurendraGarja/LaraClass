<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProductContoller;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/',[pagesController::class, 'home'])->name('home');
Route::get('/about',[pagesController::class, 'about'])->name('about');
Route::get('/shop',[pagesController::class, 'shop'])->name('shop');
Route::get('/dashboard',[pagesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories', [CategoryController::class, 'index'])->name ('categories.index');
Route::get('/create', [CategoryController::class, 'create'])->name ('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name ('categories.store');
Route::get('/categories.edit/{id}/edit', [CategoryController::class, 'edit'])->name ('categories.edit');
Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name ('categories.update');
Route::get('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Product routes
Route::get('/products', [ProductContoller::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductContoller::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductContoller::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit',[ProductContoller::class, 'edit'])->name('products.edit');
Route::post('/products/{id}/update',[ProductContoller::class, 'update'])->name('products.update');
Route::get('/products/{id}/destroy', [ProductContoller::class, 'destroy'])->name('Products.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
