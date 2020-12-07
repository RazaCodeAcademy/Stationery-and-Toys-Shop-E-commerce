@extends('layouts.user-master')
@section('title', 'Customer Chat')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <section class="bg-light px-4" style="height: 80vh; overflow-y: auto;">
                <div class="py-3">
                    @foreach ($messages as $message)
                        @if(Auth::Id() == $message->sender_id)
                            <h5 class="bg-info mb-3 ml-auto w-50 rounded py-2  text-center"><p>{{ Auth::user()->name }}</p><strong>{{ $message->created_at }}</strong><br><span>{{ $message->message }}</span></h5>
                        @else
                            <h5 class="bg-primary mr-auto w-50 rounded py-2  text-center"><p>{{ Auth::user()->name }}</p><strong>{{ $message->created_at }}</strong><br><span>{{ $message->message }}</span></h5>
                        @endif
                    @endforeach
                </div>
            </section>
            <section class="bg-success pt-4">
                <form action="{{ route('messanger.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 offset-2">
                            <input type="hidden" name="receiver_id" value="{{ $customer->id }}">
                            <div class="form-group">
                                <input id="my-input" class="form-control" type="text" name="message">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

@endsection
