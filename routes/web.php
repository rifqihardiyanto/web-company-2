<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\CategorynewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home']);
Route::get('/about', [PublicController::class, 'about']);
Route::get('/products', [PublicController::class, 'products']);
Route::get('/product/{id}', [PublicController::class, 'product_detail']);
Route::get('/category/{id}', [PublicController::class, 'category']);
Route::get('/contact', [PublicController::class, 'contact']);
Route::get('/news', [PublicController::class, 'news']);
Route::get('/news/{news:slug}', [PublicController::class, 'single_news']);
Route::get('/notfound', [PublicController::class, 'notfound'])->name('notfound');

Route::middleware(['guest'])->group(function(){
    Route::get('login/dashboard/admin', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'login_action']);
    Route::get('register/dashboard/admin', [LoginController::class, 'register']);
    Route::post('register', [LoginController::class, 'register_action']);
});


Route::middleware(['auth'])->group(function(){
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
    // slider
    Route::resource('dashboard/slider', SliderController::class);
    // category
    Route::resource('dashboard/category', CategoryController::class);
    Route::resource('dashboard/categorynews', CategorynewsController::class);
    // management
    Route::resource('dashboard/management', ManagementController::class);
    // product
    Route::resource('dashboard/product', ProductController::class);
    // bestoffer
    Route::resource('dashboard/news', NewsController::class);
    //about
    Route::resource('dashboard/about', AboutController::class);
    //contact
    Route::resource('dashboard/contact', ContactController::class);
    // Logo
    Route::resource('dashboard/logo', LogoController::class);

});


