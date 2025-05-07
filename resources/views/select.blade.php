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

    <div>
        {{ session('success') }}
    </div>
        
    @endif
<div class="container">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Created Time</th>
            <th>Action</th>
            
        </tr>
        @foreach ($data as $all )
            
        
        <tr>
            <td>{{$all->id}}</td>
            <td>{{$all->name}}</td>
            <td>{{$all->email}}</td>
            <td>{{$all->contact}}</td>
            <td>{{$all->subject}}</td>
            <td>{{$all->message}}</td>
            <td>{{$all->created_at}}</td>
            <td class="d-flex"> 
                <a class="m-1" href="{{Route('data.edit', $all->id)}}">Update</a>
               <form action="{{Route('delete',$all->id)}}" method="post" class="m-1">
                @csrf
                <button class="p-2" type="submit">Delete</button>
               </form>
            </td>
            
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>