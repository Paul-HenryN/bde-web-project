@extends('templates.with-banner')

@section('page-title', 'BDE Shop')

@section('styles')
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
@endsection

@section('content')
    <!-- fashion section start -->
    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Man & Woman Dresses</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man T -shirt</h4>
                                        <p class="price_text">Price <span style="color: #262626;"> 3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man -shirt</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Woman Scart</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Man & Woman Dresses</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man T -shirt</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man -shirt</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Woman Scart</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Man & Woman Dresses</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man T -shirt</h4>
                                        <p class="price_text">Price <span style="color: #262626;"> 3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Man -shirt</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Woman Scart</h4>
                                        <p class="price_text">Price <span style="color: #262626;">3000 FCFA</span></p>
                                        <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Javascript files-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
@endsection
