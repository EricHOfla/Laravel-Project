<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    @error('email')
        <div class="text-danger">{{$message}}</div>
    @enderror
    <div class="container">
        <h1 class="text-center">Login Page</h1>
        <form action="{{Route('login.post')}}" method="post">
          @csrf
          
            <input type="email" name="email" id="" class="form-control" placeholder="Enter Email">
            <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
            <input type="submit"  class="form-control btn btn-success" value="Login">
        </form>
        <p class="text-center">If you Don't have account <a href="{{url('register')}}">Register</a></p>
    </div>
    
</body>
</html>