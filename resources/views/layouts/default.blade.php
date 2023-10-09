<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .top-nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    {{-- Navigation --}}
    <div class="top-nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contacts">Contacts</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/signup">Signup</a></li>
        </ul>
    </div>

    {{-- Main content --}}
    @yield('msg')
    @yield('content')
    @yield('sidebar')

    {{-- Footer --}}
    <div>My Footer</div>
</body>
</html>