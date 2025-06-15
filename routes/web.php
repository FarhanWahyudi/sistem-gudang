<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AdminController::class)->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', 'dashboard');
    Route::get('/admin/stock', 'stock');
    Route::get('/admin/product', 'product');
    Route::get('/admin/category', 'category');
    Route::get('/admin/staf', 'staf');
    Route::get('/admin/product/add-product', 'addProduct');
});

Route::get('/stock', function () {
    return view('user.stocks');
});
Route::get('/product', function () {
    return view('user.products');
});
Route::get('/product', function () {
    return view('user.products');
});
Route::get('/category', function () {
    return view('user.categories');
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
