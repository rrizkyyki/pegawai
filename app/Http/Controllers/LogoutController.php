<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        // return redirect(RouteServiceProvider::HOME)->with('success', 'You are now logged out');
        return redirect('/')->with('success', 'You are now logged out');
    }
}
