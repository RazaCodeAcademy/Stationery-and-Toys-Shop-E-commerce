@extends('layouts.admin-master')
@section('title', 'Customer Chat')

@section('content')

<div class="container-fluid">
    <section class="bg-info py-3">
        <h3 class="ml-4 text-white">
            {{ $customer->name }}
        </h3>
    </section>
    <div class="row">
        <div class="col-md-12">
            <section class="myChat" style="height: 70vh; overflow-y: auto; background-image: url(/images/chat_background.png); background-repeat:no-repeat; background-size:cover;">
                <div class="">
                    @foreach ($messages as $message)
                        @if(Auth::Id() == $message->sender_id)
                            <div class="col-md-6 col-sm-11 ml-auto">
                                <p class="text m-0"><strong>{{ Auth::user()->name }}</strong></p>
                                <div class="theme-color-bg mb-3 rounded p-2 text-white" style="position: relative;">
                                    <span style="word-wrap: break-word">{{ $message->message }}</span>
                                    <span style="position: absolute; right:0; margin-right:5px;">{{ $message->created_at->toTimeString() }}</span>
                                </div>
                            </div>
                        @else
                            <div class="col-md-6 col-sm-11">
                                <p class="m-0 text-right"><strong>{{  $customer->name }}</strong></p>
                                <div class="bg-light mb-3 rounded p-2" style="position: relative">
                                    <span>{{ $message->message }}</span>
                                    <span style="position: absolute; right:0; margin-right:5px;">{{ $message->created_at->toTimeString() }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>
            <section class="theme-color-bg pt-4">
                <form action="{{ route('messanger.store') }}" method="post">
                    @csrf
                    <div class="row no-gutters">
                        <div class="col-md-6 col-sm-10 col-10 offset-md-3">
                            <input type="hidden" name="receiver_id" value="{{ $customer->id }}">
                            <div class="form-group">
                                <input id="my-input" class="form-control ml-1" type="text" name="message" placeholder="Type message..." style="border-radius: 50px">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-light rounded-circle ml-3"><i class="fa fa-paper-plane" style="font-size: 17px" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

@endsection
