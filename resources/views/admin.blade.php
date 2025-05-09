<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    @if (session('Byakunze'))
        <p class="text-success">{{session('Byakunze')}}</p>
    @endif
    <h1 class="text-center">Welcome, {{Auth::user()->username}}</h1>
  <form action="{{Route('logout')}}" method="post" class="p-2">
    <div class="d-flex ">
    @csrf
    <button class="btn btn-danger" type="submit">Logout</button>
  </form>
  <a class="btn btn-success m-2" href="{{Route('user.register')}}">New User</a>
  </div>
    <table border="" class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
        </tr>
        @foreach ($data as $all )
            
        
        <tr>
            <td>{{$all->id}}</td>
            <td>{{$all->name}}</td>
            <td>{{$all->username}}</td>
            <td>{{$all->email}}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>