<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LengKeng</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.kenburnsy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/intro/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800|Oswald:400,700|Dosis:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    {{-- BG --}}
    {{-- <div id="owl-demo" class="bg owl-carousel owl-theme">
        <div class="item"><div class="bg-img-1"></div></div>
        <div class="item"><div class="bg-img-2"></div></div>
    </div> --}}
    <div id="bg" class="bg">
        <img src="http://www.11-76.com/themes/city/img/background/4.jpg" alt="">
        <img src="http://www.11-76.com/themes/city/img/background/1.jpg" alt="">
    </div>
    {{-- SECTION INTRO --}}
    <div class="menu">
        <i class="fa fa-fw fa-bars fa-4x"></i>
    </div>
    <section id="intro">
        <div class="intro">
            <div class="logo"></div>
            <div class="content">
                <h3 class="text-center">WHO I AM?</h3>
                <p class="text-center">LVT</p>
                <div class="content-box center-block">
                    <div id="owl-heading" class="owl-carousel owl-theme">
                        <div class="item"><div class="text-center">LE VINH THIEN</div></div>
                        <div class="item"><div class="text-center">Software Engineering</div></div>
                        <div class="item"><div class="text-center">HUST - K58</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION INTRO --}}

    {{-- JAVASCRIPT --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.kenburnsy.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-heading").owlCarousel({
                navigation : false,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true,
                pagination: false,
                autoPlay: 3000,
                transitionStyle : "goDown"
            });
            $("#bg").kenburnsy({
                fullscreen: true
            });
        });
    </script>
</body>
</html>