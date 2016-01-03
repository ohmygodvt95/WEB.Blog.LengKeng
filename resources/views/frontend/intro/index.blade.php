<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="vi" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name="description" content="HOME | Welcome to my personal website - I'm Le Vinh Thien(LVT), student in  Hanoi University of Science and Technology - Viet Nam. I'm a Software Engineer." />
    <meta name="keywords" content="Le Vinh Thien, LVT, LengKeng, vinhthien, Home, vinhthien.name.vn, student, software engineer, university, personal website" />
    {{-- fb --}}
    <meta property="og:title" content="HOME | Le Vinh Thien - Personal website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{$_SERVER['SERVER_NAME']}}" />
    <meta property="og:image" content="{{ asset('images/bg/bg2.jpg') }}" />
    <meta property="og:description" content="HOME | Welcome to my personal website - I'm Le Vinh Thien(LVT), student in  Hanoi University of Science and Technology - Viet Nam. I'm a Software Engineer." />
    <meta property="og:site_name" content="HOME | Le Vinh Thien - Personal website" />
    <meta property="fb:admins" content="ohmygodvt95" />
    {{-- twitter --}}
    <meta name="twitter:card" content="HOME | Welcome to my personal website - I'm Le Vinh Thien">
    <meta name="twitter:site" content="@ohmygodvt95">
    <meta name="twitter:title" content="HOME | Le Vinh Thien - Personal website">
    <meta name="twitter:description" content="HOME | Welcome to my personal website - I'm Le Vinh Thien(LVT), student in  Hanoi University of Science and Technology - Viet Nam. I'm a Software Engineer.">
    <meta name="twitter:creator" content="@ohmygodvt95">
    {{-- LINK --}}
    <link rel="canonical" href="{{$_SERVER['SERVER_NAME']}}"/>
    <title>HOME | Le Vinh Thien - Personal website</title>
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/preload.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.kenburnsy.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/intro/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,400,700,800|Oswald:400,500,600,700|Dosis:400,300,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
    {{-- PRELOADER --}}
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>
    {{-- BG --}}
    <div id="bg" class="bg">
        <img src="{{ asset('images/bg/bg2.jpg') }}">
        <img src="{{ asset('images/bg/bg3.jpg') }}">
        <img src="{{ asset('images/bg/bg1.jpg') }}">
    </div>
    <h1 class="hidden">HOME | Welcome to my personal website</h1>
    {{-- SECTION INTRO --}}
    <div class="menu">
        <i class="fa fa-bars fa-4x" status = "close"></i>
        <div class="menu-content">
            <ul class="center-block">
                <li><a href="#intro" title="Home" class="no-redirect menu-active">Home</a></li>
                <li><a href="#about" title="About" class="no-redirect">About</a></li>
                <li><a href="#project" title="Project" class="no-redirect">Project</a></li>
                <li><a href="" title="">Photos</a></li>
                <li><a href="" title="">Blog</a></li>
                <li><a href="" title="">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- particles start -->
    <div id="particles-holder">
    </div>
    <!-- particles end -->
    <section id="intro" class="enabled" state="enabled" style="opacity: 1">

        <div class="intro">
            <div class="logo"></div>
            <div class="content">
                <h3 class="text-center">.: WELCOME TO ME :.</h3>
                <h1 class="text-center" title="Le Vinh Thien"><span>LVT</span></h1>
                <div class="content-box center-block">
                    <div id="owl-heading" class="owl-carousel owl-theme">
                        <div class="item"><div class="text-center">LE VINH THIEN</div></div>
                        <div class="item"><div class="text-center">Software Engineer</div></div>
                        <div class="item"><div class="text-center">HUST - K58</div></div>
                    </div>
                </div>
                <h1 class="text-center" title="Lê Vĩnh Thiện"><span class="heading-bottom">LVT</span></h1>
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
            <h2 class="text-center heading">About</h2>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
    </section>
    {{-- SECTION PROJECT --}}
    <section id="project" class="disabled" state="disabled">
        <div class="container">
            <h2 class="text-center heading">PROJECT</h2>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h2 class="text-center heading">PROJECT</h2>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>
        <div class="container">
            <h2 class="text-center heading">PROJECT</h2>
            <h4 class="text-center sub-heading">Lorem ipsum Irure occaecat laboris dolore minim ut.</h4>
        </div>

    </section>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.kenburnsy.js') }}"></script>
    <script src="{{ asset('js/jquery.particleground.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#particles-holder').particleground({
                dotColor: '#fff',
                lineColor: '#fff'
            });

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
                $('.menu .menu-content').css('display', 'block');
                setTimeout(function() {
                    $('.menu i').attr('status', 'open');
                    $('.menu i').attr('class', 'fa fa-close fa-4x');
                    $('.menu .menu-content').css({'opacity': 1, 'transform': 'scale(1)'});
                },10);
            }
            function menu_close () {
                $('.menu .menu-content').css({'opacity': 1, 'transform': 'scale(0.7)'});
                setTimeout(function() {
                    $('.menu .menu-content').css('display', 'none');
                    $('.menu i').attr('status', 'close');
                    $('.menu i').attr('class', 'fa fa-bars fa-4x');
                }, 250);
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
                $('section[state=enabled]').css({ 'opacity': 0, 'transform': 'scale(0.8)'});
                setTimeout( function() {
                    $("section[state=enabled]").css({'display': 'none'});
                    $('section[state=enabled]').attr('state', 'disabled');
                    setTimeout( function() {
                        $('section' + target).css('display', 'block');
                            setTimeout( function() {
                                $('section' + target).css({'opacity': 1, 'transform': 'scale(1)'});
                                $('section' + target).attr('state', 'enabled');
                                menu_close();
                                $(document).scrollTop(0);
                                }, 10);
                        }, 10);
                    }, 250);
            });
        });
    </script>
    <script>
        $(window).load(function() {
            $("#loading").fadeOut(1000);
        });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71954602-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>