<?php

namespace App\Http\Controllers;


class CartController extends Controller
{
    public function getShoppingCart(){
        return view('front.shopping_cart');
    }

    public function getShoppingCheckOut(){
        return view('front.shopping_checkout');
    }
}
