<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    welcome admin
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
        </tr>
        @foreach ($data as $all)
            
      
        <tr>
          <td>{{$all->id}}</td>
          <td>{{$all->name}}</td>
          <td>{{$all->email}}</td>
          <td>{{$all->username}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>