<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function showForLogin()
    {
        return view('login');
    }

    function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        if ($email == 'root' && $password == 'root') {
            return redirect('home');
        } else {
            session()->flash('login_error', 'Wrong account');
            return redirect()->route('login.showForLogin');
        }
    }
}
