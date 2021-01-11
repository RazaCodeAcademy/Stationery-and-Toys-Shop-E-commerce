@extends('layouts.user-master')
@section('title', 'user Chat')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach ($admins as $admin)
                <div style="border: 2px solid rgb(185, 185, 185);" class="mt-2">
                    <a href="{{ route('user.messanger.show', $admin->id) }}" style="text-decoration: none;">
                        <div class="d-flex">
                            <div class="align-middle">
                                <img src="{{ asset('/images/my-image.jpeg') }}" alt="" class="rounded-circle mt-2 ml-2" width="70" height="70">
                            </div>
                            <div class="py-1 ml-4 ">
                                <h2>{{ $admin->name }}</h2>
                                <p>{{ $admin->messages[0]->message ?? ''}} <span class="ml-5">{{ $admin->messages[0]->created_at ?? '' }}</span></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
