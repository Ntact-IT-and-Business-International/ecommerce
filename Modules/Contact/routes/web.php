<?php

use Illuminate\Support\Facades\Route;
use Modules\Contact\Http\Controllers\ContactController;

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

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('Contact');
});

