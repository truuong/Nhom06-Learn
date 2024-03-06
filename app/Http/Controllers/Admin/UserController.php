<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        return view('admin.user-manage.list');
    }
    public function edit(){
        return view('admin.user-manage.edit');
    }
}
