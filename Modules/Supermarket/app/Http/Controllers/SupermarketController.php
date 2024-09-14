<?php

namespace Modules\Supermarket\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SupermarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('supermarket::index');
    } 

    /**
     * This function fetches selected product details
     */
    public function getProductDetails()
    {
        return view('supermarket::product_details');
    }
     /**
     * This function fetches new and trending items
     */
    public function getNewAndTrending()
    {
        return view('supermarket::new_and_trending');
    }
     /**
     * This function fetches fashion and beauty items
     */
    public function getFashionAndBeauty()
    {
        return view('supermarket::fashion_and_beauty');
    }
     /**
     * This function fetches electronics
     */
    public function getElectronics()
    {
        return view('supermarket::electronics');
    }
     /**
     * This function fetches toys shop
     */
    public function getToys()
    {
        return view('supermarket::toys');
    }

 
}
