<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">


</head>
<body >
    <div id="app">
        <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
            <div class="container">
            
            <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="/">
                <img class="logo-default" src="img/logo.png" alt="logo">
                <img class="logo-inverse" src="img/logo-light.png" alt="logo">
            </a>
            </div>


            <div class="topbar-right">
            <ul class="topbar-nav nav">
                 @if(auth()->check())
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                @else
                <li class="nav-item"><a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
                @endif
            </ul>
            </div>

            </div>
         </nav>

         @yield('header')
        <main>
          @yield('content')
        </main>
        @if(!auth()->check())
        <vue-login></vue-login>
        @endif
        
        <!-- Footer -->
         <footer class="site-footer">
            <div class="container">
            <div class="row gap-y">
                <div class="col-12 col-md-6">
                <p class="text-center text-md-left">Copyright © 2019 <a class="text-dark" href=""> Joel Websites</a>. All rights reserved.</p>
                </div>

                <div class="col-12 col-md-6">
                <ul class="nav nav-inline nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Terms of use</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Privacy policy</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </footer>
    </div>    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/core.min.js')}}"></script>
    <script src="{{ asset('js/thesaas.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>

</body>
</html>
