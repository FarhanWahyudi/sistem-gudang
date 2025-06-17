<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StafController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CategoryController as UserCategoryController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\StockController as UserStockController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/stock', [StockController::class, 'index'])->name('stock');
    Route::post('/stock/in/{id}', [StockController::class, 'addStock'])->name('add-stock');
    Route::post('/stock/out/{id}', [StockController::class, 'reduceStock'])->name('reduce-stock');

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/update/{id}', [ProductController::class, 'update'])->name('update-product');
    Route::post('/product/update/{id}', [ProductController::class, 'postUpdate'])->name('post-update-product');
    Route::get('/product/add-product', [ProductController::class, 'create'])->name('add-product');
    Route::post('/product/add-product', [ProductController::class, 'store'])->name('post-add-product');
    Route::post('/product/delete/{id}', [ProductController::class, 'delete'])->name('delete-product');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('post-category');
    Route::post('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');
    Route::get('/category/{id}', [CategoryController::class, 'showProducts'])->name('category-products');

    Route::get('/staf', [StafController::class, 'staf'])->name('staf');
});

Route::name('user.')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/stock', [UserStockController::class, 'stock'])->name('stock');
    Route::post('/stock/in/{id}', [UserStockController::class, 'addStock'])->name('add-stock');
    Route::post('/stock/out/{id}', [UserStockController::class, 'reduceStock'])->name('reduce-stock');

    Route::get('/product', [UserProductController::class, 'product'])->name('product');

    Route::get('/category', [UserCategoryController::class, 'category'])->name('category');
    Route::get('/category/{id}', [UserCategoryController::class, 'showProducts'])->name('category-products');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
