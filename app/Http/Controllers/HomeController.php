<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminindex(){
        return view('admin.index');
    }
    public function subadminindex(){
        return view('subadmin.index');
    }
    public function userindex(){
        return view('user.index');
    }
    public function home(){
        return view('home.index');
    }
}
