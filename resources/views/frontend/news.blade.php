@extends('layout.app')

@section('content')
    <div class="site-wrap">
        <div class="site-blocks-cover inner-page" style="background-image: url({{ asset('frontend/images/hero_bg_1.jpg') }});"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <span class="sub-text">Read Our News</span>
                        <h1>Our <strong>News</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">


                    @foreach ($posts as $post)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="post-entry bg-white">
                                <div class="image">
                                    <img src="{{ $post->image }}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text p-4">
                                    <h2 class="h5 text-black"><a href="#">{{$post->full_name}}</a></h2>
                                    <span class="text-uppercase date d-block mb-3"><small>{{$post->auther}}</small></span>
                                    <p class="mb-0">{{$post->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
