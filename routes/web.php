<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


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
})->name('welcome');

//
//Route::group(['prefix' => 'products',],function(){
//	Route::get('/',[ProductsController::class, 'index'])->name('products.index');
//	Route::post('/store',[ProductsController::class, 'store'])->name('products.store');
//	Route::get('/create',[ProductsController::class, 'create'])->name('products.create');
//	Route::get('/{id}',[ProductsController::class, 'show'])->name('products.show')->where('id','\d+');
//	Route::get('/{id}/edit',[ProductsController::class, 'edit'])->name('products.edit')->where('id','\d+');
//	Route::post('/{id}',[ProductsController::class, 'update'])->name('products.update')->where('id','\d+');
//	Route::delete('/{id}',[ProductsController::class, 'destroy'])->name('products.destroy')->where('id','\d+');
//});

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products/store', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');
Route::get('products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit')->where('id','\d+');
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.destroy')->where('id','\d+');
Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit')->where('id','\d+');
Route::post('/products/{product}', [ProductsController::class, 'update'])->name('products.update')->where('id','\d+');