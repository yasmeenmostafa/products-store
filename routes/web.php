<?php

// use App\Http\Controllers\admin\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\ProductColorSizeController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\dashboard\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\ItemController;
use App\Models\Product;
use App\Models\ProductColorSize;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'redirectUser'])->name('admin')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('adminhome')->middleware('admincheck');
Route::get('/userhome', [HomeController::class, 'userhome'])->name('userhome')->middleware('usercheck');


Route::get('/home/settings', [SettingController::class, 'show'])->name('setting')->middleware('admincheck');
Route::post('/home/settings/update', [SettingController::class, 'update'])->middleware('admincheck');

Route::get('/home/categories', [CategoryController::class, 'show'])->name('categories')->middleware('admincheck');
Route::get('/home/categories/edit/{id}', [CategoryController::class, 'edit'])->middleware('admincheck');
Route::post('/home/categories/update', [CategoryController::class, 'update'])->middleware('admincheck');
Route::get('/home/categories/create', [CategoryController::class, 'create'])->middleware('admincheck');
Route::post('/home/categories/insert', [CategoryController::class, 'insert'])->middleware('admincheck');
Route::post('/home/categories/delete/{id}', [CategoryController::class, 'delete'])->middleware('admincheck');

Route::get('/home/products', [ProductController::class, 'show'])->name('products')->middleware('admincheck');
Route::get('/home/products/edit/{id}', [ProductController::class, 'edit'])->middleware('admincheck');
Route::post('/home/products/update', [ProductController::class, 'update'])->middleware('admincheck');
Route::get('/home/products/create', [ProductController::class, 'create'])->middleware('admincheck');
Route::post('/home/products/insert', [ProductController::class, 'insert'])->middleware('admincheck');
Route::get('/home/products/delete/{id}', [ProductController::class, 'delete'])->middleware('admincheck');

Route::get('/home/products/more/{id}', [ProductColorSizeController::class, 'showmore'])->middleware('admincheck');
Route::get('/home/products/addmore/{product_id}', [ProductColorSizeController::class, 'addmore'])->middleware('admincheck');
Route::post('/home/products/insertmore', [ProductColorSizeController::class, 'insertmore'])->middleware('admincheck');
Route::get('/home/products/remove/{id}', [ProductColorSizeController::class, 'delete'])->middleware('admincheck');


Route::get('/userhome/item/{id}', [ItemController::class, 'show'])->middleware('usercheck');
Route::post('/userhome/cart', [CartController::class, 'show'])->middleware('usercheck');
Route::get('/userhome/item/delete/{id}', [CartController::class, 'delete'])->middleware('usercheck');




Auth::routes([
    // route login cannot access
    "verify" => true,
]);
