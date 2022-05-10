<!-- Master template file, put elements that display on every page here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
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
                        <a href="/" class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="CESI Logo" style="width:100px;">
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav align-items-center">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>

                            @if (Auth::user())
                                <li class="d-md-flex gap-2 align-items-center">
                                    <a href="#">{{ Auth::user()->firstname }}</a>
                                    <img src="{{ asset('storage/avatars/' . Auth::user()->avatar_url) }}"
                                        class="d-none d-md-block" style="border-radius: 100%; max-width: 50px;">
                                </li>

                                <li><a href="/logout">Logout</a></li>
                            @else
                                <div class="cta d-flex gap-3">
                                    <a href="/login" class="btn btn-tertiary">Log In</a>
                                    <a href="/register" class="btn btn-primary">Sign Up</a>
                                </div>
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

    <footer id="dk-footer" class="dk-footer">
    </footer>

    <script src="{{ asset('js/isotope.min.js') }}"></script>
    @yield('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
