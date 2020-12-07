@extends('layouts.user-master')
@section('title', 'Profile')

@section('content')

    {{-- Order Details Section --}}
    <section>
        <div class="container-fluid">
            <div class="row">
                @if (Session::has('success'))
                    <div class="col-md-12">
                        <div id="charge-message" class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @endif
                <div class="col-md-12">
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">My Orders</h2>
                    @foreach ($orders as $order)
                    <?php $sr = 1; $item_price_total = 0;?>
                        <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                            <thead>
                                <th>Sr.No</th>
                                <th class="w-25">Title</th>
                                <th>Item</th>
                                <th>Unit</th>
                                <th>Price</th>
                                <th>Amount</th>
                            </thead>
                            <tbody>
                                @foreach ($order->cart->items as $item)
                                    <tr>
                                        <td class="align-middle">{{ $sr++ }}</td>
                                        <td class="align-middle">{{ $item['item']['title'] }}</td>
                                        <td class="align-middle"><img src="{{ asset('/uploads/item/images/'. $item['item']['thumbnail']) }}" alt="" width="50" height="50"></td>
                                        <td class="align-middle">{{ $item['qty'] }}</td>
                                        <td class="align-middle">Rs {{ $item['price']/$item['qty'] }}</td>
                                        <td class="align-middle">Rs {{ $item['price'] }}</td>
                                        <?php $item_price_total += $item['price']; ?>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="align-mdiddle"><strong>Order ID : {{ $order->id }}</strong></td>
                                    <td colspan="2" class="align-mdiddle"><strong>Discount : Rs.{{ ($item_price_total - $order->cart->totalPrice) }}</strong></td>
                                    <td colspan="2" class="align-mdiddle text-right pr-5"><strong>Total Price: Rs.{{ $order->cart->totalPrice }}</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
