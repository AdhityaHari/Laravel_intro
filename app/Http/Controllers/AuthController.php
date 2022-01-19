<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function biodata(){
        return view('Form');
    }
}
