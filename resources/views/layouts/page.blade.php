<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>AllStore - MultiConcept eCommerce Template</title>
    <link rel="stylesheet" href="{{ asset('home/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/ion.rangeSlider.skinFlat.css')}}">
    <link rel="stylesheet" href="{{ asset('home/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/custom.css') }}">
</head>
<body>
<!-- Header - start -->
@include('layouts.header')
<!-- Header - end -->


<!-- Main Content - start -->
@yield('content')
<!-- Main Content - end -->


<!-- Footer - start -->
@include('layouts.footer')
<!-- Footer - end -->


<!-- jQuery plugins/scripts - start -->
<script src="{{ asset('home/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('home/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('home/js/fancybox/fancybox.js') }}"></script>
<script src="{{ asset('home/js/fancybox/helpers/jquery.fancybox-thumbs.js') }}"></script>
<script src="{{ asset('home/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('home/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('home/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('home/js/progressbar.min.js') }}"></script>
<script src="{{ asset('home/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('home/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('home/js/jQuery.Brazzers-Carousel.js') }}"></script>
<script src="{{ asset('home/js/plugins.js') }}"></script>
<script src="{{ asset('home/js/main.js') }}"></script>
<script src="{{ asset('js/products.js') }}"></script>
<!-- jQuery plugins/scripts - end -->

</body>
</html>