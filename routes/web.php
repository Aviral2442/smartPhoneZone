<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;



use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Middleware\AuthMiddleware;

                                                                   // View routes for frontend pages 

Route::get('/', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('aboutus');
// });

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


Route::get('/', [HomeController::class, 'homeData'])->name('frontend.home.section');
Route::get('/about', [AboutController::class, 'aboutData'])->name('frontend.about.section');


                                                                   //  ROUTES FOR THE ADMIN PAGES

Route::get('/admin', function () {
    return redirect('/admin/login');
});

Route::get('/admin/register', function () {
    return view('AdminPanel.auth.adminRegister');
});

Route::get('/admin/login', function () {
    return view('AdminPanel.auth.adminLogin');
})->name('admin.login');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/blog', [BlogController::class, 'blog'])->name('blog');    
});

Route::post('/admin/login', [AdminLoginController::class, 'adminLoginSubmit'])->name('admin.loginSubmit');
Route::post('/admin/register', [AdminLoginController::class, 'adminRegisterSubmit'])->name('admin.RegisterSubmit');