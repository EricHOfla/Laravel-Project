<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{'css/style.css'}}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    
    <div class="link container">
 <p>
    @if (session('success'))
    <div class="text-center">
        {{ session('success') }}
    </div>
        
    @endif
 </p>

    <div class="text-center mt-3 p-3">
    <a class="btn btn-primary" href="{{url('/')}}">Home</a>
        <a class="btn btn-secondary" href="{{url('about')}}">About</a>      
        <a class="btn btn-danger" href="{{url('login')}}">Login</a>
      
    </div>
     
    <h1 class="text-center mt-3 p-3">Contact Us</h1>

    <form action="{{ url('/') }}" method="post" class="mt-3">
    @csrf

    <input class="form-control m-2" type="text" name="name" placeholder="Enter your Name">
    @error('name')
        <div class="text-danger ms-2">{{ $message }}</div>
    @enderror

    <input class="form-control m-2" type="text" name="email" placeholder="Enter your Email">
    @error('email')
        <div class="text-danger ms-2">{{ $message }}</div>
    @enderror

    <input class="form-control m-2" type="text" name="contact" placeholder="Enter your Contact">
    @error('contact')
        <div class="text-danger ms-2">{{ $message }}</div>
    @enderror

    <input class="form-control m-2" type="text" name="subject" placeholder="Enter your Subject">
    @error('subject')
        <div class="text-danger ms-2">{{ $message }}</div>
    @enderror

    <textarea class="form-control m-2" name="message" cols="15" rows="5" placeholder="Enter Message"></textarea>
    @error('message')
        <div class="text-danger ms-2">{{ $message }}</div>
    @enderror

    <input type="submit" value="Send" class="btn btn-success m-1">
</form>

     
     
     </div>
</body>
</html>