{{--@dd($title);--}}

@extends('layouts.lay')
@section('contain')

<div class="container-fluid ">
    <div class="row my-2">
        <div class="col">
            <h2 >Latest Posts</h2>
        </div>
        <div class="col-3">
            <form method="GET" action="{{route('post.index')}}">
                <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-light btn-primary " type="submit" id="button-search">
                    <i class="bi bi-search"></i> <!-- Bootstrap Icons -->
                </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row m-3">
      @if ($posts)
         @foreach($posts as $post)
          <div class="col-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                               {{-- --Get Postdata from Database-- --}}
                            <img src="{{$post->img_url}}" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
{{--                                       => foreach--}}
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{Str::limit($post->content,70)}}</p>
{{--                            <h5 class="card-title">post title</h5>--}}
{{--                            <p class="card-text">Some quick example text for the post's content.</p>--}}
                            <div class="d-flex justify-content-between">
{{--                                <a href="./detail.html">Read More</a>--}}
{{--                                            -dynamic url---}}
                                {{-- <a href="{{route('post.detail',['id'=>$post->id])}}">Read More</a> --}}
                                                    {{-- --generating slug for post-- --}}
                                 <a href="{{route('post.detail',['slug'=>$post->slug])}}">Read More</a>
                                {{-- <a class="text-decoration-none text-dark fw-bold" href="#">Sports</a> --}}
                                 <a class="text-decoration-none text-dark fw-bold" href="#">{{$post->category->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
         @endforeach
        @else
            <h3>This Post is Not available</h3>
        @endif
{{--        <div class="col-4 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="https://via.placeholder.com/300" class="img-fluid" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <h5 class="card-title">Post title</h5>--}}
{{--                            <p class="card-text">Some quick example text for the post's content.</p>--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <a href="./detail.html">Read More</a>--}}
{{--                                <a class="text-decoration-none text-dark fw-bold" href="#">Development</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-4 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="https://via.placeholder.com/300" class="img-fluid" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <h5 class="card-title">Post title</h5>--}}
{{--                            <p class="card-text">Some quick example text for the post's content.</p>--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <a href="./detail.html">Read More</a>--}}
{{--                                <a class="text-decoration-none text-dark fw-bold" href="#">Engineering</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-4 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="https://via.placeholder.com/300" class="img-fluid" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <h5 class="card-title">Post title</h5>--}}
{{--                            <p class="card-text">Some quick example text for the post's content.</p>--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <a href="./detail.html">Read More</a>--}}
{{--                                <a class="text-decoration-none text-dark fw-bold" href="#">Kids</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-4 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="https://via.placeholder.com/300" class="img-fluid" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <h5 class="card-title">Post title</h5>--}}
{{--                            <p class="card-text">Some quick example text for the post's content.</p>--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <a href="./detail.html">Read More</a>--}}
{{--                                <a class="text-decoration-none text-dark fw-bold" href="#">Design</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-4 mb-4">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="https://via.placeholder.com/300" class="img-fluid" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <h5 class="card-title">Post title</h5>--}}
{{--                            <p class="card-text">Some quick example text for the post's content.</p>--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <a href="./detail.html">Read More</a>--}}
{{--                                <a class="text-decoration-none text-dark fw-bold" href="#">Movies</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="col-12 my-3">
            <nav aria-label="Page navigation">
                {{-- pagiantion links --}}
                {{$posts->links('pagination::bootstrap-5')}}
            </nav>

        </div>
    </div>
    <div class="row">

    </div>

</div>
@endsection
