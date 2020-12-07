<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    function index(){
        $product = Product::all();
        return view('welcome', compact('product'));
    }

    function about(){
        return view('about');
    }

    function services(){
        return view('services');
    }

    function contact(){
        return view('contact');
    }

}
