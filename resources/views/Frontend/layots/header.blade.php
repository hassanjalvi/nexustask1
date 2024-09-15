<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')|FoodeCart</title>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="FoodeCart, HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- FavIcon Link -->
    <link rel="icon" href="{{ asset('Frontend/images/favicon.png') }}" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" type="text/css" href='{{ asset('Frontend/css/bootstrap.min.css') }}'>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Date Picker CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Font Awesome Icon CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/font-awesome.min.css') }}">

    <!-- Slick Slider CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/slick-theme.css') }}">

    <!-- Wow Animation CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/animate.css') }}">

    <!-- Main Style CSS Link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/stastic.css') }}">



</head>


<body>

    <!-- Loader Start -->
    <div class="loader-box">
        <video class="loader" autoplay muted loop>
            <source src="Frontend/images/loader.webm" type="video/webm">
            <!-- You can add additional sources for different video formats if needed -->
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Loader Start -->

    <!-- Header Start -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-8 col-md-3">
                    <!-- Logo Start -->
                    <div class="site-logo">
                        <a href="index.html" title="FoodeCart">
                            <img src="Frontend/images/logo.png" alt="Logo" class="non-sticky" />
                            <img src="Frontend/images/logo-black.png" alt="Logo" class="for-sticky" />
                        </a>
                    </div>
                    <!-- Logo End -->
                </div>
                <div class="col-4 col-md-9">
                    <!-- Menu Start -->
                    <div class="header-menu">
                        <!-- Navigation Menu Start -->
                        <nav class="main-navigation">
                            <button class="toggle-button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <ul class="menu">
                                <li class="menu-item active"><a href="{{ url('/') }}">Home</a></li>
                                <li class="menu-item"><a href="{{ url('/product') }}">Product</a></li>
                                <li class="menu-item"><a href="{{ url('/promo') }}">Promo</a></li>
                                <li class="menu-item"><a href="{{ url('/about') }}">About</a></li>
                                <li class="menu-item"><a href="{{ url('/contact') }}">Contact</a></li>
                                @if (Auth::check())
                                   
                                    <li class="menu-item"><a href="{{ url('/logout') }}">Logout</a></li>
                                @else
                                  
                                    <li class="menu-item"><a href="{{ url('/login') }}">Login</a></li>
                                @endif


                            </ul>
                            <div class="mobile-social-icon">
                                <div class="site-social-icon">
                                    <a href="javascript:void(0)" title="Follow on Facebook"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a>
                                    <a href="javascript:void(0)" title="Follow on Twitter"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a>
                                    <a href="javascript:void(0)" title="Follow on Instagram"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </nav>


                    </div>
                </div>
            </div>
    </header>

    <script>
        $(document).ready(function() {
            var video = $('.loader')[0]; // Get the video element
            var duration = 600000; // Duration in milliseconds (10 minutes)

            function playVideo() {
                video.currentTime = 0; // Reset video to start
                video.play(); // Start playing the video

                setTimeout(function() {
                    playVideo(); // Recursive call after `duration`
                }, duration);
            }

            // Call the function initially
            playVideo();
        });
    </script>
