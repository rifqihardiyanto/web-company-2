<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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
Route::get('/product', [PublicController::class, 'product']);
Route::get('/contact', [PublicController::class, 'contact']);
Route::get('/blog', [PublicController::class, 'blog']);
Route::get('/blogs', [PublicController::class, 'blogs']);
