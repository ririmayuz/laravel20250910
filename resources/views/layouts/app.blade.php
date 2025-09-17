<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
            (👉ﾟヮﾟ)👉
        @show

        <div class="container">
            @yield('content')
            oh wow👈(ﾟヮﾟ👈)
        </div>
    </body>
</html>