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
        <p class="text-center">Register User</p>
        <form action="{{ Route('user.store') }}" method="post">
            @csrf
            <input type="text" name="name" id="" class="form-control" placeholder="Enter Name">
            <input type="text" name="username" id="" class="form-control" placeholder="Enter Username">
            <input type="email" name="email" id="" class="form-control" placeholder="Enter Email">
            <select name="role" class="form-control">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
                <option value="user">User</option>
            </select>
            <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
            <input type="submit"  class="form-control btn btn-success" value="Register">
        </form>
      
    </div>
    
</body>
</html>