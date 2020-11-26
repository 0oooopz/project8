<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartsController;
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

Route::group(['prefix'=>'carts'], function(){
    Route::get('/', [CartsController::class, 'index'])->name('carts.index');
    Route::get('/{id}', [CartsController::class, 'show'])->name('carts.show');
});

Route::get('home', function(){
	return view('pages.home');
});