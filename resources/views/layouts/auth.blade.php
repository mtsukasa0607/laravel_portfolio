<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->


        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>@yield('title')</title>
    </head>
    
    <body>
        <div class="container-fruid">
            <div class="bg-dark text-white px-5 py-2 clearfix">
                
                <nav class="navbar">
                    <h1><i class="fas fa-temperature-high"></i><a class="text-decoration-none text-white" href="/photo/photoShow"> Spa & Sauna</a></h1>
                    @yield('header')
                </nav>
                <div class=" float-right">
                    <nav class="navbar">
                        <ul class="list-inline">
                            @yield('nav')
                        
                            @if(Auth::check())
                                    <li class="list-inline-item"><a href="/hello/logout">Logout</a></li>
                                @else
                                    <li class="list-inline-item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    <li class="list-inline-item"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                
            </div>

            <div class="container-fruid px-5 mx-auto mt-5">
                <div class="mb-5 pb-5">
                    @yield('content')
                </div>
            </div>

            <div class="fixed-bottom bg-dark text-white">
                    @yield('footer')
                    <p class="mx-5 my-2">&copy; Copyright 2020 All Rights Reserved.</p>
            </div>

        </div>
    </body>
</html>