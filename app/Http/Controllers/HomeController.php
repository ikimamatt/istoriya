<?php

namespace App\Http\Controllers;
use App\Models\Product;

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

    public function showProduct()
    {
        $products = Product::all();
        return view('katalog', compact('products'));
    }
}
