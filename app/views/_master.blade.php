<!DOCTYPE html>
<html>
<head>

    <title>Developer's Best Friend</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='{{ asset('css/master.css') }}'>

    @yield('head')

</head>
<body>

    <p>....master view online</p>

    @yield('content')

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

    @yield('footer')

</body>
</html>