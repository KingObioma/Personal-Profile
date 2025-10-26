<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="King Obioma — Web Developer building conversion-driven websites for businesses that want growth, not just aesthetics.">
    <meta name="keywords" content="Web developer, Laravel, portfolio, frontend, backend, full stack, Nigeria, King Obioma, business websites">
    <meta name="author" content="King Obioma">
    <meta property="og:title" content="King Obioma | Business Web Developer">
    <meta property="og:description" content="I build  designed to bring in customers—by making businesses discoverable, trustworthy, and easy to buy from.">
    <meta property="og:image" content="{{ asset('images/portfolio-preview.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <!--Favicons-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <!--Page Title-->
    <title>@yield('title', 'King Obioma | Business Web Developer')</title>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Awesome Fonts-->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <!--Main Styles Css-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
        </div>
    </div>
    <!-- Εnd Preloader -->
    @include('body.topbar')
    <div id="page">
    <!-- header -->
    @include('body.header')
    <!-- End Header -->

    <!-- Main content section -->
    @yield('pages')

    <!-- Footer -->
    @include('body.footer')
    <!-- End Footer -->
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Counters -->
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <!-- isotope js -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <!-- isotope image loader js -->
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Typed -->
    <script src="{{asset('js/typed.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
