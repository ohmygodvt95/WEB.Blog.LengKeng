<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LVT - Introduction</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.kenburnsy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/intro/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400,700,800|Oswald:400,500,600,700|Dosis:400,300,700' rel='stylesheet' type='text/css'>
    <!-- google fonts end -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
    {{-- BG --}}
    <div id="bg" class="bg">
        <img src="{{ asset('images/bg/bg2.jpg') }}">
        <img src="{{ asset('images/bg/bg3.jpg') }}">
        <img src="{{ asset('images/bg/bg1.jpg') }}">
    </div>
    {{-- SECTION INTRO --}}
    <div class="menu">
        <i class="fa fa-bars fa-4x" status = "close"></i>
        <div class="menu-content">
            <ul class="center-block">
                <li><a href="#intro" title="" class="no-redirect menu-active">Home</a></li>
                <li><a href="#about" title="" class="no-redirect">About</a></li>
                <li><a href="#project" title="" class="no-redirect">Project</a></li>
                <li><a href="" title="">Photos</a></li>
                <li><a href="" title="">Blog</a></li>
                <li><a href="" title="">Contact</a></li>
            </ul>
        </div>
    </div>

    <section id="intro" class="enabled" state="enabled">
        <!-- particles start -->
        <div id="particles-holder">
            <canvas id="city-canvas"></canvas>
        </div>
        <!-- particles end -->
        <div class="intro">
            <div class="logo"></div>
            <div class="content">
                <h3 class="text-center">.: WELCOME TO ME :.</h3>
                <h1 class="text-center"><span>LVT</span></h1>
                <div class="content-box center-block">
                    <div id="owl-heading" class="owl-carousel owl-theme">
                        <div class="item"><div class="text-center">LE VINH THIEN</div></div>
                        <div class="item"><div class="text-center">Software Engineer</div></div>
                        <div class="item"><div class="text-center">HUST - K58</div></div>
                    </div>
                </div>
                <h1 class="text-center"><span class="heading-bottom">LVT</span></h1>
            </div>
            <div class="hr center-block"></div>
            <div class="center-block next">
                <i class="fa fa-fw fa-angle-double-down"></i>
            </div>
        </div>
    </section>
    {{-- END SECTION INTRO --}}
    {{-- SECTION ABOUT --}}
    <section id="about" class="disabled" state="disabled">
        <div class="container">
            <h1 class="text-center heading">About</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
    </section>
    {{-- SECTION PROJECT --}}
    <section id="project" class="disabled" state="disabled">
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div><div class="container">
            <h1 class="text-center heading">PROJECT</h1>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>

    </section>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.kenburnsy.js') }}"></script>
    <script src="{{ asset('js/particles-light.js') }}"></script>
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
            function menu_open () {
                $('.menu .menu-content').css('transform', 'scale(1)');
                $('.menu i').attr('status', 'open');
                $('.menu i').attr('class', 'fa fa-close fa-4x');
            }
            function menu_close () {
                $('.menu .menu-content').css('transform', 'scale(0)');
                $('.menu i').attr('status', 'close');
                $('.menu i').attr('class', 'fa fa-bars fa-4x');
            }
            $('.menu i').click(function(event) {
                var status = $(this).attr('status');
                switch(status) {
                    case 'close':
                        menu_open();
                        break;
                    case 'open':
                        menu_close();
                        break;
                }
            });
            $('.menu .menu-content ul li a.no-redirect').click(function(event) {
                $('.menu .menu-content ul li a').removeClass('menu-active');
                $(this).addClass('menu-active')
                var target = $(this).attr('href');
                var enabled = "#" + $('section[state=enabled]').attr('id');
                if(target == enabled) {
                    menu_close();
                    return;
                }
                $('section[state=enabled]').css('transform', 'scale(0)');
                setTimeout( function() {
                    $("section[state=enabled]").css('display','none');
                    $('section[state=enabled]').attr('state', 'disabled');
                    setTimeout( function() {
                        $('section' + target).css('display', 'block');
                            setTimeout( function() {
                                $('section' + target).css('transform', 'scale(1)');
                                $('section' + target).attr('state', 'enabled');
                                menu_close();
                                }, 0);
                        }, 0);
                    }, 350);
            });
        });
    </script>
</body>
</html>