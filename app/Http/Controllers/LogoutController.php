<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logoutUser()
    {
        Auth::logout();

        return redirect('/');
    }
}
