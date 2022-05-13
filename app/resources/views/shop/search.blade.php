@extends('templates.with-banner')

@section('page-title')
    Search results for "{{ $search }}"
@endsection

@section('styles')
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
@endsection

@section('content')
    @if (count($articles) > 0)
        <div class="container-fluid py-5 m-0">
            <div class="row shop-section">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="fashion_section_2">
                                    <div class="row">
                                        @foreach ($articles as $article)
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="box_main">
                                                    <h4 class="shirt_text">{{ $article->name }}</h4>
                                                    <p class="price_text">{{ $article->price }} FCFA</span>
                                                    </p>
                                                    <div class="my-3"><img
                                                            src="{{ asset('storage/'.$article->image_url) }}">
                                                    </div>
                                                    <p>{{ $article->description }}</p>
                                                    <div class="mt-3">
                                                        <a href="#" class="btn btn-circ btn-cart" title="Add to cart"><i
                                                                class="fa-solid fa-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="p-5">No result found.</p>
    @endif

    {{-- <div class="row shop-section best-sellers">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h2 class="fashion_taital">Best sellers</h2>
                        <div class="fashion_section_2">
                            <div class="row">
                                @foreach ($category->articles as $article)
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="box_main">
                                            <h4 class="shirt_text">{{ $article->name }}</h4>
                                            <p class="price_text">{{ $article->price }} FCFA</span>
                                            </p>
                                            <div class="my-3"><img src="{{ asset($article->image_url) }}">
                                            </div>
                                            <p>{{ $article->description }}</p>
                                            <div class="mt-3">
                                                <a href="#" class="btn btn-circ btn-cart" title="Add to cart"><i
                                                        class="fa-solid fa-cart-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('scripts')
    <!-- Javascript files-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
@endsection

@section('sub-nav')
    <div class="sub-nav row py-3 d-flex align-items-center">
        <div class="col">
            <form action="/shop/search" method="POST">
                @csrf

                <div class="form-outline d-flex gap-3">
                    <input type="search" id="password" name="search" class="form-control" placeholder="Find a product">
                    <button type="submit" class="btn btn-secondary btn-round">Search</button>
                </div>
            </form>
        </div>

        <div class="col d-flex justify-content-end">
            <a href="">
                Cart
                <li class="fa-solid fa-cart-plus"></li>
            </a>
        </div>
    </div>
@endsection
