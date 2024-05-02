<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Controllers extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function nav()
    {
        return view('nav');
    }

    public function cart()
    {
        return view('shopping_cart.shopping_cart');
    }


    public function listProducts()
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }
    
}

