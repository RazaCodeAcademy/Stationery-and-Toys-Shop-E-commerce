<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->where('completed', '0')->get();
        $completed_orders = Order::where('completed', '1')->get();
        return view('Admin.orders.index', compact('orders', 'completed_orders'));
    }

    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderId = $id;
        $orders = Order::all()->where('id', $id);
        $orders->transform(function($orders, $key){
            $orders->cart = unserialize($orders->cart);
            return $orders;
        });
        return view('Admin.orders.show', compact('orders', 'orderId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->completed = $request->completed;
        $order->save();
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show the all Completed Orders in the given list.
     *
     * @return \Illuminate\Http\Response
     */
    public function completedOrders()
    {
        $orders = Order::orderBy('id', 'DESC')->where('completed', '1')->get();
        $pending_orders = Order::where('completed', '0')->get();
        $completed_orders = Order::where('completed', '1')->get();
        return view('Admin.orders.displayCompletedOrders', compact('orders', 'completed_orders', 'pending_orders'));
    }

}
