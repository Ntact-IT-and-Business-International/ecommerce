<?php

use Illuminate\Support\Facades\Route;
use Modules\Supermarket\Http\Controllers\SupermarketController;

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
Route::group(['prefix' => 'supermarket'], function () {
    Route::get('/', [SupermarketController::class, 'index'])->name('Supermarket');
    Route::get('/product-details',[SupermarketController::class,'getProductDetails']);
    Route::get('/new-and-trending',[SupermarketController::class,'getNewAndTrending']);
    Route::get('/fashion-and-beauty',[SupermarketController::class,'getFashionAndBeauty']);
    Route::get('/electronics',[SupermarketController::class,'getElectronics']);
    Route::get('/toys',[SupermarketController::class,'getToys']);
});
