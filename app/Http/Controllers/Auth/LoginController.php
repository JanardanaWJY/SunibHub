<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginPage(){
        return view('authentification.login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect('/threads'); //->intended('/dashboard')
        }else{
            return back()->withErrors(['email' => 'invalid credentials']);
        }

    }

}
