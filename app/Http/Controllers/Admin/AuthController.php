<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function register(){
        return view('admin.auth.register');
    }
    public function forgotpass(){
        return view('admin.auth.forgotPassword');
    }
}
