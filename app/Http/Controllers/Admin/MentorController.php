<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function list(){
        return view('admin.mentor-manage.list');
    }
    public function edit(){
        return view('admin.mentor-manage.edit');
    }
}
