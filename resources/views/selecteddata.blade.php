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
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>
        @foreach ($datas as $data )
            
        
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->contact}}</td>
            <td>{{$data->subject}}</td>
            <td>{{$data->message}}</td>
            <td>{{$data->created_at}}</td>
        </tr>
        @endforeach
    </table>

   </div>
</body>
</html>