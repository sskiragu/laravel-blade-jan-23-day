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
   @section('content')
   <h1>Signup Here</h1>

   <form action="/signup" method="post">
       @csrf
       <div>
           <input type="text" name="name" placeholder="Enter username">
       </div>

       <div>
           <input type="email" name="email" placeholder="Enter email">
       </div>

       <div>
           <input type="password" name="password" placeholder="Enter password">
       </div>

       <div>
           <input type="submit" name="signup" value="Signup">
       </div>

   </form>  
   @endsection
</body>
</html>