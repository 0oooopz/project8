<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
})->name('welcome');


//Route::group(['prefix' => 'products','as' => 'products'],function(){
//	Route::get('/',[ProductsController::class, 'index'])->name('.index');
//	Route::post('/store',[ProductsController::class, 'store'])->name('.store');
//	Route::get('/create',[ProductsController::class, 'create'])->name('.create');
//	Route::get('/{product}',[ProductsController::class, 'show'])->name('.show')->where('id','\d+');
//	Route::get('/{product}/edit',[ProductsController::class, 'edit'])->name('.edit')->where('id','\d+');
//	Route::post('/{product}',[ProductsController::class, 'update'])->name('.update')->where('id','\d+');
//	Route::delete('/{product}',[ProductsController::class, 'destroy'])->name('.destroy')->where('id','\d+');
//});

Route::resource('/products', ProductsController::class);
Route::resource('/categories', CategoryController::class);