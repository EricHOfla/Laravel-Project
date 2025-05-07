<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <p class="text-center">Register Page</p>
        <form action="{{Route('register.post')}}" method="post">
            @csrf
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Name">
            <input type="text" name="username" id="" class="form-control" placeholder="Enter Username">
            <input type="email" name="email" id="" class="form-control" placeholder="Enter Email">
            <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
            <input type="submit"  class="form-control btn btn-success" value="Register">
        </form>
        <p class="text-center">If you have account <a href="{{url('/')}}">Login</a></p>
    </div>
    
</body>
</html>