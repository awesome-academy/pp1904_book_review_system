<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/koparion-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 23:31:05 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- flexslider.css-->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
        <!-- chosen.min.css-->
        <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/star-rating.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
    </head>
    <body>
        <!-- header-area-start -->
        @include('layouts.header')
        <!-- header-area-end -->
        @yield('content')
        <!-- footer-area-start -->
        @include('layouts.footer')
        <!-- footer-area-end -->
        <!-- all js here -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- jquery.parallax-1.1.3.js -->
        <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <!-- jquery.countdown.min.js -->
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <!-- jquery.flexslider.js -->
        <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <!-- chosen.jquery.min.js -->
        <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
        <!-- jquery.counterup.min.js -->
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <!-- waypoints.min.js -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/star-rating.min.js') }}"></script>
        <script src="{{ asset('js/simplemde.min.js') }}"></script>
        <script src="{{ asset('js/marked.min.js') }}"></script>
        @yield('script')
    </body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/koparion-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 23:31:33 GMT -->
</html>
