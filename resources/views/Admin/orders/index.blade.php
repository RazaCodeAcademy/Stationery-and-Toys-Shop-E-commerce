@extends('layouts.admin-master')
@section('title', 'Manage Orders')

@section('content')

    <?php $sr = 1; ?>
    {{-- Orders card --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card mt-3">
                    <a href="{{ route('orders.index') }}" style="text-decoration: none;">
                        <div class="card-body bg-info py-4 rounded border-left">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="fa fa-cart-plus fa-5x text-white" aria-hidden="true"></i>
                                </div>
                                <div class="ml-auto">
                                    <h5 class="card-title text-white">Pending Orders</h5>
                                    <h4 class="text-muted text-center mt-2">{{ count($orders) }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <a href="{{ route('orders.completed') }}" style="text-decoration: none;">
                    <div class="card mt-3">
                        <div class="card-body bg-success py-4 rounded border-left">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="fa fa-cart-plus fa-5x text-white" aria-hidden="true"></i>
                                </div>
                                <div class="ml-auto">
                                    <h5 class="card-title text-white">Completed Orders</h5>
                                    <h4 class="text-muted text-center mt-2">{{ count($completed_orders) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- Order Details Section --}}
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">New Customer Orders</h2>
                    @if ($orders)
                        <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                            <thead>
                                <th>Sr.No</th>
                                <th class="w-25">UserName</th>
                                <th>Address</th>
                                <th>Posted</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="align-middle">{{ $sr++ }}</td>
                                        <td class="align-middle">{{ $order->name }}</td>
                                        <td class="align-middle">{{ $order->address }}</td>
                                        <td class="align-middle">{{ $order->created_at }}</td>
                                        <td class="align-middle"><a href="{{ route('orders.show', $order->id) }}" class="btn btn-success">Show</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3 class="text-center mt-5">There is no more orders...</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
