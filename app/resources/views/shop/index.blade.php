@extends('templates.with-banner')

@section('page-title', 'BDE Shop')

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
    <div class="container-fluid py-5 m-0">
        @foreach ($categories as $category)
            @if (count($category->articles) > 0)
                <div class="row shop-section">
                    <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <h2 class="fashion_taital">{{ $category->name }}</h2>
                                    <hr>
                                    <div class="fashion_section_2">
                                        <div class="row">
                                            @foreach ($category->articles as $article)
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="box_main">
                                                        <h4 class="shirt_text">{{ $article->name }}</h4>
                                                        <p class="price_text">{{ $article->price }} FCFA</span>
                                                        </p>
                                                        <div class="my-3"><img
                                                                src="{{ asset($article->image_url) }}">
                                                        </div>
                                                        <p>{{ $article->description }}</p>
                                                        <div class="mt-3">
                                                            <button href="#" id="{{ $article->id }}"" class="
                                                                btn btn-circ btn-cart" title="Add to cart"><i
                                                                    class="fa-solid fa-cart-plus"></i></button>
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
            @endif
        @endforeach

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
                                            <div class="box_main" id="{{ $article->id }}">
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

        <div class="cart-section d-none">
            <div class="overlay" id="overlay">
            </div>
    
            <section class="cart" id="cart">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12">
                            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-lg-8">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                                    <h6 class="mb-0 text-muted">3 items</h6>
                                                </div>
                                                <hr class="my-4">
    
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">Shirt</h6>
                                                        <h6 class="text-black mb-0">Cotton T-shirt</h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
    
                                                        <input id="form1" min="0" name="quantity" value="1" type="number"
                                                            class="form-control form-control-sm" />
    
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">€ 44.00</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
    
                                                <hr class="my-4">
    
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">Shirt</h6>
                                                        <h6 class="text-black mb-0">Cotton T-shirt</h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
    
                                                        <input id="form1" min="0" name="quantity" value="1" type="number"
                                                            class="form-control form-control-sm" />
    
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">€ 44.00</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
    
                                                <hr class="my-4">
    
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted">Shirt</h6>
                                                        <h6 class="text-black mb-0">Cotton T-shirt</h6>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
    
                                                        <input id="form1" min="0" name="quantity" value="1" type="number"
                                                            class="form-control form-control-sm" />
    
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">€ 44.00</h6>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
    
                                                <hr class="my-4">
    
                                                <div class="pt-5">
                                                    <h6 class="mb-0"><a href="#!" class="text-body"><i
                                                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 bg-grey">
                                            <div class="p-5">
                                                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                                <hr class="my-4">
    
                                                <div class="d-flex justify-content-between mb-4">
                                                    <h5 class="text-uppercase">items 3</h5>
                                                    <h5>€ 132.00</h5>
                                                </div>
    
                                                <hr class="my-4">
    
                                                <div class="d-flex justify-content-between mb-5">
                                                    <h5 class="text-uppercase">Total price</h5>
                                                    <h5>€ 137.00</h5>
                                                </div>
    
                                                <button type="button" class="btn btn-primary"
                                                    data-mdb-ripple-color="dark">Proceed to payement</button>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </div>
@endsection

@section('scripts')
    <!-- Javascript files-->
    <script src="{{ asset('js/order.js') }}"></script>
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
                    <input type="search" id="password" name="search" class="form-control"
                        placeholder="Find a particular event">
                    <button type="submit" class="btn btn-secondary btn-round">Search</button>
                </div>
            </form>
        </div>

        <div class="col d-flex justify-content-end">
            <button href="">
                Cart
                <li class="fa-solid fa-cart-plus"></li>
            </button>
        </div>
    </div>
@endsection
