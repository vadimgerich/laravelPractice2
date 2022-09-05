<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AdminsiteController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'mainpage'])->name('mainpage');

Route::get('/registration', [MainController::class, 'registration'])->name('registration');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::post('/check_registration', [AuthController::class, 'check_registration'])->name('check_registration');

Route::post('/do_registration', [AuthController::class, 'do_registration'])->name('do_registration');

Route::post('/login_check', [AuthController::class, 'login_check'])->name('login_check');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');

Route::get('/adminsite', [MainController::class, 'adminsite'])->name('adminsite');

Route::get('/add_new_product', [AdminsiteController::class, 'add_new_product'])->name('add_new_product');

Route::post('/doadd_product', [ProductController::class, 'doadd_product'])->name('doadd_product');

Route::get('/shopping_cart', [MainController::class, 'shopping_cart'])->name('shopping_cart');

Route::get('/add_to_cart', [ProductController::class, 'add_to_cart'])->name('add_to_cart');
