<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap5.css') }}" >
        <title>Nome sito | @yield('title', 'Home')</title>
    </head>
    <body>
    <div class="container-fluid container-lg my-3 mb-0 pb-3 border-bottom border-2 border-black">
        <div class="row align-items-center justify-content-center">
            <div class="col d-none d-lg-block">
            </div>
            <div class="col-12 col-lg-6 text-center">
                <h1>TITOLO SITO E LOGO</h1>
            </div>
            <div class="col d-none d-lg-block "> </div>
        </div>
    </div>

    <div>
        @include('layouts/_navpublic')
    </div>

    <div>
        @yield('content')
    </div>

    </body>
</html>