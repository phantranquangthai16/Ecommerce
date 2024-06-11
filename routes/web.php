<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [IndexController::class, 'home']);
Route::get('/danh-muc', [IndexController::class, 'danh_muc'])->name('danh_muc');// liệt kê các danh mục
Route::get('/danh-muc/{slug}', [IndexController::class, 'danh_muc'])->name('danh_muc_con');
Route::get('/san-pham', [IndexController::class, 'san_pham'])->name('san_pham');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//category
route::resource('/category', CategoryController::class);

Route::get('/edit-category', [CategoryController::class, 'getEditCategory']);

// products
Route::get('/products', [ProductController::class, 'index']);
