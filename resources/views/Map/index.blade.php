@extends('layouts.master')
@section('title', 'Google Map')

@section('content')
    {{-- <h1 class="text-center text-uppercase theme-color-bg text-white my-2 py-5">Google Map View</h1> --}}
    <div style="width: 100%; height: 500px;">
        {!! Mapper::render() !!}
    </div>
@endsection

