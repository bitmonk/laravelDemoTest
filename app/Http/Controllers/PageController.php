<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

 public function index(){


    return view('welcome');
 }

 public function about($id){

    return view('about',compact('id'));
 }

 public function service(){
    return view('Page.service');
 }
}
