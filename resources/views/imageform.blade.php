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
        @if (session('Byakunze'))
            <div class="text-success">{{session('Byakunze')}}</div>
        @endif
        <h1 class="text-center">Image Upload</h1>
        <form action="{{Route('image.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="product" class="form-control" placeholder="Enter Product name">
            @error('product')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
            @error('price')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="file" name="image" class="form-control">
            @error('image')
                <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="submit"  class="form-control btn btn-success" value="Upload">
        </form>
    </div>
</body>
</html>