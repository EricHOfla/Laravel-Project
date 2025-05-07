<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    
    
    
<h1 class="text-center mt-3 p-3">Contact Us</h1>

<form action="{{Route('update.data', $data->id)}}" method="post" class="mt-3">
@csrf
@method('PUT')
<input class="form-control m-2" type="text" name="name" value="{{$data->name}}">
@error('name')
    <div class="text-danger ms-2">{{ $message }}</div>
@enderror

<input class="form-control m-2" type="text" name="email" value="{{$data->email}}">
@error('email')
    <div class="text-danger ms-2">{{ $message }}</div>
@enderror

<input class="form-control m-2" type="text" name="contact" value="{{$data->contact}}">
@error('contact')
    <div class="text-danger ms-2">{{ $message }}</div>
@enderror

<input class="form-control m-2" type="text" name="subject" value="{{$data->subject}}">
@error('subject')
    <div class="text-danger ms-2">{{ $message }}</div>
@enderror

<textarea class="form-control m-2" name="message" cols="15" rows="5" >{{$data->message}}</textarea>
@error('message')
    <div class="text-danger ms-2">{{ $message }}</div>
@enderror

<input type="submit" value="Update" class="btn btn-success m-1">
</form>

</body>
</html>