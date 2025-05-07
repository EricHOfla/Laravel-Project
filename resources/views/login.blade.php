<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
@error('username')
        <div class="text-danger ms-2">{{ $message }}</div>
    @enderror
   <div class="container">
    <h1 class="text-center">Login Page</h1>
    <div class="form">
        <form action="{{Route('logincheck')}}" method="post">
            @csrf
        <input type="text" class="form-control" name="username" placeholder="Enter your username"><br>
       
        <input type="password" class="form-control" name="password" placeholder="Enter your Password"><br>
        <button type="submit" class="btn btn-success">Login</button>
        <p class="text-center">if you don't have account <a href="{{url('register')}}">Register</a></p>
        </form>
    </div>
   </div>
</body>
</html>