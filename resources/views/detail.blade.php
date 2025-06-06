
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Document</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--}}
   <link rel="stylesheet" href="./style.css">
{{--</head>--}}
{{--<body >--}}
{{--<header class="p-3 bg-dark text-white">--}}
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <a class="text-decoration-none text-light" href="./index.html"><h3>Blog</h3></a>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="d-flex justify-content-center gap-3">--}}
{{--                <a class="text-light text-decoration-none" href="">Home</a>--}}
{{--                <a class="text-light text-decoration-none" href="">About</a>--}}
{{--                <a class="text-light text-decoration-none" href="">Contact</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
{{--@dd($post)--}}

@extends('layouts.lay')
@section('contain')
<div class="container-fluid ">

    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-4">{{$post->title}} <span class="fs-6">({{$post->category->name}})</span> </h1>
            <p class="text-muted">Posted on {{$post->created_at->format('M d,Y')}}</p>
            <img src="{{$post->img_url}}" class="img-fluid mb-4" alt="Blog Image">
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tortor vel magna tincidunt tempus. Maecenas eget maximus eros. Vivamus id nisl lacus. Donec et risus turpis. In nec efficitur purus, ac faucibus nulla. Aenean nec malesuada velit. Quisque ac mauris ac turpis semper interdum.</p>--}}
{{--            <p>Sed et lorem et lacus consequat suscipit. Vestibulum dapibus sapien et eros aliquam, a dictum leo vehicula. Aliquam consequat turpis vitae lectus tristique, quis efficitur orci fermentum. Phasellus a ligula pulvinar, blandit eros at, euismod nisl. Nam pharetra urna id purus volutpat, a feugiat magna convallis. Curabitur vestibulum velit sit amet nisl sollicitudin, eget rutrum enim fermentum.</p>--}}
            <p>{{$post->content}}</p>
        </div>
        <div class="col-lg-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Related Posts</h5>
                    <ul class="list-unstyled">
                        @foreach ($related_posts as $post)
                            <li><a href="{{route('post.detail',['slug'=>$post->slug])}}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--<footer class="bg-dark text-light p-3 fixed-bottom">--}}
{{--    <div class="col-4 d-flex justify-content-center align-items-center">--}}
{{--        <span class="text-light">© Azotos Company, Inc</span>--}}
{{--    </div>--}}
{{--</footer>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
