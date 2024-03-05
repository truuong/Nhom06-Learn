<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class DashboardController{
    public function index(){
        return view('admin.home.home');
    }
}