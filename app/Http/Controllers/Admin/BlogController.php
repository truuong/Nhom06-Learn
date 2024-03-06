<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        return view('admin.blog.list');
    }
    public function add(){
        return view('admin.blog.add');
    }
    public function edit(){
        return view('admin.blog.edit');
    }
}
