<?php

namespace Modules\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display conact form.
     */
    public function index()
    {
        return view('contact::index');
    }
}
