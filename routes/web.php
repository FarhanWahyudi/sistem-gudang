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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/stock', [StockController::class, 'stock']);
    Route::get('/product', [ProductController::class, 'product']);
    Route::get('/product/add-product', [ProductController::class, 'addProduct']);
    Route::get('/category', [CategoryController::class, 'category']);
    Route::get('/staf', [StafController::class, 'staf']);
});

Route::name('user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/stock', [UserStockController::class, 'stock']);
    Route::get('/product', [UserProductController::class, 'product']);
    Route::get('/category', [UserCategoryController::class, 'category']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
