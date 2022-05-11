@extends('templates.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
@endsection

@section('sub-header')
    <!-- Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">
                        <p>This is Ucac-Icam BDE website.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('images/course-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h1>Welcome to Our BDE Website</h1>
                            <p>
                                This is a BDE Website provided by <a rel="nofollow"
                                    href="https://trello.com/b/RgoXLC0u/bde-website" target="_blank">Members of Group 7
                                </a>. This is a one of the best layout. The video background is taken from Pexels website, a
                                group of young Ucac-Icam Students by <a rel="nofollow" href=""
                                    target="_blank">Pressmaster</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->



    <section class="upcoming-meetings" id="meetings">
        <div class="container-fluid px-5">
            <div class="row gy-5 gx-4">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/goodies.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">BDE Shop</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="/shop" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/events.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Events</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="/events" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/card-5.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Programs</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/card-4.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Clubs</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/card-3.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Sports</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/card-4.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Restaurant</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/card-3.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Sports</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/cards/card-4.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h3 class="card-title">Restaurant</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline btn-round mt-4">See</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us" style="margin-bottom: 20rem">
        <div class="container-fluid px-0">
            <div class="row g-0 mb-5">
                <div class="col d-flex justify-content-center">
                    <h2>About us</h2>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/summary.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-6 p-5" style="background: var(--clr-neutral-200);">
                    <h3 class="mb-5">BDE in one word</h3>

                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto officiis mollitia
                        similique optio earum, aspernatur,
                        cum corporis ratione ab commodi sunt consectetur autem ad perferendis iure in.
                        Nisi, nulla quam.
                    </p>

                    <a href="/events" class="btn btn-secondary mt-5">More</a>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-12 col-md-6 p-5" style="background: var(--clr-accent-200);">
                    <h3 class="mb-5">Activities</h3>

                    <p style="color: var(--clr-neutral-100);">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto officiis mollitia
                        similique optio earum, aspernatur,
                        cum corporis ratione ab commodi sunt consectetur autem ad perferendis iure in.
                        Nisi, nulla quam.
                    </p>

                    <a href="#" class="btn btn-tertiary mt-5">More</a>
                </div>

                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/apply-bg.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row mb-5">
                <div class="col d-flex justify-content-center">
                    <h2>Testimonials</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel ">
                        <div class="item">
                            <img src="assets/images/10995663_451009775064613_7787047431254719276_n.jpg" alt=""
                                class="wdn-strech rounded-corners">
                            <div class="down-content">
                                <h4>Darryl</h4>
                                <p>"The product is so cool and creates so much value"</p>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets/images/image-fausse-generee-par-ia-1024x1024.jpeg" alt=""
                                class="wdn-strech rounded-corners">
                            <div class="down-content">
                                <h4>Paul-Henry</h4>
                                <p>"The product is so cool and creates so much value"</p>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <i class="fa fa-star"></i>
                                            </ul>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets/images/fake-profile-pictures-TPDNE-300x300.webp" alt=""
                                class="wdn-strech rounded-corners">
                            <div class="down-content">
                                <h4>Sonia</h4>
                                <p>"The product is so cool and creates so much value"</p>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets/images/fake-profile-pictures-TPDNE-300x300.webp" alt=""
                                class="wdn-strech rounded-corners">
                            <div class="down-content">
                                <h4>Faris</h4>
                                <p>"The product is so cool and creates so much value"</p>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="container">
            <!-- section title -->
            <div class="row mb-5">
                <div class="col d-flex flex-wrap justify-content-center">
                    <h2>Gallery</h2>
                </div>
            </div>
            <!-- end of section title -->
            <div class="row">
                <div class="col-sm-6 mb-5 mb-sm-0">
                    <div class="gallery-item">
                        <img src="{{ asset('images/clubs.jpg') }}" alt="car" class="img-fluid gallery-img">
                    </div>
                </div>
                <!-- end of first column -->
                <div class="col-sm-6 d-flex flex-column justify-content-between">
                    <div class="row">
                        <!-- first item -->
                        <div class="col-sm-6 mb-5 mb-sm-0">
                            <div class="gallery-item">
                                <img src="{{ asset('images/cards/card-1.png') }}" alt="car"
                                    class="img-fluid gallery-img">
                            </div>
                        </div>
                        <!-- second item -->
                        <div class="col-sm-6 mb-5 mb-sm-0">
                            <div class="gallery-item">
                                <img src="{{ asset('images/cards/card-5.png') }}" alt="car"
                                    class="img-fluid gallery-img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- first item -->
                        <div class="col-sm-6 mb-5 mb-sm-0">
                            <div class="gallery-item">
                                <img src="{{ asset('images/summary.jpg') }}" alt="car" class="img-fluid gallery-img">
                            </div>
                        </div>
                        <!-- second item -->
                        <div class="col-sm-6 mb-5 mb-sm-0">
                            <div class="gallery-item">
                                <img src="{{ asset('images/sports.jpg') }}" alt="car" class="img-fluid gallery-img">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of second column -->
            </div>
            <!-- end of row -->
        </div>
    </section>

    <div class="fixed-bottom p-4">
    <div class="toast bg-dark text-white w-100 mw-100" role="alert" data-autohide="false">
        <div class="toast-body p-4 d-flex flex-column">
            <h4>Cookie Warning</h4>
            <p>
            This website stores data such as cookies to enable site functionality including analytics and personalization. By using this website, you automatically accept that we use cookies. 
            </p>
            <div class="ml-auto">
                <button type="button" class="btn btn-outline-light mr-3" id="btnDeny">
                    Deny
                </button>
                <button type="button" class="btn btn-light" id="btnAccept">
                    Accept
                </button>
            </div>
        </div>
    </div>
</div>

<!-- page content -->
<div class="container py-4">
    <h1 class="font-weight-light"> Page Content Here.... </h1>
    <p>This is an example of using the Bootstrap 4 Toast component as a cookie warning pop-up.</p>
    <button type="button" class="btn btn-outline-light mr-3" id="btnReset">
        Reset Demo
    </button>
</div>

@endsection

@section('scripts')
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->

    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/video.js') }}"></script>
    <script src="{{ asset('js/slick-slider.js') }}"></script>
    <script src="{{ asset('js/cookies.js') }}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
@endsection
