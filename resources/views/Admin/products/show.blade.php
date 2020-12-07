@extends('layouts.admin-master')

@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary mt-3"> Edit Product</a>
                <h2 class="theme-color-bg text-white text-center py-2 mt-3">Products</h2>
                <table class=" table w-100 order-table table-responsive-sm rounded my-4">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Thumbnail</th>
                        <th>Created</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle">{{ $item->id }}</th>
                            <td class="align-middle">{{ $item->title }}</td>
                            <td class="align-middle">{{ $item->category_id }}</td>
                            <td class="align-middle">{{ $item->description }}</td>
                            <td class="align-middle">{{ $item->price }}</td>
                            <td class="align-middle"><img src="{{ asset('/uploads/item/images/'.$item->thumbnail) }}" alt="...." class="product-image" width="100" height="100"></td>
                            <td class="align-middle">{{ $item->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
