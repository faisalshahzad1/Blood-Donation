<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- ======= titles ======= -->
    <title>HaemetAid - A Soulful Way to give Life</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="themewarehouse" />
    <!-- ======= favicon ======= -->
    <link rel="icon" type="image/png" href="{{ URL ::to('public/favicon.ico') }}" />
    <!-- ======= Google Fonts ======= -->
    <!-- Lato+Raleway Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet" />
    <!-- ======= all css ======= -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/bootstrap.min.css')}}" />
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/font-awesome.min.css')}}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/animate.css') }}" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/owl.carousel.min.css') }}" />
    <!-- hover css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/hover.css') }}" />
    <!-- hover css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/lightbox.min.css') }}" />
    <!-- normalize css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/normalize.css') }}" />
    <!-- slicknav css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/slicknav.min.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{URL ::to('public/css/main.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ URL ::to('public/css/responsive.css') }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


<body>
<div class="preloader">
    <div class="wrapper">
        <div class="circle circle-1"></div>
        <div class="circle circle-1a"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
        <h1>Loading&hellip;</h1>
    </div>
</div>


<header class="header-area">
    <!-- top header area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- header contact -->
                    <div class="top-header-info">
                        <i class="fa fa-clock-o"></i> Sun - Sat, 9am - 5pm<span class="seprator">|</span>
                        <a href="#"><i class="fa fa-phone"></i>11-22-33-44-55</a><span class="seprator">|</span>
                        <a href="mailto:believed@gmail.com"><i class="fa fa-envelope"></i>believed@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <!-- header support -->
                    <div class="top-header-info header-right">
                        <a href="#">faq</a><span class="seprator">|</span>
                        <a href="#">contact us</a><span class="seprator">|</span>
                        <a href="#">live chat</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu area -->
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <!-- logo part -->
                    <div class="believed-logo">
                        <a href="{{URL ::to('/')}}"><img src="{{ URL ::to('public/img/logo.png')}}" alt="" /></a>
                    </div>
                    <!-- mobile menu wraper -->
                    <div class="responsive-menu-wrap"></div>
                </div>
                <div class="col-md-10">
                    <!-- menu part -->
                    <nav class="main-menu">
                        <ul class="navigation">
                            <li><a href="{{route('home')}}" class="menu-active">home</a></li>
                            <li><a href="{{ route('about') }}">about us</a></li>
                            <li><a href="#">causes<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="drop-menu">
                                    <li><a href="{{URL :: to('/Causes-no-sidebar')}}">causes no-Sidebar</a></li>
                                    <li><a href="{{URL :: to('/Causes-left-sidebar')}}">causes left</a></li>
                                    <li><a href="{{URL :: to('/Causes-right-sidebar')}}">causes right</a></li>
                                    <li><a href="{{URL :: to('/Single-causes-left')}}">single causes left</a></li>
                                    <li><a href="{{URL :: to('/Single-causes-right')}}">single causes right</a></li>
                                    <li><a href="{{URL :: to('/DonorAcceptor')}}">Donor / Acceptor</a></li>
                                </ul>
                            </li>
                            <li><a href="#">gallery<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="drop-menu">
                                    <li><a href="{{URL :: to('/gallery-style-one')}}">gallery style one</a></li>
                                    <li><a href="{{URL :: to('/gallery-style-two')}}">gallery style two</a></li>
                                    <li><a href="{{URL :: to('/gallery-style-three')}}">gallery style three</a></li>
                                    <li><a href="{{URL :: to('/backend')}}">Backend</a></li>
                                </ul>
                            </li>
                            <li><a href="#">volunteers<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="drop-menu">
                                    <li><a href="{{URL :: to('/Volunteers-3col')}}">volunteers 3col</a></li>
                                    <li><a href="{{URL :: to('/Volunteers-4col')}}">volunteers 4col</a></li>
                                    <li><a href="{{URL :: to('/Single-Volunteers')}}">single volunteers</a></li>
                                    <li><a href="{{URL :: to('/userlist')}}">List</a></li>
                                    <li><a href="{{URL :: to('/singleuser')}}">Single User</a></li>
                                </ul>
                            </li>
                            <li><a href="#">events<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="drop-menu">
                                    <li><a href="{{URL :: to('/events-3col')}}">events 3col</a></li>
                                    <li><a href="{{URL :: to('/events-4col')}}">events 4col</a></li>
                                    <li><a href="{{URL :: to('/events-details')}}">single events</a></li>
                                </ul>
                            </li>
                            <li><a href="#">blog<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="drop-menu">
                                    <li><a href="{{URL :: to('/blog-no-sidebar')}}">blog no-Sidebar</a></li>
                                    <li><a href="{{URL :: to('/blog-left-sidebar')}}">blog left</a></li>
                                    <li><a href="{{URL :: to('/blog-right-sidebar')}}">blog right</a></li>
                                    <li><a href="{{URL :: to('/blog-details-left')}}">single blog left</a></li>
                                    <li><a href="{{URL :: to('/blog-details-right')}}">single blog right</a></li>
                                    <li><a href="{{URL :: to('/nutrient')}}">Nutrients Diet</a></li>
                                    <li><a href="{{URL :: to('/Vitamins')}}">Vitamins</a></li>
                                </ul>
                            </li>
                            <li><a href="{{URL :: to('/Contact')}}">contact us</a></li>
                        </ul>
                    </nav>
                    <!-- donate box -->
                    @if(Auth::guest())
                    <div class="donate-box">
                    @if (Route::has('login'))                
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="donate-btn hvr-shutter-out-horizontal" >Login</a>
                        <!-- <a href="{{ route('register') }}" class="donate-btn hvr-shutter-out-horizontal">Register</a> -->
                    @endauth
               
            @endif

                        <!-- <a href="{{URL :: to('/Login')}}" class="donate-btn hvr-shutter-out-horizontal">Login</a> -->
                    </div>
                    @else
                    <div class="donate-box">
                        <a href="{{URL :: to('/Login')}}" class="donate-btn hvr-shutter-out-horizontal">Logout</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
