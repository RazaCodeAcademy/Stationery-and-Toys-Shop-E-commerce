@extends('layouts.master')

@section('title', 'Shoping-Cart')

@section('content')

    <section>
        <div class="about-banner">
            <div class="overlay">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-center text-white">Checkout</h2>
                    <p>
                        <a href="/" class="universal-btn">Home</a><span class=""> / Checkout</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center text-uppercase theme-color">Checkout</h1>
                <hr>
                <h4 class="text-center theme-color-bg text-white py-3">Your Total : Rs.{{ $total }}</h4>
                <hr>
                @if(Session::get('error'))
                    <div id="charge-error" class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <form action="/checkout" method="post" id="checkout-form">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" required name="name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" id="address" class="form-control" type="text" name="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="card-name">Card Holder Name</label>
                                <input id="card-name" class="form-control" type="text" name="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="card-number">Credit Card Number</label>
                                <input id="card-number" class="form-control" type="text" name="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="card-expiry-month">Expiration Month</label>
                                <input id="card-expiry-month" class="form-control" type="text" name="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="card-expiry-year">Expiration Year</label>
                                <input id="card-expiry-year" class="form-control" type="text" name="" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="card-cvc">CVC</label>
                                <input id="card-cvc" class="form-control" type="text" name="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-md-5 offset-sm-3 offset-2">
                        <button type="submit" class="btn text-white checkout-btn px-5 mt-3">Buy now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
 <script src="https://js.stripe.com/v2/"></script>
 <script src="{{ asset('js/checkout.js') }}"></script>
@endsection
