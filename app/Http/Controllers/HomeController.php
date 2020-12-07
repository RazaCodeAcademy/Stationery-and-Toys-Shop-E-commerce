<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $oldCart = Session::get('cart');
        // $cart = new Cart($oldCart);
        // $total = $cart->totalPrice;
        // if(!Session::has('cart')){
        //     return 'abc';
        // }

        if(Session::has('cart')){
            return redirect()->route('checkout');
        }

         return view('home');
    }
}
