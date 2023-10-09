<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   @extends('layouts.default')
   @section('msg')
       @if (session('msg'))
           <div class="">
                <h1>{{session('msg')}}</h1>
           </div>
       @endif
   @endsection
    @section('content')
    <h1>Login Here</h1>
    <form action="{{route('user.login')}}" method="post">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Enter email">
        </div>
 
        <div>
            <input type="password" name="password" placeholder="Enter password">
        </div>
 
        <div>
            <input type="submit" name="login" value="Login">
        </div>
 
    </form> 
    @endsection
</body>
</html>