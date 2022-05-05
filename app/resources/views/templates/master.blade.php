<!-- Master template file, put elements that display on every page here -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('styles')
        <title>Document</title>
    </head>
    
    <body>
        <header>
            <!-- Nav -->
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <!-- Footer -->
        </footer>
    </body>
</html>