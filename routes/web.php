<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/stock', function () {
    return view('admin.stocks');
});
Route::get('/admin/product', function () {
    return view('admin.products');
});
Route::get('/admin/category', function () {
    return view('admin.categories');
});
Route::get('/admin/staf', function () {
    return view('admin.staf');
});
Route::get('/admin/product/add-product', function () {
    return view('admin.add-product');
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
