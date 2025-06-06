<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body >
<header class="p-3 bg-dark text-white">
    <div class="row">
        <div class="col">
            <a class="text-decoration-none text-light" href="{{url('/')}}"><h3>{{$title ?? 'Blog'}}</h3></a>
        </div>
        <div class="col">
            <div class="d-flex justify-content-center gap-3">
                <a class="text-light text-decoration-none" href="{{route('post.index')}}">Home</a>
                <a class="text-light text-decoration-none" href="">About</a>
                <a class="text-light text-decoration-none" href="{{route('contact.show')}}">Contact</a>
            </div>
        </div>
    </div>
</header>
@yield('contain')
<footer class="bg-dark text-light p-3">
    <div class="col-4 d-flex justify-content-center align-items-center">
        <span class="text-light">Azotos Company, Inc</span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
