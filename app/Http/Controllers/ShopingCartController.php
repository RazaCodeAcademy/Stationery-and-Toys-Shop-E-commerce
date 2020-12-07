<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Session;
use \Stripe\Stripe;
use \Stripe\Charge;
use App\Order;
use Illuminate\Support\Facades\Auth;

class ShopingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('Shop.index', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        $request->session()->get('cart');

        if(url()->previous() === 'http://127.0.0.1:8000/'){
            return redirect('/');
        }
        else if(url()->previous() === 'http://127.0.0.1:8000/shop'){
            return redirect('/shop');
        }
        else if($request->url() === 'http://127.0.0.1:8000/add-to-cart/'.$id){
            return redirect()->route('show');
        }
    }

    /**
     * Reduce items by one form the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null ;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('show');
    }

    /**
     * Remove items form the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null ;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (!Session::has('cart')) {
            return view('Shop.show', [
                'products' => null,
            ]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('Shop.show', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
        ]);
    }

    /**
     * Checkout the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        if (!Session::has('cart')) {
            $product = Product::all();
            return view('welcome', compact('product'));
        }
        $total = Session::get('grandTotal');
        return view('Shop.checkout' ,[
            'total' => $total,
        ]);
    }

    /**
     * Checkout Post the specified resource to storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postcheckout(Request $request)
    {
        if (!Session::has('cart')) {
            $product = Product::all();
            return redirect()->route('index', compact('product'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart->totalPrice = Session::get('grandTotal');

        Stripe::setApiKey('sk_test_51HeMxMGahXUsew7k6ec4XRpLmmlMfZsME2gfh5wV6dLECgbL0ughoIFsOUVxyKHU5emmui1Ns5QGQnQWuLQtKaT700QH3hrEDe');
        try{
            $charge = Charge::create(array(
                "amount" => (Session::get('grandTotal')) * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge",
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->address;
            $order->name = $request->name;
            $order->payment_id = $charge->id;
            $order->user_id = Auth::id();

            $order->save();
        } catch(\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        Session::forget('grandTotal');
        return redirect()->route('user.index')->with('success', 'Successfully purchased product!');
    }
}

// 4242424242424242
