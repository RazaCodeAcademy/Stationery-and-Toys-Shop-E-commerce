@extends('layouts.admin-master')
@section('title', 'Customer Chat')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach ($customers as $customer)
            <a href="{{ route('messanger.show', $customer->id) }}" style="text-decoration: none;">
                <div class="py-3" style="border-bottom: 1px solid rgb(185, 185, 185);">
                    <h2>{{ $customer->name }}</h2>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
