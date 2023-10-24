<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <h1>Welcome to the dashboard <span><a href="/logout">Logout</a></span></h1>
    @role('Admin')
        <a href="{{route('users.index')}}">Manage Users</a>
    @endrole
    @role('Admin')
        <a href="">Manage Roles and Permissions</a>
    @endrole
    <a href="">Manage Posts</a>
    <a href="">Settings</a>

    @yield('content')
</body>
</html>