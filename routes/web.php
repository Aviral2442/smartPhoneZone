<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
 
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/blog', [BlogController::class, 'blog'])->name('blog');