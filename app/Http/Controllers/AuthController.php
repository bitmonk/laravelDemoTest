<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(){
    return view('Page.Auth.Login');
   }

   public function register (){
    return view('Page.Auth.Register');
   }

   public function registerPost(Request $request) {
    $registerUser = new User();
    $registerUser->name  = $request->name;
    $registerUser->email = $request->email;
    $registerUser->password = Hash::make($request->password);
    $registerUser->save();
    toast('Register successfully','success');
    return redirect()->back();
   }
}
