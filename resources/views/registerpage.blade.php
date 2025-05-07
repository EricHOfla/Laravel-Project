<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    @if (session('success'))
    <div class="bg-success">
        {{ session('success') }}
    </div>
        
    @endif
    <div class="container">
        <h1 class="text-center">Register Form</h1>
        <form action="{{Route('register.store')}}" method="post">
            @csrf
            <input type="text" class="form-control" name="name" placeholder="Enter your full name">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="text" class="form-control" name="username" placeholder="Enter your username">
            @error('username')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
           @error('email')
               <div class="text-danger">{{$message}}</div>
           @enderror
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
            @error('password')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <button class="btn btn-success" type="submit">Register</button>
        </form>
        <p class="text-center">If you have account <a href="{{Route('loginpage')}}">Login</a></p>
    </div>
</body>
</html>