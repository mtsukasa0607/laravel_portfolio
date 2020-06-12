<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <div>
            @yield('header')
             
            @if(Auth::check())
                <a href="/hello/logout">logout</a>
            @else
                <a href="{{ route('login') }}">{{ __('Login') }}</a><br>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            <h1>@yield('title')</h1>
            <hr>
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            <hr>
            @yield('footer')
            <p>&copy;Copyright 2020 All Rights Reserved.</p>
        </div>
    </body>
</html>