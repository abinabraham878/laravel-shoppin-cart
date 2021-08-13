<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/add_products', [ProductController::class, 'create']);
Route::post('/store_products', [ProductController::class, 'store']);
Route::delete('/products_destroy/{product}', [ProductController::class, 'destroy']);
Route::get('/products_show/{product}', [ProductController::class, 'show']);
Route::get('/products_edit/{product}', [ProductController::class, 'edit']);
Route::put('/products_update/{product}', [ProductController::class, 'update']);
Route::get('test', [ProductController::class, 'test']);


//categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories_create', [CategoryController::class, 'create']);
Route::post('/store_category', [CategoryController::class, 'store']);
Route::delete('/category_destroy/{category}', [CategoryController::class, 'destroy']);
Route::get('/category_show/{category}', [CategoryController::class, 'show']);
Route::get('/category_edit/{category}', [CategoryController::class, 'edit']);
Route::put('/category_update/{category}', [CategoryController::class, 'update']);
