<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Tags for SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keywords" content="{{setting('site.keywords')}}">
    <meta name="author" content="{{setting('site.author')}}">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="HR HUB CABINET RH">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:url" content="{{ setting('site.url website') }}">
    <meta property="og:type" content="website">

    <!-- Meta Tags for LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:hr hub" content="HR HUB">

    <!-- Meta Tags for Instagram -->
    <meta property="og:type" content="instagram">
    <meta property="og:hr hub" content="HR HUB">
    <title>HR HUB CABINET RH</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- End Link Css -->
    </head>

    <body>
    <!-- preloader -->
    <div class="preloader">
    <div class="d-table">
    <div class="d-table-cell">
    <div class="spinner"></div>
    </div>
    </div>
    </div>
    <!-- end preloader -->

    @include('Parcial.navbar')
    @yield('content')
    @include('Parcial.footer')

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/0663347159" class="whatsapp-icon" target="_blank">
    <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- End Java Script -->
    </body>
    </html>
