<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <div>
            @yield('header')
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