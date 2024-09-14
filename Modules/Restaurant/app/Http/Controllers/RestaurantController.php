<?php

namespace Modules\Restaurant\Http\Controllers;

use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurant::index');
    }

    /**
     * This function gets selected item details.
     */
    public function getItemDetails()
    {
        return view('restaurant::item_details');
    }
}
