<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>

        <h1>@yield('title')</h1>
            <h2>※メニュー</h2>
            <ul>
                <li>test</li>
                <li>test</li>
                <li>test</li>
            </ul>
        <hr>
        <div>
            @yield('content')
        </div>
        <div>
            @yield('footer')
        </div>

    </body>
</html>