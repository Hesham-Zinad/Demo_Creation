<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return Redirect::intended('home');
        }else{
            return redirect()->back()->with('message', 'Login Faild! email or password not valid');
        }
    }
}
