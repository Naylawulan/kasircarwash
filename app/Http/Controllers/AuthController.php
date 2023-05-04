<?php

namespace App\Http\Controllers;

use Illuminate\Http\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login'); 
    }
    public function register(){
        return view('auth.register'); 
    }

    public function logout(){
       Auth::logout();
        return redirect('/login'); 
    }

    public function postregister(Request $request){
      $user = new \App\Models\User;
      $user->role="kasir";
      $user->name =$request->name;
      $user->email =$request->email;
      $user->password = bcrypt($request->password);
      $user->alamat =$request->alamat;
      $user->no_tlpn =$request->no_tlpn;
      $user->save();
    return redirect('/login');
    }
    
    public function postlogin(Request $request){
     if (Auth::attempt($request->only('email', 'password'))){
        return redirect('/dashboard');
     }
     return redirect('/dashboard');
    }

}
