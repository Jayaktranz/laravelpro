<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{

    use AuthenticatesUsers;
    //
    protected $redirectTo = RouteServiceProvider::HOME;


    public function showLoginForm()
    {
        return view('auth.Admin.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
