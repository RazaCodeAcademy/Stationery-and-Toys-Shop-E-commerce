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
                    <h2 class="theme-color-bg text-white text-center py-2 mt-3">Customers Detail</h2>
                    @if ($customers)
                        <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                            <thead>
                                <th>#</th>
                                <th class="w-25">UserName</th>
                                <th>Email</th>
                                <th>Joining</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="align-middle">{{ $customer->id }}</td>
                                        <td class="align-middle">{{ $customer->name }}</td>
                                        <td class="align-middle">{{ $customer->email }}</td>
                                        <td class="align-middle">{{ $customer->created_at }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex">
                                                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-success mr-1">Show</a>
                                                <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3 class="text-center mt-5">There is no more customers...</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
