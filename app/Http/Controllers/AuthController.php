<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(){
    return view('Page.Auth.Login');

   }

   public function authLogin(LoginRequest $request){

    $user = User::where('email',$request->email)->first();
    $password = $user->password;
    if(Hash::check($request->password,$password)){
        Auth::login($user);
        toast('Login successfully','success');
        return redirect()->route('home');

    }else{
        toast('Email and password doesnot match','error');
        return redirect()->back();
    }
   }

   public function logout(){
    Auth::logout();
    toast('logout successfully','success');
    return redirect()->back();
   }



   public function register (){
    return view('Page.Auth.Register');
   }

   public function registerPost(RegisterRequest $request) {
    $registerUser = new User();
    $registerUser->name  = $request->name;
    $registerUser->email = $request->email;
    $registerUser->password = Hash::make($request->password);
    $registerUser->save();
    toast('Register successfully','success');
    return redirect()->back();
   }
}
