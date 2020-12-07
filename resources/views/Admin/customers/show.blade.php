@extends('layouts.admin-master')
@section('title', 'Manage Customers')

@section('content')

    <?php $sr = 1; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-primary my-4" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">Customer Detail</h2>
                    @if ($customer)
                        <div class="d-flex">
                            <div class="text-center">
                                {{-- @dd(asset('/images/raza.jpeg'))) --}}
                                <img src="{{ asset('/images/'. ($customer->image ?? 'raza.jpeg')) }}" alt="...." width="350" height="350">
                            </div>
                            <div class="ml-5 mt-5">
                                <h5 class="py-2"><strong>Customer ID :</strong> <span class="ml-4">{{ $customer->id }}</span></h5>
                                <h5 class="py-2"><strong>Customer Name :</strong> <span class="ml-4">{{ $customer->name }}</span></h5>
                                <h5 class="py-2"><strong>Customer Email :</strong> <span class="ml-4">{{ $customer->email }}</span></h5>
                                <h5 class="py-2"><strong>Customer Joining :</strong> <span class="ml-4">{{ $customer->created_at }}</span></h5>
                            </div>
                        </div>
                    @else
                        <h3 class="text-center mt-5">There is no more customers...</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
