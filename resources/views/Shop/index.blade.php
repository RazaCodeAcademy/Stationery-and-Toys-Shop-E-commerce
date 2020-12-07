@extends('layouts.master')

@section('title', 'Shoping-Cart')

@section('content')
    @if (Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($product as $item)
                <div class="col-sm-6 col-md-4 mt-5">
                    <div class="thumbnail mx-2 border p-2">
                        <img src="{{ asset($item->thumbnail) }}" alt="....">
                        <div class="caption">
                            <h3>{{ $item->title }}</h3>
                            <p class="description">{{ $item->description }}</p>
                            <div class="d-flex">
                                <div class="price align-items-center">${{ $item->price }}</div>
                                <a href="{{ route('addtocart', ['id' => $item->id]) }}" class="btn btn-success btn-default pull-right ml-auto" role="button">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
