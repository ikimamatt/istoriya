<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function ordering(){
        return view('admin.ordering');
    }

    public function index(){
        return view('home');
    }
}
