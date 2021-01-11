@extends('layouts.admin-master')
@section('title', 'Customer Chat')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($customers)
                @foreach ($customers as $customer)
                    <div style="border: 2px solid rgb(185, 185, 185);" class="mt-2">
                        <a href="{{ route('messanger.show', $customer->sender->id) }}" style="text-decoration: none;">
                            <div class="d-flex">
                                <div class="align-middle">
                                    <img src="{{ asset('/images/my-image.jpeg') }}" alt="" class="rounded-circle mt-2 ml-2" width="70" height="70">
                                </div>
                                <div class="py-1 ml-4 ">
                                    <h2>{{ $customer->sender->name }}</h2>
                                    <p>{{ $customer->message }} <span class="ml-5">{{ $customer->created_at }}</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                {{ 'There is no further chat!' }}
            @endif
        </div>
    </div>
</div>

@endsection
