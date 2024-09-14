<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/logout',[LogoutController::class,'logoutUser']);
Route::get('/shopping-cart',[CartController::class,'getShoppingCart']);
Route::get('/checkout',[CartController::class,'getShoppingCheckOut']);
