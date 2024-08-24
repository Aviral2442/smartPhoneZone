<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Middleware\AuthMiddleware;

// ROUTES FOR THE FRONTEND PAGES

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


//  ROUTES FOR THE ADMIN PAGES

Route::get('/admin', function () {
    return redirect('/admin/login');
});

// Auth Controller Routes
Route::get('/admin/login', function () {
    return view('AdminPanel.auth.adminLogin');
});

Route::get('/admin/register', function () {
    return view('AdminPanel.auth.adminRegister');
});


Route::post('/admin/login', [AdminLoginController::class, 'adminLoginSubmit'])->name('admin.loginSubmit');
Route::post('/admin/register', [AdminLoginController::class, 'adminRegisterSubmit'])->name('admin.RegisterSubmit');


Route::middleware([AuthMiddleware::class])->group(function () {

// Dashboard Controller Routes
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Blog Controller Routes
Route::get('/admin/blog', [BlogController::class, 'blog'])->name('blog');

});