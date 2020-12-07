@extends('layouts.master')

@section('title', 'Shoping-Cart')

@section('content')

<?php
    $tax = '';
    $discount = '';
    $grandTotal = '';
?>

    <section>
        <div class="about-banner">
            <div class="overlay">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-center text-white">Cart</h2>
                    <p>
                        <a href="/" class="universal-btn">Home</a><span class=""> / Cart</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        @if (Session::has('cart'))
            <table class="table cart-table table-responsive-sm">
                <thead class="theme-color-bg text-white">
                    <th width="100">Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qunatity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </thead>
                <tbody >
                    {{-- @dd($products) --}}
                    @foreach ($products as $product)
                        <tr>
                            <td><img src="{{ asset('/uploads/item/images/'.$product['item']['thumbnail']) }}" alt="" width="80" height="100" class="mx-2"></td>
                            <td class="pt-5">{{ $product['item']['title'] }}.</td>
                            <td class="pt-5">Rs.{{ $product['item']['price'] }}</td>
                            <td class="qty-font py-4">
                                <a class="px-2" href="{{ route('reduceByOne', ['id' => $product['item']['id']]) }}"><i class="fa fa-minus-square text-success" aria-hidden="true"></i></a>
                                <span class="px-2">{{ $product['qty'] }}</span>
                                <a class="px-2" href="{{ route('addtocart', ['id' => $product['item']['id']]) }}"><i class="fa fa-plus-square text-success" aria-hidden="true" ></i></a>
                            </td>
                            <td class="pt-5">Rs.{{ $product['price'] }}</td>
                            <td class="qty-font py-4">
                                <a class="" href="{{ route('removeItem', ['id' => $product['item']['id']]) }}"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <div class="py-3">
                        <h4>Order Summery</h4>
                        <hr>
                        <div class="d-flex my-2">
                            <strong>Sub Total</strong>
                            <strong class="ml-auto"><strong class="">Rs.{{ $totalPrice }}</strong></strong>
                        </div>
                        <div class="d-flex my-2">
                            <strong>Discount</strong>
                            <strong class="ml-auto"><strong class="">Rs.{{ $discount = ($totalPrice*10/100) }}</strong></strong>
                        </div>
                        <hr>
                        <div class="d-flex my-2">
                            <strong>Tax</strong>
                            <strong class="ml-auto"><strong class="">Rs.{{ $tax = ($totalPrice*2/100) }}</strong></strong>
                        </div>
                        <div class="d-flex my-2">
                            <strong>Shipping Cost</strong>
                            <strong class="ml-auto"><strong class="">Free</strong></strong>
                        </div>
                        <hr>
                        <div class="d-flex my-2">
                            <h4 class="theme-color">Grand Total</h4>
                            <strong class="ml-auto"><strong class="">Rs.{{ $grandTotal = (($totalPrice - $tax) - $discount) }}</strong></strong>
                        </div>
                        <hr>
                        <?php Session::put('grandTotal', $grandTotal);?>
                        <a href="/checkout" class="btn text-white w-100 checkout-btn">Checkout</a>
                    </div>
                </div>
            </div>
        @else
            <h2>No Items in Cart </h2>
        @endif
    </div>
@endsection
