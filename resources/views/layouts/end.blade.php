<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>App Name - @yield('title')</title>
</head>
<style>
    body {
        background-color: lightblue;
    }
</style>

<body>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
