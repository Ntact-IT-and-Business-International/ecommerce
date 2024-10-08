<?php

use Illuminate\Support\Facades\Route;
use Modules\Restaurant\Http\Controllers\RestaurantController;

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

Route::group(['prefix' => 'restaurant'], function () {
    Route::get('/', [RestaurantController::class, 'index'])->name('Supermarket');
    Route::get('/item-details',[RestaurantController::class,'getItemDetails']);
});
