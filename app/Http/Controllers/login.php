<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class login extends Controller
{
    public function halamanlogin(){
        return view('login');
    }

    public function postlogin(Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/welcome');
        }
        return redirect('/');
    }
    
}
