<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/css/all.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/user-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
        <title>@yield('title')</title>
    </head>
    <body id="body-pd">
        @include('common.admin-sidebar')
        @include('common.admin-user-header')
        @yield('content')
        {{-- @include('common.footer') --}}
    </body>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</html>
