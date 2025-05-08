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
        <h1 class="text-center m-2"> All data From database</h1>
        <table class="table">

        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        @foreach ($image as $data)
            
      
        <tbody>
            <tr>
                <td>{{$data->product}}</td>
                <td>{{$data->price}}</td>
                <td><img src="{{asset('picture/' . $data->image)}}" alt="" width="140px" height="90px"></td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
</body>
</html>