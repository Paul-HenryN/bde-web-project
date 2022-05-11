<!-- Master template file, put elements that display on every page here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&family=Fjalla+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('styles')

    <title>BDE</title>
</head>

<body>
    @yield('sub-header')
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        {{-- <a href="/" class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="CESI Logo" style="width:100px;">
                        </a> --}}
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>

                            @if (Auth::user())
                                <li class="d-md-flex gap-2 align-items-center">
                                    <a href="#">{{ Auth::user()->firstname }}</a>
                                    <img src="{{ asset('storage/avatars/' . Auth::user()->avatar_url) }}"
                                        class="d-none d-md-block" style="border-radius: 100%; max-width: 50px;">
                                </li>

                                <li><a href="/logout">Logout</a></li>
                            @else
                                <li><a href="/login" class="btn btn-tertiary">Log In</a></li>
                                <li><a href="/register" class="btn btn-primary">Sign Up</a></li>
                            @endif
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container-fluid">
            <div class="row social py-3">
                <div class="col">
                    <ul class="d-flex gap-3 justify-content-end"">
                        <li><a href=" #"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row content p-5">
                <div class="row gx-5">
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <h4>Newsletter</h4>
                        <hr>
                        <p class="mb-4">
                            Subscribe to our newsletter to receive hot news about BDE activities and events
                        </p>
                        <form class="form">
                            <div class="form-outline d-flex gap-2">
                                <button type="submit" class="btn btn-secondary btn-round">Subscribe</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <h4>Contact</h4>
                        <hr>
                        <ul class="d-flex flex-column gap-2">
                            <li class="d-flex gap-3 align-items-center">
                                <i class="fa-solid fa-phone"></i>
                                +237 6 83 50 13 89
                            </li>

                            <li class="d-flex gap-3 align-items-center">
                                <i class="fa-solid fa-envelope"></i>
                                BdeDouala@gmail.com
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <h4>Help & FAQs</h4>
                        <hr>
                        <ul class="d-flex flex-column gap-3">
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">Ordering</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row foot">
                    <div class="col-12 col-md-6">
                        <ul class="d-flex gap-2">
                            <li><a href="/">Home</a></li>
                            |
                            <li><a href="/">About</a></li>
                            |
                            <li><a href="/">Shop</a></li>
                            |
                            <li><a href="/">Contact</a></li>
                            |
                            <li><a href="/">Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 d-none d-md-flex justify-content-end">
                        <p>
                            &copy; Copyright 2022 <span>Groupe 7</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/isotope.min.js') }}"></script>
    @yield('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>

</html>
